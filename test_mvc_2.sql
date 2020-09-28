-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2020 at 11:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_mvc_2`
--

-- --------------------------------------------------------

--
-- Table structure for table `bed_configuration`
--

CREATE TABLE `bed_configuration` (
  `configuration_id` int(11) NOT NULL,
  `no_of_guests` int(11) NOT NULL,
  `no_of_bedrooms` int(11) NOT NULL,
  `no_of_bathrooms` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `owner_details`
--

CREATE TABLE `owner_details` (
  `owner_id` int(11) NOT NULL,
  `owner_name` varchar(100) NOT NULL,
  `promo_code` varchar(100) NOT NULL,
  `property_type` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `property_detail`
--

CREATE TABLE `property_detail` (
  `id` int(11) NOT NULL,
  `country_list` varchar(100) NOT NULL,
  `street_address` varchar(1000) NOT NULL,
  `apt_suite` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `post_code` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bed_configuration`
--
ALTER TABLE `bed_configuration`
  ADD PRIMARY KEY (`configuration_id`),
  ADD KEY `bed_configuration_ibfk_1` (`owner_id`);

--
-- Indexes for table `owner_details`
--
ALTER TABLE `owner_details`
  ADD PRIMARY KEY (`owner_id`);

--
-- Indexes for table `property_detail`
--
ALTER TABLE `property_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_id` (`owner_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bed_configuration`
--
ALTER TABLE `bed_configuration`
  MODIFY `configuration_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `owner_details`
--
ALTER TABLE `owner_details`
  MODIFY `owner_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_detail`
--
ALTER TABLE `property_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bed_configuration`
--
ALTER TABLE `bed_configuration`
  ADD CONSTRAINT `bed_configuration_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner_details` (`owner_id`);

--
-- Constraints for table `property_detail`
--
ALTER TABLE `property_detail`
  ADD CONSTRAINT `property_detail_ibfk_1` FOREIGN KEY (`owner_id`) REFERENCES `owner_details` (`owner_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
