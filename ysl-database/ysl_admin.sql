-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2023-12-11 17:47:10
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `mydb`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ysl_admin`
--

CREATE TABLE `ysl_admin` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `valid` tinyint(4) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `ysl_admin`
--

INSERT INTO `ysl_admin` (`id`, `name`, `username`, `password`, `created_at`, `valid`) VALUES
(1, '管理員', 'admin1', '202cb962ac59075b964b07152d234b70', NULL, 1),
(2, 'Nintendo Switch', 'admin2', '202cb962ac59075b964b07152d234b70', NULL, 1),
(3, 'GNN 記者 犬拓', 'admin3', '202cb962ac59075b964b07152d234b70', NULL, 1);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ysl_admin`
--
ALTER TABLE `ysl_admin`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ysl_admin`
--
ALTER TABLE `ysl_admin`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
