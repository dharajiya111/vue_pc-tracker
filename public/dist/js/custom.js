$(document).ready(function (){

    if (document.location.pathname === "/registerdata")
    {
        getRegister();
    }
    if (document.location.pathname === "/logindata")
    {
        getLogin();
    }
    if (document.location.pathname === "/devicedata")
    {
        getdevice();
    }
    if(document.location.pathname ==="/report")
    {
        report();
    }
    if(document.location.pathname ==="/searchdata")
    {

        fetch_user_data();
    }

    <!--  ----CHART DATA----  -->

    function getRegister()
    {
        //alert("hello");
        var arr_data = [];
        var arr_date = [];
        var total = 0;

        $.ajax({
            url : '/api/registerdata',
            type : "get",
            success : function (data){
                $.each(data, function(key, value){
                    arr_data.push(value.cnt);
                    arr_date.push(value.datadate);
                    total = total+value.cnt;
                });
                $("#total-visitor").html(total)
                getChart(arr_data,arr_date);
            }
        });

    }
    $('#selectchart').on('change',function (){

        alert('chart change')
    });

    function getLogin()
     {
        //alert("hello");
        var arr_data = [];
        var arr_date = [];
        var total = 0;

        $.ajax({
            url : '/api/logindata',
            type : "get",
            success : function (data){
                $.each(data, function(key, value){
                    arr_data.push(value.cnt);
                    arr_date.push(value.datadate);
                    total = total+value.cnt;
                });
                $("#total-login").html(total)
                getChart(arr_data,arr_date);
            }
        });
        $('#selectchart').on('change',function (){

            alert("change chart..")
        });
    }
    function getdevice()
    {
        //alert("hello");
        var arr_data = [];
        var arr_date = [];
        var total = 0;

        $.ajax({
            url : '/api/devicedata',
            type : "get",
            success : function (data){
                $.each(data, function(key, value){
                    arr_data.push(value.cnt);
                    arr_date.push(value.datadate);
                    total = total+value.cnt;

                    });
                $("#total-device").html(total)
                getChart(arr_data,arr_date);
            }
        });
        $('#selectchart').on('change',function (){

            alert("change..chart")
        });
    }

    <!-- -----REPORT FUNCTIONALITY-----  -->

    function report() {

        var arr_data = [];
        var total = 0;

        $.ajax({
            url : '/api/userdata',
            type : "get",
            success : function (data){

                $.each(data, function(key, value){
                   arr_data.push(value.cnt);
                    total =value.cnt;
                });
                $("#totaluser").html(total);

            }
        });

        $.ajax({
            url : '/api/downloaddata',
            type : "get",
            success : function (data){

                $.each(data, function(key, value){

                    arr_data.push(value.cnt);
                    total = value.cnt;
                });
                $("#totaldownload").html(total);

            }
        });

        $.ajax({
            url : '/api/totaldevice',
            type : "get",
            success : function (data){

                $.each(data, function(key, value){

                    arr_data.push(value.cnt);
                    total = value.cnt;
                });
                $("#totaldevice").html(total);

            }
        });

    <!-- SHOW USER_LAST 5 RECORD  -->

        $.ajax({
            url : '/api/user_last_data',
            type : "get",
            success : function (data){
                $.each(data, function(key, value){
                    $('#show_last_user').append(
                        "<tr>"+
                        "<td>"+value.email_id+" </td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td>"+value.timestamp+" </td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td>"+value.timezone+" </td>"+
                        "</tr>"+
                        "<td>-----------------------------------------------------------------------------</td>"
                    );

                });
            }
        });
        <!-- SHOW DEVICE_LAST 5 RECORD  -->

        $.ajax({
            url : '/api/device_last_data',
            type : "get",
            success : function (data){
                $.each(data, function(key, value){
                    $('#show_last_device').append(
                        "<tr>"+
                        "<td>"+value.email_id+" </td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td>"+value.pc_name+" </td>"+
                        "</tr>"+
                        "<tr>"+
                        "<td>"+value.created_at+" </td>"+
                        "</tr>"+
                        "<td>-----------------------------------------------------------------------------</td>"
                    );

                });
            }
        });
    }

    <!--  ----SEARCH FUNCTIONALITY----  -->

    function fetch_user_data()
    {

        Show_User_Data();
        $('#search').on('keyup',function(){
            $("#show_user_data").html('');
            var search_string = $(this).val();
            $('#show_user_all_data').hide();
            $.ajax({
                url : '/api/search_user_data/'+search_string,
                type : 'get',
                success : function (data){
                    $.each(data,function (key,value){

                        if (value.status == 1){
                            var status = "Active";
                            var status_class = "text-success";
                        }
                        if (value.status == 0){
                            var status = "reset";
                            var status_class = "text-primary";
                        }
                        if (value.status == 5){
                            var status = "disable";
                            var status_class = "text-warning";
                        }
                        if (value.status == 10){
                            var status = "permanent disable";
                            var status_class = "text-danger";
                        }



                        $("#show_user_data").append(

                            "<div class='col-md-12 card flex-md-row mb-4 box-shadow h-md-250' >"+
                            "<div class='card-body d-flex show_email flex-column align-items-start'>"+
                            "<p>id :<strong> "+value.uid+"</strong></p>"+
                            "<p>email :<strong id='user_email_id'>"+value.email_id+"</strong></p>"+
                            "<div class='mb-5 text-muted'>"+value.mobile_no+"</div>"+
                            "<h5>"+"first name :"+"<strong>"+value.first_name+"</strong>" +"</h5>"+
                            "<h5>"+"last name :"+"<strong>"+value.last_name+"</strong>" +"</h5>"+
                            "<h5>"+"<span>"+"appkey :"+"</span>"+"<strong>"+ value.appkey +"</strong>"+ "</h5>"+
                            "<h5>"+"<span>"+"timezone :"+"</span>"+"<strong>"+ value.timezone +"</strong>"+ "</h5>"+
                            "<h5>"+"<span>"+"download count :"+"</span>"+"<strong>"+ value.download_count +"</strong>"+ "</h5>"+
                            "<h5>"+"account status :"+"<strong>"+value.account_status+"</strong>" +"</h5>"+
                            "<h5>Status : <strong   class="+ status_class +">" + status +"</strong></h5>" +

                            "</div>"+

                            "<div class='col-md-6 order-md-2 mb-3'>"+
                            "<ul class='list-group mb-3' >"+
                            "<li class='list-group-item d-flex justify-content-between' >"+"<span>"+"client ip :"+"</span>"+"<strong>"+value.client_ip+" </strong>"+"</li>"+
                            "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"timestamp :"+"</span>"+"<strong>"+ value.timestamp+"</strong>"+ "</li>"+
                            "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"last update :"+"</span>"+"<strong>"+ value.last_update+"</strong>"+ "</li>"+
                            "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"last login :"+"</span>"+"<strong>"+ value.last_login+"</strong>"+ "</li>"+
                            "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"remember token :"+"</span>"+"<strong>"+ value.remember_token+"</strong>"+ "</li>"+
                            "<li class='list-group-item d-flex justify-content-between'>" +
                            "<button class='btn btn-success col-sm-2 active' data-useractive="+value.email_id+">Active</button>"+"<br>"+
                            "<button class=' btn btn-primary col-sm-2 reset'   data-userreset="+value.email_id+">Reset</button>"+ "<br>"+
                            "<button class='btn btn-warning col-sm-3 disable' data-userdisable="+value.email_id+">Disable</button>"+"<br>"+
                            "<button class='btn btn-danger col-sm- p_disable' data-userp_disable="+value.email_id+">Parmanent disable</button>"+
                            "</li>"+
                            "</ul>"+
                            "</div>"+
                            "</div>"
                        );

                    });
                }
            });

        });

         <!-- Show Device Data On Click Userdata -->

        $('#show_device_data').hide();


            $('#show_user_data').click(function (){


                $(document).on('click','.show_email',function ()
                {

                    var email_id = $(this).find('#user_email_id').html()

                    $.ajax({
                        url:'/api/search_devicedata/'+email_id,
                        type : 'get',
                        success : function(data){
                            if(data != false)
                            {
                                $('#show_user_data').hide();
                                $('#show_device_data').show();
                                $.each(data,function(key,value){
                                    if (value.status == 1){
                                        var status = "Active";
                                        var status_class = "text-success";
                                    }
                                    if(value.status==0)
                                    {
                                        var status="Reset";
                                        var status_class="text-primary";
                                    }
                                    if(value.status==5)
                                    {
                                        var status="Disable";
                                        var status_class="text-warning";
                                    }
                                    if(value.status==10)
                                    {
                                        var status="permanent disable";
                                        var status_class="text-danger";
                                    }

                                    $('#show_device_data').append(

                                        "<div class='col-md-12 card flex-md-row mb-4 box-shadow h-md-250' >"+
                                        "<div class='card-body d-flex flex-column align-items-start'>"+
                                        "<p>"+value.id+"</p>"+
                                        "<strong id='hardware_id'>"+value.hardware_id+"</strong>"+
                                        "<div class='mb-5 text-muted'>"+value.email_id+"</div>"+
                                        "<h5>"+"pc_name :"+"<strong>"+value.pc_name+"</strong>" +"</h5>"+
                                        "<h5>"+"pc_user_name :"+"<strong>"+value.pc_user_name+"</strong>" +"</h5>"+
                                        "<h5>"+"osversion :"+"<strong>"+value.osversion+"</strong>" +"</h5>"+
                                        "<h5>"+"<span>"+"cur_ip :"+"</span>"+"<strong>"+ value.cur_ip +"</strong>"+ "</h5>"+
                                        "<h5>"+"<span>"+"uptimeseconds :"+"</span>"+"<strong>"+ value.uptimeseconds +"</strong>"+ "</h5>"+
                                        "<h5>"+"<span>"+"software_version :"+"</span>"+"<strong>"+ value.software_version +"</strong>"+ "</h5>"+
                                        "<h5>"+"<span>"+"created_at :"+"</span>"+"<strong>"+ value.created_at +"</strong>"+ "</h5>"+
                                        "<h5>Status :<strong class="+status_class+">"+status +"</strong></h5>"+

                                        "</div>"+

                                        "<div class='col-md-6 order-md-2 mb-3' >"+
                                        "<ul class='list-group d-flex justify-content-between mb-3'>"+
                                        "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"pc_user_alias :"+"</span>"+"<strong>"+value.pc_user_alias+" </strong>"+"</li>"+
                                        "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"is64bit :"+"</span>"+"<strong>"+ value.is64bit+"</strong>"+ "</li>"+
                                        "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"userdomainname :"+"</span>"+"<strong>"+ value.userdomainname+"</strong>"+ "</li>"+
                                        "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"lastonline :"+"</span>"+"<strong>"+ value.lastonline+"</strong>"+ "</li>"+
                                        "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"pc_timezone :"+"</span>"+"<strong>"+ value.pc_timezone+"</strong>"+ "</li>"+
                                        "<li class='list-group-item d-flex justify-content-between'>"+
                                        "<button class=' btn btn-success col-sm-2 active_device' data-devicective="+value.hardware_id+">Active</button>"+
                                        "<button class='btn btn-primary col-sm-2 reset_device' data-devicereset="+value.hardware_id+">Reset</button>"+
                                        "<button class='btn btn-warning col-sm-3 disable_device' data-devicedisable="+value.hardware_id+" >Disable</button>"+
                                        "<button class='btn btn-danger col-sm- p_disable_device' data-devicep_disable="+value.hardware_id+">Parmanent Disable</button>"+
                                        "</li>"+
                                        "<li class='list-group-item d-flex justify-content-between'>"+
                                        "<button class='btn btn-success col-sm-4 device_log'  data-devicelog="+value.hardware_id+">Device Log</button>"+
                                        "<button class='btn btn-primary col-sm-4 debug_device' data-devicedebug="+value.hardware_id+">Start Debug</button>"+
                                        "<button class='btn btn-danger col-sm- stop_device_debug' data-stop_devicedebug="+value.hardware_id+">Stop Debug</button>"+

                                        "</li>"+
                                        "<li class='list-group-item d-flex justify-content-between'>"+
                                        "<button class='btn btn-primary  model' data-toggle='modal' data-target='#exampleModal' data-totalmodal="+value.hardware_id+">Totaldata</button>"+
                                        "<button class='btn btn-success modelsuccess' data-toggle='modal' data-target='#exampleModal1' data-configmodal="+value.hardware_id+">Config</button>"+
                                        "</li>"+
                                        "</ul>"+
                                        "</div>"+
                                        "</div>"
                                    );
                                });
                            }
                            else
                            {
                                alert("DATA NOT FOUND !")
                            }
                        }
                    });
                });
            });

    }

    <!--  ----Device Log Show----  -->
        $(document).on('click','.device_log',function (){

            var h_id = $(this).data('devicelog');
           // window.location.href ="/showlog";
           //  var w = window.open('/showlog');
            $.ajax({
                url : '/api/device_log_show/'+h_id,
                type : 'get',
                success : function (data){
                    $.each(data,function(key,value){
                        $('#show_device_data').hide();

                        $('#show_log_data').append(
                            //"<div>"+
                            "<table class='table'>"+
                          //  "<thead>" +
                            "<tr>"+
                            "<th>ID"+"</th>"+
                            "<th>Hardware Id" +"</th>"+
                            "<th>Log Level" +"</th>"+
                            "<th>Logs" +"</th>"+
                            "<th>Create_at" +"</th>"+
                            "<th>Timestmp" +"</th>"+
                            "</tr>"+
                            //"</thead>"+
                           // "<tbody>" +
                            "<tr>" +
                            "<td>"+value.id+"</td>"+
                            "<td>"+value.physical_hardware_id+"</td>"+
                            "<td>"+value.log_level+"</td>"+
                            "<td>"+value.hardware_logs+"</td>"+
                            "<td>"+value.create_at+"</td>"+
                            "<td>"+value.timestmp+"</td>"+
                            "</tr>"+
                           // "</tbody>"+
                            "</table>"
                        );

                    }) ;
                }
            });

        });

    <!--  ----User Status Check----  -->

    $(document).on('click','.reset',function (){

        var uid = $(this).data('userreset');
        var status = 0;
        user_status(uid,status);
    });
    $(document).on('click','.active',function (){

        var uid = $(this).data('useractive');
        var status = 1;
        user_status(uid,status);


    });
    $(document).on('click','.disable',function (){

        var uid = $(this).data('userdisable');
        var status = 5;
        user_status(uid,status);
    });
    $(document).on('click','.p_disable',function (){

        var uid = $(this).data('userp_disable');
        var status = 10
        user_status(uid,status);
    });

    <!--  ----User Status Data Show  ----  -->
    function user_status(uid,status){

        $.ajax({
            url : '/api/user_status',
            type : "PUT",
            data : {email: uid, status: status},
            success : function (data){

                if (data.status == true){
                    alert(data.message)
                }else {
                    alert(data.message)
                }

            }
        });


    }


    <!--  ----Device Debug Check----  -->
    $(document).on('click','.debug_device',function (){

        var hid = $(this).data('devicedebug');
        var status = 1;
        $.ajax({
            url : '/api/device_debug_data',
            type : "POST",
            data : {hid: hid,status :status},
            success : function (data){
                if (data.status == true){
                        alert(data.message)
                }else {
                        alert(data.message)
               }
            }
        });
    });
    $(document).on('click','.stop_device_debug',function (){

        var hid = $(this).data('stop_devicedebug');
        var status = 0;
        $.ajax({
            url : '/api/device_debug_data',
            type : "POST",
            data : {hid: hid,status :status},
            success : function (data)
            {
                if (data.status == true){
                    alert(data.message)
                }else {
                    alert(data.message)
                }
            }
        });
    });


    <!--  ----Device Status Check----  -->

    $(document).on('click','.active_device',function (){

        var hid = $(this).data('devicective');
        var status = 1;
        device_data(hid,status);
    });
    $(document).on('click','.reset_device',function (){

        var hid = $(this).data('devicereset');
        var status = 0;
        device_data(hid,status);
    });
    $(document).on('click','.disable_device',function (){

        var hid = $(this).data('devicedisable');
        var status = 5;
        device_data(hid,status);

    });
    $(document).on('click','.p_disable_device',function (){

        var hid = $(this).data('devicep_disable');
        var status = 10;
        device_data(hid,status);
    });

    <!--  ----Device Status Data Show  ----  -->

    function device_data(hid,status)
    {
        $.ajax({
            url : '/api/device_status',
            type : "PUT",
            data : {hardware_id:hid,status:status},
            success : function (data){

                if (data.status == true){
                    alert(data.message)
                }else {
                    alert(data.message)
                }
            }
        });

    }

    <!--  ----SHOW USER ALL DATA ----  -->
    function Show_User_Data()
    {
        $(document).ready(function(){


                  $.ajax({
                        url : '/api/user_show_data',
                        type : 'get',
                        success : function (data){

                            $.each(data,function (key,value){

                                if (value.status == 1){
                                    var status = "Active";
                                    var status_class = "text-success";
                                }
                                if(value.status==0)
                                {
                                    var status="Reset";
                                    var status_class="text-primary";
                                }
                                if(value.status==5)
                                {
                                    var status="Disable";
                                    var status_class="text-warning";
                                }
                                if(value.status==10)
                                {
                                    var status="permanent disable";
                                    var status_class="text-danger";
                                }


                                $("#show_user_all_data").append(

                                    "<div class='col-md-12 card flex-md-row mb-4 box-shadow h-md-250' >"+
                                    "<div class='card-body show_all d-flex show_email flex-column align-items-start'>"+
                                    "<p>id :<strong> "+value.uid+"</strong></p>"+
                                    "<p>email :<strong id='get_email'> "+value.email_id+"</strong></p>"+
                                    "<div class='mb-5 text-muted'>"+value.mobile_no+"</div>"+
                                    "<h5>"+"first name :"+"<strong>"+value.first_name+"</strong>" +"</h5>"+
                                    "<h5>"+"last name :"+"<strong>"+value.last_name+"</strong>" +"</h5>"+
                                    "<h5>"+"<span>"+"appkey :"+"</span>"+"<strong>"+ value.appkey +"</strong>"+ "</h5>"+
                                    "<h5>"+"<span>"+"timezone :"+"</span>"+"<strong>"+ value.timezone +"</strong>"+ "</h5>"+
                                    "<h5>"+"<span>"+"download count :"+"</span>"+"<strong>"+ value.download_count +"</strong>"+ "</h5>"+
                                    "<h5>"+"account status :"+"<strong>"+value.account_status+"</strong>" +"</h5>"+
                                    "<h5>Status : <strong   class="+ status_class +">" + status +"</strong></h5>" +


                                    "</div>"+

                                    "<div class='col-md-6 order-md-2 mb-3'>"+
                                    "<ul class='list-group mb-3' >"+
                                    "<li class='list-group-item d-flex justify-content-between' >"+"<span>"+"client ip :"+"</span>"+"<strong>"+value.client_ip+" </strong>"+"</li>"+
                                    "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"timestamp :"+"</span>"+"<strong>"+ value.timestamp+"</strong>"+ "</li>"+
                                    "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"last update :"+"</span>"+"<strong>"+ value.last_update+"</strong>"+ "</li>"+
                                    "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"last login :"+"</span>"+"<strong>"+ value.last_login+"</strong>"+ "</li>"+
                                    "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"remember token :"+"</span>"+"<strong>"+ value.remember_token+"</strong>"+ "</li>"+
                                    "<li class='list-group-item d-flex justify-content-between'>" +
                                    "<button class='btn btn-success col-sm-2 active' data-useractive="+value.email_id+">Active</button>"+"<br>"+
                                    "<button class=' btn btn-primary col-sm-2 reset'   data-userreset="+value.email_id+">Reset</button>"+ "<br>"+
                                    "<button class='btn btn-warning col-sm-3 disable' data-userdisable="+value.email_id+">Disable</button>"+"<br>"+
                                    "<button class='btn btn-danger col-sm- p_disable' data-userp_disable="+value.email_id+">Parmanent disable</button>"+
                                    "</li>"+
                                    "</ul>"+
                                    "</div>"+
                                    "</div>"
                                );

                            });
                        }
                  });

        });
    }
});

<!--  ----SHOW COUNT AND LAST_LAST DATE IN MODAL ----  -->

$(document).on('click','.model',function (){

    var hid =$(this).data('totalmodal');

    $.ajax({
        url : '/api/total_count/'+hid,
        type : "get",
        success : function (data){
            $.each(data, function(key, value){

                $('#app_count').html(value[0].cnt)
                $('#app_date').html(value[0].lastdate)
                $('#app_install_count').html(value[0].app_cnt)
                $('#app_install_date').html(value[0].app_lastdate)
                $('#app_usage_count').html(value[0].usage_cnt)
                $('#app_usage_date').html(value[0].usage_lastdate)
                $('#attendance_count').html(value[0].attend_cnt)
                $('#attendance_date').html(value[0].attend_lastdate)
                $('#attendancefltr_count').html(value[0].fltr_cnt)
                $('#attendancefltr_date').html(value[0].fltr_lastdate)
                $('#block_count').html(value[0].block_cnt)
                $('#block_date').html(value[0].block_lastdate)
                $('#browsing_count').html(value[0].browser_cnt)
                $('#browsing_date').html(value[0].browser_lastdate)
                $('#config_count').html(value[0].config_cnt)
                $('#config_date').html(value[0].config_lastdate)
                $('#debug_count').html(value[0].debug_cnt)
                $('#debug_date').html(value[0].debug_lastdate)
                $('#logs_count').html(value[0].logs_cnt)
                $('#logs_date').html(value[0].logs_lastdate)
                $('#install_count').html(value[0].install_cnt)
                $('#install_date').html(value[0].install_lastdate)
                $('#network_count').html(value[0].info_cnt)
                $('#network_date').html(value[0].info_lastdate)
                $('#pc_count').html(value[0].device_cnt)
                $('#pc_date').html(value[0].device_lastdate)
                $('#product_count').html(value[0].productivity_cnt)
                $('#product_date').html(value[0].productivity_lastdate)
                $('#realtime_count').html(value[0].realapp_cnt)
                $('#realtime_date').html(value[0].realapp_cntlastdate)
                $('#realtime_browser_count').html(value[0].real_browser_cnt)
                $('#realtime_browser_date').html(value[0].real_browser_lastdate)
                $('#screenshot_count').html(value[0].screenshot_cnt)
                $('#screenshot_date').html(value[0].screenshot_lastdate)
                $('#storage_count').html(value[0].info_cnt)
                $('#storage_date').html(value[0].info_lastdate)
                $('#suggetion_count').html(value[0].suggetion_cnt)
                $('#suggetion_date').html(value[0].suggetion_lastdate)
                $('#Sys_count').html(value[0].sys_cnt)
                $('#Sys_date').html(value[0].sys_lastdate)
                $('#zip_count').html(value[0].zip_cnt)
                $('#zip_date').html(value[0].zip_lastdate)

            });

        }
    });
});

<!--  ----SHOW CONFIG TABLE DATA IN MODAL ----  -->

$(document).on('click','.modelsuccess',function (){

    var hid =$(this).data('configmodal');

    $.ajax({
        url:'/api/configdata/'+hid,
        type:'get',
        success:function (data){
            $.each(data,function (key,value){

                $('#show_config').append(

                    "<div class='col-md-12 card flex-md-row mb-4 box-shadow h-md-250' >"+
                    "<div class='card-body  align-items-start'>"+
                    "<p>hardware Id:<strong>"+value.hardware_id+"</strong></p>"+
                    "<strong class='mb-3'>"+value.email_id+"</strong>"+
                    "<h5>"+"real time :"+"<strong>"+value.realtime+"</strong>" +"</h5>"+
                    "<h5>"+"screenshot :"+"<strong>"+value.screenshot+"</strong>" +"</h5>"+
                    "<h5>"+"networkinfo :"+"<strong>"+value.networkinfo+"</strong>" +"</h5>"+
                    "<h5><span>"+"productivityinfo :"+"</span>"+"<strong>"+ value.productivityinfo +"</strong></h5>"+
                    "<h5>"+"<span>"+"storage :"+"</span>"+"<strong>"+ value.storage +"</strong>"+ "</h5>"+
                    "<h5>"+"<span>"+"syncdata :"+"</span>"+"<strong>"+ value.syncdata +"</strong>"+ "</h5>"+
                    "<h5>"+"<span>"+"hardwareinfo :"+"</span>"+"<strong>"+ value.hardwareinfo +"</strong>"+ "</h5>"+
                    "<h5>"+"<span>"+"updated_at :"+"</span>"+"<strong>"+ value.updated_at +"</strong>"+ "</h5>"+

                    "</div>"+
                    "<div class='col-md-4 order-md-2 mb-3' >"+
                    "<ul class='list-group d-flex justify-content-between mb-3'>"+
                    "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"is_realtime_enable :"+"</span>"+"<strong>"+value.is_realtime_enable+" </strong>"+"</li>"+
                    "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"is_hardwareinfo_enable :"+"</span>"+"<strong>"+ value.is_hardwareinfo_enable+"</strong>"+ "</li>"+
                    "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"is_networkinfo_enable :"+"</span>"+"<strong>"+ value.is_networkinfo_enable+"</strong>"+ "</li>"+
                    "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"is_productivityinfo_enable :"+"</span>"+"<strong>"+ value.is_productivityinfo_enable+"</strong>"+ "</li>"+
                    "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"is_screenshot_enable :"+"</span>"+"<strong>"+ value.is_screenshot_enable+"</strong>"+ "</li>"+
                    "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"is_storage_enable :"+"</span>"+"<strong>"+ value.is_storage_enable+"</strong>"+ "</li>"+
                    "<li class='list-group-item d-flex justify-content-between'>"+"<span>"+"idletime :"+"</span>"+"<strong>"+ value.idletime+"</strong>"+ "</li>"+
                    // "</div>"+
                    "</div>"

                );

            });
        }
    })
});

    <!--  ----Show Chart ----  -->
     function getChart(arr_data,arr_date)
    {
        /* global Chart:false */
        $(function () {
            'use strict'

            var ticksStyle = {
                fontColor: '#495057',
                fontStyle: 'bold'
            }

            var mode = 'index'
            var intersect = true

            var $visitorsChart = $('#visitors-chart')
            // eslint-disable-next-line no-unused-vars
            var visitorsChart = new Chart($visitorsChart, {
                data: {
                    labels: arr_date,
                    datasets: [{
                        type: 'line',
                        data: arr_data,
                        backgroundColor: 'transparent',
                        borderColor: '#007bff',
                        pointBorderColor: '#007bff',
                        pointBackgroundColor: '#007bff',
                        fill: false
                        // pointHoverBackgroundColor: '#007bff',
                        // pointHoverBorderColor       : '#007bff'
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    tooltips: {
                        mode: mode,
                        intersect: intersect
                    },
                    hover: {
                        mode: mode,
                        intersect: intersect
                    },
                    legend: {
                        display: false
                    },
                    scales: {
                        yAxes: [{
                            // display: false,
                            gridLines: {
                                display: true,
                                lineWidth: '4px',
                                color: 'rgba(0, 0, 0, .2)',
                                zeroLineColor: 'transparent'
                            },
                            ticks: $.extend({
                                beginAtZero: true,
                                suggestedMax: 200
                            }, ticksStyle)
                        }],
                        xAxes: [{
                            display: true,
                            gridLines: {
                                display: false
                            },
                            ticks: ticksStyle
                        }]
                    }
                }
            })
        });

        // END cHART
    }



