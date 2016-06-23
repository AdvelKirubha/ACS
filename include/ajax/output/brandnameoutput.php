 <?php
include('../../../dbconfig.php');
if($_POST['TypeID'])
{
	$TypeID=$_POST['TypeID'];
    $viw=mysql_query( "SELECT * FROM outputdevices WHERE TypeID='$TypeID' group by BrandName"); ?>
    <option>Please select Brand</option>
   <?php while($row=mysql_fetch_assoc($viw)) {
            ?>
            
    <option value="<?php echo $row['BrandName']; ?>"><?php echo $row['BrandName']; ?></option><?php }?>
    
     <?php
          
  
}
?> 