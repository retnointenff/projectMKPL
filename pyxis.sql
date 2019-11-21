-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28 Agu 2019 pada 08.33
-- Versi Server: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pyxis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `absensi`
--

CREATE TABLE `absensi` (
  `pin` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `nama` varchar(33) NOT NULL,
  `tgl` date NOT NULL,
  `jam` varchar(11) NOT NULL,
  `sn_mesin` int(22) NOT NULL,
  `nm_mesin` varchar(22) NOT NULL,
  `verivikasi` varchar(50) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `mode_up` varchar(50) NOT NULL,
  `cabang` varchar(50) NOT NULL,
  `departemen` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `telat` int(22) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `absensi`
--

INSERT INTO `absensi` (`pin`, `nik`, `nama`, `tgl`, `jam`, `sn_mesin`, `nm_mesin`, `verivikasi`, `mode`, `mode_up`, `cabang`, `departemen`, `jabatan`, `telat`) VALUES
(111, 111, 'Achmat Yudianto', '2018-10-02', '08:13', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-02', '17:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-03', '08:13', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-03', '17:08', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-04', '08:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-04', '17:08', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-05', '08:11', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-05', '11:20', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-05', '12:19', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-05', '17:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-08', '08:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-08', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-09', '08:09', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-09', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-10', '08:00', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-10', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-11', '08:05', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-11', '17:04', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-12', '08:13', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-12', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-14', '08:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-14', '17:04', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-15', '08:11', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-15', '17:04', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-16', '08:09', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-16', '17:05', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-17', '08:1\\5', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-17', '17:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-18', '08:00', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-18', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-19', '08:17', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-19', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-22', '08:11', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-22', '17:10', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-23', '08:09', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-23', '12:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 111, 'Achmat Yudianto', '2018-10-23', '12:32', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 134),
(111, 112, 'Ilham Mahendra', '2018-10-02', '08:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-02', '17:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-03', '08:13', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-03', '17:08', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-04', '08:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-04', '17:08', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-05', '08:11', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-05', '11:20', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-05', '12:19', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-05', '17:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-08', '08:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-08', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-09', '08:09', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-09', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-10', '08:00', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-10', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-11', '07:55', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-11', '17:04', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-12', '07:53', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-12', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-15', '07:51', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-15', '17:04', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-16', '08:09', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-16', '17:05', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-17', '08:15', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-17', '17:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-18', '08:09', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-18', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-19', '08:17', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-19', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-22', '08:11', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-22', '17:10', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-23', '08:20', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-23', '12:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 112, 'Ilham Mahendra', '2018-10-23', '12:32', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-02', '07:54', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-02', '17:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-03', '07:59', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-03', '17:08', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-04', '08:13', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-04', '17:08', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-05', '08:01', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-05', '11:20', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-05', '12:19', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-05', '17:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-08', '08:18', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-08', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-09', '08:09', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-09', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-10', '08:00', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-10', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-11', '08:05', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-11', '17:04', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-12', '08:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-12', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-15', '08:11', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-15', '17:04', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-16', '08:19', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-16', '17:05', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-17', '08:15', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-17', '17:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-18', '08:00', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-18', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-19', '08:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-19', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-22', '08:11', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-22', '17:10', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-23', '08:30', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-23', '12:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 113, 'Miftahul Munir', '2018-10-23', '12:32', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-02', '08:13', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-02', '17:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-03', '08:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-03', '17:08', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-04', '08:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-04', '17:08', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-05', '08:01', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-05', '11:20', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-05', '12:19', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-05', '17:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-08', '08:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-08', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-09', '08:09', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-09', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-10', '08:00', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-10', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-11', '08:05', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-11', '17:04', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-12', '08:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-12', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-15', '08:11', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-15', '17:04', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-16', '08:09', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-16', '17:05', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-17', '08:15', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-17', '17:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-18', '08:40', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-18', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-19', '08:17', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-19', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-22', '08:11', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-22', '17:10', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-23', '08:20', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-23', '12:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-23', '12:32', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 114, 'Pak Ndul', '2018-10-23', '17:05', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 0),
(111, 115, 'Ahmad Rizal', '2018-10-02', '08:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-02', '17:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-03', '08:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-03', '17:08', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-04', '08:13', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-04', '17:08', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-05', '08:01', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-05', '11:20', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-05', '12:19', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-05', '17:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-08', '08:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-08', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-09', '08:09', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-09', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-10', '08:00', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-10', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-11', '08:15', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-11', '17:04', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-12', '08:33', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-12', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-14', '08:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-14', '17:04', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-15', '08:07', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-15', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-16', '08:09', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-16', '17:06', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-17', '08:00', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-17', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-18', '08:15', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-18', '17:04', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-19', '08:33', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-19', '17:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-20', '08:03', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154),
(111, 115, 'Ahmad Rizal', '2018-10-20', '17:04', 2147483647, 'pintu utama', 'FP', 'Scan Masuk', 'Scan Masuk', 'Kantor Pusat', 'PT.PYXIS ULTIMATE SOLUTION', 'Karyawan', 154);

-- --------------------------------------------------------

--
-- Struktur dari tabel `cuti`
--

CREATE TABLE `cuti` (
  `kd_cuti` int(5) NOT NULL,
  `nik` int(22) NOT NULL,
  `jenis` varchar(40) NOT NULL,
  `total` int(5) NOT NULL,
  `ambil` int(20) NOT NULL,
  `sisa` int(20) NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL,
  `masuk` date NOT NULL,
  `status` int(10) NOT NULL,
  `ket` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `cuti`
--

INSERT INTO `cuti` (`kd_cuti`, `nik`, `jenis`, `total`, `ambil`, `sisa`, `dari`, `sampai`, `masuk`, `status`, `ket`) VALUES
(3, 111, 'tahunan', 8, 1, 7, '2019-07-11', '2019-07-12', '2019-07-15', 1, ''),
(4, 112, 'tahunan', 10, 5, 0, '0000-00-00', '0000-00-00', '0000-00-00', 1, ''),
(8, 112, 'tahunan', 8, 1, 7, '2019-08-07', '2019-08-08', '2019-08-09', 1, ''),
(9, 111, 'tahunan', 7, 2, 5, '2019-08-09', '2019-08-13', '2019-08-15', 1, ''),
(10, 112, 'tahunan', 7, 1, 6, '2019-08-09', '2019-08-09', '2019-08-12', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `gaji`
--

CREATE TABLE `gaji` (
  `nik` varchar(5) NOT NULL,
  `gaji` int(11) NOT NULL,
  `medical` int(11) NOT NULL,
  `overtime` int(11) NOT NULL,
  `jabatan` int(11) NOT NULL,
  `perumahan` int(11) NOT NULL,
  `transport` int(11) NOT NULL,
  `istri` int(11) NOT NULL,
  `anak` int(11) NOT NULL,
  `kebijakan` int(11) NOT NULL,
  `penyesuaian` int(11) NOT NULL,
  `thr` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `jamsostek` int(11) NOT NULL,
  `bpjs` int(11) NOT NULL,
  `koperasi` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `cuti` int(11) NOT NULL,
  `take` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `gaji`
--

INSERT INTO `gaji` (`nik`, `gaji`, `medical`, `overtime`, `jabatan`, `perumahan`, `transport`, `istri`, `anak`, `kebijakan`, `penyesuaian`, `thr`, `total`, `jamsostek`, `bpjs`, `koperasi`, `denda`, `cuti`, `take`) VALUES
('111', 5000000, 0, 0, 1000000, 750000, 500000, 750000, 500000, 0, 0, 0, 8500000, 0, 0, 48700, 134000, 0, 8317300),
('112', 5000000, 0, 0, 1000000, 750000, 500000, 750000, 500000, 0, 0, 0, 8500000, 0, 0, 20000, 0, 0, 8480000),
('113', 3500000, 0, 0, 1000000, 525000, 350000, 525000, 350000, 0, 0, 0, 6250000, 0, 0, 527500, 0, 0, 5722500),
('114', 2000000, 0, 0, 1000000, 300000, 200000, 300000, 200000, 0, 0, 0, 4000000, 0, 0, 122000, 0, 0, 3980000),
('115', 2000000, 0, 0, 1000000, 300000, 200000, 300000, 200000, 0, 0, 0, 4000000, 0, 0, 20000, 154000, 0, 3980000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `nik` varchar(22) NOT NULL,
  `pin` varchar(40) NOT NULL,
  `nama` varchar(33) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tempat` varchar(22) NOT NULL,
  `tgl_lahir` varchar(22) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `cuti` int(22) NOT NULL,
  `email` varchar(33) NOT NULL,
  `phone` varchar(22) NOT NULL,
  `kontrak` varchar(11) NOT NULL,
  `cabang` varchar(22) NOT NULL,
  `departemen` varchar(22) NOT NULL,
  `jabatan` varchar(22) NOT NULL,
  `koperasi` varchar(10) NOT NULL,
  `grade` char(2) NOT NULL,
  `foto` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`nik`, `pin`, `nama`, `alamat`, `tempat`, `tgl_lahir`, `tgl_masuk`, `tgl_keluar`, `cuti`, `email`, `phone`, `kontrak`, `cabang`, `departemen`, `jabatan`, `koperasi`, `grade`, `foto`) VALUES
('111', 'e10adc3949ba59abbe56e057f20f883e', 'Achmat Yudianto', 'Jalan Bunga ', 'Malang', '1999-05-24', '2019-05-17', '2019-05-10', 5, 'ilham@gmalil.com', '089856564656', 'Ya', 'Malang', 'Keuangan', 'Karyawan', 'Anggota', 'A', '24052019112157gaya-rambut-pria-2017-e1510734212526.jpg'),
('112', 'e10adc3949ba59abbe56e057f20f883e', 'Ilham Mahendra', 'Jl.Mayjen no.21', 'Malang', '1998-02-10', '2018-09-09', '2019-08-08', 6, 'alan@gmail.com', '08967989898', 'Ya', 'Malang', 'Keuangan', 'HRD', 'Anggota', 'A', 'foto.jpg'),
('113', 'e10adc3949ba59abbe56e057f20f883e', 'Miftahul Munir', 'Jl.Mayjen no.23', 'Malang', '1990-03-03', '2019-05-24', '2019-05-31', 10, 'cinta@gmail.com', '08567989898', 'Tidak', 'Malang', 'Keuangan', 'Karyawan', 'Sekretaris', 'B', 'foto.jpg'),
('114', 'e10adc3949ba59abbe56e057f20f883e', 'Pak Ndul', 'Jl.Sudimoro gg.5', 'Surabaya', '1996-09-09', '2018-09-09', '2019-02-02', 10, 'm@gmai.com', '0987', 'Tidak', 'Malang', 'Administrasi', 'Karyawan', 'Bendahara', 'C', 'foto.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keluar`
--

CREATE TABLE `keluar` (
  `kd_keluar` int(11) NOT NULL,
  `nik` varchar(11) NOT NULL,
  `tgl` varchar(100) NOT NULL,
  `keluar` time NOT NULL,
  `kembali` time NOT NULL,
  `jenis` varchar(22) NOT NULL,
  `status` int(5) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keluar`
--

INSERT INTO `keluar` (`kd_keluar`, `nik`, `tgl`, `keluar`, `kembali`, `jenis`, `status`, `ket`) VALUES
(1, '111', '2019-07-10 10:23:22', '13:00:00', '15:00:00', 'pribadi', 1, 'Halan-halan'),
(2, '112', '', '22:00:00', '12:00:00', 'pribadi', 0, 'makan'),
(3, '112', '', '12:00:00', '13:59:00', 'pribadi', 0, '123'),
(4, '112', '2019-08-09 08:50:53 am', '12:59:00', '13:59:00', 'pribadi', 0, '123'),
(5, '111', '2019-08-09 14:59:08 pm', '09:00:00', '13:10:00', 'tugas kantor', 0, 'blabla'),
(6, '112', '2019-08-09 15:14:56 pm', '12:00:00', '13:00:00', 'pribadi', 0, 'zzzz');

-- --------------------------------------------------------

--
-- Struktur dari tabel `khusus`
--

CREATE TABLE `khusus` (
  `kd_izin` int(5) NOT NULL,
  `nik` int(11) NOT NULL,
  `tgl` varchar(30) NOT NULL,
  `jam` varchar(11) NOT NULL,
  `jenis` varchar(20) NOT NULL,
  `status` int(11) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `khusus`
--

INSERT INTO `khusus` (`kd_izin`, `nik`, `tgl`, `jam`, `jenis`, `status`, `ket`) VALUES
(2, 111, '2019-07-10', '15:00', 'pulang awal', 1, 'Periksa'),
(3, 112, '2019-08-12', '20:00', 'tidak masuk', 0, 'sakit'),
(6, 112, '2019-08-09', '09:00', 'terlambat', 0, 'kesiangan'),
(7, 111, '2019-08-09', '15:00', 'pulang awal', 0, 'Sakit'),
(8, 112, '2019-08-12', '09:00', 'terlambat', 0, 'aaaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `koperasi`
--

CREATE TABLE `koperasi` (
  `id` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `saldo` int(11) NOT NULL,
  `debit` int(11) NOT NULL,
  `kredit` int(11) NOT NULL,
  `ket` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `koperasi`
--

INSERT INTO `koperasi` (`id`, `tgl`, `saldo`, `debit`, `kredit`, `ket`) VALUES
(1, '2019-07-25', 10000000, 0, 0, 'Saldo awal'),
(2, '2019-08-08', 9998800, 0, 1200, 'Pinjaman 113'),
(3, '2019-08-08', 9900000, 0, 100000, 'Pinjaman 112'),
(5, '2019-08-08', 9800000, 0, 200000, 'Pinjaman 111'),
(6, '2019-08-09', 9800000, 0, 200000, 'Pinjaman 111'),
(7, '2019-09-01', 5000000, 0, 5000000, 'Pinjaman 114'),
(8, '2019-09-01', 5000000, 0, 5000000, 'Pinjaman 114'),
(9, '2019-09-01', 5000000, 0, 5000000, 'Pinjaman 114'),
(10, '2019-09-01', 5000000, 0, 5000000, 'Pinjaman 114');

-- --------------------------------------------------------

--
-- Struktur dari tabel `lambat`
--

CREATE TABLE `lambat` (
  `nik` int(22) NOT NULL,
  `bulan` varchar(22) NOT NULL,
  `telat` varchar(22) NOT NULL,
  `denda` varchar(22) NOT NULL,
  `sp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `lambat`
--

INSERT INTO `lambat` (`nik`, `bulan`, `telat`, `denda`, `sp`) VALUES
(111, 'Oct, 2018', '134', '134000', 2),
(112, 'Oct, 2018', '0', '0', 1),
(113, 'Oct, 2018', '0', '0', 1),
(114, 'Oct, 2018', '0', '0', 1),
(115, 'Oct, 2018', '154', '154000', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjaman`
--

CREATE TABLE `pinjaman` (
  `id_pinjaman` int(11) NOT NULL,
  `nik` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `jumlah_pinjam` int(11) NOT NULL,
  `termin` int(11) NOT NULL,
  `temp` int(11) NOT NULL,
  `terminAngsuran` int(11) NOT NULL,
  `bunga` int(11) NOT NULL,
  `angsuran` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `alasan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pinjaman`
--

INSERT INTO `pinjaman` (`id_pinjaman`, `nik`, `tgl_pinjam`, `jumlah_pinjam`, `termin`, `temp`, `terminAngsuran`, `bunga`, `angsuran`, `status`, `alasan`) VALUES
(1, 112, '2019-08-22', 100000, 6, 5, 5, 200, 16700, 3, ''),
(2, 113, '2019-08-14', 100000, 9, 5, 1, 200, 11100, 3, ''),
(3, 111, '2019-08-13', 200000, 7, 5, 1, 400, 28700, 3, ''),
(4, 114, '2019-08-09', 5000000, 4, 5, 0, 200, 102000, 3, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`kd_cuti`);

--
-- Indexes for table `gaji`
--
ALTER TABLE `gaji`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `keluar`
--
ALTER TABLE `keluar`
  ADD PRIMARY KEY (`kd_keluar`);

--
-- Indexes for table `khusus`
--
ALTER TABLE `khusus`
  ADD PRIMARY KEY (`kd_izin`);

--
-- Indexes for table `koperasi`
--
ALTER TABLE `koperasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjaman`
--
ALTER TABLE `pinjaman`
  ADD PRIMARY KEY (`id_pinjaman`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `kd_cuti` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `keluar`
--
ALTER TABLE `keluar`
  MODIFY `kd_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `khusus`
--
ALTER TABLE `khusus`
  MODIFY `kd_izin` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `koperasi`
--
ALTER TABLE `koperasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pinjaman`
--
ALTER TABLE `pinjaman`
  MODIFY `id_pinjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
