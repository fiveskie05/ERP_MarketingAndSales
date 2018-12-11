-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2018 at 06:03 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

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
(25, 'Wine0001', 'Bugnay Wine', 1000, 1),
(26, 'Wine0002', 'Lambanuga Wine', 1200, 1),
(27, 'Wine0003', 'Wine Lyn', 900, 1),
(28, 'Wine0004', 'Wine Shin', 1100, 1),
(31, '', 'Wintot', 1500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `recenttransaction`
--

CREATE TABLE `recenttransaction` (
  `id` int(11) NOT NULL,
  `r_date` date NOT NULL,
  `r_time` varchar(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Age` smallint(255) NOT NULL,
  `No_of_person` smallint(255) NOT NULL,
  `Product_name` text NOT NULL,
  `Product_price` smallint(255) NOT NULL,
  `Product_code` varchar(255) NOT NULL,
  `cashier` varchar(255) NOT NULL,
  `Sub_total` smallint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `recenttransaction`
--

INSERT INTO `recenttransaction` (`id`, `r_date`, `r_time`, `First_name`, `Last_name`, `Age`, `No_of_person`, `Product_name`, `Product_price`, `Product_code`, `cashier`, `Sub_total`) VALUES
(63, '2018-11-29', '', 'Maond', 'Rasodf', 23, 1, 'Bugnay Wine', 1000, 'Wine0001', '', 1000),
(72, '2018-12-11', '11:40:50pm', 'Loly', 'Pop', 19, 2, 'Wintot', 1500, '', 'Noel Cats', 3000),
(73, '2018-12-11', '11:45:02pm', 'Nono', 'Opre', 0, 1, 'Bugnay Wine', 1000, 'Wine0001', 'Noel Cats', 1000),
(74, '2018-12-11', '11:45:02pm', 'Nono', 'Opre', 0, 1, 'Wine Lyn', 900, 'Wine0003', 'Noel Cats', 900),
(75, '2018-12-11', '11:45:02pm', 'Nono', 'Opre', 0, 1, 'Wintot', 1500, '', 'Noel Cats', 1500),
(76, '2018-12-11', '11:53:50pm', 'Basha', 'Pops', 18, 1, 'Lambanuga Wine', 1200, 'Wine0002', 'Jam Mich', 1200),
(77, '2018-12-11', '11:53:50pm', 'Basha', 'Pops', 18, 1, 'Bugnay Wine', 1000, 'Wine0001', 'Jam Mich', 1000),
(78, '2018-12-11', '11:53:50pm', 'Basha', 'Pops', 18, 1, 'Wine Lyn', 900, 'Wine0003', 'Jam Mich', 900);

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
(128, 'Noel Cats', 'Staff', '2018-11-29', '01:53:21am', ''),
(129, 'Noel Cats', 'Staff', '2018-11-29', '01:57:46am', ''),
(130, 'Paul Zapata', 'Admin', '2018-11-29', '01:59:45am', ''),
(131, 'Paul Zapata', 'Admin', '2018-11-29', '02:01:57am', ''),
(132, 'Noel Cats', 'Staff', '2018-11-29', '02:02:11am', ''),
(133, 'Paul Zapata', 'Admin', '2018-11-29', '02:04:10am', ''),
(134, 'Noel Cats', 'Staff', '2018-12-10', '11:27:41pm', ''),
(135, 'Paul Zapata', 'Admin', '2018-12-11', '01:07:35am', ''),
(136, 'Noel Cats', 'Staff', '2018-12-11', '02:21:50am', ''),
(137, 'Paul Zapata', 'Admin', '2018-12-11', '02:25:28am', ''),
(138, 'Noel Cats', 'Staff', '2018-12-11', '03:56:05am', ''),
(139, 'Noel Cats', 'Staff', '2018-12-11', '04:07:57am', ''),
(140, 'Noel Cats', 'Staff', '2018-12-11', '04:08:58am', ''),
(141, 'Noel Cats', 'Staff', '2018-12-11', '04:09:41am', ''),
(142, 'Noel Cats', 'Staff', '2018-12-11', '04:12:02am', ''),
(143, 'Noel Cats', 'Staff', '2018-12-11', '04:12:46am', ''),
(144, 'Noel Cats', 'Staff', '2018-12-11', '10:16:29pm', ''),
(145, 'Paul Zapata', 'Admin', '2018-12-11', '11:52:56pm', ''),
(146, 'Jam Mich', 'Staff', '2018-12-11', '11:53:24pm', '');

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
(1, 'Paul', 'Zapata', 25, 'Male', 'Admin', 'Paul', 'Zapata', '', ''),
(2, 'Noel', 'Cats', 23, 'Male', 'Staff', 'Noel', 'Cats', '', ''),
(3, 'Jam', 'Mich', 18, 'Male', 'Staff', 'Jam', 'Mich', '', '');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `recenttransaction`
--
ALTER TABLE `recenttransaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `temp_table`
--
ALTER TABLE `temp_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `time_log`
--
ALTER TABLE `time_log`
  MODIFY `t_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=147;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
