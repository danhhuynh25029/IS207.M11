<htm>
<body>
	<form action="insert.php" method="GET">
		<table>
			<tr>
				<td>Họ tên khách hàng</td>
				<td>
					<select name="kh">
					<?php 
						$SERVER = "localhost:3306";
						$USERNAME = "root";
						$PASSWORD = "admin12345";
						$DBNAME = "baoduong";
						$conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
						$sql = "select * from KHACHHANG";
						$result = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_row($result)){
							echo "<option value=$row[0]>$row[1]</option>";
						}
					?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Số xe</td>
				<td><input type="text" name="soxe" placeholder="51H-XXX.XX"></td>
			</tr>
			<tr>
				<td>Hãng xe</td>
				<td>
					<select name="hangxe" multiple size="3">
						<option value="Toyota">Toyota</option>
						<option value="BMW">BMW</option>
						<option value="Audi">Audi</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Năm sản xuất</td>
				<td><input type="text" name="namsx" placeholder="2020"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name="them" value="Thêm"></td>
			</tr>
		</table>
	</form>
</body>
</htm>