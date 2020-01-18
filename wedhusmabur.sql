-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 09:58 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wedhusmabur`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL,
  `penulis` varchar(20) NOT NULL,
  `tanggal` datetime NOT NULL,
  `status` enum('publish','draft') DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`id`, `judul`, `id_kategori`, `nama_gambar`, `gambar`, `deskripsi`, `penulis`, `tanggal`, `status`) VALUES
(19, 'Resep Nasi Goreng Ka', 4, 'Sate', 'nasgor.png', '<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan:</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #1c7b74; background-color: #ffffff;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">400 gram daging kambing, potong kotak 2 cm</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">200 gram lemak kambing , potong kotak 2 cm</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">3 sendok makan&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Kecap Manis Bango<br /></span></li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1/4 sendok teh merica</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sendok teh garam</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sendok makan minyak goreng</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">25 buah tusuk sate&nbsp;<br /><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><br /></span></li>\r\n</ul>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan Sambal Kecap:</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #1c7b74; background-color: #ffffff;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">5 sendok makan&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Kecap Manis Bango</span></li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">5 butir bawang merah, iris halus</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">10 buah cabai rawit hijau, iris</li>\r\n</ul>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan Pelengkap:</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #1c7b74; background-color: #ffffff;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">3 buah lontong, potong-potong</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 buah tomat merah, iris</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">kol, iris halus</li>\r\n</ul>', 'Amelia', '2019-08-30 12:02:00', 'publish'),
(20, 'Sate Buntel', 2, 'Buntel', 'buntel.png', '<div class=\"row title\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: CinzelRegular; vertical-align: baseline; display: inline-block; width: 607.188px; color: #333333;\">\r\n<h4 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan</h4>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div class=\"row desc\" style=\"margin: 10px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: 15.6px; font-family: OpenSansRegular; vertical-align: baseline; display: inline-block; width: 607.188px; color: #1c7b74;\">\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; list-style-position: initial; list-style-image: initial;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">500 g daging kambing, cincang</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">20 batang tusuk sate</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 sdm Kecap Manis Bango</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">3 sdm tepung roti</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 siung bawang putih, cincang</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 batang daun bawang, iris tipis</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 butir telur ayam, kocok rata</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 sdm minyak goreng</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Serai secukupnya</li>\r\n</ul>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</h3>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bumbu Halus</h3>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; list-style-position: initial; list-style-image: initial;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">4 butir bawang merah</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1/2 sdt ketumbar sangrai</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 1/2 sdt garam</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sdt lada putih bubuk</li>\r\n</ul>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</h3>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Sambal Kecap</h3>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; list-style-position: initial; list-style-image: initial;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">6 buah cabe rawit, iris tipis</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">6 butir bawang merah, iris tipis</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">4 sdm Kecap Manis Bango</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sdm kecap asin</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 buah jeruk limau, belah dua</li>\r\n</ul>\r\n</div>', 'Amelia', '2019-08-30 12:03:13', 'publish'),
(21, 'Resep Krengseng', 3, 'Krengseng', 'krengseng.png', 'Bahan\r\n \r\n650 g daging dan iga sapi, potong-potong\r\n2 buah tomat merah, potong-potong \r\n3 sdm kecap manis bango \r\n2 sdm petis udang \r\n300 ml air \r\n2 sdm minyak, untuk menumis\r\n \r\n\r\nBumbu, haluskan:\r\n\r\n \r\n\r\n6 butir bawang merah \r\n4 siung bawang putih \r\n4 buah cabai merah keriting \r\n3 cm jahe \r\n1 sdm merica butiran \r\n1 sdt garam', 'Amelia', '2019-09-07 08:00:00', 'publish'),
(22, 'Tongseng', 2, 'Tongseng', 'tongseng.png', 'Bahan\r\n \r\n400 g daging kambing\r\n4 lembar daun salam\r\n1 L air\r\n800 ml santan encer dari ½ butir kelapa\r\n2 cm lengkuas, memarkan\r\n1 batang serai, ambil bagian putihnya, memarkan\r\n150 g kol, potong kotak\r\n2 batang daun bawang, potong 2 cm\r\n1 buah tomat merah, potong-potong\r\n3 butir bawang merah iris tipis\r\n4 buah cabau rawit merah, iris\r\n2 ½ sdm Kecap Manis Bango\r\n4 sdm minyak, untuk menumis\r\n \r\n\r\nBumbu halus\r\n \r\n\r\n3 siung bawang putih\r\n4 butir bawang merah\r\n4 butir merica putih butiran\r\n3 buah kemiri, sangrai\r\n3 cm kunyit, bakar\r\n2 cm jahe\r\n1 sdt ketumbar butiran\r\n1 ½  sdt garam', 'Faishal', '2019-09-07 18:00:00', 'publish'),
(23, 'Resep Sate Kambing', 4, 'Sate', 'krengseng3.png', '<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan:</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #1c7b74; background-color: #ffffff;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">400 gram daging kambing, potong kotak 2 cm</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">200 gram lemak kambing , potong kotak 2 cm</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">3 sendok makan&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Kecap Manis Bango<br /></span></li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1/4 sendok teh merica</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sendok teh garam</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sendok makan minyak goreng</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">25 buah tusuk sate&nbsp;<br /><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><br /></span></li>\r\n</ul>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan Sambal Kecap:</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #1c7b74; background-color: #ffffff;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">5 sendok makan&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Kecap Manis Bango</span></li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">5 butir bawang merah, iris halus</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">10 buah cabai rawit hijau, iris</li>\r\n</ul>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan Pelengkap:</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #1c7b74; background-color: #ffffff;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">3 buah lontong, potong-potong</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 buah tomat merah, iris</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">kol, iris halus</li>\r\n</ul>', 'Amelia', '2019-08-30 12:02:00', 'publish'),
(24, 'Sate Buntel', 4, 'Buntel', 'buntel.png', '<div class=\"row title\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: CinzelRegular; vertical-align: baseline; display: inline-block; width: 607.188px; color: #333333;\">\r\n<h4 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan</h4>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div class=\"row desc\" style=\"margin: 10px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: 15.6px; font-family: OpenSansRegular; vertical-align: baseline; display: inline-block; width: 607.188px; color: #1c7b74;\">\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; list-style-position: initial; list-style-image: initial;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">500 g daging kambing, cincang</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">20 batang tusuk sate</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 sdm Kecap Manis Bango</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">3 sdm tepung roti</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 siung bawang putih, cincang</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 batang daun bawang, iris tipis</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 butir telur ayam, kocok rata</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 sdm minyak goreng</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Serai secukupnya</li>\r\n</ul>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</h3>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bumbu Halus</h3>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; list-style-position: initial; list-style-image: initial;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">4 butir bawang merah</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1/2 sdt ketumbar sangrai</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 1/2 sdt garam</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sdt lada putih bubuk</li>\r\n</ul>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</h3>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Sambal Kecap</h3>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; list-style-position: initial; list-style-image: initial;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">6 buah cabe rawit, iris tipis</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">6 butir bawang merah, iris tipis</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">4 sdm Kecap Manis Bango</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sdm kecap asin</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 buah jeruk limau, belah dua</li>\r\n</ul>\r\n</div>', 'Amelia', '2019-08-30 12:03:13', 'publish'),
(25, 'Resep Krengseng', 4, 'Krengseng', 'krengseng.png', 'Bahan\r\n \r\n650 g daging dan iga sapi, potong-potong\r\n2 buah tomat merah, potong-potong \r\n3 sdm kecap manis bango \r\n2 sdm petis udang \r\n300 ml air \r\n2 sdm minyak, untuk menumis\r\n \r\n\r\nBumbu, haluskan:\r\n\r\n \r\n\r\n6 butir bawang merah \r\n4 siung bawang putih \r\n4 buah cabai merah keriting \r\n3 cm jahe \r\n1 sdm merica butiran \r\n1 sdt garam', 'Amelia', '2019-09-07 08:00:00', 'publish'),
(26, 'Tongseng', 2, 'Tongseng', 'tongseng.png', 'Bahan\r\n \r\n400 g daging kambing\r\n4 lembar daun salam\r\n1 L air\r\n800 ml santan encer dari ½ butir kelapa\r\n2 cm lengkuas, memarkan\r\n1 batang serai, ambil bagian putihnya, memarkan\r\n150 g kol, potong kotak\r\n2 batang daun bawang, potong 2 cm\r\n1 buah tomat merah, potong-potong\r\n3 butir bawang merah iris tipis\r\n4 buah cabau rawit merah, iris\r\n2 ½ sdm Kecap Manis Bango\r\n4 sdm minyak, untuk menumis\r\n \r\n\r\nBumbu halus\r\n \r\n\r\n3 siung bawang putih\r\n4 butir bawang merah\r\n4 butir merica putih butiran\r\n3 buah kemiri, sangrai\r\n3 cm kunyit, bakar\r\n2 cm jahe\r\n1 sdt ketumbar butiran\r\n1 ½  sdt garam', 'Faishal', '2019-09-07 18:00:00', 'publish'),
(27, 'Resep Sate Kambing', 1, 'Sate', 'sate.png', '<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan:</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #1c7b74; background-color: #ffffff;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">400 gram daging kambing, potong kotak 2 cm</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">200 gram lemak kambing , potong kotak 2 cm</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">3 sendok makan&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Kecap Manis Bango<br /></span></li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1/4 sendok teh merica</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sendok teh garam</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sendok makan minyak goreng</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">25 buah tusuk sate&nbsp;<br /><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><br /></span></li>\r\n</ul>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan Sambal Kecap:</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #1c7b74; background-color: #ffffff;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">5 sendok makan&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Kecap Manis Bango</span></li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">5 butir bawang merah, iris halus</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">10 buah cabai rawit hijau, iris</li>\r\n</ul>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan Pelengkap:</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #1c7b74; background-color: #ffffff;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">3 buah lontong, potong-potong</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 buah tomat merah, iris</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">kol, iris halus</li>\r\n</ul>', 'Amelia', '2019-08-30 12:02:00', ''),
(28, 'Sate Buntel', 2, 'Buntel', 'nasgor.png', '<div class=\"row title\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: CinzelRegular; vertical-align: baseline; display: inline-block; width: 607.188px; color: #333333;\">\r\n<h4 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan</h4>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div class=\"row desc\" style=\"margin: 10px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: 15.6px; font-family: OpenSansRegular; vertical-align: baseline; display: inline-block; width: 607.188px; color: #1c7b74;\">\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; list-style-position: initial; list-style-image: initial;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">500 g daging kambing, cincang</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">20 batang tusuk sate</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 sdm Kecap Manis Bango</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">3 sdm tepung roti</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 siung bawang putih, cincang</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 batang daun bawang, iris tipis</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 butir telur ayam, kocok rata</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 sdm minyak goreng</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Serai secukupnya</li>\r\n</ul>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</h3>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bumbu Halus</h3>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; list-style-position: initial; list-style-image: initial;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">4 butir bawang merah</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1/2 sdt ketumbar sangrai</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 1/2 sdt garam</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sdt lada putih bubuk</li>\r\n</ul>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</h3>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Sambal Kecap</h3>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; list-style-position: initial; list-style-image: initial;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">6 buah cabe rawit, iris tipis</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">6 butir bawang merah, iris tipis</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">4 sdm Kecap Manis Bango</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sdm kecap asin</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 buah jeruk limau, belah dua</li>\r\n</ul>\r\n</div>', 'Amelia', '2019-08-30 12:03:13', ''),
(29, 'Resep Krengseng', 1, 'Krengseng', 'krengseng.png', 'Bahan\r\n \r\n650 g daging dan iga sapi, potong-potong\r\n2 buah tomat merah, potong-potong \r\n3 sdm kecap manis bango \r\n2 sdm petis udang \r\n300 ml air \r\n2 sdm minyak, untuk menumis\r\n \r\n\r\nBumbu, haluskan:\r\n\r\n \r\n\r\n6 butir bawang merah \r\n4 siung bawang putih \r\n4 buah cabai merah keriting \r\n3 cm jahe \r\n1 sdm merica butiran \r\n1 sdt garam', 'Amelia', '2019-09-07 08:00:00', 'publish'),
(30, 'Tongseng', 2, 'Tongseng', 'tongseng.png', 'Bahan\r\n \r\n400 g daging kambing\r\n4 lembar daun salam\r\n1 L air\r\n800 ml santan encer dari ½ butir kelapa\r\n2 cm lengkuas, memarkan\r\n1 batang serai, ambil bagian putihnya, memarkan\r\n150 g kol, potong kotak\r\n2 batang daun bawang, potong 2 cm\r\n1 buah tomat merah, potong-potong\r\n3 butir bawang merah iris tipis\r\n4 buah cabau rawit merah, iris\r\n2 ½ sdm Kecap Manis Bango\r\n4 sdm minyak, untuk menumis\r\n \r\n\r\nBumbu halus\r\n \r\n\r\n3 siung bawang putih\r\n4 butir bawang merah\r\n4 butir merica putih butiran\r\n3 buah kemiri, sangrai\r\n3 cm kunyit, bakar\r\n2 cm jahe\r\n1 sdt ketumbar butiran\r\n1 ½  sdt garam', 'Faishal', '2019-09-07 18:00:00', 'publish'),
(31, 'Resep Sate Kambing', 1, 'Sate', 'sate.png', '<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan:</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #1c7b74; background-color: #ffffff;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">400 gram daging kambing, potong kotak 2 cm</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">200 gram lemak kambing , potong kotak 2 cm</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">3 sendok makan&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Kecap Manis Bango<br /></span></li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1/4 sendok teh merica</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sendok teh garam</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sendok makan minyak goreng</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">25 buah tusuk sate&nbsp;<br /><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\"><br /></span></li>\r\n</ul>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan Sambal Kecap:</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #1c7b74; background-color: #ffffff;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">5 sendok makan&nbsp;<span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Kecap Manis Bango</span></li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">5 butir bawang merah, iris halus</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">10 buah cabai rawit hijau, iris</li>\r\n</ul>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\"><span style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan Pelengkap:</span></p>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; color: #1c7b74; background-color: #ffffff;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: inherit; font-family: OpenSansRegular; vertical-align: baseline; list-style-position: initial; list-style-image: initial; color: #1c7b74; background-color: #ffffff;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">3 buah lontong, potong-potong</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 buah tomat merah, iris</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">kol, iris halus</li>\r\n</ul>', 'Amelia', '2019-08-30 12:02:00', ''),
(32, 'Sate Buntel', 2, 'Buntel', 'buntel.png', '<div class=\"row title\" style=\"margin: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 18px; line-height: inherit; font-family: CinzelRegular; vertical-align: baseline; display: inline-block; width: 607.188px; color: #333333;\">\r\n<h4 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bahan</h4>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div class=\"row desc\" style=\"margin: 10px 0px 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; font-size: 12px; line-height: 15.6px; font-family: OpenSansRegular; vertical-align: baseline; display: inline-block; width: 607.188px; color: #1c7b74;\">\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; list-style-position: initial; list-style-image: initial;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">500 g daging kambing, cincang</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">20 batang tusuk sate</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 sdm Kecap Manis Bango</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">3 sdm tepung roti</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 siung bawang putih, cincang</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 batang daun bawang, iris tipis</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 butir telur ayam, kocok rata</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">2 sdm minyak goreng</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Serai secukupnya</li>\r\n</ul>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</h3>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Bumbu Halus</h3>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; list-style-position: initial; list-style-image: initial;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">4 butir bawang merah</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1/2 sdt ketumbar sangrai</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 1/2 sdt garam</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sdt lada putih bubuk</li>\r\n</ul>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</h3>\r\n<h3 style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">Sambal Kecap</h3>\r\n<p style=\"margin: 0px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">&nbsp;</p>\r\n<ul style=\"margin: 0px 0px 10px 18px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline; list-style-position: initial; list-style-image: initial;\">\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">6 buah cabe rawit, iris tipis</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">6 butir bawang merah, iris tipis</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">4 sdm Kecap Manis Bango</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 sdm kecap asin</li>\r\n<li style=\"margin: 0px 0px 10px; padding: 0px; border: 0px; font: inherit; vertical-align: baseline;\">1 buah jeruk limau, belah dua</li>\r\n</ul>\r\n</div>', 'Amelia', '2019-08-30 12:03:13', ''),
(33, 'Resep Krengseng', 1, 'Krengseng', 'krengseng.png', 'Bahan\r\n \r\n650 g daging dan iga sapi, potong-potong\r\n2 buah tomat merah, potong-potong \r\n3 sdm kecap manis bango \r\n2 sdm petis udang \r\n300 ml air \r\n2 sdm minyak, untuk menumis\r\n \r\n\r\nBumbu, haluskan:\r\n\r\n \r\n\r\n6 butir bawang merah \r\n4 siung bawang putih \r\n4 buah cabai merah keriting \r\n3 cm jahe \r\n1 sdm merica butiran \r\n1 sdt garam', 'Amelia', '2019-09-07 08:00:00', 'publish'),
(34, 'Tongseng', 2, 'Tongseng', 'tongseng.png', 'Bahan\r\n \r\n400 g daging kambing\r\n4 lembar daun salam\r\n1 L air\r\n800 ml santan encer dari ½ butir kelapa\r\n2 cm lengkuas, memarkan\r\n1 batang serai, ambil bagian putihnya, memarkan\r\n150 g kol, potong kotak\r\n2 batang daun bawang, potong 2 cm\r\n1 buah tomat merah, potong-potong\r\n3 butir bawang merah iris tipis\r\n4 buah cabau rawit merah, iris\r\n2 ½ sdm Kecap Manis Bango\r\n4 sdm minyak, untuk menumis\r\n \r\n\r\nBumbu halus\r\n \r\n\r\n3 siung bawang putih\r\n4 butir bawang merah\r\n4 butir merica putih butiran\r\n3 buah kemiri, sangrai\r\n3 cm kunyit, bakar\r\n2 cm jahe\r\n1 sdt ketumbar butiran\r\n1 ½  sdt garam', 'Faishal', '2019-09-07 18:00:00', 'publish');

-- --------------------------------------------------------

--
-- Table structure for table `coment`
--

CREATE TABLE `coment` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `komentar` text,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coment`
--

INSERT INTO `coment` (`id`, `nama`, `email`, `komentar`, `tanggal`) VALUES
(1, 'Amelia', 'amelia@gmail.com', 'Dagingnyaa empuk...bumbunyaa bner bner joss gandos tp sayangnya tempatnya kurang nyaman utk makan ditempat', '2019-08-28 04:34:13'),
(2, 'Amelia Dewi M', 'ameliadewi@student.u', 'Aneka masakannya mantuul betulll dari tongseng krengseng gule sate smuanyaa nikmat dan mantap sekali??', '2019-05-28 04:34:13');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `kontak` varchar(50) NOT NULL,
  `jambuka` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id_contact`, `kontak`, `jambuka`, `alamat`) VALUES
(1, '085 225 316 125 (AAN)', '', 'Jl. Melati No.10 Purwosari (Utara RS. Kasih Ibu)');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `judul` varchar(20) NOT NULL,
  `id_gallery` int(10) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `judul`, `id_gallery`, `deskripsi`, `tanggal`) VALUES
(21, 'Seminar Amel', 1, '<p>adasdasdasd</p>', '2019-08-30 08:42:56'),
(22, 'Lomba Makan', 2, '<p>makannnnnnn</p>', '2019-09-01 08:42:56'),
(23, 'Sate', 3, '<p>Sateeeeeeee</p>', '2019-09-02 08:42:56'),
(24, 'Guleeeeeeeeee', 3, '<p>Guleeeeee</p>', '2019-09-03 08:42:56'),
(25, 'Ultah Kantor', 4, '<p>Ultah</p>', '2019-09-02 08:42:56'),
(26, 'Rapat ', 4, '<p>Rapattttttt</p>', '2019-09-03 08:42:56');

-- --------------------------------------------------------

--
-- Table structure for table `gambar_gallery`
--

CREATE TABLE `gambar_gallery` (
  `id_gambar` int(100) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `gambar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gambar_gallery`
--

INSERT INTO `gambar_gallery` (`id_gambar`, `id`, `gambar`) VALUES
(21, 21, '7.jpg'),
(22, 22, '9.jpg'),
(23, 23, '10.jpg'),
(24, 24, '11.jpg'),
(25, 25, '12.jpg'),
(26, 26, '18.jpg'),
(27, 21, '19.jpg'),
(28, 21, '20.jpg'),
(29, 21, 'sik.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_gallery`
--

CREATE TABLE `jenis_gallery` (
  `id_gallery` int(11) NOT NULL,
  `nama_jenis` enum('ALL','EVENT','FOOD','TEAM') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_gallery`
--

INSERT INTO `jenis_gallery` (`id_gallery`, `nama_jenis`) VALUES
(1, 'ALL'),
(2, 'EVENT'),
(3, 'FOOD'),
(4, 'TEAM');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_menu`
--

CREATE TABLE `jenis_menu` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_menu`
--

INSERT INTO `jenis_menu` (`id_jenis`, `nama_jenis`) VALUES
(1, 'Makanan'),
(2, 'Minuman'),
(3, 'Paket'),
(4, 'Semua');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_article`
--

CREATE TABLE `kategori_article` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_article`
--

INSERT INTO `kategori_article` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Resep'),
(2, 'Makanan'),
(3, 'Minuman'),
(4, 'Acara');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id` int(11) NOT NULL,
  `nama_konten` varchar(20) NOT NULL,
  `nama_gambar` varchar(255) NOT NULL,
  `gambar` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id`, `nama_konten`, `nama_gambar`, `gambar`, `deskripsi`) VALUES
(1, 'About', 'About', 'About.png', 'Sate Kambing Solo Wedhus Mabur dari namanya saja, sudah ketahuan nuansanya jelas tak biasa. Atau bermakna kurang lebih kambing yang bisa terbang (kambing bersayap). Memang demikianlah maksud dan tujuan dibalik nama unik sebagai brand yang dijajakan pemiliknya.\r\n\r\n\r\nSoal selera, rasa, aroma dan harganya jangan ditanyakan, pastinya rasanya tak kalah dengan pemain lama, dengan harga yang tak perlu merogoh kocek terlalu dalam.');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(20) NOT NULL,
  `harga` int(50) NOT NULL,
  `id_jenis` int(20) DEFAULT NULL,
  `deskripsi` text NOT NULL,
  `nama_file` varchar(255) NOT NULL,
  `file_foto` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `harga`, `id_jenis`, `deskripsi`, `nama_file`, `file_foto`, `tanggal`) VALUES
(15, 'Sate Kambing', 15000, 1, '3 Tusuk sate , Cabe, Tomat, Kubis, Bawang Merah, Nasi', 'Sate', 'sate.png', '2019-08-29 19:11:06'),
(16, 'Sate Buntel', 15000, 3, '2 Tusuk Buntel, Cabe, Tomat, Kubis, Bawang Merah, Kecap, Nasi', 'Buntel', 'buntel.png', '2019-08-21 08:00:00'),
(17, 'Tongseng', 15000, 3, '3 Tusuk, Cabe, Tomat, Kubis, Bawang Merah, Acar Kecap, Nasi', 'Tongseng', 'tongseng.png', '2019-08-06 08:00:00'),
(18, 'Krengseng', 20000, 1, '3 Tusuk Sate, Kubis, Cabe, Tomat, Bawang Putih, Acar, Nasi', 'Krengseng', 'krengseng.png', '2019-08-29 19:10:38'),
(19, 'Nasi Goreng', 15000, 1, '2 Tusuk Sate + Telur Ayam, Kubis, Tomat, Acar', 'Nasgor', 'nasgor.png', '2019-08-29 19:10:52'),
(20, 'Gule', 15000, 1, 'Gule adalah makanan dari olahan daging kambing yang di potong-potong', 'Gule', 'buntel.png', '2019-08-29 19:10:21'),
(21, 'Nasi Putih', 3000, 1, 'Nasi adalah nasi', 'Nasi Putih', 'tongseng.png', '2019-08-29 19:10:59'),
(22, 'Es Teh', 3000, 2, 'Es teh', 'Es Teh', 'esteh.png', '2019-08-29 19:10:16'),
(23, 'Es Jeruk', 3000, 2, 'Sueger', 'Es Jeruk', 'sate.png', '2019-08-30 11:49:44'),
(24, 'Teh Panas', 3000, 2, 'Anget enak', 'TehPanas', 'tehpanas.png', '2019-08-29 19:11:22'),
(25, 'Jeruk Panas', 3000, 2, 'Anget Seger', 'Jeruk Panas', 'jerukpns.png', '2019-08-29 19:10:28'),
(26, 'Krupuk', 500, 1, 'Pendamping makanan', 'Krupuk', 'krupuk.png', '2019-08-29 19:10:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `coment`
--
ALTER TABLE `coment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_gallery` (`id_gallery`);

--
-- Indexes for table `gambar_gallery`
--
ALTER TABLE `gambar_gallery`
  ADD PRIMARY KEY (`id_gambar`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `jenis_gallery`
--
ALTER TABLE `jenis_gallery`
  ADD PRIMARY KEY (`id_gallery`);

--
-- Indexes for table `jenis_menu`
--
ALTER TABLE `jenis_menu`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori_article`
--
ALTER TABLE `kategori_article`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `coment`
--
ALTER TABLE `coment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `gambar_gallery`
--
ALTER TABLE `gambar_gallery`
  MODIFY `id_gambar` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `jenis_gallery`
--
ALTER TABLE `jenis_gallery`
  MODIFY `id_gallery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jenis_menu`
--
ALTER TABLE `jenis_menu`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kategori_article`
--
ALTER TABLE `kategori_article`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `article`
--
ALTER TABLE `article`
  ADD CONSTRAINT `article_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_article` (`id_kategori`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`id_gallery`) REFERENCES `jenis_gallery` (`id_gallery`);

--
-- Constraints for table `gambar_gallery`
--
ALTER TABLE `gambar_gallery`
  ADD CONSTRAINT `gambar_gallery_ibfk_1` FOREIGN KEY (`id`) REFERENCES `gallery` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`id_jenis`) REFERENCES `jenis_menu` (`id_jenis`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
