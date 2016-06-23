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
    $order=mysql_query("select * from addsite where SiteID = '$editid'") ;
    $row=mysql_fetch_assoc($order);
    $SiteID = $row['SiteID'];
    mysql_query("update addsite set  ElementName='$ElementName', Description='$Description', Suite='$Suite', City='$City', Country='$Country',Latitude='$Latitude', Street='$Street', State='$State', Zip='$Zip', Longitute='$Longitute' where SiteID = '$SiteID'  ") or die(mysql_error()); 

    $order=mysql_query("select * from treeview_items where issit = '$editid'") ;
    $row=mysql_fetch_assoc($order);
    $name = $row['name'];

     mysql_query("update treeview_items set name='$ElementName'  where name = '$name'  ") or die(mysql_error()); 

     echo"select * from treeview_items where issit = '$editid'";
     echo "<br/>";
?>
<script type="text/javascript">
    window.location.href = "dashboard.php";
</script>

<?php
 }

?>

