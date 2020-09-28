-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2020 at 06:22 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tss9`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE `apply` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`id`, `employee_id`, `job_id`, `company_id`) VALUES
(1, 1, 3, 1),
(2, 1, 4, 1),
(3, 1, 5, 2),
(4, 1, 2, 2),
(5, 5, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `company_name`, `username`, `password`, `contact_person`, `contact_number`, `address`, `city`) VALUES
(1, 'TCS', 'tcs', '123', 'Amit Joshi', '587147852', 'sdfg sdfg dsdfsg', 'Mumbai'),
(2, 'Softsonic', 'softsonic', '123', 'Nidhi Verma', '887444555', 'sdg sdfg sdfg dsfgsdfg', 'Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `demo`
--

INSERT INTO `demo` (`id`, `name`, `age`) VALUES
(1, 'rohit', 25),
(2, 'nidhi', 23),
(3, 'jay', 28),
(4, 'james', 25),
(5, 'amit', 30),
(6, 'rakesh', 22),
(7, 'parul', 32);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `full_name`, `username`, `password`, `address`, `gender`, `city`, `contact`) VALUES
(1, 'Gaurav', 'gaurav@gmail.com', '123', 'sdfg sdfg sdfgsdfg', 'male', 'Mumbai', '45784578'),
(2, 'Rohit Verma', 'rohit@gmail.com', '123', 'sdfg sdfg sdfgsdfgsdfg', 'male', 'Indore', '88774455'),
(3, 'Nitin Verma', 'nitin@gmail.com', '123', 'g sdfg dsfgsdfg', 'male', 'Mumbai', '225588'),
(5, 'James', 'james@gmail.com', '123', 'dfsg sdfg sdfg sdfsd', 'male', 'Mumbai', '124578');

-- --------------------------------------------------------

--
-- Table structure for table `employee_profile`
--

CREATE TABLE `employee_profile` (
  `id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `profile_name` varchar(255) NOT NULL,
  `experiance` int(11) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `key_skills` text NOT NULL,
  `resume` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_profile`
--

INSERT INTO `employee_profile` (`id`, `employee_id`, `profile_name`, `experiance`, `company_name`, `detail`, `key_skills`, `resume`) VALUES
(1, 2, 'Developer', 3, 'Kalptaru', 'sfg sdfgsdfgsdfg', 'Developer, Designer', ''),
(2, 1, 'Manager', 5, 'TCS', 'sdfgsdgs sdfg sg sdfgdg', 'HR Manager, Management', ''),
(3, 3, 'Designer-Demo', 2, 'Demo', 'sdfg sdlk ;lk dfsg lkeroi dvlk eroik dl;kf oker lgk', 'Photoshop, HTML, CSS', ''),
(4, 5, 'Developer', 3, 'Kalptaru', 'sf asdf asdf asdf', 'PHP, HTML', 'Amplify (6).docx');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `salary` int(11) NOT NULL,
  `description` text NOT NULL,
  `experiance` int(11) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `company_id`, `title`, `salary`, `description`, `experiance`, `type`) VALUES
(1, 2, 'Sales Manager', 40000, 'dsfg sdfg sdfg sdfg sdfgdsfgs', 3, 'Full-Time'),
(2, 2, 'Executive', 15000, 'gf sdf dsfdsfg', 0, 'Full-Time'),
(3, 1, 'Ex. Developer', 45000, 'fdsgsdfg sdfgerg sdfvervsdfvserg', 3, 'Part-Time'),
(4, 1, 'Sales Manager', 25000, 'sdfg sdfg sdfg sdf sdf', 2, 'Temporary'),
(5, 2, 'Sales Men', 6000, 'sdfg sdg sdfg sdg', 0, 'Full-Time');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `username`, `password`, `address`, `city`, `gender`) VALUES
(1, 'Rohit Verma', 'rohit@gmail.com', '123', 'sdfg sdfg sdfgsdfgsdfg', 'Indore', 'male'),
(2, 'nidhi joshi', 'nidhi@gmail.com', '123', 'testing', 'Mumbai', 'female'),
(3, 'Akshay', 'akshay@gamil.com', '123', 'palaysia', 'Mumbai', 'male'),
(4, 'James Joel', 'james@gmail.com', '11', 'dfg sdfg sdfgsdfg sdfgsdf', 'Delhi', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply`
--
ALTER TABLE `apply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_profile`
--
ALTER TABLE `employee_profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply`
--
ALTER TABLE `apply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `employee_profile`
--
ALTER TABLE `employee_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
