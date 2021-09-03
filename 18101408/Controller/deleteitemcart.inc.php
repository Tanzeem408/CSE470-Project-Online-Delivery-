<?php
  include_once '../Model/dbh.inc.php';
  $job_name=$_POST['job_name'];
  $sql ="Delete from cart where job_name= '$job_name';";
  $data = mysqli_query($conn,$sql);
  $result= mysqli_fetch_array($data);
  $pwdsv= $result[0];

  if($pwd==$pwdsv){
    echo "Delete Successful";
    header("Location: ../Model/displaycart.php?adminlogin=success");
  }
  else{
    echo "Incorrect Password";
  }
?>
