<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		table{
			/*margin: 0 auto;*/
			background-color: orange;
		}
		input[type=submit]{
			border-radius: 5px 5px;
		}
	</style>
</head>
<body>
<form method="GET" action="">
	<table>
		<tr>
			<td>Ma nhan vien</td>
			<td><input type="text" name="ms"></td>			
		</tr>
		<tr>
			<td>Ten nhan vien</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>So ngay lam viec</td>
			<td><input type="text" name="day"></td>
		</tr>
		<tr>
			<td>Luong ngay </td>
			<td><input type="text" name="luong"></td>
		</tr>
		<tr>
			<td>Nhan vien quan ly</td>
			<td><input type="checkbox" name="ql"></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="submit" value="Tính lương">
			</td>
		</tr>
	</table>
</form>
<?php
	include "nhanvien.php";
	if(isset($_GET['ql'])){
		$ms = $_GET['ms'];
		$name = $_GET['name'];
		$luong = (float)$_GET['luong'];
		$day = (float)$_GET['day'];
		$nv = new nhanvienql($ms,$name,$day,$luong);
		echo $nv->TinhLuong();
		$nv->inNhanVien();
	}else{
		$$ms = $_GET['ms'];
		$name = $_GET['name'];
		$luong = (int)$_GET['luong'];
		$day = (int)$_GET['day'];
		$nv = new nhanvien($ms,$name,$day,$luong);
		echo $nv->TinhLuong();
		$nv->inNhanVien();
	}
?>
</body>
</html>