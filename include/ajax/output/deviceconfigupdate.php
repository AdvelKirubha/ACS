

<?php
include('../../../dbconfig.php');
if(isset($_REQUEST))
{
$where=$_POST['where'];
  $device=$_POST['device'];
  $brand=$_POST['brand'];
  $model=$_POST['model'];
  $protocol=$_POST['protocol'];
  $controldevice=$_POST['controldevice'];
  $iodev=$_POST['iodev'];
  $portnumber=$_POST['portnumber'];
  $devicenumber=$_POST['devicenumber'];

if(!empty($model)){

  $findqry="SELECT OutDeviceID from outputdevices where ModelName='$model'";

}else{

   $findqry="SELECT OutDeviceID from outputdevices where TypeID='$device'";


}

$indevres=mysql_query($findqry);
$idrow=mysql_fetch_assoc($indevres);

//echo $idrow['InDeviceID'];

$iodev=$idrow['OutDeviceID'];

if ($device=='No device') {
mysql_query("DELETE FROM deviceconfig where deviceconfigid ='$where' ") or die(mysql_error());
} else {
$sql1 = "SELECT * FROM deviceconfig WHERE deviceconfigid ='$where' ";
$result1=mysql_query($sql1) or die(mysql_error());
while ($row = mysql_fetch_assoc($result1)) {
	$isdiv = $row['isdiv'];
}
/*$sql2 = "SELECT * FROM deviceconfig WHERE isdiv ='$isdiv' and device='$device' order by devicenumber asc ";
echo $sql2;
$result2=mysql_query($sql2) or die(mysql_error());
$loop=mysql_num_rows($result2)-1;
$index = 0;
while($row1 = mysql_fetch_assoc($result2)){ 
     $yourArray[$index] = $row1;
     $index++;
}
$devicenumber=$yourArray[$loop][devicenumber]+1;
*/
mysql_query("UPDATE deviceconfig SET  device='$device', brand='$brand',  model='$model', protocol='$protocol', controldevice='$controldevice',iodeviceid='$iodev',devicenumber='$devicenumber',portnumber='$portnumber' where deviceconfigid ='$where' ") or die(mysql_error());
}
}
?>