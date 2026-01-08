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
            $judul              = mysqli_real_escape_string($mysqli, trim($_POST['judul']));
            $isi                = mysqli_real_escape_string($mysqli, trim($_POST['isi']));
            $kategori           = mysqli_real_escape_string($mysqli, trim($_POST['kategori']));
            
            $nama_file          = $_FILES['gambar']['name'];
            $ukuran_file        = $_FILES['gambar']['size'];
            $tipe_file          = $_FILES['gambar']['type'];
            $tmp_file           = $_FILES['gambar']['tmp_name'];
            
            // tentuka extension yang diperbolehkan
            $allowed_extensions = array('jpg','jpeg','png');
            
            // Set path folder tempat menyimpan gambarnya
            $path               = "../../../images/informasi/".$nama_file;
            
            // check extension
            $file               = explode(".", $nama_file);
            $extension          = array_pop($file);

            // Cek apakah tipe file yang diupload sesuai dengan allowed_extensions
            if(in_array($extension, $allowed_extensions)) {
                // Jika tipe file yang diupload sesuai dengan allowed_extensions, lakukan :
                if($ukuran_file <= 1000000) { // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
                    // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
                    // Proses upload
                    if(move_uploaded_file($tmp_file, $path)) { // Cek apakah gambar berhasil diupload atau tidak
                        // Jika gambar berhasil diupload, Lakukan : 
                        // perintah query untuk menyimpan data ke tabel informasi
                        $query = mysqli_query($mysqli, "INSERT INTO tbl_informasi(judul,isi,id_kategori,gambar) 
                                                        VALUES('$judul','$isi','$kategori','$nama_file')") 
                                                        or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

                        // cek query
                        if ($query) {
                            // jika berhasil tampilkan pesan berhasil simpan data
                            header("location: ../../main.php?module=informasi&alert=1");
                        }   
                    }   else {
                        // Jika gambar gagal diupload, tampilkan pesan gagal upload
                        header("location: ../../main.php?module=informasi&alert=4");
                    }
                } else {
                    // Jika ukuran file lebih dari 1MB, tampilkan pesan gagal upload
                    header("location: ../../main.php?module=informasi&alert=5");
                }
            } else {
                // Jika tipe file yang diupload bukan JPG / JPEG / PNG, tampilkan pesan gagal upload
                header("location: ../../main.php?module=informasi&alert=6");
            }
        }
    }


    elseif ($_GET['act']=='update') {
        if (isset($_POST['simpan'])) {
            if (isset($_POST['id_informasi'])) {
                // ambil data hasil submit dari form
                $id_informasi       = mysqli_real_escape_string($mysqli, trim($_POST['id_informasi']));
                $judul              = mysqli_real_escape_string($mysqli, trim($_POST['judul']));
                $isi                = mysqli_real_escape_string($mysqli, trim($_POST['isi']));
                $kategori           = mysqli_real_escape_string($mysqli, trim($_POST['kategori']));
                
                $nama_file          = $_FILES['gambar']['name'];
                $ukuran_file        = $_FILES['gambar']['size'];
                $tipe_file          = $_FILES['gambar']['type'];
                $tmp_file           = $_FILES['gambar']['tmp_name'];
                
                // tentuka extension yang diperbolehkan
                $allowed_extensions = array('jpg','jpeg','png');
                
                // Set path folder tempat menyimpan gambarnya
                $path               = "../../../images/informasi/".$nama_file;
                
                // check extension
                $file               = explode(".", $nama_file);
                $extension          = array_pop($file);

                if (empty($nama_file)) {

                    $query = mysqli_query($mysqli, "UPDATE tbl_informasi SET judul          = '$judul',
                                                                             isi            = '$isi',
                                                                             id_kategori    = '$kategori'
                                                                       WHERE id_informasi   = '$id_informasi'")
                                                    or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));
                            
                    if ($query) {
                        header("location: ../../main.php?module=informasi&alert=2");
                    }
                }

                else {
                    // Cek apakah tipe file yang diupload sesuai dengan allowed_extensions
                    if(in_array($extension, $allowed_extensions)) {
                        // Jika tipe file yang diupload sesuai dengan allowed_extensions, lakukan :
                        if($ukuran_file <= 1000000) { // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
                            // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
                            // Proses upload
                            if(move_uploaded_file($tmp_file, $path)) { // Cek apakah gambar berhasil diupload atau tidak
                                // Jika gambar berhasil diupload, Lakukan : 
                                // perintah query untuk menyimpan data ke tabel informasi
                                $query = mysqli_query($mysqli, "UPDATE tbl_informasi SET judul          = '$judul',
                                                                                         isi            = '$isi', 
                                                                                         id_kategori    = '$kategori',
                                                                                         gambar         = '$nama_file' 
                                                                                   WHERE id_informasi   = '$id_informasi'") 
                                                                or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));

                                if ($query) {
                                    header("location: ../../main.php?module=informasi&alert=2");
                                }  
                            }   
                            else {
                                // Jika gambar gagal diupload, tampilkan pesan gagal upload
                                header("location: ../../main.php?module=informasi&alert=4");
                            }
                        } 
                        else {
                            // Jika ukuran file lebih dari 1MB, tampilkan pesan gagal upload
                            header("location: ../../main.php?module=informasi&alert=5");
                        }
                    } 
                    else {
                        // Jika tipe file yang diupload bukan JPG / JPEG / PNG, tampilkan pesan gagal upload
                        header("location: ../../main.php?module=informasi&alert=6");
                    } 
                }
            }
        }
    } 

    elseif ($_GET['act']=='delete') {
            if (isset($_GET['id'])) {
                $id_informasi = $_GET['id'];
        
                // perintah query untuk menghapus data pada tabel warta
                $query = mysqli_query($mysqli, "DELETE FROM tbl_informasi WHERE id_informasi='$id_informasi'") 
                                                or die('Ada kesalahan pada query delete : '.mysqli_error($mysqli));

                // cek hasil query
                if ($query) {
                    // jika berhasil tampilkan pesan berhasil delete data
                    header("location: ../../main.php?module=informasi&alert=3");
                }
            }
    }
}
?>