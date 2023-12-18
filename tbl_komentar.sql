-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 17, 2023 at 08:46 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_torik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_komentar`
--

CREATE TABLE `tbl_komentar` (
  `komentar_id` int(11) NOT NULL,
  `parent_komentar_id` int(11) NOT NULL,
  `komentar` varchar(200) NOT NULL,
  `nama_pengirim` varchar(40) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `email_pengirim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `tbl_komentar`
--

INSERT INTO `tbl_komentar` (`komentar_id`, `parent_komentar_id`, `komentar`, `nama_pengirim`, `date`, `email_pengirim`) VALUES
(10, 0, 'bagus', 'jumdi wewewew', '2023-12-13 04:20:22', ''),
(11, 0, 'grewgeget', 'gouwhg', '2023-12-13 23:50:17', ''),
(13, 0, '***** bang', 'a', '2023-12-14 04:40:47', ''),
(14, 0, '****** kau', 'jububu', '2023-12-14 04:42:43', ''),
(16, 0, '****** kau', 'a', '2023-12-14 05:55:42', ''),
(17, 0, '****', 'tes', '2023-12-14 05:56:36', ''),
(18, 0, '****** kamu', 'jumadi', '2023-12-14 07:41:25', ''),
(19, 0, 'aaaa', 'jumadi', '2023-12-14 07:57:51', 'bla@gmail.com'),
(20, 0, 'jdjajda', 'jumadi', '2023-12-14 08:02:11', 'bldadaa@gmail.com'),
(21, 0, 'baikkkkk', 'bu mar', '2023-12-14 08:03:22', 'bumar@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  ADD PRIMARY KEY (`komentar_id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_komentar`
--
ALTER TABLE `tbl_komentar`
  MODIFY `komentar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
