-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2020 at 05:24 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eyefinddb`
--

-- --------------------------------------------------------

--
-- Table structure for table `eye_categories`
--

CREATE TABLE `eye_categories` (
  `Cat_ID` int(2) NOT NULL,
  `Cat_Name` varchar(255) NOT NULL,
  `Cat_desc` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eye_categories`
--

INSERT INTO `eye_categories` (`Cat_ID`, `Cat_Name`, `Cat_desc`) VALUES
(1, 'MEDIA AND ENTERTAINMENT', 'MEDIA AND ENTERTAINMENT'),
(2, 'FOOD AND DRINKS', 'FOOD AND DRINKS'),
(3, 'MONEY AND SERVICES', 'MONEY AND SERVICES'),
(4, 'TRAVEL AND TRANSPORT', 'TRAVEL AND TRANSPORT'),
(5, 'FASHION AND HEALTH', 'FASHION AND HEALTH');

-- --------------------------------------------------------

--
-- Table structure for table `eye_subcategories`
--

CREATE TABLE `eye_subcategories` (
  `Cat_ID` int(2) NOT NULL,
  `SUBCATID` int(3) NOT NULL,
  `Sub_Cat_Name` varchar(255) NOT NULL,
  `Sub_Cat_Desc` varchar(2000) NOT NULL,
  `SuB_Cat_Link` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eye_subcategories`
--

INSERT INTO `eye_subcategories` (`Cat_ID`, `SUBCATID`, `Sub_Cat_Name`, `Sub_Cat_Desc`, `SuB_Cat_Link`) VALUES
(1, 1, 'Google Email', 'Google Email', 'https://www.gmail.com'),
(1, 2, 'WhatsApp Web', 'WhatsApp Web', 'https://web.whatsapp.com/'),
(1, 3, 'Instagram', 'Instagram', 'https://www.instagram.com/'),
(1, 4, 'Netflix', 'Netflix', 'https://www.netflix.com/in/'),
(1, 5, 'Youtube', 'Youtube', 'https://www.youtube.com/'),
(1, 6, 'Facebook', 'Facebook', 'https://www.facebook.com/'),
(1, 7, 'Amazon prime', 'Amazon prime', 'https://www.primevideo.com/'),
(1, 8, 'Twitter', 'Twitter', 'https://twitter.com/explore'),
(1, 9, 'Hotstar', 'Hotstar', 'https://www.hotstar.com/in'),
(1, 10, 'Zee5', 'Zee5', 'https://www.zee5.com/'),
(1, 11, 'Tumblr', 'Tumblr', 'https://www.tumblr.com/'),
(1, 12, 'Reddit', 'Reddit', 'https://www.reddit.com/'),
(2, 1, 'Swiggy', 'Swiggy', 'https://www.swiggy.com/'),
(2, 2, 'Zomato', 'Zomato', 'https://www.zomato.com/india'),
(2, 3, 'UberEats', 'UberEats', 'https://www.ubereats.com/'),
(2, 4, 'Dunzo', 'Dunzo', 'https://www.dunzo.com/'),
(2, 5, 'Faasos', 'Faasos', 'https://order.faasos.io/'),
(2, 6, 'Domino\'s', 'Domino\'s', 'https://pizzaonline.dominos.co.in/?'),
(2, 7, 'Pizza Hut', 'Pizza Hut', 'https://www.pizzahut.co.in/'),
(2, 8, 'Box8', 'Box8', 'https://box8.in/'),
(2, 9, 'Bigbasket', 'Bigbasket', 'https://www.bigbasket.com/'),
(2, 10, 'Grofers', 'Grofers', 'https://grofers.com/'),
(2, 11, 'Nature\'s Basket', 'Nature\'s Basket', 'https://www.naturesbasket.co.in/'),
(2, 12, 'Amazon Pantry', 'Amazon Pantry', 'https://www.amazon.com/Prime-Pantry/b?ie=UTF8&node=7301146011'),
(2, 13, 'Dmart', 'Dmart', 'https://www.dmartindia.com/'),
(2, 14, 'Big Bazaar', 'Big Bazaar', 'https://www.bigbazaar.com/'),
(3, 1, 'Online SBI', 'Online SBI', 'https://www.onlinesbi.com/'),
(3, 2, 'PNB India', 'PNB India', 'https://www.pnbindia.in/'),
(3, 3, 'HDFC BANK', 'HDFC BANK', 'https://www.hdfcbank.com/'),
(3, 4, 'Axis bank', 'Axis bank', 'https://www.axisbank.com'),
(3, 5, '99acres', '99acres', 'https://www.99acres.com/'),
(3, 6, 'MagicBricks', 'MagicBricks', 'https://www.magicbricks.com/'),
(3, 7, 'NoBroker', 'NoBroker', 'https://www.nobroker.in/'),
(3, 8, 'Housing', 'Housing', 'https://housing.com/'),
(3, 9, 'Amazon', 'Amazon', 'https://www.amazon.in/'),
(3, 10, 'Flipchart', 'Flipkart', 'https://www.flipkart.com/'),
(3, 11, 'Snapdeal', 'Snapdeal', 'https://www.snapdeal.com/'),
(3, 12, 'Aliexpress', 'Aliexpress', 'https://www.aliexpress.com/'),
(3, 13, 'TataCliq', 'TataCliq', 'https://www.tatacliq.com/'),
(4, 1, 'Ola cabs', 'Ola cabs', 'https://www.olacabs.com'),
(4, 2, 'Uber', 'Uber', 'https://www.uber.com/in/en/'),
(4, 3, 'Redbus', 'Redbus', 'https://www.redbus.in/'),
(4, 4, 'Makemytrip', 'Makemytrip', 'https://www.makemytrip.com'),
(4, 5, 'Trip advisor', 'Trip advisor', 'https://www.tripadvisor.in'),
(4, 6, 'Flipkart Flights', 'Flipkart Flights', 'https://www.flipkart.com/travel/flights?otracker=nmenu_Flights'),
(4, 7, 'Expedia', 'Expedia', 'https://www.expedia.co.in/'),
(4, 8, 'Trivago', 'Trivago', 'https://www.trivago.in/'),
(4, 9, 'Airbnb', 'Airbnb', 'https://www.airbnb.co.in/'),
(5, 1, 'Zara', 'Zara', 'https://www.zara.com/in/'),
(5, 2, 'Mango', 'Mango', 'https://shop.mango.com/in'),
(5, 3, 'Nike', 'Nike', 'https://www.nike.com/in/'),
(5, 4, 'Myntra', 'Myntra', 'https://www.myntra.com/'),
(5, 5, 'H&M', 'H&M', 'https://www2.hm.com/en_in/'),
(5, 6, 'Nykaa', 'Nykaa', 'https://www.nykaa.com/'),
(5, 7, 'Firstcry', 'Firstcry', 'https://www.firstcry.com/'),
(5, 8, 'Amazon Fashion', 'Amazon Fashion', 'https://www.amazon.in/b?node=6648217031'),
(5, 9, 'Flipkart Fashion', 'FlipKart Fashion', 'https://www.flipkart.com/clothing-and-accessories/pr?sid=clo&marketplace=FLIPKART'),
(5, 10, 'Ajio', 'Ajio', 'https://www.ajio.com/'),
(5, 12, '1mg', '1mg', 'https://www.1mg.com/'),
(5, 13, 'Webmd', 'Webmd', 'https://www.webmd.com/'),
(5, 14, 'WHO', 'WHO', 'https://www.who.int/countries/ind/en/'),
(5, 15, 'Patanjali', 'Patanjali', 'https://www.patanjaliayurved.net/'),
(5, 16, 'Medlife', 'Medlife', 'https://www.medlife.com/'),
(5, 17, 'Pharmeasy', 'Pharmeasy', 'https://pharmeasy.in/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eye_categories`
--
ALTER TABLE `eye_categories`
  ADD PRIMARY KEY (`Cat_ID`);

--
-- Indexes for table `eye_subcategories`
--
ALTER TABLE `eye_subcategories`
  ADD PRIMARY KEY (`Cat_ID`,`SUBCATID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
