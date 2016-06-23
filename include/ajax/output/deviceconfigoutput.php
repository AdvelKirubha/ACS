

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
  $DeviceID=$_POST['DeviceID'];
  $subsiteID=$_POST['subsiteid'];
  $deviceidname=$_POST['deviceidname'];
  $currentinput=$_POST['currentinput'];
  $iodev=$_POST['iodev'];
  $isdiv=$_POST['isdiv'];
  $portnumber=$_POST['portnumber'];
  $devicenumber=$_POST['devicenumber'];


// $query=mysql_query("select * from deviceconfig where DeviceID='$fd'");
// $row=mysql_num_rows($query);
// if($row==0)
// {



$foutdqry="SELECT OutDeviceID from outputdevices where ModelName='$model'";
$oudevres=mysql_query($foutdqry) or die(mysql_error());
$idoutrow=mysql_fetch_assoc($oudevres);


$outdevid=$idoutrow['OutDeviceID'];

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

mysql_query("insert into deviceconfig (Userid, DeviceID, device, brand,  model, protocol, controldevice,inputoutputtype,devicename,currentinput,siteID,iodeviceid,subsiteID,isdiv,devicenumber,portnumber) values('$userid','$DeviceID','$device','$brand','$model','$protocol','$controldevice','2','$deviceidname','$currentinput','$siteID','$outdevid','$subsiteID','$isdiv','$devicenumber','$portnumber')") or die(mysql_error());

// }
// else
// {
// echo "<span style='color:red;'>Already exist</span>";
// }





 
}
?>