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
<form method="GET" action="#">
	<table>
		<tr>
			<td>Hệ số a</td>
			<td><input type="text" name="a"></td>
		</tr>
		<tr>
			<td>Hệ số b</td>
			<td><input type="text" name="b"></td>
		</tr>
		<tr>
			<td>Hệ số c</td>
			<td><input type="text" name="c"></td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="submit" value="Giải"></td>
		</tr>
		<tr>
			<td colspan="2">
				<?php 
					if (isset($_GET['submit']) && $_GET['submit'] == "Giải"){
						$a = $_GET['a'];
						$b = $_GET['b'];
						$c = $_GET['c'];
						$delta = $b*$b - 4*$a*$c;
						if ($delta > 0) {
					        $x1 = (- $b + sqrt ( $delta )) / (2 * $a);
					        $x2 = (- $b - sqrt ( $delta )) / (2 * $a);
					        echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
					    } else if ($delta == 0) {
					        $x1 = (- $b / (2 * $a));
					        echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
					    } else {
					       	echo ("Phương trình vô nghiệm!");
					   	}
					}
				?>
			</td>
		</tr>
	</table>
</form>
</body>
</html>