-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2019 at 06:46 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

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
-- Table structure for table `fixture`
--

CREATE TABLE `fixture` (
  `id` int(24) NOT NULL,
  `team1Id` int(24) NOT NULL,
  `team2Id` int(24) NOT NULL,
  `venue` varchar(64) NOT NULL,
  `teamPosition` int(20) NOT NULL,
  `date` datetime(6) NOT NULL,
  `matchType` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `teamId` int(24) NOT NULL,
  `name` varchar(64) NOT NULL,
  `playerRole` varchar(64) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `teamId`, `name`, `playerRole`, `status`) VALUES
(1, 1, 'Tamim', 'Batsman', 1),
(2, 1, 'Sakib', 'Batsman', 1),
(3, 1, 'Musfiqur', 'wicket keeper', 1),
(4, 1, 'Masrafi', 'Bowlder', 1),
(6, 2, 'Andre Rassel', 'Bowler', 1),
(7, 3, 'MS Dhoni', 'Wicket keeper', 1),
(8, 3, 'Rohit Sharma', 'Batting', 1),
(9, 3, 'Virat Koholi', 'Batting', 1),
(10, 3, 'Mohammad shami', 'Bowler', 1),
(11, 3, 'Jasprit Bumrah', 'Bowler', 1),
(12, 3, 'Yuzvendra Chahal', 'Bowler', 1),
(13, 3, '\r\nRavindra Jadeja', ' Allrounder', 1),
(14, 3, 'Kedar Jadhav', 'Batting allrounder', 1),
(15, 3, 'Dinesh Karthik', 'Wicketkeeper batsman', 1),
(16, 3, 'Shikhar Dhawan', 'Opening batsman', 1),
(17, 4, 'Aaron Finch', 'Top-order batsman', 1),
(18, 4, 'Jason Behrendorff', 'Bowler', 1),
(19, 4, 'Glenn Maxwell', 'Batting allrounder', 1),
(20, 4, 'Kane Richardson\r\n', 'Bowler', 1),
(21, 4, 'Steven Smith', 'Middle-order batsman', 1),
(22, 4, 'Mitchell Starc', 'Bowler', 1),
(23, 4, 'David Warner', 'Opening batsman', 1),
(24, 4, 'Adam Zampa', 'Bowler', 1),
(25, 4, 'Jhye Richardson', 'Bowler', 1),
(26, 4, 'Mitchell Marsh', 'Allrounder', 1),
(27, 4, 'Alex Carey', 'Wicketkeeper batsman', 1),
(28, 2, 'Jason Holder', 'Bowling allrounder', 1),
(29, 2, 'Fabian Allen', 'Fabian Allen', 1),
(30, 2, 'Sunil Ambris', 'Opening batsman', 1),
(31, 2, 'Carlos Brathwaite', 'Allrounder', 1),
(32, 2, 'Darren Bravo', 'Top-order batsman', 1),
(33, 2, 'Sheldon Cottrell', 'Bowler', 1),
(34, 2, 'Shannon Gabriel', 'Bowler', 1),
(35, 2, 'Chris Gayle', 'Allrounder', 1),
(36, 2, 'Shimron Hetmyer', 'Top-order batsman', 1),
(37, 2, 'Shai Hope', 'Wicketkeeper batsman', 1),
(38, 2, 'Evin Lewis', 'Opening batsman', 1),
(39, 2, 'Ashley Nurse', 'Bowler', 1),
(40, 2, 'Nicholas Pooran', 'Wicketkeeper batsman', 1),
(41, 2, 'Kemar Roach', 'Bowler', 1),
(42, 2, 'Oshane Thomas', 'Bowler', 1),
(43, 6, 'Eoin Morgan', 'Middle-order batsman', 1),
(44, 6, 'Moeen Ali', 'allrounder', 1),
(45, 6, '\r\nJofra Archer\r\n', 'Bowling allrounder', 1),
(46, 6, 'Jonny Bairstow', 'Wicketkeeper', 1),
(47, 6, 'Jos Buttler', 'Wicketkeeper batsman', 1),
(48, 6, 'Tom Curran', 'Bowling allrounder', 1),
(49, 6, 'Liam Dawson\r\n', 'Allrounder', 1),
(50, 6, 'Liam Plunkett', 'Bowler', 1),
(51, 6, 'Adil Rashid', 'Bowler', 1),
(52, 6, 'Joe Root', 'Top-order batsman', 1),
(53, 6, 'Jason Roy', 'Middle-order batsman', 1),
(54, 6, 'Ben Stokes', 'Allrounder', 1),
(55, 6, 'James Vince', 'Batsman', 1),
(56, 6, 'Chris Woakes', 'Allrounder', 1),
(57, 6, 'Mark Wood', 'Opening batsman', 1);

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
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `teamName` varchar(255) NOT NULL,
  `teamShortName` varchar(64) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `teamName`, `teamShortName`, `status`) VALUES
(1, 'Bangladesh', 'BD', 1),
(2, 'West Indies', 'WI', 1),
(3, 'India', 'IND', 1),
(4, 'Australia', 'AUS', 1),
(5, 'Ireland', 'IRE', 1),
(6, 'England', 'ENG', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tournaments`
--

CREATE TABLE `tournaments` (
  `id` int(11) NOT NULL,
  `match_type` varchar(255) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tournaments`
--

INSERT INTO `tournaments` (`id`, `match_type`, `Location`) VALUES
(1, 'Walton Series:Ban vs WI vs Ire', 'Bangladesh'),
(2, 'Friendly series: Ban vs IND', 'India');

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
(1, 1, 2, 4, 'Batting', 'Bowling', 'Bangladesh', 'homw'),
(2, 1, 2, 3, 'Batting', 'Bowling', 'Bangladesh', 'Home'),
(3, 1, 3, 2, 'Batting', 'Bowling', 'Bangladesh', 'nuetraL'),
(4, 1, 2, 4, 'Batting', 'Bowling', 'Bangladesh', 'HOME'),
(5, 1, 1, 3, 'Batting', 'Bowling', 'Bangladesh', 'nuetraL'),
(6, 1, 1, 3, 'Batting', 'Bowling', 'Bangladesh', 'nuetraL'),
(7, 2, 2, 2, 'Bowling', 'Batting', 'Bangladesh', 'hme'),
(8, 2, 2, 2, 'Bowling', 'Batting', 'Bangladesh', 'hme'),
(9, 2, 1, 2, 'Batting', 'Bowling', 'Bangladesh', 'nuetraL'),
(10, 2, 1, 2, 'Batting', 'Bowling', 'Bangladesh', 'nuetraL'),
(11, 2, 1, 2, 'Batting', 'Bowling', 'Bangladesh', 'nuetraL'),
(12, 2, 1, 2, 'Batting', 'Bowling', 'Bangladesh', 'nuetraL'),
(13, 2, 1, 2, 'Batting', 'Bowling', 'Bangladesh', 'nuetraL'),
(14, 1, 2, 3, 'Batting', 'Bowling', 'Bangladesh', 'home'),
(15, 1, 1, 3, 'Batting', 'Bowling', 'Bangladesh', 'home'),
(16, 1, 2, 4, 'Batting', 'Bowling', 'Bangladesh', 'home'),
(17, 1, 1, 4, 'Batting', 'Bowling', 'Bangladesh', 'home'),
(18, 1, 1, 4, 'Batting', 'Bowling', 'Bangladesh', 'home'),
(19, 1, 4, 2, 'Batting', 'Bowling', 'Bangladesh', 'home'),
(20, 1, 4, 2, 'Batting', 'Bowling', 'Bangladesh', 'home'),
(21, 1, 3, 4, 'Batting', 'Bowling', 'Bangladesh', 'Away'),
(22, 1, 4, 1, 'Batting', 'Bowling', 'Bangladesh', 'home'),
(23, 1, 3, 1, 'Batting', 'Bowling', 'Bangladesh', 'home'),
(24, 1, 2, 6, 'Batting', 'Bowling', 'Bangladesh', 'home'),
(25, 1, 2, 4, 'Batting', 'Bowling', 'Bangladesh', 'home'),
(26, 1, 3, 4, 'Batting', 'Bowling', 'Bangladesh', 'nuetraL'),
(27, 1, 3, 4, 'Batting', 'Bowling', 'Bangladesh', 'nuetraL');

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
(14, 1, 3, '[\"MS Dhoni\",\"Rohit Sharma\",\"Virat Koholi\"]', 4, '[\"Aaron Finch\",\"Jason Behrendorff\"]', 'Virat Koholi', 'Dinesh Karthik', 'Mitchell Marsh', 'Jhye Richardson');

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
-- Indexes for table `fixture`
--
ALTER TABLE `fixture`
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
-- AUTO_INCREMENT for table `fixture`
--
ALTER TABLE `fixture`
  MODIFY `id` int(24) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `position`
--
ALTER TABLE `position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tournaments`
--
ALTER TABLE `tournaments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tournaments_details`
--
ALTER TABLE `tournaments_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tournaments_players`
--
ALTER TABLE `tournaments_players`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tournaments_players_performance`
--
ALTER TABLE `tournaments_players_performance`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
