-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2022 at 02:35 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hero`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `logid` int(100) NOT NULL,
  `username` varchar(120) NOT NULL,
  `email` varchar(120) NOT NULL,
  `password` varchar(260) NOT NULL,
  `otp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`logid`, `username`, `email`, `password`, `otp`) VALUES
(1, 'sagar khadka', 'sagar2@gmail.com', '$2y$10$uA4V4Qr7DnHCZXwpS/mIH.ea/5NIUGTOQ1CEDe3aUdtN23MSztbhq', 6619),
(16, 'Santosh Ghimire', 'santoshghimire@gmail.com', '$2y$10$WXJiJGVlKO3ZTeELMBvBWOv0T9Z0UEjip5eTxo5k/P44Q/vfY.fH.', 0),
(17, 'Rupak Nagarkoti ', 'leorex390@gmail.com', '$2y$10$uA4V4Qr7DnHCZXwpS/mIH.ea/5NIUGTOQ1CEDe3aUdtN23MSztbhq', 0),
(18, 'Sandesh Adhikari ', 'adhikariseamon@gmail.com', '$2y$10$Y2O/X91jKiu23CLcoeOi..BwMEdl3/IK1qnrDVgDZLkqgmlweIR2O', 0),
(20, 'x x', 'x@gmail.com', '$2y$10$PM2dNsXTG4BfwbYCJ8Jr9eKq7iK/LOQ9AF.URMdKtzhJfftagjRNC', 0),
(26, 's m', 'sagar.khadka2001@gmail.com', '$2y$10$STou7k2WAK0EaRxLr4vSsuWjdTTZVq/jAHOJUPpqQcTr4pvj8RkNi', 7745),
(34, 'prajwol lama', 'restro56@gmail.com', '$2y$10$KNEeElZa9ps8wZ5cTc8GE./dv0cCWqRZ9K1i4dnBklmVswnGX81X.', 8141),
(38, 'Suraj Chaudhary', 'suryasnc12345@gmail.com', '$2y$10$D8hForfYgb4g5dSNbTVWdeisHTyKEqbp/H.Autd7l6AptEFtF8pum', 0);

-- --------------------------------------------------------

--
-- Table structure for table `central`
--

CREATE TABLE `central` (
  `id` int(100) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` bigint(100) NOT NULL,
  `balance` decimal(20,3) NOT NULL DEFAULT 0.000,
  `interest` decimal(20,3) NOT NULL DEFAULT 0.000,
  `intdate` date NOT NULL,
  `accounttype` varchar(256) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `logid` int(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `citizenshipnumber` varchar(200) NOT NULL,
  `citizenship` varchar(200) NOT NULL,
  `fathersname` varchar(200) NOT NULL,
  `fathercitizenship` varchar(200) NOT NULL,
  `dob` date NOT NULL,
  `tprovince` varchar(255) NOT NULL,
  `tdistrict` varchar(255) NOT NULL,
  `tmun` varchar(255) NOT NULL,
  `tward` int(125) NOT NULL,
  `ttole` varchar(255) NOT NULL,
  `ibank` varchar(10) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `central`
--

INSERT INTO `central` (`id`, `fname`, `mname`, `lname`, `email`, `number`, `balance`, `interest`, `intdate`, `accounttype`, `branch`, `date`, `logid`, `image`, `citizenshipnumber`, `citizenship`, `fathersname`, `fathercitizenship`, `dob`, `tprovince`, `tdistrict`, `tmun`, `tward`, `ttole`, `ibank`) VALUES
(1, 'sagar', '', 'khadka', 'sagar2@gmail.com', 9841233338, '118502.000', '13.040', '2022-09-07', '', 'kapan', '2022-03-31', 1, 'imgup/_MG_9036.JPG', '556222', 'imgup/ks.jpg', 'suman khadka', 'imgup/ks.jpg', '0000-00-00', 'bagmati', 'kathmandu', 'budhanilkantha', 11, 'kapan', 'yes'),
(16, 'Santosh', '', 'Ghimire', 'santoshghimire@gmail.com', 9860237456, '1121098120.000', '124566.000', '2022-06-19', '', 'boudha', '2022-04-28', 16, 'imgup/IMG-3d2548bbf82f10caf4f81fa308c4e683-V.jpg', '87', 'imgup/IMG_20220428_080556.jpg', 'Dambar Bahadur Ghimire', 'imgup/IMG_20220428_080556.jpg', '0000-00-00', 'Bagmati', 'Kathmandu', 'Kathmandu', 5, 'Mulpani', 'yes'),
(17, 'Rupak', '', 'Nagarkoti ', 'leorex390@gmail.com', 9811234572, '102000.000', '0.000', '2022-06-18', '', 'kapan', '2022-05-21', 17, 'imgup/FB_IMG_1598856519331.jpg', '71717718', 'imgup/Screenshot_2022-05-21-07-08-58-705_org.zwanoo.android.speedtest.jpg', 'Buddhi ', 'imgup/Screenshot_2022-05-21-07-08-58-705_org.zwanoo.android.speedtest.jpg', '0000-00-00', 'Bagmati', 'Kathmandu ', 'Budhanilkanta ', 11, 'Kapan', 'yes'),
(18, 'Sandesh', '', 'Adhikari ', 'adhikariseamon@gmail.com', 9099291123, '30000.000', '0.000', '2022-06-18', '', 'kapan', '2022-05-21', 18, 'imgup/16531230665757039799333588873889.jpg', '2', '', 'Shambhu Prasad Adikari ', '', '0000-00-00', 'Bagmati', 'Kathmandu ', 'Budhanilkantha ', 11, 'Kapan', 'yes'),
(34, 'prajwol', '', 'lama', 'restro56@gmail.com', 9808293970, '0.000', '0.127', '2022-09-07', '', 'simaltar', '2022-06-16', 34, 'imgup/Lonnie Chavis in tuxedo.jpg', '222', 'imgup/bk.jpeg', 'xcxx', 'imgup/bk.jpeg', '0000-00-00', 'bagmati', 'kathmandu', 'kathmandu', 7, 'kharibot', 'yes'),
(38, 'Suraj', '', 'Chaudhary', 'suryasnc12345@gmail.com', 9844532500, '0.000', '0.000', '2022-06-26', 'saving', 'boudha', '2022-06-26', 38, 'imgup/gost.jpg', '2147483647', 'imgup/spd.jpg', 'Nawal kishwor Chaudhary', 'imgup/spd.jpg', '0000-00-00', 'Bagmati', 'Kathmandu', 'Karhmandu', 10, 'nayabasti', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id` int(128) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id`, `name`, `password`, `email`) VALUES
(0, 'prajwol lama', '$2y$10$dKbAv8jQ0xbO4bdTY9hDV.udQCjCFRZwDWKMTyVjlYK5LMe8qu/QK', 'restro56@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `mandb`
--

CREATE TABLE `mandb` (
  `manid` int(128) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `number` int(255) NOT NULL,
  `image` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mandb`
--

INSERT INTO `mandb` (`manid`, `firstname`, `middlename`, `lastname`, `email`, `address`, `branch`, `number`, `image`) VALUES
(0, 'prajwol', '', 'lama', 'restro56@gmail.com', 'kapan', 'imadol', 111122222, 'imgup/PICNIC_20200201_151546374.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(255) NOT NULL,
  `senderid` int(128) NOT NULL,
  `sendername` varchar(255) NOT NULL,
  `account number` int(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `amount` int(255) NOT NULL,
  `receiverid` int(128) NOT NULL,
  `receivername` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `senderid`, `sendername`, `account number`, `date`, `amount`, `receiverid`, `receivername`) VALUES
(27, 1, 'sagar khadka', 1, '2022-03-31', 1000, 0, 'prajwol lama'),
(28, 0, 'prajwol lama', 0, '2022-04-10', 10000, 1, 'sagar khadka'),
(29, 0, 'prajwol lama', 0, '2022-04-10', 5000, 0, 'sagar khadka'),
(30, 0, 'prajwol lama', 0, '2022-04-15', 10, 1, 'sagar khadka'),
(38, 17, 'Rupak Nagarkoti ', 17, '2022-05-21', 10000, 18, 'Sandesh adhikari'),
(39, 18, 'Sandesh Adhikari ', 18, '2022-05-21', 100000, 17, 'Rupak Nagarkoti '),
(43, 20, 'x x', 20, '2022-06-11', 500, 0, 'prajwol lama'),
(44, 20, 'x x', 20, '2022-06-11', 1000, 0, 'prajwol lama'),
(45, 20, 'x x', 20, '2022-06-11', 400, 0, 'prajwol lama'),
(46, 0, 'prajwol lama', 0, '2022-06-11', 1000, 20, 'xx'),
(47, 29, 'prajwol lama', 29, '2022-06-14', 200, 1, 'sagar khadka'),
(48, 29, 'prajwol lama', 29, '2022-06-15', 1000, 1, 'sagar khadka'),
(49, 29, 'prajwol lama', 29, '2022-06-15', 1000, 1, 'sagar khadka'),
(50, 1, 'sagar khadka', 1, '2022-06-15', 1000, 16, 'santosh ghimire'),
(51, 29, 'prajwol lama', 29, '2022-06-15', 1000, 1, 'sagar khadka'),
(52, 1, 'sagar khadka', 1, '2022-06-15', 1000, 0, 'prajwol lama'),
(53, 29, 'prajwol lama', 29, '2022-06-15', 1000, 1, 'sagar khadka'),
(54, 1, 'sagar khadka', 1, '2022-06-15', 10000, 0, 'prajwol lama'),
(55, 29, 'prajwol lama', 29, '2022-06-15', 1000, 1, 'sagar khadka'),
(56, 29, 'prajwol lama', 29, '2022-06-15', 12000, 1, 'sagar khadka'),
(57, 33, 'pee a', 33, '2022-06-15', 1200, 1, 'sagar khadka'),
(63, 1, 'sagar khadka', 1, '2022-08-02', 1111, 34, 'prajwol lama'),
(64, 34, 'prajwol lama', 34, '2022-08-05', 1000, 1, 'sagar khadka'),
(65, 34, 'prajwol lama', 34, '2022-08-09', 100, 1, 'sagar  khadka'),
(69, 34, 'prajwol lama', 34, '2022-08-20', 11, 1, 'sagar khadka'),
(70, 34, 'prajwol lama', 34, '2022-08-20', 111, 1, 'sagar  khadka'),
(71, 34, 'prajwol lama', 34, '2022-09-03', 11, 1, 'sagar khadka'),
(72, 34, 'prajwol lama', 34, '2022-09-03', 11, 1, 'sagar  khadka'),
(73, 34, 'prajwol lama', 34, '2022-09-06', 98, 1, 'sagar khadka'),
(74, 34, 'prajwol lama', 34, '2022-09-07', 100, 1, 'sagar khadka'),
(75, 34, 'prajwol lama', 34, '2022-09-07', 1043, 1, 'sagar khadka');

-- --------------------------------------------------------

--
-- Table structure for table `unverifiedaccount`
--

CREATE TABLE `unverifiedaccount` (
  `id` int(11) NOT NULL,
  `firsname` varchar(255) NOT NULL,
  `middlename` varchar(244) DEFAULT NULL,
  `lastname` varchar(255) NOT NULL,
  `curentnumber` varchar(120) NOT NULL,
  `email` varchar(256) NOT NULL,
  `fathername` varchar(255) NOT NULL,
  `citizenship` varchar(120) NOT NULL,
  `citizennumber` int(255) NOT NULL,
  `fathercitizenship` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `recentphoto` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `sourceofincome` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `accountype` varchar(255) NOT NULL,
  `temporaryprovince` varchar(255) NOT NULL,
  `temporarydistrict` varchar(255) NOT NULL,
  `temporarymun` varchar(255) NOT NULL,
  `temporaryward` int(255) NOT NULL,
  `temporarytole` varchar(255) NOT NULL,
  `ibank` varchar(255) NOT NULL DEFAULT 'no'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`logid`);

--
-- Indexes for table `central`
--
ALTER TABLE `central`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mandb`
--
ALTER TABLE `mandb`
  ADD PRIMARY KEY (`manid`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `unverifiedaccount`
--
ALTER TABLE `unverifiedaccount`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `central`
--
ALTER TABLE `central`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `unverifiedaccount`
--
ALTER TABLE `unverifiedaccount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
