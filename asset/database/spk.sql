-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 03, 2020 at 04:29 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spk`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `ID` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `keteria1` int(11) NOT NULL,
  `keteria2` int(11) NOT NULL,
  `keteria3` int(11) NOT NULL,
  `keteria4` float NOT NULL,
  `skor` float NOT NULL,
  `varskor` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`ID`, `nama`, `keteria1`, `keteria2`, `keteria3`, `keteria4`, `skor`, `varskor`) VALUES
(1, 'Acer Aspire E5-476G', 3, 1, 1, 6, 0.103869, 'V1'),
(2, 'ACER Aspire 3 A314-32-C00', 1, 1, 1, 3.8, 0.182832, 'V3'),
(3, 'Acer Aspire 5 A514-53-385', 2, 1, 4, 6.7, 0.138923, 'V5'),
(4, 'Acer Swift 3 SF314-56G', 4, 3, 1, 11.4, 0.111614, 'V6'),
(5, 'Acer Nitro 5 AN515-55-76S', 4, 3, 4, 16.5, 0.0887636, 'V2'),
(6, 'Acer Nitro 7 AN715-51-74N', 4, 3, 4, 18, 0.138923, 'V8'),
(7, 'Acer Spin 5 SP513-53N-56Q', 3, 3, 3, 14.2, 0.122267, 'V7'),
(8, 'ASUS X441MA-GA031T N4020', 1, 1, 1, 4.1, 0.112808, 'V4'),
(9, 'ASUS G512LI-I565B6T', 3, 1, 4, 15.4, 0, 'no'),
(10, 'ASUS ROG Strix III G531GT', 4, 3, 4, 17, 0, 'no'),
(11, 'ASUS S333JQ-EG552T', 3, 3, 4, 12.4, 0, 'no'),
(12, 'ASUS G512LI-I75TB6B', 4, 5, 4, 17.8, 0, 'no'),
(13, 'Dell Inspiron 3476', 2, 1, 1, 6.8, 0, 'no'),
(14, 'Dell Inspiron 3493', 3, 1, 1, 8.2, 0, 'no'),
(15, 'Dell Vostro 3491', 2, 1, 1, 6.3, 0, 'no'),
(16, 'Dell Latitude 3400', 3, 1, 1, 9.4, 0, 'no'),
(17, 'Dell Vostro 5490', 3, 3, 3, 11.8, 0, 'no'),
(18, 'Dell G3-3579', 4, 1, 2, 14, 0, 'no'),
(19, 'Lenovo IdeaPad Slim 5i', 4, 5, 4, 13.8, 0, 'no'),
(20, 'Lenovo Yoga Slim 7i OHS ', 4, 5, 5, 18.3, 0, 'no'),
(21, 'Lenovo IdeaPad Gaming 3i ', 3, 4, 4, 13, 0, 'no'),
(22, 'Lenovo IdeaPad Gaming 3i ', 4, 5, 4, 15.9, 0, 'no'),
(23, 'Lenovo Ideapad 330 15ICH', 3, 2, 1, 11, 0, 'no'),
(24, 'Lenovo Yoga C640 13IML 2K', 3, 3, 4, 13, 0, 'no'),
(25, 'Lenovo ThinkPad L13 1MID', 3, 3, 4, 15.4, 0, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `bobot`
--

CREATE TABLE `bobot` (
  `IDB` int(11) NOT NULL,
  `namaB` varchar(25) NOT NULL,
  `bobot` int(11) NOT NULL,
  `sifat` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bobot`
--

INSERT INTO `bobot` (`IDB`, `namaB`, `bobot`, `sifat`) VALUES
(1, 'keteria1', 3, 'BENEFIT'),
(2, 'keteria2', 3, 'BENEFIT'),
(3, 'keteria3', 3, 'BENEFIT'),
(4, 'keteria4', 3, 'COST');

-- --------------------------------------------------------

--
-- Table structure for table `keteria1`
--

CREATE TABLE `keteria1` (
  `C1` int(11) NOT NULL,
  `C1_nama` varchar(25) NOT NULL,
  `C1_bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keteria1`
--

INSERT INTO `keteria1` (`C1`, `C1_nama`, `C1_bobot`) VALUES
(1, 'Intel Core Celeron', 2),
(2, 'Intel Core i3', 3),
(3, 'Intel Core i5', 4),
(4, 'Intel Core i7', 5),
(9, 'RYZEN 7', 5);

-- --------------------------------------------------------

--
-- Table structure for table `keteria2`
--

CREATE TABLE `keteria2` (
  `C2` int(11) NOT NULL,
  `C2_nama` varchar(25) NOT NULL,
  `C2_bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keteria2`
--

INSERT INTO `keteria2` (`C2`, `C2_nama`, `C2_bobot`) VALUES
(1, '4GB', 2),
(2, '4GB + 1 Slot', 2.5),
(3, '8GB', 3),
(4, '8GB + 2 Slot', 3.7),
(5, '16GB', 4);

-- --------------------------------------------------------

--
-- Table structure for table `keteria3`
--

CREATE TABLE `keteria3` (
  `C3` int(11) NOT NULL,
  `C3_nama` varchar(25) NOT NULL,
  `C3_bobot` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keteria3`
--

INSERT INTO `keteria3` (`C3`, `C3_nama`, `C3_bobot`) VALUES
(1, '1TB HDD', 1),
(2, '2TB HDD', 2),
(3, '256GB SSD', 3),
(4, '512GB SSD', 4),
(5, '1TB SSD', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bobot`
--
ALTER TABLE `bobot`
  ADD PRIMARY KEY (`IDB`);

--
-- Indexes for table `keteria1`
--
ALTER TABLE `keteria1`
  ADD PRIMARY KEY (`C1`),
  ADD UNIQUE KEY `C1` (`C1`);

--
-- Indexes for table `keteria2`
--
ALTER TABLE `keteria2`
  ADD PRIMARY KEY (`C2`),
  ADD UNIQUE KEY `C2` (`C2`);

--
-- Indexes for table `keteria3`
--
ALTER TABLE `keteria3`
  ADD PRIMARY KEY (`C3`),
  ADD UNIQUE KEY `C3` (`C3`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `keteria1`
--
ALTER TABLE `keteria1`
  MODIFY `C1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `keteria2`
--
ALTER TABLE `keteria2`
  MODIFY `C2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `keteria3`
--
ALTER TABLE `keteria3`
  MODIFY `C3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
