-- phpMyAdmin SQL Dump
-- version 3.3.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 20, 2012 at 08:39 PM
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=73 ;

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
(10, 'Wednesday', 'Eq. Field', '8:00p', 'Lysts on the Lake Joust Practice 1a'),
(11, 'Thursday', 'Eq. Field', '9:00a', 'Beginner Riding 4 - Tina Walsh'),
(12, 'Thursday', 'Eq. Field', '10:45a', 'Jousting 5: The Joust  - Luke Binks'),
(13, 'Thursday', 'Eq. Field', '1:30p', 'Lysts on the Lake Joust Practice 1b'),
(14, 'Thursday', 'Eq. Field', '3:15p', 'Lysts on the Lake Joust Practice 2a'),
(15, 'Thursday', 'Eq. Field', '5:00p', 'Mounted Combat 3: Introduction to Fiore''s Sword on Horseback -  Theresa Wendland'),
(16, 'Thursday', 'Eq. Field', '8:00p', 'Lysts on the Lake Joust Practice 2b'),
(17, 'Friday', 'Eq. Field', '9:00a', 'Beginner Skill at Arms'),
(18, 'Friday', 'Eq. Field', '10:30a', 'Tirocinium '),
(19, 'Tuesday', 'Harness Focus Field ', '10:45a', 'Basic movement focus'),
(20, 'Tuesday', 'Harness Focus Field ', '1:30p', 'Body awareness, Sensitivity, Falling in armor, Wrestling'),
(21, 'Tuesday', 'Harness Focus Field ', '3:15p', ''),
(22, 'Tuesday', 'Harness Focus Field ', '5:00p', ''),
(23, 'Wednesday', 'Harness Focus Field ', '9:00a', 'Beginning Weapons Focus'),
(24, 'Wednesday', 'Harness Focus Field ', '10:45a', 'Dagger , Sword, Axe, and Spear'),
(25, 'Wednesday', 'Harness Focus Field ', '1:30p', 'Dagger , Sword, Axe, and Spear continued'),
(26, 'Wednesday', 'Harness Focus Field ', '3:15p', 'Dagger , Sword, Axe, and Spear continued'),
(27, 'Wednesday', 'Harness Focus Field ', '5:00p', ''),
(28, 'Wednesday', 'Harness Focus Field ', '8:00p', ''),
(29, 'Thursday', 'Harness Focus Field ', '9:00a', 'Coached Combat in Harness'),
(30, 'Thursday', 'Harness Focus Field ', '10:45a', 'Coached Combat in Harness'),
(31, 'Thursday', 'Harness Focus Field ', '1:30p', 'Coached Combat in Harness'),
(32, 'Thursday', 'Harness Focus Field ', '3:15p', 'Coached Combat in Harness'),
(33, 'Thursday', 'Harness Focus Field ', '5:00p', ''),
(34, 'Thursday', 'Harness Focus Field ', '8:00p', ''),
(35, 'Friday', 'Harness Focus Field ', '9:00a', 'Discussion of Rules for Deed at Arms (move to another time)'),
(36, 'Friday', 'Harness Focus Field ', '10:30a', ''),
(37, 'Tuesday', 'Foot Field 2', '10:45a', 'Great stick ---Ken Mondeshein'),
(38, 'Tuesday', 'Foot Field 2', '1:30p', 'Taking control of the dagger fight- Bob Charrette'),
(39, 'Tuesday', 'Foot Field 2', '3:15p', '"God, the Art, myself, and my sword": Fiore de Liberi''s Unarmoured Combat -- Sean Hayes'),
(40, 'Tuesday', 'Foot Field 2', '5:00p', ''),
(41, 'Wednesday', 'Foot Field 2', '9:00a', 'Selected sword techniques of Gladiatoria  I- Dierk Hagedorn'),
(42, 'Wednesday', 'Foot Field 2', '10:45a', 'Two-Ubiquitous Throws of Armizare-- Greg Mele'),
(43, 'Wednesday', 'Foot Field 2', '1:30p', 'Fundamentals of the system - footwork, guards, blows and parries. aka "Pollaxe for Dummies" -- Jason Smth'),
(44, 'Wednesday', 'Foot Field 2', '3:15p', 'Selected Mordschlag techniques of Gladiatoria II- Dierk Hagedorn'),
(45, 'Wednesday', 'Foot Field 2', '5:00p', ''),
(46, 'Wednesday', 'Foot Field 2', '8:00p', ''),
(47, 'Thursday', 'Foot Field 2', '9:00a', 'Hooks, disarms and binds: Intricacies of the Knightly swiss army knife -- Jason Smith'),
(48, 'Thursday', 'Foot Field 2', '10:45a', 'Sword in Armour: Fighting at the Full Sword and the Half Sword-- Sean Hayes'),
(49, 'Thursday', 'Foot Field 2', '1:30p', 'Selected dagger techniques of Gladiatoria III - Dierk Hagedorn'),
(50, 'Thursday', 'Foot Field 2', '3:15p', 'The sinister pollaxe: Playing from the left in Le Jeu -- Jason Smith'),
(51, 'Thursday', 'Foot Field 2', '5:00p', ''),
(52, 'Thursday', 'Foot Field 2', '8:00p', ''),
(53, 'Friday', 'Foot Field 2', '9:00a', 'Selected sword techniques of Gladiatoria IV - Dierk Hagedorn'),
(54, 'Friday', 'Foot Field 2', '10:30a', 'Train what you Fight: from Cutting Drill to Solo Form to Partnered Exercise --Greg Mele'),
(55, 'Tuesday', 'Classroom', '10:45a', 'Concepts of Modern Chivalry- Randall Parr'),
(56, 'Tuesday', 'Classroom', '1:30p', 'An Introduction to the International Jousting League - Fred Piraux'),
(57, 'Tuesday', 'Classroom', '3:15p', 'A Tour through Il Fior di Battaglia''s structure - Bob Charrette'),
(58, 'Tuesday', 'Classroom', '5:00p', ''),
(59, 'Wednesday', 'Classroom', '9:00a', 'How to Get Started in Competitive Jousting - Fred Piraux'),
(60, 'Wednesday', 'Classroom', '10:45a', 'TBD- Tom Leoni'),
(61, 'Wednesday', 'Classroom', '1:30p', 'War, Tournament, Knighthood, and Society- Ken Mondeshien'),
(62, 'Wednesday', 'Classroom', '3:15p', 'Building from Interpretation to Curriculum - Sean Hayes'),
(63, 'Wednesday', 'Classroom', '5:00p', ''),
(64, 'Wednesday', 'Classroom', '8:00p', ''),
(65, 'Thursday', 'Classroom', '9:00a', 'List Field Operation - Fred Piraux'),
(66, 'Thursday', 'Classroom', '10:45a', 'Concepts of Modern Chivalry- Randall Parr'),
(67, 'Thursday', 'Classroom', '1:30p', 'Historical European Martial Arts: A Historical Overview-Ken Mondeshien'),
(68, 'Thursday', 'Classroom', '3:15p', 'The Condottiere- Greg Mele'),
(69, 'Thursday', 'Classroom', '5:00p', ''),
(70, 'Thursday', 'Classroom', '8:00p', ''),
(71, 'Friday', 'Classroom', '9:00a', 'Concepts of Modern Chivalry- Randall Parr'),
(72, 'Friday', 'Classroom', '10:30a', 'The Judicial Duel in Italy - Tom Leoni (move to another time)');
