<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="?module=beranda">Beranda</a>
		</li>

		<li class="active">Klien</li>
	</ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
	<div class="page-header">
		<div class="klien-header">
			<h1 style="color:#585858">
				<i style="margin-right:7px" class="ace-icon fa fa-users"></i> Klien
			</h1>
			<a href="?module=form_klien&form=add" class="btn btn-primary klien-add-btn">
				<i class="ace-icon fa fa-plus"></i> Tambah
			</a>
		</div>
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
		data klien baru berhasil disimpan.
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
		data klien berhasil diubah.
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
		data klien berhasil dihapus.
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
						Data Klien
					</div>
					<!-- div.table-responsive -->

					<!-- div.dataTables_borderWrap -->
					<div class="table-responsive klien-table">
						<table id="dynamic-table" class="table table-striped table-bordered table-hover klien-data-table">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>TTL</th>
									<th>L/P</th>
									<th>Alamat</th>
									<th>Telepon</th>
									<th>Pekerjaan</th>
									<th>Email</th>
									<th></th>
								</tr>
							</thead>

							<tbody>
							<?php
							$no = 1;
							// fungsi query untuk menampilkan data dari tabel klien
							$query = mysqli_query($mysqli, "SELECT * FROM tbl_klien ORDER BY id_klien DESC")
															or die('Ada kesalahan pada query tampil data klien: '.mysqli_error($mysqli));

                            while ($data = mysqli_fetch_assoc($query)) {
                            		$tanggal       = $data['tanggal_lahir'];
            						$tgl           = explode('-',$tanggal);
           							$tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];


           							if ($data['jenis_kelamin']=='Laki-laki') {
           								$jenis_kelamin = "L";

           							}
           							else{
           								$jenis_kelamin = "P";
           							}
                             ?>
                            	<tr>
									<td width="50" class="center"><?php echo $no; ?></td>
									<td width="150"><?php echo $data['nama_klien']; ?></td>
									<td width="120"><?php echo $data['tempat_lahir']; ?>, <br><?php echo $tanggal_lahir; ?></td>
									<td width="60" class="center"><?php echo $jenis_kelamin; ?></td>
									<td width="200"><?php echo $data['alamat']; ?></td>	
									<td width="90" class="center"><?php echo $data['telepon']; ?></td>
									<td width="100"><?php echo $data['pekerjaan']; ?></td>
									<td width="100"><?php echo $data['email']; ?></td>
									

	
									<td width="80" class="center">
										<div class="action-buttons">
											<a data-rel="tooltip" data-placement="top" title="Ubah" style="margin-right:5px" class="blue tooltip-info" href="?module=form_klien&form=edit&id=<?php echo $data['id_klien']; ?>">
												<i class="ace-icon fa fa-edit bigger-130"></i>
											</a>

											<a data-rel="tooltip" data-placement="top" title="Hapus" class="red tooltip-error" href="modules/klien/proses.php?act=delete&id=<?php echo $data['id_klien'];?>" onclick="return confirm('Anda yakin ingin menghapus data klien <?php echo $data['nama_klien']; ?> ?');">
												<i class="ace-icon fa fa-trash-o bigger-130"></i>
											</a>
										</div>
									</td>
								</tr>
							<?php
                            	$no++;
                            } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div><!-- PAGE CONTENT ENDS -->
		</div><!-- /.col -->
	</div><!-- /.row -->
</div><!-- /.page-content -->
