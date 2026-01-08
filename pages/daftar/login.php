  <br><br><br><br>
  <div class="row">
      <div class="col-md-4 col-md-offset-4">

        <?php  
          // fungsi untuk menampilkan pesan
          // jika alert = "" (kosong)
          // tampilkan pesan "" (kosong) 
          if (empty($_GET['alert'])) {
            echo "";
          } 
          // jika alert = 1
          // tampilkan pesan Gagal "username atau password salah, cek kembali username dan password Anda"
          elseif ($_GET['alert'] == 1) { ?>
              <div class="alert alert-danger alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <strong><i class="glyphicon glyphicon-alert"></i> Gagal Login!</strong> username atau password salah, cek kembali username dan password Anda.
              </div>
          <?php
          } 
          // jika alert = 2
          // tampilkan pesan Sukses "pendaftaran Anda berhasil, silahkan login melalui menu Login"
          elseif ($_GET['alert'] == 2) { ?>
              <div class="alert alert-success alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                  <strong><i class="glyphicon glyphicon-ok-circle"></i> Sukses!</strong> pendaftaran Anda berhasil, silahkan login menggunakan email dan password Anda.
              </div>
          <?php
          } 
          ?>

          <div class="login-panel panel panel-default">
              <div class="panel-heading login-panel-heading">
                  <h3 class="panel-title">
                    <i style="margin-right:5px" class="glyphicon glyphicon-user"></i> 
                    Silahkan Login
                  </h3>
              </div>

              <div class="panel-body login-panel-body">
                <form role="form" method="POST" action="login-klien.php">

                  <div style="margin-top:10px" class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="email" autofocus autocomplete="off" required>
                  </div>

                  <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Password" required>
                  </div>

                  <input type="submit" class="btn btn-login btn-primary btn-block" name="login" value="Login">
                </form>
              </div>
          </div>

          <div class="form-group">
              <span>belum punya akun? <a href="?page=daftar">Daftar disini</a></span>
          </div>
      </div>
  </div>
