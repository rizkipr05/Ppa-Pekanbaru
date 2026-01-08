<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="?module=beranda">Beranda</a>
		</li>

		<li class="active">Informasi</li>
	</ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
	<div class="page-header">
		<h1 style="color:#585858">
			<i style="margin-right:7px" class="ace-icon fa fa-th-large"></i> Informasi
			<a href="?module=form_informasi&form=add">
                <button class="btn btn-primary pull-right">
					<i class="ace-icon fa fa-plus"></i> Tambah
				</button>
            </a>
		</h1>
	</div><!-- /.page-header -->

<?php
// fungsi untuk menampilkan pesan
// jika alert = "" (kosong)
// tampilkan pesan "" (kosong)
if (empty($_GET['alert'])) {
}
// jika alert = 1
// tampilkan pesan "data klien baru berhasil disimpan"
elseif ($_GET['alert'] == 1) { ?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>
		<strong><i class="ace-icon fa fa-check-circle"></i> Sukses! </strong><br>
		Data informasi baru berhasil disimpan.
		<br>
	</div>
<?php
} 
// jika alert = 2
// tampilkan pesan Sukses "data klien berhasil diubah"
elseif ($_GET['alert'] == 2) { ?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>
		<strong><i class="ace-icon fa fa-check-circle"></i> Sukses! </strong><br>
		Data informasi berhasil diubah.
		<br>
	</div>
<?php
}
// jika alert = 3
// tampilkan pesan Sukses "data klien berhasil dihapus"
elseif ($_GET['alert'] == 3) { ?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>
		<strong><i class="ace-icon fa fa-check-circle"></i> Sukses! </strong><br>
		Data informasi berhasil dihapus.
		<br>
	</div>
<?php
} 
// jika alert = 4
// tampilkan pesan Upload Gagal "pastikan file yang diupload sudah benar"
elseif ($_GET['alert'] == 4) { ?>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>
		<strong><i class="ace-icon fa fa-times-circle"></i> Upload Gagal! </strong><br>
		pastikan file yang diupload sudah benar.
		<br>
	</div>
<?php
}
// jika alert = 5
// tampilkan pesan Upload Gagal "pastikan ukuran foto tidak lebih dari 1MB"
elseif ($_GET['alert'] == 5) { ?>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>
		<strong><i class="ace-icon fa fa-times-circle"></i> Upload Gagal! </strong><br>
		pastikan ukuran foto tidak lebih dari 1MB.
		<br>
	</div>
<?php
} 
// jika alert = 6
// tampilkan pesan Upload Gagal "pastikan file yang diupload bertipe *.JPG, *.JPEG, *.PNG"
elseif ($_GET['alert'] == 6) { ?>
	<div class="alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>
		<strong><i class="ace-icon fa fa-times-circle"></i> Upload Gagal! </strong><br>
		pastikan file yang diupload bertipe *.JPG, *.JPEG, *.PNG.
		<br>
	</div>
<?php
}
?>

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="row">
				<div class="col-xs-12">
					<div class="table-header">
						Data Informasi
					</div>
					<!-- div.table-responsive -->

					<!-- div.dataTables_borderWrap -->
					<div>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>Judul Informasi</th>
									<th>Kategori</th>
									<th>Tanggal</th>
									<th></th>
								</tr>
							</thead>

							<tbody>
							<?php 
							$no = 1;
							// fungsi query untuk menampilkan data dari tabel klien
							$query = mysqli_query($mysqli, "SELECT a.id_informasi,a.tanggal,a.judul,a.id_kategori,b.nama_kategori
															from tbl_informasi as a INNER JOIN tbl_kategori as b 
															ON a.id_kategori=b.id_kategori
															ORDER BY a.id_informasi DESC")
															or die('Ada kesalahan pada query tampil data klien: '.mysqli_error($mysqli));

                            while ($data = mysqli_fetch_assoc($query)) {
                            	$tgl     = substr($data['tanggal'],0,10);
								$exp     = explode('-',$tgl);
								$tanggal = $exp[2]."-".$exp[1]."-".$exp[0];
                            ?>
                            	<tr>
									<td width="30" class="center"><?php echo $no; ?></td>
									<td width="300"><?php echo $data['judul']; ?></td>
									<td width="100"><?php echo $data['nama_kategori']; ?></td>
									<td width="80" class="center"><?php echo $tanggal; ?></td>
									
									<td width="80" class="center">
										<div class="action-buttons">
											<a data-rel="tooltip" data-placement="top" title="Ubah" style="margin-right:5px" class="blue tooltip-info" href="?module=form_informasi&form=edit&id=<?php echo $data['id_informasi']; ?>">
												<i class="ace-icon fa fa-edit bigger-130"></i>
											</a>

											<a data-rel="tooltip" data-placement="top" title="Hapus" class="red tooltip-error" href="modules/informasi/proses.php?act=delete&id=<?php echo $data['id_informasi'];?>" onclick="return confirm('Anda yakin ingin menghapus informasi <?php echo $data['judul']; ?> ?');">
												<i class="ace-icon fa fa-trash-o bigger-130"></i>
											</a>
										</div>
									</td>
								</tr>
							<?php
                            	$no++;
                            }
                            ?>
							</tbody>
						</table>
					</div>
				</div>
			</div><!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content -->