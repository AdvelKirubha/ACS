<?php 

include('../../dbconfig.php');

$userid = $_POST['user'];
$sitetocopy =$_POST['siteid'];
$subsitetocopy =$_POST['subsiteID'];
$devicetocopy =$_POST['deviceid'];

$result=mysql_query("select userID,IPAddress,ElementName,siteID,subsiteID,DeviceID from added_devices where id='$devicetocopy'");
$row = mysql_fetch_row($result);
$Description = $row[1].'-'.$row[2];

	mysql_query("INSERT INTO log (activity,Description,agentID,clientID) values ('13','$Description',0,0)") or die(mysql_error());



mysql_query("INSERT into added_devices (userID,IPAddress,ElementName,siteID,subsiteID,DeviceID) select userID,IPAddress,ElementName,siteID,subsiteID,DeviceID from added_devices where id='$devicetocopy'") or die(mysql_error());
mysql_query("SET @device = LAST_INSERT_ID()")or die(mysql_error());

mysql_query("INSERT into tree_view1 (name,parent_id,isdiv,ipaddress,siteID,subsiteID,deviceID) select name,parent_id,@device,ipaddress,siteID,subsiteID,DeviceID from tree_view1 where isdiv='$devicetocopy'");


?>