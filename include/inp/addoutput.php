<style type="text/css">
    .normalPara {
        padding: 0px;
    }
</style>

                            <div class="row" style="width: auto !important; max-width: 880px;">
                              <div class="col-md-12">
                                <form action="" id="myFormOutputDevice" method="post">
                                    <div class="">
                                        <div class="">
                                           
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <p class="normalPara">Type</p>
                                                    </div>
                                                    <div class="col-md-11">
                                                                <input class="form-control" type="text" name="outputtype" id="outputtype"> 
                                                            </div>
                                                        </div>
                                           
                                             
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <p class="normalPara">Brand</p>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input class="form-control" type="text" name="outputbrand" id="outputbrand">
                                                    </div>
                                                </div>
                                              
                                                <div class="row">
                                                    <div class="col-md-1">
                                                        <p class="normalPara">Model#</p>
                                                    </div>
                                                    <div class="col-md-11">
                                                        <input class="form-control" type="text" name="outputmodel" id="outputmodel">
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                 <div class="col-md-1">
                                                        <p class="normalPara">Protocol#</p>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <select id="outputprotocolname">
                                                          <option>please select protocol</option>
                                                          <option  <?=$pro == 'SourceIP' ? ' selected="selected"' : '';?> >SourceIP</option>
                                                          <option   <?=$pro == 'IP-to-RS232' ? ' selected="selected"' : '';?> >IP-to-RS232</option>
                                                          <option   <?=$pro == 'IP-to-IR' ? ' selected="selected"' : '';?> >IP-to-IR</option>
                                                          <option   <?=$pro == 'PJLINK' ? ' selected="selected"' : '';?> >PJLINK</option>                                                           
                                                        </select>
                                                    
                                                </div>
                                                <div class="col-md-2">
                                                        <p class="normalPara">Control Device Ip#</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input class="form-control" type="text" name="outputcontroldevice" id="outputcontroldevice">
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
                                                                <p class="normalPara">Termination</p>
                                                            </div>
                                                            <div class="col-md-3">
                                                               <select id="outputtermination">
                                                               <option>None</option>
                                                                <option>/r</option>
                                                                <option>/n</option>
                                                                <option>/r/n</option>
                                                                <option>/n/r</option>
                                                               </select>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-2" >
                                                                <p class="normalPara">ON</p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" name="outputon" id="outputONcommand">
                                                            </div>
                                                        </div>
                                                 
                                                        <div class="row">
                                                            <div class="col-md-2" >
                                                                <p class="normalPara">OFF</p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" name="outputoff" id="outputOFFcommand">
                                                            </div>
                                                        </div>
                                                   
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <p class="normalPara">Volume+</p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" name="outputvolumeplus" id="outputvolumeplus">
                                                            </div>
                                                        </div>
                                                
                                                        <div class="row">
                                                            <div class="col-md-2">
                                                                <p class="normalPara">Volume-</p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" name="outputvolume2" id="outputvolumeminus" >
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-2" >
                                                                <p class="normalPara">Mute On</p>
                                                            </div>
                                                            <div class="col-md-8">
                                                                <input class="form-control" type="text" name="outputmute" id="outputmuteon" >
                                                            </div>
                                                        </div>

                                    


                                                        <div id="outputcustomFields">
                                                        </div>
                                                        <a style="color: #FB7F6C;text-decoration-line: none;" href="javascript:void(0);" id="outputadd" class="outputaddCF">Add</a>
                                               
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
                                                                <p  style="text-align: center; margin-bottom: 0%;">1</p>
                                                                <input type="text" class="form-control" name="numberpad1">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p  style="text-align: center; margin-bottom: 0%;">2</p>
                                                                <input type="text" class="form-control" name="numberpad2">
                                                            </div>
                                                             <div class="col-md-4">
                                                                <p  style="text-align: center; margin-bottom: 0%;">3</p>
                                                                <input type="text" class="form-control" name="numberpad3">
                                                            </div>
                                                            </div>
                                                             <div class="row">
                                                            <div class="col-md-4">
                                                                <p  style="text-align: center; margin-bottom: 0%;">4</p>
                                                                <input type="text" class="form-control" name="numberpad4">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p  style="text-align: center; margin-bottom: 0%;">5</p>
                                                                <input type="text" class="form-control" name="numberpad5">
                                                            </div>
                                                             <div class="col-md-4">
                                                                <p  style="text-align: center; margin-bottom: 0%;">6</p>
                                                                <input type="text" class="form-control" name="numberpad6">
                                                            </div>
                                                            </div>
                                                             <div class="row">
                                                            <div class="col-md-4">
                                                                <p  style="text-align: center; margin-bottom: 0%;">7</p>
                                                                <input type="text" class="form-control" name="numberpad7">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p  style="text-align: center; margin-bottom: 0%;">8</p>
                                                                <input type="text" class="form-control" name="numberpad8">
                                                            </div>
                                                             <div class="col-md-4">
                                                                <p  style="text-align: center; margin-bottom: 0%;">9</p>
                                                                <input type="text" class="form-control" name="numberpad9">
                                                            </div>
                                                            </div>
                                                             <div class="row">
                                                            <div class="col-md-4">
                                                                <p  style="text-align: center; margin-bottom: 0%;">*</p>
                                                                <input type="text" class="form-control" name="numberpad10">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <p  style="text-align: center; margin-bottom: 0%;">0</p>
                                                                <input type="text" class="form-control" name="numberpad11">
                                                            </div>
                                                             <div class="col-md-4">
                                                                <p  style="text-align: center; margin-bottom: 0%;">#</p>
                                                                <input type="text" class="form-control" name="numberpad12">
                                                            </div>
                                                            </div>
                                                     
                                                </div>
                                                    </div>
                                                </div>
                                          <br>
                                            <div class="row">
                                                
                                                <div class="col-md-12">
                                                <span id="checkOutputModelExsist" style="color: red;"></span>
                                                    <a  id="addoutputdevice1"  class="btn btn-default pull-right"  style="background: rgb(255, 99, 0); border: 1px solid black; font-weight: bold;" >Add Device</a>
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
    $("#outputmodel").blur(function(){
        var outputcheck1=$('#outputtype').val();
        var outputcheck2=$('#outputbrand').val();
        var outputcheck3=$('#outputmodel').val();
        var dataString  = "TypeName="+outputcheck1+"&BrandName="+outputcheck2+"&ModelName="+outputcheck3;
        $.ajax({
            type : 'post',
            url: "include/ajax/output/checkModelOut.php",
            data : dataString,
            cache : false,
            success : function(data){
                if (data==0) {
                    $('#addoutputdevice1').removeAttr("disabled");
                    $('#checkOutputModelExsist').html("");
                }else{
                    $('#addoutputdevice1').attr("disabled","disabled");
                    $('#checkOutputModelExsist').html("This Model Already Exist");
                }
            }
        });
    });
    $("#outputbrand").blur(function(){
        var outputcheck1=$('#outputtype').val();
        var outputcheck2=$('#outputbrand').val();
        var outputcheck3=$('#outputmodel').val();
        var dataString  = "TypeName="+outputcheck1+"&BrandName="+outputcheck2+"&ModelName="+outputcheck3;
        $.ajax({
            type : 'post',
            url: "include/ajax/output/checkModelOut.php",
            data : dataString,
            cache : false,
            success : function(data){
                if (data==0) {
                    $('#addoutputdevice1').removeAttr("disabled");
                    $('#checkOutputModelExsist').html("");
                }else{
                    $('#addoutputdevice1').attr("disabled","disabled");
                    $('#checkOutputModelExsist').html("This Model Already Exist");
                }
            }
        });
    });
    $("#outputtype").blur(function(){
        var outputcheck1=$('#outputtype').val();
        var outputcheck2=$('#outputbrand').val();
        var outputcheck3=$('#outputmodel').val();
        var dataString  = "TypeName="+outputcheck1+"&BrandName="+outputcheck2+"&ModelName="+outputcheck3;
        $.ajax({
            type : 'post',
            url: "include/ajax/output/checkModelOut.php",
            data : dataString,
            cache : false,
            success : function(data){
                if (data==0) {
                    $('#addoutputdevice1').removeAttr("disabled");
                    $('#checkOutputModelExsist').html("");
                }else{
                    $('#addoutputdevice1').attr("disabled","disabled");
                    $('#checkOutputModelExsist').html("This Model Already Exist");
                }
            }
        });
    });

var outputcodekey="";
    $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="ASCII"){

           outputcodekey="ASCII";
        }
        if($(this).attr("value")=="HEX"){
            outputcodekey="HEX";

        }
            
      
    });


    $("#outputadd").click(function(){
        $("#outputcustomFields").append('<div class="row"><div class="col-md-6" style="width: 70px !important"><input type="text" style="width: 60px;" name=keyInput></div><div class="col-md-8"><input class="form-control" type="text" name=valueInput ></div></div><br/>');
    });

$("#addoutputdevice1").on('click',function(){

var outputtype=$('#outputtype').val();

var outputbrand=$('#outputbrand').val();

var outputmodel=$('#outputmodel').val();

if(outputtype=""||outputmodel==""||outputmodel==""){

        $("#outputtype").css({'border':'1px solid red'});
        $("#outputbrand").css({'border':'1px solid red'});
        $("#outputmodel").css({'border':'1px solid red'});




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


var outputtype=$('#outputtype').val();
var protocol=$('#outputprotocolname :selected').val();
//var termination =$('#outputtermination :selected').val();

var controldevice=$('#outputcontroldevice').val();
var inputdeviceData = [{ModelName:outputmodel,BrandName:outputbrand,TypeID:outputtype,protocol:protocol,controldevice:controldevice}]
////////inputdevice date end

var volumeplus = $('#outputvolumeplus').val();
keyvaluedata.push({VolumePlus:volumeplus});

var volumeminus = $('#outputvolumeminus').val();
keyvaluedata.push({Volumeminus:volumeminus});

var mute = $('#outputmuteon').val();
keyvaluedata.push({MuteOn:mute});

var onn = $('#outputONcommand').val();
keyvaluedata.push({PowerOn:onn});

var off= $('#outputOFFcommand').val();
keyvaluedata.push({PowerOff:off});

//var termination =$('#outputtermination :selected').val();
//keyvaluedata.push({Termination:termination});

keyvaluedata.push({'HEXASCII':outputcodekey});



var keyvalueJSON =JSON.stringify(keyvaluedata);
console.log("key value:"+keyvalueJSON);

var inputdeviceJSON =JSON.stringify(inputdeviceData);
console.log("input device"+inputdeviceJSON);



               $.ajax ({
                    type: "POST",
                    url: "include/ajax/addoutputDeviceData.php",
                    data: {inputdev:inputdeviceJSON,keyval:keyvalueJSON },
                    cache: false,
                     success: function(data) {
                       console.log("success"+data);
                        var form = document.getElementById("myFormOutputDevice");
                        form.reset();
                        refresh_tree();
                        $("#addoutputdevice").dialog("close");



                    },
                    error: function(){
                    console.log("failure");
                    }
                });



}

 
        
});
});
</script>