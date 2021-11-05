-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2021 at 08:18 PM
-- Server version: 10.4.10-MariaDB
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
-- Database: `apartment`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(10) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(70) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Address` text NOT NULL,
  `DOB` date NOT NULL,
  `Joining_date` date NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Picture` varchar(50) DEFAULT NULL,
  `Salary` int(10) NOT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `First_name`, `Last_name`, `Username`, `Password`, `Status`, `Email`, `Address`, `DOB`, `Joining_date`, `Phone`, `Gender`, `Picture`, `Salary`, `Created_at`, `Updated_at`) VALUES
(11, 'Manik', 'Saha', 'ppppppdppwfwe', '11111111', 'Open', 'manikssdgrrgme@gmail.com', 'Jamuna Future park, Dhaka 1211', '2021-10-26', '2021-10-13', '+8801952309730', 'Female', '1634896138.jpg', 1111111, NULL, '2021-10-29 18:16:07'),
(13, 'Manik', 'Saha', 'aaa111', 'bae5e3208a3c700e3db642b6631e95b9', 'Open', 'maniksaha.004.mailme@gmail.com', 'Jamuna Future park, Dhaka 1211', '2021-10-13', '2021-10-19', '+8801952309730', 'Male', '1634963384.jpg', 1111111, NULL, NULL),
(14, 'Manik', 'Saha', 'bbb111', '1bbd886460827015e5d605ed44252251', 'Open', 'manik0.magfgilme@gmail.com', 'Jamuna Future park, Dhaka 1211', '2021-10-20', '2021-10-19', '+8801952309730', 'Male', '1634969085.jpg', 1111111, NULL, NULL),
(15, 'Manik', 'Saha', 'bbb1111', '1bbd886460827015e5d605ed44252251', 'Open', 'manigfgfilme@gmail.com', 'Jamuna Future park, Dhaka 1211', '2021-10-14', '2021-10-05', '+8801952309730', 'Male', '1634996345.jpg', 1111111, NULL, NULL),
(16, 'manik', 'saha', 'manik333', '1bbd886460827015e5d605ed44252251', 'Blocked', 'manir3w4rk@gmail.com', 'etrttttttttttttttttttttttt', '2021-10-19', '2021-10-11', '55555555555', 'Male', NULL, 555555, '2021-10-13 02:10:14', '2021-10-29 00:00:00'),
(17, 'Manik', 'Saha', 'fefefff', '1bbd886460827015e5d605ed44252251', 'Open', 'maniksaha.00.mailme@gmail.com', 'Jamuna Future park, Dhaka 1211', '2021-10-16', '2021-10-14', '+8801952309730', 'Female', '1635432318.jpg', 1111111, '2021-10-28 14:45:18', NULL),
(19, 'Manik', 'Saha', 'wqewqe', '1bbd886460827015e5d605ed44252251', 'Open', 'maniede@gmail.com', 'Jamuna Future park, Dhaka 1211', '2021-10-20', '2021-10-17', '+8801952309730', 'Male', '1635531345.jpg', 300000, '2021-10-29 18:15:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE `apartment` (
  `ID` int(10) NOT NULL,
  `Apartment_Address` text NOT NULL,
  `Rent` int(15) NOT NULL,
  `Picture1` varchar(50) NOT NULL,
  `Picture2` varchar(50) DEFAULT NULL,
  `Picture3` varchar(50) DEFAULT NULL,
  `Picture4` varchar(50) DEFAULT NULL,
  `Picture5` varchar(50) DEFAULT NULL,
  `Picture6` varchar(50) DEFAULT NULL,
  `Picture7` varchar(50) DEFAULT NULL,
  `Kitchen` int(2) NOT NULL,
  `Dining_space` int(2) NOT NULL,
  `Details` text NOT NULL,
  `Bathroom` int(2) NOT NULL,
  `Total_room` int(2) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Lift` varchar(3) NOT NULL,
  `Owner_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`ID`, `Apartment_Address`, `Rent`, `Picture1`, `Picture2`, `Picture3`, `Picture4`, `Picture5`, `Picture6`, `Picture7`, `Kitchen`, `Dining_space`, `Details`, `Bathroom`, `Total_room`, `Status`, `Lift`, `Owner_ID`) VALUES
(1, '	\r\nJamuna Future park,Basundhara, Dhaka 1211', 10000, '11111.jpg', '22222.jpg', '33333.jpg', '44444.jpg', NULL, NULL, NULL, 1, 1, 'errrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 3, 5, 'Open', 'Yes', 1),
(2, '	\r\nJamuna Future park, Dhaka 1211', 20000, '11111.jpg', '22222.jpg', '33333.jpg', '44444.jpg', NULL, NULL, NULL, 1, 1, 'errrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 3, 5, 'Open', 'No', 2),
(3, '	\r\nJamuna Future park, Dhaka 1211', 25000, '11111.jpg', '22222.jpg', '33333.jpg', '44444.jpg', NULL, NULL, NULL, 1, 1, 'errrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 3, 5, 'Open', 'Yes', 1),
(4, '	\r\nJamuna Future park, Dhaka 1211', 50000, '11111.jpg', '22222.jpg', '33333.jpg', '44444.jpg', NULL, NULL, NULL, 1, 1, 'errrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 3, 5, 'Open', 'No', 3);

-- --------------------------------------------------------

--
-- Table structure for table `apartment_owner`
--

CREATE TABLE `apartment_owner` (
  `ID` int(10) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(56) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Picture` varchar(50) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Address` text NOT NULL,
  `Created_at` datetime DEFAULT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `Payment_id` int(10) DEFAULT NULL,
  `Apartment_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apartment_owner`
--

INSERT INTO `apartment_owner` (`ID`, `First_name`, `Last_name`, `Username`, `Password`, `Phone`, `Email`, `Status`, `Picture`, `Gender`, `Address`, `Created_at`, `Updated_at`, `Payment_id`, `Apartment_ID`) VALUES
(1, 'manik', 'saha', 'manik3v33', '96e79218965eb72c92a549dd5a330112', '55555555555', 'manikr@gmail.com', 'Open', '11111.jpg', 'Male', 'ffffffffffffffff', '2021-10-19 04:13:18', '2021-10-29 18:18:02', NULL, 1),
(2, 'manik', 'saha', 'mangik3333', '96e79218965eb72c92a549dd5a330112', '55555555555', 'maniddk@gmail.com', 'Open', '1635343641.jpg', 'Male', 'fefewffffffffffffffffffffffffffffffffffffffff', '2021-10-19 04:13:18', '2021-10-29 14:27:42', NULL, 2),
(3, 'manik', 'saha', 'ffmanik333', '96e79218965eb72c92a549dd5a330112', '55555555555', 'manik@gmail.com', 'Open', '1635343641.jpg', 'Male', 'ffffffffffffffff', '2021-10-19 04:13:18', NULL, NULL, 4);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Address` text NOT NULL,
  `Picture` varchar(100) NOT NULL,
  `Payment_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `ID` int(10) NOT NULL,
  `Payment_type` varchar(20) NOT NULL,
  `Payment_status` varchar(20) NOT NULL,
  `Paid_amount` int(15) NOT NULL,
  `Total_amount` int(15) NOT NULL,
  `Payment_date` date NOT NULL,
  `Due_amount` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `apartment_owner`
--
ALTER TABLE `apartment_owner`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `apartment`
--
ALTER TABLE `apartment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `apartment_owner`
--
ALTER TABLE `apartment_owner`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
