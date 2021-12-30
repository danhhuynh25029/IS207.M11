<?php 
  $SERVER = "localhost:3306";
  $USERNAME  = "root";
  $PASSWORD = "admin12345";  
  $DBNAME = "baoduong";
  $conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
  $thanhtien = $_GET['thanhtien'];
  $mabd = $_GET['mabd'];
  $sql = "update BAODUONG set THANHTIEN = $thanhtien WHERE MABD='$mabd'";
  echo $sql;
  $r = mysqli_query($conn,$sql);
?>