

<?php
include('../../dbconfig.php');

if(!empty($_POST['inputdev'])){

$inputdev=json_decode($_POST['inputdev'],true);
$indevicecommands=json_decode($_POST['keyval'],true);


if(!empty($indevicecommands)){



$count= sizeof($indevicecommands);

//echo $count;

//print_r($inputdev);


$cols = array();
$vals = array();
$dyncolname= array();
$dyncolvalues= array();


foreach ($inputdev as $column) {

	foreach ($column as $key => $value) {

	$cols[]= $key;
	
    $vals[]= $value;
    // print_r($vals);

    		}

    		  $colnames = "`".implode("`, `", $cols)."`";
    		  print_r($colnames);

  			  $colvals = "'".implode("', '", $vals)."'";
  			  print_r($colvals);


  			  $query = "INSERT into outputdevices(".$colnames.") values (".$colvals.	")";

			  mysql_query($query) or die(mysql_error());

			  $indeviceID=mysql_insert_id();

			  //echo $indeviceID;
			  $count ++;

			  $indevicecommands[$count]['OutDeviceID'] = $indeviceID;

			  //print_r($indevicecommands);



  unset($cols, $vals);

}

  
if(!empty($indevicecommands)){
foreach ($indevicecommands as $newcolumn) {
	foreach ($newcolumn as $key => $value) {

		$findqry = "SELECT`".$key."`FROM outdevicecommands";

		$col = mysql_query($findqry);

		if(!$col){
			
			$alterqry = "ALTER TABLE outdevicecommands ADD `".$key."` varchar(500)";
			mysql_query($alterqry) or die(mysql_error());
		}

		$dyncolname[]= $key;
		$dyncolvalues[]= $value;		
		
	}

			$rescolnames = "`".implode("`, `", $dyncolname)."`";
    		

  			$rescolvals = "'".implode("', '", $dyncolvalues)."'";

  		
}	$insertquery = "INSERT into outdevicecommands(".$rescolnames.") values (".$rescolvals.	")";
  		mysql_query($insertquery) or die(mysql_error());


}
 
}
  }
?>