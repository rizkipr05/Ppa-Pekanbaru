<?php  
// fungsi untuk pengecekan tampilan form
// jika form detail yang dipilih
if ($_GET['form']=='detail') { ?>
 	<!-- tampilkan form add data -->
	<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="?module=beranda">Beranda</a>
			</li>

			<li>
				<a href="?module=konsultasi">Konsultasi</a>
			</li>

			<li class="active">Detail</li>
		</ul><!-- /.breadcrumb -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1 style="color:#585858">
				<i class="ace-icon fa fa-edit"></i>
				Konsultasi
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
			<?php
		    // fungsi query untuk menampilkan data dari tabel Konsultasi
		    $query = mysqli_query($mysqli, "SELECT a.id_konsultasi,a.tanggal,a.id_klien,a.id_konselor,a.id_jenis,a.pertanyaan,a.status,a.balas,
                                            b.nama_klien,b.email
                                            FROM tbl_konsultasi as a INNER JOIN tbl_klien as b
                                            ON a.id_klien=b.id_klien 
                                            WHERE a.id_konsultasi='$_GET[id]'")
		                                    or die('Ada kesalahan pada query tampil data konsultasi: '.mysqli_error($mysqli));

		    while ($data = mysqli_fetch_assoc($query)) { 
				$tgl         = substr($data['tanggal'],0,10);
				$exp         = explode('-',$tgl);
				$tanggal     = $exp[2]."-".$exp[1]."-".$exp[0];
				
				$jam         = substr($data['tanggal'],11,8);
				
				$id_klien    = $data['id_klien'];
				$id_konselor = $data['id_konselor'];
				$id_jenis    = $data['id_jenis'];
		    ?>
		    	<div class="timeline-item clearfix">
					<div style="margin-left:0" class="widget-box transparent">
						<div class="widget-header widget-header-small">
							<h5 class="widget-title smaller">
								<span href="?module=beranda" class="blue"><?php echo $data['nama_klien']; ?></span>
								<span class="grey">(<?php echo $data['email']; ?>)</span>
							</h5>

							<span class="widget-toolbar">
								<a href="#" data-action="collapse">
									<i class="ace-icon fa fa-chevron-up"></i>
								</a>
							</span>

							<span class="widget-toolbar">
								<span>
									<?php echo $tanggal; ?> <?php echo $jam; ?>
								</span>
							</span>
						</div>

						<div class="widget-body">
							<div class="widget-main">
								<p style="text-align:justify"><?php echo $data['pertanyaan']; ?></p>
							</div>
						</div>
					</div>
				</div>

				<?php  
		        // fungsi query untuk menampilkan data dari tabel Konsultasi
		        $query2 = mysqli_query($mysqli, "SELECT a.id_konsultasi,a.tanggal,a.id_klien,a.id_konselor,a.pertanyaan,a.jawaban,a.status,a.balas,
	                                            b.nama_klien,b.email,c.nama_konselor
	                                            FROM tbl_konsultasi as a INNER JOIN tbl_klien as b INNER JOIN tbl_konselor as c
	                                            ON a.id_klien=b.id_klien AND a.id_konselor=c.id_konselor
	                                            WHERE a.balas='$_GET[id]' ORDER BY a.id_konsultasi ASC")
		                                        or die('Ada kesalahan pada query tampil data Konsultasi: '.mysqli_error($mysqli));
		        $row = mysqli_num_rows($query2);
		        if ($row > 0) {
					while($data2         = mysqli_fetch_assoc($query2)) {
					
						$tgl2          = substr($data2['tanggal'],0,10);
						$exp           = explode('-',$tgl2);
						$tanggal2      = $exp[2]."-".$exp[1]."-".$exp[0];
						
						$jam           = substr($data2['tanggal'],11,8);
						
						$nama_klien    = $data2['nama_klien'];
						$email         = $data2['email'];
						$nama_konselor = $data2['nama_konselor'];
						$pertanyaan    = $data2['pertanyaan'];
						$jawaban       = $data2['jawaban'];

						if ($data2['jawaban']=='') { ?>
							<div class="timeline-item clearfix">
								<div style="margin-left:0" class="widget-box transparent">
									<div class="widget-header widget-header-small">
										<h5 class="widget-title smaller">
											<span href="?module=beranda" class="blue"><?php echo $nama_klien; ?></span>
											<span class="grey">(<?php echo $email; ?>)</span>
										</h5>

										<span class="widget-toolbar">
											<a href="#" data-action="collapse">
												<i class="ace-icon fa fa-chevron-up"></i>
											</a>
										</span>

										<span class="widget-toolbar">
											<span>
												<?php echo $tanggal; ?> <?php echo $jam; ?>
											</span>
										</span>
									</div>

									<div class="widget-body">
										<div class="widget-main">
											<p style="text-align:justify"><?php echo $pertanyaan; ?></p>
										</div>
									</div>
								</div>
							</div>
						<?php
						} elseif ($data2['pertanyaan']=='') { ?>
							<div class="timeline-item clearfix">
								<div style="margin-left:0" class="widget-box transparent">
									<div class="widget-header widget-header-small">
										<h5 class="widget-title smaller">
											<span href="?module=beranda" class="blue"><?php echo $nama_konselor; ?></span>
										</h5>

										<span class="widget-toolbar">
											<a href="#" data-action="collapse">
												<i class="ace-icon fa fa-chevron-up"></i>
											</a>
										</span>

										<span class="widget-toolbar">
											<span>
												<?php echo $tanggal; ?> <?php echo $jam; ?>
											</span>
										</span>
									</div>

									<div class="widget-body">
										<div class="widget-main">
											<p style="text-align:justify"><?php echo $jawaban; ?></p>
										</div>
									</div>
								</div>
							</div>
						<?php
						}
					}
        		}
			} 
    		?>
    			<hr>
				<!--PAGE CONTENT BEGINS-->
				<form class="form-horizontal" role="form" action="modules/konsultasi/proses.php?act=insert" method="POST" />
					
					<input type="hidden" name="id_konsultasi" value="<?php echo $_GET['id']; ?>" />
					<input type="hidden" name="id_klien" value="<?php echo $id_klien; ?>" />
					<input type="hidden" name="id_konselor" value="<?php echo $id_konselor; ?>" />
					<input type="hidden" name="id_jenis" value="<?php echo $id_jenis; ?>" />

					<div class="form-group">
						<div class="col-sm-12">
							<textarea class="form-control" name="jawaban" rows="10" placeholder="Jawaban" required></textarea>
						</div>
					</div>

					<div class="clearfix form-actions">
						<div class="col-md-offset-20 col-md-12">
							<input style="width:100px" type="submit" class="btn btn-primary" name="balas" value="Balas" />
							&nbsp; &nbsp; 
							<a style="width:100px" href="modules/konsultasi/proses.php?act=update_status&id=<?php echo $_GET['id']; ?>" class="btn">Kembali</a>
						</div>
					</div>
				</form>
				<!--PAGE CONTENT ENDS-->
			</div><!--/.span-->
		</div><!--/.row-fluid-->
	</div><!--/.page-content-->
<?php
}
?>