-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2018 at 08:03 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `marketsales`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_and_services`
--

CREATE TABLE `products_and_services` (
  `ID` int(11) NOT NULL,
  `Product_code` varchar(255) NOT NULL,
  `Services` text NOT NULL,
  `Amount` smallint(255) NOT NULL,
  `No_of_person` smallint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products_and_services`
--

INSERT INTO `products_and_services` (`ID`, `Product_code`, `Services`, `Amount`, `No_of_person`) VALUES
(25, 'Wine 001', 'Lambanog', 500, 1),
(26, 'Wine 002', 'Banayad Whiskey', 850, 1),
(27, 'Wine 003', 'Lambangag', 700, 1),
(28, 'Wine 004', 'Black Horse', 900, 1);

-- --------------------------------------------------------

--
-- Table structure for table `recenttransaction`
--

CREATE TABLE `recenttransaction` (
  `id` int(11) NOT NULL,
  `r_date` date NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Age` smallint(255) NOT NULL,
  `Contact_Number` smallint(255) NOT NULL,
  `No_of_person` smallint(255) NOT NULL,
  `Product_name` text NOT NULL,
  `Product_price` smallint(255) NOT NULL,
  `Product_code` varchar(255) NOT NULL,
  `Sub_total` smallint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recenttransaction`
--

INSERT INTO `recenttransaction` (`id`, `r_date`, `First_name`, `Last_name`, `Address`, `Gender`, `Age`, `Contact_Number`, `No_of_person`, `Product_name`, `Product_price`, `Product_code`, `Sub_total`) VALUES
(63, '2018-12-04', 'qwed', '123', 'wawa', 'Female', 21, 32767, 10, 'Lambanog', 500, 'Wine 001', 5000),
(64, '2018-12-04', 'qwed', '123', 'wawa', 'Female', 21, 32767, 10, 'Banayad Whiskey', 850, 'Wine 002', 8500),
(65, '2018-12-04', 'qwed', '123', 'wawa', 'Female', 21, 32767, 10, 'Lambangag', 700, 'Wine 003', 7000),
(66, '2018-12-04', 'qwed', '123', 'wawa', 'Female', 21, 32767, 10, 'Black Horse', 900, 'Wine 004', 9000),
(67, '2018-12-04', 'Paul', 'PAPAPa', 'zxxccxcxcx', 'Female', 18, 32767, 1, 'Lambanog', 500, 'Wine 001', 500),
(68, '2018-12-04', 'Paul', 'PAPAPa', 'zxxccxcxcx', 'Female', 18, 32767, 1, 'Banayad Whiskey', 850, 'Wine 002', 850),
(69, '2018-12-04', 'Paul', 'PAPAPa', 'zxxccxcxcx', 'Female', 18, 32767, 1, 'Lambangag', 700, 'Wine 003', 700),
(70, '2018-12-04', 'Paul', 'PAPAPa', 'zxxccxcxcx', 'Female', 18, 32767, 1, 'Black Horse', 900, 'Wine 004', 900);

-- --------------------------------------------------------

--
-- Table structure for table `temp_table`
--

CREATE TABLE `temp_table` (
  `ID` int(11) NOT NULL,
  `Product_name` text NOT NULL,
  `Product_price` smallint(255) NOT NULL,
  `Product_code` varchar(255) NOT NULL,
  `Product_ID` int(11) NOT NULL,
  `Sub_total` smallint(255) NOT NULL,
  `No_of_person` smallint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `time_log`
--

CREATE TABLE `time_log` (
  `t_ID` int(11) NOT NULL,
  `U_name` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Date_loggedin` date NOT NULL,
  `Time_in` varchar(255) NOT NULL,
  `Time_out` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_log`
--

INSERT INTO `time_log` (`t_ID`, `U_name`, `Position`, `Date_loggedin`, `Time_in`, `Time_out`) VALUES
(130, 'Jamaica Tesbun', 'Admin', '2018-12-04', '02:57:20pm', ''),
(131, 'Niela Pipi', 'Staff', '2018-12-04', '02:57:38pm', ''),
(132, 'Jamaica Tesbun', 'Admin', '2018-12-04', '02:58:59pm', ''),
(133, 'Niela Pipi', 'Staff', '2018-12-04', '03:00:16pm', ''),
(134, 'Jamaica Tesbun', 'Admin', '2018-12-04', '03:01:04pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Age` int(255) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Position` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `grad` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `First_name`, `Last_name`, `Age`, `Gender`, `Position`, `Username`, `Password`, `year`, `grad`) VALUES
(3, 'Jamaica', 'Tesbun', 20, 'Female', 'Admin', 'Jamaica', 'Tesbun', '', ''),
(4, 'Niela', 'Pipi', 20, 'Male', 'Staff', 'Niela', 'Pipi', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products_and_services`
--
ALTER TABLE `products_and_services`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `recenttransaction`
--
ALTER TABLE `recenttransaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp_table`
--
ALTER TABLE `temp_table`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `time_log`
--
ALTER TABLE `time_log`
  ADD PRIMARY KEY (`t_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products_and_services`
--
ALTER TABLE `products_and_services`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `recenttransaction`
--
ALTER TABLE `recenttransaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `temp_table`
--
ALTER TABLE `temp_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `time_log`
--
ALTER TABLE `time_log`
  MODIFY `t_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=135;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
