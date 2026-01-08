<?php  
// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['email_klien']) && empty($_SESSION['password_klien'])){
    echo "<script type='text/javascript'>alert('Anda harus login terlebih dahulu!');</script>
          <meta http-equiv='refresh' content='0; url=?page=home'>";
}
// jika user sudah login, maka jalankan perintah untuk ubah password
else { ?>
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
                        <li><a href="?page=home">Beranda</a>
                        </li>
                        <li class="active">Konsultasi</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <a class="btn btn-primary" href="?page=form_konsultasi&form=add">
                        <i class="glyphicon glyphicon-plus"></i> Tanya
                    </a>
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-md-12">
                    <?php  
                    // fungsi untuk menampilkan pesan
                    // jika alert = "" (kosong)
                    // tampilkan pesan "" (kosong) 
                    if (empty($_GET['alert'])) {
                      echo "";
                    } 
                    // jika alert = 1
                    // tampilkan pesan Gagal "email sudah terdaftar"
                    elseif ($_GET['alert'] == 1) { ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong><i class="glyphicon glyphicon-ok-circle"></i> Sukses!</strong> pertanyaan Anda berhasil dikirim. Silahkan menunggu jawaban dari konselor.
                        </div>
                    <?php
                    } 
                    ?>

                    <div class="panel panel-default">
                        <div class="panel-body">
                            <!-- <div class="table-responsive"> -->
                            <table class="table table-striped table-hover" id="dataTables-example">
                                <thead>
                                    <tr > 
                                        <th>No.</th>
                                        <th>Pertanyaan</th>
                                        <th>Konselor</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>   

                                <tbody>
                                <?php
                                $no = 1;
                                $query = mysqli_query($mysqli, "SELECT a.id_konsultasi,a.tanggal,a.id_klien,a.id_konselor,a.pertanyaan,a.balas,
                                                                b.nama_konselor
                                                                FROM tbl_konsultasi as a INNER JOIN tbl_konselor as b
                                                                ON a.id_konselor=b.id_konselor
                                                                WHERE a.id_klien='$_SESSION[id_klien]' AND a.balas='0'
                                                                ORDER BY a.id_konsultasi DESC")
                                                                or die('Ada kesalahan pada query konsultasi: '.mysqli_error($mysqli));
                          
                                while ($data = mysqli_fetch_assoc($query)) { 
                                    $tgl     = substr($data['tanggal'],0,10);
                                    $exp     = explode('-',$tgl);
                                    $tanggal = $exp[2]."-".$exp[1]."-".$exp[0];

                                    $query1 = mysqli_query($mysqli, "SELECT id_konsultasi,id_klien,jawaban,status,balas
                                                                    FROM tbl_konsultasi
                                                                    WHERE id_klien='$_SESSION[id_klien]' AND balas='$data[id_konsultasi]' AND status='n' AND jawaban!=''")
                                                                    or die('Ada kesalahan pada query status: '.mysqli_error($mysqli));
                          
                                    $row = mysqli_num_rows($query1);
                                    if ($row > 0) {
                                        $data1 = mysqli_fetch_assoc($query1);

                                        $warna = '#fcf8e3';
                                    } else {
                                        $warna = '#fff';
                                    }
                                ?>
                                    <tr style="background:<?php echo $warna; ?>">
                                        <td width='20'><?php echo $no; ?></td>
                                        <td width='350'>
                                            <a style="text-decoration:none;color:#585858" href="?page=form_konsultasi&form=detail&id=<?php echo $data['id_konsultasi']; ?>&jawaban=<?php echo $data1['id_konsultasi']; ?>">
                                                <?php echo $data['pertanyaan']; ?>
                                            </a>
                                        </td>
                                        <td width='150'><?php echo $data['nama_konselor']; ?></td>
                                        <td width='50'><?php echo $tanggal; ?></td>
                                    </tr>
                                <?php
                                    $no++;
                                }
                                ?>
                                </tbody>           
                            </table>
                            <!-- </div> -->
                        </div>
                    </div> <!-- /.panel -->
                </div> <!-- /.col -->
            </div> <!-- /.row -->
        </div>
    </div>
    <!-- /.row -->
<?php
}
?>

