<template>
    <div class="container-fluid" style="padding-top:20px ">
        <div class="container-fluid">
            <div class="row align-items-center">
                <form id="filterUser">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="control-label">User Email</label>
                                <input class="form-control form-control-sm" id="email" type="text" />
                                <div class="form-group m-t-35" style="margin-bottom: 2rem;">
                                    <button v-on:click="searchuser()"  type="button" class="btn btn-outline-primary btn-sm">search</button>
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
                                <h5 class="card-title">User Search Data</h5>
                            </div>
                            <div class="card-body block-el-block-web-classification">
                                <div class="table-responsive m-b-30">
                                    <table class="table ">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Mobile No</th>
                                            <th scope="col">First Name</th>
                                            <th scope="col">Last Name</th>
                                            <th scope="col">Client Ip</th>
                                            <th scope="col">last_update</th>
                                            <th scope="col">last_login</th>
                                            <th scope="col">timezone</th>
                                            <th scope="col">download_count</th>
                                            <th scope="col">status</th>
                                        </tr>
                                        </thead>
                                        <tbody v-for="item in items" :key="item.id">
                                            <td>{{item.uid}}</td>
                                            <td>{{item.email_id}}</td>
                                            <td>{{item.mobile_no}}</td>
                                            <td>{{item.first_name}}</td>
                                            <td>{{item.last_name}}</td>
                                            <td>{{item.client_ip}}</td>
                                            <td>{{item.last_update}}</td>
                                            <td>{{item.last_login}}</td>
                                            <td>{{item.timezone}}</td>
                                            <td>{{item.download_count}}</td>
                                            <td><span class="badge badge-primary">{{item.account_status}}</span></td>
                                            <td><button v-on:click="showDetail('')" type="button" class="btn btn-outline-primary btn-sm">Show Device</button></td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid" style="margin-top: 50px">
            <div class="col-lg-12" id="search_data">
                <div class="card m-b-30">
                    <div class="card-header">
                        <h5 class="card-title">User Account Status </h5>
                    </div>
                    <div class="card-body block-el-block-web-classification">
                        <div class="table-responsive m-b-30">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th scope="col">Email</th>
                                    <th scope="col">Account Status</th>
                                </tr>
                                </thead>
                                <tbody v-for="item in items" :key="item.id">
                                    <td>{{item.email_id}}</td>
                                    <td>{{item.account_status}}</td>
                                        <td><button v-on:click="active('active',item.email_id)" class="btn btn-outline-primary btn-sm">Active</button></td>
                                        <td><button v-on:click="disable('disable',item.email_id)" class="btn btn-outline-warning btn-sm">Disable</button></td>
                                        <td><button v-on:click="permanentDisable('permanent disable',item.email_id)" class="btn btn-outline-danger btn-sm">Permanent Disable</button></td>
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
    name: "UserSearch",
    data() {
        return {
            items:{},
        }
    },
    methods:{
        searchuser()
        {
            let email  = $('#email').val();
            this.axios.post('http://127.0.0.1:8000/api/user/search/',{email:email})
                .then(response =>{
                    this.items = response.data.data
                })
                .catch(error =>{
                    this.items = error.response.data
                });
        },
        showDetail()
        {
            let email  = $('#email').val();
            this.$router.push('/showDevice/'+email)
        },
        active(status,email)
        {
            this.axios.put('http://127.0.0.1:8000/api/user/status/check/byEmail/',{status:status,email:email})
            .then(response=>{
                this.items=response.data.data
                alert('Success Active')
                this.searchuser()
            })
            .catch(error=>{
                this.items=error.respose.data
                alert('Already Active')
                this.searchuser()
            })
        },
        disable(status,email)
        {
            this.axios.put('http://127.0.0.1:8000/api/user/status/check/byEmail/',{status:status,email:email})
                .then(response=>{
                    this.items=response.data.data
                    alert('Success Disable')
                    this.searchuser()
                })
                .catch(error=>{
                    this.items=error.respose.data
                    alert('Already Disable')
                    this.searchuser()
                })
        },
        permanentDisable(status,email)
        {
            this.axios.put('http://127.0.0.1:8000/api/user/status/check/byEmail/',{status:status,email:email})
                .then(response=>{
                    this.items=response.data.data
                    alert('Success PermanentDisable')
                    this.searchuser()
                })
                .catch(error=>{
                    this.items=error.respose.data
                    alert('Already PermanentDisable')
                    this.searchuser()
                })
        }
    }
}
</script>
