<?php
session_start();
if(empty($_SESSION['usermane'])){
    echo "<script>alert('"."คุณยังไม่เข้าสู่ระบบ!!!"."')</script>";
    echo "<script>location.replace('../log-in/login.php');</script>";
}
if(isset($_COOKIE[['cookie_user']])){
    echo "<script>location.replace('../log-in/login_db.php');</script>";
} 
?>