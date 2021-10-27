<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		table{
			border: 1px solid black;
		}
		td{
			border: 1px solid black;
		}
	</style>
</head>
<body>

<?php
	$score = array("Cơ sở dữ liệu"=>7,"Phát triển ứng dụng web"=>8,"Lập trình Java"=>7.5);
	if(isset($_GET['submit']) && $_GET['submit'] == "Đăng nhập"){
		if($_GET['username'] == "Mai Tuấn" && $_GET['password'] == 12345){
			$username = $_GET['username'];
			echo "
			<h3>Bảng điểm</h3>";
			echo "<p>Tên : $username</p>";
			echo "<table>";
			foreach($score as $key => $value){
				echo "<tr>
				<td>$key</td>
				<td>$value</td>
				</tr>";
			}
			echo "</table>";
		}
	}
?>
<a href="thongtinsinhvien.php">Xem thông tin sinh viên</a>
</body>
</html>