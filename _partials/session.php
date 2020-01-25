<?php
    require_once 'config.php';

    session_start();
    if($_SESSION['status']!="login_rusunawa"){
        header("location: login.php?pesan=belum_login");
    }
?>