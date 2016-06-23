<?php
include('../../dbconfig.php');
    $TypeID=$_POST['TypeID'];
    $BrandName=$_POST['BrandName'];
    $ModelName=$_POST['ModelName'];
    $query_sel="SELECT InDeviceID FROM inputdevices WHERE TypeID ='$TypeID' AND BrandName ='$BrandName' AND ModelName ='$ModelName'";
    $result_sel=mysql_query($query_sel);
    $row = mysql_fetch_row($result_sel);
    $InDeviceID=$row['0'];
?>
<div id="editinputdiv">
                            <div class="row" style="width: auto !important; max-width: 880px;">
                              <div class="col-md-12">
                                <form action="" method="post">                                         

                                    <div class="row">
                                        <div class="col-md-2">
                                            <p class="normalPara">Type</p>
                                        </div>
                                    <div class="col-md-10">
                                            <input class="form-control" type="text" id="edit_input_type" value="<?php echo $TypeID; ?>"> 
                                        </div>
                                    </div>                               
                                 
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p class="normalPara">Brand</p>
                                        </div>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="edit_input_brand" value="<?php echo $BrandName; ?>"> 
                                        </div>
                                    </div>
                                  
                                    <div class="row">
                                        <div class="col-md-2">
                                            <p class="normalPara">Model#</p>
                                        </div>
                                        <div class="col-md-10">
                                            <input class="form-control" type="text" id="edit_input_model" value="<?php echo $ModelName; ?>"> 
                                        </div>
                                    </div>
                                </form>
                                    <div class="row">
                                        <div style="text-align:center;"><button id="edit_input_device">Update</button><br>
                                        <span id="checkeditInputModelExsist" style="color: red;"></span></div>
                                        <input class="form-control" type="hidden" id="edit_input_ID" value="<?php echo $InDeviceID; ?>"> 
                                    </div>                                    
                            </div>
                        </div>
</div>
<script>
    $("#edit_input_model").blur(function(){
        var outputcheck1=$('#edit_input_type').val();
        var outputcheck2=$('#edit_input_brand').val();
        var outputcheck3=$('#edit_input_model').val();
        var dataString  = "TypeName="+outputcheck1+"&BrandName="+outputcheck2+"&ModelName="+outputcheck3;
        $.ajax({
            type : 'post',
            url: "include/ajax/input/checkModelIn.php",
            data : dataString,
            cache : false,
            success : function(data){
                if (data==0) {
                    $('#edit_input_device').removeAttr("disabled");
                    $('#checkeditInputModelExsist').html("");
                }else{
                    $('#edit_input_device').attr("disabled","disabled");
                    $('#checkeditInputModelExsist').html("This Model Already Exist");
                }
            }
        });
    });
    $("#edit_input_brand").blur(function(){
        var outputcheck1=$('#edit_input_type').val();
        var outputcheck2=$('#edit_input_brand').val();
        var outputcheck3=$('#edit_input_model').val();
        var dataString  = "TypeName="+outputcheck1+"&BrandName="+outputcheck2+"&ModelName="+outputcheck3;
        $.ajax({
            type : 'post',
            url: "include/ajax/input/checkModelIn.php",
            data : dataString,
            cache : false,
            success : function(data){
                if (data==0) {
                    $('#edit_input_device').removeAttr("disabled");
                    $('#checkeditInputModelExsist').html("");
                }else{
                    $('#edit_input_device').attr("disabled","disabled");
                    $('#checkeditInputModelExsist').html("This Model Already Exist");
                }
            }
        });
    });
    $("#edit_input_type").blur(function(){
        var outputcheck1=$('#edit_input_type').val();
        var outputcheck2=$('#edit_input_brand').val();
        var outputcheck3=$('#edit_input_model').val();
        var dataString  = "TypeName="+outputcheck1+"&BrandName="+outputcheck2+"&ModelName="+outputcheck3;
        $.ajax({
            type : 'post',
            url: "include/ajax/input/checkModelIn.php",
            data : dataString,
            cache : false,
            success : function(data){
                if (data==0) {
                    $('#edit_input_device').removeAttr("disabled");
                    $('#checkeditInputModelExsist').html("");
                }else{
                    $('#edit_input_device').attr("disabled","disabled");
                    $('#checkeditInputModelExsist').html("This Model Already Exist");
                }
            }
        });
    });

        $('#edit_input_device').click(function(){
            var TypeID=$('#edit_input_type').val();
            var BrandName=$('#edit_input_brand').val();
            var ModelName=$('#edit_input_model').val();
            var InDeviceID=$('#edit_input_ID').val();
            if (TypeID==''||BrandName==''||ModelName=='') {

            } else {
                var datastring = "TypeID="+TypeID+"&BrandName="+BrandName+"&ModelName="+ModelName+"&InDeviceID="+InDeviceID;
                console.log(datastring);
                $.ajax ({
                    type: "POST",
                    url: "include/ajax/input/editinputmodel.php",
                    data: datastring,
                    cache: false,
                    success: function(data)
                    {
                        $("#editinputdevicedata").dialog("close");
                        refresh_tree();
                    }
                });
            }
        });

</script>