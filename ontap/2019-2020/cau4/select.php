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
	$arr = array();
	while($row=mysqli_fetch_row($result)){
		$s = "select * from cthd where MAXE = '$row[0]'";
		$r = mysqli_query($conn,$s);
		$n = mysqli_num_rows($r);
		$arr[$row[1]] = $n;
	}
	$arr = rsort($arr);
	$i = 0;
	foreach($arr as $key => $value){
		if(i > soluong){
			break;
		}
		echo "<tr>
			<td>$key</td>
			<td>$value</td>
		</tr>";
		$i += 1;
	}
	echo "</table>";
?>