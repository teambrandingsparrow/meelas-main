-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2022 at 06:16 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `meelas`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `id` int(11) NOT NULL,
  `area` varchar(200) NOT NULL,
  `beds` varchar(200) NOT NULL,
  `baths` varchar(200) NOT NULL,
  `garage` varchar(200) NOT NULL,
  `store_id` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`id`, `area`, `beds`, `baths`, `garage`, `store_id`) VALUES
(5, ' 3223', ' 7', ' 6', ' 1', '16'),
(6, '322', '2', '2', '1', '17'),
(7, '3223', '7', '6', '7', '18'),
(8, '323', '7', '6', '2', '19'),
(9, '1233', ' 7', ' 6', ' 7', '20');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `image`) VALUES
(6, 'poster1.jpg'),
(7, 'poster2.jpg'),
(8, 'poster1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bigbanners`
--

CREATE TABLE `bigbanners` (
  `id` int(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bigbanners`
--

INSERT INTO `bigbanners` (`id`, `image`) VALUES
(15, 'slide.jpg'),
(16, 'slideimg5.jpg'),
(17, 'meelas1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `text` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `title`, `description`, `text`, `date`) VALUES
(1, 'post-6.jpg', 'Travel is comming new', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'home', '2022-08-17'),
(3, 'post-5.jpg', 'Travel is comming new', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'home', '2022-08-31'),
(4, 'post-7.jpg', 'Travel is comming new', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'office', '1900-01-22'),
(12, 'post-2.jpg', 'Travel is comming new', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'Contarct Letter', '2022-08-03');

-- --------------------------------------------------------

--
-- Table structure for table `contactagent`
--

CREATE TABLE `contactagent` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `id_property` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactagent`
--

INSERT INTO `contactagent` (`id`, `name`, `email`, `message`, `id_property`) VALUES
(1, 'admin', 'admin@gmail.com', 'nbkj', 0),
(2, 'admin', 'admin@gmail.com', 'hiu', 17);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(200) NOT NULL,
  `Name` varchar(200) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Subject` varchar(200) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `Name`, `Email`, `Subject`, `Message`) VALUES
(1, 'admin', 'branding.grc@gmail.com', 'gugugjvj', 'hjgjghjjkgk'),
(55, 'admin', 'admin@gmail.com', 'thanks', 'nothing'),
(69, 'branding', 'branding.grc@gmail.com', 'gugugk', 'tgugug'),
(70, 'admin', 'admin@gmail.com', 'fguyfuf', 'tgugku'),
(71, 'admin', 'admin@gmail.com', 'test', 'demo');

-- --------------------------------------------------------

--
-- Table structure for table `dailyupdate`
--

CREATE TABLE `dailyupdate` (
  `id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dailyupdate`
--

INSERT INTO `dailyupdate` (`id`, `image`) VALUES
(3, 'slideimg1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `latestnews`
--

CREATE TABLE `latestnews` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(200) NOT NULL,
  `newsimage` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latestnews`
--

INSERT INTO `latestnews` (`id`, `date`, `description`, `newsimage`) VALUES
(2, '2022-06-13', ' What is the procedure to start a restaurant in Dubai?', 'WhatsApp Image 2022-07-13 at 7.09.30 PM.jpeg'),
(3, '2022-07-14', ' How investing in dependend increasing to business', 'WhatsApp Image 2022-07-13 at 7.09.30 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `port_id` int(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `type` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`port_id`, `title`, `description`, `date`, `type`, `image`) VALUES
(7, 'somthing', 'nothing', '2022-09-11', '1 ', 'slideimg1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `propertiess`
--

CREATE TABLE `propertiess` (
  `id_name` int(200) NOT NULL,
  `propertyid` varchar(200) NOT NULL,
  `names` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `propertytype` varchar(200) NOT NULL,
  `location` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `area` varchar(200) NOT NULL,
  `budget` varchar(200) NOT NULL,
  `amanities` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `video` varchar(2000) NOT NULL,
  `floorplan` varchar(200) NOT NULL,
  `map` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propertiess`
--

INSERT INTO `propertiess` (`id_name`, `propertyid`, `names`, `type`, `propertytype`, `location`, `address`, `area`, `budget`, `amanities`, `description`, `image`, `video`, `floorplan`, `map`) VALUES
(16, '1234', 'property 1', '1 ', '7', 'Edapally', ' Kangarapady', 'Edapally', '10000', '   -Balcony-Outdoor- Kitchen-Cable Tv-Deck-Tennis Courts-Internet-Parking-Sun Room-Concrete Flooring', ' A Well-Functioning Company In Dubai Would Be A Dream For Many Entrepreneurs With An Innovative Business Minds. Setting Up An Established Company With Necessary Services In UAE Needs To Follow Certain', 'property-2.jpg', 'meelas video (1).mp4', 'plan2.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834'),
(17, ' 1234', 'property 3', '2 ', '2', 'Edapally', 'kangarapady', 'Edapally', '110000', '   -Balcony-Outdoor Kitchen-Cable Tv-Deck-Tennis Courts-Internet-Parking-Sun Room-Concrete Flooring', 'A Well-Functioning Company In Dubai Would Be A Dream For Many Entrepreneurs With An Innovative Business Minds. Setting Up An Established Company With Necessary Services In UAE Needs To Follow Certain', 'property-1.jpg', 'meelas video (1).mp4', 'plan2.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834'),
(19, '    1234', 'property 2', '1 ', '6', 'Edapally', 'kangarapady', 'Edapally', '12000', '    -Balcony-Outdoor Kitchen-Cable Tv-Deck-Tennis Courts-Internet-Parking-Sun Room-Concrete Flooring', 'A Well-Functioning Company In Dubai Would Be A Dream For Many Entrepreneurs With An Innovative Business Minds. Setting Up An Established Company With Necessary Services In UAE Needs To Follow Certain ', 'property-3.jpg', 'meelas video (1).mp4', 'plan2.jpg', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834');

-- --------------------------------------------------------

--
-- Table structure for table `propertytypes`
--

CREATE TABLE `propertytypes` (
  `id` int(100) NOT NULL,
  `name_type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `propertytypes`
--

INSERT INTO `propertytypes` (`id`, `name_type`) VALUES
(1, 'Shopping'),
(2, 'Building'),
(3, 'Shop/Showroom'),
(4, 'Office Space'),
(5, 'Commercial Land /Commercial Space'),
(6, 'Land/Plots'),
(7, 'House'),
(8, 'Villas'),
(9, 'Flats(1st Floor)'),
(10, 'PG(Bed Space)'),
(11, 'Rooms'),
(12, 'Service Rooms'),
(13, 'Service Villas'),
(14, 'Service Apartments'),
(15, 'Resorts');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`) VALUES
(1, 'Lease'),
(2, 'Sale'),
(3, 'Rent'),
(4, 'Joint Venture');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin@gmail.com', '123456');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bigbanners`
--
ALTER TABLE `bigbanners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactagent`
--
ALTER TABLE `contactagent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dailyupdate`
--
ALTER TABLE `dailyupdate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `latestnews`
--
ALTER TABLE `latestnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`port_id`);

--
-- Indexes for table `propertiess`
--
ALTER TABLE `propertiess`
  ADD PRIMARY KEY (`id_name`);

--
-- Indexes for table `propertytypes`
--
ALTER TABLE `propertytypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amenities`
--
ALTER TABLE `amenities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bigbanners`
--
ALTER TABLE `bigbanners`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contactagent`
--
ALTER TABLE `contactagent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `dailyupdate`
--
ALTER TABLE `dailyupdate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `latestnews`
--
ALTER TABLE `latestnews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `port_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `propertiess`
--
ALTER TABLE `propertiess`
  MODIFY `id_name` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `propertytypes`
--
ALTER TABLE `propertytypes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
