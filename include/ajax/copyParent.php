<?php 

include('../../dbconfig.php');

$siteTocopy =$_POST['siteid'];
$pastesitename = $_POST['pastesitename'];
$stename = $_POST['stename'];
$Description = $stename . ' copied as ' . $pastesitename;

	mysql_query("INSERT INTO log (activity,Description,agentID,clientID) values ('11','$Description',0,0)") or die(mysql_error());


mysql_query("insert into sites (userID,sitename) SELECT userID,'$pastesitename' FROM sites WHERE siteID ='$siteTocopy'") or die(mysql_error());

$siteID = mysql_insert_id();
echo $siteID;



?>
