-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2019 at 01:22 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashwinidb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(255) NOT NULL,
  `booking_items` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `booking_items`) VALUES
(1, 'Pens\r\n'),
(2, 'USB Chargers\r\n'),
(3, 'USB Extenders\r\n'),
(4, 'USB cables\r\n'),
(5, 'portable key boards\r\n\r\n'),
(6, 'pen drives\r\n\r\n'),
(7, 'Cloth Folder\r\n\r\n'),
(8, 'masala packets\r\n\r\n'),
(9, 'rubric cubes\r\n'),
(10, 'mahjong\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'HP'),
(2, 'Samsung'),
(3, 'Apple'),
(4, 'Sony'),
(5, 'LG'),
(6, 'Cloth Brand');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `qty`) VALUES
(171, 10, '::1', 6, 1),
(172, 8, '::1', 6, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Electronics'),
(2, 'Ladies Wears'),
(3, 'Mens Wear'),
(4, 'Kids Wear'),
(5, 'Furnitures'),
(6, 'Home Appliances'),
(7, 'Electronics Gadgets');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `name`, `pass`) VALUES
(1, 'ramu', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `display`
--

CREATE TABLE `display` (
  `id` int(255) NOT NULL,
  `dispalayid` varchar(255) NOT NULL,
  `product_cat` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `display`
--

INSERT INTO `display` (`id`, `dispalayid`, `product_cat`, `image`, `name`) VALUES
(1, 'pid', 'p1', 'pen1.jpg', 'SarkarPen'),
(2, 'pid', 'p2', 'pendrive1.jpg', 'HighBlooth'),
(3, 'pid', 'p3', 'charger.jpg', 'Charger'),
(4, 'pid', 'p1', 'ball1.jpg', 'Glase Ball'),
(5, 'pid', 'p2', 'bat1.jpg', 'GM bat'),
(6, 'pid', 'p3', 'harddisk1.jpg', 'HardDisk');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `time` varchar(255) NOT NULL,
  `p_deliverytime` varchar(255) NOT NULL,
  `trx_id` varchar(255) NOT NULL,
  `p_status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `product_id`, `qty`, `time`, `p_deliverytime`, `trx_id`, `p_status`) VALUES
(42, 3, 9, 1, '22-02-2019 ', '28-02-2019 ', '', ''),
(43, 3, 10, 1, '22-02-2019 ', '01-03-2019 ', '', ''),
(44, 3, 46, 1, '22-02-2019 ', '01-03-2019 ', '', ''),
(45, 3, 45, 1, '22-02-2019 ', '01-03-2019 ', '', ''),
(46, 3, 37, 1, '22-02-2019 ', '01-03-2019 ', '', ''),
(47, 3, 9, 1, '22-02-2019 ', '01-03-2019 ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `Product_brandname` varchar(255) NOT NULL,
  `product_title` varchar(255) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `Product_brandname`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(5, 1, 2, 'Apple', 'iPad 2', 10000, 'samsung ipad', 'ipad 2.jpg', 'ipad tablet samsung'),
(6, 1, 1, 'HP', 'Hp Laptop r series', 35000, 'Hp Red and Black combination Laptop', 'teacup.jpg', 'hp laptop '),
(7, 1, 1, 'Dell', 'Laptop Pavillion', 50000, 'Laptop Hp Pavillion', 'tlanter.jpg', 'Laptop Hp Pavillion'),
(8, 1, 4, 'Sony', 'Sony', 40000, 'Sony Mobile', 'sony mobile.jpg', 'sony mobile'),
(9, 1, 3, 'Apple', 'iPhone New', 12000, 'iphone', 'white iphone.png', 'iphone apple mobile'),
(10, 2, 6, 'Sprinz', 'Red Ladies dress', 1000, 'red dress for girls', 'red dress.jpg', 'red dress '),
(11, 2, 6, '', 'Blue Heave dress', 1200, 'Blue dress', 'images.jpg', 'blue dress cloths'),
(12, 2, 6, 'D&D', 'Ladies Casual Cloths', 1500, 'ladies casual summer two colors pleted', '7475-ladies-casual-dresses-summer-two-colors-pleated.jpg', 'girl dress cloths casual'),
(13, 2, 6, 'RamRaj', 'SpringAutumnDress', 1200, 'girls dress', 'Spring-Autumn-Winter-Young-Ladies-Casual-Wool-Dress-Women-s-One-Piece-Dresse-Dating-Clothes-Medium.jpg_640x640.jpg', 'girl dress'),
(14, 2, 6, 'Levis', 'Casual Dress', 1400, 'girl dress', 'download.jpg', 'ladies cloths girl'),
(15, 2, 6, 'Reymond', 'Formal Look', 1500, 'girl dress', 'shutterstock_203611819.jpg', 'ladies wears dress girl'),
(16, 3, 6, '', 'Sweter for men', 600, '2012-Winter-Sweater-for-Men-for-better-outlook', '2012-Winter-Sweater-for-Men-for-better-outlook.jpg', 'black sweter cloth winter'),
(17, 3, 6, '', 'Gents formal', 1000, 'gents formal look', 'gents-formal-250x250.jpg', 'gents wear cloths'),
(19, 3, 6, '', 'Formal Coat', 3000, 'ad', 'images (1).jpg', 'coat blazer gents'),
(20, 3, 6, 'Summer', 'Mens Sweeter', 1600, 'jg', 'Winter-fashion-men-burst-sweater.png', 'sweeter gents '),
(21, 3, 6, 'Jockey', 'T shirt', 800, 'ssds', 'IN-Mens-Apparel-Voodoo-Tiles-09._V333872612_.jpg', 'formal t shirt black'),
(22, 4, 6, 'Jockey', 'Yellow T shirt ', 1300, 'yello t shirt with pant', '1.0x0.jpg', 'kids yellow t shirt'),
(23, 4, 6, 'Lenin', 'Girls cloths', 1900, 'sadsf', 'GirlsClothing_Widgets.jpg', 'formal kids wear dress'),
(24, 4, 6, '', 'Blue T shirt', 700, 'g', 'images.jpg', 'kids dress'),
(25, 4, 6, '', 'Yellow girls dress', 750, 'as', 'images (3).jpg', 'yellow kids dress'),
(26, 4, 6, 'Reymonds', 'Skyblue dress', 650, 'nbk', 'kids-wear-121.jpg', 'skyblue kids dress'),
(27, 4, 6, 'Jockey', 'Formal look', 690, 'sd', 'image28.jpg', 'formal kids dress'),
(32, 5, 0, '', 'Book Shelf', 2500, 'book shelf', 'furniture-book-shelf-250x250.jpg', 'book shelf furniture'),
(33, 6, 2, 'Godreg', 'Refrigerator', 35000, 'Refrigerator', 'CT_WM_BTS-BTC-AppliancesHome_20150723.jpg', 'refrigerator samsung'),
(34, 6, 4, '', 'Emergency Light', 1000, 'Emergency Light', 'emergency light.JPG', 'emergency light'),
(35, 6, 0, 'Machine', 'Vaccum Cleaner', 6000, 'Vaccum Cleaner', 'images (2).jpg', 'Vaccum Cleaner'),
(36, 6, 5, 'Kanchana', 'Iron', 1500, 'gj', 'iron.JPG', 'iron'),
(37, 6, 5, 'Sony', 'LED TV', 20000, 'LED TV', 'images (4).jpg', 'led tv lg'),
(38, 6, 4, 'Godrej', 'Microwave Oven', 3500, 'Microwave Oven', 'images.jpg', 'Microwave Oven'),
(39, 6, 5, 'Kanchana', 'Mixer Grinder', 2500, 'Mixer Grinder', 'singer-mixer-grinder-mg-46-medium_4bfa018096c25dec7ba0af40662856ef.jpg', 'Mixer Grinder'),
(40, 2, 6, '', 'Formal girls dress', 3000, 'Formal girls dress', 'girl-walking.jpg', 'ladies'),
(45, 1, 2, '', 'Samsung Galaxy Note 3', 10000, '0', 'samsung_galaxy_note3_note3neo.JPG', 'samsung galaxy Note 3 neo'),
(46, 1, 2, '', 'Samsung Galaxy Note 3', 10000, '', 'samsung_galaxy_note3_note3neo.JPG', 'samsung galxaxy note 3 neo'),
(47, 1, 2, '', 'bat', 1200, 'hell', '41OJZebRUoL._SL246_SX190_CR0,0,190,246_.jpg', 'ewfrree');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address_instruction` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`, `country`, `address_instruction`) VALUES
(3, 'ramu', 'b', 'ram@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '9087654321', 'hyd', 'safdsg', 'india', 'sdaz'),
(4, 'ramu', '', 'mah@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '8889998880', '', '', '', ''),
(5, 'srinivas', 'ram1@gmail.com', 'ram1@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '8888888888', '', '', '', ''),
(6, 'satya', 'b', 'ram123@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', '8888888888', 'hyd', 'hyd', 'india', 'sdaz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `display`
--
ALTER TABLE `display`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=185;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `display`
--
ALTER TABLE `display`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
