<?php 
	$SERVER = "localhost:3306";
	$USERNAME = "root";
	$PASSWORD = "admin12345";
	$DBNAME = "baoduong";
	$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
		$soxe = $_GET['soxe'];
		$sql = "select * from XE where SOXE = '$soxe'";
		$r = mysqli_query($conn,$sql);

		while($row = mysqli_fetch_row($r)){
			$sql1 = "select * from KHACHHANG where MAKH = $row[3]";
			$r1 = mysqli_query($conn,$sql1);
			while($row1 = mysqli_fetch_row($r1)){
				echo $row1[1];
			}
		}
?>