<html>
    <body>
<h1>Thanh toán</h1>
<form>
    <table>
        <tr>
            <td>Số xe</td>
            <td><select onchange="show()" id="soxe">
                    <option selected>Mời chọn</option>
                    <?php 
                        $SERVER = "localhost:3306";
                        $USERNAME = "root";
                        $PASSWORD = "admin12345";
                        $DBNAME = "baoduong";
                        $conn = mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
                        $sql = "select * from BAODUONG";
                        $r = mysqli_query($conn,$sql);
                        while($row = mysqli_fetch_row($r)){
                            echo "<option value=$row[5]>$row[5]</option>";
                        }
                    ?>
                </select>
            </td>
            <td></td>
            <td>
                Ngày nhận xe
                    </td>
                <td> <input type="text" id="ngaynhan" name="ngaynhan">
            </td>
        <tr>
        <tr>
            <td></td>
        <td></td>
        <td></td>
        <td>Thành tiền </td>
        <td><input type="text" name="thanhtien"></td>
    </tr>
    <tr>
        <td colspan=5><input type="submit" value="Thanh toán"></td>
</tr>
</table>
</form>
<div id="table">
    
</div>
</body>
<script>
    function show(){
        var ajax = new XMLHttpRequest();
        var ngaynhan = document.getElementById("ngaynhan").value;
        var soxe = document.getElementById("soxe").value;
        console.log()
        ajax.onreadystatechange = function(){
            if(this.status == 200 && this.readyState == 4){
                document.getElementById("table").innerHTML = this.responseText;
            }
        }
        ajax.open("GET",`find.php?soxe=${soxe}&ngaynhan=${ngaynhan}`,true);
        ajax.send();
    }
</script>
</html>