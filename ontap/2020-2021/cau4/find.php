<?php 
    $SERVER = "localhost:3306";
    $USERNAME = "root";
    $PASSWORD = "admin12345";
    $DBNAME = "baoduong";
    $conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
    $soxe = $_GET['soxe'];
    $ngaynhan = $_GET['ngaynhan'];
    // lay thong tin bao duong
    $sql = "select * from BAODUONG where SOXE = '$soxe' and NGAYNHAN = '$ngaynhan'";
    $result = mysqli_query($conn,$sql);
    while($row = mysqli_fetch_row($result)){
    // lay chi tiet bao duong
    $s = "select * from CT_BD where MABD = '$row[0]'";
    $r = mysqli_query($conn,$s);
    echo "<table>";
    echo "<tr>
        <td>Tên công việc</td>
        <td>Đơn giá</td>
        <td>Chức năng</td>
    </tr>";
    while($row0 = mysqli_fetch_row($r)){
        $sql1 = "select * from CONGVIEC where MACV = '$row0[1]'";
        $result1 = mysqli_query($conn,$sql1);
       
        while($row1 = mysqli_fetch_row($result1)){
            echo "<tr>";
            echo "<td>$row1[1]</td>";
            echo "<td>$row1[2]</td>";
            echo "<td><a href='delete.php?macv=$row1[0]'><button>Xóa</button></a>";
            echo "</tr>";
            }
        }
    }
    echo "</table>";
?>