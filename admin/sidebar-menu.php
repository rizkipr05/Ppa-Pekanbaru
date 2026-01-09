<?php 
// fungsi pengecekan hak_akses untuk menampilkan menu sesuai dengan hak_akses
// jika hak_akses = Customer Service, tampilkan menu
if ($_SESSION['hak_akses']=='Customer Service') { ?>
    <ul class="nav nav-list admin-sidebar-menu">
    <?php
    // fungsi untuk pengecekan menu aktif
    // jika menu beranda dipilih, menu beranda aktif
    if ($_GET["module"] == "beranda") {
        echo '  <li class="active">
                    <a href="?module=beranda">
                        <i class="menu-icon fa fa-home"></i>
                        <span class="menu-text"> Beranda </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
    // jika tidak, menu beranda tidak aktif
    else {
        echo '  <li>
                    <a href="?module=beranda">
                        <i class="menu-icon fa fa-home"></i>
                        <span class="menu-text"> Beranda </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }

    // jika menu Ikan Masuk dipilih, menu Ikan Masuk aktif
    if ($_GET["module"] == "klien" || $_GET["module"] == "form_klien") {
        echo '  <li class="active">
                    <a href="?module=klien">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-text"> Klien </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
    // jika tidak, menu Ikan Masuk tidak aktif
    else {
        echo '  <li>
                    <a href="?module=klien">
                        <i class="menu-icon fa fa-users"></i>
                        <span class="menu-text"> Klien </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }

    // jika menu jadwal dipilih, menu jadwal aktif
    if ($_GET["module"] == "konselor" || $_GET["module"] == "form_konselor") {
        echo '  <li class="active">
                    <a href="?module=konselor">
                        <i class="menu-icon fa fa-user"></i>
                        <span class="menu-text"> Konselor </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
    // jika tidak, menu jadwal tidak aktif
    else {
        echo '  <li>
                    <a href="?module=konselor">
                        <i class="menu-icon fa fa-user"></i>
                        <span class="menu-text"> Konselor </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }

    // jika menu Transaksi Lelang dipilih, menu Transaksi Lelang aktif
    if ($_GET["module"] == "jenis" || $_GET["module"] == "form_jenis") {
        echo '  <li class="active">
                    <a href="?module=jenis">
                        <i class="menu-icon fa fa-folder-o"></i>
                        <span class="menu-text"> Jenis Konsultasi </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
    // jika tidak, menu transaksi lelang tidak aktif
    else {
        echo '  <li>
                    <a href="?module=jenis">
                        <i class="menu-icon fa fa-folder-o"></i>
                        <span class="menu-text"> Jenis Konsultasi </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }

    // jika menu laporan dipilih, menu laporan aktif
    if ($_GET["module"] == "informasi" || $_GET["module"] == "form_informasi") {
        echo '  <li class="active">
                    <a href="?module=informasi">
                        <i class="menu-icon fa fa-th-large"></i>
                        <span class="menu-text"> Informasi </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
    // jika tidak, menu laporan tidak aktif
    else {
        echo '  <li>
                    <a href="?module=informasi">
                        <i class="menu-icon fa fa-th-large"></i>
                        <span class="menu-text"> Informasi </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }
	
	// jika menu kategori dipilih, menu kategori aktif
    if ($_GET["module"] == "kategori" || $_GET["module"] == "form_kategori") {
        echo '  <li class="active">
                    <a href="?module=kategori">
                        <i class="menu-icon fa fa-tag"></i>
                        <span class="menu-text"> Kategori Informasi </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
    // jika tidak, menu laporan tidak aktif
    else {
        echo '  <li>
                    <a href="?module=kategori">
                        <i class="menu-icon fa fa-tag"></i>
                        <span class="menu-text"> Kategori Informasi </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }

    // jika menu diskusi dipilih, menu diskusi aktif
    if ($_GET["module"] == "diskusi" || $_GET["module"] == "form_diskusi") {
        require_once "../config/database.php";
        // fungsi query untuk menampilkan data dari tabel pesan
        $query = mysqli_query($mysqli, "SELECT COUNT(id_diskusi) as jumlah FROM tbl_diskusi WHERE status='n'")
                                        or die('Ada kesalahan pada query tampil data pesan: '.mysqli_error($mysqli));

        $data = mysqli_fetch_assoc($query);
    ?>
        <li class="active">
            <a href="?module=diskusi">
                <i class="menu-icon fa fa-comments"></i>
                <span class="menu-text"> 
                    Diskusi 
                    <?php 
                    if ($data['jumlah']=='0') {
                        echo "";
                    } else { ?>
                        <span class="badge badge-primary"><?php echo $data['jumlah']; ?></span>
                    <?php
                    }
                    ?> 
                </span>
            </a>
            <b class="arrow"></b>
        </li>
    <?php
    } 
    // jika tidak, menu diskusi tidak aktif
    else {
        require_once "../config/database.php";
        // fungsi query untuk menampilkan data dari tabel pesan
        $query = mysqli_query($mysqli, "SELECT COUNT(id_diskusi) as jumlah FROM tbl_diskusi WHERE status='n'")
                                        or die('Ada kesalahan pada query tampil data pesan: '.mysqli_error($mysqli));

        $data = mysqli_fetch_assoc($query);
    ?>
        <li>
            <a href="?module=diskusi">
                <i class="menu-icon fa fa-comments"></i>
                <span class="menu-text"> 
                    Diskusi 
                    <?php 
                    if ($data['jumlah']=='0') {
                        echo "";
                    } else { ?>
                        <span class="badge badge-primary"><?php echo $data['jumlah']; ?></span>
                    <?php
                    }
                    ?> 
                </span>
            </a>
            <b class="arrow"></b>
        </li>
    <?php
    }

    // jika menu lap_klien dipilih, menu lap_klien aktif
    if ($_GET["module"] == "lap_klien") {
        echo '  <li class="active open">
                    <a href="javascript:void(0);" class="dropdown-toggle">
                        <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-text"> Laporan </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="active">
                            <a href="?module=lap_klien">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Klien
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li>
                            <a href="?module=lap_konselor">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konselor
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li>
                            <a href="?module=lap_konsultasi">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konsultasi
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>';
    } 
    // jika menu lap_konselor dipilih, menu lap_konselor aktif
    elseif ($_GET["module"] == "lap_konselor") {
        echo '  <li class="active open">
                    <a href="javascript:void(0);" class="dropdown-toggle">
                        <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-text"> Laporan </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li>
                            <a href="?module=lap_klien">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Klien
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="active">
                            <a href="?module=lap_konselor">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konselor
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li>
                            <a href="?module=lap_konsultasi">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konsultasi
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>';
    } 
    // jika menu lap_konsultasi dipilih, menu lap_konsultasi aktif
    elseif ($_GET["module"] == "lap_konsultasi") {
        echo '  <li class="active open">
                    <a href="javascript:void(0);" class="dropdown-toggle">
                        <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-text"> Laporan </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li>
                            <a href="?module=lap_klien">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Klien
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li>
                            <a href="?module=lap_konselor">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konselor
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="active">
                            <a href="?module=lap_konsultasi">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konsultasi
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>';
    }
    // jika tidak, menu lap_klien tidak aktif
    else {
        echo '  <li>
                    <a href="javascript:void(0);" class="dropdown-toggle">
                        <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-text"> Laporan </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li>
                            <a href="?module=lap_klien">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Klien
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li>
                            <a href="?module=lap_konselor">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konselor
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li>
                            <a href="?module=lap_konsultasi">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konsultasi
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>';
    }

    // jika menu grafik dipilih, menu grafik aktif
    if ($_GET["module"] == "grafik") {
        echo '  <li class="active">
                    <a href="?module=grafik">
                        <i class="menu-icon fa fa-bar-chart"></i>
                        <span class="menu-text"> Grafik </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
    // jika tidak, menu grafik tidak aktif
    else {
        echo '  <li>
                    <a href="?module=grafik">
                        <i class="menu-icon fa fa-bar-chart"></i>
                        <span class="menu-text"> Grafik </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }
    ?>
    </ul>
<?php
} 
// jika hak_akses = Pimpinan, tampilkan menu
elseif ($_SESSION['hak_akses']=='Pimpinan'){ ?>
    <ul class="nav nav-list admin-sidebar-menu">
    <?php
    // fungsi untuk pengecekan menu aktif
    // jika menu beranda dipilih, menu beranda aktif
    if ($_GET["module"] == "beranda") {
        echo '  <li class="active">
                    <a href="?module=beranda">
                        <i class="menu-icon fa fa-home"></i>
                        <span class="menu-text"> Beranda </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
    // jika tidak, menu beranda tidak aktif
    else {
        echo '  <li>
                    <a href="?module=beranda">
                        <i class="menu-icon fa fa-home"></i>
                        <span class="menu-text"> Beranda </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }

    // jika menu lap_klien dipilih, menu lap_klien aktif
    if ($_GET["module"] == "lap_klien") {
        echo '  <li class="active open">
                    <a href="javascript:void(0);" class="dropdown-toggle">
                        <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-text"> Laporan </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li class="active">
                            <a href="?module=lap_klien">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Klien
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li>
                            <a href="?module=lap_konselor">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konselor
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li>
                            <a href="?module=lap_konsultasi">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konsultasi
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>';
    } 
    // jika menu lap_konselor dipilih, menu lap_konselor aktif
    elseif ($_GET["module"] == "lap_konselor") {
        echo '  <li class="active open">
                    <a href="javascript:void(0);" class="dropdown-toggle">
                        <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-text"> Laporan </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li>
                            <a href="?module=lap_klien">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Klien
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="active">
                            <a href="?module=lap_konselor">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konselor
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li>
                            <a href="?module=lap_konsultasi">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konsultasi
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>';
    } 
    // jika menu lap_konsultasi dipilih, menu lap_konsultasi aktif
    elseif ($_GET["module"] == "lap_konsultasi") {
        echo '  <li class="active open">
                    <a href="javascript:void(0);" class="dropdown-toggle">
                        <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-text"> Laporan </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li>
                            <a href="?module=lap_klien">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Klien
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li>
                            <a href="?module=lap_konselor">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konselor
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li class="active">
                            <a href="?module=lap_konsultasi">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konsultasi
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>';
    }
    // jika tidak, menu lap_klien tidak aktif
    else {
        echo '  <li>
                    <a href="javascript:void(0);" class="dropdown-toggle">
                        <i class="menu-icon fa fa-file-text-o"></i>
                        <span class="menu-text"> Laporan </span>
                        <b class="arrow fa fa-angle-down"></b>
                    </a>

                    <b class="arrow"></b>

                    <ul class="submenu">
                        <li>
                            <a href="?module=lap_klien">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Klien
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li>
                            <a href="?module=lap_konselor">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konselor
                            </a>
                            <b class="arrow"></b>
                        </li>

                        <li>
                            <a href="?module=lap_konsultasi">
                                <i class="menu-icon fa fa-angle-double-right"></i>
                                Konsultasi
                            </a>
                            <b class="arrow"></b>
                        </li>
                    </ul>
                </li>';
    }
    
    // jika menu grafik dipilih, menu grafik aktif
    if ($_GET["module"] == "grafik") {
        echo '  <li class="active">
                    <a href="?module=grafik">
                        <i class="menu-icon fa fa-bar-chart"></i>
                        <span class="menu-text"> Grafik </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
    // jika tidak, menu grafik tidak aktif
    else {
        echo '  <li>
                    <a href="?module=grafik">
                        <i class="menu-icon fa fa-bar-chart"></i>
                        <span class="menu-text"> Grafik </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }
    ?>
    </ul>
<?php
}
// jika hak_akses = Customer Service, tampilkan menu
elseif ($_SESSION['hak_akses']=='konselor') { ?>
    <ul class="nav nav-list admin-sidebar-menu">
    <?php
    // fungsi untuk pengecekan menu aktif
    // jika menu beranda dipilih, menu beranda aktif
    if ($_GET["module"] == "beranda") {
        echo '  <li class="active">
                    <a href="?module=beranda">
                        <i class="menu-icon fa fa-home"></i>
                        <span class="menu-text"> Beranda </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    } 
    // jika tidak, menu beranda tidak aktif
    else {
        echo '  <li>
                    <a href="?module=beranda">
                        <i class="menu-icon fa fa-home"></i>
                        <span class="menu-text"> Beranda </span>
                    </a>
                    <b class="arrow"></b>
                </li>';
    }

    // jika menu konsultasi dipilih, menu konsultasi aktif
    if ($_GET["module"] == "konsultasi" || $_GET["module"] == "form_konsultasi") {
        require_once "../config/database.php";
        // fungsi query untuk menampilkan data dari tabel pesan
        $query = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah FROM tbl_konsultasi 
                                        WHERE id_konselor='$_SESSION[id_user]' AND status='n' AND pertanyaan!=''")
                                        or die('Ada kesalahan pada query tampil data pesan: '.mysqli_error($mysqli));

        $data = mysqli_fetch_assoc($query);
    ?>
        <li class="active">
            <a href="?module=konsultasi">
                <i class="menu-icon fa fa-clone"></i>
                <span class="menu-text"> 
                    Konsultasi 
                    <?php 
                    if ($data['jumlah']=='0') {
                        echo "";
                    } else { ?>
                        <span class="badge badge-primary"><?php echo $data['jumlah']; ?></span>
                    <?php
                    }
                    ?> 
                </span>
            </a>
            <b class="arrow"></b>
        </li>
    <?php
    } 
    // jika tidak, menu konsultasi tidak aktif
    else {
        require_once "../config/database.php";
        // fungsi query untuk menampilkan data dari tabel pesan
        $query = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah FROM tbl_konsultasi 
                                        WHERE id_konselor='$_SESSION[id_user]' AND status='n' AND pertanyaan!=''")
                                        or die('Ada kesalahan pada query tampil data pesan: '.mysqli_error($mysqli));

        $data = mysqli_fetch_assoc($query);
    ?>
        <li>
            <a href="?module=konsultasi">
                <i class="menu-icon fa fa-clone"></i>
                <span class="menu-text"> 
                    Konsultasi 
                    <?php 
                    if ($data['jumlah']=='0') {
                        echo "";
                    } else { ?>
                        <span class="badge badge-primary"><?php echo $data['jumlah']; ?></span>
                    <?php
                    }
                    ?> 
                </span>
            </a>
            <b class="arrow"></b>
        </li>
    <?php
    }
    ?>
    </ul>
<?php
} 
?>
