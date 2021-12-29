<?php 
	$SERVER = "localhost:3306";
	$USERNAME = "root";
	$PASSWORD = "admin12345";
	$DBNAME = "baoduong";
	$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
	if(isset($_GET['them'])){
		$kh = $_GET['kh'];
		$soxe = $_GET['soxe'];
		$hangxe = $_GET['hangxe'];
		$namsx = $_GET['namsx'];
		$sql = "insert into XE values('$soxe','$hangxe','$namsx',$kh)";
		echo $sql;
		$r = mysqli_query($conn,$sql);
	}
?>