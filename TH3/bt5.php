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
		<td>Chiều cao</td>
		<td><input type="text" name="c"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="submit" value="Tính"></td>
	</tr>
	<tr>
		<td colspan="2">
		<?php 
			class HCN{
				private $d,$r;
				public function __construct($d,$r){
					$this->d = $d;
					$this->r = $r;
				}
				public function chuvi(){
					return ($this->d + $this->r)*2;
				}
				public function dientich(){
					return $this->d*$this->r;
				}
			}
			class HLP extends HCN{
				private $c;
				public function __construct($d,$r,$c){
					$this->c = $c;
					parent::__construct($d,$r);
				}
				public function DienTich(){
 					return parent::DienTich()*2 + $this->c*parent::ChuVi();
 				}
 				public function TheTich(){
 					return parent::DienTich() * $this->c;
 				}
			
			}
			if(isset($_POST['submit']) && $_POST['submit'] == 'Tính'){
				$d = (float)$_POST['cd'];
				$r = (float)$_POST['cr'];
				$c = (float)$_POST['c'];
				$hlp = new HLP($d,$r,$c);
				$dt = $hlp->DienTich();
				echo "Diện tích ".$dt;
			}
			
		?>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<?php 
			if(isset($_POST['submit']) && $_POST['submit'] == 'Tính'){
				$d = (float)$_POST['cd'];
				$r = (float)$_POST['cr'];
				$c = (float)$_POST['c'];
				$hlp = new HLP($d,$r,$c);
				$tt = $hlp->TheTich();
				echo "Thể tích ".$tt;
			}
		?>
		</td>
	</tr>
</table>
</form>
</body>
</html>
