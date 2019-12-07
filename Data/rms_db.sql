-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2019 at 04:37 PM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `CommentId` int(11) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Comment` text NOT NULL,
  `Date` datetime NOT NULL,
  `PropertyId` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`CommentId`, `Name`, `Email`, `Comment`, `Date`, `PropertyId`) VALUES
(10, 'Md Arafatul Islam', 'auiarafat@gmail.com', 'Can you please give me the info about this property?\r\n', '2019-11-25 20:59:50', 10);

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `DocumentId` int(11) NOT NULL,
  `Src1` text NOT NULL,
  `Src2` varchar(500) DEFAULT NULL,
  `Src3` varchar(500) DEFAULT NULL,
  `Src4` varchar(500) DEFAULT NULL,
  `PropertyId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`DocumentId`, `Src1`, `Src2`, `Src3`, `Src4`, `PropertyId`) VALUES
(15, '3910-1.jpg', '11010-2.jpg', '29210-3.jpg', '31910-4.jpg', 10),
(16, '7213-5.jpg', '13513-6.jpg', '24913-7.jpg', '33713-8.jpg', 13),
(18, '2414-slide-2.jpg', '11314-slide-3.jpg', '23414-slide-1.jpg', '37914-property-10.jpg', 14),
(19, '6415-5.jpg', '20015-6.jpg', '24615-7.jpg', '33315-8.jpg', 15),
(20, '7216-9.jpg', '18816-20.jpg', '29216-about-1.jpg', '33916-a.jpg', 16),
(21, '5317-slide-1.jpg', '18417-property-1.jpg', '20717-post-1.jpg', '32017-post-6.jpg', 17),
(22, '418-about-1.jpg', '11118-b.jpg', '29918-c.jpg', '33018-d.jpg', 18);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `PropertyId` int(11) NOT NULL,
  `Location` varchar(500) NOT NULL,
  `Title` varchar(500) DEFAULT NULL,
  `PropertyType` varchar(150) NOT NULL,
  `Status` varchar(200) DEFAULT NULL,
  `Area` varchar(100) NOT NULL,
  `Beds` int(11) DEFAULT NULL,
  `Baths` int(11) DEFAULT NULL,
  `Garage` int(11) DEFAULT NULL,
  `Price` double DEFAULT NULL,
  `PropertyDescription` text NOT NULL,
  `Address` varchar(5000) DEFAULT NULL,
  `VideoLink` varchar(1000) NOT NULL,
  `LocationLink` text NOT NULL,
  `PropertyImg` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`PropertyId`, `Location`, `Title`, `PropertyType`, `Status`, `Area`, `Beds`, `Baths`, `Garage`, `Price`, `PropertyDescription`, `Address`, `VideoLink`, `LocationLink`, `PropertyImg`) VALUES
(10, 'Dhaka', 'Big Banglo', 'For Rent', '', '1300', 66, 44, 33, 43, 'Nothing', 'Nothing', 'https://www.youtube.com/embed/9OhZK_wyPqY', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.438958611361!2d90.40230091481776!3d23.874048384528535!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c430ebdd8803%3A0xa95e50697ed26e12!2sPIISTECH!5e0!3m2!1sen!2sbd!4v1574532543519!5m2!1sen!2sbd', '1.jpg'),
(13, 'Chittagong', 'Dream Polli', 'For Rent', '', '340', 4, 2, 1, 112412412, 'Your property description should highlight your propertyâ€™s features and amenities. Focusing on the great qualities of your property helps with marketing for increased bookings.', '27 No House, 20 No Road, Nikunjo-2, Khilket', 'https://player.vimeo.com/video/73221098', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834', '2.jpg'),
(14, 'Sylhet', 'Brac Polli', 'For Rent', '', '340', 4, 3, 1, 150000, 'Start by brainstorming a list of adjectives that accurately describe your property. This gives renters a realistic picture of the property. Try not to exaggerate or oversell. Guests book a property based on its features. If you exaggerate these details, guests may be disappointed upon arrival. This may lead to negative reviews or a damaged brand.', '27 No House, 20 No Road, Nikunjo-2, Khilket', 'https://www.youtube.com/embed/9OhZK_wyPqY', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834', '3.jpg'),
(15, 'Rajshahi', 'Delux room', 'For Sale', '', '500', 3, 2, 1, 1200, 'Did you play off any hot home styles this year to improve your listingâ€™s appearance? These were some of the top home design fads.', 'Osmani Medical College', 'https://www.youtube.com/embed/rOO3MjLABi8', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.333460644938!2d77.38356901504943!3d28.61976638242279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceff3a1792c7d%3A0xf37278c381e08fa9!2sApex+TG+India+Pvt+Ltd+Java%2C+Android%2C+PHP+Training+Noida!5e0!3m2!1sen!2sin!4v1547536527279', '4.jpg'),
(16, 'Khulna', 'Big Home', 'Open House', '', '1024', 343, 34, 34, 43, 'Your property description should highlight your propertyâ€™s features and amenities. Focusing on the great qualities of your property helps with marketing for increased bookings.\r\n\r\nStart by brainstorming a list of adjectives that accurately describe your property. This gives renters a realistic picture of the property. Try not to exaggerate or oversell. Guests book a property based on its features. If you exaggerate these details, guests may be disappointed upon arrival. This may lead to negative reviews or a damaged brand.', '27 No House, 20 No Road, Nikunjo-2, Khilket', 'https://player.vimeo.com/video/73221098', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.1422937950147!2d-73.98731968482413!3d40.75889497932681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25855c6480299%3A0x55194ec5a1ae072e!2sTimes+Square!5e0!3m2!1ses-419!2sve!4v1510329142834', '5.jpg'),
(17, 'Barisal', 'Delux room', 'For Sale', '', '500', 3, 2, 1, 1200, 'Did you play off any hot home styles this year to improve your listingâ€™s appearance? These were some of the top home design fads.', 'Osmani Medical College', 'https://www.youtube.com/embed/rOO3MjLABi8', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3502.333460644938!2d77.38356901504943!3d28.61976638242279!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ceff3a1792c7d%3A0xf37278c381e08fa9!2sApex+TG+India+Pvt+Ltd+Java%2C+Android%2C+PHP+Training+Noida!5e0!3m2!1sen!2sin!4v1547536527279', '6.jpg'),
(18, 'Rangpur', 'Grand Palace Rangpur', 'Open House', '', '500', 4, 3, 1, 180000, 'Your property description should highlight your propertyâ€™s features and amenities. Focusing on the great qualities of your property helps with marketing for increased bookings.', 'House 5, Road, 4 G L Roy Rd, Rangpur 5400', 'https://player.vimeo.com/video/73221098', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14374.403337620128!2d89.24916840700313!3d25.75071073321954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e32de4cc6a6985%3A0x7bd5104fa37f038b!2sGrand%20Palace%20Rangpur!5e0!3m2!1sen!2sbd!4v1574867149390!5m2!1sen!2sbd', '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserId` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Adress` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserId`, `UserName`, `Email`, `Password`, `Phone`, `Adress`) VALUES
(1, 'Admin', 'admin@gmail.com', '123456', '01620769032', 'Uttara University');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`CommentId`),
  ADD KEY `PropertyId` (`PropertyId`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`DocumentId`),
  ADD KEY `PropertyId` (`PropertyId`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`PropertyId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `CommentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `DocumentId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `PropertyId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`PropertyId`) REFERENCES `properties` (`PropertyId`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `documents_ibfk_1` FOREIGN KEY (`PropertyId`) REFERENCES `properties` (`PropertyId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
