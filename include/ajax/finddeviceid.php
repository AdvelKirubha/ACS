<?php 

include('../../dbconfig.php');

$Device =$_POST['Device'];



$qry = "SELECT DeviceID FROM devices WHERE Device ='$Device'";
$result = mysql_query($qry) or die(mysql_error());
while ($row = mysql_fetch_assoc($result)) {


	$id=$row['DeviceID'];




echo $id;	
}


?>
