
<form method="POST" action="">
<div class="row" style="padding: 0px; margin:0px;">
<div class="col-md-12"  style="position: relative; float: left; text-align: left;padding: 0px; margin:0px;">
<div class="col-md-4" style="padding: 0px; margin:0px;">
<input type="hidden" name="user" id="userid" value="<?php echo $UserID; ?>">
<label>Name</label>
</div>
<div class="col-md-8" style="padding: 0px; margin:0px;">
<input type="text" name="sitename" id="sitename" class="form-control">
</div>
</div>
</div>

<div class="row">
<div class="col-md-12">
<label>Sub-Site(s)?</label> &nbsp
<input type="radio" name="radio" value="no" checked>No &nbsp
<input type="radio" name="radio" value="yes" >Yes
</div>
</div>

<div class="row in" style="display: none;">
<div class="col-md-12">
<div class="col-md-4">
<label>Name</label>
</div>
<div class="col-md-8">
<input type="text" name="subSiteName" id="subSiteName" class="form-control">
<br>
</div>
</div>
</div>

 <div id="customFields1">
 </div>
 <a style="color: #FB7F6C;text-decoration-line: none;display: none;" href="javascript:void(0);" id="addshow" class="addshow">Add</a>



<div class="row">
<div class="col-md-12">
<label>Add Atlona Device(s)?</label>
<input type="radio" name="radio1" value="later" checked>later  
<input type="radio" name="radio1" value="yes1">Yes
</div>
</div>

<div class="row is">
<div class="col-md-12">
<div class="col-md-2">
<label>Model #</label>
</div>
<div class="col-md-2">
<select  class="ElementName" id="ElementName" style="width: 140px;font-size: 12px; height: 32px !important;">
<option>Please Select Device</option>
<?php $viw=mysql_query( " SELECT * from devices");
 while($sow=mysql_fetch_assoc($viw))
  {
echo '<option value="'.$sow['DEVICE']. '">'.$sow[ 'DEVICE']. '</option>';
   } ?>
</select>
</div>
<div style="float: right; padding-right: 1.20cm;">
<div class="col-md-2" style="text-align: right;">
<label>IP</label>
</div>
<div class="col-md-2" style="float: right;">
<input type="text" name="ipaddress" id='ipaddress1' style="width: 81px;margin-left: -50px;">
</div>
</div>
<!--<div class="col-md-2">
<label style="    width: 156px;">Sub-Site</label>
</div>
<div class="col-md-2">
<select>   
<option></option> 
</select>
</div>
-->
</div>
</div>

 <div id="customFields2">
 </div>
 <a style="color: #FB7F6C;text-decoration-line: none;display: none;" href="javascript:void(0);" id="adddev" class="adddev">Add</a>
<div class="row">
<div class="col-md-12">
<div class="col-md-offset-8 col-md-1" style="padding-right: 2cm;float: right;">
<input type="submit" name="addsubmitvalue" id="create" value="Create Site" style="background: rgb(255, 99, 0); border: 1px solid black; font-weight: bold;">
</form>
</div>
</div>
</div>


<script type="text/javascript">
var issubsite = 0;


$(document).ready(function(){

            $(".is").hide();
    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="no"){
           $("#addshow").hide();
           $(".in").hide();
           issubsite = 0;
           console.log(issubsite);
        }
        if($(this).attr("value")=="yes"){
            $("#addshow").show();
            $(".in").show();
            issubsite = 1;
            console.log(issubsite);
            //var insertParentData = "user="+user+"sitename="+site;
            //console.log(insertParentData);
            //.log(site);


            /*$.ajax
                ({
                    type: "post",
                    url: "include/inp/insertparentsite.php",
                    data: insertParentData,
                    cache: false,
                     success: function(data) {
                        //console.log(data); //Try to log the data and check the response
                           //window.location.href = "dashboard.php";
                           console.log("success");

                          // receiceDataForTree();
                           //$("#startaddsite").dialog("close");
                          
                         
                    },
                    error: function(){
                     alert("failure");
                    }
                });*/


        }
     if($(this).attr("value")=="later"){
          $("#adddev").hide();
           $(".is").hide();
        }
        if($(this).attr("value")=="yes1"){
            $("#adddev").show();
            $(".is").show();
        }      


    });
   
   

    $(".addshow").click(function(){
         var subSite =0;
        $("#customFields1").append('<div class="row in" ><div class="col-md-12"><div class="col-md-4"><label>Name</label></div><div class="col-md-8"><input type="text" name=" " class="form-control"></div></div></div><br/>');
        subSite= subSite+1;

    });
   var atlonadevicename=0;
    $(".adddev").click(function(){
         
        $("#customFields2").append('<div class="row is"><div class="col-md-12"><div class="col-md-2"><label>Model #</label></div><div class="col-md-2"><select class="" style="width: 140px;font-size: 12px; text-align: left;height: 32px !important;"><option>Please Select Device</option><?php $viw=mysql_query( " SELECT * from devices"); while($sow=mysql_fetch_assoc($viw))  {echo '<option value="'.$sow['DEVICE']. '">'.$sow[ 'DEVICE']. '</option>';   } ?></select></div><div style="float: right;"><div class="col-md-2" style="position:relative;padding-right:1.5cm; text-align:right"><label>IP</label></div><div class="col-md-2"><input type="text" style="width: 81px;margin-left: -50px;"></div></div></div></div></div>');
        atlonadevicename = atlonadevicename+1;
    });


    $("#create").click(function()
    {


     
   
     
     var subsite=$('#subSiteName.form-control').val();
     var site=$('#sitename.form-control').val();
     var user=$('#userid').val();
     var ElementName=$('#ElementName :selected').val();
     var ipadd=$('#ipaddress1').val();

     var dataString  = "user="+user+"&site="+site+"&ElementName="+ElementName+"&ipadd="+ipadd+"&subsite="+subsite+"&issubsite="+issubsite; 
     console.log(dataString);   
     
 $.ajax
                ({
                    type: "POST",
                    url: "include/inp/adddatasite.php",
                    data: dataString,
                    cache: false,
                     success: function(data) {
                        //console.log(data); //Try to log the data and check the response
                           //window.location.href = "dashboard.php";
                           console.log(data);

                           var parentID = data;
                           var subdatastring = dataString +"&parentID="+parentID;
                           console.log(subdatastring);
                        if (issubsite == 1) {


                            $.ajax ({

                             type:"POST",
                             url:"include/inp/inertsubsite.php",
                             data:subdatastring,
                             cache: false,
                             success: function(data){

                                console.log(data);

                             },
                             error: function(){
                                alert("failure in updatind subsite");
                             }



                           });
                        }
                         

                          // receiceDataForTree();
                           //$("#startaddsite").dialog("close");
                          
                         
                    },
                    error: function(){
                     alert("failure");
                    }
                });
        });
});

</script>
