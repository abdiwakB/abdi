-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2016 at 01:42 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `brc`
--

-- --------------------------------------------------------

--
-- Table structure for table `abld`
--

CREATE TABLE IF NOT EXISTS `abld` (
`Reg_id` int(11) NOT NULL,
  `pack_number` varchar(20) NOT NULL,
  `blood_group` varchar(4) NOT NULL,
  `amount` varchar(8) NOT NULL,
  `date` varchar(25) NOT NULL,
  `status` int(3) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=101 ;

--
-- Dumping data for table `abld`
--

INSERT INTO `abld` (`Reg_id`, `pack_number`, `blood_group`, `amount`, `date`, `status`) VALUES
(60, 'DON/1255/56', 'A+', '33', '2016-06-19 01:05:32pm', 0),
(61, 'DON/1234/09', 'A1+', '9', '2016-05-21 01:08:04pm', 0),
(64, 'DON/1244/07', 'A1-', '90', '2016-05-20 05:10:22pm', 0),
(87, 'DON/1115/09', 'O+', '180', '2016-06-19 01:08:04pm', 0),
(88, 'DON/1116/05', 'A-', '79', '2016-06-19 01:08:04pm', 0),
(89, 'DON/1117/09', 'A2-', '67', '2016-05-19 01:08:04pm', 0),
(90, 'DON/1118/05', 'B-', '65', '2016-06-19 01:08:04pm', 0),
(91, 'DON/1120/09', 'A1B-', '78', '2016-04-19 01:08:04pm', 0),
(93, 'DON/1123/09', 'AB-', '67', '2016-06-19 01:08:04pm', 0),
(94, 'DON/1125/05', 'O-', '78', '2016-06-19 01:08:04pm', 0),
(100, 'DON/1255/06', 'A2B-', '212', '2016-06-20 01:07:34am', 0);

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`Reg_id` int(3) NOT NULL,
  `Username` varchar(12) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Role` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Reg_id`, `Username`, `Password`, `Role`) VALUES
(4, 'nurse', '123nur', 'Nurse'),
(7, 'hospital', '123hos', 'Hospital'),
(8, 'inventory', '123inv', 'Inventory'),
(22, 'admin', '123adm', 'Administrator'),
(27, 'hospita', '123hos', 'Hospital'),
(30, 'elsa', '12345678', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `addnews`
--

CREATE TABLE IF NOT EXISTS `addnews` (
`Rec_id` int(3) NOT NULL,
  `Title` text NOT NULL,
  `Body` text NOT NULL,
  `Author` text NOT NULL,
  `Posted_date` varchar(19) NOT NULL,
  `Picture` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `addnews`
--

INSERT INTO `addnews` (`Rec_id`, `Title`, `Body`, `Author`, `Posted_date`, `Picture`) VALUES
(5, 'donation', 'the blood given to you will be', 'getachew nigus', '2017.Febuary.17', '3.jpg'),
(6, 'donation', 'the blood given to you will be', 'getachew nigus', '2017.Febuary.17', '1.jpg'),
(7, 'about blood donation', 'donate blood', 'asdfg fyuyrfr', '2016.November.5', '4.png');

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
`Id` int(11) NOT NULL,
  `FirstName` varchar(34) NOT NULL,
  `LastName` varchar(34) NOT NULL,
  `UniqueName` varchar(45) NOT NULL,
  `Sex` varchar(5) NOT NULL,
  `Telphone` int(11) NOT NULL,
  `Email` varchar(34) NOT NULL,
  `Country` varchar(34) NOT NULL,
  `DateOfBirth` varchar(35) NOT NULL,
  `Age` int(11) NOT NULL,
  `AppointmentTime` varchar(35) NOT NULL,
  `AppoinmentDate` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Id`, `FirstName`, `LastName`, `UniqueName`, `Sex`, `Telphone`, `Email`, `Country`, `DateOfBirth`, `Age`, `AppointmentTime`, `AppoinmentDate`) VALUES
(19, 'daniel', 'bizuwork', 'hailu', 'Male', 913663095, 'daniel.bizuwork@gmail.com', 'Bahamas', 'March.19.2029', 38, '12.15', 'November.18.2029'),
(20, 'dani', 'bizuwork', 'dan', 'Femal', 913663095, 'eshetealigaz@yahoo.com', 'Bahamas', 'January.19.2029', 44, '1.00', 'December.18.2029');

-- --------------------------------------------------------

--
-- Table structure for table `approve`
--

CREATE TABLE IF NOT EXISTS `approve` (
  `Firstname` text NOT NULL,
  `Middlename` text NOT NULL,
  `Lastname` text NOT NULL,
  `Sex` text NOT NULL,
  `Age` int(3) NOT NULL,
  `Weight` int(3) NOT NULL,
  `Phone` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approve`
--

INSERT INTO `approve` (`Firstname`, `Middlename`, `Lastname`, `Sex`, `Age`, `Weight`, `Phone`) VALUES
('getache', 'gfdgf', 'achew', 'Male', 55, 50, '099876765'),
('fdgf', 'gfdg', 'fghg', 'Female', 25, 60, '098854323'),
('fdgf', 'gfdg', 'fghg', 'Female', 25, 70, '098854323'),
('fdgf', 'gfdg', 'fghg', 'Female', 25, 55, '098854323'),
('gobena', 'kuse', 'duba', 'Male', 33, 0, ''),
('gobena', 'kuse', 'duba', 'Male', 33, 0, ''),
('gobena', 'kuse', 'duba', 'Male', 33, 0, ''),
('elsabet', 'daba', 'sleshi', 'Male', 18, 45, '+251-912-987650'),
('abraham', 'girud', 'lilcone', 'Male', 18, 46, '+251-917-353104'),
('abraham', 'girud', 'lilcone', 'Male', 18, 46, '+251-917-353104'),
('gyhty', 'gfghfhj', 'gjhgjhj', 'Male', 18, 45, '+251-923-123456');

-- --------------------------------------------------------

--
-- Table structure for table `approveappoint`
--

CREATE TABLE IF NOT EXISTS `approveappoint` (
  `Firstname` text NOT NULL,
  `Lastname` text NOT NULL,
  `Sex` text NOT NULL,
  `Phone` varchar(17) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approveappoint`
--

INSERT INTO `approveappoint` (`Firstname`, `Lastname`, `Sex`, `Phone`) VALUES
('fgf', 'fgfdg', 'Male', '875656435'),
('fgf', 'fgfdg', 'Male', '875656435'),
('gere', 'gere', 'Female', '9897767'),
('gfd', 'ftrr', 'Male', '2147483647'),
('gfd', 'ftrr', 'Male', '2147483647'),
('gfg', 'rytyty', 'Male', '2147483647'),
('e34', 'err', 'Male', '99878677'),
('gizachew', 'asnakew', 'Male', '+251-943-98');

-- --------------------------------------------------------

--
-- Table structure for table `aprovedhreq`
--

CREATE TABLE IF NOT EXISTS `aprovedhreq` (
  `Firstname` varchar(45) NOT NULL,
  `Middlename` varchar(45) NOT NULL,
  `Lastname` varchar(56) NOT NULL,
  `Sex` varchar(5) NOT NULL,
  `Age` int(2) NOT NULL,
  `Hospitalname` varchar(56) NOT NULL,
  `Phone` varchar(34) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Bloodgroup` varchar(56) NOT NULL,
  `Amount` varchar(34) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aprovedhreq`
--

INSERT INTO `aprovedhreq` (`Firstname`, `Middlename`, `Lastname`, `Sex`, `Age`, `Hospitalname`, `Phone`, `Email`, `Bloodgroup`, `Amount`) VALUES
('gobena', 'kuse', 'duba', 'Male', 33, 'Metema hospital', '+251-581-111234', 'geri @gmail.com', 'A1+', '23'),
('fgef', 'rgtyr', 'rgreg', 'Male', 45, 'Metema hospital', '+251-581-111234', 'getachewasma@gmai.com', 'B-', '4');

-- --------------------------------------------------------

--
-- Table structure for table `bldis`
--

CREATE TABLE IF NOT EXISTS `bldis` (
`hic` int(23) NOT NULL,
  `patient_name` text NOT NULL,
  `Sex` text NOT NULL,
  `P_bloodgroup` varchar(4) NOT NULL,
  `R_bloodgroup` varchar(4) NOT NULL,
  `amount` int(4) NOT NULL,
  `date` varchar(67) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=84 ;

--
-- Dumping data for table `bldis`
--

INSERT INTO `bldis` (`hic`, `patient_name`, `Sex`, `P_bloodgroup`, `R_bloodgroup`, `amount`, `date`) VALUES
(33, 'rerer', 'Male', 'A1B+', 'A1B+', 45, '2016-05-31'),
(36, 'ret', 'Male', 'B+', 'B+', 3, '2016-06-01'),
(39, 'fgdfgf', 'Male', 'A+', 'A+', 55, '2016-05-31'),
(40, 'fghgjh', 'Male', 'A+', 'A+', 80, '2016-06-08'),
(42, 'hgfgf', 'Male', 'A+', 'A+', 2, '2016-05-31'),
(47, 'xcxc', 'Female', 'A+', 'A+', 34, '2016-06-19'),
(48, 'ewfds', 'Female', 'A+', 'A+', 34, '2016-06-19'),
(50, 'dcds', 'Male', 'A+', 'A+', 34, '2016-06-19'),
(55, 'xcxxc', 'Male', 'A+', 'A+', 111, '2016-06-19'),
(65, 'fgdfgdf', 'Male', 'A+', 'A+', 20, '2016-06-08'),
(68, 'getachew', 'Male', 'A2+', 'A2+', 4, '2016-06-19 10:12:54pm'),
(72, 'sfs', 'Male', 'O+', 'O+', 10, '2016-06-19 10:24:24pm'),
(73, 'fvdfd', 'Male', 'A+', 'A+', 122, '2016-06-19 11:34:20pm'),
(74, 'xfc', 'Male', 'A+', 'A+', 122, '2016-06-19 11:45:10pm'),
(75, 'ggf', 'Male', 'A+', 'A+', 32, '2016-06-19 11:45:50pm'),
(76, 'hbvhmn', 'Male', 'A+', 'A+', 433, '2016-06-19 11:47:06pm'),
(77, 'cvc', 'Male', 'A+', 'A+', 54, '2016-06-19 11:51:01pm'),
(78, 'fdfg', 'Male', 'A+', 'A+', 34, '2016-06-19 11:52:48pm'),
(79, 'szxzx', 'Male', 'A+', 'A+', 12, '2016-06-19 11:56:19pm'),
(80, 'fdds', 'Male', 'A+', 'A+', 12, '2016-06-20 12:01:50am'),
(81, 'sxcx', 'Male', 'A+', 'A+', 12, '2016-06-20 12:03:20am'),
(82, 'getachew', 'Male', 'A1+', 'A1+', 90, '2016-06-20 01:05:51am'),
(83, 'getachew', 'Male', 'A1+', 'A1+', 100, '2016-06-20 01:06:41am');

-- --------------------------------------------------------

--
-- Table structure for table `cbld`
--

CREATE TABLE IF NOT EXISTS `cbld` (
`Reg_id` int(6) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `sex` text NOT NULL,
  `pack_number` varchar(20) NOT NULL,
  `amount` varchar(6) NOT NULL,
  `blood_group` varchar(4) NOT NULL,
  `collectedby` text NOT NULL,
  `collected_date` varchar(23) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `cbld`
--

INSERT INTO `cbld` (`Reg_id`, `fname`, `mname`, `lname`, `sex`, `pack_number`, `amount`, `blood_group`, `collectedby`, `collected_date`) VALUES
(1, 'ggf', 'yytytry', 'ytyy', 'Male', '2', '343', 'A2B-', 'dfdgsdfgd', '16.October.1965'),
(2, 'kume', 'abrtr', 'gfdggfh', 'Male', '34', '23', 'A1B-', 'rer435', '16.October.1965'),
(3, 'kume', 'abrtr', 'gfdggfh', 'Male', '340', '23', 'A1B-', 'rer435', '16.October.1965'),
(7, 'getache', 'dejen', 'kasa', 'Male', '16', '1', 'A1B-', 'dagim', '16.August.1963'),
(10, 'gfgfg', 'dfgdfgdf', 'dgdfg', 'Male', '3', '3ml', 'B-', 'gfgfg', 'SelectDate.SelectMonth.'),
(12, 'fdgdfg', 'ddfg', 'gfgg', 'Male', '4', '5ml', 'A2+', 'gggf', 'SelectDate.SelectMonth.'),
(14, 'ggfg', 'fgfdgf', 'gfgdf', 'Male', '23', '3ml', 'B-', 'fgg', '15.July.2026'),
(15, 'ttgft', 'rtergrt', 'ertrd', 'Male', 'DON/1', '2ml', 'AB-', 'fdgdf', '19.November.2016'),
(16, 'ryutujt', 'fhtht', 'gty', 'Male', 'DON/1223/0', '3ml', 'A2B-', 'tuuyiku', '16.August.2016'),
(17, 'myulio', 'fghtj', 'ruui', 'Male', 'DON/1223/05', '3ml', 'A2B-', 'sdfgh', '13.August.2016'),
(18, 'atikel', 'cxxcx', 'dsds', 'Male', 'DON/1234/06', '56ml', 'A1B-', 'grggrt', '2016-06-15');

-- --------------------------------------------------------

--
-- Table structure for table `client_appointment`
--

CREATE TABLE IF NOT EXISTS `client_appointment` (
`Client_Id` int(11) NOT NULL,
  `First_Name` varchar(45) NOT NULL,
  `Last_Name` varchar(34) NOT NULL,
  `Sex` varchar(45) NOT NULL,
  `Teelphone` varchar(11) NOT NULL,
  `Appointment_Time` varchar(65) NOT NULL,
  `Appointment_Date` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `client_appointment`
--

INSERT INTO `client_appointment` (`Client_Id`, `First_Name`, `Last_Name`, `Sex`, `Teelphone`, `Appointment_Time`, `Appointment_Date`) VALUES
(50, 'e34', 'err', 'Male', '99878677', '1.00', 'Febuary.17.2029'),
(51, 'gg', 'fggy', 'Male', '9998767', '1.00', 'January.18.2028'),
(52, 'r4365', 'u56878', 'Male', '908978', '1.00', 'October.16.2027'),
(54, 'fddfd', 'dsdsd', 'Male', '989867676', '2.00', 'November.17.2029'),
(55, 'hgfhghg', 'ghghgggh', 'Male', '251', '2.00', 'Febuary.17.2026'),
(56, 'hgfhghg', 'ghghgggh', 'Male', '251', '2.00', 'Febuary.17.2026'),
(57, 'fgfg', 'gfg', 'Male', '251', '11.00', 'November.18.2028'),
(58, 'hhyty', 'gfdg', 'Male', '251', '1.00', 'January.19.2028'),
(59, 'ghtryht', 'hgfhyghy', 'Male', '251', '2.15', 'October.17.2025'),
(60, 'trtert', 'tytyu', 'Male', '251', '10.45', 'November.17.2027'),
(68, 'gizachew', 'asnakew', 'Male', '+251-943-98', '10.45', 'August.16.2015'),
(69, 'gfgdfg', 'gtht', 'Male', '+251-943-98', '1.15', 'Febuary.17.2029'),
(70, '', '', '', '', '.', '..'),
(71, 'gfgdfg', 'gtht', 'Male', '+251-943-98', '1.15', 'Febuary.17.2029'),
(72, '', '', '', '', '.', '..'),
(73, '', '', '', '', '.', '..'),
(74, '', '', '', '', '.', '..'),
(75, 'dfgdfg', 'grfhg', 'Male', '+251-943-98', '10.15', 'July.16.2027'),
(76, 'dgf', 'terre', 'Male', '+251-943-98', '11.00', 'October.19.2016'),
(77, '', '', '', '', '', ''),
(78, '', '', '', '', '', ''),
(79, '', '', '', '', '', ''),
(80, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `cmnt`
--

CREATE TABLE IF NOT EXISTS `cmnt` (
`id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `cmnt`
--

INSERT INTO `cmnt` (`id`, `Name`, `Email`, `Comment`) VALUES
(16, 'getachew', 'getachew12@gmail.com', 'gfdgf0-887hgfjgf/'),
(17, 'hghggfdg', 'getachewasma@gmail.com', 'fgdtgfg90980809-'),
(18, 'gfhghgj', 'getachewasma@gmail.com', 'fdgfgfg-[]]=]'),
(19, 'fgfdgfd', 'gere23@gmail.com', 'rtrtetygrytr'),
(21, 'hffgfjh', 'fdghgh@gmail.com', 'fdgf'),
(22, 'getachew', 'geri@gmail.com', 'ghghgfh'),
(23, 'elsabet', 'geri@gmail.com', 'hhjghfghfgggf'),
(24, 'getu', 'getachewasma@gmai.com', 'hgfhjghjghjgfhg');

-- --------------------------------------------------------

--
-- Table structure for table `dnreq`
--

CREATE TABLE IF NOT EXISTS `dnreq` (
`Reg_no` int(10) NOT NULL,
  `Firstname` text NOT NULL,
  `Middlename` text NOT NULL,
  `Lastname` text NOT NULL,
  `Sex` text NOT NULL,
  `Age` int(3) NOT NULL,
  `Weight` int(3) NOT NULL,
  `Phone` varchar(15) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `dnreq`
--

INSERT INTO `dnreq` (`Reg_no`, `Firstname`, `Middlename`, `Lastname`, `Sex`, `Age`, `Weight`, `Phone`) VALUES
(44, 'gyhty', 'gjhgjhj', 'gfghfhj', 'Male', 18, 45, '+251-923-123456'),
(45, 'dfdf', 'dfdfd', 'ffdfd', 'Male', 33, 45, '+251-965-987650'),
(46, 'elsabet', 'sleshi', 'daba', 'Male', 18, 45, '+251-912-987650'),
(48, 'elsabet', 'sleshi', 'daba', 'Male', 18, 45, '+251-912-987650');

-- --------------------------------------------------------

--
-- Table structure for table `drreg`
--

CREATE TABLE IF NOT EXISTS `drreg` (
`Donor_id` int(3) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `sex` text NOT NULL,
  `Age` int(3) NOT NULL,
  `Date` varchar(23) NOT NULL,
  `zone` varchar(23) NOT NULL,
  `city` varchar(23) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(24) NOT NULL,
  `woreda` varchar(25) NOT NULL,
  `kebele` varchar(25) NOT NULL,
  `bloodgroup` varchar(4) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `drreg`
--

INSERT INTO `drreg` (`Donor_id`, `fname`, `mname`, `lname`, `sex`, `Age`, `Date`, `zone`, `city`, `mobile`, `email`, `woreda`, `kebele`, `bloodgroup`) VALUES
(18, 'ghghg', 'fgfgf', 'gffgfgfdf', 'Male', 20, '17.October.2027', 'North Gondar', 'gytyt', '90998767', 'ghgfytu90@gmail.com', 'vhfgy', '2', 'A2B-'),
(19, 'ghghg', 'fgfgf', 'gffgfgfdf', 'Male', 20, '17.October.2027', 'North Gondar', 'gytyt', '90998767', 'ghgfytu90@gmail.com', 'vhfgy', '2', 'A2B-'),
(20, 'ghghg', 'fgfgf', 'gffgfgfdf', 'Male', 20, '17.October.2027', 'North Gondar', 'gytyt', '90998767', 'ghgfytu90@gmail.com', 'vhfgy', '2', 'A2B-'),
(30, 'gizachew', 'getu', 'ayele', 'Male', 23, '17.October.2028', 'North Gondar', 'dilla', '0918932453', 'getachew12@gmail.com', 'kemkem', '3', 'A2B-'),
(33, 'gfdg', 'gfdgf', 'gffdgf', 'Male', 19, '3.January.2017', 'North Gondar', 'gfgf', '+251-917-353104', 'gffdg@gmail.com', 'ggrtg', '1', 'A2B-'),
(34, 'getache', 'lilcone', 'asmare', 'Male', 19, '15.September.2027', 'North Gondar', 'dsdf', '+251-156-456789', 'gffdg@gmail.com', 'fgfdgfd', '1', 'A2B-'),
(35, 'getache', 'lilcone', 'asmare', 'Male', 19, '15.September.2027', 'North Gondar', 'dsdf', '+251-156-456789', 'gffdg@gmail.com', 'fgfdgfd', '1', 'A2B-'),
(36, 'abraham', 'lilcone', 'asmare', 'Male', 18, '15.August.2026', 'South Gondar', 'grtr', '+251-156-456789', 'gere23@gmail.com', 'ghgfhgd', '1', 'A2B-'),
(37, 'ghghgh', 'asnakew', 'lemu', 'Male', 18, '14.September.2027', 'South Gondar', 'fsdtte', '+251-917-353104', 'getachew12@gmail.com', 'dfdsf', '1', 'A2B-'),
(38, 'dfsdf', 'dfdfdf', 'fsdfsdf', '', 18, '17.October.2028', 'North Gondar', 'dfddf', '+251-156-456789', 'getachew12@gmail.com', 'dfsdrfd', '1', 'A2B-'),
(39, 'dfsdf', 'dfdfdf', 'fsdfsdf', '', 18, '17.October.2028', 'North Gondar', 'dfddf', '+251-156-456789', 'getachew12@gmail.com', 'dfsdrfd', '1', 'A2B-'),
(40, 'dfsdf', 'dfdfdf', 'fsdfsdf', 'Male', 18, '17.October.2028', 'North Gondar', 'dfddf', '+251-156-456789', 'getachew12@gmail.com', 'dfsdrfd', '1', 'A2B-'),
(41, 'dfsdf', 'dfdfdf', 'fsdfsdf', 'Male', 18, '17.October.2028', 'North Gondar', 'dfddf', '+251-156-456789', 'getachew12@gmail.com', 'dfsdrfd', '1', 'A2B-'),
(42, 'TYHHGnmn', 'ghgfhjgj', 'ghghgh', 'Male', 18, '15.Febuary.2017', 'North Gondar', 'ghghg', '+251-917-678904', 'gffdg@g.commail', 'ghgfhgg', '2', 'A1B-'),
(43, 'refgfdg', 'fgfgf', 'fgfgfg', 'Male', 18, '3.March.2017', 'North Gondar', 'gfgfg', '+251-917-353104', 'getachew12@gmail.com', 'gfgf', '1', 'A2B-'),
(45, 'grtgrt', 'rfgfg', 'gfgfhgfg', 'Male', 25, '2.January.2018', 'North Gondar', 'rggg', '+251-981-111234', 'tytytyf@gmail.com', 'dfdf', '2', 'A1B-');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
`Empolyy_Id` int(11) NOT NULL,
  `E_fname` varchar(100) NOT NULL,
  `mname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `sex` varchar(200) NOT NULL,
  `Age` int(3) NOT NULL,
  `country` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `mobile` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `salary` double NOT NULL,
  `responsiblity` varchar(100) NOT NULL,
  `specialization` varchar(56) NOT NULL,
  `status` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=51 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Empolyy_Id`, `E_fname`, `mname`, `lname`, `sex`, `Age`, `country`, `city`, `mobile`, `email`, `salary`, `responsiblity`, `specialization`, `status`) VALUES
(32, 'elsa', 'asmamas', 'nega', 'Male', 23, 'Bahamas', 'bdr', '99765545', 'getachewasma@gmail.com', 650, 'ghghg', 'fhgg', 'single'),
(37, 'fgf', 'gech', 'fgfgfg', 'Male', 19, 'Azerbaijan', 'fdtrg', '0909887687', 'gffdg@gmail.com', 454, 'fgfdg', 'gfgfg', 'single'),
(38, 'fdft', 'fdfdfd', 'fdfdfd', 'Male', 20, 'Bahrain', 'dfsdf', '+251-156-456789', 'gere23@gmail.com', 456, 'gfgty', 'rtry', 'single'),
(39, 'bhghjg', 'fdrtet', 'fdsdfsd', 'Male', 18, 'El Salvador', 'bfvgfdg', '+251-917-353104', 'getachew12@gmail.com', 5656, 'fg', 'cvvcv', 'single'),
(40, 'hjfgh', 'hfghhg', 'ghgfhg', 'Male', 56, 'Netherlands', 'bdr', '+251-981-111234', 'getachewasma@gmail.com', 456, 'gfdg', 'doctrate', 'single'),
(41, '', '', '', '', 0, '', '', '', '', 0, '', '', ''),
(42, 'hjfgh', 'hfghhg', 'ghgfhg', 'Male', 56, 'Netherlands', 'bdr', '+251-981-111234', 'getachewasma@gmail.com', 456, 'gfdg', 'doctrate', 'single'),
(43, 'ggfg', 'dreret', 'ttrytr', 'Male', 47, 'Equatorial Guinea', 'fgdfg', '+251-981-111234', 'geri@gmail.com', 56676, 'gfdgf', 'gfg', 'single'),
(44, 'feff', 'dgdfg', 'fgd', 'Male', 34, 'Egypt', 'dftgf', '+251-917-678904', 'geri@gmail.com', 3456, 'gfgfg', 'efgfeg', 'single'),
(45, '', '', '', '', 0, '', '', '', '', 0, '', '', ''),
(46, '', '', '', '', 0, '', '', '', '', 0, '', '', ''),
(47, 'feff', 'dgdfg', 'fgd', 'Male', 34, 'Egypt', 'dftgf', '+251-917-678904', 'geri@gmail.com', 3456, 'gfgfg', 'efgfeg', 'single'),
(48, 'elsabet', 'sleshi', 'sleshi', 'Female', 20, 'Ethiopia', 'gondar', '+251-917-678904', 'getachewasma@gmai.com', 7890, 'inve', 'health', 'single'),
(49, 'etertr', 'tryrty', 'dcdvf', 'Male', 18, 'Martinique', 'fgg', '+251-917-678904', 'samrigebremicheal@yahoo.com', 4567, 'student', 'fghj', 'single'),
(50, 'rrgff', 'ffef', 'ettty', 'Male', 19, 'Mali', 'dfdbdf', '+251-917-678904', 'sdfgh@yahoo.com', 11000, 'gfbfg', 'fghg', 'single');

-- --------------------------------------------------------

--
-- Table structure for table `hreg`
--

CREATE TABLE IF NOT EXISTS `hreg` (
`H_id` int(11) NOT NULL,
  `hname` varchar(23) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(24) NOT NULL,
  `location` varchar(25) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `hreg`
--

INSERT INTO `hreg` (`H_id`, `hname`, `phone`, `email`, `location`) VALUES
(6, 'Gondar university refer', '9099787565', 'ghgfytu90@gmail.com', 'dfdgf'),
(7, 'Gondar university refer', '90908987', 'ghgfytu90@gmail.com', 'rtretret'),
(9, 'Metema hospital', '90989', 'getachewasma@gmail.com', 'ggyt'),
(10, 'Debark hospital', '098987656', 'ghgfytu90@gmail.com', 'gondar'),
(11, 'Debark hospital', '098987656', 'ghgfytu90@gmail.com', 'gondar'),
(12, 'Delgi hospital', '0998876756', 'fdghgh@gmail.com', 'gfgffdfd'),
(14, 'MSF hospital', '0918932453', 'fgfgf@gmail.com', 'gondar'),
(15, 'Debark hospital', '0909887687', 'getachew12@gmail.com', 'dilla'),
(16, 'Debark hospital', '098978', 'gffdg@gmail.com', 'ffg'),
(17, 'Metema hospital', '+251-917-353104', 'getachew12@gmail.com', 'fgf'),
(18, 'Debark hospital', '+251-917-353104', 'gere23@gmail.com', 'tyty'),
(19, 'Metema hospital', '+251-156-456789', 'getachew12@gmail.com', 'fgfd'),
(20, 'Debark hospital', '+251-917-678904', 'gere23@gmail.com', 'rtfg'),
(24, 'Metema hospital', '+251-587-678904', 'getachew12@gmail.com', 'hgfh'),
(25, 'Metema hospital', '+251-587-678904', 'getachew12@gmail.com', 'grtrttr'),
(26, 'Metema hospital', '+251-581-111234', 'fffggfgfg@yahoo.com', 'yrff'),
(27, 'Metema hospital', '+251-581-111234', 'getachewasma@gmail.com', 'goda'),
(29, 'Metema hospital', '+251-581-111234', 'getachewasma@gmai.com', 'goda'),
(30, 'Gondar university refer', '+251-581-111234', 'getachewasma@gma.com', 'fggf'),
(31, 'Gondar university refer', '+251-581-111234', 'getachewasma12@gmail.com', 'hfgh'),
(32, 'Gondar university refer', '+251-581-111234', 'getachewasma12@gmail.com', 'hfgh'),
(33, '', '', '', ''),
(34, 'Gondar university refer', '+251-581-111234', 'samrigebremicheal12@gmai', 'gondar');

-- --------------------------------------------------------

--
-- Table structure for table `hreq`
--

CREATE TABLE IF NOT EXISTS `hreq` (
`Reg_no` int(8) NOT NULL,
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `sex` text NOT NULL,
  `age` int(3) NOT NULL,
  `Hospitalname` varchar(56) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `email` varchar(33) NOT NULL,
  `blood_group` varchar(4) NOT NULL,
  `amount_needed` varchar(12) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `hreq`
--

INSERT INTO `hreq` (`Reg_no`, `fname`, `mname`, `lname`, `sex`, `age`, `Hospitalname`, `phone_no`, `email`, `blood_group`, `amount_needed`) VALUES
(15, 'abebe', 'sisay', 'mekonenn', 'Male', 25, 'Icon hospital', '+251-581-111234', 'abebe.sisay@gmail.com', 'A-', '2'),
(16, 'eere', 'ert', 'ewrtyuik', 'Male', 1, 'Debark hospital', '+251-586-954321', 'ghghnbv@gmail.com', 'O+', '6'),
(24, 'reewr', 'eretrre', 'eretert', 'Male', 3, 'Delgi hospital', '+251-586-985644', 'getachewasma@gmai.com', 'A1-', '78'),
(31, 'atikelt', 'mekonennaaaaaaaaaaa', 'eretert', 'Male', 1, 'Gohala hospital', '+251-586-954321', 'dffgfg@gmail.com', 'A2B-', '78'),
(32, 'atikel', 'dsvfs', 'bizuwork', 'Male', 1, 'Janamora hospital', '+251-586-954321', 'dffgfg@gmail.com', 'A+', '24'),
(33, 'sdsdsd', 'admas', 'kassa', 'Male', 1, 'Icon hospital', '+251-586-954321', 'dffgfg@gmail.com', 'A+', '400'),
(34, 'esdsdfds', 'rgreg', 'gerger', 'Male', 2, 'Sanja hospital', '+251-586-985644', 'ghgfytu90@gmail.com', 'O+', '89'),
(35, 'atikelt', 'rgreg', 'alemu', 'Male', 23, 'Janamora hospital', '+251-586-985644', 'ghgfytu90@gmail.com', 'A1+', '89');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abld`
--
ALTER TABLE `abld`
 ADD PRIMARY KEY (`Reg_id`), ADD UNIQUE KEY `pack_number` (`pack_number`);

--
-- Indexes for table `account`
--
ALTER TABLE `account`
 ADD PRIMARY KEY (`Reg_id`), ADD UNIQUE KEY `Password` (`Username`);

--
-- Indexes for table `addnews`
--
ALTER TABLE `addnews`
 ADD PRIMARY KEY (`Rec_id`);

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
 ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `bldis`
--
ALTER TABLE `bldis`
 ADD PRIMARY KEY (`hic`);

--
-- Indexes for table `cbld`
--
ALTER TABLE `cbld`
 ADD PRIMARY KEY (`Reg_id`), ADD UNIQUE KEY `pack_number` (`pack_number`);

--
-- Indexes for table `client_appointment`
--
ALTER TABLE `client_appointment`
 ADD PRIMARY KEY (`Client_Id`);

--
-- Indexes for table `cmnt`
--
ALTER TABLE `cmnt`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dnreq`
--
ALTER TABLE `dnreq`
 ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `drreg`
--
ALTER TABLE `drreg`
 ADD PRIMARY KEY (`Donor_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
 ADD PRIMARY KEY (`Empolyy_Id`);

--
-- Indexes for table `hreg`
--
ALTER TABLE `hreg`
 ADD PRIMARY KEY (`H_id`);

--
-- Indexes for table `hreq`
--
ALTER TABLE `hreq`
 ADD PRIMARY KEY (`Reg_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abld`
--
ALTER TABLE `abld`
MODIFY `Reg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `Reg_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT for table `addnews`
--
ALTER TABLE `addnews`
MODIFY `Rec_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `bldis`
--
ALTER TABLE `bldis`
MODIFY `hic` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT for table `cbld`
--
ALTER TABLE `cbld`
MODIFY `Reg_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `client_appointment`
--
ALTER TABLE `client_appointment`
MODIFY `Client_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=81;
--
-- AUTO_INCREMENT for table `cmnt`
--
ALTER TABLE `cmnt`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `dnreq`
--
ALTER TABLE `dnreq`
MODIFY `Reg_no` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `drreg`
--
ALTER TABLE `drreg`
MODIFY `Donor_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `Empolyy_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `hreg`
--
ALTER TABLE `hreg`
MODIFY `H_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `hreq`
--
ALTER TABLE `hreq`
MODIFY `Reg_no` int(8) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
