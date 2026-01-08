<?php  
$kata_kunci = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['cari'])))));
?>
<div class="row">
    <div class="col-lg-8">
        <br>
        <h4 class="page-header">
            Hasil Pencarian "<?php echo $kata_kunci; ?>"
        </h4>
        <!-- Content -->
        <?php  
        $query = mysqli_query($mysqli, "SELECT * FROM tbl_informasi as a INNER JOIN tbl_kategori as b
										ON a.id_kategori=b.id_kategori
										WHERE judul LIKE '%$kata_kunci%'
                                        ORDER BY id_informasi DESC")
                                        or die('Ada kesalahan pada query tampil data informasi : '.mysqli_error($mysqli));

        while($data = mysqli_fetch_assoc($query)) { 
            $isi = substr($data['isi'],0,260);
        ?>
            <div class="row">
                <div class="col-md-5">
                    <a href="?page=detail&id=<?php echo $data['id_informasi']; ?>">
                        <img class="img-responsive img-hover" src="images/informasi/<?php echo $data['gambar']; ?>" width="300" alt="informasi">
                    </a>
                </div>
                <div style="text-align:justify" class="col-md-7">
                    <a href="?page=detail&id=<?php echo $data['id_informasi']; ?>">
                        <h4><?php echo $data['judul']; ?></h4>
                    </a>
                    <p style="font-size:12px;color:#666">
                        <i class="fa fa-bookmark"></i> <?php echo $data['nama_kategori']; ?>
                    </p>
                    <?php echo $isi; ?> ..... <a href="?page=detail&id=<?php echo $data['id_informasi']; ?>"></a>
                    
                </div>
                <br>
            </div>
            <hr>
        <?php
        }
        ?>
    </div>

    <div class="col-md-4">
         
        <!-- panggil file "sidebar-kanan.php" untuk menampilkan menu -->
        <?php include "sidebar-kanan.php" ?>

    </div>
</div>
<!-- /.row -->
