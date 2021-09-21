<?php
  include_once '../Model/dbh.inc.php';
  $job_name = $_POST['job_name'];
  $job_payment = $_POST['job_payment'];
  $job_location = $_POST['job_location'];
  $delivery_time = $_POST['delivery_time'];
  $job_category = $_POST['job_category'];
  $sql = "Insert into cart(job_name,job_payment,job_location,delivery_time,
  job_category) values ('$job_name','$job_payment',
  '$job_location','$delivery_time','$job_category');";
  mysqli_query($conn,$sql);
  header("Location: ../Model/displaycart.php?signupplayer=success");
?>
