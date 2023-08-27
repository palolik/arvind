-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 19, 2023 at 05:14 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminup`
--

DROP TABLE IF EXISTS `adminup`;
CREATE TABLE IF NOT EXISTS `adminup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)  AUTO_INCREMENT=6  ;

--
-- Dumping data for table `adminup`
--

INSERT INTO `adminup` (`id`, `user_name`, `password`) VALUES
(2, 'tanveen', 'q'),
(3, 'tanveen', 'ddd'),
(5, 'pp', 'pp');

-- --------------------------------------------------------

--
-- Table structure for table `affiliate`
--

DROP TABLE IF EXISTS `affiliate`;
CREATE TABLE IF NOT EXISTS `affiliate` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `presentaddress` varchar(255) NOT NULL,
  `permanentaddress` varchar(255) NOT NULL,
  `institutionname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `bkash` varchar(255) NOT NULL,
  `nid` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `confirmpassword` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)  AUTO_INCREMENT=19  ;

--
-- Dumping data for table `affiliate`
--

INSERT INTO `affiliate` (`id`, `name`, `email`, `mobileno`, `presentaddress`, `permanentaddress`, `institutionname`, `department`, `bkash`, `nid`, `password`, `confirmpassword`, `user_name`, `photo`) VALUES
(1, 'opu', 'masfiqunahmed2@gmail.com', 'd', 'f', 's', 'mymensingh engineering college', 'cse', 'f', 'a', 'f', 'd', 'ff', '973967.jpg'),
(2, 'm', 'masfiqunahmed2@gmail.com', 'm', 'm', 'm', 'm', 'm', 'm', 'mmm', 'm', 'm', 'm', '644140.jpg'),
(12, 'opu', 'masfiqunahmed2@gmail.com', 'd', 'm', 'm', 'mymensingh engineering college', 'cse', 'f', 'Goku-Super-Saiyan-Decal-Dragon-Ball-Z-DBZ.jpg', 'a', 'g', 'masfiqun', 'Goku-Super-Saiyan-Decal-Dragon-Ball-Z-DBZ.jpg'),
(7, 'g', 'g@gmai.com', 'g', 'g', 'gg', 'g', 'g', 'g', 'Masfiqun (9)_1.png', 'g', 'g', 'g', 'Masfiqun (9)_1.png'),
(14, '', '', '', '', '', '', '', '', '1263.jpg', '', '', '', '1263.jpg'),
(17, '', '', '', '', '', '', '', '', '67677378-flying-bird-vector-illustration-.jpg', '', '', '', '67677378-flying-bird-vector-illustration-.jpg'),
(18, '', '', '', '', '', '', '', '', 'charlie-chaplin-line-art-portrait-vector-illustration-template-historical-people-eps-212884670.jpg', '', '', '', 'charlie-chaplin-line-art-portrait-vector-illustration-template-historical-people-eps-212884670.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buyersignup`
--

DROP TABLE IF EXISTS `buyersignup`;
CREATE TABLE IF NOT EXISTS `buyersignup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `emailaddress` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `confirmpassword` varchar(100) NOT NULL,
  `user_name` varchar(5000) NOT NULL,
  `district` varchar(100) NOT NULL,
  `subdistrict` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
)  AUTO_INCREMENT=25  ;

--
-- Dumping data for table `buyersignup`
--

INSERT INTO `buyersignup` (`id`, `name`, `mobileno`, `emailaddress`, `password`, `confirmpassword`, `user_name`, `district`, `subdistrict`, `address`) VALUES
(12, 'b', 'b', 'bb', 'b', 'b', 'b', '', '', ''),
(16, 'g', 'g', 'g', 'g', 'g', 'g', '', '', ''),
(14, 'c', 'c', 'c', 'c', 'c', 'c', '', '', ''),
(15, 'f', 'f', 'f', 'f', 'f', 'f', '', '', ''),
(19, 'opu', 'd', 'hh@gmail.com', 'g', 'g', 'w', '', '', ''),
(20, 'manly', 'gg', 'opu@gmail.com', 'nothing', 'nothing', 'manly', '', '', ''),
(21, 'down', 'fancy', 'fancy@gmail.com', 'weeb', 'weeb', 'jimmy', '', '', ''),
(22, 'litonb', 'habibi', 'habibi@gmail.com', 'yohobbb', 'yohobbb', 'liton', '', '', ''),
(23, 'happyddb', 'happyddb', 'happy@gmail.com', 'happyddb', 'happyddb', 'happyddb', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

DROP TABLE IF EXISTS `cart_items`;
CREATE TABLE IF NOT EXISTS `cart_items` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `quantity` double NOT NULL,
  `user_id` int NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
)  AUTO_INCREMENT=121 DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `cart_items`
--

INSERT INTO `cart_items` (`id`, `product_id`, `quantity`, `user_id`, `created`, `modified`) VALUES
(120, 686, 1, 1, '2023-07-19 16:48:53', '2023-07-19 16:48:53');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `category` varchar(255) NOT NULL,
  `sub_category` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
)  AUTO_INCREMENT=19  ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`, `sub_category`) VALUES
(16, 'fan', 'table fan'),
(15, 'book', ''),
(18, 'money', ''),
(13, 'light', '');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `pid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `buyerid` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
)  AUTO_INCREMENT=204  ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `pid`, `buyerid`, `comment`) VALUES
(177, '477 ', 'o', 'k'),
(176, '477 ', 'o', 'k'),
(175, '477', 'ppppp', 'ppppppp'),
(149, '477', 'bal', 'sal'),
(174, '477', 'ppppp', 'ppppppp'),
(203, '487 ', 'but why  is that', 'do you know ');

-- --------------------------------------------------------

--
-- Table structure for table `delevery`
--

DROP TABLE IF EXISTS `delevery`;
CREATE TABLE IF NOT EXISTS `delevery` (
  `orderid` int NOT NULL AUTO_INCREMENT,
  `buyerid` varchar(100) NOT NULL,
  `cname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `phone` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `district` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `subdistrict` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `address` varchar(100) NOT NULL,
  `productname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `productid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sellerid` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `price` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `deliverydate` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stat` varchar(100) NOT NULL,
  `quan` varchar(100) NOT NULL,
  PRIMARY KEY (`orderid`)
)  AUTO_INCREMENT=57  ;

--
-- Dumping data for table `delevery`
--

INSERT INTO `delevery` (`orderid`, `buyerid`, `cname`, `email`, `phone`, `district`, `subdistrict`, `address`, `productname`, `productid`, `sellerid`, `price`, `deliverydate`, `stat`, `quan`) VALUES
(40, '', 'p', 'p', 'p', 'p', 'p', 'p', 'Buds', '479', '5', '350', 'pending', 'pending', '1'),
(41, '', 's', 's', 's', 's', 's', 's', 'Buds', '479', '5', '350', 'pending', 'pending', '1'),
(38, '', 'a', 'a', 'a', 'a', 'a', 'a', 'Buds', '479', '5', '350', 'pending', 'pending', '1'),
(39, '', 'a', 'a', 'a', 'a', 'a', 'a', 'Buds', '479', '5', '350', 'pending', 'pending', '1'),
(36, '', 's', 's', 's', 's', 's', 's', 'Sharingan', '502', '5', '200', 'pending', 'pending', '1'),
(37, '', 'a', 'a', 'a', 'a', 'a', 'a', 'Buds', '479', '5', '350', 'pending', 'pending', '1'),
(35, '', 's', 's', 's', 's', 's', 's', 'Sharingan', '502', '5', '200', 'pending', 'pending', '1'),
(34, '', 's', 's', 's', 's', 's', 's', 'Sharingan', '502', '5', '200', 'pending', 'pending', '1'),
(33, '', 'prottoy', 'azizulalamprottoy@gmail.com', '01682508906', 'mymensingh', 'khagdohor', 'ghunti ,oposite to shahi moshjid , shahcement building ,3rd floor , right to the stairs', 'Sharingan', '502', '4', '200', '14 jun 2023', 'On the Way', '1'),
(32, '', 's', 's', 's', 's', 's', 's', 'Artificial', '507', '4', '200', 'pending', 'pending', '1'),
(31, '', 's', 's', 's', 's', 's', 's', 'Artificial', '504', '4', '200', 'pending', 'pending', '1'),
(30, '', 's', 's', 's', 's', 's', 's', 'Artificial', '502', '4', '200', 'pending', 'pending', '1'),
(29, '', 's', 's', 's', 's', 's', 's', 'Artificial', '493', '4', '200', 'pending', 'pending', '1'),
(42, '', 's', 's', 's', 's', 's', 's', 'Buds', '479', '5', '350', 'pending', 'pending', '1'),
(43, '', 's', 's', 's', 's', 's', 's', 'Buds', '479', '5', '350', 'pending', 'pending', '1'),
(44, '', 's', 's', 's', 's', 's', 's', 'Buds', '479', '5', '350', 'pending', 'pending', '1'),
(45, '', 's', 's', 's', 's', 's', 's', 'Buds', '479', '5', '350', 'pending', 'pending', '1'),
(46, '', 's', 's', 's', 's', 's', 's', 'Buds', '479', '5', '350', 'pending', 'pending', '1'),
(47, '', 's', 's', 's', 's', 's', 's', 'Buds', '479', '5', '350', 'pending', 'pending', '1'),
(48, '', 's', 's', 's', 's', 's', 's', 'Buds', '479', '5', '350', 'pending', 'pending', '1'),
(49, '', 'a', 'a', 'a', 'a', 'a', 'a', 'Buds', '479', '5', '350', 'pending', 'pending', '1'),
(50, '', 's', 's', 's', 's', 's', 's', 'Buds', '479', '5', '350', 'pending', 'pending', '1'),
(51, '', 'bal', 'chal', 'bal', 'chal', 'bal', 'chal', 'Pure', '478', '5', '350', 'pending', 'pending', '1'),
(52, '478', 'jh', 'gf', 'yt', 'hg', 'bn', 'vb', 'Pure', '478', '5', '350', 'pending', 'pending', '1'),
(53, '478', 'jh', 'gf', 'yt', 'hg', 'bn', 'vb', 'Pure', '478', '5', '350', 'pending', 'pending', '1'),
(54, '478', 'jh', 'gf', 'yt', 'hg', 'bn', 'vb', 'Pure', '478', '5', '350', 'pending', 'pending', '1'),
(55, '478', 'jh', 'gf', 'yt', 'hg', 'bn', 'vb', 'Pure', '478', '5', '350', 'pending', 'pending', '1'),
(56, '7', 'a', 'a', 'a', 'dis', 'sub', 'jani na', 'silicon', '487', '5', '200', 'pending', 'pending', '1');

-- --------------------------------------------------------

--
-- Table structure for table `productdetails`
--

DROP TABLE IF EXISTS `productdetails`;
CREATE TABLE IF NOT EXISTS `productdetails` (
  `id` int NOT NULL AUTO_INCREMENT,
  `value` int NOT NULL,
  `folder_location` int NOT NULL,
  `quantity` int NOT NULL,
  `price` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `specification` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `shortdescription` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `longdescription` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `variation` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `availability` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `category` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `subcategory` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `weight` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image2` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image3` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image4` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image5` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image6` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `affiliate_code` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sellerid` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
)  AUTO_INCREMENT=687  ;

--
-- Dumping data for table `productdetails`
--

INSERT INTO `productdetails` (`id`, `value`, `folder_location`, `quantity`, `price`, `name`, `specification`, `shortdescription`, `longdescription`, `variation`, `availability`, `category`, `subcategory`, `weight`, `image`, `image2`, `image3`, `image4`, `image5`, `image6`, `affiliate_code`, `sellerid`) VALUES
(686, 21, 44, 0, 'i', 'i', 'i', 'i                        ', ' i                       ', 'i', 'i', 'i', 'i', 'i', 'fff.png', 'Screenshot_1686063904.png', 'gfh.png', 'fff.png', 'ban.png', 'abbu.png', '', '4');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(512) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created` datetime NOT NULL,
  `modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
)  AUTO_INCREMENT=41 DEFAULT CHARSET=latin1 COMMENT='products that can be added to cart';

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `rid` int NOT NULL AUTO_INCREMENT,
  `productid` int NOT NULL,
  `buyerid` int NOT NULL,
  `review` int NOT NULL,
  `picloc` int NOT NULL,
  `rating` int NOT NULL,
  PRIMARY KEY (`rid`)
)   ;

-- --------------------------------------------------------

--
-- Table structure for table `sellersignup`
--

DROP TABLE IF EXISTS `sellersignup`;
CREATE TABLE IF NOT EXISTS `sellersignup` (
  `id` int NOT NULL AUTO_INCREMENT,
  `foldername` varchar(100) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mobileno` varchar(500) NOT NULL,
  `emailaddress` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `sellerphoto` varchar(500) NOT NULL,
  `logo` varchar(500) NOT NULL,
  `selleraddress` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `businessname` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nid` varchar(500) NOT NULL,
  `password` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `confirmpassword` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `user_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
)  AUTO_INCREMENT=45  ;

--
-- Dumping data for table `sellersignup`
--

INSERT INTO `sellersignup` (`id`, `foldername`, `name`, `mobileno`, `emailaddress`, `sellerphoto`, `logo`, `selleraddress`, `businessname`, `nid`, `password`, `confirmpassword`, `user_name`) VALUES
(4, '44', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o', 'o'),
(5, '55', 'gfgf', 'gfgf', 'tyty', 'ere', 'dff', 'rt', 'fd', 'rt', 'aa', 'yt', 'aa'),
(43, '99', 'jj', 'jj', 'jj@gmail.bom', 'chinese-dragon-vector-20412139.jpg', 'Goku-Super-Saiyan-Decal-Dragon-Ball-Z-DBZ.jpg', 'kj', 'jk', 'without_acc.png', 'jk', 'jk', 'kj'),
(44, '43', '', '', '', '', '', '', '', '', '', '', ''),
(42, 'check', 'jj', 'jj', 'jj@gmail.bom', '', '', 'kj', 'jk', '', 'jk', 'jk', 'kj');

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

DROP TABLE IF EXISTS `views`;
CREATE TABLE IF NOT EXISTS `views` (
  `name` varchar(255) NOT NULL,
  `value` int NOT NULL
)   ;

--
-- Dumping data for table `views`
--

INSERT INTO `views` (`name`, `value`) VALUES
('hits', 576),
('0', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
