-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2012 at 04:39 PM
-- Server version: 5.1.54
-- PHP Version: 5.3.5-1ubuntu7.6

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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Dumping data for table `cmai_classes`
--

INSERT INTO `cmai_classes` (`class_id`, `day`, `field`, `time`, `name`) VALUES
(1, 'Monday', 'Eq. Field', '10:45a', 'Jousting 1: The Rider''s Seat - Luke Binks'),
(2, 'Monday', 'Eq. Field', '1:30p', 'Beginner Riding 1 - Tina Walsh'),
(3, 'Monday', 'Eq. Field', '3:15p', 'Jousting 2: Weapons Handling - Luke Binks'),
(4, 'Monday', 'Eq. Field', '5:00p', 'Mounted Combat 1: Rolling and Falling from Horseback - Theresa Wendland'),
(5, 'Tuesday', 'Eq. Field', '9:00a', 'Beginner Riding 2 - Tina Walsh'),
(6, 'Tuesday', 'Eq. Field', '10:45a', 'Jousting 3: Riding in Armour - Luke Binks'),
(7, 'Tuesday', 'Eq. Field', '1:30p', 'Beginner Riding 3 - Tina Walsh'),
(8, 'Tuesday', 'Eq. Field', '3:15p', 'Jousting 4: Weapons Handling in Armour - Luke Binks'),
(9, 'Tuesday', 'Eq. Field', '5:00p', 'Mounted Combat 2: Riding for Combat'),
(10, 'Wednesday', 'Eq. Field', '9:00a', 'Beginner Riding 4 - Tina Walsh'),
(11, 'Wednesday', 'Eq. Field', '10:45a', 'Jousting 5: The Joust'),
(12, 'Wednesday', 'Eq. Field', '1:30p', 'Lysts on the Lake Joust Practice 1a'),
(13, 'Wednesday', 'Eq. Field', '3:15p', 'Lysts on the Lake Joust Practice 1b'),
(14, 'Wednesday', 'Eq. Field', '5:00p', 'Mounted Combat 3: Introduction to Fiore''s Sword on Horseback -  Theresa Wendland'),
(15, 'Thursday', 'Eq. Field', '9:00a', 'Lysts on the Lake Joust Practice 2a'),
(16, 'Thursday', 'Eq. Field', '10:45a', 'Lysts on the Lake Joust Practice 2b'),
(17, 'Thursday', 'Eq. Field', '1:30p', 'Beginner Skill at Arms'),
(18, 'Thursday', 'Eq. Field', '3:15p', ''),
(19, 'Thursday', 'Eq. Field', '5:00p', 'Tirocinium'),
(20, 'Monday', 'Harness Focus Field ', '10:45a', 'Basic movement focus'),
(21, 'Monday', 'Harness Focus Field ', '1:30p', 'Body awareness, Sensitivity, Falling in armor, Wrestling'),
(22, 'Monday', 'Harness Focus Field ', '3:15p', ''),
(23, 'Monday', 'Harness Focus Field ', '5:00p', ''),
(24, 'Tuesday', 'Harness Focus Field ', '9:00a', 'Beginning Weapons Focus'),
(25, 'Tuesday', 'Harness Focus Field ', '10:45a', 'Dagger , Sword, Axe, and Spear'),
(26, 'Tuesday', 'Harness Focus Field ', '1:30p', 'Dagger , Sword, Axe, and Spear continued'),
(27, 'Tuesday', 'Harness Focus Field ', '3:15p', ''),
(28, 'Tuesday', 'Harness Focus Field ', '5:00p', ''),
(29, 'Wednesday', 'Harness Focus Field ', '9:00a', 'Coached Combat in Harness'),
(30, 'Wednesday', 'Harness Focus Field ', '10:45a', 'Coached Combat in Harness'),
(31, 'Wednesday', 'Harness Focus Field ', '1:30p', 'Coached Combat in Harness'),
(32, 'Wednesday', 'Harness Focus Field ', '3:15p', 'Coached Combat in Harness'),
(33, 'Wednesday', 'Harness Focus Field ', '5:00p', ''),
(34, 'Thursday', 'Harness Focus Field ', '9:00a', 'Harness repair'),
(35, 'Thursday', 'Harness Focus Field ', '10:45a', ''),
(36, 'Thursday', 'Harness Focus Field ', '1:30p', 'Discussion of Rules for Deed at Arms'),
(37, 'Thursday', 'Harness Focus Field ', '3:15p', ''),
(38, 'Thursday', 'Harness Focus Field ', '5:00p', ''),
(39, 'Monday', 'Foot Field 2', '10:45a', 'Great stick ---Ken Mondeshein'),
(40, 'Monday', 'Foot Field 2', '1:30p', 'Taking control of the dagger fight- Bob Charrette'),
(41, 'Monday', 'Foot Field 2', '3:15p', '"God, the Art, myself, and my sword": Fiore de Liberi''s Unarmoured Combat -- Sean Hayes'),
(42, 'Monday', 'Foot Field 2', '5:00p', ''),
(43, 'Tuesday', 'Foot Field 2', '9:00a', 'Selected sword techniques of Gladiatoria  I- Dierk Hagedorn'),
(44, 'Tuesday', 'Foot Field 2', '10:45a', 'Two-Ubiquitous Throws of Armizare-- Greg Mele'),
(45, 'Tuesday', 'Foot Field 2', '1:30p', 'Fundamentals of the system - footwork, guards, blows and parries. aka "Pollaxe for Dummies" -- Jason Smth'),
(46, 'Tuesday', 'Foot Field 2', '3:15p', 'Selected Mordschlag techniques of Gladiatoria II- Dierk Hagedorn'),
(47, 'Tuesday', 'Foot Field 2', '5:00p', ''),
(48, 'Wednesday', 'Foot Field 2', '9:00a', 'Hooks, disarms and binds: Intricacies of the Knightly swiss army knife -- Jason Smith'),
(49, 'Wednesday', 'Foot Field 2', '10:45a', ' Sword in Armour: Fighting at the Full Sword and the Half Sword-- Sean Hayes'),
(50, 'Wednesday', 'Foot Field 2', '1:30p', 'Selected dagger techniques of Gladiatoria III - Dierk Hagedorn'),
(51, 'Wednesday', 'Foot Field 2', '3:15p', 'The sinister pollaxe: Playing from the left in Le Jeu -- Jason Smith'),
(52, 'Wednesday', 'Foot Field 2', '5:00p', ''),
(53, 'Thursday', 'Foot Field 2', '9:00a', 'Selected sword techniques of Gladiatoria IV - Dierk Hagedorn'),
(54, 'Thursday', 'Foot Field 2', '10:45a', 'Train what you Fight: from Cutting Drill to Solo Form to Partnered Exercise --Greg Mele'),
(55, 'Thursday', 'Foot Field 2', '1:30p', ''),
(56, 'Thursday', 'Foot Field 2', '3:15p', ''),
(57, 'Thursday', 'Foot Field 2', '5:00p', ''),
(58, 'Monday', 'Classroom', '10:45a', 'Concepts of Modern Chivalry- Randall Parr'),
(59, 'Monday', 'Classroom', '1:30p', 'An Introduction to the International Jousting League - Fred Piraux'),
(60, 'Monday', 'Classroom', '3:15p', 'A Tour through Il Fior di Battaglia''s structure - Bob Charrette'),
(61, 'Monday', 'Classroom', '5:00p', ''),
(62, 'Tuesday', 'Classroom', '9:00a', 'How to Get Started in Competitive Jousting - Fred Piraux'),
(63, 'Tuesday', 'Classroom', '10:45a', 'Medieval Warhorse- Theresa Wendland'),
(64, 'Tuesday', 'Classroom', '1:30p', 'War, Tournament, Knighthood, and Society- Ken Mondeshien'),
(65, 'Tuesday', 'Classroom', '3:15p', 'Building from Interpretation to Curriculum - Sean Hayes'),
(66, 'Tuesday', 'Classroom', '5:00p', ''),
(67, 'Wednesday', 'Classroom', '9:00a', 'List Field Operation - Fred Piraux'),
(68, 'Wednesday', 'Classroom', '10:45a', 'Concepts of Modern Chivalry- Randall Parr'),
(69, 'Wednesday', 'Classroom', '1:30p', 'Historical European Martial Arts: A Historical Overview-Ken Mondeshien'),
(70, 'Wednesday', 'Classroom', '3:15p', 'The Condottiere- Greg Mele'),
(71, 'Wednesday', 'Classroom', '5:00p', ''),
(72, 'Thursday', 'Classroom', '9:00a', 'Concepts of Modern Chivalry- Randall Parr'),
(73, 'Thursday', 'Classroom', '10:45a', 'The Judicial Duel in Italy - Tom Leoni'),
(74, 'Thursday', 'Classroom', '1:30p', ''),
(75, 'Thursday', 'Classroom', '3:15p', ''),
(76, 'Thursday', 'Classroom', '5:00p', '');
