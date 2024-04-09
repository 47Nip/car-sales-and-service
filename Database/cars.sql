-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2024 at 07:29 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cars`
--

-- --------------------------------------------------------

--
-- Table structure for table `audi`
--

CREATE TABLE `audi` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `car_link` varchar(150) NOT NULL,
  `test_drive` varchar(150) NOT NULL DEFAULT '../test_drivebook.php'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `audi`
--

INSERT INTO `audi` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, 'Q3', 'q3-right-front-three-quarter.jpg', 'Q3\\Q3.php', '../test_drivebook.php'),
(2, 'A4', 'a4-exterior-right-front-three-quarter-2.jpg', 'A4\\A4.php', '../test_drivebook.php'),
(3, 'Q3 Sportback', 'q3-sportback-right-front-three-quarter.jpg', 'Q3 Sportback\\Q3Sportback.php', '../test_drivebook.php'),
(4, 'A6', 'a6-exterior-right-front-three-quarter.jpg', 'A6\\A6.php', '../test_drivebook.php'),
(5, 'Q5', 'q5-facelift-right-front-three-quarter-2.jpg', 'Q5\\Q5.php', '../test_drivebook.php'),
(6, 'S5 Sportback', 's5-sportback-exterior-right-front-three-quarter-5.jpg', 'S5 Sportback\\S5Sportback.php', '../test_drivebook.php'),
(7, 'Q7', 'q7-right-front-three-quarter.jpg', 'Q7\\Q7.php', '../test_drivebook.php'),
(8, 'e-tron', 'e-tron-exterior-right-front-three-quarter-2.jpg', 'e-tron\\e-tron.php', '../test_drivebook.php'),
(9, 'Q8', 'audi-q8-front-view4.jpg', 'Q8\\Q8.php', '../test_drivebook.php'),
(10, 'RS5', 'rs5-exterior-right-front-three-quarter-2.jpg', 'RS5\\RS5.php', '../test_drivebook.php'),
(11, 'Q8 e-tron', 'q8-e-tron-right-front-three-quarter-2.jpg', 'Q8 e-tron\\Q8e-tron.php', '../test_drivebook.php'),
(12, 'Q8 Sportback e-tron', 'q8-e-tron-sportback-right-front-three-quarter.jpg', 'Q8 Sportback e-tron\\Q8Sportbacke-tron.php', '../test_drivebook.php'),
(13, 'e-tron Sportback', 'e-tron-sportback-exterior-right-front-three-quarter-2.jpg', 'e-tron Sportback\\e-tronSportback.php', '../test_drivebook.php'),
(14, 'A8 L', 'a8-l-2022-right-front-three-quarter-2.jpg', 'A8 L\\A8L.php', '../test_drivebook.php'),
(15, 'e-tron GT', 'e-tron-gt-exterior-right-front-three-quarter-2.jpg', 'e-tron GT\\e-tronGT.php', '../test_drivebook.php'),
(16, 'RS Q8', 'rs-q8-exterior-right-front-three-quarter-5.jpg', 'RS Q8\\RSQ8.php', '../test_drivebook.php');

-- --------------------------------------------------------

--
-- Table structure for table `bmw`
--

CREATE TABLE `bmw` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `car_link` varchar(150) NOT NULL,
  `test_drive` varchar(150) NOT NULL DEFAULT '../test_drivebook.php'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bmw`
--

INSERT INTO `bmw` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, '2 Series Gran Coupe', '2-series-gran-coupe-exterior-right-front-three-quarter.jpg', '2 Series Gran Coupe\\2SeriesGranCoupe.php', '../test_drivebook.php'),
(2, 'X1', 'new-x1-right-front-three-quarter-3.jpg', 'X1\\X1.php', '../test_drivebook.php'),
(3, '3 Series Gran Limousine', '3-series-gran-limousine-right-front-three-quarter.jpg', '3 Series Gran Limousine\\3SeriesGranLimousine.php', '../test_drivebook.php'),
(4, 'iX1', 'ix1-right-front-three-quarter-2.jpg', 'iX1\\iX1.php', '../test_drivebook.php'),
(5, 'X3', 'x3-right-front-three-quarter.jpg', 'X3\\X3.php', '../test_drivebook.php'),
(6, 'i4', 'i4-right-front-three-quarter.jpg', 'i4\\i4.php', '../test_drivebook.php'),
(7, 'M340i', 'm340i-right-front-three-quarter-2.jpg', 'M340i\\M340i.php', '../test_drivebook.php'),
(8, '6 Series GT', 'exterior-right-front-three-quarter.jpg', '6 Series GT\\6SeriesGT.php', '../test_drivebook.php'),
(9, 'X3 M40i', 'x3-m40i-right-front-three-quarter.jpg', 'X3 M40i\\X3M40i.php', '../test_drivebook.php'),
(10, 'Z4', 'z4-right-front-three-quarter-2.jpg', 'Z4\\Z4.php', '../test_drivebook.php'),
(11, 'X5', 'x5-facelift-right-front-three-quarter-2.jpg', 'X5\\X5.php', '../test_drivebook.php'),
(12, 'X4 M40i', 'x4-right-front-three-quarter.jpg', 'X4 M40i\\X4M40i.php', '../test_drivebook.php'),
(13, 'M2', 'm2-right-front-three-quarter.jpg', 'M2\\M2.php', '../test_drivebook.php'),
(14, 'iX', 'ix-right-front-three-quarter-2.jpg', 'iX\\iX.php', '../test_drivebook.php'),
(15, 'X7', 'x7-right-front-three-quarter.jpg', 'X7\\X7.php', '../test_drivebook.php'),
(16, 'M4 Competition', 'm4-competition-right-front-three-quarter.jpg', 'M4 Competition\\M4Competition.php', '../test_drivebook.php'),
(17, '7 Series', '7-series-right-front-three-quarter-2.jpg', '7 Series\\7Series.php', '../test_drivebook.php'),
(18, 'X5 M', 'x5-m-exterior-right-front-three-quarter.jpg', 'X5 M\\X5M.php', '../test_drivebook.php'),
(19, 'i7', 'i7-right-front-three-quarter-2.jpg', 'i7\\i7.php', '../test_drivebook.php'),
(20, 'M8', 'bmw-m8-right-front-three-quarter16.jpg', 'M8\\M8.php', '../test_drivebook.php'),
(21, 'XM', 'xm-right-front-three-quarter-2.jpg', 'XM\\XM..php', '../test_drivebook.php');

-- --------------------------------------------------------

--
-- Table structure for table `cars_inquary`
--

CREATE TABLE `cars_inquary` (
  `inquary_id` int(100) NOT NULL,
  `Customer Name` varchar(200) NOT NULL,
  `Customer Email Id` varchar(150) NOT NULL,
  `Car Model Name` varchar(200) NOT NULL,
  `Message` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cars_inquary`
--

INSERT INTO `cars_inquary` (`inquary_id`, `Customer Name`, `Customer Email Id`, `Car Model Name`, `Message`) VALUES
(1, 'Nip patel', 'nippatel38@gmail.com', '', 'what is EMI option for Audi.'),
(2, 'yagnesh', 'yagnesh@gmail.com', '', 'know about car service after buy.'),
(3, 'prince', 'prince@gmail.com', '', 'how many car services are free.'),
(4, 'samrth', 'samrth@gmail.com', '', 'price can be changes please reply.'),
(5, 'priyansh', 'priyansh@gmail.com', '', 'after purchase car how many days get delivery.');

-- --------------------------------------------------------

--
-- Table structure for table `car_company`
--

CREATE TABLE `car_company` (
  `car_company_id` int(100) NOT NULL,
  `cars_link` varchar(150) NOT NULL,
  `logo_img_url` varchar(200) NOT NULL,
  `comapny_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_company`
--

INSERT INTO `car_company` (`car_company_id`, `cars_link`, `logo_img_url`, `comapny_name`) VALUES
(1, 'Maruti_suzuki\\marutisuzuki.php', 'img/car1.png', 'Maruti Suzuki'),
(2, 'Hyundai/hyundai.php', 'img/car8.jpg', 'Hyundai'),
(3, 'Honda/honda.php', 'img/car3.jfif', 'Honda'),
(4, 'Tata/tata.php', 'img/car4.png', 'TATA'),
(5, 'Maserati\\maserati.php', 'img/maserati.jpg', 'MASERATI'),
(6, 'Skoda/skoda.php', 'img/car6.jfif', 'Skoda'),
(7, 'Mahindra/mahindra.php', 'img/car9.jpg', 'Mahendra'),
(8, 'Toyota/toyota.php', 'img/car10.jpg', 'Toyota'),
(9, 'Kia\\kia.php', 'img/car11.jpg', 'Kia'),
(10, 'Audi/Audi.php', 'img/car12.jpg', 'Audi'),
(11, 'Mercedes-benz/mercedes.php', 'img/car13.jpg', 'Mercedes'),
(12, 'BMW\\BMW.php', 'img/car14.jpg', 'BMW'),
(13, 'Renault\\renault.php', 'img/car15.jpg', 'Renault'),
(14, 'Nissan/nissan.php', 'img/car16.jpg', 'Nissan'),
(15, 'MG\\mg.php', 'img/car17.jpg', 'MG'),
(16, 'MINI\\mini.php', 'img\\mini.jpg', 'MINI'),
(17, 'Jeep\\jeep.php', 'img\\jeep.jpg', 'JEEP');

-- --------------------------------------------------------

--
-- Table structure for table `honda`
--

CREATE TABLE `honda` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `car_link` varchar(100) NOT NULL,
  `test_drive` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `honda`
--

INSERT INTO `honda` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, 'Amaze', 'amaze-facelift-exterior-right-front-three-quarter.jpg', 'Amaze\\Amaze.php', '../test_drivebook.php'),
(2, 'Elevate', 'elevate-right-front-three-quarter-4.jpg', 'Elevate\\Elevate.php', '../test_drivebook.php'),
(3, 'New City', 'new-city-right-front-three-quarter-2.jpg', 'New City\\NewCity.php', '../test_drivebook.php'),
(4, 'City Hybrid eHEV', 'city-hybrid-ehev-right-front-three-quarter.jpg', 'City Hybrid\\CityHybrid.php', '../test_drivebook.php');

-- --------------------------------------------------------

--
-- Table structure for table `hyundai`
--

CREATE TABLE `hyundai` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img_url` varchar(150) NOT NULL,
  `car_link` varchar(120) NOT NULL,
  `test_drive` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hyundai`
--

INSERT INTO `hyundai` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, 'Grand i10 Nios', 'grand-i10-nios-right-front-three-quarter-2.jpg', 'Grand i10 Nios\\Grandi10Nios.php', '../test_drivebook.php'),
(2, 'Exter', 'exter-right-front-three-quarter-2.jpg', 'Exter\\Exter.php', '../test_drivebook.php'),
(3, 'Aura', 'aura-2023-right-front-three-quarter.jpg', 'Aura\\Aura.php', '../test_drivebook.php'),
(4, 'i20', 'i20-facelift-right-front-three-quarter.jpg', 'i20\\i20.php', '../test_drivebook.php'),
(5, 'Venue', 'venue-right-front-three-quarter.jpg', 'Venue\\Venue.php', '../test_drivebook.php'),
(6, 'i20 N Line', 'i20-n-line-right-front-three-quarter.jpg', 'N Line\\NLine.php', '../test_drivebook.php'),
(7, 'Creta', 'creta-right-front-three-quarter.jpg', 'Creta\\Creta.php', '../test_drivebook.php'),
(8, 'Verna', 'new-verna-right-front-three-quarter.jpg', 'Verna\\Verna.php', '../test_drivebook.php'),
(9, 'Venue N Line', 'venue-n-line-right-front-three-quarter.jpg', 'Venue N Line\\VenueNLine.php', '../test_drivebook.php'),
(10, 'Alcazar', 'alcazar-right-front-three-quarter.jpg', 'Alcazar\\Alcazar.php', '../test_drivebook.php'),
(11, 'Kona Electric', 'Hyundai-Kona-Electric-Right-Front-Three-Quarter-162185.jpg', 'Kona Electric\\KonaElectric.php', '../test_drivebook.php'),
(12, 'Tucson', 'tucson-right-front-three-quarter.jpg', 'Tucson\\Tucson.php', '../test_drivebook.php'),
(13, 'ioniq-5', 'ioniq-5-right-front-three-quarter-3.jpg', 'ioniq-5\\ioniq5.php', '../test_drivebook.php');

-- --------------------------------------------------------

--
-- Table structure for table `jeep`
--

CREATE TABLE `jeep` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `car_link` varchar(200) NOT NULL,
  `test_drive` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `jeep`
--

INSERT INTO `jeep` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, 'Compass', 'compass-right-front-three-quarter-2.jpg', 'Compass\\Compass.php', '../test_drivebook.php'),
(2, 'Meridian', 'meridian-right-front-three-quarter-3.jpg', 'Meridian\\Meridian.php', '../test_drivebook.php'),
(3, 'Wrangler', '2021-wrangler-exterior-right-front-three-quarter.jpg', 'Wrangler\\Wrangler.php', '../test_drivebook.php'),
(4, 'Grand Cherokee', 'grand-cherokee-right-front-three-quarter.jpg', 'Grand Cherokee\\GrandCherokee.php', '../test_drivebook.php');

-- --------------------------------------------------------

--
-- Table structure for table `kia`
--

CREATE TABLE `kia` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `car_link` varchar(120) NOT NULL,
  `test_drive` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kia`
--

INSERT INTO `kia` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, 'Sonet', 'sonet-facelift-right-front-three-quarter-2.jpg', 'Sonet\\Sonet.php', '../test_drivebook.php'),
(2, 'Carens', 'carens-right-front-three-quarter.jpg', 'Carens\\Carens.php', '../test_drivebook.php'),
(3, 'Seltos', 'seltos-right-front-three-quarter-4.jpg', 'Seltos\\Seltos.php', '../test_drivebook.php'),
(4, 'EV6', 'ev6-right-front-three-quarter.jpg', 'EV6\\EV6.php', '../test_drivebook.php');

-- --------------------------------------------------------

--
-- Table structure for table `mahindra`
--

CREATE TABLE `mahindra` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `img_url` varchar(150) NOT NULL,
  `car_link` varchar(150) NOT NULL,
  `test_drive` varchar(120) NOT NULL DEFAULT '../test_drivebook.php'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mahindra`
--

INSERT INTO `mahindra` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, 'XUV300', 'xuv300-right-front-three-quarter.jpg', 'xuv300\\xuv300.php', '../test_drivebook.php'),
(2, 'XUV300 TurboSport', 'xuv300-turbosport-right-front-three-quarter-3.JPG', 'XUV300 TurboSport/XUV300TurboSport.php', '../test_drivebook.php'),
(3, 'Bolero', 'bolero-right-front-three-quarter.jpg', 'Bolero/Bolero.php', '../test_drivebook.php'),
(4, 'Bolero Neo', 'bolero-neo-right-front-three-quarter.jpg', 'Bolero Neo/BoleroNeo.php', '../test_drivebook.php'),
(5, 'Thar', 'thar-right-front-three-quarter-5.jpg', 'Thar/Thar.php', '../test_drivebook.php'),
(6, 'Scorpio', 'scorpio-classic-right-front-three-quarter-2.jpg', 'Scorpio/Scorpio.php', '../test_drivebook.php'),
(7, 'Scorpio N', 'scorpio-n-right-front-three-quarter-5.jpg', 'Scorpio N/ScorpioN.php', '../test_drivebook.php'),
(8, 'xuv700', 'xuv700-right-front-three-quarter.jpg', 'xuv700/xuv700.php', '../test_drivebook.php'),
(9, 'marazzo', 'marazzo-right-front-three-quarter-4.jpg', 'Marazzo/Marazzo.php', '../test_drivebook.php'),
(10, 'xuv400', 'xuv400-right-front-three-quarter-2.jpg', 'XUV400/XUV400.php', '../test_drivebook.php');

-- --------------------------------------------------------

--
-- Table structure for table `maruti_suzuki`
--

CREATE TABLE `maruti_suzuki` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img_url` varchar(250) NOT NULL,
  `car_link` varchar(120) NOT NULL,
  `test_drive` varchar(200) NOT NULL DEFAULT 'test_drivebook.php'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maruti_suzuki`
--

INSERT INTO `maruti_suzuki` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, 'Fronx', 'fronx.jpg', 'FRONX\\FRONX.php', '../test_drivebook.php'),
(2, 'Brezza', 'Brezza.jpg', 'Brezza\\Brezza.php', '../test_drivebook.php'),
(3, 'Swift', 'Swift.jpg', 'swift\\Swift.php', '../test_drivebook.php'),
(4, 'Ertiga', 'Ertiga.jpg', 'Ertiga\\Ertiga.php', '../test_drivebook.php'),
(5, 'Alto K10', 'Alto_K10.jpg', 'Altok10\\altok10.php', '../test_drivebook.php'),
(6, 'Wagon R', 'Wagon_R.jpg', 'WagonR\\WagonR.php', '../test_drivebook.php'),
(7, 'Suzuki Baleno', 'Suzuki_Baleno.jpg', 'SuzukiBaleno\\SuzukiBaleno.PHP', '../test_drivebook.php'),
(8, 'Dzire', 'Dzire.jpg', 'Dzire\\Dzire.php', '../test_drivebook.php'),
(9, 'Jimny', 'Jimny.jpg', 'Jimny\\Jimny.php', '../test_drivebook.php'),
(10, 'S-Presso', 'S_Presso.jpg', 'S-Presso\\S-Presso.php', '../test_drivebook.php');

-- --------------------------------------------------------

--
-- Table structure for table `maserati`
--

CREATE TABLE `maserati` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `car_link` varchar(150) NOT NULL,
  `test_drive` varchar(120) NOT NULL DEFAULT '../test_drivebook.php'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maserati`
--

INSERT INTO `maserati` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, 'Ghibli', 'ghibli-exterior-right-front-three-quarter.jpg', 'Ghibli/Ghibli.php', '../test_drivebook.php'),
(2, 'Levante', 'maserati-levante-right-front-three-quarter5.jpg', 'Levante/Levante.php', '../test_drivebook.php'),
(3, 'Quattroporte', 'Maserati-Quattroporte-Right-Front-Three-Quarter-149974.jpg', 'Quattroporte/Quattroporte.php', '../test_drivebook.php'),
(4, 'MC20', 'mc20-right-front-three-quarter.jpg', 'MC20/MC20.php', '../test_drivebook.php');

-- --------------------------------------------------------

--
-- Table structure for table `mercedes-benz`
--

CREATE TABLE `mercedes-benz` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `car_link` varchar(150) NOT NULL,
  `test_drive` varchar(120) NOT NULL DEFAULT '../test_drivebook.php'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mercedes-benz`
--

INSERT INTO `mercedes-benz` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, 'A-Class Limousine', 'a-class-limousine-right-front-three-quarter.jpg', 'A-Class Limousine/A-ClassLimousine.php', '../test_drivebook.php'),
(2, 'GLA', 'gla-facelift-right-front-three-quarter-2.jpg', 'GLA/GLA.php', '../test_drivebook.php'),
(3, 'C-Class', 'new-c-class-right-front-three-quarter-2.jpg', 'C-Class/C-Class.php', '../test_drivebook.php'),
(4, 'AMG A35', 'amg-a35-right-front-three-quarter-2.jpg', 'AMG A35/AMGA35.php', '../test_drivebook.php'),
(5, 'AMG GLA35', 'amg-gla35-exterior-right-front-three-quarter.jpg', 'GLA35/GLA35.php', '../test_drivebook.php'),
(6, 'GLB', 'glb-right-front-three-quarter-2.jpg', 'GLB/GLB.php', '../test_drivebook.php'),
(7, 'GLC Coupe', 'mercedesbenz-glc-coupe-right-front-three-quarter1.jpg', 'GLC Coupe/GLCCoupe.php', '../test_drivebook.php'),
(8, 'GLC', 'glc-right-front-three-quarter-2.jpg', 'GLC/GLC.php', '../test_drivebook.php'),
(9, 'EQB', 'right-front-three-quarter.jpg', 'EQB/EQB.php', '../test_drivebook.php'),
(10, 'E-Class', 'e-class-exterior-right-front-three-quarter.jpg', 'E-Class/E-Class.php', '../test_drivebook.php'),
(11, 'AMG GLC43 Coupe', 'amg-glc43-coupe-right-front-three-quarter.jpg', 'GLC43 Coupe/GLC43Coupe.php', '../test_drivebook.php'),
(12, 'AMG A45 S', 'amg-a45-s-right-front-three-quarter-2.jpg', 'AMG A45 S/AMGA45S.php', '../test_drivebook.php'),
(13, 'GLE', 'gle-facelift-right-front-three-quarter-2.jpg', 'GLE/GLE.php', '../test_drivebook.php'),
(14, 'AMG C 43', 'amg-c-43-right-front-three-quarter.jpg', 'AMG C 43/AMGC43.php', '../test_drivebook.php'),
(15, 'AMG E53', 'amg-e53-exterior-right-front-three-quarter-2.jpg', 'AMG E53/AMGE53.php', '../test_drivebook.php'),
(16, 'AMG E53 Cabriolet', 'amg-e53-cabriolet-right-front-three-quarter.jpg', 'E53/E53.php', '../test_drivebook.php'),
(17, 'GLS', 'gls-facelift-right-front-three-quarter-2.jpg', 'GLS/GLS.php', '../test_drivebook.php'),
(18, 'EQE SUV', 'eqe-right-front-three-quarter.jpg', 'EQE SUV/EQESUV.php', '../test_drivebook.php'),
(19, 'EQS', 'eqs-580-4matic-right-front-three-quarter-2.jpg', 'EQS/EQS.php', '../test_drivebook.php'),
(20, 'S-Class', 's-class-exterior-right-front-three-quarter-3.jpg', 'S-Class/S-Class.php', '../test_drivebook.php'),
(21, 'AMG E63', 'amg-e63-exterior-right-front-three-quarter-2.jpg', 'AMG E63/AMGE63.php', '../test_drivebook.php'),
(22, 'AMG GLE Coupe', 'amg-gle-coupe-right-front-three-quarter.jpg', 'AMG GLE Coupe/AMGGLECoupe.php', '../test_drivebook.php'),
(23, 'AMG SL55 Roadster', 'amg-sl55-roadster-right-front-three-quarter-2.jpg', 'AMG SL55 Roadster/AMGSL55Roadster.php', '../test_drivebook.php'),
(24, 'AMG EQS', 'amg-eqs-right-front-three-quarter-2.jpg', 'AMG EQS/AMGEQS.php', '../test_drivebook.php'),
(25, 'G-Class', 'g-class-right-front-three-quarter-2.jpg', 'G-Class/G-Class.php', '../test_drivebook.php'),
(26, 'Maybach S-Class', 'maybach-s-class-right-front-three-quarter.jpg', 'Maybach S-Class/MaybachS-Class.php', '../test_drivebook.php'),
(27, 'AMG GT 63 S 4MATIC Plus', 'mercedesbenz-amg-gt-4-door-coupe-right-side0.jpg', 'AMG GT 63 S 4MATIC Plus/AMGGT63S4MATICPlus.php', '../test_drivebook.php'),
(28, 'Maybach GLS', 'exterior-right-front-three-quarter.jpg', 'Maybach%20GLS/MaybachGLS.php', '../test_drivebook.php'),
(29, 'AMG GT 63 S E', 'amg-gt-63-s-e-performance-right-front-three-quarter-3.jpg', 'AMG GT 63 S E Performance\\AMGGT63SE.php', '../test_drivebook.php');

-- --------------------------------------------------------

--
-- Table structure for table `mg`
--

CREATE TABLE `mg` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `car_link` varchar(150) NOT NULL,
  `test_drive` varchar(120) NOT NULL DEFAULT '../test_drivebook.php'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mg`
--

INSERT INTO `mg` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, 'Comet EV', 'comet-ev-right-front-three-quarter.jpg', 'Comet EV/CometEV.php', '../test_drivebook.php'),
(2, 'Astor', 'astor-right-front-three-quarter-2.jpg', 'Astor/Astor.php', '../test_drivebook.php'),
(3, 'Hector', 'hector-right-front-three-quarter-3.jpg', 'Hector/Hector.php', '../test_drivebook.php'),
(4, 'Hector Plus', 'hector-plus-right-front-three-quarter.jpg', 'Hector Plus/HectorPlus.php', '../test_drivebook.php'),
(5, 'ZS EV', 'zs-ev-right-front-three-quarter-2.jpg', 'ZS EV/ZSEV.php', '../test_drivebook.php'),
(6, 'Gloster', 'gloster-right-front-three-quarter.jpg', 'Gloster/Gloster.php', '../test_drivebook.php');

-- --------------------------------------------------------

--
-- Table structure for table `mini`
--

CREATE TABLE `mini` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `car_link` varchar(150) NOT NULL,
  `test_drive` varchar(120) NOT NULL DEFAULT '../test_drivebook.php'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mini`
--

INSERT INTO `mini` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, 'Cooper', 'cooper-exterior-right-front-three-quarter-2.jpg', 'Cooper/Cooper.php', '../test_drivebook.php'),
(2, 'Countryman', 'countryman-exterior-right-front-three-quarter-4.jpg', 'Countryman/Countryman.php', '../test_drivebook.php'),
(3, 'Cooper SE', 'cooper-se-right-front-three-quarter.jpg', 'Cooper SE/CooperSE.php', '../test_drivebook.php');

-- --------------------------------------------------------

--
-- Table structure for table `nissan`
--

CREATE TABLE `nissan` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `car_link` varchar(150) NOT NULL,
  `test_drive` varchar(120) NOT NULL DEFAULT '../test_drivebook.php'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `nissan`
--

INSERT INTO `nissan` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, 'Magnite', 'magnite-right-front-three-quarter.jpg', 'Magnite/Magnite.php', '../test_drivebook.php');

-- --------------------------------------------------------

--
-- Table structure for table `renault`
--

CREATE TABLE `renault` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `car_link` varchar(150) NOT NULL,
  `test_drive` varchar(120) NOT NULL DEFAULT '../test_drivebook.php'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `renault`
--

INSERT INTO `renault` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, 'Kwid', 'kwid-right-front-three-quarter.jpg', 'Kwid/Kwid.php', '../test_drivebook.php'),
(2, 'Triber', 'triber-right-front-three-quarter-2.jpg', 'Triber/Triber.php', '../test_drivebook.php'),
(3, 'Kiger', 'kiger-right-front-three-quarter-2.jpg', 'Kiger/Kiger.php', '../test_drivebook.php');

-- --------------------------------------------------------

--
-- Table structure for table `skoda`
--

CREATE TABLE `skoda` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `car_link` varchar(150) NOT NULL,
  `test_drive` varchar(120) NOT NULL DEFAULT '../test_drivebook.php'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `skoda`
--

INSERT INTO `skoda` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, 'Slavia', 'slavia-right-front-three-quarter.jpg', 'Slavia/Slavia.php', '../test_drivebook.php'),
(2, 'Kushaq', 'kushaq-right-front-three-quarter-3.jpg', 'Kushaq/Kushaq.php', '../test_drivebook.php'),
(3, 'Kodiaq', 'kodiaq-right-front-three-quarter.jpg', 'Kodiaq/Kodiaq.php', '../test_drivebook.php');

-- --------------------------------------------------------

--
-- Table structure for table `tata`
--

CREATE TABLE `tata` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `img_url` varchar(150) NOT NULL,
  `test_drive` varchar(120) NOT NULL DEFAULT '../test_drivebook.php',
  `car_link` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tata`
--

INSERT INTO `tata` (`id`, `name`, `img_url`, `test_drive`, `car_link`) VALUES
(1, 'Tiago', 'tiago-right-front-three-quarter-2.jpg', '../test_drivebook.php', 'Tiago/Tiago.php'),
(2, 'Punch', 'punch-right-front-three-quarter.jpg', '../test_drivebook.php', 'Punch/Punch.php'),
(3, 'Tigor', 'tigor-right-front-three-quarter.jpg', '../test_drivebook.php', 'Tigor/Tigor.php'),
(4, 'Altroz', 'tata-altroz-right-front-three-quarter20.jpg', '../test_drivebook.php', 'Altroz/Altroz.php'),
(5, 'Tiago NRG', 'tiago-nrg-bs6-exterior-right-front-three-quarter.jpg', '../test_drivebook.php', 'tiago nrg bs6/TiagoAltrozbs6.php'),
(6, 'Tiago Ev', 'tiago-ev-right-front-three-quarter-2.jpg', '../test_drivebook.php', 'Tiago Ev/TiagoEv.php'),
(7, 'Nexon', 'nexon-facelift-right-front-three-quarter-2.jpg', '../test_drivebook.php', 'Nexon/Nexon.php'),
(8, 'Punch EV', 'punch-ev-front-view.jpg', '../test_drivebook.php', 'Punch EV/PunchEV.php'),
(9, 'Tigor EV', 'tigor-ev-right-front-three-quarter.JPG', '../test_drivebook.php', 'TigorEV/TigorEV.php'),
(10, 'Nexon EV', 'nexon-ev-facelift-right-front-three-quarter.jpg', '../test_drivebook.php', 'Nexon EV/NexonEV.php'),
(11, 'Harrier', 'harrier-facelift-right-front-three-quarter-4.jpg', '../test_drivebook.php', 'Harrier/Harrier.php'),
(12, 'Safari', 'safari-facelift-right-front-three-quarter-2.jpg', '../test_drivebook.php', 'Safari/Safari.php');

-- --------------------------------------------------------

--
-- Table structure for table `toyota`
--

CREATE TABLE `toyota` (
  `id` int(100) NOT NULL,
  `name` varchar(150) NOT NULL,
  `img_url` varchar(200) NOT NULL,
  `car_link` varchar(150) NOT NULL,
  `test_drive` varchar(120) NOT NULL DEFAULT '../test_drivebook.php'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `toyota`
--

INSERT INTO `toyota` (`id`, `name`, `img_url`, `car_link`, `test_drive`) VALUES
(1, 'Glanza', 'glanza-facelift-right-front-three-quarter.jpg', 'Glanza/Glanza.php', '../test_drivebook.php'),
(2, 'Rumion', 'rumion-right-front-three-quarter-3.jpg', 'rumion/Rumion.php', '../test_drivebook.php'),
(3, 'Urban Cruiser Hyryder', 'urban-cruiser-hyryder-right-front-three-quarter.jpg', 'Urban Cruiser Hyryder/UrbanCruiserHyryder.php', '../test_drivebook.php'),
(4, 'Innova Hycross', 'innova-hycross-right-front-three-quarter-2.jpg', 'Hycross/Hycross.php', '../test_drivebook.php'),
(5, 'Innova Crysta', 'innova-crysta-right-front-three-quarter.jpg', 'Crysta/Crysta.php', '../test_drivebook.php'),
(6, 'Hilux', 'hilux-right-front-three-quarter.jpg', 'Hilux/Hilux.php', '../test_drivebook.php'),
(7, 'Fortuner', 'fortuner-exterior-right-front-three-quarter-19.jpg', 'Fortuner/Fortuner.php', '../test_drivebook.php'),
(8, 'Fortuner Legender', 'fortuner-legender-right-front-three-quarter-2.jpg', 'Fortuner Legender/FortunerLegender.php', '../test_drivebook.php'),
(9, 'Carmy', 'camry-right-front-three-quarter.jpg', 'Camry/Camry.php', '../test_drivebook.php'),
(10, 'Land Cruiser', 'land-cruiser-right-front-three-quarter.jpg', 'Land Cruiser/LandCruiser.php', '../test_drivebook.php'),
(11, 'Vellfire', 'vellfire-right-front-three-quarter.jpg', 'Vellfire/Vellfire.php', '../test_drivebook.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `audi`
--
ALTER TABLE `audi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bmw`
--
ALTER TABLE `bmw`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars_inquary`
--
ALTER TABLE `cars_inquary`
  ADD PRIMARY KEY (`inquary_id`);

--
-- Indexes for table `car_company`
--
ALTER TABLE `car_company`
  ADD PRIMARY KEY (`car_company_id`);

--
-- Indexes for table `honda`
--
ALTER TABLE `honda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hyundai`
--
ALTER TABLE `hyundai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jeep`
--
ALTER TABLE `jeep`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kia`
--
ALTER TABLE `kia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahindra`
--
ALTER TABLE `mahindra`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maruti_suzuki`
--
ALTER TABLE `maruti_suzuki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maserati`
--
ALTER TABLE `maserati`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mercedes-benz`
--
ALTER TABLE `mercedes-benz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mg`
--
ALTER TABLE `mg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mini`
--
ALTER TABLE `mini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nissan`
--
ALTER TABLE `nissan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `renault`
--
ALTER TABLE `renault`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skoda`
--
ALTER TABLE `skoda`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tata`
--
ALTER TABLE `tata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toyota`
--
ALTER TABLE `toyota`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `audi`
--
ALTER TABLE `audi`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `bmw`
--
ALTER TABLE `bmw`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `cars_inquary`
--
ALTER TABLE `cars_inquary`
  MODIFY `inquary_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `car_company`
--
ALTER TABLE `car_company`
  MODIFY `car_company_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `honda`
--
ALTER TABLE `honda`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `hyundai`
--
ALTER TABLE `hyundai`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jeep`
--
ALTER TABLE `jeep`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kia`
--
ALTER TABLE `kia`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mahindra`
--
ALTER TABLE `mahindra`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `maruti_suzuki`
--
ALTER TABLE `maruti_suzuki`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `maserati`
--
ALTER TABLE `maserati`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `mercedes-benz`
--
ALTER TABLE `mercedes-benz`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `mg`
--
ALTER TABLE `mg`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mini`
--
ALTER TABLE `mini`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nissan`
--
ALTER TABLE `nissan`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `renault`
--
ALTER TABLE `renault`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skoda`
--
ALTER TABLE `skoda`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tata`
--
ALTER TABLE `tata`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `toyota`
--
ALTER TABLE `toyota`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
