<?php 

include('../../dbconfig.php');


$siteID =$_POST['siteID'];
$subsitename = $_POST['subsitename'];
$deviceName = $_POST['ElementName'];
$userid = $_POST['user'];
$DeviceID=$_POST['DeviceID'];
$ipadd = $_POST['ipadd'];
$site =$_POST['site'];
$issubsites=$_POST['issubsite'];




mysql_query("INSERT INTO tree_view1 (name,parent_id,isdiv,siteID,subsiteID,deviceID,issubsites) values ('$site',0,0,'$siteID',0,0,'$issubsites')") or die(mysql_error());
mysql_query("SET @sitetree = LAST_INSERT_ID()")or die(mysql_error());

mysql_query("INSERT into subsites (userid,parentID,subsitename,deviceID) values('$userid','$siteID','$subsitename','$DeviceID')") or die(mysql_error()); 
mysql_query("SET @subsiteID = LAST_INSERT_ID()")or die(mysql_error());


mysql_query("INSERT into tree_view1 (name,parent_id,isdiv,siteID,subsiteID,deviceID) values ('$subsitename',@sitetree,0,'$siteID',@subsiteID,0)") or die(mysql_error());
mysql_query("SET @subsitep = LAST_INSERT_ID()")or die(mysql_error());

mysql_query("INSERT into added_devices (userID,IPAddress,ElementName,siteID,subsiteID,DeviceID) values ('$userid','$ipadd','$deviceName','$siteID',@subsiteID,$DeviceID)") or die(mysql_error());
mysql_query("SET @device = LAST_INSERT_ID()")or die(mysql_error());

mysql_query("INSERT into tree_view1 (name,parent_id,isdiv,ipaddress,siteID,subsiteID,deviceID) values ('$deviceName',@subsitep,@device,'$ipadd','$siteID',@subsiteID,$DeviceID)");




//$id = $db->lastInsertId();
//echo $id;

//mysql_query("insert into subsite (siteID,name) values('$ElementName','$subsite')") or die(mysql_error()); 


?>
