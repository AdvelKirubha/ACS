<br/>
<div class="row" style="padding: 0px; margin:0px;">
<div class="col-md-2" >
<input type="hidden" name="user" id="userid" value="<?php echo $UserID; ?>">
<label style="padding-top: 6px;">Name</label>
</div>
<div class="col-md-6">
<input type="text" name="editsitename" id="editsitename" class="form-control">
<input type="hidden" name="editsitenamehid" id="editsitenamehid" class="form-control">
</div>
<input type="submit" name="addsubmitvalue" class="edit" id="edit" value="Save" style="background: rgb(255, 99, 0); border: 1px solid black; font-weight: bold;float: right;margin-right: 25px;">
</div>



<script type="text/javascript">
var isdeviced = 0;


$(document).ready(function(){

       


    });
   
   

    $(".addshow").click(function(){
         var subSite =0;
        $("#customFields1").append('<div class="row in" ><div class="col-md-12"><div class="col-md-4"><label>Name</label></div><div class="col-md-8"><input type="text" name=" " class="form-control"></div></div></div><br/>');
        subSite= subSite+1;

    });
  
    $(".adddev").click(function(){
         
        $("#customFields2").append('<div class="row is"><div class="col-md-12"><div class="col-md-2"><label>Model #</label></div><div class="col-md-2"><select class="" style="width: 140px;font-size: 12px; text-align: left;height: 32px !important;"><option>Please Select Device</option><?php $viw=mysql_query( " SELECT * from devices"); while($sow=mysql_fetch_assoc($viw))  {echo '<option value="'.$sow['DEVICE']. '">'.$sow[ 'DEVICE']. '</option>';   } ?></select></div><div style="float: right;"><div class="col-md-2" style="position:relative;padding-right:1.5cm; text-align:right"><label>IP</label></div><div class="col-md-2"><input type="text" style="width: 81px;margin-left: -50px;"></div></div></div></div></div>');
      
    });



  $("#edit.edit").click(function()
    {


        var siteid=$selsiteID;

     var newsitname=$('#editsitename.form-control').val();
     var oldsitname=$('#editsitenamehid.form-control').val();


      
      
     
     var updatestring  = "newname="+newsitname+"&oldname="+oldsitname+"&siteID="+siteid+"&treeID="+selectednodeID;

    
     $.ajax({

        'type':'POST',
         'url':'include/ajax/updatesiteDialog.php',
         data: updatestring,
         cache: false,
         success:function(){

            console.log("updated");

            $("#editsite").dialog("close");
            refresh_tree();




         },error: function(){


                        console.log("failed");


          

         }

     })

 
        });
   

</script>
