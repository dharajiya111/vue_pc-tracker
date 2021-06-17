<template>
    <div class="d-flex" id="wrapper" style="margin-left:-15px;">
        <div class="bg-light border-right" id="sidebar-wrapper" >
            <img src="https://cdn.pc-tracker.com/images/logo/logo.png" alt="" height="100px" width="200px">
            <div class="list-group list-group-flush">
                    <router-link to="/dashboard" class="list-group-item list-group-item-action">dashboard</router-link>
                    <router-link to="/UserSearch" class="list-group-item list-group-item-action">User Search</router-link>
                    <router-link to="/DevicelogSeach" class="list-group-item list-group-item-action">Devicelog Search</router-link>
            </div>
        </div>
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                <button class="btn btn-outline-primary btn-sm" id="menu-toggle">Toggle Menu</button>
                <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </nav>
            <div class="container-fluid">
                <router-view></router-view>
            </div>
        </div>
    </div>
</template>
<script>

import 'bootstrap/dist/css/bootstrap.min.css';
import 'bootstrap/dist/js/bootstrap.min.js';
//jquery, popper.js libraries for bootstrap
import 'jquery/dist/jquery.min.js';
import 'popper.js/dist/umd/popper.min.js'
import $ from 'jquery';
export default {
    mounted() {
        // Sidebar Toggle Menu Click
        $("#menu-toggle").click(function(e) {
            e.preventDefault();

            $("#wrapper").toggleClass("toggled");
        });
    }
}
</script>
