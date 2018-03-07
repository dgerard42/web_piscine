-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 26, 2018 at 04:02 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.1
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
--
-- Database: `main`
--
-- --------------------------------------------------------
--
-- Table structure for table `items`
--
CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `des` text NOT NULL,
  `price` int(11) NOT NULL,
  `img` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
--
-- Dumping data for table `items`
--
INSERT INTO `items` (`id`, `name`, `des`, `price`, `img`, `cat`) VALUES
(4, 'nose', 'djhdsjisa sadjhbdhj sahbsa asdbh ccchxcz cxzhcxxz uysa hzcxbzh xycbczx zcbå', 2, '/img/nose.jpg', 'neural'),
(6, 'spine', 'djhdsjisa sadjhbdhj sahbsa asdbh ccchxcz cxzhcxxz uysa hzcxbzh xycbczx zcbå', 2, '/img/spine.jpg', 'neural'),
(7, 'brain', 'djhdsjisa sadjhbdhj sahbsa asdbh ccchxcz cxzhcxxz uysa hzcxbzh xycbczx zcbå', 2, '/img/brain.jpg', 'neural'),
(8, 'left kidney', 'djhdsjisa sadjhbdhj sahbsa asdbh ccchxcz cxzhcxxz uysa hzcxbzh xycbczx zcbå', 2, '/img/left_kidney.jpg', 'nephrotic'),
(9, 'right kidney', 'djhdsjisa sadjhbdhj sahbsa asdbh ccchxcz cxzhcxxz uysa hzcxbzh xycbczx zcbå', 2, '/img/right_kidney.jpg', 'nephrotic'),
(10, 'blood', 'djhdsjisa sadjhbdhj sahbsa asdbh ccchxcz cxzhcxxz uysa hzcxbzh xycbczx zcbå', 2, '/img/blood.jpg', 'nephrotic'),
(11, 'heart', 'djhdsjisa sadjhbdhj sahbsa asdbh ccchxcz cxzhcxxz uysa hzcxbzh xycbczx zcbå', 2, '/img/heart.jpg', 'cardiorespiratory'),
(12, 'aorta', 'djhdsjisa sadjhbdhj sahbsa asdbh ccchxcz cxzhcxxz uysa hzcxbzh xycbczx zcbå', 2, '/img/aorta.jpg', 'cardiorespiratory'),
(13, 'lungs', 'djhdsjisa sadjhbdhj sahbsa asdbh ccchxcz cxzhcxxz uysa hzcxbzh xycbczx zcbå', 2, '/img/lungs.jpg', 'cardiorespiratory'),
(14, 'right leg', 'djhdsjisa sadjhbdhj sahbsa asdbh ccchxcz cxzhcxxz uysa hzcxbzh xycbczx zcbå', 2, '/img/right_leg.jpg', 'limbs'),
(15, 'left arm', 'djhdsjisa sadjhbdhj sahbsa asdbh ccchxcz cxzhcxxz uysa hzcxbzh xycbczx zcbå', 2, '/img/left_arm.jpg', 'limbs'),
(16, 'baby limbs', 'djhdsjisa sadjhbdhj sahbsa asdbh ccchxcz cxzhcxxz uysa hzcxbzh xycbczx zcbå', 2, '/img/baby_limbs.jpg', 'limbs'),
(17, 'thyroid', 'djhdsjisa sadjhbdhj sahbsa asdbh ccchxcz cxzhcxxz uysa hzcxbzh xycbczx zcbå', 2, '/img/thyroid.jpg', 'endocrine glands'),
(18, 'pancreas', 'djhdsjisa sadjhbdhj sahbsa asdbh ccchxcz cxzhcxxz uysa hzcxbzh xycbczx zcbå', 2, '/img/pancreas.jpg', 'endocrine glands'),
(19, 'adrenal gland', 'djhdsjisa sadjhbdhj sahbsa asdbh ccchxcz cxzhcxxz uysa hzcxbzh xycbczx zcbå', 2, '/img/andrenal_gland.jpg', 'endocrine glands');
--
-- Indexes for dumped tables
--
--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);
--
-- AUTO_INCREMENT for dumped tables
--
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
