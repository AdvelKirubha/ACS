<?php
include('../../dbconfig.php');
if(isset($_REQUEST))
{
	$fd=$_POST['fd'];
	$ioport=$_POST['ioport'];
	$BrandName=$_POST['BrandName'];
  $vendor=$_POST['vendor'];
  $model=$_POST['model'];
  $proto=$_POST['proto'];


  $proto11=$_POST['proto11'];
  $proto22=$_POST['proto22'];
  $proto33=$_POST['proto33'];
  $proto44=$_POST['proto44'];


$ipaddress = $proto11.':'.$proto22.':'.$proto33.':'.$proto44;



  $query=mysql_query("select * from deviceconfig where DeviceID='$fd'");
$row=mysql_num_rows($query);
if($row==0)
{
mysql_query("insert into deviceconfig (ioport, inputtype, vendor, model, protocol, ipaddress, DeviceID) values('$ioport','$BrandName','$vendor','$model','$proto','$ipaddress','$fd')") or die(mysql_error());
}
else
{
echo "<span style='color:red;'>Already exist</span>";
}




 
}
?>