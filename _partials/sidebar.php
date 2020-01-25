        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <div>
                        <img src="./assets/img/admin-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong"><?php echo $_SESSION['nama'] ?></div><small>Administrator</small></div>
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="<?php if ($halaman == 'Dasbor') echo 'active' ?>" href="./"><i class="sidebar-item-icon fa fa-dashboard"></i>
                            <span class="nav-label">Dasbor</span>
                        </a>
                    </li>
                    <li class="heading">KAMAR</li>
                    <li>
                        <a class="<?php if ($halaman == 'Pilih Kamar') echo 'active' ?>" href="kamar.php"><i class="sidebar-item-icon fa fa-th"></i>
                            <span class="nav-label">Pilih Kamar</span>
                        </a>
                    </li>
                    <li>
                        <a class="<?php if ($halaman == 'Daftar Kamar') echo 'active' ?>" href="daftar_kamar.php"><i class="sidebar-item-icon fa fa-th-list"></i>
                            <span class="nav-label">Daftar Kamar</span>
                        </a>
                    </li>
                    <li>
                        <a class="<?php if ($halaman == 'Daftar Harga Kamar') echo 'active' ?>" href="daftar_harga.php"><i class="sidebar-item-icon fa fa-dollar"></i>
                            <span class="nav-label">Daftar Harga Kamar</span>
                        </a>
                    </li>
                    <li class="heading">PENGHUNI</li>
                    <li>
                        <a class="<?php if ($halaman == 'Daftar Penghuni') echo 'active' ?>" href="daftar_penghuni.php"><i class="sidebar-item-icon fa fa-users"></i>
                            <span class="nav-label">Daftar Penghuni</span>
                        </a>
                    </li>
                    <li class="heading">KEUANGAN</li>
                    <li>
                        <a class="<?php if ($halaman == 'Laporan Keuangan') echo 'active' ?>" href="laporan_keuangan.php"><i class="sidebar-item-icon fa fa-money"></i>
                            <span class="nav-label">Laporan Keuangan</span>
                        </a>
                    </li>
                    <li>
                        <a class="<?php if ($halaman == 'Laporan Piutang') echo 'active' ?>" href="laporan_piutang.php"><i class="sidebar-item-icon fa fa-credit-card-alt"></i>
                            <span class="nav-label">Laporan Piutang</span>
                        </a>
                    </li>
                    <li>
                        <a href="kosong.php"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label">Kosong</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>