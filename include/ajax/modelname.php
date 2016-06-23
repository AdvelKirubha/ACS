<?php
include('../../dbconfig.php');
if($_GET['DeviceID']) 
{
	//$name=$_GET['name'];
  //$newdata=$_GET['newdata'];
   // $str = ltrim($name, 'image');
  $deviceID = $_GET['DeviceID'];
  $order=mysql_query("select * from devices where DeviceID = '$deviceID'");
  $row=mysql_fetch_assoc($order);
  $name = $row['DEVICE'];

   //$order=mysql_query("select * from treeview_items where parent_id = '$str' and name='$newdata'") ;
    //$row=mysql_fetch_assoc($order);
   //$name = $row['name']; 
?>

<style type="text/css">
  .bor{
    border-right: 1px solid black;
    border-left: 1px solid black;
    text-align: left;
    padding: 0px;
   
    border-bottom: 1px solid black;
}
.header{
   border: 1px solid black;
   padding-left: 2px;
   margin: 0px;
   text-align: left; 
   color: white;
   background-color: black;

}
.colbor{
  border-right: 1px solid black;border-bottom:1px solid black;    border-left: 1px solid black;
  height: 19px !important;
  text-align: left;
  margin:0px;
  padding-left: 5px;
/*  width: 16.6667%;
*/


}
</style>



<div style="padding-right:5px; padding-top:2px;margin:0px; text-align:left;">
 			<div class="row" style="padding-left:5px; margin:0px; text-align:left;">
            <div class="col-md-12 header">
              <lable style="padding-left: 5px;">System Information</lable>
            </div>
        </div>
        <div class="row" style="padding-left:5px; padding-right:1px;margin:0px; text-align:left;">
            <div class="col-md-12 bor">
           <div class="col-md-2" style="border-right: 1px solid black; padding-left: 5px; padding-top: 3px; float: left;">
           <label>Model</label>
            </div>
            <div class="col-md-6" style="padding-left:5px; padding-top: 3px;margin:0px; text-align:left;">

            <label><?php echo $name; ?></label>
            </div>
            </div>
        </div>

<br/>
<br/>
 		<div class="row" style="padding-left:5px; padding-right:1px; margin:0px; text-align:left;">
            <div class="col-md-12 header">
           <label style="padding-left: 5px">Inputs</label>
            </div>
        </div>
        <div class="row" style="padding-left:5px;padding-right:1px; margin:0px; text-align:left;">
            <div class="col-md-12 bor" style="padding:0;">
           
         
<?php

 
     $HDMIIN = $row['HDMIIN'];
        $one = count($HDMIIN);
        $s=1;
	 if($one == 0){
        } else {
        for ( $i=1; $i<=$HDMIIN; $i++ ){
        	?>
   					<div class="col-md-2 col-xs-3 colbor">	

                    <p style="text-align: left;" id="">Input <?php echo $s; ?> </p>
                    
              		</div>
                  <div class="col-md-2 col-xs-9 colbor">
                  <p style="text-align: left; color: #F96302" id="">HDMI</p>
                  </div>
<?php
      $s++;
          }
        }


        $HDBaseTInput = $row['HDBaseTInput'];
        $three= count($HDBaseTInput);
        if($three == 0){
        } else {
        for ( $i=1; $i<=$HDBaseTInput; $i++ ){
         ?>
   					<div class="col-md-2 col-xs-3 colbor">	
                    <p style="text-align: left;" id="">Input <?php echo $s; ?> </p>
                    
              		</div>
                  <div class="col-md-2 col-xs-9 colbor">
                  <p style="text-align: left; color:#016836" id="">HDBaseT</p>
                  </div>
<?php
 $s++;
          }
        }
      

        $ANALOGIN = $row['ANALOGIN'];
        $seven= count($ANALOGIN);
        if($seven == 0){
        } else {
        for ( $i=1; $i<=$ANALOGIN; $i++ ){
         ?>
   					<div class="col-md-2 col-xs-3 colbor">	
                    <p style="text-align: left;" id="">Input <?php echo $s; ?> </p>
                    
              		</div>
                  <div class="col-md-5 colbor">
                  <p style="text-align: left; " id="">ANALOG</p>
                  </div>
<?php
 $s++;
          }
        }
      
        $RS232In = $row['RS232In'];
        $nine= count($RS232In);
        if($nine == 0){
        } else {
        for ( $i=1; $i<=$RS232In; $i++ ){
          ?>
   					<div class="col-md-2 col-xs-3 colbor">	
                    <p style="text-align: left;" id="">Input <?php echo $s; ?> </p>
                    
              		</div>
            <div class="col-md-2 col-xs-3 colbor">
                  <p style="text-align: left;" id="">RS232</p>
            </div>
<?php
 $s++;
          }
        }

      
        $IRIN = $row['IRIN'];
        $one1= count($IRIN);
        if($one1 == 0){
        } else {
        for ( $i=1; $i<=$IRIN; $i++ ){
           ?>
   					<div class="col-md-2 col-xs-3 colbor">	
                    <p style="text-align: left;" id="">Input <?php echo $s; ?> </p>
                    
              		</div>
                  <div class="col-md-2 col-xs-9 colbor">
                  <p style="text-align: left;" id="">IR</p>
                  </div>
<?php
 $s++;
          }
        }
       
        $VGAIN = $row['VGAIN'];
        $three3= count($VGAIN);
        if($three3 == 0){
        } else {
        for ( $i=1; $i<=$VGAIN; $i++ ){
          ?>
            <div class="col-md-2 col-xs-3 colbor">  
                    <p style="text-align: left;" id="">Input <?php echo $s; ?> </p>
                    
                  </div>
                  <div class="col-md-2 col-xs-9 colbor">
                  <p style="text-align: left; color:#C46C13" id="">VGA</p>
                  </div>
<?php
 $s++;
          }
        }

        $DisplayPortIN = $row['DisplayPortIN'];
        $three4= count($DisplayPortIN);
        if($three4 == 0){
        } else {
        for ( $i=1; $i<=$DisplayPortIN; $i++ ){
          ?>
            <div class="col-md-2 col-xs-3 colbor">  
                    <p style="text-align: left;" id="">Input <?php echo $s; ?> </p>
                    
                  </div>
                  <div class="col-md-2 col-xs-9 colbor">
                  <p style="text-align: left; color:#C46C13" id="">DisplayPort</p>
                  </div>
<?php
 $s++;
          }
        }
        ?>
           </div>
        </div>
        <br/>
        <div class="row" style="padding-left:5px;padding-right:1px;margin:0px; text-align:left;">
            <div class="col-md-12 header">
           <div style="border-right: 1px solid black; padding-left: 5px;">
           <label>Outputs</label>
           </div>
            </div>
        </div>
        <div class="row" style="padding-left:5px;padding-right:1px;margin:0px; text-align:left;">
            <div class="col-md-12 bor"  style="padding-right: 0px;  padding-left: 0px;">
         
<?php
$r=1;
 //$order1=mysql_query("select * from devices where DeviceID = '$deviceID'");
    //$row1=mysql_fetch_assoc($order1);

     $HDMIOUT = $row['HDMIOUT'];
        $one = count($HDMIOUT);
	 if($one == 0){
        } else {
        for ( $i=1; $i<=$HDMIOUT; $i++ ){
        	?>
   					<div class="col-md-2 col-xs-3 colbor">	
                    <p style="" id="">Output <?php echo $r; ?> </p>
                    
              		</div>
                  <div class="col-md-2 col-xs-9 colbor">
                  <p style="text-align: left; color:#F96302;padding: 0px;   /*width: 40px;*/" id="">HDMI</p>
                  </div>
<?php
 $r++;
          }
        }


        $HDBaseTOUT = $row['HDBaseTOUT'];
        $three= count($HDBaseTOUT);
        if($three == 0){
        } else {
        for ( $i=1; $i<=$HDBaseTOUT; $i++ ){
         ?>
   					<div class="col-md-2 col-xs-3 colbor">	
                    <p style="text-align: left;padding: 0px;" id="">Output<?php echo $r; ?> </p>
                    
              		</div>
                  <div class="col-md-2 col-xs-9 colbor">
                  <p style="text-align: left;padding: 0px;  color:#016836;  /*width: 40px;*/" id="">HDBaseT</p>
                  </div>
<?php
 $r++;
          }
        }
      
        $HDMIHDMIOUT = $row['HDMIHDMIOUT'];
        $three0= count($HDMIHDMIOUT);
        if($three0 == 0){
        } else {
        for ( $i=1; $i<=$HDMIHDMIOUT; $i++ ){
         ?>
            <div class="col-md-2 col-xs-3 colbor"> 
                    <p style="text-align: left;padding: 0px;" id="">Output<?php echo $r; ?> </p>
                    
                  </div>
                  <div class="col-md-2 col-xs-9 colbor">
                  <p style="text-align: left;padding: 0px;  color:#016836;  /*width: 40px;*/" id="">HDMI+HDMI</p>
                  </div>
<?php
 $r++;
          }
        }

        $HDMIHDBaseTOUT = $row['HDMIHDBaseTOUT'];
        $three1= count($HDMIHDBaseTOUT);
        if($three1 == 0){
        } else {
        for ( $i=1; $i<=$HDMIHDBaseTOUT; $i++ ){
         ?>
            <div class="col-md-2 col-xs-3 colbor"> 
                    <p style="text-align: left;padding: 0px;" id="">Output<?php echo $r; ?> </p>
                    
                  </div>
                  <div class="col-md-2 col-xs-9 colbor">
                  <p style="text-align: left;padding: 0px;  color:#016836;  /*width: 40px;*/" id="">HDMI+HDBaseT</p>
                  </div>
<?php
 $r++;
          }
        }

        $AUDIOOUT = $row
        ['AUDIOOUT'];
        $seven= count($AUDIOOUT);
        if($seven == 0){
        } else {
        for ( $i=1; $i<=$AUDIOOUT; $i++ ){
         ?>
   					<div class="col-md-2 col-xs-3 colbor">	
                    <p style="text-align: left;padding:0px;" id="">Output<?php echo $r; ?> </p>
                    
              		</div>
                  <div class="col-md-2 col-xs-9 colbor">
                  <p style="text-align: left;padding: 0x; /*width: 40px;*/" id="">AUDIO</p>
                  </div>
<?php
 $r++;
          }
        }
         $ANALOGOUT = $row['ANALOGOUT'];
        $seven= count($ANALOGOUT);
        if($seven == 0){
        } else {
        for ( $i=1; $i<=$ANALOGOUT; $i++ ){
         ?>
            <div class="col-md-2 col-xs-3 colbor">  
                    <p style="text-align: left;padding: 0px;" id="">Output<?php echo $r; ?> </p>
                    
                  </div>
                  <div class="col-md-2 col-xs-9 colbor">
                  <p style="text-align: left;padding: 0px; /*width: 40px;*/" id="">ANALOG</p>
                  </div>
<?php
 $r++;
          }
        }
      
        $RS232Out = $row['RS232Out'];
        $nine= count($RS232Out);
        if($nine == 0){
        } else {
        for ( $i=1; $i<=$RS232Out; $i++ ){
          ?>
   					<div class="col-md-2 col-xs-3 colbor">	
                    <p style="text-align: left;padding: 0px;" id="">Output<?php echo $r; ?> </p>
                    
              		</div>
                  <div class="col-md-2 col-xs-9 colbor">
                  <p style="text-align: left;padding: 0px; /*width: 40px;*/" id="">RS232</p>
                  </div>
<?php
 $r++;
          }
        }

      
        $IROUT = $row['IROUT'];
        $one1= count($IROUT);
        if($one1 == 0){
        } else {
        for ( $i=1; $i<=$IROUT; $i++ ){
           ?>
   					<div class="col-md-2 col-xs-3 colbor">	
                    <p style="" id="">Output<?php echo $r; ?> </p>
                    
              		</div>
                  <div class="col-md-2 col-xs-9 colbor">
                  <p style="text-align: left; padding: 0px; width:40px;" id="">IR</p>
                  </div>
<?php
 $r++;
          }
        }
       
        $VGAOUT = $row['VGAOUT'];
        $three3= count($VGAOUT);
        if($three3 == 0){
        } else {
        for ( $i=1; $i<=$VGAOUT; $i++ ){
          ?>
   					<div class="col-md-2 col-xs-3 colbor">	
                    <p style="text-align: left;padding: 0px;" id="">Output<?php echo $r; ?> </p>
                    
              		</div>
                  <div class="col-md-2 col-xs-9 colbor">
                  <p style="text-align: left; color:#C46C13; padding: 0px; /*width: 40px;*/" id="">VGA</p>
                  </div>
<?php
 $r++;
          }
        }
      
?>
  
            </div>
     
     </div>
     <br/>
        </div>
<?php


}
?>
