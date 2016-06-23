 
<?php include "dbconfig.php";?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<link rel="stylesheet" href="./dist/jstree/themes/default/style.min.css" />
    



<div id="left_sites_nav_tree__" ></div>
    <script src="./dist/jstree/jstree.min.js"></script>
<script type="text/javascript">
   $(document).ready(function(){});     
    $(function () { $('#left_sites_nav_tree__').jstree(); });

    $('#left_sites_nav_tree__').jstree({ 'core' : {
    'data' : {
        'url': "treefetch1.php",
        'type':'POST',
        'contentype':'application/json',
        'data': function(node){
             return {'id' : node.id };
        }
    }
}, 'plugins' : ["contextmenu"], contextmenu: {items: context_menu}
});
    $('#left_sites_nav_tree__').on("changed.jstree", function (e, data) {
        /*var i,j, r=[];
        for (i=0,j=data.selected.length;i<j;i++) {
            r.push(data.instance.get_node(data.selected[i]).text);
            console.log(r);
        }*/
        //console.log(data.selected['0']);

                $id = $('#'+data.selected['0']).attr('isdiv');
                $seid = $('#'+data.selected['0']).attr('id');
                var seid = $seid;
                console.log($id);
                console.log(seid);
                $("#finddevice").val($id);
                $isid = $('#'+data.selected['0']).attr('isid');
                if ($isid == 'image0') {} else if ($isid == 'image1') {} else {

                    $($isid).css("background", "red");
                    $('#wizard').show();
                    var image = $isid;
                    var newdata = $('#'+data.selected['0']).attr('new');
                    var dataString = 'name=' + image + "&newdata=" + newdata;

                    $.ajax({
                        type: "GET",
                        url: "include/ajax/inputfield.php",
                        data: dataString,
                        cache: false,
                        success: function(data) {
                            console.log(data);
                            $("#new123").html(data);
                        }
                    });
                    var dataString = 'name=' + image + "&newdata=" + newdata;
                    $.ajax({
                        type: "GET",
                        url: "include/ajax/modelname.php",
                        data: dataString,
                        cache: false,
                        success: function(data) {
                            $("#modelname").html(data);
                        }
                    });
                    var dataString = 'name=' + image + "&newdata=" + newdata;
                    $.ajax({
                        type: "GET",
                        url: "include/ajax/inputmodelinput.php",
                        data: dataString,
                        cache: false,
                        success: function(data) {
                            $("#inputmodelinput").html(data);
                        }
                    });
                    var dataString = 'name=' + image + "&newdata=" + newdata;
                    $.ajax({
                        type: "GET",
                        url: "include/ajax/outputmodeloutput.php",
                        data: dataString,
                        cache: false,
                        success: function(data) {
                            //console.log(data);
                            $("#outputmodeloutput").html(data);
                        }
                    });

                }



    });
    
    $('button').on('click', function () {
      $('#left_sites_nav_tree__').jstree(true).select_node('child_node_1');
      $('#left_sites_nav_tree__').jstree('select_node', 'child_node_1');
      $.jstree.reference('#left_sites_nav_tree__').select_node('child_node_1');
           
     
      
    });

    function context_menu (node){
        var tree = $('#left_sites_nav_tree__').jstree(true);
         var items ={

             "copy": {
            "separator_before": false,
            "separator_after": false,
            "label": "copy",
            "action": function (obj) { 

                $("#paste").dialog();
                //tree.edit(node);
            }


         }
        

    };
    return items;

}
</script>