<style type="text/css">
    .normalPara {
        padding: 0px;
    }
</style>

                            <div class="row" style="width: auto !important; max-width: 880px;">
                              <div class="col-md-12">
                                <form action="" id="myFormInputDevice" method="post">
                                    <div class="">
                                        <div class="">
                                           
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <p class="normalPara">Type</p>
                                                    </div>
                                                    <div class="col-md-11">
                                                                <input class="form-control" type="text" name="type" id="type"> 
                                                            </div>
                                                        </div>
                                           
                                             
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <p class="normalPara">Brand</p>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input class="form-control" type="text" name="brand" id="brand">
                                                    </div>
                                                </div>
                                              
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <p class="normalPara">Model#</p>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input class="form-control" type="text" name="model" id="model">
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                 <div class="col-md-1">
                                                        <p class="normalPara">Protocol#</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select id="protocolname">
                                                          <option>Please select protocol</option>
                                                          <option  <?=$pro == 'SourceIP' ? ' selected="selected"' : '';?> >SourceIP</option>
                                                          <option   <?=$pro == 'IP-to-RS232' ? ' selected="selected"' : '';?> >IP-to-RS232</option>
                                                          <option   <?=$pro == 'IP-to-IR' ? ' selected="selected"' : '';?> >IP-to-IR</option>
                                                          <option   <?=$pro == 'PJLINK' ? ' selected="selected"' : '';?> >PJLINK</option>                                                           
                                                        </select>
                                                </div>
                                                <div class="col-md-2" >
                                                        <p class="normalPara">Control Device Ip#</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input style="" class="form-control" type="text" name="controldevice" id="controldevice">
                                                    </div>
                                                </div>

                                                
                                   
                                          <br/>
                                                <div class="row">
                                                    <div class="col-md-6">

                                                    <div class="row">
                                                            <div class="col-md-2" >
                                                                <p class="normalPara">Commands</p>
                                                            </div>
                                                            <div class="col-md-5">
                                                                <input  type="radio" name="Suite">ASCII<br> 
                                                                <input  type="radio" name="Suite">HEX 
                                                            </div>
                                                            <div class="col-md-2" style="padding-left: 0px;">
                                                                <label>Termination</label> 
                                                            </div>
                                                            <div class="col-md-3">
                                                               <select id="termination">
                                                                <option>None</option>
                                                                <option>/r</option>
                                                                <option>/n</option>
                                                                <option>/r/n</option>
                                                                <option>/n/r</option>
                                                               </select>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <p class="normalPara">ON</p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" name="on" id="ONcommand">
                                                            </div>
                                                        </div>
                                                 
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <p class="normalPara">OFF</p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" name="off" id="OFFcommand">
                                                            </div>
                                                        </div>
                                                   
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <p class="normalPara">Volume+</p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" name="volumeplus" id="volumeplus">
                                                            </div>
                                                        </div>
                                                
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <p class="normalPara">Volume-</p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" name="volume2" id="volumeminus" >
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <p class="normalPara">Mute</p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" name="mute" id="muteon" >
                                                            </div>
                                                        </div>

                                    


                                                        <div id="customFields">
                                                        </div>
                                                        <a style="color: #FB7F6C;text-decoration-line: none;" href="javascript:void(0);" class="addCF">Add</a>
                                               
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p class="normalPara">Number Pad</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input  type="radio" name="Street" value="1">
                                                                <label>ON</label> 
                                                                <input  type="radio" name="Street" value="2">
                                                                <label>OFF</label>
                                                            </div>
                                                        </div>
                                                        <div id="radio">
                                                         <div class="row">
                                                            <div class="col-md-4">
                                                                <p style="text-align: center; margin-bottom: 0%;">1</p>
                                                                <input type="text" class="form-control" name="numberpad1">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p style="text-align: center; margin-bottom: 0%;">2</p>
                                                                <input type="text" class="form-control" name="numberpad2">
                                                            </div>
                                                             <div class="col-md-4">
                                                                <p style="text-align: center; margin-bottom: 0%;">3</p>
                                                                <input type="text" class="form-control" name="numberpad3">
                                                            </div>
                                                            </div>
                                                             <div class="row">
                                                            <div class="col-md-4">
                                                                <p style="text-align: center; margin-bottom: 0%;">4</p>
                                                                <input type="text" class="form-control" name="numberpad4">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p style="text-align: center; margin-bottom: 0%;">5</p>
                                                                <input type="text" class="form-control" name="numberpad5">
                                                            </div>
                                                             <div class="col-md-4">
                                                                <p style="text-align: center; margin-bottom: 0%;">6</p>
                                                                <input type="text" class="form-control" name="numberpad6">
                                                            </div>
                                                            </div>
                                                             <div class="row">
                                                            <div class="col-md-4">
                                                                <p style="text-align: center; margin-bottom: 0%;">7</p>
                                                                <input type="text" class="form-control" name="numberpad7">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p style="text-align: center; margin-bottom: 0%;">8</p>
                                                                <input type="text" class="form-control" name="numberpad8">
                                                            </div>
                                                             <div class="col-md-4">
                                                                <p style="text-align: center; margin-bottom: 0%;">9</p>
                                                                <input type="text" class="form-control" name="numberpad9">
                                                            </div>
                                                            </div>
                                                             <div class="row">
                                                            <div class="col-md-4">
                                                                <p style="text-align: center; margin-bottom: 0%;">*</p>
                                                                <input type="text" class="form-control" name="numberpad10">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p style="text-align: center; margin-bottom: 0%;">0</p>
                                                                <input type="text" class="form-control" name="numberpad11">
                                                            </div>
                                                             <div class="col-md-4">
                                                                <p style="text-align: center; margin-bottom: 0%;">#</p>
                                                                <input type="text" class="form-control" name="numberpad12">
                                                            </div>
                                                            </div>
                                                     
                                                </div>
                                                    </div>
                                                </div>
                                          <br>
                                            <div class="row">
                                                
                                                <div class="col-md-12">
                                                <span id="checkInputModelExsist" style="color: red;"></span>
                                                    <a  id="addinputdevice1"  class="btn btn-default pull-right"  style="background: rgb(255, 99, 0); border: 1px solid black; font-weight: bold;" >Add Device</a>
                                                </div>
                                            </div>
                                            <!--Button-->
                                        </div>
                                       
                                    </div></form>
                                </div>
                            </div>

<script type="text/javascript" src="assets/jsdown/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    $("#model").blur(function(){
        var outputcheck1=$('#type').val();
        var outputcheck2=$('#brand').val();
        var outputcheck3=$('#model').val();
        var dataString  = "TypeName="+outputcheck1+"&BrandName="+outputcheck2+"&ModelName="+outputcheck3;
        $.ajax({
            type : 'post',
            url: "include/ajax/input/checkModelIn.php",
            data : dataString,
            cache : false,
            success : function(data){
                if (data==0) {
                    $('#addinputdevice1').removeAttr("disabled");
                    $('#checkInputModelExsist').html("");
                }else{
                    $('#addinputdevice1').attr("disabled","disabled");
                    $('#checkInputModelExsist').html("This Model Already Exist");
                }
            }
        });
    });
    $("#brand").blur(function(){
        var outputcheck1=$('#type').val();
        var outputcheck2=$('#brand').val();
        var outputcheck3=$('#model').val();
        var dataString  = "TypeName="+outputcheck1+"&BrandName="+outputcheck2+"&ModelName="+outputcheck3;
        $.ajax({
            type : 'post',
            url: "include/ajax/input/checkModelIn.php",
            data : dataString,
            cache : false,
            success : function(data){
                if (data==0) {
                    $('#addinputdevice1').removeAttr("disabled");
                    $('#checkInputModelExsist').html("");
                }else{
                    $('#addinputdevice1').attr("disabled","disabled");
                    $('#checkInputModelExsist').html("This Model Already Exist");
                }
            }
        });
    });
    $("#type").blur(function(){
        var outputcheck1=$('#type').val();
        var outputcheck2=$('#brand').val();
        var outputcheck3=$('#model').val();
        var dataString  = "TypeName="+outputcheck1+"&BrandName="+outputcheck2+"&ModelName="+outputcheck3;
        $.ajax({
            type : 'post',
            url: "include/ajax/input/checkModelIn.php",
            data : dataString,
            cache : false,
            success : function(data){
                if (data==0) {
                    $('#addinputdevice1').removeAttr("disabled");
                    $('#checkInputModelExsist').html("");
                }else{
                    $('#addinputdevice1').attr("disabled","disabled");
                    $('#checkInputModelExsist').html("This Model Already Exist");
                }
            }
        });
    });

var codekey="";
    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="ASCII"){

           codekey="ASCII";
        }
        if($(this).attr("value")=="HEX"){
            codekey="HEX";

        }
            
      
    });


    $(".addCF").click(function(){
        $("#customFields").append('<div class="row"><div class="col-md-2"><input type="text" style="width: 60px;" name=keyInput></div><div class="col-md-8"><input class="form-control" type="text" name=valueInput ></div></div><br/>');
    });

$("#addinputdevice1").on('click',function(){


var type=$('#type').val();

var brand=$('#brand').val();

var model=$('#model').val();

if(type==""||brand==""||model==""){

        $("#type").css({'border':'1px solid red'});
        $("#brand").css({'border':'1px solid red'});
        $("#model").css({'border':'1px solid red'});








}else{
    var keyLength = document.getElementsByName("keyInput").length;
var keyvaluedata = [];
for (var i = 0; i < keyLength; i++){

     var a = document.getElementsByName("keyInput")[i].value;
     var b = document.getElementsByName("valueInput")[i].value;
     var temparry = {};
     temparry[a]=b;

     keyvaluedata.push(temparry);

}
 

//var inputdeviceData = []; 



var protocol=$('#protocolname :selected').val();
var termination =$('#termination :selected').val();

var controldevice=$('#controldevice').val();
var inputdeviceData = [{controldevice:controldevice,protocol:protocol,ModelName:model,BrandName:brand,TypeID:type}]
////////inputdevice date end

var volumeplus = $('#volumeplus').val();
keyvaluedata.push({VolumePlus:volumeplus});

var volumeminus = $('#volumeminus').val();
keyvaluedata.push({Volumeminus:volumeminus});

var mute = $('#muteon').val();
keyvaluedata.push({MuteOn:mute});

var onn = $('#ONcommand').val();
keyvaluedata.push({PowerOn:onn});

var off= $('#OFFcommand').val();
keyvaluedata.push({PowerOff:off});

var termination =$('#termination :selected').val();
keyvaluedata.push({Termination:termination});

keyvaluedata.push({'HEXASCII':codekey});



var keyvalueJSON =JSON.stringify(keyvaluedata);
console.log("key value:"+keyvalueJSON);

var inputdeviceJSON =JSON.stringify(inputdeviceData);
console.log("input device"+inputdeviceJSON);


 $.ajax
                ({
                    type: "POST",
                    url: "include/ajax/addinputdevicedata.php",
                    data: {inputdev:inputdeviceJSON,keyval:keyvalueJSON },
                    cache: false,
                     success: function(data) {
                       console.log("success"+data);
                        var form = document.getElementById("myFormInputDevice");
                        form.reset();
                        refresh_tree();
                        $("#addinputdevice").dialog("close");



                    },
                    error: function(){
                    console.log("failure");
                    }
                });

/*
PowerOn
PowerOff
BrandName
ModelName
TypeID
protocol
controldevice

     
     console.log('On click');

     var type=$('#type').val();
     var brand=$('#brand').val();
     var model=$('#model').val();
     var protocol=$('#protocolname :selected').val();
     var controldevice=$('#controldevice').val();
     var volumeplus = $('#volumeplus').val();
     var volumeminus = $('#volumeminus').val();
     var mute = $('#muteon').val();
     var onn = $('#ONcommand').val();
     var off= $('#OFFcommand').val();
    

var dataString  = "type="+type+"&brand="+brand+"&model="+model+"&protocol="+protocol+"&controldevice="+controldevice+"&volumeplus="+volumeplus+"&volumeminus="+volumeminus+"&mute="+mute+"&poweron="+onn+"&poweroff="+off; 
    
 $.ajax
                ({
                    type: "POST",
                    url: "include/ajax/addinputdevicedata.php",
                    data: dataString,
                    cache: false,
                     success: function(data) {
                       console.log(data);
                    },
                    error: function(){
                    //alert("failure");
                    }
                });*/

}

    
        });
});
</script>