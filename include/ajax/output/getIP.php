 <?php
include('../../../dbconfig.php');
if($_POST['model'])
{
	$modelID=$_POST['model'];
    $viw=mysql_query( "SELECT * FROM outputdevices WHERE ModelName='$modelID'"); 
   while($row=mysql_fetch_assoc($viw)) {

   	     $ip=$row['controldevice'];
            
          } 


echo $ip;




  
}
?> 
