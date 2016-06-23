<?php
include('../../dbconfig.php');
if($_GET['name']) 
{
	$name=$_GET['name'];



    $order=mysql_query("select * from skins where SkinName = '$name'") ;
    $row=mysql_fetch_assoc($order);
   $Template = $row['Template'];

  
?>
    <div class="row">
    <div class="col-md-8">

    <br/>
    <img src="<?php echo $Template; ?>" style="width: 500px;margin: -23px 17px 29px 38px" class="img-responsive">
    </div>
    </div>


    <br/>

<?php	
}
?>