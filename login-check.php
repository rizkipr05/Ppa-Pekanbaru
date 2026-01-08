<?php
// panggil file untuk koneksi ke database
require_once "config/database.php";

// ambil data hasil submit dari form
$email    = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim($_POST['email'])))));
$password = mysqli_real_escape_string($mysqli, stripslashes(strip_tags(htmlspecialchars(trim(md5($_POST['password']))))));

// ambil data dari tabel pegawai untuk pengecekan berdasarkan inputan email dan passrword
$query = mysqli_query($mysqli, "SELECT * FROM tbl_klien WHERE email='$email' AND password='$password'")
								or die('Ada kesalahan pada query klien: '.mysqli_error($mysqli));
$rows  = mysqli_num_rows($query);

// jika data ada, jalankan perintah untuk membuat session
if ($rows > 0) {
	$data  = mysqli_fetch_assoc($query);

	session_start();

	$_SESSION['id_klien']       = $data['id_klien'];
	$_SESSION['email_klien']    = $data['email'];
	$_SESSION['password_klien'] = $data['password'];
	$_SESSION['nama_klien']     = $data['nama_klien'];
	
	// lalu alihkan ke halaman admin
	header("Location: main.php?page=home");
}
// jika data tidak ada, alihkan ke halaman login dan tampilkan pesan = 1
else {
	echo "<script type='text/javascript'>alert('Gagal Login!, email atau password salah, cek kembali email dan password Anda.');</script>
	  <meta http-equiv='refresh' content='0; url=index.php'>";
}
?>
