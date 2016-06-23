 <?php
include('../../../dbconfig.php');
	$TypeID=$_POST['TypeID'];
	$BrandName=$_POST['BrandName'];
	$ModelName=$_POST['ModelName'];

	$query_sel="SELECT OutDeviceID FROM outputdevices WHERE TypeID ='$TypeID' AND BrandName ='$BrandName' AND ModelName ='$ModelName'";
	$result_sel=mysql_query($query_sel);
	$row_sel=mysql_fetch_row($result_sel);
	$delID=$row_sel[0];

	$query_del1="DELETE FROM outputdevices WHERE OutDeviceID = '$delID'";
	$query_del2="DELETE FROM outdevicecommands WHERE OutDeviceID = '$delID'";

	$result_del1=mysql_query($query_del1);
	$result_del2=mysql_query($query_del2);

?>