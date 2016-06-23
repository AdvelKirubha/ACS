<br/>

<div class="row">

<div class="col-md-2">
<input type="hidden" name="user" id="userid" value="<?php echo $UserID; ?>">

<label style="padding-top: 8px !important;
">IP</label>
</div>
<div class="col-md-6">
<input type="text" name="editdeviceIP" id="editdeviceIP" style="width: 100px; height: 30px !important; ">
<input type="hidden" name="editdeviceIPhid" id="editdeviceIPhid" style="width: 100px; height: 30px !important; ">
</div>

<input type="submit" class="editdeviceButton" id="editdeviceButton" value="Save" style="background: rgb(255, 99, 0); border: 1px solid black; font-weight: bold; padding-top: 9px;float: right;margin-right: 25px;">
</div>




<script type="text/javascript">
var isdeviced = 0;


$(document).ready(function(){});
 $("#editdeviceButton").click(function()
    {

       

        var addeddevid= $added_device_id;
         var olddevid = $devid;
        var newdevname=$('#editdeviceIP').val(); 
        var olddevname=$('#editdeviceIPhid').val(); 
 if (newdevname!=null){



   $("#warning1").css('visibility','hidden');
    var newipad = $("#editdeviceIP").val();
    var oldipad = $("#editdeviceIPhid").val();


    var findidstring ="newip="+newipad+"&oldip="+oldipad+"&devid="+addeddevid;
   


    
     $.ajax({

        'type':'POST',
         'url':'include/ajax/updateDeviceDialog.php',
         data: findidstring,
         cache: false,
         success:function(){

            console.log("edited device");
            refresh_tree();

           $("#editdevice").dialog("close");



         },error: function(){

            console.log("error addind newdevice");


          

         }

     });    







   
   
 }else{



 $("#warning1").text("Please enter IP");
    $("#warning1").css({'visibility':'visible','color':'red'});
    $("#editdeviceIP").css({'border':'1px solid red'});





  
     
    
 }

 
        });

  

    
   
   

</script>
