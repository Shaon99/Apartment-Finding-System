-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2021 at 03:44 PM
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
-- Database: `apartment_finding_system`
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
  `apartment_ID` int(10) NOT NULL,
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
  `Created_at` date NOT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `Owner_ID` int(10) DEFAULT NULL,
  `Customer_ID` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`apartment_ID`, `Apartment_Address`, `Rent`, `Picture1`, `Picture2`, `Picture3`, `Picture4`, `Picture5`, `Picture6`, `Picture7`, `Kitchen`, `Dining_space`, `Details`, `Bathroom`, `Total_room`, `Status`, `Lift`, `Created_at`, `Updated_at`, `Owner_ID`, `Customer_ID`) VALUES
(1, '	\r\nJamuna Future park,Basundhara, Dhaka 1211', 10000, '11111.jpg', '22222.jpg', '33333.jpg', '44444.jpg', NULL, NULL, NULL, 1, 1, 'errrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 3, 5, 'Open', 'Yes', '2021-10-31', NULL, 1, NULL),
(3, '	\r\nJamuna Future park, Dhaka 1211', 25000, '11111.jpg', '22222.jpg', '33333.jpg', '44444.jpg', NULL, NULL, NULL, 1, 1, 'errrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 3, 5, 'Open', 'Yes', '2021-10-31', NULL, 1, NULL),
(8, 'Jamuna Future park,Basundhara, Dhaka 1211', 10000, '11111.jpg', '22222.jpg', '33333.jpg', '44444.jpg', NULL, NULL, NULL, 1, 1, 'gsrggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 3, 5, 'Open', 'Yes', '2021-09-13', NULL, 8, NULL),
(9, 'Jamuna Future park,Basundhara, Dhaka 1211', 10000, '11111.jpg', '22222.jpg', '33333.jpg', '44444.jpg', NULL, NULL, NULL, 1, 1, 'gsrggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 3, 5, 'Open', 'Yes', '2021-09-28', NULL, 5, NULL),
(12, 'Jamuna Future park,Basundhara, Dhaka 1211', 10000, '11111.jpg', '22222.jpg', '33333.jpg', '44444.jpg', NULL, NULL, NULL, 1, 1, 'gsrggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggg', 3, 5, 'Open', 'Yes', '2021-11-07', NULL, 5, NULL),
(13, 'dvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvdvdf', 20000, '11111.jpg', '22222.jpg', '33333.jpg', '44444.jpg', NULL, NULL, NULL, 1, 1, 'dvfdgvfvfbffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffffff', 3, 5, 'Open', 'Yes', '2021-11-03', NULL, NULL, NULL),
(14, 'grergergergerg', 25000, '11111.jpg', '22222.jpg', '33333.jpg', '44444.jpg', NULL, NULL, NULL, 1, 1, 'tgertgergtergergre', 3, 5, 'Open', 'Yes', '2021-11-04', NULL, NULL, NULL),
(15, 'hjghggggggggggggggggggg', 25000, '11111.jpg', '22222.jpg', '33333.jpg', '44444.jpg', NULL, NULL, NULL, 1, 1, 'vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvhjgjkgjhghjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 3, 5, 'Open', 'Yes', '2021-11-09', NULL, NULL, NULL);

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
  `Payment_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apartment_owner`
--

INSERT INTO `apartment_owner` (`ID`, `First_name`, `Last_name`, `Username`, `Password`, `Phone`, `Email`, `Status`, `Picture`, `Gender`, `Address`, `Created_at`, `Updated_at`, `Payment_id`) VALUES
(1, 'manik', 'saha', 'manik3vdf33', '96e79218965eb72c92a549dd5a330112', '55555555555', 'manikffr@gmail.com', 'Open', '11111.jpg', 'Male', 'ffffffffffffffff', '2021-10-19 04:13:18', '2021-11-04 09:27:45', NULL),
(5, 'manik', 'saha', 'manikf333g', '96e79218965eb72c92a549dd5a330112', '55555555555', 'manir3wf54rk@gmail.com', 'Open', '1635343641.jpg', 'Male', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', '2021-10-26 07:00:00', '2021-10-30 05:42:23', NULL),
(8, 'manik', 'saha', 'manik333g', '96e79218965eb72c92a549dd5a330112', '55555555555', 'manir3w54rk@gmail.com', 'Open', '1635343641.jpg', 'Male', 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', '2021-10-26 07:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(20) NOT NULL,
  `Last_name` varchar(20) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Gender` varchar(7) NOT NULL,
  `Status` varchar(7) NOT NULL,
  `Address` text NOT NULL,
  `Picture` varchar(100) DEFAULT NULL,
  `Created_at` datetime NOT NULL,
  `Updated_at` datetime DEFAULT NULL,
  `Payment_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `First_name`, `Last_name`, `Username`, `Password`, `Email`, `Phone`, `Gender`, `Status`, `Address`, `Picture`, `Created_at`, `Updated_at`, `Payment_id`) VALUES
(1, 'manik', 'saha', 'manik', 'ea16f6597913ed751d4bd8f503ec4ff1', 'manik@gmail.com', '55555555555', 'Male', 'Open', 'gsgsdfgsdgfgdfgdfgfdb', NULL, '2021-10-31 00:00:00', NULL, NULL),
(2, 'manik', 'saha', 'manik', 'ea16f6597913ed751d4bd8f503ec4ff1', 'manik@gmail.com', '55555555555', 'Male', 'Open', 'gsgsdfgsdgfgdfgdfgfdb', NULL, '2021-10-31 00:00:00', NULL, NULL),
(3, 'manik', 'saha', 'manik', 'ea16f6597913ed751d4bd8f503ec4ff1', 'manik@gmail.com', '55555555555', 'Male', 'Open', 'gsgsdfgsdgfgdfgdfgfdb', NULL, '2021-10-31 00:00:00', NULL, NULL),
(4, 'manik', 'saha', 'manik', 'ea16f6597913ed751d4bd8f503ec4ff1', 'manik@gmail.com', '55555555555', 'Male', 'Open', 'gsgsdfgsdgfgdfgdfgfdb', NULL, '2021-10-31 00:00:00', NULL, NULL),
(5, 'manik', 'saha', 'manik', 'ea16f6597913ed751d4bd8f503ec4ff1', 'manik@gmail.com', '55555555555', 'Male', 'Open', 'gsgsdfgsdgfgdfgdfgfdb', NULL, '2021-10-31 00:00:00', NULL, NULL),
(6, 'manik', 'saha', 'manik', 'ea16f6597913ed751d4bd8f503ec4ff1', 'manik@gmail.com', '55555555555', 'Male', 'Open', 'gsgsdfgsdgfgdfgdfgfdb', NULL, '2021-10-31 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `password`, `created_at`, `updated_at`) VALUES
(1, 'ABC', 'abc@gmail.com', '01623649343', '665 shainbag tajgon dhaka', '$2y$10$Mh.0jq7hTmOZEZytxPoFu.h9fKRqdW0NrgsUDqL03Ih4nj30BID3a', '2021-11-05 10:48:12', '2021-11-06 04:35:07'),
(2, 'Shaon Ahmed', 'abcd@gmail.com', '01623649342', 'E block 2 number road,16 number home.Mirpur 1 Dhaka 1216', '$2y$10$ZUhxelKYRD9Szzcl6o7MYOqK.AThrO2GfwfrkO9fns1P5.EOID9Am', '2021-11-05 14:19:55', '2021-11-05 14:19:55'),
(3, 'Shaon', 'abcde@gmail.com', '01303552819', '665 shainbag tajgon dhaka', '$2y$10$UmgH/gIP1XNQSNGl6Dg1W.PNGdzc1dwpBeAU6.4.tAW0L2/nflm0O', '2021-11-05 14:20:37', '2021-11-05 14:20:37'),
(4, 'Manik Saha', 'manik@gmail.com', '01952309730', 'Jamuna Future park, Dhaka 1211', '$2y$10$GdZypu4bGyjPin9.lyYREecsuyre8yW/2rtdkn5tvajIahURovlSa', '2021-11-08 12:04:14', '2021-11-08 12:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_11_05_134714_create_customers_table', 2),
(5, '2021_11_06_113746_create_sellers_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `sellers`
--

CREATE TABLE `sellers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sellers`
--

INSERT INTO `sellers` (`id`, `name`, `email`, `phone`, `address`, `city`, `image`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Shaon Ahmed', 'shaon@gmail.com', '01623649341', '665 shainbag tajgon dhaka', 'dhaka', NULL, '$2y$10$yt/fPVLZvRSndxZZHpRea.2S2NaLyTAlvE8I3zlopOvJ/rvDeTCq2', '2021-11-06 05:45:25', '2021-11-06 05:45:25'),
(2, 'Shaon', 'abcf@gmail.com', '01505667781', '665 shainbag tajgon dhaka', 'dhaka', '746971636202278.jpg', '$2y$10$6FS1pARPkSEUnQmnUUGqZefu4mIgk.P17SQEaIPDgGtRkcb3QgMu2', '2021-11-06 06:37:59', '2021-11-06 06:37:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  ADD PRIMARY KEY (`apartment_ID`);

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

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
  MODIFY `apartment_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `apartment_owner`
--
ALTER TABLE `apartment_owner`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
