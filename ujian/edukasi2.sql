-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2019 at 02:07 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `edukasi2`
--

-- --------------------------------------------------------

--
-- Table structure for table `acak`
--

CREATE TABLE `acak` (
  `id_acak` int(11) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acak`
--

INSERT INTO `acak` (`id_acak`, `aktif`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama_sekolah` varchar(200) NOT NULL,
  `alamat` varchar(400) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `kepala_sekolah` varchar(250) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `id` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `user`, `password`, `nama_sekolah`, `alamat`, `foto`, `kepala_sekolah`, `nip`, `id`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'SMAN 1 KALIWUNGU', 'Kaliwungu', 'logobulat.png', '', '', 'dataku');

-- --------------------------------------------------------

--
-- Table structure for table `aktif`
--

CREATE TABLE `aktif` (
  `id_aktif` int(11) NOT NULL,
  `kode` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aktif`
--

INSERT INTO `aktif` (`id_aktif`, `kode`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cek`
--

CREATE TABLE `cek` (
  `id_cek` int(11) NOT NULL,
  `tabel` varchar(55) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cek`
--

INSERT INTO `cek` (`id_cek`, `tabel`, `jumlah`) VALUES
(1, 'DATA 1', 0),
(2, 'DATA 2', 0),
(3, 'DATA 3', 0),
(4, 'DATA 4', 0),
(5, 'DATA 5', 0),
(6, 'DATA 6', 0),
(7, 'DATA 7', 0);

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id_client`, `aktif`) VALUES
(1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `ijin`
--

CREATE TABLE `ijin` (
  `id_token` varchar(11) NOT NULL,
  `token` varchar(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ijin`
--

INSERT INTO `ijin` (`id_token`, `token`) VALUES
('token123', 'JJQPRU');

-- --------------------------------------------------------

--
-- Table structure for table `kop`
--

CREATE TABLE `kop` (
  `id_kop` int(11) NOT NULL,
  `pemerintah` varchar(300) NOT NULL,
  `dinas` varchar(300) NOT NULL,
  `nama_sekolah` varchar(300) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `tambahan` varchar(300) NOT NULL,
  `id` varchar(12) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kop`
--

INSERT INTO `kop` (`id_kop`, `pemerintah`, `dinas`, `nama_sekolah`, `alamat`, `tambahan`, `id`, `foto`) VALUES
(1, 'PEMERINTAH PROVINSI JAWA TENGAH', 'DINAS PENDIDIKAN DAN KEBUDAYAAN', 'SMA NEGERI 1 KALIWUNGU', 'Alamat : Jl Pangeran Juminah Kaliwungu - Kendal Telp. (0294)382567', 'Surat Elektronik : smakaliwungu@yahoo.co.id Website : sman1kaliwungu.sch.id', 'kop123', 'jateng.png');

-- --------------------------------------------------------

--
-- Table structure for table `pengacak`
--

CREATE TABLE `pengacak` (
  `id_pengacak` int(11) NOT NULL,
  `a1` varchar(1) NOT NULL,
  `b1` varchar(1) NOT NULL,
  `c1` varchar(1) NOT NULL,
  `d1` varchar(1) NOT NULL,
  `e1` varchar(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengacak`
--

INSERT INTO `pengacak` (`id_pengacak`, `a1`, `b1`, `c1`, `d1`, `e1`) VALUES
(1, 'A', 'B', 'C', 'D', 'E'),
(2, 'A', 'B', 'C', 'E', 'D'),
(3, 'A', 'B', 'D', 'C', 'E'),
(4, 'A', 'B', 'D', 'E', 'C'),
(5, 'A', 'B', 'E', 'C', 'D'),
(6, 'A', 'B', 'E', 'D', 'C'),
(7, 'A', 'C', 'D', 'B', 'E'),
(8, 'A', 'C', 'D', 'E', 'B'),
(9, 'A', 'C', 'B', 'E', 'D'),
(10, 'A', 'C', 'B', 'D', 'E'),
(11, 'A', 'C', 'E', 'B', 'D'),
(12, 'A', 'C', 'E', 'D', 'B'),
(13, 'A', 'D', 'B', 'C', 'E'),
(14, 'A', 'D', 'B', 'E', 'C'),
(15, 'A', 'D', 'C', 'B', 'E'),
(16, 'A', 'D', 'C', 'E', 'B'),
(17, 'A', 'D', 'E', 'B', 'C'),
(18, 'A', 'D', 'E', 'C', 'B'),
(19, 'A', 'E', 'B', 'C', 'D'),
(20, 'A', 'E', 'B', 'D', 'C'),
(21, 'A', 'E', 'C', 'B', 'D'),
(22, 'A', 'E', 'C', 'D', 'B'),
(23, 'A', 'E', 'D', 'B', 'C'),
(24, 'A', 'E', 'D', 'C', 'B'),
(25, 'B', 'A', 'C', 'D', 'E'),
(26, 'B', 'A', 'C', 'E', 'D'),
(27, 'B', 'A', 'D', 'C', 'E'),
(28, 'B', 'A', 'D', 'E', 'C'),
(29, 'B', 'A', 'E', 'C', 'D'),
(30, 'B', 'A', 'E', 'D', 'C'),
(31, 'B', 'C', 'D', 'A', 'E'),
(32, 'B', 'C', 'D', 'E', 'A'),
(33, 'B', 'C', 'A', 'E', 'D'),
(34, 'B', 'C', 'A', 'D', 'E'),
(35, 'B', 'C', 'E', 'A', 'D'),
(36, 'B', 'C', 'E', 'D', 'A'),
(37, 'B', 'D', 'A', 'C', 'E'),
(38, 'B', 'D', 'A', 'E', 'C'),
(39, 'B', 'D', 'C', 'A', 'E'),
(40, 'B', 'D', 'C', 'E', 'A'),
(41, 'B', 'D', 'E', 'A', 'C'),
(42, 'B', 'D', 'E', 'C', 'A'),
(43, 'B', 'E', 'A', 'C', 'D'),
(44, 'B', 'E', 'A', 'D', 'C'),
(45, 'B', 'E', 'C', 'A', 'D'),
(46, 'B', 'E', 'C', 'D', 'A'),
(47, 'B', 'E', 'D', 'A', 'C'),
(48, 'B', 'E', 'D', 'C', 'A'),
(49, 'C', 'B', 'A', 'D', 'E'),
(50, 'C', 'B', 'A', 'E', 'D'),
(51, 'C', 'B', 'D', 'A', 'E'),
(52, 'C', 'B', 'D', 'E', 'A'),
(53, 'C', 'B', 'E', 'A', 'D'),
(54, 'C', 'B', 'E', 'D', 'A'),
(55, 'C', 'A', 'D', 'B', 'E'),
(56, 'C', 'A', 'D', 'E', 'B'),
(57, 'C', 'A', 'B', 'E', 'D'),
(58, 'C', 'A', 'B', 'D', 'E'),
(59, 'C', 'A', 'E', 'B', 'D'),
(60, 'C', 'A', 'E', 'D', 'B'),
(61, 'C', 'D', 'B', 'A', 'E'),
(62, 'C', 'D', 'B', 'E', 'A'),
(63, 'C', 'D', 'A', 'B', 'E'),
(64, 'C', 'D', 'A', 'E', 'B'),
(65, 'C', 'D', 'E', 'B', 'A'),
(66, 'C', 'D', 'E', 'A', 'B'),
(67, 'C', 'E', 'B', 'A', 'D'),
(68, 'C', 'E', 'B', 'D', 'A'),
(69, 'C', 'E', 'A', 'B', 'D'),
(70, 'C', 'E', 'A', 'D', 'B'),
(71, 'C', 'E', 'D', 'B', 'A'),
(72, 'C', 'E', 'D', 'A', 'B'),
(73, 'D', 'B', 'C', 'A', 'E'),
(74, 'D', 'B', 'C', 'E', 'A'),
(75, 'D', 'B', 'A', 'C', 'E'),
(76, 'D', 'B', 'A', 'E', 'C'),
(77, 'D', 'B', 'E', 'C', 'A'),
(78, 'D', 'B', 'E', 'A', 'C'),
(79, 'D', 'C', 'A', 'B', 'E'),
(80, 'D', 'C', 'A', 'E', 'B'),
(81, 'D', 'C', 'B', 'E', 'A'),
(82, 'D', 'C', 'B', 'A', 'E'),
(83, 'D', 'C', 'E', 'B', 'A'),
(84, 'D', 'C', 'E', 'A', 'B'),
(85, 'D', 'A', 'B', 'C', 'E'),
(86, 'D', 'A', 'B', 'E', 'C'),
(87, 'D', 'A', 'C', 'B', 'E'),
(88, 'D', 'A', 'C', 'E', 'B'),
(89, 'D', 'A', 'E', 'B', 'C'),
(90, 'D', 'A', 'E', 'C', 'B'),
(91, 'D', 'E', 'B', 'C', 'A'),
(92, 'D', 'E', 'B', 'A', 'C'),
(93, 'D', 'E', 'C', 'B', 'A'),
(94, 'D', 'E', 'C', 'A', 'B'),
(95, 'D', 'E', 'A', 'B', 'C'),
(96, 'D', 'E', 'A', 'C', 'B'),
(97, 'E', 'B', 'C', 'D', 'A'),
(98, 'E', 'B', 'C', 'A', 'D'),
(99, 'E', 'B', 'D', 'C', 'A'),
(100, 'E', 'B', 'D', 'A', 'C'),
(101, 'E', 'B', 'A', 'C', 'D'),
(102, 'E', 'B', 'A', 'D', 'C'),
(103, 'E', 'C', 'D', 'B', 'A'),
(104, 'E', 'C', 'D', 'A', 'B'),
(105, 'E', 'C', 'B', 'A', 'D'),
(106, 'E', 'C', 'B', 'D', 'A'),
(107, 'E', 'C', 'A', 'B', 'D'),
(108, 'E', 'C', 'A', 'D', 'B'),
(109, 'E', 'D', 'B', 'C', 'A'),
(110, 'E', 'D', 'B', 'A', 'C'),
(111, 'E', 'D', 'C', 'B', 'A'),
(112, 'E', 'D', 'C', 'A', 'B'),
(113, 'E', 'D', 'A', 'B', 'C'),
(114, 'E', 'D', 'A', 'C', 'B'),
(115, 'E', 'A', 'B', 'C', 'D'),
(116, 'E', 'A', 'B', 'D', 'C'),
(117, 'E', 'A', 'C', 'B', 'D'),
(118, 'E', 'A', 'C', 'D', 'B'),
(119, 'E', 'A', 'D', 'B', 'C'),
(120, 'E', 'A', 'D', 'C', 'B');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id_peserta` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `no_ujian` varchar(50) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jurusan` varchar(22) NOT NULL,
  `mapel_pil` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL DEFAULT '',
  `foto` varchar(50) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ragu`
--

CREATE TABLE `ragu` (
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ragu`
--

INSERT INTO `ragu` (`status`) VALUES
(1);

-- --------------------------------------------------------

--
-- Table structure for table `raport`
--

CREATE TABLE `raport` (
  `id_raport` int(11) NOT NULL,
  `no_ujian` varchar(100) NOT NULL,
  `pelajaran` varchar(100) NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `selesai`
--

CREATE TABLE `selesai` (
  `id_selesai` int(11) NOT NULL,
  `no_ujian` varchar(25) NOT NULL,
  `id_mapel` varchar(50) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `id_soal` int(5) NOT NULL,
  `no_soal` int(5) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(25) NOT NULL,
  `id_mapel` varchar(25) NOT NULL,
  `pertanyaan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `A` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `B` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `C` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `D` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `E` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kunci` varchar(1) NOT NULL,
  `waktu` int(5) NOT NULL,
  `jumlah_soal` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soalinggris`
--

CREATE TABLE `soalinggris` (
  `id_soal` int(11) NOT NULL,
  `no_soal` int(5) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(22) NOT NULL,
  `id_mapel` varchar(25) NOT NULL,
  `pertanyaan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `A` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `B` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `C` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `D` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `E` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kunci` varchar(1) NOT NULL,
  `waktu` int(5) NOT NULL,
  `jumlah_soal` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soallistening`
--

CREATE TABLE `soallistening` (
  `id_soal` int(11) NOT NULL,
  `no_soal` int(5) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(22) NOT NULL,
  `id_mapel` varchar(25) NOT NULL,
  `listening` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `pertanyaan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `A` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `B` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `C` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `D` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `E` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kunci` varchar(1) NOT NULL,
  `waktu` int(5) NOT NULL,
  `jumlah_soal` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soalmtk`
--

CREATE TABLE `soalmtk` (
  `id_soal` int(11) NOT NULL,
  `no_soal` int(5) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(22) NOT NULL,
  `id_mapel` varchar(25) NOT NULL,
  `pertanyaan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `A` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `B` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `C` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `D` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `E` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kunci` varchar(1) NOT NULL,
  `waktu` int(5) NOT NULL,
  `jumlah_soal` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soalmtkessay`
--

CREATE TABLE `soalmtkessay` (
  `id_soal` int(11) NOT NULL,
  `no_soal` int(5) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(22) NOT NULL,
  `id_mapel` varchar(25) NOT NULL,
  `pertanyaan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kunci1` varchar(300) NOT NULL,
  `kunci2` varchar(300) NOT NULL,
  `kunci3` varchar(300) NOT NULL,
  `waktu` int(5) NOT NULL,
  `jumlah_soal` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soalpg`
--

CREATE TABLE `soalpg` (
  `id_soal` int(11) NOT NULL,
  `no_soal` int(5) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(22) NOT NULL,
  `id_mapel` varchar(25) NOT NULL,
  `pertanyaan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `A` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `B` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `C` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `D` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `E` varchar(300) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `kunci` varchar(1) NOT NULL,
  `waktu` int(5) NOT NULL,
  `jumlah_soal` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soalpgessay`
--

CREATE TABLE `soalpgessay` (
  `id_soal` int(11) NOT NULL,
  `no_soal` int(5) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `jurusan` varchar(22) NOT NULL,
  `id_mapel` varchar(25) NOT NULL,
  `pertanyaan` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `waktu` int(5) NOT NULL,
  `jumlah_soal` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(11) NOT NULL,
  `user` varchar(25) NOT NULL,
  `id_mapel` varchar(25) NOT NULL,
  `status` int(1) NOT NULL,
  `nama` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id_test` int(11) NOT NULL,
  `nama_test` varchar(100) NOT NULL,
  `tanggal` varchar(100) NOT NULL,
  `kkm` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id_test`, `nama_test`, `tanggal`, `kkm`) VALUES
(1, 'Penilaian Akhir Semester', 'Kaliwungu, 28 Februari 2019', 70);

-- --------------------------------------------------------

--
-- Table structure for table `tobk`
--

CREATE TABLE `tobk` (
  `id_tobk` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_ujian` varchar(100) NOT NULL,
  `jurusan` varchar(56) NOT NULL,
  `m1` int(5) NOT NULL,
  `m2` int(5) NOT NULL,
  `m3` int(5) NOT NULL,
  `m4` int(5) NOT NULL,
  `ratarata` int(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ujian`
--

CREATE TABLE `ujian` (
  `id_ujian` int(11) NOT NULL,
  `id_mapel` varchar(40) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `waktu` varchar(50) NOT NULL,
  `aktif` varchar(1) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `jumlah_soal` int(5) NOT NULL,
  `spesial` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acak`
--
ALTER TABLE `acak`
  ADD PRIMARY KEY (`id_acak`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `aktif`
--
ALTER TABLE `aktif`
  ADD PRIMARY KEY (`id_aktif`);

--
-- Indexes for table `cek`
--
ALTER TABLE `cek`
  ADD PRIMARY KEY (`id_cek`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Indexes for table `ijin`
--
ALTER TABLE `ijin`
  ADD PRIMARY KEY (`id_token`);

--
-- Indexes for table `kop`
--
ALTER TABLE `kop`
  ADD PRIMARY KEY (`id_kop`);

--
-- Indexes for table `pengacak`
--
ALTER TABLE `pengacak`
  ADD PRIMARY KEY (`id_pengacak`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id_peserta`);

--
-- Indexes for table `ragu`
--
ALTER TABLE `ragu`
  ADD PRIMARY KEY (`status`);

--
-- Indexes for table `raport`
--
ALTER TABLE `raport`
  ADD PRIMARY KEY (`id_raport`);

--
-- Indexes for table `selesai`
--
ALTER TABLE `selesai`
  ADD PRIMARY KEY (`id_selesai`);

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `soalinggris`
--
ALTER TABLE `soalinggris`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `soallistening`
--
ALTER TABLE `soallistening`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `soalmtk`
--
ALTER TABLE `soalmtk`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `soalmtkessay`
--
ALTER TABLE `soalmtkessay`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `soalpg`
--
ALTER TABLE `soalpg`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `soalpgessay`
--
ALTER TABLE `soalpgessay`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id_test`);

--
-- Indexes for table `tobk`
--
ALTER TABLE `tobk`
  ADD PRIMARY KEY (`id_tobk`);

--
-- Indexes for table `ujian`
--
ALTER TABLE `ujian`
  ADD PRIMARY KEY (`id_ujian`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acak`
--
ALTER TABLE `acak`
  MODIFY `id_acak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `aktif`
--
ALTER TABLE `aktif`
  MODIFY `id_aktif` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cek`
--
ALTER TABLE `cek`
  MODIFY `id_cek` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kop`
--
ALTER TABLE `kop`
  MODIFY `id_kop` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pengacak`
--
ALTER TABLE `pengacak`
  MODIFY `id_pengacak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id_peserta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4599;

--
-- AUTO_INCREMENT for table `raport`
--
ALTER TABLE `raport`
  MODIFY `id_raport` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=303;

--
-- AUTO_INCREMENT for table `selesai`
--
ALTER TABLE `selesai`
  MODIFY `id_selesai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=536;

--
-- AUTO_INCREMENT for table `soal`
--
ALTER TABLE `soal`
  MODIFY `id_soal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14478;

--
-- AUTO_INCREMENT for table `soalinggris`
--
ALTER TABLE `soalinggris`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=666;

--
-- AUTO_INCREMENT for table `soallistening`
--
ALTER TABLE `soallistening`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=271;

--
-- AUTO_INCREMENT for table `soalmtk`
--
ALTER TABLE `soalmtk`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=678;

--
-- AUTO_INCREMENT for table `soalmtkessay`
--
ALTER TABLE `soalmtkessay`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=364;

--
-- AUTO_INCREMENT for table `soalpg`
--
ALTER TABLE `soalpg`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `soalpgessay`
--
ALTER TABLE `soalpgessay`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=660;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tobk`
--
ALTER TABLE `tobk`
  MODIFY `id_tobk` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ujian`
--
ALTER TABLE `ujian`
  MODIFY `id_ujian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=298;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
