

<?php
include('../../../dbconfig.php');
if(isset($_REQUEST))
{
  $userid=$_POST['userid'];
  $device=$_POST['device'];
  $brand=$_POST['brand'];
  $model=$_POST['model'];
  $protocol=$_POST['protocol'];
  $controldevice=$_POST['controldevice'];
  $siteID=$_POST['siteID'];
  $deviceID=$_POST['DeviceID'];
  $isdiv=$_POST['isdiv'];
  $subsiteID=$_POST['subsiteid'];
  $deviceidname=$_POST['deviceidname'];
  $currentinput=$_POST['currentinput'];
  $portnumber=$_POST['portnumber'];
  $devicenumber=$_POST['devicenumber'];
 

if(!empty($model)&$model!='null'){

  $findqry="SELECT InDeviceID from inputdevices where ModelName='$model'";

}else{

   $findqry="SELECT InDeviceID from inputdevices where TypeID='$device'";


}

$indevres=mysql_query($findqry);
$idrow=mysql_fetch_assoc($indevres);

echo $idrow['InDeviceID'];

$indevid=$idrow['InDeviceID'];

/*$sql2 = "SELECT * FROM deviceconfig WHERE isdiv ='$isdiv' and device='$device' order by devicenumber asc ";
$result2=mysql_query($sql2) or die(mysql_error());
$loop=mysql_num_rows($result2)-1;
$index = 0;
while($row1 = mysql_fetch_assoc($result2)){ 
     $yourArray[$index] = $row1;
     $index++;
}
$devicenumber=$yourArray[$loop][devicenumber]+1;
*/

mysql_query("insert into deviceconfig (Userid, DeviceID, device, brand,  model, protocol, controldevice,inputoutputtype,devicename,currentinput,portnumber,siteID,isdiv,iodeviceid,subsiteID,devicenumber) values('$userid','$deviceID','$device','$brand','$model','$protocol','$controldevice','1','$deviceidname','$currentinput','$portnumber','$siteID','$isdiv','$indevid','$subsiteID','$devicenumber')") or die(mysql_error());






 
}
?>