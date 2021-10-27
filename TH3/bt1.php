<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		table{
			margin: 0 auto;
			text-align: center;
		}
	</style>
</head>
<body>
<form action="#" method="POST">
<table>

	<tr>
		<td colspan="2"><h3>Chu vi và diện tích hình chữ nhật</h3></td>
	</tr>
	<tr>
		<td>Chiều dài</td>
		<td><input type="text" name="cd"></td>
	</tr>
	<tr>
		<td>Chiều rộng</td>
		<td><input type="text" name="cr"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit" value="Tính"></td>
	</tr>
	<tr>
		<td colspan="2">
		<?php 
			$cd = (double)$_POST['cd'];
			$cr = (double)$_POST['cr'];
			$cv = ($cd + $cr)*2; 
			if(isset($_POST['submit']) && $_POST['submit'] == 'Tính'){
				echo "Chu vi : ".$cv;
			}
		?>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<?php 
			$cd = (double)$_POST['cd'];
			$cr = (double)$_POST['cr'];
			$cv = ($cd * $cr); 
			if(isset($_POST['submit']) && $_POST['submit'] == 'Tính'){
				echo "Diện tích : ".$cv;
			}
		?>
		</td>
	</tr>
</table>
</form>
</body>
</html>
