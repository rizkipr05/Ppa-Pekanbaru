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
            $tempat_lahir  = mysqli_real_escape_string($mysqli, trim($_POST['tempat_lahir']));
            $tanggal       = $_POST['tanggal_lahir'];
            $tgl           = explode('-',$tanggal);
            $tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];
            
            $jenis_kelamin  = mysqli_real_escape_string($mysqli, trim($_POST['jenis_kelamin']));
            $alamat         = mysqli_real_escape_string($mysqli, trim($_POST['alamat']));
            $telepon        = mysqli_real_escape_string($mysqli, trim($_POST['telepon']));
            $pekerjaan      = mysqli_real_escape_string($mysqli, trim($_POST['pekerjaan']));
            $username       = mysqli_real_escape_string($mysqli, trim($_POST['username']));
            $email          = mysqli_real_escape_string($mysqli, trim($_POST['email']));
            $password       = md5(mysqli_real_escape_string($mysqli, trim($_POST['password'])));

            // perintah query untuk menyimpan data ke tabel klien
            $query = mysqli_query($mysqli, "INSERT INTO tbl_klien(nama_klien,tempat_lahir,tanggal_lahir,jenis_kelamin,alamat,telepon,pekerjaan,username,email,password)
                                            VALUES('$nama','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$alamat','$telepon','$pekerjaan','$username','$email','$password')")
                                            or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

            // cek query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil simpan data
                header("location: ../../main.php?module=klien&alert=1");
            }   
        }   
    }
    
    elseif ($_GET['act']=='update') {
        if (isset($_POST['simpan'])) {
            if (isset($_POST['id_klien'])) {
                // ambil data hasil submit dari form
                $id_klien      = mysqli_real_escape_string($mysqli, trim($_POST['id_klien']));
                $nama          = mysqli_real_escape_string($mysqli, trim($_POST['nama']));
                $tempat_lahir  = mysqli_real_escape_string($mysqli, trim($_POST['tempat_lahir']));

                $tanggal       = $_POST['tanggal_lahir'];
                $tgl           = explode('-',$tanggal);
                $tanggal_lahir = $tgl[2]."-".$tgl[1]."-".$tgl[0];

                $jenis_kelamin  = mysqli_real_escape_string($mysqli, trim($_POST['jenis_kelamin']));
                $alamat         = mysqli_real_escape_string($mysqli, trim($_POST['alamat']));
                $telepon        = mysqli_real_escape_string($mysqli, trim($_POST['telepon']));
                $pekerjaan      = mysqli_real_escape_string($mysqli, trim($_POST['pekerjaan']));
                $username       = mysqli_real_escape_string($mysqli, trim($_POST['username']));
                $email          = mysqli_real_escape_string($mysqli, trim($_POST['email']));
                $password       = md5(mysqli_real_escape_string($mysqli, trim($_POST['password'])));

                if(empty($_POST['password'])){
                    // perintah query untuk mengubah data pada tabel klien
                    $query = mysqli_query($mysqli, "UPDATE tbl_klien SET  nama_klien = '$nama',
                                                                        tempat_lahir        = '$tempat_lahir',
                                                                        tanggal_lahir       = '$tanggal_lahir',
                                                                        jenis_kelamin       = '$jenis_kelamin',
                                                                        alamat              = '$alamat', 
                                                                        telepon             = '$telepon',
                                                                        pekerjaan           = '$pekerjaan', 
                                                                        username            = '$username',
                                                                        email               = '$email'
                                                                  WHERE id_klien            = '$id_klien'")
                                                    or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));
                    
                    // cek query
                    if ($query) {
                        // jika berhasil tampilkan pesan berhasil update data
                        header("location: ../../main.php?module=klien&alert=2");
                    }
                }
                else{
                    $query = mysqli_query($mysqli, "UPDATE tbl_klien SET  nama_klien = '$nama',
                                                                        tempat_lahir        = '$tempat_lahir',
                                                                        tanggal_lahir       = '$tanggal_lahir',
                                                                        jenis_kelamin       = '$jenis_kelamin',
                                                                        alamat              = '$alamat', 
                                                                        telepon             = '$telepon',
                                                                        pekerjaan           = '$pekerjaan', 
                                                                        username            = '$username',
                                                                        email               = '$email',
                                                                        password            = '$password'
                                                                  WHERE id_klien            = '$id_klien'")
                                                    or die('Ada kesalahan pada query update : '.mysqli_error($mysqli));
                    
                    // cek query
                    if ($query) {
                        // jika berhasil tampilkan pesan berhasil update data
                        header("location: ../../main.php?module=klien&alert=2");
                    }
                }
                
            }
        }
    }

    elseif ($_GET['act']=='delete') {
        if (isset($_GET['id'])) {
            $id_klien = $_GET['id'];
    
            // perintah query untuk menghapus data pada tabel klien
            $query = mysqli_query($mysqli, "DELETE FROM tbl_klien WHERE id_klien='$id_klien'")
                                            or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));

            // cek hasil query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil delete data
                header("location: ../../main.php?module=klien&alert=3");
            }
        }
    }       
}       
?>
