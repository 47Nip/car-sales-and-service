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
-- Database: `car sales and service`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `sno` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`sno`, `username`, `password`) VALUES
(1, 'NIP PATEL', '$2y$10$Ov.rq3kCM/CdmUQ99Q/VrugqYyS3Wc7Deji//3EdSKurTxceTPnca');

-- --------------------------------------------------------

--
-- Table structure for table `call_request`
--

CREATE TABLE `call_request` (
  `call id` int(40) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `call_request`
--

INSERT INTO `call_request` (`call id`, `name`, `phone no`) VALUES
(1, 'prince', '9715644036'),
(2, 'nip', '9687265753');

-- --------------------------------------------------------

--
-- Table structure for table `car_inspection`
--

CREATE TABLE `car_inspection` (
  `service_id` int(50) NOT NULL,
  `header` varchar(100) NOT NULL,
  `img_url` varchar(150) NOT NULL,
  `service_name` varchar(150) NOT NULL,
  `warranty` varchar(200) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `service_book` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_inspection`
--

INSERT INTO `car_inspection` (`service_id`, `header`, `img_url`, `service_name`, `warranty`, `Description`, `service_book`, `price`) VALUES
(1, 'Used Car', 'img/car_service_29.jfif', 'Second hand Car Inspection', 'Scanner Report Provided', 'Full Car Scanning,Physical Car Diagnosis,Upfront Estimate,get Car Valution', 'service_book.php', 1000),
(2, 'Inspection', 'img/car_service_30.jfif', 'Road Trip Inspection', 'Recommended for Long Road trips', 'Wheel Alignment & Balancing,Full car Scanning,Fluid Leakage Inspection', 'service_book.php', 1500),
(3, '', 'img/car_service_31.jfif', 'Engine Scanning', 'Scanner Report Provided', 'OEM Scanner used,Electrical Scanning,Error Code Deletion,Sensor Reset,Inspection of Exhaust Smoke', 'service_book.php', 899);

-- --------------------------------------------------------

--
-- Table structure for table `car_service_table`
--

CREATE TABLE `car_service_table` (
  `service_id` int(100) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `reviews` int(6) NOT NULL,
  `details_page` varchar(255) NOT NULL,
  `book_page` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_service_table`
--

INSERT INTO `car_service_table` (`service_id`, `image_url`, `service_name`, `reviews`, `details_page`, `book_page`) VALUES
(0, 'img\\car-service-1.webp', 'Car Wash', 6, 'service_1.php', 'service_book.php'),
(2, 'img/car-service-2.webp', 'Regular Maintenance', 6, 'regular_service.php', 'service_book.php'),
(3, 'img/car-service-3.png', 'Repair Car', 6, 'repair.php', 'service_book.php'),
(4, 'img/car_service_15.jfif', 'SOS Service', 6, 'SOS.php', 'service_book.php'),
(5, 'img/car_service_23.jfif', 'Windshields', 6, 'windshield.php', 'service_book.php'),
(6, 'img/car_service_28.jfif', 'Car Inspections', 6, 'carinspection.php', 'service_book.php');

-- --------------------------------------------------------

--
-- Table structure for table `car_sos`
--

CREATE TABLE `car_sos` (
  `service_id` int(50) NOT NULL,
  `img_url` varchar(100) NOT NULL,
  `header` varchar(150) NOT NULL,
  `service_name` varchar(150) NOT NULL,
  `warranty` varchar(100) NOT NULL,
  `Description` varchar(500) NOT NULL,
  `service_book` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_sos`
--

INSERT INTO `car_sos` (`service_id`, `img_url`, `header`, `service_name`, `warranty`, `Description`, `service_book`, `price`) VALUES
(1, 'img/car_service_16.jfif', '', 'Battery Jumpstart', 'Available at Doorstep', 'Car Battery Check,Battry JumpStart', 'service_book.php', 700),
(2, 'img/car_service_17.png', '', 'Car Fluid leakage', 'Takes 4 hours', 'Car Battery Check,Car Engine oil Check,Car Air filter Check ', 'service_book.php', 700),
(3, 'img/car_service_18.jfif', '', 'Wheel-Lift Tow(20 KMs)', 'Available at Doorstep', 'Flat Bed Towingk,Wheel Lift towing', 'service_book.php', 950),
(4, 'img/car_service_19.jfif', '', 'Car Self Starter issue', 'Available at Doorstep', 'Critical Systeam Points Check,UnderBody inspection,Car Battery Check', 'service_book.php', 800),
(5, 'img/car_service_20.jfif', '', 'Insure Accident', 'Takes 4 Hours', 'in case of Car not Start,in case of car all body damaged,in case of car Accident', 'service_book.php', 599),
(6, 'img/car_service_21.jfif', '', 'Brake Failure', ' Takes 2 Hours', 'in case of Break fail ,in case of Break pedal Free', 'service_book.php', 1200),
(7, 'img/car_service_22.jfif', '', 'Critical Dashboard Light', 'Takes 2 Hours', 'in case of Dashboard warning Light,in case of Electrical Malfuncation', 'service_book.php', 899);

-- --------------------------------------------------------

--
-- Table structure for table `car_wash`
--

CREATE TABLE `car_wash` (
  `service_id` int(100) NOT NULL,
  `header` varchar(200) NOT NULL,
  `img_url` varchar(250) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `warranty` varchar(300) NOT NULL,
  `Description` varchar(800) NOT NULL,
  `book_page` varchar(200) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_wash`
--

INSERT INTO `car_wash` (`service_id`, `header`, `img_url`, `service_name`, `warranty`, `Description`, `book_page`, `price`) VALUES
(1, 'Festive special ', 'img/car-service-1.webp', '360&deg; Deep Cleaning', '1 Month Warranty &nbsp;&nbsp; - brand New festive Look', 'Exterior Rubbing & Polishing ,Interior Wet Shampooing & Detailing,Interior Vacuum Cleaning,Pressure Washing,Tyre Dressing & Alloy Polishing', 'service_book.php', 2499),
(2, 'Spa', 'img/car_service_2.jfif', 'Car Interior Spa', 'Every 3 months (Recommended)', 'Pressure Car Wash,Anti Viral & bacterial treatment,Interior Vacuum Cleaning,dashboard Polishing,Interior Wet Shampooing And Detailing', 'service_book.php', 1499),
(3, '', 'img/car_service_3.jfif', 'premium top Wash', 'Applicable on Walk-in Only &nbsp;&nbsp;&nbsp; - Preserving paint & Finish', 'Exterior Top Wash,Rinsing,Hand Drying,tyre External Wash', 'service_book.php', 199),
(4, '', 'img/car_service3.jfif', 'Car Rubbing & Polishing', 'Takes 6 hours', 'Machine Rubbing with Compound,Wax Polishing,Pressure car Wash,tyre Dressing,Alloy Polishing', 'service_book.php', 2199);

-- --------------------------------------------------------

--
-- Table structure for table `car_windshield`
--

CREATE TABLE `car_windshield` (
  `service_id` int(50) NOT NULL,
  `header` varchar(100) NOT NULL,
  `img_url` varchar(150) NOT NULL,
  `service_name` varchar(150) NOT NULL,
  `warranty` varchar(200) NOT NULL,
  `Description` varchar(600) NOT NULL,
  `service_book` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_windshield`
--

INSERT INTO `car_windshield` (`service_id`, `header`, `img_url`, `service_name`, `warranty`, `Description`, `service_book`, `price`) VALUES
(1, 'Windshield', 'img/car_service_24.jfif', 'Front Windshield Replacement', '1 month Warranty on Fitting &nbsp;&nbsp; - on crack in Windshield (Recommended)', 'Windshield(ISI Approved),opening & Fitting of new Windshield,sensor Charges Additional(if Applicable),Consumables -Sealant/Bond/Adhesive', 'service_book.php', 6825),
(2, '', 'img/car_service_25.jfif', 'Rear Windshield Replacement', '1 month Warranty on Fitting &nbsp;&nbsp; - on crack in Windshield (Recommended)', 'Windshield(ISI Approved),opening & Fitting of new Windshield,Defogger Charges Additional(if Applicable),Consumables -Sealant/Bond/Adhesive', 'service_book.php', 4000),
(3, 'Lights', 'img/car_service_26.jfif', 'Front Headlight', '1 month Warranty on fitting  &nbsp;&nbsp; - For Broken / Creacked Lights', 'Headlight OES(price for single unit),opening & Fitting of buper / headlight,Projector/LEDs/DRLs Addtional (if Applicable)', 'service_book.php', 4600),
(4, '', 'img/car_service_27.jfif', 'Rear Taillight', '1 month Warranty on fitting  &nbsp;&nbsp; - For Broken / Creacked Lights', 'Tail light OES(price for single unit),opening & fitting of Tail light,Bulbs/LEDs Additional(if Applicable),Tail Light price will differ from car model to model', 'service_book.php', 2600);

-- --------------------------------------------------------

--
-- Table structure for table `customer table`
--

CREATE TABLE `customer table` (
  `Customer Id` int(20) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `First Name` varchar(20) NOT NULL,
  `Last Name` varchar(20) NOT NULL,
  `Email Id` varchar(30) NOT NULL,
  `Contact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `employee table`
--

CREATE TABLE `employee table` (
  `Emp Id` int(20) NOT NULL,
  `First Name` varchar(25) NOT NULL,
  `Last Name` varchar(25) NOT NULL,
  `Department` varchar(10) NOT NULL,
  `Contact No` int(11) NOT NULL,
  `Salary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_and_reviews`
--

CREATE TABLE `feedback_and_reviews` (
  `feedback_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `phone_no` text NOT NULL,
  `feedback_and_reviews` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback_and_reviews`
--

INSERT INTO `feedback_and_reviews` (`feedback_id`, `name`, `email_id`, `phone_no`, `feedback_and_reviews`) VALUES
(1, 'Nip', 'nip@gmail.com', '9687265753', 'Good service and good customer support. I like it and i am telling other frinds.'),
(2, 'Rahul', 'rahul@gmail.com', '7534586541', 'very good support i like it.'),
(3, 'Prince ', 'prince42@gamil.com', '8567496874', 'i am very happy of your service and timing. GOOD');

-- --------------------------------------------------------

--
-- Table structure for table `inquary_table`
--

CREATE TABLE `inquary_table` (
  `inquary_id` int(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Phone Number` bigint(12) NOT NULL,
  `Email_Id` varchar(30) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inquary_table`
--

INSERT INTO `inquary_table` (`inquary_id`, `Name`, `Phone Number`, `Email_Id`, `Message`) VALUES
(1, 'nip', 9687265753, 'nip@gmail.com', 'online payment is compulsory.'),
(2, 'yagnesh', 7584678520, 'yagnesh3540@gmail.com', 'in car purchase finance you provide.'),
(3, 'Prince', 854125697, 'prince@gmail.com', 'how to check service status.\r\n\r\n'),
(4, 'smarth', 9452065745, 'smarth@gmail.com', 'what is time for offline showroom.');

-- --------------------------------------------------------

--
-- Table structure for table `order table`
--

CREATE TABLE `order table` (
  `Order Id` int(20) NOT NULL,
  `Sales Emp Id` int(20) NOT NULL DEFAULT 1,
  `Customer_idproof` varchar(20) NOT NULL,
  `idproof_number` text NOT NULL,
  `Customer_name` varchar(20) NOT NULL,
  `Customer_number` int(12) NOT NULL,
  `Car_company_name` varchar(30) NOT NULL,
  `Car_model` varchar(20) NOT NULL,
  `payment_method` varchar(10) NOT NULL,
  `dowanpayment` int(15) NOT NULL,
  `price` int(50) NOT NULL,
  `delivery_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order table`
--

INSERT INTO `order table` (`Order Id`, `Sales Emp Id`, `Customer_idproof`, `idproof_number`, `Customer_name`, `Customer_number`, `Car_company_name`, `Car_model`, `payment_method`, `dowanpayment`, `price`, `delivery_date`) VALUES
(1, 1, 'aadhar', '214558657516', 'Nip patel', 1234567890, 'Tata', 'Suv 400', 'Check', 250000, 1500000, '2024-03-22'),
(3, 1, 'aadhar', '214748364712', 'Rahul Patel', 2147483647, 'TATA', 'Altroz', 'Check', 325000, 700000, '2024-04-10'),
(4, 1, 'pan', 'DOZPG8441D', 'KetanBhai Patel', 2147483647, 'Audi', 'Q3 Sportback', 'Check', 100000, 5400000, '2024-04-30');

-- --------------------------------------------------------

--
-- Table structure for table `payment table`
--

CREATE TABLE `payment table` (
  `Payment Id` int(20) NOT NULL,
  `Customer Id` int(20) NOT NULL,
  `Payment Method` varchar(10) NOT NULL,
  `Payment_Amount` int(25) NOT NULL,
  `Payment Status` varchar(10) NOT NULL DEFAULT 'Success',
  `Tax` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment table`
--

INSERT INTO `payment table` (`Payment Id`, `Customer Id`, `Payment Method`, `Payment_Amount`, `Payment Status`, `Tax`) VALUES
(17, 1, 'upi', 4699, 'Success', 0),
(18, 5, 'upi', 199, 'Success', 0),
(19, 4, 'upi', 800, 'Success', 0),
(20, 2, 'card', 1499, 'Success', 0),
(21, 6, 'card', 5999, 'Success', 0);

-- --------------------------------------------------------

--
-- Table structure for table `regular_car_service`
--

CREATE TABLE `regular_car_service` (
  `service_id` int(100) NOT NULL,
  `header` varchar(250) NOT NULL,
  `img_url` varchar(250) NOT NULL,
  `service_name` varchar(250) NOT NULL,
  `warranty` varchar(350) NOT NULL,
  `Description` varchar(1000) NOT NULL,
  `service_book` varchar(100) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `regular_car_service`
--

INSERT INTO `regular_car_service` (`service_id`, `header`, `img_url`, `service_name`, `warranty`, `Description`, `service_book`, `price`) VALUES
(1, 'Scheduled packages', 'img/car_service_4.jfif', 'Basic Service', '1000 Kms or 1 month Warranty &nbsp; - Every 5000 Kms or 3 month(recommended)', 'Wiper Fluid Replacement,Battery Water Top up,Car Wash,Interior vacuuming (carpet & Seats),Engine oil Replacement,Oil Filter Replacement,Air Filter Cleaning,Coolant top up(200ml),Heater/Spark Plug Checking', 'service_book.php', 3599),
(2, '', 'img/car_service_5.jfif', 'Standard Service', '1000 Kms or 1 month Warranty &nbsp; - Every 10,000 Kms or 6 month(recommended)', 'Car Scanning,Wiper Fluid Replacement,Battery Water Top up,Car Wash,Interior vacuuming (carpet & Seats)Engine oil Replacement,rear brake shoes serviced,front Brake Pads Serviced ,Engine Oil Replacement,Oil filter Replacement ,Air filter Replacement,fuel filter Checking,Coolant top up(200ml),Heater & Spark plug Checking,Break Fluid Top up,AC Filter Cleaning', 'service_book.php', 4699),
(3, '', 'img/car_service_6.jfif', 'Comprehensive Service', '1000 Kms or 1 month Warranty &nbsp; - Every 20,000 Kms or 12 month(recommended)', 'AC Filter Replacement,Fuel Filter Checking, Car Scanning,Wiper Fluid Replacement, Battery Water Top up,Car Wash,Interior vacuuming (carpet & Seats)Engine oil Replacement, rear brake shoes serviced,front Brake Pads Serviced,Wheel balancing,Wheel Alignment ,tyre Roation,Engine Oil Replacement,Oil Filter Replacement,Air Filter Replacement,Throttle Body Cleaning, Gear oil Top Up,Coolant Top Up(200ml),Heater & Spark plug Checking,Break Fluid Top up,Engine Flushing', 'service_book.php', 5999);

-- --------------------------------------------------------

--
-- Table structure for table `repair_car`
--

CREATE TABLE `repair_car` (
  `service_id` int(100) NOT NULL,
  `header` varchar(200) NOT NULL,
  `img_url` varchar(250) NOT NULL,
  `service_name` varchar(200) NOT NULL,
  `warranty` varchar(200) NOT NULL,
  `Description` varchar(200) NOT NULL,
  `service_book` varchar(200) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `repair_car`
--

INSERT INTO `repair_car` (`service_id`, `header`, `img_url`, `service_name`, `warranty`, `Description`, `service_book`, `price`) VALUES
(1, 'Front Side', 'img/car_service_7.jfif', 'Front Bumper Paint', '2 Years Warranty Paint', 'Removal of minor Dent & Scratches,Grade A Primer Applied,High Quality DuPoint Paint,Clear Coat Protective layer Paint,panel Rubbing & Polishing', 'service_book.php', 2500),
(2, '', 'img/car_service_8.jfif', 'Bonnet Paint', '2 Years Warranty Paint', 'Removal of minor Dent & Scratches,Grade A Primer Applied,High Quality DuPoint Paint,Clear Coat Protective layer Paint,panel Rubbing & Polishing', 'service_book.php', 2500),
(3, 'Rear Side', 'img/car_service_9.jfif', 'Rear Bumper Paint', '2 Years Warranty Paint', 'Removal of minor Dent & Scratches,Grade A Primer Applied,High Quality DuPoint Paint,Clear Coat Protective layer Paint,panel Rubbing & Polishing', 'service_book.php', 2450),
(4, '', 'img/car_service_10.jfif', 'Boot Paint', '2 Years Warranty Paint', ' Removal of minor Dent & Scratches,Grade A Primer Applied,High Quality DuPoint Paint,Clear Coat Protective layer Paint,panel Rubbing & Polishing', 'service_book.php', 2450),
(5, 'Whole Body', 'img/car_service_11.jfif', 'Full Body Dent  Paint', '2 Years Warranty Paint', 'Removal of minor Dent & Scratches,Grade A Primer Applied,High Quality DuPoint Paint,Clear Coat Protective layer Paint,panel Rubbing & Polishing', 'service_book.php', 26000);

-- --------------------------------------------------------

--
-- Table structure for table `selling table`
--

CREATE TABLE `selling table` (
  `Order Id` int(20) NOT NULL,
  `Order Confirmed Or Not` tinyint(1) NOT NULL,
  `selling Price` int(25) NOT NULL,
  `Vehicle Id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service appointment table`
--

CREATE TABLE `service appointment table` (
  `Appointment_Id` int(20) NOT NULL,
  `Customer Id` int(20) NOT NULL,
  `Vehicles Id` varchar(30) NOT NULL,
  `vehicle Name` varchar(20) NOT NULL,
  `Service Type` varchar(50) NOT NULL,
  `service option` varchar(100) NOT NULL,
  `Appointment Date And Time` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `Service Cost` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service appointment table`
--

INSERT INTO `service appointment table` (`Appointment_Id`, `Customer Id`, `Vehicles Id`, `vehicle Name`, `Service Type`, `service option`, `Appointment Date And Time`, `Service Cost`) VALUES
(1, 1, 'Gj 27 wp 2625', 'TATA', 'regularMaintenance', 'Standard Service', '2024-03-25 16:43:04.902832', 4699),
(2, 5, 'Gj 11 KM 7562', 'Kia', 'carWash', 'premium top Wash', '2024-03-25 16:45:00.500035', 199),
(3, 4, 'Gj 01 wq 2241', 'Honda', 'SOS Service', 'Car Self Starter issue', '2024-03-25 16:46:02.955027', 800),
(4, 2, 'Gj 03 Jk 4419', 'Maruti Suzuki', 'carWash', 'Car Interior Spa', '2024-03-25 16:47:54.914905', 1499),
(5, 6, 'Gj 11 NP 47', 'Hyundai', 'regularMaintenance', 'Comprehensive Service', '2024-03-25 16:49:10.824381', 5999);

-- --------------------------------------------------------

--
-- Table structure for table `service record table`
--

CREATE TABLE `service record table` (
  `Service Record Id` int(20) NOT NULL,
  `Vehicles Id` int(20) NOT NULL,
  `Customer Id` int(20) NOT NULL,
  `Service Type` varchar(25) NOT NULL,
  `Next Service Due` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `test drive booking table`
--

CREATE TABLE `test drive booking table` (
  `Booking id` int(100) NOT NULL,
  `Customer name` varchar(150) NOT NULL,
  `Car Model_Name` varchar(100) NOT NULL,
  `Driving License` varchar(40) NOT NULL,
  `Phone No` varchar(50) NOT NULL,
  `email id` varchar(100) NOT NULL,
  `Test Drive Date And Time` datetime(6) NOT NULL,
  `Booking Status` varchar(30) NOT NULL DEFAULT 'Padding'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `test drive booking table`
--

INSERT INTO `test drive booking table` (`Booking id`, `Customer name`, `Car Model_Name`, `Driving License`, `Phone No`, `email id`, `Test Drive Date And Time`, `Booking Status`) VALUES
(1, 'Nip', 'TATA nexon', 'BDM47585BK', '9687265753', 'nip@gmail.com', '2024-03-13 00:00:00.000000', 'Padding'),
(2, 'Yganesh Rank', 'Honda Amaze', 'BNK2585KL', '9654875211', 'yagnesh3540@gmail.com', '2024-03-19 00:00:00.000000', 'Padding'),
(3, 'Prince patel', 'Skoda slavia', 'HJk74859BK', '754835742', 'prince@gmail.com', '2024-03-29 00:00:00.000000', 'Padding'),
(4, 'smarth patel', 'MG Astor', 'VFDC74521HBGL', '7452176214', 'smarth@gmail.com', '2024-03-19 00:00:00.000000', 'Padding');

-- --------------------------------------------------------

--
-- Table structure for table `vehicles table`
--

CREATE TABLE `vehicles table` (
  `Vehicles Id` int(20) NOT NULL,
  `Vehicles Name` varchar(35) NOT NULL,
  `Brand` varchar(30) NOT NULL,
  `Year` year(4) NOT NULL,
  `Price` int(20) NOT NULL,
  `Description` varchar(90) NOT NULL,
  `Availability` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `call_request`
--
ALTER TABLE `call_request`
  ADD PRIMARY KEY (`call id`);

--
-- Indexes for table `car_inspection`
--
ALTER TABLE `car_inspection`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `car_service_table`
--
ALTER TABLE `car_service_table`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `car_sos`
--
ALTER TABLE `car_sos`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `car_wash`
--
ALTER TABLE `car_wash`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `car_windshield`
--
ALTER TABLE `car_windshield`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `customer table`
--
ALTER TABLE `customer table`
  ADD PRIMARY KEY (`Customer Id`),
  ADD UNIQUE KEY `Password` (`Password`),
  ADD UNIQUE KEY `Contact` (`Contact`),
  ADD UNIQUE KEY `Contact_2` (`Contact`),
  ADD UNIQUE KEY `Email Id` (`Email Id`);

--
-- Indexes for table `employee table`
--
ALTER TABLE `employee table`
  ADD PRIMARY KEY (`Emp Id`),
  ADD UNIQUE KEY `Contact No` (`Contact No`);

--
-- Indexes for table `feedback_and_reviews`
--
ALTER TABLE `feedback_and_reviews`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `inquary_table`
--
ALTER TABLE `inquary_table`
  ADD PRIMARY KEY (`inquary_id`);

--
-- Indexes for table `order table`
--
ALTER TABLE `order table`
  ADD PRIMARY KEY (`Order Id`),
  ADD UNIQUE KEY `idproof_number` (`idproof_number`) USING HASH;

--
-- Indexes for table `payment table`
--
ALTER TABLE `payment table`
  ADD PRIMARY KEY (`Payment Id`);

--
-- Indexes for table `regular_car_service`
--
ALTER TABLE `regular_car_service`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `repair_car`
--
ALTER TABLE `repair_car`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `service appointment table`
--
ALTER TABLE `service appointment table`
  ADD PRIMARY KEY (`Appointment_Id`);

--
-- Indexes for table `service record table`
--
ALTER TABLE `service record table`
  ADD PRIMARY KEY (`Service Record Id`);

--
-- Indexes for table `test drive booking table`
--
ALTER TABLE `test drive booking table`
  ADD PRIMARY KEY (`Booking id`);

--
-- Indexes for table `vehicles table`
--
ALTER TABLE `vehicles table`
  ADD PRIMARY KEY (`Vehicles Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `sno` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `call_request`
--
ALTER TABLE `call_request`
  MODIFY `call id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_inspection`
--
ALTER TABLE `car_inspection`
  MODIFY `service_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `car_sos`
--
ALTER TABLE `car_sos`
  MODIFY `service_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `car_windshield`
--
ALTER TABLE `car_windshield`
  MODIFY `service_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer table`
--
ALTER TABLE `customer table`
  MODIFY `Customer Id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee table`
--
ALTER TABLE `employee table`
  MODIFY `Emp Id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_and_reviews`
--
ALTER TABLE `feedback_and_reviews`
  MODIFY `feedback_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `inquary_table`
--
ALTER TABLE `inquary_table`
  MODIFY `inquary_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order table`
--
ALTER TABLE `order table`
  MODIFY `Order Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `payment table`
--
ALTER TABLE `payment table`
  MODIFY `Payment Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `regular_car_service`
--
ALTER TABLE `regular_car_service`
  MODIFY `service_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `repair_car`
--
ALTER TABLE `repair_car`
  MODIFY `service_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service appointment table`
--
ALTER TABLE `service appointment table`
  MODIFY `Appointment_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `service record table`
--
ALTER TABLE `service record table`
  MODIFY `Service Record Id` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test drive booking table`
--
ALTER TABLE `test drive booking table`
  MODIFY `Booking id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vehicles table`
--
ALTER TABLE `vehicles table`
  MODIFY `Vehicles Id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
