<br/>
<div class="row" style="padding: 0px; margin:0px;">
<div class="col-md-2" >
<input type="hidden" name="user" id="userid" value="<?php echo $UserID; ?>">
<label style="padding-top: 6px;">Name</label>
</div>
<div class="col-md-6">
<input type="text" name="editsitename" id="editSubsitename" class="form-control">
<input type="hidden" name="editsitenamehid" id="editSubsitenamehid" class="form-control">
</div>

<input type="submit" name="addsubmitvalue" class="editSubsite" id="editSubsite" value="Save" style="background: rgb(255, 99, 0); border: 1px solid black; font-weight: bold;float: right;margin-right: 25px;">

</div>
<br>






<script type="text/javascript">
var isdeviced = 0;


$(document).ready(function(){
       
       


    });
   
   
  $("#editSubsite.editSubsite").click(function()
    {


        var Subsiteid=$selsubsiteID;
     var newSubsitename=$('#editSubsitename.form-control').val();
     var oldSubsitename=$('#editSubsitenamehid.form-control').val();
     var selectedsiteID=$selsiteID;

     if(newSubsitename==""){

        $("#editSubsitename.form-control").css({'border':'1px solid red'});

     }else{


      
      
     
     var updatesubstring="newname="+newSubsitename+"&oldname="+oldSubsitename+"&subsiteID="+Subsiteid+"&siteID="+selectedsiteID+"&treeid="+selectednodeID;

     
     $.ajax({

        'type':'POST',
         'url':'include/ajax/updateSubsiteDialog.php',
         data: updatesubstring,
         cache: false,
         success:function(){

            console.log("success");
            refresh_tree();
            $("#editsubsite").dialog("close");



         },error: function(){

                console.log("fails");
          

         }

     })
 }

 
        });
   

</script>
