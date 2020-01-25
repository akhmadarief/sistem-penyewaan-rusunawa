<?php
    require_once '../_partials/config.php';

    session_start();
    if($_SESSION['status']!="login_rusunawa"){
        header("location: ../login?pesan=belum_login");
    }
    
    else {
        $output = "";

        $harga = filter_var($_POST['harga'], FILTER_SANITIZE_NUMBER_INT);
        $stmt = $conn->prepare("UPDATE harga SET harga=? WHERE gedung=? AND lantai=?");
        $stmt->bind_param("iss", $harga, $_POST['gedung'], $_POST['lantai']);

        if ($stmt->execute()){
            $no = 1;
            $harga = $conn->query("SELECT * FROM harga");
            $output .= "
            <label class='text-success'>Harga Berhasil Diperbarui</label>
            <table class='table table-bordered' width='100%' cellspacing='0'>
                <thead>
                    <tr>
                        <th class='text-center'>No</th>
                        <th class='text-center'>Gedung</th>
                        <th class='text-center'>Lantai</th>
                        <th class='text-center'>Harga per Bulan</th>
                        <th class='text-center'>Harga per Tahun</th>
                        <th class='text-center'>Aksi</th>
                    </tr>
                </thead>
                <tbody>
            ";
            while ($row = $harga->fetch_assoc()) {
                $output .= "
                    <tr>
                        <td class='text-center'>".$no++."</td>
                        <td class='text-center'>Gedung ".$row['gedung']."</td>
                        <td class='text-center'>Lantai ".$row['lantai']."</td>
                        <td class='text-center'>Rp. ".number_format($row['harga'], 0, ',', '.')."</td>
                        <td class='text-center'>Rp. ".number_format($row['harga']*12, 0, ',', '.')."</td>
                        <td class='text-center'><input type='button' class='btn btn-sm btn-info edit_data' value='Edit' name='edit' id='".$row['lantai']."'/></td>
                    </tr>
                ";
            }
            $output .= "
                </tbody>
            </table>
            ";
        }
        else {
            $no = 1;
            $harga = $conn->query("SELECT * FROM harga");
            $output .= "
            <label class='text-warning'>Harga Gagal Diperbarui: $stmt->error</label>
            <table class='table table-bordered' width='100%' cellspacing='0'>
                <thead>
                    <tr>
                        <th class='text-center'>No</th>
                        <th class='text-center'>Gedung</th>
                        <th class='text-center'>Lantai</th>
                        <th class='text-center'>Harga per Bulan</th>
                        <th class='text-center'>Harga per Tahun</th>
                        <th class='text-center'>Aksi</th>
                    </tr>
                </thead>
                <tbody>
            ";
            while ($row = $harga->fetch_assoc()) {
                $output .= "
                    <tr>
                        <td class='text-center'>".$no++."</td>
                        <td class='text-center'>Gedung ".$row['gedung']."</td>
                        <td class='text-center'>Lantai ".$row['lantai']."</td>
                        <td class='text-center'>Rp. ".number_format($row['harga'], 0, ',', '.')."</td>
                        <td class='text-center'>Rp. ".number_format($row['harga']*12, 0, ',', '.')."</td>
                        <td class='text-center'><input type='button' class='btn btn-sm btn-info edit_data' value='Edit' name='edit' id='".$row['lantai']."'/></td>
                    </tr>
                ";
            }
            $output .= "
                </tbody>
            </table>
            ";
        }
        echo $output;
        $stmt->close();
    }
?>