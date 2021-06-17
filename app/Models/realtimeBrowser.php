<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class realtimeBrowser extends Model
{
    protected $table = 'tbl_real_time_browser';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function getRealtimeBrowserCountByHid($hid): int
    {
        try {
            $result = $this->where('hardware_id',$hid)->count();
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('realtimeBrowserModel Error',['getRealtimeBrowserCountByHid'=> $ex->getMessage()]);
            return 0;
        }
    }
}
