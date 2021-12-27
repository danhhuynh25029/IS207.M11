<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>
	</title>
</head>
<body>
<table>
	<tr>
		<th>Tên khách hàng</th>
		<th>Số lần thuê xe</th>
	</tr>
	<?php 
		$SERVER = "localhost:3306";
		$USERNAME = "root";
		$PASSWORD = "admin12345";
		$DBNAME = "thuexe";
		$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
		$sql = "select * from khachhang";
		$r = mysqli_query($conn,$sql);
		while($row = mysqli_fetch_row($r)){
			$s = "select * from hopdong where MAKH = '$row[0]'";
			$r1 = mysqli_query($conn,$s);
			/* lay ra so luon dong*/
			$n = mysqli_num_rows($r1);
			if($n >= 2){
				echo "<tr>
				<td>$row[1]</td>
				<td>$n</td>
				</tr>";
			}
		}
	
	?>
</table>
</body>
</html>