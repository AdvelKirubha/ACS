<?php 

include('../../dbconfig.php');


$subsiteID =$_POST['subsiteID'];
$siteID=$_POST['siteID'];
$newsiename =$_POST['newname'];
$oldsiename =$_POST['oldname'];
$treeID=$_POST['treeid'];
$Description = $oldsiename . ' renamed as ' . $newsiename;
	mysql_query("INSERT INTO log (activity,Description,agentID,clientID) values ('15','$Description',0,0)") or die(mysql_error());


mysql_query("UPDATE subsites SET subsitename='$newsiename' WHERE (subsiteID='$subsiteID' AND parentID='$siteID')");

mysql_query("UPDATE tree_view1 SET name='$newsiename' WHERE (subsiteID='$subsiteID' AND id='$treeID')");  



?>