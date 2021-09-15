<?php
  include_once '../Model/dbh.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <link rel="stylesheet" href="../View/CSS/style.css">
  <body>
    <div class="formcontent">
    <form  action="deleteitem.inc.php" method="post">
      Delete Job data :<input type="text" name="job_name" placeholder="job_name">
      <div  class="c1"><button type ="submit" name="submit">Submit</button></div>
    </form></div>
  </body>
</html>
