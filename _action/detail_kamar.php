<?php
    require_once '../_partials/config.php';

    session_start();
    if ($_SESSION['status']!="login_rusunawa") {
        header("location: ../login?pesan=belum_login");
    }
    else {
        if (isset($_GET['penghuni'])) {
            if ($_GET['penghuni'] == '1') {
                if (isset($_POST['no_kamar'])) {
                    $status = "Penghuni 1";
                    $stmt = $conn->prepare("SELECT * FROM penghuni INNER JOIN prodi ON prodi.id_prodi=penghuni.id_prodi WHERE no_kamar=? AND status=?");
                    $stmt->bind_param("ss", $_POST['no_kamar'], $status);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $row = $result->fetch_assoc();
                    echo json_encode($row);
                    $stmt->close();
                }
            }
            if ($_GET['penghuni'] == '2') {
                if (isset($_POST['no_kamar'])) {
                    $status = "Penghuni 2";
                    $stmt = $conn->prepare("SELECT * FROM penghuni INNER JOIN prodi ON prodi.id_prodi=penghuni.id_prodi WHERE no_kamar=? AND status=?");
                    $stmt->bind_param("ss", $_POST['no_kamar'], $status);
                    $stmt->execute();
                    $result = $stmt->get_result();
                    $row = $result->fetch_assoc();
                    echo json_encode($row);
                    $stmt->close();
                }
            }
        }
    }
?>