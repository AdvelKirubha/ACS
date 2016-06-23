<?php
include('../../dbconfig.php');
$indevicecommands=json_decode($_POST['keyval'],true);
$dyncolname= array();
$dyncolvalues= array();


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



?>
 