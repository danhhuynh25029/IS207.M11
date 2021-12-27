<?php 
	$SERVER = "localhost:3306";
    $USERNAME = "root";
    $PASSWORD = "admin12345";
    $DBNAME = "thuexe";
    $conn= mysqli_connect($SERVER, $USERNAME, $PASSWORD,$DBNAME);
    if(isset($_GET['them'])){
    	$makh = $_GET['makh'];
    	$tenkh = $_GET['tenkh'];
    	$dt = $_GET['dt'];
    	$str = "insert into khachhang values('$makh','$tenkh','$dt');";
    	
        $r = mysqli_query($conn,$str);
    }
?>