<?php
    require_once '../_partials/config.php';

    session_start();
    if ($_SESSION['status']!="login_rusunawa"){
        header("location: ../login?pesan=belum_login");
    }

    else {
        if (isset($_POST['lantai'])){
            $stmt = $conn->prepare("SELECT * FROM harga WHERE lantai=?");
            $stmt->bind_param("s", $_POST['lantai']);
            $stmt->execute();
            $result = $stmt->get_result();
            $row = $result->fetch_array();
            echo json_encode($row);
            $stmt->close();
        }
    }
?>