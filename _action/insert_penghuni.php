<?php
    require_once '../_partials/config.php';

    session_start();
    if($_SESSION['status']!="login_rusunawa"){
        header("location: ../login?pesan=belum_login");
    }

    else {
        if ($_POST['agama'] == 'other'){
            $agama = $_POST['agama_lainnya'];
        }
        else {
            $agama = $_POST['agama'];
        }
        $biaya = filter_var($_POST['biaya'], FILTER_SANITIZE_NUMBER_INT);
        $bayar = filter_var($_POST['bayar'], FILTER_SANITIZE_NUMBER_INT);
        $piutang = filter_var($_POST['piutang'], FILTER_SANITIZE_NUMBER_INT);
        $stmt = $conn->prepare("INSERT INTO penghuni SET no_kamar=?, isi_kamar=?, nama=?, nim=?, id_fakultas=?, id_prodi=?, tempat_lahir=?, tgl_lahir=?, agama=?, alamat=?, no=?, nama_ortu=?, pekerjaan_ortu=?, alamat_ortu=?, no_ortu=?, tahun_masuk=?, masa_huni=?, kategori=?, biaya=?, bayar=?, piutang=?, status=?");
        $stmt->bind_param("sissiissssssssssisiiis", $_POST['no_kamar'], $_POST['isi_kamar'], $_POST['nama'], $_POST['nim'], $_POST['id_fakultas'], $_POST['id_prodi'], $_POST['tempat_lahir'], $_POST['tgl_lahir'], $agama, $_POST['alamat'], $_POST['no'], $_POST['nama_ortu'], $_POST['pekerjaan_ortu'], $_POST['alamat_ortu'], $_POST['no_ortu'], $_POST['tahun_masuk'], $_POST['masa_huni'], $_POST['kategori'], $biaya, $bayar, $piutang, $_POST['status']);
        $stmt->execute();

        if ($_POST['isi_kamar'] == '1'){
            $status = "terisi2";
        }
        else {
            if ($_POST['status'] == 'Penghuni 1'){
                $status = "terisi1";
            }
            else {
                $status = "terisi2";
            }
        }

        $stmt2 = $conn->prepare("UPDATE kamar SET status=? WHERE no_kamar=?");
        $stmt2->bind_param("ss", $status, $_POST['no_kamar']);
        $stmt2->execute();

        if ($stmt->affected_rows == 1){
            echo "New record inserted successfully";
        }
        else {
            echo "Error: $stmt->error";
        }

        $stmt->close();
    }
?>