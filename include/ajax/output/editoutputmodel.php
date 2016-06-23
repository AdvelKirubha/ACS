 <?php
include('../../../dbconfig.php');
	$TypeID=$_POST['TypeID'];
	$BrandName=$_POST['BrandName'];
	$ModelName=$_POST['ModelName'];
	$OutDeviceID=$_POST['OutDeviceID'];

	$query_up="UPDATE outputdevices SET TypeID ='$TypeID', BrandName ='$BrandName', ModelName ='$ModelName' WHERE OutDeviceID = '$OutDeviceID'";
	echo $query_up;
	$result_up=mysql_query($query_up);
?>