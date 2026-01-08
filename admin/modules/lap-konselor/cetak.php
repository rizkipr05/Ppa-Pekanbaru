<?php
session_start();
ob_start();

// panggil file database.php untuk koneksi ke database
require_once "../../../config/database.php";
// panggil fungsi untuk format tanggal
require_once "../../../config/fungsi_tanggal.php";

$hari_ini = date("d-m-Y");

// fungsi query untuk menampilkan data dari tabel siswa dan kelas
$query = mysqli_query($mysqli, "SELECT * FROM tbl_konselor ORDER BY nama_konselor ASC")
                                or die('Ada kesalahan pada query tampil data konselor: '.mysqli_error($mysqli));

$rows = mysqli_num_rows($query);
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>LAPORAN DATA KONSELOR</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
    </head>
    <body>
        <div id="title-perusahaan">
            PUNIT PERLINDUNGAN PEREMPUAN DAN ANAK (PPA)
        </div>

        <div id="title-perusahaan">
            POLRESTA PEKANBARU PROVINSI RIAU </div>

        <div id="title-alamat">Alamat : Jl. Jend. Ahmad Yani No.11, Kel. Sago, Kec. Senapelan, Kota Pekanbaru, Riau,Riau Indonesia&nbsp;</div>

        <div style="margin:-70px 0 0 120px">
            <img src="../../assets/img/logo-ppa.png" height="60">
        </div>

        <hr><br>

        <div id="title">
            LAPORAN DATA KONSELOR
        </div>

        <br>

        <div id="isi">
            <table width="100%" border="0.5" cellpadding="0" cellspacing="0">
                <tr class="tr-title">
                    <th height="25" align="center" valign="middle">No.</th>
                    <th height="25" align="center" valign="middle">Nama</th>
                    <th height="25" align="center" valign="middle">Alamat</th>
                    <th height="25" align="center" valign="middle">Telepon</th>
                    <th height="25" align="center" valign="middle">Bidang</th>
                    <th height="25" align="center" valign="middle">Email</th>
                </tr>

                <?php
                for($i=1; $i<=$rows; $i++) {
                    $data    = mysqli_fetch_assoc($query);
                    
                    $nama    = $data['nama_konselor'];
                    $alamat  = $data['alamat'];
                    $telepon = $data['telepon'];
                    $bidang  = $data['bidang'];
                    $email   = $data['email'];
                ?>  
                <tr>
                    <td width="50" height="14" align="center" valign="middle"><?=$i?></td>
                    <td style="padding-left:5px;" width="170" height="14" valign="middle"><?=$nama?></td>
                    <td style="padding-left:5px;" width="260" height="14" valign="middle"><?=$alamat?></td>
                    <td width="100" height="14" align="center" valign="middle"><?=$telepon?></td>
                    <td style="padding-left:5px;" width="260" height="14" valign="middle"><?=$bidang?></td>
                    <td style="padding-left:5px;" width="150" height="14" valign="middle"><?=$email?></td>
                </tr>
                <?php 
                } 
                ?>
            </table>
        </div>

        <div id="footer-tanggal">
            Pekanbaru, <?php echo tgl_eng_to_ind($hari_ini); ?> <br>
        </div>

        <div id="footer-nama">
            Bripka Asbon Sirait,SH.
        </div>

        <div id="footer-nip">
          
        </div>
    </body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename="LAPORAN DATA KONSELOR.pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
//==========================================================================================================
$content = ob_get_clean();
$content = '<page style="font-family: freeserif">'.($content).'</page>';
require_once('../../assets/html2pdf_v4.03/html2pdf.class.php');
try
{
    $html2pdf = new HTML2PDF('L','A4','en', false, 'ISO-8859-15',array(8, 10, 8, 10));
    $html2pdf->setDefaultFont('Arial');
    $html2pdf->writeHTML($content, isset($_GET['vuehtml']));
    $html2pdf->Output($filename);
}
catch(HTML2PDF_exception $e) { echo $e; }
?>