 <?php
include('../../../dbconfig.php');
	$TypeID=$_POST['TypeID'];
	$BrandName=$_POST['BrandName'];
	$ModelName=$_POST['ModelName'];
	$InDeviceID=$_POST['InDeviceID'];

	$query_up="UPDATE inputdevices SET TypeID ='$TypeID', BrandName ='$BrandName', ModelName ='$ModelName' WHERE InDeviceID = '$InDeviceID'";
	echo $query_up;
	$result_up=mysql_query($query_up);
?>