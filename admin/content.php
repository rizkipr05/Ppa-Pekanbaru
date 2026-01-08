<?php
// panggil file database.php untuk koneksi ke database
require_once "../config/database.php";
// panggil fungsi untuk menampilkan usia
require_once "../config/fungsi_usia.php";

// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
	echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk pemanggilan file halaman konten
else {
	// jika halaman konten yang dipilih beranda, panggil file view beranda
	if ($_GET['module']=='beranda') {
		include "modules/beranda/view.php";
	}

	// jika halaman konten yang dipilih klien, panggil file view klien
	elseif ($_GET['module']=='klien' && $_SESSION['hak_akses']=='Customer Service') {
		include "modules/klien/view.php";
	}

	// jika halaman konten yang dipilih form klien, panggil file form klien
	elseif ($_GET['module']=='form_klien' && $_SESSION['hak_akses']=='Customer Service') {
		include "modules/klien/form.php";
	}
	// ---------------------------------------------------------------------------------
	
	// jika halaman konten yang dipilih konselor, panggil file view konselor
	elseif ($_GET['module']=='konselor' && $_SESSION['hak_akses']=='Customer Service') {
		include "modules/konselor/view.php";
	}

	// jika halaman konten yang dipilih form konselor, panggil file form konselor
	elseif ($_GET['module']=='form_konselor' && $_SESSION['hak_akses']=='Customer Service') {
		include "modules/konselor/form.php";
	}
	// ---------------------------------------------------------------------------------

	// jika halaman konten yang dipilih jenis, panggil file view jenis
	elseif ($_GET['module']=='jenis' && $_SESSION['hak_akses']=='Customer Service') {
		include "modules/jenis/view.php";
	}

	// jika halaman konten yang dipilih form jenis, panggil file form jenis
	elseif ($_GET['module']=='form_jenis' && $_SESSION['hak_akses']=='Customer Service') {
		include "modules/jenis/form.php";
	}
	// ---------------------------------------------------------------------------------
	
	// jika halaman konten yang dipilih konsultasi, panggil file view konsultasi
	elseif ($_GET['module']=='konsultasi' && $_SESSION['hak_akses']=='konselor') {
		include "modules/konsultasi/view.php";
	}

	// jika halaman konten yang dipilih form konsultasi, panggil file form konsultasi
	elseif ($_GET['module']=='form_konsultasi' && $_SESSION['hak_akses']=='konselor') {
		include "modules/konsultasi/form.php";
	}
	// ---------------------------------------------------------------------------------
	
	// jika halaman konten yang dipilih informasi, panggil file view informasi
	elseif ($_GET['module']=='informasi' && $_SESSION['hak_akses']=='Customer Service') {
		include "modules/informasi/view.php";
	}

	// jika halaman konten yang dipilih form informasi, panggil file form informasi
	elseif ($_GET['module']=='form_informasi' && $_SESSION['hak_akses']=='Customer Service') {
		include "modules/informasi/form.php";
	}
	// ---------------------------------------------------------------------------------
	
	// jika halaman konten yang dipilih kategori, panggil file view kategori
	elseif ($_GET['module']=='kategori' && $_SESSION['hak_akses']=='Customer Service') {
		include "modules/kategori/view.php";
	}

	// jika halaman konten yang dipilih form kategori, panggil file form kategori
	elseif ($_GET['module']=='form_kategori' && $_SESSION['hak_akses']=='Customer Service') {
		include "modules/kategori/form.php";
	}
	// ---------------------------------------------------------------------------------
	
	// jika halaman konten yang dipilih diskusi, panggil file view diskusi
	elseif ($_GET['module']=='diskusi' && $_SESSION['hak_akses']=='Customer Service') {
		include "modules/diskusi/view.php";
	}

	// jika halaman konten yang dipilih form diskusi, panggil file form diskusi
	elseif ($_GET['module']=='form_diskusi' && $_SESSION['hak_akses']=='Customer Service') {
		include "modules/diskusi/form.php";
	}
	// ---------------------------------------------------------------------------------
	
	// jika halaman konten yang dipilih laporan, panggil file view laporan
	elseif ($_GET['module']=='lap_klien') {
		include "modules/lap-klien/view.php";
	}

	// jika halaman konten yang dipilih laporan, panggil file view laporan
	elseif ($_GET['module']=='lap_konselor') {
		include "modules/lap-konselor/view.php";
	}

	// jika halaman konten yang dipilih laporan, panggil file view laporan
	elseif ($_GET['module']=='lap_konsultasi') {
		include "modules/lap-konsultasi/view.php";
	}
	// ---------------------------------------------------------------------------------
	
	// jika halaman konten yang dipilih grafik, panggil file view grafik
	elseif ($_GET['module']=='grafik') {
		include "modules/grafik/view.php";
	}
	// ---------------------------------------------------------------------------------
	
	// jika halaman konten yang dipilih password, panggil file view password
	elseif ($_GET['module']=='password') {
		include "modules/password/view.php";
	}
}
?>