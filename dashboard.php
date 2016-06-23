<!DOCTYPE html>

<?php include "dbconfig.php";
 include 'include/inp/adddevice.php';
 include 'include/inp/addsite.php';
 /* session_start();
 // Starting Session 
 //error_reporting( '0');
$user_check=$_SESSION[ 'login_user'];
$ses_sql=mysql_query( "select * from users where Name='$user_check'");
$data=mysql_fetch_assoc($ses_sql); 
$UserID= $data[ 'UserID'];*/ ?>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="" name="description">
    <meta content="" name="author">
    <title>Acs-Dashboard</title>

    <!--Page loading plugin Start -->
   <link href="assets/css/plugins/pace.css" rel="stylesheet">

   <link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.min.css">


    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="assets/css/plugins/easyTree.css" rel="stylesheet"> -->
    <link href="assets/css/style.css" rel="stylesheet">
   <link href="assets/css/responsive.css" rel="stylesheet">
   <link href="assets/css/page.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="_styles.css" media="screen">
     <style type="text/css">
        #footer {
            position: fixed;
            left: 0px;
            bottom: 0px;
            width: 102%;
            background: #000;
        }
    </style>
    <style>
    .ui-dialog {
    overflow: hidden;
    position: absolute;
    min-width: 400; 
    top: 0;
    left: 0;
    
    outline: none;
    
    border: 1px solid #000000;
       
    
}
.ui-dialog .ui-dialog-titlebar {
    
    position: relative;
    background:black;
    border: 1px solid black;
    border-radius: 0px !important;
    margin: 0;
    padding: 0;
    color:white;

    
}
.ui-dialog .ui-dialog-title {
    float: left;
    margin: 0 0 0;
    /*white-space: nowrap;
    width: 100%;*/
    /*overflow: hidden;*/
    text-overflow: ellipsis;
}
.ui-dialog .ui-dialog-titlebar-close {
    position: absolute;
    right: .1em;
    top: 50%;
    width: 20px;
    margin: 0 0 0;
    padding: 0;
    height: 20px;
}
.ui-dialog .ui-dialog-content {
    position: relative;
    padding: 0;
    margin: 0;
    background: none;
    overflow: none;
}
.ui-dialog .ui-dialog-buttonpane {
    text-align: left;
    border-width: 0 0 0 0;
    background-image: none;
    
    /*padding: .3em 1em .5em .4em;*/   
}
.ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset {
    float: right;
}
.ui-dialog .ui-dialog-buttonpane button {
    margin: .5em .4em .5em 0;
    cursor: pointer;
    overflow: hidden;
}
.ui-widget-content.ui-dialog {
    
   
    border: 2px solid #000;
    overflow: hidden;
    margin: 0;
    padding: 0;
}
.ui.widget{

}
table.sidepanel
{

    border-collapse: collapse;
    width: 100%;

}
td.first_td{

   border-top: 1px solid white;
   border-right: 1px solid white;
   border-left: 1px solid white;
   border-bottom: 1px solid black;
}
td.tree_td{

    border-top: 1px solid white;
   border-right: 1px solid white;
   border-left: 1px solid white;
   border-bottom: 1px solid white;
}
}


.new {height: 100%;
     min-height: 100%;
     border-left: 1px solid red;
 };
        .ii {
            position: absolute;
            margin-left: 80px;
            margin-top: -26px;
        }
        table,
        tr,
        td {
            border: 1px solid black;
            text-align: left;
            padding: 0px;
        }
        .red {
            position: absolute;
            margin-left: 460px;
            margin-top: -38px;
            color: red;
            font-size: 20px;
        }
        .bor {
            border-right: 1px solid #0E0E0E;
        }
        FIELDSET {
            border: solid 1px #CCC;
            -moz-border-radius: 8px;
            -webkit-border-radius: 8px;
            border-radius: 8px;
            padding: 3px 4px 4px 4px !important;
            margin: 3px 4px 4px 4px !important;
        }
        LEGEND {
            color: #333;
            font-size: 14px;
            padding: 0em .5em;
            font-weight: bold;
        }
    </style>
    <style type="text/css">
        /*  bhoechie tab */
        
        div.bhoechie-tab-container {
            padding: 0 !important;
            margin-left: 50px;
        }
        div.bhoechie-tab-menu {
            width: 80px;
            padding-right: 0;
            padding-left: 0;
            padding-bottom: 0;
            font-weight:bold;
        }
        div.bhoechie-tab-menu div.list-group {
            margin:1px;
            padding: 1px;
            text-align: left;
            font-weight:bold;

        }
        div.bhoechie-tab-menu div.list-group>a {
            margin-bottom: 0;
            padding-left: 2px;
            font-weight:bold;
        }
        div.bhoechie-tab-menu div.list-group>a .glyphicon,
        div.bhoechie-tab-menu div.list-group>a .fa {
            font-weight:bold;
            color: #5A55A3;
        }
        div.bhoechie-tab-menu div.list-group>a:first-child {
            border-top-right-radius: 0;
            -moz-border-top-right-radius: 0;
        }
        div.bhoechie-tab-menu div.list-group>a:last-child {
            border-bottom-right-radius: 0;
            -moz-border-bottom-right-radius: 0;
        }
        div.bhoechie-tab-menu div.list-group>a.active,
        div.bhoechie-tab-menu div.list-group>a.active .glyphicon,
        div.bhoechie-tab-menu div.list-group>a.active .fa {
            background-color: #121213;
            background-color: #121213;
            color: #ffffff;
            border-color: #f10000;
        }
        div.bhoechie-tab-content {
            background-color: #ffffff;
            /* border: 1px solid #eeeeee; */
            
            padding-left: 2px;
            min-width: 600px;
            padding-top: 0px;
            padding-bottom: 0px;
        }
        div.bhoechie-tab div.bhoechie-tab-content:not(.active) {
            display: none;
        }

    </style>

<script src="assets/jsdown/jquery.min.js"></script>

   <link rel="stylesheet" href="./dist/jstree/themes/default/style.min.css" />
    
</head>

<body class="">
    <!--Navigation Top Bar Start-->
    <nav class="navigation" style="background: #000000 !important; margin: 0;padding:0px; max-height: 35px">
        <div class="container-fluid" style="padding: 0px;margin: 0px;">
            <!--Logo text start-->
            <div class="header-logo" style="float: left; padding-left:10px;">
            <div> <img src="assets/logo.png" style="padding-bottom:0;padding-top:.5em; float: left;"></div>
            <div>
                <a href="#" oncontextmenu="return false" title=""><h1 class="context-menu-one">Start</h1></a>
                </div>

            </div>
            <div style="float: right; padding-right: 10px;">
                <a href="#" title="">
                    <h1>ACS</h1>
                </a>
            </div>
        </div>
    </nav>
    <!--Page main section start-->
    <section id="" style="margin: 0px;padding:0px;">
        <!--<div id="">-->
           
            <!-- Main Content Element  Start-->
            <div class="container-fluid" style="margin: 0px;padding: 0px;">
                <div class="row" style="margin: 0px;padding: 0px">
                    <div class="col-md-12" style="margin: 0px;padding: 0px;">

                        <div class="col-md-3" style="margin: 0px; padding: 0px;min-width:250px;">

                <table class="sidepanel">
                  <tr> 
                     <td class="first_td">
                         <g style="font-size: 17px; padding-left: 10px; margin-left: 0px;"> Global </g>
                         <img id="buttonrefresh" style="float: right;" src="assets/css/img/refresh.png">
                      </td>

                  </tr>
                  <tr>
                      <td class="tree_td" style="padding-left: 10px;"> <div id="left_sites_nav_tree__"  oncontextmenu="return false;"></div>
                      <label id="selectednode" style="visibility: hidden!important;"></label>
                      <!--<label id="isdiv" ></label>-->
                      </td>
                      
                  </tr>
                  <tr>
               </table>
                        </div>


                    
                        <div class="col-md-9" style="border-left: 1px solid black; padding-top: 10px;    height: 1500px;">

                        <div class="row">

                            <div id="new123" class="col-md-5 col-md-offset-3" style="max-height: 175px !important;padding-top:50px;">


                            </div>
                        </div>

                            <div class="row" id="wizard" style="display: none;padding-top: 50px;">
                                <div class="col-md-12" style="padding-top:30px;">
                                    <div class="col-md-4 bhoechie-tab-menu">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item active text-left">
                                                <label>Information</label>
                                            </a>
                                            <a href="#" class="list-group-item text-left">
                                                <label>Inputs</label>
                                            </a>
                                            <a href="#" class="list-group-item text-left">
                                                <label>Outputs</label>
                                            </a>
                                            <a href="#" class="list-group-item text-left">
                                                <label>Anything else</label>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=" col-md-10 bhoechie-tab" style="border: 1px solid #808080; padding: 10px; min-width:800px;">
                                        
                                        <div class="bhoechie-tab-content active">

                                            <?php include "include/wizard/tab1.php" ?>
                                        </div>
                                       
                                        <div class="bhoechie-tab-content">
                                            <?php include "include/wizard/tab2.php" ?>
                                        </div>

                                        <div class="bhoechie-tab-content">
                                            <?php include "include/wizard/tab3.php" ?>
                                        </div>
                                        <div class="bhoechie-tab-content">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" id="skin_gen_row" style="display: none;padding-top: 50px;">
                                <div class="col-md-2 col-md-offset-9">
                                    <div class="text-center" ><button  id="skin_gen_button" type="button" value="" class="" style="background: #000000;height: 20px; color: white; margin-top: 18px;">Generate Skin</button></div>
                                </div>
                            </div>
                            <input type="hidden" id="keyvalue">
                            <input type="hidden" id="finddevice" name="finddevice">
                            <input type="hidden" id="io" name="io">
                            <input type="hidden" id="hidden1" name="hidden1">
                            <input type="hidden" id="hidden2" name="hidden2">
                            <input type="hidden" id="deleteid1" name="deleteid1">
                            <input type="hidden" id="nnna" name="nnna">
                            <input type="hidden" id="nnns" name="nnns">
                            <input type="hidden" id="inputvalue" name="inputvalue">
                            <input type="hidden" id="popskin" name="popskin">
                            <input type="hidden" id="new" name="new">
                            <input type="hidden" id="userid" value="<?php echo $UserID; ?>">
                            <div class="edit" style="display:none;" title="Edit Site">
                            </div>
                            <div class="editdev" style="display:none;" title="Edit Device">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       <!-- </div>-->
    </section>
   

    <div id="addinputdevice" title="Add Source/Display Type" style="display: none; width: 138%;">
        <?php include "include/inp/addinputdevice.php" ?>
    </div>
    <div id="updateinputdevice" title="Update Source Type" style="display: none; width: 138%;">
        <?php include "include/inp/updateinputdevice.php" ?>
    </div>
    <div id="editinputdevicedata" title="Edit Source Type" style="display: none; width: 138%;">
        <?php include "include/inp/editinputdevicedata.php" ?>
    </div>
    <div id="updateoutputdevice" title="Update Display Type" style="display: none; width: 138%;">
        <?php include "include/inp/updateoutputdevice.php" ?>
    </div>
    <div id="editoutputdevicedata" title="Edit Display Type" style="display: none; width: 138%;">
        <?php include "include/inp/editoutputdevicedata.php" ?>
    </div>
    <div id="addoutputdevice" title="Add Display Type" style="display: none;width: 138%;">
        <?php include "include/inp/addoutput.php" ?>
    </div>
    <div id="skingenerator" title="Skin Generator" style="display: none;">
        <?php include "include/inp/skin/generator.php" ?>
    </div>
    <div id="logSite" title="ACS Site Log" style="display: none;">
        <?php include "include/inp/logSite.php" ?>
    </div>
    <div id="logSubSite" title="ACS Sub-site Log" style="display: none;">
        <?php include "include/inp/logSubSite.php" ?>
    </div>
    <div id="log" title="ACS Log" style="display: none;">
        <?php include "include/inp/log.php" ?>
    </div>
 
    <div id="startaddsite" title="Add Site" style="display: none; overflow: hidden;">
    <!--addsite dialog -->
   <?php include "include/inp/addsiteDialog.php" ?>
    </div>
    <div id="startaddsubsite" title="Add Sub-Site" style="display: none; overflow: hidden;">
    <!--addsite dialog -->
     <?php include "include/inp/addSubsiteDialog.php" ?>
    </div>
    <div id="startadddevice" title="Add Device" style="display: none; overflow: hidden;">
     <!--add device dialog -->

      <?php include "include/inp/addDeviceDialog.php" ?>
    </div>
    <div id="paste" title="paste to" style="display: none; overflow: hidden;">
     <!--add device dialog -->

     <!--<?php //include "testtree.php" ?>-->
    </div>
    <div id="editsite" title="Editsite" style="overflow: hidden; " >
     <?php include "include/inp/editsite_dialog.php" ?>

    </div>
    <div id="editsubsite" title="Edit Sub-Site" style="display: none; overflow: hidden;">
     <?php include "include/inp/editsubsite_dialog.php" ?>

    </div>
    <div id="editdevice" title="Edit Device" style="display: none; overflow: hidden;">
     <?php include "include/inp/editdevice_dialog.php" ?>

    </div>


    <div class="row" id="footer" style="margin-right: 0px !important;">
        <div class="col-md-12">
            <div class="col-md-offset-11 col-md-3">
                <a href="logout.php" style="color: white;text-decoration: none;font-weight: bold; font-size: 12px;">logout</a>
            </div>
        </div>
    </div>

    <!--Page main section end -->
    <script src="assets/js/color.js" type="text/javascript">
    </script>
    <!-- <script src="assets/js/lib/jquery-1.11.min.js" type="text/javascript"> -->
    </script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript">
    </script>
    <script src="assets/js/multipleAccordion.js" type="text/javascript">
    </script>
    <script src="assets/js/lib/jquery.easing.js">
    </script>
    <script src="assets/js/jquery.nanoscroller.min.js"></script>
    <!-- <script src="assets/js/switchery.min.js"></script>
    <script src="assets/js/bootstrap-switch.js"></script> -->
    <script src="assets/js/jquery.easypiechart.min.js">
    </script>
    <script src="assets/js/bootstrap-progressbar.min.js">
    </script>
    <script src="assets/js/pages/layout.js" type="text/javascript">
    </script>

    <script src="assets/js/jquery-ui.js"></script>
    <link href="assets/css/page.css" rel="stylesheet" type="text/css" />

   <link rel="stylesheet" href="assets/css/jquery-ui.css"> 
    <!-- <script src="https://code.jquery.com/jquery-1.10.2.js"></script> -->
    <script src="assets/js/jquery-ui.js"></script>
    <link href="assets/css/page.css" rel="stylesheet" type="text/css" />


    <link href="assets/css/contextmenu.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/jquery.contextmenu.js" type="text/javascript"></script>

   <!--<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />-->
    <link href="assets/css/jquery.contextMenu.css" rel="stylesheet" type="text/css" />
    <script src="assets/js/contentmenu.js" type="text/javascript"></script>
    <script src="assets/jsdown/jquery.ui.position.min.js" type="text/javascript"></script>


<script type="text/javascript" >
$(function(){

    /**************************************************
     * Context-Menu with Sub-Menu
     **************************************************/
    $.contextMenu({
        selector: '.context-menu-one',
        trigger: 'left', 
        callback: function(key, options) {
            $option = key;

            $('#keyvalue').val($option);
            $option = $('#keyvalue').val();
              $(document).ready(function() {
                if($option == 1){
                     $("#startaddsite").dialog();
                }if ($option ==10){

                    $("#logSite").dialog();

                }if ($option ==11){

                    $("#logSubSite").dialog();

                }if ($option ==12){

                    $("#log").dialog();

                }
                if($option == 2){
                    if ($selsubsiteID == 0 && $devid == 0){
                        
                         var delsitedtring ="id="+$selsiteID;

                        $.ajax({

                            type:'POST',
                            url: 'include/inp/deletesite.php',
                            cache: false,
                            data:delsitedtring,
                            success:function(){

/*                                console.log("deleted");
*/                                refresh_tree();

                            }, error: function(response){
                               console.log(response);
                            }



                        });

                    }else {




                       
                        
                    }
                    

                }
                if ($option ==4){

                    if($("#selectednode").text() ==""){
                        
                    }else{
                        $("#startaddsubsite").dialog();
                    }

                     

                }
                if ($option ==5){

                    if($selsubsiteID!=0 && $devid ==0){

                        
                        var delsubid ="id="+$selsubsiteID;
                        

                        $.ajax({
                        type:'POST',
                        url:'include/inp/deletesubsitedata.php',
                        data: delsubid,
                        cache: false,
                        success: function(data){

/*                            console.log("success deleting subsite");
*/                            refresh_tree();
                        }, error:function(data){

                           
                        }

                     });


                    }else{
                       
                    }
                }
                if ($option ==7){
                   if($devid ==0){
                    $("#startadddevice").dialog();
                    
                   }else{
                    
                   }
                    
                }
                if ($option == 8){
                    if($devid == 0){
                   
                   }else{

                    
                    
                    var deldevid ="id="+$devid+"&subsiteID="+$selsubsiteID+"&siteID="+$selsiteID+"&isdiv="+$added_device_id;

                    


                    
                     $.ajax({
                        type:'POST',
                        url:'include/inp/deletedevicedata.php',
                        data: deldevid,
                        cache: false,
                        success: function(data){

/*                            console.log(deldevid);
*/                            refresh_tree();
                        }, error:function(data){

                            console.log("failed");
                        }

                     });

                   }

                }
            
             });
             
        },
        items: {
            "fold1": {
                "name": "Project", 
                "items": {
                    "fold1": {
                        "name": "Site", 
                        "items": {
                            "1": {"name": "Add"},
                            "2": {"name": "Remove"},
                            "3": {"name": "Show/Hide"}
                        }
                    },
                    "fold2": {
                        "name": "Sub-Site", 
                        "items": {
                            "4": {"name": "Add"},
                            "5": {"name": "Remove"},
                            "6": {"name": "Show/Hide"}
                        }
                    },
                     "fold3": {
                        "name": "Device", 
                        "items": {
                            "7": {"name": "Add"},
                            "8": {"name": "Remove"},
                            "9": {"name": "Show/Hide"}
                        }
                    }
                }
            },
            "fold1a": {
                "name": "Logs", 
                "items": {
                    "10": {"name": "Site"},
                    "11": {"name": "Sub-site"},
                    "12": {"name": "ACS"}
                }
            },
             "Configuration": {"name": "Configuration"},
            "Help": {"name": "Help"}
        }
    });
});
</script>


    <!--code highlighter file import-->
    <script src="assets/jsdown/shCore.js" type="text/javascript"></script>
    <script src="assets/jsdown/shBrushJScript.js" type="text/javascript"></script>
    <script src="assets/jsdown/shBrushCss.js" type="text/javascript"></script>
    <link href="assets/jsdown/shCore.css" rel="stylesheet" type="text/css" />
    <link href="assets/jsdown/shThemeDefault.css" rel="stylesheet" type="text/css" />
    

    <script>
       function refresh_tree(){

                $('#left_sites_nav_tree__').jstree(true).settings.core.data = { 'url': 'treefetch1.php' };
                $('#left_sites_nav_tree__').jstree(true).refresh();
            }


        $(document).ready(function() {

         

            $('#buttonrefresh').click(function(){

                
                refresh_tree();

            });






            $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
                e.preventDefault();
                $(this).siblings('a.active').removeClass("active");
                $(this).addClass("active");
                var index = $(this).index();
                $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
                $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
            });
        });
    </script>
   <!-- <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />-->

    <script src="include/popup.js" type="text/javascript"></script>
    <script type="text/javascript">
        /*
         $(document).ready(function() {
            $('input[type="radio"]').click(function() {
                if ($(this).attr("value") == "no") {
                    $("#addshow").hide();
                }
                if ($(this).attr("value") == "yes") {
                    $("#addshow").show();
                }

            });
            $(".addCF").click(function() {
                $("#customFields1").append('<div class="row"><div class="col-md-6"><input type="text" style="width: 81px;" name="array[]"></div><div class="col-md-6"><input class="form-control" type="text" name="mute" ></div></div><br/>');
            });
        });*/
    </script>



    
    <script src="./dist/jstree/jstree.min.js"></script>

    <?php
    echo "<!--";
    print_r($arrayCategories);
    echo "-->";
    ?>
    <script type="text/javascript">
    var selectednodeID
   $(document).ready(function(){});     
    $(function () { $('#left_sites_nav_tree__').jstree(); });

    $('#left_sites_nav_tree__').jstree({ 'core' : {
    'data' : {

        'url': "treefetch1.php",
        'type':'POST',
        'contentype':'application/json',
        'data': function(node){
             return {'id' : node.id };
         }

    }
},'plugins' : ["contextmenu"], contextmenu: {items: context_menu}
});
$("#skin_gen_button").click(function(){
      console.log("skin generator");
          $("#skingenerator").dialog();
});
    $('#left_sites_nav_tree__').on("changed.jstree", function (e, data) {
        var i,j, r=[];
        for (i=0,j=data.selected.length;i<j;i++) {
            r.push(data.instance.get_node(data.selected[i]).text);
/*            console.log(r);
*/        }
        //console.log(data.selected['0']);

                $(".ui-dialog-content").dialog("close");



                $siteid = $('#'+data.selected['0']).attr('siteID');
                $stename = $('#'+data.selected['0']).attr('new');
               // $subsitename=$('#'+data.selected['0'].attr(''))
                $substename = $('#'+data.selected['0']).attr('subsiteID');
                $ipadd=$('#'+data.selected['0']).attr('ipadd');


                $added_device_id = $('#'+data.selected['0']).attr('isdiv');
                 $id = $('#'+data.selected['0']).attr('isdiv');
                $selsiteID =$('#'+data.selected['0']).attr('siteID');
                $selsubsiteID =$('#'+data.selected['0']).attr('subsiteID');
                $issubsites =$('#'+data.selected['0']).attr('issubsites');
                //console.log($id);
                $seid =$('#'+data.selected['0']).attr('id');
                $parentid =$('#'+data.selected['0']).attr('ism');
/*                 alert($added_device_id);
                console.log($parentid);
*/
                selectednodeID = $seid;
                //DeviceID=$id; 
/*                console.log("selected node:"+selectednodeID);
*/                $('#selectednode').text(selectednodeID);
                $('#isdiv').text($id);
                $("#finddevice").val($id);
                $isid = $('#'+data.selected['0']).attr('isid');
                $devid= $('#'+data.selected['0']).attr('devid');
                 var devid =$devid;
/*                 console.log("devid:"+devid);
*/                if (devid== 0) {}else {

                    $($isid).css("background", "red");
                    $('#wizard').show();
                    $('#skin_gen_row').show();
                    var devid = $devid;
                    var siteconfig = $selsiteID;
                    //var image = $isid;
                    //var newdata = $('#'+data.selected['0']).attr('new');
                    var dataString = "DeviceID="+devid+"&siteID="+siteconfig+"&subsiteid="+$selsubsiteID+"&isdiv="+$added_device_id;

/*                    console.log(dataString);
*/
                    $.ajax({
                        type: "GET",
                        url: "include/ajax/inputfield.php",
                        data: dataString,
                        cache: false,
                        success: function(data) {
/*                            console.log(data);
*/                            $("#new123").html(data);
                        }
                    });
                    //var dataStringModel = "DeviceID="+devid;;
                    $.ajax({
                        type: "GET",
                        url: "include/ajax/modelname.php",
                        data: dataString,
                        cache: false,
                        success: function(data) {
                            $("#modelname").html(data);
                        }
                    });
                    
                    $.ajax({
                        type: "GET",
                        url: "include/ajax/inputmodelinput.php",
                        data: dataString,
                        cache: false,
                        success: function(data) {
/*                            console.log(data);
*/                            $("#inputmodelinput").html(data);
                        }
                    });
                   // var dataString = 'name=' + image + "&newdata=" + newdata;
                    $.ajax({
                        type: "GET",
                        url: "include/ajax/outputmodeloutput.php",
                        data: dataString,
                        cache: false,
                        success: function(data) {
                            //console.log(data);
                            $("#outputmodeloutput").html(data);
                        }
                    });

                }



    });
    $('button').on('click', function () {
      $('#left_sites_nav_tree__').jstree(true).select_node('child_node_1');
      $('#left_sites_nav_tree__').jstree('select_node', 'child_node_1');
      $.jstree.reference('#left_sites_nav_tree__').select_node('child_node_1');
      


    });
    


    $(document).ready(function() {
            // right click

            //  $(document).on("contextmenu",function(e){
            //    if(e.target.nodeName != "INPUT" && e.target.nodeName != "TEXTAREA")
            //         e.preventDefault();
            // });
        });
    function context_menu (node){
        
         var items ={

             "copy": {
            "separator_before": false,
            "separator_after": false,
            "label": "copy",
            "action": function (obj) { 

                if($selsubsiteID == 0 && $devid == 0){

                    var pastesitename =$stename+"_1";
                    var siteid=$siteid;
                    var substeid =$substename;
                    var hassubsite = $issubsites
                    
                   // var pastesitename = sitename+"_1";
                    var copyParentString = "siteid="+siteid+"&pastesitename="+pastesitename+"&stename="+$stename+"&issubsites="+hassubsite;
                    

                    $.ajax({

                        'type':'POST',
                        'url' :'include/ajax/copyParent.php',
                         data: copyParentString,
                         cache : false,
                         success: function(data){
                            var copiedID =$.trim(data);
                           
                            var copyChildrenString =copyParentString+"&copiedSite="+copiedID+"&subsiteID="+substeid;

                             $.ajax({
                                'type':'POST',
                                'url' :'include/ajax/copyChilderen.php',
                                 data: copyChildrenString,
                                cache : false,
                                success: function(){

                                    refresh_tree();

                                },error:function(){
                                    alert("failed copying");
                                }

                             });




                         },error : function(){
                            alert("error copying site");
                         }

                    });


                }else if ($selsiteID !=0 && $devid == 0){

                    var pastesitename =$stename+"_1";
                    var siteid=$siteid;
                    var subsiteid =$substename;
                    var hassubsite = $issubsites
                    
                   
                    var copySubsiteString = "siteid="+siteid+"&pastesitename="+pastesitename+"&stename="+$stename+"&subsiteID="+subsiteid;

                        $.ajax({
                                'type':'POST',
                                'url' :'include/ajax/copysubsite.php',
                                 data: copySubsiteString,
                                cache : false,
                                success: function(){

                                    //alert("success");

                                    refresh_tree();

                                },error:function(){
                                   // alert("failed copying");
                                }

                             });

                     

                }else{


                    
                    var siteid=$siteid;
                    var deviceid=$added_device_id;
                    var subsiteid =$substename;
                    
                    
                   
                    var copyDeviceString = "siteid="+siteid+"&deviceid="+deviceid+"&subsiteID="+subsiteid;
                    
                        $.ajax({
                                'type':'POST',
                                'url' :'include/ajax/copydevice.php',
                                 data: copyDeviceString,
                                cache : false,
                                success: function(){

                                    

                                    refresh_tree();

                                },error:function(){
                                   // alert("failed copying");
                                }

                             });

                }

                
            }


         },
         "Edit":{

            "separator_before": false,
            "separator_after": false,
            "label": "Edit",
            "action": function (obj) { 


                if($selsubsiteID == 0 && $devid == 0){

                    $('#editsitename').val($stename);
                    $('#editsitenamehid').val($stename);

                    $("#editsite").dialog();
                //tree.edit(node);

                }else if($selsiteID !=0 && $devid == 0){

                    $('#editSubsitename').val($stename);
                    $('#editSubsitenamehid').val($stename);

                    $("#editsubsite").dialog();

                    

                }else{

                    $('#editdeviceIP').val($ipadd);
                    $('#editdeviceIPhid').val($ipadd);

                    $("#editdevice").dialog();
                    
                }                
            }


         }

        

    };
    return items;

}
    </script>
<script type="text/javascript" charset="utf8" src="assets/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    $('#example1logsite').DataTable({
        "order": [[ 3, "desc" ]]
    });
    $('#example1logsub').DataTable({
        "order": [[ 3, "desc" ]]
    });
    $('#example1log').DataTable({
        "order": [[ 3, "desc" ]]
    });
</script>

</body>
</html>
