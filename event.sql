-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 13, 2018 at 08:08 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event`
--

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` int(11) NOT NULL,
  `ename` varchar(50) NOT NULL,
  `venue` varchar(50) NOT NULL,
  `gold` int(11) NOT NULL,
  `platenium` int(11) NOT NULL,
  `sil` int(11) NOT NULL,
  `datei` varchar(50) NOT NULL,
  `des` varchar(200) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `state` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `ename`, `venue`, `gold`, `platenium`, `sil`, `datei`, `des`, `pic`, `state`) VALUES
(1, 'ranjan', 'dilshad', 30, 30, 30, '3 May', 'fgjhhjkklj', 'Doe.jpg', 5),
(2, 'shakruddin', 'Delhi', 10, 10, 10, '4 May', 'sfdfsjj', 'Doe.jpg', 1),
(3, 'navgurukul', 'delhi', 30, 20, 19, '12 Dec', 'hegfhsgjhgjhew', '3.jpg', 1),
(4, 'Rahul', 'sex', 30, 20, 30, '4 June', '', '15655.jpg', 0),
(5, 'Mothers Day', 'Dharamshala', 30, 30, 30, '4 May', '', '15655.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `tid` int(11) NOT NULL,
  `bid` int(11) NOT NULL,
  `uid` varchar(50) NOT NULL,
  `t_type` varchar(10) DEFAULT NULL,
  `state` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`tid`, `bid`, `uid`, `t_type`, `state`) VALUES
(53, 1, 'badal1', 'gold', 1),
(54, 1, 'badal1', 'gold', 0),
(55, 1, 'ranjan', 'gold', 0),
(56, 1, 'sonu', 'platenium', 0),
(57, 2, 'admin', 'gold', 1),
(58, 1, 'admin', 'platenium', 0),
(59, 3, 'kumar', 'sil', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `credit` int(11) NOT NULL DEFAULT '0',
  `email` char(100) NOT NULL,
  `utype` varchar(20) NOT NULL,
  `pic` varchar(50) NOT NULL,
  `did` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `name`, `password`, `credit`, `email`, `utype`, `pic`, `did`) VALUES
('admin', 'admin', 'admino', 0, 'a@g.com', 'admin', '', 0),
('badal1', 'Badal Mishra', 'badalo', 0, 'b@g.com', '', '22728812_153266948744051_4303661657153481865_n.jpg', 1),
('kumar', 'kumar', '12345', 0, 'ranjan17@navgurukul.org', '', '15655.jpg', 0),
('ranjan', 'ranjan', '12345', 0, 'ranjan17@navgurukul.org', '', 'Screenshot from 2018-03-31 10-22-54.png', 0),
('sonu', 'sonu', '1234', 0, 's@g.com', '', 'Screenshot from 2018-04-08 16-18-25.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`),
  ADD UNIQUE KEY `bookid` (`eventid`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `tid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
