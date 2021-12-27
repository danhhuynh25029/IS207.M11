<?php 
	$SERVER = "localhost:3306";
	$USERNAME = "root";
	$PASSWORD = "admin12345";
	$DBNAME = "thuexe";
	$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
	if(isset($_GET["them"])){
		$xe = $_GET['xe'];
		$kh = $_GET['kh'];
		$mahd = $_GET['mahd'];
		$tenhd = $_GET['tenhd'];
		$tien = $_GET['tien'];

		$sql = "insert into hopdong(MAHD,TENHD,MAKH,TONGTIEN) value('$mahd','$tenhd','$kh',$tien);";
		$r = mysqli_query($conn,$sql);
		foreach($xe as $key => $value){
			$s = "insert into cthd values($mahd,$value);";
			$r1 = mysqli_query($conn,$s);
		}
	}
?>