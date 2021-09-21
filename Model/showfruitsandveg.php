<?php
  include_once 'dbh.inc.php';
  $sql="SELECT * FROM jobs WHERE job_category='Grocery';";
  $data=mysqli_query($conn,$sql);
  $total= mysqli_num_rows($data);
  ?>
  <link rel="stylesheet" href="../View/CSS/style.css">
  <header class="pth">
    Item inventory <br>
  </header>
  <div class="tl1 tl2">
  <table>
    <tr>
    <th>Name</th>
      <th>Payment</th>
      <th>Location</th>
      <th>Time</th>
      <th>Category</th>
      <th></th>
    </tr>
    <?php
    $procuct=array();

    while($result=mysqli_fetch_assoc($data)){
      $I_id = $result['job_name'];
      $I_name = $result['job_payment'];
      $I_quantity = $result['job_location'];
      $I_Price = $result['delivery_time'];
      $I_size = $result['job_category'];
      echo "<form action='../Controller/addtocart.inc.php' method='POST'><tr>
      <td><input type='hidden' name='job_name' value=$I_id>".$result['job_name']."</td>
      <td><input type='hidden' name='job_payment' value='$I_name'>".$result['job_payment']."</td>
      <td><input type='hidden' name='job_location' value='$I_quantity'>".$result['job_location']."</td>
      <td><input type='hidden' name='delivery_time' value=$I_Price>".$result['delivery_time']."</td>

      <td><input type='hidden' name='job_category' value=$I_size>".$result['job_category']."</td>
      <td><input type='submit' name='addcart' value='add to cart'></td>
      </tr></form>";
    }
?>
</table></div>
