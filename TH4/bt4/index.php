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
      <th>STT</th>
      <th>Ma chi nhanh</th>
      <th>Chuc nang</th>
    </tr>
    <?php 
        $SERVER = "localhost:3306";
        $USERNAME = "root";
        $PASSWORD = "admin12345";
        $DBNAME = "th4";
        $conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
        if(!$conn){
          die("Khong the ket noi");
        }else{
          $sql = "select * from NHANVIEN";
          $result = mysqli_query($conn,$sql);
          while($row = mysqli_fetch_row($result)){
            echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "</tr>";
          }
        }
    ?>
  </table>
</body>
</html>