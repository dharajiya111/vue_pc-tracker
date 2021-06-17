<?php

namespace App\Http\Controllers;

use App\Classes\userDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class userDetailsController extends Controller
{
    private $userDetails;
    public function __construct(userDetails  $userDetails){
        $this->userDetails = $userDetails;
    }
    public function Search(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
        ],[
            'email.required' => 'email id is required',
        ]);
        if($validator->fails()){
            $error = $validator->errors()->first();
            return response()->json(['status'=> false,'message' => $error])->setStatusCode(400);
        }else{
            return $this->userDetails->userSearch($request->email);
        }
    }
    public function GettotalCount(){
       return $this->userDetails->GetTotalCount();
    }
    public function DeviceLogSearch(Request $request){
        $validator = Validator::make($request->all(), [
            'hid' => 'required',
        ],[
            'hid.required' => 'hardware id is required',
        ]);
        if($validator->fails()){
            $error = $validator->errors()->first();
            return response()->json(['status'=> false,'message' => $error])->setStatusCode(400);
        }else{
            return $this->userDetails->DeviceLogSearch($request->hid);
        }
    }
    public function showDeviceDetail($emailId){
        $validator = Validator::make([
            'email_id' => 'required|email',
        ],[
            'email_id.required' => 'email id is required',
        ]);
        if($validator->fails()){
            $error = $validator->errors()->first();
            return response()->json(['status'=> false,'message' => $error])->setStatusCode(400);
        }else{
            return $this->userDetails->showDeviceDetail($emailId);
        }
    }
    public function userStatusCheck(Request $request){
        $validator = Validator::make($request->all(),[
            'email' => 'required|email',
            'status' => 'required'
        ],[
            'email_id.required' => 'email id is required',
            'account_status.required' => 'account status is required',
        ]);
        if($validator->fails()){
            $error = $validator->errors()->first();
            return response()->json(['status'=> false,'message' => $error])->setStatusCode(400);
        }else{
            return $this->userDetails->userStatusCheck($request->email,$request->status);
        }
    }
}

