<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>
<body>
<form method="GET">
  <table>
    <tr>
      <td colspan="2">Thêm công ty</td>
    </tr>
    <tr>
      <td>Mã công ty</td>
      <td><input type="text" name="mact"></td>
    </tr>
    <tr>
      <td>Tên công ty</td>
      <td><input type="text" name="tenct"></td>
    </tr>
    <tr>
      <td>Địa chỉ</td>
      <td><input type="text" name="diact"></td>
    </tr>
    <tr>
      <td colspan="2">
        <input type="submit" name="them" value="Thêm">
        <input type="reset" name="xoa" value="Reset">
      </td>
    </tr>
  </table>
</form>
<?php
    $SERVER = "localhost:3306";
    $USERNAME = "root";
    $PASSWORD = "admin12345";
    $DBNAME = "th4";
    $conn= mysqli_connect($SERVER, $USERNAME, $PASSWORD,$DBNAME);
    if(!$conn){
      die("Khong the ket noi duoc");
    }
    if(isset($_GET['them'])){
      $mact = $_GET['mact'];
      $tenct = $_GET['tenct'];
      $diact = $_GET['diact'];
      $str = "insert into CONGTY values ('$mact','$tenct','$diact')";
      mysqli_query($conn, $str);
      mysqli_close($conn);
    }
    // echo "ke noi thanh cong";
    
// echo "1";
 ?>
</body>
</html>