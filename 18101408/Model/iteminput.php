<?php
include_once 'dbh.inc.php'
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Item Data</title>
  </head>
  <link rel="stylesheet" href="../View/CSS/style.css">
  <body>
    <div class="formcontent">
    <form action="../Controller/insertitem.inc.php" method="post">
     Job:<input type ="text" name="job_name" ><br>
     Payment:<input type ="text" name="job_payment" ><br>
     Location:<input type ="text" name="job_location" ><br>
     Time:<input type ="text" step="0.01" name="delivery_time" ><br>
      
      <div  class="c1"><button type ="submit" name="submit">Insert Job</button></div>
    </form></div>
  </body>
</html>
