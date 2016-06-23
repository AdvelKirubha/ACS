<?php
include('../../dbconfig.php');
if($_POST['editid'])
 {
    $editid = $_POST['editid'];
    $ElementName =$_POST['ElementName'];
    $Description =$_POST['Description'];
    $Suite =$_POST['Suite'];
    $City =$_POST['City'];
    $Country =$_POST['Country'];
    $Latitude =$_POST['Latitude'];
    $Street =$_POST['Street'];
    $State =$_POST['State'];
    $Zip =$_POST['Zip'];
    $Longitute =$_POST['Longitute'];

    // $order=mysql_query("select * from addsite where ElementName = '$editid'") ;
    // $row=mysql_fetch_assoc($order);
    // $SiteID = $row['SiteID'];

    mysql_query("update adddevice set  ElementName='$ElementName', Description='$Description', Suite='$Suite', City='$City', Country='$Country',Latitude='$Latitude', Street='$Street', State='$State', Zip='$Zip', Longitute='$Longitute' where DeviceID = '$editid'  ") or die(mysql_error()); 

    $order=mysql_query("select * from treeview_items where  isdiv = '$editid'") ;
    $row=mysql_fetch_assoc($order);
    $name = $row['name'];
     $id = $row['id'];

     mysql_query("update treeview_items set name='$ElementName'  where  id = '$id'  ") or die(mysql_error()); 

?>
<script type="text/javascript">
    window.location.href = "dashboard.php";
</script>

<?php
 }

?>

