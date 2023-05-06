-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 08:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rygel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(200) NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(90) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `name`, `username`, `email`, `password`, `cpassword`) VALUES
(1, 'Manik Hossain', 'Admin', 'rjmanikroj@gmail.com', '$2y$10$jxmsyG/oFbP9snAr/ySYbuVzCJzOPcMwhmXy803ycZ700znc6ypTS', '$2y$10$.kN9pkZoPVxJJZ6df9YEZes5az7zJEaQakxynWAsJH7bDRmCBanFK');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contactus`
--

CREATE TABLE `tbl_contactus` (
  `id` int(100) NOT NULL,
  `name` varchar(60) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(80) NOT NULL,
  `message` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contactus`
--

INSERT INTO `tbl_contactus` (`id`, `name`, `mobile`, `email`, `message`) VALUES
(1, 'Uzzal Sarder', '01760618411', 'uzzalsarder@gmail.com', 'Hi, \r\nInterested to book a room in your hotel. '),
(2, 'Bayzid bostami', '01760618413', 'bayzid@gmail.com', 'Hello, I am interested to book the conference room. '),
(3, 'Dalma Sikhdar Zisa', '01760618445', 'zisa@gmail.com', 'Had a pleasant time in your hotel. the service was great.'),
(4, 'Somaiya Khanam', '01521523132', 'somaiya@gmail.com', 'Hello, I want to book the seminar hall for 2 days. \r\n ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `id` int(100) NOT NULL,
  `roomtype` varchar(80) NOT NULL,
  `sizesqm` int(5) NOT NULL,
  `size` int(8) NOT NULL,
  `maxguest` int(5) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_room`
--

INSERT INTO `tbl_room` (`id`, `roomtype`, `sizesqm`, `size`, `maxguest`, `price`) VALUES
(1, 'Single Suite', 30, 323, 1, 18035),
(2, 'Regular Deluxe', 36, 382, 2, 22035),
(3, 'Double Deluxe', 45, 485, 2, 30256),
(4, 'Executive Suite', 53, 569, 2, 34115),
(5, 'Family Suite', 96, 1033, 6, 55525),
(6, 'Premium Suite', 108, 1162, 4, 64925),
(7, 'Presedential Suite', 125, 1345, 4, 77797),
(8, 'Royal', 125, 1345, 4, 77797);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_reservation`
--

CREATE TABLE `tbl_room_reservation` (
  `id` int(90) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `email` varchar(80) NOT NULL,
  `mbl_num` varchar(15) NOT NULL,
  `nid_num` int(30) NOT NULL,
  `pass_num` int(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `city` varchar(40) NOT NULL,
  `upazila` varchar(40) NOT NULL,
  `zip_code` int(10) NOT NULL,
  `rooms` varchar(100) NOT NULL,
  `adult_num` int(3) NOT NULL,
  `kids_num` int(3) NOT NULL,
  `checkin` varchar(80) NOT NULL,
  `checkout` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_room_reservation`
--

INSERT INTO `tbl_room_reservation` (`id`, `fname`, `lname`, `email`, `mbl_num`, `nid_num`, `pass_num`, `address`, `city`, `upazila`, `zip_code`, `rooms`, `adult_num`, `kids_num`, `checkin`, `checkout`) VALUES
(1, 'Uzzal', 'Sarder', 'uzzalsarder@gmail.com', '01521522222', 2147483647, 2147483647, 'Rajbari', 'Rajbari', 'Rajbari', 5642, 'Single Suite', 1, 0, '2021-05-09T15:33', '2021-05-11T10:30'),
(2, 'Bayzid', 'Bostami', 'bayzid@gmail.com', '01785265522', 2147483647, 2147483647, 'Barishal Sadar', 'Barishaal', 'Mehendiganj', 4562, 'Double Deluxe', 2, 1, '2021-05-09T14:18', '2021-05-15T23:36'),
(3, 'Dalma Sikhdar', 'Zisa', 'zisa@gmail.com', '01785265521', 2147483647, 2147483647, 'Chittagong Sadar', 'Chittagong', 'Kotoali', 6325, 'Premium Suite', 3, 1, '2021-05-09T11:05', '2021-05-12T10:30'),
(4, 'Somaiyabh', 'Khanam', 'Somaiyaj@gmail.com', '01954862310', 2147483647, 785621562, 'Narshindi ', 'Narshindi', 'Belabo', 4256, 'Family Suite', 4, 2, '2021-05-09T15:40', '2021-05-13T10:30'),
(5, 'Fahim Ahmed', 'Ifty', 'ifty@gmail.com', '01736452145', 2147483647, 0, 'Narayangonj', 'Narayangonj', 'Chashara', 6852, 'Executive Suite', 2, 0, '2021-05-09T10:55', '2021-05-11T10:30');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(90) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `password`, `cpassword`) VALUES
(1, 'Uzzal Sarder', 'Uzzal', 'uzzalsarder@gmail.com', '$2y$10$k3Wk8ykLXSAH.EKk/se6rOkDouO37aDRbyqljBAjtNq4s0OcDXmP6', '$2y$10$5apmZp8buVNG3vP5i8pGaeSw4avNHyazN7CZ8IEId.r7ByM/5qrZ2'),
(2, 'Bayzid bostami', 'Bayzid', 'bayzid@gmail.com', '$2y$10$JTcHH1qsHLN7X6TCarl81uLL6flDj8hwGXy.9oU1XKiWqHjDeE4V6', '$2y$10$Esg8Tb992H8sD/Uw4nMcNucg9jAO9Syjbo9RFv4hTOJoxzPJBrROO'),
(3, 'Dalma Sikhdar Zisa', 'Zisa', 'zisa@gmail.com', '$2y$10$PLQum.0TuzoXwqqbVVp6jes7jvppoyGjvJZ3zAWCDZ1zNOYTKbG/y', '$2y$10$s/uawFHqSwIVwc7L9PnCKe3vutmC2zo0iipmJsNcIn0qHSQtLbOAi'),
(4, 'Somaiya Khanam', 'Somaiya', 'somaiya@gmail.com', '$2y$10$hzKkxobhmQVfnL0yq7aoaeUyTek14l4ernJwr4JggVUDzRtArCrre', '$2y$10$8VXIBnwBOLCRWs.MLqzA7eiUpMW9Y4bSdy0TiNsLK4F7wrXIIs3J6'),
(5, 'Jannatul Maawa', 'Maawa', 'maawa@gmail.com', '$2y$10$Th544vDhmMDC/xjsuwNNE.ROrImA.D8n4UVXsJ7q/B1DIOm3eLH5q', '$2y$10$31WAOZn6a7p1s98fHB5RaO2sSSWuZ.dBykltt9YKpf77JjJCtlULG'),
(6, 'Sajib Kotal', 'Kotal', 'kotal@gmail.com', '$2y$10$z5dWFB8CnAIIekOKfiLzTO8UahaJNLnkM4R818.rOyTwSBrz6Ei8C', '$2y$10$88z9VztlpkpeUQ6JMu4beu9Ks5Fo833t7bRSWZaVmVL3sOI62ceAK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_room_reservation`
--
ALTER TABLE `tbl_room_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_contactus`
--
ALTER TABLE `tbl_contactus`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_room_reservation`
--
ALTER TABLE `tbl_room_reservation`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(90) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
