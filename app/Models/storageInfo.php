<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class storageInfo extends Model
{
    protected $table = 'tbl_storage_info';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function getStorageInfoCountByHid($hid): int
    {
        try {
            $result = $this->where('hardware_id',$hid)->count();
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('storageInfoModel Error',['getStorageInfoCountByHid'=> $ex->getMessage()]);
            return 0;
        }
    }
}
