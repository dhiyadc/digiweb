-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2020 at 08:18 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_digitalcreative`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'cindy', 'cindy'),
(4, 'cdyy2400', 'cindy'),
(6, 'fani', 'cindy');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `path_gambar` varchar(150) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `author` varchar(150) NOT NULL,
  `text` text NOT NULL,
  `tanggal_publish` date NOT NULL,
  `kategori` text NOT NULL,
  `like` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `id_admin`, `path_gambar`, `judul`, `author`, `text`, `tanggal_publish`, `kategori`, `like`) VALUES
(22, 1, '351949.jpg', 'bubble', 'admin', '<p style=\"text-align:center\">bubble sort ini adalah</p>\r\n\r\n<p style=\"text-align:center\"><strong>pelajaran&nbsp;</strong></p>\r\n', '2020-03-08', 'Kecerdasan Buatan', 0),
(24, 1, 'LOGO_UNIVERSITAS_SRIWIJAYA1.png', 'cdyy2400', 'admin', '<p><span style=\"color:#e74c3c\"><strong>wkemcwekofe hehehehe</strong><em> iyaaaaa !!!!!!!!!!!!!!!!!!!!!!!</em></span></p>\r\n', '2020-03-10', 'Kecerdasan Buatan', 0),
(29, 4, '1', 'coba kategori', 'cdyy2400', 'networking', '2020-03-07', 'Network', 0),
(30, 4, '1', 'coba kategori 2', 'cdyy2400', 'jncowecn', '2020-03-07', 'Desain', 0),
(31, 1, 'LOGO_UNIVERSITAS_SRIWIJAYA.png', 'gdskfghjk', 'admin', 'fghjkghjkl', '2020-03-08', 'Kecerdasan Buatan', 0),
(33, 1, '431462.jpg', 'cobaaaa', 'admin', '<p><span style=\"font-family:Courier New,Courier,monospace\">hai semuanya hehe <span style=\"font-size:18px\"><strong>coba bikin&nbsp;</strong></span></span></p>\r\n', '2020-03-09', 'Kecerdasan Buatan', 0),
(34, 1, 'ac33fda087da31a81d2f4edf21c334a8.jpg', 'coba12345', 'admin', '<p>softlink <strong>mereferensi ke nama file</strong>, jadi info yang disimpen nama &amp; lokasi file secara struktur direktori. karena yang direferensi adalah&nbsp;<strong>nama</strong>, softlink bisa me-link ke file yang hanya nama saja atau nggak benar-benar ada.&nbsp;&nbsp;<img alt=\"heart\" src=\"http://localhost/digiweb/assets/js/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" /><img alt=\"cheeky\" src=\"http://localhost/digiweb/assets/js/ckeditor/plugins/smiley/images/tongue_smile.png\" style=\"height:23px; width:23px\" title=\"cheeky\" /><br />\r\n<br />\r\nhardlink mereferensi ke file, bukan sekedar namanya. mungkin info yang disimpen adalah alamat file secara fisik dalam disk, jadi file yang di-link harus beneran ada.</p>\r\n', '2020-03-09', 'Business', 0),
(35, 1, '3519491.jpg', 'cerita78', 'admin', '<p>Using color to add meaning only<span style=\"color:#f1c40f\"> provides a visual indication, which</span> will not be co<span style=\"background-color:#1abc9c\">nveyed to users of assistive technologies &ndash; such as screen </span>readers. Ensure that information denoted by the color is either obvious from the content itself (e.g. the visible text), <span style=\"font-family:Comic Sans MS,cursive\">or is included through alternative m</span>eans, such as additional text hidden with the&nbsp;<code>.sr-only</code>&nbsp;class.</p>\r\n', '2020-03-10', 'Network', 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_comment` int(11) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_comment`, `id_blog`, `name`, `comment`) VALUES
(1, 22, 'cindy', 'bagus sekali'),
(15, 34, 'cdyy24', 'bagus sangat'),
(17, 33, 'cindy', 'yayaya!!!1'),
(18, 35, 'kamu', 'aku ya iya'),
(20, 22, 'cindy', 'yola');

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE `daftar` (
  `id` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `instansi` varchar(100) NOT NULL,
  `tanggal_publish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `path_gambar` varchar(150) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `portofolio`
--

CREATE TABLE `portofolio` (
  `id` int(11) NOT NULL,
  `path_gambar` varchar(150) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `text` text NOT NULL,
  `tanggal_publish` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id` int(11) NOT NULL,
  `path_gambar` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `jabatan` varchar(150) NOT NULL,
  `quote` text NOT NULL,
  `path_ig` varchar(150) NOT NULL,
  `path_fb` text NOT NULL,
  `path_twit` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_idAdmin` (`id_admin`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_blog` (`id_blog`);

--
-- Indexes for table `daftar`
--
ALTER TABLE `daftar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_idKelas` (`id_kelas`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `daftar`
--
ALTER TABLE `daftar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog`
--
ALTER TABLE `blog`
  ADD CONSTRAINT `FK_idAdmin` FOREIGN KEY (`id_admin`) REFERENCES `admin` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_blog`) REFERENCES `blog` (`id`);

--
-- Constraints for table `daftar`
--
ALTER TABLE `daftar`
  ADD CONSTRAINT `FK_idKelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
