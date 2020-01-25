<?php require_once '_partials/config.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Sistem Penyewaan Rusunawa | Beranda</title>

    <!-- CSS -->
    <?php require_once '_partials/css.php' ?>
</head>

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
                <h1 class="page-title">Daftar Penghuni</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Daftar Penghuni</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Data Table</div>
                    </div>
                    <div class="ibox-body">
                        <table class="table table-striped table-bordered table-hover" id="tabel-penghuni" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>No. Kamar</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>No. HP</th>
                                    <th>Alamat Asal</th>
                                    <th>Nama Ortu</th>
                                    <th>No. HP Ortu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; $penghuni = $conn->query("SELECT * FROM penghuni"); while ($row = $penghuni->fetch_assoc()){ ?>
                                <tr>
                                    <td><?php echo $no++ ?></td>
                                    <td><?php echo $row['no_kamar'] ?></td>
                                    <td><?php echo $row['nama'] ?></td>
                                    <td><?php echo $row['nim'] ?></td>
                                    <td><?php echo $row['no'] ?></td>
                                    <td><?php echo $row['alamat'] ?></td>
                                    <td><?php echo $row['nama_ortu'] ?></td>
                                    <td><?php echo $row['no_ortu'] ?></td>
                                    <td class='text-center'>
                                        <button class="btn btn-sm btn-success view_data" id="<?php echo $row['id'] ?>">
                                            <span class="ti-info-alt"></span> Detail
                                        </button>
                                        <a class="btn btn-sm btn-info" href="edit_penghuni.php?id=<?php echo $row['id'] ?>">
                                            <span class="ti-pencil"></span> Edit
                                        </a>
                                        <button class="btn btn-sm btn-danger hapus_penghuni" id="<?php echo $row['id'] ?>">
                                            <span class="ti-trash"></span> Hapus
                                        </button>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
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

    <!-- PAGE LEVEL PLUGINS-->
    <script src="./assets/vendors/DataTables/datatables.min.js" type="text/javascript"></script>

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