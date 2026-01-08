<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="?module=beranda">Beranda</a>
		</li>

		<li class="active">Konsultasi</li>
	</ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
	<div class="page-header">
		<h1 style="color:#585858">
			<i style="margin-right:7px" class="ace-icon fa fa-clone"></i> Konsultasi
		</h1>
	</div><!-- /.page-header -->

<?php
// fungsi untuk menampilkan pesan
// jika alert = "" (kosong)
// tampilkan pesan "" (kosong)
if (empty($_GET['alert'])) {
}
// jika alert = 1
// tampilkan pesan Sukses "data Konsultasi berhasil dihapus"
elseif ($_GET['alert'] == 1) { ?>
	<div class="alert alert-success">
		<button type="button" class="close" data-dismiss="alert">
			<i class="ace-icon fa fa-times"></i>
		</button>
		<strong><i class="ace-icon fa fa-check-circle"></i> Sukses! </strong><br>
		data konsultasi berhasil dihapus.
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
						Data Konsultasi
					</div>
					<!-- div.table-responsive -->

					<!-- div.dataTables_borderWrap -->
					<div>
						<table id="dynamic-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Umur</th>
									<th>Pertanyaan</th>
									<th>Tanggal</th>
								</tr>
							</thead>

							<tbody>
							<?php
							$no = 1;
							// fungsi query untuk menampilkan data dari tabel Konsultasi
							$query = mysqli_query($mysqli, "SELECT a.id_konsultasi,a.tanggal,a.id_klien,a.id_konselor,a.id_jenis,a.pertanyaan,a.status,a.balas,
                                                            b.nama_klien,b.tanggal_lahir
                                                            FROM tbl_konsultasi as a INNER JOIN tbl_klien as b
                                                            ON a.id_klien=b.id_klien
															WHERE a.id_konselor='$_SESSION[id_user]' AND balas='0' 
															ORDER BY a.id_Konsultasi DESC")
															or die('Ada kesalahan pada query tampil data Konsultasi: '.mysqli_error($mysqli));

                            while ($data = mysqli_fetch_assoc($query)) { 
								$tgl     = substr($data['tanggal'],0,10);
								$exp     = explode('-',$tgl);
								$tanggal = $exp[2]."-".$exp[1]."-".$exp[0];

                                $usia    = get_age($data['tanggal_lahir']);

								$query1 = mysqli_query($mysqli, "SELECT id_konsultasi,id_klien,id_konselor,id_jenis,pertanyaan,status,balas
                                                                FROM tbl_konsultasi
                                                                WHERE id_klien='$data[id_klien]' AND id_konselor='$_SESSION[id_user]' AND id_jenis='$data[id_jenis]' AND balas='$data[id_konsultasi]' AND status='n' AND pertanyaan!='' 
                                                                OR id_klien='$data[id_klien]' AND id_konselor='$_SESSION[id_user]' AND id_jenis='$data[id_jenis]' AND balas='0' AND status='n' AND pertanyaan!=''")
                                                                or die('Ada kesalahan pada query status: '.mysqli_error($mysqli));
                      
                                $row = mysqli_num_rows($query1);

                                if ($row > 0) {
                                    $warna = '#fcf8e3';
                                } else {
                                    $warna = '';
                                }
                            ?>
                        		<tr style="background:<?php echo $warna; ?>">
									<td width="30" class="center"><?php echo $no; ?></td>
									<td width="120">
										<a style="text-decoration:none;color:#393939" href="?module=form_konsultasi&form=detail&id=<?php echo $data['id_konsultasi']; ?>">
											<?php echo $data['nama_klien']; ?>
                        				</a>
									</td>
									<td width="50" class="center"><?php echo $usia; ?></td>
									<td width="350">
										<a style="text-decoration:none;color:#393939" href="?module=form_konsultasi&form=detail&id=<?php echo $data['id_konsultasi']; ?>">
											<?php echo $data['pertanyaan']; ?>
                        				</a>
									</td>
									<td width="80" class="center"><?php echo $tanggal; ?></td>
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