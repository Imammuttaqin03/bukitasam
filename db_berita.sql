-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jan 2020 pada 19.29
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_berita`
--

CREATE TABLE `tb_berita` (
  `id_berita` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `isi` text NOT NULL,
  `file` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_berita`
--

INSERT INTO `tb_berita` (`id_berita`, `judul`, `tgl`, `isi`, `file`) VALUES
(2, 'Bukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara Enim', '2020-01-01', 'Bukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara Enim', 'masjid.jpg'),
(3, 'Bukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara Enim', '2020-01-01', 'Bukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara EnimBukit Asam Raih Penghargaan dari Pemerintah Kabupaten Muara Enim', 'pulau-kemaro.jpg'),
(4, 'Launching Berita PT.Bukit Asam Tbk. Unit Dermaga Kertapati', '2020-01-03', '<p>Sejarah pertambangan batu bara di Tanjung Enim dimulai sejak zaman kolonial Belanda tahun 1919 dengan menggunakan metode penambangan terbuka (open pit mining) di wilayah operasi pertama, yaitu di Tambang Air Laya. Selanjutnya mulai 1923 beroperasi dengan metode penambangan bawah tanah (underground mining) hingga 1940, sedangkan produksi untuk kepentingan komersial dimulai pada 1938.</p>\r\n\r\n<p>Seiring dengan berakhirnya kekuasaan kolonial Belanda di tanah air, para karyawan Indonesia kemudian berjuang menuntut perubahan status tambang menjadi pertambangan nasional. Pada 1950, Pemerintah RI kemudian mengesahkan pembentukan Perusahaan Negara Tambang Arang Bukit Asam (PN TABA).</p>\r\n\r\n<p>Pada&nbsp;<a href=\"https://id.wikipedia.org/wiki/1981\" title=\"1981\">1981</a>, PN TABA kemudian berubah status menjadi Perseroan Terbatas dengan nama PT Tambang Batubara Bukit Asam (Persero) Tbk, yang selanjutnya disebut Perseroan. Dalam rangka meningkatkan pengembangan industri batu bara di Indonesia, pada 1990 Pemerintah menetapkan penggabungan Perum Tambang Batubara dengan Perseroan.</p>\r\n\r\n<p>Sesuai dengan program pengembangan ketahanan energi nasional, pada 1993 Pemerintah menugaskan Perseroan untuk mengembangkan usaha briket batu bara.</p>\r\n\r\n<p>Pada&nbsp;<a href=\"https://id.wikipedia.org/wiki/23_Desember\" title=\"23 Desember\">23 Desember</a>&nbsp;<a href=\"https://id.wikipedia.org/wiki/2002\" title=\"2002\">2002</a>, Perseroan mencatatkan diri sebagai perusahaan publik di Bursa Efek Indonesia dengan kode &ldquo;PTBA&rdquo;.</p>\r\n', 'ampera.jpg'),
(5, 'Launching Berita PT.Bukit Asam Tbk. Unit Dermaga Kertapati', '2020-01-03', '<p>Launching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga Kertapati</p>\r\n', 'ampera1.jpg'),
(6, 'Launching Berita PT.Bukit Asam Tbk. Unit Dermaga Kertapati', '2020-01-03', '<p>Launching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga Kertapati</p>\r\n', 'ampera2.png'),
(7, 'Launching Berita PT.Bukit Asam Tbk. Unit Dermaga Kertapati', '2020-01-03', '<p>Launching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga Kertapati</p>\r\n', 'ilustrasi-desain-traveloka.jpg'),
(8, 'Launching Berita PT.Bukit Asam Tbk. Unit Dermaga Kertapati', '2020-01-03', '<p>Launching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga KertapatiLaunching Berita PT.Bukit Asam Tbk. Unit Dermaga Kertapati</p>\r\n', 'download.png'),
(9, 'Muhammad Habiburrahman Ganteng', '2020-01-03', '<p>Bisa saja itu dilakukan.</p>\r\n\r\n<p>Tapi masalahanya&hellip;</p>\r\n\r\n<p>Bagaimana kalau datanya ada 100 atau 1000?</p>\r\n\r\n<p>Apakah kita mampu mengetik semuanya?</p>\r\n\r\n<p>Pasti capek.</p>\r\n\r\n<p>Karena itu, kita harus menggunakan perulangan.</p>\r\n\r\n<p>Ada dua jenis perulangan dalam pemrograman:</p>\r\n\r\n<ol>\r\n	<li>Counted loop;</li>\r\n	<li>Uncounted loop.</li>\r\n</ol>\r\n\r\n<p>Apa perbedaanya?</p>\r\n\r\n<p><em>Counted loop</em>&nbsp;adalah perulangan yang sudah jelas banyak pengulangannya. Sedangkan Uncounted loop tidak pasti berapa kali dia akan mengulang.</p>\r\n', 'Screenshot (2).png'),
(10, 'Jack Harnest Bacot', '2020-01-04', '<p><strong>Traveloka</strong>&nbsp;adalah perusahaan yang menyediakan layanan pemesanan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Tiket_pesawat\" title=\"Tiket pesawat\">tiket pesawat</a>&nbsp;dan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Hotel\" title=\"Hotel\">hotel</a>&nbsp;secara daring dengan fokus perjalanan domestik di&nbsp;<a href=\"https://id.wikipedia.org/wiki/Indonesia\" title=\"Indonesia\">Indonesia</a>. Didirikan pada tahun 2012 oleh&nbsp;<a href=\"https://id.wikipedia.org/wiki/Ferry_Unardi\" title=\"Ferry Unardi\">Ferry Unardi</a>, Derianto Kusuma, dan Albert Zhang.<sup><a href=\"https://id.wikipedia.org/wiki/Traveloka#cite_note-:0-1\">[1]</a></sup>&nbsp;Traveloka yang merupakan salah satu perusahaan rintisan (startup) berstatus&nbsp;<a href=\"https://id.wikipedia.org/wiki/Unicron\" title=\"Unicron\">unicorn</a>&nbsp;asal Indonesia ini mengembangkan layanannya pada pemesanan tiket&nbsp;<a href=\"https://id.wikipedia.org/wiki/Kereta_api\" title=\"Kereta api\">kereta api</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Bus\" title=\"Bus\">bus</a>, penyewaan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Mobil\" title=\"Mobil\">mobil</a>, hingga aktivitas&nbsp;<a href=\"https://id.wikipedia.org/wiki/Pariwisata\" title=\"Pariwisata\">wisata</a>.<sup><a href=\"https://id.wikipedia.org/wiki/Traveloka#cite_note-2\">[2]</a></sup>&nbsp;Sejak tahun 2015, Traveloka mulai berekspansi ke sejumlah&nbsp;<a href=\"https://id.wikipedia.org/wiki/Negara\" title=\"Negara\">negara</a>&nbsp;di&nbsp;<a href=\"https://id.wikipedia.org/wiki/Asia_Tenggara\" title=\"Asia Tenggara\">Asia Tenggara</a>&nbsp;seperti&nbsp;<a href=\"https://id.wikipedia.org/wiki/Singapura\" title=\"Singapura\">Singapura</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Malaysia\" title=\"Malaysia\">Malaysia</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Vietnam\" title=\"Vietnam\">Vietnam</a>,&nbsp;<a href=\"https://id.wikipedia.org/wiki/Thailand\" title=\"Thailand\">Thailand</a>, dan&nbsp;<a href=\"https://id.wikipedia.org/wiki/Filipina\" title=\"Filipina\">Filipina</a>.</p>\r\n', 'Screenshot (1).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_inventaris`
--

CREATE TABLE `tb_inventaris` (
  `id_inven` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `bidang` varchar(100) NOT NULL,
  `tgl` date NOT NULL,
  `ket` text NOT NULL,
  `file` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_inventaris`
--

INSERT INTO `tb_inventaris` (`id_inven`, `nama`, `bidang`, `tgl`, `ket`, `file`) VALUES
(1, 'Keanekaragaman Hayati', 'Keanekaragaman Hayati', '2020-01-03', 'Keanekaragaman Hayati Bagus Sekali', 'ampera.jpg'),
(2, 'Muhammad Habiburrahmannnnn', 'Pengelolaan Air', '2020-01-03', 'SUKSES', 'Traveloka_Primary_Logo.png'),
(3, 'Muhammad Habiburrahman', 'Pengelolaan Udara', '2020-01-03', 'Non Aktif', 'mcdonalds_PNG9.png'),
(4, 'Jack Harnest', 'Life Cycle Assesment', '2020-01-03', 'SUKSES NIAN', 'download.png'),
(5, 'Muhammad Habiburrahman', 'Sistem Manajemen Lingkungan', '2020-01-03', 'SUKSES NIAN', 'cordova_256.png'),
(6, 'Saif Ahmad Syahreza', 'Pengembangan Masyarakat', '2020-01-01', 'PATENN', '1200px-TVRISumselLogo2019png.png'),
(7, 'Ilham Abdurahman', 'Energi', '2020-01-03', 'SUKSES NIAN', '1511147356391-03abe64c91f7604e96249df5b7794438.png'),
(8, 'Muhammad Habiburrahman', '5R Limbah Non B', '2020-01-02', 'SUKSES', 'bibuu.pdf'),
(9, 'Jayah', 'Pengelolaan LB', '2019-12-31', 'Non Aktif', 'ampera1.jpg'),
(10, 'Muhammad Habiburrahman', 'Pengelolaan Udara', '2020-01-02', 'Non Aktif', 'ampera2.png'),
(11, 'Muhammad Habiburrahman', 'Sistem Manajemen Lingkungan', '2020-01-04', 'Non Aktif', 'ampera2.png'),
(12, 'Habiburrahman', 'Pengembangan Masyarakat', '2020-01-04', 'SUKSES', 'Screenshot (2).png'),
(13, 'Muhammad Habiburrahman', 'Keanekaragaman Hayati', '2020-01-04', 'Non Aktif', 'Screenshot (11).png'),
(14, 'Muhammad Habiburrahman', 'Keanekaragaman Hayati', '2020-01-04', 'SUKSES', 'Screenshot (9).png'),
(15, 'Muhammad Habiburrahman', 'Pengelolaan Air', '2020-01-16', 'SUKSES NIAN', 'Screenshot (11).png'),
(16, 'Muhammad Habiburrahman', 'Life Cycle Assesment', '2020-01-07', 'PATENN', 'Screenshot (10).png'),
(17, 'Jack Harnest', 'Life Cycle Assesment', '2020-01-02', 'SUKSES NIAN', 'Screenshot (3).png'),
(18, 'Muhammad Habiburrahman', 'Energi', '2020-01-04', 'Non Aktif', 'Screenshot (14).png'),
(19, 'Muhammad Habiburrahman', 'Pengelolaan LB', '2020-01-03', 'PATENN', 'Screenshot (12).png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `username` varchar(20) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(12) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`username`, `nama`, `password`, `status`) VALUES
('admin', 'admin', 'admin123', 'admin'),
('manajer', 'Muhammad Habiburrahman', 'manajer123', 'manajer'),
('staff', 'Ilham Abdurahman', 'staff123', 'staff');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  ADD PRIMARY KEY (`id_inven`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_berita`
--
ALTER TABLE `tb_berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_inventaris`
--
ALTER TABLE `tb_inventaris`
  MODIFY `id_inven` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
