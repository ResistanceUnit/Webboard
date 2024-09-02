<?php
    session_start();

    echo "<h1 style=text-align:center>Webboard KakKak</h1>";
    echo "<hr>";
    $login = $_POST['login'];
    $pwd = $_POST['pwd'];
    if($login=='admin'&&$pwd=='ad1234'){
        echo "<center>
            ยินดีต้อนรับคุณ ADMIN <br>
            <a href=index.php>กลับไปหน้าหลัก</a>
        </center>";
        $_SESSION['username']='admin';
        $_SESSION['role']='a';
        $_SESSION['id']=session_id();
    }
    elseif($login=='member'&&$pwd=='mem1234'){
        echo"<center>
            ยินดีต้อนรับคุณ MEMBER <br>
            <a href=index.php>กลับไปหน้าหลัก</a>
        </center>";
        $_SESSION['username']='member';
        $_SESSION['role']='m';
        $_SESSION['id']=session_id();
    }
    else{
        echo"<center>
            ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <br>
            <a href=index.php>กลับไปหน้าหลัก</a>
        </center>";
    }
?>
