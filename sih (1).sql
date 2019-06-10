-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2019 at 02:17 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih`
--

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `user_name` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_category` varchar(255) NOT NULL,
  `product_cost` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`user_name`, `product_name`, `product_category`, `product_cost`, `product_description`, `image`, `location`) VALUES
('', '', '', '', '', ' ', 'images/'),
('adi', 'HANDICRAFT 1', 'CRAFT ITEMS', '$20', 'We are engaged in manufacturing an enormous range of wooden handicraft items which is meticulously designed and created keeping in mind the ever-changing market trends. We want to take the privilege to present our unique creation of wooden handicraft items that depicts the true India craftsmanship. We have always abided by the compliance issues of buyers so as to cater their ever growing requirements. We make use only finest quality wooden only during the production process which is chemically treated before its manufacturing. We are widely recognized as largest integrated wooden handicraft items manufacturer and supplier in India. We have employed dexterous craftsmen that pay special emphasis to each & every specification during the production process. We have a huge variety of wooden handicrafts items which are available in different designs, shapes and sizes.', ' img1.jpg', 'images/img1.jpg'),
('adi', 'HANDICRAFT 2', 'CRAFT ITEMS', '$25', 'We are engaged in manufacturing an enormous range of wooden handicraft items which is meticulously designed and created keeping in mind the ever-changing market trends. We want to take the privilege to present our unique creation of wooden handicraft items that depicts the true India craftsmanship. We have always abided by the compliance issues of buyers so as to cater their ever growing requirements. We make use only finest quality wooden only during the production process which is chemically treated before its manufacturing. We are widely recognized as largest integrated wooden handicraft items manufacturer and supplier in India. We have employed dexterous craftsmen that pay special emphasis to each & every specification during the production process. We have a huge variety of wooden handicrafts items which are available in different designs, shapes and sizes.', ' img2.jpg', 'images/img2.jpg'),
('adi', 'HANDICRAFT 3', 'PAINTINGS', '$5', 'We are engaged in manufacturing an enormous range of wooden handicraft items which is meticulously designed and created keeping in mind the ever-changing market trends. We want to take the privilege to present our unique creation of wooden handicraft items that depicts the true India craftsmanship. We have always abided by the compliance issues of buyers so as to cater their ever growing requirements. We make use only finest quality wooden only', ' img6.jpg', 'images/img6.jpg'),
('adi', 'HANDICRAFT 4', ' WOODEN ART', '$2', 'We are engaged in manufacturing an enormous range of wooden handicraft items which is meticulously designed and created keeping in mind the ever-changing market trends. We want to take the privilege to present our unique creation of wooden handicraft items that depicts the true India craftsmanship. We have always abided by the compliance issues of buyers so as to cater their ever growing requirements. We make use only finest quality wooden only', ' img3.jpg', 'images/img3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `mytable`
--

CREATE TABLE `mytable` (
  `field_image` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_surname` varchar(255) NOT NULL,
  `user_state` varchar(255) NOT NULL,
  `user_gender` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_nick` varchar(255) NOT NULL,
  `user_interest` text NOT NULL,
  `user_address` text NOT NULL,
  `user_hobbies` text NOT NULL,
  `user_contact` text NOT NULL,
  `user_city` text NOT NULL,
  `user_skill` text NOT NULL,
  `user_desc` text NOT NULL,
  `user_location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`user_id`, `user_name`, `user_surname`, `user_state`, `user_gender`, `user_password`, `user_email`, `user_type`, `user_nick`, `user_interest`, `user_address`, `user_hobbies`, `user_contact`, `user_city`, `user_skill`, `user_desc`, `user_location`) VALUES
(2, 'Aditya', 'loke', 'Bihar', 'Male', 'adi', 'adityaloke123@gmail.com', 'Artist', 'adi', 'Coding,paining,music', 'Mount Eden Road, Mount Eden, Auckland. Rural addresses: 21 Greens Road RD 2 Ruawai 0592.', 'Hiking[89] Hooping[90] Horseback riding Hunting[91]', '9619587122', 'Navi mumbai', 'web dev,app dev', 'Iâ€™d say Iâ€™m highly motivated, and I particularly enjoy working as a part of a team. In my last job I was part of a group of 12 people and we communicated multiple times per day to work as a unit, and I also interacted frequently with other groups like Sales, Customer Service and more. I enjoy a fast-paced, team-oriented environment like this.â€', ''),
(4, 'pravin', 'chavan', 'Andhra Pradesh', 'unknown', 'pravin', 'Aaaa@gmail.com', 'User', 'pravin', 'nothing', 'Ruzan apt room no 201 plot no 132 sec 19 a koparkhairane navimumbai', 'Hiking[89] Hooping[90] Horseback riding Hunting[91]', '9619587122', 'Navi mumbai', 'web dev,app dev', 'Dont bother', ''),
(5, 'aamir', 'kan', 'Andhra Pradesh', 'Male', 'amir', 'Aaaa@gmail.com', 'User', 'amir', 'nothing', 'Ruzan apt room no 201 plot no 132 sec 19 a koparkhairane navimumbai', 'Hiking[89] Hooping[90] Horseback riding Hunting[91]', '9619587122', 'Navi mumbai', 'web dev,app dev', 'Dont bother', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_nick` (`user_nick`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
