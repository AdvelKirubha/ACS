<?php
include('../../dbconfig.php');
if($_POST['id'])
{
	$id=$_POST['id'];

	
	$result=mysql_query("SELECT subsitename,parentID from subsites where subsiteID='$id'");
	$row=mysql_fetch_row($result);
$Description1 = $row[0].' Deleted from ';
$parentID=$row[1];
	$result=mysql_query("SELECT sitename from sites where siteID='$parentID'");
	$row=mysql_fetch_row($result);
$Description =$Description1. $row[0];


	mysql_query("INSERT INTO log (activity,Description,agentID,clientID) values ('6','$Description',0,0)") or die(mysql_error());


	mysql_query("DELETE FROM subsites where subsiteID='$id'");
	mysql_query("DELETE FROM tree_view1 where subsiteID='$id'");
 
}
?>
