<?php include "../../dbconfig.php";


        $newqry = "SELECT * FROM treeview_items";
$newresult          = mysql_query($newqry);
$newarrayCategories = array();
while ($newrow = mysql_fetch_assoc($result)) {
$newarrayCategories[$newrow['id']] = array(
"parent_id" => $newrow['parent_id'],
"name" => $newrow['name'],
"ipaddress" => $newrow['ipaddress'],
"isdiv" => $newrow['isdiv']
);
}






            foreach ($newarrayCategories as $newarrayCategories__key => $newarrayCategories__value) {
                if($newarrayCategories__value['parent_id'] == '0'){
                    $newarrayCategories__value['parent_id'] = "#";
                }
                $newcurrent_gen_json = array("id" => "$arrayCategories__key", "parent" => $newarrayCategories__value['parent_id'], "text" => $newarrayCategories__value['ipaddress']." ".$newarrayCategories__value['name'],"li_attr"=>array(
                    "for" => "subfolder2",
                    "isdiv" => $newarrayCategories__value['isdiv'],
                    "ism" => $newarrayCategories__value['parent_id'],
                    "isid" => "image".$newarrayCategories__value['parent_id'],
                    "new" => $newarrayCategories__value['name'])
                );

                if($newarrayCategories__value['parent_id'] != '16'){
                    echo json_encode($current_gen_json).",\r\n";
                }
                unset($current_gen_json);
            }
       ?>