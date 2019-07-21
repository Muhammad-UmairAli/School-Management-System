-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2018 at 06:14 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `multi_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `no` int(11) NOT NULL,
  `registration_id` varchar(25) NOT NULL,
  `Lecturename` varchar(25) NOT NULL,
  `Lecturedate` varchar(25) NOT NULL,
  `Starttime` varchar(10) NOT NULL,
  `endtime` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attendence`
--

INSERT INTO `attendence` (`no`, `registration_id`, `Lecturename`, `Lecturedate`, `Starttime`, `endtime`) VALUES
(3, 'FA16-BCS-283', 'DATABASE', '2018-12-21', '08:30', '10:00'),
(4, 'FA16-BCS-283', 'Operating System', '2018-12-21', '10:00', '11:30'),
(5, 'FA16-BCS-301', 'Numerical Computation', '2018-12-22', '13:00', '14:30');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `no` int(11) NOT NULL,
  `registration_id` varchar(25) NOT NULL,
  `semester` varchar(15) NOT NULL,
  `fee` varchar(25) NOT NULL,
  `submission` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`no`, `registration_id`, `semester`, `fee`, `submission`) VALUES
(1, 'FA16-BCS-301', 'Semester 5', '82000`', '2018-12-21'),
(2, 'FA16-BCS-283', 'Semester 6', '72000', '2018-12-28'),
(3, 'FA16-BCS-166', 'Semester 2', '72000', '2018-12-25');

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `no` int(11) NOT NULL,
  `registration_id` varchar(25) NOT NULL,
  `BookISBN` varchar(13) NOT NULL,
  `BookName` varchar(25) NOT NULL,
  `BorrowDate` varchar(25) NOT NULL,
  `ReturnDate` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`no`, `registration_id`, `BookISBN`, `BookName`, `BorrowDate`, `ReturnDate`) VALUES
(1, 'FA16-BCS-166', '1234567777888', 'DATABASE', '2018-12-14', '2018-12-28'),
(2, 'FA16-BCS-283', '9876543321122', 'Operating System', '2018-12-13', '2018-12-21'),
(3, 'FA16-BCS-301', '5674389311234', 'Numericcal Computation', '2018-12-07', '2018-12-17');

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `no` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `registration_id` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`no`, `name`, `registration_id`, `email`, `address`) VALUES
(1, 'Waseem', 'FA16-BCS-166', 'waseemiftikhar@gmail.com', 'Township Block A House number 123'),
(2, 'Umair ', 'FA16-BCS-283', 'muhammadumairali@gmail.co', 'Sabzazar 212-C Block'),
(3, 'Afnan', 'FA16-BCS-186', 'muhammadafnanabbass@gmail', 'Nisthar 423-A Block  Iqbal Town'),
(4, 'Maheen', 'FA16-BCS-301', 'maheensaleemi@gmail.com', 'Iqbal Town 478-A Block ');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `no` int(11) NOT NULL,
  `registration_id` varchar(25) NOT NULL,
  `std_name` varchar(10) NOT NULL,
  `sub_name` varchar(10) NOT NULL,
  `marks` varchar(10) NOT NULL,
  `obtainedmarks` varchar(10) NOT NULL,
  `percentages` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`no`, `registration_id`, `std_name`, `sub_name`, `marks`, `obtainedmarks`, `percentages`) VALUES
(1, 'FA16-BCS-301', 'Maheen ', 'OS', '50', '50', '100%'),
(2, 'FA16-BCS-283', 'Umair', 'Stats', '50', '50', '100'),
(3, 'FA16-BCS-166', 'Waseem', 'Numerical ', '50', '25', '50%');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `registration_id` varchar(25) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`registration_id`, `username`, `email`, `user_type`, `password`) VALUES
('admin', 'admin', 'admin@yahoo.com', 'admin', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('FA16-BCS-099', 'Sarmad', 'sarmadkhan@gmail.com', 'user', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('FA16-BCS-166', 'Waseem', 'waseemiftikhar@gmail.com', 'user', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('FA16-BCS-186', 'Afnan', 'muhammadafnanabbass@gmail.com', 'user', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('FA16-BCS-283', 'Umair', 'muhammadumairali@gmail.com', 'user', 'd8578edf8458ce06fbc5bb76a58c5ca4'),
('FA16-BCS-301', 'Maheen', 'maheensaleemi@gmail.com', 'user', 'd8578edf8458ce06fbc5bb76a58c5ca4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`no`),
  ADD KEY `registration_id` (`registration_id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`no`),
  ADD KEY `registration_id` (`registration_id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`no`),
  ADD KEY `registration_id` (`registration_id`);

--
-- Indexes for table `record`
--
ALTER TABLE `record`
  ADD PRIMARY KEY (`no`),
  ADD KEY `registration_id` (`registration_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`no`),
  ADD KEY `registration_id` (`registration_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`registration_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `record`
--
ALTER TABLE `record`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendence`
--
ALTER TABLE `attendence`
  ADD CONSTRAINT `attendence_ibfk_1` FOREIGN KEY (`registration_id`) REFERENCES `users` (`registration_id`);

--
-- Constraints for table `fee`
--
ALTER TABLE `fee`
  ADD CONSTRAINT `fee_ibfk_1` FOREIGN KEY (`registration_id`) REFERENCES `users` (`registration_id`);

--
-- Constraints for table `library`
--
ALTER TABLE `library`
  ADD CONSTRAINT `library_ibfk_1` FOREIGN KEY (`registration_id`) REFERENCES `users` (`registration_id`);

--
-- Constraints for table `record`
--
ALTER TABLE `record`
  ADD CONSTRAINT `record_ibfk_1` FOREIGN KEY (`registration_id`) REFERENCES `users` (`registration_id`);

--
-- Constraints for table `result`
--
ALTER TABLE `result`
  ADD CONSTRAINT `result_ibfk_1` FOREIGN KEY (`registration_id`) REFERENCES `users` (`registration_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
