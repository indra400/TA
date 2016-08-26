-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 26, 2016 at 10:12 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `skripsi_indra`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_id_buah`
--

CREATE TABLE IF NOT EXISTS `t_id_buah` (
  `id_buah` int(3) NOT NULL,
  `nama_buah` varchar(20) NOT NULL,
  `satuan` varchar(4) NOT NULL,
  PRIMARY KEY (`id_buah`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_id_buah`
--

INSERT INTO `t_id_buah` (`id_buah`, `nama_buah`, `satuan`) VALUES
(2, 'apel bekasi', 'dus'),
(1, 'Jeruk brebes', 'dus');

-- --------------------------------------------------------

--
-- Table structure for table `t_id_jabatan`
--

CREATE TABLE IF NOT EXISTS `t_id_jabatan` (
  `id_jabatan` int(3) NOT NULL,
  `nama_jabatan` varchar(15) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_id_jabatan`
--

INSERT INTO `t_id_jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'administrator');

-- --------------------------------------------------------

--
-- Table structure for table `t_perusahaan`
--

CREATE TABLE IF NOT EXISTS `t_perusahaan` (
  `id_perusahaan` int(2) NOT NULL,
  `nama_perusahaan` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `direktur` varchar(10) NOT NULL,
  `id_pegawai` int(5) NOT NULL,
  `logo` varchar(11) NOT NULL,
  PRIMARY KEY (`id_perusahaan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_perusahaan`
--

INSERT INTO `t_perusahaan` (`id_perusahaan`, `nama_perusahaan`, `alamat`, `direktur`, `id_pegawai`, `logo`) VALUES
(1, 'ANEKA BUAH CEMERLANG', 'Jl. Gamping Sleman', 'Sauqi', 1, 'abc.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_stok_gudang`
--

CREATE TABLE IF NOT EXISTS `t_stok_gudang` (
  `id_stok_gudang` int(5) NOT NULL,
  `id_buah` int(3) NOT NULL,
  `id_transaksi_suplier` int(5) NOT NULL,
  `harga_satuan` int(10) NOT NULL,
  PRIMARY KEY (`id_stok_gudang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_stok_gudang`
--


-- --------------------------------------------------------

--
-- Table structure for table `t_stok_pasar`
--

CREATE TABLE IF NOT EXISTS `t_stok_pasar` (
  `id_stok_pasar` int(5) NOT NULL,
  `id_stok_gudang` int(5) NOT NULL,
  `id_buah` int(3) NOT NULL,
  `harga_satuan` int(10) NOT NULL,
  PRIMARY KEY (`id_stok_pasar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_stok_pasar`
--


-- --------------------------------------------------------

--
-- Table structure for table `t_transaksi_gudang`
--

CREATE TABLE IF NOT EXISTS `t_transaksi_gudang` (
  `id_transaksi_gudang` int(5) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi_gudang` date NOT NULL,
  `wkt_transaksi_gudang` time NOT NULL,
  `id_buah` int(3) NOT NULL,
  `quantity` int(3) NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `id_pegawai` int(5) NOT NULL,
  `total_harga` int(10) NOT NULL,
  PRIMARY KEY (`id_transaksi_gudang`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `t_transaksi_gudang`
--


-- --------------------------------------------------------

--
-- Table structure for table `t_transaksi_pasar`
--

CREATE TABLE IF NOT EXISTS `t_transaksi_pasar` (
  `id_transaksi_pasar` int(5) NOT NULL AUTO_INCREMENT,
  `tgl_transaksi_pasar` date NOT NULL,
  `wkt_transaksi_pasar` time NOT NULL,
  `id_buah` int(3) NOT NULL,
  `quantity` int(3) NOT NULL,
  `id_pelanggan` int(5) NOT NULL,
  `id_pegawai` int(5) NOT NULL,
  `total_harga` int(10) NOT NULL,
  PRIMARY KEY (`id_transaksi_pasar`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `t_transaksi_pasar`
--


-- --------------------------------------------------------

--
-- Table structure for table `t_transaksi_suplier`
--

CREATE TABLE IF NOT EXISTS `t_transaksi_suplier` (
  `id_transaksi_suplier` int(5) NOT NULL AUTO_INCREMENT,
  `id_suplier` int(5) NOT NULL,
  `tgl_masuk_suplier` date NOT NULL,
  `wkt_masuk_suplier` time NOT NULL,
  `id_buah` int(3) NOT NULL,
  `quantity` int(4) NOT NULL,
  `harga_buah` int(10) NOT NULL,
  `kadaluarsa` int(4) NOT NULL,
  PRIMARY KEY (`id_transaksi_suplier`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `t_transaksi_suplier`
--


-- --------------------------------------------------------

--
-- Table structure for table `t_user_pegawai`
--

CREATE TABLE IF NOT EXISTS `t_user_pegawai` (
  `id_pegawai` int(5) NOT NULL,
  `nama_pegawai` varchar(20) NOT NULL,
  `alamat_pegawai` varchar(50) NOT NULL,
  `jenis_kelamin` enum('0','1') NOT NULL,
  `id_jabatan` int(2) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user_pegawai`
--

INSERT INTO `t_user_pegawai` (`id_pegawai`, `nama_pegawai`, `alamat_pegawai`, `jenis_kelamin`, `id_jabatan`) VALUES
(10001, 'admin', 'Gamping Sleman', '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `t_user_pelanggan`
--

CREATE TABLE IF NOT EXISTS `t_user_pelanggan` (
  `id_pelanggan` int(5) NOT NULL,
  `nama_pelanggan` varchar(15) NOT NULL,
  `alamat_pelanggan` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user_pelanggan`
--

INSERT INTO `t_user_pelanggan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `no_telp`) VALUES
(20001, 'budi waseso', 'mlati sleman', '09574352413');

-- --------------------------------------------------------

--
-- Table structure for table `t_user_suplier`
--

CREATE TABLE IF NOT EXISTS `t_user_suplier` (
  `id_suplier` int(5) NOT NULL,
  `nama_suplier` varchar(20) NOT NULL,
  `alamat_suplier` varchar(50) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  PRIMARY KEY (`id_suplier`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_user_suplier`
--

INSERT INTO `t_user_suplier` (`id_suplier`, `nama_suplier`, `alamat_suplier`, `no_telp`) VALUES
(30001, 'ahok sutopo', 'kudus jawa tengah', '0817263827');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
