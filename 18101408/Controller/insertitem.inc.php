<?php


  include_once '../Model/dbh.inc.php';
  $job_name = $_POST['job_name'];
  $job_payment = $_POST['job_payment'];
  $job_location = $_POST['job_location'];
  $delivery_time = $_POST['delivery_time'];
  $sql = "Insert into jobs(job_name,job_payment,job_location,delivery_time) values ('$job_name','$job_payment',
  '$job_location','$delivery_time');";
  mysqli_query($conn,$sql);
  header("Location: ../Model/iteminput.php?input=success");


?>
