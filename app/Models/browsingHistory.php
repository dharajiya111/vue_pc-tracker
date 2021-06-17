<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class browsingHistory extends Model
{
    protected $table = 'tbl_browsing_history_with_time';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function getBrowsHistoryCountByHid($hid){
        try {
            $result = $this->where('hardware_id',$hid)->count();
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('browsesinHistoryModel Error',['getBrowsHistoryCountByHid'=> $ex->getMessage()]);
            return 0;
        }
    }
}
