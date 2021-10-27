<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form action="#" method="GET">
	<input type="text" name="name">
	<input type="submit" name="submit" value="Tìm">
</form>
<p>
	<?php
		$name = $_GET['name'];
		$arr = array("Tu"=>21,"Nam"=>30,"Hai"=>31);
		if (isset($_GET['submit']) && $_GET['submit'] == 'Tìm'){
			if(findName($arr,$name) == true){
				echo "Tìm thấy ".$name." ".$arr[$name]." tuổi";
			}else{
				echo "Không tìm thấy ".$name;
			}
		}
		function findName($arr,$name){
			foreach ($arr as $key => $value) {
				if($key == $name){
					return true;
				}
			}
			return false;
		}
	?>
</p>
</body>
</html>