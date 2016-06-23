<?php
include('../../dbconfig.php');
if($_POST['id'])
{
	$id=$_POST['id'];


	 mysql_query( "DELETE FROM adddevice WHERE DeviceID='$id'"); 

   mysql_query( "DELETE FROM treeview_items WHERE isdiv='$id'"); 
   
     ?>
<script type="text/javascript">
    window.location.href = "dashboard.php";
</script>

<?php
  
}
?>