<?php 
	$SERVER = "localhost:3306";
	$USERNAME = "root";
	$PASSWORD = "admin12345";
	$DBNAME = "thuexe";
	$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
	$soluong = (int)$_GET['soluong'];
	$sql = "select xe.MAXE,xe.TENXE,count(xe.MAXE) from xe,cthd where xe.MAXE = cthd.MAXE group by xe.MAXE,xe.TENXE order by count(cthd.MAXE)";
	$result = mysqli_query($conn,$sql);
	$i = 0;
	echo "<table>
		<tr>
			<th>Tên xe</th>
			<th>Số lần thuê</th>
		</tr>
	";
	while($row = mysqli_fetch_row($result)){
		echo "<tr>
			<td>$row[1]</td>
			<td>$row[2]</td>
		</tr>";
	}
	echo "</table>";
?>