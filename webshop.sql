-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2023 at 08:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `label`) VALUES
(1, 'Teszt'),
(2, 'Igen');

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `in_cart_items`
--

CREATE TABLE `in_cart_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `in_cart_items`
--

INSERT INTO `in_cart_items` (`id`, `user_id`, `item_id`, `qty`) VALUES
(1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `stock` varchar(255) NOT NULL,
  `cover_img` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `description`, `price`, `stock`, `cover_img`, `images`, `category_id`) VALUES
(1, 'asd', 'asd', 2, '2', '', '', 0),
(4, 'asd', 'asd', 2, '5', '', '', 0),
(5, 'asd', 'asd', 123, '123', '', '', 1),
(6, 'asd', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 123, '13', '', '', 1),
(7, 'Sali fasza', 'adsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkkicsinekiéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhlokéadsgkhfgjkhrlotdkéhlkéfhloké', 123, '50', '', 'uploads/photos/fc62b1ywer9ztn_.jpg,uploads/photos/7r1_i82kqhgxtu6.JPG,uploads/photos/pk64o7awlxid_n0.JPG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `img` varchar(255) NOT NULL,
  `login_session_key` varchar(255) DEFAULT NULL,
  `email_status` varchar(255) DEFAULT NULL,
  `password_expire_date` datetime DEFAULT '2024-03-12 00:00:00',
  `password_reset_key` varchar(255) DEFAULT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `img`, `login_session_key`, `email_status`, `password_expire_date`, `password_reset_key`, `role`) VALUES
(1, 'Admin', 'admin', 'mtszita2006@gmail.com', '$2y$10$y/VBtsth/7jNXiRFOx1Rregg7qvslhA6xsEyG9Dch82qsGsAChkPa', 'http://localhost/webshopdashboard/uploads/files/ufl2e1y8ik7oawh.png', NULL, 'verified', '2023-12-31 13:20:16', '33b796e0be98f2460c675895ccdbb8ba', 'admin'),
(2, 'Felhasználó', 'user123', 'mtszita24@gmail.com', '$2y$10$.LeQTy.g69MxUb18aRJRxe3N76yrt.wLyd6mMzpYgs2WY595dSPom', '', NULL, 'verified', '2024-03-12 00:00:00', NULL, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in_cart_items`
--
ALTER TABLE `in_cart_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `in_cart_items`
--
ALTER TABLE `in_cart_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
