-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 2016-05-27 11:23:20
-- 服务器版本： 5.5.38
-- PHP Version: 5.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phalapi_test`
--
CREATE DATABASE IF NOT EXISTS `phalapi_test` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phalapi_test`;

-- --------------------------------------------------------

--
-- 表的结构 `tbl_book`
--

CREATE TABLE IF NOT EXISTS `tbl_book` (
  `roomid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `day` int(11) NOT NULL,
  `hour_start` int(11) NOT NULL,
  `minute_start` int(11) NOT NULL,
  `hour_end` int(11) NOT NULL,
  `minute_end` int(11) NOT NULL,
  `roomnote` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(45) COLLATE utf8_bin NOT NULL,
  `email` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `bookaddtime` varchar(100) COLLATE utf8_bin NOT NULL,
  `roomname` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`roomid`,`userid`,`year`,`month`,`day`,`hour_start`,`minute_start`,`hour_end`,`minute_end`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- 转存表中的数据 `tbl_book`
--

INSERT INTO `tbl_book` (`roomid`, `userid`, `year`, `month`, `day`, `hour_start`, `minute_start`, `hour_end`, `minute_end`, `roomnote`, `phone`, `email`, `status`, `bookaddtime`, `roomname`) VALUES
(1, 19, 2016, 5, 26, 19, 0, 20, 0, '', '13011779237', 'null', 0, '1464258118', 'J13-101'),
(1, 19, 2016, 5, 27, 8, 0, 11, 15, '', '13011779237', 'null', 0, '1464258158', 'J13-101'),
(1, 19, 2016, 5, 27, 9, 15, 13, 30, '', '13011779237', 'null', 0, '1464314307', 'J13-101'),
(1, 19, 2016, 5, 27, 9, 45, 12, 15, '', '13011779237', 'null', 0, '1464259898', 'J13-101'),
(1, 19, 2016, 5, 27, 14, 30, 18, 15, '', '13011779237', 'null', 0, '1464258215', 'J13-101'),
(1, 19, 2016, 5, 28, 8, 30, 13, 15, '', '13011779237', 'null', 0, '1464258255', 'J13-101'),
(3, 19, 2016, 5, 27, 12, 0, 14, 30, '', '13011779237', 'null', 0, '1464315898', 'J13-102');

-- --------------------------------------------------------

--
-- 表的结构 `tbl_room`
--

CREATE TABLE IF NOT EXISTS `tbl_room` (
  `roomid` int(11) NOT NULL AUTO_INCREMENT,
  `roomname` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `roominfo` varchar(500) COLLATE utf8_bin DEFAULT NULL,
  `roomface` int(11) DEFAULT NULL,
  `roomfaceurl` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`roomid`),
  UNIQUE KEY `roomid_UNIQUE` (`roomid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `tbl_room`
--

INSERT INTO `tbl_room` (`roomid`, `roomname`, `roominfo`, `roomface`, `roomfaceurl`) VALUES
(1, 'J13-101', 'J13-101会议室是一个多功能会议室，很好', 3, NULL),
(3, 'J13-102', 'J13-102会议室是一个专用会议室，不错', 7, NULL),
(4, 'J13-103', 'J13-103位于学院楼一楼，不孬', 8, NULL),
(5, 'J13-205', 'J13-205会议室非常适合开会，哼，会议室不开会难道是用来玩哒？', 9, NULL),
(6, 'J13-206', '在J13-206会议室开会，再也不打瞌睡', 5, NULL),
(7, 'J13-310', 'J13-310会议室 可容纳20-40人，会议室配备椭圆形整体会议桌（22位），带书写板会议椅18个，投影、话筒、音响设备，可完成各种多媒体和图文信息（包括DVD/CD、演示文稿、视频及各类文字图片）的播放。配备布标悬挂架一个和饮水机一台。适用于小型办公会议、分组讨论、小型对外接待等类型会议。', 4, NULL),
(8, 'J13-316', 'J13-316会议室可容纳20人，会议室配备长方形整体会议桌（18位），带书写板会议椅2个，布标悬挂架一个、饮水机两台。适用于小型办公会议、分组讨论等类型会议。', 6, NULL),
(9, 'J13-413', 'J13-413会议室可容纳20-30人，会议室配备会议桌  张，会议椅30把，布标悬挂架一个、饮水机一台。会议桌椅可调整摆放位置。适用于小型办公会议、分组讨论等类型会议。', 1, NULL),
(10, 'J13-418', 'J13-418会议室可容纳20人，会议室配备椭圆形整体会议桌（20位），配备布标悬挂架一个和饮水机一台。适用于小型办公会议、分组讨论等类型会议。', 2, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) COLLATE utf8_bin DEFAULT NULL,
  `userpass` varchar(12) COLLATE utf8_bin DEFAULT NULL,
  `phone` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `sign` varchar(200) COLLATE utf8_bin DEFAULT NULL,
  `useraddtime` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`userid`),
  UNIQUE KEY `userid` (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `tbl_user`
--

INSERT INTO `tbl_user` (`userid`, `username`, `userpass`, `phone`, `email`, `sign`, `useraddtime`) VALUES
(1, 'yaoyugang', '123456', '13011778664', NULL, '大家好', '1464050032'),
(2, 'yaozhiyuan', '123456', '12345678901', NULL, '哈哈哈', '1464051715'),
(3, 'qwerty', '12345678', '12345678901', NULL, '哦', '1464054086'),
(4, 'zxcvbn', '12345678', '12345678901', NULL, '哈哈哈', '1464054271'),
(18, '东方不败IOT', 'www.uuu', '15712345678', NULL, NULL, '1464102879'),
(19, 'qazwsx', 'qazwsx', '13011779237', NULL, '社会主义好hhh', '1464113288');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
