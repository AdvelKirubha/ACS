<?php
include('../../../dbconfig.php');
$TypeID = $_POST['TypeName'];
$BrandName = $_POST['BrandName'];
$ModelName = $_POST['ModelName'];

	$query = "SELECT * FROM outputdevices WHERE TypeID='$TypeID' and BrandName='$BrandName' and ModelName='$ModelName'";
    $result=mysql_query( "$query"); 
    $num_rows = mysql_num_rows($result);

/*   	$response = array();

    if ( $num_rows == 0 ) {
        $response['status'] = 'success';
        $response['message'] = 'This was successful';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'This failed';
    }

    echo json_encode($response);*/
    echo $num_rows;

?>
