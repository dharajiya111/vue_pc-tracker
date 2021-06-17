<template>
    <div class="container-fluid"   style="margin-top:50px;">
        <div class="row">
            <div class="col-lg-4 col-xl-4">
                <div class="card m-b-30 div_hover">
                   <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Total Users</p>
                                <h5  class="mb-0">{{register}}</h5>
                            </div>
                        </div>
                   </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-4">
                <div class="card m-b-30 div_hover" id="show_user">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Total Download</p>
                                <h5 class="mb-0">{{download}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xl-4">
                <div class="card m-b-30 div_hover" id="show_device">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Total Device</p>
                                <h5 class="mb-0">{{device}}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-xl-4" style="padding-top: 50px;">
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Today Registered Users</p>
                                <h5 class="mb-0">0</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-xl-4" style="padding-top: 50px;">
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Device Not Exist</p>
                                <h5 class="mb-0">0</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-xl-4" style="padding-top: 50px;">
                <div class="card m-b-30 div_hover">
                    <div class="card-body">
                        <div class="media">
                            <span class="align-self-center mr-3 action-icon badge badge-secondary-inverse"><i class="feather icon-folder"></i></span>
                            <div class="media-body">
                                <p class="mb-0">Device Not Exist</p>
                                <h5 class="mb-0">0</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!--            <button type="button" v-on:click="count">count</button>-->
        </div>
    </div>
</template>

<script>
export default {
    name: "Count",

    data() {
        return {
            register:'',
            download:'',
            device:''

        }
    },
    methods:{
        count(){
            this.axios.get('http://127.0.0.1:8000/api/count/show')
            .then(response =>{

                // console.log(response.data.data)
                this.register=response.data.data.register
                this.download=response.data.data.download
                this.device=response.data.data.device
            })
            .catch(error =>{
                 this.item = error.response.data
            })
        }
    },
    mounted() {
        this.count();

    }
}

</script>

<style>

</style>
