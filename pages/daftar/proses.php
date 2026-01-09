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
	
	if (empty($_POST['jenis_kelamin'])) {
		header("location: ../../main.php?page=daftar&alert=3");
		exit;
	}
	$jenis_kelamin = mysqli_real_escape_string($mysqli, trim($_POST['jenis_kelamin']));
	$alamat        = mysqli_real_escape_string($mysqli, trim($_POST['alamat']));
	$alamat        = substr($alamat, 0, 50);
	$telepon       = mysqli_real_escape_string($mysqli, trim($_POST['telepon']));
	$pekerjaan     = mysqli_real_escape_string($mysqli, trim($_POST['pekerjaan']));
	$username      = mysqli_real_escape_string($mysqli, trim($_POST['username']));
	$email         = mysqli_real_escape_string($mysqli, trim($_POST['email']));
	$password      = md5(mysqli_real_escape_string($mysqli, trim($_POST['password'])));

	// pastikan kolom username sudah ada
	$cek_kolom = mysqli_query($mysqli, "SHOW COLUMNS FROM tbl_klien LIKE 'username'")
									 or die('Ada kesalahan pada query cek kolom username: '.mysqli_error($mysqli));
	if (mysqli_num_rows($cek_kolom) == 0) {
		echo "<script type='text/javascript'>alert('Kolom username belum ada. Tambahkan kolom username di tabel tbl_klien terlebih dahulu.');</script>
			  <meta http-equiv='refresh' content='0; url=../../main.php?page=daftar'>";
		exit;
	}

	// perintah query untuk pengecekan email atau username pada tabel klien
	$query_cek = mysqli_query($mysqli, "SELECT id_klien FROM tbl_klien WHERE email='$email' OR username='$username'")
										or die('Ada kesalahan pada query cek email/username : '.mysqli_error($mysqli));    
	$row_cek   = mysqli_num_rows($query_cek);

	// jika data email atau username sudah ada
	if ($row_cek > 0) {
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
															 username,
															 email,
															 password)
													  VALUES('$nama',
															 '$tempat_lahir',
															 '$tanggal_lahir',
															 '$jenis_kelamin',
															 '$alamat',
															 '$telepon',
															 '$pekerjaan',
															 '$username',
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
