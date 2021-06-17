<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class zipDatastore extends Model
{
    protected $table = 'tbl_zip_datastore';
    public $timestamps = false;
    protected $primaryKey = 'sha1hash ';
    public $incrementing = false;

    public function getZipDatastoreCountByHid($hid): int
    {
        try {
            $result = $this->where('hardware_id',$hid)->count();
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('zipDatastoreModel Error',['getZipDatastoreCountByHid'=> $ex->getMessage()]);
            return 0;
        }
    }
}
