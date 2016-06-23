 <?php
 
          if($xtex==0||$xtex==1)
          {
            $loop=$xtex.$s;
          if($row == $current){
            ?>
          <div class="row">
          <div class="col-md-12" style="padding-left: 54px;">
          <div class="col-md-2">
          <label>Device</label>
          <input type="hidden" id="whereo<?php echo $loop; ?>" value="<?php echo $row2['deviceconfigid'] ?>">
           <input type="hidden" id="iodevice<?php echo $loop; ?>" value="<?php echo $row2['iodeviceid'] ?>">
          <select id="devicenameo<?php echo $loop; ?>" style="width: 100px;height: 20px;"  class="deviceo" isid="<?php echo $loop; ?>" port="<?php echo $s; ?>">
             
          
           <?php 
              $viw=mysql_query("SELECT TypeID from outputdevices group by TypeID");
              while($sow=mysql_fetch_assoc($viw)) {
                if($row2['device']==$sow['TypeID']){

                  echo '<option selected value="'.$row2['device']. '">'.$row2[ 'device']. '</option>';

                }else{
              echo '<option value="'.$sow['TypeID']. '">'.$sow[ 'TypeID']. '</option>';
              }
              } 
              ?>
               <option>Add</option>
               <option>No device</option>
            </select>
          </div>
          <div class="col-md-2">
          <label class="namebrando<?php echo $loop; ?>" style="">Brand</label>
          <select id="brandnameo<?php echo $loop; ?>" class="brandallo  brando<?php echo $loop; ?>" isid="<?php echo $loop; ?>" port="<?php echo $s; ?>" style="width: 100px;height: 20px;">
          <option><?php echo $row2['brand']; ?></option>
                    <option>Please select Brand</option>

            </select> 
          </div>
          <div class="col-md-2">
          <label class="namemodelo<?php echo $loop;?>" style="">Model #</label>
          <select  id="modelnameo<?php echo $loop; ?>" class="modelo modelo<?php echo $loop; ?>" isid="<?php echo $loop; ?>" style="width: 100px;height: 20px;">
          
          <option><?php echo $row2['model']; ?></option>
          <option>Please select Model</option>  
            </select>
          </div>
          <div class="col-md-2">
         <label class="nameprotocolo<?php echo $loop;?>" style="">Protocol</label>
           <select  id="protocolnameo<?php echo $loop; ?>" class="protocolo protocolo<?php echo $loop; ?>" isid="<?php echo $loop; ?>" port="<?php echo $s; ?>" style="width: 100px;height: 20px;">
            <option>Please select protocol</option>
          <?php
            $pro=$row2['protocol'];
            ?>
          <option  <?=$pro == 'SourceIP' ? ' selected="selected"' : '';?> >SourceIP</option>
          <option   <?=$pro == 'IP-to-RS232' ? ' selected="selected"' : '';?> >IP-to-RS232</option>
          <option   <?=$pro == 'IP-to-IR' ? ' selected="selected"' : '';?> >IP-to-IR</option>
          <option   <?=$pro == 'PJLINK' ? ' selected="selected"' : '';?> >PJLINK</option>
            </select> 
          </div>
          <div class="col-md-2">
          <label class="namedeviceo<?php echo $loop;?>" style="">Device Ip</label>
           <input type="text" name="control[]" value="<?php echo $row2['controldevice']; ?>"  class="controlo controlo<?php echo $loop; ?>" isid="<?php echo $loop; ?>" port="<?php echo $s; ?>" style="    width: 100px;height: 20px; " id="controldevicenameo<?php echo $loop; ?>"> 
          </div>
          <div class="col-md-2">
         <input type="button" value="update" class="updateo update<?php echo $loop; ?>" isid="<?php echo $loop; ?>" port="<?php echo $s; ?>" name="update" style="background: #CF0A2C;color: white;    margin-top: 18px;height: 20px" > 
          </div>
          </div>
          </div>
          <?php
          } else {
            ?>
         <div class="row">
          <div class="col-md-12" style="padding-left: 54px;">
          <div class="col-md-2">
          <label>Device</label>
          <select id="devicenameo<?php echo $loop; ?>" style="width: 100px;height: 20px;"  class="deviceo" isid="<?php echo $loop; ?>" port="<?php echo $s; ?>">
              <option>Please select Device</option>
            <?php 
              $viw=mysql_query("SELECT TypeID from outputdevices GROUP by TypeID");
              while($sow=mysql_fetch_assoc($viw)) {

              echo '<option value="'.$sow['TypeID']. '">'.$sow[ 'TypeID']. '</option>';
              } 
              ?> 
              <option>Add</option> 
            </select>
          </div>
          <div class="col-md-2">
          <label class="namebrando<?php echo $loop; ?>" style="display: none;">Brand</label>
          <select id="brandnameo<?php echo $loop; ?>" class="brandallo  brando<?php echo $loop; ?>" isid="<?php echo $loop; ?>" port="<?php echo $s; ?>" style="width: 100px;height: 20px;display: none;">
            <option>Please select Brand</option>
            </select> 
          </div>
          <div class="col-md-2">
          <label class="namemodelo<?php echo $loop;?>" style="display: none;">Model #</label>
          <select  id="modelnameo<?php echo $loop; ?>" class="modelo modelo<?php echo $loop; ?>" isid="<?php echo $loop; ?>" port="<?php echo $s; ?>" style="width: 100px;height: 20px;display: none;">
            <option>Please select Model</option>
            </select>
          </div>
          <div class="col-md-2">
         <label class="nameprotocolo<?php echo $loop;?>" style="display: none;">Protocol</label>
           <select  id="protocolnameo<?php echo $loop; ?>" class="protocolo protocolo<?php echo $loop; ?>" isid="<?php echo $loop; ?>" port="<?php echo $s; ?>" style="display: none;width: 100px;height: 20px;">
            <option>Please select Protocol</option>
            <option>SourceIP</option>
            <option>IP-to-RS232</option>
            <option>IP-to-IR</option>
            <option>PJLINK</option>
            </select> 
          </div>
          <div class="col-md-2">
          <label class="namedeviceo<?php echo $loop;?>" style="display: none;">Device Ip</label>
           <input type="text" name="control[]" class="controlo controlo<?php echo $loop; ?>" isid="<?php echo $loop; ?>" port="<?php echo $s; ?>" style="    width: 100px;height: 20px; display: none;" id="controldevicenameo<?php echo $loop; ?>"> 
          </div>
          <div class="col-md-2">
          <input type="button" value="save" class="buttono buttono<?php echo $loop; ?>" isid="<?php echo $loop; ?>" port="<?php echo $s; ?>" id="save" style="background: #CF0A2C;color: white;    margin-top: 18px; height: 20px; display: none;" > 
          </div>
          <div class="col-md-2">
         <input type="button" value="update" class="updateo updateo<?php echo $loop; ?>" isid="<?php echo $loop; ?>" port="<?php echo $s; ?>" name="update" style="background: #CF0A2C;color: white; display: none; height: 20px;   margin-top: 18px;" > 
          </div>
          </div>
          </div>

          <?php
          }
          } else
          {
          ?>




  <?php
 
          if($row == $current){
            ?>
          <div class="row">
          <div class="col-md-12" style="padding-left: 54px;">
          <div class="col-md-2">
          <label>Device</label>
          <input type="hidden" id="whereo<?php echo $s; ?>" value="<?php echo $row2['deviceconfigid'] ?>">
           <input type="hidden" id="iodevice<?php echo $s; ?>" value="<?php echo $row2['iodeviceid'] ?>">
          <select id="devicenameo<?php echo $s; ?>" style="width: 100px;height: 20px;"  class="deviceo" isid="<?php echo $s; ?>" port="<?php echo $s; ?>">
             
          
           <?php 
              $viw=mysql_query("SELECT TypeID from outputdevices group by TypeID");
              while($sow=mysql_fetch_assoc($viw)) {
                if($row2['device']==$sow['TypeID']){

                  echo '<option selected value="'.$row2['device']. '">'.$row2[ 'device']. '</option>';

                }else{
              echo '<option value="'.$sow['TypeID']. '">'.$sow[ 'TypeID']. '</option>';
              }
              } 
              ?>
               <option>Add</option>
               <option>No device</option>
            </select>
          </div>
          <div class="col-md-2">
          <label class="namebrando<?php echo $s; ?>" style="">Brand</label>
          <select id="brandnameo<?php echo $s; ?>" class="brandallo  brando<?php echo $s; ?>" isid="<?php echo $s; ?>" port="<?php echo $s; ?>" style="width: 100px;height: 20px;">
          <option><?php echo $row2['brand']; ?></option>
                    <option>Please select Brand</option>

            </select> 
          </div>
          <div class="col-md-2">
          <label class="namemodelo<?php echo $s;?>" style="">Model #</label>
          <select  id="modelnameo<?php echo $s; ?>" class="modelo modelo<?php echo $s; ?>" isid="<?php echo $s; ?>" port="<?php echo $s; ?>" style="width: 100px;height: 20px;">
          
          <option><?php echo $row2['model']; ?></option>
          <option>Please select Model</option>  
            </select>
          </div>
          <div class="col-md-2">
         <label class="nameprotocolo<?php echo $s;?>" style="">Protocol</label>
           <select  id="protocolnameo<?php echo $s; ?>" class="protocolo protocolo<?php echo $s; ?>" isid="<?php echo $s; ?>" port="<?php echo $s; ?>" style="width: 100px;height: 20px;">
            <option>Please select protocol</option>
          <?php
            $pro=$row2['protocol'];
            ?>
          <option  <?=$pro == 'SourceIP' ? ' selected="selected"' : '';?> >SourceIP</option>
          <option   <?=$pro == 'IP-to-RS232' ? ' selected="selected"' : '';?> >IP-to-RS232</option>
          <option   <?=$pro == 'IP-to-IR' ? ' selected="selected"' : '';?> >IP-to-IR</option>
          <option   <?=$pro == 'PJLINK' ? ' selected="selected"' : '';?> >PJLINK</option>
            </select> 
          </div>
          <div class="col-md-2">
          <label class="namedeviceo<?php echo $s;?>" style="">Device Ip</label>
           <input type="text" name="control[]" value="<?php echo $row2['controldevice']; ?>"  class="controlo controlo<?php echo $s; ?>" isid="<?php echo $s; ?>" port="<?php echo $s; ?>" style="    width: 100px;height: 20px; " id="controldevicenameo<?php echo $s; ?>"> 
          </div>
          <div class="col-md-2">
         <input type="button" value="update" class="updateo update<?php echo $s; ?>" isid="<?php echo $s; ?>" port="<?php echo $s; ?>" name="update" style="background: #CF0A2C;color: white;    margin-top: 18px;height: 20px" > 
          </div>
          </div>
          </div>
          <?php
          } else {
            ?>
         <div class="row">
          <div class="col-md-12" style="padding-left: 54px;">
          <div class="col-md-2">
          <label>Device</label>
          <select id="devicenameo<?php echo $s; ?>" style="width: 100px;height: 20px;"  class="deviceo" isid="<?php echo $s; ?>" port="<?php echo $s; ?>">
              <option>Please select Device</option>
            <?php 
              $viw=mysql_query("SELECT TypeID from outputdevices GROUP by TypeID");
              while($sow=mysql_fetch_assoc($viw)) {

              echo '<option value="'.$sow['TypeID']. '">'.$sow[ 'TypeID']. '</option>';
              } 
              ?> 
              <option>Add</option> 
            </select>
          </div>
          <div class="col-md-2">
          <label class="namebrando<?php echo $s; ?>" style="display: none;">Brand</label>
          <select id="brandnameo<?php echo $s; ?>" class="brandallo  brando<?php echo $s; ?>" isid="<?php echo $s; ?>" port="<?php echo $s; ?>" style="width: 100px;height: 20px;display: none;">
            <option>Please select Brand</option>
            </select> 
          </div>
          <div class="col-md-2">
          <label class="namemodelo<?php echo $s;?>" style="display: none;">Model #</label>
          <select  id="modelnameo<?php echo $s; ?>" class="modelo modelo<?php echo $s; ?>" isid="<?php echo $s; ?>" port="<?php echo $s; ?>" style="width: 100px;height: 20px;display: none;">
            <option>Please select Model</option>
            </select>
          </div>
          <div class="col-md-2">
         <label class="nameprotocolo<?php echo $s;?>" style="display: none;">Protocol</label>
           <select  id="protocolnameo<?php echo $s; ?>" class="protocolo protocolo<?php echo $s; ?>" isid="<?php echo $s; ?>" port="<?php echo $s; ?>" style="display: none;width: 100px;height: 20px;">
            <option>Please select Protocol</option>
            <option>SourceIP</option>
            <option>IP-to-RS232</option>
            <option>IP-to-IR</option>
            <option>PJLINK</option>
            </select> 
          </div>
          <div class="col-md-2">
          <label class="namedeviceo<?php echo $s;?>" style="display: none;">Device Ip</label>
           <input type="text" name="control[]" class="controlo controlo<?php echo $s; ?>" isid="<?php echo $s; ?>" port="<?php echo $s; ?>" style="    width: 100px;height: 20px; display: none;" id="controldevicenameo<?php echo $s; ?>"> 
          </div>
          <div class="col-md-2">
          <input type="button" value="save" class="buttono buttono<?php echo $s; ?>" isid="<?php echo $s; ?>" port="<?php echo $s; ?>" id="save" style="background: #CF0A2C;color: white;    margin-top: 18px; height: 20px; display: none;" > 
          </div>
          <div class="col-md-2">
         <input type="button" value="update" class="updateo updateo<?php echo $s; ?>" isid="<?php echo $s; ?>" port="<?php echo $s; ?>" name="update" style="background: #CF0A2C;color: white; display: none; height: 20px;   margin-top: 18px;" > 
          </div>
          </div>
          </div>

          <?php
          }}?>




 