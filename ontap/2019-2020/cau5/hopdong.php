<?php 
	$SERVER = "localhost:3306";
	$USERNAME = "root";
	$PASSWORD = "admin12345";
	$DBNAME = "thuexe";
	$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
	$kh = $_GET['kh'];
	$sql = "select * from hopdong where MAKH = '$kh'";
	$r = mysqli_query($conn,$sql);
	echo "<option selected>Không chọn</option>";
	while($row = mysqli_fetch_row($r)){
		echo "<option value=$row[0]>$row[0]</option>";
	}
?>