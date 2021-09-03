<?php
  include_once 'dbh.inc.php';
  $sql="Select * from jobs";
  $data=mysqli_query($conn,$sql);
  $total= mysqli_num_rows($data);
  ?>
  <link rel="stylesheet" href="../View/CSS/style.css">
  <header class="pth">
    Job List <br>
  </header>
  <div class="tl1">
  <table>
    <tr>
      <th>Name</th>
      <th>Payment</th>
      <th>Location</th>
      <th>Time</th>

    </tr>
    <?php
    while($result=mysqli_fetch_assoc($data)){
      echo "<tr>
      <td>".$result['job_name']."</td>
      <td>".$result['job_payment']."</td>
      <td>".$result['job_location']."</td>
      <td>".$result['delivery_time']."</td>

      </tr>";
    }

?>
</table></div>
