<?php
include('../../dbconfig.php');
$DeviceID=$_POST['id'];
$siteID=$_POST['siteID'];
$subsiteID=$_POST['subsiteID'];
$isdivID=$_POST['isdiv'];


	$result=mysql_query("SELECT IPAddress,ElementName,subsiteID,siteID from added_devices where id='$isdivID'");
	$row=mysql_fetch_row($result);
$Description1 = $row[0]. '-'.$row[1].' Deleted from ';
$RoomID=$row[2];
$MainSiteID=$row[3];
	$result=mysql_query("SELECT subsitename from subsites where subsiteID='$RoomID'");
	$row=mysql_fetch_row($result);
$Description2 =$Description1. $row[0].' in ';
	$result=mysql_query("SELECT sitename from sites where siteID='$MainSiteID'");
	$row=mysql_fetch_row($result);
$Description =$Description2. $row[0];

	mysql_query("INSERT INTO log (activity,Description,agentID,clientID) values ('7','$Description',0,0)") or die(mysql_error());



if($subsiteID==0)
{
	



	 mysql_query( "DELETE FROM added_devices WHERE id='$isdivID' and siteID='$siteID'"); 

   mysql_query( "DELETE FROM tree_view1 WHERE isdiv='$isdivID' and siteID='$siteID'"); 

   mysql_query( "DELETE FROM deviceconfig WHERE isdiv='$isdivID' and siteID='$siteID'"); 
   
  
}else{


	


	 mysql_query( "DELETE FROM added_devices WHERE id='$isdivID' and subsiteID='$subsiteID'"); 

   mysql_query( "DELETE FROM tree_view1 WHERE isdiv='$isdivID' and subsiteID='$subsiteID'"); 
   
   mysql_query( "DELETE FROM deviceconfig WHERE isdiv='$isdivID' and subsiteID='$subsiteID'"); 






}
?>