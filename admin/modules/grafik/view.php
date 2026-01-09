<?php  
if (isset($_POST['tahun'])) {
	$tahun = $_POST['tahun'];
} else {
	$tahun = "";
}
?>

<?php  
if (isset($_POST['tahun'])) {
	$query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='7' AND EXTRACT(MONTH FROM tanggal)='1' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjan1 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='8' AND EXTRACT(MONTH FROM tanggal)='1' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjan2 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='9' AND EXTRACT(MONTH FROM tanggal)='1' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjan3 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='10' AND EXTRACT(MONTH FROM tanggal)='1' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjan4 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='11' AND EXTRACT(MONTH FROM tanggal)='1' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjan5 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='12' AND EXTRACT(MONTH FROM tanggal)='1' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjan6 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='13' AND EXTRACT(MONTH FROM tanggal)='1' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjan7 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='14' AND EXTRACT(MONTH FROM tanggal)='1' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjan8 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='15' AND EXTRACT(MONTH FROM tanggal)='1' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjan9 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='16' AND EXTRACT(MONTH FROM tanggal)='1' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjan10 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='17' AND EXTRACT(MONTH FROM tanggal)='1' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjan11 = $data1['jumlah'];
    // -------------------------------------------------------------------------------------------------------------------------------------

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='7' AND EXTRACT(MONTH FROM tanggal)='2' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query feb: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahfeb1 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='8' AND EXTRACT(MONTH FROM tanggal)='2' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query feb: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahfeb2 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='9' AND EXTRACT(MONTH FROM tanggal)='2' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query feb: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahfeb3 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='10' AND EXTRACT(MONTH FROM tanggal)='2' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query feb: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahfeb4 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='11' AND EXTRACT(MONTH FROM tanggal)='2' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query feb: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahfeb5 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='12' AND EXTRACT(MONTH FROM tanggal)='2' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query feb: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahfeb6 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='13' AND EXTRACT(MONTH FROM tanggal)='2' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahfeb7 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='14' AND EXTRACT(MONTH FROM tanggal)='2' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahfeb8 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='15' AND EXTRACT(MONTH FROM tanggal)='2' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahfeb9 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='16' AND EXTRACT(MONTH FROM tanggal)='2' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahfeb10 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='17' AND EXTRACT(MONTH FROM tanggal)='2' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahfeb11 = $data1['jumlah'];
    // -------------------------------------------------------------------------------------------------------------------------------------
    
    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='7' AND EXTRACT(MONTH FROM tanggal)='3' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query mar: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmar1 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='8' AND EXTRACT(MONTH FROM tanggal)='3' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query mar: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmar2 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='9' AND EXTRACT(MONTH FROM tanggal)='3' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query mar: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmar3 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='10' AND EXTRACT(MONTH FROM tanggal)='3' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query mar: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmar4 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='11' AND EXTRACT(MONTH FROM tanggal)='3' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query mar: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmar5 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='12' AND EXTRACT(MONTH FROM tanggal)='3' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query mar: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmar6 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='13' AND EXTRACT(MONTH FROM tanggal)='3' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmar7 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='14' AND EXTRACT(MONTH FROM tanggal)='3' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmar8 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='15' AND EXTRACT(MONTH FROM tanggal)='3' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmar9 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='16' AND EXTRACT(MONTH FROM tanggal)='3' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmar10 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='17' AND EXTRACT(MONTH FROM tanggal)='3' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmar11 = $data1['jumlah'];
    // -------------------------------------------------------------------------------------------------------------------------------------
    
    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='7' AND EXTRACT(MONTH FROM tanggal)='4' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query apr: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahapr1 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='8' AND EXTRACT(MONTH FROM tanggal)='4' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query apr: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahapr2 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='9' AND EXTRACT(MONTH FROM tanggal)='4' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query apr: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahapr3 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='10' AND EXTRACT(MONTH FROM tanggal)='4' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query apr: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahapr4 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='11' AND EXTRACT(MONTH FROM tanggal)='4' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query apr: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahapr5 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='12' AND EXTRACT(MONTH FROM tanggal)='4' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query apr: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahapr6 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='13' AND EXTRACT(MONTH FROM tanggal)='4' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahapr7 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='14' AND EXTRACT(MONTH FROM tanggal)='4' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahapr8 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='15' AND EXTRACT(MONTH FROM tanggal)='4' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahapr9 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='16' AND EXTRACT(MONTH FROM tanggal)='4' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahapr10 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='17' AND EXTRACT(MONTH FROM tanggal)='4' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahapr11 = $data1['jumlah'];
    // -------------------------------------------------------------------------------------------------------------------------------------
    
    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='7' AND EXTRACT(MONTH FROM tanggal)='5' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query mei: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmei1 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='8' AND EXTRACT(MONTH FROM tanggal)='5' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query mei: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmei2 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='9' AND EXTRACT(MONTH FROM tanggal)='5' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query mei: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmei3 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='10' AND EXTRACT(MONTH FROM tanggal)='5' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query mei: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmei4 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='11' AND EXTRACT(MONTH FROM tanggal)='5' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query mei: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmei5 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='12' AND EXTRACT(MONTH FROM tanggal)='5' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query mei: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmei6 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='13' AND EXTRACT(MONTH FROM tanggal)='5' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmei7 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='14' AND EXTRACT(MONTH FROM tanggal)='5' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmei8 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='15' AND EXTRACT(MONTH FROM tanggal)='5' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmei9 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='16' AND EXTRACT(MONTH FROM tanggal)='5' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmei10 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='17' AND EXTRACT(MONTH FROM tanggal)='5' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahmei11 = $data1['jumlah'];
    // -------------------------------------------------------------------------------------------------------------------------------------

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='7' AND EXTRACT(MONTH FROM tanggal)='6' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query jun: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjun1 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='8' AND EXTRACT(MONTH FROM tanggal)='6' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query jun: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjun2 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='9' AND EXTRACT(MONTH FROM tanggal)='6' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query jun: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjun3 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='10' AND EXTRACT(MONTH FROM tanggal)='6' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query jun: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjun4 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='11' AND EXTRACT(MONTH FROM tanggal)='6' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query jun: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjun5 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='12' AND EXTRACT(MONTH FROM tanggal)='6' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query jun: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjun6 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='13' AND EXTRACT(MONTH FROM tanggal)='6' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjun7 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='14' AND EXTRACT(MONTH FROM tanggal)='6' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjun8 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='15' AND EXTRACT(MONTH FROM tanggal)='6' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjun9 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='16' AND EXTRACT(MONTH FROM tanggal)='6' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjun10 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='17' AND EXTRACT(MONTH FROM tanggal)='6' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjun11 = $data1['jumlah'];
    // -------------------------------------------------------------------------------------------------------------------------------------

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='7' AND EXTRACT(MONTH FROM tanggal)='7' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query jul: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjul1 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='8' AND EXTRACT(MONTH FROM tanggal)='7' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query jul: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjul2 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='9' AND EXTRACT(MONTH FROM tanggal)='7' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query jul: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjul3 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='10' AND EXTRACT(MONTH FROM tanggal)='7' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query jul: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjul4 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='11' AND EXTRACT(MONTH FROM tanggal)='7' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query jul: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjul5 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='12' AND EXTRACT(MONTH FROM tanggal)='7' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query jul: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjul6 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='13' AND EXTRACT(MONTH FROM tanggal)='7' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjul7 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='14' AND EXTRACT(MONTH FROM tanggal)='7' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjul8 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='15' AND EXTRACT(MONTH FROM tanggal)='7' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjul9 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='16' AND EXTRACT(MONTH FROM tanggal)='7' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjul10 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='17' AND EXTRACT(MONTH FROM tanggal)='7' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahjul11 = $data1['jumlah'];
    // -------------------------------------------------------------------------------------------------------------------------------------

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='7' AND EXTRACT(MONTH FROM tanggal)='8' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query ags: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahags1 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='8' AND EXTRACT(MONTH FROM tanggal)='8' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query ags: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahags2 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='9' AND EXTRACT(MONTH FROM tanggal)='8' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query ags: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahags3 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='10' AND EXTRACT(MONTH FROM tanggal)='8' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query ags: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahags4 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='11' AND EXTRACT(MONTH FROM tanggal)='8' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query ags: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahags5 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='12' AND EXTRACT(MONTH FROM tanggal)='8' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query ags: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahags6 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='13' AND EXTRACT(MONTH FROM tanggal)='8' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahags7 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='14' AND EXTRACT(MONTH FROM tanggal)='8' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahags8 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='15' AND EXTRACT(MONTH FROM tanggal)='8' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahags9 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='16' AND EXTRACT(MONTH FROM tanggal)='8' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahags10 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='17' AND EXTRACT(MONTH FROM tanggal)='8' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahags11 = $data1['jumlah'];
    // -------------------------------------------------------------------------------------------------------------------------------------

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='7' AND EXTRACT(MONTH FROM tanggal)='9' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query sep: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahsep1 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='8' AND EXTRACT(MONTH FROM tanggal)='9' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query sep: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahsep2 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='9' AND EXTRACT(MONTH FROM tanggal)='9' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query sep: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahsep3 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='10' AND EXTRACT(MONTH FROM tanggal)='9' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query sep: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahsep4 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='11' AND EXTRACT(MONTH FROM tanggal)='9' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query sep: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahsep5 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='12' AND EXTRACT(MONTH FROM tanggal)='9' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query sep: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahsep6 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='13' AND EXTRACT(MONTH FROM tanggal)='9' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahsep7 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='14' AND EXTRACT(MONTH FROM tanggal)='9' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahsep8 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='15' AND EXTRACT(MONTH FROM tanggal)='9' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahsep9 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='16' AND EXTRACT(MONTH FROM tanggal)='9' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahsep10 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='17' AND EXTRACT(MONTH FROM tanggal)='9' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahsep11 = $data1['jumlah'];
    // -------------------------------------------------------------------------------------------------------------------------------------

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='7' AND EXTRACT(MONTH FROM tanggal)='10' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query okt: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahokt1 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='8' AND EXTRACT(MONTH FROM tanggal)='10' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query okt: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahokt2 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='9' AND EXTRACT(MONTH FROM tanggal)='10' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query okt: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahokt3 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='10' AND EXTRACT(MONTH FROM tanggal)='10' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query okt: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahokt4 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='11' AND EXTRACT(MONTH FROM tanggal)='10' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query okt: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahokt5 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='12' AND EXTRACT(MONTH FROM tanggal)='10' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query okt: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahokt6 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='13' AND EXTRACT(MONTH FROM tanggal)='10' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahokt7 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='14' AND EXTRACT(MONTH FROM tanggal)='10' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahokt8 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='15' AND EXTRACT(MONTH FROM tanggal)='10' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahokt9 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='16' AND EXTRACT(MONTH FROM tanggal)='10' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahokt10 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='17' AND EXTRACT(MONTH FROM tanggal)='10' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahokt11 = $data1['jumlah'];
    // -------------------------------------------------------------------------------------------------------------------------------------

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='7' AND EXTRACT(MONTH FROM tanggal)='11' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query nov: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahnov1 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='8' AND EXTRACT(MONTH FROM tanggal)='11' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query nov: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahnov2 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='9' AND EXTRACT(MONTH FROM tanggal)='11' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query nov: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahnov3 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='10' AND EXTRACT(MONTH FROM tanggal)='11' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query nov: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahnov4 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='11' AND EXTRACT(MONTH FROM tanggal)='11' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query nov: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahnov5 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='12' AND EXTRACT(MONTH FROM tanggal)='11' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query nov: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahnov6 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='13' AND EXTRACT(MONTH FROM tanggal)='11' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahnov7 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='14' AND EXTRACT(MONTH FROM tanggal)='11' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahnov8 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='15' AND EXTRACT(MONTH FROM tanggal)='11' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahnov9 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='16' AND EXTRACT(MONTH FROM tanggal)='11' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahnov10 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='17' AND EXTRACT(MONTH FROM tanggal)='11' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahnov11 = $data1['jumlah'];
    // -------------------------------------------------------------------------------------------------------------------------------------
    
    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='7' AND EXTRACT(MONTH FROM tanggal)='12' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query des: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahdes1 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='8' AND EXTRACT(MONTH FROM tanggal)='12' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query des: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahdes2 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='9' AND EXTRACT(MONTH FROM tanggal)='12' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query des: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahdes3 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='10' AND EXTRACT(MONTH FROM tanggal)='12' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query des: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahdes4 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='11' AND EXTRACT(MONTH FROM tanggal)='12' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query des: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahdes5 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='12' AND EXTRACT(MONTH FROM tanggal)='12' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query des: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahdes6 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='13' AND EXTRACT(MONTH FROM tanggal)='12' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahdes7 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='14' AND EXTRACT(MONTH FROM tanggal)='12' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahdes8 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='15' AND EXTRACT(MONTH FROM tanggal)='12' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahdes9 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='16' AND EXTRACT(MONTH FROM tanggal)='12' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahdes10 = $data1['jumlah'];

    $query1 = mysqli_query($mysqli, "SELECT COUNT(id_konsultasi) as jumlah, id_jenis, balas FROM tbl_konsultasi
                                    WHERE balas='0' AND id_jenis='17' AND EXTRACT(MONTH FROM tanggal)='12' AND EXTRACT(YEAR FROM tanggal)='$tahun'")
                                    or die('Ada kesalahan pada query januari: '.mysqli_error($mysqli));

    $data1 = mysqli_fetch_assoc($query1);
    $jumlahdes11 = $data1['jumlah'];
    // -------------------------------------------------------------------------------------------------------------------------------------
}
?>

<script src="assets/plugins/highcharts/jquery.min.js"></script>
<script src="assets/plugins/highcharts/highcharts.js"></script>

<script type="text/javascript">
var chart1; // globally available
$(document).ready(function() {
    chart1 = new Highcharts.Chart({
        chart: {
            renderTo: 'konsultasi',
            type: 'line'
        },   
        title: {
            text: 'Grafik Konsultasi Klien Tahun <?php echo $tahun; ?>'
        },
        xAxis: {
            categories: ['Januari','Februari','Maret','April','Mei','Juni','Juli','Agustus','September','Oktober','November','Desember']
        },
        yAxis: {
            title: {
               text: 'Jumlah'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: { 
            //fungsi tooltip, ini opsional, kegunaan dari fungsi ini 
            //akan menampikan data di titik tertentu di grafik saat mouseover
            formatter: function() {
                    return '<b>Bulan: '+ this.x +'</b><br/>'+'Jumlah Konsultasi: '+ this.y;
            }
        },
            series:             
            [{
                name: 'Pelayanan Informasi Kependudukan dan Keluarga Berencana <span style="color:#fff">......................................................................................</span>',
                data: [<?php echo $jumlahjan1; ?>,<?php echo $jumlahfeb1; ?>,<?php echo $jumlahmar1; ?>,<?php echo $jumlahapr1; ?>,<?php echo $jumlahmei1; ?>,<?php echo $jumlahjun1; ?>,<?php echo $jumlahjul1; ?>,<?php echo $jumlahags1; ?>,<?php echo $jumlahsep1; ?>,<?php echo $jumlahokt1; ?>,<?php echo $jumlahnov1; ?>,<?php echo $jumlahdes1; ?>]
            },
            {
                name: 'Konseling Keluarga remaja dan remaja <span style="color:#fff">......................................................................................</span>',
                data: [<?php echo $jumlahjan2; ?>,<?php echo $jumlahfeb2; ?>,<?php echo $jumlahmar2; ?>,<?php echo $jumlahapr2; ?>,<?php echo $jumlahmei2; ?>,<?php echo $jumlahjun2; ?>,<?php echo $jumlahjul2; ?>,<?php echo $jumlahags2; ?>,<?php echo $jumlahsep2; ?>,<?php echo $jumlahokt2; ?>,<?php echo $jumlahnov2; ?>,<?php echo $jumlahdes2; ?>]
            },
            {
                name: 'Konseling pranikah <span style="color:#fff">......................................................................................</span>',
                data: [<?php echo $jumlahjan3; ?>,<?php echo $jumlahfeb3; ?>,<?php echo $jumlahmar3; ?>,<?php echo $jumlahapr3; ?>,<?php echo $jumlahmei3; ?>,<?php echo $jumlahjun3; ?>,<?php echo $jumlahjul3; ?>,<?php echo $jumlahags3; ?>,<?php echo $jumlahsep3; ?>,<?php echo $jumlahokt3; ?>,<?php echo $jumlahnov3; ?>,<?php echo $jumlahdes3; ?>]
            },
            {
                name: 'Konseling keluarga balita dan balita <span style="color:#fff">......................................................................................</span>',
                data: [<?php echo $jumlahjan4; ?>,<?php echo $jumlahfeb4; ?>,<?php echo $jumlahmar4; ?>,<?php echo $jumlahapr4; ?>,<?php echo $jumlahmei4; ?>,<?php echo $jumlahjun4; ?>,<?php echo $jumlahjul4; ?>,<?php echo $jumlahags4; ?>,<?php echo $jumlahsep4; ?>,<?php echo $jumlahokt4; ?>,<?php echo $jumlahnov4; ?>,<?php echo $jumlahdes4; ?>]
            },
            {
                name: 'Konseling keluarga berencana dan kesehatan reproduksi <span style="color:#fff">......................................................................................</span>',
                data: [<?php echo $jumlahjan5; ?>,<?php echo $jumlahfeb5; ?>,<?php echo $jumlahmar5; ?>,<?php echo $jumlahapr5; ?>,<?php echo $jumlahmei5; ?>,<?php echo $jumlahjun5; ?>,<?php echo $jumlahjul5; ?>,<?php echo $jumlahags5; ?>,<?php echo $jumlahsep5; ?>,<?php echo $jumlahokt5; ?>,<?php echo $jumlahnov5; ?>,<?php echo $jumlahdes5; ?>]
            },
            {
                name: 'Konseling keluarga lansia dan lansia <span style="color:#fff">......................................................................................</span>',
                data: [<?php echo $jumlahjan6; ?>,<?php echo $jumlahfeb6; ?>,<?php echo $jumlahmar6; ?>,<?php echo $jumlahapr6; ?>,<?php echo $jumlahmei6; ?>,<?php echo $jumlahjun6; ?>,<?php echo $jumlahjul6; ?>,<?php echo $jumlahags6; ?>,<?php echo $jumlahsep6; ?>,<?php echo $jumlahokt6; ?>,<?php echo $jumlahnov6; ?>,<?php echo $jumlahdes6; ?>]
            },
            {
                name: 'Pembinaan usaha ekonomi pruduktif kelompok (UPPKS) <span style="color:#fff">......................................................................................</span>',
                data: [<?php echo $jumlahjan7; ?>,<?php echo $jumlahfeb7; ?>,<?php echo $jumlahmar7; ?>,<?php echo $jumlahapr7; ?>,<?php echo $jumlahmei7; ?>,<?php echo $jumlahjun7; ?>,<?php echo $jumlahjul7; ?>,<?php echo $jumlahags7; ?>,<?php echo $jumlahsep7; ?>,<?php echo $jumlahokt7; ?>,<?php echo $jumlahnov7; ?>,<?php echo $jumlahdes7; ?>]
            },
            {
                name: 'Konseling Khusus Keluarga (Married Counseling) <span style="color:#fff">......................................................................................</span>',
                data: [<?php echo $jumlahjan8; ?>,<?php echo $jumlahfeb8; ?>,<?php echo $jumlahmar8; ?>,<?php echo $jumlahapr8; ?>,<?php echo $jumlahmei8; ?>,<?php echo $jumlahjun8; ?>,<?php echo $jumlahjul8; ?>,<?php echo $jumlahags8; ?>,<?php echo $jumlahsep8; ?>,<?php echo $jumlahokt8; ?>,<?php echo $jumlahnov8; ?>,<?php echo $jumlahdes8; ?>]
            },
            {
                name: 'Informasi dan konseling TRIAD KRR, PUP, Life Skill & 8 Fungsi Keluarga <span style="color:#fff">......................................................................................</span>',
                data: [<?php echo $jumlahjan9; ?>,<?php echo $jumlahfeb9; ?>,<?php echo $jumlahmar9; ?>,<?php echo $jumlahapr9; ?>,<?php echo $jumlahmei9; ?>,<?php echo $jumlahjun9; ?>,<?php echo $jumlahjul9; ?>,<?php echo $jumlahags9; ?>,<?php echo $jumlahsep9; ?>,<?php echo $jumlahokt9; ?>,<?php echo $jumlahnov9; ?>,<?php echo $jumlahdes9; ?>]
            },
            {
                name: 'Pembinaan Kelompok PIK Remaja & Mahasiswa <span style="color:#fff">......................................................................................</span>',
                data: [<?php echo $jumlahjan10; ?>,<?php echo $jumlahfeb10; ?>,<?php echo $jumlahmar10; ?>,<?php echo $jumlahapr10; ?>,<?php echo $jumlahmei10; ?>,<?php echo $jumlahjun10; ?>,<?php echo $jumlahjul10; ?>,<?php echo $jumlahags10; ?>,<?php echo $jumlahsep10; ?>,<?php echo $jumlahokt10; ?>,<?php echo $jumlahnov10; ?>,<?php echo $jumlahdes10; ?>]
            },
            {
                name: 'Pembinaan Kelompok BKB, BKR dan BKL',
                data: [<?php echo $jumlahjan11; ?>,<?php echo $jumlahfeb11; ?>,<?php echo $jumlahmar11; ?>,<?php echo $jumlahapr11; ?>,<?php echo $jumlahmei11; ?>,<?php echo $jumlahjun11; ?>,<?php echo $jumlahjul11; ?>,<?php echo $jumlahags11; ?>,<?php echo $jumlahsep11; ?>,<?php echo $jumlahokt11; ?>,<?php echo $jumlahnov11; ?>,<?php echo $jumlahdes11; ?>]
            }
            ]
      });
   });	
</script>
<style type="text/css">
<!--
.style3 {font-size: 14px}
.style4 {
	font-size: 16px;
	font-weight: bold;
	color: #000000;
}
.style5 {font-size: 16px}
-->
</style>


<div class="breadcrumbs breadcrumbs-fixed" id="breadcrumbs">
	<ul class="breadcrumb">
		<li>
			<i class="ace-icon fa fa-home home-icon"></i>
			<a href="?module=beranda">Beranda</a>
		</li>

		<li class="active">Grafik</li>
	</ul><!-- /.breadcrumb -->
</div>

<div class="page-content">
	<div class="page-header">
		<h1 style="color:#585858">
			<span class="style3"><span class="style4">Grafik Konsultasi Klien</span> - <span class="style5">Unit Perlindungan Perempuan dan Anak (PPA) POLRESTA Pekanbaru - Provinsi Riau</span></span></h1>
  </div><!-- /.page-header -->

	<div class="row">
		<div class="col-xs-12">
			<!--PAGE CONTENT BEGINS-->
			<form class="form-horizontal grafik-form" role="form" action="?module=grafik" method="POST">
				<div class="form-group">
					<label class="col-sm-1 col-xs-12 control-label no-padding-right">Tahun</label>

					<div class="col-sm-3 col-xs-12">
						<select class="chosen-select" id="tahun" name="tahun" data-placeholder="Tahun...">
							<option value="<?php echo $tahun; ?>"><?php echo $tahun; ?></option>
							<?php
							$query1 = mysqli_query($mysqli, "SELECT EXTRACT(YEAR FROM tanggal) as tahun
 															FROM tbl_konsultasi GROUP BY EXTRACT(YEAR FROM tanggal)")
															or die('Ada kesalahan pada query tampil tahun: '.mysqli_error($mysqli));

							while($data1 = mysqli_fetch_assoc($query1)) { ?>
								<option value="<?php echo $data1['tahun']; ?>"><?php echo $data1['tahun']; ?></option>
							<?php
							}
							?>
						</select>
					</div>

					<div class="col-sm-2 col-xs-12 grafik-submit">
						<input type="submit" class="btn btn-sm btn-primary" name="tampil" value="Tampilkan" />
					</div>
				</div>
			</form>

			<hr>

			<div class="row">
			<?php
			if (isset($_POST['tahun'])) { ?>
				<div style="margin-bottom:20px" class="col-xs-12">
					<div class="widget-box grafik-card">
						<div class="widget-body">
							<div class="widget-main">
								<div id="konsultasi" class="grafik-chart"></div>
							</div>
						</div>
					</div>
				</div>

				<!-- <div class="col-xs-12">
					<span class="label label-xlg label-light arrowed-in-right">Light</span>
				</div> -->
			<?php
			}
			?>
			</div><!-- PAGE CONTENT ENDS -->
			<!--PAGE CONTENT ENDS-->
		</div><!--/.span-->
	</div><!--/.row-fluid-->
</div><!--/.page-content-->
