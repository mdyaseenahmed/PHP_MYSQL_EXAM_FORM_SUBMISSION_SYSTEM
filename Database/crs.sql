-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 11:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crs`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_fst`
--

CREATE TABLE `add_fst` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` int(255) NOT NULL,
  `sem` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_fst`
--

INSERT INTO `add_fst` (`id`, `sub_name`, `sub_code`, `credits`, `sem`) VALUES
(3, 'Kannada', '19KA4KATK', 4, 2);

-- --------------------------------------------------------

--
-- Table structure for table `add_s1`
--

CREATE TABLE `add_s1` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s1`
--

INSERT INTO `add_s1` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(10, 'Applied Science', '19CS2PCAPS', 4),
(12, 'Kannada', '19KA4KATK', 2);

-- --------------------------------------------------------

--
-- Table structure for table `add_s2`
--

CREATE TABLE `add_s2` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s2`
--

INSERT INTO `add_s2` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(7, 'OOJ', '19CS4PCOOJ', 4),
(8, 'DBMS', '19CS4PCDBM', 4);

-- --------------------------------------------------------

--
-- Table structure for table `add_s3`
--

CREATE TABLE `add_s3` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s3`
--

INSERT INTO `add_s3` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(2, 'MP', '19CS4PCMP', 4),
(3, 'OO Java Programming', '19CS4PCOOJ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `add_s4`
--

CREATE TABLE `add_s4` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s4`
--

INSERT INTO `add_s4` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(4, 'Linear Algerba', '19MA4BSLIA', 4),
(5, 'TFCS', '19CS4PCTFC', 4),
(6, 'DBMS', '19CS4PCDBM', 4),
(7, 'ADA', '19CS4PCADA', 4),
(8, 'Operating Systems', '19CS4PCOPS', 4),
(9, 'EVS', '19HS4PCEVS', 2),
(10, 'PW-2', '19CS4PCPW2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `add_s5`
--

CREATE TABLE `add_s5` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s5`
--

INSERT INTO `add_s5` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(2, 'AI', '19CS2PCAPS', 4);

-- --------------------------------------------------------

--
-- Table structure for table `add_s6`
--

CREATE TABLE `add_s6` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s6`
--

INSERT INTO `add_s6` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(2, 'Machine Learning', '19CS7PCML', 4);

-- --------------------------------------------------------

--
-- Table structure for table `add_s7`
--

CREATE TABLE `add_s7` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s7`
--

INSERT INTO `add_s7` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(2, 'Artificial Intelligence', '19CS4PCAI', 4);

-- --------------------------------------------------------

--
-- Table structure for table `add_s8`
--

CREATE TABLE `add_s8` (
  `id` int(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_s8`
--

INSERT INTO `add_s8` (`id`, `sub_name`, `sub_code`, `credits`) VALUES
(3, 'ML', '19CS4ML4PC', 4);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `password`) VALUES
('hodCSE@bmsce.ac.in', 'hodcs');

-- --------------------------------------------------------

--
-- Table structure for table `fst_reg`
--

CREATE TABLE `fst_reg` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `usn` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `sem` int(1) NOT NULL,
  `gender` char(1) NOT NULL,
  `phno` bigint(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fst_reg`
--

INSERT INTO `fst_reg` (`id`, `fname`, `lname`, `bdate`, `usn`, `email`, `dept`, `sem`, `gender`, `phno`, `image`, `password`) VALUES
(2, 'Md Yaseen ', 'Ahmed', '2020-03-27', '1BM19CS404', 'yaseenmd.cs19@bmsce.ac.in', 'Computer Science & Engineering', 4, 'M', 9108735020, 'Desert.jpg', '25d55ad283aa400af464c76d713c07ad');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `usn` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dept` varchar(255) NOT NULL,
  `sem` int(1) NOT NULL,
  `gender` char(1) NOT NULL,
  `phno` bigint(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `bdate`, `usn`, `email`, `dept`, `sem`, `gender`, `phno`, `image`, `password`) VALUES
(24, 'Arbaz', 'Ahmed', '1999-01-06', '1BM19CS401', 'arbazahmed.cs19@bmsce.ac.in', 'Computer Science & Engineering', 4, 'M', 6361389410, 'WhatsApp Image 2020-03-26 at 9.31.12 PM.jpeg', '25f9e794323b453885f5181f1b624d0b'),
(27, 'Md Yaseen', 'Ahmed', '2001-04-23', '1BM19CS404', 'yaseenmd.cs19@bmsce.ac.in', 'Computer Science & Engineering', 4, 'M', 9108735020, 'md_yaseen.jpeg', '25f9e794323b453885f5181f1b624d0b'),
(30, 'Md', 'Yaseen', '1999-03-12', '1BM19CS400', 'yaseenmd.cs19@bmsce.ac.in', 'Computer Science & Engineering', 4, 'M', 9108735020, 'yaseen.jpeg', '25f9e794323b453885f5181f1b624d0b');

-- --------------------------------------------------------

--
-- Table structure for table `sub_reg`
--

CREATE TABLE `sub_reg` (
  `usn` varchar(255) NOT NULL,
  `sub_name` varchar(255) NOT NULL,
  `sub_code` varchar(255) NOT NULL,
  `credits` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub_reg`
--

INSERT INTO `sub_reg` (`usn`, `sub_name`, `sub_code`, `credits`) VALUES
('1BM19CS404', 'Linear Algerba', '19MA4BSLIA', 4),
('1BM19CS404', 'TFCS', '19CS4PCTFC', 4),
('1BM19CS404', 'DBMS', '19CS4PCDBM', 4),
('1BM19CS404', 'ADA', '19CS4PCADA', 4),
('1BM19CS404', 'PW-2', '19CS4PCPW2', 2),
('1BM19CS401', 'Linear Algerba', '19MA4BSLIA', 4),
('1BM19CS401', 'TFCS', '19CS4PCTFC', 4),
('1BM19CS401', 'DBMS', '19CS4PCDBM', 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_fst`
--
ALTER TABLE `add_fst`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s1`
--
ALTER TABLE `add_s1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s2`
--
ALTER TABLE `add_s2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s3`
--
ALTER TABLE `add_s3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s4`
--
ALTER TABLE `add_s4`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s5`
--
ALTER TABLE `add_s5`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s6`
--
ALTER TABLE `add_s6`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s7`
--
ALTER TABLE `add_s7`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_s8`
--
ALTER TABLE `add_s8`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fst_reg`
--
ALTER TABLE `fst_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_fst`
--
ALTER TABLE `add_fst`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `add_s1`
--
ALTER TABLE `add_s1`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `add_s2`
--
ALTER TABLE `add_s2`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `add_s3`
--
ALTER TABLE `add_s3`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `add_s4`
--
ALTER TABLE `add_s4`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `add_s5`
--
ALTER TABLE `add_s5`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_s6`
--
ALTER TABLE `add_s6`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_s7`
--
ALTER TABLE `add_s7`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `add_s8`
--
ALTER TABLE `add_s8`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fst_reg`
--
ALTER TABLE `fst_reg`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
