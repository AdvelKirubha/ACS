<?php
include('../../dbconfig.php');
if($_POST['id'])
{
	$id=$_POST['id'];
	$result=mysql_query("SELECT sitename from sites where siteID='$id'");
	$row=mysql_fetch_row($result);
$Description = $row[0].' Deleted';

	mysql_query("INSERT INTO log (activity,Description,agentID,clientID) values ('5','$Description',0,0)") or die(mysql_error());



	mysql_query("DELETE FROM sites where siteID='$id'")or die (mysql_error());
	mysql_query("DELETE FROM tree_view1 where siteID='$id'")or die (mysql_error());
	mysql_query("DELETE FROM deviceconfig Where siteID='$id'")or die (mysql_error());
 
}
?>
