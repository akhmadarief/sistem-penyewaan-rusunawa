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
        $stmt = $conn->prepare("UPDATE penghuni SET no_kamar=?, isi_kamar=?, nama=?, nim=?, id_fakultas=?, id_prodi=?, tempat_lahir=?, tgl_lahir=?, agama=?, alamat=?, no=?, nama_ortu=?, pekerjaan_ortu=?, alamat_ortu=?, no_ortu=?, tahun_masuk=?, masa_huni=?, kategori=?, biaya=?, bayar=?, piutang=?, status=? WHERE id=?");
        $stmt->bind_param("sissiissssssssssisiiisi", $_POST['no_kamar'], $_POST['isi_kamar'], $_POST['nama'], $_POST['nim'], $_POST['id_fakultas'], $_POST['id_prodi'], $_POST['tempat_lahir'], $_POST['tgl_lahir'], $agama, $_POST['alamat'], $_POST['no'], $_POST['nama_ortu'], $_POST['pekerjaan_ortu'], $_POST['alamat_ortu'], $_POST['no_ortu'], $_POST['tahun_masuk'], $_POST['masa_huni'], $_POST['kategori'], $biaya, $bayar, $piutang, $_POST['status'], $_POST['id']);
        //$stmt->execute();

        if ($stmt->execute()){
            echo "New record updated successfully";
        }
        else {
            echo "Error: $stmt->error";
        }

        $stmt->close();
    }
?>