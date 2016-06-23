 <?php
include('../../../dbconfig.php');
if($_POST['TypeID'])
{
	$TypeID=$_POST['TypeID'];
	$brandID=$_POST['brandID'];

    $viw=mysql_query( "SELECT * FROM outputdevices WHERE BrandName ='$brandID' AND TypeID = '$TypeID'"); 
    ?>
    <option>Please select Model</option>
    <?php 
   while($row=mysql_fetch_assoc($viw)) {
            ?>
            
    <option value="<?php echo $row['ModelName']; ?>"><?php echo $row['ModelName']; ?></option>
     <?php
          }
}
?> 