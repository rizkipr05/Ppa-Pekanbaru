<?php
// Panggil koneksi database.php untuk koneksi database
require_once "../../config/database.php";

if ($_GET['act']=='insert') {
    if (isset($_POST['submit'])) {
        // ambil data hasil submit dari form
        $nama       = mysqli_real_escape_string($mysqli, trim($_POST['nama']));
        $email      = mysqli_real_escape_string($mysqli, trim($_POST['email']));
        $pertanyaan = mysqli_real_escape_string($mysqli, trim($_POST['pertanyaan']));

        // perintah query untuk menyimpan data ke tabel diskusi
        $query = mysqli_query($mysqli, "INSERT INTO tbl_diskusi(nama,email,pertanyaan)
                                        VALUES('$nama','$email','$pertanyaan')")
                                        or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

        // cek query
        if ($query) {
            // jika berhasil tampilkan pesan berhasil simpan data
            header("location: ../../main.php?page=diskusi");
        }   
    }   
}    
?>