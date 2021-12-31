-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2021 at 03:37 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `library`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookinformation`
--

CREATE TABLE `bookinformation` (
  `Model_Id` int(11) NOT NULL,
  `Company_Name` varchar(200) NOT NULL,
  `Category` varchar(50) NOT NULL,
  `Model_Name` varchar(200) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Price` double NOT NULL,
  `All` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookinformation`
--

INSERT INTO `bookinformation` (`Model_Id`, `Company_Name`, `Category`, `Model_Name`, `Quantity`, `Price`, `All`) VALUES
(4, 'Ride', 'Bicycle', '701 ', 9, 48000, '1'),
(5, 'Veloce', 'Bicycle', 'Slayer 1.0', 5, 16500, ''),
(6, 'Faleon\r\n', 'Bicycle', '690', 5, 12500, ''),
(7, 'Veloce\r\n', 'Bicycle', 'Warrior 2.0', 3, 12500, ''),
(8, 'Core\r\n', 'Bicycle', 'FX 2', 7, 12000, ''),
(9, 'Phoenix\r\n', 'Bicycle', '2020', 10, 11500, ''),
(10, 'Ride\r\n', 'Bicycle', '2018', 5, 10500, ''),
(11, '2 Pcs Car Bike Wheel LED Lights', 'Accessories', '2015', 20, 200, ''),
(12, 'Motorcycle Bicycle Helmet Lock', 'Accessories', '2018', 20, 300, ''),
(13, 'SH-3103 BRACKET Universal Phone Holder Best for Motorcycle Bicycle', 'Accessories', '2018', 15, 400, ''),
(14, 'Waterproof rechargeable light and Horn bicycle light and Horn cycle light+Horn', 'Accessories', '2020', 10, 350, '');

-- --------------------------------------------------------

--
-- Table structure for table `order_now`
--

CREATE TABLE `order_now` (
  `ID` int(50) NOT NULL,
  `Company_Name` varchar(200) DEFAULT NULL,
  `Model_Name` varchar(200) DEFAULT NULL,
  `Customer_name` varchar(200) DEFAULT NULL,
  `Contact` varchar(200) DEFAULT NULL,
  `District` varchar(200) DEFAULT NULL,
  `Address` varchar(200) DEFAULT NULL,
  `Total_Price` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_now`
--

INSERT INTO `order_now` (`ID`, `Company_Name`, `Model_Name`, `Customer_name`, `Contact`, `District`, `Address`, `Total_Price`) VALUES
(8, 'Ride', '701', 'abcd', '12345678911', 'Dhaka', 'abc@gmail.com', 48100);

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `User_Id` int(11) NOT NULL,
  `User_Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Confirm_password` varchar(20) NOT NULL,
  `Contact` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`User_Id`, `User_Name`, `Email`, `Password`, `Confirm_password`, `Contact`) VALUES
(21, 'Abcd', 'abcd@gmail.com', '12345', '12345', '01711111111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookinformation`
--
ALTER TABLE `bookinformation`
  ADD PRIMARY KEY (`Model_Id`);

--
-- Indexes for table `order_now`
--
ALTER TABLE `order_now`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookinformation`
--
ALTER TABLE `bookinformation`
  MODIFY `Model_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `order_now`
--
ALTER TABLE `order_now`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
