<?php
    require_once '../_partials/config.php';

    session_start();
    if ($_SESSION['status']!="login_rusunawa"){
        header("location: ../login?pesan=belum_login");
    }

    else {
        if (isset($_POST['id_penghuni'])){
            $output = '';
            $stmt = $conn->prepare("SELECT * FROM penghuni INNER JOIN prodi ON penghuni.id_prodi=prodi.id_prodi INNER JOIN fakultas ON penghuni.id_fakultas=fakultas.id_fakultas WHERE id=?");
            $stmt->bind_param("i", $_POST['id_penghuni']);
            $stmt->execute();
            $result = $stmt->get_result();
            $output .= '
            <div class="table-responsive">
                <table class="table table-bordered">
            ';
            $row = $result->fetch_assoc();
            $output .= '
                    <tr>
                        <td width="30%"><label>No. Kamar</label></td>
                        <td width="70%">'.$row["no_kamar"].'</td>
                    </tr>
                    <tr>
                        <td width="30%"><label>Nama</label></td>
                        <td width="70%">'.$row["nama"].'</td>
                    </tr>
                    <tr>
                        <td width="30%"><label>NIM</label></td>
                        <td width="70%">'.$row["nim"].'</td>
                    </tr> 
                    <tr>
                        <td width="30%"><label>Prodi</label></td>
                        <td width="70%">'.$row["nama_prodi"].'</td>
                    </tr> 
                    <tr>
                        <td width="30%"><label>NIM</label></td>
                        <td width="70%">'.$row["nama_fakultas"].'</td>
                    </tr>                        
                    <tr>
                        <td width="30%"><label>Tempat Lahir</label></td>
                        <td width="70%">'.$row["tempat_lahir"].'</td>
                    </tr>
                    <tr>
                        <td width="30%"><label>Agama</label></td>
                        <td width="70%">'.$row["agama"].'</td>
                    </tr>
                    <tr>
                        <td width="30%"><label>Alamat</label></td>
                        <td width="70%">'.$row["alamat"].'</td>
                    </tr>
                    <tr>
                        <td width="30%"><label>No. HP</label></td>
                        <td width="70%">'.$row["no"].'</td>
                    </tr>
                    <tr>
                        <td width="30%"><label>Nama Ortu</label></td>
                        <td width="70%">'.$row["nama_ortu"].'</td>
                    </tr>
                    <tr>
                        <td width="30%"><label>Pekerjaan Ortu</label></td>
                        <td width="70%">'.$row["pekerjaan_ortu"].'</td>
                    </tr>
                    <tr>
                        <td width="30%"><label>Alamat Ortu</label></td>
                        <td width="70%">'.$row["alamat_ortu"].'</td>
                    </tr>
                    <tr>
                        <td width="30%"><label>No. HP Ortu</label></td>
                        <td width="70%">'.$row["no_ortu"].'</td>
                    </tr>
                    <tr>
                        <td width="30%"><label>Tahun Masuk</label></td>
                        <td width="70%">'.$row["tahun_masuk"].'</td>
                    </tr>
                    <tr>
                        <td width="30%"><label>Masa Huni</label></td>
                        <td width="70%">'.$row["masa_huni"].' Tahun</td>
                    </tr>
                    <tr>
                        <td width="30%"><label>Kategori</label></td>
                        <td width="70%">'.$row["kategori"].'</td>
                    </tr>
                    <tr>
                        <td width="30%"><label>Biaya</label></td>
                        <td width="70%">'.$row["biaya"].'</td>
                    </tr>
                    <tr>
                        <td width="30%"><label>Bayar</label></td>
                        <td width="70%">'.$row["bayar"].'</td>
                    </tr>
                    <tr>
                        <td width="30%"><label>Piutang</label></td>
                        <td width="70%">'.$row["piutang"].'</td>
                    </tr>
            ';
            $output .= '
                </table>
            </div>
            ';
            echo $output;
            $stmt->close();
        }
    }
?>