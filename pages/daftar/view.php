<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="page-header">
                    <i style="margin-right:6px" class="fa fa-user"></i>
                    Pendaftaran Klien Baru
                </h3>
                <ol class="breadcrumb">
                    <li><a href="?page=home">Beranda</a>
                    </li>
                    <li class="active">Daftar</li>
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
                // tampilkan pesan Gagal "email sudah terdaftar"
                elseif ($_GET['alert'] == 1) { ?>
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong><i class="glyphicon glyphicon-alert"></i> Gagal!</strong> email sudah terdaftar.
                    </div>
                <?php
                } 
                ?>

                <div class="panel panel-default">
                    <div class="panel-body">
                          <!-- tampilan form hubungi kami -->
                        <form class="form-horizontal" method="POST" action="pages/daftar/proses.php">

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nama</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="nama" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Tempat, Tanggal Lahir</label>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" name="tempat_lahir" autocomplete="off" required>
                                </div>  
                                <div class="col-sm-3">
                                    <div class="input-group">
                                        <input type="text" class="form-control date-picker" data-date-format="dd-mm-yyyy" name="tanggal_lahir" autocomplete="off" required>
                                        <span class="input-group-addon">
                                            <i class="glyphicon glyphicon-calendar"></i>
                                        </span>
                                    </div>
                                </div>  
                            </div>
                            
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Jenis Kelamin</label>
                                <div class="col-sm-7">
                                    <label class="radio-inline">
                                        <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                                    </label>

                                    <label class="radio-inline">
                                        <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Alamat</label>
                                <div class="col-sm-7">
                                    <textarea class="form-control" name="alamat" rows="3" required></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">No. Telepon</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="telepon" autocomplete="off" maxlength="13" onKeyPress="return goodchars(event,'0123456789',this)" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Pekerjaan</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" name="pekerjaan" autocomplete="off" required>
                                </div>
                            </div>

                            <hr>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" name="email" autocomplete="off" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-7">
                                    <input type="password" class="form-control" name="password" autocomplete="off" required>
                                </div>
                            </div>

                            <hr/>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <input style="width:150px" type="submit" class="btn btn-primary btn-lg btn-submit" name="daftar" value="Daftar">
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
