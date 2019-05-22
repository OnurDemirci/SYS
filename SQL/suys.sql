-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 22, 2019 at 04:03 PM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `suys`
--

-- --------------------------------------------------------

--
-- Table structure for table `mudurler`
--

DROP TABLE IF EXISTS `mudurler`;
CREATE TABLE IF NOT EXISTS `mudurler` (
  `calisan_id` int(3) NOT NULL AUTO_INCREMENT,
  `sube_id` int(3) NOT NULL,
  `adSoyad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `dTarih` date NOT NULL,
  `iTarih` date NOT NULL,
  `uyari` int(3) NOT NULL,
  `resimurl` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`calisan_id`),
  UNIQUE KEY `sube_id_2` (`sube_id`),
  KEY `sube_id` (`sube_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `mudurler`
--

INSERT INTO `mudurler` (`calisan_id`, `sube_id`, `adSoyad`, `dTarih`, `iTarih`, `uyari`, `resimurl`) VALUES
(1, 1, 'Remzi Akyıldız', '1985-07-23', '2015-08-20', 1, 'images/calisanlar/1.png'),
(2, 2, 'Ayhan Uyanık', '1985-02-18', '2016-05-08', 0, 'images/calisanlar/2.png'),
(3, 3, 'Nilay Uçar', '1986-03-21', '2015-09-18', 1, 'images/calisanlar/5.png'),
(4, 4, 'Basri Onay', '1978-02-27', '2016-04-12', 2, 'images/calisanlar/4.png'),
(5, 5, 'Egemen Sarıkaya', '1980-10-30', '2013-09-27', 1, 'images/calisanlar/3.png'),
(6, 6, 'Yasemin Bayar', '1990-05-01', '2014-12-09', 0, 'images/calisanlar/6.png');

-- --------------------------------------------------------

--
-- Table structure for table `subeler`
--

DROP TABLE IF EXISTS `subeler`;
CREATE TABLE IF NOT EXISTS `subeler` (
  `sube_id` int(3) NOT NULL AUTO_INCREMENT,
  `sube_ad` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `adres` varchar(150) COLLATE utf8_turkish_ci NOT NULL,
  `mkare` int(4) NOT NULL,
  `lat` float NOT NULL,
  `lng` float NOT NULL,
  PRIMARY KEY (`sube_id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `subeler`
--

INSERT INTO `subeler` (`sube_id`, `sube_ad`, `adres`, `mkare`, `lat`, `lng`) VALUES
(1, 'Şube 1', 'Emek Mahallesi, Şht. Asteğmen Mesut Uzlu Sk, 35510 Bayraklı/İzmir', 1000, 38.47, 27.12),
(2, 'Şube 2', 'Kazımdirik Mahallesi, 375. Sk. No:11 D:No:18, 35100 Bornova/İzmir', 1000, 38.45, 27.19),
(3, 'Şube 3', 'Çamkule Mahallesi, İzmir BB Çocuk Trafik Eğitim Parkı İçi Yolu, 35080 Bornova/İzmir', 1000, 38.42, 27.18),
(4, 'Şube 4', 'İzmir, Kültür Mahallesi, 35220 Konak/İzmir', 1000, 38.43, 27.14),
(5, 'Şube 5', 'Aksoy Mahallesi, 1759. Sk. 7-3, 35580 Karşıyaka/İzmir', 1000, 38.456, 27.11),
(6, 'Şube 6', 'Bahçelievler Mahallesi, 370. Sk. No:65, 35150 Karabağlar/İzmir', 1000, 38.4, 27.12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_turkish_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(1, 'serhat.sanli', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `veriler`
--

DROP TABLE IF EXISTS `veriler`;
CREATE TABLE IF NOT EXISTS `veriler` (
  `veri_id` int(11) NOT NULL AUTO_INCREMENT,
  `sube_id` int(3) NOT NULL,
  `ciro` int(11) NOT NULL,
  `musteri_sayisi` int(11) NOT NULL,
  `sikayet` int(11) NOT NULL,
  `israf` int(11) NOT NULL,
  `tarih` date NOT NULL,
  PRIMARY KEY (`veri_id`),
  KEY `sube_id` (`sube_id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci;

--
-- Dumping data for table `veriler`
--

INSERT INTO `veriler` (`veri_id`, `sube_id`, `ciro`, `musteri_sayisi`, `sikayet`, `israf`, `tarih`) VALUES
(1, 1, 1000000, 33000, 32, 15000, '2018-01-31'),
(2, 2, 1200000, 34000, 28, 12000, '2018-01-31'),
(3, 3, 1100000, 32500, 22, 13000, '2018-01-31'),
(4, 4, 900000, 31000, 30, 14000, '2018-01-31'),
(5, 5, 1050000, 31500, 30, 14000, '2018-01-31'),
(6, 6, 1000000, 33000, 32, 15000, '2018-01-31'),
(7, 1, 1100000, 34000, 28, 14500, '2018-02-28'),
(8, 2, 1100000, 32000, 30, 13500, '2018-02-28'),
(9, 3, 1200000, 33500, 21, 12000, '2018-02-28'),
(10, 4, 950000, 31500, 26, 13000, '2018-02-28'),
(11, 5, 1300000, 34000, 33, 11000, '2018-02-28'),
(12, 6, 900000, 29000, 34, 17000, '2018-02-28'),
(13, 1, 1300000, 36000, 25, 10000, '2018-03-31'),
(14, 2, 1300000, 35000, 26, 11000, '2018-03-31'),
(15, 3, 1250000, 35000, 21, 10000, '2018-03-31'),
(16, 4, 1350000, 33000, 22, 9000, '2018-03-31'),
(17, 5, 1100000, 33000, 36, 12000, '2018-03-31'),
(18, 6, 900000, 31000, 33, 16000, '2018-03-31'),
(19, 1, 1200000, 35000, 29, 11000, '2018-04-30'),
(20, 2, 1000000, 32000, 36, 14000, '2018-04-30'),
(21, 3, 1300000, 36000, 19, 9500, '2018-04-30'),
(22, 4, 1400000, 37000, 18, 7000, '2018-04-30'),
(23, 5, 1300000, 35500, 32, 9000, '2018-04-30'),
(24, 6, 1000000, 33500, 30, 15000, '2018-04-30'),
(25, 1, 1500000, 38000, 22, 9000, '2018-05-31'),
(26, 2, 800000, 28000, 40, 19000, '2018-05-31'),
(27, 3, 1350000, 37000, 19, 9000, '2018-05-31'),
(28, 4, 1450000, 37500, 16, 6500, '2018-05-31'),
(29, 5, 1250000, 34500, 33, 10000, '2018-05-31'),
(30, 6, 1100000, 33000, 28, 14500, '2018-05-31'),
(31, 1, 1400000, 37500, 24, 10000, '2018-06-30'),
(32, 2, 750000, 30000, 42, 17000, '2018-06-30'),
(33, 3, 1400000, 38000, 18, 8500, '2018-06-30'),
(34, 4, 1480000, 39000, 13, 6200, '2018-06-30'),
(35, 5, 1350000, 36000, 30, 8750, '2018-06-30'),
(36, 6, 1000000, 32000, 30, 14000, '2018-06-30');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mudurler`
--
ALTER TABLE `mudurler`
  ADD CONSTRAINT `mudurler_ibfk_1` FOREIGN KEY (`sube_id`) REFERENCES `subeler` (`sube_id`);

--
-- Constraints for table `veriler`
--
ALTER TABLE `veriler`
  ADD CONSTRAINT `veriler_ibfk_1` FOREIGN KEY (`sube_id`) REFERENCES `subeler` (`sube_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
