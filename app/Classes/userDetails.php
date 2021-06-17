<?php

namespace App\Classes;

use App\Models\users;
use App\Models\pcDevies;
use App\Models\deviceLogs;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Log;

class userDetails
{
    private $users,$pcDevies,$deviceLogs;


    public function __construct(users $users,pcDevies $pcDevies,deviceLogs $deviceLogs){
        $this->users = $users;
        $this->pcDevies =$pcDevies;
        $this->deviceLogs=$deviceLogs;
    }
    public function userSearch($email_id){
        try{
            $result = $this->users->userSearch($email_id);
            if (isset($result) && !empty($result)){
                return response()->json(['status' => true,'data' => $result])->setStatusCode(200);
            }
            return response()->json(['status' => false, 'message' => trans('No Data Found ')])->setStatusCode(400);
        } catch (\Exception $ex){
            Log::info('usersClasses Error', ['getUsersDetails' => $ex->getMessage(), 'line' => $ex->getLine()]);
            Log::critical('usersClasses Error', ['getUsersDetails' => $ex->getMessage(), 'line' => $ex->getLine()]);
            return response()->json(['status' => false, 'message' => trans('internal_server_error')])->setStatusCode(500);
        }
    }
    public function GetTotalCount(){
        try {
            $result = [
                'register' => 0,
                'download' => 0,
                'device' => 0,
            ];
            $result['register']=$this->users->totalRegisterCount();
            $result['download']=$this->users->totalDownloadCount();
            $result['device']=$this->pcDevies->totalDeviceCount();
            if(isset($result) && !empty($result)){
                return response()->json(['status' => true,'message' => trans('record retrieved success'),'data' => $result])->setStatusCode(200);
            }
            return response()->json(['status' => false,'message' => trans('No Data Found ')])->setStatusCode(400);
        }catch (\Exception $ex){
            Log::critical('dashboardClasses Error', ['getCountRegister' => $ex->getMessage()]);
            Log::info('dashboardClasses Error', ['getCountRegister' => $ex->getMessage()]);
            return response()->json(['status' => false, 'message' => 'error while get count'])->setStatusCode(500);
        }
    }
    public function DeviceLogSearch($hid){
        try {

            $result=$this->deviceLogs->DeviceLogSearch($hid);


            if(isset($result) && !empty($result)){
                return response()->json(['status' => true,'message' => trans('record retrieved success'),'data' => $result])->setStatusCode(200);
            }
            return response()->json(['status' => false,'message' => trans('No Data Found')])->setStatusCode(400);

        }catch (\Exception $ex)
        {
            Log::info('deviceClasses Error', ['DeviceLogSearch' => $ex->getMessage(), 'line' => $ex->getLine()]);
            Log::critical('deviceClasses Error', ['DeviceLogSearch' => $ex->getMessage(), 'line' => $ex->getLine()]);
            return response()->json(['status' => false, 'message' => trans('internal_server_error')])->setStatusCode(500);
        }
    }
    public function showDeviceDetail($email_id)
    {
        try {
            $result = $this->pcDevies->showDeviceDetail($email_id);
            if(isset($result) && !empty($result)){

                return response()->json(['status' => true,'message' => trans('record retrieved success'),'data' => $result])->setStatusCode(200);
            }
            return response()->json(['status' => false,'message' => trans('No Data Found ')])->setStatusCode(400);

        }catch (\Exception $ex){
            Log::info('deviceClasses Error',['showDeviceDetail' => $ex->getMessage(),'line' => $ex->getLine()]);
            Log::critical('deviceClasses Error',['showDeviceDetail' => $ex->getMessage(),'line' => $ex->getLine()]);
            return response()->json(['status' => false,'message' => trans('internal_server_error') ])->setStatusCode(500);
        }
    }
    public function userStatusCheck($email_id, $account_status)
    {
        try{
            if ($this->users->userStatusCheck($email_id, $account_status)){

                return response()->json(['status' => true, 'message' => trans('success')])->setStatusCode(200);
            }
            return response()->json(['status' => false, 'message' => trans('error')])->setStatusCode(400);
        } catch (\Exception $ex){
            Log::info('usersClasses Error', ['getUsersDetails' => $ex->getMessage(), 'line' => $ex->getLine()]);
            Log::critical('usersClasses Error', ['getUsersDetails' => $ex->getMessage(), 'line' => $ex->getLine()]);
            return response()->json(['status' => false, 'message' => trans('internal_server_error')])->setStatusCode(500);
        }
    }
}
