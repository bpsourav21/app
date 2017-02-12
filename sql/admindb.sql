-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2017 at 11:54 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

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
  `about_con_img1` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `about_con_title1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `about_con_dsc1` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `about_con_img2` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `about_con_title2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `about_con_dsc2` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `about_con_img3` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `about_con_title3` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `about_con_dsc3` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `about_con_img4` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `about_con_title4` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `about_con_dsc4` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about_section1`
--

INSERT INTO `about_section1` (`id`, `about_sec_title`, `about_con_img1`, `about_con_title1`, `about_con_dsc1`, `about_con_img2`, `about_con_title2`, `about_con_dsc2`, `about_con_img3`, `about_con_title3`, `about_con_dsc3`, `about_con_img4`, `about_con_title4`, `about_con_dsc4`) VALUES
(1, 'About', 'assets/images/6.jpg', 'About company', 'Lorem ipsum dolor sit amepellentesque libero, pulvinar tincidunt leo consectetur egetpellentesque libero, pulvinar tincidunt leo consectetur egett, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque ', 'assets/images/5.jpg', 'Template built with', 'Lorem ipsum dolor sitpellentesque libero, Lorem ipsum dolor sitpellentesque libero, pulvinar tincidunt leo consectetur egetpellentesque libero, pulvinar tincidunt leo consectetur egetpellentesque libero, pulvinar tincidunt leo consectetur egetpellentesque libero, pulvinar tincidunt leo consectetur egetpellentesque libero, pulvinar tincidunt leo consectetur egetpellentesque libero, pulvinar tincidunt leo consectetur eget amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia   pulvinar tincidunt leo consectetur egetpellentesque libero, pulvinar tincidunt leo consectetur egetpellentesque libero, pulvinar tincidunt leo consectetur egetpellentesque libero, pulvinar tincidunt leo consectetur egetpellentesque libero, pulvinar tincidunt leo consectetur egetpellentesque libero, pulvinar tincidunt leo consectetur eget amet, consectetur adipiscing', 'assets/images/4.jpg', 'About company', 'pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque ', 'assets/images/7.jpg', 'Template built with', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia');

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
  `foo_others` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `foo_fb` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `foo_twiter` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `foo_linkedin` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `foo_gmail` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `foo_youtube` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `foo_behance` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `foo_dribble` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `footer_item`
--

INSERT INTO `footer_item` (`id`, `foo_name`, `foo_address`, `foo_mobile1`, `foo_mobile2`, `foo_email1`, `foo_email2`, `foo_website`, `foo_others`, `foo_fb`, `foo_twiter`, `foo_linkedin`, `foo_gmail`, `foo_youtube`, `foo_behance`, `foo_dribble`) VALUES
(1, 'RTSOFTBD', 'Adress: Rampura Bonosree', '01717111111', '012222222', 'adfa@fadfa.com', 'fafdag@fadfa.com', 'www.mywebsite.com', 'aaaaaaa', 'www.facebook.com', 'www.twitter.com', 'www.linkedin.com', 'www.googleplus.com', '', 'www.behance.com', 'www.dribble.com'),
(1, 'RTSOFTBD', 'Adress: Rampura Bonosree', '01717111111', '012222222', 'adfa@fadfa.com', 'fafdag@fadfa.com', 'www.mywebsite.com', 'aaaaaaa', 'www.facebook.com', 'www.twitter.com', 'www.linkedin.com', 'www.googleplus.com', '', 'www.behance.com', 'www.dribble.com'),
(1, 'RTSOFTBD', 'Adress: Rampura Bonosree', '01717111111', '012222222', 'adfa@fadfa.com', 'fafdag@fadfa.com', 'www.mywebsite.com', 'aaaaaaa', 'www.facebook.com', 'www.twitter.com', 'www.linkedin.com', 'www.googleplus.com', '', 'www.behance.com', 'www.dribble.com');

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
(0, 'RTSOFT BD', 'RTSOFTBD a reknowned company', 'Home menu', 'About', 'Gallery', 'Services', '', ''),
(0, 'RTSOFT BD', 'RTSOFTBD a reknowned company', 'Home menu', 'About', 'Gallery', 'Services', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `home_section1`
--

CREATE TABLE `home_section1` (
  `id` int(5) NOT NULL,
  `banner` varchar(600) COLLATE utf8_unicode_ci NOT NULL,
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

INSERT INTO `home_section1` (`id`, `banner`, `title1`, `home_heading1`, `home_heading2`, `home_image`, `home_con_title1`, `home_con_dsc1`, `home_con_title2`, `home_con_dsc2`, `home_con_title3`, `home_con_dsc3`, `home_con_title4`, `home_con_dsc4`) VALUES
(1, 'assets/images/bg1.jpg', 'RTSOFT BD', 'Welcome to', 'This Is one of the most promising company', '', 'Full Responsive', 'Full Responsive Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.', 'Retina Ready', 'Retina Ready Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.', 'Full Controlable', 'akjdflkahfiohad fhaoifahfi anfhriut ydghdfiuyhgoi g', 'Friendly Code', 'Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.'),
(1, 'assets/images/bg1.jpg', 'RTSOFT BD', 'Welcome to', 'This Is one of the most promising company', '', 'Full Responsive', 'Full Responsive Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.', 'Retina Ready', 'Retina Ready Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.', 'Full Controlable', 'akjdflkahfiohad fhaoifahfi anfhriut ydghdfiuyhgoi g', 'Friendly Code', 'Quisque eu ante at tortor imperdiet gravida nec sed turpis phasellus.');

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
(1, 'Latest News jukiukiiiiiiiiiiiiiiiiiiiii', 'assets/images/5.jpg', 'Template built- 1iiiiiiiiiiiiiiiiiiiiiiiiiiiii', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia ', 'assets/images/6.jpg', 'Template built- 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia ', 'assets/images/5.jpg', 'Template built- 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia ', 'assets/images/6.jpg', 'Template built- 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus interdum erat libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia pellentesque libero, pulvinar tincidunt leo consectetur eget. Curabitur lacinia ');

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
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(10) NOT NULL,
  `gtitle` varchar(20) NOT NULL,
  `gphoto` varchar(50) NOT NULL,
  `gcontent` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `gtitle`, `gphoto`, `gcontent`) VALUES
(3, 'Image 1', '621.jpg', 'sssssssdldkmclkmdklms'),
(4, 'dfdf', 'index.jpg', 'cdskclndkslnc ldnkldn'),
(8, 'dfdsf', 'index2.jpg', 'dvdfv'),
(11, 'dd', 'Picture-019-300x2251.jpg', 'dd'),
(12, 'bbbbbb', '13cbaam_develop_12m_629799e.jpg', 'bbbbbbb'),
(13, 'hkjhuirh iuhiu', 'imagesqqq1.jpg', 'uyrui uryiey hjfsdfjs '),
(14, 'zzz', 'c.jpg', 'zz'),
(15, 'ss', 'images.png', 'sss'),
(16, 'zz', 'c1.jpg', 'zzz'),
(17, 'zz', 'q.jpg', 'zz'),
(18, 'dd', 'q1.jpg', 'dd'),
(20, 'new Title', '4.jpg', 'adfadfa');

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
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

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
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
