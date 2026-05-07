-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2026 at 07:20 AM
-- Server version: 11.8.6-MariaDB-log
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u381641708_fathcreative`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `type` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `username`, `password`, `type`, `created_at`, `updated_at`) VALUES
(1, 'admin@fathcreative.com', '$2y$10$9xHYfftvP0n/dpObpPKc4uhB1qnnDaNfkDPsaZ9gmZ.CzASmNUT66', 1, '2026-01-12 13:06:57', '2026-01-12 13:06:57');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blog_title` text NOT NULL,
  `blog_description` text DEFAULT NULL,
  `blog_details` text DEFAULT NULL,
  `blog_image` varchar(225) DEFAULT NULL,
  `blog_date` date DEFAULT NULL,
  `blog_location` varchar(225) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `sort_order` int(11) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_title`, `blog_description`, `blog_details`, `blog_image`, `blog_date`, `blog_location`, `status`, `sort_order`, `created_at`, `updated_at`) VALUES
(1, 'Ezdihar Real Estate - Cityscape Global 2025', '<p>Ezdihar Real Estate showcased its latest developments at Cityscape Global 2025, presenting innovative residential and commercial projects designed for modern living.&nbsp;</p>', '<p>Ezdihar Real Estate showcased its latest developments at Cityscape Global 2025, presenting innovative residential and commercial projects designed for modern living. The exhibition space was crafted to reflect the brand’s vision, combining elegant design with engaging visual elements to attract investors and visitors. The participation provided an excellent platform to highlight key offerings, build strong industry connections, and reinforce Ezdihar’s presence in the real estate market.</p>', '1773836048_ezdihar.jpeg', '0000-00-00', NULL, 0, 0, '2026-03-18 12:14:08', '2026-03-18 12:14:08'),
(2, 'Rilastil &  Bioclin - SAAM expo 2025', '<p>Rilastil and Bioclin showcased their advanced skincare and dermatological solutions at SAAM Expo 2025, creating a refined and engaging brand presence.</p>', '<p>Rilastil and Bioclin showcased their advanced skincare and dermatological solutions at SAAM Expo 2025, creating a refined and engaging brand presence. The booth was designed to reflect the brands’ clinical expertise and premium positioning, featuring clean aesthetics, product displays, and interactive elements. The exhibition provided an ideal platform to connect with industry professionals, highlight product benefits, and strengthen brand visibility within the healthcare and skincare segment.</p>', '1773836428_rilastil.jpeg', '2026-03-04', 'Dubai', 0, 0, '2026-03-18 12:20:28', '2026-03-18 12:20:28');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(225) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
