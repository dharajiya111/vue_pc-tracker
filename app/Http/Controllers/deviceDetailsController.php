<?php

namespace App\Http\Controllers;

use App\Classes\deviceDetails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class deviceDetailsController extends Controller
{
    private $deviceDetails;
    public function __construct(deviceDetails $deviceDetails){
        $this->deviceDetails=$deviceDetails;
    }
    public function showDeviceDetailByHid($hid){
        $validator = Validator::make( [
            'hardware_id ' => 'required',
        ],[
            'hardware_id.required' => 'email id is required',
        ]);
        if($validator->fails()){
            $error = $validator->errors()->first();
            return response()->json(['status'=> false,'message' => $error])->setStatusCode(400);
        }else{
            return $this->deviceDetails->showDeviceDetailByHid($hid);
        }
    }
    public function DeviceStatusCheck(Request $request){
        $validator = Validator::make($request->all(),[
            'hid' => 'required',
            'status' => 'required'
        ],[
            'hid.required' => 'hardware id is required',
            'status.required' => 'status is required',
        ]);
        if($validator->fails()){
            $error = $validator->errors()->first();
            return response()->json(['status'=> false,'message' => $error])->setStatusCode(400);
        }else {
            return $this->deviceDetails->DeviceStatusCheck($request->hid,$request->status);
        }
    }
    public function DeviceDebug(Request $request){
        $validator=Validator::make($request->all(),[
            'hid' => 'required',
            'status' => 'required'
        ],[
            'hid.required' => 'hardware id is required',
            'status.required' => 'status is required',
        ]);
        if($validator->fails()){
            $error = $validator->errors()->first();
            return response()->json(['status'=> false,'message' => $error])->setStatusCode(400);
        }
        else{
            return $this->deviceDetails->DeviceDebug($request->hid,$request->status);
        }
    }
}
