<?php 

include('../../dbconfig.php');


$copiedid =$_POST['copiedSite'];
$sitename =$_POST['pastesitename'];
$subsitename = $_POST['subsitename'];
$deviceName = $_POST['ElementName'];
$userid = $_POST['user'];
$DeviceID=$_POST['DeviceID'];
$ipadd = $_POST['ipadd'];
$sitetocopy =$_POST['siteid'];
//$subcopyto =$_POST['subsiteID'];
$issubsites =$_POST['issubsites'];


$qry="SELECT * FROM subsites WHERE parentID='$sitetocopy'";
$result = mysql_query($qry);



if($issubsites == 0)
{
	mysql_query("INSERT INTO tree_view1 (name,parent_id,isdiv,siteID,subsiteID,deviceID,issubsites) values ('$sitename',0,0,'$copiedid',0,0,'$issubsites')") or die(mysql_error());
mysql_query("SET @sitetree = LAST_INSERT_ID()")or die(mysql_error());

mysql_query("INSERT into added_devices (userID,IPAddress,ElementName,siteID,subsiteID,DeviceID) select userID,IPAddress,ElementName,'$copiedid',subsiteID,DeviceID from added_devices where siteID='$sitetocopy'") or die(mysql_error());
mysql_query("SET @device = LAST_INSERT_ID()")or die(mysql_error());

mysql_query("INSERT into tree_view1 (name,parent_id,isdiv,ipaddress,siteID,subsiteID,deviceID) select name,@sitetree,@device,ipaddress,siteID,subsiteID,DeviceID from tree_view1 where siteID='$sitetocopy' and isdiv>0");
}else{

	mysql_query("INSERT INTO tree_view1 (name,parent_id,isdiv,siteID,subsiteID,deviceID,issubsites) values ('$sitename',0,0,'$copiedid',0,0,'$issubsites')") or die(mysql_error());
mysql_query("SET @sitetree = LAST_INSERT_ID()")or die(mysql_error());

while ($row=mysql_fetch_assoc($result)){

  $subsitetocopy =$row['subsiteID'];




			mysql_query("INSERT into subsites (userid,subsitename,deviceID,parentID) select userid,subsitename,deviceID,'$copiedid' from subsites WHERE parentID='$sitetocopy' and subsiteID='$subsitetocopy'") or die(mysql_error()); 
		mysql_query("SET @subsiteID = LAST_INSERT_ID()")or die(mysql_error());


		mysql_query("INSERT into tree_view1 (name,parent_id,isdiv,siteID,subsiteID,deviceID) select name,@sitetree,isdiv,'$copiedid',@subsiteID,deviceID from tree_view1 where (siteID='$sitetocopy' and isdiv=0 and subsiteID>0 and subsiteID='$subsitetocopy')") or die(mysql_error());
		mysql_query("SET @subsitep = LAST_INSERT_ID()")or die(mysql_error());

		mysql_query("INSERT into added_devices (userID,IPAddress,ElementName,siteID,subsiteID,DeviceID) select userID,IPAddress,ElementName,'$copiedid',@subsiteID,DeviceID from added_devices where siteID='$sitetocopy' and subsiteID='$subsitetocopy'") or die(mysql_error());
		mysql_query("SET @device = LAST_INSERT_ID()")or die(mysql_error());

		mysql_query("INSERT into tree_view1 (name,parent_id,isdiv,ipaddress,siteID,subsiteID,deviceID) select name,@subsitep,@device,ipaddress,'$copiedid',@subsiteID,DeviceID from tree_view1 where siteID='$sitetocopy' and isdiv>0 and subsiteID='$subsitetocopy'");

}


}

//$id = $db->lastInsertId();
//echo $id;

//mysql_query("insert into subsite (siteID,name) values('$ElementName','$subsite')") or die(mysql_error()); 


?>