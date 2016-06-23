<?php 

include('../../dbconfig.php');

$ElementName =$_POST['ElementName'];
$ipaddress =$_POST['ipadd'];
$subsite=$_POST['subsite'];
$user =$_POST['user'];
$site =$_POST['site'];
$issubstie = $_POST['issubsite'];


mysql_query("insert into sites (userID, sitename,issubsites) values('$user','$site','$issubstie')") or die(mysql_error());

$siteID = mysql_insert_id();
echo $siteID;



?>
