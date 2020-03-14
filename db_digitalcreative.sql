-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2020 at 06:03 AM
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
  `kategori` enum('Kecerdasan Buatan','Desain','Network','Business') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `id_admin`, `path_gambar`, `judul`, `author`, `text`, `tanggal_publish`, `kategori`) VALUES
(90, 1, 'bubble12.jpg', 'cobaygdebkjb', 'admin', '<p>jeknfck</p>\r\n', '2020-03-14', 'Desain'),
(91, 2, 'algoritma_bubble22.jpg', 'bubble', 'cindy', '<p>jkdnlowejwdn<img alt=\"blush\" src=\"http://localhost/digiweb/assets/js/ckeditor/plugins/smiley/images/embarrassed_smile.png\" style=\"height:23px; width:23px\" title=\"blush\" /></p>\r\n', '2020-03-14', 'Business'),
(92, 2, 'bubble13.jpg', 'ofmvokr', 'cindy', '<p>oejlfclrmkrm4v</p>\r\n', '2020-03-14', 'Desain'),
(93, 2, 'bubble14.jpg', 'okmk', 'cindy', '<p>ljnljk</p>\r\n', '2020-03-14', 'Network'),
(94, 2, 'LOGO_UNIVERSITAS_SRIWIJAYA8.png', 'jALODWIE', 'cindy', '<p>LKEWDNKLFEW</p>\r\n', '2020-03-14', 'Business'),
(95, 2, 'bubble15.jpg', 'S', 'cindy', '<p>S</p>\r\n', '2020-03-14', 'Network');

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
(10, 90, 'cdyy', 'ya'),
(11, 95, 'Anonim', 'jnkk'),
(12, 95, 'cindy', 'jfert'),
(13, 90, 'Anonim', 'kjnk');

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
  `tanggal_publish` date NOT NULL,
  `link` text NOT NULL,
  `kategori` enum('Website','Multimedia','Mobile') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_blog` int(11) NOT NULL,
  `like` int(11) NOT NULL,
  `love` int(11) NOT NULL,
  `haha` int(11) NOT NULL,
  `wow` int(11) NOT NULL,
  `sad` int(11) NOT NULL,
  `angry` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_blog`, `like`, `love`, `haha`, `wow`, `sad`, `angry`) VALUES
(90, 0, 0, 0, 0, 0, 0),
(91, 0, 1, 0, 0, 0, 0),
(92, 0, 0, 0, 0, 1, 0),
(93, 0, 0, 0, 0, 0, 1),
(94, 0, 0, 0, 0, 1, 0),
(95, 0, 2, 0, 0, 0, 0);

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
  `path_twit` varchar(150) NOT NULL,
  `prioritas` enum('0','1') NOT NULL
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
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD KEY `id_blog` (`id_blog`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_blog`) REFERENCES `blog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `daftar`
--
ALTER TABLE `daftar`
  ADD CONSTRAINT `FK_idKelas` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_blog`) REFERENCES `blog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
