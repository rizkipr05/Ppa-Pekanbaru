<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../../config/database.php";

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk insert, update, dan delete
else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['simpan'])) {
            // ambil data hasil submit dari form
            // mysqli_real_escape_string : menghindari dr sql injection
            // trim : menghilangkan spasi tidak penting
            $nama          = mysqli_real_escape_string($mysqli, trim($_POST['nama']));

            // perintah query untuk menyimpan data ke tabel klien
            $query = mysqli_query($mysqli, "INSERT INTO tbl_jenis_konsultasi(nama_jenis)
                                            VALUES('$nama')")
                                            or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));   

            // cek query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil simpan data
                header("location: ../../main.php?module=jenis&alert=1");
            }   
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['simpan'])) {
            if (isset($_POST['id_jenis'])) {
                // ambil data hasil submit dari form
                // 
            $id_jenis      = mysqli_real_escape_string($mysqli, trim($_POST['id_jenis']));
            $nama          = mysqli_real_escape_string($mysqli, trim($_POST['nama']));

            
            $query         = mysqli_query($mysqli, "UPDATE tbl_jenis_konsultasi SET nama_jenis = '$nama' WHERE id_jenis = '$id_jenis'") or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));
                    
                    if ($query) {
                        // jika berhasil tampilkan pesan berhasil update data
                        header("location: ../../main.php?module=jenis&alert=2");
                    }
                }
                
            }
        }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $id_jenis = $_GET['id'];
    
            // perintah query untuk menghapus data pada tabel klien
            $query = mysqli_query($mysqli, "DELETE FROM tbl_jenis_konsultasi WHERE id_jenis='$id_jenis'")
                                            or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));

            // cek hasil query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil delete data
                header("location: ../../main.php?module=jenis&alert=3");
            }
        }
    }       
}       
?>