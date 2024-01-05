-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 13, 2023 at 03:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bikeshop_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CUS_ID` varchar(50) NOT NULL,
  `CUS_NAME` varchar(50) NOT NULL,
  `CUS_MNAME` varchar(50) NOT NULL,
  `CUS_LNAME` varchar(50) NOT NULL,
  `CUS_ADDRESS` varchar(50) NOT NULL,
  `CUS_CONTACT` bigint(11) NOT NULL,
  `USER_ID` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CUS_ID`, `CUS_NAME`, `CUS_MNAME`, `CUS_LNAME`, `CUS_ADDRESS`, `CUS_CONTACT`, `USER_ID`) VALUES
('CUS-1260', 'GUILLER', 'F.', 'ABINO', 'BOGTONG', 9241567231, 'USER-522'),
('CUS-1814', 'JOHNPAUL', 'ABAD', 'AVELINO', 'VICTORY VILLAGE LEGAZPI CITY', 9279985449, 'USER-640'),
('CUS-1843', 'LESTER', 'N.', 'SAPAULA', 'BITANO LEGAZPI', 9465522103, 'USER-474'),
('CUS-2216', 'KAKA', 'D', 'CUTE', 'ALBAT', 92828192841, 'USER-1909'),
('CUS-3044', 'JOHN', 'A', 'ABAD', 'VICTORY VILLAGE', 9279985446, 'USER-543'),
('CUS-4383', 'CHAN', 'C', 'DAEN', 'LEGAZPI', 917, 'USER-1483'),
('CUS-4700', 'ANTHONY', 'C.', 'DAEN', 'BURAGUIS', 9451236561, 'USER-2011'),
('CUS-5276', 'SHERWIN', 'A.', 'BORDEOS', 'PAWA LEGAZPI', 9928461728, 'USER-4470'),
('CUS-6644', 'MARICAR', 'C.', 'AYDALLA', 'MATANAG LEGAZPI CITY', 9924812521, 'USER-2280'),
('CUS-7125', 'DANIEL', 'D', 'DAEN', 'BURAGUIS LEGAZPI', 9074440130, 'USER-8318');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ORDER_NUM` varchar(50) NOT NULL,
  `ORDER_SHIPDATE` date DEFAULT NULL,
  `CUS_ID` varchar(50) DEFAULT NULL,
  `PROD_ID` varchar(50) DEFAULT NULL,
  `PROD_QUANTITY` bigint(10) NOT NULL,
  `TOTAL_PRICE` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ORDER_NUM`, `ORDER_SHIPDATE`, `CUS_ID`, `PROD_ID`, `PROD_QUANTITY`, `TOTAL_PRICE`) VALUES
('ORDER-153793', '2023-06-10', 'CUS-1814', '2222', 1, 900),
('ORDER-418352', '2023-06-10', 'CUS-4700', '4213', 1, 400),
('ORDER-819700', '2023-06-10', 'CUS-4700', '2222', 1, 900),
('ORDER-872370', '2023-06-10', 'CUS-4700', '4213', 1, 400);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `PROD_ID` varchar(50) NOT NULL,
  `PROD_NAME` varchar(50) NOT NULL,
  `PROD_PRICE` decimal(10,2) NOT NULL,
  `PROD_QUANTITY` int(10) NOT NULL,
  `PROD_DESCRIPTION` varchar(50) NOT NULL,
  `SUP_ID` varchar(50) DEFAULT NULL,
  `PROD_IMG` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`PROD_ID`, `PROD_NAME`, `PROD_PRICE`, `PROD_QUANTITY`, `PROD_DESCRIPTION`, `SUP_ID`, `PROD_IMG`) VALUES
('2222', 'DEORE', '900.00', 1, '11', '1234', 'deore1.jpg'),
('4213', 'Cross King Tire', '400.00', 1, 'Good Quality', '1234', 'tire.jpg'),
('4444', 'Shimano Crank ', '2800.00', 1, 'Good for Road Bike Crank Arm', '1234', 'crankarm.jpg'),
('4545', 'Bottom Bracket', '340.00', 1, 'Component that connects the crankset to the frame', '1234', 'bb.jpg'),
('5231', 'Shimano Hub', '1400.00', 1, 'Latest item for bike hub', '1234', 'hub.jpg'),
('8888', 'Cassette Sprocket', '699.00', 1, 'Good Condition ', '1234', 'cassete.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `SUP_ID` varchar(50) NOT NULL,
  `SUP_NAME` varchar(50) NOT NULL,
  `SUP_MNAME` varchar(50) NOT NULL,
  `SUP_LNAME` varchar(50) NOT NULL,
  `SUP_CONTACT` bigint(15) DEFAULT NULL,
  `SUP_ADDRESS` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`SUP_ID`, `SUP_NAME`, `SUP_MNAME`, `SUP_LNAME`, `SUP_CONTACT`, `SUP_ADDRESS`) VALUES
('1234', 'JAMES', 'D', 'LABRADOR', 932713721, 'BURAGUIS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USER_ID` varchar(50) NOT NULL,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USER_ID`, `USERNAME`, `PASSWORD`) VALUES
('USER-1483', 'chano', 'bdfcfae77457661a2b91faec5229bad55f935586'),
('USER-1909', 'yuki', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('USER-2011', 'daen', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('USER-2280', 'maricar', '590fdece19ae685b767d30410b6c091a74444df2'),
('USER-4470', 'sherwin', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('USER-474', 'les', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('USER-522', 'guil', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('USER-543', 'pj', 'b1a3c2c4828a09179236702f90a379a0eca4ad99'),
('USER-640', 'paul', '26a0d5a083d12d4448a99b3c808ade4dcc978ffa'),
('USER-7530', 'daniel', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
('USER-8318', 'danieldaen', '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CUS_ID`),
  ADD KEY `USER_ID` (`USER_ID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ORDER_NUM`),
  ADD KEY `CUS_ID` (`CUS_ID`),
  ADD KEY `PROD_ID` (`PROD_ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`PROD_ID`),
  ADD KEY `SUP_ID` (`SUP_ID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SUP_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER_ID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`USER_ID`),
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`USER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`CUS_ID`) REFERENCES `customer` (`CUS_ID`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`PROD_ID`) REFERENCES `product` (`PROD_ID`),
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`CUS_ID`) REFERENCES `customer` (`CUS_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`PROD_ID`) REFERENCES `product` (`PROD_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`SUP_ID`) REFERENCES `supplier` (`SUP_ID`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`SUP_ID`) REFERENCES `supplier` (`SUP_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
