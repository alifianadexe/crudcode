-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2017 at 10:09 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_article`
--

CREATE TABLE `tbl_article` (
  `ID` int(20) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `date_created` datetime NOT NULL,
  `IDuser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_article`
--

INSERT INTO `tbl_article` (`ID`, `title`, `description`, `date_created`, `IDuser`) VALUES
(1, 'How to make an article in Blogspot', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-12-09 01:06:05', 1),
(2, 'If you love Someone , Pray for her', 'The optional timestamp parameter in the date() function specifies a timestamp. If you do not specify a timestamp, the current date and time will be used (as shown in the examples above).\r\n\r\nThe mktime() function returns the Unix timestamp for a date. The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.', '2017-12-10 09:05:53', 1),
(4, 'There nothing to be afraid , except God', '\'Pembuatan Project Baru Dan Koneksi Database\r\n\r\nAssalamualaikum Wr. Wb\r\n                Pertama, hal yang harus dipersiapkan dalam pembuatan aplikasi adalah mempersiapkan peralatan dan juga aplikasi – aplikasi pendukung dan IDE. Diantarnya yaitu :\r\n\r\nAplikasi yang dibutuhkan :\r\n\r\n1.       XAMPP ver 3.2.2  Link Download\r\n2.       Visual Studio Comunnity 2015 Link Download\r\n3.       MySql Connector Net 6.9.10 Link Download\r\n\r\nPastikan semua aplikasi diatas sudah terinstall dengan baik dan benar.\r\n\r\n# Pembuatan Database \r\n\r\n                Buat database MySql terlebih dahulu. Kita namakan database tersebut dengan nama db_sekolahku.', '2017-12-11 02:19:41', 1),
(5, 'I Miss you, But am i deserved', ' All of the examples on this page will show a navigation bar that takes up too much space on small screens (however, the navigation bar will be on one single line on large screens - because Bootstrap is responsive). This problem (with the small screens) will be solved in the last example on this page.', '2017-12-12 11:11:07', 0),
(7, 'I Miss you, But am i can be with you', ' All of the examples on this page will show a navigation bar that takes up too much space on small screens (however, the navigation bar will be on one single line on large screens - because Bootstrap is responsive). This problem (with the small screens) will be solved in the last example on this page.', '2017-12-12 11:23:32', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `ID` int(20) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL,
  `fullname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`ID`, `username`, `password`, `fullname`) VALUES
(1, 'adexe', 'adexe123', 'Alifian Adexe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_article`
--
ALTER TABLE `tbl_article`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_article`
--
ALTER TABLE `tbl_article`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
