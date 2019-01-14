-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 14, 2019 at 12:00 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eamDatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `Book`
--

CREATE TABLE `Book` (
  `bookId` int(11) NOT NULL,
  `title` varchar(45) NOT NULL,
  `authors` varchar(45) NOT NULL,
  `ISBN` varchar(45) NOT NULL,
  `publisher` varchar(45) NOT NULL,
  `publishYear` int(11) NOT NULL,
  `weight` float DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `dimensions` varchar(45) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `cover` varchar(45) DEFAULT NULL,
  `pdfPreview` varchar(200) DEFAULT NULL,
  `pdfIndex` varchar(200) DEFAULT NULL,
  `User_userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Book`
--

INSERT INTO `Book` (`bookId`, `title`, `authors`, `ISBN`, `publisher`, `publishYear`, `weight`, `pages`, `dimensions`, `price`, `cover`, `pdfPreview`, `pdfIndex`, `User_userId`) VALUES
(29, 'General Chemistry1', 'Name Author1', '111-111-111-111-1', 'General Publish1', 2003, 5.25, 249, '0', 0, '0', '0', '0', 9),
(30, 'General Chemistry2', 'Name Author2', '111-111-111-111-2', 'General Publish2', 2005, 5.25, 324, '0', 0, '0', '0', '0', 9),
(31, 'General Chemistry 3', 'Name Author3', '111-111-111-111-3', 'General Publish3', 2017, 5.25, 434, '12x23', 0, '0', '0', '0', 9),
(32, 'Organic Chemistry1', 'Name Author1', '222-222-222-222-1', 'Organic Publisher1', 2008, 5.25, 246, '12x23', 0, '0', '0', '0', 9),
(36, 'Organic Chemistry2', 'Name Author4', '222-222-222-222-2', 'Organic Publisher2', 2018, 0, 459, '0', 0, '0', '0', '0', 9),
(37, 'Inorganic Chemistry1', 'Name Author2', '333-333-333-333-1', 'Inorganic Publisher1', 2017, 0, 347, '0', 12.95, '0', '0', '0', 9),
(38, 'Inorganic Chemistry2', 'Name Author5', '333-333-333-333-2', 'Inorganic Publisher2', 2005, 0, 436, '0', 12.95, '0', '0', '0', 9),
(39, 'Analytical Chemistry1', 'Name Author1', '444-444-444-444-1', 'Analytical Publisher1', 2013, 0, 239, '0', 12.95, '0', '0', '0', 9),
(40, 'Classical Mechanics 1', 'Name Author1', '444-444-444-444-1', 'Classical1', 2013, 0, 345, '0', 12.95, '0', '0', '0', 9),
(41, 'Classical Mechanics 2', 'Name Author6', '444-444-444-444-1', 'Classics2', 2004, 0, 435, '0', 0, '0', '0', '0', 9),
(42, 'Thermodynamics1', 'Name Author7', '555-555-555-555-1', 'Thermo1', 2013, 0, 200, '0', 0, '0', '0', '0', 9);

-- --------------------------------------------------------

--
-- Table structure for table `Book_has_Course`
--

CREATE TABLE `Book_has_Course` (
  `Book_bookId` int(11) NOT NULL,
  `Course_courseId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Book_has_Course`
--

INSERT INTO `Book_has_Course` (`Book_bookId`, `Course_courseId`) VALUES
(29, 10),
(30, 10),
(31, 10),
(32, 11),
(36, 11),
(37, 12),
(38, 12),
(39, 15),
(40, 13),
(41, 13),
(42, 14);

-- --------------------------------------------------------

--
-- Table structure for table `Book_has_Keyword`
--

CREATE TABLE `Book_has_Keyword` (
  `Book_bookId` int(11) NOT NULL,
  `Keyword_keywordId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Book_has_Keyword`
--

INSERT INTO `Book_has_Keyword` (`Book_bookId`, `Keyword_keywordId`) VALUES
(29, 21),
(29, 22),
(30, 21),
(31, 21),
(31, 22),
(32, 23),
(36, 21),
(36, 23),
(36, 28),
(37, 21),
(37, 29),
(38, 21),
(39, 21),
(39, 30),
(40, 31),
(40, 32),
(40, 33),
(41, 31),
(41, 32),
(42, 31),
(42, 34);

-- --------------------------------------------------------

--
-- Table structure for table `Course`
--

CREATE TABLE `Course` (
  `courseId` int(11) NOT NULL,
  `courseName` varchar(45) NOT NULL,
  `uniName` varchar(100) NOT NULL,
  `uniDepartment` varchar(100) NOT NULL,
  `semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Course`
--

INSERT INTO `Course` (`courseId`, `courseName`, `uniName`, `uniDepartment`, `semester`) VALUES
(10, 'General Chemistry', 'MIT', 'Chemistry', 1),
(11, 'Organic Chemistry', 'MIT', 'Chemistry', 1),
(12, 'Inorganic Chemistry', 'MIT', 'Chemistry', 3),
(13, 'Classical Mechanics', 'MIT', 'Physics', 1),
(14, 'Thermodynamics', 'MIT', 'Physics', 1),
(15, 'Analytical Chemistry', 'MIT', 'Chemistry', 1),
(16, 'Full Stack', 'Ulster University', 'Computer Science', 8);

-- --------------------------------------------------------

--
-- Table structure for table `Keyword`
--

CREATE TABLE `Keyword` (
  `keywordId` int(11) NOT NULL,
  `word` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Keyword`
--

INSERT INTO `Keyword` (`keywordId`, `word`) VALUES
(21, 'chemistry'),
(22, 'general'),
(23, 'organic'),
(28, 'MIT'),
(29, 'inorganic'),
(30, 'analytical'),
(31, 'physics'),
(32, 'classical'),
(33, 'motion'),
(34, 'thermodynamics');

-- --------------------------------------------------------

--
-- Table structure for table `StatedBooks`
--

CREATE TABLE `StatedBooks` (
  `statedBooksId` int(11) NOT NULL,
  `bookId` int(11) NOT NULL,
  `courseId` int(11) NOT NULL,
  `Statement_statementId` int(11) NOT NULL,
  `Statement_User_userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `StatedBooks`
--

INSERT INTO `StatedBooks` (`statedBooksId`, `bookId`, `courseId`, `Statement_statementId`, `Statement_User_userId`) VALUES
(85, 29, 10, 38, 7),
(86, 39, 15, 38, 7),
(87, 36, 11, 38, 7),
(88, 38, 12, 38, 7),
(89, 40, 13, 39, 7),
(90, 42, 14, 39, 7);

-- --------------------------------------------------------

--
-- Table structure for table `Statement`
--

CREATE TABLE `Statement` (
  `statementId` int(11) NOT NULL,
  `semesterStatement` int(11) NOT NULL,
  `current` int(11) NOT NULL,
  `User_userId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Statement`
--

INSERT INTO `Statement` (`statementId`, `semesterStatement`, `current`, `User_userId`) VALUES
(38, 5, 1, 7),
(39, 4, 0, 7);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `userId` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `userCategory` int(11) NOT NULL,
  `categoryId` bigint(17) NOT NULL,
  `uniName` varchar(45) DEFAULT NULL,
  `uniDepartment` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`userId`, `username`, `password`, `email`, `userCategory`, `categoryId`, `uniName`, `uniDepartment`) VALUES
(7, 'student', '123456789', 'student@mail.com', 1, 123124124234, 'Ulster University', 'Computer Science'),
(9, 'publisher', '123456789', 'publisher@mail.com', 2, 123214214234, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Book`
--
ALTER TABLE `Book`
  ADD PRIMARY KEY (`bookId`,`User_userId`),
  ADD KEY `fk_Book_User1_idx` (`User_userId`);

--
-- Indexes for table `Book_has_Course`
--
ALTER TABLE `Book_has_Course`
  ADD PRIMARY KEY (`Book_bookId`,`Course_courseId`),
  ADD KEY `fk_Book_has_Course_Course1_idx` (`Course_courseId`),
  ADD KEY `fk_Book_has_Course_Book1_idx` (`Book_bookId`);

--
-- Indexes for table `Book_has_Keyword`
--
ALTER TABLE `Book_has_Keyword`
  ADD PRIMARY KEY (`Book_bookId`,`Keyword_keywordId`),
  ADD KEY `fk_Book_has_Keyword_Keyword1_idx` (`Keyword_keywordId`),
  ADD KEY `fk_Book_has_Keyword_Book_idx` (`Book_bookId`);

--
-- Indexes for table `Course`
--
ALTER TABLE `Course`
  ADD PRIMARY KEY (`courseId`);

--
-- Indexes for table `Keyword`
--
ALTER TABLE `Keyword`
  ADD PRIMARY KEY (`keywordId`);

--
-- Indexes for table `StatedBooks`
--
ALTER TABLE `StatedBooks`
  ADD PRIMARY KEY (`statedBooksId`,`Statement_statementId`,`Statement_User_userId`),
  ADD KEY `fk_statedBooks_Statement1_idx` (`Statement_statementId`,`Statement_User_userId`);

--
-- Indexes for table `Statement`
--
ALTER TABLE `Statement`
  ADD PRIMARY KEY (`statementId`,`User_userId`),
  ADD KEY `fk_Statement_User1_idx` (`User_userId`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Book`
--
ALTER TABLE `Book`
  MODIFY `bookId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `Course`
--
ALTER TABLE `Course`
  MODIFY `courseId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `Keyword`
--
ALTER TABLE `Keyword`
  MODIFY `keywordId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `StatedBooks`
--
ALTER TABLE `StatedBooks`
  MODIFY `statedBooksId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `Statement`
--
ALTER TABLE `Statement`
  MODIFY `statementId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Book`
--
ALTER TABLE `Book`
  ADD CONSTRAINT `fk_Book_User1` FOREIGN KEY (`User_userId`) REFERENCES `User` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Book_has_Course`
--
ALTER TABLE `Book_has_Course`
  ADD CONSTRAINT `fk_Book_has_Course_Book1` FOREIGN KEY (`Book_bookId`) REFERENCES `Book` (`bookId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Book_has_Course_Course1` FOREIGN KEY (`Course_courseId`) REFERENCES `Course` (`courseId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Book_has_Keyword`
--
ALTER TABLE `Book_has_Keyword`
  ADD CONSTRAINT `fk_Book_has_Keyword_Book` FOREIGN KEY (`Book_bookId`) REFERENCES `Book` (`bookId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Book_has_Keyword_Keyword1` FOREIGN KEY (`Keyword_keywordId`) REFERENCES `Keyword` (`keywordId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `StatedBooks`
--
ALTER TABLE `StatedBooks`
  ADD CONSTRAINT `fk_statedBooks_Statement1` FOREIGN KEY (`Statement_statementId`,`Statement_User_userId`) REFERENCES `Statement` (`statementId`, `User_userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `Statement`
--
ALTER TABLE `Statement`
  ADD CONSTRAINT `fk_Statement_User1` FOREIGN KEY (`User_userId`) REFERENCES `User` (`userId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
