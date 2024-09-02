<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h1 style=text-align:center>Webboard KakKak</h1>";
        echo "<hr>";
        echo "<center>
            ต้องการดูกระทู้หมายเลข $_GET[id]<br>
            </center>";
        if($_GET['id']%2==0){
            echo"<center>
            เป็นกระทู้หมายเลขคู่<br>
            </center>";
        }
        else{
            echo"<center>
            เป็นกระทู้หมายเลขคี่<br>
            </center>";
        }
    ?>
    <table style="border:2px solid black; width:40%" align="center">
            <tr><td style=background:#6cd2fe>แสดงความคิดเห็น</td></tr>
            <tr><td align="center"><textarea name= id=></textarea></td></tr>
            <tr><td align="center"><input type=submit value=ส่งข้อความ></td></tr>
    </table>
    <br>
    <center><a href=index.php>กลับไปหน้าหลัก</a></center>
</body>
</html>
