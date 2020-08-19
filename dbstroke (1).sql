-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2019 at 05:27 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbstroke`
--

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `id_gejala` varchar(3) NOT NULL,
  `gejala` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`id_gejala`, `gejala`) VALUES
('G01', 'Mudah lelah'),
('G02', 'Sakit kepala'),
('G03', 'Muntah-muntah'),
('G04', 'Migran'),
('G05', 'Pendarahan dari hidung'),
('G06', 'Pusing'),
('G07', 'Wajah kemerahan'),
('G08', 'Dehidrasi'),
('G09', 'Sering buang air kecil'),
('G10', 'Menurunnya berat badan'),
('G11', 'Luka sulit sembuh'),
('G12', 'Keringat berlebih'),
('G13', 'Nyeri dada'),
('G14', 'Denyut jantung tidak teratur'),
('G15', 'Bengkak pada kaki dan perut'),
('G16', 'Sesak nafas'),
('G17', 'Sulit buang air kecil'),
('G18', 'Nafsu makan berkurang'),
('G19', 'Pucat'),
('G20', 'Perut keram'),
('G21', 'Anemia'),
('G22', 'Kurang aktifitas'),
('G23', 'Berat badan naik'),
('G24', 'Mudah mengantuk'),
('G25', 'Sakit lutut'),
('G26', 'Varises'),
('G27', 'Sendi terasa nyeri'),
('G28', 'Sendi meradang'),
('G29', 'Kaku pada persendian'),
('G30', 'Terdapat benjolan-benjolan di sekitar sendi yang terasa nyeri');

-- --------------------------------------------------------

--
-- Table structure for table `konsultasi`
--

CREATE TABLE `konsultasi` (
  `id_konsultasi` char(5) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `tglkonsultasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penyakit`
--

CREATE TABLE `penyakit` (
  `id_penyakit` varchar(3) NOT NULL,
  `penyakit` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penyakit`
--

INSERT INTO `penyakit` (`id_penyakit`, `penyakit`) VALUES
('P01', 'Hipertensi'),
('P02', 'Diabetes'),
('P03', 'Jantung'),
('P04', 'Ginjal'),
('P05', 'Obesitas'),
('P06', 'Asam Urat');

-- --------------------------------------------------------

--
-- Table structure for table `relasi`
--

CREATE TABLE `relasi` (
  `id_relasi` int(11) NOT NULL,
  `id_penyakit` varchar(3) NOT NULL,
  `id_gejala` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi`
--

INSERT INTO `relasi` (`id_relasi`, `id_penyakit`, `id_gejala`) VALUES
(1, 'P01', 'G01'),
(2, 'P01', 'G02'),
(3, 'P01', 'G03'),
(4, 'P02', 'G04'),
(5, 'P02', 'G05'),
(6, 'P03', 'G06'),
(7, 'P03', 'G07'),
(8, 'P03', 'G08'),
(9, 'P04', 'G09'),
(10, 'P04', 'G10'),
(11, 'P04', 'G11'),
(12, 'P05', 'G12'),
(13, 'P05', 'G13'),
(14, 'P06', 'G14'),
(15, 'P06', 'G15');

-- --------------------------------------------------------

--
-- Table structure for table `solusi`
--

CREATE TABLE `solusi` (
  `id_solusi` char(3) NOT NULL,
  `id_penyakit` varchar(3) NOT NULL,
  `solusi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `solusi`
--

INSERT INTO `solusi` (`id_solusi`, `id_penyakit`, `solusi`) VALUES
('S01', 'P01', 'Mengkonsumsi makanan yang rendah lemak dan kaya serat. Misalnya, roti dari biji-bijian utuh, beras merah, serta buah dan sayuran.'),
('S02', 'P01', 'Kurangi garam. Batasi dalam makanan, tidak lebih dari satu sendok teh.\r\n'),
('S03', 'P01', 'Berolahraga secara rutin. Seseorang yang aktif berolahraga akan lebih terhindar dari risiko terserang hipertensi. Lakukan jalan cepat atau bersepeda 2-3 jam setiap minggu.'),
('S04', 'P02', 'Berhenti merokok. Rokok adalah faktor risiko utama penyakit jantung, terutama penyakit jantung koroner.'),
('S05', 'P02', 'Rutin memeriksakan diri. Lakukan pemeriksaan rutin terkait kadar kolesterol, gula darah, dan tekanan darah.'),
('S06', 'P02', 'Olahraga rutin. Selain membantu menjaga kesehatan, olahraga rutin selama 30-60 menit sehari dapat membantu mengontrol tekanan darah, serta kadar kolesterol dan gula darah.'),
('S07', 'P02', 'Kelola stres dengan baik. Stres dalam jangka panjang dapat menyebabkan jantung bekerja lebih keras. Oleh karena itu, sebisa mungkin kurangi stres dengan menjalani aktivitas fisik. Sebagai contoh, lakukan latihan yang melibatkan teknik pernapasan dan relaksasi otot, seperti yoga. Konsultasikan dengan dokter bila Anda sering merasa bingung, tertekan, dan marah tiap kali menghadapi masalah.'),
('S08', 'P03', 'Mengurangi porsi makan. Mengurangi porsi makan setiap hari bisa menjadi cara terbaik untuk menghindari diabetes. '),
('S09', 'P03', 'Berolahraga setiap hari membantu menjaga berat badan yang sehat, menurunkan kadar gula darah dan meningkatkan sensitivitas Anda terhadap insulin. Jadi, berolahragalah setiap hari selama minimal 30 menit untuk menjaga tingkat gula darah dalam rentang normal.'),
('S10', 'P03', 'Berat badan berlebih dapat menjadi memperbesar risiko seseorang terkena diabetes. Jadi, pastikan bahwa Anda dapat menurunkan berat badan dan menjaganya tetap normal.'),
('S11', 'P03', 'Hindari makanan berlemak. '),
('S12', 'P03', 'Hindari minuman manis. '),
('S13', 'P03', 'Makan banyak sayuran.'),
('S14', 'P03', 'Hindari Stres'),
('S15', 'P04', 'Minum air jeruk nipis setiap pagi dan malam'),
('S16', 'P04', 'Minum jus anggur. Minumlah jus anggur minimal sehari sekali secara rutin untuk menurunkan kadar kolesterol jahat dalam tubuh.'),
('S17', 'P04', 'Hindari makanan tinggi lemak dan pilih makanan sehat.'),
('S18', 'P05', 'Konsumsi pola makan rendah kolesterol dengan menghindari makanan kaya lemak jenuh dan perbanyak konsumsi lemak baik, seperti lemak tak jenuh dan omega 3 yang membantu menurunkan kolesterol'),
('S19', 'P05', 'Perbanyak konsumsi serat'),
('S20', 'P05', 'Melakukan eradikasi secara intensif dengan menyikirkan bagian tanaman yang rusak, busuk, atau mengalami bercak untuk menekan sumber inokulum patogen. '),
('S21', 'P05', 'Olahraga beberapa hari dalam seminggu setidaknya selama 30 menit'),
('S22', 'P06', 'Mengurangi porsi makan\r\n'),
('S23', 'P06', 'Menurunkan berat badan. Berat badan berlebih dapat menjadi memperbesar risiko seseorang terkena diabetes. Jadi, pastikan bahwa Anda dapat menurunkan berat badan dan menjaganya tetap normal.'),
('S24', 'P06', 'Mengubah pola makan merupakan cara lain untuk mencegah diabetes. Jika selama ini Anda cenderung terbiasa makan makanan berlemak, bergula tinggi, dan serba prosesan (siap saji atau kalengan), tukar dengan yang lebih sehat. Pastikan piring makan Anda selalu berisi variasi karbohidrat, protein, serat, lemak baik, serta vitamin dan mineral.'),
('S25', 'P06', 'Minum banyak air putih. Air putih tidak mengandung gula sehingga tidak akan menaikkan kadar gula darah Anda. Sebaliknya, minum air putih justru membuat sel-sel tubuh merespon insulin dengan baik. Air putih juga jadi cara ampuh bagi Anda agar tidak mengonsumsi minuman manis terlalu banyak.'),
('S26', 'P06', 'Berhenti merokok. Penelitian lain juga menyebutkan bahwa merokok dapat mempertebal lemak perut, termasuk pada orang yang tidak obesitas. Penumpukan lemak perut juga merupakan salah satu faktor penyebab terjadinya diabetes.'),
('S27', 'P06', 'Rutin Olahraga'),
('S28', 'P06', 'Konsumsilah Kayu Manis. Dengan menambahkan lebih banyak kayu manis ke dalam makanan Anda, dalam bentuk minyak kayu manis atau bubuk, Anda bisa menurunkan risiko terkena diabetes hingga 48 persen.'),
('S29', 'P06', 'Konsumsilah Salad'),
('s50', 'P10', 'jgn makan asin asin ya gebbngs.. love you');

-- --------------------------------------------------------

--
-- Table structure for table `tree`
--

CREATE TABLE `tree` (
  `id` int(11) NOT NULL,
  `id_gejala` varchar(5) NOT NULL,
  `ifyes` int(11) NOT NULL,
  `ifno` int(11) NOT NULL,
  `hasil` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tree`
--

INSERT INTO `tree` (`id`, `id_gejala`, `ifyes`, `ifno`, `hasil`) VALUES
(1, 'G01', 2, 22, NULL),
(2, 'G02', 3, 8, NULL),
(3, 'G03', 4, 8, NULL),
(4, 'G04', 5, 12, NULL),
(5, 'G05', 6, 12, NULL),
(6, 'G06', 7, 12, NULL),
(7, 'G07', 0, 17, 'P01'),
(8, 'G08', 9, 12, NULL),
(9, 'G09', 10, 12, NULL),
(10, 'G10', 11, 12, NULL),
(11, 'G11', 0, 12, 'P02'),
(12, 'G12', 13, 16, NULL),
(13, 'G13', 14, 16, NULL),
(14, 'G14', 15, 16, NULL),
(15, 'G15', 16, 16, NULL),
(16, 'G16', 0, 17, 'P03'),
(17, 'G17', 18, 22, NULL),
(18, 'G18', 19, 22, NULL),
(19, 'G19', 20, 22, NULL),
(20, 'G20', 21, 22, NULL),
(21, 'G21', 0, 22, 'P04'),
(22, 'G22', 23, 27, NULL),
(23, 'G23', 24, 27, NULL),
(24, 'G24', 25, 27, NULL),
(25, 'G25', 26, 27, NULL),
(26, 'G26', 0, 27, 'P05'),
(27, 'G27', 28, 99, NULL),
(28, 'G28', 29, 99, NULL),
(29, 'G29', 30, 99, NULL),
(30, 'G30', 0, 99, 'P06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `akses_level` varchar(20) NOT NULL,
  `is_active` int(1) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `nama`, `username`, `password`, `akses_level`, `is_active`, `tanggal_update`) VALUES
(1, 'test gannnnn', 'admin123', '$2y$10$SWtYcUj33Ebe/57jpmH82eDODENDHiijb3qBNvbHDLcDeoWEBxd1u', 'Admin', 1, '2019-10-23 07:43:30'),
(2, 'test gannnnn juga', 'pakar123', '$2y$10$SWtYcUj33Ebe/57jpmH82eDODENDHiijb3qBNvbHDLcDeoWEBxd1u', 'Pakar', 1, '2019-10-23 07:43:40'),
(3, 'tes pengguna', 'pengguna1', '601f1889667efaebb33b8c12572835da3f027f78', 'Pakar', 1, '2019-10-23 07:43:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gejala`
--
ALTER TABLE `gejala`
  ADD PRIMARY KEY (`id_gejala`);

--
-- Indexes for table `konsultasi`
--
ALTER TABLE `konsultasi`
  ADD PRIMARY KEY (`id_konsultasi`);

--
-- Indexes for table `penyakit`
--
ALTER TABLE `penyakit`
  ADD PRIMARY KEY (`id_penyakit`);

--
-- Indexes for table `relasi`
--
ALTER TABLE `relasi`
  ADD PRIMARY KEY (`id_relasi`);

--
-- Indexes for table `solusi`
--
ALTER TABLE `solusi`
  ADD PRIMARY KEY (`id_solusi`);

--
-- Indexes for table `tree`
--
ALTER TABLE `tree`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tree`
--
ALTER TABLE `tree`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
