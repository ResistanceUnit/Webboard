<?php
    session_start();
    if(!isset($_SESSION['id'])||$_SESSION['role']!='a'){
        header("Location: index.php");
    }
    echo"ลบกระทู้ หมายเลข $_GET[id]";
?>