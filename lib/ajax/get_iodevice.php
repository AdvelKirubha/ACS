<?php
include('../../dbconfig.php');
if($_POST['TypeID'])
{
	$TypeID=$_POST['TypeID'];

	$inputvalue=$_POST['inputvalue'];
	if($inputvalue == 1){


    $order=mysql_query("SELECT count(*), id, TypeID from inputdevices GROUP BY TypeID") ;
	while($row=mysql_fetch_assoc($order))
	{
		?>
		<option  id="<?php echo $inputvalue; ?>"  value="<?php echo $row['TypeID']; ?>"><?php echo $row['TypeID']; ?></option>
		<?php
	}

	}
	else{


	 $order=mysql_query("SELECT count(*), id, TypeID from outputdevices GROUP BY TypeID");
	while($row=mysql_fetch_assoc($order))
	{
		?>
		<option id="<?php echo $inputvalue; ?>" value="<?php echo $row['TypeID']; ?>"><?php echo $row['TypeID']; ?></option>
		<?php
	}

	}

}
?>