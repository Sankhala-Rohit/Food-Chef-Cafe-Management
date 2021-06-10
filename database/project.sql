-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2021 at 11:42 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(7) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`) VALUES
(1, '<p>Itâ€™s just a moment in time â€“ just one hand reaching over the counter to present a cup to another outstretched hand.</p><p>But itâ€™s a connection.</p><p>We make sure everything we do honors that connection â€“ from our commitment to the <a href=\"http://www.starbucks.in/coffee/ethical-sourcing/coffee-quality\">highest quality coffee and food</a>, to the way we engage with our customers and communities to do business responsibly.</p><p>&nbsp;</p><p>An all day dining establishment with a decidedly Mediterranean and Indian kitchen. We also do great coffees, teas, freshly made desserts and breads. Seating is both indoors as well as outdoors. The food is great, while the atmosphere is super chill and friendly.</p><p>Thank you for friendly with us</p><p><br>&nbsp;</p>');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(5) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`id`, `title`, `description`, `image`) VALUES
(10, 'Welcome To Our Cafe', 'Cafe For Fun', '1570611540_image_home1.jpg'),
(11, 'Welcom To Our Cafe', 'Cafe For Fun', '1570611154_image_home4.png');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(7) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobileno`, `msg`) VALUES
(3, 'hello', 'hello@gmail.com', '767866', 'dkj sj '),
(4, 'vivek', 'modi@gmail.com', '7687897', 'sdoi'),
(5, 'vivek', 'modiv23@gmail.com', '78787978', 'dsj dsj '),
(6, 'vinita soni', 'vinitasoni@gmail.com', '9393939', 'ldslksdf'),
(7, 'rohit sankhla', 'rohitsankhla199@gmail.com', '9393993', 'klsjdlfkjsd');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(7) NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `title`, `description`, `image`) VALUES
(6, 'Burger ', 'this is burger', '1570623252_image_burger-cropped.jpg'),
(7, 'Noodels', 'this is noodels', '1570623276_image_noodels.jpg'),
(8, 'French Fries', 'this is french fries', '1570623304_image_secrets-giving-day-old-french-fries-delicious-second-life.1280x600.jpg'),
(9, 'Veg Roll', 'This is Veg roll', '1570623336_image_roll.jpeg'),
(10, 'Hot Coffe', 'this is hot coffe', '1570637028_image_coffe1.jpeg'),
(11, 'Cold Coffe', 'this is Cold Coffe', '1570637053_image_coffe2.jpg'),
(12, 'Coke', 'Coke with ice-cream', '1570637264_image_coke.jpg'),
(13, 'Mango Shake', 'This is Mango Shake', '1570637375_image_juice2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(2) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `photo_gallary`
--

CREATE TABLE `photo_gallary` (
  `id` int(5) NOT NULL,
  `title` varchar(200) DEFAULT NULL,
  `datee` date DEFAULT NULL,
  `groupp` text DEFAULT NULL,
  `image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo_gallary`
--

INSERT INTO `photo_gallary` (`id`, `title`, `datee`, `groupp`, `image`) VALUES
(2, 'axixa ', '2012-10-26', 'first', '1566543580_Photo_gallary_56436494_2228442843861169_7936810056442445824_n.jpg'),
(4, 'asdf', '2021-06-03', 'sdf', '1622977473_Photo_gallary_Iron-Man-Forum-Avatar-Profile-Photo-ID-131347-Avatar-.jpg'),
(5, 'rohit', '2021-06-25', 'my name is rohit', '1622981029_Photo_gallary_g0bsFL.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(7) NOT NULL,
  `icon` text NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `description`) VALUES
(13, 'fab fa-accessible-icon', 'Good Food And Fast Services'),
(14, 'fa fa-accessible-icon', 'Home Delivery Available'),
(15, 'fa fa-accessible-icon', 'Free Delivery ');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(5) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `title`, `photo`) VALUES
(5, 'Lisaean Eddy', 'Co-ordinator', '1570637708_photo_team4.jpg'),
(6, 'Edward Cren', 'Manager', '1570637579_photo_team3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo_gallary`
--
ALTER TABLE `photo_gallary`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `photo_gallary`
--
ALTER TABLE `photo_gallary`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
