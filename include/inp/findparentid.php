<?php 

include('../../dbconfig.php');



$siteID =$_POST['siteID'];


$result=mysql_query("SELECT * FROM tree_view1 WHERE siteID='$siteID' and subsiteID =0");


$row=mysql_fetch_assoc($result);
$id = $row['id'];

echo $id;


?>