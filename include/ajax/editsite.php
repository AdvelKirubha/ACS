<?php
include('../../dbconfig.php');


if($_GET['ElementName'])
{
    $ElementName=$_GET['ElementName'];
    $order=mysql_query("select * from addsite where ElementName = '$ElementName'") ;
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
							 <div class="row" id="edit1">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                               
                                        <div class="panel-body">
                                            <fieldset>
                                                <legend>General details
                                                </legend>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>IP Address</p>
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
                                                        <input class="form-control" type="text" name="ElementName" id="ElementName1" value="<?php echo $row['ElementName'] ?>">

                                                         <input type="hidden" id="editid1" value="<?php echo $row['SiteID'] ?>">
                                                    </div>
                                                </div>
                                              
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>Description</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" name="Description" id="Description1"  value="<?php echo $row['Description'] ?>">
                                                    </div>
                                                </div>
                                            </fieldset>
                                            <!--protocol details-->
                                            <fieldset>
                                                <legend>Site details</legend>
                                                <label>Global</label>
                                            </fieldset>
                                            <!--protocol details-->
                                          
                                            <!--Location details-->
                                            <fieldset>
                                                <legend> Map Location details
                                                </legend>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Suite</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Suite" id="Suite1" value="<?php echo $row['Suite'] ?>">
                                                            </div>
                                                        </div>
                                                 
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>City</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="City" id="City1" value="<?php echo $row['City'] ?>">
                                                            </div>
                                                        </div>
                                                   
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Country</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Country" id="Country1" value="<?php echo $row['Country'] ?>">
                                                            </div>
                                                        </div>
                                                
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Latitude</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Latitude" id="Latitude1" value="<?php echo $row['Latitude'] ?>">
                                                            </div>
                                                        </div>
                                               
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Street</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Street" id="Street1" value="<?php echo $row['Street'] ?>">
                                                            </div>
                                                        </div>
                                            
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>State</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="State" id="State1" value="<?php echo $row['State'] ?>">
                                                            </div>
                                                        </div>
                                        
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Zip</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Zip" id="Zip1" value="<?php echo $row['Zip'] ?>">
                                                            </div>
                                                        </div>
                                            
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>
                                                                    Longitute</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Longitute" id="Longitute1" value="<?php echo $row['Longitute'] ?>">
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
                                                    <button type="submit" name="update" id="editupdate" class="btn btn-default">Update</button>&nbsp;&nbsp;
                                                    <button class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                            <!--Button-->
                                        </div>
                                  
                                    </div>
                                </div>
                            </div>



		<?php
	
}
?>
<script>
 $("#editupdate").click(function() {
        var editid = $("#editid1").val();
    var ElementName = $("#ElementName1").val();
    var Description = $("#Description1").val();
    var Suite = $("#Suite1").val();
    var City = $("#City1").val();
    var Country = $("#Country1").val();
    var Latitude = $("#Latitude1").val();
    var Street = $("#Street1").val();
    var State = $("#State1").val();
    var Zip = $("#Zip1").val();
    var Longitute = $("#Longitute1").val();


 var dataString  = "editid="+ editid + "&ElementName="+ElementName + "&Description="+Description + "&Suite="+Suite + "&City="+City + "&Country="+Country + "&Latitude="+Latitude + "&Street="+Street + "&State="+State + "&Zip="+Zip + "&Longitute="+Longitute; 
 $.ajax
                ({
                    type: "POST",
                    url: "include/ajax/updatesite.php",
                    data: dataString,
                    cache: false,
                    success: function(data) {
                        console.log(data); //Try to log the data and check the response
                          window.location.href = "dashboard.php";
                        if (data == true) {
                           // alert('success :  user logged in');
                        } else {
                            //alert('Erreur login');
                        }
                    },
                    error: function(){
                        //alert("failure");
                    }
                });




 });
</script>