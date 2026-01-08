<?php  
$query_kategori = mysqli_query($mysqli, "SELECT * FROM tbl_kategori WHERE id_kategori='$_GET[id]'")
										or die('Ada kesalahan pada query tampil data kategori : '.mysqli_error($mysqli));

$data_kategori = mysqli_fetch_assoc($query_kategori);
?>

<div class="row">
    <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
        <div class="row">
            <div class="col-md-12">
                <br>
                <h4 class="page-header">
                    Informasi "<?php echo $data_kategori['nama_kategori']; ?>"
                </h4>

                <?php  
                /* Pagination */
                $batas = 6;

                $jumlah_record = mysqli_query($mysqli, "SELECT * FROM tbl_informasi WHERE id_kategori='$data_kategori[id_kategori]'")
                                                        or die('Ada kesalahan pada query jumlah_record: '.mysqli_error($mysqli));

                $jumlah  = mysqli_num_rows($jumlah_record);
                $halaman = ceil($jumlah / $batas);
                $page    = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
                $mulai   = ($page - 1) * $batas;
                /*-------------------------------------------------------------------*/

                $query = mysqli_query($mysqli, "SELECT * FROM tbl_informasi as a INNER JOIN tbl_kategori as b 
												ON a.id_kategori=b.id_kategori
												WHERE a.id_kategori='$data_kategori[id_kategori]'
                                                ORDER BY a.id_informasi DESC LIMIT $mulai, $batas")
                                                or die('Ada kesalahan pada query tampil data informasi : '.mysqli_error($mysqli));

                while($data = mysqli_fetch_assoc($query)) { 
                    $isi = substr($data['isi'],0,260);
                ?>
                    <div class="row">
                        <div class="col-md-5">
                            <a href="?page=detail&id=<?php echo $data['id_informasi']; ?>">
                                <img style="height:200px;width:300px"class="img-responsive img-hover" src="images/informasi/<?php echo $data['gambar']; ?>" alt="informasi">
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

                if (empty($_GET['hal'])) {
                  $halaman_aktif = '1';
                } else {
                  $halaman_aktif = $_GET['hal'];
                }
                ?>

                <br/>
                <!-- Pagination -->
                <div class="row text-center">
                    <div class="col-lg-12">
                        <ul class="pagination">
                        <!-- Button untuk halaman sebelumnya -->
                        <?php 
                        if ($halaman_aktif<='1') { ?>
                            <li class="disabled"> 
                                <a href="">&laquo;</a>
                            </li>
                        <?php
                        } else { ?>
                            <li> 
                                <a href="?page=<?php echo $ktg; ?>&hal=<?php echo $page -1 ?>">&laquo;</a>
                            </li>
                        <?php
                        }
                        ?>

                        <!-- Link halaman 1 2 3 ... -->
                        <?php 
                        for($x=1; $x<=$halaman; $x++) { ?>
                            <li class="">
                                <a href="?page=<?php echo $ktg; ?>&hal=<?php echo $x ?>"><?php echo $x ?></a>
                            </li>
                        <?php
                        }
                        ?>
                        
                        <!-- Button untuk halaman selanjutnya -->
                        <?php 
                        if ($halaman_aktif>=$halaman) { ?>
                            <li class="disabled">
                                <a href="">&raquo;</a>
                            </li>
                        <?php
                        } else { ?>
                            <li>
                                <a href="?page=<?php echo $ktg; ?>&hal=<?php echo $page +1 ?>">&raquo;</a>
                            </li>
                        <?php
                        }
                        ?>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-4 col-lg-4 col-xs-12">
        <!-- panggil file "sidebar-kanan.php" untuk menampilkan menu -->
        <?php include "sidebar-kanan.php" ?>
    </div>  
</div>
