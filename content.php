<?php
/* panggil file database.php untuk koneksi ke database */
require_once "config/database.php";
/* panggil fungsi untuk format tanggal */
require_once "config/fungsi_tanggal.php";

// fungsi untuk pemanggilan file halaman konten
// jika halaman konten yang dipilih home, panggil file view home
if ($_GET['page'] == 'home') {
	include "pages/home/view.php";
}

// jika halaman konten yang dipilih daftar, panggil file view daftar
if ($_GET['page'] == 'daftar') {
	include "pages/daftar/view.php";
}

// jika halaman konten yang dipilih login, panggil file view login
if ($_GET['page'] == 'login') {
	include "pages/daftar/login.php";
}

// jika halaman konten yang dipilih konsultasi, panggil file view konsultasi
if ($_GET['page'] == 'konsultasi') {
	include "pages/konsultasi/view.php";
}

// jika halaman konten yang dipilih konsultasi, panggil file view konsultasi
if ($_GET['page'] == 'form_konsultasi') {
	include "pages/konsultasi/form.php";
}

// jika halaman konten yang dipilih profil, panggil file view profil
if ($_GET['page'] == 'profil') {
	include "pages/profil/view.php";
}

// jika halaman konten yang dipilih password, panggil file view password
if ($_GET['page'] == 'password') {
	include "pages/password/view.php";
}

// jika halaman konten yang dipilih tentang, panggil file view tentang
if ($_GET['page'] == 'tentang') {
	include "pages/tentang/view.php";
}

// jika halaman konten yang dipilih konselor, panggil file view konselor
if ($_GET['page'] == 'konselor') {
	include "pages/konselor/view.php";
}

// jika halaman konten yang dipilih informasi, panggil file informasi
if ($_GET['page'] == 'informasi') {
	include "pages/informasi/informasi.php";
}

// jika halaman konten yang dipilih detail, panggil file detail
if ($_GET['page'] == 'detail') {
	include "pages/informasi/detail.php";
}

// jika halaman konten yang dipilih kategori, panggil file kategori
if ($_GET['page'] == 'kategori') {
	include "pages/informasi/kategori.php";
}

// jika halaman konten yang dipilih cari, panggil file cari
if ($_GET['page'] == 'cari') {
	include "pages/informasi/cari.php";
}

// jika halaman konten yang dipilih diskusi, panggil file diskusi
if ($_GET['page'] == 'diskusi') {
	include "pages/diskusi/view.php";
}

// jika halaman konten yang dipilih kontak, panggil file kontak
if ($_GET['page'] == 'kontak') {
	include "pages/kontak/view.php";
}
?>