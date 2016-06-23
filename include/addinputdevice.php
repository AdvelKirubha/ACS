

                            <div class="row">
                              <div class="col-md-12">
                                <form action="" method="post">
                                    <div class="">
                                        <div class="">
                                           
                                                <div class="row">
                                                    <div class="col-md-4" style="width: 80px !important">
                                                        <p>Type</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                                <input class="form-control" type="text" name="type" id="type"> 
                                                            </div>
                                                        </div>
                                           
                                             
                                                <div class="row">
                                                    <div class="col-md-4"style="width: 80px !important">
                                                        <p>Brand</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="text" name="brand" id="brand">
                                                    </div>
                                                </div>
                                              
                                                <div class="row">
                                                    <div class="col-md-4" style="width: 80px !important">
                                                        <p>Model #</p>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input class="form-control" type="text" name="model" id="model">
                                                    </div>
                                                </div>
                                                 <div class="row">
                                                 <div class="col-md-6" style="padding-left: 5px; width: 227px!important;">
                                                    <div class="col-md-6" style="padding-left: 5px; width: 80px!important;">
                                                        <p>     &nbsp;Protocol #</p>
                                                    </div>
                                                    <div class="col-md-6" style="padding-left: 0px;">
                                                        <select id="protocolname" style="padding-left: 0px; margin: 3px !important;float: left;width: 120px!important;">
                                                          <option>please select protocol</option>
                                                          <option  <?=$pro == 'SourceIP' ? ' selected="selected"' : '';?> >SourceIP</option>
                                                          <option   <?=$pro == 'IP-to-RS232' ? ' selected="selected"' : '';?> >IP-to-RS232</option>
                                                          <option   <?=$pro == 'IP-to-IR' ? ' selected="selected"' : '';?> >IP-to-IR</option>                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6" style="padding-left: 0px; float: left; ">
                                                <div class="col-md-4" >
                                                        <p>Control Device Ip #</p>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <input style="    margin-left: -40px!important;" class="form-control" type="text" name="controldevice" id="controldevice">
                                                    </div>
                                                </div>
                                                </div>

                                                
                                   
                                          <br/>
                                                <div class="row">
                                                    <div class="col-md-4">

                                                    <div class="row" style="width:350px;">
                                                            <div class="col-md-2"; >
                                                                <p>Commands</p>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <input  type="radio" name="Suite"> 
                                                                <label style="    position: absolute;padding: 3px;margin-left: -16px;">ASCII</label> 
                                                                <input  type="radio" name="Suite"> 
                                                                <label style="position: absolute;padding: 2px;    margin-left: -10px;">HEX</label> 
                                                            </div>
                                                            <div class="col-md-2" style="padding-left: 0px;">
                                                                <p>Termination</p>
                                                            </div>
                                                            <div class="col-md-3">
                                                               <select style="    margin: 3px !important;" id="termination">
                                                                <option>None</option>
                                                                <option>/r</option>
                                                                <option>/n</option>
                                                                <option>/r/n</option>
                                                                <option>/n/r</option>
                                                               </select>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6" style="width: 80px !important">
                                                                <p>ON</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="on" id="ONcommand">
                                                            </div>
                                                        </div>
                                                 
                                                        <div class="row">
                                                            <div class="col-md-6" style="width: 80px !important">
                                                                <p>OFF</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="off" id="OFFcommand">
                                                            </div>
                                                        </div>
                                                   
                                                        <div class="row">
                                                            <div class="col-md-6"style="width: 80px !important">
                                                                <p>Volume +</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="volumeplus" id="volumeplus">
                                                            </div>
                                                        </div>
                                                
                                                        <div class="row">
                                                            <div class="col-md-6"style="width: 80px !important">
                                                                <p>Volume -</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="volume2" id="volumeminus" >
                                                            </div>
                                                        </div>

                                                        <div class="row">
                                                            <div class="col-md-6" style="width: 80px !important">
                                                                <p>Mute</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="mute" id="muteon" >
                                                            </div>
                                                        </div>

                                    


                                                        <div id="customFields">
                                                        </div>
                                                        <a style="color: #FB7F6C;text-decoration-line: none;" href="javascript:void(0);" class="addCF">Add</a>
                                               
                                                    </div>


                                                    <div class="col-md-6" style="padding-left: 0px">
                                                        <div class="row">
                                                            <div class="col-md-6" style="padding-left: 30px;">
                                                                <p>Number Pad</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input  type="radio" name="Street" value="1">
                                                                <label style=" margin: 2px -13px;   position: absolute;">ON</label> 
                                                                <input  type="radio" name="Street" value="2">
                                                                <label style=" margin: 2px -13px;   position: absolute;">OFF</label>
                                                            </div>
                                                        </div>
                                                        <div id="radio">
                                                         <div class="row">
                                                            <div class="col-md-3">
                                                                <span style="margin-left: 42px;">1</span>
                                                                <input type="text" class="form-control" name="numberpad1">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span style="margin-left: 42px;">2</span>
                                                                <input type="text" class="form-control" name="numberpad2">
                                                            </div>
                                                             <div class="col-md-3">
                                                                <span style="margin-left: 42px;">3</span>
                                                                <input type="text" class="form-control" name="numberpad3">
                                                            </div>
                                                            </div>
                                                             <div class="row">
                                                            <div class="col-md-3">
                                                                <span style="margin-left: 42px;">4</span>
                                                                <input type="text" class="form-control" name="numberpad4">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span style="margin-left: 42px;">5</span>
                                                                <input type="text" class="form-control" name="numberpad5">
                                                            </div>
                                                             <div class="col-md-3">
                                                                <span style="margin-left: 42px;">6</span>
                                                                <input type="text" class="form-control" name="numberpad6">
                                                            </div>
                                                            </div>
                                                             <div class="row">
                                                            <div class="col-md-3">
                                                                <span style="margin-left: 42px;">7</span>
                                                                <input type="text" class="form-control" name="numberpad7">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span style="margin-left: 42px;">8</span>
                                                                <input type="text" class="form-control" name="numberpad8">
                                                            </div>
                                                             <div class="col-md-3">
                                                                <span style="margin-left: 42px;">9</span>
                                                                <input type="text" class="form-control" name="numberpad9">
                                                            </div>
                                                            </div>
                                                             <div class="row">
                                                            <div class="col-md-3">
                                                                <span style="margin-left: 42px;">*</span>
                                                                <input type="text" class="form-control" name="numberpad10">
                                                            </div>
                                                            <div class="col-md-3">
                                                                <span style="margin-left: 42px;">0</span>
                                                                <input type="text" class="form-control" name="numberpad11">
                                                            </div>
                                                             <div class="col-md-3">
                                                                <span style="margin-left: 42px;">#</span>
                                                                <input type="text" class="form-control" name="numberpad12">
                                                            </div>
                                                            </div>
                                                     
                                                </div>
                                                    </div>
                                                </div>
                                          
                                            <div class="row">
                                                
                                                <div class="col-md-1 col-md-offset-7">
                                                    <a  id="addinputdevice1"  class="btn btn-default"  style="background: rgb(255, 99, 0); border: 1px solid black; font-weight: bold;" >Add Device</a>
                                                </div>
                                            </div>
                                            <!--Button-->
                                        </div>
                                       
                                    </div>
                                </div>
                            </div>

<script type="text/javascript" src="assets/jsdown/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
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
        $("#customFields").append('<div class="row"><div class="col-md-6" style="width: 70px !important"><input type="text" style="width: 60px;" name=keyInput></div><div class="col-md-6"><input class="form-control" type="text" name=valueInput ></div></div><br/>');
    });

$("#addinputdevice1").on('click',function(){

    
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

var type=$('#type').val();

var brand=$('#brand').val();

var model=$('#model').val();


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
        });
});
</script>