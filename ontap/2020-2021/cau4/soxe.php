<?php 
    $SERVER = "localhost:3306";
    $USERNAME = "root";
    $PASSWORD = "admin12345";
    $DBNAME = "baoduong";
    $conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
    $ngaynhan = $_GET['ngaynhan'];
    $sql = "select * from BAODUONG where NGAYNHAN='$ngaynhan'";
    $r  = mysqli_query($conn,$sql);
    echo "<option selected>Mời chọn</option>";
    while($row = mysqli_fetch_row($r)){
        echo "<option value=$row[0]>$row[5]</option>";
    }
?>