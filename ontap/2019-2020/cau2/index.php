<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="insert.php" method="GET">
	<table>
		<tr>
			<td>Mã hợp đồng</td>
			<td><input type="text" name="mahd"></td>
		</tr>
		<tr>
			<td>Tên hợp đồng</td>
			<td><input type="text" name="tenhd"></td>
		</tr>
		<tr>
			<td>Tên khách hàng</td>
			<td>
				<select name="kh">
				<?php 
					$SERVER = "localhost:3306";
				    $USERNAME = "root";
				    $PASSWORD = "admin12345";
				    $DBNAME = "thuexe";
				    $conn= mysqli_connect($SERVER, $USERNAME, $PASSWORD,$DBNAME);
				   	$sql = "select * from khachhang";
				   	$r = mysqli_query($conn,$sql);
				   	while($row = mysqli_fetch_row($r)){
				   		echo "<option value=$row[0]>$row[1]</option>";
				   	}
				?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Tên xe
			</td>
			<td>
				<select name="xe[]" multiple>
					<?php 
					$SERVER = "localhost:3306";
				    $USERNAME = "root";
				    $PASSWORD = "admin12345";
				    $DBNAME = "thuexe";
				    $conn= mysqli_connect($SERVER, $USERNAME, $PASSWORD,$DBNAME);
				   	$sql = "select * from xe";
				   	$r = mysqli_query($conn,$sql);
				   	while($row = mysqli_fetch_row($r)){
				   		echo "<option value=$row[0]>$row[1]</option>";
				   	}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<td>
				Số tiền
			</td>
			<td><input type="text" name="tien"></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="them" value="Thêm">
			</td>
		</tr>
	</table>
</form>
</body>
</html>