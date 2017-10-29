-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2014 at 06:56 PM
-- Server version: 5.5.34
-- PHP Version: 5.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ihd`
--

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `cno` bigint(20) NOT NULL,
  `star` int(10) NOT NULL,
  `pic` blob,
  `exp` text NOT NULL,
  PRIMARY KEY (`cno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`fname`, `lname`, `uname`, `cno`, `star`, `pic`, `exp`) VALUES
('sanket', 'ASAS', 'ASASASASAS', 5467546765, 1, NULL, 'ERB'),
('varun', 'shah', 'shahvarun', 8796543221, 4, NULL, 'ek no'),
('sanket', 'tilotkar', 'sanket123', 8983080543, 5, '', 'asf ewrvqw rvaw qwvrqw .QVR Qvrvwev.qb ervqwrr ervqr wrqwrc qwc.\r\nqwcfw QVREW ERQWEC WCW.'),
('Salman', 'khan', NULL, 8989898989, 4, NULL, 'it was nice..'),
('Rohini', 'Nair', NULL, 9787675747, 5, NULL, 'Most Bestest website!!'),
('Varun', 'Dhawan', NULL, 9876543210, 5, NULL, 'I had wonderful experience with Indian Holidays...'),
('Jay', 'vador', 'vadorjay', 9876787671, 5, NULL, 'I would like to keep visiting such good places with Indian Holidays...'),
('CVG', 'CG', 'DRYD', 9898989898, 4, NULL, 'XDFGNSA ESTNES RTNB.'),
('Sumit', 'Jain', 'jainsumit', 9898989899, 3, NULL, 'it was okayyy...!!!');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `eid` varchar(50) NOT NULL,
  `uname` text NOT NULL,
  `pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `lname`, `eid`, `uname`, `pwd`) VALUES
('esasa', 'dsfe', 'rrrrrrrrrrr', 'rsgravtawzcafwsevf', 'aervawsdcewar'),
('zsdgfsg', 'zsdgfsg', 'zsdgfsg', 'zsdgfsg', 'zsdgfsg'),
('jay', 'vador', 'jayvador@somaiya.edu', 'vadorjay', 'vadorjay'),
('rohan', 'kelkar', 'rohankelkar@gmail.com', 'rohankelkar', 'rohankelkar'),
('sanket', 'tilotkar', 'sankettilotkar', 'sankettilotkar', 'sankettilotkar'),
('sumit', 'jain', 'sumjain@gmail.com', 'sumeetjain', 'sumeetjain'),
('kamal', 'vora', 'kamalvora@gmail.com', 'kamalvora', 'kamalvora'),
('aditya', 'bawne', 'adityabawne@gmail.com', 'adityabawne', 'adityabawne'),
('rahul', 'patel', 'rahulpatel@gmail.com', 'rahulpatel', 'rahulpatel'),
('chintan', 'thakkar', 'cdthakkar@gmail.com', 'cdthakkar', 'cdthakkar'),
('akshay', 'prajapati', 'akshayprajapati@gmail.com', 'akshayprajapati', 'akshayprajapati'),
('Hari', 'Patel', 'haripatel@gmail.com', 'haripatel', 'haripatel'),
('naitik', 'shah', 'naitikshah@gmail.com', 'naitikshah', 'naitikshah'),
('Tushar', 'jain', 'tusharjain@gmail.com', 'tusharjain', 'tusharjain'),
('Mehul', 'Makwana', 'mehulmakwana@gmail.com', 'mehulmakwana', 'mehulmakwana'),
('siraj', 'sayed', 'sirajsayed@gmail.com', 'sirajsayed', 'sirajsayed'),
('James', 'Bond', 'Jmbond007@gmail.com', 'Jmbond007', 'Jmbond007');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
