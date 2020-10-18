-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 04:58 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gisp`
--

-- --------------------------------------------------------

--
-- Table structure for table `gen_authorisation`
--

CREATE TABLE `gen_authorisation` (
  `gen_id` varchar(30) NOT NULL,
  `auth1_name` varchar(50) NOT NULL,
  `auth1_jobtitle` varchar(100) NOT NULL,
  `auth1_status` varchar(20) NOT NULL DEFAULT '-',
  `auth1_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth2_name` varchar(50) NOT NULL,
  `auth2_jobtitle` varchar(100) NOT NULL,
  `auth2_status` varchar(20) NOT NULL DEFAULT '-',
  `auth2_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth3_name` varchar(50) NOT NULL,
  `auth3_jobtitle` varchar(100) NOT NULL,
  `auth3_status` varchar(20) NOT NULL DEFAULT '-',
  `auth3_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth4_name` varchar(50) NOT NULL,
  `auth4_jobtitle` varchar(100) NOT NULL,
  `auth4_status` varchar(20) NOT NULL DEFAULT '-',
  `auth4_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth5_name` varchar(50) NOT NULL,
  `auth5_jobtitle` varchar(100) NOT NULL,
  `auth5_status` varchar(20) NOT NULL DEFAULT '-',
  `auth5_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth6_name` varchar(50) NOT NULL,
  `auth6_jobtitle` varchar(100) NOT NULL,
  `auth6_status` varchar(20) NOT NULL DEFAULT '-',
  `auth6_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth7_name` varchar(50) NOT NULL,
  `auth7_jobtitle` varchar(100) NOT NULL,
  `auth7_status` varchar(20) NOT NULL DEFAULT '-',
  `auth7_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth8_name` varchar(50) NOT NULL,
  `auth8_jobtitle` varchar(100) NOT NULL,
  `auth8_status` varchar(20) NOT NULL DEFAULT '-',
  `auth8_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth15_name` varchar(50) NOT NULL,
  `auth15_jobtitle` varchar(100) NOT NULL,
  `auth15_status` varchar(20) NOT NULL DEFAULT '-',
  `auth15_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth14_name` varchar(50) NOT NULL,
  `auth14_jobtitle` varchar(100) NOT NULL,
  `auth14_status` varchar(20) NOT NULL DEFAULT '-',
  `auth14_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth13_name` varchar(50) NOT NULL,
  `auth13_jobtitle` varchar(100) NOT NULL,
  `auth13_status` varchar(20) NOT NULL DEFAULT '-',
  `auth13_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth12_name` varchar(50) NOT NULL,
  `auth12_jobtitle` varchar(100) NOT NULL,
  `auth12_status` varchar(20) NOT NULL DEFAULT '-',
  `auth12_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth11_name` varchar(50) NOT NULL,
  `auth11_jobtitle` varchar(100) NOT NULL,
  `auth11_status` varchar(20) NOT NULL DEFAULT '-',
  `auth11_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth10_name` varchar(50) NOT NULL,
  `auth10_jobtitle` varchar(100) NOT NULL,
  `auth10_status` varchar(20) NOT NULL DEFAULT '-',
  `auth10_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth9_name` varchar(50) NOT NULL,
  `auth9_jobtitle` varchar(100) NOT NULL,
  `auth9_status` varchar(20) NOT NULL DEFAULT '-',
  `auth9_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `implementer_name` varchar(50) NOT NULL,
  `implementer_status` int(4) NOT NULL DEFAULT 0,
  `implementer_jobtitle` varchar(100) NOT NULL DEFAULT '-',
  `implementer_timeR` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `implementer_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `authCount` int(10) NOT NULL DEFAULT 0,
  `totalAuth` int(10) NOT NULL,
  `overal_status` int(5) NOT NULL,
  `authStatus` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gen_authorisation`
--

INSERT INTO `gen_authorisation` (`gen_id`, `auth1_name`, `auth1_jobtitle`, `auth1_status`, `auth1_time`, `auth2_name`, `auth2_jobtitle`, `auth2_status`, `auth2_time`, `auth3_name`, `auth3_jobtitle`, `auth3_status`, `auth3_time`, `auth4_name`, `auth4_jobtitle`, `auth4_status`, `auth4_time`, `auth5_name`, `auth5_jobtitle`, `auth5_status`, `auth5_time`, `auth6_name`, `auth6_jobtitle`, `auth6_status`, `auth6_time`, `auth7_name`, `auth7_jobtitle`, `auth7_status`, `auth7_time`, `auth8_name`, `auth8_jobtitle`, `auth8_status`, `auth8_time`, `auth15_name`, `auth15_jobtitle`, `auth15_status`, `auth15_time`, `auth14_name`, `auth14_jobtitle`, `auth14_status`, `auth14_time`, `auth13_name`, `auth13_jobtitle`, `auth13_status`, `auth13_time`, `auth12_name`, `auth12_jobtitle`, `auth12_status`, `auth12_time`, `auth11_name`, `auth11_jobtitle`, `auth11_status`, `auth11_time`, `auth10_name`, `auth10_jobtitle`, `auth10_status`, `auth10_time`, `auth9_name`, `auth9_jobtitle`, `auth9_status`, `auth9_time`, `implementer_name`, `implementer_status`, `implementer_jobtitle`, `implementer_timeR`, `implementer_time`, `authCount`, `totalAuth`, `overal_status`, `authStatus`) VALUES
('REQ20201005150130', 'Assign To', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Assign To', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('REQ20201005150130', 'Assign To', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Assign To', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('REQ20201005150627', 'Assign To', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Assign To', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('REQ20201005150927', 'Assign To', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Assign To', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('REQ20201005150939', 'Andrew Mudzikitiri', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Alois Matambira', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('REQ20201006120335', 'Assign To', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Assign To', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('REQ20201006133529', 'Alois Matambira', '', '-', '2000-01-01 01:00:00', 'Albert Chivaka', '', '-', '2000-01-01 01:00:00', 'Angela Pilime', '', '-', '2000-01-01 01:00:00', 'Clive Chiwara', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Fanuel Nyanyiwa', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 4, 1, 0),
('REQ20201006173048', 'test1 NMB', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Courage Barwe', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('REQ20201006173304', 'Courage Barwe', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'test1 NMB', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('REQ20201006173451', 'Courage Barwe', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'test1 NMB', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('REQ20201007125815', 'Clive Chiwara', '', '-', '2000-01-01 01:00:00', 'Courage Barwe', '', '-', '2000-01-01 01:00:00', 'test1 NMB', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Assign To', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 2, 3, 1, 0),
('REQ20201007174444', 'Courage Barwe', '', '-', '2000-01-01 01:00:00', 'test1 NMB', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Courage Barwe', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 2, 1, 0),
('REQ20201007174639', 'Courage Barwe', '', '-', '2000-01-01 01:00:00', 'test1 NMB', '', '-', '2000-01-01 01:00:00', 'Abiot Moyo', '', '-', '2000-01-01 01:00:00', 'Assign To', '', '-', '2000-01-01 01:00:00', 'Assign To', '', '-', '2000-01-01 01:00:00', 'Assign To', '', '-', '2000-01-01 01:00:00', 'Assign To', '', '-', '2000-01-01 01:00:00', 'Assign To', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Courage Barwe', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 8, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `gen_req`
--

CREATE TABLE `gen_req` (
  `gen_id` varchar(100) NOT NULL,
  `gen_requestor` varchar(100) NOT NULL,
  `gen_name` varchar(100) NOT NULL,
  `gen_description` text NOT NULL,
  `impact_analysis` text NOT NULL,
  `req_justification` text NOT NULL,
  `req_date` datetime NOT NULL,
  `attachment` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gen_req`
--

INSERT INTO `gen_req` (`gen_id`, `gen_requestor`, `gen_name`, `gen_description`, `impact_analysis`, `req_justification`, `req_date`, `attachment`) VALUES
('REQ20201005150130', 'John Doe', '', '', '', '', '2020-10-05 15:06:22', 0),
('REQ20201005150627', 'John Doe', 'Test', 'Test', 'Test', '<p>Test</p>\r\n', '2020-10-05 15:07:00', 0),
('REQ20201005150927', 'John Doe', 'Test', 'Test', 'Test', '<p>Test</p>\r\n', '2020-10-05 15:09:35', 0),
('REQ20201005150939', 'John Doe', 'Test', 'Test', 'Test', '<p>Test</p>\r\n', '2020-10-05 15:09:53', 0),
('REQ20201006120335', 'John Doe', '', '', '', '', '2020-10-06 12:03:46', 0),
('REQ20201006133529', 'John Doe', 'Test', 'Test', 'Test', '<p>Test&nbsp;</p>\r\n', '2020-10-06 13:36:19', 0),
('REQ20201006173048', 'John Doe', 'Test', 'Test', 'Test', '<p>Test</p>\r\n', '2020-10-06 17:31:20', 0),
('REQ20201006173304', 'John Doe', 'Test', 'Test', 'Test', '<p>Test</p>\r\n', '2020-10-06 17:33:28', 0),
('REQ20201006173451', 'John Doe', 'Test', 'Test', 'Test', '<p>Test</p>\r\n', '2020-10-06 17:34:54', 0),
('REQ20201007125815', 'John Doe', 'Test', 'Test', 'Test', '<p>Test</p>\r\n', '2020-10-07 12:58:53', 0),
('REQ20201007174444', 'Malvin Zishiri', 'Test', 'Test', 'Test', '<p>Test</p>\r\n', '2020-10-07 17:45:35', 0),
('REQ20201007174639', 'Malvin Zishiri', 'Test', 'Test', 'Test', '', '2020-10-07 17:50:24', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lev_app`
--

CREATE TABLE `lev_app` (
  `lev_id` varchar(100) NOT NULL,
  `requestor` varchar(100) NOT NULL,
  `jobtitle` varchar(100) NOT NULL,
  `grade` varchar(20) NOT NULL,
  `employee_number` int(20) NOT NULL,
  `date_started` date NOT NULL,
  `leave_days` varchar(22) NOT NULL,
  `emp_address` text NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `contact_number` varchar(50) NOT NULL,
  `req_time` date NOT NULL,
  `explanation` text NOT NULL,
  `attachment` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lev_app`
--

INSERT INTO `lev_app` (`lev_id`, `requestor`, `jobtitle`, `grade`, `employee_number`, `date_started`, `leave_days`, `emp_address`, `contact_name`, `contact_number`, `req_time`, `explanation`, `attachment`) VALUES
('', '', '', '', 0, '0000-00-00', '', '', '', '', '0000-00-00', '', 0),
('LEA20201018151920', 'John Doe', 'Test Jobtitle', 'C5', 23232, '1000-01-01', '34', 'FTjwq  Adrresss', 'Test Perosn', 'wfskf 252d', '2020-10-18', '<p>YGkafadsf</p>\r\n', 0),
('LEA20201018153345', 'John Doe', 'Test Jobtitle', 'C5', 23232, '1000-01-01', '34', '10282 Borrowdale road', 'Naomi', '074478745', '2020-10-18', '<p>Test this and that</p>\r\n', 0),
('LEA20201018153851', 'John Doe', 'Test Jobtitle', 'C5', 23232, '1000-01-01', '34', '123 HTys dasda ', 'Nandi', '0714897805', '2020-10-18', '<p>Lorep Boy</p>\r\n', 0),
('LEA20201018154204', 'John Doe', 'Test Jobtitle', 'C5', 23232, '1000-01-01', '34', '123 HTys dasda ', 'Nandi', '0714897805', '2020-10-18', '<p>Lorep Boy</p>\r\n', 0);

-- --------------------------------------------------------

--
-- Table structure for table `lev_authorisation`
--

CREATE TABLE `lev_authorisation` (
  `lev_id` varchar(30) NOT NULL,
  `auth1_name` varchar(50) NOT NULL,
  `auth1_jobtitle` varchar(100) NOT NULL,
  `auth1_status` varchar(20) NOT NULL DEFAULT '-',
  `auth1_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth2_name` varchar(50) NOT NULL,
  `auth2_jobtitle` varchar(100) NOT NULL,
  `auth2_status` varchar(20) NOT NULL DEFAULT '-',
  `auth2_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth3_name` varchar(50) NOT NULL,
  `auth3_jobtitle` varchar(100) NOT NULL,
  `auth3_status` varchar(20) NOT NULL DEFAULT '-',
  `auth3_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth4_name` varchar(50) NOT NULL,
  `auth4_jobtitle` varchar(100) NOT NULL,
  `auth4_status` varchar(20) NOT NULL DEFAULT '-',
  `auth4_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth5_name` varchar(50) NOT NULL,
  `auth5_jobtitle` varchar(100) NOT NULL,
  `auth5_status` varchar(20) NOT NULL DEFAULT '-',
  `auth5_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth6_name` varchar(50) NOT NULL,
  `auth6_jobtitle` varchar(100) NOT NULL,
  `auth6_status` varchar(20) NOT NULL DEFAULT '-',
  `auth6_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth7_name` varchar(50) NOT NULL,
  `auth7_jobtitle` varchar(100) NOT NULL,
  `auth7_status` varchar(20) NOT NULL DEFAULT '-',
  `auth7_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth8_name` varchar(50) NOT NULL,
  `auth8_jobtitle` varchar(100) NOT NULL,
  `auth8_status` varchar(20) NOT NULL DEFAULT '-',
  `auth8_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth15_name` varchar(50) NOT NULL,
  `auth15_jobtitle` varchar(100) NOT NULL,
  `auth15_status` varchar(20) NOT NULL DEFAULT '-',
  `auth15_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth14_name` varchar(50) NOT NULL,
  `auth14_jobtitle` varchar(100) NOT NULL,
  `auth14_status` varchar(20) NOT NULL DEFAULT '-',
  `auth14_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth13_name` varchar(50) NOT NULL,
  `auth13_jobtitle` varchar(100) NOT NULL,
  `auth13_status` varchar(20) NOT NULL DEFAULT '-',
  `auth13_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth12_name` varchar(50) NOT NULL,
  `auth12_jobtitle` varchar(100) NOT NULL,
  `auth12_status` varchar(20) NOT NULL DEFAULT '-',
  `auth12_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth11_name` varchar(50) NOT NULL,
  `auth11_jobtitle` varchar(100) NOT NULL,
  `auth11_status` varchar(20) NOT NULL DEFAULT '-',
  `auth11_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth10_name` varchar(50) NOT NULL,
  `auth10_jobtitle` varchar(100) NOT NULL,
  `auth10_status` varchar(20) NOT NULL DEFAULT '-',
  `auth10_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `auth9_name` varchar(50) NOT NULL,
  `auth9_jobtitle` varchar(100) NOT NULL,
  `auth9_status` varchar(20) NOT NULL DEFAULT '-',
  `auth9_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `implementer_name` varchar(50) NOT NULL,
  `implementer_status` int(4) NOT NULL DEFAULT 0,
  `implementer_jobtitle` varchar(100) NOT NULL DEFAULT '-',
  `implementer_timeR` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `implementer_time` datetime NOT NULL DEFAULT '2000-01-01 01:00:00',
  `authCount` int(10) NOT NULL DEFAULT 0,
  `totalAuth` int(10) NOT NULL,
  `overal_status` int(5) NOT NULL,
  `authStatus` int(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lev_authorisation`
--

INSERT INTO `lev_authorisation` (`lev_id`, `auth1_name`, `auth1_jobtitle`, `auth1_status`, `auth1_time`, `auth2_name`, `auth2_jobtitle`, `auth2_status`, `auth2_time`, `auth3_name`, `auth3_jobtitle`, `auth3_status`, `auth3_time`, `auth4_name`, `auth4_jobtitle`, `auth4_status`, `auth4_time`, `auth5_name`, `auth5_jobtitle`, `auth5_status`, `auth5_time`, `auth6_name`, `auth6_jobtitle`, `auth6_status`, `auth6_time`, `auth7_name`, `auth7_jobtitle`, `auth7_status`, `auth7_time`, `auth8_name`, `auth8_jobtitle`, `auth8_status`, `auth8_time`, `auth15_name`, `auth15_jobtitle`, `auth15_status`, `auth15_time`, `auth14_name`, `auth14_jobtitle`, `auth14_status`, `auth14_time`, `auth13_name`, `auth13_jobtitle`, `auth13_status`, `auth13_time`, `auth12_name`, `auth12_jobtitle`, `auth12_status`, `auth12_time`, `auth11_name`, `auth11_jobtitle`, `auth11_status`, `auth11_time`, `auth10_name`, `auth10_jobtitle`, `auth10_status`, `auth10_time`, `auth9_name`, `auth9_jobtitle`, `auth9_status`, `auth9_time`, `implementer_name`, `implementer_status`, `implementer_jobtitle`, `implementer_timeR`, `implementer_time`, `authCount`, `totalAuth`, `overal_status`, `authStatus`) VALUES
('LEA20201018151920', 'John Doe', 'Test User Jobtitle', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Assign To', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('LEA20201018151920', 'John Doe', 'Test User Jobtitle', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Assign To', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('LEA20201018151920', 'John Doe', 'Test User Jobtitle', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Assign To', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('LEA20201018151920', 'John Doe', 'Test User Jobtitle', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Assign To', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('LEA20201018151920', 'John Doe', 'Test User Jobtitle', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Assign To', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('LEA20201018151920', 'John Doe', 'Test User Jobtitle', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Assign To', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('LEA20201018151920', 'John Doe', 'Test User Jobtitle', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Assign To', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('LEA20201018151920', 'John Doe', 'Test User Jobtitle', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Assign To', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('LEA20201018151920', 'John Doe', 'Test User Jobtitle', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Assign To', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('LEA20201018153345', 'John Doe', 'Test User Jobtitle', '-', '2000-01-01 01:00:00', 'Malvin Zishiri', 'Test Jobtitle', '-', '2000-01-01 01:00:00', 'Assign To', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'Malvin Zishiri', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 3, 1, 0),
('LEA20201018153851', 'John Doe', 'Test User Jobtitle', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'John Doe', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0),
('LEA20201018154204', 'John Doe', 'Test User Jobtitle', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', '', '', '-', '2000-01-01 01:00:00', 'John Doe', 0, '-', '2000-01-01 01:00:00', '2000-01-01 01:00:00', 0, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lev_uploads`
--

CREATE TABLE `lev_uploads` (
  `id` int(10) NOT NULL,
  `lev_id` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `file_name` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `file_size` int(10) DEFAULT NULL,
  `file_format` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `uploaded_on` datetime NOT NULL DEFAULT current_timestamp(),
  `data` mediumblob DEFAULT NULL,
  `uploader` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lev_uploads`
--

INSERT INTO `lev_uploads` (`id`, `lev_id`, `file_name`, `file_size`, `file_format`, `uploaded_on`, `data`, `uploader`) VALUES
(0, 'LEA20201018154204', '_dissertation chapter1.pdf', NULL, 'pdf', '2020-10-18 15:42:10', NULL, 'John Doe');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) DEFAULT NULL,
  `lastname` varchar(255) DEFAULT NULL,
  `fullname` varchar(50) NOT NULL,
  `initials` varchar(10) NOT NULL,
  `jobtitle` varchar(255) DEFAULT NULL,
  `user_group` varchar(50) NOT NULL,
  `user_type` varchar(30) NOT NULL,
  `department` int(5) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `cellphone` varchar(30) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `tel_extension` varchar(15) DEFAULT NULL,
  `manager` int(11) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `active` int(9) NOT NULL DEFAULT 1,
  `date_of_registration` date DEFAULT '2020-01-01',
  `last_logged` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `middlename`, `lastname`, `fullname`, `initials`, `jobtitle`, `user_group`, `user_type`, `department`, `address`, `cellphone`, `telephone`, `tel_extension`, `manager`, `email`, `username`, `password`, `status`, `picture`, `active`, `date_of_registration`, `last_logged`) VALUES
(1, 'Staff', NULL, NULL, 'Staff', '', NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, 'staff@nmbz.co.zw', 'staff', '123456', 1, 'default.jpg', 1, '2000-01-01', '2000-01-01 00:00:00'),
(0, 'John', NULL, 'Doe', 'John Doe', '', 'Test User Jobtitle', 'admin', 'admin', 1, 'Head Office', '0123456987', '23525', '212511', 78, 'couragetbarwe@gmail.com', 'johnd', '123456', 1, 'default.jpg', 1, '2020-01-01', '2020-10-18 10:50:30'),
(0, 'Malvin', NULL, 'Zishiri', 'Malvin Zishiri', '', 'Test Jobtitle', '', 'admin', 3, 'Test address', NULL, NULL, NULL, NULL, 'mtzishiri99@gmail.com', 'malvinz', '123456', NULL, NULL, 1, '2020-01-01', '2020-10-07 17:44:30'),
(0, '', '', '', ' ', '', '', '', '', 1, '', '+263 (242) 759601-6', '04 759651-9', '', 1491, '', '', '123456', NULL, 'default.jpg', 1, '2020-10-18', '2020-10-18 16:55:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
