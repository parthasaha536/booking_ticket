-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 01:34 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theater`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(1000) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `username`, `password`, `status`) VALUES
(1, 'parthasaha536@gmail.com', 'partha', '123', '1');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(200) NOT NULL,
  `booking_id` int(200) NOT NULL,
  `customer_id` int(200) NOT NULL,
  `theatre_name` varchar(100) NOT NULL,
  `movie_name` varchar(300) NOT NULL,
  `category_name` varchar(5000) NOT NULL,
  `phone_no` int(50) NOT NULL,
  `booking_name` varchar(50) NOT NULL,
  `bill` varchar(500) NOT NULL,
  `sits` int(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `booking_id`, `customer_id`, `theatre_name`, `movie_name`, `category_name`, `phone_no`, `booking_name`, `bill`, `sits`, `date`, `time`) VALUES
(33, 1, 3, 'Hall-F', 'Notebook', ' Romantic', 1533645824, 'partha ', '2000 ', 5, '2021-12-01', '5pm'),
(43, 2, 3, 'Hall-A', 'Spiderman', ' Action', 1882390409, 'saha ', '1750 ', 5, '2021-12-02', '2pm'),
(45, 3, 3, 'Hall-C', 'Man In Black: International', ' Action', 1533645824, 'saha ', '2100 ', 6, '2021-12-02', '2pm'),
(50, 4, 3, 'Hall-D', 'Black Widoww', ' Romantic', 1533645824, 'saha ', '2000 ', 5, '2021-12-22', '2pm'),
(52, 5, 3, 'Hall-B', 'Avenger(End Game)', ' Romantic', 1533645824, 'partha ', '1800 ', 4, '2021-12-05', '2pm'),
(53, 6, 6, 'Hall-B', 'Avenger(End Game)', ' Romantic', 1533645824, 'sarothi ', '5500 ', 10, '2021-12-05', '2pm'),
(54, 7, 11, 'Hall-B', 'Avenger(End Game)', ' Romantic', 123456789, 'ggg ', '2750 ', 5, '2021-12-05', '8pm'),
(55, 8, 9, 'Hall-E', 'Titanic', ' Action', 2222222, 'rrrrr ', '70000 ', 20, '2021-11-28', '2pm'),
(56, 9, 9, 'Hall-A', 'SpiderMan: Homecoming', ' Action', 33333333, 'uuuu ', '8400 ', 24, '2021-11-19', '2pm'),
(57, 10, 8, 'Hall-F', 'Notebook', ' Romantic', 541541546, 'iiii ', '30000 ', 60, '2021-12-10', '8pm'),
(58, 11, 3, 'Hall-B', 'MI: Fallout', ' Romantic', 1533645824, 'partha ', '800000 ', 20, '2021-12-12', '5pm'),
(66, 12, 3, 'Hall-C', 'Man In Black: International', ' Action', 1533645824, 'partha ', '5000 ', 10, '2021-12-11', '2pm'),
(85, 13, 9, 'Hall-B', 'MI: Fallout', ' Romantic', 654654, 'hiv ', '800000 ', 20, '2021-12-11', '5pm'),
(94, 14, 9, 'Hall-D', 'Black Widoww', ' Romantic', 564312, 'partha ', '16000 ', 20, '2021-12-11', '2pm'),
(98, 15, 9, 'Hall-F', 'Notebook', ' Romantic', 1533645824, 'partha ', '5000 ', 10, '2021-12-11', '5pm'),
(99, 16, 9, 'Hall-E', 'Titanic', 'Action', 1533645824, 'partha ', '70000', 20, '2021-12-11', '2pm');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `category_id` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `category_id`) VALUES
(1, 'Action', '1'),
(2, 'Romantic', '2');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phn_number` int(20) NOT NULL,
  `password` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `status` varchar(1000) NOT NULL DEFAULT '0',
  `switch` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `email`, `phn_number`, `password`, `name`, `status`, `switch`) VALUES
(1, 'parthasaha536@gmail.com', 1533645824, 123, 'partha', '1', '0'),
(3, 'a@gmail.com', 0, 123, 'saha', '0', '0'),
(4, 'abc@gmail.com', 2147483647, 123456, 'partha', '0', '0'),
(5, 'bc@gmail.com', 21458796, 102614785, 'partha', '0', '0'),
(6, 'ty@gmail.com', 1182184148, 789654, 'partha', '0', '1'),
(7, 'u@gmail.com', 4512, 7789456, 'sswvrw', '0', '0'),
(8, 'o@gmail.com', 55, 578451, 'oooo', '0', '1'),
(9, 'www@gmail.com', 123456, 123, 'uuuu', '0', '1'),
(10, 'dd@gmail.com', 123456, 123, 'jjj', '0', '0'),
(11, 'hhh@gmail.com', 1254, 123, 'hhh', '0', '1');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(200) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `img` varchar(60) NOT NULL,
  `movie_id` varchar(100) NOT NULL DEFAULT '0',
  `category_id` varchar(200) NOT NULL,
  `time_2` varchar(100) NOT NULL DEFAULT '0',
  `time_5` varchar(1000) NOT NULL DEFAULT '0',
  `time_8` varchar(1000) NOT NULL DEFAULT '0',
  `h_name` varchar(20) NOT NULL,
  `status` varchar(100) NOT NULL DEFAULT '0',
  `start` date NOT NULL,
  `end` date NOT NULL,
  `price` varchar(200) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `img`, `movie_id`, `category_id`, `time_2`, `time_5`, `time_8`, `h_name`, `status`, `start`, `end`, `price`, `description`) VALUES
(4, 'aaaa2222', 'aaa.jpg', '1', '1', '1', '0', '0', 'Hall-C', '0', '2021-11-16', '2021-11-24', '650', 'bbbbbb'),
(6, 'ffcgvhbjnkml,', 'bbb.jpg', '2', '1', '0', '0', '0', '', '0', '2021-11-16', '2021-11-22', '3500', '*******'),
(8, 'SpiderMan: Homecoming', 'spiderman.jpg', '3', '1', '1', '0', '0', 'Hall-A', '1', '2021-11-22', '2021-12-20', '350', 'Peter Parker balances his life as an ordinary high school student in Queens with his superhero alter-ego Spider-Man, and finds himself on the trail of a new menace prowling the skies of New York City.Director:Jon WattsStars:Tom Holland, Michael Keaton, Robert Downey Jr., Zendaya'),
(22, 'MI: Fallout', 'mission.jpg', '4', '2', '0', '1', '0', 'Hall-B', '1', '2021-11-22', '2021-12-20', '40000', 'Ethan Hunt and his IMF team, along with some familiar allies, race against time after a mission gone wrongDirector:Christopher McQuarrieStars:Tom Cruise, Henry Cavill, Ving Rhames'),
(24, 'Man In Black: International', 'mib.jpg', '5', '1', '1', '1', '0', 'Hall-C', '1', '2021-11-22', '2021-12-20', '500', 'The Men in Black have always protected the Earth from the scum of the universe. In this new adventure, they tackle their biggest threat to date: a mole in the Men in Black organization.Director:F. Gary GrayStars:Chris Hemsworth, Tessa Thompson, Kumail Nanjiani'),
(35, 'Black Widoww', 'black.jpg', '6', '2', '1', '0', '1', 'Hall-D', '1', '2021-11-26', '2021-12-20', '800', 'Natasha Romanoff confronts the darker parts of her ledger when a dangerous conspiracy with ties to her past arises.Director: Cate ShortlandStars:Scarlett Johansson, Florence Pugh, David Harbour'),
(36, 'Titanic', 'titanic.jpg', '7', '1', '1', '0', '0', 'Hall-E', '1', '2021-11-26', '2021-12-20', '3500', 'A seventeen-year-old aristocrat falls in love with a kind but poor artist aboard the luxurious, ill-fated R.M.S. Titanic.Director:James CameronStars:Leonardo DiCaprio, Kate Winslet, Billy Zane'),
(44, 'Notebook', 'notebook.jpg', '8', '2', '0', '0', '0', 'Hall-F', '1', '2021-12-14', '2021-12-20', '500', 'A poor yet passionate young man falls in love with a rich young woman, giving her a sense of freedom, but they are soon separated because of their social differences.Director:Nick CassavetesStars:Gena Rowlands, James Garner, Rachel McAdams'),
(48, 'Age of Ultron', 'age_of_ultron.jpg', '9', '2', '1', '1', '1', 'Hall-B', '1', '2021-12-04', '2021-12-24', '300', 'When Tony Stark and Bruce Banner try to jump-start a dormant peacekeeping program called Ultron, things go horribly wrong and it\'s up to Earth\'s mightiest heroes to stop the villainous Ultron from enacting his terrible plan. Directors Josh Whedon Stars Robert Downey Jr., Chris Evans, Mark Ruffalo, Scarlett Johansson'),
(49, 'Avenger(End Game)', 'avenger.jpg', '10', '1', '0', '0', '1', 'Hall-A', '1', '2021-12-04', '2021-12-25', '420', 'After the devastating events of Avengers: Infinity War (2018), the universe is in ruins. With the help of remaining allies, the Avengers assemble once more in order to reverse Thanos\' actions and restore balance to the universe. Directors Anthony Russo & Joe Russo Stars Robert Downey Jr., Chris Evans, Mark Ruffalo, Scarlett Johansson'),
(50, 'Batman', 'batman.jpg', '11', '1', '0', '1', '1', 'Hall-E', '1', '2021-12-05', '2021-12-25', '350', '********'),
(53, 'The Tomorrow War', 'war.jpg', '12', ' 1', '1', '0', '0', ' Hall-F', '2', '2021-12-20', '2021-12-30', '400', 'The world is stunned when a group of time travellers arrive from the year 2051 to deliver an urgent message: thirty years in the future, mankind is losing a global war against a deadly alien species.'),
(54, 'Mission Extream', 'extream.jpg', '13', ' 1', '0', '0', '0', '', '2', '2021-12-20', '2021-12-30', '400', 'After bringing down the man behind the Dhaka Attack, head of bomb disposal unit Abid Rahman learns that an invisible threat hovers over Bangladesh.'),
(55, 'Dhaka Attack', 'attack.jpg', '14', ' 1', '0', '0', '0', '', '2', '2021-12-20', '2021-12-30', '350', 'The elite force of the Dhaka Metropolitan Police starts an operation against a terrorist organization.'),
(56, 'LEAPYEAR', 'year.jpg', '15', ' 2', '0', '0', '0', '', '2', '2021-12-20', '2021-12-30', '400', 'When yet another anniversary passes without a marriage proposal from her boyfriend, Anna (Amy Adams) decides to take action. Aware of a Celtic tradition that allows women to pop the question on Feb.');

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `seat_count` int(200) NOT NULL,
  `hall_id` varchar(1000) NOT NULL,
  `status` varchar(1000) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`id`, `name`, `seat_count`, `hall_id`, `status`) VALUES
(55, 'Hall-A', 50, '1', '0'),
(56, 'Hall-B', 50, '2', '0'),
(57, 'Hall-C', 50, '3', '0'),
(58, 'Hall-D', 50, '4', '0'),
(59, 'Hall-E', 50, '5', '0'),
(60, 'Hall-F', 50, '6', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE` (`email`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
