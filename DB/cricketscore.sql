-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2019 at 02:28 PM
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
-- Database: `cricketscore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `batperformance`
--

CREATE TABLE `batperformance` (
  `id` int(10) NOT NULL,
  `resultid` int(10) NOT NULL,
  `teamid` int(10) NOT NULL,
  `playerid` int(10) NOT NULL,
  `catchid` int(10) NOT NULL,
  `bowledid` int(10) NOT NULL,
  `dismisstype` varchar(25) NOT NULL,
  `runs` int(10) NOT NULL,
  `balls` int(10) NOT NULL,
  `fours` int(10) NOT NULL,
  `sixes` int(10) NOT NULL,
  `dismissovers` float(10,1) NOT NULL,
  `fow` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `batperformance`
--

INSERT INTO `batperformance` (`id`, `resultid`, `teamid`, `playerid`, `catchid`, `bowledid`, `dismisstype`, `runs`, `balls`, `fours`, `sixes`, `dismissovers`, `fow`) VALUES
(24, 634461230, 32, 66, -1, -1, 'Stumped', 0, 2, 49476, 0, 2.0, 2),
(25, 22351103, 32, 66, -1, -1, 'Stumped', 0, 2, 49476, 0, 2.0, 2),
(26, 979312766, 32, 66, -1, -1, 'Stumped', 0, 2, 49476, 0, 2.0, 2),
(27, 979312766, 32, 68, -1, -1, 'LBW', 4, 1, 1, 1, 1.0, 1),
(28, 979312766, 32, 69, -1, -1, 'Hit-wicket', 4, 1, 1, 1, 1.0, 1),
(29, 979312766, 32, 70, -1, -1, 'Not out', 0, 0, 0, 0, 0.0, 0),
(157, 1699956754, 32, 66, -1, -1, 'Not out', 0, 0, 0, 0, 0.0, 0),
(158, 1699956754, 32, 68, -1, -1, 'Not out', 0, 0, 0, 0, 0.0, 0),
(159, 1699956754, 32, 69, -1, -1, 'Hit-wicket', 4, 1, 1, 1, 1.0, 1),
(160, 1699956754, 32, 70, -1, -1, 'Not out', 0, 0, 0, 0, 0.0, 0),
(161, 1699956754, 32, 72, -1, -1, 'Not out', 0, 0, 0, 0, 0.0, 0),
(162, 1699956754, 32, 73, -1, -1, 'Not out', 0, 0, 0, 0, 0.0, 0),
(163, 1699956754, 32, 74, -1, -1, 'Not out', 0, 0, 0, 0, 0.0, 0),
(164, 1699956754, 32, 75, -1, -1, 'Not out', 0, 0, 0, 0, 0.0, 0),
(165, 1699956754, 32, 76, -1, -1, 'Not out', 0, 0, 0, 0, 0.0, 0),
(166, 1699956754, 32, 77, -1, -1, 'Not out', 0, 0, 0, 0, 0.0, 0),
(167, 1699956754, 32, 78, -1, -1, 'Not out', 0, 0, 0, 0, 0.0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `bowlingperformance`
--

CREATE TABLE `bowlingperformance` (
  `id` int(10) NOT NULL,
  `resultid` int(10) NOT NULL,
  `teamid` int(10) NOT NULL,
  `playerid` int(10) NOT NULL,
  `overs` float(10,1) NOT NULL,
  `maidens` int(10) NOT NULL,
  `runs` int(10) NOT NULL,
  `wickets` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bowlingperformance`
--

INSERT INTO `bowlingperformance` (`id`, `resultid`, `teamid`, `playerid`, `overs`, `maidens`, `runs`, `wickets`) VALUES
(31, 634461230, 32, 71, 0.0, 0, 0, 0),
(32, 1532754279, 33, 69, 0.0, 0, 0, 0),
(33, 1532754279, 32, 71, 0.0, 0, 0, 0),
(34, 22351103, 32, 71, 0.0, 0, 0, 0),
(35, 979312766, 32, 71, 0.0, 0, 0, 0),
(36, 933098737, 32, 71, 0.0, 0, 0, 0),
(37, 626344840, 32, 71, 0.0, 0, 0, 0),
(38, 833070228, 32, 71, 0.0, 0, 0, 0),
(39, 617266136, 32, 71, 0.0, 0, 0, 0),
(40, 1247992995, 32, 71, 0.0, 0, 0, 0),
(41, 333210228, 32, 71, 0.0, 0, 0, 0),
(42, 1752369577, 32, 71, 0.0, 0, 0, 0),
(43, 96151648, 32, 71, 0.0, 0, 0, 0),
(44, 104526679, 32, 71, 0.0, 0, 0, 0),
(45, 1515291357, 32, 71, 0.0, 0, 0, 0),
(46, 1119156574, 32, 71, 0.0, 0, 0, 0),
(47, 460935379, 32, 71, 0.0, 0, 0, 0),
(48, 72746016, 32, 71, 0.0, 0, 0, 0),
(49, 1329798420, 32, 71, 0.0, 0, 0, 0),
(50, 726915652, 32, 71, 0.0, 0, 0, 0),
(51, 2068079114, 32, 71, 0.0, 0, 0, 0),
(52, 436391778, 32, 71, 0.0, 0, 0, 0),
(53, 1893081511, 32, 71, 0.0, 0, 0, 0),
(54, 660829915, 32, 71, 0.0, 0, 0, 0),
(55, 1025483807, 32, 66, 0.0, 0, 0, 0),
(56, 1025483807, 32, 68, 0.0, 0, 0, 0),
(57, 236514373, 33, 71, 0.0, 0, 0, 0),
(58, 236514373, 32, 66, 0.0, 0, 0, 0),
(59, 2123525329, 32, 66, 0.0, 0, 0, 0),
(60, 2047101479, 33, 71, 0.0, 0, 0, 0),
(61, 351872231, 33, 71, 0.0, 0, 0, 0),
(62, 308108699, 33, 71, 0.0, 0, 0, 0),
(63, 1786291403, 33, 71, 0.0, 0, 0, 0),
(64, 761187690, 33, 71, 0.0, 0, 0, 0),
(65, 1413280352, 33, 71, 0.0, 0, 0, 0),
(66, 1267253109, 33, 71, 0.0, 0, 0, 0),
(67, 529120451, 33, 71, 0.0, 0, 0, 0),
(68, 851931777, 33, 71, 0.0, 0, 0, 0),
(69, 165324074, 33, 71, 0.0, 0, 0, 0),
(70, 1097360071, 33, 71, 0.0, 0, 0, 0),
(71, 1194926580, 33, 71, 0.0, 0, 0, 0),
(72, 564687527, 33, 71, 0.0, 0, 0, 0),
(73, 1968706536, 33, 71, 0.0, 0, 0, 0),
(74, 2122941101, 33, 71, 0.0, 0, 0, 0),
(75, 1611220418, 33, 71, 0.0, 0, 0, 0),
(76, 791935031, 33, 71, 0.0, 0, 0, 0),
(77, 677456656, 33, 71, 0.0, 0, 0, 0),
(78, 437818916, 33, 71, 0.0, 0, 0, 0),
(79, 133427624, 33, 71, 0.0, 0, 0, 0),
(80, 1250554793, 33, 71, 0.0, 0, 0, 0),
(81, 1764027371, 33, 71, 0.0, 0, 0, 0),
(82, 642965914, 33, 71, 0.0, 0, 0, 0),
(83, 1837911164, 33, 71, 0.0, 0, 0, 0),
(84, 712227234, 33, 71, 0.0, 0, 0, 0),
(85, 392338454, 33, 71, 0.0, 0, 0, 0),
(86, 318467677, 33, 71, 0.0, 0, 0, 0),
(87, 451768239, 33, 71, 0.0, 0, 0, 0),
(88, 1527121813, 33, 71, 0.0, 0, 0, 0),
(89, 544209292, 33, 71, 0.0, 0, 0, 0),
(90, 991705316, 33, 71, 0.0, 0, 0, 0),
(91, 1100977209, 33, 71, 0.0, 0, 0, 0),
(92, 1030172263, 33, 71, 0.0, 0, 0, 0),
(93, 1338269525, 33, 71, 0.0, 0, 0, 0),
(94, 1610888701, 33, 71, 0.0, 0, 0, 0),
(95, 218865287, 33, 71, 0.0, 0, 0, 0),
(96, 1007702341, 33, 71, 0.0, 0, 0, 0),
(97, 1699956754, 33, 79, 0.0, 0, 0, 0),
(98, 1699956754, 33, 80, 0.0, 0, 0, 0),
(99, 1699956754, 33, 81, 0.0, 0, 0, 0),
(100, 1699956754, 33, 82, 0.0, 0, 0, 0),
(101, 1699956754, 33, 83, 0.0, 0, 0, 0),
(102, 1699956754, 33, 84, 0.0, 0, 0, 0),
(103, 1699956754, 33, 85, 0.0, 0, 0, 0),
(104, 1699956754, 33, 86, 0.0, 0, 0, 0),
(105, 1699956754, 33, 87, 0.0, 0, 0, 0),
(106, 1699956754, 33, 88, 0.0, 0, 0, 0),
(107, 1699956754, 33, 89, 0.0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `contuctus`
--

CREATE TABLE `contuctus` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contuctus`
--

INSERT INTO `contuctus` (`id`, `name`, `email`, `message`) VALUES
(1, 'sohel rana', 'sohel123@gmail.com', 's+h');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `date` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `date`) VALUES
(1, 'Rana', 'rana@gmail.com', 'new features should be added future.', '2019-08-08 12:00:00.000000'),
(2, 'Bijoy', 'bijoy@gmail.com', 'it is updating', '2019-08-14 17:02:07.000000'),
(3, 'Bijoy', 'bijoy@gmail.com', 'gsgsvv', '2019-08-14 17:14:13.000000'),
(4, 'sohel rana', 'sohel123@gmail.com', 'this is very nice website', '2019-08-20 11:08:08.000000');

-- --------------------------------------------------------

--
-- Table structure for table `fixture`
--

CREATE TABLE `fixture` (
  `id` int(24) NOT NULL,
  `tournament_id` int(255) NOT NULL,
  `team1Id` int(24) NOT NULL,
  `team2Id` int(24) NOT NULL,
  `venue` varchar(64) NOT NULL,
  `date` varchar(10) NOT NULL,
  `time` varchar(255) NOT NULL,
  `matchType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fixture`
--

INSERT INTO `fixture` (`id`, `tournament_id`, `team1Id`, `team2Id`, `venue`, `date`, `time`, `matchType`) VALUES
(10, 2, 32, 33, 'Dhaka', '22/11/2019', '09:00 AM', 'day'),
(15, 2, 32, 33, 'Dhaka', '22/11/2019', '10:00 AM', 'day'),
(16, 6, 34, 35, 'Dhaka', '23/11/2019', '10:00 AM', 'day'),
(17, 8, 32, 34, 'Bashundhara', '20/10/2019', '10:00 AM', 'day'),
(18, 9, 36, 38, 'chittagong', '12/09/2019', '10:00 AM', 'day');

-- --------------------------------------------------------

--
-- Table structure for table `game_manager`
--

CREATE TABLE `game_manager` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `created_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game_manager`
--

INSERT INTO `game_manager` (`id`, `name`, `email`, `password`, `phone`, `address`, `created_time`) VALUES
(3, 'Bijoy', 'bijoy@gmail.com', '12345678', '01923845646', 'dhaka Bangladesh', '2019-08-08 07:01:45.000000'),
(4, 'Abdul', 'gamemanager@gmail.com', '123456', '01923845645', 'dhaka Bangladesh', '2019-08-20 08:36:01.000000');

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `teamId` int(24) NOT NULL,
  `profilePic` varchar(100) NOT NULL,
  `name` varchar(64) NOT NULL,
  `playerRole` varchar(64) NOT NULL,
  `status` int(1) NOT NULL,
  `created_time` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `teamId`, `profilePic`, `name`, `playerRole`, `status`, `created_time`) VALUES
(66, 32, '1566204573.png', 'Mehedi hasan', 'batsman', 1, '2019-08-19 08:49:33.000000'),
(68, 32, '1566204676.png', 'Ibrahim sarker', 'all-rounder', 1, '2019-08-19 08:51:16.000000'),
(69, 32, '1566204720.png', 'Arif hossain', 'bowler', 1, '2019-08-19 08:52:00.000000'),
(70, 32, '1566204795.png', 'pappu hasan', 'all-rounder', 1, '2019-08-19 08:53:15.000000'),
(72, 32, '1566290278.png', 'Hasan', 'all-rounder', 1, '2019-08-20 08:37:58.000000'),
(73, 32, '1566290321.png', 'Miraz', 'all-rounder', 1, '2019-08-20 08:38:41.000000'),
(74, 32, '1566290363.png', 'Rubel rana', 'bowler', 1, '2019-08-20 08:39:23.000000'),
(75, 32, '1566290391.png', 'Musfiq', 'w-keeper', 1, '2019-08-20 08:39:51.000000'),
(76, 32, '1566290433.png', 'Shakib', 'all-rounder', 1, '2019-08-20 08:40:33.000000'),
(77, 32, '1566290471.png', 'Mamun hasan', 'bowler', 1, '2019-08-20 08:41:11.000000'),
(78, 32, 'playersprofile.png', 'Md. Rafiq', 'batsman', 1, '2019-08-20 08:44:39.000000'),
(79, 33, '1566290529.jpg', 'Bijoy', 'batsman', 1, '2019-08-20 08:42:09.000000'),
(80, 33, '1566290554.jpg', 'Sohel rana', 'w-keeper', 1, '2019-08-20 08:42:34.000000'),
(81, 33, '1566290579.jpg', 'Nahin hossain', 'all-rounder', 1, '2019-08-20 08:42:59.000000'),
(82, 33, '1566290608.jpg', 'pappu', 'all-rounder', 1, '2019-08-20 08:43:28.000000'),
(83, 33, '1566290717.jpg', 'Masud rana', 'all-rounder', 1, '2019-08-20 08:45:17.000000'),
(84, 33, '1566290746.jpg', 'Zisan hasan', 'bowler', 1, '2019-08-20 08:45:46.000000'),
(85, 33, '1566290780.jpg', 'Rahim', 'all-rounder', 1, '2019-08-20 08:46:20.000000'),
(86, 33, '1566290801.jpg', 'Nafis Adil', 'all-rounder', 1, '2019-08-20 08:46:41.000000'),
(87, 33, '1566290829.jpg', 'Mustasim khandakar', 'bowler', 1, '2019-08-20 08:47:09.000000'),
(88, 33, '1566290864.jpg', 'Rakibul islam', 'bowler', 1, '2019-08-20 08:47:44.000000'),
(89, 33, '1566290892.jpg', 'Arafat hossain', 'bowler', 1, '2019-08-20 08:48:12.000000'),
(90, 34, '1566290933.png', 'Nafis Ahmed', 'batsman', 1, '2019-08-20 08:48:53.000000'),
(91, 34, '1566290966.png', 'Ibrahim', 'batsman', 1, '2019-08-20 08:49:26.000000'),
(92, 34, '1566291009.png', 'Shakil', 'batsman', 1, '2019-08-20 08:50:09.000000'),
(93, 34, '1566291077.png', 'Fahim', 'batsman', 1, '2019-08-20 08:51:17.000000'),
(94, 34, '1566291190.png', 'Saif Hassan', 'batsman', 1, '2019-08-20 08:53:10.000000'),
(95, 34, '1566291212.png', 'Afif Hossain', 'all-rounder', 1, '2019-08-20 08:53:32.000000'),
(96, 34, '1566291233.png', 'Jaker Ali', 'all-rounder', 1, '2019-08-20 08:53:53.000000'),
(97, 34, '1566291265.png', 'Towhid Hridoy', 'bowler', 1, '2019-08-20 08:54:25.000000'),
(98, 34, '1566291284.png', 'Nayeem Hasan', 'all-rounder', 1, '2019-08-20 08:54:44.000000'),
(99, 34, '1566291327.png', 'Zakir Hasan', 'w-keeper', 1, '2019-08-20 08:55:27.000000'),
(100, 34, '1566291345.png', 'Shafin Gazi', 'bowler', 1, '2019-08-20 08:55:45.000000'),
(101, 34, '1566291384.png', 'Kazi Anik', 'bowler', 1, '2019-08-20 08:56:24.000000'),
(102, 32, '1566291422.png', 'Yasir Arafat Mishu', 'bowler', 1, '2019-08-20 08:57:02.000000'),
(103, 35, '1566291452.png', 'Naim Shaikh', 'batsman', 1, '2019-08-20 08:57:32.000000'),
(104, 35, '1566291471.png', 'Pinak Ghosh', 'batsman', 1, '2019-08-20 08:57:51.000000'),
(105, 35, '1566291497.png', 'Naveed Nawaz', 'batsman', 1, '2019-08-20 08:58:17.000000'),
(106, 35, '1566291523.png', 'Abdullah Ali', 'all-rounder', 1, '2019-08-20 08:58:43.000000'),
(107, 35, '1566291544.png', 'Basit Ali', 'w-keeper', 1, '2019-08-20 08:59:04.000000'),
(108, 35, '1566291575.png', 'Aftab Ahmed', 'all-rounder', 1, '2019-08-20 08:59:35.000000'),
(109, 35, '1566291599.png', 'Ashiqur Rahman', 'bowler', 1, '2019-08-20 08:59:59.000000'),
(110, 35, '1566291639.png', 'Nafees Iqbal', 'batsman', 1, '2019-08-20 09:00:39.000000'),
(111, 35, '1566291660.png', 'Hannan Sarkar', 'all-rounder', 1, '2019-08-20 09:01:00.000000'),
(112, 35, '1566291686.png', 'Anamul Haque', 'w-keeper', 1, '2019-08-20 09:01:26.000000'),
(113, 35, '1566291711.png', 'Nazmul Hossain', 'bowler', 1, '2019-08-20 09:01:51.000000'),
(114, 36, '1566291779.png', 'Anamul Haque', 'batsman', 1, '2019-08-20 09:02:59.000000'),
(115, 36, '1566291802.png', 'Mehedi Miraz', 'all-rounder', 1, '2019-08-20 09:03:22.000000'),
(116, 36, '1566291836.png', 'Enamul Haque', 'batsman', 1, '2019-08-20 09:03:56.000000'),
(117, 36, '1566291871.png', 'Mahmudul Hasan', 'all-rounder', 1, '2019-08-20 09:04:31.000000'),
(118, 36, '1566291890.png', 'Ranjan Das', 'all-rounder', 1, '2019-08-20 09:04:50.000000'),
(119, 36, '1566291947.png', 'Ayush Badoni', 'bowler', 1, '2019-08-20 09:05:47.000000'),
(120, 38, '1566292017.png', 'Ayush Badoni', 'batsman', 1, '2019-08-20 09:06:57.000000'),
(121, 38, '1566292044.png', 'Sameer Choudhary', 'w-keeper', 1, '2019-08-20 09:07:24.000000'),
(122, 38, '1566292062.png', 'Siddharth Desai', 'batsman', 1, '2019-08-20 09:07:42.000000'),
(123, 38, '1566292079.png', 'Siddharth Desai', 'batsman', 1, '2019-08-20 09:07:59.000000'),
(124, 38, '1566292099.png', 'Yashasvi Jaiswal', 'bowler', 1, '2019-08-20 09:08:19.000000');

-- --------------------------------------------------------

--
-- Table structure for table `position`
--

CREATE TABLE `position` (
  `id` int(11) NOT NULL,
  `battingPosition` int(7) NOT NULL,
  `bowlingPosition` int(7) NOT NULL,
  `teamPosition` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(11) NOT NULL,
  `resultid` int(10) NOT NULL,
  `fixtureid` int(11) NOT NULL,
  `team1score` int(10) NOT NULL,
  `team2score` int(10) NOT NULL,
  `tossid` int(10) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`id`, `resultid`, `fixtureid`, `team1score`, `team2score`, `tossid`, `comment`) VALUES
(8, 634461230, 2, 0, 0, 0, 'null'),
(9, 1532754279, 2, 0, 0, 0, 'null'),
(10, 22351103, 2, 0, 0, 0, 'null'),
(11, 979312766, 6, 0, 0, 0, 'null'),
(12, 933098737, 2, 0, 0, 0, 'null'),
(13, 1966843544, 2, 0, 0, 0, 'null'),
(14, 626344840, 7, 0, 0, 0, 'null'),
(15, 833070228, 7, 0, 0, 0, 'null'),
(16, 617266136, 7, 0, 0, 0, 'null'),
(17, 1247992995, 7, 0, 0, 0, 'null'),
(18, 333210228, 7, 0, 0, 0, 'null'),
(19, 1752369577, 7, 0, 0, 0, 'null'),
(20, 96151648, 7, 0, 0, 0, 'null'),
(21, 104526679, 7, 0, 0, 0, 'null'),
(22, 1515291357, 7, 0, 0, 0, 'null'),
(23, 1119156574, 7, 0, 0, 0, 'null'),
(24, 460935379, 2, 0, 0, 0, 'null'),
(25, 72746016, 2, 0, 0, 0, 'null'),
(26, 1329798420, 7, 0, 0, 0, 'null'),
(27, 726915652, 2, 0, 0, 0, 'null'),
(28, 2068079114, 2, 0, 0, 0, 'null'),
(29, 436391778, 2, 0, 0, 0, 'null'),
(30, 1893081511, 2, 0, 0, 0, 'null'),
(31, 660829915, 6, 0, 0, 0, 'null'),
(32, 1025483807, 2, 0, 0, 0, 'null'),
(33, 236514373, 6, 0, 0, 0, 'null'),
(34, 2123525329, 2, 0, 0, 0, 'null'),
(35, 1448192540, 2, 0, 0, 0, 'null'),
(36, 2047101479, 2, 0, 0, 0, 'null'),
(37, 351872231, 6, 0, 0, 0, 'null'),
(38, 308108699, 2, 0, 0, 0, 'null'),
(39, 1786291403, 2, 0, 0, 0, 'null'),
(40, 761187690, 7, 0, 0, 0, 'null'),
(41, 1413280352, 2, 0, 0, 0, 'null'),
(42, 1267253109, 2, 0, 0, 0, 'null'),
(43, 529120451, 2, 0, 0, 0, 'null'),
(44, 851931777, 2, 0, 0, 0, 'null'),
(45, 165324074, 2, 0, 0, 0, 'null'),
(46, 1097360071, 2, 0, 0, 0, 'null'),
(47, 1194926580, 2, 0, 0, 0, 'null'),
(48, 564687527, 2, 0, 0, 0, 'null'),
(49, 1968706536, 2, 0, 0, 0, 'null'),
(50, 2122941101, 2, 0, 0, 0, 'null'),
(51, 1611220418, 2, 0, 0, 0, 'null'),
(52, 791935031, 6, 0, 0, 0, 'null'),
(53, 677456656, 6, 0, 0, 0, 'null'),
(54, 437818916, 6, 0, 0, 0, 'null'),
(55, 133427624, 6, 0, 0, 0, 'null'),
(56, 1250554793, 6, 0, 0, 0, 'null'),
(57, 1764027371, 6, 0, 0, 0, 'null'),
(58, 642965914, 6, 0, 0, 0, 'null'),
(59, 1837911164, 6, 0, 0, 0, 'null'),
(60, 712227234, 6, 0, 0, 0, 'null'),
(61, 392338454, 6, 0, 0, 0, 'null'),
(62, 318467677, 6, 0, 0, 0, 'null'),
(63, 451768239, 2, 0, 0, 0, 'null'),
(64, 1527121813, 2, 0, 0, 0, 'null'),
(65, 544209292, 6, 0, 0, 0, 'null'),
(66, 991705316, 6, 0, 0, 0, 'null'),
(67, 1100977209, 6, 0, 0, 0, 'null'),
(68, 1030172263, 6, 0, 0, 0, 'null'),
(69, 1338269525, 2, 0, 0, 0, 'null'),
(70, 1610888701, 2, 0, 0, 0, 'null'),
(71, 218865287, 2, 0, 0, 0, 'null'),
(72, 1007702341, 2, 0, 0, 0, 'null'),
(73, 1819107725, 7, 0, 0, 0, 'null'),
(74, 1699956754, 2, 0, 0, 0, 'null');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `teamName` varchar(255) NOT NULL,
  `teamShortName` varchar(64) NOT NULL,
  `teamLogo` varchar(100) NOT NULL,
  `status` int(1) NOT NULL,
  `created_time` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `teamName`, `teamShortName`, `teamLogo`, `status`, `created_time`) VALUES
(32, 'Tiger 11', 'T11', '1566204170.png', 1, '2019-08-19 08:42:50'),
(33, 'Team Bashundhara', 'TB', '1566204228.jpeg', 1, '2019-08-19 08:43:48'),
(34, 'Kuril squad', 'KS', '1566204316.jpg', 1, '2019-08-19 08:45:16'),
(35, 'Team Debug', 'TDG', '1566204391.png', 1, '2019-08-19 08:46:31'),
(36, 'Mohamedan club', 'MHC', '1566289956.jpg', 1, '2019-08-20 08:32:36'),
(38, 'Dhaka cricket club', 'DCC', '1566290073.png', 1, '2019-08-20 08:34:33');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `id` int(11) NOT NULL,
  `match_type` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL,
  `total_team` int(100) NOT NULL,
  `created_time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`id`, `match_type`, `Location`, `total_team`, `created_time`) VALUES
(2, 'Walton T20 cup 2018', 'Dhaka', 15, '2019-08-20 08:26:28'),
(6, 'Inter collage t20 tournament 2019', 'Jahangirnagar', 12, '2019-08-06 06:43:03'),
(7, 'One day series', 'Chittagong', 5, '2019-08-20 08:26:47'),
(8, 'Samsung under19 Cup', 'Dhaka', 10, '2019-08-20 08:27:38'),
(9, 'Big tournament 2019', 'Dhaka', 12, '2019-08-20 08:28:29');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments_details`
--

CREATE TABLE `tournaments_details` (
  `id` int(255) NOT NULL,
  `tournament_id` int(255) NOT NULL,
  `team_id` int(255) NOT NULL,
  `op_team_id` int(255) NOT NULL,
  `team_status` varchar(255) NOT NULL,
  `oponent_status` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `home_side` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournaments_details`
--

INSERT INTO `tournaments_details` (`id`, `tournament_id`, `team_id`, `op_team_id`, `team_status`, `oponent_status`, `location`, `home_side`) VALUES
(102, 2, 32, 33, 'Batting', 'Bowling', 'Jahangirnagar', 'home');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments_players`
--

CREATE TABLE `tournaments_players` (
  `id` int(255) NOT NULL,
  `tournament_id` int(255) NOT NULL,
  `team_id` int(255) NOT NULL,
  `player_squad_list` text NOT NULL,
  `team_id_op` int(11) NOT NULL,
  `player_squard_list_op` text NOT NULL,
  `player_squad_captain` varchar(255) NOT NULL,
  `player_squad_keeper` varchar(255) NOT NULL,
  `player_squad_captain_op` varchar(255) NOT NULL,
  `player_squad_keeper_op` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournaments_players`
--

INSERT INTO `tournaments_players` (`id`, `tournament_id`, `team_id`, `player_squad_list`, `team_id_op`, `player_squard_list_op`, `player_squad_captain`, `player_squad_keeper`, `player_squad_captain_op`, `player_squad_keeper_op`) VALUES
(8, 1, 4, '[\"Aaron Finch\",\"Jason Behrendorff\",\"Glenn Maxwell\",\"Kane Richardson\",\"Steven Smith\"]', 2, '[\"Andre Rassel\",\"Jason Holder\",\"Fabian Allen\",\"Sunil Ambris\",\"Carlos Brathwaite\"]', '', '', '', ''),
(9, 1, 3, '[\"MS Dhoni\",\"Rohit Sharma\",\"Virat Koholi\",\"Mohammad shami\",\"Jasprit Bumrah\"]', 4, '[\"Aaron Finch\",\"Jason Behrendorff\",\"Glenn Maxwell\",\"Kane Richardson\",\"Steven Smith\",\"Mitchell Starc\"]', '10', '16', '18', '26'),
(10, 1, 4, '[\"Aaron Finch\",\"Jason Behrendorff\",\"Glenn Maxwell\",\"Kane Richardson\",\"Steven Smith\",\"Mitchell Starc\"]', 1, '[\"Tamim\",\"Sakib\",\"Musfiqur\",\"Masrafi\"]', '18', '27', '1', '3'),
(11, 1, 3, '[\"MS Dhoni\",\"Rohit Sharma\",\"Virat Koholi\",\"Mohammad shami\",\"Jasprit Bumrah\",\"Yuzvendra Chahal\"]', 1, '[\"Tamim\",\"Sakib\",\"Musfiqur\",\"Masrafi\"]', 'MS Dhoni', 'MS Dhoni', 'Tamim', 'Sakib'),
(12, 1, 2, '[\"Andre Rassel\",\"Jason Holder\",\"Fabian Allen\",\"Sunil Ambris\"]', 6, '[\"Eoin Morgan\",\"Moeen Ali\",\"Jofra Archer\",\"Jonny Bairstow\"]', 'Shai Hope', 'Sheldon Cottrell', 'Jos Buttler', 'Chris Woakes'),
(13, 1, 2, '[\"Andre Rassel\",\"Jason Holder\",\"Fabian Allen\"]', 4, '[\"Aaron Finch\",\"Jason Behrendorff\",\"Glenn Maxwell\",\"Kane Richardson\"]', 'Ashley Nurse', 'Kemar Roach', 'Jhye Richardson', 'Alex Carey'),
(14, 1, 3, '[\"MS Dhoni\",\"Rohit Sharma\",\"Virat Koholi\"]', 4, '[\"Aaron Finch\",\"Jason Behrendorff\"]', 'Virat Koholi', 'Dinesh Karthik', 'Mitchell Marsh', 'Jhye Richardson'),
(15, 1, 1, '[\"Tamim\",\"Sakib\",\"Musfiqur\",\"Masrafi\"]', 2, '[\"Andre Rassel\",\"Jason Holder\",\"Fabian Allen\",\"Sunil Ambris\",\"Carlos Brathwaite\",\"Darren Bravo\",\"Sheldon Cottrell\"]', 'Tamim', 'Sakib', 'Shimron Hetmyer', 'Shannon Gabriel'),
(16, 2, 15, '[\"Kane Richardson\",\"Steven Smith\"]', 14, '[\"Shikhar Dhawan\",\"Jason Behrendorff\",\"Dinesh Karthik\",\"Dinesh Karthik 2\"]', 'Kane Richardson', 'Steven Smith', 'Shikhar Dhawan', 'Dinesh Karthik'),
(17, 2, 15, '[\"Kane Richardson\",\"Steven Smith\",\"Mitchell Starc\"]', 14, '[\"Shikhar Dhawan\",\"Dinesh Karthik\",\"Dinesh Karthik 2\"]', 'Kane Richardson', 'Steven Smith', 'Shikhar Dhawan', 'Shikhar Dhawan'),
(18, 6, 15, '[\"Kane Richardson\",\"Steven Smith\",\"Mitchell Starc\"]', 14, '[\"Shikhar Dhawan\",\"Jason Behrendorff\",\"Dinesh Karthik\"]', 'Kane Richardson', 'David Warner', 'Shikhar Dhawan', 'Dinesh Karthik'),
(19, 2, 14, '[\"Shikhar Dhawan\",\"Jason Behrendorff\",\"Dinesh Karthik\",\"Dinesh Karthik 2\"]', 15, '[\"Kane Richardson\",\"Steven Smith\",\"Mitchell Starc\",\"Adam Zampa\"]', 'Shikhar Dhawan', 'Dinesh Karthik', 'Kane Richardson', 'David Warner'),
(20, 6, 14, 'N/A', 15, 'N/A', 'Shikhar Dhawan', 'Shikhar Dhawan', 'Kane Richardson', 'Kane Richardson'),
(21, 2, 14, 'N/A', 15, 'N/A', 'Jason Behrendorff', 'Shikhar Dhawan', 'Steven Smith', 'Steven Smith'),
(22, 2, 14, 'N/A', 15, 'N/A', 'Jason Behrendorff', 'Shikhar Dhawan', 'Steven Smith', 'Steven Smith'),
(23, 2, 14, 'N/A', 15, 'N/A', 'Jason Behrendorff', 'Shikhar Dhawan', 'Steven Smith', 'Kane Richardson'),
(24, 2, 29, 'N/A', 14, 'N/A', 'Select Captain', 'Select W.keeper', 'Shikhar Dhawan', 'Shikhar Dhawan'),
(25, 2, 16, 'N/A', 15, 'N/A', 'Mitchell Marsh', 'Sunil Ambris', 'Kane Richardson', 'Steven Smith'),
(26, 2, 14, 'N/A', 15, 'N/A', 'Jason Behrendorff', 'Shikhar Dhawan', 'Kane Richardson', 'Steven Smith'),
(27, 6, 15, 'N/A', 14, 'N/A', 'Mitchell Starc', 'Mitchell Starc', 'Jason Behrendorff', 'Dinesh Karthik'),
(28, 2, 14, 'N/A', 15, 'N/A', 'Shikhar Dhawan', 'Dinesh Karthik', 'Kane Richardson', 'Kane Richardson'),
(29, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(30, 2, 32, 'N/A', 33, 'N/A', 'Arif hossain', 'Arif hossain', 'Abdur Rahim', 'Abdur Rahim'),
(31, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(32, 6, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(33, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(34, 2, 32, 'N/A', 33, 'N/A', 'Select Captain', 'Select W.keeper', 'Select Captain', 'Select Captain'),
(35, 7, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(36, 7, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(37, 7, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(38, 7, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(39, 7, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(40, 7, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(41, 7, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(42, 7, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(43, 7, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(44, 7, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(45, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(46, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(47, 7, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(48, 2, 32, 'N/A', 33, 'N/A', 'Select Captain', 'Select W.keeper', 'Select Captain', 'Select Captain'),
(49, 2, 32, 'N/A', 33, 'N/A', 'Select Captain', 'Select W.keeper', 'Select Captain', 'Select Captain'),
(50, 2, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Arif hossain', 'Abdur Rahim', 'Abdur Rahim'),
(51, 2, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Arif hossain', 'Abdur Rahim', 'Abdur Rahim'),
(52, 6, 32, 'N/A', 33, 'N/A', 'Arif hossain', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(53, 2, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(54, 6, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(55, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(56, 2, 32, 'N/A', 33, 'N/A', 'Select Captain', 'Select W.keeper', 'Select Captain', 'Select Captain'),
(57, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(58, 6, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(59, 2, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(60, 2, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(61, 7, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(62, 2, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(63, 2, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(64, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(65, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(66, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(67, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(68, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(69, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(70, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(71, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(72, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(73, 6, 32, 'N/A', 33, 'N/A', 'Select Captain', 'Select W.keeper', 'Select Captain', 'Select Captain'),
(74, 6, 32, 'N/A', 33, 'N/A', 'Select Captain', 'Select W.keeper', 'Select Captain', 'Select Captain'),
(75, 6, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(76, 6, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(77, 6, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(78, 6, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(79, 6, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Mehedi hasan', 'Abdur Rahim', 'Abdur Rahim'),
(80, 6, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(81, 6, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(82, 6, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(83, 6, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(84, 2, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(85, 2, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(86, 6, 32, 'N/A', 33, 'N/A', 'Select Captain', 'Select W.keeper', 'Select Captain', 'Select Captain'),
(87, 6, 32, 'N/A', 33, 'N/A', 'Select Captain', 'Select W.keeper', 'Select Captain', 'Select Captain'),
(88, 6, 32, 'N/A', 33, 'N/A', 'Select Captain', 'Select W.keeper', 'Select Captain', 'Select Captain'),
(89, 6, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(90, 2, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(91, 2, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(92, 2, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(93, 2, 32, 'N/A', 33, 'N/A', 'Ibrahim sarker', 'Ibrahim sarker', 'Abdur Rahim', 'Abdur Rahim'),
(94, 7, 32, 'N/A', 34, 'N/A', 'Mehedi hasan', 'Yasir Arafat Mishu', 'Zakir Hasan', 'Shafin Gazi'),
(95, 2, 32, 'N/A', 33, 'N/A', 'Mehedi hasan', 'pappu hasan', 'Nahin hossain', 'pappu');

-- --------------------------------------------------------

--
-- Table structure for table `tournaments_players_performance`
--

CREATE TABLE `tournaments_players_performance` (
  `id` int(255) NOT NULL,
  `tournament_id` int(255) NOT NULL,
  `team_id` int(255) NOT NULL,
  `batting_performance` text NOT NULL,
  `bowling_performance` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batperformance`
--
ALTER TABLE `batperformance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bowlingperformance`
--
ALTER TABLE `bowlingperformance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contuctus`
--
ALTER TABLE `contuctus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fixture`
--
ALTER TABLE `fixture`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `game_manager`
--
ALTER TABLE `game_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `position`
--
ALTER TABLE `position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournaments`
--
ALTER TABLE `tournaments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournaments_details`
--
ALTER TABLE `tournaments_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournaments_players`
--
ALTER TABLE `tournaments_players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tournaments_players_performance`
--
ALTER TABLE `tournaments_players_performance`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `batperformance`
--
ALTER TABLE `batperformance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `bowlingperformance`
--
ALTER TABLE `bowlingperformance`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `contuctus`
--
ALTER TABLE `contuctus`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fixture`
--
ALTER TABLE `fixture`
  MODIFY `id` int(24) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `game_manager`
--
ALTER TABLE `game_manager`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tournaments_details`
--
ALTER TABLE `tournaments_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT for table `tournaments_players`
--
ALTER TABLE `tournaments_players`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `tournaments_players_performance`
--
ALTER TABLE `tournaments_players_performance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
