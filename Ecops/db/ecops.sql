-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 10:57 AM
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
-- Database: `ecops`
--

-- --------------------------------------------------------

--
-- Table structure for table `child_missing`
--

CREATE TABLE `child_missing` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `child_name` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `criminal_status` varchar(255) NOT NULL,
  `child_status` varchar(255) NOT NULL,
  `upload` varchar(255) NOT NULL,
  `dateo` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `child_missing`
--

INSERT INTO `child_missing` (`id`, `name`, `email`, `child_name`, `date`, `age`, `picture`, `criminal_status`, `child_status`, `upload`, `dateo`, `location`) VALUES
(1, 'deepu', 'dpinder.mahay.480@gmail.com', 'abc', '0000-00-00', 16, '', '', '', '', '', ''),
(2, '', '', '', '0000-00-00', 0, '', '', '', '', '0000-00-00', ''),
(3, '', '', '', '0000-00-00', 0, '', '', '', 'picture of child of 2 days before', '0000-00-00', ''),
(4, '', '', '', '0000-00-00', 0, '12355.jpg', '', '', 'picture of child of 2 days before', '0000-00-00', ''),
(5, '', '', '', '', 0, '12355.jpg', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(1, 'deepu', 'dpinder@gmail.com', 'abc', 'say hello to us');

-- --------------------------------------------------------

--
-- Table structure for table `cops-register`
--

CREATE TABLE `cops-register` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `ps_name` varchar(255) NOT NULL,
  `contact` int(255) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cops-register`
--

INSERT INTO `cops-register` (`id`, `name`, `email`, `password`, `designation`, `ps_name`, `contact`, `dob`, `address`) VALUES
(1, 'mahay', 'dpinder@gmail.com', '123', '', 'hoshiarpur', 2147483647, '0000-00-00', 'village ghari bakhsha'),
(2, '', '', '', 'hjsdkshsk shdfkshfksh kshfksfk', '', 0, '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `criminal`
--

CREATE TABLE `criminal` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `crime` varchar(255) NOT NULL,
  `criminal_image` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `criminal`
--

INSERT INTO `criminal` (`id`, `name`, `crime`, `criminal_image`, `details`) VALUES
(1, 'abc', 'kill', '', 'he wasksdfdks'),
(2, 'abc', '', '', 'kill many people and rob a bank. its Wanted.'),
(3, 'abc', 'kill', '', 'its wanted very dangers criminal. robed two banks.'),
(4, 'mahay', 'kill', '12317.jpg', 'age 23\r\nlive in hsp'),
(5, '', '', 'pexels-jess-bailey-designs-749563.jpg', ''),
(6, '', '', 'pexels-dids-1411995.jpg', ''),
(7, '', '', 'amazing-phoenix-artwork-gmealcfh01dh16tt.jpg', ''),
(8, '', '', 'pexels-jess-bailey-designs-749563.jpg', ''),
(9, 'Dharminder Singh', 'robbery', 'download (1).jfif', 'rob a bank');

-- --------------------------------------------------------

--
-- Table structure for table `fir_lodge`
--

CREATE TABLE `fir_lodge` (
  `id` int(255) NOT NULL,
  `comp_type` varchar(255) NOT NULL,
  `odate` date NOT NULL,
  `details` varchar(255) NOT NULL,
  `suscname` varchar(255) NOT NULL,
  `suspect_details` varchar(255) NOT NULL,
  `ps_name` varchar(255) NOT NULL,
  `vicname` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `contact` text NOT NULL,
  `email` varchar(255) NOT NULL,
  `criminal_status` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fir_lodge`
--

INSERT INTO `fir_lodge` (`id`, `comp_type`, `odate`, `details`, `suscname`, `suspect_details`, `ps_name`, `vicname`, `gender`, `age`, `address`, `contact`, `email`, `criminal_status`, `date`, `location`) VALUES
(1, 'hjgj', '2022-07-12', 'hgjhgjgj', 'hjgjhgj', 'jgjgjgjgjgjg', 'ytuyhjgugjhg', 'hgjghjgjgj', 'jhjhjhj', 23, 'gfgfggfg', '452225562', 'ghghghghhfhhfh', 'Not Aressted', '2022-07-17', 'Hoshairpur, market '),
(2, 'my chain was snached by biker', '2022-07-03', 'i was see his bike no. pb08az6545.', 'deepu', 'i don\'t know ', 'hosiarpur', 'deepu', 'male', 23, 'hoiarpur(market)', '8196998', 'dpinder@gmail.com', 'no', '2022-07-04', 'hoshiarpur'),
(3, '', '0000-00-00', '', '', '', '', '', '', 0, '', '', '', '', '0000-00-00', ''),
(4, '', '0000-00-00', '', '', '', 'Hoshiarpur', '', 'Male', 16, 'hsp', '78667865567', 'dpinder.mahay.480@gmail.com', '', '0000-00-00', 'Submit'),
(5, 'asds', '0000-00-00', '', '', '', 'Hoshiarpur', '', 'Male', 16, 'hsp', '78667865567', 'dpinder.mahay.480@gmail.com', '', '0000-00-00', 'Submit'),
(6, 'chain-snaching', '0000-00-00', '', '', '', '', '', '', 0, '', '', '', '', '0000-00-00', 'Submit'),
(7, 'kidnaping', '0000-00-00', '', '', '', '', '', '', 0, '', '', '', '', '0000-00-00', 'Submit'),
(8, 'kidnaping', '0000-00-00', 'fggdgdg fhfjh fhfgjh', ' ghjhghg', 'bnmbmbmbnmbnm khkkkhkhkh khh hytfgh ', 'Jalandhar', 'deepu', 'Male', 16, 'hsp', '78667865567', 'dpinder.mahay.480@gmail.com', 'no', '0000-00-00', 'Submit'),
(9, 'kidnaping', '0000-00-00', 'fggdgdg fhfjh fhfgjh', ' ghjhghg', 'bnmbmbmbnmbnm khkkkhkhkh khh hytfgh ', 'Jalandhar', 'deepu', 'Male', 16, 'hsp', '78667865567', 'dpinder.mahay.480@gmail.com', 'no', '0000-00-00', 'Submit'),
(10, 'kidnaping', '0000-00-00', 'fggdgdg fhfjh fhfgjh', ' ghjhghg', 'bnmbmbmbnmbnm khkkkhkhkh khh hytfgh ', 'Jalandhar', 'deepu', 'Male', 16, 'hsp', '78667865567', 'dpinder.mahay.480@gmail.com', 'no', '0000-00-00', 'Submit'),
(11, '', '0000-00-00', '', '', '', '', '', '', 0, '', '', '', '', '0000-00-00', 'Hoshairpur, market');

-- --------------------------------------------------------

--
-- Table structure for table `userregister`
--

CREATE TABLE `userregister` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userregister`
--

INSERT INTO `userregister` (`id`, `name`, `email`, `password`, `phone`, `dob`, `address`) VALUES
(1, 'deepu', 'dpinder@gmail.com', '123', '2147483647', '0000-00-00', ''),
(2, 'mahay', 'dpinder@gmail.com', '123', '2147483647', '0000-00-00', ''),
(3, 'mahay', 'dpinder@gmail.com', '123', '8196998152', '12/12/2002', ''),
(4, 'mahay', 'dpinder@gmail.com', '123', '8196998152', '12/12/2002', ''),
(5, '', '', '', '', '', 'ghri bakhsha\r\nPO pachranga'),
(6, 'mahay', 'dpinder@gmail.com', '123', '', '12/12/2002', 'village ghari bakhsha');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_missing`
--

CREATE TABLE `vehicle_missing` (
  `id` int(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `odate` date NOT NULL,
  `number` int(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `wheeler` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `criminal_status` varchar(255) NOT NULL,
  `vehicle_status` varchar(255) NOT NULL,
  `pic` varchar(255) NOT NULL,
  `dateo` date NOT NULL,
  `area` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicle_missing`
--

INSERT INTO `vehicle_missing` (`id`, `location`, `odate`, `number`, `picture`, `wheeler`, `name`, `email`, `criminal_status`, `vehicle_status`, `pic`, `dateo`, `area`) VALUES
(1, '', '0000-00-00', 0, '', '', '', '', '', '', '', '0000-00-00', ''),
(2, 'Hoshairpur, market ', '0000-00-00', 2147483647, '', '2 wheeler', 'deepu', 'dpinder.mahay.480@gmail.com', 'no', 'pb08 az 7578', '', '0000-00-00', ''),
(3, 'Hoshairpur, market ', '0000-00-00', 2147483647, '', '2 wheeler', 'deepu', 'dpinder.mahay.480@gmail.com', 'no', 'pb08 az 7578', '', '0000-00-00', ''),
(4, 'Hoshairpur, market ', '0000-00-00', 2147483647, '', '3 wheeler', 'deepu', 'dpinder.mahay.480@gmail.com', 'no', 'pb08 az 7578', '5 th.PNG', '0000-00-00', ''),
(5, 'Hoshairpur, market ', '0000-00-00', 2147483647, '', '3 wheeler', 'deepu', 'dpinder.mahay.480@gmail.com', 'no', 'pb08 az 7578', 'calculations.PNG', '0000-00-00', ''),
(6, 'Hoshairpur, market ', '0000-00-00', 2147483647, '', '3 wheeler', 'deepu', 'dpinder.mahay.480@gmail.com', 'no', 'pb08 az 7578', 'pexels-jess-bailey-designs-749563.jpg', '0000-00-00', ''),
(7, '', '0000-00-00', 0, '', '', '', '', '', '', '0457b359965a3dbde6c9e1e6f07e533d.jpg', '0000-00-00', ''),
(8, '', '0000-00-00', 0, '', '', '', '', '', '', 'download (2).jfif', '0000-00-00', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `child_missing`
--
ALTER TABLE `child_missing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cops-register`
--
ALTER TABLE `cops-register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `criminal`
--
ALTER TABLE `criminal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fir_lodge`
--
ALTER TABLE `fir_lodge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userregister`
--
ALTER TABLE `userregister`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle_missing`
--
ALTER TABLE `vehicle_missing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `child_missing`
--
ALTER TABLE `child_missing`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cops-register`
--
ALTER TABLE `cops-register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `criminal`
--
ALTER TABLE `criminal`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `fir_lodge`
--
ALTER TABLE `fir_lodge`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `userregister`
--
ALTER TABLE `userregister`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vehicle_missing`
--
ALTER TABLE `vehicle_missing`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
