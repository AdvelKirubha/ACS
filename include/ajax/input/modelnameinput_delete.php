 <?php
include('../../../dbconfig.php');
	$TypeID=$_POST['TypeID'];
	$BrandName=$_POST['BrandName'];


    $viw=mysql_query( "SELECT ModelName FROM inputdevices WHERE TypeID ='$TypeID' AND BrandName ='$BrandName'"); 
    ?>
    <option>Please select model</option>
  <?php while($row=mysql_fetch_assoc($viw)) {
            ?>
            
    <option value="<?php echo $row['ModelName']; ?>"><?php echo $row['ModelName']; ?></option>
     <?php
          }
?> 