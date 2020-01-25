<?php require_once '_partials/session.php' ?>

<?php $halaman = 'Pilih Kamar' ?>

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
                <h1 class="page-title">Pilih Kamar</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="la la-home font-20"></i></a>
                    </li>
                    <li class="breadcrumb-item">Pilih Kamar</li>
                </ol>
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Denah Kamar</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <ul class="nav nav-tabs tabs-line">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#gedunga" data-toggle="tab">Gedung A</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#gedungb" data-toggle="tab">Gedung B</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#gedungc" data-toggle="tab">Gedung C</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#gedungd" data-toggle="tab">Gedung D</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#gedunge" data-toggle="tab">Gedung E</a>
                                    </li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane fade show active" id="gedunga">
                                        <form class="form-horizontal">
                                            <div class="form-group row" style="margin-top: 25px;">
                                                <label class="col-sm-2 col-form-label" style="flex: 0 0 10%;">Pilih Lantai</label>
                                                <div class="col-sm-10" style="flex: 0 0 20%;">
                                                    <select id="gedung_A" class="form-control">
                                                        <option value="A0">Semua Lantai</option>
                                                        <option value="A2">Lantai 2</option>
                                                        <option value="A3">Lantai 3</option>
                                                        <option value="A4">Lantai 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="lantai_A" style="margin-top: 25px;">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="gedungb">
                                        <form class="form-horizontal">
                                            <div class="form-group row" style="margin-top: 25px;">
                                                <label class="col-sm-2 col-form-label" style="flex: 0 0 10%;">Pilih Lantai</label>
                                                <div class="col-sm-10" style="flex: 0 0 20%;">
                                                    <select id="gedung_B" class="form-control">
                                                        <option value="B0">Semua Lantai</option>
                                                        <option value="B1">Lantai 1</option>
                                                        <option value="B2">Lantai 2</option>
                                                        <option value="B3">Lantai 3</option>
                                                        <option value="B4">Lantai 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="lantai_B" style="margin-top: 25px;">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="gedungc">
                                        <form class="form-horizontal">
                                            <div class="form-group row" style="margin-top: 25px;">
                                                <label class="col-sm-2 col-form-label" style="flex: 0 0 10%;">Pilih Lantai</label>
                                                <div class="col-sm-10" style="flex: 0 0 20%;">
                                                    <select id="gedung_C" class="form-control">
                                                        <option value="C0">Semua Lantai</option>
                                                        <option value="C2">Lantai 2</option>
                                                        <option value="C3">Lantai 3</option>
                                                        <option value="C4">Lantai 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="lantai_C" style="margin-top: 25px;">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="gedungd">
                                        <form class="form-horizontal">
                                            <div class="form-group row" style="margin-top: 25px;">
                                                <label class="col-sm-2 col-form-label" style="flex: 0 0 10%;">Pilih Lantai</label>
                                                <div class="col-sm-10" style="flex: 0 0 20%;">
                                                    <select id="gedung_D" class="form-control">
                                                        <option value="D0">Semua Lantai</option>
                                                        <option value="D2">Lantai 2</option>
                                                        <option value="D3">Lantai 3</option>
                                                        <option value="D4">Lantai 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="lantai_D" style="margin-top: 25px;">
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="gedunge">
                                    <form class="form-horizontal">
                                            <div class="form-group row" style="margin-top: 25px;">
                                                <label class="col-sm-2 col-form-label" style="flex: 0 0 10%;">Pilih Lantai</label>
                                                <div class="col-sm-10" style="flex: 0 0 20%;">
                                                    <select id="gedung_E" class="form-control">
                                                        <option value="E0">Semua Lantai</option>
                                                        <option value="E1">Lantai 1</option>
                                                        <option value="E2">Lantai 2</option>
                                                        <option value="E3">Lantai 3</option>
                                                        <option value="E4">Lantai 4</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </form>
                                        <div id="lantai_E" style="margin-top: 25px;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ibox-body text-center bg-light">
                                <!--<div class="legenda">
                                    <div class="satu-legenda">
                                        <div class="legenda-kosong"></div>
                                        <span>Belum Berpenghuni</span>
                                    </div>
                                    <div class="satu-legenda">
                                        <div class="legenda-terisi1"></div>
                                        <span>Terdapat 1 Penghuni</span>
                                    </div>
                                    <div class="satu-legenda">
                                        <div class="legenda-terisi2"></div>
                                        <span>Terdapat 2 Penghuni</span>
                                    </div>
                                    <div class="satu-legenda">
                                        <div class="legenda-piutang"></div>
                                        <span>Terdapat Piutang</span>
                                    </div>
                                    <div class="satu-legenda">
                                        <div class="legenda-terpilih"></div>
                                        <span>Sedang Dipilih</span>
                                    </div>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6" id="dataPenghuni1" style="display: none;">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Data Penghuni I</div>
                                <div>
                                    <button class="btn btn-dark btn-sm" id="tambah_penghuni">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <button class="btn btn-dark btn-sm" id="edit_penghuni">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No. Kamar</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Nomor Kamar yang Dipilih" id="no_kamar" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Nama Penghuni" id="nama" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NIM</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="NIM Penghuni" id="nim" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No. HP</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="No. HP Penghuni" id="no" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Prodi</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Prodi Penghuni" id="prodi" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Masa Huni</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Masa Huni" id="masa_huni" readonly>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" id="dataPenghuni2" style="display: none;">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Data Penghuni II</div>
                                <div>
                                    <button class="btn btn-dark btn-sm" id="tambah_penghuni">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                    <button class="btn btn-dark btn-sm" id="edit_penghuni">
                                        <i class="fa fa-pencil"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No. Kamar</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Nomor Kamar yang Dipilih" id="no_kamar2" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nama</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Nama Penghuni" id="nama2" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">NIM</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="NIM Penghuni" id="nim2" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">No. HP</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="No. HP Penghuni" id="no2" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Prodi</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Prodi Penghuni" id="prodi2" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Masa Huni</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" placeholder="Masa Huni" id="masa_huni2" readonly>
                                        </div>
                                    </div>
                                </form>
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
    <!-- JS -->
    <script type="text/javascript">
        $(document).ready(function(){
            $("#gedung_A").change(function(){
                var gedung_A = $("#gedung_A").val();
                $.ajax({
                    type: 'POST',
                    url: "_action/get.php?gedung=A",
                    data: {gedung_A: gedung_A},
                    cache: false,
                    success: function(msg){
                    $("#lantai_A").html(msg);
                    }
                });
            }).trigger("change");
            $("#gedung_B").change(function(){
                var gedung_B = $("#gedung_B").val();
                $.ajax({
                    type: 'POST',
                    url: "_action/get.php?gedung=B",
                    data: {gedung_B: gedung_B},
                    cache: false,
                    success: function(msg){
                    $("#lantai_B").html(msg);
                    }
                });
            }).trigger("change");
            $("#gedung_C").change(function(){
                var gedung_C = $("#gedung_C").val();
                $.ajax({
                    type: 'POST',
                    url: "_action/get.php?gedung=C",
                    data: {gedung_C: gedung_C},
                    cache: false,
                    success: function(msg){
                    $("#lantai_C").html(msg);
                    }
                });
            }).trigger("change");
            $("#gedung_D").change(function(){
                var gedung_D = $("#gedung_D").val();
                $.ajax({
                    type: 'POST',
                    url: "_action/get.php?gedung=D",
                    data: {gedung_D: gedung_D},
                    cache: false,
                    success: function(msg){
                    $("#lantai_D").html(msg);
                    }
                });
            }).trigger("change");
            $("#gedung_E").change(function(){
                var gedung_E = $("#gedung_E").val();
                $.ajax({
                    type: 'POST',
                    url: "_action/get.php?gedung=E",
                    data: {gedung_E: gedung_E},
                    cache: false,
                    success: function(msg){
                    $("#lantai_E").html(msg);
                    }
                });
            }).trigger("change");
            $("#gedung_F").change(function(){
                var gedung_F = $("#gedung_F").val();
                $.ajax({
                    type: 'POST',
                    url: "_action/get.php?gedung=F",
                    data: {gedung_F: gedung_F},
                    cache: false,
                    success: function(msg){
                    $("#lantai_F").html(msg);
                    }
                });
            }).trigger("change");;
        });
    </script>
</body>

</html>