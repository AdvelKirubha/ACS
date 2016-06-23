<?php
header('Content-type: application/json');
include "dbconfig.php";


//print_r($arrayCategories);
//createTree($arrayCategories, 0);




$qry             = "SELECT * FROM tree_view1";
$result          = mysql_query($qry);
$arrayCategories = array();
while ($row = mysql_fetch_array($result,MYSQL_ASSOC)) {
$row_Array['id'] = $row['id'];
if($row['parent_id']==0){
    $parentID = '#';
}else{

     $parentID = $row['parent_id'];

}
$row_Array['parent'] = $parentID;
if($row['DeviceID']==0){

    $name = $row['name'];
}else{

    $name = $row['ipaddress']."-".$row['name'];

}
$row_Array['text'] = $name;
$row_Array['li_attr'] = array(

    "isdiv" => $row['isdiv'],
    "ism" => $row['parent_id'],
    "isid" => $row['parent_id'],
    "new" => $row['name'],
    "devid" => $row['DeviceID'],
    "siteid" => $row['siteID'],
    "subsiteid" => $row['subsiteID'],
    "issubsites" => $row['issubsites'],
    "ipadd" => $row['ipaddress']
    );

//$row_Array['li_attr'] => $row['isdiv'];  

array_push($arrayCategories,$row_Array);

}
echo json_encode($arrayCategories);

        
      
       

?>
