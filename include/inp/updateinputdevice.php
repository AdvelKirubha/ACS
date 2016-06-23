<?php ?>
<div class="row" style="width: 750px !important;">
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">
                <label class="namedevice1_1">Device</label>
                <select class="device1_1" >
                </select>
            </div>
            <div class="col-md-3">
                <label class="namebrand1_1" style="display: none;">Brand</label>
                <select class="brand1_1" style="display: none;">
                </select>
            </div>
            <div class="col-md-3">
                <label class="nametype1_1" style="display: none;">Model</label>
                <select class="type1_1" style="display: none;">
                </select>
            </div>
            <div class="col-md-3" style="margin-top: 18px;">
                <div class="button_div_up" style="display: none;">
                    <button class="edit1_1">Edit</button>
                    <button class="delete1_1">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>

<input id="hiddenID_TypeID" type="hidden" value=""></input>
<input id="hiddenID_BrandName" type="hidden" value=""></input>
<input id="hiddenID_ModelName" type="hidden" value=""></input>

<script>
    $('.device1_1').change(function(){
        var TypeIDVal = $(this).val();
        $('#hiddenID_TypeID').val(TypeIDVal);
        $('.nametype1_1').hide();
        $('.type1_1').hide();
        $('.button_div_up').hide();
        if (TypeIDVal=='Please Select Device') {
            $('.nametype1_1').hide();
            $('.type1_1').hide();
            $('.button_div_up').hide();
            $('.namebrand1_1').hide();
            $('.brand1_1').hide();
        } else if(TypeIDVal == 'Laptop' || TypeIDVal == 'Desktop' || TypeIDVal == 'DVD/Blue Ray' || TypeIDVal == 'Conference' || TypeIDVal == 'Apple TV'){
            $('.nametype1_1').hide();
            $('.type1_1').hide();
            $('.button_div_up').hide();
            $('.namebrand1_1').hide();
            $('.brand1_1').hide();         
        } else {
            var dataString  = "TypeID="+TypeIDVal;
            $.ajax({
                type: "POST",
                url: "include/ajax/input/brandnameinput.php",
                data: dataString,
                cache: false,
                success: function(data)
                {
                    $('.brand1_1').show();
                    $('.namebrand1_1').show();
                    $('.brand1_1').html(data);
                }
            });
        }
    });
    $('.brand1_1').change(function(){
        var TypeIDVal = $('#hiddenID_TypeID').val();
        var BrandVal = $(this).val();
        $('#hiddenID_BrandName').val(BrandVal);     
        $('.button_div_up').hide();
        if (BrandVal=='Please select Brand') {
            $('.nametype1_1').hide();
            $('.type1_1').hide();
            $('.button_div_up').hide();
        } else {
            var dataString  = "TypeID="+TypeIDVal+"&BrandName="+BrandVal;
            $.ajax({
                type: "POST",
                url: "include/ajax/input/modelnameinput_delete.php",
                data: dataString,
                cache: false,
                success: function(data)
                {
                    $('.type1_1').show();
                    $('.nametype1_1').show();
                    $('.type1_1').html(data);
                }
            });
        }
    });
    $('.type1_1').change(function(){
        var TypeIDVal = $('#hiddenID_TypeID').val();
        var BrandVal = $('#hiddenID_BrandName').val();
        var ModelVal = $(this).val();
        $('#hiddenID_ModelName').val(ModelVal);     
        if (ModelVal=='Please select model') {
            $('.button_div_up').hide();
        } else {
            $('.button_div_up').show();
        }
    });
    $('.delete1_1').click(function(){
        var TypeIDVal = $('#hiddenID_TypeID').val();
        var BrandVal = $('#hiddenID_BrandName').val();        
        var ModelVal = $('#hiddenID_ModelName').val();
        var dataString = "TypeID="+TypeIDVal+"&BrandName="+BrandVal+"&ModelName="+ModelVal;
        $.ajax ({
            type: "POST",
            url: "include/ajax/input/deleteinputmodel.php",
            data: dataString,
            cache: false,
            success: function(data)
            {
                console.log(data);
                    $("#updateinputdevice").dialog("close");
                    refresh_tree();
            }
        });
    });
    $('.edit1_1').click(function(){
        var TypeIDVal = $('#hiddenID_TypeID').val();
        var BrandVal = $('#hiddenID_BrandName').val();        
        var ModelVal = $('#hiddenID_ModelName').val();
        var dataString = "TypeID="+TypeIDVal+"&BrandName="+BrandVal+"&ModelName="+ModelVal;
        $.ajax ({
            type: "POST",
            url: "include/inp/editinputdevicedata.php",
            data: dataString,
            cache: false,
            success: function(data)
            {
                $("#updateinputdevice").dialog("close");
                $('#editinputdiv').html(data);
                $("#editinputdevicedata").dialog();
            }
        });

    });

</script>
