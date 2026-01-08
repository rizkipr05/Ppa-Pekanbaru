<?php
session_start();

// Panggil koneksi database.php untuk koneksi database
require_once "../../config/database.php";

// Panggil library PHPMailer
require '../../admin/assets/plugins/PHPMailer/PHPMailerAutoload.php';

// fungsi untuk pengecekan status login user 
// jika user belum login, alihkan ke halaman login dan tampilkan pesan = 1
if (empty($_SESSION['email_klien']) && empty($_SESSION['password_klien'])){
    echo "<script type='text/javascript'>alert('Anda harus login terlebih dahulu!');</script>
		  <meta http-equiv='refresh' content='0; url=../../index.php'>";
}
// jika user sudah login, maka jalankan perintah untuk ubah password
else {
    if ($_GET['act']=='insert') {
    	if (isset($_POST['kirim'])) {
			// ambil data hasil submit dari form
			$id_konselor = mysqli_real_escape_string($mysqli, trim($_POST['konselor']));
			$id_jenis    = mysqli_real_escape_string($mysqli, trim($_POST['jenis']));
			$pertanyaan  = mysql_real_escape_string(trim($_POST['pertanyaan']));
			
			$id_klien    = $_SESSION['id_klien'];
            $nama_klien  = $_SESSION['nama_klien'];

			// maka jalankan perintah query untuk mengubah data pada tabel konsultasi
			$query = mysqli_query($mysqli, "INSERT INTO tbl_konsultasi(id_klien,id_konselor,id_jenis,pertanyaan)
											VALUES('$id_klien','$id_konselor','$id_jenis','$pertanyaan')")
		                                    or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));

	        // cek query
	        if ($query) {

                $query_jenis = mysqli_query($mysqli, "SELECT * FROM tbl_jenis_konsultasi
                                                    WHERE id_jenis='$id_jenis'")
                                                    or die('Ada kesalahan pada query jenis: '.mysqli_error($mysqli));
          
                $data_jenis = mysqli_fetch_assoc($query_jenis);
                $nama_jenis = $data_jenis['nama_jenis'];

                $query_konselor = mysqli_query($mysqli, "SELECT * FROM tbl_konselor
                                                        WHERE id_konselor='$id_konselor'")
                                                        or die('Ada kesalahan pada query konselor: '.mysqli_error($mysqli));
          
                $data_konselor = mysqli_fetch_assoc($query_konselor);
                $email = $data_konselor['email'];

                $tmp_file = $_FILES['surat']['tmp_name'];
                $allowed_extensions = array('doc','docx');

                // $mail = new PHPMailer;

                // $mail->isSMTP();                                    // Set mailer to use SMTP
                // $mail->Host = 'ssl://smtp.gmail.com';                     // Specify main and backup SMTP servers
                // $mail->SMTPAuth = true;                             // Enable SMTP authentication
                // $mail->Username = 'imamranggabakti@gmail.com';             // SMTP username
                // $mail->Password = 'ppks123456';               // SMTP password
                // $mail->SMTPSecure = 'ssl';                          // Enable TLS encryption, `ssl` also accepted
                // $mail->Port = 587;                                  // TCP port to connect to

                // $mail->setFrom('ppks.pekanbaru@gmail.com', 'PPKS-BKKBN Pekanbaru');
                // $mail->addReplyTo('ppks.pekanbaru@gmail.com', 'PPKS - BKKBN Pekanbaru');

                // $mail->addAddress($email);              // Add a recipient

                // $mail->addCC('cc@example.com');
                // $mail->addBCC('bcc@example.com');

                // $mail->addAttachment($tmp_file, 'Surat Balasan');        // Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');       // Optional name

                // $mail->isHTML(true);  // Set email format to HTML

                // $bodyContent = '<h1>PPA POLRTESSTA Pekanbaru</h1>';
                // $bodyContent .= '<p>Anda mendapatkan pertanyaan baru dari <strong>'.$nama_klien.'</strong>.</p>';
                // $bodyContent .= '<p><strong>Pertanyaan : </strong></p>';
                // $bodyContent .= '<p>'.$pertanyaan.'</p>';
                // $bodyContent .= '<p>Balas pertanyaan <a href="http://localhost/ppks/admin/"><strong>KLIK DISINI</strong></a> : </p>';

                // $mail->Subject = $nama_jenis;
                // $mail->Body    = $bodyContent;

                // if(!$mail->send()) {
                //     echo 'Message could not be sent.';
                //     echo 'Mailer Error: ' . $mail->ErrorInfo;
                // }
                  {
                    // jika berhasil tampilkan pesan berhasil insert data
                    header("location: ../../main.php?page=konsultasi&alert=1");
                }

	        } 
		}
    }

    if ($_GET['act']=='reply') {
        if (isset($_POST['kirim'])) {
            // ambil data hasil submit dari form
			$id_klien      = mysqli_real_escape_string($mysqli, trim($_POST['id_klien']));
			$id_konselor   = mysqli_real_escape_string($mysqli, trim($_POST['id_konselor']));
			$id_jenis      = mysqli_real_escape_string($mysqli, trim($_POST['id_jenis']));
			$pertanyaan    = mysqli_real_escape_string($mysqli, trim($_POST['pertanyaan']));
			$status        = "y";
			$balas         = mysqli_real_escape_string($mysqli, trim($_POST['id_konsultasi']));
			$id_konsultasi = mysqli_real_escape_string($mysqli, trim($_POST['jawaban']));

            $nama_klien  = $_SESSION['nama_klien'];

            // perintah query untuk menyimpan data ke tabel nelayan
            $query = mysqli_query($mysqli, "INSERT INTO tbl_konsultasi(id_klien,id_konselor,id_jenis,pertanyaan,balas)
                                            VALUES('$id_klien','$id_konselor','$id_jenis','$pertanyaan','$balas')")
                                            or die('Ada kesalahan pada query insert : '.mysqli_error($mysqli));    

            // cek query
            if ($query) {
                // perintah query untuk mengubah data pada tabel konsultasi
                $query2 = mysqli_query($mysqli, "UPDATE tbl_konsultasi SET status = '$status'
                                                              WHERE id_konsultasi = '$id_konsultasi'")
                                                or die('Ada kesalahan pada query update status : '.mysqli_error($mysqli));

                // cek query
                if ($query2) {

                    $query_jenis = mysqli_query($mysqli, "SELECT * FROM tbl_jenis_konsultasi
                                                        WHERE id_jenis='$id_jenis'")
                                                        or die('Ada kesalahan pada query jenis: '.mysqli_error($mysqli));
              
                    $data_jenis = mysqli_fetch_assoc($query_jenis);
                    $nama_jenis = $data_jenis['nama_jenis'];

                    $query_konselor = mysqli_query($mysqli, "SELECT * FROM tbl_konselor
                                                            WHERE id_konselor='$id_konselor'")
                                                            or die('Ada kesalahan pada query konselor: '.mysqli_error($mysqli));
              
                    $data_konselor = mysqli_fetch_assoc($query_konselor);
                    $email = $data_konselor['email'];

                    // $tmp_file = $_FILES['surat']['tmp_name'];
                    // $allowed_extensions = array('doc','docx');

                    $mail = new PHPMailer;

                    $mail->isSMTP();                                    // Set mailer to use SMTP
                    $mail->Host = 'smtp.gmail.com';                     // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                             // Enable SMTP authentication
                    $mail->Username = 'ppkspekanbaru@gmail.com';             // SMTP username
                    $mail->Password = 'ppks12345';               // SMTP password
                    $mail->SMTPSecure = 'tls';                          // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = 587;                                  // TCP port to connect to

                    $mail->setFrom('ppkspekanbaru@gmail.com', 'PPKS-BKKBN Pekanbaru');
                    $mail->addReplyTo('ppkspekanbaru@gmail.com', 'PPKS-BKKBN Pekanbaru');

                    $mail->addAddress($email);              // Add a recipient

                    // $mail->addCC('cc@example.com');
                    // $mail->addBCC('bcc@example.com');

                    // $mail->addAttachment($tmp_file, 'Surat Balasan');        // Add attachments
                    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');       // Optional name

                    $mail->isHTML(true);  // Set email format to HTML

                    $bodyContent = '<h1>PPKS-BKKBN Pekanbaru</h1>';
                    $bodyContent .= '<p>Anda mendapatkan pertanyaan baru dari <strong>'.$nama_klien.'</strong>.</p>';
                    $bodyContent .= '<p><strong>Pertanyaan : </strong></p>';
                    $bodyContent .= '<p>'.$pertanyaan.'</p>';
                    $bodyContent .= '<p>Balas pertanyaan <a href="http://localhost/ppks/admin/"><strong>KLIK DISINI</strong></a> : </p>';

                    $mail->Subject = $nama_jenis;
                    $mail->Body    = $bodyContent;

                    if(!$mail->send()) {
                        echo 'Message could not be sent.';
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                        // jika berhasil tampilkan pesan berhasil simpan data
                        header("location: ../../main.php?page=form_konsultasi&form=detail&id=$balas&jawaban=$id_konsultasi");
                    }
                }
            }   
        }   
    }

    elseif ($_GET['act']=='update_status') {
        if (isset($_GET['id'])) {
            // ambil data hasil submit dari form
            $id_konsultasi = mysqli_real_escape_string($mysqli, trim($_GET['jawaban']));
            $status        = "y";

            // perintah query untuk mengubah data pada tabel konsultasi
            $query = mysqli_query($mysqli, "UPDATE tbl_konsultasi SET status = '$status'
                                                         WHERE id_konsultasi = '$id_konsultasi'")
                                            or die('Ada kesalahan pada query update status : '.mysqli_error($mysqli));
            
            // cek query
            if ($query) {
                // jika berhasil tampilkan pesan berhasil update data
                header("location: ../../main.php?page=konsultasi");
            }       
        }
    }	
}
?>