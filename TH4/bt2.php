<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style type="text/css">
    table{
      border: 1px solid black;
    }
  </style>
</head>
<body>
<?php 
  $conn = mysqli_connect('localhost:3306','root','admin12345','th4');
  if(!$conn){
    die("khong the ket noi");
  }else{
    echo "ket noi thanh cong";
  }
  $sql = "select * from CHINHANH where MaCongTy ='CT01'";
  $result = mysqli_query($conn, $sql);
  echo "<table>";
  while($row = mysqli_fetch_row($result)){
    echo "<tr>";
    echo "<td>" . $row[0] . "</td>";
    echo "<td>" . $row[1] . "</td>";
    echo "</tr>";
  };
  echo "</table>";
  mysqli_close($conn);
?>
</body>
</html>