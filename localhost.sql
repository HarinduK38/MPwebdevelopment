-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 03, 2020 at 07:17 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id13666646_harindu_databasename`
--
CREATE DATABASE IF NOT EXISTS `id13666646_harindu_databasename` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id13666646_harindu_databasename`;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `given_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `family_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone_num` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `password`, `given_name`, `family_name`, `phone_num`) VALUES
('12345000', '1234', 'Admin', 'Administration', 451852963),
('12345001', '124578', 'Harindu', 'Kalupahana', 451834575),
('12345002', '12456', 'tim', 'cade', 411852963),
('12345003', 'hk@1245', 'Anne', 'Frank', 451827963),
('12345004', '12aa12', 'Cool', 'Ridge', 451741852),
('12345005', '15963A', 'Camila', 'Mendes', 451852741),
('12345006', '85AA85', 'Veronica', 'Rodges', 451963741),
('12345007', 'a1a1a1', 'Thyangi', 'Ranaweera', 451834575),
('12345008', '12AA12aa', 'Arthur', 'Pendragon', 451852395),
('12345009', '1234852', 'Test', 'Test 1', 401852741);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
