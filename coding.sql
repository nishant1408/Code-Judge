-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 11:06 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coding`
--

-- --------------------------------------------------------

--
-- Table structure for table `log_time`
--

CREATE TABLE `log_time` (
  `id` int(11) NOT NULL,
  `time` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_time`
--

INSERT INTO `log_time` (`id`, `time`) VALUES
(1, '1538802090'),
(4, '1538718922'),
(5, '1538718873'),
(6, '1538719086'),
(7, '1538719883'),
(8, '1538719636'),
(9, '1538719741'),
(10, '1538719584'),
(11, '1538722333'),
(12, '1538722424'),
(13, '1538722525'),
(14, '1538722225'),
(18, '1538722609'),
(19, '1538724051'),
(20, '1538724573'),
(21, '1538725003'),
(22, '1538725024'),
(23, '1538724127'),
(24, '1538725065'),
(25, '1538724460'),
(26, '1538724386'),
(27, '1538726649'),
(28, '1538725183'),
(29, '1538726058'),
(30, '1538725960'),
(31, '1538725943'),
(32, '1538725989'),
(33, '1538725677'),
(34, '1538725791'),
(36, '1538726188'),
(37, '1538726681'),
(38, '1538727125'),
(39, '1538727211'),
(40, '1538726992'),
(41, '1538727368'),
(42, '1538727460'),
(43, '1538728803'),
(44, '1538728781'),
(45, '1538729083'),
(46, '1538728859'),
(47, '1538729796'),
(48, '1538729611'),
(49, '1538728774'),
(50, '1538729996'),
(51, '1538730066'),
(52, '1538730267'),
(53, '1538729906'),
(54, '1538730499'),
(55, '1538730512'),
(56, '1538730623'),
(58, '1538730509'),
(61, '1538730322'),
(63, '1538730495'),
(67, '1538731635'),
(68, '1538732302'),
(69, '1538732558'),
(70, '1538732645'),
(71, '1538733108'),
(72, '1538733042'),
(73, '1538733746'),
(74, '1538733894'),
(76, '1538733820'),
(77, '1538733882'),
(78, '1538733389');

-- --------------------------------------------------------

--
-- Table structure for table `log_time_quiz`
--

CREATE TABLE `log_time_quiz` (
  `id` int(11) NOT NULL,
  `time` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log_time_quiz`
--

INSERT INTO `log_time_quiz` (`id`, `time`) VALUES
(1, 1538723358),
(4, 1538717534),
(5, 1538717582),
(6, 1538718326),
(7, 1538718490),
(8, 1538718477),
(9, 1538718517),
(10, 1538718770),
(11, 1538720335),
(12, 1538720600),
(13, 1538721346),
(14, 1538721110),
(18, 1538721402),
(19, 1538723066),
(20, 1538723646),
(21, 1538723700),
(22, 1538723762),
(23, 1538723724),
(24, 1538723821),
(25, 1538723860),
(26, 1538723861),
(27, 1538724474),
(28, 1538724489),
(29, 1538724886),
(30, 1538724928),
(31, 1538724960),
(32, 1538725068),
(33, 1538725323),
(34, 1538725903),
(36, 1538725683),
(37, 1538725845),
(38, 1538725950),
(39, 1538726096),
(40, 1538726261),
(41, 1538726285),
(42, 1538726952),
(43, 1538727834),
(44, 1538727979),
(45, 1538728018),
(46, 1538728022),
(47, 1538728576),
(48, 1538728636),
(49, 1538728630),
(50, 1538728717),
(51, 1538728762),
(52, 1538729009),
(53, 1538729045),
(54, 1538729094),
(55, 1538729296),
(56, 1538729457),
(58, 1538729290),
(61, 1538729395),
(63, 1538729854),
(67, 1538730403),
(68, 1538730846),
(69, 1538731332),
(70, 1538732025),
(71, 1538732278),
(72, 1538732454),
(73, 1538732541),
(74, 1538732612),
(76, 1538732697),
(77, 1538732793),
(78, 1538732860);

-- --------------------------------------------------------

--
-- Table structure for table `problems`
--

CREATE TABLE `problems` (
  `id` int(11) NOT NULL,
  `statement` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `problems`
--

INSERT INTO `problems` (`id`, `statement`) VALUES
(3, 'Question 3:<br>\r\n<b>class for java program must be <i>problem3</i></b><br><br>\r\nWrite a program to print the following pattern taking number of rows as user input.<br>\r\n<b>Input : </b><br>\r\nn<br>\r\n<b>Output:</b><br>\r\npattern with n rows <br>\r\n<br>\r\n<b>Constraints:</b><br>\r\nn<10<br><br>\r\n<i>Example 1</i><br>\r\n<b>Input : </b><br>\r\n3<br>\r\n<b>Output:</b><br>\r\n1<br>\r\n121<br>\r\n12321<br>\r\n<br>\r\n<i>Example 2</i><br>\r\n<b>Input:</b><br>\r\n5<br>\r\n<b>Output :</b><br>\r\n1<br>\r\n121<br>\r\n12321<br>\r\n1234321<br>\r\n123454321<br>'),
(4, 'Question 4:<br>\r\n<b>class for java program must be <i>problem4</i></b><br><br>\r\nWrite a program to check whether a number is magic number or not.<br>\r\nA magic number is a number whose sum of digit is equal to 1 after summation of it individual digits and reduced to a single digit number .<br>\r\nEx : 181 is magic number ,<br>\r\n1+8+1 = 10<br>\r\nagain adding digits of 10 ,<br>\r\n1+0=1<br>\r\nsince sum of digits is 1 so it is a magic number .<br>\r\nEx : 9145 is a magic number<br>\r\n9+1+4+5 = 19 ,<br>\r\nagain adding digits of 19 ,<br>\r\n1+9 = 10<br>\r\nagain adding digits of 10,<br>\r\n1+0 = 1<br>\r\nsince sum of digits is 1 so it is a magic number .<br> \r\nPrint yes if magic number else print no'),
(2, 'Question 2:<br>\r\n<b>class for java program must be <i>problem2</i></b><br><br>\r\nWrite a program to take in a string as an input and print the number of characters in the string which has it\'s ASCII value as a prime number.\r\n<br><br>\r\nExample:<Br>\r\n1)<Br>\r\nInput:Hi, this is Sandeep.<br>\r\nOutput:4<Br>\r\n2)<Br>\r\nInput:Nishant Kumar<Br>\r\nOutput:3<br>\r\n3)<Br>\r\nInput:I love coding<br>\r\nOutput:3<br>'),
(1, 'Question 1:<br>\r\n<b>Class for Java program must be <i>problem1</i></b><br><br>\r\nWrite a program to take in a number as input and find out whether the number is prime or not.<br><br>\r\nA number is known as a prime number if it has only two factors .\r\nPrint Yes if the number is prime else print No<br>\r\n<b>Constraints:</b><br>\r\n-10000 < n < 5805689712569812103268987<br><br>\r\n<i>Example 1</i><br>\r\n<b>Input : </b><br>\r\n11<br>\r\n<b>Output:</b><br>\r\nYes<br>\r\n\r\n<br>\r\n<i>Example 2</i><br>\r\n<b>Input:</b><br>\r\n75<br>\r\n<b>Output :</b><br>\r\nNo<br>\r\n\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `ques` varchar(1000) NOT NULL,
  `option1` varchar(100) NOT NULL,
  `option2` varchar(100) NOT NULL,
  `option3` varchar(100) NOT NULL,
  `option4` varchar(100) NOT NULL,
  `coption` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`id`, `ques`, `option1`, `option2`, `option3`, `option4`, `coption`) VALUES
(1, '_______ is the process of finding errors and fixing them within a program.', 'Compiling', 'Executing', 'Debugging', 'Scanning', 'C'),
(2, 'Jim currently runs a car rental dealership and wishes to write a program that allows the user to enter in the temperature of the location they plan to visit and then recommend a car based on the data.\r\nBelow is a summary of the program structure Jim is looking for. Temp greater than 80 a Convertible should be selected.\r\nTemp  greater than 60 and less than 80 a SUV should be selected. Temp less than 60 a truck should be selected.\r\nJim has no trouble writing the code if the temperate is greater than 80 but gets stuck when he arrives at the second line of code which reads Temp  greater than 60 and less than 80 a SUV should be selected.\r\nWhat type of operator does Jim need to use within his code for the following business?', '&&', '| |', '!=', '==', 'A'),
(3, 'Of the following if statements, which one correctly executes three instructions if the condition is true?', 'if (x < 0) a = b * 2; y = x; z = a - y;', '{ if (x < 0) a = b * 2; y = x; z = a - y; }', 'if{ (x < 0) a = b * 2; y = x; z = a - y ; }', 'if (x < 0) { a = b * 2; y = x; z = a - y; }', 'D'),
(4, 'Which of the sets of statements below will add 1 to x if x is positive and subtract 1 from x if x is negative but leave x alone if x is 0?', 'If (x > 0) x++; else x--;', 'If (x > 0) x++; else if (x < 0) x--;', 'If (x == 0) x = 0; else x++; x--;', 'X++; x--;', 'B'),
(5, 'Sal needs to execute a section of code ten times within a program. Compare the selection structures below and select which one meets the needs identified.', 'If-Else', 'For', 'While', 'If', 'B'),
(6, 'Jay is considering adding a repetition statement within his Java programming final project.  Jay is unsure of the number of times each loop needs to execute.  Analyze the conditional statements below and select which statement best fits the need identified by Jay within his programming.', 'While loop', 'If-Else', 'For loop', 'Switch statement', 'A'),
(7, 'Which command will stop an infinite loop?', 'Alt - C', 'Shift - C', 'Esc', 'Ctrl - C', 'D'),
(8, 'Which of the following language is used to write the syntax for the LINUX operating system?', 'Perl', 'C', 'Fortran', 'Algol', 'B'),
(9, 'How many times will the loop be executed?\r\n   <br><br>\r\n   for(;;)<br>\r\n     printf(\"\");', '0 times', 'Infinite times', '1 time', '10 times', 'B'),
(10, 'What will be the value of the variable \'i\' after executing the following section of code?\r\n<br><br>\r\n    for(i=0;i<=5;i++);', '0', '1', '5', 'Compile time/Run time error', 'C'),
(11, 'Array Passed as an argument to a function is interpreted as', 'Address of the array', 'Values of the first elements of the array', 'Address of the first element of the array', 'Number of element of the array', 'C'),
(12, 'Who made C along with Dennis ritchie?', 'Ken Thomson', 'Bjarne Strenstrup', 'James A. Gosling', 'Dr E F cold', 'A'),
(13, 'A variable can\'t start with', 'number', 'A Special character other than \'_\'', 'Both A and B', 'Alphabet', 'C'),
(14, 'Which of the following is not a correct variable type?', 'float', 'real', 'double', 'long long int', 'B'),
(15, 'Array elements are always stored in ________ memory location ', 'sequential', 'Random', 'Both', 'None', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `team` varchar(100) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`team`, `total`) VALUES
('Abhra_Anindita', 49),
('ABISANKA', 16),
('anirbanshatabdi', 14),
('Anonymous', 10),
('AppyROCKS', 18),
('ASTRO', 63),
('Atasi_sank', 93),
('Atreyi_Mohar', 53),
('beast', 124),
('biswadipsayan', 41),
('B_D', 76),
('cazzmala', 14),
('chintan@souradeep', 104),
('chocolate', 12),
('cobra', 85),
('CODERS', 18),
('CODE_LOAD', 22),
('coding123', 18),
('codingkillers', 12),
('Creed', 16),
('CYBERPHASE', 20),
('Diver', 65),
('DJB_Single', 41),
('dude', 14),
('ELITE_SQUAD', 90),
('Godbabe', 10),
('goldensnitch', 35),
('GRYFFINDOR', 14),
('Hacking_Lords', 57),
('Laterals', 0),
('Madhu_square', 18),
('MILIND ', 0),
('MONDALROY', 14),
('Naagin', 121),
('nazar', 106),
('noobs', 10),
('NOOBSTARS', 100),
('nothingreallymatters', 82),
('Pheonix', 62),
('PRIYANKAAMRIT', 60),
('pro', 20),
('programrunkorchena', 52),
('ravenclaw', 26),
('RBROTHERS', 6),
('RedandBlue', 91),
('RIPPER_CODER', 29),
('RoSo', 128),
('san-suco', 10),
('saptak_aparajita', 0),
('shou_man', 74),
('sohanrahul', 115),
('SOUL_REAPER', 69),
('stephenites', 16),
('SubhoShubh', 12),
('Subhro@yon1', 70),
('sujitdebadrita', 18),
('sumitakash', 105),
('teamalpha', 41),
('team_sabya', 82),
('team_sree', 16),
('TWIBBY', 10),
('utsab', 10),
('WOULFPACK', 20);

-- --------------------------------------------------------

--
-- Table structure for table `score_code`
--

CREATE TABLE `score_code` (
  `team` varchar(100) NOT NULL,
  `qid` int(11) NOT NULL,
  `pu` int(11) NOT NULL,
  `pr` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score_code`
--

INSERT INTO `score_code` (`team`, `qid`, `pu`, `pr`) VALUES
('Abhra_Anindita', 1, 2, 2),
('Abhra_Anindita', 2, 2, 0),
('Abhra_Anindita', 3, 3, 5),
('Abhra_Anindita', 4, 0, 0),
('ABISANKA', 1, 0, 0),
('ABISANKA', 2, 0, 0),
('ABISANKA', 3, 0, 0),
('ABISANKA', 4, 0, 0),
('anirbanshatabdi', 1, 0, 0),
('anirbanshatabdi', 2, 0, 0),
('anirbanshatabdi', 3, 0, 0),
('anirbanshatabdi', 4, 0, 0),
('Anonymous', 1, 0, 0),
('Anonymous', 2, 0, 0),
('Anonymous', 3, 0, 0),
('Anonymous', 4, 0, 0),
('AppyROCKS', 1, 0, 0),
('AppyROCKS', 2, 0, 0),
('AppyROCKS', 3, 0, 0),
('AppyROCKS', 4, 0, 0),
('ASTRO', 1, 3, 2),
('ASTRO', 2, 1, 5),
('ASTRO', 3, 0, 0),
('ASTRO', 4, 0, 0),
('Atasi_sank', 1, 3, 3),
('Atasi_sank', 2, 0, 1),
('Atasi_sank', 3, 3, 4),
('Atasi_sank', 4, 3, 3),
('Atreyi_Mohar', 1, 3, 3),
('Atreyi_Mohar', 2, 0, 0),
('Atreyi_Mohar', 3, 0, 0),
('Atreyi_Mohar', 4, 1, 2),
('Beast', 1, 3, 5),
('Beast', 2, 3, 5),
('Beast', 3, 3, 5),
('Beast', 4, 3, 5),
('biswadipsayan', 1, 1, 5),
('biswadipsayan', 2, 0, 0),
('biswadipsayan', 3, 0, 0),
('biswadipsayan', 4, 0, 0),
('B_D', 1, 0, 0),
('B_D', 2, 0, 0),
('B_D', 3, 3, 5),
('B_D', 4, 3, 3),
('cazzmala', 1, 0, 0),
('cazzmala', 2, 0, 0),
('cazzmala', 3, 0, 0),
('cazzmala', 4, 0, 0),
('chintan@souradeep', 1, 3, 5),
('chintan@souradeep', 2, 0, 0),
('chintan@souradeep', 3, 3, 5),
('chintan@souradeep', 4, 2, 4),
('chocolate', 1, 0, 0),
('chocolate', 2, 0, 0),
('chocolate', 3, 0, 0),
('chocolate', 4, 0, 0),
('cobra', 1, 3, 5),
('cobra', 2, 0, 0),
('cobra', 3, 3, 5),
('cobra', 4, 0, 1),
('CODERS', 1, 0, 0),
('CODERS', 2, 0, 0),
('CODERS', 3, 0, 0),
('CODERS', 4, 0, 0),
('CODE_LOAD', 1, 0, 0),
('CODE_LOAD', 2, 0, 0),
('CODE_LOAD', 3, 0, 0),
('CODE_LOAD', 4, 0, 0),
('coding123', 1, 0, 0),
('coding123', 2, 0, 0),
('coding123', 3, 0, 0),
('coding123', 4, 0, 0),
('codingkillers', 1, 0, 0),
('codingkillers', 2, 0, 0),
('codingkillers', 3, 0, 0),
('codingkillers', 4, 0, 0),
('Creed', 1, 0, 0),
('Creed', 2, 0, 0),
('Creed', 3, 0, 0),
('Creed', 4, 0, 0),
('CYBERPHASE', 1, 0, 0),
('CYBERPHASE', 2, 0, 0),
('CYBERPHASE', 3, 0, 0),
('CYBERPHASE', 4, 0, 0),
('Diver', 1, 1, 3),
('Diver', 2, 0, 0),
('Diver', 3, 0, 0),
('Diver', 4, 3, 4),
('DJB_Single', 1, 3, 3),
('DJB_Single', 2, 0, 0),
('DJB_Single', 3, 0, 0),
('DJB_Single', 4, 0, 0),
('dude', 1, 0, 0),
('dude', 2, 0, 0),
('dude', 3, 0, 0),
('dude', 4, 0, 0),
('ELITE_SQUAD', 1, 3, 5),
('ELITE_SQUAD', 2, 0, 0),
('ELITE_SQUAD', 3, 3, 1),
('ELITE_SQUAD', 4, 2, 4),
('Godbabe', 1, 0, 0),
('Godbabe', 2, 0, 0),
('Godbabe', 3, 0, 0),
('Godbabe', 4, 0, 0),
('goldensnitch', 1, 3, 3),
('goldensnitch', 2, 0, 0),
('goldensnitch', 3, 0, 0),
('goldensnitch', 4, 0, 0),
('GRYFFINDOR', 1, 0, 0),
('GRYFFINDOR', 2, 0, 0),
('GRYFFINDOR', 3, 0, 0),
('GRYFFINDOR', 4, 0, 0),
('Hacking_Lords', 1, 3, 5),
('Hacking_Lords', 2, 0, 0),
('Hacking_Lords', 3, 0, 0),
('Hacking_Lords', 4, 0, 0),
('Laterals', 1, 2, 3),
('Laterals', 2, 0, 0),
('Laterals', 3, 0, 0),
('Laterals', 4, 0, 0),
('Madhu_square', 1, 0, 0),
('Madhu_square', 2, 0, 0),
('Madhu_square', 3, 0, 0),
('Madhu_square', 4, 0, 0),
('MILIND', 1, 0, 0),
('MILIND', 2, 0, 0),
('MILIND', 3, 0, 0),
('MILIND', 4, 0, 0),
('MONDALROY', 1, 0, 0),
('MONDALROY', 2, 0, 0),
('MONDALROY', 3, 0, 0),
('MONDALROY', 4, 0, 0),
('Naagin', 1, 3, 5),
('Naagin', 2, 1, 5),
('Naagin', 3, 3, 5),
('Naagin', 4, 1, 2),
('nazar', 1, 3, 5),
('nazar', 2, 0, 0),
('nazar', 3, 3, 5),
('nazar', 4, 2, 4),
('noobs', 1, 0, 0),
('noobs', 2, 0, 0),
('noobs', 3, 0, 0),
('noobs', 4, 0, 0),
('NOOBSTARS', 1, 3, 5),
('NOOBSTARS', 2, 0, 0),
('NOOBSTARS', 3, 3, 5),
('NOOBSTARS', 4, 3, 2),
('nothingreallymatters', 1, 3, 3),
('nothingreallymatters', 2, 0, 0),
('nothingreallymatters', 3, 3, 5),
('nothingreallymatters', 4, 0, 0),
('Pheonix', 1, 3, 3),
('Pheonix', 2, 0, 0),
('Pheonix', 3, 0, 0),
('Pheonix', 4, 2, 3),
('PRIYANKAAMRIT', 1, 3, 5),
('PRIYANKAAMRIT', 2, 0, 0),
('PRIYANKAAMRIT', 3, 0, 0),
('PRIYANKAAMRIT', 4, 1, 1),
('pro', 1, 0, 0),
('pro', 2, 0, 0),
('pro', 3, 0, 0),
('pro', 4, 0, 0),
('programrunkorchena', 1, 3, 3),
('programrunkorchena', 2, 0, 2),
('programrunkorchena', 3, 1, 1),
('programrunkorchena', 4, 2, 2),
('ravenclaw', 1, 1, 2),
('ravenclaw', 2, 0, 0),
('ravenclaw', 3, 0, 0),
('ravenclaw', 4, 0, 0),
('RBROTHERS', 1, 0, 0),
('RBROTHERS', 2, 0, 0),
('RBROTHERS', 3, 0, 0),
('RBROTHERS', 4, 0, 0),
('RedandBlue', 1, 3, 3),
('RedandBlue', 2, 0, 0),
('RedandBlue', 3, 3, 5),
('RedandBlue', 4, 3, 3),
('RIPPER_CODER', 1, 1, 3),
('RIPPER_CODER', 2, 0, 0),
('RIPPER_CODER', 3, 0, 0),
('RIPPER_CODER', 4, 0, 0),
('RoSo', 1, 3, 3),
('RoSo', 2, 3, 5),
('RoSo', 3, 3, 5),
('RoSo', 4, 3, 3),
('san-suco', 1, 0, 0),
('san-suco', 2, 0, 0),
('san-suco', 3, 0, 0),
('san-suco', 4, 0, 0),
('saptak_aparajita', 1, 0, 0),
('saptak_aparajita', 2, 0, 0),
('saptak_aparajita', 3, 0, 0),
('saptak_aparajita', 4, 0, 0),
('shou_man', 1, 3, 5),
('shou_man', 2, 0, 0),
('shou_man', 3, 0, 0),
('shou_man', 4, 3, 3),
('sohanrahul', 1, 3, 3),
('sohanrahul', 2, 3, 5),
('sohanrahul', 3, 3, 5),
('sohanrahul', 4, 1, 2),
('SOUL_REAPER', 1, 3, 5),
('SOUL_REAPER', 2, 0, 0),
('SOUL_REAPER', 3, 0, 0),
('SOUL_REAPER', 4, 2, 2),
('stephenites', 1, 0, 0),
('stephenites', 2, 0, 0),
('stephenites', 3, 0, 0),
('stephenites', 4, 0, 0),
('SubhoShubh', 1, 0, 0),
('SubhoShubh', 2, 0, 0),
('SubhoShubh', 3, 0, 0),
('SubhoShubh', 4, 0, 0),
('Subhro@yon', 1, 0, 0),
('Subhro@yon', 2, 0, 0),
('Subhro@yon', 3, 0, 0),
('Subhro@yon', 4, 0, 0),
('Subhro@yon1', 1, 3, 5),
('Subhro@yon1', 2, 0, 2),
('Subhro@yon1', 3, 0, 0),
('Subhro@yon1', 4, 1, 3),
('sujitdebadrita', 1, 0, 0),
('sujitdebadrita', 2, 0, 0),
('sujitdebadrita', 3, 0, 0),
('sujitdebadrita', 4, 0, 0),
('sumitakash', 1, 3, 5),
('sumitakash', 2, 0, 0),
('sumitakash', 3, 3, 5),
('sumitakash', 4, 3, 3),
('teamalpha', 1, 3, 3),
('teamalpha', 2, 0, 0),
('teamalpha', 3, 0, 0),
('teamalpha', 4, 0, 0),
('team_sabya', 1, 3, 5),
('team_sabya', 2, 0, 0),
('team_sabya', 3, 0, 0),
('team_sabya', 4, 3, 5),
('team_sree', 1, 0, 0),
('team_sree', 2, 0, 0),
('team_sree', 3, 0, 0),
('team_sree', 4, 0, 0),
('TWIBBY', 1, 0, 0),
('TWIBBY', 2, 0, 0),
('TWIBBY', 3, 0, 0),
('TWIBBY', 4, 0, 0),
('utsab', 1, 0, 0),
('utsab', 2, 0, 0),
('utsab', 3, 0, 0),
('utsab', 4, 0, 0),
('WOULFPACK', 1, 0, 0),
('WOULFPACK', 2, 0, 0),
('WOULFPACK', 3, 0, 0),
('WOULFPACK', 4, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `testcase`
--

CREATE TABLE `testcase` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `input` varchar(200) NOT NULL,
  `output` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testcase`
--

INSERT INTO `testcase` (`id`, `qid`, `input`, `output`, `type`) VALUES
(4, 3, '3', '1\r\n121\r\n12321', 'public'),
(5, 3, '5', '1\r\n121\r\n12321\r\n1234321\r\n123454321', 'public'),
(6, 3, '9', '1\r\n121\r\n12321\r\n1234321\r\n123454321\r\n12345654321\r\n1234567654321\r\n123456787654321\r\n12345678987654321', 'private'),
(8, 3, '4', '1\r\n121\r\n12321\r\n1234321', 'private'),
(9, 3, '7', '1\r\n121\r\n12321\r\n1234321\r\n123454321\r\n12345654321\r\n1234567654321', 'public'),
(26, 3, '5', '1\r\n121\r\n12321\r\n1234321\r\n123454321', 'private'),
(27, 3, '6', '1\r\n121\r\n12321\r\n1234321\r\n123454321\r\n12345654321', 'private'),
(28, 3, '8', '1\r\n121\r\n12321\r\n1234321\r\n123454321\r\n12345654321\r\n1234567654321\r\n123456787654321', 'private'),
(29, 4, '28', 'yes', 'public'),
(30, 4, '9145', 'yes', 'public'),
(31, 4, '456', 'no', 'public'),
(32, 4, '1', 'yes', 'private'),
(33, 4, '256994', 'no', 'private'),
(34, 4, '8758967671', 'yes', 'private'),
(35, 4, '1234567891', 'yes', 'private'),
(36, 4, '9999999999991', 'yes', 'private'),
(37, 1, '53', 'Yes', 'public'),
(38, 1, '27', 'No', 'public'),
(39, 1, '815692', 'No', 'public'),
(40, 1, '7717', 'Yes', 'private'),
(41, 1, '21929', 'Yes', 'private'),
(42, 1, '998957', 'Yes', 'private'),
(43, 1, '5805689712569812103268986', 'No', 'private'),
(44, 1, '984621657246128126784256', 'No', 'private'),
(45, 2, '5 5 5', '3', 'public'),
(46, 2, 'Alphatech', '2', 'public'),
(47, 2, 'Good Morning!', '2', 'public'),
(48, 2, '!@#$%^&*()_+', '3', 'private'),
(49, 2, '+919964108420', '1', 'private'),
(50, 2, '.-. ..-- .-.- --.-', '0', 'private'),
(51, 2, '(a+b)^2=(a^2+2*a*b+b^2)', '9', 'private'),
(52, 2, 'aAbBcCdDeEfFgGhHiIjJkKlLmMnNoOpPqQrRsStTuUvVwWxXyYzZ', '12', 'private');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `team` varchar(100) NOT NULL,
  `name1` varchar(1000) NOT NULL,
  `roll1` varchar(100) NOT NULL,
  `email1` varchar(200) NOT NULL,
  `mobile1` varchar(200) NOT NULL,
  `year1` varchar(10) NOT NULL,
  `name2` varchar(1000) NOT NULL,
  `roll2` varchar(100) NOT NULL,
  `email2` varchar(200) NOT NULL,
  `mobile2` varchar(200) NOT NULL,
  `year2` varchar(10) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `team`, `name1`, `roll1`, `email1`, `mobile1`, `year1`, `name2`, `roll2`, `email2`, `mobile2`, `year2`, `password`) VALUES
(1, 'Beast', 'NISHANT KUMAR', 'ECE2015032', 'n1481997@gmail.com', '9831297406', '4th', 'NISHANT KUMAR', 'ECE2015032', '', '9831297406', '4th', '12345'),
(2, 'a', 'A', '4', 'b@gmail.com', '7585456898', '1st', '', '', '', '', '', '22222'),
(3, 'Chodu United', 'RONALDO', '7', 'b@gmail.com', '961489456', '3rd', '', '', '', '', '', '12345'),
(4, 'sumitakash', 'SUMIT KUMAR', 'ece2017/032', 'ssumitkumar415@gmail.com', '7677742840', '2nd', 'AKASH KUMAR SHAW ', 'ece2017/026', 'shawakash431@gmail.com', '8240896073', '2nd', '789456'),
(5, 'ELITE_SQUAD', 'ANKIT KUMAR BARNWAL', 'ECE2017/056', 'akb25102000@gmail.com', '9123314215', '2nd', 'SUDEEP DWIVEDI', 'ECE2017/038', 'loginsubashnow@gmail.com', '9231101986', '2nd', 'Ankit@2510'),
(6, 'B_D', 'DIPAYAN MURMU', 'ECE2017/006', 'dipayanmurmu8@gmail.com', '9674683167', '2nd', 'BIBHAS ROY', 'ECE2017/024', 'bibhasroy12016@gmail.com', '9748752153', '2nd', 'bd@2018'),
(7, 'ABISANKA', 'SUBHAJIT DAS', 'ECE2017/021', 'subhojitd32@gmail.com', '8240151730', '2nd', 'ABISANKA DATTA CHOWDHURY', 'ECE2017/019', 'abisankadattachowdhury@gmail.com', '9123021813', '2nd', '321321'),
(8, 'cobra', 'SHALINI SIL', 'ECE2017/081', 'shalinisil81@gmail.com', '8240776163', '2nd', 'RITIKA DAS', 'ECE2017/063', 'ritika1999das@gmail.com', '8420464550', '2nd', 'python'),
(9, 'biswadipsayan', 'SAYAN DEY SARKAR', 'ECE2017/012', 'sayandeysarkarin@gmail.com', '8777567851', '2nd', 'BISWADIP DAWN', 'ECE2017/020', 'dawnbiswadip7@gmail.com', '8017303034', '2nd', 'Abcd@1234'),
(10, 'Laterals', 'SOUMYA SAMANTA', 'ECE2018/L08', 'soumya.samanta443@gmail.com', '8013850498', '2nd', 'SWAGATA SASMAL', 'ECE2018/L11', 'its.swagata.sasmal@gmail.com', '9830771967', '2nd', '12345'),
(11, 'team_sabya', 'NABANITA PACHAL', 'ECE2016/078', 'nabanitapachal@gmail.com', '7059282765', '3rd', 'SUMAN GHOSH', 'ECE2016/80', '007sumanghosh@gmail.com', '7679894046', '3rd', '12345'),
(12, 'Anonymous', 'DIPANJAN  ROY', 'ECE2017/005', 'dipanjanindia264@gmail.com', '9874854365', '2nd', '', '', '', '', '', 'amikolkata'),
(13, 'nazar', 'SNEHA KERKETTA', 'Ece2017/033', 'snehakerketta.sk@gmail.com', '8902394937', '2nd', 'ADITI SINGH', '058/2017', 'aditidiksha2@gmail.com', '8902774804', '2nd', 'aditi sneha'),
(14, 'Naagin', 'RAJESHWARI GHOSH', 'ECE2017/034', 'rajeshwarighosh12@gmail.com', '8961021443', '2nd', 'OISHEE PODDAR', 'ECE2017/007', 'oisheepoddar@gmail.com', '8334052443', '2nd', 'OISRAJ'),
(18, 'TWIBBY', 'BOBBY BAIDYA', 'ECE 2018/108', 'bablubaiya71@gmail.com', '6291398176', '1st', 'TWISHA PAL', 'ECE 2018/73', 'tandrapal415@gmail.com', '6290609654', '1st', '73108'),
(19, 'WOULFPACK', 'SUDIPTO DUTTA', 'ECE2018/078', 'duttasudipto11@gmail.com', '7449550732', '1st', 'RIDDHIMAN DAS', 'ECE2018/114', 'dasriddhiman2018@gmail.com', '9830401929', '1st', 'PASSWORD'),
(20, 'pro', 'ANJALI SINHA', 'ECE2018//110', 'binodsinha2000@gmail.com', '9073248731', '1st', 'ISHIKA PAUL', 'ECE/2018/123', 'ishika.cghs@gmail.com', '9073555308', '1st', '12345'),
(21, 'Hacking_Lords', 'AHON BANDYOPADHYAY', 'ece2018/018', 'ahonbanerjee@gmail.com', '881824170', '1st', 'KUSHAL BANIK', 'ece2018/010', 'kushalbnik93@gmail.com', '7980859303', '1st', 'ahonkushal'),
(22, 'RoSo', 'ROMIT ROY', 'ECE2018/005', 'romitroy1999@gmail.com', '9903293098', '1st', 'SOHOM DAS', 'ECE2018/014', 'dassohom5@gmail.com', '6290276977', '1st', 'osorosor'),
(23, 'dude', 'MRITUNJAY BISTU', 'ece2018/105', 'mritunjaybistu09@gmail.com', '9570182552', '1st', 'ANUSKA DAS', 'ece2018/101', 'anuskadas691@gmail.com', '7980599915', '1st', 'dude1234'),
(24, 'CYBERPHASE', 'ARNAB PAUL', 'ECE2018/120', 'paularnab123@gmail.com', '8961400161', '1st', 'ARNAB PRAMANIK', 'ECE2018/99', 'arnabpramanik700104@gmail.com', '7003283697', '1st', '8961400161'),
(25, 'AppyROCKS', 'SHUBHAM KESH', 'ECE2018/023', 'shubhamkesh99@gmail.com', '8389045702', '1st', 'APARAJITA ROY', 'ECE2018/009', 'aparajita.roy2000@gmail.com', '8777714309', '1st', '12451999'),
(26, 'RBROTHERS', 'ROHIT KUMAR DAS', 'ECE2018017', 'rohit.user05@gmail.com', '8584032804', '1st', '', '', '', '', '', 'BIG2BOYS'),
(27, 'MILIND', 'MILIND YADAV', 'ECE2018/ 068', 'milindy007@gmail.com', '7044119321', '1st', 'AMBUJ TIWARI', 'ECE2018/106', 'ambujrock38@gmal.com', '8777561830', '1st', 'ambuj'),
(28, 'codingkillers', 'KISHAN SINGH', '111', 'kishansingh9874461433@gmail.com', '9836608074', '1st', 'AKSHAY JAISWAL', '121', 'akshayjaiswaljds@gmail.com', '8981129009', '1st', 'kishan1998'),
(29, 'saptak_aparajita', 'SAPTAK BHADRA', 'ECE2016/063', 'saptak.bhadra@gmail.com', '8583838422', '3rd', 'APARAJITA MAULIK', 'ECE2017/L21', 'updateaparajita18@gmial.com', '', '3rd', 'Saptak12345'),
(30, 'sujitdebadrita', 'DEBADRITA DEBNATH', 'ece2018/006', 'debadrita070300@gmail.com', '8910888874', '1st', 'SUJIT SINHA', 'ece2018/031', 'sinhasujit064@gmail.com', '9748179215', '1st', 'ssdd08'),
(31, 'NOOBSTARS', 'NILADRI RANJAN MANI', 'ECE2017/053', 'niladrimani@gmail.com', '8240972384', '2nd', 'ROHIT DAS', 'ECE2017/018', 'dasrohit041298@gmail.com', '7980133379', '2nd', '12345678'),
(32, 'coding123', 'BIJON SARKAR', 'ECE2018/029', 'sarkarbijon1@gmail.com', '8334964133', '1st', 'SUDIP SAHA', 'ECE2018/028', 'sudipsaha231098@gmail.com', '9564490277', '1st', 'one23456'),
(33, 'CODERS', 'SAIF AHMED', 'ECE 118', 'saifahmed8779@gmail.com', '8443803855', '1st', 'AKASH YADAV', 'ECE 115', 'aky.yadi51@gmail.com', '9903383543', '1st', 'saifahmed'),
(34, 'Subhro@yon', 'SUBHRODEEP DAS', 'ECE2017/060', 'subhdeep7469@gmail.com', '8910698363', '2nd', 'AYON KUMAR MAITY', 'ECE2017/011', 'ayonmaity07@gmail.com', '7980288471', '2nd', '12344321'),
(36, 'Godbabe', 'SIVAM BAJPAI', 'ECE2018/090', 'sbaajpai1@gmail.com', '6290959442', '1st', 'SATYAM GHOSH', 'ECE2018/109', 'satyamghosh789@gmail.com', '9674979465', '1st', '12345678'),
(37, 'DJB_Single', 'DEBOJYOTI BHATTACHARJEE', 'ECE2018/020', 'debubhatt555@gmail.com', '9903520876', '1st', '', '', '', '', '', '555'),
(38, 'Stephenites', 'SRINJOY DUTTA', 'ECE 2018/041', 'srinjoy.dutta.773@gmail.com', '9088981032', '1st', 'SOHAM MAZUMDER', 'ECE 2018/016', 'sohamvictorfernandez@gmail.com', '7980170019', '1st', 'sait0950'),
(39, 'Subhro@yon1', 'SUBHRODEEP DAS', 'ECE2017/060', 'subhdeep7469@gmail.com', '8910698363', '2nd', 'AYON KUMAR MAITY', 'ECE2017/011', 'ayonmaity07@gmail.com', '7980288471', '2nd', '123321'),
(40, 'Abhra_Anindita', 'ABHRA BANERJEE', 'ECE2016/018', 'abhraban98@gmail.com', '9836584674', '3rd', 'ANINDITA DEY', 'ECE2017/L23', 'aninditadey7384@gmail.com', '8240075281', '3rd', 'alphacoding'),
(41, 'teamalpha', 'RAJSEKHAR DUTTA', 'ECE2018/030', 'duttarajsekhar2000@gmail.com', '7003164569', '1st', 'SHASHWATA MUKHERJEE', 'ece/2018/089', 'shashwatamukherjee@gmail.com', '8902428363', '1st', 'random'),
(42, 'san-suco', 'SANDIP SAHA', 'ece2018/070', 'sandysaha509@gmail.com', '8777561894', '1st', 'SUTANU DAS', 'ECE2018/026', 'sutanu.das.11@gmail.com', '9748958355', '1st', 'sandysaha'),
(43, 'sohanrahul', 'SOHAN KUNDU', 'ECE/2018/086', 'sohankundu99@gmail.com', '9836585477', '1st', 'RAHUL KUMAR', 'ECE/2018/087', 'rahulkumarmdp14@gmail.com', '9507395003', '1st', 'rahulkumar'),
(44, 'Creed', 'BITTU BISWAS', 'ECE2018/022', 'bittubiswas980@gmail.com', '9903381725', '1st', 'RITAM BISWAS', 'ECE2018/015', 'ritam.biswas.10@gmail.com', '9831609625', '1st', '1234567890'),
(45, 'RIPPER_CODER', 'SAIKAT PAUL', 'ECE2018/058', 'paulsaikat8364@gmail.com', '9836404108', '1st', 'SRINJOY DAS', 'ECE2018/044', 'srinjoydas09@gmail.com', '8961332927', '1st', 'RCCIIT'),
(46, 'ASTRO', 'SAPTARSHI GHOSH', 'ECE2018/061', 'ghoshsaptarshi0@gmail.com', '7998143293', '1st', 'ISHAN CHAUDHURI', 'ECE2018/004', 'ishanchdhr2@gmail.com', '8420706708', '1st', 'harrypotter'),
(47, 'Diver', 'SHREYA SHAH', 'ECE2018/046', 'diveruzumaki@gmail.com', '9163510017', '1st', 'ALOK KUMAR', 'ECE2018/042', 'alokkumarkvsl2@gmail.com', '8583078558', '1st', 'ilovenaruto15'),
(48, 'Atreyi_Mohar', 'MOHAR GHOSH', 'ECE2018/040', 'moharghosh11@gmail.com', '9748663120', '1st', 'ATREYI GUHA', 'ECE2018/001', 'toatreyiguha@gmail.com', '9831158900', '1st', 'guhaghosh'),
(49, 'programrunkorchena', 'BIJON SARKAR', 'ECE2018/029', 'sarkarbijon1@gmail.com', '8334964133', '1st', 'SUDIP SAHA', 'ECE2018/028', 'sudipsaha231098@gmail.com', '9564490277', '1st', 'one23456'),
(50, 'Atasi_sank', 'ATASI ROY', 'ECE2018/100', 'ataroy99@gmail.com', '8622017538', '1st', 'SANKARSON DAS', 'ECE2018/104', 'bittuhazard0805@gmail.com', '9836927502', '1st', 'atank'),
(51, 'anirbanshatabdi', 'ANIRBAN GUHA', 'ECE2018/012', 'sand2anirban@gmail.com', '9903279995', '1st', 'SHATABDI MUKHERJEE', 'ECE2018/008', 'shatabdiproloy@gmail.com', '9382141917', '1st', '12345'),
(52, 'noobs', 'ARIJIT BOSE', 'ece 2018/047', 'bosearijit668@gmail.com', '9903136788', '1st', 'ABHIRUP DAS', 'ece/043', 'abhirupdas2514@gmail.com', '9051199866', '1st', 'noobs'),
(53, 'Madhu_square', 'MADHURIMA MANDAL', 'ECE2018/037', 'madhurima.mandal16@gmail.com', '8697065060', '1st', 'MADHURI DEB', 'ECE2018/039', 'debmadhuri2000@gmail.com', '8420245488', '1st', 'madhu'),
(54, 'utsab', 'UTSAB DHARA', 'ece2018056', 'srimantadhara123@gmail.com', '7384948247', '1st', '', '', '', '', '', '7384'),
(55, 'ravenclaw', 'AASTHA CHAKRABORTY', 'ECE2018/054', 'aasthachakraborty123@gmail.com', '9038592032', '1st', 'SAYAK SAHA', 'ECE2018/057', 'sayak960@gmail.com', '9748760960', '1st', '123456789'),
(56, 'cazzmala', 'AGNIJEET MALIICK', 'ECE 2018/059', 'agnijeetmallick@gmail.com', '8334031590', '1st', 'SUCHISMITA RANA SINGHA', 'ECE 2018/055', 'suchismitaranasingha2801@gmail.com', '9163519532', '1st', 'tituntitas'),
(58, 'GRYFFINDOR', 'PAYAL SENGUPTA', 'ECE2018/060', 'payal.sengupta65@gmail.com', '8584945412', '1st', 'PIJUSH GANGULY', 'ECE2018/062', 'pijushganguly833@gmail.com', '8777685511', '1st', 'expectopatronum'),
(61, 'SubhoShubh', 'SUBHOJIT GHARAMI', 'ECE2018/045', 'subho7299@gmail.com', '9836256025', '1st', 'SHUBHAM KUMAR CHOWDHURY', 'ECE2018/049', 'bittu7shubham@gmail.com', '8336805022', '', 'subhojitshubham'),
(63, 'team_sree', 'SREEJITA KARMAKAR', 'ECE2018/034', 'sreejita.green@gmail.com', '9836560809', '1st', 'SREEJA GHOSH', 'ECE2018/081', 'sreeja7554@gmail.com', '7980010916', '1st', '12345'),
(66, 'Horibol', 'SHINJITA GHOSH', 'ECE/2015/026', 'shinjitaghosh99@gmail.com', '8981446875', '4th', '', '', '', '', '', '123456rcciit'),
(67, 'MONDALROY', 'SUCHISMITA MONDAL', 'ECE2018013', 'suchismitamondal98@gmail.com', '7797059814', '1st', 'SAYANTAN ROY', 'ECE2018035', 'sayantanroy184@gmail.com', '8272959352', '1st', 'pOOJA123@#'),
(68, 'Pheonix', 'POULOMI SEN', 'ece2017/071', 'poulomisen2015@gmail.com', '9748981144', '2nd', 'RESHMI GANGULY', 'ECE2017/106', 'reshmiganguly2012@gmail.com', '9748316687', '2nd', '21041999'),
(69, 'chintan@souradeep', 'CHINTAN HAZRA', 'ECE2017/050', 'chintanhazra18@gmail.com', '9804183952', '2nd', 'SOURADEEP GHOSH', 'ECE2017/048', 'souradeepg1@gmail.com', '7980852478', '2nd', '9804183952'),
(70, 'chocolate', 'ARPAN GHOSH', 'ECE2018/122', 'arpanghosh.agss@gmail.com', '9903068227', '1st', 'PURBA MONDAL', 'ECE2018/74', 'purbamona9918@gmail.com', '8158983030', '1st', 'arpan213'),
(71, 'nothingreallymatters', 'SOUMYADIPTA KAMILA', 'ece2017064', 'soumyadiptakamila@gmail.com', '8617286190', '2nd', 'ROHIT BASU', 'ece2017066', 'rohitbasu27@gmail.com', '8902254425', '2nd', 'soumyadipta'),
(72, 'goldensnitch', 'ANWESA CHOUDHURY', 'ECE 2017/017', 'anwesachoudhury@gmail.com', '8240585497', '2nd', 'NAINA GUPTA', 'ECE 2017/008', 'nainag0963@gmail.com', '8910131383', '2nd', 'anwna11'),
(73, 'SOUL_REAPER', 'POULAMI ADHIKARY', 'ECE2017/004', 'iampoulami18@gmail.com', '7980765033', '2nd', 'DEBAYAN GOSWAMI', 'ECE2017/113', 'mecool.dg@gmail.com', '7980933046', '2nd', 'chumukhabo'),
(74, 'RedandBlue', 'AMARENDRA MANDAL', 'ECE2017/089', 'iam.amarendra08@gmail.com', '9674603778', '2nd', 'DEBANGANA NANDY', 'ECE2017/083', 'debangana043@gmail.com', '8240358948', '2nd', 'ThumpsUp'),
(75, 'PRIYANKA', 'PRIYANKA BERA', 'ECE2017/L24', 'bera.priyanka1111@gmail.com', '8274939312', '3rd', '', '', '', '', '', '12345'),
(76, 'shou_man', 'MANISHA DAS', 'ECE2016/121', 'benevolentmanisha18@gmail.com', '7044686217', '3rd', 'SHOUNAK MITRA', 'ECE2016/118', 'mitra.shounak1998@gmail.com', '9051868991', '3rd', '12345678'),
(77, 'PRIYANKAAMRIT', 'PRIYANKA BERA', 'ECE2017/L24', 'bera.priyanka1111@gmail.com', '8274939312', '3rd', 'AMRIT DAS', 'ECE2017/L09', 'only.amritdas@gmail.com', '8274939312', '3rd', '12345'),
(78, 'CODE_LOAD', 'ANIKET DEBNATH', 'ECE2017/100', 'rahul.debnath29@gmail.com', '7044919646', '2nd', 'KRISHNENDU DAS', 'ECE2017/101', 'krishsterdas10@gmail.com', '7003569132', '2nd', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log_time`
--
ALTER TABLE `log_time`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `log_time_quiz`
--
ALTER TABLE `log_time_quiz`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `problems`
--
ALTER TABLE `problems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `score`
--
ALTER TABLE `score`
  ADD UNIQUE KEY `team` (`team`);

--
-- Indexes for table `score_code`
--
ALTER TABLE `score_code`
  ADD PRIMARY KEY (`team`,`qid`);

--
-- Indexes for table `testcase`
--
ALTER TABLE `testcase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `team` (`team`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `problems`
--
ALTER TABLE `problems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `testcase`
--
ALTER TABLE `testcase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
