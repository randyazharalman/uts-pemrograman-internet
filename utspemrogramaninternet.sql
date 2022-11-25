-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 25, 2022 at 03:52 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utspemrogramaninternet`
--

-- --------------------------------------------------------

--
-- Table structure for table `profil_sekolah`
--

CREATE TABLE `profil_sekolah` (
  `npsn` varchar(8) COLLATE utf8mb4_general_ci NOT NULL,
  `status` enum('Negeri','Swasta') CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `bentuk_pendidikan` enum('TK','SD','SMP','SMA','SMK') CHARACTER SET utf8mb4 COLLATE utf8mb4_hr_0900_ai_ci NOT NULL,
  `nama_sekolah` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `sk_pendirian` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_pendirian` date NOT NULL,
  `sk_izin_operasional` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `tgl_izin_operasional` date NOT NULL,
  `alamat` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `rt` varchar(3) COLLATE utf8mb4_general_ci NOT NULL,
  `rw` varchar(3) COLLATE utf8mb4_general_ci NOT NULL,
  `dusun` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `desa` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kecamatan` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kabupaten` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `provinsi` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `kode_pos` varchar(8) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profil_sekolah`
--

INSERT INTO `profil_sekolah` (`npsn`, `status`, `bentuk_pendidikan`, `nama_sekolah`, `sk_pendirian`, `tgl_pendirian`, `sk_izin_operasional`, `tgl_izin_operasional`, `alamat`, `rt`, `rw`, `dusun`, `desa`, `kecamatan`, `kabupaten`, `provinsi`, `kode_pos`) VALUES
('0210031', 'Swasta', 'SMA', 'MAN 3 Tasikmalayaa', '206101/1980', '2022-11-24', '1980-07-30', '2022-11-24', 'Jalan Ciawi-Panumbanan No 32', '01', '03', 'Lanbau', 'Lanbaus', 'Ciawi', 'Tasikmalaya', 'Jawa Barat', '461564s'),
('11223344', 'Swasta', 'SMK', 'SMK Kiarakuda Ciawi', '206101/1980', '2022-11-21', '1980-07-30', '2022-11-21', 'JALAN PASIRHUNI NO. 10 Desa Pasrihuni Kec. Ciawi Kab. Tasimalaya 46156', '98', '94', 'Pasirhunia', 'Pasirhuni', 'Ciawi', 'Tasikmalaya', 'Jawa Barat', '461564'),
('1231312', 'Negeri', 'SMP', 'MTS Tanjungsari', '206101/1980', '2022-11-21', '1980-07-30', '2022-11-21', 'JALAN PASIRHUNI NO. 10 Desa Pasrihuni Kec. Ciawi Kab. Tasimalaya 46156', '01', '03a', 'Pasirhuni', 'Pasirhunizx', 'Ciawi', 'Tasikmalaya', 'Jawa Barat', '46156ss');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profil_sekolah`
--
ALTER TABLE `profil_sekolah`
  ADD PRIMARY KEY (`npsn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
