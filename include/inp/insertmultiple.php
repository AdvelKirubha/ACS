<?php 

include('../../dbconfig.php');

//
$sitename = $_POST["sitenamesite"];
//$user=0;

//echo $count;
$subsite=json_decode($_POST['inputVal'],true);
$site=json_decode($_POST['site']);

print_r($subsite);
//$device =json_decode($_POST['devicedata'],true);


//print_r($subsite);
$count = count($subsite);



$siteid;
$user;
$treeid;

foreach ($site as $key => $value) {

	mysql_query("INSERT into sites (sitename,userID) values('$value','$key')") or die(mysql_error());
	$user=$key;
	$siteid=mysql_insert_id();
	$Description=$value.' site added';
	mysql_query("INSERT INTO log (activity,Description,agentID,clientID) values ('1','$Description',0,0)") or die(mysql_error());
    mysql_query("INSERT into tree_view1 (name,parent_id,isdiv,siteID,subsiteID,DeviceID,issubsites) values('$value',0,0,'$siteid',0,0,1)") or die(mysql_error());
    $treeid=mysql_insert_id();
}



	foreach ($subsite as $key => $value) {
		
		$subsitename = $value['input'];
		$devicename=$value['Device'];
		$ip=$value['ip'];

	$result=mysql_query("SELECT sitename from sites where siteID='$siteid'");
	$row=mysql_fetch_row($result);
	$sitename1=$row[0];
$Description = $subsitename.' subsite added in site '.$sitename1;
	mysql_query("INSERT INTO log (activity,Description,agentID,clientID) values ('2','$Description',0,0)") or die(mysql_error());

		mysql_query("INSERT into subsites (subsitename,userID,parentID) values('$subsitename','$user','$siteid')") or die(mysql_error());
		$susbiteid = mysql_insert_id();
		mysql_query("INSERT into tree_view1 (name,parent_id,isdiv,siteID,subsiteID,DeviceID,issubsites) values('$subsitename','$treeid',0,'$siteid','$susbiteid',0,0)") or die(mysql_error());
		$subsitreeid=mysql_insert_id();

		if(!empty($devicename)){

			$result=mysql_query("SELECT * FROM devices WHERE DEVICE='$devicename'");
		$row=mysql_fetch_assoc($result);
		$DeviceID = $row['DeviceID'];

$Description = $ip.'-'.$devicename.' device added in sub-site '.$subsitename.' in side '.$sitename1;
	mysql_query("INSERT INTO log (activity,Description,agentID,clientID) values ('3','$Description',0,0)") or die(mysql_error());

		mysql_query("INSERT into added_devices (userID,IPAddress,ElementName,siteID,subsiteID,DeviceID) values ('$user','$ip','$devicename','$siteid','$susbiteid',$DeviceID)") or die(mysql_error());

		$isdiv = mysql_insert_id();

		mysql_query("INSERT into tree_view1 (name,parent_id,isdiv,ipaddress,siteID,subsiteID,deviceID) values ('$devicename','$subsitreeid','$isdiv','$ip','$siteid','$susbiteid',$DeviceID)") or die(mysql_error());


		}
		


	}

/*
$combined = array_merge($subsite, $device);

foreach ($combined as $key => $value) {

	$subsitename = $combined['input'];
	$




	
	
	
	
}







foreach ($subsite as $key => $value) {


	mysql_query("insert into subsites (subsitename,userID,parentID) values('$value','$user','$siteid')") or die(mysql_error());
	$susbiteid = mysql_insert_id();
	mysql_query("INSERT into tree_view1 (name,parent_id,isdiv,siteID,subsiteID,DeviceID,issubsites) values('$value','$treeid',0,'$siteid','$susbiteid',0,0)") or die(mysql_error());
	

}


//mysql_query("insert into sites (sitename,userID) values('$sitename','$user')") or die(mysql_error());



if $count>0{

	mysql_query("insert into sites (sitename,userID) values('$sitename','$user')") or die(mysql_error());
	$parentID= mysql_insert_id();

	for ($i=0; $i<$count ; $i++)
	{

		mysql_query("insert into subsites (subsitename,userID,parentID) values('$sitename','$user','$parentID')") or die(mysql_error());

	}


	

   
}else{
	 echo "received null";
}

*/
?>
