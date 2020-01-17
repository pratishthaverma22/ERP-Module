-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2019 at 07:51 AM
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
-- Database: `research_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `sap_id` int(10) NOT NULL,
  `title` varchar(150) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `department` varchar(35) NOT NULL,
  `affiliation` varchar(150) NOT NULL,
  `category` varchar(20) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `month` varchar(15) NOT NULL,
  `year` int(4) NOT NULL,
  `identifier` varchar(4) NOT NULL,
  `number` varchar(20) NOT NULL,
  `doi` varchar(100) NOT NULL,
  `indexed` varchar(15) NOT NULL,
  `volume` int(4) NOT NULL,
  `issue` int(4) NOT NULL,
  `page no` varchar(10) NOT NULL,
  `url` varchar(150) NOT NULL,
  `verification document` varchar(35) NOT NULL,
  `status` varchar(25) NOT NULL,
  `remarks` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`sap_id`, `title`, `authors`, `department`, `affiliation`, `category`, `publisher`, `month`, `year`, `identifier`, `number`, `doi`, `indexed`, `volume`, `issue`, `page no`, `url`, `verification document`, `status`, `remarks`) VALUES
(40001713, 'Location and Energy Based Hierarchical\r\nDynamic Key Management Protocol\r\nfor Wireless Sensor Networks', 'S. Christalin Nelson, J. Dhiviya Rose', 'Cybernetics', 'UPES Dehradun', 'Conference', 'IEEE', 'jan', 2018, 'issn', '2345-6789', 'shgdkajhk', 'scopus', 10, 14, '12-45', '', 'certificate', 'pending', 'submit');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
