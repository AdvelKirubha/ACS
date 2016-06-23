<form id="subsiteform" name="subsiteform">
<label name="useruser" id="userid" value="<?php echo $UserID; ?>" style="visibility: hidden"> </label>
<div class="row" style="padding: 0px; margin:0px;">
<div class="col-md-12"  style="position: relative; float: left; text-align: left;padding: 0px; margin:0px;">
<div class="col-md-4" style="padding: 0px; margin:0px;">

<label>Name</label>
</div>
<div class="col-md-8" style="padding: 0px; margin:0px;">
<input type="text" name="sitenamesite" id="sitenamesite">
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<label>Sub-Site(s)?</label> &nbsp
<input type="radio" name="radio" value="no" checked>No &nbsp
<input type="radio" name="radio" value="yes" >Yes
</div>
</div>
<div id="addsubsitefied">
<div class="row in" style="display: none;">
<div class="col-md-12">
<div class="col-md-4">
<label style="padding-top: 9px;">Name</label>
</div>
<div class="col-md-8">
<input type="text" name="subSiteName" id="subSiteName" class="form-control name_list">
<br>
</div>
</div>
</div>
</div>
 <a style="color: #FB7F6C;text-decoration-line: none;display: none;" href="javascript:void(0);" id="addshow" class="addshow">Add</a>



<div class="row">
<div class="col-md-12">
<label>Add Atlona Device(s)?</label>
<input type="radio" name="radio1" value="later" checked>later  
<input type="radio" name="radio1" value="yes1">Yes
</div>
</div>

<div class="row is">
<div class="col-md-12">
<div class="col-md-2">
<label style="padding-top: 9px;">Model #</label>
</div>
<div class="col-md-2">
<select  class="ElementName" id="ElementName" name="Devicename" style="width: 140px;font-size: 12px; height: 32px !important;">
<option>Please Select Device</option>
<?php $viw=mysql_query( " SELECT * from devices");
 while($sow=mysql_fetch_assoc($viw))
  {
echo '<option value="'.$sow['DEVICE']. '">'.$sow[ 'DEVICE']. '</option>';
   } ?>
</select>
<label id="warning" class="warning" style="visibility: hidden;"></label>
</div>
<div style="float: right; padding-right: 1.20cm;">
<div class="col-md-2" style="text-align: right;">
<label style="padding-top: 9px;">IP</label>
</div>
<div class="col-md-2" style="float: right;">
<input type="text" name="ipaddress" id='ipaddress1' style="width: 81px;height: 30px;margin-left: -50px;">
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

 <div id="customFields2">
 </div>
 <a style="color: #FB7F6C;text-decoration-line: none;display: none;" href="javascript:void(0);" id="siteadddevice" class="siteadddevice">Add</a>

<div class="row">
<div class="col-md-12">
<div class="col-md-offset-8 col-md-1" style="padding-right: 2cm;float: right;">
<input type="submit" name="addsubmitvalue" id="create" value="Create Site" style="background: rgb(255, 99, 0); border: 1px solid black; font-weight: bold;">
</div>
</div>
</div>
</form>

<script type="text/javascript">
var issubsite = 0;
var deviceID;

$( ".ElementName" ).change(function() {

 var ElementName=$('#ElementName :selected').val(); 
 if (ElementName=="Please Select Device"){

   
    $("#warning").text("please select any device");
    $("#warning").css({'visibility':'visible','color':'red'});
    $("#ElementName").css({'border':'1px solid red'});

 }else{

     $("#warning").css('visibility','hidden');

     var getDeviceIdString="Device="+ElementName;
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



$(document).ready(function(){
    var countsubSite =0;
    var adddevice=0;


     
   // var site=$('#sitename.form-control').val();

            $(".is").hide();
    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="no"){
           $("#addshow").hide();
           $(".in").hide();
           issubsite = 0;
           console.log(issubsite);
        }
        if($(this).attr("value")=="yes"){
            $("#addshow").show();
            $(".in").show();
            issubsite = 1;
            countsubSite =1;
            console.log(issubsite);
            
                    }
     if($(this).attr("value")=="later"){
          $("#siteadddevice").hide();
           $(".is").hide();
           adddevice=0;
        }
        if($(this).attr("value")=="yes1"){
            $("#siteadddevice").show();
            $(".is").show();
             adddevice = 1;
        }      


    });
   
   

    $(".addshow").click(function(){
       // $('#sitenametext').value(sitename);
        $("#addsubsitefied").append('<div class="row in" id='+countsubSite+'><div class="col-md-12"><div class="col-md-4"><label>Name</label></div><div class="col-md-8"><input type="text" name="subSiteName" class="form-control name_list"></div></div></div><br/>');

        countsubSite++;
        console.log(countsubSite);

      

    });
  
   $(".siteadddevice").click(function(){

    if (adddevice<countsubSite){

        $("#customFields2").append('<div class="row is"><div class="col-md-12"><div class="col-md-2"><label style="padding-top: 9px;">Model #</label></div><div class="col-md-2"><select class="" name="Devicename" style="width: 140px;font-size: 12px; text-align: left;height: 32px !important;"><option>Please Select Device</option><?php $viw=mysql_query( " SELECT * from devices"); while($sow=mysql_fetch_assoc($viw))  {echo '<option value="'.$sow['DEVICE']. '">'.$sow[ 'DEVICE']. '</option>';   } ?></select></div><div style="float: right;"><div class="col-md-2" style="position:relative;padding-right:1.5cm; text-align:right"><label style="padding-top: 9px;">IP</label></div><div class="col-md-2"><input type="text" name="ipaddress" style="width: 81px;height:30px;margin-left: -50px;"></div></div></div></div></div>');
       // atlonadevicename = atlonadevicename+1;
       adddevice++;
       console.log(adddevice);

     
    }else{

       console.log("cannot add device without addidng subsite");


         
      
     }
    });

   
    $("#create").click(function()
    {
  
   
     
     var subsite=$('#subSiteName.form-control').val();
     var site=$('#sitenamesite').val();
     var user=$('#userid').val();
     var ElementName1=$('#ElementName :selected').val();
     var ipadd=$('#ipaddress1').val();


     if(site==""||subsite==""){
    $("#sitenamesite").css({'border':'1px solid red'});
        $("#subSiteName").css({'border':'1px solid red'});

        
     }else{




     var dataString  = "user="+user+"&site="+site+"&ElementName="+ElementName1+"&ipadd="+ipadd+"&subsitename="+subsite+"&issubsite="+issubsite; 
     console.log(dataString);   
 
 if (issubsite  ==1){


     
     
    
    console.log(adddevice);
    $("#subsiteform :disabled").removeAttr('disabled');
    //var formdata = $('#subsites').serialize();
   
    //alert (formdata);
    //var newvariable1 = document.getElementsByName("subSiteName")[0].value;
    //var newvariable2 = document.getElementsByName("subSiteName")[1].value;
    //console.log("Value here : ",newvariable1,newvariable2);

    var inputLen = document.getElementsByName("subSiteName").length;
   var deviceLen = document.getElementsByName("Devicename").length;

    var inputData = [];

    if (adddevice <1){
        for (var i = 0; i < inputLen; i++){
        var a = document.getElementsByName("subSiteName")[i].value;
        inputData.push({input:a});
        }


      }else{

    for (var i = 0; i < inputLen; i++) {

      

        var a = document.getElementsByName("subSiteName")[i].value;
      }
      for (var i = 0; i < deviceLen; i++) {
        var b = document.getElementsByName("Devicename")[i].value;
        var c = document.getElementsByName("ipaddress")[i].value;

      inputData.push({input:a,Device:b,ip:c});
      //inputData.push({Device:b});
      //inputData.push({ip:c});
      }
    }

  

    console.log('inputData', inputData);
     var inputData = JSON.stringify(inputData);
     console.log(inputData);
    
     var sitear={};
     sitear[user]=site;
     console.log(sitear);

     var sitedata = JSON.stringify(sitear);

     console.log(sitedata);

     
    
    //var serialize = $("#subsiteform :input").serialize();


   if (adddevice =0){


$.ajax ({


       type:"POST",
          url : "include/inp/insertmultiple.php",
          data: {site :sitedata },
          success: function(data){


             console.log("success adding site");
             $("#startaddsite").dialog("close");  
             refresh_tree();

                      

            },error: function(data){
        console.log("failure getting parent"+data);
    }




});


   }else{

$.ajax ({    
          type:"POST",
          url : "include/inp/insertmultiple.php",
          data: {inputVal : inputData, site :sitedata },
          success: function(data){


             console.log("success adding site");
             $("#startaddsite").dialog("close");  
             refresh_tree();

                      

            },error: function(data){
        console.log("failure getting parent"+data);
    }




});}



 }else {   


        var sitedatastring = dataString+"&DeviceID="+deviceID+"&issubsite="+issubsite;
     
 $.ajax
                ({
                    type: "POST",
                    url: "include/inp/startaddsitedata.php",
                    data: sitedatastring,
                    cache: false,
                     success: function(data) {
                        //console.log(data); //Try to log the data and check the response
                        //window.location.href = "dashboard.php";
                           console.log("success");
                            // $('#left_sites_nav_tree__').clsoe();


                           //var parentID = data;
                          // var subdatastring = dataString +"&parentID="+parentID;
                          // console.log(subdatastring);
        

                          // receiceDataForTree();
                           $("#startaddsite").dialog("close");
                           refresh_tree();
                          
                         
                    },
                    error: function(){
                     console.log("failure");
                    }
                });
            }


     }

        });
});
   

</script>
