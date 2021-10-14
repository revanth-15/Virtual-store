-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2018 at 12:41 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlineshopping`
--

-- --------------------------------------------------------

--
-- Table structure for table `cancelorder`
--

CREATE TABLE `cancelorder` (
  `productimage` varchar(400) NOT NULL,
  `productname` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancelorder`
--

INSERT INTO `cancelorder` (`productimage`, `productname`, `username`, `time`) VALUES
('Screenshot (24).png', 'LAPTOP', 'suprith', '2018-11-22 00:06:05'),
('412yxFRV7oL._SL500_FMwebp_QL65_.jpg', 'Earton Mens Sports Runnimg Shoe', 'harsha', '2018-11-22 19:23:34');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category`) VALUES
('electronics'),
('fashion'),
('mobiles'),
('paintings');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `productimage` varchar(400) NOT NULL,
  `productname` varchar(40) NOT NULL,
  `price` int(10) NOT NULL,
  `quantity` int(10) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`productimage`, `productname`, `price`, `quantity`, `username`, `email`, `address`) VALUES
('418FMDh5LAL._SL501_FMwebp_QL65_.jpg', 'Dunkaston Men Casual Formal Shoes', 459, 2, 'suprith', 'asdfdgfhj@gmail.com', 'qqqqqqq'),
('PicsArt_08-22-12.32.08.jpg', 'Black Art', 800, 2, 'suprith', 'abc@gmail.com', 'uk'),
('41Jy18-CakL._AC_SX348_SY500_FMwebp_QL65_.jpg', 'Redmi 6 Pro(Black,4GB RAM)', 12999, 1, 'harsha', 'asdfdgfhj@gmail.com', 'delhi'),
('PicsArt_07-09-02.31.59.jpg', 'Krishna Painting', 1600, 2, 'harsha', 'asdfdgfhj@gmail.com', 'blr');

--
-- Triggers `order`
--
DELIMITER $$
CREATE TRIGGER `cancelorder` AFTER DELETE ON `order` FOR EACH ROW insert into cancelorder values(old.productimage,old.productname,old.username,now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `category` varchar(20) NOT NULL,
  `name` varchar(40) NOT NULL,
  `image` varchar(500) NOT NULL,
  `price` int(10) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`category`, `name`, `image`, `price`, `description`) VALUES
('paintings', 'Paintings', 'PicsArt_08-14-07.03.34.jpg', 1500, 'Painting'),
('fashion', 'jeans', 'Screenshot (22).png', 1234, 'skinny'),
('fashion', 'Earring', 'Screenshot (8).png', 900, 'super'),
('electronics', 'LAPTOP', 'Screenshot (24).png', 58000, 'super'),
('fashion', 'Haute Curry Womens V Neck Stripe Kurta', '41ECXU9-aIL._SL500_FMwebp_QL65_.jpg', 1049, 'super'),
('fashion', 'Raymond Mens Plain', '41xrcLNMreL._SL500_FMwebp_QL65_.jpg', 599, 'super'),
('fashion', 'Saree', '51pfHGDqizL._SL501_FMwebp_QL65_.jpg', 1500, 'super'),
('fashion', 'Neck Printed Anarkali Kurta', '51qLOxYtufL._SL500_FMwebp_QL65_.jpg', 1499, 'super'),
('fashion', 'T Shirt', '51yABIjbGML._SL500_FMwebp_QL65_.jpg', 599, 'super'),
('fashion', 'Pink Saree', '410taQT7XBL._SL500_FMwebp_QL65_.jpg', 1299, 'super'),
('fashion', 'Earton Mens Sports Runnimg Shoe', '412yxFRV7oL._SL500_FMwebp_QL65_.jpg', 360, 'super'),
('fashion', 'Dunkaston Men Casual Formal Shoes', '418FMDh5LAL._SL501_FMwebp_QL65_.jpg', 459, 'super'),
('paintings', 'Nature Drawing', 'PicsArt_01-13-03.51.34.jpg', 450, 'super'),
('paintings', 'Black Sand Art', '2024_1500827092360.jpg', 1300, 'super'),
('paintings', 'Black Art', 'PicsArt_08-22-12.32.08.jpg', 800, 'super'),
('paintings', 'Krishna Painting', 'PicsArt_07-09-02.31.59.jpg', 1600, 'super'),
('mobiles', 'OnePlus 6T(Mirror Black,6GB RAM)', '41fBRgy0ipL._AC_SX348_SY500_FMwebp_QL65_.jpg', 37999, 'super'),
('mobiles', 'Samsung On7 Pro(Gold,2GB RAM)', '41INpKtZV-L._AC_SX348_SY500_FMwebp_QL65_.jpg', 7990, 'super'),
('mobiles', 'Redmi 6 Pro(Black,4GB RAM)', '41Jy18-CakL._AC_SX348_SY500_FMwebp_QL65_.jpg', 12999, 'super'),
('mobiles', 'Redmi Y2(Gold,4GB RAM)', '41ucL-FmhPL._AC_SX348_SY500_FMwebp_QL65_.jpg', 11999, 'super'),
('fashion', 'shoes1', 'Screenshot (10).png', 900, 'super');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `password`) VALUES
('harsha', 'asdfdgfhj@gmail.com', 'abc'),
('suprith', 'abc@gmail.com', 'aaa');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `userinformation` AFTER INSERT ON `user` FOR EACH ROW insert into userinfo values(NEW.username,NEW.email,NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `username` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`username`, `email`, `time`) VALUES
('suprith', 'abc@gmail.com', '2018-11-21 23:38:07'),
('harsha', 'asdfdgfhj@gmail.com', '2018-11-22 19:20:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD KEY `username` (`username`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD KEY `category` (`category`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`category`) REFERENCES `category` (`category`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
