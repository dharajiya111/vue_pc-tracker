<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class screenshot extends Model
{
    protected $table = 'tbl_screenshot';
    public $timestamps = false;
    protected $primaryKey = 'id';
    public $incrementing = false;

    public function getScreenshotShotCountByHid($hid): int
    {
        try {
            $result = $this->where('hardware_id',$hid)->count();
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('screenshotModel Error',['getScreenshotShotCountByHid'=> $ex->getMessage()]);
            return 0;
        }
    }
}
