-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生時間： 2017-12-14 14:13:11
-- 伺服器版本: 10.1.16-MariaDB
-- PHP 版本： 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `msv113`
--

-- --------------------------------------------------------

--
-- 資料表結構 `have_skill`
--

CREATE TABLE `have_skill` (
  `id` int(32) NOT NULL,
  `profession_id` int(32) NOT NULL,
  `skill_id` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `item`
--

CREATE TABLE `item` (
  `id` int(32) NOT NULL,
  `name` varchar(256) NOT NULL,
  `type` int(4) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `map`
--

CREATE TABLE `map` (
  `id` int(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `area` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `mission`
--

CREATE TABLE `mission` (
  `id` int(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `type` int(4) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL,
  `highest_lv` int(8) DEFAULT NULL,
  `lowest_lv` int(8) DEFAULT NULL,
  `npc_id` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `monster`
--

CREATE TABLE `monster` (
  `id` int(32) NOT NULL,
  `name` varchar(256) NOT NULL,
  `lv` int(16) DEFAULT NULL,
  `hp` int(32) DEFAULT NULL,
  `mp` int(32) DEFAULT NULL,
  `atk` int(32) DEFAULT NULL,
  `def` int(32) DEFAULT NULL,
  `exp` int(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `monster_haunt`
--

CREATE TABLE `monster_haunt` (
  `id` int(32) NOT NULL,
  `monster_id` int(32) NOT NULL,
  `map_id` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `monster_trophy`
--

CREATE TABLE `monster_trophy` (
  `id` int(32) NOT NULL,
  `monster_id` int(32) NOT NULL,
  `item_id` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `npc`
--

CREATE TABLE `npc` (
  `id` int(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `description` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `npc_location`
--

CREATE TABLE `npc_location` (
  `id` int(32) NOT NULL,
  `npc_id` int(32) NOT NULL,
  `map_id` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `profession`
--

CREATE TABLE `profession` (
  `id` int(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `stage` int(4) DEFAULT NULL,
  `parent` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `reward`
--

CREATE TABLE `reward` (
  `id` int(32) NOT NULL,
  `mission_id` int(32) NOT NULL,
  `item_id` int(32) NOT NULL,
  `number` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `lv` int(8) DEFAULT NULL,
  `description` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `have_skill`
--
ALTER TABLE `have_skill`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profession_id` (`profession_id`),
  ADD KEY `skill_id` (`skill_id`);

--
-- 資料表索引 `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npc` (`npc_id`);

--
-- 資料表索引 `monster`
--
ALTER TABLE `monster`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `monster_haunt`
--
ALTER TABLE `monster_haunt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `monster_id` (`monster_id`),
  ADD KEY `map_id` (`map_id`);

--
-- 資料表索引 `monster_trophy`
--
ALTER TABLE `monster_trophy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `monster_id` (`monster_id`),
  ADD KEY `item_id` (`item_id`);

--
-- 資料表索引 `npc`
--
ALTER TABLE `npc`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `npc_location`
--
ALTER TABLE `npc_location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npc_id` (`npc_id`),
  ADD KEY `map_id` (`map_id`);

--
-- 資料表索引 `profession`
--
ALTER TABLE `profession`
  ADD PRIMARY KEY (`id`),
  ADD KEY `parent` (`parent`);

--
-- 資料表索引 `reward`
--
ALTER TABLE `reward`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mission_id` (`mission_id`),
  ADD KEY `item_id` (`item_id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `have_skill`
--
ALTER TABLE `have_skill`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `item`
--
ALTER TABLE `item`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `map`
--
ALTER TABLE `map`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `monster`
--
ALTER TABLE `monster`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `monster_haunt`
--
ALTER TABLE `monster_haunt`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `monster_trophy`
--
ALTER TABLE `monster_trophy`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `npc`
--
ALTER TABLE `npc`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `npc_location`
--
ALTER TABLE `npc_location`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `profession`
--
ALTER TABLE `profession`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `reward`
--
ALTER TABLE `reward`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
--
-- 使用資料表 AUTO_INCREMENT `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `mission_ibfk_1` FOREIGN KEY (`npc_id`) REFERENCES `npc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `monster_haunt`
--
ALTER TABLE `monster_haunt`
  ADD CONSTRAINT `monster_haunt_ibfk_1` FOREIGN KEY (`monster_id`) REFERENCES `monster` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `monster_haunt_ibfk_2` FOREIGN KEY (`map_id`) REFERENCES `map` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `monster_trophy`
--
ALTER TABLE `monster_trophy`
  ADD CONSTRAINT `monster_trophy_ibfk_1` FOREIGN KEY (`monster_id`) REFERENCES `monster` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `monster_trophy_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `npc_location`
--
ALTER TABLE `npc_location`
  ADD CONSTRAINT `npc_location_ibfk_1` FOREIGN KEY (`npc_id`) REFERENCES `npc` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `npc_location_ibfk_2` FOREIGN KEY (`map_id`) REFERENCES `map` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `profession`
--
ALTER TABLE `profession`
  ADD CONSTRAINT `profession_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `profession` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `reward`
--
ALTER TABLE `reward`
  ADD CONSTRAINT `reward_ibfk_1` FOREIGN KEY (`mission_id`) REFERENCES `mission` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reward_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
