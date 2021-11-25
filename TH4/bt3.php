<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style type="text/css">
    table,td{
      text-align: center;
      border: 1px solid black;
    }
  </style>
</head>
<body>
<form method="GET">
  <table>
    <tr>
      <td>Tên cần tìm</td>
      <td><input type="text" name="name"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="tim" value="Tìm"></td>
    </tr>
  </table>
</form>
<?php 
  $SERVER = "localhost:3306";
  $DBNAME = "th4";
  $PASSWORD = "admin12345";
  $USERNAME = "root";
  $conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
  if(isset($_GET['tim']) && $_GET['tim'] == "Tìm" ){
    if(!$conn){
      die("Khong the ket noi");
    }else{
      echo "Ket noi thanh cong";
      $ten = $_GET["name"];
      $sql = "SELECT * FROM NHANVIEN WHERE TenNhanVien='$ten'";
      $result = mysqli_query($conn,$sql);
      echo $sql;
      if(!$result){
        die("Cau lenh sai");
      }
      while($row = mysqli_fetch_row($result)){
        echo "Ma".$row[0];
        echo "Ten".$row[1];
      }
    }
  }
  mysqli_close($conn);
?>
</body>
</html>