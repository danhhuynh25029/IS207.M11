<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form method="GET" action="#">
	<table>
		<tr>
			<td colspan="2">
				<h3>Chương trình cộng trừ nhân chia</h3>
			</td>
		</tr>
		<tr>
			<td>
				<table>
					<tr>
						<td>Tử phân số 1</td>
						<td><input type="text" name="ts1"></td>
					</tr>
					<tr>
						<td>Mãu phân số 1</td>
						<td><input type="text" name="ms1"></td>
					</tr>
					<tr>
						<td>Tử phân số 2</td>
						<td><input type="text" name="ts2"></td>
					</tr>
					<tr>
						<td>Mãu phân số 2</td>
						<td><input type="text" name="ms2"></td>
					</tr>
				</table>
			</td>
			<td>
				<table>
					<tr>
					<td>
						<fieldset style="width: 200px;">
							<legend>Phép tính</legend>
							<input type="checkbox" name="Cong"><label>Cộng</label><br>
							<input type="checkbox" name="Tru"><label>Trừ</label><br>
							<input type="checkbox" name="Nhan"><label>Nhân</label><br>
							<input type="checkbox" name="Chia"><label>Chia</label>	
						</fieldset>
					</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="="></td>
			<td></td>
		</tr>
		<tr>
			<td>
				<?php 
					require "phanso.php";
					if (isset($_GET['submit']) && $_GET['submit'] == "="){
						$ts1 = (int)$_GET["ts1"];
						$ts2 = (int)$_GET['ts2'];
						$ms2 = (int)$_GET['ms2'];
						$ms1 = (int)$_GET['ms1'];
						$mt = new phanso($ts1,$ms1,$ts2,$ms2);
						if(isset($_GET['Cong'])){
							echo $mt->Cong();
						}
						else if(isset($_GET['Tru'])){
							echo $mt->Tru();
						}
						else if(isset($_GET['Nhan'])){
							echo $mt->Nhan();
						}
						else if(isset($_GET['Chia'])){
							echo $mt->Chia();
						}
					}
					?>
			</td>
			<td></td>
		</tr>
	</table>
</form>
</body>
</html>