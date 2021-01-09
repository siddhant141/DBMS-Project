-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2019 at 08:40 AM
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
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `cards`
--

CREATE TABLE `cards` (
  `cno` varchar(20) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `cvv` char(3) NOT NULL,
  `month` char(2) NOT NULL,
  `year` char(2) NOT NULL,
  `balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cards`
--

INSERT INTO `cards` (`cno`, `cname`, `cvv`, `month`, `year`, `balance`) VALUES
('1111222233334444', 'Aditya Sinha', '321', '09', '29', 29),
('123456789012', 'Aditya Sinha', '123', '09', '29', 290000),
('4444333322221111', 'Aditya Sinha', '123', '09', '29', 116550),
('987654321012', 'Aditya Sinha', '123', '09', '29', 29);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `sno` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `package` varchar(255) NOT NULL,
  `h_id` int(11) NOT NULL,
  `roomtype` varchar(255) NOT NULL,
  `norooms` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `child` int(11) NOT NULL,
  `t_price` int(11) NOT NULL,
  `ssn` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `cno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`sno`, `username`, `package`, `h_id`, `roomtype`, `norooms`, `adult`, `child`, `t_price`, `ssn`, `checkin`, `checkout`, `cno`) VALUES
(8, 'jack', 'Adrenaline', 2, 'Double Bed AC', 2, 2, 2, 3900, 1234567890, '2018-11-09', '2018-11-14', '4444333322221111'),
(9, 'jack', 'John Hammond', 12, 'Single Bed AC', 3, 3, 0, 2400, 1234567890, '2018-11-09', '2018-11-14', '4444333322221111'),
(10, 'jack', 'Family', 13, 'Double Bed AC', 2, 2, 2, 2800, 1234567890, '2018-11-09', '2018-11-14', '4444333322221111'),
(11, 'admin', 'John Hammond', 3, 'Double Bed AC', 3, 5, 0, 3900, 1234567890, '2018-11-09', '2018-11-13', '4444333322221111'),
(12, 'jack', 'Adrenaline', 3, 'Double Bed AC', 1, 1, 1, 1800, 1234567890, '2018-11-10', '2018-11-14', '4444333322221111'),
(13, 'admin', 'Family', 13, 'Single Bed AC', 1, 1, 0, 950, 1234567890, '2018-10-31', '2018-11-04', '4444333322221111'),
(14, 'ssinha', 'Adrenaline', 69, 'Double Bed AC', 2, 4, 0, 4600, 1234567890, '2019-01-02', '2019-01-06', '4444333322221111');

-- --------------------------------------------------------

--
-- Table structure for table `dinosaurs`
--

CREATE TABLE `dinosaurs` (
  `srno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name_meaning` varchar(255) NOT NULL,
  `habitat` varchar(255) NOT NULL,
  `length` varchar(255) NOT NULL,
  `weight` varchar(255) NOT NULL,
  `stance` varchar(255) NOT NULL,
  `diet` varchar(255) NOT NULL,
  `aggression_index` varchar(255) NOT NULL,
  `info` varchar(255) NOT NULL,
  `didyouknow` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dinosaurs`
--

INSERT INTO `dinosaurs` (`srno`, `name`, `image`, `name_meaning`, `habitat`, `length`, `weight`, `stance`, `diet`, `aggression_index`, `info`, `didyouknow`, `age`, `image2`) VALUES
(1, 'Tyrannosaurus-Rex', 'trex.png', 'Tyrant Lizard', 'Western North America', '12m', '', 'Quadrupted', 'Ferns and other low growing vegetation', 'medium', 'Ankylosaurus is a member of the family Ankylosauridae, and its closest relatives appear to be Anodontosaurus and Euoplocephalus. Ankylosaurus is thought to have been a slow-moving animal, able to make quick movements when necessary. Its broad muzzle indic', 'The armor is covered with a layer of keratin exactly the stuff our fingernails are made of', '68-66 million year ago', 'tyrannosaurus-rex.svg'),
(2, 'Velociraptor', 'velociraptor.png', 'swift thief', 'mongolia', '5m', '150kg', 'Biped', 'Carnivore', 'Very High', ' Velociraptor was roughly the size of a turkey, considerably smaller than the approximately 2 m (7 ft) tall and 80 kg (180 lb) reptiles seen in the films (which were based on members of the related genus Deinonychus). Today, Velociraptor is well known to ', 'The velociraptor Has curved 15 cm razor sharp claws on each hand.', 'cretaceous', 'velociraptor.svg'),
(3, 'Suchomimus', 'suchomimus.png', 'crocodile mimic', 'Africa', '11m', '3000kg', 'Biped', 'Carnivore', 'Medium', 'Suchomimus was 9.5 to 11 metres (31 to 36 ft) long and weighed between 2.5 to 5.2 tonnes (2.8 to 5.7 short tons), although the holotype specimen may not have been fully grown. Suchomimus\'s narrow skull was perched on a short neck, and its forelimbs were p', 'suchomimus get its name from its distinctive crocodile like snout', 'Cretaceous', 'suchomimus.svg');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `qno` int(11) NOT NULL,
  `datet` datetime NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comments` varchar(1500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fno` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `sno` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fno`, `user`, `sno`, `rating`, `description`) VALUES
(1, 'john123 ', 4, 5, 'Good Service'),
(2, 'jack ', 5, 5, 'Mind blowing'),
(3, 'admin ', 13, 3, 'Price was too high..'),
(4, 'jack ', 12, 1, 'Amazing experience...U fooled us..no dinosaur exist..Moron');

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `h_id` int(11) NOT NULL,
  `h_name` varchar(255) NOT NULL,
  `loc` varchar(255) NOT NULL,
  `room1nos` int(11) NOT NULL,
  `room2nos` int(11) NOT NULL,
  `price1` int(11) NOT NULL,
  `price2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`h_id`, `h_name`, `loc`, `room1nos`, `room2nos`, `price1`, `price2`) VALUES
(1, 'Hotel T-Rex', 'Isla Nublar', 25, 30, 180, 250),
(2, 'Flora Bay', 'Isla Nublar', 48, 43, 300, 450),
(3, 'Isla Paradise', 'Isla Nublar', 29, 23, 200, 300),
(12, 'Galaxy Bay', 'Isla Nublar', 35, 30, 200, 300),
(13, 'Fountain ', 'Isla Nublar', 40, 22, 250, 350),
(69, 'Kamar Taj', 'Isla Nublar', 1, 1, 200, 300),
(76, 'Genome', 'Isla Nublar', 0, -9, 120, 20);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `contact` char(10) DEFAULT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `imgno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `name`, `contact`, `email`, `password`, `imgno`) VALUES
('aditya1', 'Aditya', '123', 'ad@ad.com', '202cb962ac59075b964b07152d234b70', 0),
('admin', 'Aditya', '9265622778', 'aditya.sinha99@gmail.com', 'bb59dc2a86a6335e03065d89cadec5d5', 25),
('jack', 'Aditya', '9909909901', 'mrsinhajr@gmail.com', 'e4b3595bc4a15765d1ee2315a2ce8032', 27),
('sid', 'Siddhant', '9909909901', '2016ucp1455@mnit.ac.in', '510a25e07c6433234e67bc54d8e01c0a', 0),
('ssinha', 'Sanjay Sinha', '9909909901', 'sanjay_sinha66@rediffmail.com', '2cc7c45c5212b3a13c4e2a6ac240fd27', 0);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `imgno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`imgno`, `name`) VALUES
(23, 'Logo.jpg'),
(24, 'Sagrada Familia1.jpg'),
(26, 'jack'),
(27, 'Sagrada Familia1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cards`
--
ALTER TABLE `cards`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`sno`),
  ADD KEY `username` (`username`),
  ADD KEY `h_id` (`h_id`),
  ADD KEY `cno` (`cno`);

--
-- Indexes for table `dinosaurs`
--
ALTER TABLE `dinosaurs`
  ADD PRIMARY KEY (`srno`),
  ADD UNIQUE KEY `srno` (`srno`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`qno`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fno`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`imgno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `qno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `imgno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`username`) REFERENCES `login` (`username`) ON DELETE NO ACTION,
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`h_id`) REFERENCES `hotel` (`h_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `customer_ibfk_3` FOREIGN KEY (`cno`) REFERENCES `cards` (`cno`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
