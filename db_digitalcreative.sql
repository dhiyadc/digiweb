-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2020 at 11:19 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
  `rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `id_admin`, `path_gambar`, `judul`, `author`, `text`, `tanggal_publish`, `rate`) VALUES
(90, 1, 'bubble12.jpg', 'cobaygdebkjb', 'admin', '<p>jeknfck</p>\r\n', '2020-03-14', 0),
(91, 2, 'algoritma_bubble22.jpg', 'bubble', 'cindy', '<p>jkdnlowejwdn<img alt=\"blush\" src=\"http://localhost/digiweb/assets/js/ckeditor/plugins/smiley/images/embarrassed_smile.png\" style=\"height:23px; width:23px\" title=\"blush\" /></p>\r\n', '2020-03-14', 0),
(92, 2, 'bubble13.jpg', 'ofmvokr', 'cindy', '<p>oejlfclrmkrm4v</p>\r\n', '2020-03-14', 0),
(93, 2, 'bubble14.jpg', 'okmk', 'cindy', '<p>ljnljk</p>\r\n', '2020-03-14', 0),
(94, 2, 'LOGO_UNIVERSITAS_SRIWIJAYA8.png', 'jALODWIE', 'cindy', '<p>LKEWDNKLFEW</p>\r\n', '2020-03-14', 0),
(95, 2, 'bubble15.jpg', 'S', 'cindy', '<p>S</p>\r\n', '2020-03-14', 0);

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

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`id`, `id_kelas`, `nama`, `no_hp`, `email`, `instansi`, `tanggal_publish`) VALUES
(2, 3, 'achmad', '172389', 'isan@gmail.com', 'unsray corona ', '2020-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(2) NOT NULL,
  `kategori` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_blog`
--

CREATE TABLE `kategori_blog` (
  `id` int(10) NOT NULL,
  `id_blog` int(11) NOT NULL,
  `id_kategori` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_kelas`
--

CREATE TABLE `kategori_kelas` (
  `kategori` varchar(64) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_kelas`
--

INSERT INTO `kategori_kelas` (`kategori`) VALUES
('Aplikasi Mobile'),
('Konsultasi IT'),
('Kursus Pemrograman'),
('Website');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_portofolio`
--

CREATE TABLE `kategori_portofolio` (
  `kategori` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori_portofolio`
--

INSERT INTO `kategori_portofolio` (`kategori`) VALUES
('Mobile'),
('Multimedia'),
('Website');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `path_gambar` varchar(150) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `harga` varchar(64) NOT NULL,
  `kategori` varchar(64) NOT NULL,
  `deskripsi_1` text NOT NULL,
  `deskripsi_2` text NOT NULL,
  `deskripsi_3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id`, `path_gambar`, `judul`, `harga`, `kategori`, `deskripsi_1`, `deskripsi_2`, `deskripsi_3`) VALUES
(1, '109316.jpg', 'kelas 1', 'Rp.150.000,00', 'Aplikasi Mobile', 'ini adalah kelas satu', 'iya kelas 1', 'betul kelas 1 ini'),
(2, '109317.jpg', 'kelas 2', 'Rp.200.000,00', 'Kursus Pemrograman', 'ini adalah kelas dua', 'kelas 2 kok bener', 'ga percayaan amat sih ini kelas 2'),
(3, '109336.jpg', 'kelas 3', 'Rp.250.000,00', 'Website', 'ini adalah kelas tiga', 'tapi boong', 'tapi boong lg, ini kelas 3'),
(4, 'login_adm1.jpeg', 'kelas 4', 'Rp.400.000,00', 'Konsultasi IT', 'kelas 4', 'iya kelas 4', 'ini kelas 4');

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
  `kategori` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portofolio`
--

INSERT INTO `portofolio` (`id`, `path_gambar`, `judul`, `text`, `tanggal_publish`, `link`, `kategori`) VALUES
(1, '1093363.jpg', 'Ini judul', 'ini teks\"\"\"', '2020-03-19', 'https://www.facebook.com/', 'Mobile'),
(2, '1093174.jpg', 'judul 2', 'teks 2', '2020-03-19', 'https://www.facebook.com/', 'Multimedia'),
(3, '10937411.jpg', 'judul 3', 'deskripsi', '2020-03-19', 'https://www.facebook.com/', 'Website'),
(4, '10931731.jpg', 'asdf', 'av', '2020-03-19', 'https://www.facebook.com/', 'Mobile');

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
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id`, `path_gambar`, `nama`, `jabatan`, `quote`, `path_ig`, `path_fb`, `path_twit`, `prioritas`) VALUES
(1, '71779706_448094602754019_6167635517203967163_n.jpg', 'Achmad Ichsan', 'Leader', 'dih gitu', 'isan_on', 'isan', 'isan_on', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tentang_deskripsi`
--

CREATE TABLE `tentang_deskripsi` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tentang_faq`
--

CREATE TABLE `tentang_faq` (
  `id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_blog`
--
ALTER TABLE `kategori_blog`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_blog` (`id_blog`,`id_kategori`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori_kelas`
--
ALTER TABLE `kategori_kelas`
  ADD PRIMARY KEY (`kategori`);

--
-- Indexes for table `kategori_portofolio`
--
ALTER TABLE `kategori_portofolio`
  ADD PRIMARY KEY (`kategori`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori` (`kategori`);

--
-- Indexes for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_kategori` (`kategori`);

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
-- Indexes for table `tentang_faq`
--
ALTER TABLE `tentang_faq`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_blog`
--
ALTER TABLE `kategori_blog`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `portofolio`
--
ALTER TABLE `portofolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tentang_faq`
--
ALTER TABLE `tentang_faq`
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
-- Constraints for table `kategori_blog`
--
ALTER TABLE `kategori_blog`
  ADD CONSTRAINT `kategori_blog_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kategori_blog_ibfk_2` FOREIGN KEY (`id_blog`) REFERENCES `blog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori_kelas` (`kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `portofolio`
--
ALTER TABLE `portofolio`
  ADD CONSTRAINT `portofolio_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori_portofolio` (`kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`id_blog`) REFERENCES `blog` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
