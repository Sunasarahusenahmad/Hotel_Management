-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 02, 2022 at 04:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `hotel_dish`
--

CREATE TABLE `hotel_dish` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `dish_name` varchar(50) NOT NULL,
  `dish_price` int(11) NOT NULL,
  `dish_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_dish`
--

INSERT INTO `hotel_dish` (`id`, `menu_id`, `hotel_name`, `dish_name`, `dish_price`, `dish_category`) VALUES
(1, 2, 'Taj', 'Chicken Tawa', 250, 'Veg'),
(2, 1, 'Patel', 'Pulav Rise', 150, 'Non-Vage'),
(3, 4, 'Apsara', 'Mutton Salan', 270, 'Veg'),
(4, 5, 'Lilivadi', 'Pow Bhaji', 99, 'Non-Vage'),
(5, 2, 'Cappel', 'Chickel Biriyani', 70, 'Veg'),
(6, 1, 'Lilivadi', 'Pulav Mutton Rise', 180, 'Non-Vage'),
(7, 1, 'Cappel', 'Rajvadi Rise', 80, 'Veg'),
(8, 6, 'Ami', 'Fry Egg', 45, 'Non-Vage');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_facilites`
--

CREATE TABLE `hotel_facilites` (
  `facilites_id` int(11) NOT NULL,
  `hotel_facilites_desc` varchar(255) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_facilites`
--

INSERT INTO `hotel_facilites` (`facilites_id`, `hotel_facilites_desc`, `hotel_name`, `email`, `status`) VALUES
(1, 'Are You Provide Computer Service ? ', 'Taj', 'hoteltaj@gmail.com', 1),
(2, 'Have a Conference and Meeting Room in Your Hotel ?', 'Apsara', 'hotelapsara@gmail.com', 1),
(3, 'Have a Gym Service in Your Hotel ?', 'Lilivadi', 'hotellilivadi@gmail.com', 1),
(4, 'Have a Health Service in Your Hotel ?', 'Patel', 'hotelpatel@gmail.com', 0),
(5, 'Have a Parking in Your Hotel ?', 'Ami', 'hotelami@gmail.com', 1),
(6, 'Have a Toilate in Your Hotel ?', 'Cappel', 'hotelcappel@gmail.com', 0),
(7, 'Have a Watchman in Your Hotel ?', 'Cappel', 'hotelcappel@gmail.com', 1),
(8, 'Have a Garden Facility In Your Hotel ?', 'Ami', 'hotelami@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hotel_info`
--

CREATE TABLE `hotel_info` (
  `hotel_id` int(11) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `hotel_address` varchar(50) NOT NULL,
  `hotel_contact` varchar(50) NOT NULL,
  `hotel_ownername` varchar(50) NOT NULL,
  `editor1` varchar(255) NOT NULL,
  `hotel_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_info`
--

INSERT INTO `hotel_info` (`hotel_id`, `hotel_name`, `hotel_address`, `hotel_contact`, `hotel_ownername`, `editor1`, `hotel_image`) VALUES
(1, 'Hotel Taj', 'Ahmedabad - Palanpur Highway, Chhapi road, Chhapi', '2345678912', 'Mr, XYZ', '<p><span style=\"font-family:Courier New,Courier,monospace\">My Hotel is a</span> <span style=\"color:#1abc9c\"><em><strong>BEST.</strong></em> </span></p>\r\n', 'room-2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_menu`
--

CREATE TABLE `hotel_menu` (
  `menu_id` int(11) NOT NULL,
  `add_menu` varchar(50) NOT NULL,
  `menu_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_menu`
--

INSERT INTO `hotel_menu` (`menu_id`, `add_menu`, `menu_name`) VALUES
(1, 'Eid', 'Rise'),
(2, 'Eid', 'Chicken'),
(4, 'Diwali', 'Salan'),
(5, 'Diwali', 'Sabji'),
(6, 'Diwali', 'Egg');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_servieces`
--

CREATE TABLE `hotel_servieces` (
  `servieces_id` int(11) NOT NULL,
  `servieces_name` varchar(255) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotel_servieces`
--

INSERT INTO `hotel_servieces` (`servieces_id`, `servieces_name`, `hotel_name`, `email`, `status`) VALUES
(1, 'Are You Provide Car Rental Servieces ?', 'Taj', 'hoteltaj@gmail.com', 0),
(2, 'Are You Provide Catring Room Servieces ?', 'Apsara', 'hotelapsara@gmail.com', 0),
(3, 'Are You Provide Coorier Servieces ?', 'Lilivadi', 'hotellilivadi@gmail.com', 1),
(4, 'Are You Provide Doctor On Call Servieces ?', 'Patel', 'hotelpatel@gmail.com', 0),
(5, 'Are You Provide Tickete Servieces ?', 'Ami', 'hotelami@gmail.com', 1),
(6, 'Are You Provide in the Toilate & Bathroom ?', 'Cappel', 'hotelcappel@gmail.com', 1),
(7, 'Are You Provide Tisue Paper ?', 'Bhojpuri', 'hotelbhojpuri@gmail.com', 0),
(8, 'Are You Provide Clean Toilet Servieces ?', 'Taj', 'hoteltaj@gmail.com', 0),
(9, 'Are You Provide a Boys In Hotel Work ?', 'Cappel', 'hotelcappel@gmail.com', 0),
(10, 'Are You Provide Garden In Your Hotel ?', 'Taj', 'hoteltaj@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `published_hotel`
--

CREATE TABLE `published_hotel` (
  `id` int(11) NOT NULL,
  `hotel_name` varchar(50) NOT NULL,
  `hotel_address` varchar(255) NOT NULL,
  `owner_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hotel_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `published_hotel`
--

INSERT INTO `published_hotel` (`id`, `hotel_name`, `hotel_address`, `owner_name`, `email`, `password`, `hotel_image`) VALUES
(1, 'Taj', 'Ahmedabad - Palanpur Highway, Chhapi road, Chhapi', 'Mr, XYZ', 'hoteltaj@gmail.com', 'xyz', 'gallery-4.jpg'),
(2, 'Patel', 'Ahmedabad - Palanpur Highway, Palanpur', 'Mr, ABC', 'hotelpatel@gmail.com', 'abc', 'blog-wide.jpg'),
(3, 'Apsara', 'Ahmedabad - Palanpur Highway, Chhapi road, Chhapi', 'Mr, MNP', 'hotelapsara@gmail.com', 'mnp', 'room-2.jpg\r\n'),
(4, 'Ami', 'Ahmedabad - Palanpur Highway, Chhapi road, Chhapi', 'Mr, KLM', 'hotelami@gmail.com', 'klm', 'gallery-3.jpg'),
(5, 'Cappel', 'Ahmedabad - Palanpur Highway, Palanpur', 'Mr, Kapur', 'hotelcappel@gmail.com', 'kapur', 'gallery-2.jpg'),
(6, 'Lilivadi', 'Teniwada Highway Palanpur', 'Mr, John', 'hotellilivadi@gmail.com', 'john', 'gallery-1.jpg'),
(7, 'Bhojpuri', 'Ajmer to Udaipur Highway, Rajasthan', 'Mr, Kundan', 'hotelbhojpuri@gmail.com', 'kundan', 'blog-4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hotel_dish`
--
ALTER TABLE `hotel_dish`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_facilites`
--
ALTER TABLE `hotel_facilites`
  ADD PRIMARY KEY (`facilites_id`);

--
-- Indexes for table `hotel_info`
--
ALTER TABLE `hotel_info`
  ADD PRIMARY KEY (`hotel_id`);

--
-- Indexes for table `hotel_menu`
--
ALTER TABLE `hotel_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `hotel_servieces`
--
ALTER TABLE `hotel_servieces`
  ADD PRIMARY KEY (`servieces_id`);

--
-- Indexes for table `published_hotel`
--
ALTER TABLE `published_hotel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hotel_dish`
--
ALTER TABLE `hotel_dish`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hotel_facilites`
--
ALTER TABLE `hotel_facilites`
  MODIFY `facilites_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hotel_info`
--
ALTER TABLE `hotel_info`
  MODIFY `hotel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hotel_menu`
--
ALTER TABLE `hotel_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hotel_servieces`
--
ALTER TABLE `hotel_servieces`
  MODIFY `servieces_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `published_hotel`
--
ALTER TABLE `published_hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
