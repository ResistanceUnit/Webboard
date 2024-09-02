<?php
    session_start();
    if(!isset($_SESSION['id'])){
        header("Location:index.php");
    }
    echo "ผู้ใช้ : $_SESSION[username]";
    echo "<table>
        <tr><td>หมวดหมู่ : </td><td>
            <select name= id=>
                <option value=>-- ทั้งหมด --</option>
                <option value=>เรื่องทั่วไป</option>
                <option value=>ห้องเรียน</option>
            </select></td></tr>
        <tr><td>หัวข้อ : </td><td><input type=text name= id=></td></tr>
        <tr><td>เนื้อหา : </td><td><textarea name= id=></textarea></td></tr>
        <tr><td></td><td><input type=submit value=บันทึกข้อความ></td></tr>
    </table>";
?>