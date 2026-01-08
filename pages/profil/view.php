<?php  
// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['email_klien']) && empty($_SESSION['password_klien'])){
    echo "<script type='text/javascript'>alert('Anda harus login terlebih dahulu!');</script>
          <meta http-equiv='refresh' content='0; url=?page=home'>";
}
// jika user sudah login, maka jalankan perintah untuk ubah password
else {
 
    $query = mysqli_query($mysqli, "SELECT * FROM tbl_klien WHERE id_klien='$_SESSION[id_klien]'")
                                    or die('Ada kesalahan pada query tampil data klien: '.mysqli_error($mysqli));

    $data = mysqli_fetch_assoc($query);

    $id_klien      = $data['id_klien'];
    $nama_klien    = $data['nama_klien'];
    $tempat_lahir  = $data['tempat_lahir'];
    
    $tanggal       = $data['tanggal_lahir'];
    $tgl           = explode('-',$tanggal);
    $tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];
    
    $jenis_kelamin = $data['jenis_kelamin'];
    $alamat        = $data['alamat'];
    $telepon       = $data['telepon'];
    $pekerjaan     = $data['pekerjaan'];
    $email         = $data['email'];
?>
    <!-- Page Heading/Breadcrumbs -->
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-12">
                    <h3 class="page-header">
                        <i style="margin-right:6px" class="fa fa-user"></i>
                        Profil
                    </h3>
                    <ol class="breadcrumb">
                        <li><a href="?page=home">Beranda</a>
                        </li>
                        <li class="active">Profil</li>
                    </ol>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <?php  
                    // fungsi untuk menampilkan pesan
                    // jika alert = "" (kosong)
                    // tampilkan pesan "" (kosong) 
                    if (empty($_GET['alert'])) {
                      echo "";
                    } 
                    // jika alert = 1
                    // tampilkan pesan Sukses "NISN sudah terdaftar"
                    elseif ($_GET['alert'] == 1) { ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <strong><i class="glyphicon glyphicon-ok-circle"></i> Sukses!</strong> profil berhasil diubah.
                        </div>
                    <?php
                    } 
                    ?>

                    <div class="panel panel-default">
                        <div class="panel-body">
                              <!-- tampilan form hubungi kami -->
                            <form class="form-horizontal" method="POST" action="pages/profil/proses.php">
                                
                                <input type="hidden" name="id_klien" value="<?php echo $id_klien; ?>" required>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nama</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $nama_klien; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tempat, Tanggal Lahir</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" value="<?php echo $tempat_lahir; ?>" required>
                                    </div>  
                                    <div class="col-sm-3">
                                        <div class="input-group">
                                            <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir" autocomplete="off" value="<?php echo $tanggal_lahir; ?>" required>
                                            <span class="input-group-addon">
                                                <i class="glyphicon glyphicon-calendar"></i>
                                            </span>
                                        </div>
                                    </div>  
                                </div>
                                
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Jenis Kelamin</label>
                                    <div class="col-sm-7">
                                        <?php  
                                        if ($jenis_kelamin=='Laki-laki') { ?>
                                            <label class="radio-inline">
                                                <input type="radio" name="jenis_kelamin" value="Laki-laki" checked=""> Laki-laki
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                                            </label>
                                        <?php
                                        } else { ?>
                                            <label class="radio-inline">
                                                <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                                            </label>

                                            <label class="radio-inline">
                                                <input type="radio" name="jenis_kelamin" value="Perempuan" checked=""> Perempuan
                                            </label>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Alamat</label>
                                    <div class="col-sm-7">
                                        <textarea class="form-control" name="alamat" rows="3" required><?php echo $alamat; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">No. Telepon</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="telepon" autocomplete="off" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $telepon; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Pekerjaan</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" name="pekerjaan" autocomplete="off" value="<?php echo $pekerjaan; ?>" required>
                                    </div>
                                </div>

                                <hr>

                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control" name="email" autocomplete="off" value="<?php echo $email; ?>" required>
                                    </div>
                                </div>

                                <hr/>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <input type="submit" class="btn btn-primary btn-submit" name="simpan" value="Simpan Perubahan">
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
?>
