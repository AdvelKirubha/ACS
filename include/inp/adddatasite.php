<?php 

include('../../dbconfig.php');

$ElementName =$_POST['ElementName'];
$ipaddress =$_POST['ipadd'];
$subsite=$_POST['subsite'];
$user =$_POST['user'];
$site =$_POST['site'];
$issubsite = $_POST['issubsite'];

if ($issubsite == 0) {

mysql_query("insert into sites (userID, sitename, deviceID,IP) values('$user','$site','$ElementName','$ipaddress')") or die(mysql_error());

$id = mysql_insert_id();
echo $id;



}else {


	mysql_query("insert into sites (sitename,issubsite) values('$site','$issubsite')") or die(mysql_error()); 

$id = mysql_insert_id();
echo $id;
  

}




//mysql_query("insert into subsite (siteID,name) values('$ElementName','$subsite')") or die(mysql_error()); 








?>