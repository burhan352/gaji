-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 09. Desember 2021 jam 09:11
-- Versi Server: 5.1.37
-- Versi PHP: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pns`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE IF NOT EXISTS `gaji` (
  `no` int(100) NOT NULL AUTO_INCREMENT,
  `a` int(12) NOT NULL,
  `b` int(10) NOT NULL,
  `c` int(10) NOT NULL,
  `d` int(10) NOT NULL,
  `e` int(2) NOT NULL,
  `f` text COLLATE latin1_general_ci NOT NULL,
  `g` text COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`no`, `a`, `b`, `c`, `d`, `e`, `f`, `g`) VALUES
(1, 123454, 10000000, 3000000, 2000000, 1, 'Februari', '2007'),
(2, 2021060, 10000000, 3000000, 2000000, 1, 'April', '2007');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `no` int(100) NOT NULL AUTO_INCREMENT,
  `a` int(12) NOT NULL,
  `b` text COLLATE latin1_general_ci NOT NULL,
  `c` text COLLATE latin1_general_ci NOT NULL,
  `d` int(12) NOT NULL,
  `e` text COLLATE latin1_general_ci NOT NULL,
  `f` int(4) NOT NULL,
  `g` text COLLATE latin1_general_ci NOT NULL,
  `h` text COLLATE latin1_general_ci NOT NULL,
  `i` text COLLATE latin1_general_ci NOT NULL,
  `j` varchar(8) COLLATE latin1_general_ci NOT NULL,
  `k` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `l` varchar(3) COLLATE latin1_general_ci NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`no`, `a`, `b`, `c`, `d`, `e`, `f`, `g`, `h`, `i`, `j`, `k`, `l`) VALUES
(1, 2021060, 'udin', 'kubu raya', 3, 'Februari', 2002, 'Pria', 'Menikah', 'Islam', '19 tahun', 'jl panglima aim', 'S1'),
(2, 2021061, 'japar', 'sanggau', 3, 'Februari', 2001, 'Pria', 'Menikah', 'Khatolik', '20 tahun', 'jl gajah mada', 'SMA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
