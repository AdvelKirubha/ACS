

 <?php
include('../../dbconfig.php');

$ElementName =$_POST['ElementName'];
$ipaddress =$_POST['ipadd'];
$subsite=$_POST['subsite'];
$user =$_POST['user'];
$site =$_POST['site'];
$issubsite = $_POST['issubsite'];
$DeviceID = $_POST['DeviceID'];


mysql_query("INSERT into sites (userID, sitename,issubsites) values('$user','$site','$issubsite')") or die(mysql_error());
mysql_query("SET @siteid = LAST_INSERT_ID()")or die(mysql_error());

mysql_query("INSERT INTO tree_view1 (name,parent_id,isdiv,ipaddress,siteID,subsiteID,deviceID,issubsites) values ('$site',0,0,0,@siteid,0,0,'$issubsite')") or die(mysql_error());
mysql_query("SET @sitetree = LAST_INSERT_ID()")or die(mysql_error());




if(!empty($DeviceID)){
    
mysql_query("INSERT into added_devices (userID,IPAddress,ElementName,siteID,subsiteID,DeviceID) values ('$user','$ipaddress','$ElementName',@siteid,0,$DeviceID)") or die(mysql_error());
mysql_query("SET @device = LAST_INSERT_ID()")or die(mysql_error());

mysql_query("INSERT into tree_view1 (name,parent_id,isdiv,ipaddress,siteID,subsiteID,deviceID) values ('$ElementName',@sitetree,@device,'$ipaddress',@siteid,0,$DeviceID)") or die(mysql_error());
}

?> 