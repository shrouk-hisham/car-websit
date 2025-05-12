-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2025 at 10:57 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `car_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `passengers` varchar(50) DEFAULT NULL,
  `drive_type` varchar(100) DEFAULT NULL,
  `speed` varchar(50) DEFAULT NULL,
  `engine_type` varchar(100) DEFAULT NULL,
  `old_price` varchar(50) DEFAULT NULL,
  `new_price` varchar(50) DEFAULT NULL,
  `image_default` varchar(255) DEFAULT NULL,
  `image_hover` varchar(255) DEFAULT NULL,
  `tab_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`id`, `name`, `passengers`, `drive_type`, `speed`, `engine_type`, `old_price`, `new_price`, `image_default`, `image_hover`, `tab_name`) VALUES
(1, 'Lamborghini Huracacan STO', '2 People', 'Electric power', '310km', 'Petrol engine', '$400.00', '$300.00', '1.png', '1-1.png', 'featured'),
(2, 'Alfa Romeo Giulia', '2 People', 'Aall-Wheel drive-AWD', '130km', 'Petrol engine', '$390.58', '$380.85', '2.png', '2-2.png', 'featured'),
(3, 'Honda Civic type R', '5 People', 'Front-WheelDrive-FWD', '272km', 'Turbocharged Gasoline Engine', '$445.80', '$438.85', '3.png', '3-3.png', 'featured'),
(4, 'Lamborghini Aventador S', '2 People', 'All- wheel Drive', '350km', 'Turbocharged Gasoline Engine', '$545.000', '$468.000', '4.png', '4-4.png', 'featured'),
(5, 'Jetour X90 Plus', '7 People', 'Front-Wheel-driv-FWD', '200-180km', 'Turbocharged Gasoline Engine', '$245.8', '$238.85', '5.png', '5-5.png', 'featured'),
(6, 'BTD Han', '5 People', 'All-Wheel Drive-FWD', '200-180km', 'ALL-Electric', '$245.8', '$238.85', '6.png', '6-6.png', 'featured'),
(7, 'Lamborghini Aventador Ultimae', '2 People', 'All-Wheel Drive-AWD', '355km', 'Turbocharged Gasoline Engine', '$545.000', '$500.000', '7.png', '7-7.png', 'popular'),
(8, 'Lamborghini Aventador SVJ', '2 People', 'All-WheelDrive-AWD', '350km', 'V12 gasoline engine', '$598.000', '$575.000', '8.png', '8-8.png', 'popular'),
(9, 'Mercedes-Bnz GLE Coupe', '5 People', 'All-WheelDrive-4MATIC', '220km', 'Mercedes-Benz GLE Coupe', '$345.000', '$200.000', '9.png', '9-9.png', 'popular'),
(10, 'Arrizo 5 GT', '5 People', 'Front-Wheel Drive-FWD', '205-180km', 'Petrol engine', '$600.000', '$400.000', '10.png', '10-10.png', 'popular'),
(11, 'Honda Civic Tyoe R', '5 People', 'Front-WheelDrive-FWD', '272km', 'Turbocharged gasoline engine', '$245.000', '$200.000', '11.png', '11-11.png', 'popular'),
(12, 'Chevrolet Onix', '5 People', 'Front-WheelDrive-FWD', '190-170km', 'gasoline engine', '$450.000', '$300.000', '12.png', '12-12.png', 'popular'),
(13, 'Bugatti chiron', '2 People', 'All-Wheel Drive-AWD', '420km', 'Quad-turbocharged W16 gasolie', '$945.8', '$938.85', '13.png', '13-13.png', 'new-added'),
(14, 'Lamborghini Aventador', '2 People', 'All-Wheel Drive-AWD', '355-350km', 'V12 gasoline', '$245.000', '$238.000', '14.png', '14-14.png', 'new-added'),
(15, 'Chevrolet Optra', '5 Pepole', 'Front-Wheel-driv-FWD', '195-170km', 'gasoline engine', '$245.000', '$200.000', '15.png', '15-15.png', 'new-added'),
(16, 'Ford mustang', '4 Pepole', 'Rear-Wheel Drive-RWD', '240-230km', 'Mustang gasoline engine', '$245.000', '$238.000', '16.png', '16-16.png', 'new-added'),
(17, 'Audi A1', '4 Pepole', 'Front-Wheel-driv-FWD', '180km', 'gasolin engine', '$24.000', '20.000', '17.png', '17-17.png', 'new-added'),
(18, 'Tesla Model S', '5 Pepole', 'Front-Wheel-Driv-FWD', '190-175km', 'gasoline engine', '$15.000', '$10.000', '18.png', '18-18.png', 'new-added');

-- --------------------------------------------------------

--
-- Table structure for table `showcase`
--

CREATE TABLE `showcase` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `new_price` varchar(50) DEFAULT NULL,
  `old_price` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `group_name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `showcase`
--

INSERT INTO `showcase` (`id`, `name`, `new_price`, `old_price`, `image`, `group_name`) VALUES
(1, 'ltaalian Exotic', '$450.000', '$545.000', '1.png', 'hot'),
(2, 'High-Performance Sedan', '$40.000', '$45.000', '2-2.png', 'hot'),
(3, 'Hot Hatch Performance', '$35.000', '$245.8', '3-3.png', 'hot'),
(4, 'Family SUV Deal', '$35.000', '$38.000', '5-5.png', 'deals'),
(5, 'Luxury Sedan Deal', '$28.000', '$30.000', '6.png', 'deals'),
(6, 'White SUVOffer', '$25.000', '27.000', '5.png', 'deals'),
(7, 'Popular Supercar', '$460.000', '$545.000', '4-4.png', 'top'),
(8, 'Blue Exotic Beauty', '$380.000', '445.000', '7.png', 'top'),
(9, 'Luxury Performance Leader', '$36.000', '$40.000', '3.png', 'top');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `showcase`
--
ALTER TABLE `showcase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `showcase`
--
ALTER TABLE `showcase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
