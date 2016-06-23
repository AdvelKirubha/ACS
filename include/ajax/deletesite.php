<?php
include('../../dbconfig.php');
if($_POST['room'])
{
	$room=$_POST['room'];


	  $order=mysql_query("select * from treeview_items where name = '$room'") ;
    $row=mysql_fetch_assoc($order);
    $id=$row['id'];

 	$order1=mysql_query("select * from treeview_items where parent_id = '$id'") ;

    while($row1=mysql_fetch_assoc($order1))
	{
	$is=$row['isdeveicesiteID'];
   $pid=$row['parent_id'];
	mysql_query( "DELETE FROM adddevice WHERE DeviceID='$is'"); 

   mysql_query( "DELETE FROM treeview_items WHERE isdiv='$pid'"); 

	}	
	
	mysql_query( "DELETE FROM addsite WHERE SiteID='$is'"); 

   mysql_query( "DELETE FROM treeview_items WHERE id='$id'"); 
   
     ?>
<script type="text/javascript">
    window.location.href = "dashboard.php";
</script>

<?php
  
}
?>