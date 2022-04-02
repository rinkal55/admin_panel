-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2022 at 06:08 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin_panel`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `website` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `email`, `logo`, `website`) VALUES
(2, 'tata', 'tata@gmail.com', '1648791346tata.png', 'tata.com'),
(3, 'protracked', 'protracked@gmail.com', '1648791497protracked.png', 'protracked.com'),
(5, 'Reliance', 'reliance@gmail.com', '1648787946reliance.jpg', 'reliance.com'),
(6, 'wipro', 'wipro@gmail.com', '1648788016vipro.png', 'wipro.cpm'),
(7, 'infosys', 'infosys@gmail.com', '1648788132infosys.png', 'infosys.com'),
(8, 'hcl', 'hcl@gmail.com', '1648788224hcl.png', 'hcl.com'),
(9, 'tech mahindra', 'techmahindra@gmail.com', '1648788346techmahindra.png', 'techmahindra'),
(10, 'larsen & turbo', 'lt@gmail.com', '1648788436lt.png', 'lt.com'),
(11, 'hp', 'hp@gmail.com', '1648788530hp.png', 'hp@gmail.com'),
(12, 'Mphasis', 'mphasis@gmail.com', '1648788622mphases.jpg', 'mphases.com'),
(13, 'mindtree', 'mindtree@gmail.com', '16488099871648788727mindtree.png', 'mindtree.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `company` int(11) NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `firstname`, `lastname`, `company`, `email`, `phone`) VALUES
(1, 'tata_employee', 'tata_employee', 2, 'tata_employee@gmail.com', 123456789),
(2, 'protracked_employee', 'protracked_employee', 3, 'protracked_employee@gmail.com', 987654321),
(5, 'reliance_employee', 'reliance_employee', 5, 'reliance_employee@gmail.com', 123456789),
(6, 'wipro_employee', 'wipro_employee', 6, 'wipro_employee@gmail.com', 123456789),
(7, 'infosys_employee', 'infosys_employee', 7, 'infosys_employee@gmail.com', 123456789),
(8, 'hcl_employee', 'hcl_employee', 8, 'hcl_employee@gmail.com', 123456789),
(9, 'techmahindra_employee', 'techmahindra_employee', 9, 'techmahindra_employee@gmail.com', 456789123),
(10, 'lt_employee', 'lt_employee', 10, 'lt_employee@gmail.com', 987654321),
(11, 'hp_employee', 'hp_employee', 11, 'hp_employee@gmail.com', 789654321),
(12, 'mphasis_employee', 'mphasis_employee', 12, 'mphasis_employee@gmail.com', 345126789),
(13, 'mindtree_employee', 'mindtree_employee', 13, 'mindtree_employee@gmail.com', 123456789);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
