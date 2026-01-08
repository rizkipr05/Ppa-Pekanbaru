<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="?module=beranda">Beranda</a>
		</li>

		<li class="active">Laporan</li>

		<li class="active">Konselor</li>
	</ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
	<div class="page-header">
		<h1 style="color:#585858">
			<i style="margin-right:7px" class="ace-icon fa fa-file-text-o"></i> Laporan Konselor
			<a href="modules/lap-konselor/cetak.php" target="_blank">
                <button class="btn btn-primary pull-right">
					<i class="ace-icon fa fa-print"></i> Cetak
				</button>
            </a>
		</h1>
	</div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!-- PAGE CONTENT BEGINS -->
			<div class="row">
				<div class="col-xs-12">
					<div class="table-header">
						Laporan Data Konselor
					</div>
					<!-- div.table-responsive -->

					<!-- div.dataTables_borderWrap -->
					<div>
						<table id="simple-table" class="table table-striped table-bordered table-hover">
							<thead>
								<tr>
									<th>No.</th>
									<th>Nama</th>
									<th>Alamat</th>
									<th>Telepon</th>
									<th>Bidang</th>
									<th>Email</th>
								</tr>
							</thead>

							<tbody>
							<?php
							$no = 1;
							// fungsi query untuk menampilkan data dari tabel konselor
							$query = mysqli_query($mysqli, "SELECT * FROM tbl_konselor ORDER BY id_konselor DESC") or die('Ada kesalahan pada query tampil data konselor: '.mysqli_error($mysqli));

                            while ($data = mysqli_fetch_assoc($query)) {

                             ?>
                            	<tr>
								<td width="40" class="center"><?php echo $no; ?></td>
								<td width="150"><?php echo $data['nama_konselor']; ?></td>
								<td width="180"><?php echo $data['alamat']; ?></td>
								<td width="70" class="center"><?php echo $data['telepon']; ?></td>
								<td width="180"><?php echo $data['bidang']; ?></td>
								<td width="100"><?php echo $data['email']; ?></td>
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