    <?php  
    if ($_GET['page']=='home') {
        $margin = '25px';
    } else {
        $margin = '45px';
    }
    ?>

    <?php  
    if ($_GET['page']=='home') { 
        if (empty($_GET['hal'])) { ?>

            <div style="margin-top:25px" class="">
                <div class="">
                    <form action="?page=cari" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" name="cari" placeholder="cari informasi...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

        <hr>
        <?php
        }
    }
    ?>

    <?php  
    if (!empty($_SESSION['email_klien']) && !empty($_SESSION['password_klien'])) { ?>
        <div style="margin-top:<?php echo $margin; ?>" class="panel panel-default">
            <div class="panel-body">
                <p style="font-size:17px;border-bottom: 1px solid #ccc;width:100px">Konsultasi</p>
                
                <a class="btn btn-primary" href="?page=form_konsultasi&form=add">Tanya Disini</a>
                
                <img style="margin-top:-40px;margin-left:50px" src="assets/img/tanya-dokter.png">
                
            </div>
        </div>
    <?php
    } else { ?>
        <div style="margin-top:<?php echo $margin; ?>" class="panel panel-default">
            <div class="panel-body">
                <p style="font-size:17px;border-bottom: 1px solid #ccc;width:100px">Konsultasi</p>
                
                <a class="btn btn-primary" href="?page=login">Tanya Disini</a>
                
                <img style="margin-top:-40px;margin-left:50px" src="assets/img/tanya-dokter.png">
                
            </div>
        </div>
    <?php
    }
    ?>
    
    <div style="margin-top:25px" class="panel panel-default">
        <div class="panel-body">
            <p style="font-size:17px;border-bottom: 1px solid #ccc;width:100px">Layanan Cepat</p>
                
            <a class="btn btn-primary" href="tel:110">Hubungi</a>
                
            <img style="margin-top:-40px;margin-left:50px" src="assets/img/110.gif">
                
        </div>
        <div class="panel-body">
            <p style="margin-bottom:5px;font-size:17px;border-bottom:2px solid #eee;padding-bottom:5px">Topik</p>

        <?php  
        $query = mysqli_query($mysqli, "SELECT * FROM tbl_kategori ORDER BY nama_kategori ASC")
                            or die('Ada kesalahan pada query tampil data kategori : '.mysqli_error($mysqli));

        while($data = mysqli_fetch_assoc($query)) {
        ?>
            <div class="media">
                <div class="media-body">
                    <i class="fa fa-angle-double-right"></i>
                    <a class="media-heading" href="?page=kategori&id=<?php echo $data['id_kategori']; ?>"><?php echo $data['nama_kategori']; ?></a>
                </div>
            </div>
            <div style="border-bottom:1px dotted #eee;padding-bottom:5px"></div>
        <?php
        }
        ?>
        </div>
    </div>

    <div style="margin-top:25px" class="panel panel-default">
        <div class="panel-body">
            <p style="margin-bottom:5px;font-size:17px;border-bottom:2px solid #eee;padding-bottom:5px">Informasi</p>

        <?php  
        $query = mysqli_query($mysqli, "SELECT * FROM tbl_informasi ORDER BY RAND() DESC LIMIT 6")
                            or die('Ada kesalahan pada query tampil data berita kesehatan : '.mysqli_error($mysqli));

        while($data = mysqli_fetch_assoc($query)) {
        ?>
            <div class="media">
                <div class="media-left">
                    <a href="?page=detail&id=<?php echo $data['id_informasi']; ?>">
                        <img style="height:65px;width:100px" style="margin-top: 5px" class="media-object" src="images/informasi/<?php echo $data['gambar']; ?>" alt="Berita Kesehatan">
                    </a>
                </div>
                <div class="media-body">
                    <a class="media-heading" href="?page=detail&id=<?php echo $data['id_informasi']; ?>"><?php echo $data['judul']; ?></a>
                </div>
            </div>
            <div style="border-bottom:1px dotted #eee;padding-bottom:15px"></div>
        <?php
        }
        ?>
        </div>
    </div>