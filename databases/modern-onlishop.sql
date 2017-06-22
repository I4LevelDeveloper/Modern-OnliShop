-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2017 at 05:06 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `modern-onlishop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(60) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL,
  `type` varchar(6) NOT NULL,
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ordering`
--

CREATE TABLE `ordering` (
  `orderid` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total_price` float NOT NULL,
  `ordered_date` date NOT NULL,
  `received_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(11) NOT NULL,
  `pname` text NOT NULL,
  `price` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(100) NOT NULL,
  `arrived_date` date NOT NULL,
  `image1` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `price`, `quantity`, `description`, `category`, `arrived_date`, `image1`) VALUES
(32, 'Baby Soap 1', 23, 4, '', 'baby_soaps', '2017-06-02', '../images/1498147937.jpg'),
(31, 'Baby Wipe 9', 40, 5, '', 'baby_wipes', '2017-06-01', '../images/1498112540.jpg'),
(30, 'Baby Wipe 8', 32, 4, '', 'baby_wipes', '2017-06-01', '../images/1498112497.jpg'),
(29, 'Baby Wipe 7', 32, 5, '', 'baby_wipes', '2017-06-01', '../images/1498112461.jpg'),
(28, 'Baby Wipe 6', 24, 5, '', 'baby_wipes', '2017-06-01', '../images/1498112437.jpg'),
(27, 'Baby Wipe 5', 40, 5, '', 'baby_wipes', '2017-06-01', '../images/1498112409.jpg'),
(26, 'Baby Wipe 4', 23, 4, '', 'baby_wipes', '2017-06-01', '../images/1498112353.jpg'),
(25, 'Baby Wipe 3', 32, 4, '', 'baby_wipes', '2017-06-01', '../images/1498112319.jpg'),
(24, 'Baby Wipe 2', 21, 4, '', 'baby_wipes', '2017-06-01', '../images/1498112292.jpg'),
(33, 'Baby Soap 2', 32, 4, '', 'baby_soaps', '2017-06-02', '../images/1498147983.jpg'),
(34, 'Baby Soap 3', 31, 5, '', 'baby_soaps', '2017-06-02', '../images/1498148029.jpg'),
(35, 'Baby Soap 4', 32, 4, '', 'baby_soaps', '2017-06-02', '../images/1498148075.jpg'),
(36, 'Baby Soap 5', 34, 4, '', 'baby_soaps', '2017-06-02', '../images/1498148108.jpg'),
(37, 'Baby Soap 6', 21, 5, '', 'baby_soaps', '2017-06-02', '../images/1498148349.jpg'),
(38, 'Baby Soap 7', 32, 6, '', 'baby_soaps', '2017-06-02', '../images/1498148378.jpg'),
(39, 'Baby Soap 8', 32, 5, '', 'baby_soaps', '2017-06-02', '../images/1498148405.jpg'),
(40, 'Baby Soap 9', 23, 5, '', 'baby_soaps', '2017-06-02', '../images/1498148438.jpg'),
(41, 'Lotions and Oils 1', 23, 4, '', 'Lotion_and_oils', '2017-06-02', '../images/1498148696.jpg'),
(42, 'Lotions and Oils 2', 34, 4, '', 'Lotion_and_oils', '2017-06-02', '../images/1498148723.jpg'),
(43, 'Lotions and Oils 3', 21, 4, '', 'Lotion_and_oils', '2017-06-02', '../images/1498148752.jpg'),
(44, 'Lotions and Oils 4', 32, 32, '', 'Lotion_and_oils', '2017-06-02', '../images/1498148777.jpg'),
(45, 'Powder 1', 32, 5, '', 'powder', '2017-06-02', '../images/1498149008.jpg'),
(46, 'Powder 2', 42, 3, '', 'powder', '2017-06-02', '../images/1498149041.jpg'),
(47, 'Powder 3', 21, 23, '', 'powder', '2017-06-02', '../images/1498149070.jpg'),
(48, 'Powder 4', 32, 54, '', 'powder', '2017-06-02', '../images/1498149096.jpg'),
(49, 'Shampoo 1', 23, 23, '', 'shampoos', '2017-06-02', '../images/1498149243.jpg'),
(50, 'Shampoo 2', 23, 32, '', 'shampoos', '2017-06-02', '../images/1498149279.png'),
(51, 'Shampoo 3', 23, 32, '', 'shampoos', '2017-06-02', '../images/1498149308.jpg'),
(52, 'Shampoo 4', 32, 44, '', 'shampoos', '2017-06-02', '../images/1498149343.jpg'),
(53, 'Frock 1', 23, 3, '', 'frocks', '2017-06-02', '../images/1498149508.jpg'),
(54, 'Frock 2', 22, 22, '', 'frocks', '2017-06-02', '../images/1498149531.jpg'),
(55, 'Frock 3', 22, 22, '', 'frocks', '2017-06-02', '../images/1498149563.jpg'),
(56, 'Frock 4', 12, 223, '', 'frocks', '2017-06-02', '../images/1498149593.jpg'),
(57, 'Frock 5', 234, 33, '', 'frocks', '2017-06-02', '../images/1498149619.jpg'),
(58, 'Frock 6', 22, 223, '', 'frocks', '2017-06-02', '../images/1498149640.jpg'),
(59, 'Baby Walker 1', 123, 22, '', 'babywalker', '2017-06-03', '../images/1498149799.jpg'),
(60, 'Baby Walker 2', 22, 23, '', 'babywalker', '2017-06-03', '../images/1498149826.jpg'),
(61, 'Baby Walker 3', 201, 34, '', 'babywalker', '2017-06-03', '../images/1498149858.jpg'),
(62, 'Baby Walker 6', 220, 22, '', 'babywalker', '2017-06-03', '../images/1498149933.jpg'),
(63, 'Baby Walker 4', 204, 223, '', 'babywalker', '2017-06-03', '../images/1498149966.jpg'),
(64, 'Baby Walker 5', 234, 22, '', 'babywalker', '2017-06-03', '../images/1498149991.jpg'),
(65, 'Kid Top Wear 1', 250, 33, '', 'topwear', '2017-06-03', '../images/1498150150.jpg'),
(66, 'Kid Top Wear 2', 240, 10, '', 'topwear', '2017-06-03', '../images/1498150187.jpg'),
(67, 'Kid Top Wear 3', 200, 223, '', 'topwear', '2017-06-03', '../images/1498150212.jpg'),
(68, 'Kid Top Wear 4', 234, 223, '', 'topwear', '2017-06-03', '../images/1498150247.jpg'),
(69, 'Kid Top Wear 5', 234, 22, '', 'topwear', '2017-06-03', '../images/1498150292.jpg'),
(70, 'Kid Top Wear 6', 200, 223, '', 'topwear', '2017-06-03', '../images/1498150322.jpg'),
(71, 'Bag 1', 32, 34, '', 'bags', '2017-06-04', '../images/1498150525.jpg'),
(72, 'Bag 2', 22, 22, '', 'bags', '2017-06-04', '../images/1498150559.jpg'),
(73, 'Bag 3', 23, 3, '', 'bags', '2017-06-04', '../images/1498150589.jpg'),
(74, 'Bag 4', 23, 33, '', 'bags', '2017-06-04', '../images/1498150620.jpg'),
(75, 'Bag 5', 22, 3, '', 'baby_wipes', '2017-06-04', '../images/1498150646.jpg'),
(76, 'Bag 6', 22, 22, '', 'bags', '2017-06-04', '../images/1498150679.jpg'),
(77, 'Swimming 1', 35, 22, '', 'swimming', '2017-06-04', '../images/1498150837.jpg'),
(78, 'Swimming 2', 22, 22, '', 'swimming', '2017-06-04', '../images/1498150865.jpg'),
(79, 'Swimming 3', 22, 22, '', 'swimming', '2017-06-04', '../images/1498150894.jpg'),
(80, 'Swimming 4', 22, 22, '', 'swimming', '2017-06-04', '../images/1498150933.jpg'),
(81, 'Swimming 5', 23, 33, '', 'swimming', '2017-06-04', '../images/1498150960.jpg'),
(82, 'Swimming 6', 123, 33, '', 'swimming', '2017-06-04', '../images/1498150991.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `special`
--

CREATE TABLE `special` (
  `pid` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `promotion_date` date NOT NULL,
  `end_date` date NOT NULL,
  `other` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `email`, `password`) VALUES
(1, 'ke', 'seyha', 'keseyha11@gmail.com', 'etuXzEA5oq2oI'),
(2, 'chea', 'liheang', 'chealihean@gmail.com', 'etCR7roNmlx02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `ordering`
--
ALTER TABLE `ordering`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ordering`
--
ALTER TABLE `ordering`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

