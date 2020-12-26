-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2020 at 02:09 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybook`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_tb`
--

CREATE TABLE `post_tb` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` varchar(200) NOT NULL,
  `image` varchar(100) NOT NULL,
  `user_id` int(100) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_tb`
--

INSERT INTO `post_tb` (`id`, `content`, `image`, `user_id`) VALUES
(1, 'Naruto Shippuden adalah sebuah seri anime yang diadaptasi dari bagian II manga Naruto. Serial ini disutradarai oleh Hayato Date dan diproduksi oleh Studio Pierrot dan TV Tokyo.', '1450925711-329abe517a484094e7874fdf867f44c2.jpeg', 1),
(2, 'Non Non Biyori (bahasa Jepang: ???????) adalah seri manga Jepang yang dikarang dan diilustrasikan oleh Atto. Seri ini mulai diterbitkan dalam majalah Monthly Comic Alive terbitan Media Factory ', 'maxresdefault (2).jpg', 2),
(3, 'My Hero Academia, adalah sebuah seri manga sh?nen Jepang bertema pahlawan super yang ditulis dan diilustrasikan oleh K?hei Horikoshi.', '668725033.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_tb`
--

CREATE TABLE `user_tb` (
  `id` int(12) NOT NULL,
  `name` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tb`
--

INSERT INTO `user_tb` (`id`, `name`, `foto`, `email`, `password`) VALUES
(1, 'Arsyad Basofil Amri', 'souma_yukihira__shokugeki_no_souma__vector_by_greenmapple17_d9titiu-fullview.jpg', 'ar@gmail.com', 'SSS'),
(2, 'admin', '163a0f33a3c2ee8f4f86159f8c19e442.jpg', 'arsyad@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_tb`
--
ALTER TABLE `post_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_tb`
--
ALTER TABLE `post_tb`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=213;

--
-- AUTO_INCREMENT for table `user_tb`
--
ALTER TABLE `user_tb`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
