<?php 
    $SERVER = "localhost:3306";
    $USERNAME = "root";
    $PASSWORD = "admin12345";
    $DBNAME = "baoduong";
    $conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
    echo "<table>";
    echo "<tr>
        <th>Họ tên khách hàng</th>
        <th>Số xe</th>
        <th>Số lần bảo dưỡng</th>
    </tr>";
    $solan = $_GET['solan'];
    $sql = "select * from KHACHHANG";
    $result = mysqli_query($conn,$sql);
    while($row=mysqli_fetch_row($result)){
        $sql1 = "select * from XE where MAKH = '$row[0]'";
        $result1 = mysqli_query($conn,$sql1);
        while($row1 = mysqli_fetch_row($result1)){
            $sql2 = "select * from BAODUONG where SOXE ='$row1[0]'";
            $r = mysqli_query($conn,$sql2);
            $c = mysqli_num_rows($r);
            if($c >= $solan){
                echo "<td>$row[1]</td>";
                echo "<td>$row1[1]</td>";
                echo "<td>$c</td>";
            }
        }
       
    }
?>