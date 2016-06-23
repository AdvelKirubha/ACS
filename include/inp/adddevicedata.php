<?php include "../../dbconfig.php";


$userID = $_POST['userID'];
$ElementName = $_POST['ElementName'];
$siteID = $_POST['siteID'];
$ipaddress = $_POST['ipadd'];
$treeparent =$_POST['treeparent'];
$DeviceID=$_POST['DeviceID'];
$subsiteID=$_POST['subsiteID'];

	$result=mysql_query("SELECT sitename from sites where siteID='$siteID'");
	$row=mysql_fetch_row($result);
	$sitename1=$row[0];

	$result=mysql_query("SELECT subsitename from subsites where subsiteID='$subsiteID'");
	$row=mysql_fetch_row($result);
	$subsitename=$row[0];


$Description = $ipaddress.'-'.$ElementName.' device added in sub-site '.$subsitename.' in side '.$sitename1;
	mysql_query("INSERT INTO log (activity,Description,agentID,clientID) values ('3','$Description',0,0)") or die(mysql_error());

if($subsiteID == 0){

	mysql_query("insert into added_devices (UserID,ElementName,ipaddress,siteID,DeviceID,subsiteID) values('$UserID','$ElementName','$ipaddress','$siteID','$DeviceID','0')") or die(mysql_error()); 
mysql_query("SET @user1 = LAST_INSERT_ID()");
mysql_query("insert into tree_view1 (name,text,parent_id,ipaddress,isdiv,siteID,DeviceID,subsiteID) values('$ElementName','$Description','$treeparent','$ipaddress',@user1,'$siteID','$DeviceID',subsiteID)") or die(mysql_error());


}else{

	mysql_query("insert into added_devices (UserID, ElementName,ipaddress,siteID,DeviceID,subsiteID) values('$UserID','$ElementName','$ipaddress','$siteID','$deviceID','$subsiteID')") or die(mysql_error()); 
mysql_query("SET @user1 = LAST_INSERT_ID()");
mysql_query("insert into tree_view1 (name,text,parent_id,ipaddress,isdiv,siteID,DeviceID,subsiteID) values('$ElementName','$Description','$treeparent','$ipaddress',@user1,'$siteID','$DeviceID','$subsiteID')") or die(mysql_error());
}


 ?>