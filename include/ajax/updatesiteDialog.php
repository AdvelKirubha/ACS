<?php 

include('../../dbconfig.php');


$siteID =$_POST['siteID'];
$newsiename =$_POST['newname'];
$oldsiename =$_POST['oldname'];
$treeID=$_POST['treeID'];
$Description = $oldsiename . ' renamed as ' . $newsiename;
	mysql_query("INSERT INTO log (activity,Description,agentID,clientID) values ('14','$Description',0,0)") or die(mysql_error());



mysql_query("UPDATE sites SET sitename='$newsiename' WHERE siteID='$siteID'") or die(mysql_error());

mysql_query("UPDATE tree_view1 SET name='$newsiename' WHERE (siteID='$siteID' AND id='$treeID')") or die(mysql_error());  



?>