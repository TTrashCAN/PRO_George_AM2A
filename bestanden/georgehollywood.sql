-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Gegenereerd op: 11 mei 2021 om 06:16
-- Serverversie: 5.7.31
-- PHP-versie: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `georgehollywood`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestellingen`
--

DROP TABLE IF EXISTS `bestellingen`;
CREATE TABLE IF NOT EXISTS `bestellingen` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `price` decimal(5,2) NOT NULL,
  `street` varchar(50) NOT NULL,
  `number` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `bestellingen`
--

INSERT INTO `bestellingen` (`id`, `name`, `quantity`, `price`, `street`, `number`) VALUES
(6, 'Gebakken tong', 1, '18.25', 'Brugakker', 14);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bookings`
--

DROP TABLE IF EXISTS `bookings`;
CREATE TABLE IF NOT EXISTS `bookings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `aantal` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `maaltijden`
--

DROP TABLE IF EXISTS `maaltijden`;
CREATE TABLE IF NOT EXISTS `maaltijden` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Categorie` varchar(50) NOT NULL,
  `Naam` varchar(40) NOT NULL,
  `Image` varchar(1000) NOT NULL,
  `Beschrijving` varchar(1000) NOT NULL,
  `Prijs` decimal(5,2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `maaltijden`
--

INSERT INTO `maaltijden` (`id`, `Categorie`, `Naam`, `Image`, `Beschrijving`, `Prijs`) VALUES
(1, 'Eggs & Sandwiches', 'Grilled Sandwich', 'https://i2.wp.com/simple-veganista.com/wp-content/uploads/2014/01/best-grilled-hummus-sandwich-8.jpg', 'Met humus, aubergine, tomaat & groene fijne kruiden dressing.', '10.15'),
(2, 'Eggs & Sandwiches', 'Steak Sandwich', 'https://i2.wp.com/simoneskitchen.nl/wp-content/uploads/2014/12/Steak-sandwich-2.jpg', 'Met knapperige salade, pittige mayonaise en rode ui.', '15.75'),
(3, 'Eggs & Sandwiches', 'Avocado Toast', 'https://www.thespruceeats.com/thmb/QsgTFlfvrXXtfcsOoQOcDT-bPwI=/960x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/Avocado-Toast-56a45bf33df78cf77282011e.jpg', 'Met feta, kruiden olie en granaatappel.', '12.25'),
(4, 'Fish', 'Kabeljauw filet', 'https://cdn.webshopapp.com/shops/110638/files/237713597/kabeljauwfilet-in-botersaus-gekookte-aardappelen-e.jpg', 'Met gegrilde kool en kruidendressing.', '19.50'),
(5, 'Fish', 'Gegrilde Octopus', 'https://emsrealfood.nl/wp-content/uploads/2016/07/img_0331-2_-717x478.jpg.webp', 'Met aardappel, rode paprika, tomaat en limoen dressing.', '14.75'),
(6, 'Fish', 'Gebakken tong', 'https://favorflav.com/images/gebakken-tong-op-bord-e1589382438930-916x458.jpg', 'Met patat, citroen en fijne kruiden.', '18.25'),
(7, 'Salads', 'Hollywood Salad', 'https://bettyskitchen.nl/wp-content/uploads/2013/06/caprese-salade-1-001-650x385.jpg', 'Met Buffalo mozzarella, heirloom tomaat en basilicum.', '14.35'),
(8, 'Salads', 'Caeser salad kip', 'https://image.15gram.be/uploads/recipes/7842_caesar-salade-met-gegrilde-kip_1517933825-1920x1280.jpg', 'Met Parmezaanse kaas, ei en ansjovis.', '13.65'),
(9, 'Salads', 'Nicoise salad', 'https://cdn.loveandlemons.com/wp-content/uploads/2020/07/nicoise.jpg', 'Met verse tonijn en kruiden vinaigrette.', '14.20'),
(10, 'Sushi', 'Tonijn rol', 'https://www.thespruceeats.com/thmb/YWotj0CB3Vd40WyYhMvl_MvJuIs=/3595x2696/smart/filters:no_upscale()/tekkamaki-suchi-roll-recipe-2031512-hero-01-79731084409e4a54beb3a494afef1308.jpg', 'Met gesneden tonijn, tonijn tartaar, avocado en peper.', '17.50'),
(11, 'Sushi', 'Zalm vuur rol', 'https://i0.wp.com/kitchenista.nl/wp-content/uploads/2015/09/maki-zalm-avocado.jpg?resize=600%2C320&ssl=1', 'Met pittige zalm en wasabi.', '11.15'),
(12, 'Sushi', 'Hollywood rol', 'https://images.myhelcim.com/img/1/79144/HelcimCommerce-product361936-1588614853919.jpg', 'Met avocado, krab en ikura.', '10.50');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
