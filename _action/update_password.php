<?php
    require_once '../_partials/config.php';

    session_start();
    if($_SESSION['status']!="login_rusunawa"){
        header("location: ../login?pesan=belum_login");
    }
    
    else {
        if (isset($_POST['old_password'])){
            $stmt = $conn->prepare("SELECT * FROM admin WHERE username=? AND password=?");
            $stmt->bind_param("ss", $_SESSION['username'], sha1($_POST['old_password']));
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_row();

            if($row == 0){
                header("location: ../ubah_password.php?pesan=password_salah");
            }

            else{
                if ($_POST['new_password'] == $_POST['confirm_new_password']){
                    $stmt = $conn->prepare("UPDATE admin set password=? WHERE username=? AND password=?");
                    $stmt->bind_param("sss", sha1($_POST['new_password']), $_SESSION['username'], sha1($_POST['old_password']));
                    $stmt->execute();
                    $stmt->close();
                    header("location: ../ubah_password.php?pesan=berhasil");
                }
                else{
                    header("location: ../ubah_password.php?pesan=konfirmasi_password_salah");
                }
            }

            $stmt->close();
        }
    }
?>