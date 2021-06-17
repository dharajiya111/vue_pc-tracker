<template>
    <div class="container-fluid" style="margin-top: 30px;">
        <div class="row">
            <div class="col-lg-12" >
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">Device Details Data</h5>
                    </div>
                    <div class="card-body block-el-block-web-classification">
                        <div class="table-responsive m-b-30">
                            <table class="table ">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>hardware_id </th>
                                    <th>email_id</th>
                                    <th>pc_name</th>
                                    <th>osversion</th>
                                    <th>lastonline</th>
                                    <th>pc_timezone</th>
                                    <th>cur_ip</th>
                                    <th>software_version</th>
                                    <th>created_at</th>
                                    <th>status</th>
                                </tr>
                                </thead>
                                <tbody v-for="val in values" :key="val.id">
                                <td>{{val.id}}</td>
                                <td>{{val.hardware_id }}</td>
                                <td>{{val.email_id}}</td>
                                <td>{{val.pc_name}}</td>
                                <td>{{val.osversion}}</td>
                                <td>{{val.lastonline}}</td>
                                <td>{{val.pc_timezone}}</td>
                                <td>{{val.cur_ip}}</td>
                                <td>{{val.software_version}}</td>
                                <td>{{val.created_at}}</td>
                                <td>{{val.status}}</td>
                                <tr>
                                    <td><button v-on:click="count(val.hardware_id)" class="btn btn-outline-success btn-sm">Count</button></td>
                                    <td><button v-on:click="active('active',val.hardware_id)" class="btn btn-outline-primary btn-sm">Active</button>
                                    <button v-on:click="disable('disable',val.hardware_id)" class="btn btn-outline-warning btn-sm">Disable</button>
                                    <button v-on:click="permanentDisable('permanent disable',val.hardware_id)" class="btn btn-outline-danger btn-sm">Permanent Disable</button></td>
                                    <td><button v-on:click="debudStart('enable',val.hardware_id)" class="btn btn-outline-success btn-sm">Debug Start</button></td>
                                    <td><button v-on:click="debugStop('disable',val.hardware_id)" class="btn btn-outline-danger btn-sm">Debug Stop</button></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "showDevice",

    data() {
        return {
            values:{},
        }
    },
    mounted() {
        this.showData();
    },
    methods:{
        showData(){
            var currentPath = window.location.pathname;
            currentPath = currentPath.split('/');
            let email = currentPath[2];

            this.axios.get('http://127.0.0.1:8000/api/show/device/details/'+email)
                .then(response=>{
                    this.values=response.data.data
            })
            .catch(error =>{
                this.values=error.response.data
            })
        },
        count(h_id) {
           this.$router.push('/count/'+h_id)
        },
        active(status,hid){
            this.axios.put('http://127.0.0.1:8000/api/device/status/check/byHid',{status:status,hid:hid})
            .then(response =>{
                this.values=response.data.data
                alert("success active")
                this.showData();
            })
            .catch(error=>{
                this.values=error.response.data
                alert("already active")
                this.showData();
            })
        },
        disable(status,hid){
            this.axios.put('http://127.0.0.1:8000/api/device/status/check/byHid',{status:status,hid:hid})
            .then(response =>{
                this.values=response.data.data
                alert("success disable")
                this.showData();
            })
            .catch(error=>{
                this.values=error.response.data
                alert("already disable")
                this.showData();
            })
        },
        permanentDisable(status,hid) {
            this.axios.put('http://127.0.0.1:8000/api/device/status/check/byHid',{status:status,hid:hid})
            .then(response =>{
                this.values=response.data.data
                alert("success permanentDisable")
                this.showData();
            })
            .catch(error=>{
                this.values=error.response.data
                alert("already permanentDisable")
                this.showData();
            })
        },
        debudStart(status,hid){
            this.axios.post('http://127.0.0.1:8000/api/device/debug/check/byHid',{status:status,hid:hid})
            .then(response=>{
                this.values=response.data.data
                alert("Device Debug Start")
                this.showData();
            })
            .catch(error=>{
                this.values=error.response.data
                alert("Device Debug already Start ")
                this.showData();
            })
        },
        debugStop(status,hid){
            this.axios.post('http://127.0.0.1:8000/api/device/debug/check/byHid',{status:status,hid:hid})
                .then(response=>{
                    this.values=response.data.data
                    alert("Device Debug Stop")
                    this.showData();
                })
                .catch(error=>{
                    this.values=error.response.data
                    alert("Device Debug not Start ")
                    this.showData();
                })
        }
    }

}
</script>
