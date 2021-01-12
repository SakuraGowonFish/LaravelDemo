-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1:3306
-- 產生時間： 2021-01-11 09:00:43
-- 伺服器版本： 8.0.18
-- PHP 版本： 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `stocktry`
--

-- --------------------------------------------------------

--
-- 資料表結構 `stock`
--

CREATE TABLE `stock` (
  `id` int(100) NOT NULL,
  `stockNumber` varchar(10) NOT NULL,
  `stockName` varchar(10) NOT NULL,
  `stockMuch` int(10) NOT NULL,
  `fuckUserID` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `stock`
--

INSERT INTO `stock` (`id`, `stockNumber`, `stockName`, `stockMuch`, `fuckUserID`) VALUES
(17, '2330', '台積電', 10000, 11),
(21, '6531', '愛普', 1000, 13),
(22, '3661', '世芯-KY', 5000, 13),
(23, '6415', '矽力-KY', 2000, 13),
(24, '6533', '晶心科', 1000, 13);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `id` int(100) UNSIGNED NOT NULL,
  `account` varchar(36) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `paswword` varchar(1000) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `principal` bigint(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`id`, `account`, `paswword`, `username`, `principal`) VALUES
(11, 'aaa', '$2y$10$6dW6/LWZYAYfOw7Yyxkn2eihqxuVd5JXAwpEAUjIosEAUucCqG50W', '帥羅', 94200000),
(13, 'bbb', '$2y$10$V8Hox0af1WRngRqrfEmdQ.jMBwaX8nXiG0JnKKzWR.VzqwMgYo.vq', '長榮大學台股市場分析師兼操盤手暨台股講師 資管生 SakuraGoWon瑰', 13000);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `account` (`account`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
