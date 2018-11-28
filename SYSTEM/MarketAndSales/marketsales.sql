-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2018 at 04:50 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `citipointe`
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
(1, 'B1', 'Foot spa with Foot mask and Foot Massage', 300, 1),
(2, 'B2', 'FBM with Ventoza', 300, 1),
(3, 'B3', 'FBM with Maifanite Back Only', 300, 1),
(4, 'B4', 'FBM with Ear candling', 300, 1),
(5, 'B5', 'FBM with Foot Reflex', 300, 1),
(6, 'B6', 'FBM with Facial', 300, 1),
(7, 'B7', 'FBM with Hot stone(Back)', 300, 1),
(8, 'F1', 'Full Body Hot stone Massage', 600, 1),
(9, 'F2', 'Full Body Scrub with Full Body Massage', 600, 1),
(10, 'F3', 'FBM with Maifanite Mineral Stone', 600, 1),
(11, 'P1', 'Foot Detox/Foot Spa/Ear Candling FBM w/HS', 900, 1),
(12, 'P2', 'Facial with Body Scrub and Hot stone', 900, 1),
(13, 'AM', 'AM Body Massage/Hour', 200, 1),
(14, 'PM', 'PM Body Massage/Hour', 250, 1),
(15, 'S1', 'Foot Spa', 200, 1),
(16, 'S2', 'Ventoza Only', 200, 1),
(17, 'S3', 'Eat Candle', 200, 1),
(18, 'S4', 'Foot Massage', 200, 1),
(19, 'S5', 'Foot Detox and Foot Massage', 300, 1),
(20, 'S6', '15 Min Massage', 55, 1),
(21, 'C1', 'Grape Fruit Lotion', 50, 1),
(22, 'C2', 'Eutalyptus Cream', 50, 1),
(23, 'C3', 'Ginger', 50, 1),
(24, 'C4', 'Chili Orange', 50, 1);

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
(20, '2017-11-26', '', '', '', '', 0, 0, 0, 'FBM with Ventoza', 300, 'B2', 0),
(21, '2017-11-26', '', '', '', '', 0, 0, 0, 'Foot spa with Foot mask and Foot Massage', 300, 'B1', 0),
(22, '2017-11-26', '', '', '', '', 0, 0, 0, 'Eutalyptus Cream', 50, 'C2', 0),
(23, '2017-11-26', '', '', '', '', 0, 0, 0, 'Full Body Scrub with Full Body Massage', 600, 'F2', 0),
(24, '2017-11-26', '', '', '', '', 0, 0, 0, 'Foot spa with Foot mask and Foot Massage', 300, 'B1', 0),
(25, '2017-11-26', '', '', '', '', 0, 0, 0, 'FBM with Ventoza', 300, 'B2', 0),
(26, '2017-12-21', '', '', '', '', 0, 0, 0, '', 2003, '', 0),
(27, '2017-12-05', '', '', '', '', 0, 0, 0, '', 3000, '', 0),
(28, '2017-09-06', '', '', '', '', 0, 0, 0, '', 10000, '', 0),
(29, '2017-09-12', '', '', '', '', 2000, 0, 0, '', 2000, '', 0),
(31, '2017-11-26', 'jaymar', 'enconado', 'jahwr', 'Male', 23, 32767, 0, 'Foot spa with Foot mask and Foot Massage', 300, 'B1', 0),
(32, '2017-11-26', 'jaymar', 'enconado', 'jahwr', 'Male', 23, 32767, 0, 'FBM with Maifanite Back Only', 300, 'B3', 0),
(33, '2017-11-26', 'jaymar', 'enconado', 'jahwr', 'Male', 23, 32767, 0, 'FBM with Ear candling', 300, 'B4', 0),
(34, '2017-11-26', 'jaymar', 'enconado', 'jahwr', 'Male', 23, 32767, 0, 'FBM with Foot Reflex', 300, 'B5', 0),
(35, '2017-11-26', 'qwe', 'wee', '', '', 0, 0, 0, 'Foot spa with Foot mask and Foot Massage', 300, 'B1', 0),
(36, '2017-11-26', 'qwe', 'wee', '', '', 0, 0, 0, 'FBM with Ventoza', 300, 'B2', 0),
(37, '2017-11-28', '', '', '', '', 0, 0, 0, 'FBM with Ventoza', 300, 'B2', 0),
(38, '2017-11-28', 'asdj', 'asdj', '23rq', 'Male', 23, 25125, 0, 'Foot spa with Foot mask and Foot Massage', 300, 'B1', 0),
(39, '2017-10-16', '', '', '', '', 0, 0, 0, '', 700, '', 0),
(41, '2017-10-10', '', '', '', '', 0, 0, 0, '', 2321, '', 0),
(42, '2017-10-25', '', '', '', '', 0, 0, 0, '', 2321, '', 0),
(43, '2017-11-28', '', '', '', '', 0, 0, 0, 'Foot spa with Foot mask and Foot Massage', 300, 'B1', 0),
(44, '2017-11-28', '', '', '', '', 0, 0, 0, 'FBM with Ventoza', 300, 'B2', 0),
(45, '2017-11-28', '', '', '', '', 0, 0, 0, 'Foot spa with Foot mask and Foot Massage', 300, 'B1', 0),
(46, '2017-11-28', '', '', '', '', 0, 0, 0, 'Foot spa with Foot mask and Foot Massage', 300, 'B1', 0),
(47, '2017-11-28', 'Hello', 'World', 'Samaas', 'Male', 19, 32767, 0, 'Foot Spa', 200, 'S1', 0),
(48, '2017-11-28', 'Xander', 'Ford', 'Nasugbu, Batangas', 'Male', 19, 32767, 0, 'Foot spa with Foot mask and Foot Massage', 300, 'B1', 0),
(49, '2017-11-28', 'Xander', 'Ford', 'Nasugbu, Batangas', 'Male', 19, 32767, 0, 'FBM with Ventoza', 300, 'B2', 0),
(50, '2017-11-28', 'Xander', 'Ford', 'Nasugbu, Batangas', 'Male', 19, 32767, 0, 'Foot Spa', 200, 'S1', 0),
(51, '2017-11-28', 'Xander', 'Ford', 'Nasugbu, Batangas', 'Male', 19, 32767, 0, 'Foot Spa', 200, 'S1', 0),
(52, '2017-11-28', 'Xander', 'Ford', 'Nasugbu, Batangas', 'Male', 19, 32767, 0, 'Foot Spa', 200, 'S1', 0),
(53, '2017-11-28', 'hello', 'kitty', 'kalayo', 'Female', 18, 32767, 0, 'FBM with Ventoza', 300, 'B2', 0),
(54, '2017-11-28', 'hello', 'kitty', 'kalayo', 'Female', 18, 32767, 0, 'FBM with Maifanite Back Only', 300, 'B3', 0),
(55, '2017-11-28', '', '', '', '', 0, 0, 0, 'Foot spa with Foot mask and Foot Massage', 300, 'B1', 0),
(56, '2017-11-30', '', '', '', '', 0, 0, 900, 'FBM with Ventoza', 300, 'B2', 0),
(57, '2017-11-30', 'qwe', '', '', '', 0, 0, 2, 'Foot spa with Foot mask and Foot Massage', 300, 'B1', 600),
(58, '2017-11-30', 'qwe', '', '', '', 0, 0, 2, 'FBM with Ventoza', 300, 'B2', 600),
(59, '2018-10-16', '', '', '', '', 0, 0, 4, 'Foot spa with Foot mask and Foot Massage', 300, 'B1', 1200),
(60, '2018-10-16', '', '', '', '', 0, 0, 1, 'Foot spa with Foot mask and Foot Massage', 300, 'B1', 300),
(61, '2018-10-16', '', '', '', '', 0, 0, 1, 'FBM with Ventoza', 300, 'B2', 300),
(62, '2018-10-16', '', '', '', '', 0, 0, 1, 'FBM with Maifanite Back Only', 300, 'B3', 300);

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
(70, 'asddssd asdaadasd', 'staff', '2017-11-24', '06:45:27pm', ''),
(71, 'asddssd asdaadasd', 'staff', '2017-11-25', '02:35:54am', ''),
(72, 'qwe qwe', 'admin', '2017-11-25', '04:20:56am', ''),
(73, 'asddssd asdaadasd', 'staff', '2017-11-25', '04:28:05am', ''),
(74, 'asddssd asdaadasd', 'staff', '2017-11-25', '04:35:42am', ''),
(75, 'qwe qwe', 'admin', '2017-11-25', '05:21:30am', ''),
(76, 'asddssd asdaadasd', 'staff', '2017-11-25', '11:54:46am', ''),
(77, 'qwe qwe', 'admin', '2017-11-25', '11:58:01am', ''),
(78, 'asddssd asdaadasd', 'staff', '2017-11-25', '05:16:44pm', ''),
(79, 'qwe qwe', 'admin', '2017-11-25', '05:19:22pm', ''),
(80, 'qwe qwe', 'admin', '2017-11-25', '05:25:37pm', ''),
(81, 'asddssd asdaadasd', 'staff', '2017-11-25', '05:26:53pm', ''),
(82, 'asddssd asdaadasd', 'staff', '2017-11-25', '10:31:31pm', ''),
(83, 'qwe qwe', 'admin', '2017-11-25', '11:21:45pm', ''),
(84, 'asddssd asdaadasd', 'staff', '2017-11-26', '02:15:53am', ''),
(85, 'qwe qwe', 'admin', '2017-11-26', '02:16:14am', ''),
(86, 'qwe qwe', 'admin', '2017-11-26', '01:41:24pm', ''),
(87, 'asddssd asdaadasd', 'staff', '2017-11-26', '01:41:32pm', ''),
(88, 'qwe qwe', 'admin', '2017-11-26', '01:41:57pm', ''),
(89, 'qwe qwe', 'admin', '2017-11-26', '08:31:48pm', ''),
(90, 'asddssd asdaadasd', 'Staff', '2017-11-26', '10:36:55pm', ''),
(91, 'asddssd asdaadasd', 'Staff', '2017-11-26', '10:37:24pm', ''),
(92, 'asddssd asdaadasd', 'Staff', '2017-11-26', '10:43:38pm', ''),
(93, 'qwe qwe', 'admin', '2017-11-26', '10:55:39pm', ''),
(94, 'asddssd asdaadasd', 'Staff', '2017-11-26', '10:59:31pm', ''),
(95, 'asddssd asdaadasd', 'Staff', '2017-11-26', '10:59:44pm', ''),
(96, 'qwe qwe', 'admin', '2017-11-27', '12:05:04am', ''),
(97, 'asddssd asdaadasd', 'Staff', '2017-11-27', '11:54:27am', ''),
(98, 'qwe qwe', 'admin', '2017-11-27', '12:01:13pm', ''),
(99, 'qwe qwe', 'admin', '2017-11-27', '12:03:19pm', ''),
(100, 'qwe qwe', 'admin', '2017-11-27', '12:03:37pm', ''),
(101, 'qwe qwe', 'admin', '2017-11-27', '12:03:46pm', ''),
(102, 'asddssd asdaadasd', 'Staff', '2017-11-27', '12:31:29pm', ''),
(103, 'qwe qwe', 'admin', '2017-11-27', '01:01:44pm', ''),
(104, 'asddssd asdaadasd', 'Staff', '2017-11-27', '08:26:32pm', ''),
(105, 'asddssd asdaadasd', 'Staff', '2017-11-27', '08:26:37pm', ''),
(106, 'asddssd asdaadasd', 'Staff', '2017-11-27', '08:27:48pm', ''),
(107, 'qwe qwe', 'admin', '2017-11-27', '08:35:39pm', ''),
(108, 'asddssd asdaadasd', 'Staff', '2017-11-27', '08:37:11pm', ''),
(109, 'asddssd asdaadasd', 'Staff', '2017-11-27', '08:40:09pm', ''),
(110, 'qwe qwe', 'admin', '2017-11-27', '08:40:15pm', ''),
(111, 'qwe qwe', 'admin', '2017-11-27', '08:40:42pm', ''),
(112, 'asddssd asdaadasd', 'Staff', '2017-11-28', '12:27:02am', ''),
(113, 'qwe qwe', 'admin', '2017-11-28', '12:43:33am', ''),
(114, 'asddssd asdaadasd', 'Staff', '2017-11-28', '02:03:03am', ''),
(115, 'asddssd asdaadasd', 'Staff', '2017-11-28', '05:50:02am', ''),
(116, 'qwe qwe', 'admin', '2017-11-28', '05:53:17am', ''),
(117, 'asddssd asdaadasd', 'Staff', '2017-11-28', '07:08:57am', ''),
(118, 'qwe qwe', 'admin', '2017-11-28', '07:09:18am', ''),
(119, 'asddssd asdaadasd', 'Staff', '2017-11-28', '07:31:23am', ''),
(120, 'qwe qwe', 'admin', '2017-11-28', '07:39:49am', ''),
(121, 'asddssd asdaadasd', 'Staff', '2017-11-28', '08:04:39am', ''),
(122, 'qwe qwe', 'admin', '2017-11-28', '08:25:57am', ''),
(123, 'asddssd asdaadasd', 'Staff', '2017-11-30', '03:49:13am', ''),
(124, 'qwe qwe', 'admin', '2017-11-30', '06:43:34pm', ''),
(125, 'asddssd asdaadasd', 'Staff', '2017-11-30', '07:17:18pm', ''),
(126, 'qwe qwe', 'admin', '2018-05-24', '03:43:10am', ''),
(127, 'Jade dacillo', 'BS-CS', '2018-05-24', '04:41:29am', '');

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `recenttransaction`
--
ALTER TABLE `recenttransaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `temp_table`
--
ALTER TABLE `temp_table`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `time_log`
--
ALTER TABLE `time_log`
  MODIFY `t_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
