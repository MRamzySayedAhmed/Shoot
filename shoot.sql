-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2020 at 04:51 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoot`
--

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `writer` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='The Books Table';

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `language`, `title`, `description`, `writer`, `image`, `created_at`, `updated_at`) VALUES
(1, 'en', 'Real Madrid win La Liga', 'Real Madrid wins his 34th La Liga Title.', 'Mohamed', '1593224813.jpg', '2020-06-27 16:53:26', '2020-06-27 00:26:53'),
(3, 'ar', 'الاهلى الاقرب للفوز بالدورى المصرى', 'يقترب الاهلى من حسم لقب الدورى رقم 42 فى تاريخه', 'Ahmed', '1593300861.jpg', '2020-06-27 16:55:35', '2020-06-27 21:34:22'),
(4, 'en', 'Liverbool win Premier League', 'Liverbool wins his 29th Premier League Title.', 'Mahmoud', '1591437464.jpg', '2020-06-27 12:35:50', '2020-06-27 07:57:44'),
(6, 'en', 'Juventus win Serie A League', 'Juventus wins his 31th Serie A League Title.', 'Samy', '1591437485.jpg', '2020-06-27 19:00:56', '2020-06-27 07:58:05'),
(36, 'ar', 'ليفربول يحسم لقب الدورى الانجليزى', 'فاز ليفربول بلقب الدورى الانجليزى بعد غياب يقارب ال 30 عاما', 'محمود', '1593302065.png', '2020-06-27 21:54:25', '2020-06-27 21:54:25'),
(37, 'en', 'Bayern Munchen win the Bundesliga', 'Bayern Munchen wins his 38th Bundesliga Title.', 'Mahmoud', '1593299969.jpg', '2020-06-27 11:09:27', '2020-06-27 21:19:29'),
(38, 'ar', 'مواجهات قويه تنتظر ريال مدريد فى الدورى الاسبانى', 'ينتظر ريال مدريد العديد من المباريات الصعبه على ملعبه الجديد الفريدو دى ستيفانو وخارجه ايضا حيث يواجه فالنسيا واتليتك بلباو', 'محمد', '1593300718.jpg', '2020-06-27 20:27:57', '2020-06-27 21:31:58'),
(39, 'ar', 'مانشستر يونايتد يسعى للحصول على خدمات ديبالا', 'يسعى نادى مانشستريونايتد الانجليزى للحصول على خدمات باولو ديبالا لاعب نادى يوفنتوس الايظالى', 'احمد', '1593301290.png', '2020-06-27 21:41:30', '2020-06-27 21:41:30'),
(41, 'ar', 'الدورى المصرى يعود الشهر القادم', 'تعود عجله الدورى المصرى للحركه من جديد بعد توقف دام لثلثه شهور بسبب ازمه كورونا وسط اعتراضات من الانديه ويذكر ان الاهلى هو الاقرب للفوز بالدورى', 'محمد', '1593303980.jpg', '2020-06-27 22:26:20', '2020-06-27 22:26:20'),
(42, 'en', 'Champions League Returns', 'Real Madrid vs Man City, Barcelona vs Napoli & Juventus vs Lion', 'Mahmoud', '1593304188.jpg', '2020-06-27 22:29:48', '2020-06-27 22:29:48'),
(43, 'ar', 'بايرن ميونخ يحسم لقب الدورى الالمانى', 'حقق نادى بايرن ميونخ الالمانى لقب الدورى بعد استئنافه', 'محمود', '1593304361.png', '2020-06-27 22:32:41', '2020-06-27 22:32:41'),
(44, 'ar', 'الانديه الاوروبيه تعود من جديد للمباريات', 'عادت معظم الدوريات الاوروبيه بعد توقف دام لثلاثه اشهر بسبب ازمه كورونا', 'احمد', '1593304629.PNG', '2020-06-27 22:37:09', '2020-06-27 22:37:09'),
(45, 'ar', 'يوفنتوس يقترب من حسم لقب الدورى', 'يقترب نادى يوفنتوس الايطالى من حسم لقب الدورى بعد اسئنافه', 'محمود', '1593304775.jpg', '2020-06-27 22:39:35', '2020-06-27 22:39:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `country` varchar(11) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `remember_token` int(11) NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `registration_status` tinyint(1) NOT NULL COMMENT '0: Pending, 1: Activated',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='The Users Table';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `full_name`, `username`, `country`, `phone`, `remember_token`, `email`, `password`, `registration_status`, `created_at`, `updated_at`) VALUES
(1, 'Mostafa', 'Ramzy', 'Mostafa Ramzy', 'Mostafa', 'EG +20', '00000000000', 1, 'mostafa@yahoo.com', '123456Aa$', 1, '2020-05-28 14:01:52', '2020-05-28 14:01:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
