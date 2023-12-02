-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2023 at 03:54 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wilsweb_blogperso`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `comment` text NOT NULL,
  `public` varchar(3) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `comment`, `public`, `post_id`) VALUES
(13, 'web3', 'web1@web3.com', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ull', 'on', 5),
(17, 'velle', 'velle@velle.com', 'nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'on', 7),
(26, 'Wilfried', 'wily@wil.com', 'How to View HTML Source?\r\nHave you ever seen a Web page and wondered', 'off', 17),
(27, 'wally', 'wally@gmail.com', 'wally@gmail.com laisse un comentaire', 'off', 18);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` varchar(500000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(3, 'Wil Web', 'web1@web3.com', 'Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet,'),
(4, 'walterecot@gmail.com ulrich', 'walterecot@gmail.com', 'The file input is the most gnarly of the bunch and requires additional JavaScript if youâ€™d like to hook them up with functional Choose fileâ€¦ and selected file name text.'),
(5, 'Wil Web', 'walterecot@gmail.com', 'New Message');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(300) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(300) NOT NULL,
  `public` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `title`, `description`, `image`, `public`) VALUES
(10, 'L\'article du jour', ' Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus harum inventore ullam omnis earum et illum voluptatibus ipsam veritatis excepturi, magni dolores id ad, quae deleniti recusandae est laudantium! Perferendis quis ut quos rerum dicta, veritatis provident! Vero dolorum assumenda ipsum odit reprehenderit officiis eius minima ex numquam. Ut nobis natus soluta eos ex alias eveniet repellendus illo ullam cum, dolore libero dignissimos fugiat reprehenderit? Omnis, vero? Blanditiis cupiditate doloremque ipsam reiciendis ullam vero optio accusamus sed explicabo expedita veritatis, deleniti eaque, aliquid impedit! Et accusamus neque quia cupiditate voluptatibus. Nesciunt laborum consequuntur hic rem adipisci accusantium ducimus placeat nemo?\r\n', '6554a50553c2f6.80578141.png', 'on'),
(12, 'Another Card Title', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', '65554e1d000eb0.68684304.jpg', 'on'),
(13, 'Another Card Title', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', '65554ed4d31556.69528075.jpg', 'on'),
(14, 'New Card', 'This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.', '655689f5560088.81304994.jpg', 'on'),
(15, 'HTML References', 'W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2020 by Refsnes Data. All Rights Reserved.\r\nPowered by W3.CSS.', '6557720c463711.79519669.png', 'on'),
(16, ' Examples might be simplified', 'W3Schools is optimized for learning, testing, and training. Examples might be simplified to improve reading and basic understanding. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using this site, you agree to have read and accepted our terms of use, cookie and privacy policy. Copyright 1999-2020 by Refsnes Data. All Rights Reserved.\r\nPowered by W3.CSS.', '6557725f631c74.84769299.png', 'on'),
(17, 'How to View HTML Source?', 'Have you ever seen a Web page and wondered \"Hey! How did they do that?\"\r\n\r\nView HTML Source Code:\r\nRight-click in an HTML page and select \"View Page Source\" (in Chrome) or \"View Source\" (in Edge), or similar in other browsers. This will open a window containing the HTML source code of the page.\r\n\r\nInspect an HTML Element:\r\nRight-click on an element (or a blank area), and choose \"Inspect\" or \"Inspect Element\" to see what elements are made up of (you will see both the HTML and the CSS). You can also edit the HTML or CSS on-the-fly in the Elements or Styles panel that opens.', '655772d7534257.86412407.png', 'on'),
(18, 'Non-breaking Space', 'A common character entity used in HTML is the non-breaking space: &nbsp;\r\n\r\nA non-breaking space is a space that will not break into a new line.\r\n\r\nTwo words separated by a non-breaking space will stick together (not break into a new line). This is handy when breaking the words might be disruptive.\r\n\r\nExamples:\r\n\r\nÂ§ 10\r\n10 km/h\r\n10 PM\r\nAnother common use of the non-breaking space is to prevent browsers from truncating spaces in HTML pages.\r\n\r\nIf you write 10 spaces in your text, the browser will remove 9 of them. To add real spaces to your text, you can use the &nbsp; character entity.', '65577334769295.83428387.png', 'on'),
(19, 'Card Title', 'This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer....', '6559a66e0e0e88.66526206.png', 'on');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `login` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `login`, `email`, `pass`, `role`) VALUES
(13, 'admin', 'admin', 'admin@gmail.com', 'admin', 'admin'),
(17, 'Wilfried', 'wil', 'wil@wil.com', 'wil', 'admin'),
(18, 'wil', 'wil', 'web3@web3.com', 'web3', 'admin'),
(19, 'web', 'web', 'web1@web3.com', 'web1@web3.com', 'admin'),
(20, 'waltere', 'waltere', 'walterecot237@gmail.com', 'walterecot237@gmail.', 'admin'),
(24, 'walker', 'walker', 'walker@gmail.com', 'walker', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
