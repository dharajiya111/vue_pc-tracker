<?php


namespace App\Classes;


use App\Models\app;
use App\Models\appInstalled;
use App\Models\appUsage;
use App\Models\attendance;
use App\Models\blockWebsite;
use App\Models\browsingHistory;
use App\Models\config;
use App\Models\deviceDebug;
use App\Models\deviceLogs;
use App\Models\installedApp;
use App\Models\pcDevies;
use App\Models\productivity;
use App\Models\realtimeApp;
use App\Models\realtimeBrowser;
use App\Models\screenshot;
use App\Models\storageInfo;
use App\Models\sysInformation;
use App\Models\zipDatastore;
use Illuminate\Support\Facades\Log;

class deviceDetails
{
    private $pcDevies;
    private $screenshot;
    private $appInstalled;
    private $app;
    private $appUsage;
    private $attendance;
    private $blockWebsite;
    private $browsingHistory;
    private $config;
    private $deviceDebug;
    private $deviceLogs;
    private $installedApp;
    private $productivity;
    private $realtimeApp;
    private $realtimeBrowser;
    private $storageInfo;
    private $sysInformation;
    private $zipDatastore;

    public function __construct(pcDevies $pcDevies,screenshot $screenshot,appInstalled  $appInstalled,app $app,appUsage $appUsage,attendance $attendance,blockWebsite $blockWebsite,browsingHistory $browsingHistory,config $config,deviceDebug $deviceDebug,deviceLogs $deviceLogs,installedApp $installedApp,productivity $productivity,realtimeApp $realtimeApp,realtimeBrowser $realtimeBrowser,storageInfo $storageInfo,sysInformation $sysInformation,zipDatastore $zipDatastore)
    {
        $this->pcDevies = $pcDevies;
        $this->screenshot = $screenshot;
        $this->appInstalled = $appInstalled;
        $this->app = $app;
        $this->appUsage = $appUsage;
        $this->attendance = $attendance;
        $this->blockWebsite = $blockWebsite;
        $this->browsingHistory = $browsingHistory;
        $this->config = $config;
        $this->deviceDebug = $deviceDebug;
        $this->deviceLogs = $deviceLogs;
        $this->installedApp = $installedApp;
        $this->productivity = $productivity;
        $this->realtimeApp = $realtimeApp;
        $this->realtimeBrowser = $realtimeBrowser;
        $this->storageInfo = $storageInfo;
        $this->sysInformation = $sysInformation;
        $this->zipDatastore = $zipDatastore;

    }
    public function showDeviceDetailByHid($hid){
        try {
            $result = [
                'screenshot' => 0,
                'app_installed' => 0,
                'app' => 0,
                'app_usage' => 0,
                'blockWebsite' => 0,
                'browsingHistory' => 0,
                'config' => 0,
                'deviceDebug' => 0,
                'deviceLogs' => 0,
                'installedApp' => 0,
                'pcDevies' => 0,
                'productivity' => 0,
                'realtimeApp' => 0,
                'realtimeBrowser' => 0,
                'storageInfo' => 0,
                'sysInformation' => 0,
                'zipDatastore' => 0,
            ];
            $result['screenshot'] = $this->screenshot->getScreenshotShotCountByHid($hid);
            $result['app_installed'] = $this->appInstalled->getAppInstalledCountByHid($hid);
            $result['app'] = $this->app->getAppCountByHid($hid);
            $result['app_usage'] = $this->appUsage->getAppUsageCountByHid($hid);
            $result['attendance'] = $this->attendance->getAttendanceCountByHid($hid);
            $result['blockWebsite'] = $this->blockWebsite->getBlockWebsiteCountByHid($hid);
            $result['browsingHistory'] = $this->browsingHistory->getBrowsHistoryCountByHid($hid);
            $result['config'] = $this->config->getConfigCountByHid($hid);
            $result['deviceDebug'] = $this->deviceDebug->getDeviceDebugCountByHid($hid);
            $result['deviceLogs'] = $this->deviceLogs->getDeviceLogsCountByHid($hid);
            $result['installedApp'] = $this->installedApp->getInstalledAppCountByHid($hid);
            $result['pcDevies'] = $this->pcDevies->getPcDeviceCountByHid($hid);
            $result['productivity'] = $this->productivity->getProductivityCountByHid($hid);
            $result['realtimeApp'] = $this->realtimeApp->getRealtimeAppCountByHid($hid);
            $result['realtimeBrowser'] = $this->realtimeBrowser->getRealtimeBrowserCountByHid($hid);
            $result['storageInfo'] = $this->storageInfo->getStorageInfoCountByHid($hid);
            $result['sysInformation'] = $this->sysInformation->getSysInformationCountByHid($hid);
            $result['zipDatastore'] = $this->zipDatastore->getZipDatastoreCountByHid($hid);

            if(isset($result) && !empty($result)){
                return response()->json(['status' => true,'message' => trans('record retrieved success'),'data' => $result])->setStatusCode(200);
            }
            return response()->json(['status' => false,'message' => trans('No Data Found ')])->setStatusCode(400);
        }catch (\Exception $ex){
            Log::info('deviceClasses Error',['getDeviceDetails' => $ex->getMessage(),'line' => $ex->getLine()]);
            Log::critical('deviceClasses Error',['getDeviceDetails' => $ex->getMessage(),'line' => $ex->getLine()]);
            return response()->json(['status' => false,'message' => trans('internal_server_error') ])->setStatusCode(500);
        }
    }
    public function DeviceStatusCheck($hardware_id,$status){
        try {
            if($this->pcDevies->DeviceStatusCheck($hardware_id,$status)){
                return response()->json(['status' => true,'message' => trans('success')])->setStatusCode(200);
            }
            return response()->json(['status' => false,'message' => trans('error')])->setStatusCode(400);
        }catch (\Exception $ex){
            Log::info('deviceClasses Error',['showDeviceDetailByHid' => $ex->getMessage(),'line' => $ex->getLine()]);
            Log::critical('deviceClasses Error',['showDeviceDetailByHid' => $ex->getMessage(),'line' => $ex->getLine()]);
            return response()->json(['status' => false,'message' => trans('internal_server_error') ])->setStatusCode(500);
        }
    }
    public function DeviceDebug($hid,$status){
        try {
            $result=$this->deviceDebug->DeviceDebug($hid,$status);
            if(isset($result) && !empty($result)){
                return response()->json(['status' => true,'message' => trans('success'),'data' => $result])->setStatusCode(200);
            }
            return response()->json(['status' => false,'message' => trans('error')])->setStatusCode(400);
        }catch (\Exception $ex){
            Log::info('deviceClasses Error', ['DeviceLogSearch' => $ex->getMessage(), 'line' => $ex->getLine()]);
            Log::critical('deviceClasses Error', ['DeviceLogSearch' => $ex->getMessage(), 'line' => $ex->getLine()]);
            return response()->json(['status' => false, 'message' => trans('internal_server_error')])->setStatusCode(500);
        }
    }
}
