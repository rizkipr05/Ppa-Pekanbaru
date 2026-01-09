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
				<a href="?module=konselor">Konselor</a>
			</li>

			<li class="active">Tambah</li>
		</ul><!-- /.breadcrumb -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1 style="color:#585858">
				<i class="ace-icon fa fa-edit"></i>
				Input Konselor
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!--PAGE CONTENT BEGINS-->
				<form class="form-horizontal" role="form" action="modules/konselor/proses.php?act=insert" method="POST" />

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right">Nama</label>
						<!--autocomplete : menghilangkan history pengetikkan, required : harus diisi-->
						<div class="col-sm-5">
							<input type="text" class="form-control" name="nama" autocomplete="off" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right">Alamat</label>

						<div class="col-sm-5">
							<textarea class="form-control" name="alamat" rows="2" required></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right">Telepon</label>
						<!--membatasi penginputan, hanya berupa nilai yang di dalam tanda petik-->
						<div class="col-sm-5">
							<input type="text" class="form-control" name="telepon" maxlength="13" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right">Bidang</label>

						<div class="col-sm-5">
							<select class="chosen-select" name="bidang" data-placeholder="Pilih Bidang..." required>
								<option value=""></option>
								<option value="Divisi Perlindungan Hukum dan Kriminal">Divisi Perlindungan Hukum dan Kriminal </option>
								<option value="Divisi Konseling Psikolog">Divisi Konseling Psikolog</option>
								<option value="Divisi Kesehatan Dan Forensik">Divisi Kesehatan Dan Forensik</option>
								<option value="Divisi Konseling Napza dan Narkoba">Divisi Napza Dan Narkoba</option>
								<option value="Divisi Perlindungan Perlindungan Korban, Saksi, Keluarga dan Teman">Divisi Perlindungan Perlindungan Korban, Saksi, Keluarga dan Teman</option>
								<option value="Divisi Pembinaan">Divisi Pembinaan</option>
								
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right">Email</label>

						<div class="col-sm-5">
							<input type="email" class="form-control" name="email"  autocomplete="off" required />
						</div>
					</div>

					<div class="hr hr-16 dotted"></div>

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right">Username</label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="username"  autocomplete="off" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right">Password</label>

						<div class="col-sm-5">
							<input type="password" class="form-control" name="password" autocomplete="off" required />
						</div>
					</div>

					<div class="clearfix form-actions">
						<div class="col-md-offset-2 col-md-10">
							<input style="width:100px" type="submit" class="btn btn-primary" name="simpan" value="Simpan" />
							&nbsp; &nbsp; 
							<a style="width:100px" href="?module=konselor" class="btn">Batal</a>
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
	    // fungsi query untuk menampilkan data dari tabel konselor
	    $query = mysqli_query($mysqli, "SELECT * FROM tbl_konselor WHERE id_konselor='$_GET[id]'") 
	    								or die('Ada kesalahan pada query tampil data ubah : '.mysqli_error($mysqli));
	    $data = mysqli_fetch_assoc($query);
  	}
?>
	<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
		<ul class="breadcrumb">
			<li>
				<i class="ace-icon fa fa-home home-icon"></i>
				<a href="?module=beranda">Beranda</a>
			</li>

			<li>
				<a href="?module=konselor">Konselor</a>
			</li>

			<li class="active">Ubah</li>
		</ul><!-- /.breadcrumb -->
	</div>

	<div class="page-content">
		<div class="page-header">
			<h1 style="color:#585858">
				<i class="ace-icon fa fa-edit"></i>
				Ubah Konselor
			</h1>
		</div><!-- /.page-header -->

		<div class="row">
			<div class="col-xs-12">
				<!--PAGE CONTENT BEGINS-->
				<form class="form-horizontal" role="form" action="modules/konselor/proses.php?act=update" method="POST" />

					<input type="hidden" name="id_konselor" value="<?php echo $data['id_konselor']; ?>" />

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right">Nama</label>
						<!--autocomplete : menghilangkan history pengetikkan, required : harus diisi-->
						<div class="col-sm-5">
							<input type="text" class="form-control" name="nama" autocomplete="off" value="<?php echo $data['nama_konselor']; ?>" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right">Alamat</label>
						<div class="col-sm-5">
							<textarea class="form-control" name="alamat" rows="2" required><?php echo $data['alamat'];?></textarea>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right">Telepon</label>
						<!--membatasi penginputan, hanya berupa nilai yang di dalam tanda petik-->
						<div class="col-sm-5">
							<input type="text" class="form-control" name="telepon" maxlength="13" autocomplete="off" onKeyPress="return goodchars(event,'0123456789',this)" value="<?php echo $data['telepon']; ?>" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right">Bidang</label>

						<div class="col-sm-5">
							<select class="chosen-select" name="bidang" data-placeholder="Pilih Bidang..." required>
								<option value="<?php echo $data['bidang'];?>"><?php echo $data['bidang']; ?></option>
								<option value="Divisi Perlindungan Hukum dan Kriminal">Divisi Perlindungan Hukum dan Kriminal </option>
								<option value="Divisi Konseling Psikolog">Divisi Konseling Psikolog</option>
								<option value="Divisi Kesehatan Dan Forensik">Divisi Kesehatan Dan Forensik</option>
								<option value="Divisi Konseling Napza dan Narkoba">Divisi Napza Dan Narkoba</option>
								<option value="Divisi Perlindungan Perlindungan Korban, Saksi, Keluarga dan Teman">Divisi Perlindungan Perlindungan Korban, Saksi, Keluarga dan Teman</option>
								<option value="Divisi Pembinaan">Divisi Pembinaan</option>
							</select>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right">Email</label>

						<div class="col-sm-5">
							<input type="email" class="form-control" name="email"  autocomplete="off" value="<?php echo $data['email'];?>" required />
						</div>
					</div>

					<div class="hr hr-16 dotted"></div>

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right">Username</label>

						<div class="col-sm-5">
							<input type="text" class="form-control" name="username"  autocomplete="off" value="<?php echo $data['username'];?>" required />
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label no-padding-right">Password</label>

						<div class="col-sm-5">
							<input type="password" class="form-control" name="password" autocomplete="off" placeholder="Kosongkan Password Jika Tidak Diubah" />
						</div>
					</div>

								
					<div class="clearfix form-actions">
						<div class="col-md-offset-2 col-md-10">
							<input style="width:100px" type="submit" class="btn btn-primary" name="simpan" value="Simpan" />
							&nbsp; &nbsp; 
							<a style="width:100px" href="?module=konselor" class="btn">Batal</a>
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
