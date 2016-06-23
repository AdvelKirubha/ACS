<?php
include('../../dbconfig.php');
if($_GET['name']) 
{
	$name=$_GET['name'];
    $str = ltrim($name, 'image');
    $order=mysql_query("select * from treeview_items where parent_id = '$str'") ;
    $row=mysql_fetch_assoc($order);
   $name = $row['name'];

   $order1=mysql_query("select * from devices where DEVICE = '$name'") ;
    $row1=mysql_fetch_assoc($order1);
   $image = $row1['imagepath'];

  

        $HDMIIN = $row1['HDMIIN'];
        $one = count($HDMIIN);
       
        if($one == 0){
        } else {
        for ( $i=1; $i<=$HDMIIN; $i++ ){
           echo "<option value='1' id='HDMIIN'>HDMIIN".$i."</option>"; 
          }
        }
        $HDMIOUT = $row1['HDMIOUT'];
        $two= count($HDMIOUT);
        if($two == 0){
        } else {
        for ( $i=1; $i<=$HDMIOUT; $i++ ){
           echo "<option value='2' id='HDMIOUT'>HDMIOUT".$i."</option>"; 
          }
        }
        $HDBaseTInput = $row1['HDBaseTInput'];
        $three= count($HDBaseTInput);
        if($three == 0){
        } else {
        for ( $i=1; $i<=$HDBaseTInput; $i++ ){
           echo "<option value='1' id='HDBaseTInput'>HDBaseTInput".$i."</option>"; 
          }
        }
        $HDBaseTOUT = $row1['HDBaseTOUT'];
        $four= count($HDBaseTOUT);
        if($four == 0){
        } else {
        for ( $i=1; $i<=$HDBaseTOUT; $i++ ){
           echo "<option value='2' id='HDBaseTOUT'>HDBaseTOUT".$i."</option>"; 
          }
        }

        $LAN = $row1['LAN(RJ45)'];
        $five= count($LAN);
        if($five == 0){
        } else {
        for ( $i=1; $i<=$LAN; $i++ ){
           echo "<option value='1' id='LAN(RJ45)'>LAN(RJ45)".$i."</option>"; 
          }
        }

        $AUDIOOUT = $row1['AUDIOOUT'];
        $six= count($AUDIOOUT);
        if($six == 0){
        } else {
        for ( $i=1; $i<=$AUDIOOUT; $i++ ){
           echo "<option value='2' id='AUDIOOUT'>AUDIOOUT".$i."</option>"; 
          }
        }
        $ANALOGIN = $row1['ANALOGIN'];
        $seven= count($ANALOGIN);
        if($seven == 0){
        } else {
        for ( $i=1; $i<=$ANALOGIN; $i++ ){
           echo "<option value='1' id='ANALOGIN'>ANALOGIN".$i."</option>"; 
          }
        }
        $ANALOGOUT = $row1['ANALOGOUT'];
        $eig= count($ANALOGOUT);
        if($eig == 0){
        } else {
        for ( $i=1; $i<=$ANALOGOUT; $i++ ){
           echo "<option value='2' id='ANALOGOUT'>ANALOGOUT".$i."</option>"; 
          }
        }
        $RS232In = $row1['RS232In'];
        $nine= count($RS232In);
        if($nine == 0){
        } else {
        for ( $i=1; $i<=$RS232In; $i++ ){
           echo "<option value='1' id='RS232In'>RS232In".$i."</option>"; 
          }
        }

        $RS232Out = $row1['RS232Out'];
        $ten= count($RS232Out);
        if($ten == 0){
        } else {
        for ( $i=1; $i<=$RS232Out; $i++ ){
           echo "<option value='2' id='RS232Out'>RS232Out".$i."</option>"; 
          }
        }
        $IRIN = $row1['IRIN'];
        $one1= count($IRIN);
        if($one1 == 0){
        } else {
        for ( $i=1; $i<=$IRIN; $i++ ){
           echo "<option value='1' id='IRIN'>IRIN".$i."</option>"; 
          }
        }
        $IROUT = $row1['IROUT'];
        $two2= count($IROUT);
        if($two2 == 0){
        } else {
        for ( $i=1; $i<=$IROUT; $i++ ){
           echo "<option value='2' id='IROUT'>IROUT".$i."</option>"; 
          }
        }
        $VGAIN = $row1['VGAIN'];
        $three3= count($VGAIN);
        if($three3 == 0){
        } else {
        for ( $i=1; $i<=$VGAIN; $i++ ){
           echo "<option value='1' id='VGAIN'>VGAIN".$i."</option>"; 
          }
        }
        $VGAOUT = $row1['VGAOUT'];
        $four4= count($VGAOUT);
        if($four4 == 0){
        } else {
        for ( $i=1; $i<=$VGAOUT; $i++ ){
           echo "<option value='2' id='VGAOUT'>VGAOUT".$i."</option>"; 
          }
        }

       
}
?>

<script>
$("#ioport").change(function () {
  var ioport  = $(this).children(":selected").attr("id");
   $("#io").val(ioport);
    });
</script>
