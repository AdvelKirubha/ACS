<?php 

include('../../dbconfig.php');



$newsiename =$_POST['newdevname'];


$result=mysql_query("SELECT * FROM devices WHERE DEVICE='$newsiename'");


$row=mysql_fetch_assoc($result);
$id = $row['DeviceID'];

echo $id;


?>