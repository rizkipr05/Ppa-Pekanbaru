<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../config/database.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['email_klien']) && empty($_SESSION['password_klien'])){
    echo "<script type='text/javascript'>alert('Anda harus login terlebih dahulu!');</script>
		  <meta http-equiv='refresh' content='0; url=../../index.php'>";
}
// jika user sudah login, maka jalankan perintah untuk ubah password
else {
	if (isset($_POST['simpan'])) {
		// ambil data hasil submit dari form
		$id_klien      = mysqli_real_escape_string($mysqli, trim($_POST['id_klien']));
		$nama_klien    = mysqli_real_escape_string($mysqli, trim($_POST['nama']));
		$tempat_lahir  = mysql_real_escape_string(trim($_POST['tempat_lahir']));
		
		$tanggal       = mysql_real_escape_string(trim($_POST['tanggal_lahir']));
		$tgl           = explode('-',$tanggal);
		$tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];
		
		$jenis_kelamin = mysql_real_escape_string(trim($_POST['jenis_kelamin']));
		$alamat        = mysqli_real_escape_string($mysqli, trim($_POST['alamat']));
		$telepon       = mysqli_real_escape_string($mysqli, trim($_POST['telepon']));
		$pekerjaan     = mysqli_real_escape_string($mysqli, trim($_POST['pekerjaan']));
		$email         = mysqli_real_escape_string($mysqli, trim($_POST['email']));

		// maka jalankan perintah query untuk mengubah data pada tabel klien
		$query = mysqli_query($mysqli, "UPDATE tbl_klien SET 	nama_klien  	= '$nama_klien',
	                                                            tempat_lahir   	= '$tempat_lahir',
	                                                            tanggal_lahir   = '$tanggal_lahir',
	                                                            jenis_kelamin	= '$jenis_kelamin',
	                                                            alamat         	= '$alamat',
	                                                            telepon         = '$telepon',
	                                                            pekerjaan       = '$pekerjaan',
	                                                            email           = '$email'
	                                                   WHERE    id_klien    	= '$id_klien'")
	                                    or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));

        // cek query
        if ($query) {
            // jika berhasil tampilkan pesan berhasil update data
            header("location: ../../main.php?page=profil&alert=1");
        } 
	}	
}
?>