-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 19, 2010 at 06:08 PM
-- Server version: 5.0.45
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `databaseku`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabelberita`
--

CREATE TABLE `tabelberita` (
  `beritaid` int(11) NOT NULL auto_increment,
  `judul` tinytext NOT NULL,
  `tanggal` date NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `pendahuluan` text NOT NULL,
  `lanjutan` text NOT NULL,
  PRIMARY KEY  (`beritaid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tabelberita`
--

INSERT INTO `tabelberita` (`beritaid`, `judul`, `tanggal`, `kategori`, `pendahuluan`, `lanjutan`) VALUES
(1, 'Dewan Penasihat Heran Ibas Bisa Jadi Pengurus Kadin', '2010-12-18', 'Ekonomi', 'Wakil Ketua Dewan Penasihat Kadin Indonesia Soy Martua Pardede heran anak bungsu Presiden SBY yaitu Edi Baskoro atau yang akrab disapa Ibas bisa masuk dalam struktur pengurus Kadin. Padahal Kadin itu wajib dari kalangan pengusaha.', 'Soy mengatakan, saat ini Kadin sangat kental dengan aroma politik ketimbang menaungi kepentingan semua pengusaha.\r\n<p>\r\n"Terus masuklah Ibas, apa urusannya Ibas. Kan setiap pengurus Kadin harus pengusaha. Saya tak tahu juga Ibas pengusaha apa," tukas Soy di Jakarta Media Center, Kebon Sirih, Jakarta, Sabtu (18/12/2010).\r\n<p>\r\nSeperti diketahui, Ketua Umum Kadin yang baru Suryo Bambang Sulisto memasukkan nama Ibas dalam kepengurusan Kadin periode 2010-2015. Suryo mengaku sudah mengambil sejumlah pertimbangan sebelum memasukkan nama Ibas ke dalam ''kabinet'' Kadin tersebut, terutama soal regenerasi.\r\n<p>\r\nIbas terpilih sebagai Wakil Ketua Umum Bidang Promosi Internasional, Pariwisata, Seni dan Budaya di kepengurusan Kadin 2010-2015.'),
(2, 'Suporter Diberi Kupon untuk Beli Tiket Besok ', '2010-12-18', 'Sepakbola', 'Panitia membuat sebuah kebijakan untuk menenangkan ribuan suporter yang ingin membeli tiket pertandingan Piala AFF hari ini. Mereka diberi kupon untuk prioritas pembelian esok hari.\r\n\r\nSetelah berjam-jam menunggu loket dibuka, dan sempat merusak atribut PSSI di kantornya, para suporter itu akhirnya digiring masuk ke dalam Stadion Gelora Bung Karno oleh pihak kepolisian sekitar jam 1 siang, Sabtu (18/12/2010).', 'Di dalam stadion mereka diberi pengumuman oleh petugas, bahwa panitia tetap tidak akan membuka loket penjualan tiket hari ini. Sebagai solusi, setiap orang yang datang hari ini akan diberi kupon.\r\n<p>\r\nKupon itu digunakan sebagai prioritas calon penonton yang ingin membeli tiket pada hari pertandingan besok. Loket penjualan hari Minggu akan dibuka mulai jam 9 pagi.\r\n<p>\r\nMenurut keterangan dari pihak panitia, tiket yang masih tersedia berjumlah enam ribu. Jumlah karcis yang dilepas untuk pertandingan adalah sekitar 70 ribu lembar.'),
(3, 'Jangan Takut untuk Donor Hati', '2010-12-18', 'Kesehatan', 'Masalah transplantasi hati di Indonesia ternyata tak hanya terbatas pada fasilitas dan keterampilan para dokter. Karena sedikitnya orang yang mau mendonorkan hatinya juga turut mempengaruhi.\r\n\r\nTransplantasi hati adalah suatu tindakan operasi untuk mengganti hati yang rusak dengan hati yang sehat, baik hati yang berasal dari donor kadaver (mayat) maupun donor hidup (living donor).', '"Sepuluh tahun lalu pernah dicoba melakukan transplantasi hati, tapi tidak berhasil karena tidak ada yang mau menjadi donor. Karena itu kesulitannya pendonor dan teknologi," ujar dr Sastiono, SpB, SpBA dalam acara konferensi pers transplantasi hati FKUI-RSCM di Ruang Soekardjo Gedung A RSCM, Sabtu (18/12/2010).\r\n<p>\r\nPada awalnya transplantasi hati dengan menggunakan donor dari kadaver, tapi karena terjadi ketidakseimbangan antara donor kadaver dengan calon penerima donor sehingga dikembangkan teknik transplantasi hati dengan menggunakan donor hidup.');
