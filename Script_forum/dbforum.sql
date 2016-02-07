-- phpMyAdmin SQL Dump
-- version 3.1.3.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2011 at 07:15 PM
-- Server version: 5.1.33
-- PHP Version: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE IF NOT EXISTS `anggota` (
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `level` varchar(10) NOT NULL DEFAULT 'user',
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`username`, `password`, `nama_lengkap`, `email`, `level`) VALUES
('lukman', 'ea6b243106897f1a7515c56fa7b92afaf1f2b2b2', 'Lukmanul Hakim', 'algosigma@gmail.com', 'user'),
('rosihan', '38e83cbd8ca39250e748fe5c3c25d4b7fb83eb88', 'Rosihan Ari', 'rosihan@gmail.com', 'user'),
('husada', 'ed0a8a8fa75d3fdd9d7dc40eac07239be86154a6', 'Husada Latif', 'mazhusada@ymail.com', 'user'),
('aleezone', 'ad2d8fbf2b9d34ac7cbaa54051c7898a45ba4d38', 'Ali Marjan', 'aleezone@gmail.com', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(5) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `keterangan`) VALUES
(1, 'PHP', 'Tanya jawab, sharing pengalaman, artikel seputar bahasa pemrograman PHP '),
(2, 'PHP Framework', 'Diskusi seputar Framework berbasis PHP: Codeigniter, Zend, CakePHP, Symphony, dll'),
(3, 'Javascript Library', 'Diskusi seputar Javascript dan Librarynya: jQuery, YUI, ExtJs, Dojo, dll');

-- --------------------------------------------------------

--
-- Table structure for table `tanggapan`
--

CREATE TABLE IF NOT EXISTS `tanggapan` (
  `id_tanggapan` int(5) NOT NULL AUTO_INCREMENT,
  `id_topik` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `isi_tanggapan` text NOT NULL,
  `tgl_tanggapan` datetime NOT NULL,
  PRIMARY KEY (`id_tanggapan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `tanggapan`
--

INSERT INTO `tanggapan` (`id_tanggapan`, `id_topik`, `username`, `isi_tanggapan`, `tgl_tanggapan`) VALUES
(10, 9, 'lukman', 'Saya pengen belajar Framework berbasis PHP, cuman bingung milih Framework yang mana, kan ada CodeIgniter, CakePHP, Zend Framework, Symphony, mana ya yang paling bagus?', '2011-02-02 23:04:25'),
(9, 11, 'lukman', 'Bagaimana caranya agar script PHP yang kita buat ter-enkripsi, sehingga tidak bisa dibaca orang lain?', '2011-02-02 22:59:12'),
(11, 10, 'lukman', 'Saya coba jQuery di komputerku, tapi nggak bisa jalan, kenapa ya?', '2011-02-02 23:10:01'),
(12, 7, 'lukman', 'Saya sudah coba mengaktifkan modul mod_rewrite melalui file httpd.conf, tapi kok tetap nggak berfungsi ya?', '2011-02-02 23:11:47'),
(13, 11, 'rosihan', 'Kita bisa meng-enkripsi script PHP secara gratis melalui website, salah satunya ada di http://www.freephpencoder.com', '2011-02-03 00:26:49'),
(14, 11, 'rosihan', 'Ups sorry, ternyata website http://www.freephpencoder.com sudah tidak aktif lagi, tapi jangan khawatir masih ada yang lain kok, salah satunya Monas Encoder yang bisa didownload di http://ombudi.com', '2011-02-03 00:42:43'),
(15, 12, 'husada', 'Ada yang tau hosting gratisan untuk website berbasis PHP dan MySQL? ', '2011-02-06 01:48:03'),
(16, 12, 'aleezone', 'Ada banyak kok, di Googling aja, keywordnya free hosting php. Atau kalau mau baca sekalian dengan tutorialnya ada di website http://aleezone.co.cc/', '2011-02-06 10:13:55'),
(17, 12, 'lukman', 'Nambahin, bisa juga di http://byethost.com atau http://lokomedia.org', '2011-02-06 22:41:23');

-- --------------------------------------------------------

--
-- Table structure for table `topik`
--

CREATE TABLE IF NOT EXISTS `topik` (
  `id_topik` int(5) NOT NULL AUTO_INCREMENT,
  `id_kategori` int(5) NOT NULL,
  `username` varchar(100) NOT NULL,
  `subjek` varchar(200) NOT NULL,
  `tgl_topik` datetime NOT NULL,
  `dibaca` int(5) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id_topik`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `topik`
--

INSERT INTO `topik` (`id_topik`, `id_kategori`, `username`, `subjek`, `tgl_topik`, `dibaca`) VALUES
(9, 2, 'lukman', 'Apa Framework PHP yang bagus?', '2011-02-02 23:04:25', 1),
(11, 1, 'lukman', 'Enkripsi Script PHP', '2011-02-02 23:59:12', 67),
(10, 3, 'lukman', 'jQuery tidak berfungsi?', '2011-02-02 23:10:01', 1),
(7, 1, 'lukman', 'Modul mod_rewrite tidak bisa diaktifkan', '2011-02-02 22:11:47', 1),
(12, 1, 'husada', 'Hosting Gratis', '2011-02-06 01:48:03', 24);
