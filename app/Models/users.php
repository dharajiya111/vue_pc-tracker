<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class users extends Model
{
    protected $table = 'tbl_users';
    public $timestamps = false;
    protected $primaryKey = 'uid';
    public $incrementing = false;

    public function userSearch($email_id)
    {
        try{
            $result = $this->select('uid','email_id','mobile_no','first_name','last_name','account_status','client_ip','last_update','last_login','timezone','download_count')
                ->where('email_id',$email_id)
                ->get();
            if($result->count()){
                return $result;
            }
            return null;
        }catch (QueryException $ex){
            Log::info('usersModel Error',['userSearch' => $ex->getMessage(),'line' => $ex->getLine()]);
            Log::critical('usersModel Error',['userSearch' => $ex->getMessage(),'line' => $ex->getLine()]);
            return null;
        }
    }
    public function totalRegisterCount(){
        try {
            $result = $this->count();
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('userseModel Error',['totalRegiaterCount'=> $ex->getMessage()]);
            return 0;
        }
    }
    public function totalDownloadCount(){
        try {
            $result = $this->sum('download_count');
            if($result){
                return $result;
            }
            return 0;
        }catch (QueryException $ex){
            Log::info('userseModel Error',['totalDownloadCount'=> $ex->getMessage()]);
            return 0;
        }
    }
    public function userStatusCheck($email_id,$account_status){
        try{
            if($this->where('email_id',$email_id)->update(['account_status'=>$account_status]))
            {
                return true;
            }
            return false;
        }catch (QueryException $ex){
            Log::info('usersModel Error',['userStatusCheck' => $ex->getMessage(),'line' => $ex->getLine()]);
            Log::critical('usersModel Error',['userStatusCheck' => $ex->getMessage(),'line' => $ex->getLine()]);
            return false;
        }
    }
}
