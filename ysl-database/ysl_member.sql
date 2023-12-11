-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 11, 2023 at 11:24 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ysl_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `ysl_member`
--

CREATE TABLE `ysl_member` (
  `id` int(6) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `account` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `postalCode` int(10) NOT NULL,
  `address` varchar(255) NOT NULL,
  `birthday` date NOT NULL,
  `gender` enum('Female','Male') NOT NULL,
  `member_identity` tinyint(10) DEFAULT 1,
  `created_at` datetime NOT NULL,
  `valid` tinyint(4) DEFAULT 1,
  `birthday_month` varchar(50) DEFAULT NULL,
  `member` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ysl_member`
--

INSERT INTO `ysl_member` (`id`, `name`, `account`, `password`, `phone`, `email`, `postalCode`, `address`, `birthday`, `gender`, `member_identity`, `created_at`, `valid`, `birthday_month`, `member`) VALUES
(1, '張婉婷', 'zhang.wt', '202CB962AC59075B964B07152D234B70', '0912345677', 'zhang.wt@email.com', 104, '台北市中山區榮星花園 1 號', '1994-11-08', 'Female', 1, '2022-01-06 15:05:09', 1, '11', ''),
(2, '陳冠宇', 'chen.gy', '202CB962AC59075B964B07152D234B70', '0923456787', 'chen.gy@email.com', 242, '新北市三峽區明德路 20 號', '1994-10-21', 'Male', 2, '2022-01-07 09:06:30', 1, '10', ''),
(3, '林雅琳', 'lin.yl', '202CB962AC59075B964B07152D234B70', '0934567891', 'lin.yl@email.com', 807, '高雄市前鎮區興仁路 15 號', '1994-07-08', 'Female', 3, '2022-01-08 08:07:56', 1, '07', ''),
(4, '王瑞祥', 'wang.rx', '202CB962AC59075B964B07152D234B70', '0945678901', 'wang.rx@email.com', 407, '台中市西屯區東山路 8 號', '1994-10-18', 'Male', 4, '2022-01-09 20:50:07', 1, '10', ''),
(5, '陳怡君', 'chen.yj', '202CB962AC59075B964B07152D234B70', '0967890144', 'chen.yj@email.com', 320, '桃園市中壢區文化路 45 號', '1994-09-06', 'Female', 5, '2022-01-10 17:15:42', 1, '09', ''),
(6, '黃信宏', 'huang.xh', '202CB962AC59075B964B07152D234B70', '0967890122', 'huang.xh@email.com', 500, '彰化縣彰化市光復路 30 號', '1994-01-11', 'Male', 6, '2022-01-11 16:40:16', 1, '01', ''),
(7, '蔡宛儒', 'tsai.wr', '202CB962AC59075B964B07152D234B70', '0978901234', 'tsai.wr@email.com', 600, '嘉義市東區民生路 12 號', '1994-02-12', 'Male', 7, '2022-01-12 22:22:22', 1, '02', ''),
(8, '鄭家豪', 'zheng.jh', '202CB962AC59075B964B07152D234B70', '0989012345', 'zheng.jh@email.com', 704, '台南市北區北門路 88 號', '1994-05-13', 'Female', 8, '2022-01-13 21:14:38', 1, '05', ''),
(9, '許雅文', 'xu.yw', '202CB962AC59075B964B07152D234B70', '0901234567', 'xu.yw@email.com', 360, '苗栗縣苗栗市府前路 6 號', '1994-12-14', 'Male', 9, '2022-01-14 12:15:23', 1, '12', ''),
(10, '楊宗翰', 'yang.zh', '202CB962AC59075B964B07152D234B70', '0902345678', 'yang.zh@email.com', 260, '宜蘭縣宜蘭市民權路 18 號', '1994-06-15', 'Male', 10, '2022-01-15 14:14:14', 1, '06', ''),
(11, '范欣怡', 'fan.xy', '202CB962AC59075B964B07152D234B70', '0903456789', 'fan.xy@email.com', 970, '花蓮縣花蓮市新興路 25 號', '1994-07-16', 'Female', 0, '2022-01-16 18:20:25', 1, '07', ''),
(12, '朱志明', 'zhu.zm', '202CB962AC59075B964B07152D234B70', '0904567890', 'zhu.zm@email.com', 200, '基隆市仁愛區中正路 33 號', '1994-03-17', 'Male', 0, '2022-01-17 19:36:26', 1, '03', ''),
(13, '邱佳琪', 'qiu.jq', '202CB962AC59075B964B07152D234B70', '0905678901', 'qiu.jq@email.com', 640, '雲林縣斗六市復興路 14 號', '1994-02-18', 'Female', 0, '2022-01-18 20:07:35', 1, '02', ''),
(14, '余宗翰', 'yu.zh', '202CB962AC59075B964B07152D234B70', '0906789012', 'yu.zh@email.com', 900, '屏東縣屏東市中山路 22 號', '1994-12-19', 'Male', 0, '2022-01-19 19:07:05', 1, '12', ''),
(15, '張雅琴', 'zhang.yq', '202CB962AC59075B964B07152D234B70', '0907890123', 'zhang.yq@email.com', 540, '南投縣南投市南崗路 11 號', '1994-01-18', 'Female', 0, '2022-01-20 06:05:38', 1, '01', ''),
(16, '洪家瑋', 'hong.jw', '202CB962AC59075B964B07152D234B70', '0908901234', 'hong.jw@email.com', 612, '嘉義縣太保市中山路 9 號', '1994-12-21', 'Male', 0, '2022-01-21 08:12:56', 1, '12', ''),
(17, '周思婷', 'zhou.st', '202CB962AC59075B964B07152D234B70', '0909012345', 'zhou.st@email.com', 893, '金門縣金城鎮民生路 7 號', '1994-09-22', 'Female', 0, '2022-01-22 18:06:39', 1, '09', ''),
(18, '葉宗翰', 'ye.zh', '202CB962AC59075B964B07152D234B70', '0910123456', 'ye.zh@email.com', 880, '澎湖縣馬公市中正路 55 號', '1994-06-23', 'Male', 0, '2022-01-23 17:05:05', 1, '06', ''),
(19, '彭佳玲', 'peng.jl', '202CB962AC59075B964B07152D234B70', '0911234567', 'peng.jl@email.com', 302, '新竹縣竹北市光明路 26 號', '1994-04-24', 'Female', 0, '2022-01-24 07:15:09', 1, '04', ''),
(20, '許家豪', 'xu.jh', '202CB962AC59075B964B07152D234B70', '0912345678', 'xu.jh@email.com', 201, '基隆市信義區信義路 17 號', '1994-05-25', 'Male', 0, '2022-01-25 12:24:07', 1, '05', ''),
(21, '鄭心怡', 'zhengxinyi', '202CB962AC59075B964B07152D234B70', '0923456789', 'zhengxinyi@email.com', 104, '台北市中正區忠孝東路一段100號', '1992-08-15', 'Female', 0, '2023-01-11 15:15:28', 1, '08', ''),
(22, '許彥宇', 'xuyanyu', '202CB962AC59075B964B07152D234B70', '0912345676', 'xuyanyu@email.com', 220, '新北市板橋區文化路二段200號', '1986-04-25', 'Male', 0, '2023-01-12 06:09:03', 1, '04', ''),
(23, '張雅琪', 'zhangyaqi', '202CB962AC59075B964B07152D234B70', '0934567890', 'zhangyaqi@email.com', 402, '台中市南區建國北路300號', '1996-11-03', 'Female', 0, '2023-01-13 03:06:09', 1, '11', ''),
(24, '謝政宏', 'xiezhenghong', '202CB962AC59075B964B07152D234B70', '0956789011', 'xiezhenghong@email.com', 811, '高雄市楠梓區德民路四段400號', '1983-02-12', 'Male', 0, '2023-01-14 07:42:08', 1, '02', ''),
(25, '林婷婷', 'lintingting', '202CB962AC59075B964B07152D234B70', '0930123456', 'lintingting@email.com', 701, '台南市中西區民權路五段500號', '1989-07-28', 'Female', 0, '2023-01-15 08:52:49', 1, '07', ''),
(26, '葉志明', 'yezhiming', '202CB962AC59075B964B07152D234B70', '0967890123', 'yezhiming@email.com', 500, '彰化市彰化區和平路六段600號', '1994-09-05', 'Male', 0, '2023-01-16 05:04:16', 1, '09', ''),
(27, '吳雅芬', 'wuyafen', '202CB962AC59075B964B07152D234B70', '0932345678', 'wuyafen@email.com', 202, '基隆市仁愛區中正路七段700號', '1981-12-22', 'Female', 0, '2023-01-17 16:24:36', 1, '12', ''),
(28, '洪志偉', 'hongzhiwei', '202CB962AC59075B964B07152D234B70', '0918765432', 'hongzhiwei@email.com', 300, '新竹市東區民生路八段800號', '1999-05-30', 'Male', 0, '2023-01-18 18:18:35', 1, '05', ''),
(29, '蔡雅琪', 'caiyaqi', '202CB962AC59075B964B07152D234B70', '0954321098', 'caiyaqi@email.com', 600, '嘉義市西區仁愛路九段900號', '1988-08-25', 'Female', 0, '2023-01-19 10:22:48', 1, '08', ''),
(30, '陳俊宇', 'chenjunyu', '202CB962AC59075B964B07152D234B70', '0987654321', 'chenjunyu@email.com', 900, '屏東市林森路十段1000號', '1992-03-14', 'Male', 0, '2023-01-11 13:01:05', 1, '03', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ysl_member`
--
ALTER TABLE `ysl_member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ysl_member`
--
ALTER TABLE `ysl_member`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
