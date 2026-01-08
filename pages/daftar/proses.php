<?php
// Panggil koneksi database.php untuk koneksi database
require_once "../../config/database.php";

if (isset($_POST['daftar'])) {
	// ambil data hasil submit dari form
	$nama          = mysqli_real_escape_string($mysqli, trim($_POST['nama']));
	$tempat_lahir  = mysqli_real_escape_string($mysqli, trim($_POST['tempat_lahir']));
	
	$tanggal       = mysqli_real_escape_string($mysqli, trim($_POST['tanggal_lahir']));
	$tgl           = explode('-',$tanggal);
	$tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];
	
	$jenis_kelamin = mysqli_real_escape_string($mysqli, trim($_POST['jenis_kelamin']));
	$alamat        = mysqli_real_escape_string($mysqli, trim($_POST['alamat']));
	$telepon       = mysqli_real_escape_string($mysqli, trim($_POST['telepon']));
	$pekerjaan     = mysqli_real_escape_string($mysqli, trim($_POST['pekerjaan']));
	$email         = mysqli_real_escape_string($mysqli, trim($_POST['email']));
	$password      = md5(mysqli_real_escape_string($mysqli, trim($_POST['password'])));

	// perintah query untuk pengecekan email pada tabel klien
	$query_email = mysqli_query($mysqli, "SELECT email FROM tbl_klien WHERE email='$email'")
										  or die('Ada kesalahan pada query cek email : '.mysqli_error($mysqli));    
	$row_email   = mysqli_num_rows($query_email);

	// jika data email sudah ada
	if ($row_email > 0) {
		// maka alihkan ke halaman form pendaftaran
		header("location: ../../main.php?page=daftar&alert=1");
	}
	// jika data email belum ada
	else {
		// maka jalankan perintah query untuk menyimpan data ke tabel pesan
		$query = mysqli_query($mysqli, "INSERT INTO tbl_klien(nama_klien,
															 tempat_lahir,
															 tanggal_lahir,
															 jenis_kelamin,
															 alamat,
															 telepon,
															 pekerjaan,
															 email,
															 password)
													  VALUES('$nama',
															 '$tempat_lahir',
															 '$tanggal_lahir',
															 '$jenis_kelamin',
															 '$alamat',
															 '$telepon',
															 '$pekerjaan',
															 '$email',
															 '$password')")	
									or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    
		// cek query
		if ($query) {
			// jika berhasil tampilkan pesan berhasil simpan data
			header("location: ../../main.php?page=login&alert=2");
		}	
	}
}	
?>
