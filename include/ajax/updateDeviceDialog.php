<?php 

include('../../dbconfig.php');


$devid =$_POST['devid'];
//$newsiename =$_POST['newname'];
$ipaddress =$_POST['newip'];
$oldipaddress =$_POST['oldip'];
//$addeddevid=$_POST['addeddevid'];
$Description = $oldipaddress . ' updated as ' . $ipaddress;
	mysql_query("INSERT INTO log (activity,Description,agentID,clientID) values ('16','$Description',0,0)") or die(mysql_error());


mysql_query("UPDATE added_devices SET IPAddress = '$ipaddress'  WHERE id='$devid'");

mysql_query("UPDATE tree_view1 SET ipaddress ='$ipaddress' WHERE isdiv='$devid'");  



?>