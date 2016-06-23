 <?php
 
          if($row == $current){
            ?>
          <div class="row">
          <div class="col-md-12">
            <div class="col-md-2">
            <label>Device</label>
            <input type="hidden" id="where<?php echo $s; ?>" value="<?php echo $row2['deviceconfigid'] ?>">
            <input type="hidden" id="iodevice<?php echo $s; ?>" value="<?php echo $row2['iodeviceid'] ?>"> 
             <input type="hidden" id="devicenamel<?php echo $s; ?>" value="<?php echo $row2['device'] ?>">     
            <select style="width: 110px;height: 20px;" id="devicename<?php echo $s; ?>" class="device" isid="<?php echo $s; ?>">
               
                 <?php 
              $viw=mysql_query("SELECT TypeID from inputdevices group by TypeID");
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
          <label class="namebrand<?php echo $s; ?>" style="">Brand</label>
          <select id="brandname<?php echo $s; ?>" class="brandall  brand<?php echo $s; ?>" isid="<?php echo $s; ?>" style="width: 110px;height: 20px;">
            <option><?php echo $row2['brand']; ?></opiton>
                       
            </select> 
          </div>

          <div class="col-md-2">
          <label class="namemodel<?php echo $s;?>" style="">Model #</label>
          <select  id="modelname<?php echo $s; ?>" class="model model<?php echo $s; ?>" isid="<?php echo $s; ?>" style="width: 110px;height: 20px;">
          
           <option><?php echo $row2['model']; ?></opiton>
            
            </select>
          </div>

          <div class="col-md-2">
         <label class="nameprotocol<?php echo $s;?>" style="">Protocol</label>
           <select id="protocolname<?php echo $s; ?>"  class="protocol protocol<?php echo $s; ?>" isid="<?php echo $s; ?>" style="width: 110px;height: 20px;">
           
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
          <label class="namedevice<?php echo $s;?>" style="">Device Ip</label>
           <input type="text" name="control[]" class="control control<?php echo $s; ?>" isid="<?php echo $s; ?>" style="    width: 110px;height: 20px;" id="controldevicename<?php echo $s; ?>" value="<?php echo $row2['controldevice']; ?>"> 
          </div>
          <div class="col-md-2">
          <input type="button" value="update" class="update update<?php echo $s; ?>" isid="<?php echo $s; ?>" name="update" style="background: #CF0A2C;color: white; height: 20px; margin-top: 18px;" > 
          </div>
          </div>
          </div>
           <script type="text/javascript">
            $(document).ready(function(){

                  var onloaddev = $('#devicenamel<?php echo $s; ?>').val();

                  console.log(onloaddev);

                  if (onloaddev=="Laptop"||onloaddev=="Desktop"){


                     $('.nameprotocol'+<?php echo $s; ?>).hide();
             $('.protocol'+<?php echo $s; ?>).hide();
             $('.brand'+<?php echo $s; ?>).hide();
             $('.namebrand'+<?php echo $s; ?>).hide();
             $('.namemodel'+<?php echo $s; ?>).hide();
             $('.model'+<?php echo $s; ?>).hide();
             $(".namedevice"+<?php echo $s; ?>).hide();
             $(".control"+<?php echo $s; ?>).hide();
             $(".buttoni"+<?php echo $s; ?>).show();
              $(".button"+<?php echo $s; ?>).show();



                  }


                  
                });


          </script>
          <?php
          } else {
            ?>
          <div class="row">
          <div class="col-md-12">
          <div class="col-md-2">
          <label>Device</label>
          <select style="width: 110px;height: 20px;" id="devicename<?php echo $s; ?>" class="device" isid="<?php echo $s; ?>">
              <option>Please select Device</opiton>
            <?php 
              $viw=mysql_query("SELECT TypeID from inputdevices group by TypeID");
              while($sow=mysql_fetch_assoc($viw)) {
              echo '<option value="'.$sow['TypeID']. '">'.$sow[ 'TypeID']. '</option>';
              } 
              ?> 
               <option value="Add" class="inputdeviceadd">Add</opiton> 
            </select>
          </div>
          <div class="col-md-2">
          <label class="namebrand<?php echo $s; ?>" style="display: none;">Brand</label>
          <select id="brandname<?php echo $s; ?>" class="brandall  brand<?php echo $s; ?>" isid="<?php echo $s; ?>" style="width: 110px;height: 20px;display: none;">
           
            </select> 
          </div>

          <div class="col-md-2">
          <label class="namemodel<?php echo $s;?>" style="display: none;">Model #</label>
          <select  id="modelname<?php echo $s; ?>" class="model model<?php echo $s; ?>" isid="<?php echo $s; ?>" style="width: 110px;height: 20px;display: none;">
           
            </select>
          </div>

          <div class="col-md-2">
         <label class="nameprotocol<?php echo $s;?>" style="display: none;">Protocol</label>
           <select id="protocolname<?php echo $s; ?>"  class="protocol protocol<?php echo $s; ?>" isid="<?php echo $s; ?>" style="display: none;width: 110px;height: 20px;">
          
            <option>SourceIP</option>
            <option>IP-to-RS232</option>
            <option>IP-to-IR</option>
            <option>PJLINK</option>
            </select> 
          </div>
          <div class="col-md-2">
          <label class="namedevice<?php echo $s;?>" style="display: none;">Device Ip</label>
           <input type="text" name="control[]" class="control control<?php echo $s; ?>" isid="<?php echo $s; ?>" style="    width: 110px;height: 20px; display: none;" id="controldevicename<?php echo $s; ?>"> 
          </div>
          <div class="col-md-2">
          <input type="button" value="save" class="button button<?php echo $s; ?>" isid="<?php echo $s; ?>" name="save" style="background: #CF0A2C;color: white;height: 20px;    margin-top: 18px; display: none;" > 
          </div>
          <div class="col-md-2">
          <input type="button" value="update" class="update update<?php echo $s; ?>" isid="<?php echo $s; ?>" name="update" style="background: #CF0A2C;color: white; display: none; height: 20px;  margin-top: 18px;" > 
          </div>
          </div>
          </div>

          <?php
          }