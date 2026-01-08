<ul class="nav navbar-nav navbar-right">
<?php   
// fungsi untuk pengecekan menu aktif
// jika menu home dipilih, menu home aktif
if ($_GET["page"]=="home") {
echo '  <li class="active">
            <a href="?page=home"> Beranda </a>
        </li>';
}
// jika tidak, menu home tidak aktif
else {
echo '  <li>
            <a href="?page=home"> Beranda </a>
        </li>';
}   

// jika menu tentang dipilih, menu tentang aktif
if ($_GET["page"]=="tentang") {
echo '  <li class="active">
            <a href="?page=tentang"> Tentang Kami </a>
        </li>';
}
// jika tidak, menu tentang tidak aktif
else {
echo '  <li>
            <a href="?page=tentang"> Tentang Kami </a>
        </li>';
}

// jika menu konselor dipilih, menu konselor aktif
if ($_GET["page"]=="konselor") {
echo '  <li class="active">
            <a href="?page=konselor"> Konselor </a>
        </li>';
}
// jika tidak, menu konselor tidak aktif
else {
echo '  <li>
            <a href="?page=konselor"> Konselor </a>
        </li>';
}       

// jika menu diskusi dipilih, menu diskusi aktif
if ($_GET["page"]=="diskusi") {
echo '  <li class="active">
            <a href="?page=diskusi"> Diskusi </a>
        </li>';
}
// jika tidak, menu diskusi tidak aktif
else {
echo '  <li>
            <a href="?page=diskusi"> Diskusi </a>
        </li>';
} 

// jika menu kontak dipilih, menu kontak aktif
if ($_GET["page"]=="kontak") {
echo '  <li class="active">
            <a href="?page=kontak"> Kontak </a>
        </li>';
}
// jika tidak, menu kontak tidak aktif
else {
echo '  <li>
            <a href="?page=kontak"> Kontak </a>
        </li>';
}
          
// jika user belum login
if (!empty($_SESSION['email_klien']) && !empty($_SESSION['password_klien'])) { 
    // jika menu konsultasi dipilih, menu konsultasi aktif
    if ($_GET["page"]=="konsultasi") { ?>
        <li class="dropdown active">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i> <?php echo $_SESSION['nama_klien']; ?> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li class="active">
                    <a href="?page=konsultasi"><i class="fa fa-caret-right"></i> Konsultasi</a>
                </li>

                <li role="separator" class="divider"></li>

                <li>
                    <a href="?page=profil"><i class="fa fa-caret-right"></i> Profil</a>
                </li>

                <li role="separator" class="divider"></li>

                <li>
                    <a href="?page=password"><i class="fa fa-caret-right"></i> Ubah Password</a>
                </li>

                <li role="separator" class="divider"></li>

                <li>
                    <a href="logout.php"><i class="fa fa-caret-right"></i> Logout</a>
                </li>
            </ul>
        </li>
    <?php
    }
    // jika menu profil dipilih, menu profil aktif
    elseif ($_GET["page"]=="profil") { ?>
        <li class="dropdown active">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i> <?php echo $_SESSION['nama_klien']; ?> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="?page=konsultasi"><i class="fa fa-caret-right"></i> Konsultasi</a>
                </li>

                <li role="separator" class="divider"></li>

                <li class="active">
                    <a href="?page=profil"><i class="fa fa-caret-right"></i> Profil</a>
                </li>

                <li role="separator" class="divider"></li>

                <li>
                    <a href="?page=password"><i class="fa fa-caret-right"></i> Ubah Password</a>
                </li>

                <li role="separator" class="divider"></li>

                <li>
                    <a href="logout.php"><i class="fa fa-caret-right"></i> Logout</a>
                </li>
            </ul>
        </li>
    <?php
    }
    // jika menu password dipilih, menu password aktif
    elseif ($_GET["page"]=="password") { ?>
        <li class="dropdown active">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i> <?php echo $_SESSION['nama_klien']; ?> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="?page=konsultasi"><i class="fa fa-caret-right"></i> Konsultasi</a>
                </li>

                <li role="separator" class="divider"></li>

                <li>
                    <a href="?page=profil"><i class="fa fa-caret-right"></i> Profil</a>
                </li>

                <li role="separator" class="divider"></li>

                <li class="active">
                    <a href="?page=password"><i class="fa fa-caret-right"></i> Ubah Password</a>
                </li>

                <li role="separator" class="divider"></li>

                <li>
                    <a href="logout.php"><i class="fa fa-caret-right"></i> Logout</a>
                </li>
            </ul>
        </li>
    <?php
    }
    else { ?>
        <li class="dropdown">
            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-user"></i> <?php echo $_SESSION['nama_klien']; ?> <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="?page=konsultasi"><i class="fa fa-caret-right"></i> Konsultasi</a>
                </li>

                <li role="separator" class="divider"></li>

                <li>
                    <a href="?page=profil"><i class="fa fa-caret-right"></i> Profil</a>
                </li>

                <li role="separator" class="divider"></li>

                <li>
                    <a href="?page=password"><i class="fa fa-caret-right"></i> Ubah Password</a>
                </li>

                <li role="separator" class="divider"></li>

                <li>
                    <a href="logout.php"><i class="fa fa-caret-right"></i> Logout</a>
                </li>
            </ul>
        </li>
    <?php
    }

// jika user sudah login
} else { ?>
    <li class="dropdown">
        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
              Login
        </a>
        <ul style="padding:30px 20px 10px 20px;min-width:350px" class="dropdown-menu">
            <li>
              <form class="" method="POST" action="login-check.php">
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" placeholder="Email" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Password" autocomplete="off" required>
                    </div>

                    <div style="margin-bottom:25px"></div>

                    <div style="margin-bottom:25px"></div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary btn-block" name="login" value="Login">
                    </div>

                    <div class="form-group">
                        <span>belum punya akun? <a href="?page=daftar">Daftar disini</a></span>
                    </div>
                </form>
            </li>
        </ul>
    </li>
<?php
} 
?>          
</ul>
