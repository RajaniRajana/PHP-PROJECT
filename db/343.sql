-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2020 at 11:51 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `earson`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `name` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `message` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`name`, `mail`, `message`) VALUES
('rajani', 'rajani@gmail.com', 'Good Service'),
('Surya', 'surya@yahoo.in', 'Excellent work done by you guys'),
('Hima', 'hima96@mail.com', 'Average service');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `i_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'Tracked'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`i_id`, `p_id`, `o_id`, `status`) VALUES
(1, 63, 1, 'Tracked'),
(2, 67, 2, 'Shipped'),
(3, 76, 2, 'Tracked'),
(7, 36, 3, 'Delivered'),
(9, 32, 3, 'Delivered'),
(13, 48, 7, 'Tracked'),
(14, 68, 7, 'Tracked'),
(15, 71, 8, 'Delivered');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `u_id`, `date`) VALUES
(1, 1, '2020-02-13'),
(2, 2, '2020-02-13'),
(3, 1, '2020-02-13'),
(4, 4, '2020-02-14'),
(5, 4, '2020-02-14'),
(6, 4, '2020-02-14'),
(7, 1, '2020-02-17'),
(8, 4, '2020-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `p_id` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`p_id`, `product_name`, `price`, `product_image`, `product_type`) VALUES
(32, 'Crusher Wireless Headphones', 2500, 'head4.jpg', 'Wireless Headphones'),
(33, 'Crusher Wireless Headphones', 1500, 'head5.jpg', 'Wireless Headphones'),
(34, 'Crusher Wireless Headphones', 1500, 'head7.jpg', 'Wireless Headphones'),
(35, 'Push Truly Wireless Earbuds', 790, 'head1.jpg', 'Wireless Earbuds'),
(36, 'Push Truly Wireless Earbuds', 790, 'head1-1.png', 'Wireless Earbuds'),
(37, 'Push Truly Wireless Earbuds', 790, 'head1-2.png', 'Wireless Earbuds'),
(38, 'Push Truly Wireless Earbuds', 790, 'head1-3.png', 'Wireless Earbuds'),
(39, 'Indyâ„¢ Truly Wireless Earbuds', 2000, 'head2.png', 'Wireless Earbuds'),
(40, 'Indyâ„¢ Truly Wireless Earbuds', 3000, 'head2-1.png', 'Wireless Earbuds'),
(41, 'Indyâ„¢ Truly Wireless Earbuds', 2000, 'head2-2.png', 'Wireless Earbuds'),
(42, 'Cassete Wireless Earbuds', 1390, 'head3.png', 'Wireless Earbuds'),
(43, 'Beats Wireless Bluetooth Headphones', 879, 'h2.jpg', 'Wireless Headphones'),
(44, 'Beats Wireless Bluetooth Headphones', 879, 'h2-1.png', 'Wireless Headphones'),
(45, 'Beats Wireless Bluetooth Headphones', 879, 'h2-2.png', 'Wireless Headphones'),
(46, 'Beats Wireless Bluetooth Headphones', 879, 'h2-3.png', 'Wireless Headphones'),
(47, 'Beannie True Wireless Earbuds', 1299, 'head6.png', 'Wireless Earbuds'),
(48, 'Amazon wired On-Ear Headphones', 1929, 'head0.png', 'Wired Headphones'),
(49, 'Amazon wired On-Ear Headphones', 1929, 'head0-1.png', 'Wired Headphones'),
(50, 'Amazon wired On-Ear Headphones', 2929, 'head0-2.png', 'Wired Headphones'),
(51, 'Bass Immersive Wireless Headphones', 799, 'head5.jpg', 'Wireless Headphones'),
(52, 'Bass Immersive Wireless Headphones', 799, 'head4.jpg', 'Wireless Headphones'),
(53, 'Skull Candy Wireless Headphones', 999, 'head7.jpg', 'Wireless Headphones'),
(54, 'Skull Candy Wireless Headphones', 999, 'head5.jpg', 'Wireless Headphones'),
(55, 'Cassete Wireless On-Ear Headphones', 1309, 'head9.png', 'Wireless Headphones'),
(56, 'Push Wireless Earphone with Beanie', 589, 'head13.png', 'Sport Earphones'),
(57, 'JBL Mini in-Ear Wireless Earphones', 1129, 'head12.png', 'Sport Earphones'),
(58, 'Marshall Wireless On-Ear Headphones', 1239, 'head8.png', 'Wireless Headphones'),
(59, 'Jupiter Wireless Headphones', 1952, 'head11.png', 'Wireless Headphones'),
(60, 'Sony Adjustable Headphones', 1029, 'head10.png', 'Wireless Headphones'),
(61, 'Sony Wireless Earphones', 889, 'head14.png', 'Sport Earphones'),
(62, 'Jupiter True Wireless Earbuds', 779, 'head15.png', 'Wireless Earbuds'),
(63, 'Marshall True Wireless Earbuds with Beanie', 1229, 'head16.png', 'Wireless Earbuds'),
(64, 'Cassete Sport Earphones', 939, 'head17.png', 'Sport Earphones'),
(65, 'Jupiter Sports Earphones', 579, 'head18.png', 'Sport Earphones'),
(66, 'Beannie Wireless Earphones', 1829, 'head19.png', 'Sport Earphones'),
(67, 'Cassete Wired Earphones', 1111, 'WEP1.png', 'Wired Earphones'),
(68, 'Indy Wired Earphones', 1279, 'WEP6.png', 'Wired Earphones'),
(69, 'Push True Wired with Beanie', 1289, 'WEP11.png', 'Wired Earphones'),
(70, 'Extra Cassete Wireless On-Ear Headphones', 1039, 'h3.png', 'Wireless Headphones'),
(71, 'Sony 310 wired headset with mic', 949, 'h4.png', 'Wired Headphones'),
(72, 'Sony Extra Bass Wireless Headphones', 1029, 'h5.png', 'Wireless Headphones'),
(74, 'QCY QS1 Truly Wireless Bluetooth 5.0 Earbuds', 3000, 'earbudsindex.png', 'Wireless Earbuds'),
(76, 'Skullcandy Venue Active Noise Cancellation Wireless Over-Ear Headphone', 1299, 'skull.png', 'Wireless Headphones');

-- --------------------------------------------------------

--
-- Table structure for table `registration_users`
--

CREATE TABLE `registration_users` (
  `id` int(10) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `phone_number` bigint(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(15) NOT NULL,
  `type` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration_users`
--

INSERT INTO `registration_users` (`id`, `first_name`, `last_name`, `phone_number`, `email`, `password`, `address`, `city`, `type`) VALUES
(1, 'Rajani', 'Rajana', 9856984569, 'rajani@gmail.com', '123456', 'Flat:402, Kothapalem, Gopalapatnam', 'Visakhapatnam', 0),
(2, 'Surya', 'Reddy', 8008711416, 'surya@yahoo.in', '123456', 'Dr.no:5-49/2, Sector-2, MVP Colony', 'Visakhapatnam', 0),
(3, 'admin', '', 0, 'admin@gmail.com', '123456', '', '', 1),
(4, 'Prathima', 'Thammana', 7894561235, 'prathima@gmail.com', '123456', 'RTC Complex Road', 'Visakhapatnam', 0),
(5, 'ranjani', 'Penumats', 9584761231, 'ranjani@gmail.com', '123456', 'Gajuwaka', 'Visakhapatnam', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `registration_users`
--
ALTER TABLE `registration_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `orderitems`
--
ALTER TABLE `orderitems`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `p_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `registration_users`
--
ALTER TABLE `registration_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
