-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2023 at 12:46 PM
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
-- Database: `dbstudentspace`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

CREATE TABLE `tbladmin` (
  `adminid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`adminid`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tblassignments`
--

CREATE TABLE `tblassignments` (
  `solutionsid` int(11) NOT NULL,
  `sclassname` varchar(200) NOT NULL,
  `ssubname` varchar(200) NOT NULL,
  `solutions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblassignments`
--

INSERT INTO `tblassignments` (`solutionsid`, `sclassname`, `ssubname`, `solutions`) VALUES
(2, 'TY-BCA', 'Go Programming', 'uploads3/GO Programming Assignment Solutio1.pdf'),
(3, 'TY-BCA', 'Java Programming', 'uploads3/Java Programming.pdf'),
(4, 'SY-BCA', 'C++ Programming', 'uploads3/C++.pdf'),
(5, 'SY-BCA', 'Python Programming', 'uploads3/Python Programming.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tblcart`
--

CREATE TABLE `tblcart` (
  `cartid` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `courseid` int(11) NOT NULL,
  `pmethod` varchar(50) NOT NULL,
  `ddate` text NOT NULL,
  `ttime` text NOT NULL,
  `status` int(11) NOT NULL,
  `year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblclass`
--

CREATE TABLE `tblclass` (
  `cid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblclass`
--

INSERT INTO `tblclass` (`cid`, `cname`) VALUES
(27, 'FY-BCA'),
(28, 'SY-BCA'),
(29, 'TY-BCA');

-- --------------------------------------------------------

--
-- Table structure for table `tblcontact`
--

CREATE TABLE `tblcontact` (
  `Id` int(11) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` text NOT NULL,
  `uid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcontact`
--

INSERT INTO `tblcontact` (`Id`, `uname`, `email`, `subject`, `message`, `uid`) VALUES
(11, 'Nitin Govardhane', 'nitingovardhane000@gmail.com', 'Android Assignments Solutions', 'Hello, I am writing to demand the solutions for the Android assignments. I have been waiting for a long time and I need them urgently. I have gone through the services overview, request runtime permissions, permissions on Android, app security best practices, and even built my first app, but I am still struggling to complete the assignments. I need the solutions to understand the concepts better and to improve my skills. Please send me the solutions as soon as possible so that I can complete the assignments on time. Thank you.', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `courseid` int(11) NOT NULL,
  `coursename` varchar(200) NOT NULL,
  `coursedesc` text NOT NULL,
  `courseprice` float NOT NULL,
  `coursedprice` float NOT NULL,
  `courseytlink` text NOT NULL,
  `coursetime` text NOT NULL,
  `courseimage` text NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`courseid`, `coursename`, `coursedesc`, `courseprice`, `coursedprice`, `courseytlink`, `coursetime`, `courseimage`, `cid`) VALUES
(4, 'C Programming', '<h3><strong>C Programming Foundations</strong></h3><ul><li>This introductory course in C Programming will teach you the basics of writing and debugging programs using the C language.&nbsp;</li><li>You will learn fundamental concepts such as data types, control structures, functions, arrays, and pointers.&nbsp;</li><li>Through a series of hands-on exercises and projects, you will gain practical experience in writing and executing C programs.&nbsp;</li><li>By the end of the course, you will have a solid foundation in C programming that will prepare you for more advanced courses and programming challenges.</li></ul><p><strong>Language: Hinglish</strong></p><p><strong>Live Interaction Time : 7pm to 9pm</strong></p><h4><strong>Course Timelapse:</strong></h4><ol><li>Introduction to C Programming</li><li>Data Types and Variables</li><li>Control Structures</li><li>Functions</li><li>Arrays and Pointers</li><li>Strings</li><li>File I/O</li><li>Dynamic Memory Allocation</li><li>Debugging and Error Handling</li><li>Projects and Exercises</li><li>Advanced Topics (Optional)</li><li>Conclusion and Next Steps</li></ol>', 100, 50, 'https://youtube.com/playlist?list=PLxgZQoSe9cg1drBnejUaDD9GEJBGQ5hMt', '12h 30min', 'uploads/c-programming.png', 27),
(5, 'DBMS - I', '<h2><strong>DBMS - I</strong></h2><p>This DBMS PostgreSQL course is designed to provide you with a comprehensive understanding of relational database management systems and how to use PostgreSQL to design and manage databases. With over 20 video lectures, you will gain a solid foundation in PostgreSQL and be prepared to apply these skills to real-world database projects.</p><p><strong>Language: Hinglish</strong></p><blockquote><p><strong>Live Interaction Time : 7pm to 9pm</strong></p></blockquote><h4><strong>Course Time-lapse:</strong></h4><ol><li>Introduction to Relational Database Management Systems</li><li>Understanding PostgreSQL and Its Features</li><li>Installing and Setting up PostgreSQL</li><li>Basic SQL Syntax and Commands</li><li>Creating and Modifying Tables</li><li>Constraints, Indexes, and Triggers</li><li>Querying Data with SELECT Statements</li><li>Filtering, Sorting, and Joining Data</li><li>Advanced SQL Concepts and Techniques</li><li>Views, Stored Procedures, and Functions</li></ol><p>With this course, you will gain a deep understanding of PostgreSQL and be equipped with the skills to design, manage, and optimize PostgreSQL databases for your projects.</p>', 100, 50, 'https://youtube.com/playlist?list=PLzAy3QBHoWZdxPXkD7UVymWm_Do3IdzwQ', '30h 20min', 'uploads/dbms.png', 27),
(6, 'Operating System', '<h2><strong>Operating System</strong></h2><p>This Operating System course covers the fundamentals of modern operating systems, including process management, memory management, file systems, and I/O management. You will learn how operating systems work, how they interact with hardware, and how they manage resources to provide a high level of performance and reliability. Through a series of video lectures and exercises, you will gain practical experience in understanding and implementing operating system concepts.</p><p><strong>Language: Hinglish</strong></p><blockquote><p><strong>Live Interaction Time : 7pm to 9pm</strong></p></blockquote><h4><strong>Course Timelapse:</strong></h4><ol><li>Introduction to Operating Systems</li><li>Process Management</li><li>Threads and Concurrency</li><li>Memory Management</li><li>Virtual Memory</li><li>File Systems</li><li>Input/Output Management</li><li>System Calls and APIs</li><li>Security and Protection</li><li>Advanced Topics and Future Directions</li></ol>', 100, 50, 'https://youtube.com/playlist?list=PLxCzCOWd7aiGz9donHRrE9I3Mwn6XdP8p', '15h 10min', 'uploads/operating-system.png', 27),
(7, 'PHP Prgramming', '<h2><strong>PHP Programming</strong></h2><p>This PHP Programming course is designed for beginners who want to learn PHP from scratch. PHP is one of the most popular server-side programming languages used to create dynamic websites and web applications. In this course, you will learn the fundamentals of PHP, including data types, variables, functions, control structures, arrays, and more. You will also gain practical experience through hands-on projects and exercises.</p><p><strong>Language: Hinglish</strong></p><blockquote><p><strong>Live Interaction Time : 7pm to 9pm</strong></p></blockquote><h4><strong>Course Timelapse:</strong></h4><ol><li>Introduction to PHP</li><li>Installing PHP and Setting up a Development Environment</li><li>PHP Syntax and Variables</li><li>Control Structures and Loops</li><li>Functions in PHP</li><li>Arrays in PHP</li><li>Object-Oriented Programming in PHP</li><li>Working with Databases using PHP</li><li>Handling Forms and User Input</li><li>Project: Creating a Simple CMS</li></ol>', 200, 100, 'https://youtube.com/playlist?list=PL0b6OzIxLPbyrzCMJOFzLnf_-_5E_dkzs', '43h 20min', 'uploads/php.png', 28),
(8, 'Python Programming', '<h2><strong>Python Programming</strong></h2><p>Python is a popular programming language used for a variety of applications, including web development, data analysis, machine learning, and more. This introductory course in Python will teach you the basics of the language and how to write Python programs for a variety of applications.</p><p><strong>Language: Hinglish</strong></p><blockquote><p><strong>Live Interaction Time : 7pm to 9pm</strong></p></blockquote><h4><strong>Course Time-lapse:</strong></h4><ol><li>Introduction to Python Programming</li><li>Data Types and Variables</li><li>Control Structures</li><li>Functions and Modules</li><li>File I/O and Exceptions</li><li>Lists, Tuples, and Dictionaries</li><li>Object-Oriented Programming</li><li>Regular Expressions</li><li>Debugging and Error Handling</li><li>Final Project</li></ol>', 200, 100, 'https://youtube.com/playlist?list=PLu0W_9lII9agwh1XjRt242xIpHhPT2llg', '30h 00m', 'uploads/python1.png', 28),
(9, 'Java Programming', '<h2><strong>Java programming</strong></h2><p>This course is designed for beginners who want to learn Java programming language from scratch. You will learn the basics of Java programming concepts and syntax through a series of hands-on projects and exercises.</p><p><strong>Language: Hinglish</strong></p><blockquote><p><strong>Live Interaction Time : 7pm to 9pm</strong></p></blockquote><h4><strong>Course Timelapse:</strong></h4><ol><li>Introduction to Java Programming</li><li>Setting Up Development Environment</li><li>Basic Syntax and Data Types</li><li>Control Structures</li><li>Loops</li><li>Methods</li><li>Arrays</li><li>Object-Oriented Programming Concepts</li><li>Inheritance and Polymorphism</li><li>Exception Handling and File I/O</li></ol>', 300, 150, 'https://youtube.com/playlist?list=PLu0W_9lII9agS67Uits0UnJyrYiXhDS6q', '21h 40m', 'uploads/java (1).png', 29),
(10, 'GO Programming', '<h2><strong>Go Programming</strong></h2><p>This course on Go Programming will provide you with a comprehensive introduction to the Go language. Go is a fast and efficient programming language designed to create highly scalable and concurrent applications. You will learn the fundamental concepts of Go programming, including data types, control structures, functions, arrays, slices, pointers, and interfaces. Through a series of hands-on exercises and projects, you will gain practical experience in writing and executing Go programs. By the end of the course, you will have a solid foundation in Go programming that will prepare you for more advanced courses and programming challenges.</p><p><strong>Language: Hinglish</strong></p><blockquote><p><strong>Live Interaction Time : 7pm to 9pm</strong></p></blockquote><h4><strong>Course Timelapse:</strong></h4><ul><li>Introduction to Go Programming</li><li>Data Types and Variables</li><li>Control Structures</li><li>Functions</li><li>Arrays and Slices</li><li>Pointers and Structures</li><li>Interfaces</li><li>Goroutines and Channels</li><li>File I/O</li><li>Debugging and Error Handling</li></ul>', 300, 150, 'https://youtube.com/playlist?list=PLRAV69dS1uWQGDQoBYMZWKjzuhCaOnBpa', '09h 30m', 'uploads/golang.png', 29),
(11, 'Android Programming', '<h2><strong>Android Programming</strong></h2><p>This Android Programming course will teach you the basics of creating Android applications using Java programming language and Android Studio. You will learn how to design and build user interfaces, work with databases, access web services, and create fully functional apps.</p><p><strong>Language: Hinglish</strong></p><blockquote><p><strong>Live Interaction Time : 7pm to 9pm</strong></p></blockquote><h4><strong>Course Timelapse:</strong></h4><ol><li>Introduction to Android Programming</li><li>Setting up the Development Environment</li><li>Creating Your First Android Application</li><li>User Interface Design and Layouts</li><li>Activities and Intents</li><li>Working with Databases</li><li>Networking and Web Services</li><li>Multimedia and Graphics</li><li>Android Security and Permissions</li><li>Publishing Your App to Google Play Store</li></ol>', 300, 150, 'https://youtube.com/playlist?list=PLUhfM8afLE_Ok-0Lx2v9hfrmbxi3GgsX1', '15h 50m', 'uploads/android1.png', 29),
(12, 'C++ Programming', '<h2><strong>C++ Programming&nbsp;</strong></h2><p>This course in C++ Programming is designed for beginners who want to learn the fundamentals of programming in C++. Through a series of video lectures and hands-on exercises, you will gain practical experience in writing and executing C++ programs. By the end of the course, you will have a solid foundation in C++ programming that will prepare you for more advanced courses and programming challenges.</p><p><strong>Language: Hinglish</strong></p><blockquote><p><strong>Live Interaction Time : 7pm to 9pm</strong></p></blockquote><h4><strong>Course Timelapse:</strong></h4><ol><li>Introduction to C++ Programming</li><li>Data Types and Variables</li><li>Operators and Expressions</li><li>Control Structures</li><li>Functions</li><li>Arrays and Pointers</li><li>Object-Oriented Programming</li><li>File Handling</li><li>Exception Handling</li><li>Templates and Standard Template Library</li></ol><p>Each video lecture covers a specific topic and includes examples and exercises to help reinforce your learning. The course is self-paced, allowing you to learn at your own speed and revisit concepts as needed. By the end of the course, you will have the knowledge and skills to start writing your own C++ programs.</p>', 200, 100, 'https://youtube.com/playlist?list=PLu0W_9lII9agpFUAlPFe_VNSlXW5uE0YL', '24h 04m', 'uploads/cpp1.png', 28);

-- --------------------------------------------------------

--
-- Table structure for table `tblnotes`
--

CREATE TABLE `tblnotes` (
  `notesid` int(11) NOT NULL,
  `pdffile` text NOT NULL,
  `courseid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblnotes`
--

INSERT INTO `tblnotes` (`notesid`, `pdffile`, `courseid`) VALUES
(15, 'uploads2/C PROGRAMMING Notes.pdf', 4),
(16, 'uploads2/Android_CompleteNotes.pdf', 11),
(17, 'uploads2/C++ NOTES.pdf', 12),
(18, 'uploads2/Java Written Notes.pdf', 9),
(19, 'uploads2/PHP-Notes.pdf', 7),
(20, 'uploads2/Python-Notes-Udemy.pdf', 8),
(21, 'uploads2/DBMS Notes.pdf', 5),
(22, 'uploads2/OS Notes.pdf', 6),
(23, 'uploads2/GO Programming.pdf', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

CREATE TABLE `tbluser` (
  `uid` int(11) NOT NULL,
  `ufname` varchar(50) NOT NULL,
  `ulname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`uid`, `ufname`, `ulname`, `email`, `password`) VALUES
(13, 'Nitin', 'Govardhane', 'nitin@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbladmin`
--
ALTER TABLE `tbladmin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `tblassignments`
--
ALTER TABLE `tblassignments`
  ADD PRIMARY KEY (`solutionsid`);

--
-- Indexes for table `tblcart`
--
ALTER TABLE `tblcart`
  ADD PRIMARY KEY (`cartid`),
  ADD KEY `pid` (`courseid`),
  ADD KEY `tblcart_ibfk_2` (`uid`);

--
-- Indexes for table `tblclass`
--
ALTER TABLE `tblclass`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `tblcontact`
--
ALTER TABLE `tblcontact`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`courseid`);

--
-- Indexes for table `tblnotes`
--
ALTER TABLE `tblnotes`
  ADD PRIMARY KEY (`notesid`);

--
-- Indexes for table `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbladmin`
--
ALTER TABLE `tbladmin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblassignments`
--
ALTER TABLE `tblassignments`
  MODIFY `solutionsid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblcart`
--
ALTER TABLE `tblcart`
  MODIFY `cartid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=174;

--
-- AUTO_INCREMENT for table `tblclass`
--
ALTER TABLE `tblclass`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tblcontact`
--
ALTER TABLE `tblcontact`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `courseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tblnotes`
--
ALTER TABLE `tblnotes`
  MODIFY `notesid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
