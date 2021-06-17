<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class deviceLogs extends Model
{
    protected $table = 'tbl_device_logs';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function DeviceLogSearch($hid){
        try{
            $result = $this->select('id','physical_hardware_id','log_level','logs','create_at','timestmp')
                ->where('physical_hardware_id',$hid)
                ->get();

            if($result->count()){
                return $result;
            }
            return null;
        }catch (QueryException $ex){
            Log::info('deviceLogsModel Error',['DeviceLogSearch' => $ex->getMessage(),'line' => $ex->getLine()]);
            Log::critical('deviceLogsModel Error',['DeviceLogSearch' => $ex->getMessage(),'line' => $ex->getLine()]);
            return null;
        }
    }
    public function getDeviceLogsCountByHid($hid): int
    {
        try {
            $result = $this->where('physical_hardware_id',$hid)->count();
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('deviceLogsModel Error',['getDeviceLogsCountByHid'=> $ex->getMessage()]);
            return 0;
        }

    }
}
