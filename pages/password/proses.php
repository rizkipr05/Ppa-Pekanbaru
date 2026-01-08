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
        if (isset($_SESSION['id_klien'])) {
            // ambil data hasil submit dari form
            $old_pass    = md5(mysqli_real_escape_string($mysqli, trim($_POST['old_pass'])));
            $new_pass    = md5(mysqli_real_escape_string($mysqli, trim($_POST['new_pass'])));
            $retype_pass = md5(mysqli_real_escape_string($mysqli, trim($_POST['retype_pass'])));

            // ambil data hasil session user
            $id_klien = $_SESSION['id_klien'];

            // seleksi password dari tabel pelanggan untuk dicek
            $sql = mysqli_query($mysqli, "SELECT password FROM tbl_klien WHERE id_klien=$id_klien")
                                          or die('Ada kesalahan pada query seleksi password : '.mysqli_error($mysqli));
            $data = mysqli_fetch_assoc($sql);

            // fungsi untuk pengecekan password sebelum diubah 
            // jika input password lama tidak sama dengan password di database, 
            // alihkan ke halaman ubah password dan tampilkan pesan = 1
            if ($old_pass != $data['password']){
                header("Location: ../../main.php?page=password&alert=1");
            }

            // jika input password lama sama dengan password didatabase, jalankan perintah untuk pengecekan selanjutnya
            else {

                // jika input password baru tidak sama dengan input ulangi password baru, 
                // alihkan ke halaman ubah password dan tampilkan pesan = 2 
                if ($new_pass != $retype_pass){
                        header("Location: ../../main.php?page=password&alert=2");
                }

                // selain itu, jalankan perintah update password
                else {
                    // perintah query untuk mengubah data pada tabel admin
                    $query = mysqli_query($mysqli, "UPDATE tbl_klien SET password = '$new_pass'
                                                                  WHERE id_klien  = '$id_klien'")
                                                    or die('Ada kesalahan pada query update password : '.mysqli_error($mysqli));   

                    // cek query
                    if ($query) {
                        // jika berhasil tampilkan pesan berhasil update data
                        header("location: ../../main.php?page=password&alert=3");
                    }   
                }
            }
        }
    }   
}               
?>