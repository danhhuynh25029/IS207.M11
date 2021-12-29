<?php 
	$SERVER = "localhost:3306";
	$USERNAME = "root";
	$PASSWORD = "admin12345";
	$DBNAME = "baoduong";
	$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
	if(isset($_GET['them']) && $_GET['them'] == 'Thêm'){
		$makh = $_GET['makh'];
		$ten = $_GET['ten'];
		$diachi = $_GET['diachi'];
		$dt = $_GET['dt'];
		$sql = "insert into KHACHHANG values($makh,'$ten','$diachi',$dt)";
		echo $sql;
		$r = mysqli_query($conn,$sql);
	}
?>