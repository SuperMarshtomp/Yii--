-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- 主机： 127.0.0.1
-- 生成日期： 2019-01-03 15:05:20
-- 服务器版本： 10.1.35-MariaDB
-- PHP 版本： 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 数据库： `sysdemodb2`
--

-- --------------------------------------------------------

--
-- 表的结构 `achievement`
--

CREATE TABLE `achievement` (
  `id` int(11) NOT NULL,
  `exam_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `student_id` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `achievement`
--

INSERT INTO `achievement` (`id`, `exam_name`, `student_id`, `teacher_id`, `score`) VALUES
(1, '2018期中考', 201800001, 1001, 98),
(2, '2018期末考', 201800001, 1002, 90),
(9, 'wertyu', 201800001, 1001, 0),
(10, 'wertyu', 201800001, 1002, 0),
(11, 'wertyu', 201800001, 1003, 0),
(12, 'test1', 201800001, 1001, 0),
(13, 'test1', 201800001, 1002, 0),
(14, 'test1', 201800001, 1003, 0),
(15, 'test2', 201800001, 1001, 100),
(16, 'test2', 201800001, 1002, 0),
(17, 'test2', 201800001, 1003, 0);

-- --------------------------------------------------------

--
-- 表的结构 `adminuser`
--

CREATE TABLE `adminuser` (
  `id` int(11) NOT NULL,
  `username` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `nickname` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `profile` text COLLATE utf8_unicode_ci,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `adminuser`
--

INSERT INTO `adminuser` (`id`, `username`, `nickname`, `password`, `email`, `profile`, `auth_key`, `password_hash`, `password_reset_token`) VALUES
(1, 'cyxadmin', 'cyx', '$2y$13$7JST3aNyB5P4ouiRbyeY6.bTLjQ.yulXHaj.7Z3asV9AiE7edRex6', '1392244680@qq.com', '哈哈哈', 'p2eAkcly2-pcF-EH_lPiJ4Ju2nfXOV3Q', '$2y$13$seg9glYkM.VhAmVYJaWoY.8U2YBiLJgnShTis6014V2GccYu3d.2O', NULL),
(2, 'weixi', '魏曦', '$2y$13$RZ20K81ZdERPDyFq2EM31e6KjmmdNRtGmCC6Fq9NST3hWhcgoPqUy', 'webmaster@example.com.cn', 'hello,this is my profile', 'pG7TRyTIXlEbcenpi34TzmMYS2zDsMTF', '$2y$13$4Y5KRDHPFYF.rYumLe6rx.34gBLpK6HROMklh9A8.TZwRFNrM5RyW', NULL),
(3, 'chengsc', '程思城', '$2y$13$RZ20K81ZdERPDyFq2EM31e6KjmmdNRtGmCC6Fq9NST3hWhcgoPqUy', 'tim@u2000.com', 'a testing user', 'pG7TRyTIXlEbcenpi34TzmMYS2zDsMTF', '$2y$13$HtJqGRmc76KIRIwokii8AOQ1XZljXiuWCKUGFnH9vkTnfBpHtqgFu', NULL),
(4, 'heyx', '何永兴', '$2y$13$RZ20K81ZdERPDyFq2EM31e6KjmmdNRtGmCC6Fq9NST3hWhcgoPqUy', 'heyx@hotmail.com', 'a testing user', 'pG7TRyTIXlEbcenpi34TzmMYS2zDsMTF', '$2y$13$HtJqGRmc76KIRIwokii8AOQ1XZljXiuWCKUGFnH9vkTnfBpHtqgFu', NULL),
(5, 'testadmin', 'testadmin', '*', 'testinguser@gmail.com', 'test', 'sAivVF-oznEEXaKeSLdJb0_UNAOjq1Dv', '$2y$13$Ac1SRzsv4zuzpmSJSpp32.Xrgub6rnSmOClwf/fr635tz3kD5v3pu', NULL);

-- --------------------------------------------------------

--
-- 表的结构 `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('admin', '1', 1546523801),
('admin', '2', 1546524297),
('admin', '3', 1546524301),
('admin', '4', 1546524305),
('classroomTeacher', '1', 1546523801),
('classroomTeacher', '4', 1546524305),
('student', '1', 1546523801),
('student', '2', 1546524297),
('teacher', '1', 1546523801),
('teacher', '3', 1546524301);

-- --------------------------------------------------------

--
-- 表的结构 `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('addJudge', 2, '添加评语', NULL, NULL, 1546318997, 1546318997),
('admin', 1, '系统管理员', NULL, NULL, 1546318997, 1546318997),
('classroomTeacher', 1, '班主任', NULL, NULL, 1546318997, 1546318997),
('deleteScore', 2, '删除成绩', NULL, NULL, 1546318997, 1546318997),
('student', 1, '学生', NULL, NULL, 1546318997, 1546318997),
('teacher', 1, '任课老师', NULL, NULL, 1546318997, 1546318997),
('updateScore', 2, '修改成绩', NULL, NULL, 1546318997, 1546318997);

-- --------------------------------------------------------

--
-- 表的结构 `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('admin', 'addJudge'),
('admin', 'deleteScore'),
('admin', 'updateScore'),
('classroomTeacher', 'addJudge'),
('classroomTeacher', 'deleteScore'),
('classroomTeacher', 'updateScore'),
('teacher', 'deleteScore'),
('teacher', 'updateScore');

-- --------------------------------------------------------

--
-- 表的结构 `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- 表的结构 `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 转存表中的数据 `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1541320108),
('m130524_201442_init', 1541320120),
('m140506_102106_rbac_init', 1546318835),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1546318835);

-- --------------------------------------------------------

--
-- 表的结构 `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `class_id` int(11) NOT NULL,
  `teacher_judge` text COLLATE utf8_unicode_ci,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `student`
--

INSERT INTO `student` (`student_id`, `name`, `class_id`, `teacher_judge`, `userid`) VALUES
(201800001, '廖祉林', 301, '123456789', 1),
(201800002, '学生2', 302, NULL, 2);

-- --------------------------------------------------------

--
-- 表的结构 `subjects`
--

CREATE TABLE `subjects` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `subjects`
--

INSERT INTO `subjects` (`id`, `name`) VALUES
(1, '语文'),
(2, '数学'),
(3, '英语');

-- --------------------------------------------------------

--
-- 表的结构 `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `adminuserid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `name`, `subject`, `email`, `adminuserid`) VALUES
(1001, '张桃源', 1, '121532@qq.com', 1),
(1002, '钟任涛', 2, '56456456@qq.com', 2),
(1003, '谢南江', 3, '45465456@qq.com', 3);

-- --------------------------------------------------------

--
-- 表的结构 `theclass`
--

CREATE TABLE `theclass` (
  `class_id` int(11) NOT NULL,
  `grade` int(11) NOT NULL,
  `teacher_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `theclass`
--

INSERT INTO `theclass` (`class_id`, `grade`, `teacher_id`) VALUES
(301, 3, 1001),
(302, 3, 1002);

-- --------------------------------------------------------

--
-- 表的结构 `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'yongxuanchen', 'p2eAkcly2-pcF-EH_lPiJ4Ju2nfXOV3Q', '$2y$13$7JST3aNyB5P4ouiRbyeY6.bTLjQ.yulXHaj.7Z3asV9AiE7edRex6', 'khvRZDnJld1IU2WQz1eCqTrUvBCGLo1z_1546245558', '1392244680@qq.com', 10, 1541320392, 1546260763),
(3, '学生2', '-HgK9vB6gZHWxzOctOZkCIN0JGPxuWfA', '$2y$13$irAp63vS0kBCexnxWqPhC.E/7Wb5aMisfmoHrQAw7rFtGo9AH3EZ.', NULL, '1395566770@qq.com', 10, 1546431292, 1546431292);

--
-- 转储表的索引
--

--
-- 表的索引 `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`student_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- 表的索引 `adminuser`
--
ALTER TABLE `adminuser`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`),
  ADD KEY `auth_assignment_user_id_idx` (`user_id`);

--
-- 表的索引 `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`),
  ADD KEY `rule_name` (`rule_name`),
  ADD KEY `idx-auth_item-type` (`type`);

--
-- 表的索引 `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`),
  ADD KEY `child` (`child`);

--
-- 表的索引 `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`);

--
-- 表的索引 `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- 表的索引 `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `class_id` (`class_id`),
  ADD KEY `student_ibfk_2` (`userid`);

--
-- 表的索引 `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- 表的索引 `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`),
  ADD KEY `subject` (`subject`),
  ADD KEY `teacher_ibfk_2` (`adminuserid`);

--
-- 表的索引 `theclass`
--
ALTER TABLE `theclass`
  ADD PRIMARY KEY (`class_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- 表的索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `achievement`
--
ALTER TABLE `achievement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- 使用表AUTO_INCREMENT `adminuser`
--
ALTER TABLE `adminuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- 使用表AUTO_INCREMENT `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 使用表AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- 限制导出的表
--

--
-- 限制表 `achievement`
--
ALTER TABLE `achievement`
  ADD CONSTRAINT `achievement_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`student_id`),
  ADD CONSTRAINT `achievement_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);

--
-- 限制表 `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- 限制表 `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `theclass` (`class_id`);

--
-- 限制表 `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`subject`) REFERENCES `subjects` (`id`);

--
-- 限制表 `theclass`
--
ALTER TABLE `theclass`
  ADD CONSTRAINT `theclass_ibfk_1` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`teacher_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
