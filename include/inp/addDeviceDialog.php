
<div class="row" style="padding: 0px; margin:0px;">
<div class="col-md-12"  style="position: relative; float: left; text-align: left;padding: 0px; margin:0px;">
<div class="col-md-4" style="padding: 0px; margin:0px;">
<input type="hidden" name="user" id="user" value="<?php echo $UserID; ?>">
<label id="warningdevice" class="warningdevice" style="visibility: hidden;"></label>
</div>
<div class="col-md-8" style="padding: 0px; margin:0px;">
<!--<input type="text" name="site" id="site" class="form-control">-->
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

<div class="row deviceName" style="display: none;">
<div class="col-md-12">
<div class="col-md-4">
<label style="padding-top: 9px;">Name</label>
</div>
<div class="col-md-8">
<input type="text" name="name" class="form-control device">
<br>
</div>
</div>
</div>
 
<br>


<div class="row modelInput">
<div class="col-md-12 atlonamodelRow">
<div class="col-md-2 modelname">
<label style="padding-top: 9px;">Model #</label>
</div>
<div class="col-md-2 modelselect">
<select  class="DeviceName" id="DeviceName" style="width: 140px;font-size: 12px; height: 32px !important;">
<option>Please Select Device</option>
<?php $viw=mysql_query( " SELECT * from devices");
 while($sow=mysql_fetch_assoc($viw))
  {
echo '<option value="'.$sow['DEVICE']. '">'.$sow[ 'DEVICE']. '</option>';
   } ?>
</select>
</div>
<div style="float: right; padding-right: 1.20cm;">
<div class="col-md-2 iplabel" style="text-align: right;">
<label style="padding-top: 9px;">IP</label>
</div>
<div class="col-md-2 ipbox" style="float: right;">
<input type="text" name="Deviceipaddress" id='Deviceipaddress' style="width: 90px;height: 32px !important;margin-left: -50px;">
</div>
</div>
<!--<div class="col-md-2">
<label style="    width: 156px;">Sub-Site</label>
</div>
<div class="col-md-2">
<select>   
<option></option> 
</select>
</div>
-->
</div>
</div>

 <div id="adddevicefield">
 </div>
 
<div class="row devicename">
<div class="col-md-12">
<div class="col-md-offset-8 col-md-1" style="padding-right: 2cm;float: right;">
<input type="submit" name="addsubmitvalueDevice" id="createdevice" class="createdevice" value="Save" style="background: rgb(255, 99, 0); border: 1px solid black; font-weight: bold;">

</div>
</div>
</div>


<script type="text/javascript">

$(document).ready(function(){

	

   

  

   
        });
  $( ".ElementNameD" ).change(function() {

       
   
 
});





$("#createdevice.createdevice").click(function(){

	//var deviceparent = $("#selectednode").text();
	var user= $("#userid").val();
	var devicename = $("#DeviceName option:selected").text();
	var deviceipaddress=$("#Deviceipaddress").val();
	var selectedsiteID=$selsiteID;
  var selectedsubsiteID=$selsubsiteID;

	 //var queryStringForDeviceData = "userID="+user+"&parentid="+deviceparent+"&ElementName="+devicename+"&ipadd="+deviceipaddress;

	// alert(queryStringForDeviceData);



 var DeviceName=$('#DeviceName :selected').val(); 
 if (DeviceName=="Please Select Device"){

   
    $("#warningdevice").text("please select any device");
    $("#warningdevice").css({'visibility':'visible','color':'red'});
    $("#DeviceName").css({'border':'1px solid red'});

 }else if(deviceipaddress == ""){


   $("#warningdevice").text("please enter IP");
    $("#warningdevice").css({'visibility':'visible','color':'red'});
    $("#Deviceipaddress").css({'border':'1px solid red'});

 }
 else{

     $("#warning").css('visibility','hidden');

     var getDeviceIdString="Device="+DeviceName;
    console.log(getDeviceIdString);
    $.ajax({
        'type':'POST',
        'url' :'include/ajax/finddeviceid.php',
        data: getDeviceIdString,
        cache : false,
        success: function(data){

            console.log(data);

             var deviceID = $.trim(data);


            var adddevicestring="user="+user+"&siteID="+selectedsiteID+"&subsiteID="+selectedsubsiteID+"&ElementName="+devicename+"&ipadd="+deviceipaddress+"&DeviceID="+deviceID+"&treeparent="+selectednodeID;

           

                   $.ajax({
                      type:'POST',
                      url:'include/inp/adddevicedata.php',
                      data:adddevicestring,
                      cache:false,
                      success: function(data){
                        console.log("success inserting device");

                        $("#startadddevice").dialog("close");
                        refresh_tree();
                        
                      },error: function(data){
                        
                      }
                   });


        },
        error: function(){

        }
    });


 }



	 
	
});


</script>
