-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 14, 2020 at 11:01 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `child_hope`
--

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE `area` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `area_name` varchar(50) NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`id`, `city_id`, `state_id`, `area_name`, `isactive`, `doi`, `dou`) VALUES
(1, 1, 1, '', 2, '2020-02-07', '2020-02-07'),
(2, 1, 1, '', 2, '2020-02-07', '2020-02-07'),
(3, 1, 1, 'paldi', 1, '2020-02-07', '2020-02-07'),
(4, 1, 1, 'paldi', 1, '2020-02-07', '2020-02-07'),
(5, 1, 1, 'nehrunagar', 1, '2020-02-07', '2020-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `child profile`
--

CREATE TABLE `child profile` (
  `id` int(11) NOT NULL,
  `ngo_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `image` varchar(100) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `age` int(11) NOT NULL,
  `weight` float NOT NULL,
  `height` float NOT NULL,
  `nature` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `State_id` int(11) NOT NULL,
  `city_name` varchar(11) NOT NULL,
  `isactive` tinyint(1) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `State_id`, `city_name`, `isactive`, `doi`, `dou`) VALUES
(1, 1, 'Ahmedabad', 2, '2020-02-07', '2020-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `discription` varchar(260) NOT NULL,
  `Doi` date NOT NULL,
  `Dou` date NOT NULL,
  `isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ngo_detalis`
--

CREATE TABLE `ngo_detalis` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Contact` int(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Area_id` int(11) NOT NULL,
  `State_id` int(11) NOT NULL,
  `City_id` int(11) NOT NULL,
  `Doi` date NOT NULL,
  `Dou` date NOT NULL,
  `Isactive` tinyint(1) NOT NULL,
  `Total_no_of_child` int(20) NOT NULL,
  `Total_no_child_girls` int(20) NOT NULL,
  `Total_no_chid_boys` int(20) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `parent reg`
--

CREATE TABLE `parent reg` (
  `p_id` varchar(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Contact` int(15) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Gender` varchar(6) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Parent_cat_type_id` int(11) NOT NULL,
  `State_id` int(11) NOT NULL,
  `City_id` int(11) NOT NULL,
  `Area_id` int(11) NOT NULL,
  `Sec_id` int(11) NOT NULL,
  `Answer` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `confirm password` varchar(50) NOT NULL,
  `Image` varchar(100) NOT NULL,
  `Id_proof_father` varchar(100) NOT NULL,
  `Id_proof_mother` varchar(100) NOT NULL,
  `Doi` date NOT NULL,
  `Dou` date NOT NULL,
  `Isactive` tinyint(1) NOT NULL,
  `Lightbill_proof` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `address` text NOT NULL,
  `parent_cat_type_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `area_id` int(11) NOT NULL,
  `sec_id` int(11) NOT NULL,
  `answer` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `f_id_proof` varchar(100) NOT NULL,
  `m_id_proof` varchar(100) NOT NULL,
  `isactive` int(11) NOT NULL,
  `doi` date NOT NULL,
  `dou` date NOT NULL,
  `lightbill` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `email`, `contact`, `gender`, `address`, `parent_cat_type_id`, `state_id`, `city_id`, `area_id`, `sec_id`, `answer`, `password`, `profile_pic`, `f_id_proof`, `m_id_proof`, `isactive`, `doi`, `dou`, `lightbill`) VALUES
(2, 'creat', 'creart', 'creart@gmail.com', '74123659852', 'Male', 'jfjsfljfkjskfjjf', 0, 0, 0, 0, 0, '', '123', '', '', '', 1, '2020-02-14', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `security_question`
--

CREATE TABLE `security_question` (
  `Question_id` int(11) NOT NULL,
  `Security_question` varchar(30) NOT NULL,
  `Isactive` int(11) NOT NULL,
  `Doi` int(11) NOT NULL,
  `Dou` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security_question`
--

INSERT INTO `security_question` (`Question_id`, `Security_question`, `Isactive`, `Doi`, `Dou`) VALUES
(1, 'Enter your nick name?', 2, 20, '2020-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `Id` int(11) NOT NULL,
  `State_name` varchar(50) NOT NULL,
  `Doi` date NOT NULL,
  `Dou` date NOT NULL,
  `Isactive` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`Id`, `State_name`, `Doi`, `Dou`, `Isactive`) VALUES
(1, 'Gujarat', '2020-02-07', '2020-02-07', 1),
(2, 'Gujarat', '2020-02-07', '2020-02-07', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ngo_detalis`
--
ALTER TABLE `ngo_detalis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `security_question`
--
ALTER TABLE `security_question`
  ADD PRIMARY KEY (`Question_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area`
--
ALTER TABLE `area`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ngo_detalis`
--
ALTER TABLE `ngo_detalis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `security_question`
--
ALTER TABLE `security_question`
  MODIFY `Question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
