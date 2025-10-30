-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2025 at 06:33 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adviz_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`) VALUES
(1, 'Understanding Investment: Don\'t Put All Your Eggs in One Basket', 'You may often hear the term \"investment,\" but you\'re still confused about where to start. Investment is a way to grow your wealth in the future by placing funds in specific instruments.\r\n\r\nFor beginners, the most important concept to understand is \"Diversification.\"\r\n\r\nWhat is Diversification?\r\nDiversification is a strategy of allocating your funds to various types of investments to reduce risk. The old saying \"Don\'t put all your eggs in one basket\" is highly relevant.\r\n\r\nIf you only invest in one place (e.g., a single stock), and that stock crashes, you will lose a lot of money. But if you spread it across several places (e.g., a little in stocks, a little in mutual funds, a little in gold), losses in one place can be covered by gains in another.\r\n\r\nStarting to invest doesn\'t have to require large capital. Start with what you understand and align it with your risk profile.'),
(3, 'The Importance of an Emergency Fund: An Umbrella Before the Rain', 'Many people focus on saving for a house or a vacation, but forget one crucial thing: an Emergency Fund.\r\n\r\nWhat is an Emergency Fund?\r\nAn emergency fund is a sum of money you set aside specifically to face unexpected and urgent situations, such as losing a job, sudden medical expenses, or vital vehicle repairs. This is your financial \"umbrella.\"\r\n\r\nWhy Is This Important?\r\nWithout an emergency fund, you will be forced to take on debt (often with high interest) or liquidate your long-term investments when a crisis occurs. This will ruin your financial plan.\r\n\r\nHow Much is Needed?\r\nIdeally, accumulate an emergency fund equivalent to 3 to 6 months of your total monthly expenses. Keep it in a safe, easily accessible place, but separate from your daily account.'),
(4, '3 Simple Tips to Manage Your Finances and Avoid Overspending', 'Managing finances often feels difficult, but the key lies in your habits. If you feel your salary is always gone before the end of the month, there might be something wrong with how you manage it.\r\n\r\nHere are 3 simple tips you can apply immediately:\r\n1. Make a Monthly Budget\r\nThe first step is to know where your money is going. Record all sources of income and list your routine expenses (basic needs, transportation, bills). Set a limit for each category.\r\n\r\n2. Separate Needs and Wants\r\nThis is the golden rule. Before buying something, ask yourself: \"Do I really need this, or do I just want it?\" Postpone \"want\" purchases for 24 hours.\r\n\r\n3. Make Saving a Habit from the Start\r\nDon\'t wait for leftover money at the end of the month to save. As soon as you receive your salary, immediately set aside 10-20% into a separate savings account that you don\'t use daily. Treat this as a \"bill\" you pay to your future self.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
