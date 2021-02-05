-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2019 at 09:06 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `deerfieldlodge`
--

-- --------------------------------------------------------

--
-- Table structure for table `availableroom`
--

CREATE TABLE `availableroom` (
  `id` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `imagename` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `availableroom`
--

INSERT INTO `availableroom` (`id`, `roomno`, `price`, `description`, `imagename`) VALUES
(1, 2, 240, 'sjdsdksds', 'room4.jpeg'),
(2, 3, 600, 'erlekrekrkelrelkrlkererkle', 'room1.jpeg'),
(3, 4, 200, 'This is a high Qualified Room <br>You can get high facilities with this room <br>wow', 'room4.jpeg'),
(4, 5, 200, 'jasjakskasjasajksjaskasjaksjajskajskajksak', 'room5.jpeg'),
(5, 6, 800, 'its  a best 3 seated room.', 'room6.jpeg'),
(6, 7, 900, 'ndfdnfnmdfdm', 'room7.jpeg'),
(7, 8, 345, 'ughjghj', 'waterfall2.jpeg'),
(8, 9, 900, 'test room', 'SystemAnalyst.png');

-- --------------------------------------------------------

--
-- Table structure for table `backenduser`
--

CREATE TABLE `backenduser` (
  `id` int(11) NOT NULL,
  `username` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `backenduser`
--

INSERT INTO `backenduser` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookedtable`
--

CREATE TABLE `bookedtable` (
  `id` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `booktime` varchar(256) NOT NULL,
  `bookendtime` varchar(256) NOT NULL,
  `bookenddate` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookedtable`
--

INSERT INTO `bookedtable` (`id`, `roomno`, `userid`, `booktime`, `bookendtime`, `bookenddate`) VALUES
(7, 2, 4, '2018/07/22-07:21:57am', '2018/07/23-07:21:57am', ''),
(9, 4, 4, '2018/07/23-07:56:37am', '2018/07/24-07:56:37am', ''),
(10, 3, 2, '2018/07/22-01:44:36pm', '2018/07/23-01:44:36pm', ''),
(11, 2, 6, '2018/09/27-07:36:11am', '2018/09/28-07:36:11am', ''),
(12, 2, 8, '2019/01/03-08:42:51pm', '2019/01/4-08:42:51pm', ''),
(13, 4, 2, '2019/01/04-02:05:55pm', '2019/01/5-02:05:55pm', ''),
(14, 3, 10, '2019/01/04-02:17:06pm', '2019/01/5-02:17:06pm', '');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `imagename` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `imagename`) VALUES
(5, 'image1.jpg'),
(6, 'image2.jpg'),
(7, 'image3.jpg'),
(8, 'image4.jpg'),
(9, 'room1.jpeg'),
(10, 'room2.jpeg'),
(11, 'room3.jpeg'),
(12, 'room4.jpeg'),
(13, 'room5.jpeg'),
(14, 'room6.jpeg'),
(15, 'room7.jpeg'),
(16, 'room8.jpeg'),
(17, 'room9.jpeg'),
(18, 'room10.jpeg'),
(19, 'room11.jpeg'),
(20, 'room12.jpeg'),
(21, 'swimmingpool.jpeg'),
(22, 'swimmingpool1.jpeg'),
(23, 'swimmingpool2.jpeg'),
(24, 'waterfall.jpeg'),
(25, 'waterfall1.jpeg'),
(27, 'waterfall2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `signup_table`
--

CREATE TABLE `signup_table` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup_table`
--

INSERT INTO `signup_table` (`id`, `name`, `email`, `password`, `address`) VALUES
(1, 'Ram Poudel', 'hawa@gmail.com', '1234', ''),
(2, 'kushal', 'deep@gmail.com', '1234', ''),
(3, 'Karan Tamang', 'karan@gmail.com', '1234', ''),
(4, 'Abhin Acharya', 'abhin.acharya@gmail.com', '1234', ''),
(5, 'Rubina', 'r@test.com', '1234', ''),
(6, 'kritam', 'chassey@gmail.com', '1234567', ''),
(7, 'Milan', 'mila@test.com', '1234567', ''),
(8, 'Abhin Acharya', 'abc@test.com', 'test1234', ''),
(9, 'hari sharma', 'h@test.com', 'test1234', '');

-- --------------------------------------------------------

--
-- Table structure for table `specialevent`
--

CREATE TABLE `specialevent` (
  `id` int(11) NOT NULL,
  `eventname` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `imagename` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `specialevent`
--

INSERT INTO `specialevent` (`id`, `eventname`, `location`, `description`, `imagename`) VALUES
(2, 'sdjsb', 'shdjsh', 'hdwejhjw', 'image1.jpg'),
(6, 'sdsnmd', 'nsdnmsn', 'sndsmdnsm', 'waterfall2.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `usersubscription`
--

CREATE TABLE `usersubscription` (
  `id` int(11) NOT NULL,
  `name` varchar(256) NOT NULL,
  `email` varchar(256) NOT NULL,
  `feedback` varchar(800) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usersubscription`
--

INSERT INTO `usersubscription` (`id`, `name`, `email`, `feedback`) VALUES
(5, 'kushal', 'kusey@gmail.com', 'dhsjdshjd'),
(6, 'nnm', 'abc@test.com', 'jjkjjkj'),
(7, 'Ram Sharma', 'ram@test.com', 'sdmsdsdmdsdnsdns');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availableroom`
--
ALTER TABLE `availableroom`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `backenduser`
--
ALTER TABLE `backenduser`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookedtable`
--
ALTER TABLE `bookedtable`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signup_table`
--
ALTER TABLE `signup_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specialevent`
--
ALTER TABLE `specialevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usersubscription`
--
ALTER TABLE `usersubscription`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availableroom`
--
ALTER TABLE `availableroom`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `backenduser`
--
ALTER TABLE `backenduser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookedtable`
--
ALTER TABLE `bookedtable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `signup_table`
--
ALTER TABLE `signup_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `specialevent`
--
ALTER TABLE `specialevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `usersubscription`
--
ALTER TABLE `usersubscription`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
