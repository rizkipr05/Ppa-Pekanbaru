<?php  
if (empty($_GET['hal'])) { 
	if (!empty($_SESSION['email_klien']) && !empty($_SESSION['password_klien'])) {
		echo "<br>";
	} else { ?>
		<div class="row">
		    <div style="margin-top:10px" class="col-lg-12">
		        <h2 class="page-header">
		            Kasus-kasus kriminalitas yang melibatkan perempuan dan anak-anak bukan sekadar urusan profesional. Dalam sejumlah kasus,kerap terlibat secara emosional.?
		        </h2>
		    </div>
		    <div class="col-md-8">
		        <p style="text-align:justify">Segera daftarkan diri Anda untuk mendapatkan langsung pelayanan konsultasi seputar memberi pelayanan berbentuk perlindungan terhadap perempuan dan anak yang menjadi korban kejahatan dan dan penegakan hukum terhadap pelakunya secara online dengan para konselor - konselor (Psikolog), lembaga bantuan hukum, profesional, dokter dari berbagai bidang yang terkait masalah hukum yang melibatkan perempuan dan anak yang telah kami siapkan untuk membantu Anda!</p>
			</div>
		        <div class="col-md-4">
		        <a href="?page=daftar">
					<input style="width:300px" type="submit" class="btn btn-primary btn-daftar" name="daftar" value="Klik Daftar!" />
				</a>
		    </div>
		</div>

		<hr>
	<?php
	}
}
?>

<div class="row">
    <div class="col-md-8 col-sm-8 col-lg-8 col-xs-12">
		<?php  
		if (empty($_GET['hal'])) { ?>
		    <div class="row">
		    	<div class="col-md-12">
					<div style="margin-top:25px" id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
					    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
					    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
						<li data-target="#carousel-example-generic" data-slide-to="4"></li>
						<li data-target="#carousel-example-generic" data-slide-to="5"></li>
						<li data-target="#carousel-example-generic" data-slide-to="5"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
					    <div class="item active">
					      <img style="width:100%;height:320px" src="images/slide/slide1.jpg" alt="Informasi">
					      <div class="carousel-caption">
					      </div>
					    </div>
					    <div class="item">
					      <img style="width:100%;height:320px" src="images/slide/slide2.jpg" alt="Informasi">
					      <div class="carousel-caption">
					      </div>
					    </div>
					    <div class="item">
					      <img style="width:100%;height:320px" src="images/slide/slide3.jpg" alt="Informasi">
					      <div class="carousel-caption">
					      </div>
					    </div>
					    <div class="item">
					      <img style="width:100%;height:320px" src="images/slide/slide4.jpg" alt="Informasi">
					      <div class="carousel-caption">
					      </div>
					    </div>
						<div class="item">
					      <img style="width:100%;height:320px" src="images/slide/slide5.jpg" alt="Informasi">
					      <div class="carousel-caption">
					      </div>
					    </div>
						<div class="item">
					      <img style="width:100%;height:320px" src="images/slide/slide6.jpg" alt="Informasi">
					      <div class="carousel-caption">
					      </div>
					    </div>
					  </div>

					  <!-- Controls -->
					  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
					    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
					    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
		    	</div>
		    </div>
	    <?php
		}
		?>

	    <div class="row">
	    	<div class="col-md-12">
				<h4 class="page-header">
		            Informasi Terbaru
		        </h4>

			    <?php  
                /* Pagination */
                $batas = 5;

                $jumlah_record = mysqli_query($mysqli, "SELECT * FROM tbl_informasi")
                                                        or die('Ada kesalahan pada query jumlah_record: '.mysqli_error($mysqli));

                $jumlah  = mysqli_num_rows($jumlah_record);
                $halaman = ceil($jumlah / $batas);
                $page    = (isset($_GET['hal'])) ? (int)$_GET['hal'] : 1;
                $mulai   = ($page - 1) * $batas;
                /*-------------------------------------------------------------------*/

			    $query = mysqli_query($mysqli, "SELECT * FROM tbl_informasi as a INNER JOIN tbl_kategori as b
												ON a.id_kategori=b.id_kategori
			    								ORDER BY a.id_informasi DESC LIMIT $mulai, $batas")
			                        			or die('Ada kesalahan pada query tampil data informasi : '.mysqli_error($mysqli));

			    while($data = mysqli_fetch_assoc($query)) { 
			    	$isi = substr($data['isi'],0,280);
			    ?>
			        <div class="row">
			            <div class="col-md-5">
			                <a href="?page=detail&id=<?php echo $data['id_informasi']; ?>">
			                    <img style="height:200px;width:300px" class="img-responsive img-hover" src="images/informasi/<?php echo $data['gambar']; ?>" alt="informasi">
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
                                <a href="?page=home&hal=<?php echo $page -1 ?>">&laquo;</a>
                            </li>
                        <?php
                        }
                        ?>

                        <!-- Link halaman 1 2 3 ... -->
                        <?php 
                        for($x=1; $x<=$halaman; $x++) { ?>
                            <li class="">
                                <a href="?page=home&hal=<?php echo $x ?>"><?php echo $x ?></a>
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
                                <a href="?page=home&hal=<?php echo $page +1 ?>">&raquo;</a>
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
