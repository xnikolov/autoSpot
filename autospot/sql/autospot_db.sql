-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29 юли 2019 в 23:40
-- Версия на сървъра: 10.3.16-MariaDB
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autospot_db`
--

-- --------------------------------------------------------

--
-- Структура на таблица `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `brand` varchar(45) NOT NULL,
  `model` varchar(45) NOT NULL,
  `eddition` varchar(20) NOT NULL,
  `car_type` varchar(30) NOT NULL,
  `car_year` int(11) NOT NULL,
  `transmition` varchar(20) NOT NULL,
  `wheel` varchar(15) NOT NULL,
  `colour` varchar(45) NOT NULL,
  `fuel` varchar(25) NOT NULL,
  `mileage` int(11) NOT NULL,
  `engine_power` int(11) NOT NULL,
  `car_description` varchar(1500) NOT NULL,
  `city` varchar(45) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `price` double NOT NULL,
  `car_image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `cars`
--

INSERT INTO `cars` (`id`, `brand`, `model`, `eddition`, `car_type`, `car_year`, `transmition`, `wheel`, `colour`, `fuel`, `mileage`, `engine_power`, `car_description`, `city`, `phone`, `price`, `car_image`) VALUES
(63, 'Opel', 'Astra', '1.6i', 'Хечбек', 1999, 'Ръчна', 'Ляв', 'Червен', 'Бензин', 255691, 75, '', 'Асеновград', '', 2399, 'IMG_8932.jpg'),
(71, 'Audi', 'A4', '1.9TDI', 'Седан', 2004, 'Автоматична', 'Ляв', 'Сив металик', 'Дизел', 192652, 150, 'Стабилна ходова част, добър мотор и скорости, почти перфектен салон.', 'Асеновград', '', 5299, '63c920ae-8e42-4bd5-90e7-95f82ce28cda.jpg'),
(84, 'Subaru', 'Impreza', '2.0i 16v 4WD', 'Седан', 2002, 'Ръчна', 'Ляв', 'Сив металик', 'Бензин', 223421, 160, 'Изключително запазена, има нови гуми, застраховка и винетка.', 'Бургас', '878131828', 4299, 'r-800-600-subaru-impreza-1-6-ts.jpg'),
(93, 'Mazda', '6', '1.8 Cobmi', 'Комби', 2005, 'Ръчна', 'Ляв', 'Сив металик', 'Бензин', 194125, 120, 'Чудесен семеен автомобил, запазен и винаги държан гараж. Има винетка и застраховка до края на годината.', 'Хасково', '878131828', 5599, 'mazda6.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
