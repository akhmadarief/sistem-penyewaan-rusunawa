<?php require_once '_partials/session.php' ?>

<?php $halaman = 'Daftar Harga Kamar' ?>

<!DOCTYPE html>
<html lang="en">

<?php require_once '_partials/head.php' ?>

<body class="fixed-navbar">
    <div class="page-wrapper">
        <!-- START HEADER-->
        <?php require_once '_partials/header.php' ?>
        <!-- END HEADER-->
        <!-- START SIDEBAR-->
        <?php require_once '_partials/sidebar.php' ?>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->
            <div class="page-heading">
                <h1 class="page-title"><?php echo $halaman ?></h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item"><?php echo $halaman ?></li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Data <?php echo $halaman ?></div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-striped table-bordered table-hover" id="tabel-penghuni" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th class='text-center'>No.</th>
                                            <th class='text-center'>Gedung</th>
                                            <th class='text-center'>Lantai</th>
                                            <th class='text-center'>Harga per Bulan</th>
                                            <th class='text-center'>Harga per Tahun</th>
                                            <th class='text-center'>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                            //$harga = $conn->query("SELECT kamar.gedung, harga.lantai, harga.harga FROM harga OUTER JOIN kamar ON harga.lantai=kamar.lantai");
                                            $harga = $conn->query("SELECT * FROM harga");
                                            while ($row = $harga->fetch_assoc()) {
                                                echo
                                                "<tr>
                                                    <td class='text-center'>".$no++."</td>
                                                    <td class='text-center'>Gedung ".$row['gedung']."</td>
                                                    <td class='text-center'>Lantai ".$row['lantai']."</td>
                                                    <td class='text-center'>Rp. ".number_format($row['harga'], 0, ',', '.')."</td>
                                                    <td class='text-center'>Rp. ".number_format($row['harga']*12, 0, ',', '.')."</td>
                                                    <td class='text-center'>
                                                        <button class='btn btn-sm btn-info edit_harga' id='".$row['lantai']."'>
                                                            <span class='ti-pencil'>
                                                            </span>Edit Harga
                                                        </button>
                                                    </td>
                                                </tr>";

                                            }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END PAGE CONTENT-->
            <?php require_once '_partials/footer.php' ?>
        </div>
    </div>
    <!-- BEGIN THEME CONFIG PANEL-->
    <?php require_once '_partials/theme-config.php' ?>
    <!-- END THEME CONFIG PANEL-->
    <!-- BEGIN PAGA BACKDROPS-->
    <?php require_once '_partials/preloader.php' ?>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS-->
    <?php require_once '_partials/js.php' ?>

    <!-- CORE PLUGINS & SCRIPTS-->
    <?php require_once '_partials/js.php' ?>

    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(function() {
            $('#tabel-penghuni').DataTable({
                pageLength: 10,
                //"ajax": './assets/demo/data/table_data.json',
                /*"columns": [
                    { "data": "name" },
                    { "data": "office" },
                    { "data": "extn" },
                    { "data": "start_date" },
                    { "data": "salary" }
                ]*/
            });
        })
    </script>

</body>

</html>