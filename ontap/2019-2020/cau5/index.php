<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<table>
	<tr>
		<td>Tên khách hàng</td>
		<td>
			<select id="kh" name="kh" onchange="hopdong()">
				<option value="0">Không chọn</option>
			<?php 
				$SERVER = "localhost:3306";
				$USERNAME = "root";
				$PASSWORD = "admin12345";
				$DBNAME = "thuexe";
				$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
				$sql = "select * from khachhang;";
				$result = mysqli_query($conn,$sql);
				while($row=mysqli_fetch_row($result)){
					echo "<option value=$row[0]>$row[1]</option>";
				}
			?>
			</select>
		</td>
	</tr>
	<tr>
		<td>Mã hợp đồng</td>
		<td>
			<select name="hd" id="hd" onchange="xe()"> 
				
			</select>
		</td>
	</tr>
</table>
<div id="xe">
	
</div>
<script type="text/javascript">
	function hopdong() {
		var ajax = new XMLHttpRequest();
		var kh = document.getElementById("kh").value;
		ajax.onreadystatechange = function(){
			if(this.status == 200 && this.readyState == 4){
				document.getElementById("hd").innerHTML = this.responseText;
			}
		}
		ajax.open("GET",`hopdong.php?kh=${kh}`,true);
		ajax.send();
	}
	function xe() {
		var ajax = new XMLHttpRequest();
		var hd = document.getElementById("hd").value;
		ajax.onreadystatechange = function(){
			if(this.status == 200 && this.readyState == 4){
				document.getElementById("xe").innerHTML = this.responseText;
			}
		}
		ajax.open("GET",`xe.php?hd=${hd}`,true);
		ajax.send();
	}
	function xoa(id,hd){
		var ajax = new XMLHttpRequest();
		ajax.onreadystatechange = function(){
			if(this.status == 200 && this.readyState == 4){
				document.getElementById("xe").innerHTML = this.responseText;
			}
		}
		ajax.open("GET",`xoa.php?id=${id}&hd=${hd}`,true);
		ajax.send();
	}
</script>
</body>
</html>