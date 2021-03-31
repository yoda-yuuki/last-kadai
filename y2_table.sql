-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2021-03-31 16:57:29
-- サーバのバージョン： 10.4.17-MariaDB
-- PHP のバージョン: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `y2_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `y2_table`
--

CREATE TABLE `y2_table` (
  `id` int(12) NOT NULL,
  `u_name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `u_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `u_pw` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `life_flg` int(1) NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `y2_table`
--

INSERT INTO `y2_table` (`id`, `u_name`, `u_id`, `u_pw`, `life_flg`, `indate`) VALUES
(1, '依田裕樹', 'yoda', 'yytest', 0, '2021-03-30 01:06:05'),
(2, 'あいうえお', 'aiueo', 'a1i2u3', 0, '2021-03-30 14:27:09'),
(3, 'かきくけこ', 'kakikukeko', 'k1ki2', 0, '2021-03-30 14:29:28'),
(4, 'さしすせそ', 'sasisu', 's11', 0, '2021-03-31 12:57:59'),
(5, 'よだゆうき', 'yy514', 'Yy1991514', 0, '2021-03-31 15:55:10'),
(6, 'たちつてと', 'tatitu', 't111', 0, '2021-03-31 15:55:46'),
(7, 'よだゆうき', 'yy514', 'Yy1991514', 0, '2021-03-31 15:58:07');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `y2_table`
--
ALTER TABLE `y2_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `y2_table`
--
ALTER TABLE `y2_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
