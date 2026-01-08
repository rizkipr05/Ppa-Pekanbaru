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
            $nama     = mysqli_real_escape_string($mysqli, trim($_POST['nama']));
            $alamat   = mysqli_real_escape_string($mysqli, trim($_POST['alamat']));
            $telepon  = mysqli_real_escape_string($mysqli, trim($_POST['telepon']));
            $bidang   = mysqli_real_escape_string($mysqli, trim($_POST['bidang']));
            $email    = mysqli_real_escape_string($mysqli, trim($_POST['email']));
            $username = mysqli_real_escape_string($mysqli, trim($_POST['username']));
            $password = md5(mysqli_real_escape_string($mysqli, trim($_POST['password'])));

            // perintah query untuk menyimpan data ke tabel klien
            $query = mysqli_query($mysqli, "INSERT INTO tbl_konselor(nama_konselor,alamat,telepon,bidang,email,username,password)
                                            VALUES('$nama','$alamat','$telepon','$bidang','$email','$username','$password')")
                                            or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));   

            // cek query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil simpan data
                header("location: ../../main.php?module=konselor&alert=1");
            }   
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['simpan'])) {
            if (isset($_POST['id_konselor'])) {
                // ambil data hasil submit dari form
                $id_konselor = mysqli_real_escape_string($mysqli, trim($_POST['id_konselor']));
                $nama        = mysqli_real_escape_string($mysqli, trim($_POST['nama']));
                $alamat      = mysqli_real_escape_string($mysqli, trim($_POST['alamat']));
                $telepon     = mysqli_real_escape_string($mysqli, trim($_POST['telepon']));
                $bidang      = mysqli_real_escape_string($mysqli, trim($_POST['bidang']));
                $email       = mysqli_real_escape_string($mysqli, trim($_POST['email']));
                $username    = mysqli_real_escape_string($mysqli, trim($_POST['username']));
                $password    = md5(mysqli_real_escape_string($mysqli, trim($_POST['password'])));

                if(empty($_POST['password'])){
                    $query = mysqli_query($mysqli, "UPDATE tbl_konselor SET nama_konselor   = '$nama', 
                                                                            alamat          = '$alamat', 
                                                                            telepon         = '$telepon', 
                                                                            bidang          = '$bidang', 
                                                                            email           = '$email',
                                                                            username        = '$username' 
                                                                      WHERE id_konselor     = '$id_konselor'") 
                                                    or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));
                    
                    // cek query
                    if ($query) {
                        // jika berhasil tampilkan pesan berhasil update data
                        header("location: ../../main.php?module=konselor&alert=2");
                    }
                }
                else{
                    $query = mysqli_query($mysqli, "UPDATE tbl_konselor SET nama_konselor   = '$nama', 
                                                                            alamat          = '$alamat',
                                                                            telepon         = '$telepon',
                                                                            bidang          = '$bidang',
                                                                            email           = '$email',
                                                                            username        = '$username' 
                                                                            password        = '$password'
                                                                      WHERE id_konselor     = '$id_konselor'") 
                                                    or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));
                    
                    // cek query
                    if ($query) {
                        // jika berhasil tampilkan pesan berhasil update data
                        header("location: ../../main.php?module=konselor&alert=2");
                    }
                }
                
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $id_konselor = $_GET['id'];
    
            // perintah query untuk menghapus data pada tabel klien
            $query = mysqli_query($mysqli, "DELETE FROM tbl_konselor WHERE id_konselor='$id_konselor'")
                                            or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));

            // cek hasil query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil delete data
                header("location: ../../main.php?module=konselor&alert=3");
            }
        }
    }       
}       
?>