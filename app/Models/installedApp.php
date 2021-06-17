<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class installedApp extends Model
{
    protected $table = 'tbl_installed_app';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function getInstalledAppCountByHid($hid): int
    {
        try {
            $result = $this->where('hardware_id',$hid)->count();
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('installedAppModel Error',['getInstalledAppCountByHid'=> $ex->getMessage()]);
            return 0;
        }

    }
}
