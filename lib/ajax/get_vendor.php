<?php
include('../../dbconfig.php');
if($_POST['TypeID'])
{
	$TypeID=$_POST['TypeID'];
	$inputvalue=$_POST['inputvalue'];

if($inputvalue == 1){


    $viw=mysql_query( "SELECT * FROM inputdevices WHERE TypeID='$TypeID' group by BrandName "); 
   while($row=mysql_fetch_assoc($viw)) {
            ?>
    <option value="<?php echo $row['BrandName']; ?>"><?php echo $row['BrandName']; ?></option>
     <?php
          } 

	}
	else {

	 $viw=mysql_query( "SELECT * FROM outputdevices WHERE TypeID='$TypeID' group by BrandName "); 
   while($row=mysql_fetch_assoc($viw)) {
            ?>
    <option value="<?php echo $row['BrandName']; ?>"><?php echo $row['BrandName']; ?></option>
     <?php
          } 

	}


  
}
?>