<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align:center">Webboard KakKak</h1>
    <hr>
    <form action="verify.php" method="post">
        <table style="border:2px solid black; width:40%;" align="center">
            <tr><td style="background:#6cd2fe" colspan="2">เข้าสู่ระบบ</td></tr>
            <tr><td>Login</td><td><input type="text" name="login"></td></tr>
            <tr><td>Password</td><td><input type="password" name="pwd"></td></tr>
            <tr><td colspan="2" align="center"><input type="submit" value="Login"></td></tr>
        </table>
    </form>
    <br>
    <center>ถ้ายังไม่ได้เป็นสมาชิก <a href="register.php">กรุณาสมัครสมาชิก</a></center>
</body>
</html>