<?php require_once '_partials/session.php' ?>

<?php $halaman = 'Daftar Kamar' ?>

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
                <h1 class="page-title">Daftar Kamar</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Daftar Kamar</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Data Daftar Kamar</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <table class="table table-striped table-bordered table-hover" id="tabel-penghuni" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">No Kamar</th>
                                            <th class="text-center">ID Pendaftaran</th>
                                            <th class="text-center">NIM</th>
                                            <th class="text-center">Nama Penghuni</th>
                                            <th class="text-center">Masa Huni</th>
                                            <th class="text-center">Piutang</th>
                                            <th class="text-center">Edit</th>
                                            <th class="text-center">Hapus</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; $penghuni = $conn->query("SELECT * FROM penghuni"); while ($row = $penghuni->fetch_assoc()) { ?>
                                            <tr>
                                                <td class="text-center"><?php echo $no++ ?></td>
                                                <td class="text-center"><?php echo $row['no_kamar'] ?></td>
                                                <td class="text-center"><?php echo $row['id'] ?></td>
                                                <td class="text-center"><?php echo $row['nim'] ?></td>
                                                <td class="text-center"><?php echo  $row['nama'] ?></td>
                                                <td class="text-center"><?php echo $row['masa_huni'] , ' tahun' ?></td>
                                                <td class="text-center"><?php echo 'Rp. ', $row['piutang'] ?></td>
                                                <td class="text-center">
                                                    <a class="btn btn-sm btn-info" href="edit_penghuni.php?id=<?php echo $row['id'] ?>">
                                                        <span class="ti-pencil">
                                                        </span>Edit
                                                    </a>
                                                </td>
                                                <td>
                                                  <button type="button" class="btn btn-sm btn-danger ti-trash hapus_penghuni" id="<?php echo $row['id'] ?>">Delete</button>
                                                </td>
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

    <!-- CORE PLUGINS-->
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