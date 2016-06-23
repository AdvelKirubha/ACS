
<?php
include('../dbconfig.php');
if($_POST['DeviceID'])
{
    $DeviceID=$_POST['DeviceID'];
    
    $stmt = $DB_con->prepare("SELECT * FROM outputdevices WHERE BrandName=:BrandName");
    $stmt->execute(array(':BrandName' => $BrandName));
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
        ?>
        <option value="<?php echo $row['id']; ?>"><?php echo $row['ModelName']; ?></option>
        <?php
    }
}
?>
<div id="imagedeviceid" style="display:none;">
    
    <!-- table -->
    <div class="row" style="    margin-left: 0px;">
        <table style="">
            <tr style=" background: #e0e0e0;">
                <td><p style="text-align: center;width: 100px;">IO PORT</p></td>
                <td><p style="text-align: center;width: 130px;">INPUT TYPE</p></td>
                <td><p style="text-align: center;width: 130px;">VENDOR</p></td>
                <td><p style="text-align: center;width: 130px;">MODEL</p></td>
                <td><p style="text-align: center;width: 130px;">PROTOCOL</p></td>
            </tr>
            <tr>
                <td>
                    <select multiple name="ioport" id="ioport" size="5" style="padding: 9px 35px 43px 10px;" class="form-control">
                    
                    </select>
                </td>
                <td>
                    <select multiple name="BrandName" id="BrandName" class="BrandName form-control" size="5" style="padding: 9px 27px 43px 10px;" >
                      
                    </select>
                </td>
                <td>
                    <!-- vendor -->
                    <select multiple name="vendor" id="vendor" size="5" style="    padding: 9px 1px 43px 10px;" class="form-control">
                    </select>
                </td>
                <td>
                    <select multiple name="model" id="model" size="5" style="padding: 9px 2px 43px 10px;" class="form-control">
                    </select>
                </td>
                <td>
                    <!--output device-->
                    <select id="select" multiple name="proto"  size="5" style="padding: 9px 120px 43px 10px;" class="form-control">
                        <option value="1">
                            IP
                        </option>
                        <option value="2">
                            IP-to-RS232
                        </option>
                        <option value="3">
                            IP-to-IR
                        </option>
                        <option value="4">
                            PJ LINK
                        </option>
                    </select>
                </td>
            </tr>
        </table>
    </div>
    <br/>
    <div class="row" style="text-align: center;">
        <div class="col-md-12">
        <table style="">
            <tr style=" background: #e0e0e0;">
                <td><p style="text-align: center;    width: 130px;">COMMAND</p></td>
                <td><p style="text-align: center;    width: 130px;">STRING</p></td>
                <td><p style="text-align: center;    width: 130px;">PROTOCOL</p></td>
            </tr>
            <tr>
               
                <td><label>Display ON</label></td>
                <td><label>aaaabb0022dd</label></td>
                <td><label>56325</label></td>
            </tr>
            <tr>
               
                <td><label>Display OFF</label></td>
                <td><label>aaaabb0022dd</label></td>
                <td><label>56325</label></td>
            </tr>
            <tr>
               
                <td><label>Volume UP</label></td>
                <td><label>aaaabb0022dd</label></td>
                <td><label>56325</label></td>
            </tr>
            <tr>
               
                <td><label>Volume DOWN</label></td>
                <td><label>aaaabb0022dd</label></td>
                <td><label>56325</label></td>
            </tr>
             <tr>
               
                <td><label>Volume MUTE</label></td>
                <td><label>aaaabb0022dd</label></td>
                <td><label>56325</label></td>
            </tr>
        </table>
        </div>
    </div>
    <br>
    <div class="row" style="    margin-left: 0px;">
        <table style="width: 800px;">
            <tr style=" background: #e0e0e0;">
                <td style="width: 415px;"></td>
                <td>
                    <p style="text-align: center;">
                        Address</p>
                </td>
            </tr>
            <tr>
                <td>
                    <p style="text-align: center;" id="content">
                    </p>
                </td>
                <td>
                    <div class="row" style=" padding: 4px;">
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="proto1[]" class="proto1" id="proto11">
                            <label class="ii">:</label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="proto1[]" class="proto1" id="proto22">
                            <label class="ii">:</label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="proto1[]" class="proto1" id="proto33">
                            <label class="ii">:</label>
                        </div>
                        <div class="col-md-3">
                            <input class="form-control" type="text" name="proto1[]" class="proto1" id="proto44">
                        </div>
                    </div>
                </td>
            </tr>
        </table>
    </div>
    <br/>
    <div class="row">
        <div class="col-md-1 col-md-offset-8">
            <button class="btn btn-success" name="inputsave" id="inputsave">SAVE</button>
        </div>
        <div class="col-md-1">
            <button class="btn btn-success">Cancel</button>
        </div>
    </div>
   
</div>
<br/>

<br/>

