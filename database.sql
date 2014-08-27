-- phpMyAdmin SQL Dump
-- version 2.11.9.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 11. Desember 2013 jam 08:32
-- Versi Server: 5.0.67
-- Versi PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesawat`
--

CREATE TABLE IF NOT EXISTS `pesawat` (
  `no_reservasi` varchar(10) NOT NULL,
  `nama_pemesan` varchar(35) NOT NULL,
  `tujuan` varchar(15) NOT NULL,
  `biaya_tujuan` int(11) NOT NULL,
  `biaya_pokok` int(11) NOT NULL,
  `potongan` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `jenis_tiket` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesawat`
--

INSERT INTO `pesawat` (`no_reservasi`, `nama_pemesan`, `tujuan`, `biaya_tujuan`, `biaya_pokok`, `potongan`, `total`, `jenis_tiket`) VALUES
('12345', 'SunDi3yansyah', 'Yogyakarta', 350000, 100000, 262500, 187500, 'Promosi');