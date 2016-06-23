<?php
include('../dbconfig.php');
if($_POST['BrandName'])
{
	$BrandName=$_POST['BrandName'];
	$inputvalue=$_POST['inputvalue'];


	if($inputvalue == 1){
		$stmt = $DB_con->prepare("SELECT * FROM inputdevices WHERE BrandName=:BrandName");
	$stmt->execute(array(':BrandName' => $BrandName));
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		?>
		<option value="<?php echo $row['id']; ?>"><?php echo $row['ModelName']; ?></option>
		<?php
	}

	} else {

		$stmt = $DB_con->prepare("SELECT * FROM outputdevices WHERE BrandName=:BrandName");
	$stmt->execute(array(':BrandName' => $BrandName));
	while($row=$stmt->fetch(PDO::FETCH_ASSOC))
	{
		?>
		<option value="<?php echo $row['id']; ?>"><?php echo $row['ModelName']; ?></option>
		<?php
	}
	}
	
}
?>