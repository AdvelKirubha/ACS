

<form method="POST" action="">
<div class="row">
<div class="col-md-12">
<div class="col-md-4">
<input type="hidden" name="user" id="user" value="<?php echo $UserID; ?>">
<label>Name</label>
</div>
<div class="col-md-8">
<input type="text" name="site" id="site" style="min-width: 300px" class="form-control">
</div>
</div>
</div>

<br/>
<div class="row">
<div class="col-md-12">
<label>Sub-Site(s)?</label> &nbsp
<input type="radio" name="radio" value="no" checked>No &nbsp
<input type="radio" name="radio" value="yes" >Yes
</div>
</div>
<br/>
<div class="row in" style="display: none;">
<div class="col-md-12">
<div class="col-md-4">
<label>Name</label>
</div>
<div class="col-md-8">
<input type="text" name="name" class="form-control">
</div>
</div>
</div>
<br/>


 <div id="customFields1">
 </div>
 <a style="color: #FB7F6C;text-decoration-line: none;display: none;" href="javascript:void(0);" id="addshow" class="addshow">Add</a>



<div class="row">
<div class="col-md-12">
<label>Add Atlona Device(s)?</label>
<input type="radio" name="radio1" value="later" checked>later &nbsp 
<input type="radio" name="radio1" value="yes1">Yes
</div>
</div>
<br/>
<div class="row is">
<div class="col-md-12">
<div class="col-md-2">
<label>Model #</label>
</div>
<div class="col-md-2">
<select  class="ElementName" style="width: 140px;font-size: 12px; text-align: left; height: 32px !important;">
<option>Please Select Device</option>
<?php $viw=mysql_query( " SELECT * from devices");
 while($sow=mysql_fetch_assoc($viw))
  {
echo '<option value="'.$sow['DEVICE']. '">'.$sow[ 'DEVICE']. '</option>';
   } ?>
</select>
</div>
<div class="col-md-2">
<label>IP</label>
</div>
<div class="col-md-2" style="align-items: right;">
<input type="text" name="ipaddress" id='ipaddress' style="width: 81px;margin-left: -50px;">
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
<br/>
 <div id="customFields2">
 </div>
 <a style="color: #FB7F6C;text-decoration-line: none;display: none;" href="javascript:void(0);" id="adddev" class="adddev">Add</a>
<div class="row">
<div class="col-md-12">
<div class="col-md-offset-8 col-md-1" style="float: right; padding-right: 2cm">
<input type="submit" name="addsubmitvalue" id="create" value="Create Site" style="background: rgb(255, 99, 0); border: 1px solid black;">
</form>
</div>
</div>
</div>


<script type="text/javascript">
$(document).ready(function(){

			$(".is").hide();
    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="no"){
           $("#addshow").hide();
           $(".in").hide();
        }
        if($(this).attr("value")=="yes"){
            $("#addshow").show();
            $(".in").show();
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
    var subSite =0;

    $(".addshow").click(function(){
        $("#customFields1").append('<div class="row in" ><div class="col-md-12"><div class="col-md-4"><label>Name</label></div><div class="col-md-8"><input type="text" name="'+subSite+'" class="form-control"></div></div></div><br/>');
        subSite= subSite+1;

    });

    $(".adddev").click(function(){
        $("#customFields2").append('<div class="row is"><div class="col-md-12"><div class="col-md-2"><label>Model #</label></div><div class="col-md-2"><select class="ElementName" style="width: 140px;font-size: 12px; text-align: left;height: 32px !important;"><option>Please Select Device</option><?php $viw=mysql_query( " SELECT * from devices"); while($sow=mysql_fetch_assoc($viw))  {echo '<option value="'.$sow['DEVICE']. '">'.$sow[ 'DEVICE']. '</option>';   } ?></select></div><div class="col-md-2"><label>IP</label></div><div class="col-md-2"><input type="text" style="width: 81px;margin-left: -50px;"></div></div></div></div><br/>');
    });
    $("#create").click(function()
    {
     
   
     var user=$('#user').val();
     var site=$('#site').val();

     var ElementName=$('.ElementName').val();
     var ipadd=$('#ipaddress').val();
    
     var dataString  = "user="+user + "&site="+site + "&ElementName="+ElementName +"&ipadd="+ipadd; 
 $.ajax
                ({
                    type: "POST",
                    url: "include/inp/startaddsitedata.php",
                    data: dataString,
                    cache: false,
                     success: function(data) {
                        //console.log(data); //Try to log the data and check the response
                           //window.location.href = "dashboard.php";
                           //window.close();

                         
                    },
                    error: function(){
                     alert("failure");
                    }
                });
        });
});

</script>