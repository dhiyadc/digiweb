-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2020 at 04:41 PM
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
(72, 1, 'g2.png', 'gmaill', 'admin', '<p>ijwendejiw<span style=\"font-size:26px\"><span style=\"font-family:Comic Sans MS,cursive\">ncfoewfcmoewkmcfoeklcw<img alt=\"smiley\" src=\"http://localhost/digiweb/assets/js/ckeditor/plugins/smiley/images/regular_smile.png\" style=\"height:23px; width:23px\" title=\"smiley\" /><img alt=\"cheeky\" src=\"http://localhost/digiweb/assets/js/ckeditor/plugins/smiley/images/tongue_smile.png\" style=\"height:23px; width:23px\" title=\"cheeky\" /><img alt=\"cheeky\" src=\"http://localhost/digiweb/assets/js/ckeditor/plugins/smiley/images/tongue_smile.png\" style=\"height:23px; width:23px\" title=\"cheeky\" /></span></span></p>\r\n', '2020-03-13', 'Kecerdasan Buatan'),
(73, 2, 'f2.png', 'facebook', 'cindy', '<p>ojn<span style=\"color:#1abc9c\">wdcld</span>wkc<img alt=\"cheeky\" src=\"http://localhost/digiweb/assets/js/ckeditor/plugins/smiley/images/tongue_smile.png\" style=\"height:23px; width:23px\" title=\"cheeky\" /></p>\r\n', '2020-03-12', 'Network'),
(75, 1, 'g.jpg', 'cerita1', 'admin', '<p>jidincjnjcnjdcv</p>\r\n', '2020-03-13', 'Business'),
(76, 1, 'logo3.png', 'cobaaa', 'admin', '<p>onekvjkren vjern vjn erklwmfk</p>\r\n', '2020-03-13', 'Network'),
(83, 1, 'LOGO_UNIVERSITAS_SRIWIJAYA5.png', 'ojnklD', 'admin', '<p>OJNLDCPKW;C</p>\r\n', '2020-03-13', 'Desain'),
(84, 1, 'LOGO_UNIVERSITAS_SRIWIJAYA6.png', 'cobaaaaa', 'admin', '<p>jnlojcwcede</p>\r\n', '2020-03-13', 'Network'),
(86, 1, 'bubble10.jpg', 'yyyyyyyy', 'admin', '<p><span style=\"color:#e74c3c\"><u><em><strong>yyyyy<img alt=\"blush\" src=\"http://localhost/digiweb/assets/js/ckeditor/plugins/smiley/images/embarrassed_smile.png\" style=\"height:23px; width:23px\" title=\"blush\" /></strong></em></u></span></p>\r\n', '2020-03-13', 'Business'),
(87, 1, 'algoritma_bubble21.jpg', 'bubble', 'admin', '<p>ljndjWNKDJNJCFEIF<img alt=\"cool\" src=\"http://localhost/digiweb/assets/js/ckeditor/plugins/smiley/images/shades_smile.png\" style=\"height:23px; width:23px\" title=\"cool\" /></p>\r\n', '2020-03-13', 'Desain');

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
(2, 72, 'cindy', 'hihihi '),
(3, 73, 'cdyy', 'cdyy2400@gmail.com'),
(5, 72, 'kamu', 'em waw '),
(7, 86, 'cdyy', 'yey hihi');

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
  `sangat_puas` int(11) NOT NULL,
  `puas` int(11) NOT NULL,
  `cukup` int(11) NOT NULL,
  `kurang_puas` int(11) NOT NULL,
  `tidak_puas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_blog`, `sangat_puas`, `puas`, `cukup`, `kurang_puas`, `tidak_puas`) VALUES
(72, 7, 4, 4, 4, 9),
(73, 6, 3, 2, 3, 5),
(75, 3, 5, 4, 3, 0),
(76, 0, 2, 0, 1, 0),
(83, 1, 0, 0, 0, 0),
(84, 0, 0, 1, 0, 0),
(86, 0, 0, 0, 1, 0),
(87, 0, 0, 1, 0, 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
