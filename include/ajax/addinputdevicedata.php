

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
    		  //print_r($colnames);

  			  $colvals = "'".implode("', '", $vals)."'";
  			 // print_r($colvals);


  			  $query = "INSERT into inputdevices(".$colnames.") values (".$colvals.	")";

			  mysql_query($query) or die(mysql_error());

			  $indeviceID=mysql_insert_id();

			  //echo $indeviceID;
			  $count ++;

			  $indevicecommands[$count]['InDeviceID'] = $indeviceID;

			  //print_r($indevicecommands);



  unset($cols, $vals);

}

  
if(!empty($indevicecommands)){
foreach ($indevicecommands as $newcolumn) {
	foreach ($newcolumn as $key => $value) {

		$findqry = "SELECT`".$key."`FROM indevicecommands";

		$col = mysql_query($findqry);

		if(!$col){
			
			$alterqry = "ALTER TABLE indevicecommands ADD `".$key."` varchar(500)";
			mysql_query($alterqry) or die(mysql_error());
		}

		$dyncolname[]= $key;
		$dyncolvalues[]= $value;		
		
	}

			$rescolnames = "`".implode("`, `", $dyncolname)."`";
    		

  			$rescolvals = "'".implode("', '", $dyncolvalues)."'";

  		
}	$insertquery = "INSERT into indevicecommands(".$rescolnames.") values (".$rescolvals.	")";
  		mysql_query($insertquery) or die(mysql_error());


}
 
}
  }else{
  	echo "no input data";
  }
?>