-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 22, 2012 at 07:33 PM
-- Server version: 5.1.54
-- PHP Version: 5.3.5-1ubuntu7.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `lysts_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmai_registrant`
--

CREATE TABLE IF NOT EXISTS `cmai_registrant` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `city` varchar(200) NOT NULL,
  `state` varchar(200) NOT NULL,
  `postal_code` varchar(12) NOT NULL,
  `country` varchar(3) NOT NULL,
  `address` varchar(300) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `how_heard` varchar(50) NOT NULL,
  `how_heard_text` varchar(300) NOT NULL,
  `experience` tinyint(4) DEFAULT NULL,
  `club_or_school` varchar(100) NOT NULL,
  `attended_other_wmas` tinyint(1) DEFAULT NULL,
  `other_wmas_attended` varchar(200) NOT NULL,
  `reasons_for_attending` varchar(500) NOT NULL,
  `medical_insurance` tinyint(1) NOT NULL,
  `limiting_conditions` tinyint(1) NOT NULL,
  `limiting_conditions_explanation` varchar(1000) NOT NULL,
  `participate_deed` tinyint(1) DEFAULT NULL,
  `tuesday_1045` int(11) NOT NULL,
  `tuesday_1330` int(11) NOT NULL,
  `tuesday_1515` int(11) NOT NULL,
  `tuesday_1700` int(11) NOT NULL,
  `wednesday_0900` int(11) NOT NULL,
  `wednesday_1045` int(11) NOT NULL,
  `wednesday_1330` int(11) NOT NULL,
  `wednesday_1515` int(11) NOT NULL,
  `wednesday_1700` int(11) NOT NULL,
  `thursday_0900` int(11) NOT NULL,
  `thursday_1045` int(11) NOT NULL,
  `thursday_1330` int(11) NOT NULL,
  `thursday_1515` int(11) NOT NULL,
  `thursday_1700` int(11) NOT NULL,
  `need_horse` tinyint(1) DEFAULT NULL,
  `meal_plan` tinyint(1) NOT NULL,
  `paypal_txn` varchar(264) DEFAULT NULL,
  `paid` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `cmai_registrant`
--

INSERT INTO `cmai_registrant` (`id`, `first_name`, `last_name`, `email`, `city`, `state`, `postal_code`, `country`, `address`, `phone_number`, `how_heard`, `how_heard_text`, `experience`, `club_or_school`, `attended_other_wmas`, `other_wmas_attended`, `reasons_for_attending`, `medical_insurance`, `limiting_conditions`, `limiting_conditions_explanation`, `participate_deed`, `tuesday_1045`, `tuesday_1330`, `tuesday_1515`, `tuesday_1700`, `wednesday_0900`, `wednesday_1045`, `wednesday_1330`, `wednesday_1515`, `wednesday_1700`, `thursday_0900`, `thursday_1045`, `thursday_1330`, `thursday_1515`, `thursday_1700`, `need_horse`, `meal_plan`, `paypal_txn`, `paid`) VALUES
(1, 'Ryan', 'Saathoff', 'fox@b.com', 'Cedar Park', 'TX', '78613', 'US', '651 Skyview Dr.', '512-981-5369', 'Friend', '', 3, 'Ryan Saathoff', 0, '', 'Instructors , Topic Areas Covered , Socialization/Camaraderie, Tournament/Competition, Possibility for free-play/sparring/fencing, Network Opportunities, ', 1, 0, '', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 26, 27, 14, 0, 0, NULL, 0);
