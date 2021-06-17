<template>
    <div  class="container-fluid" style="margin-top: 75px;">
        <div class="row">
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Screenshot</p>
                                <h5  class="mb-0"> {{screenshot}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">App</p>
                                <h5  class="mb-0">{{app}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Installed App</p>
                                <h5  class="mb-0">{{installedApp}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">App Usage</p>
                                <h5  class="mb-0">{{app_usage}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Attendance</p>
                                <h5  class="mb-0">{{attendance}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Block Website</p>
                                <h5  class="mb-0">{{blockWebsite}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Browsing History</p>
                                <h5  class="mb-0">{{browsingHistory}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Config</p>
                                <h5  class="mb-0">{{config}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Device Debug</p>
                                <h5  class="mb-0">{{deviceDebug}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Device Logs</p>
                                <h5  class="mb-0">{{deviceLogs}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Installed App</p>
                                <h5  class="mb-0">{{installedApp}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Pc Device</p>
                                <h5  class="mb-0">{{pcDevies}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 50px;">
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Productivity</p>
                                <h5  class="mb-0">{{productivity}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Real Time App</p>
                                <h5  class="mb-0">{{realtimeApp}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Real Time Browser</p>
                                <h5  class="mb-0">{{realtimeBrowser}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Storage Info</p>
                                <h5  class="mb-0">{{storageInfo}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Sys Information</p>
                                <h5  class="mb-0">{{sysInformation}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-xl-2 " >
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Zip Datastore</p>
                                <h5  class="mb-0">{{zipDatastore}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name:"count",

    data(){
        return{
            screenshot:'',
            app_installed:'',
            app:'',
            app_usage:'',
            blockWebsite:'',
            browsingHistory:'',
            config:'',
            deviceDebug:'',
            deviceLogs:'',
            installedApp:'',
            pcDevies:'',
            productivity:'',
            realtimeApp:'',
            realtimeBrowser:'',
            storageInfo:'',
            sysInformation:'',
            zipDatastore:'',
            attendance:'',

        }
    },
    mounted() {
        this.count()
    },
    methods:{
        count()
        {
            var currentPath = window.location.pathname;
            currentPath = currentPath.split('/');
            let hid = currentPath[2];
            this.axios.get('http://127.0.0.1:8000/api/device/details/byHid/'+hid)
            .then(response =>{
                    // console.log(response.data.data)
                this.screenshot=response.data.data.screenshot
                this.app_installed=response.data.data.app_installed
                this.app=response.data.data.app
                this.app_usage=response.data.data.app_usage
                this.blockWebsite=response.data.data.blockWebsite
                this.browsingHistory=response.data.data.browsingHistory
                this.config=response.data.data.config
                this.deviceDebug=response.data.data.deviceDebug
                this.deviceLogs=response.data.data.deviceLogs
                this.installedApp=response.data.data.installedApp
                this.pcDevies=response.data.data.pcDevies
                this.productivity=response.data.data.productivity
                this.realtimeApp=response.data.data.realtimeApp
                this.realtimeBrowser=response.data.data.realtimeBrowser
                this.storageInfo=response.data.data.storageInfo
                this.sysInformation=response.data.data.sysInformation
                this.zipDatastore=response.data.data.zipDatastore
                this.attendance=response.data.data.attendance
            })
            .catch(error =>{

            })

        }
    },
}
</script>
