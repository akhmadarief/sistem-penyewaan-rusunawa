<?php require_once '_partials/session.php' ?>

<?php $halaman = 'Daftar Penghuni' ?>

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
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title"><?php echo $halaman ?></div>
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
                                    <th class="text-center">Alamat Asal</th>
                                    <th class="text-center">Nama Ortu</th>
                                    <th class="text-center">No. HP Ortu</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no = 1; $penghuni = $conn->query("SELECT * FROM penghuni"); while ($row = $penghuni->fetch_assoc()){ ?>
                                <tr>
                                    <td class="text-center"><?php echo $no++ ?></td>
                                    <td class="text-center"><?php echo $row['no_kamar'] ?></td>
                                    <td class="text-center"><?php echo $row['nama'] ?></td>
                                    <td class="text-center"><?php echo $row['nim'] ?></td>
                                    <td class="text-center"><?php echo $row['no'] ?></td>
                                    <td class="text-center"><?php echo $row['alamat'] ?></td>
                                    <td class="text-center"><?php echo $row['nama_ortu'] ?></td>
                                    <td class="text-center"><?php echo $row['no_ortu'] ?></td>
                                    <td class="text-center">
                                        <button class="btn btn-sm btn-success view_data" id="<?php echo $row['id'] ?>">
                                            <span class="ti-info-alt"></span> Detail
                                        </button>
                                        <a class="btn btn-sm btn-info" href="edit_penghuni.php?id=<?php echo $row['id'] ?>">
                                            <span class="ti-pencil"></span> Edit
                                        </a>
                                        <form action="_action/delete_penghuni.php" method="POST">
                                            <input type="hidden" name="id_penghuni" value="<?php echo $row['id'] ?>">
                                            <button type="submit" class="btn btn-sm btn-danger hapus-penghuni">
                                                <span class="ti-trash"></span> Hapus
                                            </button>
                                        </form>
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

    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $(document).ready(function(){
            $('#tabel-penghuni').DataTable({
                pageLength: 25
            });
            $(".hapus-penghuni").click(function(e){
                e.preventDefault();
                var form = $(this).parents('form');
                Swal.fire({
                    title: 'Hapus Data Penghuni',
                    text: 'Apakah Anda yakin ingin menghapus data penghuni ini?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#dd3333',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus',
                    cancelButtonText: 'Batal',
                }).then((result) => {
                    if (result.value) {
                        form.submit();
                    }
                });
            });
        });
    </script>

</body>

</html>