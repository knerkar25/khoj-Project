-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2021 at 01:17 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kartik`
--

-- --------------------------------------------------------

--
-- Table structure for table `pwd`
--

CREATE TABLE `pwd` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` enum('MALE','FEMALE','OTHERS') NOT NULL DEFAULT 'MALE',
  `age` varchar(255) NOT NULL,
  `birth_date` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `occupation` varchar(255) NOT NULL,
  `yearly_salary` varchar(255) NOT NULL,
  `ration_card` varchar(255) NOT NULL,
  `aadhar_card` varchar(255) NOT NULL,
  `age_disable_certificate` varchar(255) NOT NULL,
  `diseases` varchar(255) NOT NULL,
  `pwd_types` enum('BLINDNESS','LOW_VISION','CEREBRAL_PALSY','HEARING_IMPAIRMENT','LEPROSY_CURED_PERSON','LOCOMOTOR_DISABILITY','MENTAL_ILLNESS','LEARNING_DISABILITIES') NOT NULL DEFAULT 'BLINDNESS',
  `bank_account` enum('YES','NO') NOT NULL DEFAULT 'YES',
  `account_number` varchar(255) DEFAULT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pwd`
--

INSERT INTO `pwd` (`id`, `name`, `gender`, `age`, `birth_date`, `address`, `mobile`, `education`, `occupation`, `yearly_salary`, `ration_card`, `aadhar_card`, `age_disable_certificate`, `diseases`, `pwd_types`, `bank_account`, `account_number`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
('61bf205d-17ee-4124-b4ca-f896f0083983', 'jrbk', 'MALE', '12', '2021-04-21', 'lj', '1234567890', 'ljb', 'kj', 'vklj', 'bl', 'jb', '10', 'kb', 'BLINDNESS', 'YES', '1234567890', 1, 0, '2021-04-16 11:07:04', '2021-04-16 11:07:04');

-- --------------------------------------------------------

--
-- Table structure for table `scheme`
--

CREATE TABLE `scheme` (
  `id` char(36) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image_value` varchar(255) NOT NULL,
  `image_dir` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `scheme`
--

INSERT INTO `scheme` (`id`, `name`, `image_value`, `image_dir`, `description`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
('eae17843-4eef-4271-9ea0-63fc47df77dd', 'TUITION VIEW SCHEME NEW NEWENWEKN', 'download.jpg', 'webroot\\files\\Scheme\\image_value\\', 'LOREM LOREM LROEMLJFBjadblajdlajdbgladjvbaldjvbldva advjsc sj ass jS Jsl SD LJs  lj Ljs LS slj l jS', 1, 0, '2021-04-14 09:31:36', '2021-04-14 09:41:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` char(36) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('DIRECTOR','COORDINATOR','FIELDMOBILZER','VILLAGELEADER','CEO') DEFAULT 'DIRECTOR',
  `is_active` tinyint(4) NOT NULL DEFAULT 1,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mobile`, `username`, `password`, `role`, `is_active`, `is_deleted`, `created_at`, `updated_at`) VALUES
('1dd29341-dc29-4363-8ec6-10454ca123bf', 'KARTIK', 'NERKER', '', 'KARTIk001', '$2y$10$KikPtsHFifBPZt30z0RzT.ZHjryT17CL/Oy1MixpFMcxNK6mg/9TG', 'CEO', 1, 0, '2021-04-14 07:06:08', '2021-04-14 07:06:08'),
('20ea9ef2-acc0-4cd6-bb79-2be30c17b227', 'HARSHIL', 'WALIA', '', 'HARSHIL001', '$2y$10$68mcCdvhOQx6mslb8CJd4O8iyKJXxshe.niBE14v8yPr2cjPbUFfu', 'CEO', 1, 0, '2021-04-12 18:42:33', '2021-04-12 18:42:33'),
('f82ceed8-44f9-42ea-a473-a89220d32256', 'SANKET', 'PARMAR', '', 'SANKET', '$2y$10$IrUasMoMO3/7GhUDvKbPOebu5At0hkrrXiAmAUH04/bKlpHl/QRrq', 'CEO', 1, 0, '2021-03-30 09:51:12', '2021-03-30 09:51:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pwd`
--
ALTER TABLE `pwd`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scheme`
--
ALTER TABLE `scheme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
