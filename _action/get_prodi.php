<?php
    require_once '../_partials/config.php';

    session_start();
    if ($_SESSION['status']!="login_rusunawa"){
        header("location: ../login?pesan=belum_login");
    }
    
    if (isset($_POST['id_fakultas'])){
        echo "<option></option>";
    
        $stmt = $conn->prepare("SELECT * FROM prodi WHERE id_fakultas=? ORDER BY nama_prodi ASC");
        $stmt->bind_param("i", $_POST['id_fakultas']);
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()){
            echo "<option value='".$row['id_prodi']."'>".$row['nama_prodi']."</option>";
        }
        $stmt->close();
    }
?>