-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 6 月 22 日 15:26
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `pack_to_go_ver1`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gear_table`
--

CREATE TABLE `gear_table` (
  `id` int(11) NOT NULL,
  `gear_name` varchar(128) NOT NULL,
  `gear_image` mediumblob NOT NULL,
  `gear_kind` varchar(128) NOT NULL,
  `gear_gram` int(11) NOT NULL,
  `gear_text` varchar(128) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- テーブルのデータのダンプ `gear_table`
--

INSERT INTO `gear_table` (`id`, `gear_name`, `gear_image`, `gear_kind`, `gear_gram`, `gear_text`, `created_at`, `updated_at`) VALUES
(2, '帽子', 0x4369656c652d476f2d4361702d2d4174686c65746963735f6c617267652e77656270, 'head_gear', 50, 'お気に入りの帽子', '2023-06-22 22:14:59', '2023-06-22 22:14:59');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gear_table`
--
ALTER TABLE `gear_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gear_table`
--
ALTER TABLE `gear_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
