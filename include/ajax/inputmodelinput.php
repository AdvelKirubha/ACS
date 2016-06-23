<?php
include('../../dbconfig.php');
if($_GET['DeviceID']) 
{
	//$name=$_GET['name'];
  //$newdata=$_GET['newdata'];
    //$str = ltrim($name, 'image');
    //$order=mysql_query("select * from treeview_items where parent_id = '$str' and name='$newdata'") ;
    //$row=mysql_fetch_assoc($order);
    $siteconfig = $_GET['siteID'];
   $DeviceID =$_GET['DeviceID'];
   $subsiteID=$_GET['subsiteid'];
   $isdivID=$_GET['isdiv'];
/*   ?>
   <script type="text/javascript">alert('<?php echo $isdivID; ?>');</script>
   <?php
*/   if(empty($subsiteID)){
    $subsiteID=0;
   }
    $order1=mysql_query("select * from devices where DeviceID = '$DeviceID'") ;
    $row1=mysql_fetch_assoc($order1);
    $HDMIIN = $row1['HDMIIN'];
    $name = $row1['name']; 
    $one = count($HDMIIN);
?>   
<style type="text/css">
.textboxshow{
  margin-top: 4px;
}
  .header{
   border: 1px solid black;
   text-align: center; 
   background: black;
   color: white;
   padding: 0px;
   margin: 0px;
}
.configbarIn{
  padding-left: 44px;
}

</style> 
<div style="padding: 0px;
    margin: 0;">    
 <div class="row" style="padding:0px;margin:0px; text-align:left;">
  <div class="col-md-12 header">
  <div style="padding:0px;margin:0px; text-align:left;">
   <label>Inputs</label><input type="hidden" id="deviceidname" value="<?php echo $name; ?>">
  </div>
  </div>
 </div>
  <br/>

<div style="padding-right: 0px"> 
<?php
$s=1;
	 if($one == 0){
        } else {
        for ( $i=1; $i<=$HDMIIN; $i++ ){
        	?>
          <div class="row">
          <div class="col-md-12">
          <?php
         /* $qqqq="select * from deviceconfig where (DeviceID = '$DeviceID' and currentinput = 'HDMI$s' and inputoutputtype ='1' and siteID='$siteconfig')";
          echo $qqqq;*/
          $order2=mysql_query("select * from deviceconfig where (DeviceID = '$DeviceID' and currentinput = 'HDMI$s' and inputoutputtype ='1' and siteID='$siteconfig' and subsiteID='$subsiteID' and isdiv='$isdivID')");


          
          $row2=mysql_fetch_assoc($order2); 
          $row =$row2['currentinput'];
          $current ='HDMI'.$s;
          ?>
          <span style="" id="">Input <?php echo $s; ?> </span>: <span style="text-align: left; color:#F96302;   width: 50px;" id="">HDMI</span> <input type="" class="textboxshow" maxlength="15" id="textboxshow<?php echo $s; ?>" value="<?php echo $row2['devicenumber']; ?>" ></input><br/>
          <input type="hidden" id="currentinput<?php echo $s; ?>" value="HDMI<?php echo $s; ?>">        
          </div>
          </div>

         <?php include 'databaseinput_all.php'; ?>
         <?php
            $s++;
          }
        }
// HDMIIN end
        $HDBaseTInput = $row1['HDBaseTInput'];
        $two= count($HDBaseTInput);
        if($two == 0){
        } else {
        for ( $i=1; $i<=$HDBaseTInput; $i++ ){
         ?>
          <div class="row">
          <div class="col-md-12">
        <?php
          $order2=mysql_query("select * from deviceconfig where devicename = '$name' and currentinput = 'HDBaseT$s' and inputoutputtype ='1' and siteID='$siteconfig' and subsiteID='$subsiteID' and isdiv='$isdivID'");
          $row2=mysql_fetch_assoc($order2); 
          $row =$row2['currentinput'];
          $current ='HDBaseT'.$s;
          ?>
          <span style="text-align: center;    width: 50px;" id="">Input <?php echo $s; ?> </span>: <span style="text-align: left; color:#016836;   width: 50px;" id="">HDBaseT</span> <input type="" class="textboxshow" maxlength="15" id="textboxshow<?php echo $s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/>  
          <input type="hidden" id="currentinput<?php echo $s; ?>" value="HDBaseT<?php echo $s; ?>">      
          </div>
          </div>
         <?php include 'databaseinput_all.php'; ?>
         <?php
        $s++;
          }
        }
      
//HDBASETinput end
        $ANALOGIN = $row1['ANALOGIN'];
        $three= count($ANALOGIN);
        if($three == 0){
        } else {
        for ( $i=1; $i<=$ANALOGIN; $i++ ){
         ?>
          <div class="row">
          <div class="col-md-12">
        <?php
          $order2=mysql_query("select * from deviceconfig where devicename = '$name' and currentinput = 'Analog$s' and inputoutputtype ='1' and siteID='$siteconfig' and subsiteID='$subsiteID' and isdiv='$isdivID'");
          $row2=mysql_fetch_assoc($order2); 
          $row =$row2['currentinput'];
          $current ='Analog'.$s;
          ?>
          <span style="text-align: center;    width: 50px;" id="">Input <?php echo $s; ?> </span>: <span style="text-align: left; color:#016836;   width: 50px;" id="">Analog</span> <input type="" class="textboxshow" maxlength="15" id="textboxshow<?php echo $s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/>  
          <input type="hidden" id="currentinput<?php echo $s; ?>" value="Analog<?php echo $s; ?>">      
          </div>
          </div>
         <?php include 'databaseinput_all.php'; ?>
         <?php
        $s++;
          }
        }

        $RS232In = $row1['RS232In'];
        $four= count($RS232In);
        if($four == 0){
        } else {
        for ( $i=1; $i<=$RS232In; $i++ ){
         ?>
          <div class="row">
          <div class="col-md-12">
        <?php
          $order2=mysql_query("select * from deviceconfig where devicename = '$name' and currentinput = 'RS232$s' and inputoutputtype ='1' and siteID='$siteconfig' and subsiteID='$subsiteID' and isdiv='$isdivID'");
          $row2=mysql_fetch_assoc($order2); 
          $row =$row2['currentinput'];
          $current ='RS232'.$s;
          ?>
          <span style="text-align: center;    width: 50px;" id="">Input <?php echo $s; ?> </span>: <span style="text-align: left; color:#016836;   width: 50px;" id="">RS232</span> <input type="" class="textboxshow" maxlength="15" id="textboxshow<?php echo $s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/>  
          <input type="hidden" id="currentinput<?php echo $s; ?>" value="RS232<?php echo $s; ?>">      
          </div>
          </div>
         <?php include 'databaseinput_all.php'; ?>
         <?php
        $s++;
          }
        }

        $IRIN = $row1['IRIN'];
        $five= count($IRIN);
        if($five == 0){
        } else {
        for ( $i=1; $i<=$IRIN; $i++ ){
         ?>
          <div class="row">
          <div class="col-md-12">
        <?php
          $order2=mysql_query("select * from deviceconfig where devicename = '$name' and currentinput = 'IR$s' and inputoutputtype ='1' and siteID='$siteconfig' and subsiteID='$subsiteID' and isdiv='$isdivID'");
          $row2=mysql_fetch_assoc($order2); 
          $row =$row2['currentinput'];
          $current ='IR'.$s;
          ?>
          <span style="text-align: center;    width: 50px;" id="">Input <?php echo $s; ?> </span>: <span style="text-align: left; color:#016836;   width: 50px;" id="">IR</span> <input type="" class="textboxshow" maxlength="15" id="textboxshow<?php echo $s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/>  
          <input type="hidden" id="currentinput<?php echo $s; ?>" value="IR<?php echo $s; ?>">      
          </div>
          </div>
         <?php include 'databaseinput_all.php'; ?>
         <?php
        $s++;
          }
        }

        $VGAIN = $row1['VGAIN'];
        $six= count($VGAIN);
        if($six == 0){
        } else {
        for ( $i=1; $i<=$VGAIN; $i++ ){
         ?>
          <div class="row">
          <div class="col-md-12">
        <?php
          $order2=mysql_query("select * from deviceconfig where devicename = '$name' and currentinput = 'VGA$s' and inputoutputtype ='1' and siteID='$siteconfig' and subsiteID='$subsiteID' and isdiv='$isdivID'");
          $row2=mysql_fetch_assoc($order2); 
          $row =$row2['currentinput'];
          $current ='VGA'.$s;
          ?>
          <span style="text-align: center;    width: 50px;" id="">Input <?php echo $s; ?> </span>: <span style="text-align: left; color:#F96302;    width: 50px;" id="">VGA</span> <input type="" class="textboxshow" maxlength="15" id="textboxshow<?php echo $s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/>  
          <input type="hidden" id="currentinput<?php echo $s; ?>" value="VGA<?php echo $s; ?>">      
          </div>
          </div>
         <?php include 'databaseinput_all.php'; ?>
         <?php
        $s++;
          }
        }
      
        $DisplayPortIN = $row1['DisplayPortIN'];
        $eight= count($DisplayPortIN);
        if($eight == 0){
        } else {
        for ( $i=1; $i<=$DisplayPortIN; $i++ ){
         ?>
          <div class="row">
          <div class="col-md-12">
        <?php
          $order2=mysql_query("select * from deviceconfig where devicename = '$name' and currentinput = 'DisplayPort$s' and inputoutputtype ='1' and siteID='$siteconfig' and subsiteID='$subsiteID' and isdiv='$isdivID'");
          $row2=mysql_fetch_assoc($order2); 
          $row =$row2['currentinput'];
          $current ='DisplayPort'.$s;
          ?>
          <span style="text-align: center;    width: 50px;" id="">Input <?php echo $s; ?> </span>: <span style="text-align: left; color:#016836;   width: 50px;" id="">DisplayPort</span> <input type="" class="textboxshow" maxlength="15" id="textboxshow<?php echo $s; ?>" value="<?php echo $row2['devicenumber']; ?>"></input><br/>  
          <input type="hidden" id="currentinput<?php echo $s; ?>" value="DisplayPort<?php echo $s; ?>">      
          </div>
          </div>
         <?php include 'databaseinput_all.php'; ?>
         <?php
        $s++;
          }
        }
      
}
?>
</div>
<div>
  <div class="row">
    <div style="text-align: center; margin-top:10px;">
      <button id="update_button">Update Source Type</button>
    </div>
  </div>
</div>
</div>
<input id="in_hiddenID_TypeID" type="hidden" value=""></input>
<input id="in_hiddenID_BrandName" type="hidden" value=""></input>
<script>
$('#update_button').click(function(){
    var dumyvar = "wherethis=1";
    $.ajax({
            type: "POST",
            url: "include/ajax/input/typenameinput.php",
            data: dumyvar,
            cache: false,
            success: function(data)
            {
              $('.device1_1').show();
              $('.namedevice1_1').show();
              $(".device1_1").html(data);
              $('.nametype1_1').hide();
              $('.type1_1').hide();
              $('.button_div_up').hide();
              $('.namebrand1_1').hide();
              $('.brand1_1').hide();
              $("#updateinputdevice").dialog();
            }

    });
});

var selectedDevice =$added_device_id;
  

   $(".device").change(function()
    {


        var TypeID=$(this).val(); 
        var isid=$(this).attr('isid');
         if(TypeID == 'Add'){
          $("#addinputdevice").dialog();
         } else if(TypeID == 'Laptop' || TypeID == 'Desktop' || TypeID == 'DVD/Blue Ray' || TypeID == 'Conference' || TypeID == 'Apple TV'){


             $('.nameprotocol'+isid).hide();
             $('.protocol'+isid).hide();
             $('.brand'+isid).hide();
             $('.namebrand'+isid).hide();
             $('.namemodel'+isid).hide();
             $('.model'+isid).hide();
             $(".namedevice"+isid).hide();
             $(".control"+isid).hide();
             $(".buttoni"+isid).show();
              $(".button"+isid).show();
           //  $("#savebutton"+isid).show();



         }else if(TypeID == 'Please select Device') {

            $('.nameprotocol'+isid).hide();
             $('.protocol'+isid).hide();
             $('.brand'+isid).hide();
             $('.namebrand'+isid).hide();
             $('.namemodel'+isid).hide();
             $('.model'+isid).hide();
             $(".namedevice"+isid).hide();
             $(".control"+isid).hide();
              $(".buttoni"+isid).hide();
             $(".button"+isid).hide();

             //ss$('.update'+isid).hide();



         }else if(TypeID == 'No device') {

            $('.nameprotocol'+isid).hide();
             $('.protocol'+isid).hide();
             $('.brand'+isid).hide();
             $('.namebrand'+isid).hide();
             $('.namemodel'+isid).hide();
             $('.model'+isid).hide();
             $(".namedevice"+isid).hide();
             $(".control"+isid).hide();
              $(".buttoni"+isid).hide();
             $(".button"+isid).hide();

             //ss$('.update'+isid).hide();



         }else{
        $('#in_hiddenID_TypeID').val(TypeID);          
         var dataString  = "TypeID="+TypeID;
        $.ajax
        ({
            type: "POST",
           url: "include/ajax/input/brandnameinput.php",
            data: dataString,
            cache: false,
            success: function(data)
            {
              $('.brand'+isid).show();
              $('.namebrand'+isid).show();
              $('.brand'+isid).html(data);
               $('.namemodel'+isid).hide();
             $('.model'+isid).hide();
             $(".namedevice"+isid).hide();
             $(".control"+isid).hide();
             $('.nameprotocol'+isid).hide();
             $('.protocol'+isid).hide();
            
            } 
    });
      }
        });
    $(".brandall").change(function(){

        var brandID=$(this).val(); 
        var isid=$(this).attr('isid');
        $('#in_hiddenID_BrandName').val(brandID);   
        var TypeID=$('#in_hiddenID_TypeID').val();
         var dataString  = "TypeID="+TypeID+"&brandID="+brandID;

         if (brandID=="Please select Brand"){


              $('.namemodel'+isid).hide();

              $('.model'+isid).hide();

               $(".namedevice"+isid).hide();
                $(".control"+isid).hide();
                $(".button"+isid).hide();
                $(".nameprotocol"+isid).hide();
                $(".protocol"+isid).hide();
        







         }else{


           $.ajax
        ({
            type: "POST",
           url: "include/ajax/input/modelnameinput.php",
            data: dataString,
            cache: false,
            success: function(data)
            {
              $('.namemodel'+isid).show();
              $('.model'+isid).show();
              $('.model'+isid).html(data);
              $(".namedevice"+isid).hide();
              $(".control"+isid).hide();
              $(".button"+isid).hide();
              $(".nameprotocol"+isid).hide();
              $(".protocol"+isid).hide();
            } 
    });




         }
       
        });

     $(".model").change(function()  
    {

      var modelid=$(this).val();
      var isid=$(this).attr('isid');

      if (modelid=="Please select model"){

                $(".namedevice"+isid).hide();
                $(".control"+isid).hide();
                $(".button"+isid).hide();
                $(".nameprotocol"+isid).hide();
                $(".protocol"+isid).hide();
        


      }else{


      var isid=$(this).attr('isid');
        $(".nameprotocol"+isid).show();
         $(".protocol"+isid).show();
          $(".namedevice"+isid).hide();
          $(".control"+isid).hide();
         $(".namedevice"+isid).show();
        $(".control"+isid).show();
        $(".button"+isid).show();

          var getipstring = "model="+modelid;

           $.ajax({
            type: "POST",
            url: "include/ajax/input/getProtocol.php",
            data: getipstring,
            cache: false,
            success: function(data){

              var trimdata = $.trim(data);

              console.log(trimdata);

              
              $(".protocol"+isid).val(trimdata);

              


            }, error: function(){

            }

                      });
 
          $.ajax({
            type: "POST",
            url: "include/ajax/input/getIP.php",
            data: getipstring,
            cache: false,
            success: function(data){

              $(".control"+isid).val(data);

              


            }, error: function(){

            }

                      });



       }
        });


     $(".protocol").change(function()
    {
      var isid=$(this).attr('isid');
         $(".protoi").attr('id', isid);
        });

       $(".devicei").change(function()
    {
      var isid=$(this).attr('isid');
        $(".nameprotocol"+isid).show();
         $(".protocol"+isid).show();
        });
         $(".protocoli").change(function()
    {
      var isid=$(this).attr('isid');
        $(".namedevicei"+isid).show();
         $(".controli"+isid).show();
         $(".buttoni"+isid).show();
        });
   $(".button").click(function()
    {
     var isid=$(this).attr('isid');
     var userid=$('#userid').val();
     var device=$('#devicename'+isid).val();
     var brand=$('#brandname'+isid).val();
     var model=$('#modelname'+isid).val();
     var protocol=$('#protocolname'+isid).val();
     var controldevice=$('#controldevicename'+isid).val();
     
     var deviceidname=$('#deviceidname').val();
     var currentinput=$('#currentinput'+isid).val();
     var portnumber= isid;
     var iodev=$('#iodevice'+isid).val();
     var devicenumber=$('#textboxshow'+isid).val();

     

    


    if (device == 'Laptop' || device == 'Desktop'){


       var dataString  = "device="+device +"&protocol="+protocol + "&controldevice="+controldevice + "&userid="+userid +"&isdiv="+selectedDevice+ "&deviceidname=" +deviceidname + "&currentinput=" +currentinput+"&portnumber=" +portnumber+"&siteID=<?php echo $siteconfig; ?>&DeviceID=<?php echo $DeviceID; ?>&subsiteid=<?php echo $subsiteID; ?>"+"&iodev="+iodev+"&devicenumber="+devicenumber;

   

    }else{


     var dataString  = "device="+device + "&brand="+brand + "&model="+model + "&protocol="+protocol + "&controldevice="+controldevice+"&isdiv="+selectedDevice+ "&userid="+userid  + "&deviceidname=" +deviceidname + "&currentinput=" +currentinput+"&portnumber=" +portnumber+"&siteID=<?php echo $siteconfig; ?>&DeviceID=<?php echo $DeviceID; ?>&subsiteid=<?php echo $subsiteID; ?>"+"&iodev="+iodev+"&devicenumber="+devicenumber;

     
   }


 $.ajax
                ({
                    type: "POST",
                    url: "include/ajax/input/deviceconfiginput.php",
                    data: dataString,
                    cache: false,
                     success: function(data) {
                       $("#inputmodelinput").load(location.href + " #inputmodelinput");
                        refresh_tree();

                      // alert('successfully inserted');

                       

                    },
                    error: function(){
                    //alert("failure");
                    }
                });
                $('.button'+isid).hide();
                $('.update'+isid).show();
        });


      $(".update").click(function()
    {
      
     var isid=$(this).attr('isid');
     var device=$('#devicename'+isid).val();
     var brand=$('#brandname'+isid).val();
     var model=$('#modelname'+isid).val();

     var protocol=$('#protocolname'+isid).val();
     var controldevice=$('#controldevicename'+isid).val();
     var where=$('#where'+isid).val();
     var iodev=$('#iodevice'+isid).val();
     var portnumber= isid;
     var devicenumber=$('#textboxshow'+isid).val();

     if (device == 'Laptop' || device == 'Desktop'){

       var dataString  = "device="+device +"&protocol="+protocol + "&controldevice="+controldevice+ "&where="+where+"&iodev="+iodev+"&devicenumber="+devicenumber+"&portnumber=" +portnumber; 

     }else{


       var dataString  = "device="+device + "&brand="+brand + "&model="+model + "&protocol="+protocol + "&controldevice="+controldevice+ "&where="+where+"&iodev="+iodev+"&devicenumber="+devicenumber+"&portnumber=" +portnumber; 

     }
     
    
 $.ajax
                ({
                    type: "POST",
                    url: "include/ajax/input/deviceconfigupdate.php",
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
</script>




