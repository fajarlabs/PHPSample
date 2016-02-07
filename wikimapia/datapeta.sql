-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2010 at 07:44 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `databaseku`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapeta`
--

CREATE TABLE `datapeta` (
  `nomor` int(5) NOT NULL auto_increment,
  `judul` varchar(100) NOT NULL,
  `deskripsi` tinytext NOT NULL,
  `lat1` double NOT NULL,
  `lng1` double NOT NULL,
  `lat2` double NOT NULL,
  `lng2` double NOT NULL,
  `warna` varchar(10) NOT NULL,
  PRIMARY KEY  (`nomor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `datapeta`
--

INSERT INTO `datapeta` (`nomor`, `judul`, `deskripsi`, `lat1`, `lng1`, `lat2`, `lng2`, `warna`) VALUES
(1, 'wilayah1', 'ini adalah wilayah1', -6.23728179931641, 106.332725524902, -6.24197483062744, 106.340789794922, '#FF0000'),
(2, 'wilayah2', 'Ini adalah wilayah 2', -6.22712850570679, 106.345596313477, -6.22038793563843, 106.353668212891, '#FF0000'),
(3, 'wilayah3', 'Ini adalah wilayah 3', -6.22243452072144, 106.31324005127, -6.23497724533081, 106.332298278809, '#0000FF'),
(5, 'wilayah4', 'ini adalah wilayah4', -6.23967002769392, 106.309807206177, -6.24547190674207, 106.322080994629, '#C0C0C0');
