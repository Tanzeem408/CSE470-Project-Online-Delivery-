<?php
  include_once 'dbh.inc.php';
  $sql="Select * from cart";
  $data=mysqli_query($conn,$sql);
  $total= mysqli_num_rows($data);
  ?>
  <link rel="stylesheet" href="../View/CSS/style.css">
  <header class="pth">
    Cart <br>
  </header>
  <div class="tl1 carttable">
    <!-- <h2>Total Price</h2> -->
    <a href="../Controller/index.php"><button class="b" type="button" name="button">Continue to Jobs</button>
  <table>
    <tr>
      <th>Name</th>
      <th>Payment</th>
      <th>Location</th>
      <th>Time</th>
      <th>Category</th>

    </tr>
    <?php
    $totalprice=0;
    while($result=mysqli_fetch_assoc($data)){
      $I_id = $result['job_name'];
      echo "<form action='../Controller/deleteitemcart.inc.php' method='POST'><tr>
      <td><input type='hidden' name='job_name' value=$I_id>".$result['job_name']."</td>
      <td>".$result['job_payment']."</td>
      <td>".$result['job_location']."</td>
      <td>".$result['delivery_time']."</td>
      <td>".$result['job_category']."</td>
      <td><input type='submit' name='delcart' value='Delete'></td>
      </tr>
      </form>";
    //  $totalprice=$totalprice+($result['Item_Price']*$result['Item_quantity']);
    }
  //  echo "<div class='sum'>".'Total Price: '.$totalprice."<div>";
?>
</table></div>
