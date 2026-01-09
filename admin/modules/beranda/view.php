<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
	<ul class="breadcrumb">
		<li class="active">
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="?module=beranda">Beranda</a>		</li>
	</ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
	<div class="page-header">
		<h1>
		  Unit Perlindungan Perempuan dan Anak (PPA) POLRESTA Pekanbaru</h1>
  </div>
	<!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<div class="alert alert-block alert-info">
				<button type="button" class="close" data-dismiss="alert">
					<i class="ace-icon fa fa-times"></i>				</button>
				<i class="ace-icon fa fa-user blue"></i>
				Selamat datang
				<strong class="blue"><?php echo $_SESSION['nama_user']; ?></strong>.			</div>

			<?php  
			if ($_SESSION['hak_akses']=='konselor') {
				$query = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah FROM tbl_konsultasi 
                                        WHERE id_konselor='$_SESSION[id_user]' AND status='n' AND pertanyaan!=''")
                                        or die('Ada kesalahan pada query tampil data pesan: '.mysqli_error($mysqli));

        		$data = mysqli_fetch_assoc($query);

				$pertanyaan_baru = $data['jumlah'];

	            if ($pertanyaan_baru > 0) { ?>
		            <div style="margin-top:10px" class="alert alert-block alert-info">
						<button type="button" class="close" data-dismiss="alert">
							<i class="ace-icon fa fa-times"></i>						</button>
						<a href="?module=konsultasi">
							<i class="ace-icon fa fa-info-circle blue"></i>
							Anda mendapatkan <?php echo $pertanyaan_baru; ?> pertanyaan baru.						</a>					</div>
				<?php
	            }
			}
			?>
		</div><!-- /.col -->
	</div><!-- /.row -->
	
	<div class="row">
		<div class="col-xs-12 col-sm-5 col-md-4 center">
			<!-- PAGE CONTENT BEGINS -->
			<div class="beranda-logo-wrap">
				<img class="beranda-logo" src="assets/img/logo-ppa.png" alt="Logo PPA">
			</div>
			<!-- <div>
				<img src="assets/img/bg.jpg" width="100%">
			</div> -->
			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
		<div class="col-xs-12 col-sm-7 col-md-8">
			<!-- PAGE CONTENT BEGINS -->
			<div class="beranda-text-wrap">
				<p class="beranda-text">
					Peraturan Kepala Kepolisian Negara Republik Indonesia No POL. : 10 Tahun 2007 Tentang unit Pelayanan Perempuan Dan Anak (Unit PPA) Di Lingkungan Kepolisian Negara Republik Indonesia<br />
					Bertugas memberi pelayanan berbentuk perlindungan terhadap perempuan dan anak yang menjadi korban kejahatan dan dan penegakan hukum terhadap pelakunya				</p>
			</div>
			<!-- <div>
				<img src="assets/img/bg.jpg" width="100%">
			</div> -->
			<!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div>
</div><!-- /.page-content -->
