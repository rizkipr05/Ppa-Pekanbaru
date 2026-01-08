<?php
session_start();
ob_start();

// panggil file database.php untuk koneksi ke database
require_once "../../../config/database.php";
// panggil fungsi untuk format tanggal
require_once "../../../config/fungsi_tanggal.php";
// panggil fungsi untuk menampilkan usia
require_once "../../../config/fungsi_usia.php";

$hari_ini = date("d-m-Y");

// ambil data dari submit form
if (isset($_GET['bulan'])) {
    if ($_GET['bulan']=='1') {
        $bulan = "Januari";
    } elseif ($_GET['bulan']=='2') {
        $bulan = "Februari";
    } elseif ($_GET['bulan']=='3') {
        $bulan = "Maret";
    } elseif ($_GET['bulan']=='4') {
        $bulan = "April";
    } elseif ($_GET['bulan']=='5') {
        $bulan = "Mei";
    } elseif ($_GET['bulan']=='6') {
        $bulan = "Juni";
    } elseif ($_GET['bulan']=='7') {
        $bulan = "Juli";
    } elseif ($_GET['bulan']=='8') {
        $bulan = "Agustus";
    } elseif ($_GET['bulan']=='9') {
        $bulan = "September";
    } elseif ($_GET['bulan']=='10') {
        $bulan = "Oktober";
    } elseif ($_GET['bulan']=='11') {
        $bulan = "November";
    } elseif ($_GET['bulan']=='12') {
        $bulan = "Desember";
    }

    $tahun = $_GET['tahun'];
} else {
    $bulan = "";
    $tahun = "";
}

// fungsi query untuk menampilkan data dari tabel siswa dan kelas
$query = mysqli_query($mysqli, "SELECT a.id_konsultasi,a.tanggal,a.id_klien,a.id_konselor,a.id_jenis,a.balas,
                                b.nama_klien,b.tanggal_lahir,b.jenis_kelamin,b.pekerjaan,
                                c.nama_konselor,d.nama_jenis
                                FROM tbl_konsultasi as a INNER JOIN tbl_klien as b INNER JOIN tbl_konselor as c INNER JOIN tbl_jenis_konsultasi as d
                                ON a.id_klien=b.id_klien AND a.id_konselor=c.id_konselor AND a.id_jenis=d.id_jenis
                                WHERE EXTRACT(MONTH FROM a.tanggal)='$_GET[bulan]' AND EXTRACT(YEAR FROM a.tanggal)='$_GET[tahun]' AND a.balas='0'
                                ORDER BY a.id_konsultasi ASC")
                                or die('Ada kesalahan pada query tampil data konsultasi: '.mysqli_error($mysqli));

$rows = mysqli_num_rows($query);
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>LAPORAN KONSULTASI KLIEN</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" />
    </head>
    <body>
        <div id="title-perusahaan">
            UNIT PERLINDUNGAN PEREMPUAN DAN ANAK (PPA)
        </div>

        <div id="title-perusahaan">POLRESTA PEKANBARU PROVINSI RIAU </div>

        <div id="title-alamat">Alamat : Jl. Jend. Ahmad Yani No.11, Kel. Sago, Kec. Senapelan, Kota Pekanbaru, Riau,Riau Indonesia&nbsp;</div>

        <div style="margin:-70px 0 0 120px">
            <img src="../../assets/img/logo-ppa.png" height="60">
        </div>

        <hr><br>

        <div id="title">
            LAPORAN KONSULTASI KLIEN
        </div>

        <div id="title-tanggal">
            Bulan <?php echo $bulan; ?> <?php echo $tahun; ?>
        </div>

        <br>

        <div id="isi">
            <table width="100%" border="0.5" cellpadding="0" cellspacing="0">
                <tr class="tr-title">
                    <th height="25" align="center" valign="middle">No.</th>
                    <th height="25" align="center" valign="middle">Tanggal</th>
                    <th height="25" align="center" valign="middle">Nama Klien</th>
                    <th height="25" align="center" valign="middle">Usia</th>
                    <th height="25" align="center" valign="middle">L/P</th>
                    <th height="25" align="center" valign="middle">Pekerjaan</th>
                    <th height="25" align="center" valign="middle">Kasus yang dihadapi</th>
                    <th height="25" align="center" valign="middle">Konselor</th>
                </tr>

                <?php
                for($i=1; $i<=$rows; $i++) {
                    $data    = mysqli_fetch_assoc($query);
                    
                    $tgl        = substr($data['tanggal'],0,10);
                    $exp        = explode('-',$tgl);
                    $tanggal    = $exp[2]."-".$exp[1]."-".$exp[0];
                    
                    $nama_klien = $data['nama_klien'];
                    
                    $usia       = get_age($data['tanggal_lahir']);
                    
                    
                    if ($data['jenis_kelamin']=='Laki-laki') {
                        $jenis_kelamin = "L";
                    }
                    else{
                        $jenis_kelamin = "P";
                    }

                    $pekerjaan     = $data['pekerjaan'];
                    $nama_jenis    = $data['nama_jenis'];
                    $nama_konselor = $data['nama_konselor'];
                ?>  
                <tr>
                    <td width="40" height="14" align="center" valign="middle"><?=$i?></td>
                    <td width="100" height="14" align="center" valign="middle"><?=$tanggal?></td>
                    <td style="padding-left:5px;" width="130" height="14" valign="middle"><?=$nama_klien?></td>
                    <td width="40" height="14" align="center" valign="middle"><?=$usia?></td>
                    <td width="40" height="14" align="center" valign="middle"><?=$jenis_kelamin?></td>
                    <td style="padding-left:5px;" width="150" height="14" valign="middle"><?=$pekerjaan?></td>
                    <td style="padding-left:5px;" width="347" height="14" valign="middle"><?=$nama_jenis?></td>
                    <td style="padding-left:5px;" width="130" height="14" valign="middle"><?=$nama_konselor?></td>
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
            Bripka Asbon Sirait,SH
        </div>

        <div id="footer-nip">
            NRP. 
        </div>
    </body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename="LAPORAN KONSULTASI KLIEN.pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
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