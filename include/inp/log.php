<?php 
include "dbconfig.php";


$logqry="SELECT log.id AS id1, logactivity.activity AS activity1, Description, agentID, clientID, log.createdon AS CreatedOn from log inner join logactivity on log.activity=logactivity.id";

$logresult=mysql_query($logqry);

?>
<table id="example1log" class="table table-bordered table-striped">
    <thead>
        <tr>
          <th>Log ID</th>
          <th>activity</th>
          <th>Description</th>
          <th>On</th>
<!--     <th>userid</th>
    <th>agentID</th> -->
        </tr>
    </thead>
    <tbody>
    <?php while ($logrow=mysql_fetch_assoc($logresult)) { ?>
        <tr>
           <td><?php echo $logrow['id1']; ?></td>
           <td><?php echo $logrow['activity1'] ?> </td>
           <td><?php echo $logrow['Description'] ?> </td>
           <td><?php echo $logrow['CreatedOn'] ?> </td>
      <!--      <td><?php echo $logrow['agentID'] ?> </td>
           <td> <?php echo $logrow['clientID'] ?></td> -->
        </tr>
      <?php } ?>
    </tbody>
</table>

