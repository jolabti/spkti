-- phpMyAdmin SQL Dump
-- version 4.3.8deb0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 14, 2016 at 07:27 PM
-- Server version: 5.5.47-0ubuntu0.14.04.1
-- PHP Version: 5.6.19-1+deb.sury.org~trusty+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spkti`
--

-- --------------------------------------------------------

--
-- Table structure for table `addressbook`
--

CREATE TABLE IF NOT EXISTS `addressbook` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addressbook`
--

INSERT INTO `addressbook` (`id`, `firstname`, `lastname`, `phone`, `email`) VALUES
(26, 'sdfsdf', 'rttytyjt', '34535', 'aijjs@gmail.com'),
(27, 'dsijfhsdifhsiu', 'ktohkoghkogh', '23424234', 'asd@gmail.com'),
(28, 'asdad', 'gftgdg', '234324', 'wewe@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `Bobot_Kriteria`
--

CREATE TABLE IF NOT EXISTS `Bobot_Kriteria` (
  `id_bobot_kriteria` varchar(3) NOT NULL,
  `nama_kriteria` varchar(30) NOT NULL,
  `bobot` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Bobot_Kriteria`
--

INSERT INTO `Bobot_Kriteria` (`id_bobot_kriteria`, `nama_kriteria`, `bobot`) VALUES
('C1', 'teori', 15),
('C2', 'praktek', 30),
('C3', 'wawancara', 20),
('C4', 'presentasi', 35);

-- --------------------------------------------------------

--
-- Table structure for table `Kriteria_Praktek`
--

CREATE TABLE IF NOT EXISTS `Kriteria_Praktek` (
  `id_kriteria_praktek` int(2) NOT NULL,
  `batas_atas` int(11) NOT NULL,
  `batas_bawah` int(11) NOT NULL,
  `bobot` decimal(5,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Kriteria_Presentasi`
--

CREATE TABLE IF NOT EXISTS `Kriteria_Presentasi` (
  `id_kriteria_presentasi` int(2) NOT NULL,
  `batas_atas` int(11) NOT NULL,
  `batas_bawah` int(11) NOT NULL,
  `bobot` decimal(5,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Kriteria_Presentasi`
--

INSERT INTO `Kriteria_Presentasi` (`id_kriteria_presentasi`, `batas_atas`, `batas_bawah`, `bobot`) VALUES
(1, 0, 25, 0.25),
(2, 26, 50, 0.50),
(3, 51, 70, 0.75),
(4, 71, 100, 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `Kriteria_Wawancara`
--

CREATE TABLE IF NOT EXISTS `Kriteria_Wawancara` (
  `id_kriteria_wawancara` int(2) NOT NULL,
  `batas_atas` int(11) NOT NULL,
  `batas_bawah` int(11) NOT NULL,
  `bobot` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Kriteria_Wawancara`
--

INSERT INTO `Kriteria_Wawancara` (`id_kriteria_wawancara`, `batas_atas`, `batas_bawah`, `bobot`) VALUES
(1, 0, 25, 0.25),
(2, 26, 50, 0.50),
(3, 51, 70, 0.75),
(4, 71, 100, 1.00);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian`
--

CREATE TABLE IF NOT EXISTS `penilaian` (
  `npm` varchar(8) NOT NULL,
  `nama_calas` varchar(50) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `nilai_teori` int(3) NOT NULL,
  `nilai_praktek` int(3) NOT NULL,
  `nilai_wawancara` int(3) NOT NULL,
  `nilai_presentasi` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian`
--

INSERT INTO `penilaian` (`npm`, `nama_calas`, `kelas`, `nilai_teori`, `nilai_praktek`, `nilai_wawancara`, `nilai_presentasi`) VALUES
('12938271', 'a', '4IA06', 50, 56, 11, 34),
('12938272', 'dfs', '4IA07', 70, 57, 12, 35),
('12938273', 'dsf', '4IA08', 56, 58, 13, 36),
('12938274', 'zzxsvbki', '4IA09', 90, 90, 90, 90),
('12938275', 'dfs', '4IA10', 25, 60, 15, 89),
('12938276', 'dg', '4IA11', 26, 78, 16, 39),
('12938277', 'dfgd', '4IA12', 27, 78, 17, 40),
('12938278', 'gd', '4IA13', 28, 87, 18, 41),
('12938279', 'gd', '4IA14', 29, 78, 19, 42),
('12938280', 'fg', '4IA15', 30, 6, 76, 43),
('12938281', 'dg', '4IA16', 31, 76, 21, 44),
('12938282', 'dg', '4IA17', 32, 23, 22, 45),
('12938283', 'gd', '4IA18', 33, 88, 23, 46),
('12938284', 'gdfg', '4IA19', 34, 69, 100, 47);

-- --------------------------------------------------------

--
-- Table structure for table `Teori`
--

CREATE TABLE IF NOT EXISTS `Teori` (
  `id_kriteria_teori` int(2) NOT NULL,
  `batas_atas` int(11) NOT NULL,
  `batas_bawah` int(11) NOT NULL,
  `bobot` double(5,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Teori`
--

INSERT INTO `Teori` (`id_kriteria_teori`, `batas_atas`, `batas_bawah`, `bobot`) VALUES
(1, 0, 0, 0.25),
(2, 0, 0, 0.50),
(3, 0, 0, 0.75),
(4, 0, 0, 1.00);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addressbook`
--
ALTER TABLE `addressbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Bobot_Kriteria`
--
ALTER TABLE `Bobot_Kriteria`
  ADD PRIMARY KEY (`id_bobot_kriteria`);

--
-- Indexes for table `Kriteria_Praktek`
--
ALTER TABLE `Kriteria_Praktek`
  ADD PRIMARY KEY (`id_kriteria_praktek`);

--
-- Indexes for table `Kriteria_Presentasi`
--
ALTER TABLE `Kriteria_Presentasi`
  ADD PRIMARY KEY (`id_kriteria_presentasi`);

--
-- Indexes for table `Kriteria_Wawancara`
--
ALTER TABLE `Kriteria_Wawancara`
  ADD PRIMARY KEY (`id_kriteria_wawancara`);

--
-- Indexes for table `penilaian`
--
ALTER TABLE `penilaian`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `Teori`
--
ALTER TABLE `Teori`
  ADD PRIMARY KEY (`id_kriteria_teori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addressbook`
--
ALTER TABLE `addressbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `Kriteria_Praktek`
--
ALTER TABLE `Kriteria_Praktek`
  MODIFY `id_kriteria_praktek` int(2) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Kriteria_Presentasi`
--
ALTER TABLE `Kriteria_Presentasi`
  MODIFY `id_kriteria_presentasi` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `Teori`
--
ALTER TABLE `Teori`
  MODIFY `id_kriteria_teori` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
