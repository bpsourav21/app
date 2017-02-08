-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2017 at 07:49 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admindb`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_section1`
--

CREATE TABLE `about_section1` (
  `id` int(5) NOT NULL,
  `about_sec_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_img1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_title1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_dsc1` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_img2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_title2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_dsc2` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_img3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_title3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_dsc3` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_img4` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_title4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_dsc4` varchar(600) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer_item`
--

CREATE TABLE `footer_item` (
  `id` int(5) NOT NULL,
  `foo_name` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `foo_address` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `foo_mobile1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `foo_mobile2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `foo_email1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `foo_email2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `foo_website` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `foo_others` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `footer_item`
--

INSERT INTO `footer_item` (`id`, `foo_name`, `foo_address`, `foo_mobile1`, `foo_mobile2`, `foo_email1`, `foo_email2`, `foo_website`, `foo_others`) VALUES
(1, 'Company Name', 'Adress lorem ipsum lorem ipsum lorem ipsum', '01111111111', '012222222', 'adfa@fadfa.com', 'fafdag@fadfa.com', 'www.mywebsite.com', 'aaaaaaa'),
(1, 'Company Name', 'Adress lorem ipsum lorem ipsum lorem ipsum', '01111111111', '012222222', 'adfa@fadfa.com', 'fafdag@fadfa.com', 'www.mywebsite.com', 'aaaaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `header_item`
--

CREATE TABLE `header_item` (
  `id` int(5) NOT NULL,
  `title1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `menu1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `menu2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `menu3` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `menu4` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `menu5` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `menu6` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `header_item`
--

INSERT INTO `header_item` (`id`, `title1`, `title2`, `menu1`, `menu2`, `menu3`, `menu4`, `menu5`, `menu6`) VALUES
(0, 'RTSOFT BD', 'my company', 'Home', 'About', 'Services', 'Portfolio', 'Blog', 'Contacts'),
(0, 'RTSOFT BD', 'my company', 'Home', 'About', 'Services', 'Portfolio', 'Blog', 'Contacts');

-- --------------------------------------------------------

--
-- Table structure for table `home_section1`
--

CREATE TABLE `home_section1` (
  `id` int(5) NOT NULL,
  `title1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `home_heading1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `home_heading2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `home_image` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_title1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_dsc1` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_title2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_dsc2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_title3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_dsc3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_title4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_dsc4` varchar(300) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_section1`
--

INSERT INTO `home_section1` (`id`, `title1`, `home_heading1`, `home_heading2`, `home_image`, `home_con_title1`, `home_con_dsc1`, `home_con_title2`, `home_con_dsc2`, `home_con_title3`, `home_con_dsc3`, `home_con_title4`, `home_con_dsc4`) VALUES
(1, 'RTSOFT BD', 'Welcome to', 'lorem ipsum dadfa lorem ipsum dadfa lorem ipsum dadfa lorem ipsum dadfa lorem ipsum dadfa', '', 'Full Responsive', 'Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.', 'Retina Ready', 'Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.', 'Full Responsive', 'Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.', 'Friendly Code', 'Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.'),
(1, 'RTSOFT BD', 'Welcome to', 'lorem ipsum dadfa lorem ipsum dadfa lorem ipsum dadfa lorem ipsum dadfa lorem ipsum dadfa', '', 'Full Responsive', 'Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.', 'Retina Ready', 'Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.', 'Full Responsive', 'Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.', 'Friendly Code', 'Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.');

-- --------------------------------------------------------

--
-- Table structure for table `home_section2`
--

CREATE TABLE `home_section2` (
  `id` int(5) NOT NULL,
  `Home_sec_title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_img1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_title1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_dsc1` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_img2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_title2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_dsc2` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_img3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_title3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_dsc3` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_img4` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_title4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `home_con_dsc4` varchar(600) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `home_section2`
--

INSERT INTO `home_section2` (`id`, `Home_sec_title`, `home_con_img1`, `home_con_title1`, `home_con_dsc1`, `home_con_img2`, `home_con_title2`, `home_con_dsc2`, `home_con_img3`, `home_con_title3`, `home_con_dsc3`, `home_con_img4`, `home_con_title4`, `home_con_dsc4`) VALUES
(1, 'Latest News', 'assets/images/5.jpg', 'Template built- 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia ', 'assets/images/6.jpg', 'Template built- 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia ', 'assets/images/5.jpg', 'Template built- 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia ', '<href>', 'Template built- 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia ');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(4) NOT NULL,
  `admin_name` varchar(128) NOT NULL,
  `admin_email` varchar(64) NOT NULL,
  `admin_password` varchar(64) NOT NULL,
  `admin_role` int(2) NOT NULL,
  `admin_status` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `admin_role`, `admin_status`) VALUES
(1, 'admin', 'admin', 'admin', 1, 0),
(2, 'super', 'super', 'super', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `id` int(5) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `permission` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `permission`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@admin.com', '017777777121', '0'),
(2, 'super', 'super', 'super', 'super@super.com', '011111111', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
