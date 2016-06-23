<?php
include('../../dbconfig.php');


if($_GET['id'])
{
    $id=$_GET['id'];
    $order=mysql_query("select * from adddevice where DeviceID = '$id'") ;
    $row=mysql_fetch_assoc($order);
    $new = $row['IPAddress'];
    $new = explode(":",$new);
?>
	<style type="text/css">
	.iie {
    position: absolute;
    margin-left: 140px;
    margin-top: -26px;
}</style>
							<div class="device"   title="Add Device">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                 
                                        <div class="panel-body">
                                            <fieldset>
                                                <legend>General details
                                                </legend>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>IP Address</p>
                                                            <input type="hidden" name="hidden" id="hidden">
                                                    </div>
                                                    <div class="col-md-6">
                                                       <div class="row" style=" padding: 4px;">
                                                            <div class="col-md-3">
                                                                <input class="form-control" type="text" name="IPAddress[]" id="ipaddress1" value="<?php echo $new['0']?>">
                                                                <label class="iie">:</label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input class="form-control" type="text" name="IPAddress[]" id="ipaddress2" value="<?php echo $new['1']?>">
                                                                <label class="iie">:</label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input class="form-control" type="text" name="IPAddress[]" id="ipaddress3" value="<?php echo $new['2']?>">
                                                                <label class="iie">:</label>
                                                                <label style=" position: absolute;margin-left: 212px; margin-top: -38px;color: red; font-size: 20px;">*</label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input id="ipaddress4" class="form-control" type="text" name="IPAddress[]" value="<?php echo $new['3']?>"> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>Element Name</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                     <input class="form-control" type="text" name="ElementName" id="ElementName" value="<?php echo $row['ElementName'] ?>">

                                                         <input type="hidden" id="editid" value="<?php echo $row['DeviceID'] ?>">
                                                    </div>
                                                </div>
                                              
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>Description</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" name="Description" id="Description" value="<?php echo $row['Description'] ?>">
                                                    </div>
                                                </div>
                                            </fieldset>
                                           
                                            <!--Location details-->
                                            <fieldset>
                                                <legend>Location details
                                                </legend>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Suite</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Suite" value="<?php echo $row['Suite'] ?>" id="Suite">
                                                            </div>
                                                        </div>
                                                 
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>City</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="City" value="<?php echo $row['City'] ?>" id="City">
                                                            </div>
                                                        </div>
                                                   
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Country</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Country" value="<?php echo $row['Country'] ?>" id="Country">
                                                            </div>
                                                        </div>
                                                
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Latitude</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Latitude" value="<?php echo $row['Latitude'] ?>" id="Latitude">
                                                            </div>
                                                        </div>
                                               
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Street</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Street" value="<?php echo $row['Street'] ?>" id="Street">
                                                            </div>
                                                        </div>
                                            
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>State</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="State" value="<?php echo $row['State'] ?>" id="State">
                                                            </div>
                                                        </div>
                                        
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Zip</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Zip" value="<?php echo $row['Zip'] ?>" id="Zip">
                                                            </div>
                                                        </div>
                                            
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>
                                                                    Longitute</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Longitute" value="<?php echo $row['Longitute'] ?>" id="Longitute">
                                                            </div>
                                                        </div>
                                            
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <!--Location details-->
                                            <!--Button-->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <button class="btn btn-default">Help</button>
                                                </div>
                                                <div class="col-md-3 col-md-offset-6">
                                                    <button type="submit" name="submit" id="updatediv" class="btn btn-default">Save</button>&nbsp;&nbsp;
                                                    <button class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                            <!--Button-->
                                        </div>
                                     
                                    </div>
                                </div>
                            </div>
                        </div>



		<?php
	
}
?>
<script>
 $("#updatediv").click(function() {
   debugger;
        var editid = $("#editid").val();

    var ElementName = $("#ElementName").val();
    var Description = $("#Description").val();
    var Suite = $("#Suite").val();
    var City = $("#City").val();
    var Country = $("#Country").val();
    var Latitude = $("#Latitude").val();
    var Street = $("#Street").val();
    var State = $("#State").val();
    var Zip = $("#Zip").val();
    var Longitute = $("#Longitute").val();


 var dataString  = "editid="+ editid + "&ElementName="+ElementName + "&Description="+Description + "&Suite="+Suite + "&City="+City + "&Country="+Country + "&Latitude="+Latitude + "&Street="+Street + "&State="+State + "&Zip="+Zip + "&Longitute="+Longitute; 
 $.ajax
                ({
                    type: "POST",
                    url: "include/ajax/updatedevice.php",
                    data: dataString,
                    cache: false,
                    success: function(data) {
                        console.log(data); //Try to log the data and check the response
                         window.location.href = "dashboard.php";
                        if (data == true) {
                           // alert('success :  user logged in');
                        } else {
                           // alert('Erreur login');
                        }
                    },
                    error: function(){
                       // alert("failure");
                    }
                });




 });
</script>