-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2017 at 09:34 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `silapar2`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `usernameadmin` varchar(40) NOT NULL,
  `passwordadmin` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`usernameadmin`, `passwordadmin`) VALUES
('kesehatan', 'kesehatan');

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `kode_jawaban` int(11) NOT NULL,
  `kode_laporan` varchar(11) NOT NULL,
  `jawaban` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `divisi`
--

INSERT INTO `divisi` (`kode_jawaban`, `kode_laporan`, `jawaban`) VALUES
(5, '123', 'ASFAFASFAS'),
(6, '321', 'asdasdasfsa');

-- --------------------------------------------------------

--
-- Table structure for table `pengaduan`
--

CREATE TABLE `pengaduan` (
  `kode_laporan` varchar(11) NOT NULL,
  `tgl_melapor` date NOT NULL,
  `divisi` varchar(30) NOT NULL,
  `judul_laporan` varchar(100) NOT NULL,
  `laporan` text NOT NULL,
  `username` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengaduan`
--

INSERT INTO `pengaduan` (`kode_laporan`, `tgl_melapor`, `divisi`, `judul_laporan`, `laporan`, `username`) VALUES
('', '2017-05-04', 'Kesehatan', 'tfyguij', 'ffm', 'deri'),
('111', '2017-05-10', 'Sosial dan Tenaga Kerja', 'twk dimana?', 'wkkwkw,', 'ageng99'),
('123', '2017-05-04', 'Kesehatan', 'ASDAWDAWDW', '12QDWDWADAWDWADAWDAWDAWDAWDAWDA ADAWDAWDAWD AWDAWDAWDAWDAWDAAWDAWDA AWDAWDAWDAWD ADWDAWDAWDAWDAWA AWDAWDAWDAWDAWDAWDAWDAW', 'deri'),
('321', '2017-05-04', 'Pertamanan', 'BANJIR', 'asdasdasdasdasdasdas', 'deri');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(40) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('ageng99', 'b59c67bf196a4758191e42f76670ceba'),
('asep', 'caf1a3dfb505ffed0d024130f58c5cfa'),
('deri', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`usernameadmin`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`kode_jawaban`),
  ADD KEY `kode_laporan` (`kode_laporan`);

--
-- Indexes for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD PRIMARY KEY (`kode_laporan`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `divisi`
--
ALTER TABLE `divisi`
  MODIFY `kode_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `divisi`
--
ALTER TABLE `divisi`
  ADD CONSTRAINT `divisi_ibfk_1` FOREIGN KEY (`kode_laporan`) REFERENCES `pengaduan` (`kode_laporan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengaduan`
--
ALTER TABLE `pengaduan`
  ADD CONSTRAINT `pengaduan_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
