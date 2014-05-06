-- phpMyAdmin SQL Dump
-- version 4.0.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 20, 2013 at 12:47 PM
-- Server version: 5.1.70-cll
-- PHP Version: 5.3.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lukehatf_p4_lukehatfield`
--

-- --------------------------------------------------------

--
-- Table structure for table `organization_equipments`
--

CREATE TABLE IF NOT EXISTS `organization_equipments` (
  `organization_equipment_id` int(11) NOT NULL AUTO_INCREMENT,
  `platoon` varchar(255) NOT NULL,
  `vehicle` varchar(255) NOT NULL,
  `equipment` varchar(255) NOT NULL,
  `sn` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `comment` varchar(255) NOT NULL,
  PRIMARY KEY (`organization_equipment_id`),
  KEY `organization_equipment_id` (`organization_equipment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=268 ;

--
-- Dumping data for table `organization_equipments`
--

INSERT INTO `organization_equipments` (`organization_equipment_id`, `platoon`, `vehicle`, `equipment`, `sn`, `status`, `comment`) VALUES
(21, '1st', 'B11', 'Radio A', '606964', 'g', 'Needs screen cover.'),
(22, '1st', 'B12', 'Radio A', '606971', 'a', 'No HUB battery box.'),
(24, '1st', 'B13', 'Radio A', '606972', 'g', ''),
(25, '2nd', 'B21', 'Radio A', '606973', 'a', ''),
(26, '2nd', 'B22', 'Radio A', '606974', 'a', ''),
(27, '2nd', 'B23', 'Radio A', '606975', 'r', 'FAIL SNAP'),
(28, '2nd', 'B24', 'Radio A', '606976', 'g', ''),
(29, '3rd', 'B31', 'Radio A', '606977', 'a', ''),
(30, '3rd', 'B32', 'Radio A', '606978', 'g', ''),
(31, '3rd', 'B33', 'Radio A', '606979', 'g', ''),
(32, '3rd', 'B34', 'Radio A', '606980', 'g', ''),
(33, '4th', 'B41', 'Radio A', '606981', 'g', ''),
(34, '4th', 'B42', 'Radio A', '606982', 'g', ''),
(35, '4th', 'B43', 'Radio A', '606983', 'g', ''),
(36, '4th', 'B44', 'Radio A', '606984', 'g', ''),
(65, 'Headquarters', 'B65', 'Radio A', '606985', 'a', ''),
(66, 'Headquarters', 'B66', 'Radio A', '606986', 'g', ''),
(77, 'Headquarters', 'B77', 'Radio A', '606987', 'a', ''),
(80, 'Headquarters', 'B8', 'Radio A', '606988', 'a', ''),
(82, '1st', 'B11', 'Radio B', '528316', 'a', 'Bad knob.'),
(83, '1st', 'B11', 'VAA', '528316', 'a', ''),
(84, '1st', 'B11', 'PA', '138316', 'g', ''),
(85, '1st', 'B11', 'EPLRS', '6541C', 'g', ''),
(86, '1st', 'B11', 'FBCB2', 'V4DU159801', 'a', 'Display broken.'),
(87, '1st', 'B11', 'DAGR', '202718', 'g', ''),
(88, '1st', 'B11', 'MBITR', '531853', 'g', ''),
(89, '1st', 'B11', 'VIS-3', 'n/a', 'g', ''),
(91, '1st', 'B11', 'Antennae', 'n/a', 'g', ''),
(93, '1st', 'B12', 'Radio B', '606990', 'a', 'Screen hard to read.'),
(94, '1st', 'B12', 'VAA', '528317', 'a', ''),
(95, '1st', 'B12', 'PA', '138317', 'g', ''),
(96, '1st', 'B12', 'EPLRS', '6542C', 'a', 'Low KAB battery.'),
(97, '1st', 'B12', 'FBCB2', 'V4DU159803', 'g', ''),
(98, '1st', 'B12', 'DAGR', '202701', 'g', ''),
(99, '1st', 'B12', 'MBITR', '531854', 'g', ''),
(103, '1st', 'B12', 'VIS-3', 'n/a', 'g', ''),
(104, '1st', 'B12', 'Antennae', 'n/a', 'g', ''),
(105, '1st', 'B13', 'Radio B', '606991', 'g', ''),
(106, '1st', 'B13', 'VAA', '528318', 'g', ''),
(107, '1st', 'B13', 'PA', '138318', 'a', ''),
(108, '1st', 'B13', 'EPLRS', '6543C', 'g', 'Low KAB.'),
(109, '1st', 'B13', 'FBCB2', 'V4DU159804', 'g', ''),
(110, '1st', 'B13', 'DAGR', '202702', 'g', ''),
(111, '1st', 'B13', 'MBITR', '531855', 'g', ''),
(112, '1st', 'B13', 'VIS-3', 'n/a', 'g', ''),
(113, '1st', 'B13', 'Antennae', 'n/a', 'g', ''),
(114, '1st', 'B14', 'Radio A', '606992', 'g', ''),
(115, '1st', 'B14', 'Radio B', '606993', 'g', ''),
(116, '1st', 'B14', 'VAA', '528319', 'g', ''),
(117, '1st', 'B14', 'PA', '138319', 'g', ''),
(118, '1st', 'B14', 'EPLRS', '6544C', 'g', ''),
(119, '1st', 'B14', 'FBCB2', 'V4DU159805', 'g', ''),
(120, '1st', 'B14', 'DAGR', '202703', 'g', ''),
(121, '1st', 'B14', 'MBITR', '531856', 'g', ''),
(122, '1st', 'B14', 'VIS-3', 'n/a', 'g', ''),
(123, '1st', 'B14', 'Antennae', 'n/a', 'g', ''),
(124, '2nd', 'B21', 'Radio B', '606994', 'g', ''),
(125, '2nd', 'B21', 'VAA', '528320', 'g', ''),
(126, '2nd', 'B21', 'PA', '138320', 'g', ''),
(127, '2nd', 'B21', 'EPLRS', '6545C', 'g', ''),
(128, '2nd', 'B21', 'FBCB2', 'V4DU159806', 'g', ''),
(129, '2nd', 'B21', 'DAGR', '202704', 'g', ''),
(130, '2nd', 'B21', 'MBITR', '531857', 'g', ''),
(131, '2nd', 'B21', 'VIS-3', 'n/a', 'g', ''),
(132, '2nd', 'B21', 'Antennae', 'n/a', 'g', ''),
(133, '2nd', 'B22', 'Radio B', '606995', 'g', ''),
(134, '2nd', 'B22', 'VAA', '528321', 'g', ''),
(135, '2nd', 'B22', 'PA', '138321', 'g', ''),
(136, '2nd', 'B22', 'EPLRS', '6546D', 'g', ''),
(137, '2nd', 'B22', 'FBCB2', 'V4DU159807', 'g', ''),
(138, '2nd', 'B22', 'DAGR', '202705', 'g', ''),
(139, '2nd', 'B22', 'MBITR', '531858', 'g', ''),
(140, '2nd', 'B22', 'VIS-3', 'n/a', 'g', ''),
(141, '2nd', 'B22', 'Antennae', 'n/a', 'g', ''),
(142, '2nd', 'B23', 'Radio B', '606996', 'g', ''),
(143, '2nd', 'B23', 'VAA', '528322', 'g', ''),
(144, '2nd', 'B23', 'PA', '138322', 'g', ''),
(145, '2nd', 'B23', 'EPLRS', '6547C', 'g', ''),
(146, '2nd', 'B23', 'FBCB2', 'V4DU159808', 'a', ''),
(147, '2nd', 'B23', 'DAGR', '202706', 'g', ''),
(148, '2nd', 'B23', 'MBITR', '531859', 'g', ''),
(149, '2nd', 'B23', 'VIS-3', 'n/a', 'g', ''),
(150, '2nd', 'B23', 'Antennae', 'n/a', 'g', ''),
(151, '2nd', 'B24', 'Radio B', '606997', 'g', ''),
(152, '2nd', 'B24', 'VAA', '528323', 'g', ''),
(153, '2nd', 'B24', 'PA', '138323', 'g', ''),
(154, '2nd', 'B24', 'EPLRS', '6548C', 'g', ''),
(155, '2nd', 'B24', 'FBCB2', 'V4DU159809', 'g', ''),
(156, '2nd', 'B24', 'DAGR', '202707', 'g', ''),
(157, '2nd', 'B24', 'MBITR', '531860', 'g', ''),
(158, '2nd', 'B24', 'VIS-3', 'n/a', 'g', ''),
(159, '2nd', 'B24', 'Antennae', 'n/a', 'g', ''),
(160, '3rd', 'B31', 'Radio B', '606998', 'g', 'Missing screen cover.'),
(161, '3rd', 'B31', 'VAA', '528324', 'g', ''),
(162, '3rd', 'B31', 'PA', '138324', 'g', ''),
(163, '3rd', 'B31', 'EPLRS', '6549C', 'g', ''),
(164, '3rd', 'B31', 'FBCB2', 'V4DU159810', 'g', ''),
(165, '3rd', 'B31', 'DAGR', '202708', 'g', ''),
(166, '3rd', 'B31', 'MBITR', '531861', 'g', ''),
(167, '3rd', 'B31', 'VIS-3', 'n/a', 'g', ''),
(168, '3rd', 'B31', 'Antennae', 'n/a', 'g', ''),
(169, '3rd', 'B32', 'Radio B', '606999', 'g', ''),
(170, '3rd', 'B32', 'VAA', '528325', 'g', ''),
(171, '3rd', 'B32', 'PA', '138325', 'g', ''),
(172, '3rd', 'B32', 'EPLRS', '6550C', 'g', ''),
(173, '3rd', 'B32', 'FBCB2', 'V4DU159811', 'g', ''),
(174, '3rd', 'B32', 'DAGR', '202709', 'g', ''),
(175, '3rd', 'B32', 'MBITR', '531862', 'g', ''),
(176, '3rd', 'B32', 'VIS-3', 'n/a', 'g', ''),
(177, '3rd', 'B32', 'Antennae', 'n/a', 'g', ''),
(178, '3rd', 'B33', 'Radio B', '607000', 'g', ''),
(179, '3rd', 'B33', 'VAA', '528326', 'g', ''),
(180, '3rd', 'B33', 'PA', '138326', 'g', ''),
(181, '3rd', 'B33', 'EPLRS', '6551C', 'g', ''),
(182, '3rd', 'B33', 'FBCB2', 'V4DU159812', 'g', ''),
(183, '3rd', 'B33', 'DAGR', '202710', 'g', ''),
(184, '3rd', 'B33', 'MBITR', '531863', 'g', ''),
(185, '3rd', 'B33', 'VIS-3', 'n/a', 'g', ''),
(186, '3rd', 'B33', 'Antennae', 'n/a', 'g', ''),
(187, '3rd', 'B34', 'Radio B', '606001', 'g', ''),
(188, '3rd', 'B34', 'VAA', '528327', 'g', ''),
(189, '3rd', 'B34', 'PA', '138327', 'g', ''),
(190, '3rd', 'B34', 'EPLRS', '6552C', 'g', ''),
(191, '3rd', 'B34', 'FBCB2', 'V4DU159813', 'g', ''),
(192, '3rd', 'B34', 'DAGR', '202711', 'g', ''),
(193, '3rd', 'B34', 'MBITR', '531864', 'g', ''),
(194, '3rd', 'B34', 'VIS-3', 'n/a', 'g', ''),
(195, '3rd', 'B34', 'Antennae', 'n/a', 'g', ''),
(196, '4th', 'B41', 'Radio B', '606002', 'g', ''),
(197, '4th', 'B41', 'VAA', '528328', 'g', ''),
(198, '4th', 'B41', 'PA', '138328', 'g', ''),
(199, '4th', 'B41', 'EPLRS', '6553C', 'g', ''),
(200, '4th', 'B41', 'FBCB2', 'V4DU159814', 'g', ''),
(201, '4th', 'B41', 'DAGR', '202712', 'g', ''),
(202, '4th', 'B41', 'MBITR', '531865', 'g', ''),
(203, '4th', 'B41', 'VIS-3', 'n/a', 'g', ''),
(204, '4th', 'B41', 'Antennae', 'n/a', 'g', ''),
(205, '4th', 'B42', 'Radio B', '606003', 'g', ''),
(206, '4th', 'B42', 'VAA', '528329', 'g', ''),
(207, '4th', 'B42', 'PA', '138329', 'g', ''),
(208, '4th', 'B42', 'EPLRS', '6554C', 'g', ''),
(209, '4th', 'B42', 'FBCB2', 'V4DU159815', 'g', ''),
(210, '4th', 'B42', 'DAGR', '202713', 'g', ''),
(211, '4th', 'B42', 'MBITR', '531866', 'g', ''),
(212, '4th', 'B42', 'VIS-3', 'n/a', 'g', ''),
(213, '4th', 'B42', 'Antennae', 'n/a', 'g', ''),
(214, '4th', 'B43', 'Radio B', '606004', 'g', ''),
(215, '4th', 'B43', 'VAA', '528330', 'g', ''),
(216, '4th', 'B43', 'PA', '138330', 'g', ''),
(217, '4th', 'B43', 'EPLRS', '6555C', 'g', ''),
(218, '4th', 'B43', 'FBCB2', 'V4DU159816', 'g', ''),
(219, '4th', 'B43', 'DAGR', '202714', 'g', ''),
(220, '4th', 'B43', 'MBITR', '531867', 'g', ''),
(221, '4th', 'B43', 'VIS-3', 'n/a', 'g', ''),
(222, '4th', 'B43', 'Antennae', 'n/a', 'g', ''),
(223, '4th', 'B44', 'Radio B', '606005', 'g', ''),
(224, '4th', 'B44', 'VAA', '528331', 'g', ''),
(225, '4th', 'B44', 'PA', '138331', 'g', ''),
(226, '4th', 'B44', 'EPLRS', '6556C', 'g', ''),
(227, '4th', 'B44', 'FBCB2', 'V4DU159817', 'g', ''),
(228, '4th', 'B44', 'DAGR', '202715', 'g', ''),
(229, '4th', 'B44', 'MBITR', '531868', 'g', ''),
(230, '4th', 'B44', 'VIS-3', 'n/a', 'g', ''),
(231, '4th', 'B44', 'Antennae', 'n/a', 'g', ''),
(232, 'Headquarters', 'B65', 'Radio B', '606006', 'g', ''),
(233, 'Headquarters', 'B65', 'VAA', '528332', 'g', ''),
(234, 'Headquarters', 'B65', 'PA', '138332', 'g', ''),
(235, 'Headquarters', 'B65', 'EPLRS', '6557C', 'g', ''),
(236, 'Headquarters', 'B65', 'FBCB2', 'V4DU159818', 'g', ''),
(237, 'Headquarters', 'B65', 'DAGR', '202716', 'g', ''),
(238, 'Headquarters', 'B65', 'MBITR', '531869', 'g', ''),
(239, 'Headquarters', 'B65', 'VIS-3', 'n/a', 'g', ''),
(240, 'Headquarters', 'B65', 'Antennae', 'n/a', 'g', ''),
(241, 'Headquarters', 'B66', 'Radio B', '606007', 'g', ''),
(242, 'Headquarters', 'B66', 'VAA', '528333', 'g', ''),
(243, 'Headquarters', 'B66', 'PA', '138333', 'g', ''),
(244, 'Headquarters', 'B66', 'EPLRS', '6558C', 'g', ''),
(245, 'Headquarters', 'B66', 'FBCB2', 'V4DU159819', 'g', ''),
(246, 'Headquarters', 'B66', 'DAGR', '202717', 'g', ''),
(247, 'Headquarters', 'B66', 'MBITR', '531870', 'g', ''),
(248, 'Headquarters', 'B66', 'VIS-3', 'n/a', 'g', ''),
(249, 'Headquarters', 'B66', 'Antennae', 'n/a', 'g', ''),
(250, 'Headquarters', 'B77', 'Radio B', '606008', 'g', ''),
(251, 'Headquarters', 'B77', 'VAA', '528334', 'g', ''),
(252, 'Headquarters', 'B77', 'PA', '138334', 'g', ''),
(253, 'Headquarters', 'B77', 'EPLRS', '6559C', 'g', ''),
(254, 'Headquarters', 'B77', 'FBCB2', 'V4DU159820', 'g', ''),
(255, 'Headquarters', 'B77', 'DAGR', '202718', 'g', ''),
(256, 'Headquarters', 'B77', 'MBITR', '531851', 'g', ''),
(257, 'Headquarters', 'B77', 'VIS-3', 'n/a', 'g', ''),
(258, 'Headquarters', 'B77', 'Antennae', 'n/a', 'g', ''),
(259, 'Headquarters', 'B8', 'Radio B', '606009', 'g', ''),
(260, 'Headquarters', 'B8', 'VAA', '528315', 'g', ''),
(261, 'Headquarters', 'B8', 'PA', '138315', 'g', ''),
(262, 'Headquarters', 'B8', 'EPLRS', '6540C', 'g', ''),
(263, 'Headquarters', 'B8', 'FBCB2', 'V4DU159802', 'g', ''),
(264, 'Headquarters', 'B8', 'DAGR', '202699', 'g', ''),
(265, 'Headquarters', 'B8', 'MBITR', '531852', 'g', ''),
(266, 'Headquarters', 'B8', 'VIS-3', 'n/a', 'g', ''),
(267, 'Headquarters', 'B8', 'Antennae', 'n/a', 'g', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `last_login` int(11) NOT NULL,
  `timezone` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `users`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
