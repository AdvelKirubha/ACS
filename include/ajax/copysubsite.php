<?php 

include('../../dbconfig.php');

$newsubsitename =$_POST['pastesitename'];
$userid = $_POST['user'];
$sitetocopy =$_POST['siteid'];
$subsitetocopy =$_POST['subsiteID'];
$stename = $_POST['stename'];
$Description = $stename . ' copied as ' . $newsubsitename;

	mysql_query("INSERT INTO log (activity,Description,agentID,clientID) values ('12','$Description',0,0)") or die(mysql_error());


$qrydevice ="SELECT * FROM added_devices where subsiteID='$subsitetocopy'";
$deviceresult = mysql_query($qrydevice);




 mysql_query("INSERT into subsites (userid,subsitename,deviceID,parentID) select userid,'$newsubsitename',deviceID,'$sitetocopy' from subsites WHERE parentID='$sitetocopy'and subsiteID='$subsitetocopy'") or die(mysql_error()); 
mysql_query("SET @subsiteID = LAST_INSERT_ID()")or die(mysql_error());


mysql_query("INSERT into tree_view1 (name,parent_id,isdiv,siteID,subsiteID,deviceID) select '$newsubsitename',parent_id,isdiv,'$sitetocopy',@subsiteID,deviceID from tree_view1 where (siteID='$sitetocopy' and isdiv=0 and subsiteID='$subsitetocopy')") or die(mysql_error());
mysql_query("SET @subsitep = LAST_INSERT_ID()")or die(mysql_error());


while ($devicerow=mysql_fetch_assoc($deviceresult)){

  $devicetocopy =$devicerow['id'];

		mysql_query("INSERT into added_devices (userID,IPAddress,ElementName,siteID,subsiteID,DeviceID) select userID,IPAddress,ElementName,'$sitetocopy',@subsiteID,DeviceID from added_devices where id='$devicetocopy' and subsiteID='$subsitetocopy'") or die(mysql_error());
		mysql_query("SET @device = LAST_INSERT_ID()")or die(mysql_error());

		mysql_query("INSERT into tree_view1 (name,parent_id,isdiv,ipaddress,siteID,subsiteID,deviceID) select name,@subsitep,@device,ipaddress,'$sitetocopy',@subsiteID,DeviceID from tree_view1 where isdiv='$devicetocopy' and subsiteID='$subsitetocopy'");

}

?>