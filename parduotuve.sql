-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2019 at 02:01 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parduotuve`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 COLLATE utf8_lithuanian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`) VALUES
(1, 'Marškiniai', NULL),
(2, 'Kelnės', NULL),
(3, 'Batai', NULL),
(4, 'Kepures', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`id`, `name`, `description`) VALUES
(1, 'General', '');

-- --------------------------------------------------------

--
-- Table structure for table `forum_posts`
--

CREATE TABLE `forum_posts` (
  `id` int(11) NOT NULL,
  `forum` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_lithuanian_ci NOT NULL,
  `message` text COLLATE utf8_lithuanian_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_lithuanian_ci;

--
-- Dumping data for table `forum_posts`
--

INSERT INTO `forum_posts` (`id`, `forum`, `user`, `name`, `message`, `date`) VALUES
(1, 1, 1, 'Testing...', 'Hello World!', '2019-04-27 23:02:18'),
(2, 1, 2, '321LMAO <?php echo 123; ?>', 'lasdadsadas\r\n<br>\r\n<br>\r\n<br>\r\n<br>', '2019-04-28 00:16:11'),
(3, 1, 1, 'dbasbdasb', 'bas', '2019-04-29 23:48:58'),
(4, 1, 2, 'hghh', 'fghfghfhfghf', '2019-04-29 23:49:21');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` tinyint(1) NOT NULL DEFAULT '0',
  `is_recommended` tinyint(1) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `image`, `description`, `is_new`, `is_recommended`, `status`) VALUES
(1, 'Timberland', 3, 123456789, 99.9, 100, 'Timberland', 'timberland-black.jpg', '', 1, 1, 1),
(2, 'AXC Black', 2, 321456987, 0.99, 1337, 'Lmao', 'axc-black.jpg', 'Good pants?', 1, 0, 1),
(4, 'AMI', 1, 456789123, 4.99, 100, 'AMI', 'ami-mens-plain-white-shirt-regular-fit-poplin-formal-shirt.jpg', 'Mens Plain White Shirt, Regular Fit Poplin Formal Shirt', 0, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` tinyint(1) NOT NULL DEFAULT '0',
  `register_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `admin`, `register_date`) VALUES
(1, '123', '', '123', 1, '2019-04-15 20:27:26'),
(2, '321', '', '321', 0, '2019-04-16 06:04:23'),
(3, '4444444', 'asdas@asd', 'test', 0, '2019-04-29 22:58:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_users_id` (`user`),
  ADD KEY `fk_forum_forums_id` (`forum`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_category_id_categories_id` (`category_id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `forum_posts`
--
ALTER TABLE `forum_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `forum_posts`
--
ALTER TABLE `forum_posts`
  ADD CONSTRAINT `fk_forum_forums_id` FOREIGN KEY (`forum`) REFERENCES `forums` (`id`),
  ADD CONSTRAINT `fk_user_users_id` FOREIGN KEY (`user`) REFERENCES `users` (`id`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_category_id_categories_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
