-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2023 at 01:04 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pribadi`
--

CREATE TABLE `tb_pribadi` (
  `id` int(11) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `nama_lengkap` text NOT NULL,
  `umur` int(11) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `negara` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_pribadi`
--

INSERT INTO `tb_pribadi` (`id`, `nik`, `nama_lengkap`, `umur`, `tanggal_lahir`, `jenis_kelamin`, `alamat`, `negara`) VALUES
(32, '3370056987450408', 'Zachary Luthfy Riszqon', 14, '1998-04-08', 'Laki-Laki', 'Bogor', 'Indonesia'),
(33, '3370056987450001', 'Lionel Messi', 35, '1987-01-01', 'Laki-Laki', 'Paris', 'Argentina'),
(34, '3370056983690002', 'Cristiano Ronaldo', 37, '1985-05-02', 'Laki-Laki', 'Al-Nassr', 'Portugal'),
(35, '3370056987450009', 'Karim Benzema', 35, '1987-12-19', 'Laki-Laki', 'Madrid', 'Prancis'),
(53, '3370056987450006', 'Nico Robin', 31, '1991-07-06', 'Perempuan', 'Tokyo', 'Jepang'),
(54, '3370056987450000', 'Lord Voldemort', 100, '1952-12-31', 'Laki-Laki', 'London', 'Inggris'),
(56, '3370056987450111', 'Seo Yea-ji', 32, '1990-10-31', 'Perempuan', 'Seoul', 'Korea'),
(57, '3370056987451989', 'Taylor Alison Swift', 33, '1989-12-13', 'Perempuan', 'California', 'Amerika'),
(58, '3370056987450222', 'Garry Kasparov', 59, '1963-04-13', 'Laki-Laki', 'Moscow', 'Russia'),
(61, '3370056987450022', 'Vinicius Junior', 22, '2000-07-12', 'Laki-Laki', 'Madrid', 'Brazil'),
(62, '3370056987450019', 'Úrsula Corberó', 33, '1989-08-11', 'Perempuan', 'Madrid', 'Spanyol'),
(66, '3370056987458888', 'Toni Kroos', 33, '1990-01-04', 'Laki-Laki', 'Madrid', 'Jerman'),
(71, '3370056987453333', 'Pevita Pearce', 30, '1992-10-06', 'Perempuan', 'Jakarta', 'Indonesia'),
(72, '3370056912345678', 'Daenerys Targaryen', 36, '1986-10-23', 'Perempuan', 'Dragonstone', 'Inggris'),
(73, '3370056987451234', 'Shailene Woodley', 31, '1991-11-15', 'Perempuan', 'California', 'Amerika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pribadi`
--
ALTER TABLE `tb_pribadi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nik` (`nik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pribadi`
--
ALTER TABLE `tb_pribadi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
