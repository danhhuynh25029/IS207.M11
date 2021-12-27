<?php 
	$SERVER = "localhost:3306";
	$USERNAME = "root";
	$PASSWORD = "admin12345";
	$DBNAME = "thuexe";
	$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
	$hd = $_GET['hd'];
	$sql = "select * from cthd where MAHD ='$hd'";
	$result = mysqli_query($conn,$sql);
	echo "<table>";
	echo "<tr>
		<td>Tên Xe</td>
		<td>Chức năng</td>
	</tr>";
	while($row = mysqli_fetch_row($result)){
		$s = "select * from xe where MAXE='$row[1]'";
		$r = mysqli_query($conn,$s);
		while($ro = mysqli_fetch_row($r)){
			echo "<tr><td>$ro[1]</td>";
			echo "<td><button onclick=xoa($ro[0],$hd)>Delete</button></td></tr>";
		}
		
	}
	echo "</table>";
?>