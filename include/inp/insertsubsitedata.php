<?php 

include('../../dbconfig.php');


$siteID =$_POST['siteID'];
$subsitename = $_POST['subsitename'];
$deviceName = $_POST['ElementName'];
$userid = $_POST['user'];
$DeviceID=$_POST['DeviceID'];
$ipadd = $_POST['ipadd'];
$treeparent =$_POST['treeparent'];


	$result=mysql_query("SELECT sitename from sites where siteID='$siteID'");
	$row=mysql_fetch_row($result);
	$sitename1=$row[0];
$Description = $subsitename.' subsite added in site '.$sitename1;
	mysql_query("INSERT INTO log (activity,Description,agentID,clientID) values ('2','$Description',0,0)") or die(mysql_error());
$Description = $ipadd.'-'.$deviceName.' device added in sub-site '.$subsitename.' in side '.$sitename1;
	mysql_query("INSERT INTO log (activity,Description,agentID,clientID) values ('3','$Description',0,0)") or die(mysql_error());



mysql_query("INSERT into subsites (userid,parentID,subsitename,deviceID) values('$userid','$siteID','$subsitename','$DeviceID')") or die(mysql_error()); 
mysql_query("SET @subsiteID = LAST_INSERT_ID()")or die(mysql_error());


mysql_query("INSERT into tree_view1 (name,parent_id,isdiv,siteID,subsiteID,deviceID) values ('$subsitename','$treeparent',0,'$siteID',@subsiteID,0)") or die(mysql_error());
mysql_query("SET @subsitep = LAST_INSERT_ID()")or die(mysql_error());

mysql_query("INSERT into added_devices (userID,IPAddress,ElementName,siteID,subsiteID,DeviceID) values ('$userid','$ipadd','$deviceName','$siteID',@subsiteID,$DeviceID)") or die(mysql_error());
mysql_query("SET @device = LAST_INSERT_ID()")or die(mysql_error());

mysql_query("INSERT into tree_view1 (name,parent_id,isdiv,ipaddress,siteID,subsiteID,deviceID) values ('$deviceName',@subsitep,@device,'$ipadd','$siteID',@subsiteID,$DeviceID)");




//$id = $db->lastInsertId();
//echo $id;

//mysql_query("insert into subsite (siteID,name) values('$ElementName','$subsite')") or die(mysql_error()); 


?>