<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class deviceDebug extends Model
{
    protected $table = 'tbl_device_debug';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function getDeviceDebugCountByHid($hid): int
    {
        try {
            $result = $this->where('physical_hardware_id',$hid)->count();
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('deviceDebugModel Error',['getDeviceDebugCountByHid'=> $ex->getMessage()]);
            return 0;
        }

    }
    public function DeviceDebug($hid,$status){
        try {
            if ($status == 'enable') {
                $result =$this->where('physical_hardware_id', $hid)
                    ->where('is_enable','enable')
                    ->count();
                if (!$result){
                    $this->insert(
                        array(
                            'physical_hardware_id' => $hid,
                            'is_enable' => $status
                        ));
                    return ["status" => true, "message" => "Device Debug is enable.."];
                } else {
                    return ["status" => false, "message" => "Device Debug already enable.."];
                }
            }
            if ($status =='disable') {
                $result =$this->where('physical_hardware_id',$hid)
                    ->count();
                if ($result) {
                    $this->where("physical_hardware_id",$hid)
                        ->delete();
                    return ["status" => true, "message" => "Device Debug is Stop.."];
                } else {
                    return ["status" => false, "message" => "Device Debug Not Enable"];
                }
            }
            if (isset($result) && !empty($result)){
                return $result;
            } else {
                return ['status' => false, 'message' => "Not Start debug"];
            }
        } catch (QueryException $ex){
            Log::info('deviceDebugModel Error', ['getDeviceDebugCountByHid' => $ex->getMessage()]);
        }
    }
}
