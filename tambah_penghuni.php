<?php require_once '_partials/session.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Sistem Penyewaan Rusunawa | Tambah Penghuni</title>

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
                <h1 class="page-title">Tambah Penghuni</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Tambah Penghuni</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="ibox">
                    <div class="ibox-head">
                        <div class="ibox-title">Tambah Penghuni</div>
                        <div class="ibox-tools">
                            <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                        </div>
                    </div>
                    <div class="ibox-body">
                        <form class="form-horizontal" id="form-pendaftaran" method="post" novalidate="novalidate">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Lengkap</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap Penghuni">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">NIM</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="nim" placeholder="NIM Penghuni">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Fakultas</label>
                                <div class="col-sm-9">
                                    <select class="form-control select2_fakultas" name="id_fakultas" id="fakultas">
                                        <option></option>
                                        <?php $data_fakultas = $conn->query("SELECT * FROM fakultas ORDER BY nama_fakultas ASC"); while ($row_fakultas = $data_fakultas->fetch_assoc()) { ?>
                                        <option value="<?php echo $row_fakultas['id_fakultas'] ?>"><?php echo $row_fakultas['nama_fakultas'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Prodi</label>
                                <div class="col-sm-9">
                                    <select class="form-control select2_prodi" name="id_prodi" id="prodi">
                                        <option disabled>Silakan Pilih Fakultas Terlebih Dahulu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir Penghuni">
                                </div>
                            </div>
                            <div class="form-group row" id="tgl_lahir">
                                <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-9 input-group date">
                                    <input class="form-control" type="text" placeholder="Pilih Tanggal Lahir" readonly>
                                    <span class="input-group-addon bg-white"><i class="fa fa-calendar"></i></span>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Agama</label>
                                <div class="col-sm-9">
                                    <select class="form-control select2_agama" name="agama" id="agama">
                                        <option></option>
                                        <option value="Islam">Islam</option>
                                        <option value="Protestan">Kristen Protestan</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Biddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="other">Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row" id="agama_lainnya" style="display: none">
                                <div class="col-sm-9 ml-sm-auto">
                                    <input class="form-control" type="text" name="agama_lainnya" placeholder="Agama Penghuni">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat Asal</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="alamat" placeholder="Alamat Asal Penghuni">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. Telp/HP</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="no" placeholder="No. Telp/HP Penghuni">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nama Orang Tua</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="nama_ortu" placeholder="Nama Orang Tua Penghuni">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Pekerjaan Orang Tua</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="pekerjaan_ortu" placeholder="Pekerjaan Orang Tua Penghuni">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Alamat Orang Tua</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="alamat_ortu" placeholder="Alamat Orang Tua Penghuni">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">No. Telp/HP Orang Tua</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="no_ortu" placeholder="No Telp/HP Orang Tua Penghuni">
                                </div>
                            </div>
                            <div class="form-group row" id="masa_huni">
                                <label class="col-sm-3 col-form-label">Masa Huni</label>
                                <div class="col-sm-9 input-daterange input-group" id="datepicker">
                                    <input class="input-sm form-control" type="text" name="tgl_masuk" placeholder="Pilih Tanggal Masuk" readonly>
                                    <span class="input-group-addon p-l-10 p-r-10">s.d.</span>
                                    <input class="input-sm form-control" type="text" name="tgl_keluar" placeholder="Pilih Tanggal Keluar" readonly>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Kategori</label>
                                <div class="col-sm-3">
                                    <label class="ui-radio ui-radio-inline ui-radio-primary">
                                        <input type="radio" name="test">
                                        <span class="input-span"></span>Option 1</label>
                                </div>
                                <div class="col-sm-6">
                                    <label class="ui-radio ui-radio-inline ui-radio-primary">
                                        <input type="radio" name="test">
                                        <span class="input-span"></span>Option 2</label>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Harga Sewa Kamar</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="biaya">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Bayar</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="bayar">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Piutang</label>
                                <div class="col-sm-9">
                                    <input class="form-control" type="text" name="piutang">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-9 ml-sm-auto">
                                    <button class="btn btn-info" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
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
    <!-- PAGE LEVEL PLUGINS-->
    <script src="./assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/select2/dist/js/select2.full.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
    <script src="./assets/vendors/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">
        $("#form-pendaftaran").validate({
            rules: {
                nama: {
                    minlength: 2,
                    required: !0
                },
                nim: {
                    required: !0,
                    number: !0
                }
            },
            errorClass: "help-block error",
            highlight: function(e) {
                $(e).closest(".form-group.row").addClass("has-error")
            },
            unhighlight: function(e) {
                $(e).closest(".form-group.row").removeClass("has-error")
            },
        });

        $(document).ready(function(){
            // Select 2
            $(".select2_fakultas").select2({
                placeholder: "Pilih Fakultas",
                allowClear: true
            });
            $(".select2_prodi").select2({
                placeholder: "Pilih Prodi",
                allowClear: true
            });
            $(".select2_agama").select2({
                placeholder: "Pilih Agama",
                allowClear: true
            });
            // Get Prodi
            $("#fakultas").change(function(){
                var fakultas = $("#fakultas").val();
                $.ajax({
                    type: 'POST',
                    url: "_action/get_prodi.php",
                    data: {id_fakultas: fakultas},
                    cache: false,
                    success: function(msg){
                    $("#prodi").html(msg);
                    }
                });
            });
            // Bootstrap datepicker
            $('#tgl_lahir .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd-mm-yyyy"
            });
            $('#masa_huni .input-daterange').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd-mm-yyyy"
            });
            // Agama lainnya
            $('#agama').change(function(){
                var agama = $("#agama").val();
                if (agama == 'other'){
                    $('#agama_lainnya').attr("style", "display: block");
                }
                else {
                    $('#agama_lainnya').attr("style", "display: none");
                }
            });
        });
    </script>

</body>

</html>