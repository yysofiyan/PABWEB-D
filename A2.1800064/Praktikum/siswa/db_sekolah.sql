-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Apr 2020 pada 13.21
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sekolah`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `nis` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nomor Induk Siswa',
  `nama` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Nama Siswa',
  `tempat_lahir` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Tempat Lahir Siswa',
  `tanggal_lahir` date NOT NULL COMMENT 'Tanggal Lahir Siswa',
  `jenis_kelamin` enum('Laki-laki','Perempuan') COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Jenis Kelamin Siswa',
  `agama` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Agama Siswa',
  `alamat` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Alamat Siswa',
  `no_hp` varchar(13) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'No. Handphone Siswa',
  `foto` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'Foto Siswa'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
