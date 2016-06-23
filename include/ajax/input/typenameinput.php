 <?php
include('../../../dbconfig.php');
	$wherethis=$_POST['wherethis'];


if($wherethis=='1'){
                        $viw=mysql_query("SELECT TypeID from inputdevices group by TypeID");
                        echo "SELECT TypeID from inputdevices group by TypeID WHERE '$wherethis'";
                        ?>
                    <option>Please Select Device</option>
<?php
                        while($sow=mysql_fetch_assoc($viw)) {
                            echo '<option value="'.$sow['TypeID']. '">'.$sow[ 'TypeID']. '</option>';
                        } }
                    ?> 
