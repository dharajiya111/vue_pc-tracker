<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class blockWebsite extends Model
{
    protected $table = 'tbl_block_website';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function getBlockWebsiteCountByHid($hid){
        try {
            $result = $this->where('hardware_id',$hid)->count();
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('blockWebsiteModel Error',['getBlockWebsiteCountByHid'=> $ex->getMessage()]);
            return 0;
        }
    }
}
