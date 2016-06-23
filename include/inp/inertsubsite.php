<?php 

include('../../dbconfig.php');

$ElementName =$_POST['ElementName'];
$ipaddress =$_POST['ipadd'];
$subsite=$_POST['subsite'];
$user =$_POST['user'];
$site =$_POST['site'];
$issubsie = $_POST['issubsite'];
$parentID=$_POST['parentID'];


mysql_query("insert into subsites (siteID, subsitename, deviceID,IP) values('$parentID','$subsite','$ElementName','$ipaddress')") or die(mysql_error());
$id = mysql_insert_id();
echo $id;


//mysql_query("insert into subsite (siteID,name) values('$ElementName','$subsite')") or die(mysql_error()); 


?>