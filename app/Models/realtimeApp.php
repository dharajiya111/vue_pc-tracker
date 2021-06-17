<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class realtimeApp extends Model
{
    protected $table = 'tbl_real_time_app';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function getRealtimeAppCountByHid($hid): int
    {
        try {
            $result = $this->where('hardware_id',$hid)->count();
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('realtimeAppModel Error',['getRealtimeAppCountByHid'=> $ex->getMessage()]);
            return 0;
        }
    }
}
