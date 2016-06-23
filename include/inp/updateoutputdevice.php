<?php ?>
<div class="row" style="width: 750px !important;">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <label class="namedevice1_1_out">Device</label>
                <select class="device1_1_out" >
                </select>
            </div>
            <div class="col-md-3">
                <label class="namebrand1_1_out" style="display: none;">Brand</label>
                <select class="brand1_1_out" style="display: none;">
                </select>
            </div>
            <div class="col-md-3">
                <label class="nametype1_1_out" style="display: none;">Model</label>
                <select class="type1_1_out" style="display: none;">
                </select>
            </div>
            <div class="col-md-3" style="margin-top: 18px;">
                <div class="button_div_up_out" style="display: none;">
                    <button class="edit1_1_out">Edit</button>
                    <button class="delete1_1_out">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>

<input id="outhiddenID_TypeID" type="hidden" value=""></input>
<input id="outhiddenID_BrandName" type="hidden" value=""></input>
<input id="outhiddenID_ModelName" type="hidden" value=""></input>

<script>
    $('.device1_1_out').change(function(){
        var TypeIDVal = $(this).val();
        $('#outhiddenID_TypeID').val(TypeIDVal);
        $('.nametype1_1_out').hide();
        $('.type1_1_out').hide();
        $('.button_div_up_out').hide();
        if (TypeIDVal=='Please Select Device') {
            $('.nametype1_1_out').hide();
            $('.type1_1_out').hide();
            $('.button_div_up_out').hide();
            $('.namebrand1_1_out').hide();
            $('.brand1_1_out').hide();
        } else {
            var dataString  = "TypeID="+TypeIDVal;
            $.ajax({
                type: "POST",
                url: "include/ajax/output/brandnameoutput.php",
                data: dataString,
                cache: false,
                success: function(data)
                {
                    $('.brand1_1_out').show();
                    $('.namebrand1_1_out').show();
                    $('.brand1_1_out').html(data);
                }
            });
        }
    });
    $('.brand1_1_out').change(function(){
        var TypeIDVal = $('#outhiddenID_TypeID').val();
        var BrandVal = $(this).val();
        $('#outhiddenID_BrandName').val(BrandVal);     
        $('.button_div_up_out').hide();
        if (BrandVal=='Please select Brand') {
            $('.nametype1_1_out').hide();
            $('.type1_1_out').hide();
            $('.button_div_up_out').hide();
        } else {
            var dataString  = "TypeID="+TypeIDVal+"&brandID="+BrandVal;
            $.ajax({
                type: "POST",
                url: "include/ajax/output/modelnameoutput.php",
                data: dataString,
                cache: false,
                success: function(data)
                {
                    $('.type1_1_out').show();
                    $('.nametype1_1_out').show();
                    $('.type1_1_out').html(data);
                }
            });
        }
    });
    $('.type1_1_out').change(function(){
        var TypeIDVal = $('#outhiddenID_TypeID').val();
        var BrandVal = $('#outhiddenID_BrandName').val();
        var ModelVal = $(this).val();
        $('#outhiddenID_ModelName').val(ModelVal);     
        if (ModelVal=='Please select model') {
            $('.button_div_up_out').hide();
        } else {
            $('.button_div_up_out').show();
        }
    });
    $('.delete1_1_out').click(function(){
        var TypeIDVal = $('#outhiddenID_TypeID').val();
        var BrandVal = $('#outhiddenID_BrandName').val();        
        var ModelVal = $('#outhiddenID_ModelName').val();
        var dataString = "TypeID="+TypeIDVal+"&BrandName="+BrandVal+"&ModelName="+ModelVal;
        $.ajax ({
            type: "POST",
            url: "include/ajax/output/deleteoutputmodel.php",
            data: dataString,
            cache: false,
            success: function(data)
            {
                console.log(data);
                    $("#updateoutputdevice").dialog("close");
                    refresh_tree();
            }
        });
    });
    $('.edit1_1_out').click(function(){
        var TypeIDVal = $('#outhiddenID_TypeID').val();
        var BrandVal = $('#outhiddenID_BrandName').val();        
        var ModelVal = $('#outhiddenID_ModelName').val();
        var dataString = "TypeID="+TypeIDVal+"&BrandName="+BrandVal+"&ModelName="+ModelVal;
        $.ajax ({
            type: "POST",
            url: "include/inp/editoutputdevicedata.php",
            data: dataString,
            cache: false,
            success: function(data)
            {
                $("#updateoutputdevice").dialog("close");
                $('#editoutputdiv').html(data);
                $("#editoutputdevicedata").dialog();
            }
        });

    });

</script>
