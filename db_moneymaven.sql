-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2023 at 09:15 PM
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
-- Database: `db_moneymaven`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id_transaction` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `type_transaction` varchar(255) NOT NULL,
  `note` text NOT NULL,
  `categories` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id_transaction`, `id_user`, `type_transaction`, `note`, `categories`, `amount`, `date`) VALUES
(1, 1, 'expense', 'a', 'vehicies', 50, '09-Jun-2023 01:41:36 am'),
(2, 1, 'expense', 'b', 'entertainment', 20, '09-Jun-2023 01:52:46 am'),
(3, 1, 'expense', 'b', 'housing', 20, '09-Jun-2023 01:54:25 am'),
(4, 1, 'expense', 'b', 'housing', 10, '09-Jun-2023 01:56:18 am'),
(5, 1, 'income', '123', 'Food & Drinks', 50, '09-Jun-2023 01:56:40 am');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `amount`) VALUES
(1, 'denselfebiann@gmail.com', '$2y$10$Q.gc73tApl/I.GhJZbYOTuH6Wm090ykJGWr0S3U.Gg4vW7uIgDybC', 30);

-- --------------------------------------------------------

--
-- Table structure for table `user_bills`
--

CREATE TABLE `user_bills` (
  `id_bills` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `bill_source` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `frequency` varchar(255) NOT NULL,
  `next_bill_due` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_bills`
--

INSERT INTO `user_bills` (`id_bills`, `id_user`, `bill_source`, `amount`, `frequency`, `next_bill_due`) VALUES
(1, 1, 'PT. Bina Jaya', 500000, 'monthly', '2023-06-09');

-- --------------------------------------------------------

--
-- Table structure for table `user_goals`
--

CREATE TABLE `user_goals` (
  `id_goals` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `goal_name` varchar(255) NOT NULL,
  `goal_target_amount` int(11) NOT NULL,
  `goal_due_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_goals`
--

INSERT INTO `user_goals` (`id_goals`, `id_user`, `goal_name`, `goal_target_amount`, `goal_due_date`) VALUES
(1, 1, 'Beli HP', 2500000, '2023-07-31');

-- --------------------------------------------------------

--
-- Table structure for table `user_income`
--

CREATE TABLE `user_income` (
  `id_income` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `income_source` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `frequency` varchar(255) NOT NULL,
  `next_deposit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_income`
--

INSERT INTO `user_income` (`id_income`, `id_user`, `income_source`, `amount`, `frequency`, `next_deposit`) VALUES
(1, 1, 'PT. Anugrah', 1500000, 'monthly', '2023-06-02');

-- --------------------------------------------------------

--
-- Table structure for table `user_spending_categories`
--

CREATE TABLE `user_spending_categories` (
  `id_categories` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `frequency` varchar(255) NOT NULL,
  `next_deposit` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_spending_categories`
--

INSERT INTO `user_spending_categories` (`id_categories`, `id_user`, `categories`, `amount`, `frequency`, `next_deposit`) VALUES
(1, 1, 'pacaran', 300000, 'monthly', '2023-06-02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id_transaction`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_bills`
--
ALTER TABLE `user_bills`
  ADD PRIMARY KEY (`id_bills`),
  ADD KEY `id_user1` (`id_user`);

--
-- Indexes for table `user_goals`
--
ALTER TABLE `user_goals`
  ADD PRIMARY KEY (`id_goals`),
  ADD KEY `id_user2` (`id_user`);

--
-- Indexes for table `user_income`
--
ALTER TABLE `user_income`
  ADD PRIMARY KEY (`id_income`),
  ADD KEY `id_user3` (`id_user`);

--
-- Indexes for table `user_spending_categories`
--
ALTER TABLE `user_spending_categories`
  ADD PRIMARY KEY (`id_categories`),
  ADD KEY `id_user4` (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id_transaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_bills`
--
ALTER TABLE `user_bills`
  MODIFY `id_bills` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_goals`
--
ALTER TABLE `user_goals`
  MODIFY `id_goals` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_income`
--
ALTER TABLE `user_income`
  MODIFY `id_income` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_spending_categories`
--
ALTER TABLE `user_spending_categories`
  MODIFY `id_categories` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `id_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user_bills`
--
ALTER TABLE `user_bills`
  ADD CONSTRAINT `id_user1` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user_goals`
--
ALTER TABLE `user_goals`
  ADD CONSTRAINT `id_user2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user_income`
--
ALTER TABLE `user_income`
  ADD CONSTRAINT `id_user3` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user_spending_categories`
--
ALTER TABLE `user_spending_categories`
  ADD CONSTRAINT `id_user4` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
