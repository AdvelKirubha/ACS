<?php
include('../../dbconfig.php');
if($_GET['name']) 
{
	$name=$_GET['name'];
    $str = ltrim($name, 'image');
    $order=mysql_query("select * from treeview_items where parent_id = '$str'") ;
    $row=mysql_fetch_assoc($order);
   $name = $row['name'];

   $order1=mysql_query("select * from devices where DEVICE = '$name'") ;
    $row1=mysql_fetch_assoc($order1);
   $image = $row1['imagepath'];

  
?>
    <div class="row">
    <div class="col-md-8">
    <img src="<?php echo $image; ?>" style="width: 500px;" class="img-responsive">
    </div>
    </div>


    <br/>

<?php	
}
?>