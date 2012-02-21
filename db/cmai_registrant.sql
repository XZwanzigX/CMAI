-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2012 at 05:47 PM
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
  `attended_other_wmas` tinyint(1) NOT NULL,
  `other_wmas_attended` varchar(200) NOT NULL,
  `reasons_for_attending` varchar(500) NOT NULL,
  `medical_insurance` tinyint(1) NOT NULL,
  `limiting_conditions` tinyint(1) NOT NULL,
  `limiting_conditions_explanation` varchar(1000) NOT NULL,
  `participate_deed` tinyint(1) NOT NULL,
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
  `need_horse` tinyint(1) NOT NULL,
  `meal_plan` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;
