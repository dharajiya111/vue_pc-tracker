<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class attendance extends Model
{
    protected $table = 'tbl_attendance';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function getAttendanceCountByHid($hid){
        try {
            $result = $this->where('hardware_id',$hid)->count();
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('attendanceModel Error',['getAttendanceCountByHid'=> $ex->getMessage()]);
            return 0;
        }
    }
}
