<?php 
    $SERVER = "localhost:3306";
    $USERNAME = "root";
    $PASSWORD = "admin12345";
    $DBNAME = "baoduong";
    $conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
    if(isset($_GET["them"])){
        $soxe = $_GET['soxe'];
        $sokm = $_GET['sokm'];
        $mabd = $_GET['mabd'];
        $noidung = $_GET['noidung'];
        $ngaynhan = date("d/m/Y",time());
        $sql = "insert into BAODUONG values('$mabd','$ngaynhan',null,$sokm,'$noidung','$soxe',null);";
        $r = mysqli_query($conn,$sql);
    }
?>