<?php 
    $SERVER = "localhost:3306";
    $USERNAME = "root";
    $PASSWORD = "admin12345";
    $DBNAME = "baoduong";
    $conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
    $mabd = $_GET['mabd'];
    $macv = $_GET['macv'];
    $sql = "delete from CT_BD where MABD = '$mabd' and MACV = '$macv'";
    $r0  = mysqli_query($conn,$sql);
    $sql1 = "delete from CONGVIEC where MACV = '$macv'";
    $r1 = mysqli_query($conn,$sql1);

    $s = "select * from CT_BD where MABD = '$mabd'";
    $r = mysqli_query($conn,$s);
    $str = "<table>
    <tr>
    <td>Tên công việc</td>
    <td>Đơn giá</td>
    <td>Chức năng</td>
    </tr>
    ";
    $tien = 0;
    while($row0 = mysqli_fetch_row($r)){
        $sql1 = "select * from CONGVIEC where MACV = '$row0[1]'";
        $result1 = mysqli_query($conn,$sql1);
       
        while($row1 = mysqli_fetch_row($result1)){
                $str = $str."<tr>";
                $str = $str."<td>$row1[1]</td>";
                $str = $str."<td>$row1[2]</td>";
                $str = $str."<td><button onclick=xoa('$mabd','$row1[0]')>Xóa</button>";
                $str = $str."</tr>";
                $tien = $tien + (int)$row1[2];
            }
        }
    echo "Thành tiền<input type='text' name='thanhtien' value=$tien>";
    $str = $str."</table>";
    echo $str;
    echo "<a href='pay.php?mabd=$mabd&thanhtien=$tien' ><input type='button' value='Thanh toán'></a>";
?>