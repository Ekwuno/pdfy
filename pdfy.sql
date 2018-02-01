-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2017 at 06:09 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pdfy`
--

-- --------------------------------------------------------

--
-- Table structure for table `agric and bioresource engineering`
--

CREATE TABLE `agric and bioresource engineering` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `no_of_downloads` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `chemical engineering`
--

CREATE TABLE `chemical engineering` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `no_of_downloads` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `civil engineering`
--

CREATE TABLE `civil engineering` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `no_of_downloads` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `electrical engineering`
--

CREATE TABLE `electrical engineering` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `no_of_downloads` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `electronics and computer engineering`
--

CREATE TABLE `electronics and computer engineering` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `no_of_downloads` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `industrial and production engineering`
--

CREATE TABLE `industrial and production engineering` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `no_of_downloads` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `material and metallurgical engineering`
--

CREATE TABLE `material and metallurgical engineering` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `no_of_downloads` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mechanical engineering`
--

CREATE TABLE `mechanical engineering` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `no_of_downloads` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `polymer and textile engineering`
--

CREATE TABLE `polymer and textile engineering` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `no_of_downloads` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `soil science`
--

CREATE TABLE `soil science` (
  `id` int(11) NOT NULL,
  `filename` varchar(200) NOT NULL,
  `level` varchar(100) NOT NULL,
  `no_of_downloads` int(11) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agric and bioresource engineering`
--
ALTER TABLE `agric and bioresource engineering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chemical engineering`
--
ALTER TABLE `chemical engineering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `civil engineering`
--
ALTER TABLE `civil engineering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electrical engineering`
--
ALTER TABLE `electrical engineering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `electronics and computer engineering`
--
ALTER TABLE `electronics and computer engineering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrial and production engineering`
--
ALTER TABLE `industrial and production engineering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material and metallurgical engineering`
--
ALTER TABLE `material and metallurgical engineering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mechanical engineering`
--
ALTER TABLE `mechanical engineering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `polymer and textile engineering`
--
ALTER TABLE `polymer and textile engineering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `soil science`
--
ALTER TABLE `soil science`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agric and bioresource engineering`
--
ALTER TABLE `agric and bioresource engineering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `chemical engineering`
--
ALTER TABLE `chemical engineering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `civil engineering`
--
ALTER TABLE `civil engineering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `electrical engineering`
--
ALTER TABLE `electrical engineering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `electronics and computer engineering`
--
ALTER TABLE `electronics and computer engineering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `industrial and production engineering`
--
ALTER TABLE `industrial and production engineering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `material and metallurgical engineering`
--
ALTER TABLE `material and metallurgical engineering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `mechanical engineering`
--
ALTER TABLE `mechanical engineering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `polymer and textile engineering`
--
ALTER TABLE `polymer and textile engineering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `soil science`
--
ALTER TABLE `soil science`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
