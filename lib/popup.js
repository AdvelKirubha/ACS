 $('.click').mousedown(function(event) {
                switch (event.which) {
                    case 3:
                    $var = $(this).attr('ism');
                    $("#new").val($var);
                    var option1 = {
                width: 150,
                items: [
                {text: "Add Device",alias: "1",action: menuAction },
                {text: "Add Site",alias: "2", action: menuAction},
                {text: "Edit Site",alias: "3", action: menuAction},
                {text: "Delete Site",alias: "4", action: menuAction},
                {text: "Edit Device",alias: "5",action: menuAction },
                {text: "Delete Device",alias: "6", action: menuAction}

                    ],onShow: applyrule,
            };       
            function menuAction() {
                $option = this.data.alias;
                $($option).ready(function() {
                    if ($option == 1) {
                        $device = $(".device").attr('id', 'dialog');
                        $(".site").removeAttr('id', 'dialog');
                        $(".edit").removeAttr('id', 'dialog');
                        $(".editdev").removeAttr('id', 'dialog');
                        $("#dialog").dialog();
                    }
                     if ($option == 2) {
                        $(".site").attr('id', 'dialog');
                        $(".device").removeAttr('id', 'dialog');
                        $(".edit").removeAttr('id', 'dialog');
                        $(".editdev").removeAttr('id', 'dialog');
                        $("#dialog").dialog();
                    } 
                    if($option == 3) {
                        $(".edit").attr('id', 'dialog');
                        $(".device").removeAttr('id', 'dialog');
                        $(".site").removeAttr('id', 'dialog');
                        $(".editdev").removeAttr('id', 'dialog');
                        $("#dialog").dialog();
                    }
                     if($option == 4) {

                       $("#nnna").val('4');
                    }
                    if ($option == 5) {
                        $(".editdev").attr('id', 'dialog');
                        $(".device").removeAttr('id', 'dialog');
                        $(".site").removeAttr('id', 'dialog');
                        $(".edit").removeAttr('id', 'dialog');
                         $("#dialog").dialog();
                    }
                     if ($option == 6) {
                        $("#nnns").val('6');
                    } 
                });
            }
             function applyrule(menu) {   
               $newv = $("#new").val();
               if($newv == 0){
                 menu.applyrule({ name: "click",
                        disable: true,
                        items: ["3", "4", "5", "6"]
                    });
                } else if($newv == 1){
                        menu.applyrule({ name: "click",
                        disable: true,
                        items: [ "5", "6"]
                    });
                }
                else{
                       menu.applyrule({ name: "click",
                        disable: true,
                        items: [ "1", "2","3","4"]
                    });
                }
               
            }

            $(".click").contextmenu(option1);
             break;
                }
            });


// testing content menu


            $('.target1').mousedown(function(event) {
                switch (event.which) {
                    case 3:
                    $var = $(this).attr('id');
                    $("#hidden").val($var);
                    $("#hidden1").val($var);
                    var ElementName =$('#hidden1').val();
                   var dataString = 'ElementName='+ ElementName;

                    $.ajax
                    ({
                    type: "GET",
                    url: "include/ajax/editsite.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $(".edit").html(html);
                    } 
                });
             break;
                }
            });
         
            $('.click').mousedown(function(event) {
                switch (event.which) {
                    case 3:
                    $var = $(this).attr('isdiv');
                    $("#hidden2").val($var);

                    var id =$('#hidden2').val();
                   var dataString = 'id='+ id;

                $.ajax
                ({
                    type: "GET",
                    url: "include/ajax/editdevice.php",
                    data: dataString,
                    cache: false,
                    success: function(html)
                    {
                        $(".editdev").html(html);
                    } 
                });
             break;
                }
            });


//delete device

  $('.target1').mousedown(function(event) {
                switch (event.which) {
                    case 3:
                    var i =$('#nnna').val();
                    if(i == 4){
                    var room =$('#hidden1').val();

                   var dataString = 'room='+ room;
                $.ajax
                ({
                    type: "POST",
                    url: "include/ajax/deletesite.php",
                    data: dataString,
                    cache: false,
                    success: function(data) {
                       window.location.href = "dashboard.php";
                    },
                   
                });
            }
             break;
                }
            });

  $('.click').mousedown(function(event) {
                switch (event.which) {
                    case 3:
                     var i =$('#nnns').val();
                    if(i == 6){

                    $var = $(this).attr('isdiv');
                    $("#deleteid1").val($var);
                    var id =$('#deleteid1').val();
                   var dataString = 'id='+ id;
                $.ajax
                ({
                    type: "POST",
                    url: "include/ajax/deletedevice.php",
                    data: dataString,
                    cache: false,
                    success: function(data) {
                         window.location.href = "dashboard.php";
                    },
                  
                });
            }
             break;
                }
            });
   $(".click").click(function() {
                $id = $(this).attr('isdiv');
                  $("#finddevice").val($id);
                $isid = $(this).attr('isid');
                if($isid == 'image0'){
                } else if($isid == 'image1'){
                } else {
                $('#wizard').show();
                 var image = $isid;
                var dataString = 'name='+ image;
                $.ajax
                ({
                    type: "GET",
                    url: "include/ajax/inputfield.php",
                    data: dataString,
                    cache: false,
                    success: function(result)
                    {   
                    $("#new123").html(result);
                    }
                });
               
                 var data = 'name='+ image;
                $.ajax
                ({
                    type: "GET",
                    url: "include/ajax/modelname.php",
                    data: data,
                    cache: false,
                    success: function(data) {
                        $("#modelname").html(data);
                    }
                });

                var data = 'name='+ image;
                $.ajax
                ({
                    type: "GET",
                    url: "include/ajax/inputmodel.php",
                    data: data,
                    cache: false,
                    success: function(data) {
                        $("#inputmodel").html(data);
                    }
                });
                 var data = 'name='+ image;
                $.ajax
                ({
                    type: "GET",
                    url: "include/ajax/outputmodel.php",
                    data: data,
                    cache: false,
                    success: function(data) {
                        $("#outputmodel").html(data);
                    }
                });
                

                }
            });