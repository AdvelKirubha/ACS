<?php
include('../../dbconfig.php');
if($_GET['DeviceID']) 
{
	//$name=$_GET['name'];
  //$newdata=$_GET['newdata'];
   // $str = ltrim($name, 'image');
   // $order=mysql_query("select * from treeview_items where parent_id = '$str' and name='$newdata'") ;
    //$row=mysql_fetch_assoc($order);
   // $name = $row['name'];
    $deviceID = $_GET['DeviceID'];
    $order1=mysql_query("select * from devices where DeviceID = '$deviceID'") ;
    $row1=mysql_fetch_assoc($order1);
    $image = $row1['imagepath'];

  
?>
   <div id="wrapper" style="padding:0px max-height:175px!important;">
    <img src="<?php echo $image; ?>" class="img-responsive" style="max-width: 100% !important ;max-height: 175px !important; margin:0px;">
  </div>

  <?php	
}
?>
