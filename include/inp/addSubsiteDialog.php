
<div class="row" style="padding: 0px; margin:0px;">
<div class="col-md-12"  style="position: relative; float: left; text-align: left;padding: 0px; margin:0px;">
<div class="col-md-4" style="padding: 0px; margin:0px;">
<input type="hidden" name="user" id="userid" value="<?php echo $UserID; ?>">
<label style="padding-top: 9px;">Name</label>
</div>
<div class="col-md-8" style="padding: 0px; margin:0px;">
<input type="text" name="subsitesitenameD" id="subsitesitenameD" class="form-control">
</div>
</div>
</div>

<!--<div class="row">
<div class="col-md-12">
<label>Sub-Site(s)?</label> &nbsp
<input type="radio" name="radio" value="no" checked>No &nbsp
<input type="radio" name="radio" value="yes" >Yes
</div>
</div>-->

<!--<div class="row in" style="display: none;">
<div class="col-md-12">
<div class="col-md-4">
<label>Name</label>
</div>
<div class="col-md-8">
<input type="text" name="subSiteNameD" id="subSiteNameD" class="form-control">
<br>
</div>
</div>
</div>

 <div id="customFields1">
 </div>
 <a style="color: #FB7F6C;text-decoration-line: none;display: none;" href="javascript:void(0);" id="addshow" class="addshow">Add</a>


-->
<div class="row in">
<div class="col-md-12">
<label>Add Atlona Device(s)?</label>
<input type="radio" name="radio1" value="later" checked>later  
<input type="radio" name="radio1" value="yes1d">yes
</div>
</div>

<div class="row is">
<div class="col-md-12">
<div class="col-md-2">
<label style="padding-top: 9px;">Model #</label>
</div>
<div class="col-md-2">
<select  class="ElementNameD" id="ElementNameD" style="width: 140px;font-size: 12px; height: 32px !important;">
<option>Please Select Device</option>
<br>

<?php $viw=mysql_query( " SELECT * from devices");
 while($sow=mysql_fetch_assoc($viw))
  {
echo '<option value="'.$sow['DEVICE']. '">'.$sow[ 'DEVICE']. '</option>';
   } ?>
</select>
</div>
<div style="float: right; padding-right: 1.20cm;">
<div class="col-md-2" style="text-align: right;">
<label style="padding-top: 9px;">IP</label>
</div>
<div class="col-md-2" style="float: right;">
<input type="text" name="ipaddress1D" id='ipaddress1D' style="width: 81px; height:30px;margin-left: -50px;">

</div>
</div>
<br>
<div class="col-md-2">
</div>

</div>
</div>

 <div id="customFieldsfordevice">
 </div>
<!-- <a style="color: #FB7F6C;text-decoration-line: none;display: none;" href="javascript:void(0);" id="adddevD" class="adddevD">Add</a>-->
<div class="row">
<div class="col-md-12">
<div class="col-md-offset-8 col-md-1" style="float: right;">
<input type="submit" name="addsubmitvalue" class="createsubsite" id="createsubsite" value="Create Sub-Site" style="background: rgb(255, 99, 0); border: 1px solid black; float: right; margin: 0px; font-weight: bold;">
</div>
</div>
</div>


<script type="text/javascript">
var issubsite = 0;
var deviceID;
var treeparent;
var isdevice =0;


$(document).ready(function(){

        
    $('input[type="radio"]').click(function(){
                  
        
     if($(this).attr("value")=="later"){
          $("#adddevD").hide();
          $(".is").hide();
          isdevice =0;

        }
        if($(this).attr("value")=="yes1d"){
            $("#adddevD").show();
            $(".is").show();
            isdevice =0;
        }      


    });
   });
   
/*
    $(".addshow").click(function(){
         var subSite =0;
        $("#customFields1").append('<div class="row in" ><div class="col-md-12"><div class="col-md-4"><label>Name</label></div><div class="col-md-8"><input type="text" name=" " class="form-control"></div></div></div><br/>');
        subSite= subSite+1;*
    });*/

  
    /*$(".adddevD").click(function(){
         
        $("#customFieldsfordevice").append('<div class="row is"><div class="col-md-12"><div class="col-md-2"><label style="padding-top: 9px;">Model #</label></div><div class="col-md-2 subsite"><select class="" style="width: 140px;font-size: 12px; padding-top:5px; text-align: left;height: 32px !important;"><option>Please Select Device</option><?php $viw=mysql_query( " SELECT * from devices"); while($sow=mysql_fetch_assoc($viw))  {echo '<option value="'.$sow['DEVICE']. '">'.$sow[ 'DEVICE']. '</option>';   } ?></select></div><div style="float: right;"><div class="col-md-2" style="padding-right:1.5cm; text-align:right"><label style="padding-top: 5px;">IP</label></div><div class="col-md-2"><input type="text" style="width: 81px;margin-left: -50px; height:30px;"></div></div></div></div></div><br>');
       
    });*/

    $( ".ElementNameD" ).change(function() {

 var ElementNameD=$('#ElementNameD :selected').val(); 
 if (ElementNameD=="Please Select Device"){

   
    $("#warning").text("please select any device");
    $("#warning").css({'visibility':'visible','color':'red'});
    $("#ElementName").css({'border':'1px solid red'});

 }else{

     $("#warning").css('visibility','hidden');

     var getDeviceIdString="Device="+ElementNameD;
    console.log(getDeviceIdString);
    $.ajax({
        'type':'POST',
        'url' :'include/ajax/finddeviceid.php',
        data: getDeviceIdString,
        cache : false,
        success: function(data){

            console.log(data);

            deviceID = $.trim(data);

            console.log("the returned Id="+deviceID);

        },
        error: function(){

        }
    });


 }
       
   
 
});





    $("#createsubsite").click(function()
    {



     var subsiteD=$('#subsitesitenameD.form-control').val();
     var parentsite=$selsiteID;
     var userIdd=$('#userid').val();
     var devicenameD =$('#ElementNameD :selected').val();
     var ipadd1d=$('#ipaddress1D').val();

     //var site=$stename;

     var findsiteID="siteID="+parentsite;
    if(isdevice==0){

        if(subsiteD==""){


            $("#subsitesitenameD.form-control").css({'border':'1px solid red'});

        }else{


            $.ajax({



        type:'POST',
        url:'include/inp/findparentid.php',
        data:findsiteID,
        cache: false,
        success: function(data){
            console.log(data);
           treeparent=$.trim(data);

           var subsitestring="user="+userIdd+"&siteID="+parentsite+"&ElementName="+devicenameD+"&subsitename="+subsiteD+"&ipadd="+ipadd1d+"&DeviceID="+deviceID+"&treeparent="+treeparent;

    

     $.ajax({
        type:'POST',
        url:'include/inp/insertsubsitedata.php',
        data:subsitestring,
        cache:false,
        success: function(data){
          console.log("success inserting subsite");
           $("#startaddsubsite").dialog("close");
          refresh_tree();

        },error: function(data){
          
        }





     });





        }, error: function(data){
            console.log("failed");
        }

     });


        }



    }else{

         if(subsiteD==""||devicenameD=="Please Select Device"||ipadd1d==""){


            $("#subsitesitenameD.form-control").css({'border':'1px solid red'});
            $("#ElementNameD").css({'border':'1px solid red'});
            $("#ipaddress1D").css({'border':'1px solid red'});



     }else{

        $.ajax({



        type:'POST',
        url:'include/inp/findparentid.php',
        data:findsiteID,
        cache: false,
        success: function(data){
            console.log(data);
           treeparent=$.trim(data);

           var subsitestring="user="+userIdd+"&siteID="+parentsite+"&ElementName="+devicenameD+"&subsitename="+subsiteD+"&ipadd="+ipadd1d+"&DeviceID="+deviceID+"&treeparent="+treeparent;

    

     $.ajax({
        type:'POST',
        url:'include/inp/insertsubsitedata.php',
        data:subsitestring,
        cache:false,
        success: function(data){
          console.log("success inserting subsite");
           $("#startaddsubsite").dialog("close");
          refresh_tree();

        },error: function(data){
          
        }





     });





        }, error: function(data){
            console.log("failed");
        }

     });



     }





    }
    

     

     


     
   
     
     //var subsite=$('#subSiteName.form-control').val();
     //var site=$('#sitename.form-control').val();
     //var user=$('#userid').val();
     //var ElementName=$('#ElementName :selected').val();
     //var ipadd=$('#ipaddress1').val();

    // var dataString  = "user="+user+"&site="+site+"&ElementName="+ElementName+"&ipadd="+ipadd+"&subsite="+subsite+"&issubsite="+issubsite; 
     //console.log(dataString);   
     

        });

</script>
