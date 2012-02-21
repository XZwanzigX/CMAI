-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 21, 2012 at 05:48 PM
-- Server version: 5.1.54
-- PHP Version: 5.3.5-1ubuntu7.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `lysts_dev`
--

-- --------------------------------------------------------

--
-- Table structure for table `cmai_classes`
--

CREATE TABLE IF NOT EXISTS `cmai_classes` (
  `class_id` int(11) NOT NULL AUTO_INCREMENT,
  `day` varchar(12) NOT NULL,
  `field` varchar(40) NOT NULL,
  `time` varchar(6) NOT NULL,
  `name` varchar(300) NOT NULL,
  PRIMARY KEY (`class_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=43 ;

--
-- Dumping data for table `cmai_classes`
--

INSERT INTO `cmai_classes` (`class_id`, `day`, `field`, `time`, `name`) VALUES
(1, 'Tuesday', 'Eq. Field', '10:45a', 'Jousting 1: The Rider''s Seat - Luke Binks'),
(2, 'Tuesday', 'Eq. Field', '1:30p', 'Beginner Riding 1 - Tina Walsh'),
(3, 'Tuesday', 'Eq. Field', '3:15p', 'Jousting 2: Weapons Handling - Luke Binks'),
(4, 'Tuesday', 'Eq. Field', '5:00p', 'Mounted Combat 1: Rolling and Falling from Horseback - Theresa Wendland'),
(5, 'Wednesday', 'Eq. Field', '9:00a', 'Beginner Riding 2 - Tina Walsh'),
(6, 'Wednesday', 'Eq. Field', '10:45a', 'Jousting 3: Riding in Armour - Luke Binks'),
(7, 'Wednesday', 'Eq. Field', '1:30p', 'Beginner Riding 3 - Tina Walsh'),
(8, 'Wednesday', 'Eq. Field', '3:15p', 'Jousting 4: Weapons Handling in Armour - Luke Binks'),
(9, 'Wednesday', 'Eq. Field', '5:00p', 'Mounted Combat 2: Riding for Combat - Theresa Wendland'),
(10, 'Thursday', 'Eq. Field', '9:00a', 'Beginner Riding 4 - Tina Walsh'),
(11, 'Thursday', 'Eq. Field', '10:45a', 'Jousting 5: The Joust  - Luke Binks'),
(12, 'Thursday', 'Eq. Field', '1:30p', 'Lysts on the Lake Joust Practice 1b'),
(13, 'Thursday', 'Eq. Field', '3:15p', 'Lysts on the Lake Joust Practice 2a'),
(14, 'Thursday', 'Eq. Field', '5:00p', 'Mounted Combat 3: Introduction to Fiore''s Sword on Horseback -  Theresa Wendland'),
(15, 'Tuesday', 'Foot Field', '10:45a', '"God, the Art, myself, and my sword": Fiore de Liberi''s Unarmoured Combat -- Sean Hayes'),
(16, 'Tuesday', 'Foot Field', '1:30p', 'Armored Combat 1: Basic movement in Harness, Body awareness, Sensitivity -  Scott Wilson,  Ken Mondeshien, Jason Smith               '),
(17, 'Tuesday', 'Foot Field', '3:15p', 'Fundamentals of the system - footwork, guards, blows and parries. aka "Pollaxe for Dummies" -- Jason Smth'),
(18, 'Tuesday', 'Foot Field', '5:00p', ''),
(19, 'Wednesday', 'Foot Field', '9:00a', 'Great Stick---Ken Mondeshein'),
(20, 'Wednesday', 'Foot Field', '10:45a', 'Armored Combat 2: Falling in armor, Wrestling- Scott Wilson, Sean Hayes, Jason Smith'),
(21, 'Wednesday', 'Foot Field', '1:30p', 'Hooks, disarms and binds: Intricacies of the Knightly Swiss Army Knife -- Jason Smith'),
(22, 'Wednesday', 'Foot Field', '3:15p', 'Armored Combat 3 - Weapons of Knightly combat --Scott Wilson, Jason Smith, Ken Mondeshien'),
(23, 'Wednesday', 'Foot Field', '5:00p', ''),
(24, 'Thursday', 'Foot Field ', '9:00a', 'The Dagger of Fiore - Scott Wilson'),
(25, 'Thursday', 'Foot Field ', '10:45a', ' Sword in Armour: Fighting at the Full Sword and the Half Sword-- Sean Hayes'),
(26, 'Thursday', 'Foot Field ', '1:30p', 'The sinister pollaxe: Playing from the left in Le Jeu -- Jason Smith'),
(27, 'Thursday', 'Foot Field ', '3:15p', 'Armored Combat 4 - Putting it all together- Sean Hayes, Scott Wilson, Jason Smith'),
(28, 'Thursday', 'Foot Field ', '5:00p', ''),
(29, 'Tuesday', 'Classroom', '10:45a', 'Concepts of Modern Chivalry- Randall Parr'),
(30, 'Tuesday', 'Classroom', '1:30p', 'An Introduction to the International Jousting League - Fred Piraux'),
(31, 'Tuesday', 'Classroom', '3:15p', 'TBD'),
(32, 'Tuesday', 'Classroom', '5:00p', ''),
(33, 'Wednesday', 'Classroom', '9:00a', 'How to Get Started in Competitive Jousting - Fred Piraux'),
(34, 'Wednesday', 'Classroom', '10:45a', 'The Judicial Duel in Italy - Tom Leoni'),
(35, 'Wednesday', 'Classroom', '1:30p', 'War, Tournament, Knighthood, and Society- Ken Mondeshien'),
(36, 'Wednesday', 'Classroom', '3:15p', 'Building from Interpretation to Curriculum - Sean Hayes'),
(37, 'Wednesday', 'Classroom', '5:00p', ''),
(38, 'Thursday', 'Classroom', '9:00a', 'List Field Operation - Fred Piraux'),
(39, 'Thursday', 'Classroom', '10:45a', 'Concepts of Modern Chivalry- Randall Parr'),
(40, 'Thursday', 'Classroom', '1:30p', 'Historical European Martial Arts: A Historical Overview-Ken Mondeshien'),
(41, 'Thursday', 'Classroom', '3:15p', 'TBD'),
(42, 'Thursday', 'Classroom', '5:00p', '');
