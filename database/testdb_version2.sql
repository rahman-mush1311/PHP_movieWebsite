-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2017 at 12:50 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `book_info`
--

CREATE TABLE `book_info` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(200) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `book_des` varchar(50000) NOT NULL,
  `book_image` varchar(50) NOT NULL,
  `book_url` varchar(1000) NOT NULL,
  `book_rating` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_info`
--

INSERT INTO `book_info` (`book_id`, `book_name`, `author_name`, `book_des`, `book_image`, `book_url`, `book_rating`) VALUES
(113, 'The Alchemist', 'Paulo Colhelo', 'Book is about inspiring your life blah blah', 'img/01.jpg', 'https://www.google.com/search?q=declare+int+in+php&oq=declare+int+in+&gs_l=psy-ab.1.0.0i20k1j0l3.111452.117725.0.119017.40.22.0.0.0.0.172.2237.1j18.19.0....0...1.1.64.psy-ab..23.17.2012.6..0i67k1j0i22i30k1j0i22i10i30k1j35i39k1.wosQlXrfTig', 9.2),
(115, 'One Indian Girl', 'Chetan Bhagat', 'I make a lot of money. you won\'t like me.', 'img/02.jpg', 'https://www.google.com/search?q=declare+int+in+php&oq=declare+int+in+&gs_l=psy-ab.1.0.0i20k1j0l3.111452.117725.0.119017.40.22.0.0.0.0.172.2237.1j18.19.0....0...1.1.64.psy-ab..23.17.2012.6..0i67k1j0i22i30k1j0i22i10i30k1j35i39k1.wosQlXrfTig', 9),
(117, 'Angels & Demons', 'Dan Brown', 'Exciting Crime thriller Story', 'img/03.jpg', 'https://www.google.com/search?q=declare+int+in+php&oq=declare+int+in+&gs_l=psy-ab.1.0.0i20k1j0l3.111452.117725.0.119017.40.22.0.0.0.0.172.2237.1j18.19.0....0...1.1.64.psy-ab..23.17.2012.6..0i67k1j0i22i30k1j0i22i10i30k1j35i39k1.wosQlXrfTig', 9.5),
(119, 'The Lost symbol', 'Dan Brown', 'didn\'t read it', 'img/04.jpg', 'https://www.google.com/search?q=declare+int+in+php&oq=declare+int+in+&gs_l=psy-ab.1.0.0i20k1j0l3.111452.117725.0.119017.40.22.0.0.0.0.172.2237.1j18.19.0....0...1.1.64.psy-ab..23.17.2012.6..0i67k1j0i22i30k1j0i22i10i30k1j35i39k1.wosQlXrfTig', 8.5),
(121, 'The Vinci Code', 'Dan Brown', 'Amazing thriller Stroy', 'img/05.jpg', 'https://www.google.com/search?q=declare+int+in+php&oq=declare+int+in+&gs_l=psy-ab.1.0.0i20k1j0l3.111452.117725.0.119017.40.22.0.0.0.0.172.2237.1j18.19.0....0...1.1.64.psy-ab..23.17.2012.6..0i67k1j0i22i30k1j0i22i10i30k1j35i39k1.wosQlXrfTig', 9.8),
(123, 'Krisnopokkho', 'Humayan Ahmed', 'One of the amazing love story read ever in bangla book histroy.', 'img/06.jpg', 'https://www.google.com/search?q=declare+int+in+php&oq=declare+int+in+&gs_l=psy-ab.1.0.0i20k1j0l3.111452.117725.0.119017.40.22.0.0.0.0.172.2237.1j18.19.0....0...1.1.64.psy-ab..23.17.2012.6..0i67k1j0i22i30k1j0i22i10i30k1j35i39k1.wosQlXrfTig', 8.2);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `c_contents` text NOT NULL,
  `book_name` varchar(1000) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`c_id`, `c_name`, `c_contents`, `book_name`, `book_id`) VALUES
(1, 'nw', 'masterpiece by danbrown\r\n', 'The Vinci Code', 121),
(2, 'nw', 'amazing!', 'The Vinci Code', 121),
(3, 'nw', 'amazing!', 'The Vinci Code', 121),
(4, 'nw', 'masterpiece', 'The Vinci Code', 121),
(9, 'nw', 'nice!', 'The Alchemist', 113),
(8, 'nw', 'nice!', 'The Alchemist', 113),
(10, 'nw', 'ama!', 'The Alchemist', 113),
(11, 'nw', 'best romantic book!', 'Krisnopokkho', 123),
(12, 'nw', 'best romantic book!', 'Krisnopokkho', 123),
(13, 'nw', 're', 'Krisnopokkho', 123);

-- --------------------------------------------------------

--
-- Table structure for table `genre_info`
--

CREATE TABLE `genre_info` (
  `book_genre_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL,
  `genre_type` varchar(50) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `genre_info`
--

INSERT INTO `genre_info` (`book_genre_id`, `genre_id`, `genre_type`, `book_id`) VALUES
(1, 1, 'Romance', 123),
(2, 2, 'Crime', 117),
(3, 3, 'Thriller', 117),
(4, 4, 'Fiction', 115),
(5, 4, 'Fiction', 113);

-- --------------------------------------------------------

--
-- Table structure for table `movie_comments`
--

CREATE TABLE `movie_comments` (
  `cm_id` int(11) NOT NULL,
  `cm_name` varchar(200) NOT NULL,
  `cm_contents` text NOT NULL,
  `movie_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_comments`
--

INSERT INTO `movie_comments` (`cm_id`, `cm_name`, `cm_contents`, `movie_id`) VALUES
(16, 'nw', 'ddd', 3),
(15, 'nw', 'xz', 2),
(14, 'nw', 'xSxz', 2),
(11, 'nw', 'again', 1),
(13, 'nw', 'again', 1),
(9, 'nw', 'nice!', 1),
(20, 'nw', 'kj', 5);

-- --------------------------------------------------------

--
-- Table structure for table `movie_genre`
--

CREATE TABLE `movie_genre` (
  `mgenre_id` int(11) NOT NULL,
  `mgenre_type` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_genre`
--

INSERT INTO `movie_genre` (`mgenre_id`, `mgenre_type`) VALUES
(1, 'Action'),
(2, 'Drama'),
(3, 'Crime'),
(4, 'Comedy'),
(5, 'Romantic'),
(6, 'Sci-Fi'),
(7, 'Thriller');

-- --------------------------------------------------------

--
-- Table structure for table `movie_genre_info`
--

CREATE TABLE `movie_genre_info` (
  `mgid` int(11) NOT NULL,
  `mgenre_id` int(11) NOT NULL,
  `movie_id` int(11) NOT NULL,
  `tag` varchar(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_genre_info`
--

INSERT INTO `movie_genre_info` (`mgid`, `mgenre_id`, `movie_id`, `tag`) VALUES
(1, 4, 1, 'M'),
(2, 2, 1, 'M');

-- --------------------------------------------------------

--
-- Table structure for table `movie_info`
--

CREATE TABLE `movie_info` (
  `movie_id` int(11) NOT NULL,
  `movie_name` varchar(100) NOT NULL,
  `movie_director` varchar(100) NOT NULL,
  `movie_des` text NOT NULL,
  `movie_image` varchar(100) NOT NULL,
  `movie_url` varchar(1000) NOT NULL,
  `movie_rating` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie_info`
--

INSERT INTO `movie_info` (`movie_id`, `movie_name`, `movie_director`, `movie_des`, `movie_image`, `movie_url`, `movie_rating`) VALUES
(1, 'Forest Grump', 'Robert Zemeckis', 'Slow-witted Forrest Gump (Tom Hanks) has never thought of himself as disadvantaged, and thanks to his supportive mother (Sally Field), he leads anything but a restricted life. Whether dominating on the gridiron as a college football star, fighting in Vietnam or captaining a shrimp boat, Forrest inspires people with his childlike optimism. But one person Forrest cares about most may be the most difficult to save -- his childhood love, the sweet but troubled Jenny (Robin Wright).', 'mov/01.jpg', 'https://www.google.com/search?site=&source=hp&q=forrest+gump+summary&oq=for&gs_l=psy-ab.1.0.35i39k1j0i67k1j0i131k1j0i67k1.1208.3149.0.5384.9.6.2.0.0.0.127.718.0j6.6.0....0...1.1.64.psy-ab..1.8.733.6..0.6kAh3S2ORbM', 9.5),
(2, 'Dark Knight', 'Christopher Nolan', 'With the help of allies Lt. Jim Gordon (Gary Oldman) and DA Harvey Dent (Aaron Eckhart), Batman (Christian Bale) has been able to keep a tight lid on crime in Gotham City. But when a vile young criminal calling himself the Joker (Heath Ledger) suddenly throws the town into chaos, the caped Crusader begins to tread a fine line between heroism and vigilantism.', 'mov/02.jpg', 'https://www.google.com/search?site=&source=hp&q=dark+knight&oq=da&gs_l=psy-ab.1.2.35i39k1l2j0i67k1l2.1654.1893.0.4436.4.3.0.0.0.0.223.528.0j2j1.3.0....0...1.1.64.psy-ab..1.3.527.6.lItVEsZb_hU', 9.7),
(3, 'Inception', 'Christopher Nolan', 'Dom Cobb (Leonardo DiCaprio) is a thief with the rare ability to enter people\'s dreams and steal their secrets from their subconscious. His skill has made him a hot commodity in the world of corporate espionage but has also cost him everything he loves. Cobb gets a chance at redemption when he is offered a seemingly impossible task: Plant an idea in someone\'s mind. If he succeeds, it will be the perfect crime, but a dangerous enemy anticipates Cobb\'s every move.', 'mov/03.jpg', 'https://www.google.com/search?q=inception&oq=incep&gs_l=psy-ab.1.0.0i67k1j0i20k1j0i67k1j0.132575.134509.0.135954.16.10.0.0.0.0.220.1080.0j6j1.7.0....0...1.1.64.psy-ab..9.7.1078.6..35i39k1.1yhVg7BOmyw', 9.4),
(4, 'Schlinder\'s List', 'Steven Spilberg', 'Businessman Oskar Schindler (Liam Neeson) arrives in Krakow in 1939, ready to make his fortune from World War II, which has just started. After joining the Nazi party primarily for political expediency, he staffs his factory with Jewish workers for similarly pragmatic reasons. When the SS begins exterminating Jews in the Krakow ghetto, Schindler arranges to have his workers protected to keep his factory in operation, but soon realizes that in so doing, he is also saving innocent lives.', 'mov/04.jpg', 'https://www.google.com/search?q=schindler%27s+list&oq=schlinde&gs_l=psy-ab.1.3.0i10i46k1j46i10k1l2j0i10k1l3.128710.131934.0.134042.17.12.0.0.0.0.414.2681.2-7j2j1.10.0....0...1.1.64.psy-ab..7.10.2676.6..0j0i67k1j0i20k1j35i39k1j0i131k1.x2qGtr1_uv0', 9.3),
(5, 'Fight Club', 'David Fincher', 'A depressed man (Edward Norton) suffering from insomnia meets a strange soap salesman named Tyler Durden (Brad Pitt) and soon finds himself living in his squalid house after his perfect apartment is destroyed. The two bored men form an underground club with strict rules and fight other men who are fed up with their mundane lives. Their perfect partnership frays when Marla (Helena Bonham Carter), a fellow support group crasher, attracts Tyler\'s attention.', 'mov/05.jpg', 'https://www.google.com/search?q=fight+club&oq=fight&gs_l=psy-ab.1.0.0i67k1j0i20k1j0l2.119847.121973.0.123674.21.10.0.0.0.0.564.1777.2-2j2j0j1.5.0....0...1.1.64.psy-ab..16.5.1775.6..35i39k1.9h1dTSTcCpk', 8.4),
(6, 'The Terminal', 'Steven Spilberg', 'When Viktor Navorski (Tom Hanks), an Eastern European tourist, arrives at JFK in New York, war breaks out in his country and he finds himself caught up in international politics. Because of the war, the Department of Homeland Security won\'t let him enter or exit the United States. He\'s trapped at JFK -- indefinitely. While living at the airport, Viktor falls for a flight attendant (Catherine Zeta-Jones). She may have feelings for him too. But what good is love if Viktor can\'t leave the terminal?', 'mov/06.jpg', 'http://localhost/phpmyadmin/tbl_change.php?db=testdb&table=movie_info&token=14c8532c89826da8ac1308ea968a4181', 7.7);

-- --------------------------------------------------------

--
-- Table structure for table `useres`
--

CREATE TABLE `useres` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `useres`
--

INSERT INTO `useres` (`id`, `username`, `email`, `password`) VALUES
(1, 'nw', 'nw@gmail.com', '1234'),
(2, 'new', 'new@gmail.com', '1234'),
(3, 'newagain', 'newagain@gmail.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book_info`
--
ALTER TABLE `book_info`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `genre_info`
--
ALTER TABLE `genre_info`
  ADD PRIMARY KEY (`book_genre_id`,`genre_id`);

--
-- Indexes for table `movie_comments`
--
ALTER TABLE `movie_comments`
  ADD PRIMARY KEY (`cm_id`);

--
-- Indexes for table `movie_genre`
--
ALTER TABLE `movie_genre`
  ADD PRIMARY KEY (`mgenre_id`);

--
-- Indexes for table `movie_genre_info`
--
ALTER TABLE `movie_genre_info`
  ADD PRIMARY KEY (`mgid`);

--
-- Indexes for table `movie_info`
--
ALTER TABLE `movie_info`
  ADD PRIMARY KEY (`movie_id`);

--
-- Indexes for table `useres`
--
ALTER TABLE `useres`
  ADD PRIMARY KEY (`id`,`username`,`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book_info`
--
ALTER TABLE `book_info`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `movie_comments`
--
ALTER TABLE `movie_comments`
  MODIFY `cm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `movie_genre`
--
ALTER TABLE `movie_genre`
  MODIFY `mgenre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `movie_genre_info`
--
ALTER TABLE `movie_genre_info`
  MODIFY `mgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `movie_info`
--
ALTER TABLE `movie_info`
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `useres`
--
ALTER TABLE `useres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
