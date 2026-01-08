-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07 Jan 2026 pada 04.33
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_ppapekanbaru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_diskusi`
--

CREATE TABLE IF NOT EXISTS `tbl_diskusi` (
  `id_diskusi` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pertanyaan` text NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'n',
  `balas` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_diskusi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tbl_diskusi`
--

INSERT INTO `tbl_diskusi` (`id_diskusi`, `tanggal`, `nama`, `email`, `pertanyaan`, `status`, `balas`) VALUES
(2, '2016-10-15 12:45:26', 'Customer Service', 'customer.service@gmail.com', 'Tidak semua kondisi terlambat haid berhubungan dengan kehamilan. Ada banyak penyebab mengapa seseorang terlambat haid, seperti stres,obesitas, olahraga berlebihan, menggunakan pil kontrasepsi dan penyakit tiroid', 'y', 1),
(4, '2016-11-05 15:29:39', 'Customer Service', 'customer.service@gmail.com', 'anda bisa menggunakan cara kb alami.ada beberapa jenis KB alami yang bisa dilakukan, antara lain:\r\n1. kalender : tidak berhubungan di tanggal-tanggal subur dan 3 hari sebelum tanggal subur.\r\n2. sengaja terputus.', 'y', 3),
(6, '2016-06-29 00:59:04', 'Customer Service', 'customer.service@gmail.com', 'bisa jadi hal tersebut merupakan bentuk normal dari perkembangan dan pertumbuhannya. Coba kembali Anda cermati apakah anak Anda benar-benar hiperaktif atau sekedar bergembira akibat sesuatu yang menyenangkan hatinya. Ada baiknya apabila kita mencermati definisi gangguan hiperaktivitas pada anak, atau yang lebih dikenal dengan istilah ADHD (Attention Deficit Hyperactivitiy Disorder), agar dapat Anda bandingkan dengan kondisi balita Anda saat ini.\r\nAttention Deficit Hyperactivity Disorder (ADHD) adalah gangguan perkembangan dalam peningkatan aktivitas motorik anak hingga menyebabkan aktifitas anak-anak yang tidak lazim dan cenderung berlebihan, ditandai dengan berbagai keluhan seperti perasaan gelisah, tidak bisa diam, tidak bisa duduk dengan tenang, dan selalu meninggalkan keadaan yang tetap seperti sedang duduk, atau sedang berdiri. Beberapa kriteria yang lain sering digunakan adalah suka meletup-letup, aktifitas berlebihan, dan suka membuat keributan.\r\nTiga gejala utama yang nampak pada perilaku seorang anak ADHD adalah :\r\nâ€¢	Inatensi atau kurangnya kemampuan untuk memusatkan perhatian\r\nâ€¢	Hiperaktif  yaitu perilaku yang tidak bisa diam\r\nâ€¢	Impulsif yaitu kesulitan untuk menunda respon (dorongan untuk mengatakan/melakukan sesuatu yang tidak sabar)\r\nNamun, tidak semua perilaku anak yang tidak bisa diam dapat digolongkan sebagai ADHD sehingga orangtua harus lebih cermat dalam menilai perilaku anak, terlebih mengingat anak umumnya memiliki rasa keingintahuan yang sangat besar di usia anak Anda saat ini. Namun apabila Anda merasa bahwa anak Anda telah memenuhi kriteria di atas, maka sebaiknya Anda segera mengonsultasikannya ke psikolog atau psikiater anak untuk memastikannya, agar diagnosa dapat segera ditegakkan. Hal ini penting karena apabila terdapat gangguan hiperaktivitas. Maka nantinya dapat berpengaruh pada kesehatan mental dan fisik anak, serta kemampuannya dalam menyerap pelajaran dan bersosialisasi.\r\nDemikian yang dapat kami sampaikan, semoga bermanfaat.', 'y', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_informasi`
--

CREATE TABLE IF NOT EXISTS `tbl_informasi` (
  `id_informasi` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  PRIMARY KEY (`id_informasi`),
  KEY `id_kategori_info` (`id_kategori`),
  KEY `id_kategori_info_2` (`id_kategori`),
  KEY `id_kategori` (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `tbl_informasi`
--

INSERT INTO `tbl_informasi` (`id_informasi`, `tanggal`, `judul`, `isi`, `id_kategori`, `gambar`) VALUES
(9, '2019-01-18 03:49:44', 'Terapi Narkoba', '<p>a. Terapi medik :<br />\r\ni. Diberikan jenis obat anti psikotik yang ditujukan terhadap gangguan sistem neuro-transmitter susunan saraf pusat (otak).&nbsp;<br />\r\nii. Diberikan pula analgetika non opiat (obat anti nyeri yang tidak mengandung opiat atau turunannya / golongan NSAID), tidak diberikan obat-obatan yang bersifat adiktif.<br />\r\niii. Diberikan obat anti depresi.</p>\r\n\r\n<p>b. Bila ditemukan komplikasi pada organ paru, lever dan lainnya, diberikan obat sesuai dengan kelainan dari organ tersebut (terapi somatik).</p>\r\n\r\n<p>c. Terapi psikiatrik/psikologik :<br />\r\nSelain diberikan obat di bidang psikiatri yaitu golongan anti psikotik dan anti depresi tersebut di atas, juga diberikan konsultasi psikiatrik / psikologik kepada yang bersangkutan dan keluarganya.</p>\r\n\r\n<p>d. Terapi Sosial :<br />\r\nMenjaga lingkungan dan pergaulan sosial. Kalau anda bergaul dengan tukang kembang, akan ikut wangi; tetapi kalau bergaul dengan tukang ikan akan ikut amis.</p>\r\n\r\n<p>e. Terapi agama, diberikan sesuai dengan keimanan masing-masing untuk menyadarkan bahwa NAZA haram hukumnya dari segi agama maupun UU. Prinsipnya adalah berobat dan bertobat sebelum ditangkap; berobat dan bertobat sebelum maut menjemput.</p>', 1, 'gangguan-psikosomatis-ketika-pikiran-menyebabkan-penyakit-fisik-alodokter.jpg'),
(10, '2021-06-19 12:11:28', 'Waspada! Kasus Perdagangan Manusia Berkedok Tawaran Kerja dan Penempatan TKI Semakin Marak', '<div>\r\n<p>KOMPAS.TV - Kasus human trafficking atau perdagangan orang di Indonesia hingga kini terus terjadi. Akhir Februari 2021 lalu, sebanyak 286 korban eksploitasi, 91 diantaranya anak-anak, diamankan polisi dari 15 mucikari yang ditangkap.</p>\r\n\r\n<p>Para korban ini dijual dengan tarif 300 hingga 500 ribu rupiah, melalui media sosial. Polisi menyebut, mucikari mencari korbannya dengan berkenalan melalui media sosial.<br />\r\n&nbsp;<br />\r\nBerdasarkan Data Kementerian Pemberdayaan Perempuan dan Perlindungan Anak, kasus perdagangan orang terutama perempuan dan anak pada tahun 2020 lalu naik 62,5 persen. Di tahun 2019, tercatat ada 216 kasus, sedangkan di tahun 2020 naik menjadi 351 kasus.</p>\r\n\r\n<p>Komisi Perlindungan Anak Indonesia (KPAI) menyatakan meningkatnya kasus perdagangan orang, khususnya prostitusi anak di masa pandemi, karena intensitas anak mengakses gawai lebih tinggi.</p>\r\n\r\n<p>Sehingga harus menjadi perhatian semua pihak, khususnya orang tua.</p>\r\n\r\n<p>Menteri Pemberdayaan Perempuan dan Perlindungan Anak, Bintang Puspayoga, menyatakan, kasus perdagangan orang ini perlu penanganan serius dan bukan hanya tugas pemerintah saja, tapi juga tugas seluruh elemen masyarakat.&nbsp;</p>\r\n\r\n<p>Hingga kini, kasus perdagangan orang di Indonesia masih terus terjadi.</p>\r\n\r\n<p>Terlebih, di situasi pandemi saat ini di mana banyak masyarakat terdampak, baik secara sosial maupun ekonomi, hingga rentan terhadap tindak pidana perdagangan orang, karena kondisi ini dimanfaatkan pelaku untuk menjerat kelompok rentan untuk masuk dalam situasi perdagangan orang.</p>\r\n\r\n<p>Bagaimana memerangi tindak perdagangan orang ini?.</p>\r\n\r\n<p>Untuk membahasnya, sudah bergabung bersama kami, Asisten Deputi Perlindungan Hak Perempuan Pekerja dan Tindak Pidana Perdagangan Orang, Kementerian Pemberdayaan Perempuan dan Perlindungan Anak, Rafail Walangitan, serta Direktur Eksekutif Yayasan Kasih Yang Utama, Winda Winowatan.<br />\r\n&nbsp;</p>\r\n</div>\r\n\r\n<p><span style="font-size:13px">Penulis :&nbsp;<strong><a href="https://www.kompas.tv/editor/Anjani-Nur-Permatasari" style="color: rgb(21, 148, 214); text-decoration-line: none;">Anjani Nur Permatasari</a></strong></span></p>', 14, 's.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jenis_konsultasi`
--

CREATE TABLE IF NOT EXISTS `tbl_jenis_konsultasi` (
  `id_jenis` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jenis` varchar(100) NOT NULL,
  PRIMARY KEY (`id_jenis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data untuk tabel `tbl_jenis_konsultasi`
--

INSERT INTO `tbl_jenis_konsultasi` (`id_jenis`, `nama_jenis`) VALUES
(8, 'Konseling Pembinaan Mental Dan Spritual'),
(10, 'Konseling Pelayanan Rehabilitasi'),
(11, 'Konseling Pelayanan NAPZA dan Kesehatan'),
(14, 'Konseling Khusus Keluarga (Married Counseling)'),
(16, 'Pembinaan Kelompok Anti Narkoba Remaja & Mahasiswa'),
(17, 'Konseling Individual (KI)'),
(18, 'Perdagangan Orang (Human Trafficking)'),
(19, 'Konseling Kekerasan Dalam Rumah Tangga'),
(20, 'Perdagangan Orang (Human Trafficking)');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kategori`
--

CREATE TABLE IF NOT EXISTS `tbl_kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data untuk tabel `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Rehabilitasi Sosial'),
(4, 'Keluarga'),
(5, 'Rehabilitasi'),
(11, 'Drug Dependency (Ketergantungan Obat)'),
(12, 'Drug Abuse (Penyalahgunaan)'),
(13, 'Drug Use (Penggunaan)'),
(14, 'Perdagangan Orang (human traffiking)'),
(15, 'Penyelundupan Manusia (People Smuggling)'),
(16, 'Kekerasan (Secara Umum Maupun Dalam Rumah Tangga),'),
(17, 'Susila (Perkosaan, Pelecehan, Cabul)'),
(18, 'Vice (Perjudian dan Prostitusi)'),
(19, 'Adopsi Ilegal'),
(20, 'Pornografi dan Pornoaksi'),
(21, 'Money Laundering'),
(22, 'Perlindungan Anak (Sebagai Korban/Tersangka),'),
(23, 'Perlindungan Korban, Saksi, Keluarga dan Teman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_klien`
--

CREATE TABLE IF NOT EXISTS `tbl_klien` (
  `id_klien` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_daftar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nama_klien` varchar(30) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_klien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data untuk tabel `tbl_klien`
--

INSERT INTO `tbl_klien` (`id_klien`, `tanggal_daftar`, `nama_klien`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `telepon`, `pekerjaan`, `email`, `password`) VALUES
(6, '2025-12-08 04:10:23', 'Miming', 'Pekanbaru', '2003-01-10', 'Perempuan', 'Arengka', '085768707657', 'Pelajar', 'mming.boo@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, '2021-06-20 12:11:23', 'Bekti Luthfiana', 'Rengat', '2005-03-26', 'Perempuan', 'Tembilahan', '085315342728', 'Pelajar', 'bektiluthfiana@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, '2021-06-20 12:16:59', 'Hadi', 'Lampung', '2006-01-02', 'Laki-laki', 'Keritang', '0874524236483', 'Pelajar', 'hadieciiputt@gmail.com', '202cb962ac59075b964b07152d234b70'),
(9, '2021-06-20 12:15:11', 'Anggi Junica', 'Sambu', '1992-06-08', 'Perempuan', 'Tembilahab', '0982635436237', 'Guru TK', 'anggi@gmail.com', '202cb962ac59075b964b07152d234b70'),
(10, '2021-06-20 12:15:39', 'Dina', 'Tembilahan', '1990-11-10', 'Perempuan', 'Tembilahan', '0857543432566', 'IRT', 'dina@gmail.com', '202cb962ac59075b964b07152d234b70'),
(11, '2021-06-20 12:14:27', 'Mery', 'Perawang', '1991-11-14', 'Perempuan', 'Sungai Slak', '0857126354625', 'Bidan', 'mery@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, '2021-06-20 12:12:56', 'ssamsugi', 'Medan', '2010-12-11', 'Laki-laki', 'Keritang', '0876534435165', 'Tidak Sekolah', 'ssamsugi@gmail.com', '202cb962ac59075b964b07152d234b70'),
(16, '2021-06-20 12:13:43', 'Sarah Utami', 'Bandar Jaya', '2000-05-25', 'Perempuan', 'Sungai Rumbai', '081324561424', 'mahasiswa', 'sarahutami7@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konselor`
--

CREATE TABLE IF NOT EXISTS `tbl_konselor` (
  `id_konselor` int(11) NOT NULL AUTO_INCREMENT,
  `nama_konselor` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id_konselor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `tbl_konselor`
--

INSERT INTO `tbl_konselor` (`id_konselor`, `nama_konselor`, `alamat`, `telepon`, `bidang`, `email`, `username`, `password`) VALUES
(1, 'dr. Putu Sri Widyanti', 'Jalan Teuku Umar No. 52, Pekanbaru', '081299884334', 'Divisi Perlindungan Hukum dan Kriminal', 'putu@gmail.com', 'putu', '202cb962ac59075b964b07152d234b70'),
(3, 'dr. Laila Bidasari, S.H, M.Hum', 'Jl. Ahmad Yani', '085768707657', 'Divisi Perlindungan Perlindungan Korban, Saksi, Keluarga dan Teman', 'umi.ufa@gmail.com', 'laila', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'dr. Melisa Gustiani, SKM', 'Jl Sudirman Pekanbaru', '082345145677', 'Divisi Kesehatan Dan Forensik', 'melisag@gmail.com', 'melisa', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'Angun Atmarani, S.Psi', 'Jl. Arifin Ahmad', '089614236177', 'Divisi Konseling Napza dan Narkoba', 'lbekti@ymail.com', 'anggun', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'Tansri Adzlan Syah, S.Psi', 'Jl. Diponegoro', '0815736455566', 'Divisi Pembinaan', 'tansri@gmail.com', 'tansri', '827ccb0eea8a706c4c34a16891f84e7b'),
(8, 'Putri Husada, S.Ag, S.Psi', 'Jl. Dipnegoro No.10 Pekanbaru', '0812651424445', 'Divisi Konseling Psikolog', 'putri@gmail.com', 'putri', '827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'Bripda Agung, S.Kom', 'Pekanbaru', '081271776761', 'Divisi Kesehatan Dan Forensik', 'agung@gmail.com', 'agung', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konsultasi`
--

CREATE TABLE IF NOT EXISTS `tbl_konsultasi` (
  `id_konsultasi` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_klien` int(11) NOT NULL,
  `id_konselor` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `jawaban` text NOT NULL,
  `status` enum('y','n') NOT NULL DEFAULT 'n',
  `balas` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_konsultasi`),
  KEY `id_klien` (`id_klien`,`id_konselor`,`id_jenis`),
  KEY `id_konselor` (`id_konselor`),
  KEY `id_jenis` (`id_jenis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `hak_akses` enum('Customer Service','Pimpinan') DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_user`, `hak_akses`) VALUES
(1, 'stafppa', '202cb962ac59075b964b07152d234b70', 'Staf PPA', 'Customer Service'),
(2, 'pimpinan', '202cb962ac59075b964b07152d234b70', 'Pimpinan', 'Pimpinan');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_informasi`
--
ALTER TABLE `tbl_informasi`
  ADD CONSTRAINT `tbl_informasi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_konsultasi`
--
ALTER TABLE `tbl_konsultasi`
  ADD CONSTRAINT `tbl_konsultasi_ibfk_1` FOREIGN KEY (`id_klien`) REFERENCES `tbl_klien` (`id_klien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_konsultasi_ibfk_2` FOREIGN KEY (`id_konselor`) REFERENCES `tbl_konselor` (`id_konselor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_konsultasi_ibfk_3` FOREIGN KEY (`id_jenis`) REFERENCES `tbl_jenis_konsultasi` (`id_jenis`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
