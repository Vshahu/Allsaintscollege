-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2019 at 07:26 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `allsaintscollege`
--

-- --------------------------------------------------------

--
-- Table structure for table `asc_account`
--

CREATE TABLE `asc_account` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` bigint(16) NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_account`
--

INSERT INTO `asc_account` (`id`, `name`, `email`, `mobile`, `image`, `date`) VALUES
(5, 'aaa', 'vash.ali13041994@gmail.com', 8787295837, 'IMG_20170303_0915411.jpg', '2019-04-28 07:24:13'),
(6, 'shubham', 'tosankalpgupta@hotmail.com', 8787295837, 'round1.jpg', '2019-05-22 16:04:41');

-- --------------------------------------------------------

--
-- Table structure for table `asc_calender`
--

CREATE TABLE `asc_calender` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `eventdetails` text NOT NULL,
  `event_date` date NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_calender`
--

INSERT INTO `asc_calender` (`id`, `title`, `eventdetails`, `event_date`, `date`) VALUES
(1, '', 'EASTER BREAK Check-Out from 12:30 pm to 3:00 pm (Compulsory)', '2019-04-18', '2019-04-18 17:57:12'),
(2, '', 'EASTER BREAK Check-Out from 12:30 pm to 3:00 pm (Compulsory)	', '2019-04-23', '2019-04-23 16:51:53'),
(4, '', 'event2', '2019-04-25', '2019-04-24 16:18:48'),
(5, '', 'EASTER BREAK Check-Out from 12:30 pm to 3:00 pm (Compulsory)	EASTER BREAK Check-Out from 12:30 pm to 3:00 pm (Compulsory)	EASTER BREAK Check-Out from 12:30 pm to 3:00 pm (Compulsory)	EASTER BREAK Check-Out from 12:30 pm to 3:00 pm (Compulsory)	EASTER BREAK Check-Out from 12:30 pm to 3:00 pm (Compulsory)	EASTER BREAK Check-Out from 12:30 pm to 3:00 pm (Compulsory)	EASTER BREAK Check-Out from 12:30 pm to 3:00 pm (Compulsory)	', '2019-05-10', '2019-04-27 16:40:46');

-- --------------------------------------------------------

--
-- Table structure for table `asc_collegehouses`
--

CREATE TABLE `asc_collegehouses` (
  `id` int(11) NOT NULL,
  `imgName` varchar(50) NOT NULL,
  `imgVisible` tinyint(4) NOT NULL DEFAULT '1',
  `sliderOrder` tinyint(4) NOT NULL,
  `entryDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_collegehouses`
--

INSERT INTO `asc_collegehouses` (`id`, `imgName`, `imgVisible`, `sliderOrder`, `entryDate`) VALUES
(1, 'COLLEGEHOUSES1.png', 1, 1, '2019-04-17 15:22:10'),
(2, 'COLLEGEHOUSES2.png', 1, 2, '2019-04-17 15:23:03'),
(4, 'COLLEGEHOUSES4.png', 1, 4, '2019-04-17 15:23:17');

-- --------------------------------------------------------

--
-- Table structure for table `asc_entrance`
--

CREATE TABLE `asc_entrance` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_entrance`
--

INSERT INTO `asc_entrance` (`id`, `title`, `description`, `date`) VALUES
(1, 'ENTRANCE TEST', 'To provide quality and moral values driven education to the girl child and to thus empower the women of tomorrow.', '2019-04-18 17:47:05');

-- --------------------------------------------------------

--
-- Table structure for table `asc_latesteventslider`
--

CREATE TABLE `asc_latesteventslider` (
  `id` int(11) NOT NULL,
  `imgName` varchar(50) NOT NULL,
  `imgVisible` tinyint(4) NOT NULL DEFAULT '1',
  `sliderOrder` tinyint(4) NOT NULL,
  `entryDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_latesteventslider`
--

INSERT INTO `asc_latesteventslider` (`id`, `imgName`, `imgVisible`, `sliderOrder`, `entryDate`) VALUES
(1, 'LATESTEVENTS11.jpg', 1, 1, '2019-04-17 21:02:30'),
(2, 'LATESTEVENTS3.jpg', 1, 2, '2019-04-17 21:03:35');

-- --------------------------------------------------------

--
-- Table structure for table `asc_latestnews`
--

CREATE TABLE `asc_latestnews` (
  `id` int(11) NOT NULL,
  `newstitle` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `position` int(4) NOT NULL,
  `active` enum('Y','N') NOT NULL DEFAULT 'Y',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_latestnews`
--

INSERT INTO `asc_latestnews` (`id`, `newstitle`, `description`, `position`, `active`, `date`) VALUES
(1, 'Headding 1', 'Our school motto, Fear of the Lord is the beginning of wisdom has always been a guiding light for All Saints College. The College has always nurtured, since time immemorial, a spirit of marching forward and keeping abreast with our ever changing society.', 1, 'Y', '2019-04-23 18:21:44'),
(2, 'Headding 1', 'Our school motto, Fear of the Lord is the beginning of wisdom has always been a guiding light for All Saints College. The College has always nurtured, since time immemorial, a spirit of marching forward and keeping abreast with our ever changing society.', 2, 'Y', '2019-04-23 18:21:50'),
(3, 'Headding 1', 'Our school motto, Fear of the Lord is the beginning of wisdom has always been a guiding light for All Saints College. The College has always nurtured, since time immemorial, a spirit of marching forward and keeping abreast with our ever changing society.', 3, 'Y', '2019-04-23 18:21:58'),
(4, 'Headding 1', 'Our school motto, Fear of the Lord is the beginning of wisdom has always been a guiding light for All Saints College. The College has always nurtured, since time immemorial, a spirit of marching forward and keeping abreast with our ever changing society.', 4, 'Y', '2019-04-23 18:22:17'),
(5, 'Headding 1', 'Our school motto, Fear of the Lord is the beginning of wisdom has always been a guiding light for All Saints College. The College has always nurtured, since time immemorial, a spirit of marching forward and keeping abreast with our ever changing society.', 5, 'Y', '2019-04-23 18:22:31'),
(6, 'Headding 1', 'Our school motto, Fear of the Lord is the beginning of wisdom has always been a guiding light for All Saints College. The College has always nurtured, since time immemorial, a spirit of marching forward and keeping abreast with our ever changing society.', 6, 'Y', '2019-04-23 18:22:39'),
(7, 'Headding 1', 'Our school motto, Fear of the Lord is the beginning of wisdom has always been a guiding light for All Saints College. The College has always nurtured, since time immemorial, a spirit of marching forward and keeping abreast with our ever changing society.', 7, 'Y', '2019-04-23 18:22:45'),
(8, 'Headding 1', 'Our school motto, Fear of the Lord is the beginning of wisdom has always been a guiding light for All Saints College. The College has always nurtured, since time immemorial, a spirit of marching forward and keeping abreast with our ever changing society.', 8, 'N', '2019-04-28 07:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `asc_logo`
--

CREATE TABLE `asc_logo` (
  `id` int(11) NOT NULL,
  `logocat` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `is_show` enum('Y','N') NOT NULL DEFAULT 'N',
  `entryDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_logo`
--

INSERT INTO `asc_logo` (`id`, `logocat`, `image`, `is_show`, `entryDate`) VALUES
(1, 'College Logo', 'logo.png', 'Y', '2019-04-17 20:12:38'),
(2, 'Brand Logo - 1', 'alumnilogo.png', 'Y', '2019-04-17 20:21:27');

-- --------------------------------------------------------

--
-- Table structure for table `asc_messagevedio`
--

CREATE TABLE `asc_messagevedio` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `linkvideo` varchar(200) NOT NULL,
  `video` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_messagevedio`
--

INSERT INTO `asc_messagevedio` (`id`, `message`, `linkvideo`, `video`, `date`) VALUES
(3, 'vai,\',\'\'vvv.....,,,,,,,\'\'\'\'\'\"\"\"\"\"\"\",,,,', 'vcbcb', '', '2019-06-02 17:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `asc_mission`
--

CREATE TABLE `asc_mission` (
  `id` int(11) NOT NULL,
  `missiontitle` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_mission`
--

INSERT INTO `asc_mission` (`id`, `missiontitle`, `description`, `date`) VALUES
(1, 'MISSION OF THE SCHOOL', 'To provide quality and moral values driven education to the girl child and to thus empower the women of tomorrow.', '2019-05-26 02:23:09');

-- --------------------------------------------------------

--
-- Table structure for table `asc_sliderimg`
--

CREATE TABLE `asc_sliderimg` (
  `id` int(11) NOT NULL,
  `imgName` varchar(50) NOT NULL,
  `imgVisible` tinyint(4) NOT NULL DEFAULT '1',
  `sliderOrder` tinyint(4) NOT NULL,
  `entryDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_sliderimg`
--

INSERT INTO `asc_sliderimg` (`id`, `imgName`, `imgVisible`, `sliderOrder`, `entryDate`) VALUES
(1, 'site-1.jpg', 1, 1, '2019-04-17 19:42:26'),
(2, 'site-2.jpg', 1, 2, '2019-04-17 19:42:39'),
(17, 'round8.jpg', 1, 3, '2019-05-21 17:33:53'),
(18, 'round9.jpg', 1, 3, '2019-05-21 17:34:01'),
(19, 'round10.jpg', 1, 3, '2019-05-21 17:34:08'),
(20, 'round11.jpg', 1, 3, '2019-05-21 17:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `asc_topheader`
--

CREATE TABLE `asc_topheader` (
  `id` int(11) NOT NULL,
  `mobile` bigint(16) NOT NULL,
  `email` varchar(200) NOT NULL,
  `fburl` varchar(200) NOT NULL,
  `twitterurl` varchar(200) NOT NULL,
  `entryDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asc_topheader`
--

INSERT INTO `asc_topheader` (`id`, `mobile`, `email`, `fburl`, `twitterurl`, `entryDate`) VALUES
(1, 8787295837, 'tosankalpgupta@hotmail.com', 'fb.com', 'vb.cm', '2019-04-14 08:49:55'),
(2, 8787295837, 'vash.ali13041994@gmail.com', 'fb.com', 'vb.cm', '2019-04-14 08:50:21'),
(4, 5942235121, 'principal@allsaintscollege.org', 'fb.com', 'vb.cm', '2019-04-17 20:00:51');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `utype` int(11) NOT NULL,
  `regid` varchar(100) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `fathfname` varchar(200) NOT NULL,
  `fathlname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `cpassword` varchar(200) NOT NULL,
  `mobile` bigint(12) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `alternatemobile` bigint(16) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `address` text NOT NULL,
  `parma_address` varchar(200) NOT NULL,
  `education` text NOT NULL,
  `designation` varchar(200) NOT NULL,
  `terms` varchar(100) DEFAULT NULL,
  `image` varchar(200) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `utype`, `regid`, `fname`, `fathfname`, `fathlname`, `lname`, `email`, `password`, `cpassword`, `mobile`, `gender`, `alternatemobile`, `dob`, `address`, `parma_address`, `education`, `designation`, `terms`, `image`, `status`) VALUES
(1, 1, '9090', 'Admin', '', '', '', 'admin', 'admin', 'admin', 8787295837, 'Female', 0, '2001-12-17', 'india up GORAKHPUR', '', '', '', '', '', '1'),
(2, 2, '101', 'Rakesh', '', '', 'Gupta', 'rakesh@gmail.com', 'rakesh', 'rakesh', 8787295837, 'Male', 0, '1989-12-22', 'india up GORAKHPUR', '', '', '', 'on', '', '0'),
(3, 3, '102', 'Vaishali', '', '', 'shahu', 'vaishali13041994@gmail.com', 'vaishali', 'vaishali', 9838861989, 'Female', 0, '1997-11-20', 'india up GORAKHPUR', '', '', '', 'on', '', '0'),
(33, 4, 's101', 'Simaran', '', '', 'Gupta', 'sim@gmail.com', 'simaran', 'simaran', 9838861989, 'Female', 0, '1995-01-1', 'india up GORAKHPUR', '', '', '', 'on', '', '1'),
(35, 2, '1030', 'sadasd', '', '', 'qwww', 'tosankalpgupta@hotmail.com', 'aa', 'aa', 8787295837, 'Female', 0, '2001-11-19', 'india up GORAKHPUR', '', '', '', 'on', '', '1'),
(36, 2, '789', 'Vaishali', '', '', 'Gupta', 'vash.ali13041994@gmail.com', 'b', 'b', 8787295837, 'Male', 0, '2003-10-18', 'india up GORAKHPUR', '', '', '', 'off', '', '1'),
(37, 3, 'P-101', 'aa', '', '', 'qwww', 'tosankalpgupta@hotmail.com', 'vai', 'vai', 8787295837, 'Male', 0, '1982-02-1', 'india up GORAKHPUR', '', '', '', NULL, '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `usertype` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `usertype`, `username`, `password`, `uid`) VALUES
(1, 1, 'admin', 'admin', 1),
(2, 2, 'rakesh@gmail.com', 'rakesh', 2),
(3, 3, 'vaishali13041994@gmail.com', 'vaishali', 3),
(4, 4, 'sim@gmail.com', 'simaran', 33),
(5, 2, 'tosankalpgupta@hotmail.com', 'aa', 35),
(6, 2, 'vash.ali13041994@gmail.com', 'b', 36),
(7, 2, 'vai@gmail.com', 'vai', 52),
(8, 3, 'tosankalpgupta@hotmail.com', 'vai', 37);

-- --------------------------------------------------------

--
-- Table structure for table `usertype`
--

CREATE TABLE `usertype` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usertype`
--

INSERT INTO `usertype` (`id`, `type`) VALUES
(1, 'Admin'),
(2, 'Student'),
(3, 'Parent'),
(4, 'Staff');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asc_account`
--
ALTER TABLE `asc_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asc_calender`
--
ALTER TABLE `asc_calender`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asc_collegehouses`
--
ALTER TABLE `asc_collegehouses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asc_entrance`
--
ALTER TABLE `asc_entrance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asc_latesteventslider`
--
ALTER TABLE `asc_latesteventslider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asc_latestnews`
--
ALTER TABLE `asc_latestnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asc_logo`
--
ALTER TABLE `asc_logo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asc_messagevedio`
--
ALTER TABLE `asc_messagevedio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asc_mission`
--
ALTER TABLE `asc_mission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asc_sliderimg`
--
ALTER TABLE `asc_sliderimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `asc_topheader`
--
ALTER TABLE `asc_topheader`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertype`
--
ALTER TABLE `usertype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asc_account`
--
ALTER TABLE `asc_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `asc_calender`
--
ALTER TABLE `asc_calender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `asc_collegehouses`
--
ALTER TABLE `asc_collegehouses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `asc_entrance`
--
ALTER TABLE `asc_entrance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asc_latesteventslider`
--
ALTER TABLE `asc_latesteventslider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `asc_latestnews`
--
ALTER TABLE `asc_latestnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `asc_logo`
--
ALTER TABLE `asc_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `asc_messagevedio`
--
ALTER TABLE `asc_messagevedio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `asc_mission`
--
ALTER TABLE `asc_mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `asc_sliderimg`
--
ALTER TABLE `asc_sliderimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `asc_topheader`
--
ALTER TABLE `asc_topheader`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `usertype`
--
ALTER TABLE `usertype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
