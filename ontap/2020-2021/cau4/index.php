<html>
    <body>
<h1>Thanh toán</h1>
<form>
    <table>
        <tr>
            <td>Số xe</td>
            <td><select onchange="show()" id="soxe">
                </select>
            </td>
            <td></td>
            <td>
                Ngày nhận xe
                    </td>
                <td> 
                    <input type="text" id="ngaynhan" name="ngaynhan" onkeyup="showsoxe()">
            </td>
        <tr>
        <tr>
            <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    <tr>
    <td colspan=5>
    <div id="table">
    
    </div>
    </td>
</tr>
</table>
</form>

</body>
<script>
    function showsoxe(){
        var ajax = new XMLHttpRequest();
        var ngaynhan = document.getElementById("ngaynhan").value;
        ajax.onreadystatechange = function(){
            if(this.status == 200 && this.readyState == 4){
                document.getElementById("soxe").innerHTML = this.responseText;
            }
        }
        ajax.open("GET",`soxe.php?ngaynhan=${ngaynhan}`,true);
        ajax.send();
    }
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
        ajax.open("GET",`find.php?mabd=${soxe}`,true);
        ajax.send();
    }
    function xoa(mabd,macv){
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange = function(){
            if(this.status == 200 && this.readyState == 4){
                document.getElementById("table").innerHTML = this.responseText;
            }else{
                console.log("loi");
            }
        }
        console.log(`delete.php?mabd=${mabd}&macv=${macv}`);
        ajax.open("GET",`delete.php?mabd=${mabd}&macv=${macv}`,true);
        ajax.send();
    }
</script>
</html>