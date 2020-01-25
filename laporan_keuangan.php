<?php require_once '_partials/session.php' ?>

<?php $halaman = 'Laporan Keuangan' ?>

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
                <h1 class="page-title">Laporan Keuangan</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Laporan Keuangan</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Data Laporan Keuangan</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-striped table-bordered table-hover" id="tabel-penghuni" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No.</th>
                                            <th class="text-center">No. Kamar</th>
                                            <th class="text-center">Nama</th>
                                            <th class="text-center">NIM</th>
                                            <th class="text-center">No. HP</th>
                                            <th class="text-center">Biaya</th>
                                            <th class="text-center">Bayar</th>
                                            <th class='text-center'>Piutang</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; $penghuni = $conn->query("SELECT * FROM penghuni"); while ($row = $penghuni->fetch_assoc()) {?>
                                            <tr>
                                                <td class="text-center"><?php echo $no++ ?></td>
                                                <td class="text-center"><?php echo $row['no_kamar'] ?></td>
                                                <td class="text-center"><?php echo $row['nama'] ?></td>
                                                <td class="text-center"><?php echo $row['nim'] ?></td>
                                                <td class="text-center"><?php echo $row['no'] ?></td>
                                                <td class="text-center"><?php echo 'Rp. ', number_format($row['biaya'], 0, ',', '.') ?></td>
                                                <td class="text-center"><?php echo 'Rp. ', number_format($row['bayar'], 0, ',', '.') ?></td>
                                                <td class="text-center"><?php echo 'Rp. ', number_format($row['piutang'], 0, ',', '.') ?></td>
                                            </tr>
                                        <?php } ?>
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