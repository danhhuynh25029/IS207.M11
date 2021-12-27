<?php 
	$SERVER = "localhost:3306";
	$USERNAME = "root";
	$PASSWORD = "admin12345";
	$DBNAME = "thuexe";
	$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
	$soluong = (int)$_GET['soluong'];
	$sql = "select * from xe";
	$result = mysqli_query($conn,$sql);
	$i = 0;
	echo "<table>
		<tr>
			<th>Tên xe</th>
			<th>Số lần thuê</th>
		</tr>
	";
	while($row = mysqli_fetch_row($result)){
		if($i >= $soluong){
			break;
		}
		$s = "select * from cthd where MAXE = '$row[0]'";
		$r = mysqli_query($conn,$s);
		$n = mysqli_num_rows($r);
		echo "<tr>
			<td>$row[1]</td>
			<td>$n</td>
		</tr>";
		$i += 1;
	}
	echo "</table>";
?>