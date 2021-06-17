<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class pcDevies extends Model
{
    protected $table = 'tbl_pc_devies';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function totalDeviceCount()
    {
        try {
            $result = $this->count();
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('pcDeviceModel Error',['totalDeviceCount'=> $ex->getMessage()]);
            return 0;
        }
    }
    public function showDeviceDetail($email_id)
    {
        try{
            $result = $this->select( 'id','hardware_id', 'email_id', 'pc_name', 'pc_user_alias','osversion','userdomainname','lastonline','pc_timezone','cur_ip','uptimeseconds','software_version','created_at' , 'status')
                ->where('email_id',$email_id)
                ->orderBy('id','desc')
                ->get();

            if($result->count()){
                return $result;
            }
            return null;
        }catch (QueryException $ex){
            Log::info('pcDeviceModel Error',['pcDeviceDetail' => $ex->getMessage(),'line' => $ex->getLine()]);
            Log::critical('pcDeviceModel Error',['pcDeviceDetail' => $ex->getMessage(),'line' => $ex->getLine()]);
            return null;
        }
    }
    public function getPcDeviceCountByHid($hid): int
    {
        try {
            $result = $this->where('hardware_id',$hid)->count();
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('pcDeviceModel Error',['getPcDeviceCountByHid'=> $ex->getMessage()]);
            return 0;
        }
    }
    public function DeviceStatusCheck($hardware_id,$status)
    {
        try{
            if($this->where('hardware_id',$hardware_id)->update(['status'=>$status]))
            {
                return true;
            }
            return false;
        }catch (QueryException $ex){
            Log::info('pcDeviceModel Error',['DeviceStatusCheck' => $ex->getMessage(),'line' => $ex->getLine()]);
            Log::critical('pcDeviceModel Error',['DeviceStatusCheck' => $ex->getMessage(),'line' => $ex->getLine()]);
            return false;
        }
    }
}
