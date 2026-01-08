<?php  
// fungsi untuk pengecekan tampilan form
// jika form add data yang dipilih
if ($_GET['form']=='add') { ?>
 	<!-- tampilkan form add data -->
	<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="?module=beranda">Beranda</a>
			</li>

			<li>
				<a href="?module=informasi">Informasi</a>
			</li>

			<li class="active">Tambah</li>
		</ul><!-- /.breadcrumb -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1 style="color:#585858">
				<i class="ace-icon fa fa-edit"></i>
				Input Informasi
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!--PAGE CONTENT BEGINS-->
				<form class="form-horizontal" role="form" action="modules/informasi/proses.php?act=insert" method="POST" enctype="multipart/form-data" />

					<div class="row">
						<div class="col-xs-12 col-md-9">

							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" class="col-xs-12 col-sm-12" name="judul" placeholder="Judul.." autocomplete="off" required />
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<textarea class="col-xs-12 col-sm-12" id="ckeditor" name="isi" required></textarea>
								</div>
							</div>

						</div>

						<div class="col-xs-12 col-md-3">
							<label style="color:#478fca;font-size:14px;font-weight:bold">Kategori</label>
							<div>
								<select class="chosen-select" name="kategori" data-placeholder="Pilih Kategori..." required>
									<option value=""></option>
                                    <?php
									$query1 = mysqli_query($mysqli, "SELECT * FROM tbl_kategori ORDER BY nama_kategori ASC")
																	or die('Ada kesalahan pada query tampil kategori: '.mysqli_error($mysqli));
		
									while($data1 = mysqli_fetch_assoc($query1)) { ?>
										<option value="<?php echo $data1['id_kategori']; ?>"><?php echo $data1['nama_kategori']; ?></option>
									<?php
									}
									?>
								</select>
							</div>

							<br>

							<label style="color:#478fca;font-size:14px;font-weight:bold">Gambar</label>

							<input type="file" id="id-input-file-2" name="gambar" required />
						</div>
					</div>
			
					<div class="clearfix form-actions">
						<div class="col-md-10">
						<input style="width:100px" type="submit" class="btn btn-primary" name="simpan" value="Simpan" />
						&nbsp; &nbsp; 
						<a style="width:100px" href="?module=informasi" class="btn">Batal</a>
						</div>
					</div>
				</form>
				<!--PAGE CONTENT ENDS-->
			</div><!--/.span-->	
		</div>
	</div>
<?php
}
// jika form edit data yang dipilih
// isset : cek data ada / tidak
elseif ($_GET['form']=='edit') { 
	if (isset($_GET['id'])) {
	    $query = mysqli_query($mysqli, "SELECT * FROM tbl_informasi as a INNER JOIN tbl_kategori as b WHERE a.id_informasi='$_GET[id]'") 
	    								or die('Ada kesalahan pada query tampil data ubah : '.mysqli_error($mysqli));
	    $data  = mysqli_fetch_assoc($query);
	    	
		$id_informasi  = $data['id_informasi'];
		$judul         = $data['judul'];
		$isi           = $data['isi'];
		$id_kategori   = $data['id_kategori'];
		$nama_kategori = $data['nama_kategori'];
		$gambar        = $data['gambar'];
  	}
?>
	<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="?module=beranda">Beranda</a>
			</li>

			<li>
				<a href="?module=informasi">Informasi</a>
			</li>

			<li class="active">Tambah</li>
		</ul><!-- /.breadcrumb -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1 style="color:#585858">
				<i class="ace-icon fa fa-edit"></i>
				Ubah Informasi
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!--PAGE CONTENT BEGINS-->
				<form class="form-horizontal" role="form" action="modules/informasi/proses.php?act=update" method="POST" enctype="multipart/form-data" />

					<input type="hidden" name="id_informasi" value="<?php echo $id_informasi; ?>" />

					<div class="row">
						<div class="col-xs-12 col-md-9">

							<div class="form-group">
								<div class="col-sm-12">
									<input type="text" class="col-xs-12 col-sm-12" name="judul" placeholder="Judul.." autocomplete="off" value="<?php echo $judul; ?>" required />
								</div>
							</div>

							<div class="form-group">
								<div class="col-sm-12">
									<textarea class="col-xs-12 col-sm-12" id="ckeditor" name="isi" required><?php echo $isi; ?></textarea>
								</div>
							</div>

						</div>

						<div class="col-xs-12 col-md-3">
							<label style="color:#478fca;font-size:14px;font-weight:bold">Kategori</label>
							<div>
								<select class="chosen-select" name="kategori" data-placeholder="Pilih Kategori..." required>
									<option value="<?php echo $id_kategori; ?>"><?php echo $nama_kategori; ?></option>
									<?php
									$query1 = mysqli_query($mysqli, "SELECT * FROM tbl_kategori ORDER BY nama_kategori ASC")
																	or die('Ada kesalahan pada query tampil kategori: '.mysqli_error($mysqli));
		
									while($data1 = mysqli_fetch_assoc($query1)) { ?>
										<option value="<?php echo $data1['id_kategori']; ?>"><?php echo $data1['nama_kategori']; ?></option>
									<?php
									}
									?>
								</select>
							</div>

							<br>

							<label style="color:#478fca;font-size:14px;font-weight:bold">Gambar</label>

							<input type="file" id="id-input-file-2" name="gambar" />
							<br>
							<img src="../images/informasi/<?php echo $gambar; ?>" width="240">
						</div>
					</div>
			
					<div class="clearfix form-actions">
						<div class="col-md-10">
						<input style="width:100px" type="submit" class="btn btn-primary" name="simpan" value="Simpan" />
						&nbsp; &nbsp; 
						<a style="width:100px" href="?module=informasi" class="btn">Batal</a>
						</div>
					</div>
				</form>
			</div>
			<!--PAGE CONTENT ENDS-->
		</div><!--/.span-->
	</div>
<?php
}
?>