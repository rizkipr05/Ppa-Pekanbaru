<?php  
$query = mysqli_query($mysqli, "SELECT * FROM tbl_informasi as a INNER JOIN tbl_kategori as b
								ON a.id_kategori=b.id_kategori
                                WHERE a.id_informasi='$_GET[id]'")
                                or die('Ada kesalahan pada query tampil data informasi : '.mysqli_error($mysqli));

$data = mysqli_fetch_assoc($query);
?>
<!-- Page Heading/Breadcrumbs -->
<div class="row">
    <div class="col-lg-8">
        <div class="row">
            <div class="col-lg-12">
                <br>
                <h3 class="page-header">
                    <?php echo $data['judul']; ?>
                </h3>
                <p style="font-size:12px;color:#666">
                    <i class="fa fa-bookmark"></i> <?php echo $data['nama_kategori']; ?>
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div style="text-align:justify"> 
                    
                    <p><?php echo $data['isi']; ?></p>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>

    <div class="col-md-4">
         
        <!-- panggil file "sidebar-kanan.php" untuk menampilkan menu -->
        <?php include "sidebar-kanan.php" ?>

    </div>
</div>
<!-- /.row -->
