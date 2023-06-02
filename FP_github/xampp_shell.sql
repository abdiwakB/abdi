-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2016 at 02:32 AM
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
  `pack_number` int(5) NOT NULL,
  `blood_group` varchar(4) NOT NULL,
  `collected_date` varchar(23) NOT NULL,
  `expired_date` varchar(23) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `abld`
--

INSERT INTO `abld` (`Reg_id`, `pack_number`, `blood_group`, `collected_date`, `expired_date`) VALUES
(5, 2, 'A+', '17.January.1965', '16.November.1966'),
(6, 1, 'A1B-', '15.October.1965', '15.November.1965'),
(10, 6, 'A2B-', '15.November.1965', '17.September.2012'),
(11, 45, 'A1+', '17.January.2029', '16.Febuary.2027'),
(12, 1, 'A1B-', '17.Febuary.2028', '17.September.2027');

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
`Reg_id` int(3) NOT NULL,
  `Username` varchar(12) NOT NULL,
  `Password` varchar(12) NOT NULL,
  `Role` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`Reg_id`, `Username`, `Password`, `Role`) VALUES
(4, 'nurse', '123nur', 'Nurse'),
(7, 'hospital', '123hos', 'Hospital'),
(8, 'inventory', '123inv', 'Inventory'),
(22, 'admin', '123adm', 'Administrator'),
(27, 'hospita', '123hos', 'Hospital');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `addnews`
--

INSERT INTO `addnews` (`Rec_id`, `Title`, `Body`, `Author`, `Posted_date`, `Picture`) VALUES
(5, 'donation', 'the blood given to you will be', 'getachew nigus', '2017.Febuary.17', '1.jpg'),
(6, 'donation', 'the blood given to you will be', 'getachew nigus', '2017.Febuary.17', '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `affectedbld`
--

CREATE TABLE IF NOT EXISTS `affectedbld` (
`Reg_id` int(3) NOT NULL,
  `Pack_number` int(5) NOT NULL,
  `Amount` varchar(4) NOT NULL,
  `Blood_group` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
('fdgf', 'gfdg', 'fghg', 'Female', 25, 70, '098854323');

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
('gfg', 'rytyty', 'Male', '2147483647');

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
  `Admitted_date` varchar(23) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `bldis`
--

INSERT INTO `bldis` (`hic`, `patient_name`, `Sex`, `P_bloodgroup`, `R_bloodgroup`, `Admitted_date`) VALUES
(1, 'dfdf', 'Male', 'A+', 'A2B-', '17.November.1966'),
(2, 'erwer', 'Male', 'A2B-', 'B-', '15.October.1965'),
(3, 'fdere', 'Male', 'A+', 'A1+', '17.SelectMonth.1966'),
(4, 'fdere', 'Male', 'A+', 'A1+', '17.SelectMonth.1966'),
(8, 'ghgf', 'Male', 'AB-', 'AB-', '16.November.1965'),
(9, 'fsdfdfdf', 'Male', 'A2B-', 'B-', '15.September.2025');

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
  `pack_number` int(5) NOT NULL,
  `amount` int(3) NOT NULL,
  `blood_group` varchar(4) NOT NULL,
  `collectedby` text NOT NULL,
  `collected_date` varchar(23) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `cbld`
--

INSERT INTO `cbld` (`Reg_id`, `fname`, `mname`, `lname`, `sex`, `pack_number`, `amount`, `blood_group`, `collectedby`, `collected_date`) VALUES
(1, 'ggf', 'yytytry', 'ytyy', 'Male', 2, 343, 'A2B-', 'dfdgsdfgd', '16.October.1965'),
(2, 'kume', 'abrtr', 'gfdggfh', 'Male', 34, 23, 'A1B-', 'rer435', '16.October.1965'),
(3, 'kume', 'abrtr', 'gfdggfh', 'Male', 34, 23, 'A1B-', 'rer435', '16.October.1965'),
(7, 'getache', 'dejen', 'kasa', 'Male', 16, 1, 'A1B-', 'dagim', '16.August.1963'),
(8, 'hghgh', 'hghgh', 'ggghg', 'Male', 3, 2, 'A2B-', 'hghghgh', '14.September.1963');

-- --------------------------------------------------------

--
-- Table structure for table `client_appointment`
--

CREATE TABLE IF NOT EXISTS `client_appointment` (
`Client_Id` int(11) NOT NULL,
  `First_Name` varchar(45) NOT NULL,
  `Last_Name` varchar(34) NOT NULL,
  `Sex` varchar(45) NOT NULL,
  `Teelphone` int(11) NOT NULL,
  `Appointment_Time` varchar(65) NOT NULL,
  `Appointment_Date` varchar(45) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=60 ;

--
-- Dumping data for table `client_appointment`
--

INSERT INTO `client_appointment` (`Client_Id`, `First_Name`, `Last_Name`, `Sex`, `Teelphone`, `Appointment_Time`, `Appointment_Date`) VALUES
(47, 'bfg', 'fgghg', 'Male', 6587876, '1.00', 'January.16.2027'),
(48, 'ty', 'hgyt', 'Male', 2147483647, '1.00', 'January.17.2028'),
(50, 'e34', 'err', 'Male', 99878677, '1.00', 'Febuary.17.2029'),
(51, 'gg', 'fggy', 'Male', 9998767, '1.00', 'January.18.2028'),
(52, 'r4365', 'u56878', 'Male', 908978, '1.00', 'October.16.2027'),
(54, 'fddfd', 'dsdsd', 'Male', 989867676, '2.00', 'November.17.2029'),
(55, 'hgfhghg', 'ghghgggh', 'Male', 251, '2.00', 'Febuary.17.2026'),
(56, 'hgfhghg', 'ghghgggh', 'Male', 251, '2.00', 'Febuary.17.2026'),
(57, 'fgfg', 'gfg', 'Male', 251, '11.00', 'November.18.2028'),
(58, 'hhyty', 'gfdg', 'Male', 251, '1.00', 'January.19.2028'),
(59, 'ghtryht', 'hgfhyghy', 'Male', 251, '2.15', 'October.17.2025');

-- --------------------------------------------------------

--
-- Table structure for table `cmnt`
--

CREATE TABLE IF NOT EXISTS `cmnt` (
`id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(35) NOT NULL,
  `Comment` text NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `cmnt`
--

INSERT INTO `cmnt` (`id`, `Name`, `Email`, `Comment`) VALUES
(5, 'getr', 'getachewasma@gmail.com', 'dfdfdgy'),
(6, 'gfhgh', 'fdghgh@gmail.com', 'fvcbvbghg'),
(8, 'dfd', 'fdghgh@gmail.com', 'dsdds'),
(9, 'getachew', 'ghgfytu90@gmail.com', 'gfg3445435$#%^%'),
(11, 'geremu', 'gere23@gmail.com', 'ghgdgfdgfg\r\nhghgfhgfdsdf89078978'),
(12, 'ghgfh', 'getachew12@gmail.com', 'rttt'),
(13, 'ghgtrytr', 'getachew12@gmail.com', 'dgfd'),
(14, 'getachew', 'getachew12@gmail.com', 'gfdgf0-887hgfjgf'),
(15, 'getachew', 'getachew12@gmail.com', 'gfdgf0-887hgfjgf/'),
(16, 'getachew', 'getachew12@gmail.com', 'gfdgf0-887hgfjgf/'),
(17, 'hghggfdg', 'getachewasma@gmail.com', 'fgdtgfg90980809-'),
(18, 'gfhghgj', 'getachewasma@gmail.com', 'fdgfgfg-[]]=]'),
(19, 'fgfdgfd', 'gere23@gmail.com', 'rtrtetygrytr');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `dnreq`
--

INSERT INTO `dnreq` (`Reg_no`, `Firstname`, `Middlename`, `Lastname`, `Sex`, `Age`, `Weight`, `Phone`) VALUES
(41, 'fdgf', 'fghg', 'gfdg', 'Female', 25, 55, '098854323'),
(42, 'getache', 'achew', 'gfdgf', 'Male', 55, 56, '099876765'),
(43, 'abraham', 'lilcone', 'girud', 'Male', 18, 46, '+251-917-353104'),
(44, 'gyhty', 'gjhgjhj', 'gfghfhj', 'Male', 18, 45, '+251-923-123456');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `drreg`
--

INSERT INTO `drreg` (`Donor_id`, `fname`, `mname`, `lname`, `sex`, `Age`, `Date`, `zone`, `city`, `mobile`, `email`, `woreda`, `kebele`, `bloodgroup`) VALUES
(17, 'ghghg', 'fgfgf', 'gffgfgfdf', 'Male', 20, '17.October.2027', 'North Gondar', 'gytyt', '90998767', 'ghgfytu90@gmail.com', 'vhfgy', '2', 'A2B-'),
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
(44, 'ghggg', 'fdgfdhfh', 'fgfdggf', 'Male', 23, '2.January.2016', 'North Gondar', 'uytutryre', '+251-917-678904', 'getachewasma@gmail.com', 'rtre', '2', 'AB-');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=40 ;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Empolyy_Id`, `E_fname`, `mname`, `lname`, `sex`, `Age`, `country`, `city`, `mobile`, `email`, `salary`, `responsiblity`, `specialization`, `status`) VALUES
(31, 'getache', 'fgfg', 'bfggf', 'Male', 22, 'Bahamas', 'fgrtr', '99765545', 'getachewasma@gmail.com', 65, 'ghghg', 'fhgg', 'single'),
(32, 'getachewu', 'asmamas', 'nega', 'Male', 23, 'Bahamas', 'bdr', '99765545', 'getachewasma@gmail.com', 650, 'ghghg', 'fhgg', 'single'),
(37, 'fgf', 'grfdg', 'fgfgfg', 'Male', 19, 'Azerbaijan', 'fdtrg', '0909887687', 'gffdg@gmail.com', 454, 'fgfdg', 'gfgfg', 'single'),
(38, 'fdft', 'fdfdfd', 'fdfdfd', 'Male', 20, 'Bahrain', 'dfsdf', '+251-156-456789', 'gere23@gmail.com', 456, 'gfgty', 'rtry', 'single'),
(39, 'bhghjg', 'fdrtet', 'fdsdfsd', 'Male', 18, 'El Salvador', 'bfvgfdg', '+251-917-353104', 'getachew12@gmail.com', 5656, 'fg', 'cvvcv', 'single');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

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
(21, '', '', '', ''),
(22, '', '', '', ''),
(23, '', '', '', ''),
(24, 'Metema hospital', '+251-587-678904', 'getachew12@gmail.com', 'hgfh'),
(25, 'Metema hospital', '+251-587-678904', 'getachew12@gmail.com', 'grtrttr');

-- --------------------------------------------------------

--
-- Table structure for table `hreq`
--

CREATE TABLE IF NOT EXISTS `hreq` (
  `fname` text NOT NULL,
  `mname` text NOT NULL,
  `lname` text NOT NULL,
  `sex` text NOT NULL,
  `age` int(3) NOT NULL,
  `Date_Of_Birth` varchar(15) NOT NULL,
  `phone_no` varchar(15) NOT NULL,
  `email` varchar(33) NOT NULL,
  `blood_group` varchar(4) NOT NULL,
  `amount_needed` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hreq`
--

INSERT INTO `hreq` (`fname`, `mname`, `lname`, `sex`, `age`, `Date_Of_Birth`, `phone_no`, `email`, `blood_group`, `amount_needed`) VALUES
('gizachew', 'asnake', 'hghgfhg', 'Male', 4, '15.October.2026', '+251-156-456789', 'gere23@gmail.', 'B+', 2),
('gfgfdg', 'asmamaw', 'nahu', 'Male', 1, '16.September.20', '+251-156-456789', 'getachew12@gmail.com', 'A1+', 1),
('hgfhg', 'fgfgf', 'gfgfg', 'Male', 19, '2.Febuary.2017', '+251-589-678904', 'getachewasma@gmail.com', 'A2+', 1),
('rerdsd', 'dsdsadsd', 'dsadsdsd', 'Male', 8, '2.Febuary.2017', '+251-587-678904', 'getachewasma@gmail.com', 'A1+', 0),
('dfsdf', 'fsdfsdf', 'dfsdfdf', 'Male', 25, '17.January.2017', '+251-587-678904', 'getachew12@gmail.com', 'A2+', 1),
('dfsdf', 'fsdfsdf', 'dfsdfdf', 'Male', 25, '17.January.2017', '+251-587-678904', 'getachew12@gmail.com', 'A2+', 1),
('ytryty', 'ytytyty', 'ytytyty', 'Male', 23, '2.Febuary.2017', '+251-587-678904', 'gffdg@g.commail', 'B-', 1),
('ytryty', 'ytytyty', 'ytytyty', 'Male', 23, '2.Febuary.2017', '+251-587-678904', 'gffdg@gmail.com', 'B-', 1),
('fddf', 'dfsdfsdf', 'dfsdfsdf', 'Male', 12, '2.Febuary.2016', '+251-587-678904', 'getachewasma@gmail.com', 'A1B-', 3);

-- --------------------------------------------------------

--
-- Table structure for table `veiwupdateappointment`
--

CREATE TABLE IF NOT EXISTS `veiwupdateappointment` (
  `Cilent_Id` int(11) NOT NULL,
  `First_Name` varchar(45) NOT NULL,
  `Last_Name` varchar(30) NOT NULL,
  `Sex` varchar(45) NOT NULL,
  `Teelphone` int(11) NOT NULL,
  `Appointment_Time` varchar(45) NOT NULL,
  `Appointment_Date` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `veiwupdateappointment`
--

INSERT INTO `veiwupdateappointment` (`Cilent_Id`, `First_Name`, `Last_Name`, `Sex`, `Teelphone`, `Appointment_Time`, `Appointment_Date`) VALUES
(32, 'daniel', 'bizuwoek', 'Male', 913663095, '12.15', 'June.10.2022'),
(36, 'daa', 'bizuwork', 'Female', 913663095, '1.30', 'Febuary.19.2029'),
(42, 'gere', 'gere', 'Female', 9897767, '12.30', 'December.16.2016');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abld`
--
ALTER TABLE `abld`
 ADD PRIMARY KEY (`Reg_id`);

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
-- Indexes for table `affectedbld`
--
ALTER TABLE `affectedbld`
 ADD PRIMARY KEY (`Reg_id`);

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
 ADD PRIMARY KEY (`Reg_id`);

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
-- Indexes for table `veiwupdateappointment`
--
ALTER TABLE `veiwupdateappointment`
 ADD PRIMARY KEY (`Cilent_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abld`
--
ALTER TABLE `abld`
MODIFY `Reg_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
MODIFY `Reg_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `addnews`
--
ALTER TABLE `addnews`
MODIFY `Rec_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `affectedbld`
--
ALTER TABLE `affectedbld`
MODIFY `Reg_id` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `bldis`
--
ALTER TABLE `bldis`
MODIFY `hic` int(23) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `cbld`
--
ALTER TABLE `cbld`
MODIFY `Reg_id` int(6) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `client_appointment`
--
ALTER TABLE `client_appointment`
MODIFY `Client_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=60;
--
-- AUTO_INCREMENT for table `cmnt`
--
ALTER TABLE `cmnt`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `dnreq`
--
ALTER TABLE `dnreq`
MODIFY `Reg_no` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `drreg`
--
ALTER TABLE `drreg`
MODIFY `Donor_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
MODIFY `Empolyy_Id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `hreg`
--
ALTER TABLE `hreg`
MODIFY `H_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
