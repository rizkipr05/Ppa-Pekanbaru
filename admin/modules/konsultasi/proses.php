<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../../config/database.php";
// Panggil library PHPMailer
require '../../assets/plugins/PHPMailer/PHPMailerAutoload.php';

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['username']) && empty($_SESSION['password'])){
    echo "<meta http-equiv='refresh' content='0; url=index.php?alert=1'>";
}
// jika user sudah login, maka jalankan perintah untuk insert, update, dan delete
else {
    if ($_GET['act']=='insert') {
        if (isset($_POST['balas'])) {
            // ambil data hasil submit dari form
            $id_klien      = mysqli_real_escape_string($mysqli, trim($_POST['id_klien']));
            $id_konselor   = mysqli_real_escape_string($mysqli, trim($_POST['id_konselor']));
            $id_jenis      = mysqli_real_escape_string($mysqli, trim($_POST['id_jenis']));
            $jawaban       = mysqli_real_escape_string($mysqli, trim($_POST['jawaban']));
            $status        = "y";
            $balas         = mysqli_real_escape_string($mysqli, trim($_POST['id_konsultasi']));
            
            $nama_konselor = $_SESSION['nama_user'];

            // perintah query untuk menyimpan data ke tabel nelayan
            $query = mysqli_query($mysqli, "INSERT INTO tbl_konsultasi(id_klien,id_konselor,id_jenis,jawaban,balas)
                                            VALUES('$id_klien','$id_konselor','$id_jenis','$jawaban','$balas')")
                                            or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

            // cek query
            if ($query) {
                // perintah query untuk mengubah data pada tabel konsultasi
                $query2 = mysqli_query($mysqli, "UPDATE tbl_konsultasi SET status = '$status'
                                                              WHERE id_konsultasi = '$balas' OR balas='$balas' AND pertanyaan!=''")
                                                or die('Ada kesalahan pada query update status : '.mysqli_error($mysqli));

                // cek query
                if ($query2) {

                    $query_jenis = mysqli_query($mysqli, "SELECT * FROM tbl_jenis_konsultasi
                                                        WHERE id_jenis='$id_jenis'")
                                                        or die('Ada kesalahan pada query jenis: '.mysqli_error($mysqli));
              
                    $data_jenis = mysqli_fetch_assoc($query_jenis);
                    $nama_jenis = $data_jenis['nama_jenis'];

                    $query_klien = mysqli_query($mysqli, "SELECT * FROM tbl_klien
                                                        WHERE id_klien='$id_klien'")
                                                        or die('Ada kesalahan pada query klien: '.mysqli_error($mysqli));
              
                    $data_klien = mysqli_fetch_assoc($query_klien);
                    $email = $data_klien['email'];

                    $tmp_file = $_FILES['surat']['tmp_name'];
                    $allowed_extensions = array('doc','docx');

                    // $mail = new PHPMailer;

                    // $mail->isSMTP();                                    // Set mailer to use SMTP
                    // $mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
                    // $mail->SMTPAuth = true;                             // Enable SMTP authentication
                    // $mail->Username = 'ppks.lampung@gmail.com';             // SMTP username
                    // $mail->Password = 'ppks123456';               // SMTP password
                    // $mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
                    // $mail->Port = 587;                                  // TCP port to connect to

                    // $mail->setFrom('ppks.lampung@gmail.com', 'PPKS Siger Kencana');
                    // $mail->addReplyTo('ppks.lampung@gmail.com', 'PPKS Siger Kencana');

                    // $mail->addAddress($email);              // Add a recipient

                    // // $mail->addCC('cc@example.com');
                    // // $mail->addBCC('bcc@example.com');

                    // // $mail->addAttachment($tmp_file, 'Surat Balasan');        // Add attachments
                    // // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');       // Optional name

                    // $mail->isHTML(true);  // Set email format to HTML

                    // $bodyContent = '<h1>PPKS Siger Kencana</h1>';
                    // $bodyContent .= '<p>Anda mendapatkan jawaban baru dari <strong>'.$nama_konselor.'</strong>.</p>';
                    // $bodyContent .= '<p><strong>Jawaban : </strong></p>';
                    // $bodyContent .= '<p>'.$jawaban.'</p>';
                    // $bodyContent .= '<p>Balas <a href="http://localhost/ppks/main.php?page=login"><strong>KLIK DISINI</strong></a> : </p>';

                    // $mail->Subject = $nama_jenis;
                    // $mail->Body    = $bodyContent;

                    // if(!$mail->send()) {
                    //     echo 'Message could not be sent.';
                    //     echo 'Mailer Error: ' . $mail->ErrorInfo;
                    // } else
                     {
                        // jika berhasil tampilkan pesan berhasil simpan data
                        header("location: ../../main.php?module=form_konsultasi&form=detail&id=$balas");
                    }
                }
            }   
        }   
    }

    elseif ($_GET['act']=='update_status') {
        if (isset($_GET['id'])) {
            // ambil data hasil submit dari form
            $id_konsultasi = mysqli_real_escape_string($mysqli, trim($_GET['id']));
            $status        = "y";

            // perintah query untuk mengubah data pada tabel konsultasi
            $query = mysqli_query($mysqli, "UPDATE tbl_konsultasi SET status = '$status'
                                                         WHERE id_konsultasi = '$id_konsultasi' OR balas='$id_konsultasi' AND pertanyaan!=''")
                                            or die('Ada kesalahan pada query update status : '.mysqli_error($mysqli));
            
            // cek query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil update data
                header("location: ../../main.php?module=konsultasi");
            }       
        }
    }       
}       
?>