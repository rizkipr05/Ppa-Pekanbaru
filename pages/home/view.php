<?php
// Catatan: pastikan session_start() sudah dipanggil di file utama sebelum include home.php
// dan $mysqli sudah terdefinisi (koneksi DB).

$isPaging = isset($_GET['hal']) && $_GET['hal'] !== '';
$page     = $isPaging ? max(1, (int)$_GET['hal']) : 1;

// pagination setup
$batas = 5;

$qJumlah = mysqli_query($mysqli, "SELECT COUNT(*) AS total FROM tbl_informasi")
    or die('Ada kesalahan pada query jumlah_record: ' . mysqli_error($mysqli));
$rowJumlah = mysqli_fetch_assoc($qJumlah);
$jumlah = (int)($rowJumlah['total'] ?? 0);

$halaman = ($jumlah > 0) ? (int)ceil($jumlah / $batas) : 1;
$mulai   = ($page - 1) * $batas;

// data informasi
$query = mysqli_query(
    $mysqli,
    "SELECT a.*, b.nama_kategori
     FROM tbl_informasi a
     INNER JOIN tbl_kategori b ON a.id_kategori = b.id_kategori
     ORDER BY a.id_informasi DESC
     LIMIT $mulai, $batas"
) or die('Ada kesalahan pada query tampil data informasi : ' . mysqli_error($mysqli));
?>

<?php
// HERO hanya ketika bukan paging (home awal) dan belum login klien
if (!$isPaging) {
    if (empty($_SESSION['email_klien']) || empty($_SESSION['password_klien'])) { ?>
        <div class="row home-hero">
            <div class="col-lg-12">
                <h2 class="page-header">
                    Kasus-kasus kriminalitas yang melibatkan perempuan dan anak-anak bukan sekadar urusan profesional.
                    Dalam sejumlah kasus, kerap terlibat secara emosional.
                </h2>
            </div>

            <div class="col-md-8 col-sm-8 col-xs-12 home-hero-text">
                <p style="text-align:justify">
                    Segera daftarkan diri Anda untuk mendapatkan langsung pelayanan konsultasi seputar memberi pelayanan
                    berbentuk perlindungan terhadap perempuan dan anak yang menjadi korban kejahatan dan penegakan hukum
                    terhadap pelakunya secara online dengan para konselor (Psikolog), lembaga bantuan hukum, profesional,
                    dokter dari berbagai bidang yang terkait masalah hukum yang melibatkan perempuan dan anak yang telah
                    kami siapkan untuk membantu Anda!
                </p>
            </div>
        </div>
        <hr>
<?php }
}
?>

<div class="row home-main">
    <!-- KONTEN UTAMA -->
    <div class="col-md-8 col-sm-8 col-xs-12">

        <?php if (!$isPaging) { ?>
            <!-- CAROUSEL hanya di home (tanpa ?hal= ) -->
            <div class="row">
                <div class="col-md-12">
                    <div id="carousel-example-generic" class="carousel slide home-carousel" data-ride="carousel">

                        <ol class="carousel-indicators">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="4"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="5"></li>
                        </ol>

                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <img style="width:100%;height:320px" src="images/slide/slide1.jpg" alt="Informasi">
                            </div>
                            <div class="item">
                                <img style="width:100%;height:320px" src="images/slide/slide2.jpg" alt="Informasi">
                            </div>
                            <div class="item">
                                <img style="width:100%;height:320px" src="images/slide/slide3.jpg" alt="Informasi">
                            </div>
                            <div class="item">
                                <img style="width:100%;height:320px" src="images/slide/slide4.jpg" alt="Informasi">
                            </div>
                            <div class="item">
                                <img style="width:100%;height:320px" src="images/slide/slide5.jpg" alt="Informasi">
                            </div>
                            <div class="item">
                                <img style="width:100%;height:320px" src="images/slide/slide6.jpg" alt="Informasi">
                            </div>
                        </div>

                        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        <?php } ?>

        <div class="row">
            <div class="col-md-12">
                <h4 class="page-header home-info-title">Informasi Terbaru</h4>

                <?php while ($data = mysqli_fetch_assoc($query)) {
                    $isi = substr(strip_tags($data['isi']), 0, 280);
                    $id  = (int)$data['id_informasi'];
                ?>
                    <div class="row home-info-item">
                        <div class="col-md-5">
                            <a href="?page=detail&id=<?php echo $id; ?>">
                                <img class="img-responsive img-hover home-info-image"
                                     src="images/informasi/<?php echo htmlspecialchars($data['gambar']); ?>"
                                     alt="informasi">
                            </a>
                        </div>

                        <div class="col-md-7" style="text-align:justify">
                            <a href="?page=detail&id=<?php echo $id; ?>">
                                <h4><?php echo htmlspecialchars($data['judul']); ?></h4>
                            </a>

                            <p style="font-size:12px;color:#666">
                                <i class="fa fa-bookmark"></i> <?php echo htmlspecialchars($data['nama_kategori']); ?>
                            </p>

                            <?php echo htmlspecialchars($isi); ?>...
                            <a href="?page=detail&id=<?php echo $id; ?>">Baca selengkapnya</a>
                        </div>
                    </div>
                    <hr>
                <?php } ?>

                <!-- PAGINATION -->
                <div class="row text-center">
                    <div class="col-lg-12">
                        <ul class="pagination">

                            <!-- Prev -->
                            <?php if ($page <= 1) { ?>
                                <li class="disabled"><a href="javascript:void(0)">&laquo;</a></li>
                            <?php } else { ?>
                                <li><a href="?page=home&hal=<?php echo $page - 1; ?>">&laquo;</a></li>
                            <?php } ?>

                            <!-- Numbers -->
                            <?php for ($x = 1; $x <= $halaman; $x++) { ?>
                                <li class="<?php echo ($x === $page) ? 'active' : ''; ?>">
                                    <a href="?page=home&hal=<?php echo $x; ?>"><?php echo $x; ?></a>
                                </li>
                            <?php } ?>

                            <!-- Next -->
                            <?php if ($page >= $halaman) { ?>
                                <li class="disabled"><a href="javascript:void(0)">&raquo;</a></li>
                            <?php } else { ?>
                                <li><a href="?page=home&hal=<?php echo $page + 1; ?>">&raquo;</a></li>
                            <?php } ?>

                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <!-- SIDEBAR KANAN (selalu ada di kanan) -->
    <div class="col-md-4 col-sm-4 col-xs-12 home-sidebar">
        <?php include "sidebar-kanan.php"; ?>
    </div>
</div>
