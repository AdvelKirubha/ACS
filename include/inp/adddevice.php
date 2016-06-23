  <?php


 if(isset($_POST['submit']))
 {
    $IPAddress= implode(":",$_POST['IPAddress']);
    $ElementName =$_POST['ElementName'];
    $Description =$_POST['Description'];
    $Suite =$_POST['Suite'];
    $City =$_POST['City'];
    $Country =$_POST['Country'];
    $Latitude =$_POST['Latitude'];
    $Street =$_POST['Street'];
    $State =$_POST['State'];
    $Zip =$_POST['Zip'];
    $Longitute =$_POST['Longitute'];

    mysql_query("insert into adddevice (UserID,IPAddress, ElementName, Description, Suite, City, Country, Latitude, Street, State, Zip, Longitute) values('$UserID','$IPAddress','$ElementName','$Description','$Suite','$City','$Country','$Latitude','$Street','$State','$Zip','$Longitute')") or die(mysql_error()); 

 mysql_query("SET @user1 = LAST_INSERT_ID()");

    $hidden=$_POST['hidden'];
    $sel1="SELECT *  FROM treeview_items WHERE name='$hidden'";
            $query1=mysql_query($sel1);
        while($res1=mysql_fetch_array($query1))
        {
        $id=$res1['id'];
        }
       $IPAddress= implode(":",$_POST['IPAddress']);
       $ipaddress1 =$IPAddress.'-';

    mysql_query("insert into treeview_items (name,text,parent_id,ipaddress,isdeveicesiteID,isdiv) values('$ElementName','$Description','$id','$ipaddress1',@user1,@user1)") or die(mysql_error());
?>
<script type="text/javascript">
    window.location.href = "dashboard.php";
</script>

<?php
}
?>
                        <div class="device" style="display:none;"  title="Add Device">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-default">
                                       <form method="POST" action="">
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
                                                                <input class="form-control" type="text" name="IPAddress[]">
                                                                <label class="ii">:</label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input class="form-control" type="text" name="IPAddress[]">
                                                                <label class="ii">:</label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input class="form-control" type="text" name="IPAddress[]">
                                                                <label class="ii">:</label>
                                                                <label style=" position: absolute;margin-left: 212px; margin-top: -38px;color: red; font-size: 20px;">*</label>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <input class="form-control" type="text" name="IPAddress[]"> 
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>Element Name</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <select class="form-control" name="ElementName" style="height: 32px !important;">
                                                    <?php $viw=mysql_query( " SELECT * from devices"); while($sow=mysql_fetch_assoc($viw)) { echo '<option value="'.$sow['DEVICE']. '">'.$sow[ 'DEVICE']. '</option>'; } ?>
                                                    </select>
                                                    </div>
                                                </div>
                                              
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <p>Description</p>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input class="form-control" type="text" name="Description">
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
                                                                <input class="form-control" type="text" name="Suite">
                                                            </div>
                                                        </div>
                                                 
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>City</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="City">
                                                            </div>
                                                        </div>
                                                   
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Country</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Country">
                                                            </div>
                                                        </div>
                                                
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Latitude</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Latitude" >
                                                            </div>
                                                        </div>
                                               
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Street</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Street">
                                                            </div>
                                                        </div>
                                            
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>State</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="State">
                                                            </div>
                                                        </div>
                                        
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>Zip</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Zip">
                                                            </div>
                                                        </div>
                                            
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <p>
                                                                    Longitute</p>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <input class="form-control" type="text" name="Longitute" >
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
                                                    <button type="submit" name="submit"  class="btn btn-default">Save</button>&nbsp;&nbsp;
                                                    <button class="btn btn-default">Cancel</button>
                                                </div>
                                            </div>
                                            <!--Button-->
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>