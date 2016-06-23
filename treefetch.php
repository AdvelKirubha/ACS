<?php
include "dbconfig.php";


//print_r($arrayCategories);
//createTree($arrayCategories, 0);


function fetch(){




$qry             = "SELECT * FROM treeview_items";
$result          = mysql_query($qry);
$arrayCategories = array();
while ($row = mysql_fetch_assoc($result)) {
$arrayCategories[$row['id']] = array(
"parent_id" => $row['parent_id'],
"name" => $row['name'],
"ipaddress" => $row['ipaddress'],
"isdiv" => $row['isdiv']
);
}




 foreach ($arrayCategories as $arrayCategories__key => $arrayCategories__value) {
    if($arrayCategories__value['parent_id'] == '0'){
        $arrayCategories__value['parent_id'] = "#";
                }
                $current_gen_json = array("id" => "$arrayCategories__key", "parent" => $arrayCategories__value['parent_id'], "text" => $arrayCategories__value['ipaddress']." ".$arrayCategories__value['name'],"li_attr"=>array(
                    "for" => "subfolder2",
                    "isdiv" => $arrayCategories__value['isdiv'],
                    "ism" => $arrayCategories__value['parent_id'],
                    "isid" => "image".$arrayCategories__value['parent_id'],
                    "new" => $arrayCategories__value['name'])
                );

                if($arrayCategories__value['parent_id'] != '16'){
                    //echo json_encode($current_gen_json).",\r\n";
                    $jsondata = json_encode($current_gen_json).",\r\n";
                    return $jsondata;
                }
                unset($current_gen_json);
            }

      
       }

?>