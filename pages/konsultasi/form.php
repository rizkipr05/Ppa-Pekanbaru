<?php  
// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['email_klien']) && empty($_SESSION['password_klien'])){
    echo "<script type='text/javascript'>alert('Anda harus login terlebih dahulu!');</script>
          <meta http-equiv='refresh' content='0; url=?page=home'>";
}
// jika user sudah login, maka jalankan perintah untuk ubah password
else { 
    // fungsi untuk pengecekan tampilan form
    // jika form add data yang dipilih
    if ($_GET['form']=='add') { ?>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            <i style="margin-right:6px" class="fa fa-edit"></i>
                            Konsultasi
                        </h3>
                        <ol class="breadcrumb">
                            <li>
                                <a href="?page=home">Beranda</a>
                            </li>
                            <li>
                                <a href="?page=konsultasi">Konsultasi</a>
                            </li>
                            <li class="active">Tanya</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                  <!-- tampilan form hubungi kami -->
                                <form class="form-horizontal" method="POST" action="pages/konsultasi/proses.php?act=insert">

                                    <div class="form-group">
                                        <label class="col-sm-12">Konselor</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" name="konselor" placeholder="Pilih Konselor" required>
                                                <option value=""></option>
                                                <?php
                                                $query1 = mysqli_query($mysqli, "SELECT id_konselor, nama_konselor FROM tbl_konselor")
                                                                                or die('Ada kesalahan pada query tampil konselor: '.mysqli_error($mysqli));

                                                while($data1 = mysqli_fetch_assoc($query1)) { ?>
                                                    <option value="<?php echo $data1['id_konselor']; ?>"><?php echo $data1['nama_konselor']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12">Jenis Konsultasi</label>
                                        <div class="col-sm-12">
                                            <select class="form-control" name="jenis" placeholder="Pilih Jenis Konsultasi" required>
                                                <option value=""></option>
                                                <?php
                                                $query2 = mysqli_query($mysqli, "SELECT * FROM tbl_jenis_konsultasi")
                                                                                or die('Ada kesalahan pada query tampil jenis: '.mysqli_error($mysqli));

                                                while($data2 = mysqli_fetch_assoc($query2)) { ?>
                                                    <option value="<?php echo $data2['id_jenis']; ?>"><?php echo $data2['nama_jenis']; ?></option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-sm-12">Pertanyaan</label>
                                        <div class="col-sm-12">
                                            <textarea class="form-control" name="pertanyaan" rows="5" required></textarea>
                                        </div>
                                    </div>

                                    <hr/>
                                    <div class="form-group">
                                        <div class="col-sm-offset-0 col-sm-12">
                                            <input style="width:100px" type="submit" class="btn btn-primary btn-submit" name="kirim" value="Kirim">
                                            &nbsp; &nbsp;
                                            <a style="width:100px" href="?page=konsultasi" class="btn btn-default btn-reset">Batal</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
<?php
    }
    elseif ($_GET['form']=='detail') { ?>
        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 class="page-header">
                            <i style="margin-right:6px" class="fa fa-edit"></i>
                            Konsultasi
                        </h3>
                        <ol class="breadcrumb">
                            <li>
                                <a href="?page=home">Beranda</a>
                            </li>
                            <li>
                                <a href="?page=konsultasi">Konsultasi</a>
                            </li>
                            <li class="active">Detail</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                    <?php
                    // fungsi query untuk menampilkan data dari tabel diskusi
                    $query = mysqli_query($mysqli, "SELECT a.id_konsultasi,a.tanggal,a.id_klien,a.id_konselor,a.id_jenis,a.pertanyaan,a.status,a.balas,
                                                    b.nama_klien,b.email
                                                    FROM tbl_konsultasi as a INNER JOIN tbl_klien as b
                                                    ON a.id_klien=b.id_klien 
                                                    WHERE a.id_konsultasi='$_GET[id]'")
                                                    or die('Ada kesalahan pada query tampil data konsultasi: '.mysqli_error($mysqli));

                    while ($data = mysqli_fetch_assoc($query)) { 
                        $tgl         = substr($data['tanggal'],0,10);
                        $exp         = explode('-',$tgl);
                        $tanggal     = $exp[2]."-".$exp[1]."-".$exp[0];

                        $id_klien    = $data['id_klien'];
                        $id_konselor = $data['id_konselor'];
                        $id_jenis    = $data['id_jenis'];
                    ?>
                        <div class="media">
                            <div class="media-left">
                                <h1 style="border:1px solid #ddd;border-radius:100%;padding:11px 15px;" class="media-heading"><i class="fa fa-user"></i></h1>
                                <small><?php echo $tanggal; ?></small>
                            </div>

                            <div class="media-body">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <h4 class="media-heading"><?php echo $data['nama_klien']; ?></h4>
                                        <p><?php echo $data['pertanyaan']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php  
                        // fungsi query untuk menampilkan data dari tabel diskusi
                        $query2 = mysqli_query($mysqli, "SELECT a.id_konsultasi,a.tanggal,a.id_klien,a.id_konselor,a.pertanyaan,a.jawaban,a.status,a.balas,
                                                        b.nama_klien,c.nama_konselor,c.email
                                                        FROM tbl_konsultasi as a INNER JOIN tbl_klien as b INNER JOIN tbl_konselor as c
                                                        ON a.id_klien=b.id_klien AND a.id_konselor=c.id_konselor
                                                        WHERE a.balas='$_GET[id]' ORDER BY a.id_konsultasi ASC")
                                                        or die('Ada kesalahan pada query tampil data Konsultasi: '.mysqli_error($mysqli));
                        $row = mysqli_num_rows($query2);
                        if ($row > 0) {
                            while($data2 = mysqli_fetch_assoc($query2)) {

                                $tgl2          = substr($data2['tanggal'],0,10);
                                $exp           = explode('-',$tgl2);
                                $tanggal2      = $exp[2]."-".$exp[1]."-".$exp[0];
                                
                                $jam           = substr($data2['tanggal'],11,8);
                                
                                $nama_klien    = $data2['nama_klien'];
                                $nama_konselor = $data2['nama_konselor'];
                                $email         = $data2['email'];
                                $pertanyaan    = $data2['pertanyaan'];
                                $jawaban       = $data2['jawaban'];

                                if ($data2['jawaban']=='') { ?>
                                    <div style="margin-left: 80px" class="media">
                                        <div class="media-left">
                                            <h1 style="border:1px solid #ddd;border-radius:100%;padding:11px 15px;" class="media-heading"><i class="fa fa-user"></i></h1>
                                            <small><?php echo $tanggal2; ?></small>
                                        </div>

                                        <div class="media-body">
                                            <div class="panel panel-default">
                                                <div class="panel-body">
                                                    <h4 class="media-heading"><?php echo $nama_klien; ?></h4>
                                                    <p><?php echo $pertanyaan; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php
                                } elseif ($data2['pertanyaan']=='') { ?>
                                <div style="margin-left: 80px" class="media">
                                    <div class="media-left">
                                        <h1 style="border:1px solid #ddd;border-radius:100%;padding:11px 15px;" class="media-heading"><i class="fa fa-user"></i></h1>
                                        <small><?php echo $tanggal2; ?></small>
                                    </div>

                                    <div class="media-body">
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <h4 class="media-heading"><?php echo $nama_konselor; ?> <small>(<?php echo $email; ?>)</small></h4>
                                                <p><?php echo $jawaban; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <?php
                                }
                            }
                        }
                    } 
                    ?>
                    </div>
                </div>
                
                <br><hr>

                <div class="row">
                    <div class="col-lg-12">
                        <form action="pages/konsultasi/proses.php?act=reply" method="POST">
                            
                            <input type="hidden" name="id_konsultasi" value="<?php echo $_GET['id']; ?>" />
                            <input type="hidden" name="id_klien" value="<?php echo $id_klien; ?>" />
                            <input type="hidden" name="id_konselor" value="<?php echo $id_konselor; ?>" />
                            <input type="hidden" name="id_jenis" value="<?php echo $id_jenis; ?>" />
                            <input type="hidden" name="jawaban" value="<?php echo $_GET['jawaban']; ?>" />

                            <div class="form-group">
                                <textarea class="form-control" name="pertanyaan" rows="5" placeholder="Pertanyaan" required></textarea>
                            </div>

                            <input style="width:100px" type="submit" class="btn btn-primary" name="kirim" value="Kirim" />
                            &nbsp; &nbsp;
                            <a style="width:100px" href="pages/konsultasi/proses.php?act=update_status&id=<?php echo $_GET['id']; ?>&jawaban=<?php echo $_GET['jawaban']; ?>" class="btn btn-default btn-reset">Kembali</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
<?php
    }
}
?>
