-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2022 at 06:41 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rposystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `rpos_admin`
--

CREATE TABLE `rpos_admin` (
  `admin_id` varchar(200) NOT NULL,
  `admin_name` varchar(200) NOT NULL,
  `admin_email` varchar(200) NOT NULL,
  `admin_password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rpos_admin`
--

INSERT INTO `rpos_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
('10e0b6dc958adfb5b094d8935a13aeadbe783c25', 'System Admin', 'admin@mail.com', '903b21879b4a60fc9103c3334e4f6f62cf6c3a2d'),
('2','Aliya Patel','aliyajaved4405@gmail.com','440500');

-- --------------------------------------------------------

--
-- Table structure for table `rpos_customers`
--

CREATE TABLE `rpos_customers` (
  `customer_id` varchar(200) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `customer_phoneno` varchar(200) NOT NULL,
  `customer_email` varchar(200) NOT NULL,
  `customer_password` varchar(200) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rpos_customers`
--

INSERT INTO `rpos_customers` (`customer_id`, `customer_name`, `customer_phoneno`, `customer_email`, `customer_password`, `created_at`) VALUES
('06549ea58afd', 'Ana J. Browne', '4589698780', 'anaj@mail.com', '55c3b5386c486feb662a0785f340938f518d547f', '2022-09-03 12:39:48.523820'),
('1fc1f694985d', 'Jane Doe', '2145896547', 'janed@mail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2022-09-03 13:39:13.076592'),
('27e4a5bc74c2', 'Tammy R. Polley', '4589654780', 'tammy@mail.com', '55c3b5386c486feb662a0785f340938f518d547f', '2022-09-03 12:37:47.049438'),
('29c759d624f9', 'Trina L. Crowder', '5896321002', 'trina@mail.com', '55c3b5386c486feb662a0785f340938f518d547f', '2022-09-03 13:16:18.927595'),
('35135b319ce3', 'Christine Moore', '7412569698', 'christine@mail.com', '55c3b5386c486feb662a0785f340938f518d547f', '2022-09-04 16:29:45.133297'),
('3859d26cd9a5', 'Louise R. Holloman', '7856321000', 'holloman@mail.com', '55c3b5386c486feb662a0785f340938f518d547f', '2022-09-03 12:38:12.149280'),
('57b7541814ed', 'Howard W. Anderson', '8745554589', 'howard@mail.com', '55c3b5386c486feb662a0785f340938f518d547f', '2022-09-03 08:35:10.959590'),
('7c8f2100d552', 'Melody E. Hance', '3210145550', 'melody@mail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2022-09-03 13:16:23.996068'),
('9c7fcc067bda', 'Delbert G. Campbell', '7850001256', 'delbert@mail.com', '55c3b5386c486feb662a0785f340938f518d547f', '2022-09-03 12:38:56.944364'),
('9f6378b79283', 'William C. Gallup', '7145665870', 'william@mail.com', '55c3b5386c486feb662a0785f340938f518d547f', '2022-09-03 12:39:26.507932'),
('d0ba61555aee', 'Jamie R. Barnes', '4125556587', 'jamie@mail.com', '55c3b5386c486feb662a0785f340938f518d547f', '2022-09-03 12:36:59.643216'),
('d7c2db8f6cbf', 'Victor A. Pierson', '1458887896', 'victor@mail.com', '55c3b5386c486feb662a0785f340938f518d547f', '2022-09-03 12:37:21.568155'),
('e711dcc579d9', 'Julie R. Martin', '3245557896', 'julie@mail.com', '55c3b5386c486feb662a0785f340938f518d547f', '2022-09-03 12:38:33.397498'),
('fe6bb69bdd29', 'Brian S. Boucher', '1020302055', 'brians@mail.com', 'a69681bcf334ae130217fea4505fd3c994f5683f', '2022-09-03 13:16:29.591980');

-- --------------------------------------------------------

--
-- Table structure for table `rpos_orders`
--

CREATE TABLE `rpos_orders` (
  `order_id` varchar(200) NOT NULL,
  `order_code` varchar(200) NOT NULL,
  `customer_id` varchar(200) NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `prod_id` varchar(200) NOT NULL,
  `prod_name` varchar(200) NOT NULL,
  `prod_price` varchar(200) NOT NULL,
  `prod_qty` varchar(200) NOT NULL,
  `order_status` varchar(200) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rpos_orders`
--

INSERT INTO `rpos_orders` (`order_id`, `order_code`, `customer_id`, `customer_name`, `prod_id`, `prod_name`, `prod_price`, `prod_qty`, `order_status`, `created_at`) VALUES
('019661e097', 'AEHM-0653', '06549ea58afd', 'Ana J. Browne', 'bd200ef837', 'Bagel', '225', '1', 'Paid', '2022-09-03 13:26:00.389027'),
('49c1bd8086', 'IUSP-9453', 'fe6bb69bdd29', 'Brian S. Boucher', 'd57cd89073', 'Biscoff Cheese Cake', '350', '1', 'Paid', '2022-09-03 11:50:40.812796'),
('514ada5047', 'OTEV-8532', '3859d26cd9a5', 'Louise R. Holloman', '0c4b5c0604', 'Rose Wine', '300', '2', 'Paid', '2022-09-03 13:13:39.042869'),
('6466fd5ee5', 'COXP-6018', '7c8f2100d552', 'Melody E. Hance', '31dfcc94cf', 'Hot Chocolate', '250', '2', 'Paid', '2022-09-03 12:17:44.680896');

-- --------------------------------------------------------

--
-- Table structure for table `rpos_pass_resets`
--

CREATE TABLE `rpos_pass_resets` (
  `reset_id` int(20) NOT NULL,
  `reset_code` varchar(200) NOT NULL,
  `reset_token` varchar(200) NOT NULL,
  `reset_email` varchar(200) NOT NULL,
  `reset_status` varchar(200) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rpos_pass_resets`
--

INSERT INTO `rpos_pass_resets` (`reset_id`, `reset_code`, `reset_token`, `reset_email`, `reset_status`, `created_at`) VALUES
(1, '63KU9QDGSO', '4ac4cee0a94e82a2aedc311617aa437e218bdf68', 'sysadmin@icofee.org', 'Pending', '2020-08-17 15:20:14.318643');

-- --------------------------------------------------------

--
-- Table structure for table `rpos_payments`
--

CREATE TABLE `rpos_payments` (
  `pay_id` varchar(200) NOT NULL,
  `pay_code` varchar(200) NOT NULL,
  `order_code` varchar(200) NOT NULL,
  `customer_id` varchar(200) NOT NULL,
  `pay_amt` varchar(200) NOT NULL,
  `pay_method` varchar(200) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rpos_payments`
--

INSERT INTO `rpos_payments` (`pay_id`, `pay_code`, `order_code`, `customer_id`, `pay_amt`, `pay_method`, `created_at`) VALUES
('0bf592', '9UMWLG4BF8', 'AEHM-0653', '35135b319ce3', '225', 'Cash', '2022-09-04 16:31:54.525284'),
('4423d7', 'QWERT0YUZ1', 'IUSP-9453', '35135b319ce3', '350', 'Cash', '2022-09-04 16:37:03.655834'),
('442865', '146XLFSC9V', 'OTEV-8532', '9c7fcc067bda', '600', 'Paypal', '2022-09-04 16:35:22.470600'),
('65891b', 'MF2TVJA1PY', 'COXP-6018', 'e711dcc579d9', '500', 'Cash', '2022-09-03 13:12:46.959558');
-- --------------------------------------------------------

--
-- Table structure for table `rpos_products`
--

CREATE TABLE `rpos_products` (
  `prod_id` varchar(200) NOT NULL,
  `prod_category` varchar(200) NOT NULL,
  `prod_code` varchar(200) NOT NULL,
  `prod_name` varchar(200) NOT NULL,
  `prod_img` varchar(200) NOT NULL,
  `prod_desc` longtext NOT NULL,
  `prod_price` varchar(200) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rpos_products`
--

INSERT INTO `rpos_products` (`prod_id`, `prod_code`,`prod_category`, `prod_name`, `prod_img`, `prod_desc`, `prod_price`, `created_at`) VALUES
('06dc36c1be', 'FCWU-5762', 'Meat','Bacon', 'breakfast-1.jpeg', 'Each strip is expertly cured and smoked to achieve a savory balance of salty and smoky goodness, with a crispy texture that enhances any dish.', '150', '2024-09-03 11:02:47.738370'),
('0c4b5c0604', 'JRZN-9518', 'Non-Veg','Scrambled Eggs', 'breakfast-2.jpg', 'Each bite offers a delicate balance of buttery richness and subtle seasoning, making them the ideal start to your day or a satisfying addition to any meal.', '100', '2024-09-03 10:43:27.610897'),
('0c4b5c0604', 'FOEV-9818', 'Indian Cuisine','Dal Fry', 'lunch-1.jpeg', 'Each bowl offers a hearty, satisfying experience with a perfect balance of savory and spicy notes.', '250', '2024-09-03 10:43:27.610897'),
('0c4b5c0604', 'XYAZ-0909', 'South Indian','Idli', 'idli.jpg', 'Idli is known for being light, nutritious, and easily digestible.', '180', '2024-09-03 10:43:27.610897');


-- --------------------------------------------------------

--
-- Table structure for table `rpos_staff`
--

CREATE TABLE `rpos_staff` (
  `staff_id` int(20) NOT NULL,
  `staff_name` varchar(200) NOT NULL,
  `staff_number` varchar(200) NOT NULL,
  `staff_email` varchar(200) NOT NULL,
  `staff_dept` varchar(200) NOT NULL,
  `staff_password` varchar(200) NOT NULL,
  `created_at` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rpos_staff`
--

INSERT INTO `rpos_staff` (`staff_id`, `staff_name`, `staff_number`, `staff_email`, `staff_dept` ,`staff_password`, `created_at`) VALUES
(2, 'Trevor', 'QEUY-9042', 'cashier@mail.com', 'cashier','903b21879b4a60fc9103c3334e4f6f62cf6c3a2d', '2022-09-04 16:11:30.581882');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rpos_admin`
--
ALTER TABLE `rpos_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `rpos_customers`
--
ALTER TABLE `rpos_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `rpos_orders`
--
ALTER TABLE `rpos_orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `CustomerOrder` (`customer_id`),
  ADD KEY `ProductOrder` (`prod_id`);

--
-- Indexes for table `rpos_pass_resets`
--
ALTER TABLE `rpos_pass_resets`
  ADD PRIMARY KEY (`reset_id`);

--
-- Indexes for table `rpos_payments`
--
ALTER TABLE `rpos_payments`
  ADD PRIMARY KEY (`pay_id`),
  ADD KEY `order` (`order_code`);



--
-- Indexes for table `rpos_staff`
--
ALTER TABLE `rpos_staff`
  ADD PRIMARY KEY (`staff_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rpos_pass_resets`
--
ALTER TABLE `rpos_pass_resets`
  MODIFY `reset_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `rpos_staff`
--
ALTER TABLE `rpos_staff`
  MODIFY `staff_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
