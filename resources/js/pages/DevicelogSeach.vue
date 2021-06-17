<template>
    <div class="container-fluid" style="padding-top:20px ">
        <div class="container-fluid">
            <div class="row align-items-center">
                <form id="filterUser">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label">Hardware Id</label>
                                <input class="form-control form-control-sm" id="hid" type="text" />
                                <div class="form-group m-t-35" style="margin-bottom: 2rem;">
                                    <button v-on:click="deviceLog()"  type="button" class="btn btn-outline-primary btn-sm">search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card m-b-30">
                            <div class="card-header">
                                <h5 class="card-title">Device Log</h5>
                            </div>
                            <div class="card-body block-el-block-web-classification">
                                <div class="table-responsive m-b-30">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">physical_hardware_id</th>
                                            <th scope="col">log_level</th>
                                            <th scope="col">logs</th>
                                            <th scope="col">create_at</th>
                                            <th scope="col">timestmp</th>
                                        </tr>
                                        </thead>
                                        <tbody v-for="val in values" :key="val.id">
                                        <td>{{val.id}}</td>
                                        <td>{{val.physical_hardware_id}}</td>
                                        <td>{{val.log_level}}</td>
                                        <td>{{val.logs}}</td>
                                        <td>{{val.create_at}}</td>
                                        <td>{{val.timestmp}}</td>
                                        </tbody>
                                    </table>
                                </div>
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

    name: "DevicelogSearch",
    data() {
        return {
            values:{},
        }
    },
    methods:{
        deviceLog(){
            let hid = $('#hid').val();
            this.axios.post('http://127.0.0.1:8000/api/device/logs/search',{hid:hid})
            .then(response =>{
                this.values=response.data.data
                // console.log(response.data.data)
            })
            .catch(error => {
                this.values=error.response.data
            })
        }
    }
}
</script>
