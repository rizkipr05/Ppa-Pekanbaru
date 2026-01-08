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

if (empty($_GET['filter'])) {
    // fungsi query untuk menampilkan data dari tabel siswa dan kelas
    $query = mysqli_query($mysqli, "SELECT * FROM tbl_klien ORDER BY id_klien ASC")
                                    or die('Ada kesalahan pada query tampil data klien: '.mysqli_error($mysqli));
}
elseif ($_GET['filter']=='seluruh') {
    // fungsi query untuk menampilkan data dari tabel siswa dan kelas
    $query = mysqli_query($mysqli, "SELECT * FROM tbl_klien ORDER BY id_klien ASC")
                                    or die('Ada kesalahan pada query tampil data klien: '.mysqli_error($mysqli));
} 
elseif ($_GET['filter']=='perbulan') {
    // fungsi query untuk menampilkan data dari tabel siswa dan kelas
    $query = mysqli_query($mysqli, "SELECT * FROM tbl_klien 
                                    WHERE EXTRACT(MONTH FROM tanggal_daftar)='$_GET[bulan]' AND EXTRACT(YEAR FROM tanggal_daftar)='$_GET[tahun]'
                                    ORDER BY id_klien ASC")
                                    or die('Ada kesalahan pada query tampil data klien: '.mysqli_error($mysqli));
}


$rows = mysqli_num_rows($query);
?>
<html xmlns="http://www.w3.org/1999/xhtml"> <!-- Bagian halaman HTML yang akan konvert -->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <title>LAPORAN DATA KLIEN</title>
        <link rel="stylesheet" type="text/css" href="../../assets/css/laporan.css" /></head>
    <body>
        <div id="title-perusahaan">
            UNIT PERLINDUNGAN PEREMPUAN DAN ANAK (PPA) 
        </div>

        <div id="title-perusahaan">
            POLRESTA PEKANBARU - PROVINSI RIAU </div>

        <div id="title-alamat">
            Alamat : Jl. Jend. Ahmad Yani No.11, Kel. Sago, Kec. Senapelan, Kota Pekanbaru, Riau,Riau Indonesia&nbsp;</div>

        <div style="margin:-70px 0 0 120px">
            <img src="../../assets/img/logo-ppa.png" height="60">
        </div>

        <hr><br>

        <?php  
        if ($_GET['filter']=='perbulan') { ?>
            <div id="title">
                LAPORAN DATA KLIEN
            </div>

            <div id="title-tanggal">
                Bulan <?php echo $bulan; ?> <?php echo $tahun; ?>
            </div>
        <?php
        } else { ?>
            <div id="title">
                LAPORAN DATA KLIEN
            </div>
        <?php
        }
        ?>

        <br>

        <div id="isi">
            <table width="100%" border="0.5" cellpadding="0" cellspacing="0">
                <tr class="tr-title">
                    <th height="25" align="center" valign="middle">No.</th>
                    <th height="25" align="center" valign="middle">Tanggal Daftar</th>
                    <th height="25" align="center" valign="middle">Nama</th>
                    <th height="25" align="center" valign="middle">Usia</th>
                    <th height="25" align="center" valign="middle">Tempat, Tanggal Lahir</th>
                    <th height="25" align="center" valign="middle">L/P</th>
                    <th height="25" align="center" valign="middle">Alamat</th>
                    <th height="25" align="center" valign="middle">Telepon</th>
                    <th height="25" align="center" valign="middle">Pekerjaan</th>
                    <th height="25" align="center" valign="middle">Email</th>
                </tr>

                <?php
                for($i=1; $i<=$rows; $i++) {
                    $data    = mysqli_fetch_assoc($query);
                    
                    $tgl_daftar     = substr($data['tanggal_daftar'],0,10);
                    $exp            = explode('-',$tgl_daftar);
                    $tanggal_daftar = $exp[2]."-".$exp[1]."-".$exp[0];
                    
                    $nama           = $data['nama_klien'];
                    $tempat_lahir   = $data['tempat_lahir'];
                    
                    $tgl_lahir      = $data['tanggal_lahir'];
                    $exp            = explode('-',$tgl_lahir);
                    $tanggal_lahir  = $exp[2]."-".$exp[1]."-".$exp[0];
					
                    $usia           = get_age($data['tanggal_lahir']);

                    
                    if ($data['jenis_kelamin']=='Laki-laki') {
                        $jenis_kelamin = "L";
                    }
                    else{
                        $jenis_kelamin = "P";
                    }

                    $alamat    = $data['alamat'];
                    $telepon   = $data['telepon'];
                    $pekerjaan = $data['pekerjaan'];
                    $email     = $data['email'];
                ?>  
                <tr>
                    <td width="40" height="14" align="center" valign="middle"><?=$i?></td>
                    <td width="90" height="14" align="center" valign="middle"><?=$tanggal_daftar?></td>
                    <td style="padding-left:5px;" width="120" height="14" valign="middle"><?=$nama?></td>
                    <td width="40" height="14" align="center" valign="middle"><?=$usia?></td>
                    <td style="padding-left:5px;" width="130" height="14" valign="middle"><?=$tempat_lahir?>, <?=$tanggal_lahir?></td>
                    <td width="35" height="14" align="center" valign="middle"><?=$jenis_kelamin?></td>
                    <td style="padding-left:5px;" width="160" height="14" valign="middle"><?=$alamat?></td>
                    <td width="85" height="14" align="center" valign="middle"><?=$telepon?></td>
                    <td style="padding-left:5px;" width="120" height="14" valign="middle"><?=$pekerjaan?></td>
                    <td style="padding-left:5px;" width="140" height="14" valign="middle"><?=$email?></td>
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
           
        </div> 
    </body>
</html><!-- Akhir halaman HTML yang akan di konvert -->
<?php
$filename="LAPORAN DATA KLIEN.pdf"; //ubah untuk menentukan nama file pdf yang dihasilkan nantinya
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