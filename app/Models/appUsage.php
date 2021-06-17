<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class appUsage extends Model
{
    protected $table = 'tbl_app_usage';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function getAppUsageCountByHid($hid){
        try{
            $result = $this->where('hardware_id',$hid)->count();
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('appUsageModel Error',['getAppUsageCountByHid'=> $ex->getMessage()]);
            return 0;
        }

    }
}
