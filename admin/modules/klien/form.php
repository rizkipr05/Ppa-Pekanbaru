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
				<a href="?module=klien">Klien</a>
			</li>

			<li class="active">Tambah</li>
		</ul><!-- /.breadcrumb -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1 style="color:#585858">
				<i class="ace-icon fa fa-edit"></i>
				Input Klien
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!--PAGE CONTENT BEGINS-->
				<form class="form-horizontal klien-form" role="form" action="modules/klien/proses.php?act=insert" method="POST">

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Nama</label>
						<!--autocomplete : menghilangkan history pengetikkan, required : harus diisi-->
						<div class="col-sm-4 col-xs-12">
							<input type="text" class="form-control" name="nama" autocomplete="off" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Tempat Lahir</label>

						<div class="col-sm-4 col-xs-12">
							<input type="text" class="form-control" name="tempat_lahir" autocomplete="off" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Tanggal Lahir</label>
						
						<div class="col-sm-4 col-xs-12">
							<div class="input-group">
								<input class="form-control date-picker" type="text" data-date-format="dd-mm-yyyy" name="tanggal_lahir" value="<?php echo date("d-m-Y"); ?>" required />
								<span class="input-group-addon">
									<i class="fa fa-calendar bigger-110"></i>
								</span>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Jenis Kelamin</label>

						<div class="col-sm-4 col-xs-12">
							<div class="radio">
								<label>
									<input type="radio" class="ace" name="jenis_kelamin" value="Laki-laki" />
									<span class="lbl"> Laki - laki</span>
								</label>

								<label>
									<input type="radio" class="ace" name="jenis_kelamin" value="Perempuan" />
									<span class="lbl"> Perempuan</span>
								</label>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Alamat</label>

						<div class="col-sm-4 col-xs-12">
							<textarea class="form-control" name="alamat" rows="2" required></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Telepon</label>
						<!--membatasi penginputan, hanya berupa nilai yang di dalam tanda petik-->
						<div class="col-sm-4 col-xs-12">
							<input type="text" class="form-control" name="telepon" maxlength="13" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Pekerjaan</label>
						<!--autocomplete : menghilangkan history pengetikkan, required : harus diisi-->
						<div class="col-sm-4 col-xs-12">
							<input type="text" class="form-control" name="pekerjaan" autocomplete="off" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Email</label>

						<div class="col-sm-4 col-xs-12">
							<input type="email" class="form-control" name="email"  autocomplete="off" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Password</label>

						<div class="col-sm-4 col-xs-12">
							<input type="password" class="form-control" name="password" autocomplete="off" required />
						</div>
					</div>

					<div class="clearfix form-actions">
						<div class="col-md-offset-2 col-md-10 col-xs-12 klien-form-actions">
							<input style="width:100px" type="submit" class="btn btn-primary" name="simpan" value="Simpan" />
							&nbsp; &nbsp; 
							<a style="width:100px" href="?module=klien" class="btn">Batal</a>
						</div>
					</div>
				</form>
				<!--PAGE CONTENT ENDS-->
			</div><!--/.span-->
		</div><!--/.row-fluid-->
	</div><!--/.page-content-->
<?php
}
// jika form edit data yang dipilih
// isset : cek data ada / tidak
elseif ($_GET['form']=='edit') { 
	if (isset($_GET['id'])) {
	    // fungsi query untuk menampilkan data dari tabel klien
	    $query = mysqli_query($mysqli, "SELECT * FROM tbl_klien WHERE id_klien='$_GET[id]'") 
	    								or die('Ada kesalahan pada query tampil data ubah : '.mysqli_error($mysqli));
	    $data  = mysqli_fetch_assoc($query);
	    $tanggal      = $data['tanggal_lahir'];
		$tgl           = explode('-',$tanggal);
		$tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];
  	}
?>
	<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="?module=beranda">Beranda</a>
			</li>

			<li>
				<a href="?module=klien">Klien</a>
			</li>

			<li class="active">Ubah</li>
		</ul><!-- /.breadcrumb -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1 style="color:#585858">
				<i class="ace-icon fa fa-edit"></i>
				Ubah Klien
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!--PAGE CONTENT BEGINS-->
				<form class="form-horizontal klien-form" role="form" action="modules/klien/proses.php?act=update" method="POST">

					<input type="hidden" name="id_klien" value="<?php echo $data['id_klien']; ?>" />

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Nama</label>
						<!--autocomplete : menghilangkan history pengetikkan, required : harus diisi-->
						<div class="col-sm-4 col-xs-12">
							<input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $data['nama_klien']; ?>" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Tempat Lahir</label>

						<div class="col-sm-4 col-xs-12">
							<input type="text" class="form-control" name="tempat_lahir" autocomplete="off" value="<?php echo $data['tempat_lahir']; ?>" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Tanggal Lahir</label>
						
						<div class="col-sm-4 col-xs-12">
							<div class="input-group">
								<input class="form-control date-picker" type="text" data-date-format="dd-mm-yyyy" name="tanggal_lahir" value="<?php echo $tanggal_lahir; ?>" required />
								<span class="input-group-addon">
									<i class="fa fa-calendar bigger-110"></i>
								</span>
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Jenis Kelamin</label>

						<div class="col-sm-4 col-xs-12">
							<div class="radio">
							<?php
							if($data['jenis_kelamin']=='Laki-laki'){ ?>
								<label>
									<input type="radio" class="ace" name="jenis_kelamin" value="Laki-laki" checked />
									<span class="lbl"> Laki - laki</span>
								</label>

								<label>
									<input type="radio" class="ace" name="jenis_kelamin" value="Perempuan" />
									<span class="lbl"> Perempuan</span>
								</label>
							<?php
							} else { ?>
								<label>
									<input type="radio" class="ace" name="jenis_kelamin" value="Laki-laki" />
									<span class="lbl"> Laki - laki</span>
								</label>

								<label>
									<input type="radio" class="ace" name="jenis_kelamin" value="Perempuan" checked />
									<span class="lbl"> Perempuan</span>
								</label>
							<?php
							}
							?>
								
							</div>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Alamat</label>

						<div class="col-sm-4 col-xs-12">
							<textarea class="form-control" name="alamat" rows="2" required><?php echo $data['alamat'];?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Telepon</label>
						<!--membatasi penginputan, hanya berupa nilai yang di dalam tanda petik-->
						<div class="col-sm-4 col-xs-12">
							<input type="text" class="form-control" name="telepon" maxlength="13" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $data['telepon'];?>" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Pekerjaan</label>
						<!--autocomplete : menghilangkan history pengetikkan, required : harus diisi-->
						<div class="col-sm-4 col-xs-12">
							<input type="text" class="form-control" name="pekerjaan" autocomplete="off" value="<?php echo $data['pekerjaan'];?>" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Email</label>

						<div class="col-sm-4 col-xs-12">
							<input type="email" class="form-control" name="email"  autocomplete="off" value="<?php echo $data['email'];?>" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 col-xs-12 control-label no-padding-right">Password</label>

						<div class="col-sm-4 col-xs-12">
							<input type="password" class="form-control" name="password" autocomplete="off" placeholder="Kosongkan Password Jika Tidak Diubah"/>
						</div>
					</div>

								
					<div class="clearfix form-actions">
						<div class="col-md-offset-2 col-md-10 col-xs-12 klien-form-actions">
							<input style="width:100px" type="submit" class="btn btn-primary" name="simpan" value="Simpan" />
							&nbsp; &nbsp; 
							<a style="width:100px" href="?module=klien" class="btn">Batal</a>
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
