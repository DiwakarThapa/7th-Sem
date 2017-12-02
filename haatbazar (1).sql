-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 01:35 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `haatbazar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `oid` int(5) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `ccontact` varchar(255) NOT NULL,
  `caddress` varchar(255) NOT NULL,
  `cemail` varchar(255) NOT NULL,
  `cplace` varchar(255) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productquantity` int(5) NOT NULL,
  `productprice` int(5) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`oid`, `cname`, `ccontact`, `caddress`, `cemail`, `cplace`, `productname`, `productquantity`, `productprice`, `details`) VALUES
(1, 'diwakar thapa', '9808880249', 'hattigauda', 'diwakar.thapa@hotmail.com', 'pakistan', 'm', 1, 9, 'ddflkjlksj');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pid` int(5) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `cprice` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pid`, `productname`, `price`, `cprice`, `details`, `category`, `filename`) VALUES
(1, 'm', '9', '9', 'm', 'cloths', '23432573_653773061677267_807090906_o.jpg'),
(2, 'ram', '99', '99999', 'dsfslfkdsf', 'bags', '23336497_653772945010612_1430485713_o.jpg'),
(3, 'diwakar', '999', '99', 'fsdfdsfdsf', 'technology', '23432573_653773061677267_807090906_o.jpg'),
(4, 'diwaa', '22222', '22222', 'dffsfsdfsdfdsfds', 'technology', '23336497_653772945010612_1430485713_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `uid` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `remark` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`uid`, `firstname`, `lastname`, `password`, `email`, `status`, `remark`) VALUES
(1, 'aa', 'a', 'a', 'a', 1, '2017-11-30 18:37:11'),
(2, 'e', 'e', 'e', 'e', 1, '2017-12-01 11:23:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `oid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
