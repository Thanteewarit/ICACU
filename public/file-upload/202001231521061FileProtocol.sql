-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2020 at 07:34 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jaruwan`
--

-- --------------------------------------------------------

--
-- Table structure for table `fontendcontact_banner`
--

CREATE TABLE `fontendcontact_banner` (
  `id` int(11) NOT NULL,
  `banner` char(150) DEFAULT NULL COMMENT 'แบนเนอร์',
  `topic` text DEFAULT NULL COMMENT 'หัวข้อ',
  `status` char(11) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fontendcontact_banner`
--

INSERT INTO `fontendcontact_banner` (`id`, `banner`, `topic`, `status`, `created_at`, `updated_at`) VALUES
(1, '19122019090119Pss.png', 'CONTACT', 'Y', '2019-12-09 20:13:19', '2019-12-19 02:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `fontendcontact_location`
--

CREATE TABLE `fontendcontact_location` (
  `id` int(11) NOT NULL,
  `topic` text DEFAULT NULL COMMENT 'หัวข้อ',
  `content` text DEFAULT NULL COMMENT 'รายละเอียด',
  `status` char(11) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fontendcontact_location`
--

INSERT INTO `fontendcontact_location` (`id`, `topic`, `content`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Bangkok Air Catering Company Limited Suvarnabhumi International Airport', '<p>888&nbsp;Moo1&nbsp;Tambon&nbsp;Nongprue,&nbsp;Amphur&nbsp;Bangplee,&nbsp;Samutprakarn&nbsp;10540&nbsp;Thailand<br />\r\n<br />\r\nSITA&nbsp;:&nbsp;BKKHHPG<br />\r\nPhone&nbsp;:&nbsp;+66&nbsp;(0)&nbsp;2&nbsp;131&nbsp;7500<br />\r\nFax&nbsp;:&nbsp;+66&nbsp;(0)&nbsp;2&nbsp;131&nbsp;7599<br />\r\nEmail:&nbsp;sales@bangkokaircatering.com<br />\r\nLocation&nbsp;:&nbsp;+13&deg;&nbsp;42&prime;&nbsp;44.83&Prime;,&nbsp;+100&deg;&nbsp;45&prime;&nbsp;55.13</p>', 'Y', '2019-12-16 19:47:20', '2019-12-23 21:23:02'),
(9, 'Bangkok Air Catering Company Limited Suvarnabhumi International Airport', '<p>888&nbsp;Moo1&nbsp;Tambon&nbsp;Nongprue,&nbsp;Amphur&nbsp;Bangplee,&nbsp;Samutprakarn&nbsp;10540&nbsp;Thailand<br />\r\n<br />\r\nSITA&nbsp;:&nbsp;BKKHHPG<br />\r\nPhone&nbsp;:&nbsp;+66&nbsp;(0)&nbsp;2&nbsp;131&nbsp;7500<br />\r\nFax&nbsp;:&nbsp;+66&nbsp;(0)&nbsp;2&nbsp;131&nbsp;7599<br />\r\nEmail:&nbsp;sales@bangkokaircatering.com<br />\r\nLocation&nbsp;:&nbsp;+13&deg;&nbsp;42&prime;&nbsp;44.83&Prime;,&nbsp;+100&deg;&nbsp;45&prime;&nbsp;55.13</p>', 'Y', '2019-12-23 21:57:47', '2019-12-23 21:57:47'),
(10, 'Bangkok Air Catering Company Limited Suvarnabhumi International Airport', '<p>888&nbsp;Moo1&nbsp;Tambon&nbsp;Nongprue,&nbsp;Amphur&nbsp;Bangplee,&nbsp;Samutprakarn&nbsp;10540&nbsp;Thailand<br />\r\n<br />\r\nSITA&nbsp;:&nbsp;BKKHHPG<br />\r\nPhone&nbsp;:&nbsp;+66&nbsp;(0)&nbsp;2&nbsp;131&nbsp;7500<br />\r\nFax&nbsp;:&nbsp;+66&nbsp;(0)&nbsp;2&nbsp;131&nbsp;7599<br />\r\nEmail:&nbsp;sales@bangkokaircatering.com<br />\r\nLocation&nbsp;:&nbsp;+13&deg;&nbsp;42&prime;&nbsp;44.83&Prime;,&nbsp;+100&deg;&nbsp;45&prime;&nbsp;55.13</p>', 'Y', '2019-12-23 23:14:06', '2019-12-23 23:14:06'),
(11, 'Bangkok Air Catering Company Limited Suvarnabhumi International Airport', '<p>888&nbsp;Moo1&nbsp;Tambon&nbsp;Nongprue,&nbsp;Amphur&nbsp;Bangplee,&nbsp;Samutprakarn&nbsp;10540&nbsp;Thailand<br />\r\n<br />\r\nSITA&nbsp;:&nbsp;BKKHHPG<br />\r\nPhone&nbsp;:&nbsp;+66&nbsp;(0)&nbsp;2&nbsp;131&nbsp;7500<br />\r\nFax&nbsp;:&nbsp;+66&nbsp;(0)&nbsp;2&nbsp;131&nbsp;7599<br />\r\nEmail:&nbsp;sales@bangkokaircatering.com<br />\r\nLocation&nbsp;:&nbsp;+13&deg;&nbsp;42&prime;&nbsp;44.83&Prime;,&nbsp;+100&deg;&nbsp;45&prime;&nbsp;55.13</p>', 'Y', '2019-12-23 23:14:37', '2019-12-23 23:14:37'),
(12, 'Bangkok Air Catering Company Limited Suvarnabhumi International Airport', '<p>888&nbsp;Moo1&nbsp;Tambon&nbsp;Nongprue,&nbsp;Amphur&nbsp;Bangplee,&nbsp;Samutprakarn&nbsp;10540&nbsp;Thailand<br />\r\n<br />\r\nSITA&nbsp;:&nbsp;BKKHHPG<br />\r\nPhone&nbsp;:&nbsp;+66&nbsp;(0)&nbsp;2&nbsp;131&nbsp;7500<br />\r\nFax&nbsp;:&nbsp;+66&nbsp;(0)&nbsp;2&nbsp;131&nbsp;7599<br />\r\nEmail:&nbsp;sales@bangkokaircatering.com<br />\r\nLocation&nbsp;:&nbsp;+13&deg;&nbsp;42&prime;&nbsp;44.83&Prime;,&nbsp;+100&deg;&nbsp;45&prime;&nbsp;55.13</p>', 'Y', '2019-12-23 23:15:22', '2019-12-23 23:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `fontendindex_content`
--

CREATE TABLE `fontendindex_content` (
  `id` int(11) NOT NULL,
  `content` text DEFAULT NULL COMMENT 'รายละเอียด	',
  `content1` text DEFAULT NULL COMMENT 'รายละเอียด	',
  `status` char(11) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fontendindex_content`
--

INSERT INTO `fontendindex_content` (`id`, `content`, `content1`, `status`, `created_at`, `updated_at`) VALUES
(13, 'BANGKOK AIR CATERING', '<p>The&nbsp;foremost&nbsp;provider&nbsp;of&nbsp;in-flight&nbsp;meals&nbsp;for&nbsp;airlines&nbsp;operating&nbsp;from&nbsp;Thailand&rsquo;s&nbsp;key&nbsp;airports.&nbsp;From&nbsp;the&nbsp;finest&nbsp;details&nbsp;of&nbsp;menu&nbsp;design&nbsp;through&nbsp;preparation&nbsp;and&nbsp;delivery,&nbsp;our&nbsp;passions&nbsp;are</p>\r\n\r\n<p>quality,&nbsp;service&nbsp;and&nbsp;innovation.<br />\r\n&nbsp;</p>\r\n\r\n<p>Working&nbsp;closely&nbsp;with&nbsp;our&nbsp;airline&nbsp;clients&nbsp;and&nbsp;business&nbsp;partners,&nbsp;BAC&rsquo;s&nbsp;internationally&nbsp;trained&nbsp;chefs&nbsp;guarantee&nbsp;that&nbsp;every&nbsp;meal&nbsp;is&nbsp;an&nbsp;outstanding&nbsp;experience.&nbsp;Their&nbsp;perfectionism&nbsp;is&nbsp;matched</p>\r\n\r\n<p>by&nbsp;our&nbsp;operational&nbsp;excellence&nbsp;teams.&nbsp;Together,&nbsp;they&nbsp;ensure&nbsp;consistency&nbsp;of&nbsp;standards&nbsp;at&nbsp;each&nbsp;of&nbsp;our&nbsp;units&nbsp;on&nbsp;every&nbsp;day&nbsp;of&nbsp;the&nbsp;year.</p>', 'Y', '2019-12-13 03:36:25', '2019-12-23 02:22:49');

-- --------------------------------------------------------

--
-- Table structure for table `fontendindex_image`
--

CREATE TABLE `fontendindex_image` (
  `id` int(11) NOT NULL,
  `banner` text DEFAULT NULL COMMENT 'แบนเนอร์',
  `topic` text DEFAULT NULL COMMENT 'หัวข้อ',
  `status` char(11) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fontendindex_image`
--

INSERT INTO `fontendindex_image` (`id`, `banner`, `topic`, `status`, `created_at`, `updated_at`) VALUES
(3, '20012020154959Pss.png', '<p><strong>Bac&nbsp;Bangkok</strong></p>\r\n\r\n<p>more&nbsp;details</p>', 'Y', '2019-12-15 21:23:50', '2020-01-20 08:49:59'),
(4, '19122019083356Pss.png', '<p><strong>Bac&nbsp;Samui</strong></p>\r\n\r\n<p>more&nbsp;details</p>', 'Y', '2019-12-18 21:07:53', '2019-12-22 22:03:47'),
(5, '19122019083414Pss.png', '<p><strong>Bac&nbsp;Phuket</strong></p>\r\n\r\n<p>more&nbsp;details</p>', 'Y', '2019-12-18 21:08:50', '2019-12-22 22:04:40'),
(6, '19122019083432Pss.png', '<p><strong>Bac&nbsp;Chiang&nbsp;mai</strong></p>\r\n\r\n<p>more&nbsp;details</p>', 'Y', '2019-12-18 21:09:20', '2019-12-22 22:05:17'),
(7, '19122019083453Pss.png', '<p><strong>Bac&nbsp;Don&nbsp;muang</strong></p>\r\n\r\n<p>more&nbsp;details</p>', 'Y', '2019-12-18 21:09:52', '2019-12-22 22:05:41');

-- --------------------------------------------------------

--
-- Table structure for table `fontendindex_news`
--

CREATE TABLE `fontendindex_news` (
  `id` int(11) NOT NULL,
  `banner` text NOT NULL DEFAULT 'NULL' COMMENT 'แบนเนอร์',
  `topic` text DEFAULT NULL COMMENT 'หัวข้อ',
  `content` text DEFAULT NULL COMMENT 'รายละเอียด',
  `status` char(11) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fontendindex_news`
--

INSERT INTO `fontendindex_news` (`id`, `banner`, `topic`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, '17122019074608Pss.png', '21 February 2019', '<p>Bangkok&nbsp;Airways&nbsp;introduces&nbsp;new&nbsp;in-flight&nbsp;menus&nbsp;for&nbsp;2019&nbsp;&ldquo;Boutique&nbsp;Street&nbsp;Food&rdquo;</p>', 'Y', '2019-12-09 00:53:22', '2020-01-20 03:38:29'),
(13, '21012020023241Pss.png', '22 February 2019', '<p>Bangkok&nbsp;Airways&nbsp;introduces&nbsp;new&nbsp;in-flight&nbsp;menus&nbsp;for&nbsp;2019&nbsp;&ldquo;Boutique&nbsp;Street&nbsp;Food&rdquo;</p>', 'Y', '2020-01-20 19:29:37', '2020-01-20 19:32:41'),
(14, '21012020023220Pss.png', '23 February 2019', '<p>Bangkok&nbsp;Airways&nbsp;introduces&nbsp;new&nbsp;in-flight&nbsp;menus&nbsp;for&nbsp;2019&nbsp;&ldquo;Boutique&nbsp;Street&nbsp;Food&rdquo;</p>', 'Y', '2020-01-20 19:32:20', '2020-01-20 19:32:20');

-- --------------------------------------------------------

--
-- Table structure for table `fontendindex_topic`
--

CREATE TABLE `fontendindex_topic` (
  `id` int(11) NOT NULL,
  `topic` text DEFAULT NULL COMMENT 'หัวข้อ',
  `contact` text DEFAULT NULL COMMENT 'รายละเอียด',
  `img` text DEFAULT NULL COMMENT 'รูป',
  `status` char(11) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fontendindex_topic`
--

INSERT INTO `fontendindex_topic` (`id`, `topic`, `contact`, `img`, `status`, `created_at`, `updated_at`) VALUES
(10, 'YOUR CATERING PARTNER AT SUVARNABHUMI AIRPORT', '<p>Our&nbsp;unit&nbsp;complies&nbsp;with&nbsp;HACCP/GMP&nbsp;standards,&nbsp;assuring&nbsp;you&nbsp;and&nbsp;your&nbsp;passengers&nbsp;of&nbsp;top&nbsp;quality</p>\r\n\r\n<p>and&nbsp;the&nbsp;safest&nbsp;products.Flexibility&nbsp;is&nbsp;our&nbsp;strength.We&nbsp;are&nbsp;able&nbsp;to&nbsp;produce&nbsp;any&nbsp;type&nbsp;or&nbsp;nationality&nbsp;</p>\r\n\r\n<p>of&nbsp;food.&nbsp;What&nbsp;we&nbsp;agree&nbsp;and&nbsp;commit&nbsp;to&nbsp;is&nbsp;what&nbsp;we&nbsp;deliver&nbsp;to&nbsp;passengers&nbsp;&ndash;&nbsp;without&nbsp;fail,&nbsp;every&nbsp;time.</p>\r\n\r\n<p>Our&nbsp;unit&nbsp;is&nbsp;fully&nbsp;HALAL-compliant,&nbsp;certified&nbsp;by&nbsp;The&nbsp;Central&nbsp;Islamic&nbsp;Committee&nbsp;of&nbsp;Thailand.</p>\r\n\r\n<p>The&nbsp;small&nbsp;non-Halal&nbsp;kitchen&nbsp;is&nbsp;a&nbsp;clearly&nbsp;separated&nbsp;section.Occupying&nbsp;its&nbsp;own&nbsp;completely&nbsp;</p>\r\n\r\n<p>separate&nbsp;area,&nbsp;our&nbsp;Kosher&nbsp;kitchen&nbsp;is&nbsp;fully&nbsp;certified&nbsp;and&nbsp;overseen&nbsp;by&nbsp;Thai&nbsp;Kashrut&nbsp;Services.</p>', '20012020070443Pss.png', 'Y', '2019-12-23 19:42:08', '2020-01-20 00:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `fontendnews_banner`
--

CREATE TABLE `fontendnews_banner` (
  `id` int(11) NOT NULL,
  `banner` text DEFAULT NULL COMMENT 'แบนเนอร์',
  `topic` text DEFAULT NULL COMMENT 'หัวข้อ',
  `status` char(11) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fontendnews_banner`
--

INSERT INTO `fontendnews_banner` (`id`, `banner`, `topic`, `status`, `created_at`, `updated_at`) VALUES
(3, '19122019085910Pss.png', 'BAC NEWS', 'Y', '2019-12-18 00:18:36', '2019-12-19 01:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `fontendnews_pdf`
--

CREATE TABLE `fontendnews_pdf` (
  `id` int(11) NOT NULL,
  `image` text DEFAULT NULL COMMENT 'รูปภาพ',
  `topic` text DEFAULT NULL COMMENT 'หัวข้อ',
  `topic2` text DEFAULT NULL COMMENT 'หัวข้อ',
  `status` char(11) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fontendnews_pdf`
--

INSERT INTO `fontendnews_pdf` (`id`, `image`, `topic`, `topic2`, `status`, `created_at`, `updated_at`) VALUES
(9, '18122019101907Pss.png', 'Bac cuisine', '<p>April&nbsp;&ndash;&nbsp;June&nbsp;2017</p>', 'Y', '2019-12-18 03:15:57', '2020-01-20 08:22:02'),
(12, '21012020021431Pss.png', 'Bac cuisine', '<p>April&nbsp;&ndash;&nbsp;June&nbsp;2017</p>', 'Y', '2020-01-20 19:14:32', '2020-01-20 19:24:20'),
(13, '21012020021445Pss.png', 'Bac cuisine', '<p>April&nbsp;&ndash;&nbsp;June&nbsp;2017</p>', 'Y', '2020-01-20 19:14:45', '2020-01-20 19:24:37'),
(14, '21012020022514Pss.png', 'Bac cuisine', '<p>April&nbsp;&ndash;&nbsp;June&nbsp;2017</p>', 'Y', '2020-01-20 19:25:15', '2020-01-20 19:37:29'),
(15, '21012020022526Pss.png', 'Bac cuisine', '<p>April&nbsp;&ndash;&nbsp;June&nbsp;2017</p>', 'Y', '2020-01-20 19:25:27', '2020-01-20 19:37:45'),
(16, '21012020022538Pss.png', 'Bac cuisine', '<p>April&nbsp;&ndash;&nbsp;June&nbsp;2017</p>', 'Y', '2020-01-20 19:25:38', '2020-01-20 19:38:07');

-- --------------------------------------------------------

--
-- Table structure for table `fontendsafety_banner`
--

CREATE TABLE `fontendsafety_banner` (
  `id` int(11) NOT NULL,
  `banner` text DEFAULT NULL COMMENT 'แบนเนอร์',
  `topic` text DEFAULT NULL COMMENT 'หัวข้อ',
  `content` text DEFAULT NULL COMMENT 'รายละเอียด',
  `status` char(11) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fontendsafety_banner`
--

INSERT INTO `fontendsafety_banner` (`id`, `banner`, `topic`, `content`, `status`, `created_at`, `updated_at`) VALUES
(6, '20122019040925Pss.png', 'SAFETY & HYGIENE', '<p><sub>Governed&nbsp;by&nbsp;BAC&nbsp;Group&nbsp;Corporate&nbsp;Policy,&nbsp;we&nbsp;operate&nbsp;precisely&nbsp;calibrated&nbsp;systems&nbsp;to&nbsp;supply&nbsp;safe,</sub></p>\r\n\r\n<p><sub>reliable&nbsp;and&nbsp;satisfying&nbsp;inflight&nbsp;meals&nbsp;that&nbsp;meet&nbsp;the&nbsp;highest&nbsp;standards&nbsp;of&nbsp;hygiene.</sub></p>', 'Y', '2019-12-19 21:07:09', '2019-12-23 00:08:27');

-- --------------------------------------------------------

--
-- Table structure for table `fontendsafety_content`
--

CREATE TABLE `fontendsafety_content` (
  `id` int(11) NOT NULL,
  `content1` text DEFAULT NULL COMMENT 'รายละเอียด',
  `content2` text DEFAULT NULL COMMENT 'รายละเอียด',
  `banner1` text DEFAULT NULL COMMENT 'แบนเนอร์',
  `banner2` text DEFAULT NULL COMMENT 'แบนเนอร์',
  `content3` text DEFAULT NULL COMMENT 'รายละเอียด',
  `content4` text DEFAULT NULL COMMENT 'รายละเอียด',
  `status` char(11) DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fontendsafety_content`
--

INSERT INTO `fontendsafety_content` (`id`, `content1`, `content2`, `banner1`, `banner2`, `content3`, `content4`, `status`, `created_at`, `updated_at`) VALUES
(31, 'HACCP (HAZARD ANALYSIS AND CRITICAL CONTROL POINT)', '<h3>MEASURES</h3>\r\n\r\n<p>We&nbsp;adhere&nbsp;rigorously&nbsp;to&nbsp;HACCP&nbsp;hygiene&nbsp;management,&nbsp;strictly&nbsp;controlling&nbsp;every</p>\r\n\r\n<p>stage&nbsp;from&nbsp;menu&nbsp;development&nbsp;and&nbsp;procurement&nbsp;of&nbsp;ingredients&nbsp;through&nbsp;to</p>\r\n\r\n<p>cooking&nbsp;and&nbsp;supply.&nbsp;Our&nbsp;facilities&nbsp;are&nbsp;inspected&nbsp;by&nbsp;government&nbsp;and</p>\r\n\r\n<p>specialist&nbsp;agencies,&nbsp;as&nbsp;well&nbsp;as&nbsp;undergoing&nbsp;our&nbsp;own&nbsp;internal&nbsp;checkups</p>\r\n\r\n<p>and&nbsp;frequent&nbsp;upgrades.&nbsp;Our&nbsp;production&nbsp;plants&nbsp;are&nbsp;custom-designed&nbsp;to</p>\r\n\r\n<p>meet&nbsp;global&nbsp;standards&nbsp;for&nbsp;inflight&nbsp;meal&nbsp;production.<br />\r\n<br />\r\nWe&nbsp;at&nbsp;BAC&nbsp;also&nbsp;have&nbsp;our&nbsp;own&nbsp;laboratories,&nbsp;where&nbsp;expert&nbsp;inspectors&nbsp;perform</p>\r\n\r\n<p>microbiological&nbsp;examination&nbsp;of&nbsp;products,&nbsp;ingredients&nbsp;and&nbsp;equipment.&nbsp;Feedback</p>\r\n\r\n<p>and&nbsp;data&nbsp;from&nbsp;these&nbsp;tests&nbsp;are&nbsp;used&nbsp;in&nbsp;menu&nbsp;development,&nbsp;the&nbsp;selection&nbsp;of</p>\r\n\r\n<p>ingredients&nbsp;and&nbsp;on-site&nbsp;work&nbsp;procedures,&nbsp;further&nbsp;contributing&nbsp;to&nbsp;improvement.</p>\r\n\r\n<p>All&nbsp;our&nbsp;employees&nbsp;are&nbsp;fully&nbsp;trained&nbsp;to&nbsp;comply&nbsp;with&nbsp;hygiene&nbsp;rules&nbsp;and&nbsp;standards,</p>\r\n\r\n<p>and&nbsp;hygiene&nbsp;has&nbsp;a&nbsp;prominent&nbsp;place&nbsp;in&nbsp;our&nbsp;staff&nbsp;development&nbsp;program.</p>', '23122019065321Pss.png', '23122019065322Pss.png', 'SAFETY', '<h3>MEASURES</h3>\r\n\r\n<p>Safety&nbsp;has&nbsp;the&nbsp;highest&nbsp;priority&nbsp;in&nbsp;BAC&rsquo;s&nbsp;procedures&nbsp;for&nbsp;driving,&nbsp;operating</p>\r\n\r\n<p>and&nbsp;loading&nbsp;catering&nbsp;trucks.&nbsp;Our&nbsp;operators&nbsp;undergo&nbsp;three&nbsp;months</p>\r\n\r\n<p>of&nbsp;one-to-one&nbsp;training,&nbsp;followed&nbsp;by&nbsp;a&nbsp;rigorous&nbsp;succession&nbsp;of&nbsp;in-house&nbsp;tests.</p>\r\n\r\n<p>Other&nbsp;measures&nbsp;are&nbsp;incorporated&nbsp;into&nbsp;our&nbsp;daily&nbsp;routines,&nbsp;including&nbsp;safety&nbsp;patrols,</p>\r\n\r\n<p>incident&nbsp;drills&nbsp;and&nbsp;risk&nbsp;assessment&nbsp;education.&nbsp;We&nbsp;believe&nbsp;this&nbsp;standard&nbsp;of&nbsp;vigilance</p>\r\n\r\n<p>is&nbsp;as&nbsp;vital&nbsp;as&nbsp;any&nbsp;other&nbsp;feature&nbsp;in&nbsp;the&nbsp;production&nbsp;and&nbsp;supply&nbsp;of&nbsp;world-beating&nbsp;inflight&nbsp;meals.</p>', 'Y', '2019-12-22 23:53:22', '2019-12-22 23:53:22');

-- --------------------------------------------------------

--
-- Table structure for table `fontindex_banner`
--

CREATE TABLE `fontindex_banner` (
  `id` int(11) NOT NULL,
  `banner` text DEFAULT NULL COMMENT 'แบนเนอร์',
  `contact` text DEFAULT NULL COMMENT 'รายละเอียด',
  `contact2` text DEFAULT NULL COMMENT 'รายละเอียด',
  `status` char(11) DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fontindex_banner`
--

INSERT INTO `fontindex_banner` (`id`, `banner`, `contact`, `contact2`, `status`, `created_at`, `updated_at`) VALUES
(10, '13122019072700Pss.png', 'YOUR CATERING PARTNER', '<p><sub>at&nbsp;Thailand&rsquo;s&nbsp;international&nbsp;airports&nbsp;</sub></p>', 'Y', '2019-12-13 00:27:01', '2019-12-17 00:37:57'),
(11, '13122019072753Pss.png', 'FRESH FROM THE KITCHEN', '', 'Y', '2019-12-13 00:27:55', '2019-12-13 00:27:55'),
(12, '13122019072821Pss.png', 'AUTHENTIC FOOD ON BOARD', '', 'Y', '2019-12-13 00:28:23', '2019-12-13 00:28:23'),
(13, '13122019072843Pss.png', 'IN QUALITY WE CARE', '', 'Y', '2019-12-13 00:28:45', '2019-12-13 00:28:45'),
(14, '13122019072905Pss.png', '“PUNCTUALITY COMES FIRST”', '', 'Y', '2019-12-13 00:29:07', '2019-12-13 00:29:07'),
(15, '13122019072935Pss.png', 'WE DELIVER OUR COMMITMENT', '', 'Y', '2019-12-13 00:29:37', '2019-12-13 00:29:37');

-- --------------------------------------------------------

--
-- Table structure for table `fontnews_inside_banner`
--

CREATE TABLE `fontnews_inside_banner` (
  `id` int(11) NOT NULL,
  `banner` text DEFAULT NULL COMMENT 'แบนเนอร์',
  `topic` text DEFAULT NULL COMMENT 'หัวข้อ',
  `status` char(11) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fontnews_inside_banner`
--

INSERT INTO `fontnews_inside_banner` (`id`, `banner`, `topic`, `status`, `created_at`, `updated_at`) VALUES
(1, '20012020071923Pss.png', 'BFS Cargo Organized a Charity “The Sixth Annual BFS Cargo Awards Gala Dinner', 'Y', '2020-01-20 00:19:24', '2020-01-20 00:19:24');

-- --------------------------------------------------------

--
-- Table structure for table `fontnews_inside_content`
--

CREATE TABLE `fontnews_inside_content` (
  `id` int(11) NOT NULL,
  `img` text DEFAULT NULL COMMENT 'รูปภาพ',
  `topic` text DEFAULT NULL COMMENT 'หัวข้อ',
  `content` text DEFAULT NULL COMMENT 'รายละเอียด',
  `status` char(11) NOT NULL DEFAULT 'Y',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fontnews_inside_content`
--

INSERT INTO `fontnews_inside_content` (`id`, `img`, `topic`, `content`, `status`, `created_at`, `updated_at`) VALUES
(1, '20012020080803Pss.png', 'BFS Cargo Orized a Charity “The Sixth Annual BFS Cargo Awards Gala Dinner', '<p>On&nbsp;Friday&nbsp;12&nbsp;February&nbsp;2016,&nbsp;Bangkok&nbsp;Flight&nbsp;Services&nbsp;(BFS)&nbsp;organized&nbsp;&ldquo;</p>\r\n\r\n<p>The&nbsp;Sixth&nbsp;Annual&nbsp;BFS&nbsp;Cargo&nbsp;Awards&nbsp;Gala&nbsp;Dinner&rdquo;&nbsp;at&nbsp;Bangkok&nbsp;Marriott&nbsp;Hotel&nbsp;Sukhumvit&nbsp;to&nbsp;present&nbsp;</p>\r\n\r\n<p>BFS&nbsp;Cargo&nbsp;and&nbsp;BFS&nbsp;Cargo&nbsp;Hall&nbsp;of&nbsp;Fame&nbsp;Awards&nbsp;to&nbsp;those&nbsp;who&nbsp;have&nbsp;greatly&nbsp;contributed&nbsp;to&nbsp;the&nbsp;Air</p>\r\n\r\n<p>&nbsp;Cargo&nbsp;industry,&nbsp;both&nbsp;locally&nbsp;and&nbsp;internationally.&nbsp;This&nbsp;event&nbsp;was&nbsp;also&nbsp;an&nbsp;opportunity&nbsp;to&nbsp;raise&nbsp;funds&nbsp;for&nbsp;the</p>\r\n\r\n<p>&nbsp;Foundation&nbsp;for&nbsp;Slum&nbsp;Child&nbsp;Care,&nbsp;under&nbsp;the&nbsp;Royal&nbsp;Patronage&nbsp;of&nbsp;H.R.H&nbsp;Princess&nbsp;Galyani&nbsp;Vadhana&nbsp;Krom</p>\r\n\r\n<p>&nbsp;Luang&nbsp;Naradhiwas&nbsp;Rajanagarindra&nbsp;(FSCC.</p>', 'Y', '2020-01-20 01:03:54', '2020-01-20 01:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_11_29_023531_create_permission_tables', 2);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2019-11-28 19:40:23', '2019-11-28 19:40:23'),
(2, 'member', 'web', '2019-11-28 19:40:28', '2019-11-28 19:40:28');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(10) UNSIGNED NOT NULL,
  `staff_username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staff_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'am', 'amsonesnsd@hotmail.com', NULL, '$2y$10$9jrqEECKuPxoh7nx4BdGC.cGGNUwlmOK6tEKz4wQZiJsyL7dKp4PG', 'L07xEms9hCkvED1OHGPu0LqtHvEA11DJvO2wursxuc9egD6xiy2cfzinkvh1', '2019-11-28 19:43:25', '2019-11-28 19:43:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fontendcontact_banner`
--
ALTER TABLE `fontendcontact_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fontendcontact_location`
--
ALTER TABLE `fontendcontact_location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fontendindex_content`
--
ALTER TABLE `fontendindex_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fontendindex_image`
--
ALTER TABLE `fontendindex_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fontendindex_news`
--
ALTER TABLE `fontendindex_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fontendindex_topic`
--
ALTER TABLE `fontendindex_topic`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fontendnews_banner`
--
ALTER TABLE `fontendnews_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fontendnews_pdf`
--
ALTER TABLE `fontendnews_pdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fontendsafety_banner`
--
ALTER TABLE `fontendsafety_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fontendsafety_content`
--
ALTER TABLE `fontendsafety_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fontindex_banner`
--
ALTER TABLE `fontindex_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fontnews_inside_banner`
--
ALTER TABLE `fontnews_inside_banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fontnews_inside_content`
--
ALTER TABLE `fontnews_inside_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fontendcontact_banner`
--
ALTER TABLE `fontendcontact_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fontendcontact_location`
--
ALTER TABLE `fontendcontact_location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `fontendindex_content`
--
ALTER TABLE `fontendindex_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `fontendindex_image`
--
ALTER TABLE `fontendindex_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fontendindex_news`
--
ALTER TABLE `fontendindex_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `fontendindex_topic`
--
ALTER TABLE `fontendindex_topic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `fontendnews_banner`
--
ALTER TABLE `fontendnews_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fontendnews_pdf`
--
ALTER TABLE `fontendnews_pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `fontendsafety_banner`
--
ALTER TABLE `fontendsafety_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `fontendsafety_content`
--
ALTER TABLE `fontendsafety_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `fontindex_banner`
--
ALTER TABLE `fontindex_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `fontnews_inside_banner`
--
ALTER TABLE `fontnews_inside_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fontnews_inside_content`
--
ALTER TABLE `fontnews_inside_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
