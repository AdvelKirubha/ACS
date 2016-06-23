<?php
include('../../dbconfig.php');
    $TypeID=$_POST['TypeID'];
    $BrandName=$_POST['BrandName'];
    $ModelName=$_POST['ModelName'];
    $query_sel="SELECT OutDeviceID FROM outputdevices WHERE TypeID ='$TypeID' AND BrandName ='$BrandName' AND ModelName ='$ModelName'";
    $result_sel=mysql_query($query_sel);
    $row = mysql_fetch_row($result_sel);
    $OutDeviceID=$row['0'];
?>
<div id="editoutputdiv">
                            <div class="row" style="width: auto !important; max-width: 880px;">
                              <div class="col-md-12">
                                <form action="" method="post">                                         

                                    <div class="row">
                                        <div class="col-md-2">
                                            <p class="normalPara">Type</p>
                                        </div>
                                    <div class="col-md-10">
                                            <input class="form-control" type="text" id="edit_output_type" value="<?php echo $TypeID; ?>"> 
                                        </div>
                                    </div>                               
                                 
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p class="normalPara">Brand</p>
                                        </div>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="edit_output_brand" value="<?php echo $BrandName; ?>"> 
                                        </div>
                                    </div>
                                  
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p class="normalPara">Model#</p>
                                        </div>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="edit_output_model" value="<?php echo $ModelName; ?>"> 
                                        </div>
                                    </div>
                                </form>
                                    <div class="row">
                                        <div style="text-align:center;"><button id="edit_output_device">Update</button><br>
                                        <span id="checkeditOutputModelExsist" style="color: red;"></span></div>
                                        <input class="form-control" type="hidden" id="edit_output_ID" value="<?php echo $OutDeviceID; ?>"> 
                                    </div>                                    
                            </div>
                        </div>
</div>
<script>
    $("#edit_output_model").blur(function(){
        var outputcheck1=$('#edit_output_type').val();
        var outputcheck2=$('#edit_output_brand').val();
        var outputcheck3=$('#edit_output_model').val();
        var dataString  = "TypeName="+outputcheck1+"&BrandName="+outputcheck2+"&ModelName="+outputcheck3;
        $.ajax({
            type : 'post',
            url: "include/ajax/output/checkModelOut.php",
            data : dataString,
            cache : false,
            success : function(data){
                if (data==0) {
                    $('#edit_output_device').removeAttr("disabled");
                    $('#checkeditOutputModelExsist').html("");
                }else{
                    $('#edit_output_device').attr("disabled","disabled");
                    $('#checkeditOutputModelExsist').html("This Model Already Exist");
                }
            }
        });
    });
    $("#edit_output_brand").blur(function(){
        var outputcheck1=$('#edit_output_type').val();
        var outputcheck2=$('#edit_output_brand').val();
        var outputcheck3=$('#edit_output_model').val();
        var dataString  = "TypeName="+outputcheck1+"&BrandName="+outputcheck2+"&ModelName="+outputcheck3;
        $.ajax({
            type : 'post',
            url: "include/ajax/output/checkModelOut.php",
            data : dataString,
            cache : false,
            success : function(data){
                if (data==0) {
                    $('#edit_output_device').removeAttr("disabled");
                    $('#checkeditOutputModelExsist').html("");
                }else{
                    $('#edit_output_device').attr("disabled","disabled");
                    $('#checkeditOutputModelExsist').html("This Model Already Exist");
                }
            }
        });
    });
    $("#edit_output_type").blur(function(){
        var outputcheck1=$('#edit_output_type').val();
        var outputcheck2=$('#edit_output_brand').val();
        var outputcheck3=$('#edit_output_model').val();
        var dataString  = "TypeName="+outputcheck1+"&BrandName="+outputcheck2+"&ModelName="+outputcheck3;
        $.ajax({
            type : 'post',
            url: "include/ajax/output/checkModelOut.php",
            data : dataString,
            cache : false,
            success : function(data){
                if (data==0) {
                    $('#edit_output_device').removeAttr("disabled");
                    $('#checkeditOutputModelExsist').html("");
                }else{
                    $('#edit_output_device').attr("disabled","disabled");
                    $('#checkeditOutputModelExsist').html("This Model Already Exist");
                }
            }
        });
    });

        $('#edit_output_device').click(function(){
            var TypeID=$('#edit_output_type').val();
            var BrandName=$('#edit_output_brand').val();
            var ModelName=$('#edit_output_model').val();
            var OutDeviceID=$('#edit_output_ID').val();
            if (TypeID==''||BrandName==''||ModelName=='') {

            } else {
                var datastring = "TypeID="+TypeID+"&BrandName="+BrandName+"&ModelName="+ModelName+"&OutDeviceID="+OutDeviceID;
                console.log(datastring);
                $.ajax ({
                    type: "POST",
                    url: "include/ajax/output/editoutputmodel.php",
                    data: datastring,
                    cache: false,
                    success: function(data)
                    {
                        $("#editoutputdevicedata").dialog("close");
                        refresh_tree();
                    }
                });
            }
        });

</script>