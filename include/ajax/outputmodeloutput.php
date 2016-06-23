<?php
include('../../dbconfig.php');
if($_GET['DeviceID']) 
{
  $deviceID = $_GET['DeviceID'];
  $configsiteID = $_GET['siteID'];
   $subsiteID=$_GET['subsiteid'];
   $isdivID=$_GET['isdiv'];

   if(empty($subsiteID)){
    $subsiteID=0;
   }
  //$newdata=$_GET['newdata'];
   // $str = ltrim($name, 'image');
    //$order=mysql_query("select * from treeview_items where parent_id = '$str' and name='$newdata'") ;
   // $row=mysql_fetch_assoc($order);
   //  $name = $row['name']; 
    $order1=mysql_query("select * from devices where DeviceID = '$deviceID'") ;
    $row1=mysql_fetch_assoc($order1);
    $name = $row1['DEVICE'];
?>  
<style type="text/css">
.textboxshow{
  margin-top: 4px;
}
  .header{
   border: 1px solid black;
   text-align: left; 
    background: black;
    padding: 0px;
    color: white;
}
</style> 
<div style="padding:0px;
    margin: 0px;
    ">       
<div class="row" style="padding:0px;margin:0px; text-align:left;">
 <div class="col-md-12 header">
  <div style="float: left;padding-left: 0px">
  <label>Outputs</label>
  </div>
  </div>
</div>
<br/>

<?php
$s=1;

    $HDMIOUT = $row1['HDMIOUT'];
    $one = count($HDMIOUT);
	 if($one == 0){
        } else {
        for ( $i=1; $i<=$HDMIOUT; $i++ ){
          ?>
        	 <div class="row">
          <div class="col-md-12">
           <?php
          $order2=mysql_query("select * from deviceconfig where DeviceID = '$deviceID' and currentinput = 'HDMI$s' and inputoutputtype ='2' and siteID='$configsiteID' and subsiteID='$subsiteID' and isdiv='$isdivID'");
          $row2=mysql_fetch_assoc($order2); 
          $row =$row2['currentinput'];
          $current ='HDMI'.$s;
          ?>
          <span style="text-align: left;    width: 50px;height: 20px;" id="">Output <?php echo $s; ?> </span>: <span style="text-align: left; color:#F96302;   width: 50px;height: 20px;" id="">HDMI</span> <input type="" class="textboxshow" maxlength="15" id="textboxshowOUT<?php echo $s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/>
            <input type="hidden" id="currentinputo<?php echo $s; ?>" value="HDMI<?php echo $s; ?>">      
          </div>
          </div>
         <?php include 'databaseoutput.php'; ?>
         <?php
            $s++;
          }
        }

          $xtex=2;
    $HDMIHDMIOUT = $row1['HDMIHDMIOUT'];
    $one1 = count($HDMIHDMIOUT);
   if($one1 == 0){
        } else {
        for ( $i=1; $i<=$HDMIHDMIOUT; $i++ ){
          for ($xtex=0; $xtex < 2; $xtex++) { 
          ?>
           <div class="row">
          <div class="col-md-12">
           <?php
          $order2=mysql_query("select * from deviceconfig where DeviceID = '$deviceID' and currentinput = 'HDMIHDMI$xtex$s' and inputoutputtype ='2' and siteID='$configsiteID' and subsiteID='$subsiteID' and isdiv='$isdivID'");
          $row2=mysql_fetch_assoc($order2); 
          $row =$row2['currentinput'];
          $current ='HDMIHDMI'.$xtex.$s;
          if($xtex==0)
          {
          ?>
          <span style="text-align: left;    width: 50px;height: 20px;" id="">Output <?php echo $s; ?> </span>: <span style="text-align: left; color:#F96302;   width: 50px;height: 20px;" id="">HDMI</span> <input type="" class="textboxshow" maxlength="15" id="textboxshowOUT<?php echo $xtex.$s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/>
            <input type="hidden" id="currentinputo<?php echo $xtex.$s; ?>" value="HDMIHDMI<?php echo $xtex.$s; ?>">      
          </div>
          </div>
         <?php include 'databaseoutput.php'; ?>
         <?php
       }
          if($xtex==1)
          {
          ?>
          <span style="text-align: left;    padding-left: 50px;width: 50px;height: 20px;" id=""> </span><span style="text-align: left; color:#F96302;   width: 50px;height: 20px;" id="">HDMI</span> <input type="" class="textboxshow" maxlength="15" id="textboxshowOUT<?php echo $xtex.$s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/>
            <input type="hidden" id="currentinputo<?php echo $xtex.$s; ?>" value="HDMIHDMI<?php echo $xtex.$s; ?>">      
          </div>
          </div>
         <?php include 'databaseoutput.php'; ?>
         <?php
       }
       }
            $s++;
          }
        }

          $xtex=2;
    $HDMIHDBaseTOUT = $row1['HDMIHDBaseTOUT'];
    $one2 = count($HDMIHDBaseTOUT);
   if($one2 == 0){
        } else {
        for ( $i=1; $i<=$HDMIHDBaseTOUT; $i++ ){
          for ($xtex=0; $xtex < 2; $xtex++) { 
          ?>
           <div class="row">
          <div class="col-md-12">
           <?php
          $order2=mysql_query("select * from deviceconfig where DeviceID = '$deviceID' and currentinput = 'HDMIHDBaseT$xtex$s' and inputoutputtype ='2' and siteID='$configsiteID' and subsiteID='$subsiteID' and isdiv='$isdivID'");
          $row2=mysql_fetch_assoc($order2); 
          $row =$row2['currentinput'];
          $current ='HDMIHDBaseT'.$xtex.$s;
          if($xtex==0)
          {
          ?>
          <span style="text-align: left;    width: 50px;height: 20px;" id="">Output <?php echo $s; ?> </span>: <span style="text-align: left; color:#F96302;   width: 50px;height: 20px;" id="">HDMI</span> <input type="" class="textboxshow" maxlength="15" id="textboxshowOUT<?php echo $xtex.$s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/>
            <input type="hidden" id="currentinputo<?php echo $xtex.$s; ?>" value="HDMIHDBaseT<?php echo $xtex.$s; ?>">      
          </div>
          </div>
         <?php include 'databaseoutput.php'; ?>
         <?php
       }
          if($xtex==1)
          {
          ?>
          <span style="text-align: left;    padding-left: 50px;width: 50px;height: 20px;" id=""> </span><span style="text-align: left; color:#F96302;   width: 50px;height: 20px;" id="">HDBaseT</span> <input type="" class="textboxshow" maxlength="15" id="textboxshowOUT<?php echo $xtex.$s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/>
            <input type="hidden" id="currentinputo<?php echo $xtex.$s; ?>" value="HDMIHDBaseT<?php echo $xtex.$s; ?>">      
          </div>
          </div>
         <?php include 'databaseoutput.php'; ?>
         <?php
       }
       }
            $s++;
          }
        }


    $HDBaseTOUT = $row1['HDBaseTOUT'];
    $three= count($HDBaseTOUT);
    if($three == 0){
        } else {
        for ( $i=1; $i<=$HDBaseTOUT; $i++ ){
          ?>
          <div class="row">
          <div class="col-md-12">
           <?php
          $order2=mysql_query("select * from deviceconfig where DeviceID = '$deviceID' and currentinput = 'HDbaseT$s' and inputoutputtype ='2' and siteID='$configsiteID' and subsiteID='$subsiteID' and isdiv='$isdivID'");
          $row2=mysql_fetch_assoc($order2); 
          $row =$row2['currentinput'];
          $current ='HDbaseT'.$s;
          ?>          
          <span style="text-align: left;    width: 50px;height: 20px;" id="">Output <?php echo $s; ?> </span>: <span style="text-align: left; color:#016836;   width: 50px;" id="">HDBaseT</span> <input type="" class="textboxshow" maxlength="15" id="textboxshowOUT<?php echo $s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/> 
           <input type="hidden" id="currentinputo<?php echo $s; ?>" value="HDbaseT<?php echo $s; ?>"> 
          </div>
          </div>
         <?php include 'databaseoutput.php'; ?>
        <?php
            $s++;
          }
        }

         $ANALOGOUT = $row1['ANALOGOUT'];
        $seven= count($ANALOGOUT);
        if($seven == 0){
        } else {
        for ( $i=1; $i<=$ANALOGOUT; $i++ ){
         ?>
          <div class="row">
          <div class="col-md-12">
        <?php
          $order2=mysql_query("select * from deviceconfig where DeviceID = '$deviceID' and currentinput = 'ANALOG$s' and inputoutputtype ='2' and siteID='$configsiteID' and subsiteID='$subsiteID' and isdiv='$isdivID'");
          $row2=mysql_fetch_assoc($order2); 
          $row =$row2['currentinput'];
          $current ='ANALOG'.$s;
          ?>
          <span style="text-align: left;    width: 50px;" id="">Output <?php echo $s; ?> </span>: <span style="text-align: left; color:black;   width: 50px;height: 20px;" id="">ANALOG</span> <input type="" class="textboxshow" maxlength="15" id="textboxshowOUT<?php echo $s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/>
           <input type="hidden" id="currentinputo<?php echo $s; ?>" value="ANALOG<?php echo $s; ?>">         
          </div>
          </div>
         <?php include 'databaseoutput.php'; ?>
         <?php
            $s++;
          }
        }
        $RS232Out = $row1['RS232Out'];
        $nine= count($RS232Out);
        if($nine == 0){
        } else {
        for ( $i=1; $i<=$RS232Out; $i++ ){
          ?>
          <div class="row">
          <div class="col-md-12">
         <?php
          $order2=mysql_query("select * from deviceconfig where DeviceID = '$deviceID' and currentinput = 'RS232$s' and inputoutputtype ='2' and siteID='$configsiteID' and subsiteID='$subsiteID' and isdiv='$isdivID'");
          $row2=mysql_fetch_assoc($order2); 
          $row =$row2['currentinput'];
          $current ='RS232'.$s;
          ?>
          <span style="text-align: left;    width: 50px;" id="">Outout <?php echo $s; ?> </span>: <span style="text-align: left; color:black;   width: 50px;height: 20px;" id="">RS232</span> <input type="" class="textboxshow" maxlength="15" id="textboxshowOUT<?php echo $s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/>
           <input type="hidden" id="currentinputo<?php echo $s; ?>" value="RS232<?php echo $s; ?>">         
          </div>
          </div>
         <?php include 'databaseoutput.php'; ?>
         <?php
            $s++;
          }
        }

      
        $IROUT = $row1['IROUT'];
        $one1= count($IROUT);
        if($one1 == 0){
        } else {
        for ( $i=1; $i<=$IROUT; $i++ ){
           ?>

          <div class="row">
          <div class="col-md-12">
          <?php
          $order2=mysql_query("select * from deviceconfig where DeviceID = '$deviceID' and currentinput = 'IR$s' and inputoutputtype ='2' and siteID='$configsiteID' and subsiteID='$subsiteID' and isdiv='$isdivID'");
          $row2=mysql_fetch_assoc($order2); 
          $row =$row2['currentinput'];
          $current ='IR'.$s;
          ?>
          <span style="text-align: left;    width: 50px;height: 20px;" id="">Output <?php echo $s; ?> </span>: <span style="text-align: left; color:black;   width: 50px;" id="">IR</span> <input type="" class="textboxshow" maxlength="15" id="textboxshowOUT<?php echo $s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/>
           <input type="hidden" id="currentinputo<?php echo $s; ?>" value="IR<?php echo $s; ?>">         
          </div>
          </div>
         <?php include 'databaseoutput.php'; ?>
         <?php
            $s++;
          }
        }
       
        $VGAOUT = $row1['VGAOUT'];
        $three3= count($VGAOUT);
        if($three3 == 0){
        } else {
        for ( $i=1; $i<=$VGAOUT; $i++ ){
           ?>
          <div class="row">
          <div class="col-md-12">
          <?php
          $order2=mysql_query("select * from deviceconfig where DeviceID = '$name' and currentinput = 'VGA$s' and inputoutputtype ='2' siteID='$configsiteID' and subsiteID='$subsiteID' and isdiv='$isdivID'");
          $row2=mysql_fetch_assoc($order2); 
          $row =$row2['currentinput'];
          $current ='VGA'.$s;
          ?>
          <span style="text-align: left;    width: 50px;height: 20px;" id="">Output <?php echo $s; ?> </span>: <span style="text-align: left; color:#C46C13;   width: 50px;height: 20px;" id="">VGA</span> <input type="" class="textboxshow" maxlength="15" id="textboxshowOUT<?php echo $s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/>
           <input type="hidden" id="currentinputo<?php echo $s; ?>" value="VGA<?php echo $s; ?>">         
          </div>
          </div>
         <?php include 'databaseoutput.php'; ?>
         <?php
            $s++;
          }
        }
}
?>
<div>
  <div class="row">
    <div style="text-align: center; margin-top:10px;">
      <button id="update_button_out">Update Display Type</button>
    </div>
  </div>
</div>
</div>


<input id="out_hiddenID_TypeID" type="hidden" value=""></input>
<input id="out_hiddenID_BrandName" type="hidden" value=""></input>

<script>
$('#update_button_out').click(function(){
    var dumyvar = "wherethis=1";
    $.ajax({
            type: "POST",
            url: "include/ajax/output/typenameoutput.php",
            data: dumyvar,
            cache: false,
            success: function(data)
            {
              $('.device1_1_out').show();
              $('.namedevice1_1_out').show();
              $(".device1_1_out").html(data);
              $('.nametype1_1_out').hide();
              $('.type1_1_out').hide();
              $('.button_div_up_out').hide();
              $('.namebrand1_1_out').hide();
              $('.brand1_1_out').hide();
              $("#updateoutputdevice").dialog();
            }

    });
});

var selectedDevice =$added_device_id;
   $(".deviceo").change(function()
    {
        var TypeID=$(this).val(); 
        var isid=$(this).attr('isid');
        var port=$(this).attr('port');
         var dataString  = "TypeID="+TypeID;
        $('#out_hiddenID_TypeID').val(TypeID);          

         if(TypeID =='Add'){



           $("#addoutputdevice").dialog();

         }else if (TypeID =='Please select Device') {

              $('.brando'+isid).hide();

              $('.brandnameo'+isid).hide();
              $('.namebrando'+isid).hide();

              $('.namemodelo'+isid).hide();
              $('.modelo'+isid).hide();

              $(".nameprotocolo"+isid).hide();
              $(".protocolo"+isid).hide();

              $(".namedeviceo"+isid).hide();
              $(".controlo"+isid).hide();
              $(".buttono"+isid).hide();



             


     }else{

        $.ajax
        ({
            type: "POST",
            url: "include/ajax/output/brandnameoutput.php",
            data: dataString,
            cache: false,
            success: function(data)
            {
              $('.brando'+isid).show();
              $('.namebrando'+isid).show();
              $('.brando'+isid).html(data);
               $('.namemodelo'+isid).hide();
              $('.modelo'+isid).hide();

              $(".nameprotocolo"+isid).hide();
              $(".protocolo"+isid).hide();
              $(".controlo"+isid).hide();
              $(".namedeviceo"+isid).hide();
            } 
    });




     }       
        
        });
    $(".brandallo").change(function(){
        var brandID=$(this).val(); 
        var isid=$(this).attr('isid');
        var port=$(this).attr('port');
        var TypeID=$('#out_hiddenID_TypeID').val();
         var dataString  = "TypeID="+TypeID+"&brandID="+brandID;


         if(brandID=="Please select Brand"){


           $('.namemodelo'+isid).hide();
              $('.modelo'+isid).hide();

              $(".nameprotocolo"+isid).hide();
              $(".protocolo"+isid).hide();

              $(".namedeviceo"+isid).hide();
              $(".controlo"+isid).hide();
              $(".buttono"+isid).hide();



         }else{

           $.ajax
        ({
            type: "POST",
           url: "include/ajax/output/modelnameoutput.php",
            data: dataString,
            cache: false,
            success: function(data)
            {
              $('.namemodelo'+isid).show();
              $('.modelo'+isid).show();
              $('.modelo'+isid).html(data);
              $(".nameprotocolo"+isid).hide();
              $(".protocolo"+isid).hide();

              $(".namedeviceo"+isid).hide();
              $(".controlo"+isid).hide();
              $(".buttono"+isid).hide();
            } 
    });

         }
       
        });

     $(".modelo").change(function()
    {
      var modelid=$(this).val();
            var isid=$(this).attr('isid');
            var port=$(this).attr('port');

      if (modelid=="Please select Model"){

         $(".nameprotocolo"+isid).hide();
              $(".protocolo"+isid).hide();

              $(".namedeviceo"+isid).hide();
              $(".controlo"+isid).hide();
              $(".buttono"+isid).hide();




      }else{

        $(".nameprotocolo"+isid).show();
         $(".protocolo"+isid).show();
          $(".namedeviceo"+isid).hide();
              $(".controlo"+isid).hide();
              $(".buttono"+isid).hide();
         $(".namedeviceo"+isid).show();
        $(".controlo"+isid).show();
        $(".buttono"+isid).show();

          var getipstring = "model="+modelid;

           $.ajax({
            type: "POST",
            url: "include/ajax/output/getProtocol.php",
            data: getipstring,
            cache: false,
            success: function(data){

              var trimdata = $.trim(data);
            

              console.log(trimdata);

              
              $(".protocolo"+isid).val(trimdata);

              


            }, error: function(){

            }

                      });
 
          $.ajax({
            type: "POST",
            url: "include/ajax/output/getIP.php",
            data: getipstring,
            cache: false,
            success: function(data){


              $(".controlo"+isid).val(data);

              


            }, error: function(){

            }

                      });


      }
        });


     $(".protocolo").change(function()
    {
      var proto =$(this).val();
            var isid=$(this).attr('isid');
            var port=$(this).attr('port');


      if(proto=="Please select protocol"){

        $(".namedeviceo"+isid).show();
        $(".controlo"+isid).show();
        $(".buttono"+isid).show();


      }else{
         $(".protoio").attr('id', isid);
         $(".namedeviceo"+isid).show();
        $(".controlo"+isid).show();
        $(".buttono"+isid).show();
      }
        });

     $(".buttono").click(function()
    {
      
     var isid=$(this).attr('isid');
     var port=$(this).attr('port');
     var userid=$('#userid').val();
     var device=$('#devicenameo'+isid).val();
     var brand=$('#brandnameo'+isid).val();
     var model=$('#modelnameo'+isid).val();
     var protocol=$('#protocolnameo'+isid).val();
     var controldevice=$('#controldevicenameo'+isid).val();
     var deviceidname=$('#deviceidname').val();
     var portnumber= port;
     var currentinput=$('#currentinputo'+isid).val();
     var devicenumber=$('#textboxshowOUT'+isid).val();
    


 var dataString  = "device="+device + "&brand="+brand +"&model="+model + "&protocol="+protocol +"&isdiv="+selectedDevice+"&controldevice="+controldevice+ "&userid="+userid+ "&deviceidname="+deviceidname+ "&currentinput="+currentinput+ "&portnumber="+portnumber+"&siteID=<?php echo $configsiteID; ?>&DeviceID=<?php echo $deviceID; ?>&subsiteid=<?php echo $subsiteID; ?>&devicenumber="+devicenumber; 

 
 $.ajax
                ({
                    type: "POST",
                    url: "include/ajax/output/deviceconfigoutput.php",
                    data: dataString,
                    cache: false,
                     success: function(data) {
                        console.log(data); //Try to log the data and check the response
                        $("#inputmodelinput").load(location.href + " #inputmodelinput");
                        refresh_tree();

                    },
                    error: function(){
                    //alert("failure");
                    }
                });
                $('.buttono'+isid).hide();
                $('.updateo'+isid).show();
        });

      $(".updateo").click(function()
    {
     
     var isid=$(this).attr('isid');
     var port=$(this).attr('port');
     var device=$('#devicenameo'+isid).val();
     var brand=$('#brandnameo'+isid).val();
     var model=$('#modelnameo'+isid).val();
     var protocol=$('#protocolnameo'+isid).val();
     var controldevice=$('#controldevicenameo'+isid).val();
     var iodev=$('#iodevice'+isid).val();

     var where=$('#whereo'+isid).val();
     var portnumber= port;
     var devicenumber=$('#textboxshowOUT'+isid).val();
     
     var dataString  = "device="+device + "&brand="+brand +"&iodev="+iodev+ "&model="+model + "&protocol="+protocol + "&controldevice="+controldevice+ "&where="+where+"&siteID=<?php echo $siteconfig; ?>&DeviceID=<?php echo $deviceID; ?>&subsiteid=<?php echo $subsiteID; ?>&devicenumber="+devicenumber+ "&portnumber="+portnumber;
 $.ajax
                ({
                    type: "POST",
                    url: "include/ajax/output/deviceconfigupdate.php",
                    data: dataString,
                    cache: false,
                     success: function(data) {
                        console.log(data); //Try to log the data and check the response
                        refresh_tree();
                       
                    },
                    error: function(){
                    //alert("failure");
                    }
                });
        });


$(".hddeviceo").change(function()
    {

      var selecteddev = $(this).val();
      var isid=$(this).attr('isid');
      var port=$(this).attr('port');
      
 if (selecteddev =='Please select Device'){

    $(".hdprotocolo"+isid).hide();
    $(".protocolo"+isid).hide();
    $(".namedeviceo"+isid).hide();
    $("#controldevicenameo"+isid).hide();
    $(".buttono"+isid).hide();
    


 }else if(selecteddev =='Add'){

    $("#addoutputdevice").dialog();


 } else{

   $(".hdprotocolo"+isid).show();
    $(".protocolo"+isid).show();
    $(".namedeviceo"+isid).hide();
    $("#controldevicenameo"+isid).hide();
      


 }

      
        });

 $(".hdprotocolo").change(function()
    {
      var isid=$(this).attr('isid');
      var port=$(this).attr('port');
        $(".namedeviceo"+isid).show();
         $(".controldevicenameo"+isid).show();
         $(".buttono"+isid).show();
        });

</script>