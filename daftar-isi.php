<?php
    session_start();
    
    if(!(isset($_SESSION['user']))) {
        header("location: login/form-login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<body>
    <h1>Selamat Datang</h1>
    <a href="dosen/read.php">Page Data Dosen</a><br>
    <a href="matakuliah/read.php">Page Matakuliah</a><br>
    <a href="login/logout.php">Logout</a>
</body>
</html>