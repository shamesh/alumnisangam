/*
SQLyog - Free MySQL GUI v5.01
Host - 5.0.16-nt : Database - v2bb
*********************************************************************
Server version : 5.0.16-nt
*/


create database if not exists `v2bb`;

USE `v2bb`;

/*Table structure for table `phpbb_acl_groups` */

DROP TABLE IF EXISTS `phpbb_acl_groups`;

CREATE TABLE `phpbb_acl_groups` (
  `group_id` mediumint(8) unsigned NOT NULL default '0',
  `forum_id` mediumint(8) unsigned NOT NULL default '0',
  `auth_option_id` mediumint(8) unsigned NOT NULL default '0',
  `auth_role_id` mediumint(8) unsigned NOT NULL default '0',
  `auth_setting` tinyint(2) NOT NULL default '0',
  KEY `group_id` (`group_id`),
  KEY `auth_opt_id` (`auth_option_id`),
  KEY `auth_role_id` (`auth_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_acl_groups` */

insert into `phpbb_acl_groups` values 

(1,0,85,0,1),

(1,0,93,0,1),

(1,0,111,0,1),

(5,0,0,5,0),

(5,0,0,1,0),

(2,0,0,6,0),

(3,0,0,6,0),

(4,0,0,5,0),

(4,0,0,10,0),

(1,1,0,17,0),

(2,1,0,17,0),

(3,1,0,17,0),

(6,1,0,17,0),

(1,2,0,17,0),

(2,2,0,15,0),

(3,2,0,15,0),

(4,2,0,21,0),

(5,2,0,14,0),

(5,2,0,10,0),

(6,2,0,19,0);

/*Table structure for table `phpbb_acl_options` */

DROP TABLE IF EXISTS `phpbb_acl_options`;

CREATE TABLE `phpbb_acl_options` (
  `auth_option_id` mediumint(8) unsigned NOT NULL auto_increment,
  `auth_option` varchar(50) collate utf8_bin NOT NULL default '',
  `is_global` tinyint(1) unsigned NOT NULL default '0',
  `is_local` tinyint(1) unsigned NOT NULL default '0',
  `founder_only` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`auth_option_id`),
  KEY `auth_option` (`auth_option`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_acl_options` */

insert into `phpbb_acl_options` values 

(1,'f_',0,1,0),

(2,'f_announce',0,1,0),

(3,'f_attach',0,1,0),

(4,'f_bbcode',0,1,0),

(5,'f_bump',0,1,0),

(6,'f_delete',0,1,0),

(7,'f_download',0,1,0),

(8,'f_edit',0,1,0),

(9,'f_email',0,1,0),

(10,'f_flash',0,1,0),

(11,'f_icons',0,1,0),

(12,'f_ignoreflood',0,1,0),

(13,'f_img',0,1,0),

(14,'f_list',0,1,0),

(15,'f_noapprove',0,1,0),

(16,'f_poll',0,1,0),

(17,'f_post',0,1,0),

(18,'f_postcount',0,1,0),

(19,'f_print',0,1,0),

(20,'f_read',0,1,0),

(21,'f_reply',0,1,0),

(22,'f_report',0,1,0),

(23,'f_search',0,1,0),

(24,'f_sigs',0,1,0),

(25,'f_smilies',0,1,0),

(26,'f_sticky',0,1,0),

(27,'f_subscribe',0,1,0),

(28,'f_user_lock',0,1,0),

(29,'f_vote',0,1,0),

(30,'f_votechg',0,1,0),

(31,'m_',1,1,0),

(32,'m_approve',1,1,0),

(33,'m_chgposter',1,1,0),

(34,'m_delete',1,1,0),

(35,'m_edit',1,1,0),

(36,'m_info',1,1,0),

(37,'m_lock',1,1,0),

(38,'m_merge',1,1,0),

(39,'m_move',1,1,0),

(40,'m_report',1,1,0),

(41,'m_split',1,1,0),

(42,'m_ban',1,0,0),

(43,'m_warn',1,0,0),

(44,'a_',1,0,0),

(45,'a_aauth',1,0,0),

(46,'a_attach',1,0,0),

(47,'a_authgroups',1,0,0),

(48,'a_authusers',1,0,0),

(49,'a_backup',1,0,0),

(50,'a_ban',1,0,0),

(51,'a_bbcode',1,0,0),

(52,'a_board',1,0,0),

(53,'a_bots',1,0,0),

(54,'a_clearlogs',1,0,0),

(55,'a_email',1,0,0),

(56,'a_fauth',1,0,0),

(57,'a_forum',1,0,0),

(58,'a_forumadd',1,0,0),

(59,'a_forumdel',1,0,0),

(60,'a_group',1,0,0),

(61,'a_groupadd',1,0,0),

(62,'a_groupdel',1,0,0),

(63,'a_icons',1,0,0),

(64,'a_jabber',1,0,0),

(65,'a_language',1,0,0),

(66,'a_mauth',1,0,0),

(67,'a_modules',1,0,0),

(68,'a_names',1,0,0),

(69,'a_phpinfo',1,0,0),

(70,'a_profile',1,0,0),

(71,'a_prune',1,0,0),

(72,'a_ranks',1,0,0),

(73,'a_reasons',1,0,0),

(74,'a_roles',1,0,0),

(75,'a_search',1,0,0),

(76,'a_server',1,0,0),

(77,'a_styles',1,0,0),

(78,'a_switchperm',1,0,0),

(79,'a_uauth',1,0,0),

(80,'a_user',1,0,0),

(81,'a_userdel',1,0,0),

(82,'a_viewauth',1,0,0),

(83,'a_viewlogs',1,0,0),

(84,'a_words',1,0,0),

(85,'u_',1,0,0),

(86,'u_attach',1,0,0),

(87,'u_chgavatar',1,0,0),

(88,'u_chgcensors',1,0,0),

(89,'u_chgemail',1,0,0),

(90,'u_chggrp',1,0,0),

(91,'u_chgname',1,0,0),

(92,'u_chgpasswd',1,0,0),

(93,'u_download',1,0,0),

(94,'u_hideonline',1,0,0),

(95,'u_ignoreflood',1,0,0),

(96,'u_masspm',1,0,0),

(97,'u_masspm_group',1,0,0),

(98,'u_pm_attach',1,0,0),

(99,'u_pm_bbcode',1,0,0),

(100,'u_pm_delete',1,0,0),

(101,'u_pm_download',1,0,0),

(102,'u_pm_edit',1,0,0),

(103,'u_pm_emailpm',1,0,0),

(104,'u_pm_flash',1,0,0),

(105,'u_pm_forward',1,0,0),

(106,'u_pm_img',1,0,0),

(107,'u_pm_printpm',1,0,0),

(108,'u_pm_smilies',1,0,0),

(109,'u_readpm',1,0,0),

(110,'u_savedrafts',1,0,0),

(111,'u_search',1,0,0),

(112,'u_sendemail',1,0,0),

(113,'u_sendim',1,0,0),

(114,'u_sendpm',1,0,0),

(115,'u_sig',1,0,0),

(116,'u_viewonline',1,0,0),

(117,'u_viewprofile',1,0,0);

/*Table structure for table `phpbb_acl_roles` */

DROP TABLE IF EXISTS `phpbb_acl_roles`;

CREATE TABLE `phpbb_acl_roles` (
  `role_id` mediumint(8) unsigned NOT NULL auto_increment,
  `role_name` varchar(255) collate utf8_bin NOT NULL default '',
  `role_description` text collate utf8_bin NOT NULL,
  `role_type` varchar(10) collate utf8_bin NOT NULL default '',
  `role_order` smallint(4) unsigned NOT NULL default '0',
  PRIMARY KEY  (`role_id`),
  KEY `role_type` (`role_type`),
  KEY `role_order` (`role_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_acl_roles` */

insert into `phpbb_acl_roles` values 

(1,'ROLE_ADMIN_STANDARD','ROLE_DESCRIPTION_ADMIN_STANDARD','a_',1),

(2,'ROLE_ADMIN_FORUM','ROLE_DESCRIPTION_ADMIN_FORUM','a_',3),

(3,'ROLE_ADMIN_USERGROUP','ROLE_DESCRIPTION_ADMIN_USERGROUP','a_',4),

(4,'ROLE_ADMIN_FULL','ROLE_DESCRIPTION_ADMIN_FULL','a_',2),

(5,'ROLE_USER_FULL','ROLE_DESCRIPTION_USER_FULL','u_',3),

(6,'ROLE_USER_STANDARD','ROLE_DESCRIPTION_USER_STANDARD','u_',1),

(7,'ROLE_USER_LIMITED','ROLE_DESCRIPTION_USER_LIMITED','u_',2),

(8,'ROLE_USER_NOPM','ROLE_DESCRIPTION_USER_NOPM','u_',4),

(9,'ROLE_USER_NOAVATAR','ROLE_DESCRIPTION_USER_NOAVATAR','u_',5),

(10,'ROLE_MOD_FULL','ROLE_DESCRIPTION_MOD_FULL','m_',3),

(11,'ROLE_MOD_STANDARD','ROLE_DESCRIPTION_MOD_STANDARD','m_',1),

(12,'ROLE_MOD_SIMPLE','ROLE_DESCRIPTION_MOD_SIMPLE','m_',2),

(13,'ROLE_MOD_QUEUE','ROLE_DESCRIPTION_MOD_QUEUE','m_',4),

(14,'ROLE_FORUM_FULL','ROLE_DESCRIPTION_FORUM_FULL','f_',7),

(15,'ROLE_FORUM_STANDARD','ROLE_DESCRIPTION_FORUM_STANDARD','f_',5),

(16,'ROLE_FORUM_NOACCESS','ROLE_DESCRIPTION_FORUM_NOACCESS','f_',1),

(17,'ROLE_FORUM_READONLY','ROLE_DESCRIPTION_FORUM_READONLY','f_',2),

(18,'ROLE_FORUM_LIMITED','ROLE_DESCRIPTION_FORUM_LIMITED','f_',3),

(19,'ROLE_FORUM_BOT','ROLE_DESCRIPTION_FORUM_BOT','f_',9),

(20,'ROLE_FORUM_ONQUEUE','ROLE_DESCRIPTION_FORUM_ONQUEUE','f_',8),

(21,'ROLE_FORUM_POLLS','ROLE_DESCRIPTION_FORUM_POLLS','f_',6),

(22,'ROLE_FORUM_LIMITED_POLLS','ROLE_DESCRIPTION_FORUM_LIMITED_POLLS','f_',4);

/*Table structure for table `phpbb_acl_roles_data` */

DROP TABLE IF EXISTS `phpbb_acl_roles_data`;

CREATE TABLE `phpbb_acl_roles_data` (
  `role_id` mediumint(8) unsigned NOT NULL default '0',
  `auth_option_id` mediumint(8) unsigned NOT NULL default '0',
  `auth_setting` tinyint(2) NOT NULL default '0',
  PRIMARY KEY  (`role_id`,`auth_option_id`),
  KEY `ath_op_id` (`auth_option_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_acl_roles_data` */

insert into `phpbb_acl_roles_data` values 

(1,44,1),

(1,46,1),

(1,47,1),

(1,48,1),

(1,50,1),

(1,51,1),

(1,52,1),

(1,56,1),

(1,57,1),

(1,58,1),

(1,59,1),

(1,60,1),

(1,61,1),

(1,62,1),

(1,63,1),

(1,66,1),

(1,68,1),

(1,70,1),

(1,71,1),

(1,72,1),

(1,73,1),

(1,79,1),

(1,80,1),

(1,81,1),

(1,82,1),

(1,83,1),

(1,84,1),

(2,44,1),

(2,47,1),

(2,48,1),

(2,56,1),

(2,57,1),

(2,58,1),

(2,59,1),

(2,66,1),

(2,71,1),

(2,79,1),

(2,82,1),

(2,83,1),

(3,44,1),

(3,47,1),

(3,48,1),

(3,50,1),

(3,60,1),

(3,61,1),

(3,62,1),

(3,72,1),

(3,79,1),

(3,80,1),

(3,82,1),

(3,83,1),

(4,44,1),

(4,45,1),

(4,46,1),

(4,47,1),

(4,48,1),

(4,49,1),

(4,50,1),

(4,51,1),

(4,52,1),

(4,53,1),

(4,54,1),

(4,55,1),

(4,56,1),

(4,57,1),

(4,58,1),

(4,59,1),

(4,60,1),

(4,61,1),

(4,62,1),

(4,63,1),

(4,64,1),

(4,65,1),

(4,66,1),

(4,67,1),

(4,68,1),

(4,69,1),

(4,70,1),

(4,71,1),

(4,72,1),

(4,73,1),

(4,74,1),

(4,75,1),

(4,76,1),

(4,77,1),

(4,78,1),

(4,79,1),

(4,80,1),

(4,81,1),

(4,82,1),

(4,83,1),

(4,84,1),

(5,85,1),

(5,86,1),

(5,87,1),

(5,88,1),

(5,89,1),

(5,90,1),

(5,91,1),

(5,92,1),

(5,93,1),

(5,94,1),

(5,95,1),

(5,96,1),

(5,97,1),

(5,98,1),

(5,99,1),

(5,100,1),

(5,101,1),

(5,102,1),

(5,103,1),

(5,104,1),

(5,105,1),

(5,106,1),

(5,107,1),

(5,108,1),

(5,109,1),

(5,110,1),

(5,111,1),

(5,112,1),

(5,113,1),

(5,114,1),

(5,115,1),

(5,116,1),

(5,117,1),

(6,85,1),

(6,86,1),

(6,87,1),

(6,88,1),

(6,89,1),

(6,92,1),

(6,93,1),

(6,94,1),

(6,96,1),

(6,97,1),

(6,98,1),

(6,99,1),

(6,100,1),

(6,101,1),

(6,102,1),

(6,103,1),

(6,106,1),

(6,107,1),

(6,108,1),

(6,109,1),

(6,110,1),

(6,111,1),

(6,112,1),

(6,113,1),

(6,114,1),

(6,115,1),

(6,117,1),

(7,85,1),

(7,87,1),

(7,88,1),

(7,89,1),

(7,92,1),

(7,93,1),

(7,94,1),

(7,99,1),

(7,100,1),

(7,101,1),

(7,102,1),

(7,105,1),

(7,106,1),

(7,107,1),

(7,108,1),

(7,109,1),

(7,114,1),

(7,115,1),

(7,117,1),

(8,85,1),

(8,87,1),

(8,88,1),

(8,89,1),

(8,92,1),

(8,93,1),

(8,94,1),

(8,96,0),

(8,97,0),

(8,109,0),

(8,114,0),

(8,115,1),

(8,117,1),

(9,85,1),

(9,87,0),

(9,88,1),

(9,89,1),

(9,92,1),

(9,93,1),

(9,94,1),

(9,96,0),

(9,97,0),

(9,99,1),

(9,100,1),

(9,101,1),

(9,102,1),

(9,105,1),

(9,106,1),

(9,107,1),

(9,108,1),

(9,109,1),

(9,114,1),

(9,115,1),

(9,117,1),

(10,31,1),

(10,32,1),

(10,33,1),

(10,34,1),

(10,35,1),

(10,36,1),

(10,37,1),

(10,38,1),

(10,39,1),

(10,40,1),

(10,41,1),

(10,42,1),

(10,43,1),

(11,31,1),

(11,32,1),

(11,34,1),

(11,35,1),

(11,36,1),

(11,37,1),

(11,38,1),

(11,39,1),

(11,40,1),

(11,41,1),

(11,43,1),

(12,31,1),

(12,34,1),

(12,35,1),

(12,36,1),

(12,40,1),

(13,31,1),

(13,32,1),

(13,35,1),

(14,1,1),

(14,2,1),

(14,3,1),

(14,4,1),

(14,5,1),

(14,6,1),

(14,7,1),

(14,8,1),

(14,9,1),

(14,10,1),

(14,11,1),

(14,12,1),

(14,13,1),

(14,14,1),

(14,15,1),

(14,16,1),

(14,17,1),

(14,18,1),

(14,19,1),

(14,20,1),

(14,21,1),

(14,22,1),

(14,23,1),

(14,24,1),

(14,25,1),

(14,26,1),

(14,27,1),

(14,28,1),

(14,29,1),

(14,30,1),

(15,1,1),

(15,3,1),

(15,4,1),

(15,5,1),

(15,6,1),

(15,7,1),

(15,8,1),

(15,9,1),

(15,11,1),

(15,13,1),

(15,14,1),

(15,15,1),

(15,17,1),

(15,18,1),

(15,19,1),

(15,20,1),

(15,21,1),

(15,22,1),

(15,23,1),

(15,24,1),

(15,25,1),

(15,27,1),

(15,29,1),

(15,30,1),

(16,1,0),

(17,1,1),

(17,7,1),

(17,14,1),

(17,19,1),

(17,20,1),

(17,23,1),

(17,27,1),

(18,1,1),

(18,4,1),

(18,7,1),

(18,8,1),

(18,9,1),

(18,13,1),

(18,14,1),

(18,15,1),

(18,17,1),

(18,18,1),

(18,19,1),

(18,20,1),

(18,21,1),

(18,22,1),

(18,23,1),

(18,24,1),

(18,25,1),

(18,27,1),

(18,29,1),

(19,1,1),

(19,7,1),

(19,14,1),

(19,19,1),

(19,20,1),

(20,1,1),

(20,3,1),

(20,4,1),

(20,7,1),

(20,8,1),

(20,9,1),

(20,13,1),

(20,14,1),

(20,15,0),

(20,17,1),

(20,18,1),

(20,19,1),

(20,20,1),

(20,21,1),

(20,22,1),

(20,23,1),

(20,24,1),

(20,25,1),

(20,27,1),

(20,29,1),

(21,1,1),

(21,3,1),

(21,4,1),

(21,5,1),

(21,6,1),

(21,7,1),

(21,8,1),

(21,9,1),

(21,11,1),

(21,13,1),

(21,14,1),

(21,15,1),

(21,16,1),

(21,17,1),

(21,18,1),

(21,19,1),

(21,20,1),

(21,21,1),

(21,22,1),

(21,23,1),

(21,24,1),

(21,25,1),

(21,27,1),

(21,29,1),

(21,30,1),

(22,1,1),

(22,4,1),

(22,7,1),

(22,8,1),

(22,9,1),

(22,13,1),

(22,14,1),

(22,15,1),

(22,16,1),

(22,17,1),

(22,18,1),

(22,19,1),

(22,20,1),

(22,21,1),

(22,22,1),

(22,23,1),

(22,24,1),

(22,25,1),

(22,27,1),

(22,29,1);

/*Table structure for table `phpbb_acl_users` */

DROP TABLE IF EXISTS `phpbb_acl_users`;

CREATE TABLE `phpbb_acl_users` (
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `forum_id` mediumint(8) unsigned NOT NULL default '0',
  `auth_option_id` mediumint(8) unsigned NOT NULL default '0',
  `auth_role_id` mediumint(8) unsigned NOT NULL default '0',
  `auth_setting` tinyint(2) NOT NULL default '0',
  KEY `user_id` (`user_id`),
  KEY `auth_option_id` (`auth_option_id`),
  KEY `auth_role_id` (`auth_role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_acl_users` */

insert into `phpbb_acl_users` values 

(2,0,0,5,0),

(53,0,86,0,1),

(53,0,88,0,1),

(53,0,93,0,1),

(53,0,110,0,1),

(53,0,115,0,1),

(53,0,87,0,1),

(53,0,89,0,1),

(53,0,90,0,1),

(53,0,91,0,1),

(53,0,92,0,1),

(53,0,117,0,1),

(53,0,94,0,1),

(53,0,95,0,1),

(53,0,111,0,1),

(53,0,112,0,1),

(53,0,113,0,1),

(53,0,116,0,1),

(53,0,96,0,1),

(53,0,97,0,1),

(53,0,98,0,1),

(53,0,99,0,1),

(53,0,100,0,1),

(53,0,101,0,1),

(53,0,102,0,1),

(53,0,103,0,1),

(53,0,104,0,1),

(53,0,105,0,1),

(53,0,106,0,1),

(53,0,107,0,1),

(53,0,108,0,1),

(53,0,109,0,1),

(53,0,114,0,1),

(53,0,85,0,1),

(53,0,45,0,0),

(53,0,47,0,0),

(53,0,48,0,0),

(53,0,56,0,0),

(53,0,66,0,0),

(53,0,74,0,0),

(53,0,78,0,0),

(53,0,79,0,0),

(53,0,82,0,0),

(53,0,46,0,0),

(53,0,51,0,0),

(53,0,63,0,0),

(53,0,84,0,0),

(53,0,49,0,0),

(53,0,53,0,0),

(53,0,54,0,0),

(53,0,55,0,0),

(53,0,65,0,0),

(53,0,67,0,0),

(53,0,73,0,0),

(53,0,75,0,0),

(53,0,77,0,0),

(53,0,83,0,0),

(53,0,50,0,0),

(53,0,60,0,0),

(53,0,61,0,0),

(53,0,62,0,0),

(53,0,68,0,0),

(53,0,70,0,0),

(53,0,72,0,0),

(53,0,80,0,0),

(53,0,81,0,0),

(53,0,52,0,0),

(53,0,64,0,0),

(53,0,69,0,0),

(53,0,76,0,0),

(53,0,57,0,0),

(53,0,58,0,0),

(53,0,59,0,0),

(53,0,71,0,0);

/*Table structure for table `phpbb_attachments` */

DROP TABLE IF EXISTS `phpbb_attachments`;

CREATE TABLE `phpbb_attachments` (
  `attach_id` mediumint(8) unsigned NOT NULL auto_increment,
  `post_msg_id` mediumint(8) unsigned NOT NULL default '0',
  `topic_id` mediumint(8) unsigned NOT NULL default '0',
  `in_message` tinyint(1) unsigned NOT NULL default '0',
  `poster_id` mediumint(8) unsigned NOT NULL default '0',
  `is_orphan` tinyint(1) unsigned NOT NULL default '1',
  `physical_filename` varchar(255) collate utf8_bin NOT NULL default '',
  `real_filename` varchar(255) collate utf8_bin NOT NULL default '',
  `download_count` mediumint(8) unsigned NOT NULL default '0',
  `attach_comment` text collate utf8_bin NOT NULL,
  `extension` varchar(100) collate utf8_bin NOT NULL default '',
  `mimetype` varchar(100) collate utf8_bin NOT NULL default '',
  `filesize` int(20) unsigned NOT NULL default '0',
  `filetime` int(11) unsigned NOT NULL default '0',
  `thumbnail` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`attach_id`),
  KEY `filetime` (`filetime`),
  KEY `post_msg_id` (`post_msg_id`),
  KEY `topic_id` (`topic_id`),
  KEY `poster_id` (`poster_id`),
  KEY `is_orphan` (`is_orphan`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_attachments` */

/*Table structure for table `phpbb_banlist` */

DROP TABLE IF EXISTS `phpbb_banlist`;

CREATE TABLE `phpbb_banlist` (
  `ban_id` mediumint(8) unsigned NOT NULL auto_increment,
  `ban_userid` mediumint(8) unsigned NOT NULL default '0',
  `ban_ip` varchar(40) collate utf8_bin NOT NULL default '',
  `ban_email` varchar(100) collate utf8_bin NOT NULL default '',
  `ban_start` int(11) unsigned NOT NULL default '0',
  `ban_end` int(11) unsigned NOT NULL default '0',
  `ban_exclude` tinyint(1) unsigned NOT NULL default '0',
  `ban_reason` varchar(255) collate utf8_bin NOT NULL default '',
  `ban_give_reason` varchar(255) collate utf8_bin NOT NULL default '',
  PRIMARY KEY  (`ban_id`),
  KEY `ban_end` (`ban_end`),
  KEY `ban_user` (`ban_userid`,`ban_exclude`),
  KEY `ban_email` (`ban_email`,`ban_exclude`),
  KEY `ban_ip` (`ban_ip`,`ban_exclude`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_banlist` */

/*Table structure for table `phpbb_bbcodes` */

DROP TABLE IF EXISTS `phpbb_bbcodes`;

CREATE TABLE `phpbb_bbcodes` (
  `bbcode_id` tinyint(3) NOT NULL default '0',
  `bbcode_tag` varchar(16) collate utf8_bin NOT NULL default '',
  `bbcode_helpline` varchar(255) collate utf8_bin NOT NULL default '',
  `display_on_posting` tinyint(1) unsigned NOT NULL default '0',
  `bbcode_match` text collate utf8_bin NOT NULL,
  `bbcode_tpl` mediumtext collate utf8_bin NOT NULL,
  `first_pass_match` mediumtext collate utf8_bin NOT NULL,
  `first_pass_replace` mediumtext collate utf8_bin NOT NULL,
  `second_pass_match` mediumtext collate utf8_bin NOT NULL,
  `second_pass_replace` mediumtext collate utf8_bin NOT NULL,
  PRIMARY KEY  (`bbcode_id`),
  KEY `display_on_post` (`display_on_posting`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_bbcodes` */

/*Table structure for table `phpbb_bookmarks` */

DROP TABLE IF EXISTS `phpbb_bookmarks`;

CREATE TABLE `phpbb_bookmarks` (
  `topic_id` mediumint(8) unsigned NOT NULL default '0',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`topic_id`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_bookmarks` */

/*Table structure for table `phpbb_bots` */

DROP TABLE IF EXISTS `phpbb_bots`;

CREATE TABLE `phpbb_bots` (
  `bot_id` mediumint(8) unsigned NOT NULL auto_increment,
  `bot_active` tinyint(1) unsigned NOT NULL default '1',
  `bot_name` varchar(255) collate utf8_bin NOT NULL default '',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `bot_agent` varchar(255) collate utf8_bin NOT NULL default '',
  `bot_ip` varchar(255) collate utf8_bin NOT NULL default '',
  PRIMARY KEY  (`bot_id`),
  KEY `bot_active` (`bot_active`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_bots` */

insert into `phpbb_bots` values 

(1,1,'AdsBot [Google]',3,'AdsBot-Google',''),

(2,1,'Alexa [Bot]',4,'ia_archiver',''),

(3,1,'Alta Vista [Bot]',5,'Scooter/',''),

(4,1,'Ask Jeeves [Bot]',6,'Ask Jeeves',''),

(5,1,'Baidu [Spider]',7,'Baiduspider+(',''),

(6,1,'Exabot [Bot]',8,'Exabot/',''),

(7,1,'FAST Enterprise [Crawler]',9,'FAST Enterprise Crawler',''),

(8,1,'FAST WebCrawler [Crawler]',10,'FAST-WebCrawler/',''),

(9,1,'Francis [Bot]',11,'http://www.neomo.de/',''),

(10,1,'Gigabot [Bot]',12,'Gigabot/',''),

(11,1,'Google Adsense [Bot]',13,'Mediapartners-Google',''),

(12,1,'Google Desktop',14,'Google Desktop',''),

(13,1,'Google Feedfetcher',15,'Feedfetcher-Google',''),

(14,1,'Google [Bot]',16,'Googlebot',''),

(15,1,'Heise IT-Markt [Crawler]',17,'heise-IT-Markt-Crawler',''),

(16,1,'Heritrix [Crawler]',18,'heritrix/1.',''),

(17,1,'IBM Research [Bot]',19,'ibm.com/cs/crawler',''),

(18,1,'ICCrawler - ICjobs',20,'ICCrawler - ICjobs',''),

(19,1,'ichiro [Crawler]',21,'ichiro/2',''),

(20,1,'Majestic-12 [Bot]',22,'MJ12bot/',''),

(21,1,'Metager [Bot]',23,'MetagerBot/',''),

(22,1,'MSN NewsBlogs',24,'msnbot-NewsBlogs/',''),

(23,1,'MSN [Bot]',25,'msnbot/',''),

(24,1,'MSNbot Media',26,'msnbot-media/',''),

(25,1,'NG-Search [Bot]',27,'NG-Search/',''),

(26,1,'Nutch [Bot]',28,'http://lucene.apache.org/nutch/',''),

(27,1,'Nutch/CVS [Bot]',29,'NutchCVS/',''),

(28,1,'OmniExplorer [Bot]',30,'OmniExplorer_Bot/',''),

(29,1,'Online link [Validator]',31,'online link validator',''),

(30,1,'psbot [Picsearch]',32,'psbot/0',''),

(31,1,'Seekport [Bot]',33,'Seekbot/',''),

(32,1,'Sensis [Crawler]',34,'Sensis Web Crawler',''),

(33,1,'SEO Crawler',35,'SEO search Crawler/',''),

(34,1,'Seoma [Crawler]',36,'Seoma [SEO Crawler]',''),

(35,1,'SEOSearch [Crawler]',37,'SEOsearch/',''),

(36,1,'Snappy [Bot]',38,'Snappy/1.1 ( http://www.urltrends.com/ )',''),

(37,1,'Steeler [Crawler]',39,'http://www.tkl.iis.u-tokyo.ac.jp/~crawler/',''),

(38,1,'Synoo [Bot]',40,'SynooBot/',''),

(39,1,'Telekom [Bot]',41,'crawleradmin.t-info@telekom.de',''),

(40,1,'TurnitinBot [Bot]',42,'TurnitinBot/',''),

(41,1,'Voyager [Bot]',43,'voyager/1.0',''),

(42,1,'W3 [Sitesearch]',44,'W3 SiteSearch Crawler',''),

(43,1,'W3C [Linkcheck]',45,'W3C-checklink/',''),

(44,1,'W3C [Validator]',46,'W3C_*Validator',''),

(45,1,'WiseNut [Bot]',47,'http://www.WISEnutbot.com',''),

(46,1,'YaCy [Bot]',48,'yacybot',''),

(47,1,'Yahoo MMCrawler [Bot]',49,'Yahoo-MMCrawler/',''),

(48,1,'Yahoo Slurp [Bot]',50,'Yahoo! DE Slurp',''),

(49,1,'Yahoo [Bot]',51,'Yahoo! Slurp',''),

(50,1,'YahooSeeker [Bot]',52,'YahooSeeker/','');

/*Table structure for table `phpbb_config` */

DROP TABLE IF EXISTS `phpbb_config`;

CREATE TABLE `phpbb_config` (
  `config_name` varchar(255) collate utf8_bin NOT NULL default '',
  `config_value` varchar(255) collate utf8_bin NOT NULL default '',
  `is_dynamic` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`config_name`),
  KEY `is_dynamic` (`is_dynamic`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_config` */

insert into `phpbb_config` values 

('active_sessions','0',0),

('allow_attachments','1',0),

('allow_autologin','1',0),

('allow_avatar_local','0',0),

('allow_avatar_remote','0',0),

('allow_avatar_upload','0',0),

('allow_bbcode','1',0),

('allow_birthdays','1',0),

('allow_bookmarks','1',0),

('allow_emailreuse','0',0),

('allow_forum_notify','1',0),

('allow_mass_pm','1',0),

('allow_name_chars','USERNAME_ALPHA_ONLY',0),

('allow_namechange','0',0),

('allow_nocensors','0',0),

('allow_pm_attach','0',0),

('allow_post_flash','1',0),

('allow_post_links','1',0),

('allow_privmsg','1',0),

('allow_sig','1',0),

('allow_sig_bbcode','1',0),

('allow_sig_flash','0',0),

('allow_sig_img','1',0),

('allow_sig_links','1',0),

('allow_sig_pm','1',0),

('allow_sig_smilies','1',0),

('allow_smilies','1',0),

('allow_topic_notify','1',0),

('attachment_quota','52428800',0),

('auth_bbcode_pm','1',0),

('auth_flash_pm','0',0),

('auth_img_pm','1',0),

('auth_method','db',0),

('auth_smilies_pm','1',0),

('avatar_filesize','6144',0),

('avatar_gallery_path','images/avatars/gallery',0),

('avatar_max_height','90',0),

('avatar_max_width','90',0),

('avatar_min_height','20',0),

('avatar_min_width','20',0),

('avatar_path','images/avatars/upload',0),

('avatar_salt','6718ada11ae2bd5a7adc2a202cc3a556',0),

('board_contact','gourishanker@neevtech.com',0),

('board_disable','0',0),

('board_disable_msg','',0),

('board_dst','0',0),

('board_email','gourishanker@neevtech.com',0),

('board_email_form','0',0),

('board_email_sig','Thanks, The Management',0),

('board_hide_emails','1',0),

('board_startdate','1236756255',0),

('board_timezone','0',0),

('browser_check','1',0),

('bump_interval','10',0),

('bump_type','d',0),

('cache_gc','7200',0),

('cache_last_gc','1243593001',1),

('captcha_gd','1',0),

('captcha_gd_foreground_noise','0',0),

('captcha_gd_x_grid','25',0),

('captcha_gd_y_grid','25',0),

('check_attachment_content','1',0),

('check_dnsbl','0',0),

('chg_passforce','0',0),

('cookie_domain','localhost',0),

('cookie_name','phpbb3_3jmx4',0),

('cookie_path','/',0),

('cookie_secure','0',0),

('coppa_enable','0',0),

('coppa_fax','',0),

('coppa_mail','',0),

('cron_lock','0',1),

('database_gc','604800',0),

('database_last_gc','1243581445',1),

('dbms_version','5.1.24-rc-community',0),

('default_dateformat','D M d, Y g:i a',0),

('default_lang','en',0),

('default_style','1',0),

('display_last_edited','1',0),

('display_order','0',0),

('edit_time','0',0),

('email_check_mx','1',0),

('email_enable','1',0),

('email_function_name','mail',0),

('email_package_size','50',0),

('enable_confirm','1',0),

('enable_pm_icons','1',0),

('enable_post_confirm','1',0),

('enable_queue_trigger','0',0),

('flood_interval','15',0),

('force_server_vars','1',0),

('form_token_lifetime','7200',0),

('form_token_mintime','0',0),

('form_token_sid_guests','1',0),

('forward_pm','1',0),

('forwarded_for_check','0',0),

('full_folder_action','2',0),

('fulltext_mysql_max_word_len','254',0),

('fulltext_mysql_min_word_len','4',0),

('fulltext_native_common_thres','5',0),

('fulltext_native_load_upd','1',0),

('fulltext_native_max_chars','14',0),

('fulltext_native_min_chars','3',0),

('gzip_compress','0',0),

('hot_threshold','25',0),

('icons_path','images/icons',0),

('img_create_thumbnail','0',0),

('img_display_inlined','1',0),

('img_imagick','',0),

('img_link_height','0',0),

('img_link_width','0',0),

('img_max_height','0',0),

('img_max_thumb_width','400',0),

('img_max_width','0',0),

('img_min_thumb_filesize','12000',0),

('ip_check','3',0),

('jab_enable','0',0),

('jab_host','',0),

('jab_package_size','20',0),

('jab_password','',0),

('jab_port','5222',0),

('jab_use_ssl','0',0),

('jab_username','',0),

('last_queue_run','0',1),

('ldap_base_dn','',0),

('ldap_email','',0),

('ldap_password','',0),

('ldap_port','',0),

('ldap_server','',0),

('ldap_uid','',0),

('ldap_user','',0),

('ldap_user_filter','',0),

('limit_load','0',0),

('limit_search_load','0',0),

('load_anon_lastread','0',0),

('load_birthdays','1',0),

('load_cpf_memberlist','0',0),

('load_cpf_viewprofile','1',0),

('load_cpf_viewtopic','0',0),

('load_db_lastread','1',0),

('load_db_track','1',0),

('load_jumpbox','1',0),

('load_moderators','1',0),

('load_online','1',0),

('load_online_guests','1',0),

('load_online_time','5',0),

('load_onlinetrack','1',0),

('load_search','1',0),

('load_tplcompile','0',0),

('load_user_activity','1',0),

('max_attachments','3',0),

('max_attachments_pm','1',0),

('max_autologin_time','0',0),

('max_filesize','262144',0),

('max_filesize_pm','262144',0),

('max_login_attempts','3',0),

('max_name_chars','20',0),

('max_pass_chars','30',0),

('max_poll_options','10',0),

('max_post_chars','60000',0),

('max_post_font_size','200',0),

('max_post_img_height','0',0),

('max_post_img_width','0',0),

('max_post_smilies','0',0),

('max_post_urls','0',0),

('max_quote_depth','3',0),

('max_reg_attempts','5',0),

('max_sig_chars','255',0),

('max_sig_font_size','200',0),

('max_sig_img_height','0',0),

('max_sig_img_width','0',0),

('max_sig_smilies','0',0),

('max_sig_urls','5',0),

('mime_triggers','body|head|html|img|plaintext|a href|pre|script|table|title',0),

('min_name_chars','3',0),

('min_pass_chars','6',0),

('min_search_author_chars','3',0),

('newest_user_colour','',1),

('newest_user_id','53',1),

('newest_username','bajajbb',1),

('num_files','0',1),

('num_posts','4',1),

('num_topics','2',1),

('num_users','2',1),

('override_user_style','0',0),

('pass_complex','PASS_TYPE_ANY',0),

('pm_edit_time','0',0),

('pm_max_boxes','4',0),

('pm_max_msgs','50',0),

('pm_max_recipients','0',0),

('posts_per_page','10',0),

('print_pm','1',0),

('queue_interval','600',0),

('queue_trigger_posts','3',0),

('rand_seed','9b0879b67ae78d023520590f5f28fc7b',1),

('rand_seed_last_update','1244037126',1),

('ranks_path','images/ranks',0),

('record_online_date','1241711237',1),

('record_online_users','4',1),

('referer_validation','1',0),

('require_activation','2',0),

('script_path','/phpBB3',0),

('search_anonymous_interval','0',0),

('search_block_size','250',0),

('search_gc','7200',0),

('search_indexing_state','',0),

('search_interval','0',0),

('search_last_gc','1243593140',1),

('search_store_results','1800',0),

('search_type','fulltext_native',0),

('secure_allow_deny','1',0),

('secure_allow_empty_referer','1',0),

('secure_downloads','0',0),

('server_name','localhost',0),

('server_port','80',0),

('server_protocol','http://',0),

('session_gc','3600',0),

('session_last_gc','1243581818',1),

('session_length','3600',0),

('site_desc','A short text to describe your forum',0),

('sitename','yourdomain.com',0),

('smilies_path','images/smilies',0),

('smtp_auth_method','DIGEST-MD5',0),

('smtp_delivery','1',0),

('smtp_host','neevtech.com',0),

('smtp_password','sp2Enu',0),

('smtp_port','25',0),

('smtp_username','neev-smtp',0),

('topics_per_page','25',0),

('tpl_allow_php','0',0),

('upload_dir_size','0',1),

('upload_icons_path','images/upload_icons',0),

('upload_path','files',0),

('version','3.0.4',0),

('warnings_expire_days','90',0),

('warnings_gc','14400',0),

('warnings_last_gc','1243581430',1);

/*Table structure for table `phpbb_confirm` */

DROP TABLE IF EXISTS `phpbb_confirm`;

CREATE TABLE `phpbb_confirm` (
  `confirm_id` char(32) collate utf8_bin NOT NULL default '',
  `session_id` char(32) collate utf8_bin NOT NULL default '',
  `confirm_type` tinyint(3) NOT NULL default '0',
  `code` varchar(8) collate utf8_bin NOT NULL default '',
  `seed` int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (`session_id`,`confirm_id`),
  KEY `confirm_type` (`confirm_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_confirm` */

/*Table structure for table `phpbb_disallow` */

DROP TABLE IF EXISTS `phpbb_disallow`;

CREATE TABLE `phpbb_disallow` (
  `disallow_id` mediumint(8) unsigned NOT NULL auto_increment,
  `disallow_username` varchar(255) collate utf8_bin NOT NULL default '',
  PRIMARY KEY  (`disallow_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_disallow` */

/*Table structure for table `phpbb_drafts` */

DROP TABLE IF EXISTS `phpbb_drafts`;

CREATE TABLE `phpbb_drafts` (
  `draft_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `topic_id` mediumint(8) unsigned NOT NULL default '0',
  `forum_id` mediumint(8) unsigned NOT NULL default '0',
  `save_time` int(11) unsigned NOT NULL default '0',
  `draft_subject` varchar(255) collate utf8_bin NOT NULL default '',
  `draft_message` mediumtext collate utf8_bin NOT NULL,
  PRIMARY KEY  (`draft_id`),
  KEY `save_time` (`save_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_drafts` */

/*Table structure for table `phpbb_extension_groups` */

DROP TABLE IF EXISTS `phpbb_extension_groups`;

CREATE TABLE `phpbb_extension_groups` (
  `group_id` mediumint(8) unsigned NOT NULL auto_increment,
  `group_name` varchar(255) collate utf8_bin NOT NULL default '',
  `cat_id` tinyint(2) NOT NULL default '0',
  `allow_group` tinyint(1) unsigned NOT NULL default '0',
  `download_mode` tinyint(1) unsigned NOT NULL default '1',
  `upload_icon` varchar(255) collate utf8_bin NOT NULL default '',
  `max_filesize` int(20) unsigned NOT NULL default '0',
  `allowed_forums` text collate utf8_bin NOT NULL,
  `allow_in_pm` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_extension_groups` */

insert into `phpbb_extension_groups` values 

(1,'Images',1,1,1,'',0,'',0),

(2,'Archives',0,1,1,'',0,'',0),

(3,'Plain Text',0,0,1,'',0,'',0),

(4,'Documents',0,0,1,'',0,'',0),

(5,'Real Media',3,0,1,'',0,'',0),

(6,'Windows Media',2,0,1,'',0,'',0),

(7,'Flash Files',5,0,1,'',0,'',0),

(8,'Quicktime Media',6,0,1,'',0,'',0),

(9,'Downloadable Files',0,0,1,'',0,'',0);

/*Table structure for table `phpbb_extensions` */

DROP TABLE IF EXISTS `phpbb_extensions`;

CREATE TABLE `phpbb_extensions` (
  `extension_id` mediumint(8) unsigned NOT NULL auto_increment,
  `group_id` mediumint(8) unsigned NOT NULL default '0',
  `extension` varchar(100) collate utf8_bin NOT NULL default '',
  PRIMARY KEY  (`extension_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_extensions` */

insert into `phpbb_extensions` values 

(1,1,'gif'),

(2,1,'png'),

(3,1,'jpeg'),

(4,1,'jpg'),

(5,1,'tif'),

(6,1,'tiff'),

(7,1,'tga'),

(8,2,'gtar'),

(9,2,'gz'),

(10,2,'tar'),

(11,2,'zip'),

(12,2,'rar'),

(13,2,'ace'),

(14,2,'torrent'),

(15,2,'tgz'),

(16,2,'bz2'),

(17,2,'7z'),

(18,3,'txt'),

(19,3,'c'),

(20,3,'h'),

(21,3,'cpp'),

(22,3,'hpp'),

(23,3,'diz'),

(24,3,'csv'),

(25,3,'ini'),

(26,3,'log'),

(27,3,'js'),

(28,3,'xml'),

(29,4,'xls'),

(30,4,'xlsx'),

(31,4,'xlsm'),

(32,4,'xlsb'),

(33,4,'doc'),

(34,4,'docx'),

(35,4,'docm'),

(36,4,'dot'),

(37,4,'dotx'),

(38,4,'dotm'),

(39,4,'pdf'),

(40,4,'ai'),

(41,4,'ps'),

(42,4,'ppt'),

(43,4,'pptx'),

(44,4,'pptm'),

(45,4,'odg'),

(46,4,'odp'),

(47,4,'ods'),

(48,4,'odt'),

(49,4,'rtf'),

(50,5,'rm'),

(51,5,'ram'),

(52,6,'wma'),

(53,6,'wmv'),

(54,7,'swf'),

(55,8,'mov'),

(56,8,'m4v'),

(57,8,'m4a'),

(58,8,'mp4'),

(59,8,'3gp'),

(60,8,'3g2'),

(61,8,'qt'),

(62,9,'mpeg'),

(63,9,'mpg'),

(64,9,'mp3'),

(65,9,'ogg'),

(66,9,'ogm');

/*Table structure for table `phpbb_forums` */

DROP TABLE IF EXISTS `phpbb_forums`;

CREATE TABLE `phpbb_forums` (
  `forum_id` mediumint(8) unsigned NOT NULL auto_increment,
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `left_id` mediumint(8) unsigned NOT NULL default '0',
  `right_id` mediumint(8) unsigned NOT NULL default '0',
  `forum_parents` mediumtext collate utf8_bin NOT NULL,
  `forum_name` varchar(255) collate utf8_bin NOT NULL default '',
  `forum_desc` text collate utf8_bin NOT NULL,
  `forum_desc_bitfield` varchar(255) collate utf8_bin NOT NULL default '',
  `forum_desc_options` int(11) unsigned NOT NULL default '7',
  `forum_desc_uid` varchar(8) collate utf8_bin NOT NULL default '',
  `forum_link` varchar(255) collate utf8_bin NOT NULL default '',
  `forum_password` varchar(40) collate utf8_bin NOT NULL default '',
  `forum_style` mediumint(8) unsigned NOT NULL default '0',
  `forum_image` varchar(255) collate utf8_bin NOT NULL default '',
  `forum_rules` text collate utf8_bin NOT NULL,
  `forum_rules_link` varchar(255) collate utf8_bin NOT NULL default '',
  `forum_rules_bitfield` varchar(255) collate utf8_bin NOT NULL default '',
  `forum_rules_options` int(11) unsigned NOT NULL default '7',
  `forum_rules_uid` varchar(8) collate utf8_bin NOT NULL default '',
  `forum_topics_per_page` tinyint(4) NOT NULL default '0',
  `forum_type` tinyint(4) NOT NULL default '0',
  `forum_status` tinyint(4) NOT NULL default '0',
  `forum_posts` mediumint(8) unsigned NOT NULL default '0',
  `forum_topics` mediumint(8) unsigned NOT NULL default '0',
  `forum_topics_real` mediumint(8) unsigned NOT NULL default '0',
  `forum_last_post_id` mediumint(8) unsigned NOT NULL default '0',
  `forum_last_poster_id` mediumint(8) unsigned NOT NULL default '0',
  `forum_last_post_subject` varchar(255) collate utf8_bin NOT NULL default '',
  `forum_last_post_time` int(11) unsigned NOT NULL default '0',
  `forum_last_poster_name` varchar(255) collate utf8_bin NOT NULL default '',
  `forum_last_poster_colour` varchar(6) collate utf8_bin NOT NULL default '',
  `forum_flags` tinyint(4) NOT NULL default '32',
  `display_subforum_list` tinyint(1) unsigned NOT NULL default '1',
  `display_on_index` tinyint(1) unsigned NOT NULL default '1',
  `enable_indexing` tinyint(1) unsigned NOT NULL default '1',
  `enable_icons` tinyint(1) unsigned NOT NULL default '1',
  `enable_prune` tinyint(1) unsigned NOT NULL default '0',
  `prune_next` int(11) unsigned NOT NULL default '0',
  `prune_days` mediumint(8) unsigned NOT NULL default '0',
  `prune_viewed` mediumint(8) unsigned NOT NULL default '0',
  `prune_freq` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`forum_id`),
  KEY `left_right_id` (`left_id`,`right_id`),
  KEY `forum_lastpost_id` (`forum_last_post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_forums` */

insert into `phpbb_forums` values 

(1,0,1,4,'','Your first category','','',7,'','','',0,'','','','',7,'',0,0,0,1,1,1,1,2,'',1236756255,'myadmin','AA0000',32,1,1,1,1,0,0,0,0,0),

(2,1,2,3,'a:1:{i:1;a:2:{i:0;s:19:\"Your first category\";i:1;i:0;}}','Your first forum','Description of your first forum.','',7,'','','',0,'','','','',7,'',0,1,0,4,2,2,4,53,'new intr',1236857079,'BAJAJ','',32,1,1,1,1,0,0,0,0,0);

/*Table structure for table `phpbb_forums_access` */

DROP TABLE IF EXISTS `phpbb_forums_access`;

CREATE TABLE `phpbb_forums_access` (
  `forum_id` mediumint(8) unsigned NOT NULL default '0',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `session_id` char(32) collate utf8_bin NOT NULL default '',
  PRIMARY KEY  (`forum_id`,`user_id`,`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_forums_access` */

/*Table structure for table `phpbb_forums_track` */

DROP TABLE IF EXISTS `phpbb_forums_track`;

CREATE TABLE `phpbb_forums_track` (
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `forum_id` mediumint(8) unsigned NOT NULL default '0',
  `mark_time` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`user_id`,`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_forums_track` */

insert into `phpbb_forums_track` values 

(2,0,1236756662),

(2,2,1236756662),

(53,0,1236857079),

(53,2,1236857079);

/*Table structure for table `phpbb_forums_watch` */

DROP TABLE IF EXISTS `phpbb_forums_watch`;

CREATE TABLE `phpbb_forums_watch` (
  `forum_id` mediumint(8) unsigned NOT NULL default '0',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `notify_status` tinyint(1) unsigned NOT NULL default '0',
  KEY `forum_id` (`forum_id`),
  KEY `user_id` (`user_id`),
  KEY `notify_stat` (`notify_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_forums_watch` */

/*Table structure for table `phpbb_groups` */

DROP TABLE IF EXISTS `phpbb_groups`;

CREATE TABLE `phpbb_groups` (
  `group_id` mediumint(8) unsigned NOT NULL auto_increment,
  `group_type` tinyint(4) NOT NULL default '1',
  `group_founder_manage` tinyint(1) unsigned NOT NULL default '0',
  `group_name` varchar(255) collate utf8_bin NOT NULL default '',
  `group_desc` text collate utf8_bin NOT NULL,
  `group_desc_bitfield` varchar(255) collate utf8_bin NOT NULL default '',
  `group_desc_options` int(11) unsigned NOT NULL default '7',
  `group_desc_uid` varchar(8) collate utf8_bin NOT NULL default '',
  `group_display` tinyint(1) unsigned NOT NULL default '0',
  `group_avatar` varchar(255) collate utf8_bin NOT NULL default '',
  `group_avatar_type` tinyint(2) NOT NULL default '0',
  `group_avatar_width` smallint(4) unsigned NOT NULL default '0',
  `group_avatar_height` smallint(4) unsigned NOT NULL default '0',
  `group_rank` mediumint(8) unsigned NOT NULL default '0',
  `group_colour` varchar(6) collate utf8_bin NOT NULL default '',
  `group_sig_chars` mediumint(8) unsigned NOT NULL default '0',
  `group_receive_pm` tinyint(1) unsigned NOT NULL default '0',
  `group_message_limit` mediumint(8) unsigned NOT NULL default '0',
  `group_max_recipients` mediumint(8) unsigned NOT NULL default '0',
  `group_legend` tinyint(1) unsigned NOT NULL default '1',
  PRIMARY KEY  (`group_id`),
  KEY `group_legend_name` (`group_legend`,`group_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_groups` */

insert into `phpbb_groups` values 

(1,3,0,'GUESTS','','',7,'',0,'',0,0,0,0,'',0,0,0,5,0),

(2,3,0,'REGISTERED','','',7,'',0,'',0,0,0,0,'',0,0,0,5,0),

(3,3,0,'REGISTERED_COPPA','','',7,'',0,'',0,0,0,0,'',0,0,0,5,0),

(4,3,0,'GLOBAL_MODERATORS','','',7,'',0,'',0,0,0,0,'00AA00',0,0,0,0,1),

(5,3,1,'ADMINISTRATORS','','',7,'',0,'',0,0,0,0,'AA0000',0,0,0,0,1),

(6,3,0,'BOTS','','',7,'',0,'',0,0,0,0,'9E8DA7',0,0,0,5,0);

/*Table structure for table `phpbb_icons` */

DROP TABLE IF EXISTS `phpbb_icons`;

CREATE TABLE `phpbb_icons` (
  `icons_id` mediumint(8) unsigned NOT NULL auto_increment,
  `icons_url` varchar(255) collate utf8_bin NOT NULL default '',
  `icons_width` tinyint(4) NOT NULL default '0',
  `icons_height` tinyint(4) NOT NULL default '0',
  `icons_order` mediumint(8) unsigned NOT NULL default '0',
  `display_on_posting` tinyint(1) unsigned NOT NULL default '1',
  PRIMARY KEY  (`icons_id`),
  KEY `display_on_posting` (`display_on_posting`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_icons` */

insert into `phpbb_icons` values 

(1,'misc/fire.gif',16,16,1,1),

(2,'smile/redface.gif',16,16,9,1),

(3,'smile/mrgreen.gif',16,16,10,1),

(4,'misc/heart.gif',16,16,4,1),

(5,'misc/star.gif',16,16,2,1),

(6,'misc/radioactive.gif',16,16,3,1),

(7,'misc/thinking.gif',16,16,5,1),

(8,'smile/info.gif',16,16,8,1),

(9,'smile/question.gif',16,16,6,1),

(10,'smile/alert.gif',16,16,7,1);

/*Table structure for table `phpbb_lang` */

DROP TABLE IF EXISTS `phpbb_lang`;

CREATE TABLE `phpbb_lang` (
  `lang_id` tinyint(4) NOT NULL auto_increment,
  `lang_iso` varchar(30) collate utf8_bin NOT NULL default '',
  `lang_dir` varchar(30) collate utf8_bin NOT NULL default '',
  `lang_english_name` varchar(100) collate utf8_bin NOT NULL default '',
  `lang_local_name` varchar(255) collate utf8_bin NOT NULL default '',
  `lang_author` varchar(255) collate utf8_bin NOT NULL default '',
  PRIMARY KEY  (`lang_id`),
  KEY `lang_iso` (`lang_iso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_lang` */

insert into `phpbb_lang` values 

(1,'en','en','British English','British English','phpBB Group');

/*Table structure for table `phpbb_log` */

DROP TABLE IF EXISTS `phpbb_log`;

CREATE TABLE `phpbb_log` (
  `log_id` mediumint(8) unsigned NOT NULL auto_increment,
  `log_type` tinyint(4) NOT NULL default '0',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `forum_id` mediumint(8) unsigned NOT NULL default '0',
  `topic_id` mediumint(8) unsigned NOT NULL default '0',
  `reportee_id` mediumint(8) unsigned NOT NULL default '0',
  `log_ip` varchar(40) collate utf8_bin NOT NULL default '',
  `log_time` int(11) unsigned NOT NULL default '0',
  `log_operation` text collate utf8_bin NOT NULL,
  `log_data` mediumtext collate utf8_bin NOT NULL,
  PRIMARY KEY  (`log_id`),
  KEY `log_type` (`log_type`),
  KEY `forum_id` (`forum_id`),
  KEY `topic_id` (`topic_id`),
  KEY `reportee_id` (`reportee_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_log` */

insert into `phpbb_log` values 

(1,0,2,0,0,0,'127.0.0.1',1236756289,'LOG_INSTALL_INSTALLED','a:1:{i:0;s:5:\"3.0.4\";}'),

(2,0,2,0,0,0,'127.0.0.1',1236756520,'LOG_USER_DEL_SIG','a:1:{i:0;s:7:\"myadmin\";}'),

(3,3,2,0,0,2,'127.0.0.1',1236756520,'LOG_USER_DEL_SIG_USER',''),

(4,0,2,0,0,0,'127.0.0.1',1236756953,'LOG_ADMIN_AUTH_SUCCESS',''),

(5,0,2,0,0,0,'127.0.0.1',1236756977,'LOG_CONFIG_SERVER',''),

(6,0,2,0,0,0,'127.0.0.1',1236757578,'LOG_CONFIG_REGISTRATION',''),

(7,0,2,0,0,0,'127.0.0.1',1236757621,'LOG_TEMPLATE_CACHE_CLEARED','a:2:{i:0;s:9:\"prosilver\";i:1;s:9:\"All files\";}'),

(8,0,2,0,0,0,'127.0.0.1',1236757633,'LOG_TEMPLATE_ADD_DB','a:1:{i:0;s:10:\"subsilver2\";}'),

(9,0,2,0,0,0,'127.0.0.1',1236757692,'LOG_THEME_ADD_DB','a:1:{i:0;s:10:\"subsilver2\";}'),

(10,0,2,0,0,0,'127.0.0.1',1236757699,'LOG_THEME_EDIT_DETAILS','a:1:{i:0;s:10:\"subsilver2\";}'),

(11,0,2,0,0,0,'127.0.0.1',1236757709,'LOG_THEME_REFRESHED','a:1:{i:0;s:10:\"subsilver2\";}'),

(12,0,2,0,0,0,'127.0.0.1',1236757716,'LOG_IMAGESET_ADD_FS','a:1:{i:0;s:10:\"subsilver2\";}'),

(13,0,2,0,0,0,'127.0.0.1',1236757729,'LOG_STYLE_ADD','a:1:{i:0;s:10:\"subsilver2\";}'),

(14,0,2,0,0,0,'127.0.0.1',1236757785,'LOG_STYLE_EDIT_DETAILS','a:1:{i:0;s:10:\"subsilver2\";}'),

(15,0,2,0,0,0,'127.0.0.1',1236757793,'LOG_STYLE_EDIT_DETAILS','a:1:{i:0;s:9:\"prosilver\";}'),

(16,0,2,0,0,0,'127.0.0.1',1236757809,'LOG_STYLE_EDIT_DETAILS','a:1:{i:0;s:10:\"subsilver2\";}'),

(17,0,2,0,0,0,'127.0.0.1',1236757822,'LOG_STYLE_EDIT_DETAILS','a:1:{i:0;s:10:\"subsilver2\";}'),

(18,0,2,0,0,0,'127.0.0.1',1236757848,'LOG_STYLE_ADD','a:1:{i:0;s:9:\"newstyle1\";}'),

(19,0,2,0,0,0,'127.0.0.1',1236757886,'LOG_STYLE_DELETE','a:1:{i:0;s:9:\"newstyle1\";}'),

(20,0,2,0,0,0,'127.0.0.1',1236758007,'LOG_ADMIN_AUTH_SUCCESS',''),

(21,0,2,0,0,0,'127.0.0.1',1236758036,'LOG_CONFIG_SERVER',''),

(22,0,2,0,0,0,'127.0.0.1',1236758045,'LOG_CONFIG_SERVER',''),

(23,0,2,0,0,0,'127.0.0.1',1236758104,'LOG_ADMIN_AUTH_SUCCESS',''),

(24,0,2,0,0,0,'127.0.0.1',1236758268,'LOG_CONFIG_AUTH',''),

(25,0,2,0,0,0,'127.0.0.1',1236762023,'LOG_ADMIN_AUTH_SUCCESS',''),

(26,0,2,0,0,0,'127.0.0.1',1236762073,'LOG_STYLE_EDIT_DETAILS','a:1:{i:0;s:9:\"prosilver\";}'),

(27,0,2,0,0,0,'127.0.0.1',1236762104,'LOG_ADMIN_AUTH_SUCCESS',''),

(28,0,2,0,0,0,'127.0.0.1',1236763788,'LOG_ADMIN_AUTH_SUCCESS',''),

(29,0,2,0,0,0,'127.0.0.1',1236763902,'LOG_TEMPLATE_CACHE_CLEARED','a:2:{i:0;s:9:\"prosilver\";i:1;s:14:\"overall_header\";}'),

(30,0,2,0,0,0,'127.0.0.1',1236763902,'LOG_TEMPLATE_EDIT','a:2:{i:0;s:9:\"prosilver\";i:1;s:19:\"overall_header.html\";}'),

(31,0,2,0,0,0,'127.0.0.1',1236763919,'LOG_TEMPLATE_CACHE_CLEARED','a:2:{i:0;s:9:\"prosilver\";i:1;s:14:\"overall_header\";}'),

(32,0,2,0,0,0,'127.0.0.1',1236763919,'LOG_TEMPLATE_EDIT','a:2:{i:0;s:9:\"prosilver\";i:1;s:19:\"overall_header.html\";}'),

(33,0,2,0,0,0,'127.0.0.1',1236763960,'LOG_TEMPLATE_CACHE_CLEARED','a:2:{i:0;s:9:\"prosilver\";i:1;s:350:\"drafts, forumlist_body, index_body, jumpbox, login_body, message_body, overall_footer, overall_header, posting_attach_body, posting_body, posting_buttons, posting_editor, posting_layout, posting_pm_layout, posting_poll_body, posting_preview, posting_review, posting_topic_review, ucp_footer, ucp_header, ucp_pm_history, viewforum_body, viewtopic_body\";}'),

(34,0,2,0,0,0,'127.0.0.1',1236768996,'LOG_ADMIN_AUTH_SUCCESS',''),

(35,0,1,0,0,0,'127.0.0.1',1236861227,'LOG_ADMIN_AUTH_SUCCESS',''),

(36,0,1,0,0,0,'127.0.0.1',1236861491,'LOG_ADMIN_AUTH_SUCCESS',''),

(37,0,1,0,0,0,'127.0.0.1',1236861654,'LOG_ADMIN_AUTH_SUCCESS',''),

(38,0,1,0,0,0,'127.0.0.1',1236861994,'LOG_ADMIN_AUTH_SUCCESS',''),

(39,0,2,0,0,0,'127.0.0.1',1236862155,'LOG_ADMIN_AUTH_SUCCESS',''),

(40,0,1,0,0,0,'127.0.0.1',1236862213,'LOG_ADMIN_AUTH_SUCCESS',''),

(41,0,1,0,0,0,'127.0.0.1',1236925162,'LOG_ADMIN_AUTH_SUCCESS',''),

(42,3,2,0,0,2,'127.0.0.1',1236925246,'LOG_USER_NEW_PASSWORD','a:1:{i:0;s:7:\"myadmin\";}'),

(43,0,2,0,0,0,'127.0.0.1',1236925277,'LOG_ADMIN_AUTH_SUCCESS',''),

(44,0,2,0,0,0,'127.0.0.1',1236925498,'LOG_ADMIN_AUTH_SUCCESS',''),

(45,0,2,0,0,0,'127.0.0.1',1236925580,'LOG_ADMIN_AUTH_SUCCESS',''),

(46,0,2,0,0,0,'127.0.0.1',1236925602,'LOG_ADMIN_AUTH_SUCCESS',''),

(47,0,2,0,0,0,'127.0.0.1',1236925620,'LOG_ADMIN_AUTH_SUCCESS',''),

(48,0,2,0,0,0,'127.0.0.1',1236925705,'LOG_ADMIN_AUTH_SUCCESS',''),

(49,0,2,0,0,0,'127.0.0.1',1236926979,'LOG_ADMIN_AUTH_SUCCESS',''),

(50,0,2,0,0,0,'127.0.0.1',1236927137,'LOG_ADMIN_AUTH_FAIL',''),

(51,0,2,0,0,0,'127.0.0.1',1236928303,'LOG_ACL_TRANSFER_PERMISSIONS','a:1:{i:0;s:5:\"BAJAJ\";}'),

(52,0,2,0,0,0,'127.0.0.1',1236928341,'LOG_ACL_TRANSFER_PERMISSIONS','a:1:{i:0;s:5:\"BAJAJ\";}'),

(53,0,2,0,0,0,'127.0.0.1',1236928355,'LOG_ACL_RESTORE_PERMISSIONS','a:1:{i:0;s:5:\"BAJAJ\";}'),

(54,0,2,0,0,0,'127.0.0.1',1236928389,'LOG_ACL_TRANSFER_PERMISSIONS','a:1:{i:0;s:5:\"BAJAJ\";}'),

(55,0,2,0,0,0,'127.0.0.1',1236928414,'LOG_ACL_RESTORE_PERMISSIONS','a:1:{i:0;s:5:\"BAJAJ\";}'),

(56,0,2,0,0,0,'127.0.0.1',1236928501,'LOG_ACL_TRANSFER_PERMISSIONS','a:1:{i:0;s:5:\"BAJAJ\";}'),

(57,0,2,0,0,0,'127.0.0.1',1236928517,'LOG_ACL_RESTORE_PERMISSIONS','a:1:{i:0;s:5:\"BAJAJ\";}'),

(58,0,2,0,0,0,'127.0.0.1',1236928564,'LOG_ACL_ADD_USER_GLOBAL_U_','a:1:{i:0;s:5:\"BAJAJ\";}'),

(59,0,2,0,0,0,'127.0.0.1',1236928582,'LOG_ACL_ADD_USER_GLOBAL_A_','a:1:{i:0;s:5:\"BAJAJ\";}'),

(60,0,2,0,0,0,'127.0.0.1',1236928599,'LOG_ACL_TRANSFER_PERMISSIONS','a:1:{i:0;s:5:\"BAJAJ\";}'),

(61,0,2,0,0,0,'127.0.0.1',1236928609,'LOG_ACL_RESTORE_PERMISSIONS','a:1:{i:0;s:5:\"BAJAJ\";}'),

(62,0,2,0,0,0,'127.0.0.1',1236929721,'LOG_ACL_ADD_USER_GLOBAL_U_','a:1:{i:0;s:5:\"BAJAJ\";}'),

(63,0,2,0,0,0,'127.0.0.1',1236929755,'LOG_ACL_ADD_USER_GLOBAL_U_','a:1:{i:0;s:5:\"BAJAJ\";}'),

(64,0,2,0,0,0,'127.0.0.1',1236929772,'LOG_ACL_ADD_USER_GLOBAL_U_','a:1:{i:0;s:5:\"BAJAJ\";}'),

(65,0,2,0,0,0,'127.0.0.1',1236929789,'LOG_ACL_ADD_USER_GLOBAL_U_','a:1:{i:0;s:5:\"BAJAJ\";}'),

(66,0,2,0,0,0,'127.0.0.1',1236929826,'LOG_ACL_ADD_USER_GLOBAL_U_','a:1:{i:0;s:5:\"BAJAJ\";}'),

(67,0,2,0,0,0,'127.0.0.1',1236929837,'LOG_ACL_ADD_USER_GLOBAL_U_','a:1:{i:0;s:5:\"BAJAJ\";}'),

(68,0,53,0,0,0,'127.0.0.1',1236930153,'LOG_ACL_ADD_USER_GLOBAL_U_','a:1:{i:0;s:5:\"BAJAJ\";}'),

(69,0,53,0,0,0,'127.0.0.1',1236930258,'LOG_ACL_ADD_USER_GLOBAL_A_','a:1:{i:0;s:5:\"BAJAJ\";}'),

(70,0,53,0,0,0,'127.0.0.1',1236930371,'LOG_ACL_ADD_USER_GLOBAL_A_','a:1:{i:0;s:5:\"BAJAJ\";}'),

(71,0,2,0,0,0,'127.0.0.1',1237009305,'LOG_ADMIN_AUTH_SUCCESS',''),

(72,0,2,0,0,0,'127.0.0.1',1237009691,'LOG_THEME_EDIT','a:2:{i:0;s:9:\"prosilver\";i:1;s:0:\"\";}'),

(73,0,2,0,0,0,'127.0.0.1',1237009737,'LOG_ADMIN_AUTH_SUCCESS',''),

(74,0,2,0,0,0,'127.0.0.1',1237009812,'LOG_PURGE_CACHE',''),

(75,0,2,0,0,0,'127.0.0.1',1237009916,'LOG_PURGE_CACHE',''),

(76,0,2,0,0,0,'127.0.0.1',1237010009,'LOG_THEME_EDIT','a:2:{i:0;s:9:\"prosilver\";i:1;s:0:\"\";}'),

(77,0,2,0,0,0,'127.0.0.1',1241711137,'LOG_ADMIN_AUTH_SUCCESS','');

/*Table structure for table `phpbb_moderator_cache` */

DROP TABLE IF EXISTS `phpbb_moderator_cache`;

CREATE TABLE `phpbb_moderator_cache` (
  `forum_id` mediumint(8) unsigned NOT NULL default '0',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `username` varchar(255) collate utf8_bin NOT NULL default '',
  `group_id` mediumint(8) unsigned NOT NULL default '0',
  `group_name` varchar(255) collate utf8_bin NOT NULL default '',
  `display_on_index` tinyint(1) unsigned NOT NULL default '1',
  KEY `disp_idx` (`display_on_index`),
  KEY `forum_id` (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_moderator_cache` */

/*Table structure for table `phpbb_modules` */

DROP TABLE IF EXISTS `phpbb_modules`;

CREATE TABLE `phpbb_modules` (
  `module_id` mediumint(8) unsigned NOT NULL auto_increment,
  `module_enabled` tinyint(1) unsigned NOT NULL default '1',
  `module_display` tinyint(1) unsigned NOT NULL default '1',
  `module_basename` varchar(255) collate utf8_bin NOT NULL default '',
  `module_class` varchar(10) collate utf8_bin NOT NULL default '',
  `parent_id` mediumint(8) unsigned NOT NULL default '0',
  `left_id` mediumint(8) unsigned NOT NULL default '0',
  `right_id` mediumint(8) unsigned NOT NULL default '0',
  `module_langname` varchar(255) collate utf8_bin NOT NULL default '',
  `module_mode` varchar(255) collate utf8_bin NOT NULL default '',
  `module_auth` varchar(255) collate utf8_bin NOT NULL default '',
  PRIMARY KEY  (`module_id`),
  KEY `left_right_id` (`left_id`,`right_id`),
  KEY `module_enabled` (`module_enabled`),
  KEY `class_left_id` (`module_class`,`left_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_modules` */

insert into `phpbb_modules` values 

(1,1,1,'','acp',0,1,60,'ACP_CAT_GENERAL','',''),

(2,1,1,'','acp',1,4,17,'ACP_QUICK_ACCESS','',''),

(3,1,1,'','acp',1,18,39,'ACP_BOARD_CONFIGURATION','',''),

(4,1,1,'','acp',1,40,47,'ACP_CLIENT_COMMUNICATION','',''),

(5,1,1,'','acp',1,48,59,'ACP_SERVER_CONFIGURATION','',''),

(6,1,1,'','acp',0,61,78,'ACP_CAT_FORUMS','',''),

(7,1,1,'','acp',6,62,67,'ACP_MANAGE_FORUMS','',''),

(8,1,1,'','acp',6,68,77,'ACP_FORUM_BASED_PERMISSIONS','',''),

(9,1,1,'','acp',0,79,102,'ACP_CAT_POSTING','',''),

(10,1,1,'','acp',9,80,91,'ACP_MESSAGES','',''),

(11,1,1,'','acp',9,92,101,'ACP_ATTACHMENTS','',''),

(12,1,1,'','acp',0,103,156,'ACP_CAT_USERGROUP','',''),

(13,1,1,'','acp',12,104,135,'ACP_CAT_USERS','',''),

(14,1,1,'','acp',12,136,143,'ACP_GROUPS','',''),

(15,1,1,'','acp',12,144,155,'ACP_USER_SECURITY','',''),

(16,1,1,'','acp',0,157,204,'ACP_CAT_PERMISSIONS','',''),

(17,1,1,'','acp',16,160,169,'ACP_GLOBAL_PERMISSIONS','',''),

(18,1,1,'','acp',16,170,179,'ACP_FORUM_BASED_PERMISSIONS','',''),

(19,1,1,'','acp',16,180,189,'ACP_PERMISSION_ROLES','',''),

(20,1,1,'','acp',16,190,203,'ACP_PERMISSION_MASKS','',''),

(21,1,1,'','acp',0,205,218,'ACP_CAT_STYLES','',''),

(22,1,1,'','acp',21,206,209,'ACP_STYLE_MANAGEMENT','',''),

(23,1,1,'','acp',21,210,217,'ACP_STYLE_COMPONENTS','',''),

(24,1,1,'','acp',0,219,238,'ACP_CAT_MAINTENANCE','',''),

(25,1,1,'','acp',24,220,229,'ACP_FORUM_LOGS','',''),

(26,1,1,'','acp',24,230,237,'ACP_CAT_DATABASE','',''),

(27,1,1,'','acp',0,239,264,'ACP_CAT_SYSTEM','',''),

(28,1,1,'','acp',27,240,243,'ACP_AUTOMATION','',''),

(29,1,1,'','acp',27,244,255,'ACP_GENERAL_TASKS','',''),

(30,1,1,'','acp',27,256,263,'ACP_MODULE_MANAGEMENT','',''),

(31,1,1,'','acp',0,265,266,'ACP_CAT_DOT_MODS','',''),

(32,1,1,'attachments','acp',3,19,20,'ACP_ATTACHMENT_SETTINGS','attach','acl_a_attach'),

(33,1,1,'attachments','acp',11,93,94,'ACP_ATTACHMENT_SETTINGS','attach','acl_a_attach'),

(34,1,1,'attachments','acp',11,95,96,'ACP_MANAGE_EXTENSIONS','extensions','acl_a_attach'),

(35,1,1,'attachments','acp',11,97,98,'ACP_EXTENSION_GROUPS','ext_groups','acl_a_attach'),

(36,1,1,'attachments','acp',11,99,100,'ACP_ORPHAN_ATTACHMENTS','orphan','acl_a_attach'),

(37,1,1,'ban','acp',15,145,146,'ACP_BAN_EMAILS','email','acl_a_ban'),

(38,1,1,'ban','acp',15,147,148,'ACP_BAN_IPS','ip','acl_a_ban'),

(39,1,1,'ban','acp',15,149,150,'ACP_BAN_USERNAMES','user','acl_a_ban'),

(40,1,1,'bbcodes','acp',10,81,82,'ACP_BBCODES','bbcodes','acl_a_bbcode'),

(41,1,1,'board','acp',3,21,22,'ACP_BOARD_SETTINGS','settings','acl_a_board'),

(42,1,1,'board','acp',3,23,24,'ACP_BOARD_FEATURES','features','acl_a_board'),

(43,1,1,'board','acp',3,25,26,'ACP_AVATAR_SETTINGS','avatar','acl_a_board'),

(44,1,1,'board','acp',3,27,28,'ACP_MESSAGE_SETTINGS','message','acl_a_board'),

(45,1,1,'board','acp',10,83,84,'ACP_MESSAGE_SETTINGS','message','acl_a_board'),

(46,1,1,'board','acp',3,29,30,'ACP_POST_SETTINGS','post','acl_a_board'),

(47,1,1,'board','acp',3,31,32,'ACP_SIGNATURE_SETTINGS','signature','acl_a_board'),

(48,1,1,'board','acp',3,33,34,'ACP_REGISTER_SETTINGS','registration','acl_a_board'),

(49,1,1,'board','acp',4,41,42,'ACP_AUTH_SETTINGS','auth','acl_a_server'),

(50,1,1,'board','acp',4,43,44,'ACP_EMAIL_SETTINGS','email','acl_a_server'),

(51,1,1,'board','acp',5,49,50,'ACP_COOKIE_SETTINGS','cookie','acl_a_server'),

(52,1,1,'board','acp',5,51,52,'ACP_SERVER_SETTINGS','server','acl_a_server'),

(53,1,1,'board','acp',5,53,54,'ACP_SECURITY_SETTINGS','security','acl_a_server'),

(54,1,1,'board','acp',5,55,56,'ACP_LOAD_SETTINGS','load','acl_a_server'),

(55,1,1,'bots','acp',29,245,246,'ACP_BOTS','bots','acl_a_bots'),

(56,1,1,'captcha','acp',3,35,36,'ACP_VC_SETTINGS','visual','acl_a_board'),

(57,1,0,'captcha','acp',3,37,38,'ACP_VC_CAPTCHA_DISPLAY','img','acl_a_board'),

(58,1,1,'database','acp',26,231,232,'ACP_BACKUP','backup','acl_a_backup'),

(59,1,1,'database','acp',26,233,234,'ACP_RESTORE','restore','acl_a_backup'),

(60,1,1,'disallow','acp',15,151,152,'ACP_DISALLOW_USERNAMES','usernames','acl_a_names'),

(61,1,1,'email','acp',29,247,248,'ACP_MASS_EMAIL','email','acl_a_email && cfg_email_enable'),

(62,1,1,'forums','acp',7,63,64,'ACP_MANAGE_FORUMS','manage','acl_a_forum'),

(63,1,1,'groups','acp',14,137,138,'ACP_GROUPS_MANAGE','manage','acl_a_group'),

(64,1,1,'icons','acp',10,85,86,'ACP_ICONS','icons','acl_a_icons'),

(65,1,1,'icons','acp',10,87,88,'ACP_SMILIES','smilies','acl_a_icons'),

(66,1,1,'inactive','acp',13,107,108,'ACP_INACTIVE_USERS','list','acl_a_user'),

(67,1,1,'jabber','acp',4,45,46,'ACP_JABBER_SETTINGS','settings','acl_a_jabber'),

(68,1,1,'language','acp',29,249,250,'ACP_LANGUAGE_PACKS','lang_packs','acl_a_language'),

(69,1,1,'logs','acp',25,221,222,'ACP_ADMIN_LOGS','admin','acl_a_viewlogs'),

(70,1,1,'logs','acp',25,223,224,'ACP_MOD_LOGS','mod','acl_a_viewlogs'),

(71,1,1,'logs','acp',25,225,226,'ACP_USERS_LOGS','users','acl_a_viewlogs'),

(72,1,1,'logs','acp',25,227,228,'ACP_CRITICAL_LOGS','critical','acl_a_viewlogs'),

(73,1,1,'main','acp',1,2,3,'ACP_INDEX','main',''),

(74,1,1,'modules','acp',30,257,258,'ACP','acp','acl_a_modules'),

(75,1,1,'modules','acp',30,259,260,'UCP','ucp','acl_a_modules'),

(76,1,1,'modules','acp',30,261,262,'MCP','mcp','acl_a_modules'),

(77,1,1,'permission_roles','acp',19,181,182,'ACP_ADMIN_ROLES','admin_roles','acl_a_roles && acl_a_aauth'),

(78,1,1,'permission_roles','acp',19,183,184,'ACP_USER_ROLES','user_roles','acl_a_roles && acl_a_uauth'),

(79,1,1,'permission_roles','acp',19,185,186,'ACP_MOD_ROLES','mod_roles','acl_a_roles && acl_a_mauth'),

(80,1,1,'permission_roles','acp',19,187,188,'ACP_FORUM_ROLES','forum_roles','acl_a_roles && acl_a_fauth'),

(81,1,1,'permissions','acp',16,158,159,'ACP_PERMISSIONS','intro','acl_a_authusers || acl_a_authgroups || acl_a_viewauth'),

(82,1,0,'permissions','acp',20,191,192,'ACP_PERMISSION_TRACE','trace','acl_a_viewauth'),

(83,1,1,'permissions','acp',18,171,172,'ACP_FORUM_PERMISSIONS','setting_forum_local','acl_a_fauth && (acl_a_authusers || acl_a_authgroups)'),

(84,1,1,'permissions','acp',18,173,174,'ACP_FORUM_MODERATORS','setting_mod_local','acl_a_mauth && (acl_a_authusers || acl_a_authgroups)'),

(85,1,1,'permissions','acp',17,161,162,'ACP_USERS_PERMISSIONS','setting_user_global','acl_a_authusers && (acl_a_aauth || acl_a_mauth || acl_a_uauth)'),

(86,1,1,'permissions','acp',13,109,110,'ACP_USERS_PERMISSIONS','setting_user_global','acl_a_authusers && (acl_a_aauth || acl_a_mauth || acl_a_uauth)'),

(87,1,1,'permissions','acp',18,175,176,'ACP_USERS_FORUM_PERMISSIONS','setting_user_local','acl_a_authusers && (acl_a_mauth || acl_a_fauth)'),

(88,1,1,'permissions','acp',13,111,112,'ACP_USERS_FORUM_PERMISSIONS','setting_user_local','acl_a_authusers && (acl_a_mauth || acl_a_fauth)'),

(89,1,1,'permissions','acp',17,163,164,'ACP_GROUPS_PERMISSIONS','setting_group_global','acl_a_authgroups && (acl_a_aauth || acl_a_mauth || acl_a_uauth)'),

(90,1,1,'permissions','acp',14,139,140,'ACP_GROUPS_PERMISSIONS','setting_group_global','acl_a_authgroups && (acl_a_aauth || acl_a_mauth || acl_a_uauth)'),

(91,1,1,'permissions','acp',18,177,178,'ACP_GROUPS_FORUM_PERMISSIONS','setting_group_local','acl_a_authgroups && (acl_a_mauth || acl_a_fauth)'),

(92,1,1,'permissions','acp',14,141,142,'ACP_GROUPS_FORUM_PERMISSIONS','setting_group_local','acl_a_authgroups && (acl_a_mauth || acl_a_fauth)'),

(93,1,1,'permissions','acp',17,165,166,'ACP_ADMINISTRATORS','setting_admin_global','acl_a_aauth && (acl_a_authusers || acl_a_authgroups)'),

(94,1,1,'permissions','acp',17,167,168,'ACP_GLOBAL_MODERATORS','setting_mod_global','acl_a_mauth && (acl_a_authusers || acl_a_authgroups)'),

(95,1,1,'permissions','acp',20,193,194,'ACP_VIEW_ADMIN_PERMISSIONS','view_admin_global','acl_a_viewauth'),

(96,1,1,'permissions','acp',20,195,196,'ACP_VIEW_USER_PERMISSIONS','view_user_global','acl_a_viewauth'),

(97,1,1,'permissions','acp',20,197,198,'ACP_VIEW_GLOBAL_MOD_PERMISSIONS','view_mod_global','acl_a_viewauth'),

(98,1,1,'permissions','acp',20,199,200,'ACP_VIEW_FORUM_MOD_PERMISSIONS','view_mod_local','acl_a_viewauth'),

(99,1,1,'permissions','acp',20,201,202,'ACP_VIEW_FORUM_PERMISSIONS','view_forum_local','acl_a_viewauth'),

(100,1,1,'php_info','acp',29,251,252,'ACP_PHP_INFO','info','acl_a_phpinfo'),

(101,1,1,'profile','acp',13,113,114,'ACP_CUSTOM_PROFILE_FIELDS','profile','acl_a_profile'),

(102,1,1,'prune','acp',7,65,66,'ACP_PRUNE_FORUMS','forums','acl_a_prune'),

(103,1,1,'prune','acp',15,153,154,'ACP_PRUNE_USERS','users','acl_a_userdel'),

(104,1,1,'ranks','acp',13,115,116,'ACP_MANAGE_RANKS','ranks','acl_a_ranks'),

(105,1,1,'reasons','acp',29,253,254,'ACP_MANAGE_REASONS','main','acl_a_reasons'),

(106,1,1,'search','acp',5,57,58,'ACP_SEARCH_SETTINGS','settings','acl_a_search'),

(107,1,1,'search','acp',26,235,236,'ACP_SEARCH_INDEX','index','acl_a_search'),

(108,1,1,'styles','acp',22,207,208,'ACP_STYLES','style','acl_a_styles'),

(109,1,1,'styles','acp',23,211,212,'ACP_TEMPLATES','template','acl_a_styles'),

(110,1,1,'styles','acp',23,213,214,'ACP_THEMES','theme','acl_a_styles'),

(111,1,1,'styles','acp',23,215,216,'ACP_IMAGESETS','imageset','acl_a_styles'),

(112,1,1,'update','acp',28,241,242,'ACP_VERSION_CHECK','version_check','acl_a_board'),

(113,1,1,'users','acp',13,105,106,'ACP_MANAGE_USERS','overview','acl_a_user'),

(114,1,0,'users','acp',13,117,118,'ACP_USER_FEEDBACK','feedback','acl_a_user'),

(115,1,0,'users','acp',13,119,120,'ACP_USER_PROFILE','profile','acl_a_user'),

(116,1,0,'users','acp',13,121,122,'ACP_USER_PREFS','prefs','acl_a_user'),

(117,1,0,'users','acp',13,123,124,'ACP_USER_AVATAR','avatar','acl_a_user'),

(118,1,0,'users','acp',13,125,126,'ACP_USER_RANK','rank','acl_a_user'),

(119,1,0,'users','acp',13,127,128,'ACP_USER_SIG','sig','acl_a_user'),

(120,1,0,'users','acp',13,129,130,'ACP_USER_GROUPS','groups','acl_a_user && acl_a_group'),

(121,1,0,'users','acp',13,131,132,'ACP_USER_PERM','perm','acl_a_user && acl_a_viewauth'),

(122,1,0,'users','acp',13,133,134,'ACP_USER_ATTACH','attach','acl_a_user'),

(123,1,1,'words','acp',10,89,90,'ACP_WORDS','words','acl_a_words'),

(124,1,1,'users','acp',2,5,6,'ACP_MANAGE_USERS','overview','acl_a_user'),

(125,1,1,'groups','acp',2,7,8,'ACP_GROUPS_MANAGE','manage','acl_a_group'),

(126,1,1,'forums','acp',2,9,10,'ACP_MANAGE_FORUMS','manage','acl_a_forum'),

(127,1,1,'logs','acp',2,11,12,'ACP_MOD_LOGS','mod','acl_a_viewlogs'),

(128,1,1,'bots','acp',2,13,14,'ACP_BOTS','bots','acl_a_bots'),

(129,1,1,'php_info','acp',2,15,16,'ACP_PHP_INFO','info','acl_a_phpinfo'),

(130,1,1,'permissions','acp',8,69,70,'ACP_FORUM_PERMISSIONS','setting_forum_local','acl_a_fauth && (acl_a_authusers || acl_a_authgroups)'),

(131,1,1,'permissions','acp',8,71,72,'ACP_FORUM_MODERATORS','setting_mod_local','acl_a_mauth && (acl_a_authusers || acl_a_authgroups)'),

(132,1,1,'permissions','acp',8,73,74,'ACP_USERS_FORUM_PERMISSIONS','setting_user_local','acl_a_authusers && (acl_a_mauth || acl_a_fauth)'),

(133,1,1,'permissions','acp',8,75,76,'ACP_GROUPS_FORUM_PERMISSIONS','setting_group_local','acl_a_authgroups && (acl_a_mauth || acl_a_fauth)'),

(134,1,1,'','mcp',0,1,10,'MCP_MAIN','',''),

(135,1,1,'','mcp',0,11,18,'MCP_QUEUE','',''),

(136,1,1,'','mcp',0,19,26,'MCP_REPORTS','',''),

(137,1,1,'','mcp',0,27,32,'MCP_NOTES','',''),

(138,1,1,'','mcp',0,33,42,'MCP_WARN','',''),

(139,1,1,'','mcp',0,43,50,'MCP_LOGS','',''),

(140,1,1,'','mcp',0,51,58,'MCP_BAN','',''),

(141,1,1,'ban','mcp',140,52,53,'MCP_BAN_USERNAMES','user','acl_m_ban'),

(142,1,1,'ban','mcp',140,54,55,'MCP_BAN_IPS','ip','acl_m_ban'),

(143,1,1,'ban','mcp',140,56,57,'MCP_BAN_EMAILS','email','acl_m_ban'),

(144,1,1,'logs','mcp',139,44,45,'MCP_LOGS_FRONT','front','acl_m_ || aclf_m_'),

(145,1,1,'logs','mcp',139,46,47,'MCP_LOGS_FORUM_VIEW','forum_logs','acl_m_,$id'),

(146,1,1,'logs','mcp',139,48,49,'MCP_LOGS_TOPIC_VIEW','topic_logs','acl_m_,$id'),

(147,1,1,'main','mcp',134,2,3,'MCP_MAIN_FRONT','front',''),

(148,1,1,'main','mcp',134,4,5,'MCP_MAIN_FORUM_VIEW','forum_view','acl_m_,$id'),

(149,1,1,'main','mcp',134,6,7,'MCP_MAIN_TOPIC_VIEW','topic_view','acl_m_,$id'),

(150,1,1,'main','mcp',134,8,9,'MCP_MAIN_POST_DETAILS','post_details','acl_m_,$id || (!$id && aclf_m_)'),

(151,1,1,'notes','mcp',137,28,29,'MCP_NOTES_FRONT','front',''),

(152,1,1,'notes','mcp',137,30,31,'MCP_NOTES_USER','user_notes',''),

(153,1,1,'queue','mcp',135,12,13,'MCP_QUEUE_UNAPPROVED_TOPICS','unapproved_topics','aclf_m_approve'),

(154,1,1,'queue','mcp',135,14,15,'MCP_QUEUE_UNAPPROVED_POSTS','unapproved_posts','aclf_m_approve'),

(155,1,1,'queue','mcp',135,16,17,'MCP_QUEUE_APPROVE_DETAILS','approve_details','acl_m_approve,$id || (!$id && aclf_m_approve)'),

(156,1,1,'reports','mcp',136,20,21,'MCP_REPORTS_OPEN','reports','aclf_m_report'),

(157,1,1,'reports','mcp',136,22,23,'MCP_REPORTS_CLOSED','reports_closed','aclf_m_report'),

(158,1,1,'reports','mcp',136,24,25,'MCP_REPORT_DETAILS','report_details','acl_m_report,$id || (!$id && aclf_m_report)'),

(159,1,1,'warn','mcp',138,34,35,'MCP_WARN_FRONT','front','aclf_m_warn'),

(160,1,1,'warn','mcp',138,36,37,'MCP_WARN_LIST','list','aclf_m_warn'),

(161,1,1,'warn','mcp',138,38,39,'MCP_WARN_USER','warn_user','aclf_m_warn'),

(162,1,1,'warn','mcp',138,40,41,'MCP_WARN_POST','warn_post','acl_m_warn && acl_f_read,$id'),

(163,1,1,'','ucp',0,1,12,'UCP_MAIN','',''),

(164,1,1,'','ucp',0,13,22,'UCP_PROFILE','',''),

(165,1,1,'','ucp',0,23,30,'UCP_PREFS','',''),

(166,1,1,'','ucp',0,31,42,'UCP_PM','',''),

(167,1,1,'','ucp',0,43,48,'UCP_USERGROUPS','',''),

(168,1,1,'','ucp',0,49,54,'UCP_ZEBRA','',''),

(169,1,1,'attachments','ucp',163,10,11,'UCP_MAIN_ATTACHMENTS','attachments','acl_u_attach'),

(170,1,1,'groups','ucp',167,44,45,'UCP_USERGROUPS_MEMBER','membership',''),

(171,1,1,'groups','ucp',167,46,47,'UCP_USERGROUPS_MANAGE','manage',''),

(172,1,1,'main','ucp',163,2,3,'UCP_MAIN_FRONT','front',''),

(173,1,1,'main','ucp',163,4,5,'UCP_MAIN_SUBSCRIBED','subscribed',''),

(174,1,1,'main','ucp',163,6,7,'UCP_MAIN_BOOKMARKS','bookmarks','cfg_allow_bookmarks'),

(175,1,1,'main','ucp',163,8,9,'UCP_MAIN_DRAFTS','drafts',''),

(176,1,0,'pm','ucp',166,32,33,'UCP_PM_VIEW','view','cfg_allow_privmsg'),

(177,1,1,'pm','ucp',166,34,35,'UCP_PM_COMPOSE','compose','cfg_allow_privmsg'),

(178,1,1,'pm','ucp',166,36,37,'UCP_PM_DRAFTS','drafts','cfg_allow_privmsg'),

(179,1,1,'pm','ucp',166,38,39,'UCP_PM_OPTIONS','options','cfg_allow_privmsg'),

(180,1,0,'pm','ucp',166,40,41,'UCP_PM_POPUP_TITLE','popup','cfg_allow_privmsg'),

(181,1,1,'prefs','ucp',165,24,25,'UCP_PREFS_PERSONAL','personal',''),

(182,1,1,'prefs','ucp',165,26,27,'UCP_PREFS_POST','post',''),

(183,1,1,'prefs','ucp',165,28,29,'UCP_PREFS_VIEW','view',''),

(184,1,1,'profile','ucp',164,14,15,'UCP_PROFILE_PROFILE_INFO','profile_info',''),

(185,1,1,'profile','ucp',164,16,17,'UCP_PROFILE_SIGNATURE','signature',''),

(186,1,1,'profile','ucp',164,18,19,'UCP_PROFILE_AVATAR','avatar',''),

(187,1,1,'profile','ucp',164,20,21,'UCP_PROFILE_REG_DETAILS','reg_details',''),

(188,1,1,'zebra','ucp',168,50,51,'UCP_ZEBRA_FRIENDS','friends',''),

(189,1,1,'zebra','ucp',168,52,53,'UCP_ZEBRA_FOES','foes','');

/*Table structure for table `phpbb_poll_options` */

DROP TABLE IF EXISTS `phpbb_poll_options`;

CREATE TABLE `phpbb_poll_options` (
  `poll_option_id` tinyint(4) NOT NULL default '0',
  `topic_id` mediumint(8) unsigned NOT NULL default '0',
  `poll_option_text` text collate utf8_bin NOT NULL,
  `poll_option_total` mediumint(8) unsigned NOT NULL default '0',
  KEY `poll_opt_id` (`poll_option_id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_poll_options` */

/*Table structure for table `phpbb_poll_votes` */

DROP TABLE IF EXISTS `phpbb_poll_votes`;

CREATE TABLE `phpbb_poll_votes` (
  `topic_id` mediumint(8) unsigned NOT NULL default '0',
  `poll_option_id` tinyint(4) NOT NULL default '0',
  `vote_user_id` mediumint(8) unsigned NOT NULL default '0',
  `vote_user_ip` varchar(40) collate utf8_bin NOT NULL default '',
  KEY `topic_id` (`topic_id`),
  KEY `vote_user_id` (`vote_user_id`),
  KEY `vote_user_ip` (`vote_user_ip`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_poll_votes` */

/*Table structure for table `phpbb_posts` */

DROP TABLE IF EXISTS `phpbb_posts`;

CREATE TABLE `phpbb_posts` (
  `post_id` mediumint(8) unsigned NOT NULL auto_increment,
  `topic_id` mediumint(8) unsigned NOT NULL default '0',
  `forum_id` mediumint(8) unsigned NOT NULL default '0',
  `poster_id` mediumint(8) unsigned NOT NULL default '0',
  `icon_id` mediumint(8) unsigned NOT NULL default '0',
  `poster_ip` varchar(40) collate utf8_bin NOT NULL default '',
  `post_time` int(11) unsigned NOT NULL default '0',
  `post_approved` tinyint(1) unsigned NOT NULL default '1',
  `post_reported` tinyint(1) unsigned NOT NULL default '0',
  `enable_bbcode` tinyint(1) unsigned NOT NULL default '1',
  `enable_smilies` tinyint(1) unsigned NOT NULL default '1',
  `enable_magic_url` tinyint(1) unsigned NOT NULL default '1',
  `enable_sig` tinyint(1) unsigned NOT NULL default '1',
  `post_username` varchar(255) collate utf8_bin NOT NULL default '',
  `post_subject` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL default '',
  `post_text` mediumtext collate utf8_bin NOT NULL,
  `post_checksum` varchar(32) collate utf8_bin NOT NULL default '',
  `post_attachment` tinyint(1) unsigned NOT NULL default '0',
  `bbcode_bitfield` varchar(255) collate utf8_bin NOT NULL default '',
  `bbcode_uid` varchar(8) collate utf8_bin NOT NULL default '',
  `post_postcount` tinyint(1) unsigned NOT NULL default '1',
  `post_edit_time` int(11) unsigned NOT NULL default '0',
  `post_edit_reason` varchar(255) collate utf8_bin NOT NULL default '',
  `post_edit_user` mediumint(8) unsigned NOT NULL default '0',
  `post_edit_count` smallint(4) unsigned NOT NULL default '0',
  `post_edit_locked` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`post_id`),
  KEY `forum_id` (`forum_id`),
  KEY `topic_id` (`topic_id`),
  KEY `poster_ip` (`poster_ip`),
  KEY `poster_id` (`poster_id`),
  KEY `post_approved` (`post_approved`),
  KEY `tid_post_time` (`topic_id`,`post_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_posts` */

insert into `phpbb_posts` values 

(1,1,2,2,0,'127.0.0.1',1236756255,1,0,1,1,1,1,'','Welcome to phpBB3','This is an example post in your phpBB3 installation. Everything seems to be working. You may delete this post if you like and continue to set up your board. During the installation process your first category and your first forum are assigned an appropriate set of permissions for the predefined usergroups administrators, bots, global moderators, guests, registered users and registered COPPA users. If you also choose to delete your first category and your first forum, do not forget to assign permissions for all these usergroups for all new categories and forums you create. It is recommended to rename your first category and your first forum and copy permissions from these while creating new categories and forums. Have fun!','5dd683b17f641daf84c040bfefc58ce9',0,'','',1,0,'',0,0,0),

(2,1,2,2,0,'127.0.0.1',1236756662,1,0,1,1,1,1,'','Re: Welcome to phpBB3','Test Reply 1 !!','261afe9ee058fa67f1be5a90da8621d4',0,'','31gbgpzv',1,0,'',0,0,0),

(3,1,2,53,0,'127.0.0.1',1236762604,1,0,1,1,1,1,'','Re: Welcome to phpBB3','test2','ad0234829205b9033196ba818f7a872b',0,'','1karm9fy',1,0,'',0,0,0),

(4,2,2,53,0,'127.0.0.1',1236857079,1,0,1,1,1,1,'','new intr','New topic after integration','7c4baf0718b84f125e2fbb803e2c585e',0,'','2pjdfvmr',1,0,'',0,0,0);

/*Table structure for table `phpbb_privmsgs` */

DROP TABLE IF EXISTS `phpbb_privmsgs`;

CREATE TABLE `phpbb_privmsgs` (
  `msg_id` mediumint(8) unsigned NOT NULL auto_increment,
  `root_level` mediumint(8) unsigned NOT NULL default '0',
  `author_id` mediumint(8) unsigned NOT NULL default '0',
  `icon_id` mediumint(8) unsigned NOT NULL default '0',
  `author_ip` varchar(40) collate utf8_bin NOT NULL default '',
  `message_time` int(11) unsigned NOT NULL default '0',
  `enable_bbcode` tinyint(1) unsigned NOT NULL default '1',
  `enable_smilies` tinyint(1) unsigned NOT NULL default '1',
  `enable_magic_url` tinyint(1) unsigned NOT NULL default '1',
  `enable_sig` tinyint(1) unsigned NOT NULL default '1',
  `message_subject` varchar(255) collate utf8_bin NOT NULL default '',
  `message_text` mediumtext collate utf8_bin NOT NULL,
  `message_edit_reason` varchar(255) collate utf8_bin NOT NULL default '',
  `message_edit_user` mediumint(8) unsigned NOT NULL default '0',
  `message_attachment` tinyint(1) unsigned NOT NULL default '0',
  `bbcode_bitfield` varchar(255) collate utf8_bin NOT NULL default '',
  `bbcode_uid` varchar(8) collate utf8_bin NOT NULL default '',
  `message_edit_time` int(11) unsigned NOT NULL default '0',
  `message_edit_count` smallint(4) unsigned NOT NULL default '0',
  `to_address` text collate utf8_bin NOT NULL,
  `bcc_address` text collate utf8_bin NOT NULL,
  PRIMARY KEY  (`msg_id`),
  KEY `author_ip` (`author_ip`),
  KEY `message_time` (`message_time`),
  KEY `author_id` (`author_id`),
  KEY `root_level` (`root_level`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_privmsgs` */

/*Table structure for table `phpbb_privmsgs_folder` */

DROP TABLE IF EXISTS `phpbb_privmsgs_folder`;

CREATE TABLE `phpbb_privmsgs_folder` (
  `folder_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `folder_name` varchar(255) collate utf8_bin NOT NULL default '',
  `pm_count` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`folder_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_privmsgs_folder` */

/*Table structure for table `phpbb_privmsgs_rules` */

DROP TABLE IF EXISTS `phpbb_privmsgs_rules`;

CREATE TABLE `phpbb_privmsgs_rules` (
  `rule_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `rule_check` mediumint(8) unsigned NOT NULL default '0',
  `rule_connection` mediumint(8) unsigned NOT NULL default '0',
  `rule_string` varchar(255) collate utf8_bin NOT NULL default '',
  `rule_user_id` mediumint(8) unsigned NOT NULL default '0',
  `rule_group_id` mediumint(8) unsigned NOT NULL default '0',
  `rule_action` mediumint(8) unsigned NOT NULL default '0',
  `rule_folder_id` int(11) NOT NULL default '0',
  PRIMARY KEY  (`rule_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_privmsgs_rules` */

/*Table structure for table `phpbb_privmsgs_to` */

DROP TABLE IF EXISTS `phpbb_privmsgs_to`;

CREATE TABLE `phpbb_privmsgs_to` (
  `msg_id` mediumint(8) unsigned NOT NULL default '0',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `author_id` mediumint(8) unsigned NOT NULL default '0',
  `pm_deleted` tinyint(1) unsigned NOT NULL default '0',
  `pm_new` tinyint(1) unsigned NOT NULL default '1',
  `pm_unread` tinyint(1) unsigned NOT NULL default '1',
  `pm_replied` tinyint(1) unsigned NOT NULL default '0',
  `pm_marked` tinyint(1) unsigned NOT NULL default '0',
  `pm_forwarded` tinyint(1) unsigned NOT NULL default '0',
  `folder_id` int(11) NOT NULL default '0',
  KEY `msg_id` (`msg_id`),
  KEY `author_id` (`author_id`),
  KEY `usr_flder_id` (`user_id`,`folder_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_privmsgs_to` */

/*Table structure for table `phpbb_profile_fields` */

DROP TABLE IF EXISTS `phpbb_profile_fields`;

CREATE TABLE `phpbb_profile_fields` (
  `field_id` mediumint(8) unsigned NOT NULL auto_increment,
  `field_name` varchar(255) collate utf8_bin NOT NULL default '',
  `field_type` tinyint(4) NOT NULL default '0',
  `field_ident` varchar(20) collate utf8_bin NOT NULL default '',
  `field_length` varchar(20) collate utf8_bin NOT NULL default '',
  `field_minlen` varchar(255) collate utf8_bin NOT NULL default '',
  `field_maxlen` varchar(255) collate utf8_bin NOT NULL default '',
  `field_novalue` varchar(255) collate utf8_bin NOT NULL default '',
  `field_default_value` varchar(255) collate utf8_bin NOT NULL default '',
  `field_validation` varchar(20) collate utf8_bin NOT NULL default '',
  `field_required` tinyint(1) unsigned NOT NULL default '0',
  `field_show_on_reg` tinyint(1) unsigned NOT NULL default '0',
  `field_show_profile` tinyint(1) unsigned NOT NULL default '0',
  `field_hide` tinyint(1) unsigned NOT NULL default '0',
  `field_no_view` tinyint(1) unsigned NOT NULL default '0',
  `field_active` tinyint(1) unsigned NOT NULL default '0',
  `field_order` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`field_id`),
  KEY `fld_type` (`field_type`),
  KEY `fld_ordr` (`field_order`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_profile_fields` */

/*Table structure for table `phpbb_profile_fields_data` */

DROP TABLE IF EXISTS `phpbb_profile_fields_data`;

CREATE TABLE `phpbb_profile_fields_data` (
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_profile_fields_data` */

/*Table structure for table `phpbb_profile_fields_lang` */

DROP TABLE IF EXISTS `phpbb_profile_fields_lang`;

CREATE TABLE `phpbb_profile_fields_lang` (
  `field_id` mediumint(8) unsigned NOT NULL default '0',
  `lang_id` mediumint(8) unsigned NOT NULL default '0',
  `option_id` mediumint(8) unsigned NOT NULL default '0',
  `field_type` tinyint(4) NOT NULL default '0',
  `lang_value` varchar(255) collate utf8_bin NOT NULL default '',
  PRIMARY KEY  (`field_id`,`lang_id`,`option_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_profile_fields_lang` */

/*Table structure for table `phpbb_profile_lang` */

DROP TABLE IF EXISTS `phpbb_profile_lang`;

CREATE TABLE `phpbb_profile_lang` (
  `field_id` mediumint(8) unsigned NOT NULL default '0',
  `lang_id` mediumint(8) unsigned NOT NULL default '0',
  `lang_name` varchar(255) collate utf8_bin NOT NULL default '',
  `lang_explain` text collate utf8_bin NOT NULL,
  `lang_default_value` varchar(255) collate utf8_bin NOT NULL default '',
  PRIMARY KEY  (`field_id`,`lang_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_profile_lang` */

/*Table structure for table `phpbb_ranks` */

DROP TABLE IF EXISTS `phpbb_ranks`;

CREATE TABLE `phpbb_ranks` (
  `rank_id` mediumint(8) unsigned NOT NULL auto_increment,
  `rank_title` varchar(255) collate utf8_bin NOT NULL default '',
  `rank_min` mediumint(8) unsigned NOT NULL default '0',
  `rank_special` tinyint(1) unsigned NOT NULL default '0',
  `rank_image` varchar(255) collate utf8_bin NOT NULL default '',
  PRIMARY KEY  (`rank_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_ranks` */

insert into `phpbb_ranks` values 

(1,'Site Admin',0,1,'');

/*Table structure for table `phpbb_reports` */

DROP TABLE IF EXISTS `phpbb_reports`;

CREATE TABLE `phpbb_reports` (
  `report_id` mediumint(8) unsigned NOT NULL auto_increment,
  `reason_id` smallint(4) unsigned NOT NULL default '0',
  `post_id` mediumint(8) unsigned NOT NULL default '0',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `user_notify` tinyint(1) unsigned NOT NULL default '0',
  `report_closed` tinyint(1) unsigned NOT NULL default '0',
  `report_time` int(11) unsigned NOT NULL default '0',
  `report_text` mediumtext collate utf8_bin NOT NULL,
  PRIMARY KEY  (`report_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_reports` */

/*Table structure for table `phpbb_reports_reasons` */

DROP TABLE IF EXISTS `phpbb_reports_reasons`;

CREATE TABLE `phpbb_reports_reasons` (
  `reason_id` smallint(4) unsigned NOT NULL auto_increment,
  `reason_title` varchar(255) collate utf8_bin NOT NULL default '',
  `reason_description` mediumtext collate utf8_bin NOT NULL,
  `reason_order` smallint(4) unsigned NOT NULL default '0',
  PRIMARY KEY  (`reason_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_reports_reasons` */

insert into `phpbb_reports_reasons` values 

(1,'warez','The post contains links to illegal or pirated software.',1),

(2,'spam','The reported post has the only purpose to advertise for a website or another product.',2),

(3,'off_topic','The reported post is off topic.',3),

(4,'other','The reported post does not fit into any other category, please use the further information field.',4);

/*Table structure for table `phpbb_search_results` */

DROP TABLE IF EXISTS `phpbb_search_results`;

CREATE TABLE `phpbb_search_results` (
  `search_key` varchar(32) collate utf8_bin NOT NULL default '',
  `search_time` int(11) unsigned NOT NULL default '0',
  `search_keywords` mediumtext collate utf8_bin NOT NULL,
  `search_authors` mediumtext collate utf8_bin NOT NULL,
  PRIMARY KEY  (`search_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_search_results` */

/*Table structure for table `phpbb_search_wordlist` */

DROP TABLE IF EXISTS `phpbb_search_wordlist`;

CREATE TABLE `phpbb_search_wordlist` (
  `word_id` mediumint(8) unsigned NOT NULL auto_increment,
  `word_text` varchar(255) collate utf8_bin NOT NULL default '',
  `word_common` tinyint(1) unsigned NOT NULL default '0',
  `word_count` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`word_id`),
  UNIQUE KEY `wrd_txt` (`word_text`),
  KEY `wrd_cnt` (`word_count`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_search_wordlist` */

insert into `phpbb_search_wordlist` values 

(1,'this',0,1),

(2,'example',0,1),

(3,'post',0,1),

(4,'your',0,1),

(5,'phpbb3',0,4),

(6,'installation',0,1),

(7,'everything',0,1),

(8,'seems',0,1),

(9,'working',0,1),

(10,'you',0,1),

(11,'may',0,1),

(12,'delete',0,1),

(13,'like',0,1),

(14,'and',0,1),

(15,'continue',0,1),

(16,'set',0,1),

(17,'board',0,1),

(18,'during',0,1),

(19,'the',0,1),

(20,'process',0,1),

(21,'first',0,1),

(22,'category',0,1),

(23,'forum',0,1),

(24,'are',0,1),

(25,'assigned',0,1),

(26,'appropriate',0,1),

(27,'permissions',0,1),

(28,'for',0,1),

(29,'predefined',0,1),

(30,'usergroups',0,1),

(31,'administrators',0,1),

(32,'bots',0,1),

(33,'global',0,1),

(34,'moderators',0,1),

(35,'guests',0,1),

(36,'registered',0,1),

(37,'users',0,1),

(38,'coppa',0,1),

(39,'also',0,1),

(40,'choose',0,1),

(41,'not',0,1),

(42,'forget',0,1),

(43,'assign',0,1),

(44,'all',0,1),

(45,'these',0,1),

(46,'new',0,3),

(47,'categories',0,1),

(48,'forums',0,1),

(49,'create',0,1),

(50,'recommended',0,1),

(51,'rename',0,1),

(52,'copy',0,1),

(53,'from',0,1),

(54,'while',0,1),

(55,'creating',0,1),

(56,'have',0,1),

(57,'fun',0,1),

(58,'welcome',0,3),

(59,'test',0,1),

(60,'reply',0,1),

(61,'test2',0,1),

(62,'topic',0,1),

(63,'after',0,1),

(64,'integration',0,1),

(65,'intr',0,1);

/*Table structure for table `phpbb_search_wordmatch` */

DROP TABLE IF EXISTS `phpbb_search_wordmatch`;

CREATE TABLE `phpbb_search_wordmatch` (
  `post_id` mediumint(8) unsigned NOT NULL default '0',
  `word_id` mediumint(8) unsigned NOT NULL default '0',
  `title_match` tinyint(1) unsigned NOT NULL default '0',
  UNIQUE KEY `unq_mtch` (`word_id`,`post_id`,`title_match`),
  KEY `word_id` (`word_id`),
  KEY `post_id` (`post_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_search_wordmatch` */

insert into `phpbb_search_wordmatch` values 

(1,1,0),

(1,2,0),

(1,3,0),

(1,4,0),

(1,5,0),

(1,5,1),

(2,5,1),

(3,5,1),

(1,6,0),

(1,7,0),

(1,8,0),

(1,9,0),

(1,10,0),

(1,11,0),

(1,12,0),

(1,13,0),

(1,14,0),

(1,15,0),

(1,16,0),

(1,17,0),

(1,18,0),

(1,19,0),

(1,20,0),

(1,21,0),

(1,22,0),

(1,23,0),

(1,24,0),

(1,25,0),

(1,26,0),

(1,27,0),

(1,28,0),

(1,29,0),

(1,30,0),

(1,31,0),

(1,32,0),

(1,33,0),

(1,34,0),

(1,35,0),

(1,36,0),

(1,37,0),

(1,38,0),

(1,39,0),

(1,40,0),

(1,41,0),

(1,42,0),

(1,43,0),

(1,44,0),

(1,45,0),

(1,46,0),

(4,46,0),

(4,46,1),

(1,47,0),

(1,48,0),

(1,49,0),

(1,50,0),

(1,51,0),

(1,52,0),

(1,53,0),

(1,54,0),

(1,55,0),

(1,56,0),

(1,57,0),

(1,58,1),

(2,58,1),

(3,58,1),

(2,59,0),

(2,60,0),

(3,61,0),

(4,62,0),

(4,63,0),

(4,64,0),

(4,65,1);

/*Table structure for table `phpbb_sessions` */

DROP TABLE IF EXISTS `phpbb_sessions`;

CREATE TABLE `phpbb_sessions` (
  `session_id` char(32) collate utf8_bin NOT NULL default '',
  `session_user_id` mediumint(8) unsigned NOT NULL default '0',
  `session_forum_id` mediumint(8) unsigned NOT NULL default '0',
  `session_last_visit` int(11) unsigned NOT NULL default '0',
  `session_start` int(11) unsigned NOT NULL default '0',
  `session_time` int(11) unsigned NOT NULL default '0',
  `session_ip` varchar(40) collate utf8_bin NOT NULL default '',
  `session_browser` varchar(150) collate utf8_bin NOT NULL default '',
  `session_forwarded_for` varchar(255) collate utf8_bin NOT NULL default '',
  `session_page` varchar(255) collate utf8_bin NOT NULL default '',
  `session_viewonline` tinyint(1) unsigned NOT NULL default '1',
  `session_autologin` tinyint(1) unsigned NOT NULL default '0',
  `session_admin` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`session_id`),
  KEY `session_time` (`session_time`),
  KEY `session_user_id` (`session_user_id`),
  KEY `session_fid` (`session_forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_sessions` */

insert into `phpbb_sessions` values 

('16a85064476a6c2ead4d939a08c19e59',54,0,1243595033,1243595033,1243595033,'192.168.1.209','Mozilla/5.0 (Windows; U; Windows NT 5.1; fr; rv:1.9.0.8) Gecko/2009032609 Firefox/3.0.8','','init_session.php',1,0,1),

('4c3e1649ddb0d1fb506627f88dfee657',2,0,1243581443,1243581443,1243581445,'192.168.1.209','Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.10) Gecko/2009042316 Firefox/3.0.10','','index.php',1,0,1),

('4ef3215a5708b46495b5168de86a4d8c',1,0,1243581429,1243581429,1243581429,'192.168.1.209','Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.10) Gecko/2009042316 Firefox/3.0.10','','index.php',1,0,0),

('6434179a0cce742e400ae939e54721ee',2,0,1243606754,1243606754,1243606754,'192.168.1.209','Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.10) Gecko/2009042316 Firefox/3.0.10','','init_session.php',1,0,1),

('7318fe174468caad04671ea62de26732',2,0,1243593171,1243593171,1243593171,'192.168.1.209','Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.10) Gecko/2009042316 Firefox/3.0.10','','init_session.php',1,0,1),

('916623c3f22debf5be7c0fd11a6b143d',54,0,1243686917,1243686917,1243686917,'192.168.1.209','Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.10) Gecko/2009042316 Firefox/3.0.10','','init_session.php',1,0,1),

('9e84c0306217669e0ad56d8beff691ff',2,0,1244037126,1244037126,1244037126,'192.168.1.209','Mozilla/5.0 (Windows; U; Windows NT 6.0; en-GB; rv:1.9.0.10) Gecko/2009042316 Firefox/3.0.10 (.NET CLR 3.5.30729)','','init_session.php',1,0,1),

('aa7b8ee19f1b0c5f920446b96562b537',1,0,1243593001,1243593001,1243593140,'192.168.1.209','Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.10) Gecko/2009042316 Firefox/3.0.10','','index.php',1,0,0),

('f1385c6899d7ed8ecc39c72b109540e8',1,0,1243581818,1243581818,1243581818,'192.168.1.209','Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US) AppleWebKit/525.19 (KHTML, like Gecko) Chrome/1.0.154.65 Safari/525.19','','index.php',1,0,0);

/*Table structure for table `phpbb_sessions_keys` */

DROP TABLE IF EXISTS `phpbb_sessions_keys`;

CREATE TABLE `phpbb_sessions_keys` (
  `key_id` char(32) collate utf8_bin NOT NULL default '',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `last_ip` varchar(40) collate utf8_bin NOT NULL default '',
  `last_login` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`key_id`,`user_id`),
  KEY `last_login` (`last_login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_sessions_keys` */

/*Table structure for table `phpbb_sitelist` */

DROP TABLE IF EXISTS `phpbb_sitelist`;

CREATE TABLE `phpbb_sitelist` (
  `site_id` mediumint(8) unsigned NOT NULL auto_increment,
  `site_ip` varchar(40) collate utf8_bin NOT NULL default '',
  `site_hostname` varchar(255) collate utf8_bin NOT NULL default '',
  `ip_exclude` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`site_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_sitelist` */

/*Table structure for table `phpbb_smilies` */

DROP TABLE IF EXISTS `phpbb_smilies`;

CREATE TABLE `phpbb_smilies` (
  `smiley_id` mediumint(8) unsigned NOT NULL auto_increment,
  `code` varchar(50) collate utf8_bin NOT NULL default '',
  `emotion` varchar(50) collate utf8_bin NOT NULL default '',
  `smiley_url` varchar(50) collate utf8_bin NOT NULL default '',
  `smiley_width` smallint(4) unsigned NOT NULL default '0',
  `smiley_height` smallint(4) unsigned NOT NULL default '0',
  `smiley_order` mediumint(8) unsigned NOT NULL default '0',
  `display_on_posting` tinyint(1) unsigned NOT NULL default '1',
  PRIMARY KEY  (`smiley_id`),
  KEY `display_on_post` (`display_on_posting`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_smilies` */

insert into `phpbb_smilies` values 

(1,':D','Very Happy','icon_e_biggrin.gif',15,17,1,1),

(2,':-D','Very Happy','icon_e_biggrin.gif',15,17,2,1),

(3,':grin:','Very Happy','icon_e_biggrin.gif',15,17,3,1),

(4,':)','Smile','icon_e_smile.gif',15,17,4,1),

(5,':-)','Smile','icon_e_smile.gif',15,17,5,1),

(6,':smile:','Smile','icon_e_smile.gif',15,17,6,1),

(7,';)','Wink','icon_e_wink.gif',15,17,7,1),

(8,';-)','Wink','icon_e_wink.gif',15,17,8,1),

(9,':wink:','Wink','icon_e_wink.gif',15,17,9,1),

(10,':(','Sad','icon_e_sad.gif',15,17,10,1),

(11,':-(','Sad','icon_e_sad.gif',15,17,11,1),

(12,':sad:','Sad','icon_e_sad.gif',15,17,12,1),

(13,':o','Surprised','icon_e_surprised.gif',15,17,13,1),

(14,':-o','Surprised','icon_e_surprised.gif',15,17,14,1),

(15,':eek:','Surprised','icon_e_surprised.gif',15,17,15,1),

(16,':shock:','Shocked','icon_eek.gif',15,17,16,1),

(17,':?','Confused','icon_e_confused.gif',15,17,17,1),

(18,':-?','Confused','icon_e_confused.gif',15,17,18,1),

(19,':???:','Confused','icon_e_confused.gif',15,17,19,1),

(20,'8-)','Cool','icon_cool.gif',15,17,20,1),

(21,':cool:','Cool','icon_cool.gif',15,17,21,1),

(22,':lol:','Laughing','icon_lol.gif',15,17,22,1),

(23,':x','Mad','icon_mad.gif',15,17,23,1),

(24,':-x','Mad','icon_mad.gif',15,17,24,1),

(25,':mad:','Mad','icon_mad.gif',15,17,25,1),

(26,':P','Razz','icon_razz.gif',15,17,26,1),

(27,':-P','Razz','icon_razz.gif',15,17,27,1),

(28,':razz:','Razz','icon_razz.gif',15,17,28,1),

(29,':oops:','Embarrassed','icon_redface.gif',15,17,29,1),

(30,':cry:','Crying or Very Sad','icon_cry.gif',15,17,30,1),

(31,':evil:','Evil or Very Mad','icon_evil.gif',15,17,31,1),

(32,':twisted:','Twisted Evil','icon_twisted.gif',15,17,32,1),

(33,':roll:','Rolling Eyes','icon_rolleyes.gif',15,17,33,1),

(34,':!:','Exclamation','icon_exclaim.gif',15,17,34,1),

(35,':?:','Question','icon_question.gif',15,17,35,1),

(36,':idea:','Idea','icon_idea.gif',15,17,36,1),

(37,':arrow:','Arrow','icon_arrow.gif',15,17,37,1),

(38,':|','Neutral','icon_neutral.gif',15,17,38,1),

(39,':-|','Neutral','icon_neutral.gif',15,17,39,1),

(40,':mrgreen:','Mr. Green','icon_mrgreen.gif',15,17,40,1),

(41,':geek:','Geek','icon_e_geek.gif',17,17,41,1),

(42,':ugeek:','Uber Geek','icon_e_ugeek.gif',17,18,42,1);

/*Table structure for table `phpbb_styles` */

DROP TABLE IF EXISTS `phpbb_styles`;

CREATE TABLE `phpbb_styles` (
  `style_id` mediumint(8) unsigned NOT NULL auto_increment,
  `style_name` varchar(255) collate utf8_bin NOT NULL default '',
  `style_copyright` varchar(255) collate utf8_bin NOT NULL default '',
  `style_active` tinyint(1) unsigned NOT NULL default '1',
  `template_id` mediumint(8) unsigned NOT NULL default '0',
  `theme_id` mediumint(8) unsigned NOT NULL default '0',
  `imageset_id` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`style_id`),
  UNIQUE KEY `style_name` (`style_name`),
  KEY `template_id` (`template_id`),
  KEY `theme_id` (`theme_id`),
  KEY `imageset_id` (`imageset_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_styles` */

insert into `phpbb_styles` values 

(1,'prosilver','© phpBB Group',1,1,1,1),

(2,'subsilver2','© 2005 phpBB Group',0,2,2,2);

/*Table structure for table `phpbb_styles_imageset` */

DROP TABLE IF EXISTS `phpbb_styles_imageset`;

CREATE TABLE `phpbb_styles_imageset` (
  `imageset_id` mediumint(8) unsigned NOT NULL auto_increment,
  `imageset_name` varchar(255) collate utf8_bin NOT NULL default '',
  `imageset_copyright` varchar(255) collate utf8_bin NOT NULL default '',
  `imageset_path` varchar(100) collate utf8_bin NOT NULL default '',
  PRIMARY KEY  (`imageset_id`),
  UNIQUE KEY `imgset_nm` (`imageset_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_styles_imageset` */

insert into `phpbb_styles_imageset` values 

(1,'prosilver','&copy; phpBB Group','prosilver'),

(2,'subsilver2','&copy; phpBB Group, 2003','subsilver2');

/*Table structure for table `phpbb_styles_imageset_data` */

DROP TABLE IF EXISTS `phpbb_styles_imageset_data`;

CREATE TABLE `phpbb_styles_imageset_data` (
  `image_id` mediumint(8) unsigned NOT NULL auto_increment,
  `image_name` varchar(200) collate utf8_bin NOT NULL default '',
  `image_filename` varchar(200) collate utf8_bin NOT NULL default '',
  `image_lang` varchar(30) collate utf8_bin NOT NULL default '',
  `image_height` smallint(4) unsigned NOT NULL default '0',
  `image_width` smallint(4) unsigned NOT NULL default '0',
  `imageset_id` mediumint(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (`image_id`),
  KEY `i_d` (`imageset_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_styles_imageset_data` */

insert into `phpbb_styles_imageset_data` values 

(1,'site_logo','site_logo.gif','',52,139,1),

(2,'forum_link','forum_link.gif','',27,27,1),

(3,'forum_read','forum_read.gif','',27,27,1),

(4,'forum_read_locked','forum_read_locked.gif','',27,27,1),

(5,'forum_read_subforum','forum_read_subforum.gif','',27,27,1),

(6,'forum_unread','forum_unread.gif','',27,27,1),

(7,'forum_unread_locked','forum_unread_locked.gif','',27,27,1),

(8,'forum_unread_subforum','forum_unread_subforum.gif','',27,27,1),

(9,'topic_moved','topic_moved.gif','',27,27,1),

(10,'topic_read','topic_read.gif','',27,27,1),

(11,'topic_read_mine','topic_read_mine.gif','',27,27,1),

(12,'topic_read_hot','topic_read_hot.gif','',27,27,1),

(13,'topic_read_hot_mine','topic_read_hot_mine.gif','',27,27,1),

(14,'topic_read_locked','topic_read_locked.gif','',27,27,1),

(15,'topic_read_locked_mine','topic_read_locked_mine.gif','',27,27,1),

(16,'topic_unread','topic_unread.gif','',27,27,1),

(17,'topic_unread_mine','topic_unread_mine.gif','',27,27,1),

(18,'topic_unread_hot','topic_unread_hot.gif','',27,27,1),

(19,'topic_unread_hot_mine','topic_unread_hot_mine.gif','',27,27,1),

(20,'topic_unread_locked','topic_unread_locked.gif','',27,27,1),

(21,'topic_unread_locked_mine','topic_unread_locked_mine.gif','',27,27,1),

(22,'sticky_read','sticky_read.gif','',27,27,1),

(23,'sticky_read_mine','sticky_read_mine.gif','',27,27,1),

(24,'sticky_read_locked','sticky_read_locked.gif','',27,27,1),

(25,'sticky_read_locked_mine','sticky_read_locked_mine.gif','',27,27,1),

(26,'sticky_unread','sticky_unread.gif','',27,27,1),

(27,'sticky_unread_mine','sticky_unread_mine.gif','',27,27,1),

(28,'sticky_unread_locked','sticky_unread_locked.gif','',27,27,1),

(29,'sticky_unread_locked_mine','sticky_unread_locked_mine.gif','',27,27,1),

(30,'announce_read','announce_read.gif','',27,27,1),

(31,'announce_read_mine','announce_read_mine.gif','',27,27,1),

(32,'announce_read_locked','announce_read_locked.gif','',27,27,1),

(33,'announce_read_locked_mine','announce_read_locked_mine.gif','',27,27,1),

(34,'announce_unread','announce_unread.gif','',27,27,1),

(35,'announce_unread_mine','announce_unread_mine.gif','',27,27,1),

(36,'announce_unread_locked','announce_unread_locked.gif','',27,27,1),

(37,'announce_unread_locked_mine','announce_unread_locked_mine.gif','',27,27,1),

(38,'global_read','announce_read.gif','',27,27,1),

(39,'global_read_mine','announce_read_mine.gif','',27,27,1),

(40,'global_read_locked','announce_read_locked.gif','',27,27,1),

(41,'global_read_locked_mine','announce_read_locked_mine.gif','',27,27,1),

(42,'global_unread','announce_unread.gif','',27,27,1),

(43,'global_unread_mine','announce_unread_mine.gif','',27,27,1),

(44,'global_unread_locked','announce_unread_locked.gif','',27,27,1),

(45,'global_unread_locked_mine','announce_unread_locked_mine.gif','',27,27,1),

(46,'pm_read','topic_read.gif','',27,27,1),

(47,'pm_unread','topic_unread.gif','',27,27,1),

(48,'icon_back_top','icon_back_top.gif','',11,11,1),

(49,'icon_contact_aim','icon_contact_aim.gif','',20,20,1),

(50,'icon_contact_email','icon_contact_email.gif','',20,20,1),

(51,'icon_contact_icq','icon_contact_icq.gif','',20,20,1),

(52,'icon_contact_jabber','icon_contact_jabber.gif','',20,20,1),

(53,'icon_contact_msnm','icon_contact_msnm.gif','',20,20,1),

(54,'icon_contact_www','icon_contact_www.gif','',20,20,1),

(55,'icon_contact_yahoo','icon_contact_yahoo.gif','',20,20,1),

(56,'icon_post_delete','icon_post_delete.gif','',20,20,1),

(57,'icon_post_info','icon_post_info.gif','',20,20,1),

(58,'icon_post_report','icon_post_report.gif','',20,20,1),

(59,'icon_post_target','icon_post_target.gif','',9,11,1),

(60,'icon_post_target_unread','icon_post_target_unread.gif','',9,11,1),

(61,'icon_topic_attach','icon_topic_attach.gif','',10,7,1),

(62,'icon_topic_latest','icon_topic_latest.gif','',9,11,1),

(63,'icon_topic_newest','icon_topic_newest.gif','',9,11,1),

(64,'icon_topic_reported','icon_topic_reported.gif','',14,16,1),

(65,'icon_topic_unapproved','icon_topic_unapproved.gif','',14,16,1),

(66,'icon_user_warn','icon_user_warn.gif','',20,20,1),

(67,'subforum_read','subforum_read.gif','',9,11,1),

(68,'subforum_unread','subforum_unread.gif','',9,11,1),

(69,'icon_contact_pm','icon_contact_pm.gif','en',20,28,1),

(70,'icon_post_edit','icon_post_edit.gif','en',20,42,1),

(71,'icon_post_quote','icon_post_quote.gif','en',20,54,1),

(72,'icon_user_online','icon_user_online.gif','en',58,58,1),

(73,'button_pm_forward','button_pm_forward.gif','en',25,96,1),

(74,'button_pm_new','button_pm_new.gif','en',25,84,1),

(75,'button_pm_reply','button_pm_reply.gif','en',25,96,1),

(76,'button_topic_locked','button_topic_locked.gif','en',25,88,1),

(77,'button_topic_new','button_topic_new.gif','en',25,96,1),

(78,'button_topic_reply','button_topic_reply.gif','en',25,96,1),

(79,'site_logo','site_logo.gif','',94,170,2),

(80,'upload_bar','upload_bar.gif','',16,280,2),

(81,'poll_left','poll_left.gif','',12,4,2),

(82,'poll_center','poll_center.gif','',12,0,2),

(83,'poll_right','poll_right.gif','',12,4,2),

(84,'forum_link','forum_link.gif','',25,46,2),

(85,'forum_read','forum_read.gif','',25,46,2),

(86,'forum_read_locked','forum_read_locked.gif','',25,46,2),

(87,'forum_read_subforum','forum_read_subforum.gif','',25,46,2),

(88,'forum_unread','forum_unread.gif','',25,46,2),

(89,'forum_unread_locked','forum_unread_locked.gif','',25,46,2),

(90,'forum_unread_subforum','forum_unread_subforum.gif','',25,46,2),

(91,'topic_moved','topic_moved.gif','',18,19,2),

(92,'topic_read','topic_read.gif','',18,19,2),

(93,'topic_read_mine','topic_read_mine.gif','',18,19,2),

(94,'topic_read_hot','topic_read_hot.gif','',18,19,2),

(95,'topic_read_hot_mine','topic_read_hot_mine.gif','',18,19,2),

(96,'topic_read_locked','topic_read_locked.gif','',18,19,2),

(97,'topic_read_locked_mine','topic_read_locked_mine.gif','',18,19,2),

(98,'topic_unread','topic_unread.gif','',18,19,2),

(99,'topic_unread_mine','topic_unread_mine.gif','',18,19,2),

(100,'topic_unread_hot','topic_unread_hot.gif','',18,19,2),

(101,'topic_unread_hot_mine','topic_unread_hot_mine.gif','',18,19,2),

(102,'topic_unread_locked','topic_unread_locked.gif','',18,19,2),

(103,'topic_unread_locked_mine','topic_unread_locked_mine.gif','',18,19,2),

(104,'sticky_read','sticky_read.gif','',18,19,2),

(105,'sticky_read_mine','sticky_read_mine.gif','',18,19,2),

(106,'sticky_read_locked','sticky_read_locked.gif','',18,19,2),

(107,'sticky_read_locked_mine','sticky_read_locked_mine.gif','',18,19,2),

(108,'sticky_unread','sticky_unread.gif','',18,19,2),

(109,'sticky_unread_mine','sticky_unread_mine.gif','',18,19,2),

(110,'sticky_unread_locked','sticky_unread_locked.gif','',18,19,2),

(111,'sticky_unread_locked_mine','sticky_unread_locked_mine.gif','',18,19,2),

(112,'announce_read','announce_read.gif','',18,19,2),

(113,'announce_read_mine','announce_read_mine.gif','',18,19,2),

(114,'announce_read_locked','announce_read_locked.gif','',18,19,2),

(115,'announce_read_locked_mine','announce_read_locked_mine.gif','',18,19,2),

(116,'announce_unread','announce_unread.gif','',18,19,2),

(117,'announce_unread_mine','announce_unread_mine.gif','',18,19,2),

(118,'announce_unread_locked','announce_unread_locked.gif','',18,19,2),

(119,'announce_unread_locked_mine','announce_unread_locked_mine.gif','',18,19,2),

(120,'global_read','announce_read.gif','',18,19,2),

(121,'global_read_mine','announce_read_mine.gif','',18,19,2),

(122,'global_read_locked','announce_read_locked.gif','',18,19,2),

(123,'global_read_locked_mine','announce_read_locked_mine.gif','',18,19,2),

(124,'global_unread','announce_unread.gif','',18,19,2),

(125,'global_unread_mine','announce_unread_mine.gif','',18,19,2),

(126,'global_unread_locked','announce_unread_locked.gif','',18,19,2),

(127,'global_unread_locked_mine','announce_unread_locked_mine.gif','',18,19,2),

(128,'pm_read','topic_read.gif','',18,19,2),

(129,'pm_unread','topic_unread.gif','',18,19,2),

(130,'icon_post_target','icon_post_target.gif','',9,12,2),

(131,'icon_post_target_unread','icon_post_target_unread.gif','',9,12,2),

(132,'icon_topic_attach','icon_topic_attach.gif','',18,14,2),

(133,'icon_topic_latest','icon_topic_latest.gif','',9,18,2),

(134,'icon_topic_newest','icon_topic_newest.gif','',9,18,2),

(135,'icon_topic_reported','icon_topic_reported.gif','',18,19,2),

(136,'icon_topic_unapproved','icon_topic_unapproved.gif','',18,19,2),

(137,'icon_contact_aim','icon_contact_aim.gif','en',0,0,2),

(138,'icon_contact_email','icon_contact_email.gif','en',0,0,2),

(139,'icon_contact_icq','icon_contact_icq.gif','en',0,0,2),

(140,'icon_contact_jabber','icon_contact_jabber.gif','en',0,0,2),

(141,'icon_contact_msnm','icon_contact_msnm.gif','en',0,0,2),

(142,'icon_contact_pm','icon_contact_pm.gif','en',0,0,2),

(143,'icon_contact_yahoo','icon_contact_yahoo.gif','en',0,0,2),

(144,'icon_contact_www','icon_contact_www.gif','en',0,0,2),

(145,'icon_post_delete','icon_post_delete.gif','en',0,0,2),

(146,'icon_post_edit','icon_post_edit.gif','en',0,0,2),

(147,'icon_post_info','icon_post_info.gif','en',0,0,2),

(148,'icon_post_quote','icon_post_quote.gif','en',0,0,2),

(149,'icon_post_report','icon_post_report.gif','en',0,0,2),

(150,'icon_user_online','icon_user_online.gif','en',0,0,2),

(151,'icon_user_offline','icon_user_offline.gif','en',0,0,2),

(152,'icon_user_profile','icon_user_profile.gif','en',0,0,2),

(153,'icon_user_search','icon_user_search.gif','en',0,0,2),

(154,'icon_user_warn','icon_user_warn.gif','en',0,0,2),

(155,'button_pm_new','button_pm_new.gif','en',0,0,2),

(156,'button_pm_reply','button_pm_reply.gif','en',0,0,2),

(157,'button_topic_locked','button_topic_locked.gif','en',0,0,2),

(158,'button_topic_new','button_topic_new.gif','en',0,0,2),

(159,'button_topic_reply','button_topic_reply.gif','en',0,0,2);

/*Table structure for table `phpbb_styles_template` */

DROP TABLE IF EXISTS `phpbb_styles_template`;

CREATE TABLE `phpbb_styles_template` (
  `template_id` mediumint(8) unsigned NOT NULL auto_increment,
  `template_name` varchar(255) collate utf8_bin NOT NULL default '',
  `template_copyright` varchar(255) collate utf8_bin NOT NULL default '',
  `template_path` varchar(100) collate utf8_bin NOT NULL default '',
  `bbcode_bitfield` varchar(255) collate utf8_bin NOT NULL default 'kNg=',
  `template_storedb` tinyint(1) unsigned NOT NULL default '0',
  `template_inherits_id` int(4) unsigned NOT NULL default '0',
  `template_inherit_path` varchar(255) collate utf8_bin NOT NULL default '',
  PRIMARY KEY  (`template_id`),
  UNIQUE KEY `tmplte_nm` (`template_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_styles_template` */

insert into `phpbb_styles_template` values 

(1,'prosilver','&copy; phpBB Group','prosilver','lNg=',0,0,''),

(2,'subsilver2','&copy; phpBB Group, 2003','subsilver2','kNg=',1,0,'');

/*Table structure for table `phpbb_styles_template_data` */

DROP TABLE IF EXISTS `phpbb_styles_template_data`;

CREATE TABLE `phpbb_styles_template_data` (
  `template_id` mediumint(8) unsigned NOT NULL default '0',
  `template_filename` varchar(100) collate utf8_bin NOT NULL default '',
  `template_included` text collate utf8_bin NOT NULL,
  `template_mtime` int(11) unsigned NOT NULL default '0',
  `template_data` mediumtext collate utf8_bin NOT NULL,
  KEY `tid` (`template_id`),
  KEY `tfn` (`template_filename`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_styles_template_data` */

insert into `phpbb_styles_template_data` values 

(2,'attachment.html','',1229079038,'\n<!-- BEGIN _file -->\n\n	<!-- IF _file.S_DENIED -->\n		<span class=\"genmed\">[{_file.DENIED_MESSAGE}]</span><br />\n	<!-- ELSE -->\n\n		<!-- IF _file.COMMENT -->\n			<span class=\"gensmall\"><b>{L_FILE_COMMENT}:</b> {_file.COMMENT}</span><br />\n		<!-- ENDIF -->\n\n		<!-- IF _file.S_THUMBNAIL -->\n			<a href=\"{_file.U_DOWNLOAD_LINK}\"><img src=\"{_file.THUMB_IMAGE}\" alt=\"{_file.DOWNLOAD_NAME}\" /></a><br />\n			<span class=\"gensmall\">{_file.DOWNLOAD_NAME} [ {_file.FILESIZE} {_file.SIZE_LANG} | {_file.L_DOWNLOAD_COUNT} ]</span>\n		<!-- ENDIF -->\n\n		<!-- IF _file.S_IMAGE -->\n			<img src=\"{_file.U_INLINE_LINK}\" alt=\"{_file.DOWNLOAD_NAME}\" /><br />\n			<span class=\"gensmall\">{_file.DOWNLOAD_NAME} [ {_file.FILESIZE} {_file.SIZE_LANG} | {_file.L_DOWNLOAD_COUNT} ]</span>\n		<!-- ENDIF -->\n\n		<!-- IF _file.S_FILE -->\n			<span class=\"genmed\">\n				<!-- IF _file.UPLOAD_ICON -->{_file.UPLOAD_ICON} <!-- ENDIF -->\n				<a href=\"{_file.U_DOWNLOAD_LINK}\">{_file.DOWNLOAD_NAME}</a> [{_file.FILESIZE} {_file.SIZE_LANG}]\n			</span><br />\n			<span class=\"gensmall\">{_file.L_DOWNLOAD_COUNT}</span>\n		<!-- ENDIF -->\n\n		<!-- IF _file.S_WM_FILE -->\n			<!-- method used here from http://alistapart.com/articles/byebyeembed / autosizing seems to not work always, this will not fix -->\n			<object width=\"320\" height=\"285\" classid=\"CLSID:6BF52A52-394A-11d3-B153-00C04F79FAA6\" id=\"wmstream_{_file.ATTACH_ID}\">\n				<param name=\"url\" value=\"{_file.U_DOWNLOAD_LINK}\" />\n				<param name=\"showcontrols\" value=\"1\" />\n				<param name=\"showdisplay\" value=\"0\" />\n				<param name=\"showstatusbar\" value=\"0\" />\n				<param name=\"autosize\" value=\"1\" />\n				<param name=\"autostart\" value=\"0\" />\n				<param name=\"visible\" value=\"1\" />\n				<param name=\"animationstart\" value=\"0\" />\n				<param name=\"loop\" value=\"0\" />\n				<param name=\"src\" value=\"{_file.U_DOWNLOAD_LINK}\" />\n				<!--[if !IE]>-->\n					<object width=\"320\" height=\"285\" type=\"video/x-ms-wmv\" data=\"{_file.U_DOWNLOAD_LINK}\">\n						<param name=\"src\" value=\"{_file.U_DOWNLOAD_LINK}\" />\n						<param name=\"controller\" value=\"1\" />\n						<param name=\"showcontrols\" value=\"1\" />\n						<param name=\"showdisplay\" value=\"0\" />\n						<param name=\"showstatusbar\" value=\"0\" />\n						<param name=\"autosize\" value=\"1\" />\n						<param name=\"autostart\" value=\"0\" />\n						<param name=\"visible\" value=\"1\" />\n						<param name=\"animationstart\" value=\"0\" />\n						<param name=\"loop\" value=\"0\" />\n					</object>\n				<!--<![endif]-->\n			</object>\n\n		<!-- ELSEIF _file.S_FLASH_FILE -->\n			<object classid=\"clsid:D27CDB6E-AE6D-11CF-96B8-444553540000\" codebase=\"http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0\" width=\"{_file.WIDTH}\" height=\"{_file.HEIGHT}\">\n				<param name=\"movie\" value=\"{_file.U_DOWNLOAD_LINK}\" />\n				<param name=\"play\" value=\"true\" />\n				<param name=\"loop\" value=\"true\" />\n				<param name=\"quality\" value=\"high\" />\n				<param name=\"allowScriptAccess\" value=\"never\" />\n				<param name=\"allowNetworking\" value=\"internal\" />\n				<embed src=\"{_file.U_DOWNLOAD_LINK}\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\" width=\"{_file.WIDTH}\" height=\"{_file.HEIGHT}\" play=\"true\" loop=\"true\" quality=\"high\" allowscriptaccess=\"never\" allownetworking=\"internal\"></embed>\n			</object>\n		<!-- ELSEIF _file.S_QUICKTIME_FILE -->\n			<object id=\"qtstream_{_file.ATTACH_ID}\" classid=\"clsid:02BF25D5-8C17-4B23-BC80-D3488ABDDC6B\" codebase=\"http://www.apple.com/qtactivex/qtplugin.cab#version=6,0,2,0\" width=\"0\" height=\"16\">\n				<param name=\"src\" value=\"{_file.U_DOWNLOAD_LINK}\">\n				<param name=\"controller\" value=\"true\">\n				<param name=\"autoplay\" value=\"false\" />\n				<param name=\"type\" value=\"video/quicktime\">\n				<embed name=\"qtstream_{_file.ATTACH_ID}\" src=\"{_file.U_DOWNLOAD_LINK}\" pluginspage=\"http://www.apple.com/quicktime/download/\" enablejavascript=\"true\" controller=\"true\" width=\"0\" height=\"16\" type=\"video/quicktime\" autoplay=\"false\"> \n			</object>\n		<!-- ELSEIF _file.S_RM_FILE -->\n			<object id=\"rmstream_{_file.ATTACH_ID}\" classid=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" width=\"200\" height=\"50\">\n				<param name=\"src\" value=\"{_file.U_DOWNLOAD_LINK}\">\n				<param name=\"autostart\" value=\"false\">\n				<param name=\"controls\" value=\"ImageWindow\">\n				<param name=\"console\" value=\"ctrls_{_file.ATTACH_ID}\">\n				<param name=\"prefetch\" value=\"false\">\n				<embed name=\"rmstream_{_file.ATTACH_ID}\" type=\"audio/x-pn-realaudio-plugin\" src=\"{_file.U_DOWNLOAD_LINK}\" width=\"0\" height=\"0\" autostart=\"false\" controls=\"ImageWindow\" console=\"ctrls_{_file.ATTACH_ID}\" prefetch=\"false\"></embed>\n			</object>\n			<br />\n			<object id=\"ctrls_{_file.ATTACH_ID}\" classid=\"clsid:CFCDAA03-8BE4-11cf-B84B-0020AFBBCCFA\" width=\"0\" height=\"36\">\n				<param name=\"controls\" value=\"ControlPanel\">\n				<param name=\"console\" value=\"ctrls_{_file.ATTACH_ID}\">\n				<embed name=\"ctrls_{_file.ATTACH_ID}\" type=\"audio/x-pn-realaudio-plugin\" width=\"200\" height=\"36\" controls=\"ControlPanel\" console=\"ctrls_{_file.ATTACH_ID}\"></embed>\n			</object>\n\n			<script type=\"text/javascript\">\n			// <![CDATA[\n				if (document.rmstream_{_file.ATTACH_ID}.GetClipWidth)\n				{\n					while (!document.rmstream_{_file.ATTACH_ID}.GetClipWidth())\n					{\n					}\n\n					var width = document.rmstream_{_file.ATTACH_ID}.GetClipWidth();\n					var height = document.rmstream_{_file.ATTACH_ID}.GetClipHeight();\n\n					document.rmstream_{_file.ATTACH_ID}.width = width;\n					document.rmstream_{_file.ATTACH_ID}.height = height;\n					document.ctrls_{_file.ATTACH_ID}.width = width;\n				}\n			// ]]>\n			</script>\n		<!-- ENDIF -->\n\n		<!-- IF _file.S_WM_FILE or _file.S_RM_FILE or _file.S_FLASH_FILE or _file.S_QUICKTIME_FILE -->\n			<br />\n			<!-- IF _file.S_QUICKTIME_FILE --><a href=\"#\" onclick=\"play_qt_file(document.qtstream_{_file.ATTACH_ID}); return false;\">[ {L_PLAY_QUICKTIME_FILE} ]</a> <!-- ENDIF -->\n			<span class=\"gensmall\"><a href=\"{_file.U_DOWNLOAD_LINK}\">{_file.DOWNLOAD_NAME}</a> [ {_file.FILESIZE} {_file.SIZE_LANG} | {_file.L_DOWNLOAD_COUNT} ]</span>\n		<!-- ENDIF -->\n\n		<br />\n	<!-- ENDIF -->\n\n<!-- END _file -->\n'),

(2,'bbcode.html','',1229079038,'<!-- BEGIN ulist_open --><ul style=\"list-style-type: {LIST_TYPE}\"><!-- END ulist_open -->\n<!-- BEGIN ulist_open_default --><ul><!-- END ulist_open_default -->\n<!-- BEGIN ulist_close --></ul><!-- END ulist_close -->\n\n<!-- BEGIN olist_open --><ol style=\"list-style-type: {LIST_TYPE}\"><!-- END olist_open -->\n<!-- BEGIN olist_close --></ol><!-- END olist_close -->\n\n<!-- BEGIN listitem --><li><!-- END listitem -->\n<!-- BEGIN listitem_close --></li><!-- END listitem_close -->\n\n<!-- BEGIN quote_username_open -->\n<div class=\"quotetitle\">{USERNAME} {L_WROTE}:</div><div class=\"quotecontent\">\n<!-- END quote_username_open -->\n\n<!-- BEGIN quote_open -->\n<div class=\"quotetitle\"><b>{L_QUOTE}:</b></div><div class=\"quotecontent\">\n<!-- END quote_open -->\n\n<!-- BEGIN quote_close -->\n</div>\n<!-- END quote_close -->\n\n<!-- BEGIN code_open -->\n<div class=\"codetitle\"><b>{L_CODE}:</b></div><div class=\"codecontent\">\n<!-- END code_open -->\n\n<!-- BEGIN code_close -->\n</div>\n<!-- END code_close -->\n\n<!-- BEGIN inline_attachment_open -->\n<div class=\"attachtitle\">{L_ATTACHMENT}:</div><div class=\"attachcontent\">\n<!-- END inline_attachment_open -->\n\n<!-- BEGIN inline_attachment_close -->\n</div>\n<!-- END inline_attachment_close -->\n\n\n<!-- BEGIN b_open --><strong><!-- END b_open -->\n<!-- BEGIN b_close --></strong><!-- END b_close -->\n\n<!-- BEGIN u_open --><span style=\"text-decoration: underline\"><!-- END u_open -->\n<!-- BEGIN u_close --></span><!-- END u_close -->\n\n<!-- BEGIN i_open --><em><!-- END i_open -->\n<!-- BEGIN i_close --></em><!-- END i_close -->\n\n<!-- BEGIN color --><span style=\"color: {COLOR}\">{TEXT}</span><!-- END color -->\n\n<!-- BEGIN size --><span style=\"font-size: {SIZE}%; line-height: normal\">{TEXT}</span><!-- END size -->\n\n<!-- BEGIN img --><img src=\"{URL}\" alt=\"{L_IMAGE}\" /><!-- END img -->\n\n<!-- BEGIN url --><a href=\"{URL}\" class=\"postlink\">{DESCRIPTION}</a><!-- END url -->\n\n<!-- BEGIN email --><a href=\"mailto:{EMAIL}\">{DESCRIPTION}</a><!-- END email -->\n\n<!-- BEGIN flash -->\n	<object classid=\"clsid:D27CDB6E-AE6D-11CF-96B8-444553540000\" codebase=\"http://active.macromedia.com/flash2/cabs/swflash.cab#version=5,0,0,0\" width=\"{WIDTH}\" height=\"{HEIGHT}\">\n		<param name=\"movie\" value=\"{URL}\" />\n		<param name=\"play\" value=\"false\" />\n		<param name=\"loop\" value=\"false\" />\n		<param name=\"quality\" value=\"high\" />\n		<param name=\"allowScriptAccess\" value=\"never\" />\n		<param name=\"allowNetworking\" value=\"internal\" />\n		<embed src=\"{URL}\" type=\"application/x-shockwave-flash\" pluginspage=\"http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash\" width=\"{WIDTH}\" height=\"{HEIGHT}\" play=\"false\" loop=\"false\" quality=\"high\" allowscriptaccess=\"never\" allownetworking=\"internal\"></embed>\n	</object>\n<!-- END flash -->\n'),

(2,'breadcrumbs.html','confirm_body.html:faq_body.html:index_body.html:login_body.html:login_forum.html:mcp_approve.html:mcp_footer.html:mcp_move.html:memberlist_body.html:memberlist_email.html:memberlist_leaders.html:memberlist_view.html:message_body.html:overall_header.html:posting_body.html:report_body.html:search_body.html:search_results.html:ucp_footer.html:viewforum_body.html:viewonline_body.html:viewtopic_body.html:',1229079038,'	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" style=\"margin-top: 5px;\">\n	<tr>\n		<td class=\"row1\">\n			<p class=\"breadcrumbs\"><a href=\"{U_INDEX}\">{L_INDEX}</a><!-- BEGIN navlinks --> &#187; <a href=\"{navlinks.U_VIEW_FORUM}\">{navlinks.FORUM_NAME}</a><!-- END navlinks --></p>\n			<p class=\"datetime\">{S_TIMEZONE}</p>\n		</td>\n	</tr>\n	</table>'),

(2,'confirm_body.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<div id=\"pagecontent\">\n\n	<form name=\"confirm\" action=\"{S_CONFIRM_ACTION}\" method=\"post\">\n	\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th>{MESSAGE_TITLE}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" align=\"center\"><br /><p class=\"gen\">{MESSAGE_TEXT}</p><br />{S_HIDDEN_FIELDS}<input type=\"submit\" name=\"confirm\" value=\"{YES_VALUE}\" class=\"btnmain\" />&nbsp;&nbsp;<input type=\"submit\" name=\"cancel\" value=\"{L_NO}\" class=\"btnlite\" /></td>\n	</tr>\n	</table>\n	\n	</form>\n	\n</div>\n\n<br clear=\"all\" />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<br clear=\"all\" />\n\n<div align=\"{S_CONTENT_FLOW_END}\"><!-- INCLUDE jumpbox.html --></div>\n\n<!-- INCLUDE overall_footer.html -->');
insert into `phpbb_styles_template_data` values 

(2,'custom_profile_fields.html','',1229079038,'<!-- BEGIN dropdown -->\n	<select name=\"{dropdown.FIELD_IDENT}\">\n		<!-- BEGIN options --><option value=\"{dropdown.options.OPTION_ID}\"{dropdown.options.SELECTED}>{dropdown.options.VALUE}</option><!-- END options -->\n	</select>\n<!-- END dropdown -->\n\n<!-- BEGIN text -->\n	<textarea name=\"{text.FIELD_IDENT}\" rows=\"{text.FIELD_ROWS}\" cols=\"{text.FIELD_COLS}\">{text.FIELD_VALUE}</textarea>\n<!-- END text -->\n\n<!-- BEGIN string -->\n	<input type=\"text\" class=\"post\" name=\"{string.FIELD_IDENT}\" size=\"{string.FIELD_LENGTH}\" maxlength=\"{string.FIELD_MAXLEN}\" value=\"{string.FIELD_VALUE}\" />\n<!-- END string -->\n\n<!-- BEGIN bool -->\n	<!-- IF bool.FIELD_LENGTH eq 1 -->\n		<!-- BEGIN options --><input type=\"radio\" class=\"radio\" name=\"{bool.FIELD_IDENT}\" value=\"{bool.options.OPTION_ID}\"{bool.options.CHECKED} /><span class=\"genmed\">{bool.options.VALUE}</span>&nbsp; &nbsp;<!-- END options -->\n	<!-- ELSE -->\n		<input type=\"checkbox\" class=\"radio\" name=\"{bool.FIELD_IDENT}\" value=\"1\"<!-- IF bool.FIELD_VALUE eq 1 --> checked=\"checked\"<!-- ENDIF --> />\n	<!-- ENDIF -->\n<!-- END bool -->\n\n<!-- BEGIN int -->\n	<input type=\"text\" class=\"post\" name=\"{int.FIELD_IDENT}\" size=\"{int.FIELD_LENGTH}\" value=\"{int.FIELD_VALUE}\" />\n<!-- END int -->\n\n<!-- BEGIN date -->\n	<span class=\"genmed\">{L_DAY}:</span> <select name=\"{date.FIELD_IDENT}_day\">{date.S_DAY_OPTIONS}</select>\n	<span class=\"genmed\">{L_MONTH}:</span> <select name=\"{date.FIELD_IDENT}_month\">{date.S_MONTH_OPTIONS}</select>\n	<span class=\"genmed\">{L_YEAR}:</span> <select name=\"{date.FIELD_IDENT}_year\">{date.S_YEAR_OPTIONS}</select>\n<!-- END date -->\n'),

(2,'faq_body.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<a name=\"faqtop\"></a>\n\n<div id=\"pagecontent\">\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th>{L_FAQ_TITLE}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\">\n		<!-- BEGIN faq_block -->\n			<span class=\"gen\"><b>{faq_block.BLOCK_TITLE}</b></span><br />\n			<!-- BEGIN faq_row -->\n				<span class=\"gen\"><a class=\"postlink\" href=\"#f{faq_block.S_ROW_COUNT}r{faq_block.faq_row.S_ROW_COUNT}\">{faq_block.faq_row.FAQ_QUESTION}</a></span><br />\n			<!-- END faq_row -->\n			<br />\n		<!-- END faq_block -->\n		</td>\n	</tr>\n	<tr>\n		<td class=\"cat\">&nbsp;</td>\n	</tr>\n	</table>\n\n	<br clear=\"all\" />\n\n	<!-- BEGIN faq_block -->\n		<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n		<tr> \n			<td class=\"cat\" align=\"center\"><h4>{faq_block.BLOCK_TITLE}</h4></td>\n		</tr>\n		<!-- BEGIN faq_row --> \n		<tr>\n			<!-- IF faq_block.faq_row.S_ROW_COUNT is even -->\n				<td class=\"row1\" valign=\"top\">\n			<!-- ELSE -->\n				<td class=\"row2\" valign=\"top\">\n			<!-- ENDIF -->\n				<div class=\"postbody\"><a name=\"f{faq_block.S_ROW_COUNT}r{faq_block.faq_row.S_ROW_COUNT}\"></a><b>&#187; {faq_block.faq_row.FAQ_QUESTION}</b></div>\n				<div class=\"postbody\">{faq_block.faq_row.FAQ_ANSWER}</div>\n				<p class=\"gensmall\"><a href=\"#faqtop\">{L_BACK_TO_TOP}</a></p>\n			</td>\n		</tr>\n		<tr>\n			<td class=\"spacer\" height=\"1\"><img src=\"images/spacer.gif\" alt=\"\" width=\"1\" height=\"1\" /></td>\n		</tr>\n		<!-- END faq_row -->\n		</table>\n\n		<br clear=\"all\" />\n	<!-- END faq_block -->\n\n</div>\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<br clear=\"all\" />\n\n<div align=\"{S_CONTENT_FLOW_END}\"><!-- INCLUDE jumpbox.html --></div>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'forumlist_body.html','index_body.html:viewforum_body.html:',1229079038,'<table class=\"tablebg\" cellspacing=\"1\" width=\"100%\">\n<tr>\n	<td class=\"cat\" colspan=\"5\" align=\"{S_CONTENT_FLOW_END}\"><!-- IF not S_IS_BOT and U_MARK_FORUMS --><a class=\"nav\" href=\"{U_MARK_FORUMS}\">{L_MARK_FORUMS_READ}</a><!-- ENDIF -->&nbsp;</td>\n</tr>\n<tr>\n	<th colspan=\"2\">&nbsp;{L_FORUM}&nbsp;</th>\n	<th width=\"50\">&nbsp;{L_TOPICS}&nbsp;</th>\n	<th width=\"50\">&nbsp;{L_POSTS}&nbsp;</th>\n	<th>&nbsp;{L_LAST_POST}&nbsp;</th>\n</tr>\n<!-- BEGIN forumrow -->\n	<!-- IF forumrow.S_IS_CAT -->\n		<tr>\n			<td class=\"cat\" colspan=\"2\"><h4><a href=\"{forumrow.U_VIEWFORUM}\">{forumrow.FORUM_NAME}</a></h4></td>\n			<td class=\"catdiv\" colspan=\"3\">&nbsp;</td>\n		</tr>\n	<!-- ELSEIF forumrow.S_IS_LINK -->\n		<tr>\n			<td class=\"row1\" width=\"50\" align=\"center\">{forumrow.FORUM_FOLDER_IMG}</td>\n			<td class=\"row1\">\n				<!-- IF forumrow.FORUM_IMAGE -->\n					<div style=\"float: {S_CONTENT_FLOW_BEGIN}; margin-{S_CONTENT_FLOW_END}: 5px;\">{forumrow.FORUM_IMAGE}</div><div style=\"float: {S_CONTENT_FLOW_BEGIN};\">\n				<!-- ENDIF -->\n				<a class=\"forumlink\" href=\"{forumrow.U_VIEWFORUM}\">{forumrow.FORUM_NAME}</a>\n				<p class=\"forumdesc\">{forumrow.FORUM_DESC}</p>\n				<!-- IF forumrow.FORUM_IMAGE --></div><!-- ENDIF -->\n			</td>\n			<!-- IF forumrow.CLICKS -->\n				<td class=\"row2\" colspan=\"3\" align=\"center\"><span class=\"genmed\">{L_REDIRECTS}: {forumrow.CLICKS}</span></td>\n			<!-- ELSE -->\n				<td class=\"row2\" colspan=\"3\" align=\"center\">&nbsp;</td>\n			<!-- ENDIF -->\n		</tr>\n	<!-- ELSE -->\n		<!-- IF forumrow.S_NO_CAT -->\n			<tr>\n				<td class=\"cat\" colspan=\"2\"><h4>{L_FORUM}</h4></td>\n				<td class=\"catdiv\" colspan=\"3\">&nbsp;</td>\n			</tr>\n		<!-- ENDIF -->\n		<tr>\n			<td class=\"row1\" width=\"50\" align=\"center\">{forumrow.FORUM_FOLDER_IMG}</td>\n			<td class=\"row1\" width=\"100%\">\n				<!-- IF forumrow.FORUM_IMAGE -->\n					<div style=\"float: {S_CONTENT_FLOW_BEGIN}; margin-{S_CONTENT_FLOW_END}: 5px;\">{forumrow.FORUM_IMAGE}</div><div style=\"float: {S_CONTENT_FLOW_BEGIN};\">\n				<!-- ENDIF -->\n				<a class=\"forumlink\" href=\"{forumrow.U_VIEWFORUM}\">{forumrow.FORUM_NAME}</a>\n				<p class=\"forumdesc\">{forumrow.FORUM_DESC}</p>\n				<!-- IF forumrow.MODERATORS -->\n					<p class=\"forumdesc\"><strong>{forumrow.L_MODERATOR_STR}:</strong> {forumrow.MODERATORS}</p>\n				<!-- ENDIF -->\n				<!-- IF forumrow.SUBFORUMS and forumrow.S_LIST_SUBFORUMS -->\n					<p class=\"forumdesc\"><strong>{forumrow.L_SUBFORUM_STR}</strong> {forumrow.SUBFORUMS}</p>\n				<!-- ENDIF -->\n				<!-- IF forumrow.FORUM_IMAGE --></div><!-- ENDIF -->\n			</td>\n			<td class=\"row2\" align=\"center\"><p class=\"topicdetails\">{forumrow.TOPICS}</p></td>\n			<td class=\"row2\" align=\"center\"><p class=\"topicdetails\">{forumrow.POSTS}</p></td>\n			<td class=\"row2\" align=\"center\" nowrap=\"nowrap\">\n				<!-- IF forumrow.LAST_POST_TIME -->\n					<p class=\"topicdetails\">{forumrow.LAST_POST_TIME}</p>\n					<p class=\"topicdetails\">{forumrow.LAST_POSTER_FULL}\n						<!-- IF not S_IS_BOT --><a href=\"{forumrow.U_LAST_POST}\">{LAST_POST_IMG}</a><!-- ENDIF -->\n					</p>\n				<!-- ELSE -->\n					<p class=\"topicdetails\">{L_NO_POSTS}</p>\n				<!-- ENDIF -->\n			</td>\n		</tr>\n	<!-- ENDIF -->\n<!-- BEGINELSE -->\n	<tr>\n		<td class=\"row1\" colspan=\"5\" align=\"center\"><p class=\"gensmall\">{L_NO_FORUMS}</p></td>\n	</tr>\n<!-- END forumrow -->\n</table>'),

(2,'index_body.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<!-- IF U_MCP -->\n	<div id=\"pageheader\">\n		<p class=\"linkmcp\">[ <a href=\"{U_MCP}\">{L_MCP}</a> ]</p>\n	</div>\n\n	<br clear=\"all\" /><br />\n<!-- ENDIF -->\n\n<!-- INCLUDE forumlist_body.html -->\n\n<!-- IF not S_IS_BOT or U_TEAM -->\n<span class=\"gensmall\"><!-- IF not S_IS_BOT --><a href=\"{U_DELETE_COOKIES}\">{L_DELETE_COOKIES}</a><!-- ENDIF --><!-- IF not S_IS_BOT and U_TEAM --> | <!-- ENDIF --><!-- IF U_TEAM --><a href=\"{U_TEAM}\">{L_THE_TEAM}</a><!-- ENDIF --></span><br />\n<!-- ENDIF -->\n\n<br clear=\"all\" />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<!-- IF S_DISPLAY_ONLINE_LIST -->\n	<br clear=\"all\" />\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<td class=\"cat\" colspan=\"2\"><!-- IF U_VIEWONLINE --><h4><a href=\"{U_VIEWONLINE}\">{L_WHO_IS_ONLINE}</a></h4><!-- ELSE --><h4>{L_WHO_IS_ONLINE}</h4><!-- ENDIF --></td>\n	</tr>\n	<tr>\n	<!-- IF LEGEND -->\n		<td class=\"row1\" rowspan=\"2\" align=\"center\" valign=\"middle\"><img src=\"{T_THEME_PATH}/images/whosonline.gif\" alt=\"{L_WHO_IS_ONLINE}\" /></td>\n	<!-- ELSE -->\n		<td class=\"row1\" align=\"center\" valign=\"middle\"><img src=\"{T_THEME_PATH}/images/whosonline.gif\" alt=\"{L_WHO_IS_ONLINE}\" /></td>\n	<!-- ENDIF -->\n		<td class=\"row1\" width=\"100%\"><span class=\"genmed\">{TOTAL_USERS_ONLINE} ({L_ONLINE_EXPLAIN})<br />{RECORD_USERS}<br /><br />{LOGGED_IN_USER_LIST}</span></td>\n	</tr>\n	<!-- IF LEGEND -->\n		<tr>\n			<td class=\"row1\"><b class=\"gensmall\">{L_LEGEND} :: {LEGEND}</b></td>\n		</tr>\n	<!-- ENDIF -->\n	</table>\n<!-- ENDIF -->\n\n<!-- IF S_DISPLAY_BIRTHDAY_LIST -->\n	<br clear=\"all\" />\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<td class=\"cat\" colspan=\"2\"><h4>{L_BIRTHDAYS}</h4></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" align=\"center\" valign=\"middle\"><img src=\"{T_THEME_PATH}/images/whosonline.gif\" alt=\"{L_BIRTHDAYS}\" /></td>\n		<td class=\"row1\" width=\"100%\"><p class=\"genmed\"><!-- IF BIRTHDAY_LIST -->{L_CONGRATULATIONS}: <b>{BIRTHDAY_LIST}</b><!-- ELSE -->{L_NO_BIRTHDAYS}<!-- ENDIF --></p></td>\n	</tr>\n	</table>\n<!-- ENDIF -->\n\n<br clear=\"all\" />\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<td class=\"cat\" colspan=\"2\"><h4>{L_STATISTICS}</h4></td>\n</tr>\n<tr>\n	<td class=\"row1\"><img src=\"{T_THEME_PATH}/images/whosonline.gif\" alt=\"{L_STATISTICS}\" /></td>\n	<td class=\"row1\" width=\"100%\" valign=\"middle\"><p class=\"genmed\">{TOTAL_POSTS} | {TOTAL_TOPICS} | {TOTAL_USERS} | {NEWEST_USER}</p></td>\n</tr>\n</table>\n\n<!-- IF not S_USER_LOGGED_IN -->\n	<br clear=\"all\" />\n\n	<form method=\"post\" action=\"{S_LOGIN_ACTION}\">\n	\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<td class=\"cat\"><h4><a href=\"{U_LOGIN_LOGOUT}\">{L_LOGIN_LOGOUT}</a></h4></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" align=\"center\"><span class=\"genmed\">{L_USERNAME}:</span> <input class=\"post\" type=\"text\" name=\"username\" size=\"10\" />&nbsp; <span class=\"genmed\">{L_PASSWORD}:</span> <input class=\"post\" type=\"password\" name=\"password\" size=\"10\" />&nbsp; <!-- IF S_AUTOLOGIN_ENABLED --> <span class=\"gensmall\">{L_LOG_ME_IN}</span> <input type=\"checkbox\" class=\"radio\" name=\"autologin\" /><!-- ENDIF -->&nbsp; <input type=\"submit\" class=\"btnmain\" name=\"login\" value=\"{L_LOGIN}\" /></td>\n	</tr>\n	</table>\n	{S_FORM_TOKEN}\n	</form>\n<!-- ENDIF -->\n\n<br clear=\"all\" />\n\n<table class=\"legend\">\n<tr>\n	<td width=\"20\" align=\"center\">{FORUM_NEW_IMG}</td>\n	<td><span class=\"gensmall\">{L_NEW_POSTS}</span></td>\n	<td>&nbsp;&nbsp;</td>\n	<td width=\"20\" align=\"center\">{FORUM_IMG}</td>\n	<td><span class=\"gensmall\">{L_NO_NEW_POSTS}</span></td>\n	<td>&nbsp;&nbsp;</td>\n	<td width=\"20\" align=\"center\">{FORUM_LOCKED_IMG}</td>\n	<td><span class=\"gensmall\">{L_FORUM_LOCKED}</span></td>\n</tr>\n</table>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'jumpbox.html','confirm_body.html:faq_body.html:login_body.html:login_forum.html:mcp_footer.html:mcp_forum.html:memberlist_body.html:memberlist_email.html:memberlist_leaders.html:memberlist_view.html:posting_body.html:report_body.html:search_body.html:search_results.html:ucp_footer.html:viewforum_body.html:viewonline_body.html:viewtopic_body.html:',1229079038,'\n<!-- IF S_DISPLAY_JUMPBOX -->\n	<form method=\"post\" name=\"jumpbox\" action=\"{S_JUMPBOX_ACTION}\" onsubmit=\"if(document.jumpbox.f.value == -1){return false;}\">\n\n	<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n	<tr>\n		<td nowrap=\"nowrap\"><span class=\"gensmall\"><!-- IF S_IN_MCP and S_MERGE_SELECT -->{L_SELECT_TOPICS_FROM}<!-- ELSEIF S_IN_MCP -->{L_MODERATE_FORUM}<!-- ELSE -->{L_JUMP_TO}<!-- ENDIF -->:</span>&nbsp;<select name=\"f\" onchange=\"if(this.options[this.selectedIndex].value != -1){ document.forms[\'jumpbox\'].submit() }\">\n\n		<!-- BEGIN jumpbox_forums -->\n			<!-- IF jumpbox_forums.S_FORUM_COUNT eq 1 --><option value=\"-1\">------------------</option><!-- ENDIF -->\n			<option value=\"{jumpbox_forums.FORUM_ID}\"{jumpbox_forums.SELECTED}><!-- BEGIN level -->&nbsp; &nbsp;<!-- END level -->{jumpbox_forums.FORUM_NAME}</option>\n		<!-- END jumpbox_forums -->\n\n		</select>&nbsp;<input class=\"btnlite\" type=\"submit\" value=\"{L_GO}\" /></td>\n	</tr>\n	</table>\n\n	</form>\n<!-- ENDIF -->'),

(2,'login_body.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<form action=\"{S_LOGIN_ACTION}\" method=\"post\">\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<!-- IF not S_ADMIN_AUTH -->\n		<th colspan=\"2\">{L_LOGIN}</th>\n	<!-- ELSE -->\n		<th>{LOGIN_EXPLAIN}</th>\n	<!-- ENDIF -->\n</tr>\n<!-- IF LOGIN_EXPLAIN && not S_ADMIN_AUTH -->\n	<tr>\n		<td class=\"row3\" colspan=\"2\" align=\"center\"><span class=\"gensmall\">{LOGIN_EXPLAIN}</span></td>\n	</tr>\n<!-- ENDIF -->\n<tr><!-- IF not S_ADMIN_AUTH and S_REGISTER_ENABLED -->\n	<td class=\"row1\" width=\"50%\">\n		<p class=\"genmed\">{L_LOGIN_INFO}</p>\n\n		<p class=\"genmed\" align=\"center\">\n			<a href=\"{U_TERMS_USE}\">{L_TERMS_USE}</a> | <a href=\"{U_PRIVACY}\">{L_PRIVACY}</a>\n		</p>\n	</td>\n	<!-- ENDIF -->\n	<td <!-- IF not S_ADMIN_AUTH -->class=\"row2\"<!-- ELSE -->class=\"row1\"<!-- ENDIF -->>\n	\n		<table align=\"center\" cellspacing=\"1\" cellpadding=\"4\" style=\"width: 100%;\">\n		<!-- IF LOGIN_ERROR -->\n			<tr>\n				<td class=\"gensmall\" colspan=\"2\" align=\"center\"><span class=\"error\">{LOGIN_ERROR}</span></td>\n			</tr>\n		<!-- ENDIF -->\n\n		<tr>\n			<td valign=\"top\" <!-- IF S_ADMIN_AUTH -->style=\"width: 50%; text-align: {S_CONTENT_FLOW_END};\"<!-- ENDIF -->><b class=\"gensmall\">{L_USERNAME}:</b></td>\n			<td><input class=\"post\" type=\"text\" name=\"{USERNAME_CREDENTIAL}\" size=\"25\" value=\"{USERNAME}\" tabindex=\"1\" />\n				<!-- IF not S_ADMIN_AUTH and S_REGISTER_ENABLED -->\n					<br /><a class=\"gensmall\" href=\"{U_REGISTER}\">{L_REGISTER}</a>\n				<!-- ENDIF -->\n			</td>\n		</tr>\n		<tr>\n			<td valign=\"top\" <!-- IF S_ADMIN_AUTH -->style=\"width: 50%; text-align: {S_CONTENT_FLOW_END};\"<!-- ENDIF -->><b class=\"gensmall\">{L_PASSWORD}:</b></td>\n			<td>\n				<input class=\"post\" type=\"password\" name=\"{PASSWORD_CREDENTIAL}\" size=\"25\" tabindex=\"2\" />\n				<!-- IF U_SEND_PASSWORD --><br /><a class=\"gensmall\" href=\"{U_SEND_PASSWORD}\">{L_FORGOT_PASS}</a><!-- ENDIF -->\n				<!-- IF U_RESEND_ACTIVATION and not S_ADMIN_AUTH --><br /><a class=\"gensmall\" href=\"{U_RESEND_ACTIVATION}\">{L_RESEND_ACTIVATION}</a><!-- ENDIF -->\n			</td>\n		</tr>\n		<!-- IF S_DISPLAY_FULL_LOGIN -->\n			<!-- IF S_AUTOLOGIN_ENABLED -->\n			<tr>\n				<td>&nbsp;</td>\n				<td><input type=\"checkbox\" class=\"radio\" name=\"autologin\" tabindex=\"3\" /> <span class=\"gensmall\">{L_LOG_ME_IN}</span></td>\n			</tr>\n			<!-- ENDIF -->\n			<tr>\n				<td>&nbsp;</td>\n				<td><input type=\"checkbox\" class=\"radio\" name=\"viewonline\" tabindex=\"4\" /> <span class=\"gensmall\">{L_HIDE_ME}</span></td>\n			</tr>\n		<!-- ENDIF -->\n		</table>\n	</td>\n</tr>\n\n<!-- IF S_CONFIRM_CODE -->\n</table>\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr> \n		<th colspan=\"2\" valign=\"middle\">{L_LOGIN_CONFIRMATION}</th>\n	</tr>\n	<tr> \n		<td class=\"row3\" colspan=\"2\"><span class=\"gensmall\">{L_LOGIN_CONFIRM_EXPLAIN}</span></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" colspan=\"2\" align=\"center\">\n			<input type=\"hidden\" name=\"confirm_id\" value=\"{CONFIRM_ID}\" />\n			{CONFIRM_IMAGE}\n		</td>\n	</tr>\n	<tr> \n		<td class=\"row1\"><b class=\"genmed\">{L_CONFIRM_CODE}: </b><br /><span class=\"gensmall\">{L_CONFIRM_CODE_EXPLAIN}</span></td>\n		<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"confirm_code\" size=\"8\" maxlength=\"8\" /></td>\n	</tr>\n<!-- ENDIF -->\n<tr>\n	<td class=\"cat\" <!-- IF not S_ADMIN_AUTH or S_CONFIRM_CODE -->colspan=\"2\"<!-- ENDIF --> align=\"center\">{S_HIDDEN_FIELDS}<input type=\"submit\" name=\"login\" class=\"btnmain\" value=\"{L_LOGIN}\" tabindex=\"5\" /></td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n\n</form>\n\n<br clear=\"all\" />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<br clear=\"all\" />\n\n<div align=\"{S_CONTENT_FLOW_END}\"><!-- INCLUDE jumpbox.html --></div>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'login_forum.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<div id=\"pagecontent\">\n\n	<form name=\"login_forum\" method=\"post\" action=\"{S_LOGIN_ACTION}\">\n	\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\" align=\"center\">\n	<tr> \n		<th>{L_LOGIN}</th>\n	</tr>\n	<tr>\n		<td class=\"row3\" align=\"center\"><span class=\"gensmall\">{L_LOGIN_FORUM}</span></td>\n	</tr>\n	<tr> \n		<td class=\"row1\" align=\"center\">\n		\n			<table cellspacing=\"1\" cellpadding=\"4\" border=\"0\">\n			<!-- IF LOGIN_ERROR -->\n				<tr>\n					<td class=\"gensmall\" colspan=\"2\" align=\"center\"><span class=\"error\">{LOGIN_ERROR}</span></td>\n				</tr>\n			<!-- ENDIF -->\n			<tr> \n				<td class=\"gensmall\"><b>{L_PASSWORD}:</b></td>\n				<td><input class=\"post\" type=\"password\" name=\"password\" size=\"25\" tabindex=\"2\" /></td>\n			</tr>\n			</table>\n		</td>\n	</tr>\n	<tr> \n		<td class=\"cat\" colspan=\"2\" align=\"center\">{S_HIDDEN_FIELDS}<input type=\"submit\" name=\"login\" class=\"btnmain\" value=\"{L_LOGIN}\" tabindex=\"3\" /></td>\n	</tr>\n	</table>\n	{S_FORM_TOKEN}\n	</form>\n\n</div>\n\n<br clear=\"all\" />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<br clear=\"all\" />\n\n<div align=\"{S_CONTENT_FLOW_END}\"><!-- INCLUDE jumpbox.html --></div>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'mcp_approve.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<div id=\"pagecontent\">\n\n	<form name=\"confirm\" action=\"{S_CONFIRM_ACTION}\" method=\"post\">\n	\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th>{MESSAGE_TITLE}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" align=\"center\">\n			<!-- IF ADDITIONAL_MSG -->\n				<span class=\"gen error\">{ADDITIONAL_MSG}</span><br />\n			<!-- ENDIF -->\n			<!-- IF S_NOTIFY_POSTER -->\n				<input type=\"checkbox\" class=\"radio\" name=\"notify_poster\" checked=\"checked\" /><span class=\"gen\"><!-- IF S_APPROVE -->{L_NOTIFY_POSTER_APPROVAL}<!-- ELSE -->{L_NOTIFY_POSTER_DISAPPROVAL}<!-- ENDIF --></span><br />\n			<!-- ENDIF -->\n			<!-- IF not S_APPROVE -->\n				<br />\n				<table border=\"0\" width=\"90%\" cellspacing=\"2\" cellpadding=\"1\">\n				<tr>\n					<td class=\"row1\" width=\"22%\"><b class=\"gen\">{L_DISAPPROVE_REASON}:</b></td>\n					<td class=\"row1\" width=\"78%\"><select name=\"reason_id\"><!-- BEGIN reason --><option value=\"{reason.ID}\"<!-- IF reason.S_SELECTED --> selected=\"selected\"<!-- ENDIF -->>{reason.DESCRIPTION}</option><!-- END reason --></select></td>\n				</tr>\n				<tr>\n					<td class=\"row1\" valign=\"top\"><span class=\"gen\"><b>{L_MORE_INFO}:</b></span><br /><span class=\"gensmall\">{L_CAN_LEAVE_BLANK}</span></td>\n					<td class=\"row1\"><textarea class=\"post\" style=\"width:500px\" name=\"reason\" rows=\"10\" cols=\"40\">{REASON}</textarea></td>\n				</tr>\n				</table>\n				<br />\n			<!-- ENDIF -->\n			<br />{S_HIDDEN_FIELDS}<span class=\"gen\">{MESSAGE_TEXT}</span><br /><br />\n			<input type=\"submit\" name=\"confirm\" value=\"{YES_VALUE}\" class=\"btnmain\" />&nbsp;&nbsp;<input type=\"submit\" name=\"cancel\" value=\"{L_NO}\" class=\"btnlite\" /></span>\n		</td>\n	</tr>\n	</table>\n	{S_FORM_TOKEN}\n	</form>\n	\n</div>\n\n<br clear=\"all\" />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<br clear=\"all\" />\n\n<!-- INCLUDE overall_footer.html -->\n'),

(2,'mcp_ban.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<script type=\"text/javascript\">\n// <![CDATA[\n\n	var ban_length = new Array();\n		ban_length[-1] = \'\';\n	<!-- BEGIN ban_length -->\n		ban_length[\'{ban_length.BAN_ID}\'] = \'{ban_length.A_LENGTH}\';\n	<!-- END ban_length -->\n\n	var ban_reason = new Array();\n		ban_reason[-1] = \'\';\n	<!-- BEGIN ban_reason -->\n		ban_reason[\'{ban_reason.BAN_ID}\'] = \'{ban_reason.A_REASON}\';\n	<!-- END ban_reason -->\n\n	var ban_give_reason = new Array();\n		ban_give_reason[-1] = \'\';\n	<!-- BEGIN ban_give_reason -->\n		ban_give_reason[\'{ban_give_reason.BAN_ID}\'] = \'{ban_give_reason.A_REASON}\';\n	<!-- END ban_give_reason -->\n\n	function display_details(option)\n	{\n		document.getElementById(\'mcp_ban\').unbangivereason.value = ban_give_reason[option];\n		document.getElementById(\'mcp_ban\').unbanreason.value = ban_reason[option];\n		document.getElementById(\'mcp_ban\').unbanlength.value = ban_length[option];\n	}\n\n// ]]>\n</script>\n\n<form id=\"mcp_ban\" method=\"post\" action=\"{U_ACTION}\">\n\n<table width=\"100%\" class=\"tablebg\" cellspacing=\"1\" cellpadding=\"4\" border=\"0\">\n<tr>\n	<th colspan=\"2\" nowrap=\"nowrap\">{L_TITLE}</th>\n</tr>\n<tr>\n	<td class=\"row3\" colspan=\"2\">{L_EXPLAIN}</td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"45%\" valign=\"top\"><b>{L_BAN_CELL}:</b></td>\n	<td class=\"row2\">\n		<textarea name=\"ban\" id=\"ban\" cols=\"40\" rows=\"3\" class=\"post\">{USERNAMES}</textarea>\n		<!-- IF S_USERNAME_BAN --><br />[ <a href=\"{U_FIND_USERNAME}\" onclick=\"find_username(this.href); return false;\">{L_FIND_USERNAME}</a> ]<!-- ENDIF -->\n	</td>\n</tr>\n<tr>\n	<td class=\"row1\" valign=\"top\"><b>{L_BAN_LENGTH}:</b></td>\n	<td class=\"row2\"><select name=\"banlength\">{S_BAN_END_OPTIONS}</select><br /><input type=\"text\" name=\"banlengthother\" class=\"post\" /> {L_YEAR_MONTH_DAY}</td>\n</tr>\n<tr>\n	<td class=\"row1\" valign=\"top\"><b>{L_BAN_EXCLUDE}:</b><br /><span class=\"gensmall\">{L_BAN_EXCLUDE_EXPLAIN}</span></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"banexclude\" value=\"1\" /> {L_YES} &nbsp; <input type=\"radio\" class=\"radio\" name=\"banexclude\" value=\"0\" checked=\"checked\" /> {L_NO}</td>\n</tr>\n<tr>\n	<td class=\"row1\" valign=\"top\"><b>{L_BAN_REASON}:</b></td>\n	<td class=\"row2\"><input name=\"banreason\" type=\"text\" class=\"post\" maxlength=\"255\" /></td>\n</tr>\n<tr>\n	<td class=\"row1\" valign=\"top\"><b>{L_BAN_GIVE_REASON}:</b></td>\n	<td class=\"row2\"><input name=\"bangivereason\" type=\"text\" class=\"post\" maxlength=\"255\" /></td>\n</tr>\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\"><input type=\"submit\" name=\"bansubmit\" value=\"{L_SUBMIT}\" class=\"btnmain\" />&nbsp; <input type=\"reset\" value=\"{L_RESET}\" class=\"btnlite\" />&nbsp;</td>\n</tr>\n</table>\n\n<br /><br />\n\n<table width=\"100%\" class=\"tablebg\" cellspacing=\"1\" cellpadding=\"4\" border=\"0\">\n<tr>\n	<th colspan=\"2\" nowrap=\"nowrap\">{L_UNBAN_TITLE}</th>\n</tr>\n<tr>\n	<td class=\"row3\" colspan=\"2\">{L_UNBAN_EXPLAIN}</td>\n</tr>\n<!-- IF S_BANNED_OPTIONS -->\n	<tr>\n		<td class=\"row1\" valign=\"top\" width=\"45%\"><b>{L_BAN_CELL}:</b></td>\n		<td class=\"row2\"><select name=\"unban[]\" multiple=\"multiple\" size=\"10\" style=\"width: 50%\" onchange=\"if (this.selectedIndex > -1) display_details(this.options[this.selectedIndex].value); else display_details(-1);\">{BANNED_OPTIONS}</select></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" valign=\"top\"><b>{L_BAN_LENGTH}:</b></td>\n		<td class=\"row2\"><input style=\"border: 0; width: 100%\" type=\"text\" name=\"unbanlength\" disabled=\"disabled\" /></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" valign=\"top\"><b>{L_BAN_REASON}:</b></td>\n		<td class=\"row2\"><textarea style=\"border: 0; width: 100%\" name=\"unbanreason\" disabled=\"disabled\" rows=\"5\" cols=\"80\">&nbsp;</textarea></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" valign=\"top\"><b>{L_BAN_GIVE_REASON}:</b></td>\n		<td class=\"row2\"><textarea style=\"border: 0; width: 100%\" name=\"unbangivereason\" disabled=\"disabled\" rows=\"5\" cols=\"80\">&nbsp;</textarea></td>\n	</tr>\n	<tr>\n		<td class=\"cat\" colspan=\"2\" align=\"center\"><input type=\"submit\" name=\"unbansubmit\" value=\"{L_SUBMIT}\" class=\"btnmain\" />&nbsp; <input type=\"reset\" value=\"{L_RESET}\" class=\"btnlite\" />&nbsp;</td>\n	</tr>\n<!-- ELSE -->\n	<tr>\n		<td class=\"row1\" colspan=\"2\"><b>{L_NO_BAN_CELL}</b></td>\n	</tr>\n<!-- ENDIF -->\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'mcp_footer.html','mcp_ban.html:mcp_forum.html:mcp_front.html:mcp_logs.html:mcp_message.html:mcp_notes_front.html:mcp_notes_user.html:mcp_post.html:mcp_queue.html:mcp_reports.html:mcp_topic.html:mcp_viewlogs.html:mcp_warn_front.html:mcp_warn_list.html:mcp_warn_post.html:mcp_warn_user.html:mcp_whois.html:',1229079038,'\n			</td>\n		</tr>\n	</table>\n\n	<!-- IF PAGINATION -->\n		<table width=\"80%\" align=\"{S_CONTENT_FLOW_END}\" cellspacing=\"1\">\n		<tr>\n			<td class=\"nav\" valign=\"middle\" nowrap=\"nowrap\">&nbsp;{PAGE_NUMBER}<br /></td>\n			<td class=\"gensmall\" nowrap=\"nowrap\">&nbsp;[ <!-- IF TOTAL_TOPICS -->{TOTAL_TOPICS}<!-- ELSEIF TOTAL_POSTS -->{TOTAL_POSTS}<!-- ELSE -->{TOTAL}<!-- ENDIF --> ]&nbsp;</td>\n			<td class=\"gensmall\" width=\"100%\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\"><!-- INCLUDE pagination.html --></td>\n		</tr>\n		</table>\n		<br />\n	<!-- ENDIF -->\n	\n</div>\n\n<br clear=\"all\" />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<br clear=\"all\" />\n\n<div align=\"{S_CONTENT_FLOW_END}\"><!-- INCLUDE jumpbox.html --></div>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'mcp_forum.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<!-- IF S_MERGE_SELECT --><div style=\"float: {S_CONTENT_FLOW_END};\"><!-- INCLUDE jumpbox.html --></div><!-- ENDIF -->\n\n<!-- IF U_VIEW_FORUM_LOGS --><a href=\"{U_VIEW_FORUM_LOGS}\">{L_VIEW_FORUM_LOGS}</a><!-- ENDIF -->\n\n<!-- IF S_MERGE_SELECT --><br clear=\"{S_CONTENT_FLOW_END}\" /><!-- ENDIF -->\n\n<form method=\"post\" id=\"mcp\" action=\"{S_MCP_ACTION}\">\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<td class=\"cat\" colspan=\"6\" align=\"center\"><span class=\"gensmall\">{L_DISPLAY_TOPICS}:</span> {S_SELECT_SORT_DAYS}&nbsp;<span class=\"gensmall\">{L_SORT_BY}</span> {S_SELECT_SORT_KEY} {S_SELECT_SORT_DIR}&nbsp;<input class=\"btnlite\" type=\"submit\" name=\"sort\" value=\"{L_GO}\" /></td>\n</tr>\n<tr>\n	<th width=\"4%\" nowrap=\"nowrap\">&nbsp;</th>\n	<th nowrap=\"nowrap\">&nbsp;{L_TOPICS}&nbsp;</th>\n	<th width=\"8%\" nowrap=\"nowrap\">&nbsp;{L_REPLIES}&nbsp;</th>\n	<th width=\"17%\" nowrap=\"nowrap\">&nbsp;{L_LAST_POST}&nbsp;</th>\n	<th width=\"5%\" nowrap=\"nowrap\">&nbsp;{L_MARK}&nbsp;</th>\n</tr>\n<!-- BEGIN topicrow -->\n	<tr>\n		<td class=\"row1\" width=\"25\" align=\"center\">{topicrow.TOPIC_FOLDER_IMG}</td>\n		<!-- IF S_TOPIC_ICONS -->\n			<!-- td class=\"row1\" width=\"25\" align=\"center\">{topicrow.TOPIC_ICON_IMG}</td -->\n		<!-- ENDIF -->\n		<td class=\"row1\">\n			<!-- IF topicrow.S_SELECT_TOPIC -->\n				<span class=\"genmed\">[ <a href=\"{topicrow.U_SELECT_TOPIC}\">{L_SELECT_MERGE}</a> ]&nbsp;</span>\n			<!-- ENDIF -->\n			<p class=\"topictitle\">{NEWEST_POST_IMG} {topicrow.ATTACH_ICON_IMG} <a href=\"{topicrow.U_VIEW_TOPIC}\">{topicrow.TOPIC_TITLE}</a>\n			<!-- IF topicrow.S_TOPIC_UNAPPROVED or topicrow.S_POSTS_UNAPPROVED -->\n				<a href=\"{topicrow.U_MCP_QUEUE}\">{topicrow.UNAPPROVED_IMG}</a>&nbsp;\n			<!-- ENDIF -->\n			<!-- IF topicrow.S_TOPIC_REPORTED and topicrow.U_MCP_REPORT -->\n				<a href=\"{topicrow.U_MCP_REPORT}\">{REPORTED_IMG}</a>&nbsp;\n			<!-- ENDIF -->\n			<!-- IF topicrow.S_MOVED_TOPIC and S_CAN_DELETE -->\n				[ <a href=\"{topicrow.U_DELETE_TOPIC}\">{L_DELETE_SHADOW_TOPIC}</a> ]&nbsp;\n			<!-- ENDIF -->\n			</p>\n		</td>\n		<td class=\"row1\" width=\"50\" align=\"center\"><p class=\"topicdetails\">{topicrow.REPLIES}</p></td>\n		<td class=\"row1\" width=\"120\" align=\"center\"><p class=\"topicdetails\">{topicrow.LAST_POST_TIME}</p></td>\n		<td class=\"row2\" align=\"center\">\n			<!-- IF not topicrow.S_MOVED_TOPIC and not S_MERGE_SELECT --><input type=\"checkbox\" class=\"radio\" name=\"topic_id_list[]\" value=\"{topicrow.TOPIC_ID}\"<!-- IF topicrow.S_TOPIC_CHECKED --> checked=\"checked\"<!-- ENDIF --> /><!-- ELSE -->&nbsp;<!-- ENDIF -->\n		</td>\n	</tr>\n<!-- BEGINELSE -->\n	<tr>\n		<td class=\"row1\" colspan=\"8\" align=\"center\"><p class=\"gen\">{L_NO_TOPICS}</p></td>\n	</tr>\n<!-- END topicrow -->\n<!-- IF not S_MERGE_SELECT -->\n<tr>\n	<td class=\"cat\" colspan=\"6\" align=\"{S_CONTENT_FLOW_END}\">\n		<select name=\"action\">\n			<option value=\"\" selected=\"selected\">{L_SELECT_ACTION}</option>\n			<!-- IF S_CAN_DELETE --><option value=\"delete_topic\">{L_DELETE}</option><!-- ENDIF -->\n			<!-- IF S_CAN_MERGE --><option value=\"merge_topics\">{L_MERGE}</option><!-- ENDIF -->\n			<!-- IF S_CAN_MOVE --><option value=\"move\">{L_MOVE}</option><!-- ENDIF -->\n			<!-- IF S_CAN_FORK --><option value=\"fork\">{L_FORK}</option><!-- ENDIF -->\n			<!-- IF S_CAN_LOCK --><option value=\"lock\">{L_LOCK}</option><option value=\"unlock\">{L_UNLOCK}</option><!-- ENDIF -->\n			<!-- IF S_CAN_SYNC --><option value=\"resync\">{L_RESYNC}</option><!-- ENDIF -->\n			<!-- IF S_CAN_MAKE_NORMAL --><option value=\"make_normal\">{L_MAKE_NORMAL}</option><!-- ENDIF -->\n			<!-- IF S_CAN_MAKE_STICKY --><option value=\"make_sticky\">{L_MAKE_STICKY}</option><!-- ENDIF -->\n			<!-- IF S_CAN_MAKE_ANNOUNCE -->\n				<option value=\"make_announce\">{L_MAKE_ANNOUNCE}</option>\n				<option value=\"make_global\">{L_MAKE_GLOBAL}</option>\n			<!-- ENDIF -->\n		</select>\n		<input class=\"btnmain\" type=\"submit\" value=\"{L_SUBMIT}\" />\n	</td>\n</tr>\n<!-- ENDIF -->\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<!-- IF not S_MERGE_SELECT -->\n<table width=\"100%\" cellspacing=\"2\" cellpadding=\"2\" border=\"0\" align=\"center\">\n<tr>\n	<td align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\"><b class=\"gensmall\"><a href=\"#\" onclick=\"marklist(\'mcp\', \'topic_id_list\', true); return false;\">{L_MARK_ALL}</a> :: <a href=\"#\" onclick=\"marklist(\'mcp\', \'topic_id_list\', false); return false;\">{L_UNMARK_ALL}</a></b></td>\n</tr>\n</table>\n<!-- ENDIF -->\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'mcp_front.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<!-- IF S_SHOW_UNAPPROVED -->\n	<form name=\"mcp_queue\" method=\"post\" action=\"{S_MCP_QUEUE_ACTION}\">\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<td class=\"row3\" colspan=\"6\" align=\"center\"><b class=\"gen\">{L_LATEST_UNAPPROVED}</b></td>\n	</tr>\n	<tr>\n		<th>&nbsp;{L_FORUM}&nbsp;</th>\n		<th>&nbsp;{L_TOPIC}&nbsp;</th>\n		<th>&nbsp;{L_SUBJECT}&nbsp;</th>\n		<th>&nbsp;{L_AUTHOR}&nbsp;</th>\n		<th>&nbsp;{L_POST_TIME}&nbsp;</th>\n		<th width=\"5%\">&nbsp;{L_SELECT}&nbsp;</th>\n	</tr>\n	<!-- BEGIN unapproved -->\n		<tr>\n			<td class=\"row1\" width=\"15%\" valign=\"top\"><span class=\"gen\"><!-- IF unapproved.U_FORUM --><a href=\"{unapproved.U_FORUM}\">{unapproved.FORUM_NAME}</a><!-- ELSE -->{unapproved.FORUM_NAME}<!-- ENDIF --></span><!-- IF unapproved.U_MCP_FORUM --><br /><span class=\"gensmall\">[ <a href=\"{unapproved.U_MCP_FORUM}\">{L_MODERATE}</a> ]</span><!-- ENDIF --></td>\n			<td class=\"row2\" valign=\"top\"><span class=\"gen\"><a href=\"{unapproved.U_TOPIC}\">{unapproved.TOPIC_TITLE}</a></span><br /><span class=\"gensmall\">[ <a href=\"{unapproved.U_MCP_TOPIC}\">{L_MODERATE}</a> ]</span></td>\n			<td class=\"row1\" valign=\"top\"><span class=\"gen\">{unapproved.SUBJECT}</span><br /><span class=\"gensmall\">[ <a href=\"{unapproved.U_POST_DETAILS}\">{L_VIEW_DETAILS}</a> ]</span></td>\n			<td class=\"row2\" align=\"center\" width=\"15%\" nowrap=\"nowrap\" valign=\"top\"><span class=\"gen\">{unapproved.AUTHOR_FULL}</span></td>\n			<td class=\"row1\" align=\"center\" width=\"15%\" nowrap=\"nowrap\" valign=\"top\"><span class=\"gensmall\">{unapproved.POST_TIME}</span></td>\n			<td class=\"row2\" align=\"center\"><input type=\"checkbox\" class=\"radio\" name=\"post_id_list[]\" value=\"{unapproved.POST_ID}\" /></td>\n		</tr>\n	<!-- BEGINELSE -->\n		<tr>\n			<td class=\"row1\" colspan=\"6\" align=\"center\"><span class=\"gen\">{L_UNAPPROVED_POSTS_ZERO_TOTAL}</span></td>\n		</tr>\n	<!-- END unapproved -->\n	<!-- IF S_HAS_UNAPPROVED_POSTS -->\n		<tr>\n			<td class=\"row3\" colspan=\"6\"><span class=\"gensmall\">{L_UNAPPROVED_TOTAL}</span></td>\n		</tr>\n	<!-- ENDIF -->\n	<tr>\n		<td class=\"cat\" colspan=\"6\" align=\"center\"><input class=\"btnmain\" type=\"submit\" name=\"action[approve]\" value=\"{L_APPROVE}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"submit\" name=\"action[disapprove]\" value=\"{L_DISAPPROVE}\" /></td>\n	</tr>\n	</table>\n	{S_FORM_TOKEN}\n	</form>\n	\n	<table width=\"100%\" cellspacing=\"2\" cellpadding=\"2\" border=\"0\" align=\"center\">\n	<tr>\n		<td align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\"><b class=\"gensmall\"><a href=\"#\" onclick=\"marklist(\'mcp_queue\', \'\', true); return false;\">{L_MARK_ALL}</a> :: <a href=\"#\" onclick=\"marklist(\'mcp_queue\', \'\', false); return false;\">{L_UNMARK_ALL}</a></b></td>\n	</tr>\n	</table>\n\n	<br clear=\"all\" /><br />\n<!-- ENDIF -->\n\n<!-- IF S_SHOW_REPORTS -->\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<td class=\"row3\" colspan=\"5\" align=\"center\"><b class=\"gen\">{L_LATEST_REPORTED}</b></td>\n	</tr>\n	<tr>\n		<th>&nbsp;{L_FORUM}&nbsp;</th>\n		<th>&nbsp;{L_TOPIC}&nbsp;</th>\n		<th>&nbsp;{L_SUBJECT}&nbsp;</th>\n		<th>&nbsp;{L_REPORTER}&nbsp;</th>\n		<th>&nbsp;{L_REPORT_TIME}&nbsp;</th>\n	</tr>\n	<!-- BEGIN report -->\n		<tr>\n			<td class=\"row1\" width=\"15%\" valign=\"top\"><span class=\"gen\"><!-- IF report.U_FORUM --><a href=\"{report.U_FORUM}\">{report.FORUM_NAME}</a><!-- ELSE -->{report.FORUM_NAME}<!-- ENDIF --></span><!-- IF report.U_MCP_FORUM --><br /><span class=\"gensmall\">[ <a href=\"{report.U_MCP_FORUM}\">{L_MODERATE}</a> ]</span><!-- ENDIF --></td>\n			<td class=\"row2\" valign=\"top\"><span class=\"gen\"><a href=\"{report.U_TOPIC}\">{report.TOPIC_TITLE}</a></span><br /><span class=\"gensmall\">[ <a href=\"{report.U_MCP_TOPIC}\">{L_MODERATE}</a> ]</span></td>\n			<td class=\"row1\" valign=\"top\"><span class=\"gen\">{report.SUBJECT}</span><br /><span class=\"gensmall\">[ <a href=\"{report.U_POST_DETAILS}\">{L_VIEW_DETAILS}</a> ]</span></td>\n			<td class=\"row2\" align=\"center\" width=\"15%\" nowrap=\"nowrap\" valign=\"top\"><span class=\"gen\">{report.REPORTER_FULL}</span></td>\n			<td class=\"row1\" align=\"center\" width=\"15%\" nowrap=\"nowrap\" valign=\"top\"><span class=\"gensmall\">{report.REPORT_TIME}</span></td>\n		</tr>\n	<!-- BEGINELSE -->\n		<tr>\n			<td class=\"row1\" colspan=\"5\" align=\"center\"><span class=\"gen\">{L_REPORTS_ZERO_TOTAL}</span></td>\n		</tr>\n	<!-- END report -->\n	<!-- IF S_HAS_REPORTS -->\n		<tr>\n			<td class=\"row3\" colspan=\"5\"><span class=\"gensmall\">{L_REPORTS_TOTAL}</span></td>\n		</tr>\n	<!-- ENDIF -->\n	</table>\n\n	<br clear=\"all\" /><br />\n<!-- ENDIF -->\n\n<!-- IF S_SHOW_LOGS -->\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\" cellpadding=\"4\" border=\"0\" align=\"{S_CONTENT_FLOW_END}\">\n	<tr>\n		<td class=\"row3\" colspan=\"5\" align=\"center\"><b class=\"gen\">{L_LATEST_LOGS}</b></td>\n	</tr>\n	<tr>\n		<th width=\"15%\" nowrap=\"nowrap\">{L_USERNAME}</th>\n		<th width=\"12%\" nowrap=\"nowrap\">{L_IP}</th>\n		<th width=\"45%\" nowrap=\"nowrap\">{L_ACTION}</th>\n		<th nowrap=\"nowrap\"></th>\n		<th width=\"18%\" nowrap=\"nowrap\">{L_TIME}</th>\n	</tr>\n	<!-- BEGIN log -->\n		<tr>\n			<td class=\"row1\" nowrap=\"nowrap\"><span class=\"gen\">{log.USERNAME}</span></td>\n			<td class=\"row1\" align=\"center\" nowrap=\"nowrap\"><span class=\"gen\">{log.IP}</span></td>\n			<td class=\"row1\"><span class=\"genmed\">{log.ACTION}</span></td>\n			<td class=\"row1\" align=\"center\" nowrap=\"nowrap\"><span class=\"gensmall\"><!-- IF log.U_VIEW_TOPIC --><a href=\"{log.U_VIEW_TOPIC}\">{L_VIEW_TOPIC}</a><!-- IF log.U_VIEWLOGS --> | <!-- ENDIF --><!-- ENDIF --><!-- IF log.U_VIEWLOGS --><a href=\"{log.U_VIEWLOGS}\">{L_VIEW_TOPIC_LOGS}</a><!-- ENDIF --></span></td>\n			<td class=\"row1\" align=\"center\" nowrap=\"nowrap\"><span class=\"gensmall\">{log.TIME}</span></td>\n		</tr>\n	<!-- BEGINELSE -->\n		<tr>\n			<td class=\"row1\" colspan=\"5\" align=\"center\"><span class=\"gen\">{L_NO_ENTRIES}</span></td>\n		</tr>\n	<!-- END log -->\n	</table>\n\n	<br clear=\"all\" />\n<!-- ENDIF -->\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'mcp_header.html','mcp_ban.html:mcp_forum.html:mcp_front.html:mcp_logs.html:mcp_message.html:mcp_notes_front.html:mcp_notes_user.html:mcp_post.html:mcp_queue.html:mcp_reports.html:mcp_topic.html:mcp_viewlogs.html:mcp_warn_front.html:mcp_warn_list.html:mcp_warn_post.html:mcp_warn_user.html:mcp_whois.html:',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<div id=\"pageheader\">\n	<!-- IF U_MCP -->\n		<p class=\"linkmcp\">\n			[ <a href=\"{U_MCP}\">{L_MCP}</a><!-- IF U_MCP_FORUM --> | <a href=\"{U_MCP_FORUM}\">{L_MODERATE_FORUM}</a><!-- ENDIF -->\n			<!-- IF U_MCP_TOPIC --> | <a href=\"{U_MCP_TOPIC}\">{L_MODERATE_TOPIC}</a><!-- ENDIF -->\n			<!-- IF U_MCP_POST --> | <a href=\"{U_MCP_POST}\">{L_MODERATE_POST}</a><!-- ENDIF --> ]\n		</p>\n	<!-- ENDIF -->\n\n	<!-- IF TOPIC_TITLE or FORUM_NAME -->\n	<h2><!-- IF TOPIC_TITLE --><a class=\"titles\" href=\"{U_VIEW_TOPIC}\">{TOPIC_TITLE}</a><!-- ELSE --><a class=\"titles\" href=\"{U_VIEW_FORUM}\">{FORUM_NAME}</a><!-- ENDIF --></h2>\n	<!-- ENDIF -->\n</div>\n\n<br clear=\"all\" />\n\n<div id=\"pagecontent\">\n\n	<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n	<tr>\n		<td width=\"20%\" valign=\"top\">\n\n			<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n			<tr>\n				<th>{L_OPTIONS}</th>\n			</tr>\n			<!-- BEGIN l_block1 -->\n				<tr>\n				<!-- IF l_block1.S_SELECTED -->\n					<td class=\"row1\"><b class=\"nav\">{l_block1.L_TITLE}</b>\n\n					<ul class=\"nav\" style=\"margin: 0; padding: 0; list-style-type: none; line-height: 175%;\">\n					<!-- BEGIN l_block2 -->\n						<li>&#187; <!-- IF l_block1.l_block2.S_SELECTED --><b>{l_block1.l_block2.L_TITLE}</b><!-- ELSE --><a href=\"{l_block1.l_block2.U_TITLE}\">{l_block1.l_block2.L_TITLE}</a><!-- ENDIF --></li>\n					<!-- END l_block2 -->\n					</ul>\n				<!-- ELSE -->\n					<td class=\"row2\" nowrap=\"nowrap\" onmouseover=\"this.className=\'row1\'\" onmouseout=\"this.className=\'row2\'\" onclick=\"location.href=this.firstChild.href;\"><a class=\"nav\" href=\"{l_block1.U_TITLE}\">{l_block1.L_TITLE}</a>\n				<!-- ENDIF -->\n					</td>\n				</tr>\n			<!-- END l_block1 -->\n			</table>\n\n		</td>\n		<td><img src=\"images/spacer.gif\" width=\"4\" alt=\"\" /></td>\n		<td width=\"80%\" valign=\"top\">\n\n		<!-- IF MESSAGE -->\n			<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n			<tr>\n				<th>{L_MESSAGE}</th>\n			</tr>\n			<tr>\n				<td class=\"row1\" align=\"center\"><br /><span class=\"gen\">{MESSAGE}<br /><br /><!-- BEGIN return_links -->{return_links.MESSAGE_LINK}<br /><br /><!-- END return_links --></span></td>\n			</tr>\n			</table>\n\n			<br />\n		<!-- ENDIF -->\n\n		<!-- IF CONFIRM_MESSAGE -->\n			<form name=\"confirm\" method=\"post\" action=\"{S_CONFIRM_ACTION}\">\n\n			<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n			<tr>\n				<th>{L_PLEASE_CONFIRM}</th>\n			</tr>\n			<tr>\n				<td class=\"row1\" align=\"center\"><span class=\"gen\"><br />{CONFIRM_MESSAGE}<br /><br />{S_HIDDEN_FIELDS}<input class=\"btnmain\" type=\"submit\" name=\"confirm\" value=\"{L_YES}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"submit\" name=\"cancel\" value=\"{L_NO}\" /><br /><br /></span></td>\n			</tr>\n			</table>\n\n			</form>\n\n			<br />\n		<!-- ENDIF -->\n'),

(2,'mcp_jumpbox.html','',1229079038,'<!-- Note: no longer in use... -->\n\n<form name=\"jumpbox\" method=\"post\" action=\"{S_JUMPBOX_ACTION}\">\n\n	<span class=\"gensmall\">{L_JUMP_TO}:</span>&nbsp;<select name=\"f\" onChange=\"if(this.options[this.selectedIndex].value != -1 && this.options[this.selectedIndex].value != document.jumpbox.current_f.value){ document.forms[\'jumpbox\'].submit() }\">\n\n<!-- IF S_ENABLE_SELECT_ALL -->\n	<option value=\"0\">{L_ALL_FORUMS}</option>\n<!-- ELSE -->\n	<option value=\"-1\">{L_SELECT_FORUM}</option>\n<!-- ENDIF -->\n\n<!-- BEGIN options -->\n	<option value=\"{options.VALUE}\"<!-- IF options.VALUE eq -1 --> class=\"disabled-option\"<!-- ENDIF -->{options.SELECTED}/>{options.TEXT}</option>\n<!-- BEGINELSE -->\n<!-- END options -->\n</select>&nbsp;<input type=\"hidden\" name=\"current_f\" value=\"{S_CURRENT_FORUM}\" /><input name=\"jumpbox\" class=\"btnlite\" type=\"submit\" value=\"{L_GO}\" onclick=\"if(document.jumpbox.f.value == -1){return false;}\" />\n</form>\n'),

(2,'mcp_logs.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<form method=\"post\" name=\"mcp\" action=\"{U_POST_ACTION}\">\n	\n<table width=\"100%\" cellpadding=\"3\" cellspacing=\"1\" border=\"0\" class=\"tablebg\">\n<tr>\n	<th>{L_USERNAME}</th>\n	<th>{L_IP}</th>\n	<th>{L_TIME}</th>\n	<th>{L_ACTION}</th>\n	<!-- IF S_CLEAR_ALLOWED --><th>{L_MARK}</th><!-- ENDIF -->\n</tr>\n<!-- IF S_LOGS -->\n\n	<!-- BEGIN log -->\n		<!-- IF log.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n			<td class=\"genmed\">{log.USERNAME}</td>\n			<td class=\"genmed\" style=\"text-align: center;\">{log.IP}</td>\n			<td class=\"genmed\" style=\"text-align: center;\">{log.DATE}</td>\n			<td class=\"genmed\">{log.ACTION}<br />{log.DATA}</td>\n			<!-- IF S_CLEAR_ALLOWED --><td width=\"5%\" align=\"center\"><input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"{log.ID}\" /></td><!-- ENDIF -->\n		</tr>\n	<!-- END log -->\n	<tr align=\"center\">\n		<td class=\"row3\" colspan=\"<!-- IF S_CLEAR_ALLOWED -->5<!-- ELSE -->4<!-- ENDIF -->\"><span class=\"gensmall\">{L_DISPLAY_LOG}:</span> {S_SELECT_SORT_DAYS}&nbsp;<span class=\"gensmall\">{L_SORT_BY}</span> {S_SELECT_SORT_KEY} {S_SELECT_SORT_DIR}&nbsp;<input class=\"btnlite\" type=\"submit\" value=\"{L_GO}\" name=\"sort\" /></td>\n	</tr>\n	<!-- IF S_CLEAR_ALLOWED -->\n		<tr>\n			<td class=\"cat\" colspan=\"5\" align=\"center\"><input class=\"btnlite\" type=\"submit\" name=\"action[del_all]\" value=\"{L_DELETE_ALL}\" />&nbsp; <input class=\"btnlite\" type=\"submit\" name=\"action[del_marked]\" value=\"{L_DELETE_MARKED}\" /></td>\n		</tr>\n	<!-- ENDIF -->\n<!-- ELSE -->\n	<tr>\n		<td class=\"row1\" colspan=\"<!-- IF S_CLEAR_ALLOWED -->5<!-- ELSE -->4<!-- ENDIF -->\" align=\"center\"><span class=\"gen\">{L_NO_ENTRIES}</span></td>\n	</tr>\n<!-- ENDIF -->\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<br clear=\"all\" /><br />\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'mcp_message.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\" cellpadding=\"4\" border=\"0\" align=\"center\">\n<tr>\n	<th><b>{MESSAGE_TITLE}</b></th>\n</tr>\n<tr> \n	<td class=\"row1\" align=\"center\"><br /><span class=\"gen\">{MESSAGE_TEXT}</span><br /><br /></td>\n</tr>\n</table>\n\n<br clear=\"all\" />\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'mcp_move.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<div id=\"pagecontent\">\n\n	<form name=\"confirm\" action=\"{S_CONFIRM_ACTION}\" method=\"post\">\n	\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th>{MESSAGE_TITLE}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" align=\"center\">\n			<!-- IF ADDITIONAL_MSG -->\n				<span class=\"gen error\">{ADDITIONAL_MSG}</span><br />\n			<!-- ENDIF -->\n			<!-- IF S_FORUM_SELECT -->\n				<span class=\"gen\"><br />{L_SELECT_DESTINATION_FORUM}&nbsp;&nbsp;</span>\n					<select name=\"to_forum_id\">{S_FORUM_SELECT}</select><br />\n				<!-- IF S_CAN_LEAVE_SHADOW -->\n					<input type=\"checkbox\" class=\"radio\" name=\"move_leave_shadow\" checked=\"checked\" /><span class=\"gen\">{L_LEAVE_SHADOW}</span><br />\n				<!-- ENDIF -->\n				<br />{S_HIDDEN_FIELDS}<span class=\"gen\">{MESSAGE_TEXT}</span><br /><br />\n				<input type=\"submit\" name=\"confirm\" value=\"{YES_VALUE}\" class=\"btnmain\" />&nbsp;&nbsp;<input type=\"submit\" name=\"cancel\" value=\"{L_NO}\" class=\"btnlite\" />\n			<!-- ELSE -->\n				<span class=\"gen\">{L_NO_DESTINATION_FORUM}</span><br /><br />\n					{S_HIDDEN_FIELDS}\n					<input type=\"submit\" name=\"cancel\" value=\"{L_CANCEL}\" class=\"btnlite\" />\n			<!-- ENDIF -->\n		</td>\n	</tr>\n	</table>\n	{S_FORM_TOKEN}	\n	</form>\n	\n</div>\n\n<br clear=\"all\" />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<br clear=\"all\" />\n\n<!-- INCLUDE overall_footer.html -->\n'),

(2,'mcp_notes_front.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<form method=\"post\" name=\"mcp\" action=\"{U_POST_ACTION}\">\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\" cellpadding=\"4\" border=\"0\" align=\"center\">\n<tr>\n	<th colspan=\"2\"align=\"center\">{L_SELECT_USER}</th>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"40%\"><b class=\"gen\">{L_FIND_USERNAME}: </b><br /><span class=\"gensmall\">[ <a href=\"{U_FIND_USERNAME}\" onclick=\"find_username(this.href); return false;\">{L_FIND_USERNAME}</a> ]</span></td>\n	<td class=\"row2\"><input type=\"text\" class=\"post\" name=\"username\" size=\"20\" /></td>\n</tr>\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\"><input type=\"submit\" name=\"submituser\" value=\"{L_SUBMIT}\" class=\"btnmain\" /></td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<br clear=\"all\" /><br />\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'mcp_notes_user.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<form method=\"post\" name=\"mcp\" action=\"{U_POST_ACTION}\">\n	\n<table width=\"100%\" cellpadding=\"3\" cellspacing=\"1\" border=\"0\" class=\"tablebg\">\n<tr>\n	<th colspan=\"2\" align=\"center\">{USERNAME}</th>\n</tr>\n<tr> \n	<td class=\"row1\" align=\"center\">\n		<table cellspacing=\"1\" cellpadding=\"2\" border=\"0\">\n		<tr>\n			<td class=\"gen\" align=\"center\"><!-- IF USER_COLOR --><b style=\"color: #{USER_COLOR}\"><!-- ELSE --><b><!-- ENDIF -->{USERNAME}</b></td>\n		</tr>\n		<!-- IF RANK_TITLE -->\n			<tr>\n				<td class=\"postdetails\" align=\"center\">{RANK_TITLE}</td>\n			</tr>\n		<!-- ENDIF -->\n		<!-- IF RANK_IMG -->\n			<tr>\n				<td align=\"center\">{RANK_IMG}</td>\n			</tr>\n		<!-- ENDIF -->\n		<tr>\n			<td align=\"center\"><!-- IF AVATAR_IMG -->{AVATAR_IMG}<!-- ELSE --><img src=\"{T_THEME_PATH}/images/no_avatar.gif\" alt=\"\" /><!-- ENDIF --></td>\n		</tr>\n		</table>\n	</td>\n	<td class=\"row1\">\n		<table width=\"100%\" cellspacing=\"1\" cellpadding=\"2\" border=\"0\">\n		<tr> \n			<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\">{L_JOINED}: </td>\n			<td width=\"100%\"><b class=\"gen\">{JOINED}</b></td>\n		</tr>\n		<tr> \n			<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\">{L_TOTAL_POSTS}: </td>\n			<td><b class=\"gen\">{POSTS}</b></td>\n		</tr>\n		<tr> \n			<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\">{L_WARNINGS}: </td>\n			<td><b class=\"gen\">{WARNINGS}</b></td>\n		</tr>\n		</table>\n	</td>\n</tr>\n</table>\n\n<br />\n\n<table width=\"100%\" cellpadding=\"3\" cellspacing=\"1\" border=\"0\" class=\"tablebg\">\n<tr>\n	<th colspan=\"5\" align=\"center\">{L_FEEDBACK}</th>\n</tr>\n<!-- IF S_USER_NOTES -->\n\n	<tr align=\"center\">\n		<td colspan=\"5\" class=\"row3\"><span class=\"gensmall\">{L_DISPLAY_LOG}:</span> {S_SELECT_SORT_DAYS}&nbsp;<span class=\"gensmall\">{L_SORT_BY}:</span> {S_SELECT_SORT_KEY} {S_SELECT_SORT_DIR}&nbsp;<input class=\"btnlite\" type=\"submit\" value=\"{L_GO}\" name=\"sort\" /></td>\n	</tr>\n	<tr>\n		<th>{L_REPORT_BY}</th>\n		<th>{L_IP}</th>\n		<th>{L_TIME}</th>\n		<th>{L_ACTION}</th>\n		<th><!-- IF S_CLEAR_ALLOWED -->{L_MARK}<!-- ENDIF --></th>\n	</tr>\n\n	<!-- BEGIN usernotes -->\n		<!-- IF usernotes.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n			<td class=\"gen\">{usernotes.REPORT_BY}</td>\n			<td style=\"text-align: center;\">{usernotes.IP}</td>\n			<td style=\"text-align: center;\">{usernotes.REPORT_AT}</td>\n			<td class=\"gen\">\n				{usernotes.ACTION}\n				<!-- IF usernotes.DATA --><br />&#187; <span class=\"gensmall\">[ {usernotes.DATA} ]</span><!-- ENDIF -->\n			</td>\n			<td style=\"text-align: center;\"><!-- IF S_CLEAR_ALLOWED --><input type=\"checkbox\" class=\"radio\" name=\"marknote[]\" value=\"{usernotes.ID}\" /><!-- ENDIF --></td>\n		</tr>\n	<!-- END usernotes -->\n\n	<!-- IF S_CLEAR_ALLOWED -->\n		<tr>\n			<td class=\"cat\" colspan=\"5\" align=\"center\"><input class=\"btnlite\" type=\"submit\" name=\"action[del_all]\" value=\"{L_DELETE_ALL}\" />&nbsp; <input class=\"btnlite\" type=\"submit\" name=\"action[del_marked]\" value=\"{L_DELETE_MARKED}\" /></td>\n		</tr>\n	<!-- ENDIF -->\n\n<!-- ELSE -->\n	<tr>\n		<td class=\"row1\" colspan=\"2\" align=\"center\"><span class=\"gen\">{L_NO_FEEDBACK}</span></td>\n	</tr>\n<!-- ENDIF -->\n</table>\n\n<br clear=\"all\" />\n	\n<table width=\"100%\" cellpadding=\"3\" cellspacing=\"1\" border=\"0\" class=\"tablebg\">\n<tr>\n	<th colspan=\"2\" align=\"center\">{L_ADD_FEEDBACK}</th>\n</tr>\n<tr>\n	<td class=\"row3\" align=\"center\" colspan=\"2\"><span class=\"genmed\">{L_ADD_FEEDBACK_EXPLAIN}</span></td>\n</tr>\n<tr>\n	<td colspan=\"2\" class=\"row1\" align=\"center\"><textarea name=\"usernote\" rows=\"10\" cols=\"76\"></textarea></td>\n</tr>\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\"><input class=\"btnmain\" type=\"submit\" name=\"action[add_feedback]\" value=\"{L_SUBMIT}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" /></td>\n</tr>\n</table>\n\n<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tr>\n	<td class=\"pagination\">{PAGE_NUMBER} [ {TOTAL_REPORTS} ]</td>\n	<td align=\"{S_CONTENT_FLOW_END}\"><span class=\"pagination\"><!-- INCLUDE pagination.html --></span></td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<br clear=\"all\" /><br />\n\n<!-- INCLUDE mcp_footer.html -->');
insert into `phpbb_styles_template_data` values 

(2,'mcp_post.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<!-- IF S_MCP_REPORT -->\n	<form method=\"post\" name=\"mcp_report\" action=\"{S_CLOSE_ACTION}\">\n\n	<table width=\"100%\" cellpadding=\"3\" cellspacing=\"1\" border=\"0\" class=\"tablebg\">\n	<tr>\n		<th colspan=\"2\" align=\"center\">{L_REPORT_DETAILS}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\"><b class=\"gen\">{L_REPORT_REASON}: </b></td>\n		<td class=\"row2\"><span class=\"gen\">{REPORT_REASON_TITLE} &raquo; {REPORT_REASON_DESCRIPTION}</span></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" width=\"20%\"><b class=\"gen\">{L_REPORTER}: </b></td>\n		<td class=\"row2\" width=\"80%\"><span class=\"gen\"<!-- IF REPORTER_COLOUR --> style=\"font-weight: bold; color: {REPORTER_COLOUR};\"<!-- ENDIF -->>{REPORTER_NAME}</span> &nbsp; <span class=\"gen\">[ <!-- IF U_VIEW_REPORTER_PROFILE --><a href=\"{U_VIEW_REPORTER_PROFILE}\">{L_READ_PROFILE}</a><!-- ENDIF --><!-- IF S_USER_NOTES --><!-- IF U_VIEW_REPORTER_PROFILE --> | <!-- ENDIF --><a href=\"{U_MCP_REPORTER_NOTES}\">{L_VIEW_NOTES}</a> | <a href=\"{U_MCP_WARN_REPORTER}\">{L_WARN_USER}</a><!-- ENDIF --> ]</span></td>\n	</tr>\n	<tr>\n		<td class=\"row1\"><b class=\"gen\">{L_REPORTED}: </b></td>\n		<td class=\"row2\"><span class=\"postdetails\">{REPORT_DATE}</span></td>\n	</tr>\n	<!-- IF REPORT_TEXT -->\n		<tr>\n			<th colspan=\"2\" align=\"center\">{L_MORE_INFO}</th>\n		</tr>\n		<tr>\n			<td class=\"row1\" colspan=\"2\"><div class=\"gen\" style=\"overflow: auto; width: 100%; height: 80pt; border: 1px;\">{REPORT_TEXT}</div></td>\n		</tr>\n	<!-- ENDIF -->\n	<tr>\n		<td class=\"cat\" align=\"center\" colspan=\"2\"><!-- IF S_POST_REPORTED --><input class=\"btnmain\" type=\"submit\" value=\"{L_CLOSE_REPORT}\" name=\"action[close]\" /><!-- ELSE -->{L_REPORT_CLOSED}<!-- ENDIF --> &nbsp; <input class=\"btnlite\" type=\"submit\" value=\"{L_DELETE_REPORT}\" name=\"action[delete]\" /></td>\n	</tr>\n	</table>\n\n	<input type=\"hidden\" name=\"report_id_list[]\" value=\"{REPORT_ID}\" />\n	{S_FORM_TOKEN}\n	</form>\n\n	<br clear=\"all\"/>\n<!-- ENDIF -->\n\n<!-- IF S_MCP_QUEUE --><form method=\"post\" name=\"mcp_approve\" action=\"{U_APPROVE_ACTION}\"><!-- ELSE --><form method=\"post\" name=\"mcp_report_details\" action=\"{S_CLOSE_ACTION}\"><!-- ENDIF -->\n\n<table width=\"100%\" cellpadding=\"3\" cellspacing=\"1\" border=\"0\" class=\"tablebg\">\n<tr>\n	<th colspan=\"2\" align=\"center\">{L_POST_DETAILS}</th>\n</tr>\n<tr>\n	<td class=\"row3\" colspan=\"2\" align=\"center\"><span class=\"gensmall\"><!-- IF S_MCP_QUEUE -->{RETURN_QUEUE} | {RETURN_TOPIC_SIMPLE} | {RETURN_POST}<!-- ELSEIF S_MCP_REPORT -->{RETURN_REPORTS} | <a href=\"{U_VIEW_POST}\">{L_VIEW_POST}</a> | <a href=\"{U_VIEW_TOPIC}\">{L_VIEW_TOPIC}</a> | <a href=\"{U_VIEW_FORUM}\">{L_VIEW_FORUM}</a><!-- ELSE -->{RETURN_TOPIC}<!-- ENDIF --></span></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"gen\">{L_POST_SUBJECT}: </b></td>\n	<td class=\"row2\"><span class=\"gen\">{POST_SUBJECT}</span> <!-- IF S_POST_UNAPPROVED --><span class=\"postapprove\">{UNAPPROVED_IMG} <a href=\"{U_MCP_APPROVE}\">{L_POST_UNAPPROVED}</a></span> <!-- ENDIF --> <!-- IF S_POST_REPORTED and not S_MCP_REPORT --><span class=\"postreported\">{REPORTED_IMG} <a href=\"{U_MCP_REPORT}\">{L_POST_REPORTED}</a></span><!-- ENDIF --></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"20%\"><b class=\"gen\">{L_POSTER}: </b></td>\n	<td class=\"row2\" width=\"80%\"><span class=\"gen\"<!-- IF POST_AUTHOR_COLOUR --> style=\"font-weight: bold; color: {POST_AUTHOR_COLOUR}\"<!-- ENDIF -->>{POST_AUTHOR}</span><span class=\"gen\"> &nbsp; [ <!-- IF U_POST_AUTHOR --><a href=\"{U_POST_AUTHOR}\">{L_READ_PROFILE}</a><!-- ENDIF --><!-- IF S_USER_NOTES --><!-- IF U_POST_AUTHOR --> | <!-- ENDIF --><a href=\"{U_MCP_USER_NOTES}\">{L_VIEW_NOTES}</a> <!-- IF U_MCP_WARN_USER -->| <a href=\"{U_MCP_WARN_USER}\">{L_WARN_USER}</a><!-- ENDIF --><!-- ENDIF --> ]</span></td>\n</tr>\n<!-- IF S_CAN_VIEWIP -->\n	<tr>\n		<td class=\"row1\"><b class=\"gen\">{L_THIS_POST_IP}: </b></td>\n		<td class=\"row2\"><span class=\"gen\">\n			<!-- IF U_WHOIS -->\n				<a href=\"{U_WHOIS}\"><!-- IF POST_IPADDR -->{POST_IPADDR}<!-- ELSE -->{POST_IP}<!-- ENDIF --></a> (<!-- IF POST_IPADDR -->{POST_IP}<!-- ELSE --><a href=\"{U_LOOKUP_IP}\">{L_LOOKUP_IP}</a><!-- ENDIF -->)\n			<!-- ELSE -->\n				<!-- IF POST_IPADDR -->{POST_IPADDR} ({POST_IP})<!-- ELSE -->{POST_IP}<!-- IF U_LOOKUP_IP --> (<a href=\"{U_LOOKUP_IP}\">{L_LOOKUP_IP}</a>)<!-- ENDIF --><!-- ENDIF -->\n			<!-- ENDIF -->\n		</span></td>\n	</tr>\n<!-- ENDIF -->\n<tr>\n	<td class=\"row1\"><b class=\"gen\">{L_POSTED}: </b></td>\n	<td class=\"row2\"><span class=\"postdetails\">{POST_DATE}</span></td>\n</tr>\n<tr>\n	<th colspan=\"2\" align=\"center\">{L_PREVIEW}</th>\n</tr>\n<tr>\n	<td class=\"row1\" colspan=\"2\">\n	<!-- IF U_EDIT --><div class=\"gen\" style=\"float: {S_CONTENT_FLOW_END};\"><a href=\"{U_EDIT}\">{EDIT_IMG}</a></div><!-- ENDIF -->\n\n	<div class=\"postbody\">{POST_PREVIEW}</div>\n\n	<!-- IF S_HAS_ATTACHMENTS -->\n		<br clear=\"all\" /><br />\n\n		<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n		<tr>\n			<td class=\"row3\"><b class=\"genmed\">{L_ATTACHMENTS}: </b></td>\n		</tr>\n		<!-- BEGIN attachment -->\n			<tr>\n				<!-- IF attachment.S_ROW_COUNT is even --><td class=\"row2\"><!-- ELSE --><td class=\"row1\"><!-- ENDIF -->{attachment.DISPLAY_ATTACHMENT}</td>\n			</tr>\n		<!-- END attachment -->\n		</table>\n	<!-- ENDIF -->\n\n	</td>\n</tr>\n<!-- IF S_POST_UNAPPROVED and S_MCP_QUEUE -->\n	<tr>\n		<td class=\"cat\" align=\"center\" colspan=\"2\"><input class=\"btnmain\" type=\"submit\" value=\"{L_APPROVE}\" name=\"action[approve]\" /> &nbsp; <input class=\"btnlite\" type=\"submit\" value=\"{L_DISAPPROVE}\" name=\"action[disapprove]\" /></td>\n	</tr>\n	<input type=\"hidden\" name=\"post_id_list[]\" value=\"{POST_ID}\" />\n<!-- ENDIF -->\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<!-- IF S_MCP_QUEUE -->\n	<br clear=\"all\" />\n\n	<!-- IF S_TOPIC_REVIEW --><!-- INCLUDE posting_topic_review.html --><!-- ENDIF -->\n<!-- ELSEIF S_MCP_REPORT -->\n	<br clear=\"all\" />\n\n	<!-- IF S_TOPIC_REVIEW --><!-- INCLUDE posting_topic_review.html --><!-- ENDIF -->\n<!-- ELSE -->\n	<!-- IF S_CAN_LOCK_POST or S_CAN_DELETE_POST or S_CAN_CHGPOSTER -->\n		<br /><a name=\"mod\"></a>\n\n		<table width=\"100%\" cellpadding=\"3\" cellspacing=\"1\" border=\"0\" class=\"tablebg\">\n		<tr>\n			<th colspan=\"2\" align=\"center\">{L_MOD_OPTIONS}</th>\n		</tr>\n		<!-- IF S_CAN_CHGPOSTER -->\n			<tr>\n				<td class=\"row1\" valign=\"top\"><b class=\"gen\">{L_CHANGE_POSTER}</b></td>\n				<td class=\"row2\"><form method=\"post\" name=\"mcp_chgposter\" action=\"{U_POST_ACTION}\"><input class=\"post\" type=\"text\" name=\"username\" value=\"\" /> <input class=\"btnmain\" type=\"submit\" value=\"{L_CONFIRM}\" name=\"action[chgposter]\" /><br /><span class=\"gensmall\">[ <a href=\"{U_FIND_USERNAME}\" onclick=\"find_username(this.href); return false;\">{L_FIND_USERNAME}</a> ]</span><!-- IF S_USER_SELECT --><br /><select name=\"u\">{S_USER_SELECT}</select> <input type=\"submit\" class=\"btnmain\" name=\"action[chgposter_ip]\" value=\"{L_CONFIRM}\" /><!-- ENDIF -->{S_FORM_TOKEN}</form></td>\n			</tr>\n		<!-- ENDIF -->\n		<!-- IF S_CAN_LOCK_POST or S_CAN_DELETE_POST -->\n			<tr>\n				<td class=\"row1\" valign=\"top\"><b class=\"gen\">{L_MOD_OPTIONS}</b></td>\n				<td class=\"row2\"><form method=\"post\" name=\"mcp\" action=\"{U_MCP_ACTION}\"><select name=\"action\"><!-- IF S_CAN_LOCK_POST --><!-- IF S_POST_LOCKED --><option value=\"unlock_post\">{L_UNLOCK_POST} [{L_UNLOCK_POST_EXPLAIN}]</option><!-- ELSE --><option value=\"lock_post\">{L_LOCK_POST} [{L_LOCK_POST_EXPLAIN}]</option><!-- ENDIF --><!-- ENDIF --><!-- IF S_CAN_DELETE_POST --><option value=\"delete_post\">{L_DELETE_POST}</option><!-- ENDIF --></select> <input class=\"btnmain\" type=\"submit\" value=\"{L_SUBMIT}\" />	{S_FORM_TOKEN}</form></td>\n			</tr>\n		<!-- ENDIF -->\n		</table>\n	<!-- ENDIF -->\n\n	<!-- IF S_CAN_VIEWIP -->\n		<br /><a name=\"ip\"></a>\n\n		<table width=\"100%\" cellpadding=\"3\" cellspacing=\"1\" border=\"0\" class=\"tablebg\">\n		<tr>\n			<th colspan=\"2\" align=\"center\">{L_IP_INFO}</th>\n		</tr>\n		<tr>\n			<td colspan=\"2\" class=\"cat\"><b class=\"gen\">{L_OTHER_USERS}</b></td>\n		</tr>\n		<!-- BEGIN userrow -->\n			<!-- IF userrow.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n				<td><span class=\"gen\"><!-- IF userrow.U_PROFILE --><a href=\"{userrow.U_PROFILE}\">{userrow.USERNAME}</a><!-- ELSE -->{userrow.USERNAME}<!-- ENDIF --> [ {userrow.NUM_POSTS} {userrow.L_POST_S} ]</span></td>\n				<td align=\"center\"><a href=\"{userrow.U_SEARCHPOSTS}\">{SEARCH_IMG}</a></td>\n			</tr>\n		<!-- BEGINELSE -->\n			<tr class=\"row1\">\n				<td colspan=\"2\" align=\"center\"><span class=\"gen\">{L_NO_MATCHES_FOUND}</span></td>\n			</tr>\n		<!-- END userrow -->\n		<tr>\n			<td class=\"cat\"><b class=\"gen\">{L_IPS_POSTED_FROM}</b></td>\n			<td class=\"cat\" width=\"10%\" nowrap=\"nowrap\"><!-- IF U_LOOKUP_ALL --><span class=\"gen\">[ <a href=\"{U_LOOKUP_ALL}\">{L_LOOKUP_ALL}</a> ]</span><!-- ENDIF --></td>\n		</tr>\n		<!-- BEGIN iprow -->\n			<!-- IF iprow.S_ROW_COUNT is even -->\n				<tr class=\"row1\">\n			<!-- ELSE -->\n				<tr class=\"row2\">\n			<!-- ENDIF -->\n				<td><span class=\"gen\"><!-- IF iprow.HOSTNAME --><a href=\"{iprow.U_WHOIS}\">{iprow.HOSTNAME}</a> ({iprow.IP})<!-- ELSE --><a href=\"{iprow.U_WHOIS}\">{iprow.IP}</a><!-- ENDIF --> [ {iprow.NUM_POSTS} {iprow.L_POST_S} ]</span></td>\n				<td align=\"center\"><!-- IF iprow.U_LOOKUP_IP --><span class=\"gen\">[ <a href=\"{iprow.U_LOOKUP_IP}\">{L_LOOKUP_IP}</a> ]</span><!-- ENDIF --></td>\n			</tr>\n		<!-- BEGINELSE -->\n			<tr class=\"row1\">\n				<td colspan=\"2\" align=\"center\"><span class=\"gen\">{L_NO_MATCHES_FOUND}</span></td>\n			</tr>\n		<!-- END iprow -->\n		</table>\n	<!-- ENDIF -->\n\n<!-- ENDIF -->\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'mcp_queue.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<form name=\"mcp\" id=\"mcp\" method=\"post\" action=\"{S_MCP_ACTION}\">\n\n<table width=\"100%\" class=\"tablebg\" cellspacing=\"1\" cellpadding=\"4\" border=\"0\">\n<tr>\n	<th colspan=\"4\" nowrap=\"nowrap\">{L_DISPLAY_OPTIONS}</th>\n</tr>\n<tr>\n	<td colspan=\"4\" class=\"cat\" align=\"center\"><span class=\"gensmall\">{L_DISPLAY_ITEMS}:</span> {S_SELECT_SORT_DAYS}&nbsp;<span class=\"gensmall\">{L_SORT_BY}</span> {S_SELECT_SORT_KEY} {S_SELECT_SORT_DIR}&nbsp;<span class=\"gensmall\">{L_FORUM}</span> <select name=\"f\">{S_FORUM_OPTIONS}</select> &nbsp; <!-- IF TOPIC_ID --><input type=\"checkbox\" class=\"radio\" name=\"t\" value=\"{TOPIC_ID}\" checked=\"checked\" />&nbsp; <b>{L_ONLY_TOPIC}</b> &nbsp; <!-- ENDIF --><input class=\"btnlite\" type=\"submit\" name=\"sort\" value=\"{L_GO}\" /></td>\n</tr>\n<tr> \n	<th>&nbsp;<!-- IF S_TOPICS -->{L_TOPIC}<!-- ELSE -->{L_POST}<!-- ENDIF -->&nbsp;</th>\n	<th>&nbsp;{L_AUTHOR}&nbsp;</th>\n	<th>&nbsp;{L_POST_TIME}&nbsp;</th>\n	<th width=\"5%\">&nbsp;{L_SELECT}&nbsp;</th>\n</tr>\n<!-- BEGIN postrow -->\n\n	<!-- IF postrow.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n		<td style=\"padding: 4px;\"><p class=\"topictitle\"><a href=\"{postrow.U_VIEWPOST}\">{postrow.POST_SUBJECT}</a></p>\n			<span class=\"gensmall\"><!-- IF postrow.U_VIEWFORUM -->{L_FORUM}: <a href=\"{postrow.U_VIEWFORUM}\">{postrow.FORUM_NAME}</a><!-- ELSE -->{postrow.FORUM_NAME}<!-- ENDIF --></span></td>\n		<td style=\"padding: 4px;\" align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"top\" nowrap=\"nowrap\"><span class=\"gen\">{postrow.POST_AUTHOR_FULL}</span><br />\n			<span class=\"gensmall\">[ <a href=\"{postrow.U_VIEW_DETAILS}\">{L_VIEW_DETAILS}</a> ]</span></td>\n		<td class=\"postdetails\" style=\"padding: 4px;\" align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"top\" nowrap=\"nowrap\">{postrow.POST_TIME}</td>\n		<td align=\"center\"><input type=\"checkbox\" class=\"radio\" name=\"post_id_list[]\" value=\"{postrow.POST_ID}\" /></td>\n	</tr>\n<!-- BEGINELSE -->\n	<tr>\n		<td class=\"row1\" colspan=\"4\" height=\"30\" align=\"center\" valign=\"middle\"><span class=\"gen\"><!-- IF S_TOPICS -->{L_NO_TOPICS_QUEUE}<!-- ELSE -->{L_UNAPPROVED_POSTS_ZERO_TOTAL}<!-- ENDIF --></span></td>\n	</tr>\n<!-- END postrow -->\n<tr>\n	<td class=\"cat\" colspan=\"4\" align=\"center\"><input class=\"btnmain\" type=\"submit\" name=\"action[approve]\" value=\"{L_APPROVE}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"submit\" name=\"action[disapprove]\" value=\"{L_DISAPPROVE}\" /></td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<table width=\"100%\" cellspacing=\"2\" cellpadding=\"2\" border=\"0\" align=\"center\">\n<tr>\n	<td align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\"><b class=\"gensmall\"><a href=\"#\" onclick=\"marklist(\'mcp\', \'\', true); return false;\">{L_MARK_ALL}</a> :: <a href=\"#\" onclick=\"marklist(\'mcp\', \'\', false); return false;\">{L_UNMARK_ALL}</a></b></td>\n</tr>\n</table>\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'mcp_reports.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<form name=\"mcp\" id=\"mcp\" method=\"post\" action=\"{S_MCP_ACTION}\">\n\n<table width=\"100%\" class=\"tablebg\" cellspacing=\"1\" cellpadding=\"4\" border=\"0\">\n<tr>\n	<th colspan=\"5\" nowrap=\"nowrap\">{L_DISPLAY_OPTIONS}</th>\n</tr>\n<tr>\n	<td colspan=\"5\" class=\"cat\" align=\"center\"><span class=\"gensmall\">{L_DISPLAY_POSTS}:</span> {S_SELECT_SORT_DAYS}&nbsp;<span class=\"gensmall\">{L_SORT_BY}</span> {S_SELECT_SORT_KEY} {S_SELECT_SORT_DIR}&nbsp;<span class=\"gensmall\">{L_FORUM}</span> <select name=\"f\">{S_FORUM_OPTIONS}</select> &nbsp; <!-- IF TOPIC_ID --><input type=\"checkbox\" class=\"radio\" name=\"t\" value=\"{TOPIC_ID}\" checked=\"checked\" />&nbsp; <b>{L_ONLY_TOPIC}</b> &nbsp; <!-- ENDIF --><input class=\"btnlite\" type=\"submit\" name=\"sort\" value=\"{L_GO}\" /></td>\n</tr>\n<tr> \n	<th>&nbsp;{L_POST}&nbsp;</th>\n	<th>&nbsp;{L_AUTHOR}&nbsp;</th>\n	<th>&nbsp;{L_REPORTER}&nbsp;</th>\n	<th>&nbsp;{L_REPORT_TIME}&nbsp;</th>\n	<th width=\"5%\">&nbsp;{L_SELECT}&nbsp;</th>\n</tr>\n<!-- BEGIN postrow -->\n\n	<!-- IF postrow.S_ROW_ is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n		<td style=\"padding: 4px;\"><p class=\"topictitle\"><a href=\"{postrow.U_VIEWPOST}\">{postrow.POST_SUBJECT}</a></p>\n			<span class=\"gensmall\"><!-- IF postrow.U_VIEWFORUM -->{L_FORUM}: <a href=\"{postrow.U_VIEWFORUM}\">{postrow.FORUM_NAME}</a><!-- ELSE -->{postrow.FORUM_NAME}<!-- ENDIF --></span></td>\n		<td style=\"padding: 4px;\" align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"top\" nowrap=\"nowrap\"><span class=\"gen\">{postrow.POST_AUTHOR_FULL}</span><br />\n			<span class=\"gensmall\">{postrow.POST_TIME}</span></td>\n		<td style=\"padding: 4px;\" align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"top\" nowrap=\"nowrap\"><span class=\"gen\">{postrow.REPORTER_FULL}</span></td>\n		<td style=\"padding: 4px;\" align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"top\" nowrap=\"nowrap\"><span class=\"gen\">{postrow.REPORT_TIME}</span><br />\n			<span class=\"gensmall\">[ <a href=\"{postrow.U_VIEW_DETAILS}\">{L_VIEW_DETAILS}</a> ]</span></td>\n		<td align=\"center\"><input type=\"checkbox\" class=\"radio\" name=\"report_id_list[]\" value=\"{postrow.REPORT_ID}\" /></td>\n	</tr>\n<!-- BEGINELSE -->\n	<tr>\n		<td class=\"row1\" colspan=\"5\" height=\"30\" align=\"center\" valign=\"middle\"><span class=\"gen\">{L_NO_POSTS}</span></td>\n	</tr>\n<!-- END postrow -->\n<tr>\n	<td class=\"cat\" colspan=\"5\" align=\"center\">\n	<!-- IF S_CLOSED -->\n		<input class=\"btnmain\" type=\"submit\" value=\"{L_DELETE_REPORTS}\" name=\"action[delete]\" />\n	<!-- ELSE -->\n		<input class=\"btnmain\" type=\"submit\" name=\"action[close]\" value=\"{L_CLOSE_REPORTS}\" /> &nbsp; <input class=\"btnlite\" type=\"submit\" value=\"{L_DELETE_REPORTS}\" name=\"action[delete]\" />\n	<!-- ENDIF -->\n	</td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<table width=\"100%\" cellspacing=\"2\" cellpadding=\"2\" border=\"0\" align=\"center\">\n<tr>\n	<td align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\"><b class=\"gensmall\"><a href=\"#\" onclick=\"marklist(\'mcp\', \'\', true); return false;\">{L_MARK_ALL}</a> :: <a href=\"#\" onclick=\"marklist(\'mcp\', \'\', false); return false;\">{L_UNMARK_ALL}</a></b></td>\n</tr>\n</table>\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'mcp_topic.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<form name=\"mcp\" id=\"mcp\" method=\"post\" action=\"{S_MCP_ACTION}\">\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<!-- IF S_CAN_SPLIT -->\n	<tr>\n		<th colspan=\"3\" nowrap=\"nowrap\">{L_SPLIT_TOPIC}</th>\n	</tr>\n	<tr>\n		<td class=\"row2\" colspan=\"3\" align=\"center\"><span class=\"gensmall\">{L_SPLIT_TOPIC_EXPLAIN}</span></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" nowrap=\"nowrap\"><span class=\"gen\">{L_SPLIT_SUBJECT}</span></td>\n		<td class=\"row2\" colspan=\"2\"><input class=\"post\" style=\"width: 350px\" type=\"text\" size=\"35\" maxlength=\"64\" name=\"subject\" value=\"{SPLIT_SUBJECT}\" /></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" nowrap=\"nowrap\"><span class=\"gen\">{L_SPLIT_FORUM}</span></td>\n		<td class=\"row2\" colspan=\"2\"><select name=\"to_forum_id\">{S_FORUM_SELECT}</select></td>\n	</tr>\n\n	<!-- IF S_SHOW_TOPIC_ICONS -->\n		<tr>\n			<td class=\"row1\"><span class=\"gen\">{L_TOPIC_ICON}</span></td>\n			<td class=\"row2\" colspan=\"2\">\n				<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n				<tr>\n					<td><span class=\"genmed nowrap\"><input type=\"radio\" class=\"radio\" name=\"icon\" value=\"0\"<!-- IF not S_TOPIC_ICON --> checked=\"checked\"<!-- ENDIF --> />{L_NO_TOPIC_ICON}</span> <!-- BEGIN topic_icon --><span class=\"nowrap\"><input type=\"radio\" class=\"radio\" name=\"icon\" value=\"{topic_icon.ICON_ID}\"<!-- IF topic_icon.S_CHECKED --> checked=\"checked\"<!-- ENDIF --> /><img src=\"{topic_icon.ICON_IMG}\" width=\"{topic_icon.ICON_WIDTH}\" height=\"{topic_icon.ICON_HEIGHT}\" alt=\"\" title=\"\" hspace=\"2\" vspace=\"2\" /></span> <!-- END topic_icon --></td>\n				</tr>\n				</table>\n			</td>\n		</tr>\n	<!-- ENDIF -->\n<!-- ENDIF -->\n\n<!-- IF S_CAN_MERGE -->\n	<tr>\n		<th colspan=\"3\" nowrap=\"nowrap\">{L_MERGE_TOPIC}</th>\n	</tr>\n	<tr>\n		<td class=\"row2\" colspan=\"3\" align=\"center\"><span class=\"gensmall\">{L_MERGE_TOPIC_EXPLAIN}</span></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" nowrap=\"nowrap\"><span class=\"gen\">{L_MERGE_TOPIC_ID}</span></td>\n		<td class=\"row2\" colspan=\"2\"><input class=\"post\" type=\"text\" size=\"6\" name=\"to_topic_id\" value=\"{TO_TOPIC_ID}\" /> <a href=\"{U_SELECT_TOPIC}\">{L_SELECT_TOPIC}</a></td>\n	</tr>\n	<!-- IF TO_TOPIC_INFO -->\n		<tr>\n			<td class=\"row3\" colspan=\"3\" align=\"center\"><b class=\"gen\">{TO_TOPIC_INFO}</b></td>\n		</tr>\n	<!-- ENDIF -->\n<!-- ENDIF -->\n<tr>\n	<th colspan=\"3\" nowrap=\"nowrap\">{L_DISPLAY_OPTIONS}</th>\n</tr>\n<tr>\n	<td class=\"row1\" nowrap=\"nowrap\"><span class=\"gen\">{L_POSTS_PER_PAGE}</span><br /><span class=\"gensmall\">{L_POSTS_PER_PAGE_EXPLAIN}</span></td>\n	<td class=\"row2\" colspan=\"2\"><input class=\"post\" type=\"text\" name=\"posts_per_page\" size=\"6\" value=\"{POSTS_PER_PAGE}\" /></td>\n</tr>\n<tr>\n	<td class=\"cat\" colspan=\"3\" align=\"center\"><span class=\"gensmall\">{L_DISPLAY_POSTS}:</span> {S_SELECT_SORT_DAYS}&nbsp;<span class=\"gensmall\">{L_SORT_BY}</span> {S_SELECT_SORT_KEY} {S_SELECT_SORT_DIR}&nbsp;<input class=\"btnlite\" type=\"submit\" name=\"sort\" value=\"{L_GO}\" /></td>\n</tr>\n<tr>\n	<th nowrap=\"nowrap\">{L_AUTHOR}</th>\n	<th nowrap=\"nowrap\">{L_MESSAGE}</th>\n	<th nowrap=\"nowrap\">{L_SELECT}</th>\n</tr>\n<tr>\n	<td class=\"row3\" colspan=\"3\" align=\"center\"><span class=\"gensmall\">{RETURN_TOPIC}</span></td>\n</tr>\n<!-- BEGIN postrow -->\n\n	<!-- IF postrow.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n\n		<td align=\"center\"><b class=\"postauthor\">{postrow.POST_AUTHOR_FULL}</b></td>\n		<td width=\"100%\">\n			<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n			<tr valign=\"top\">\n				<td class=\"gensmall\" nowrap=\"nowrap\">&nbsp;<b>{L_POST_SUBJECT}:</b>&nbsp;</td>\n				<td class=\"gensmall\" width=\"100%\">{postrow.POST_SUBJECT}</td>\n			</tr>\n			</table>\n		</td>\n		<td rowspan=\"2\" width=\"5%\" align=\"center\"><input type=\"checkbox\" class=\"radio\" name=\"post_id_list[]\" value=\"{postrow.POST_ID}\"<!-- IF postrow.S_CHECKED --> checked=\"checked\"<!-- ENDIF --> /></td>\n	</tr>\n\n	<!-- IF postrow.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n\n		<td valign=\"bottom\">\n			<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n			<tr valign=\"middle\">\n				<td align=\"center\"><span class=\"gensmall\">[ <a href=\"{postrow.U_POST_DETAILS}\">{L_POST_DETAILS}</a> ]</span></td>\n			</tr>\n			</table>\n		</td>\n		<td width=\"100%\" valign=\"top\">\n			<table width=\"100%\" cellspacing=\"0\" cellpadding=\"2\" border=\"0\">\n			<tr>\n				<td valign=\"top\">\n					<div class=\"postbody\">{postrow.MESSAGE}</div>\n					<!-- IF postrow.S_HAS_ATTACHMENTS -->\n						<br clear=\"all\" /><br />\n\n						<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n						<tr>\n							<td class=\"row3\"><b class=\"genmed\">{L_ATTACHMENTS}: </b></td>\n						</tr>\n						<!-- BEGIN attachment -->\n							<tr>\n								<!-- IF postrow.attachment.S_ROW_COUNT is even --><td class=\"row2\"><!-- ELSE --><td class=\"row1\"><!-- ENDIF -->{postrow.attachment.DISPLAY_ATTACHMENT}</td>\n							</tr>\n						<!-- END attachment -->\n						</table>\n					<!-- ENDIF -->\n\n				</td>\n			</tr>\n			<tr>\n				<td valign=\"bottom\">\n					<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n					<tr valign=\"middle\">\n						<td width=\"100%\">\n							<!-- IF postrow.S_POST_UNAPPROVED and postrow.U_MCP_APPROVE -->{UNAPPROVED_IMG} <span class=\"postapprove\"><a href=\"{postrow.U_MCP_APPROVE}\">{L_POST_UNAPPROVED}</a></span><!-- ENDIF -->\n							<!-- IF postrow.S_POST_REPORTED and postrow.U_MCP_REPORT -->{REPORTED_IMG}<span class=\"postreported\"><a href=\"{postrow.U_MCP_REPORT}\">{L_POST_REPORTED}</a></span><!-- ENDIF -->\n						</td>\n						<td width=\"10\" nowrap=\"nowrap\">{postrow.MINI_POST_IMG}</td>\n						<td class=\"gensmall\" nowrap=\"nowrap\"><b>{L_POSTED}:</b> {postrow.POST_DATE}</td>\n					</tr>\n					</table>\n				</td>\n			</tr>\n			</table>\n		</td>\n	</tr>\n	<tr>\n		<td class=\"row3\" colspan=\"3\" height=\"1\"><img src=\"images/spacer.gif\" width=\"1\" height=\"1\" alt=\"\" /></td>\n	</tr>\n<!-- END postrow -->\n<tr>\n	<td class=\"cat\" colspan=\"3\" align=\"center\"><select name=\"action\"><option value=\"\" selected=\"selected\">{L_SELECT_ACTION}</option>\n		<!-- IF S_CAN_APPROVE --><option value=\"approve\">{L_APPROVE_POSTS}</option><!-- ENDIF -->\n		<!-- IF S_CAN_LOCK --><option value=\"lock_post\">{L_LOCK_POST_POSTS} [ {L_LOCK_POST_EXPLAIN} ]</option><option value=\"unlock_post\">{L_UNLOCK_POST_POSTS}</option><!-- ENDIF -->\n		<!-- IF S_CAN_DELETE --><option value=\"delete_post\">{L_DELETE_POSTS}</option><!-- ENDIF -->\n		<!-- IF S_CAN_MERGE --><option value=\"merge_posts\"<!-- IF ACTION eq \'merge\' --> selected=\"selected\"<!-- ENDIF -->>{L_MERGE_POSTS}</option><!-- ENDIF -->\n		<!-- IF S_CAN_SPLIT --><option value=\"split_all\"<!-- IF ACTION eq \'split\' --> selected=\"selected\"<!-- ENDIF -->>{L_SPLIT_POSTS}</option><option value=\"split_beyond\">{L_SPLIT_AFTER}</option><!-- ENDIF -->\n	</select>&nbsp;<input class=\"btnmain\" type=\"submit\" name=\"mcp_topic_submit\" value=\"{L_SUBMIT}\" /></td>\n</tr>\n</table>\n{S_HIDDEN_FIELDS}\n{S_FORM_TOKEN}\n</form>\n\n<table width=\"100%\" cellspacing=\"2\" cellpadding=\"2\" border=\"0\" align=\"center\">\n<tr>\n	<td align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\"><b class=\"gensmall\"><a href=\"#\" onclick=\"marklist(\'mcp\', \'\', true); return false;\">{L_MARK_ALL}</a> :: <a href=\"#\" onclick=\"marklist(\'mcp\', \'\', false); return false;\">{L_UNMARK_ALL}</a></b></td>\n</tr>\n</table>\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'mcp_viewlogs.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<form method=\"post\" name=\"mcp\" action=\"{S_MCP_ACTION}\">\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\" cellpadding=\"2\" border=\"0\">\n<tr>\n	<th colspan=\"<!-- IF S_TOPIC_ID -->4<!-- ELSE -->5<!-- ENDIF -->\" nowrap=\"nowrap\">{L_DISPLAY_OPTIONS}</th>\n</tr>\n<tr>\n	<td colspan=\"<!-- IF S_TOPIC_ID -->4<!-- ELSE -->5<!-- ENDIF -->\" class=\"cat\" align=\"center\"><span class=\"gensmall\">{L_DISPLAY_LOG}:</span> {S_SELECT_SORT_DAYS}&nbsp;<span class=\"gensmall\">{L_SORT_BY}</span> {S_SELECT_SORT_KEY} {S_SELECT_SORT_DIR}&nbsp;<input class=\"btnlite\" type=\"submit\" name=\"sort\" value=\"{L_GO}\" /></span></td>\n</tr>\n<tr>\n	<th width=\"15%\" nowrap=\"nowrap\">{L_USERNAME}</th>\n	<th width=\"12%\" nowrap=\"nowrap\">{L_IP}</th>\n	<th width=\"18%\" nowrap=\"nowrap\">{L_TIME}</th>\n	<th width=\"45%\" nowrap=\"nowrap\">{L_ACTION}</th>\n	<!-- IF not S_TOPIC_ID -->\n		<th width=\"8%\" nowrap=\"nowrap\"></th>\n	<!-- ENDIF -->\n</tr>\n<!-- IF S_TOPIC_ID -->\n	<tr>\n		<td class=\"row3\" colspan=\"5\"><span class=\"gensmall\">{L_LOGS_CURRENT_TOPIC} <a href=\"{U_VIEW_TOPIC}\"><b>{TOPIC_NAME}</b></a></span></td>\n	</tr>\n<!-- ENDIF -->\n<!-- BEGIN log -->\n	<tr>\n		<td class=\"row1\" nowrap=\"nowrap\"><span class=\"gen\">{log.USERNAME}</span></td>\n		<td class=\"row1\" align=\"center\" nowrap=\"nowrap\"><span class=\"gen\">{log.IP}</span></td>\n		<td class=\"row1\" align=\"center\" nowrap=\"nowrap\"><span class=\"gensmall\">{log.TIME}</span></td>\n		<td class=\"row1\"><span class=\"gen\">{log.ACTION}</span></td>\n		<!-- IF not S_TOPIC_ID -->\n		<td class=\"row1\" align=\"center\" nowrap=\"nowrap\"><span class=\"gensmall\"><!-- IF log.U_VIEW_TOPIC --><a href=\"{log.U_VIEW_TOPIC}\">{L_VIEW_TOPIC}</a><!-- IF log.U_VIEWLOGS --> | <!-- ENDIF --><!-- ENDIF --><!-- IF log.U_VIEWLOGS --><a href=\"{log.U_VIEWLOGS}\">{L_VIEW_TOPIC_LOGS}</a><!-- ENDIF --></span></td>\n		<!-- ENDIF -->\n	</tr>\n<!-- BEGINELSE -->\n	<tr>\n		<td class=\"row1\" colspan=\"<!-- IF S_TOPIC_ID -->4<!-- ELSE -->5<!-- ENDIF -->\" align=\"center\"><span class=\"gen\">{L_NO_ENTRIES}</span></td>\n	</tr>\n<!-- END log -->\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<table width=\"100%\" cellspacing=\"2\" cellpadding=\"2\" border=\"0\" align=\"center\">\n<tr>\n	<td class=\"nav\" align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"middle\">{PAGE_NUMBER}</td>\n	<td align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\"><!-- INCLUDE pagination.html --></td>\n</tr>\n</table>\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'mcp_warn_front.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<form method=\"post\" name=\"mcp\" action=\"{U_POST_ACTION}\">\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\" border=\"0\" align=\"center\">\n<tr>\n	<th colspan=\"2\"align=\"center\">{L_SELECT_USER}</th>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"40%\"><b class=\"gen\">{L_FIND_USERNAME}: </b><br /><span class=\"gensmall\">[ <a href=\"{U_FIND_USERNAME}\" onclick=\"find_username(this.href); return false;\">{L_FIND_USERNAME}</a> ]</span></td>\n	<td class=\"row2\"><input type=\"text\" class=\"post\" name=\"username\" size=\"20\" /></td>\n</tr>\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\"><input type=\"submit\" name=\"submituser\" value=\"{L_SUBMIT}\" class=\"btnmain\" /></td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<br clear=\"all\" /><br />\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<td class=\"row3\" colspan=\"4\" align=\"center\"><b class=\"gen\">{L_MOST_WARNINGS}</b></td>\n</tr>\n<tr>\n	<th>&nbsp;{L_USERNAME}&nbsp;</th>\n	<th>&nbsp;{L_WARNINGS}&nbsp;</th>\n	<th>&nbsp;{L_LATEST_WARNING_TIME}&nbsp;</th>\n	<th>&nbsp;</th>\n</tr>\n<!-- BEGIN highest -->\n	<tr>\n		<td class=\"row1\" width=\"15%\" valign=\"top\"><span class=\"gen\">{highest.USERNAME_FULL}</span></td>\n		<td class=\"row2\" width=\"15%\" valign=\"top\"><span class=\"gen\">{highest.WARNINGS}</span></td>\n		<td class=\"row1\" width=\"15%\" valign=\"top\"><span class=\"gen\">{highest.WARNING_TIME}</span></td>\n		<td class=\"row2\" width=\"15%\" valign=\"top\"><span class=\"gen\"><a href=\"{highest.U_NOTES}\">{L_VIEW_NOTES}</a></span></td>\n	</tr>\n<!-- BEGINELSE -->\n	<tr>\n		<td class=\"row1\" colspan=\"4\" align=\"center\"><span class=\"gen\">{L_WARNINGS_ZERO_TOTAL}</span></td>\n	</tr>\n<!-- END highest -->\n</table>\n\n<br clear=\"all\" /><br />\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<td class=\"row3\" colspan=\"4\" align=\"center\"><b class=\"gen\">{L_LATEST_WARNINGS}</b></td>\n</tr>\n<tr>\n	<th>&nbsp;{L_USERNAME}&nbsp;</th>\n	<th>&nbsp;{L_TIME}&nbsp;</th>\n	<th>&nbsp;{L_TOTAL_WARNINGS}&nbsp;</th>\n	<th>&nbsp;</th>\n</tr>\n<!-- BEGIN latest -->\n	<tr>\n		<td class=\"row1\" width=\"15%\" valign=\"top\"><span class=\"gen\">{latest.USERNAME_FULL}</span></td>\n		<td class=\"row2\" width=\"15%\" valign=\"top\"><span class=\"gen\">{latest.WARNING_TIME}</span></td>\n		<td class=\"row1\" width=\"15%\" valign=\"top\"><span class=\"gen\">{latest.WARNINGS}</span></td>\n		<td class=\"row2\" width=\"15%\" valign=\"top\"><span class=\"gen\"><a href=\"{latest.U_NOTES}\">{L_VIEW_NOTES}</a></span></td>\n	</tr>\n<!-- BEGINELSE -->\n	<tr>\n		<td class=\"row1\" colspan=\"4\" align=\"center\"><span class=\"gen\">{L_WARNINGS_ZERO_TOTAL}</span></td>\n	</tr>\n<!-- END latest -->\n</table>\n\n<br clear=\"all\" /><br />\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'mcp_warn_list.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<form method=\"post\" name=\"mcp\" action=\"{U_POST_ACTION}\">\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<td class=\"row3\" colspan=\"4\" align=\"center\"><b class=\"gen\">{L_WARNED_USERS}</b></td>\n</tr>\n<tr>\n	<th>&nbsp;{L_USERNAME}&nbsp;</th>\n	<th>&nbsp;{L_WARNINGS}&nbsp;</th>\n	<th>&nbsp;{L_LATEST_WARNING_TIME}&nbsp;</th>\n	<th>&nbsp;</th>\n</tr>\n<!-- BEGIN user -->\n	<tr>\n		<td class=\"row1\" width=\"15%\" valign=\"top\"><span class=\"gen\">{user.USERNAME_FULL}</span></td>\n		<td class=\"row2\" width=\"15%\" valign=\"top\"><span class=\"gen\">{user.WARNINGS}</span></td>\n		<td class=\"row1\" width=\"15%\" valign=\"top\"><span class=\"gen\">{user.WARNING_TIME}</span></td>\n		<td class=\"row2\" width=\"15%\" valign=\"top\"><span class=\"gen\"><a href=\"{user.U_NOTES}\">{L_VIEW_NOTES}</a></span></td>\n	</tr>\n<!-- BEGINELSE -->\n	<tr>\n		<td class=\"row1\" colspan=\"4\" align=\"center\"><span class=\"gen\">{L_WARNINGS_ZERO_TOTAL}</span></td>\n	</tr>\n<!-- END user -->\n<tr align=\"center\">\n	<td class=\"row3\" colspan=\"4\"><span class=\"gensmall\">{L_DISPLAY_POSTS}:</span> {S_SELECT_SORT_DAYS}&nbsp;<span class=\"gensmall\">{L_SORT_BY}</span> {S_SELECT_SORT_KEY} {S_SELECT_SORT_DIR}&nbsp;<input class=\"btnlite\" type=\"submit\" value=\"{L_GO}\" name=\"sort\" /></td>\n</tr>\n</table>\n\n<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tr>\n	<td class=\"pagination\">{PAGE_NUMBER} [ {TOTAL_USERS} ]</td>\n	<td align=\"{S_CONTENT_FLOW_END}\"><span class=\"pagination\"><!-- INCLUDE pagination.html --></span></td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<br clear=\"all\" /><br />\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'mcp_warn_post.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<table width=\"100%\" cellpadding=\"3\" cellspacing=\"1\" border=\"0\" class=\"tablebg\">\n<tr>\n	<th colspan=\"2\" align=\"center\">{L_POST}</th>\n</tr>\n<tr> \n	<td class=\"row1\" align=\"center\">\n		<table cellspacing=\"1\" cellpadding=\"2\" border=\"0\">\n		<tr>\n			<td class=\"gen\" align=\"center\"><!-- IF USER_COLOR --><b style=\"color: #{USER_COLOR}\"><!-- ELSE --><b><!-- ENDIF -->{USERNAME}</b></td>\n		</tr>\n		<!-- IF RANK_TITLE -->\n			<tr>\n				<td class=\"postdetails\" align=\"center\">{RANK_TITLE}</td>\n			</tr>\n		<!-- ENDIF -->\n		<!-- IF RANK_IMG -->\n			<tr>\n				<td align=\"center\">{RANK_IMG}</td>\n			</tr>\n		<!-- ENDIF -->\n		<tr>\n			<td align=\"center\"><!-- IF AVATAR_IMG -->{AVATAR_IMG}<!-- ELSE --><img src=\"{T_THEME_PATH}/images/no_avatar.gif\" alt=\"\" /><!-- ENDIF --></td>\n		</tr>\n		</table>\n	</td>\n	<td class=\"row1\">\n		<span class=\"gen\">{POST}</span>\n	</td>\n</tr>\n</table>\n\n<br clear=\"all\" /><br />\n\n<form method=\"post\" name=\"mcp\" action=\"{U_POST_ACTION}\">\n\n<table width=\"100%\" cellpadding=\"3\" cellspacing=\"1\" border=\"0\" class=\"tablebg\">\n<tr>\n	<th align=\"center\">{L_ADD_WARNING}</th>\n</tr>\n<tr>\n	<td class=\"row3\" align=\"center\"><span class=\"genmed\">{L_ADD_WARNING_EXPLAIN}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\" align=\"center\"><textarea name=\"warning\" rows=\"10\" cols=\"76\">{L_WARNING_POST_DEFAULT}</textarea></td>\n</tr>\n<!-- IF S_CAN_NOTIFY -->\n<tr>\n	<td class=\"row1\" align=\"center\"><input type=\"checkbox\" class=\"radio\" name=\"notify_user\" checked=\"checked\" /><span class=\"genmed\">{L_NOTIFY_USER_WARN}</span></td>\n</tr>\n<!-- ENDIF -->\n<tr>\n	<td class=\"cat\" align=\"center\"><input class=\"btnmain\" type=\"submit\" name=\"action[add_warning]\" value=\"{L_SUBMIT}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" /></td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<br clear=\"all\" /><br />\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'mcp_warn_user.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<table width=\"100%\" cellpadding=\"3\" cellspacing=\"1\" border=\"0\" class=\"tablebg\">\n<tr>\n	<th colspan=\"2\" align=\"center\">{USERNAME}</th>\n</tr>\n<tr> \n	<td class=\"row1\" align=\"center\">\n		<table cellspacing=\"1\" cellpadding=\"2\" border=\"0\">\n		<tr>\n			<td class=\"gen\" align=\"center\"><!-- IF USER_COLOR --><b style=\"color: #{USER_COLOR}\"><!-- ELSE --><b><!-- ENDIF -->{USERNAME}</b></td>\n		</tr>\n		<!-- IF RANK_TITLE -->\n			<tr>\n				<td class=\"postdetails\" align=\"center\">{RANK_TITLE}</td>\n			</tr>\n		<!-- ENDIF -->\n		<!-- IF RANK_IMG -->\n			<tr>\n				<td align=\"center\">{RANK_IMG}</td>\n			</tr>\n		<!-- ENDIF -->\n		<tr>\n			<td align=\"center\"><!-- IF AVATAR_IMG -->{AVATAR_IMG}<!-- ELSE --><img src=\"{T_THEME_PATH}/images/no_avatar.gif\" alt=\"\" /><!-- ENDIF --></td>\n		</tr>\n		</table>\n	</td>\n	<td class=\"row1\">\n		<table width=\"100%\" cellspacing=\"1\" cellpadding=\"2\" border=\"0\">\n		<tr> \n			<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\">{L_JOINED}: </td>\n			<td width=\"100%\"><b class=\"gen\">{JOINED}</b></td>\n		</tr>\n		<tr> \n			<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\">{L_TOTAL_POSTS}: </td>\n			<td><b class=\"gen\">{POSTS}</b></td>\n		</tr>\n		<tr> \n			<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\">{L_WARNINGS}: </td>\n			<td><b class=\"gen\">{WARNINGS}</b></td>\n		</tr>\n		</table>\n	</td>\n</tr>\n</table>\n\n<br clear=\"all\" /><br />\n\n<form method=\"post\" name=\"mcp\" action=\"{U_POST_ACTION}\">\n\n<table width=\"100%\" cellpadding=\"3\" cellspacing=\"1\" border=\"0\" class=\"tablebg\">\n<tr>\n	<th align=\"center\">{L_ADD_WARNING}</th>\n</tr>\n<tr>\n	<td class=\"row3\" align=\"center\"><span class=\"genmed\">{L_ADD_WARNING_EXPLAIN}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\" align=\"center\"><textarea name=\"warning\" rows=\"10\" cols=\"76\"></textarea></td>\n</tr>\n<!-- IF S_CAN_NOTIFY -->\n<tr>\n	<td class=\"row1\" align=\"center\"><input type=\"checkbox\" class=\"radio\" name=\"notify_user\" checked=\"checked\" /><span class=\"genmed\">{L_NOTIFY_USER_WARN}</span></td>\n</tr>\n<!-- ENDIF -->\n<tr>\n	<td class=\"cat\" align=\"center\"><input class=\"btnmain\" type=\"submit\" name=\"action[add_warning]\" value=\"{L_SUBMIT}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" /></td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<br clear=\"all\" /><br />\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'mcp_whois.html','',1229079038,'<!-- INCLUDE mcp_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr> \n	<th>{L_WHOIS}</th>\n</tr>\n<tr>\n	<td class=\"row3\" align=\"center\"><span class=\"gensmall\">{RETURN_POST}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\"><pre>{WHOIS}</pre></td>\n</tr>\n</table>\n\n<!-- INCLUDE mcp_footer.html -->'),

(2,'memberlist_body.html','',1229079038,'<!-- IF S_IN_SEARCH_POPUP -->\n	<!-- INCLUDE simple_header.html -->\n<!-- ELSE -->\n	<!-- INCLUDE overall_header.html -->\n<!-- ENDIF -->\n\n<!-- IF S_SEARCH_USER -->	\n	<!-- INCLUDE memberlist_search.html -->	\n<!-- ENDIF -->\n\n<!-- IF S_SHOW_GROUP --><!-- INCLUDE memberlist_group.html --><!-- ENDIF -->\n\n<!-- IF not S_SHOW_GROUP -->\n	<form method=\"post\" name=\"charsearch\" action=\"{S_MODE_ACTION}\">\n		<table width=\"100%\" cellspacing=\"1\">\n		<tr>\n			<td align=\"{S_CONTENT_FLOW_BEGIN}\"><span class=\"genmed\">{L_USERNAME_BEGINS_WITH}: </span><select name=\"first_char\" onchange=\"this.form.submit();\">{S_CHAR_OPTIONS}</select>&nbsp;<input type=\"submit\" name=\"char\" value=\"{L_DISPLAY}\" class=\"btnlite\" /></td>\n	<!-- IF U_FIND_MEMBER and not S_SEARCH_USER -->\n			<td class=\"genmed\" align=\"{S_CONTENT_FLOW_END}\"><a href=\"{U_FIND_MEMBER}\">{L_FIND_USERNAME}</a></td>\n	<!-- ELSEIF S_SEARCH_USER and U_HIDE_FIND_MEMBER and not S_IN_SEARCH_POPUP -->\n			<td class=\"genmed\" align=\"{S_CONTENT_FLOW_END}\"><a href=\"{U_HIDE_FIND_MEMBER}\">{L_HIDE_MEMBER_SEARCH}</a></td>\n	<!-- ENDIF -->\n		</tr>\n		</table>\n		{S_FORM_TOKEN}\n	</form>\n<!-- ENDIF -->\n\n<!-- IF S_IN_SEARCH_POPUP -->\n	<form method=\"post\" name=\"results\" action=\"{S_MODE_ACTION}\" onsubmit=\"insert_marked(this.user);return false\">\n<!-- ELSE -->\n	<form method=\"post\" action=\"{S_MODE_ACTION}\">\n<!-- ENDIF -->\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th nowrap=\"nowrap\">#</th>\n	<th nowrap=\"nowrap\" width=\"25%\" align=\"{S_CONTENT_FLOW_BEGIN}\"><a href=\"{U_SORT_USERNAME}\">{L_USERNAME}</a></th>\n	<th nowrap=\"nowrap\" width=\"15%\"><a href=\"{U_SORT_JOINED}\">{L_JOINED}</a></th>\n	<th nowrap=\"nowrap\" width=\"10%\"><a href=\"{U_SORT_POSTS}\">{L_POSTS}</a></th>\n	<th nowrap=\"nowrap\" width=\"15%\"><a href=\"{U_SORT_RANK}\">{L_RANK}</a></th>\n	<th nowrap=\"nowrap\" width=\"11%\">{L_SEND_MESSAGE}</th>\n	<th nowrap=\"nowrap\" width=\"11%\"><a href=\"{U_SORT_EMAIL}\">{L_EMAIL}</a></th>\n	<th nowrap=\"nowrap\" width=\"11%\"><a href=\"{U_SORT_WEBSITE}\">{L_WEBSITE}</a></th>\n	<!-- IF S_IN_SEARCH_POPUP and not S_SELECT_SINGLE --><th width=\"2%\" nowrap=\"nowrap\">{L_MARK}</th><!-- ENDIF -->\n</tr>\n<!-- BEGIN memberrow -->\n\n	<!-- IF S_SHOW_GROUP -->\n		<!-- IF memberrow.S_FIRST_ROW and memberrow.S_GROUP_LEADER -->\n			<tr class=\"row3\">\n				<td colspan=\"8\"><b class=\"gensmall\">{L_GROUP_LEADER}</b></td>\n			</tr>\n		<!-- ELSEIF not memberrow.S_GROUP_LEADER and not $S_MEMBER_HEADER -->\n			<tr class=\"row3\">\n				<td colspan=\"8\"><b class=\"gensmall\">{L_GROUP_MEMBERS}</b></td>\n			</tr>\n				<!-- DEFINE $S_MEMBER_HEADER = 1 -->\n		<!-- ENDIF -->\n	<!-- ENDIF -->\n\n	<!-- IF memberrow.S_ROW_COUNT is even --><tr class=\"row2\"><!-- ELSE -->	<tr class=\"row1\"><!-- ENDIF -->\n\n		<td class=\"gen\" align=\"center\">&nbsp;{memberrow.ROW_NUMBER}&nbsp;</td>\n		<td class=\"genmed\" align=\"{S_CONTENT_FLOW_BEGIN}\">{memberrow.USERNAME_FULL}<!-- IF S_SELECT_SINGLE --> [&nbsp;<a href=\"#\" onclick=\"insert_single(\'{memberrow.A_USERNAME}\'); return false;\">{L_SELECT}</a>&nbsp;]<!-- ENDIF --></td>\n		<td class=\"genmed\" align=\"center\" nowrap=\"nowrap\">&nbsp;{memberrow.JOINED}&nbsp;</td>\n		<td class=\"gen\" align=\"center\">{memberrow.POSTS}</td>\n		<td class=\"gen\" align=\"center\"><!-- IF memberrow.RANK_IMG -->{memberrow.RANK_IMG}<!-- ELSE -->{memberrow.RANK_TITLE}<!-- ENDIF --></td>\n		<td class=\"gen\" align=\"center\">&nbsp;<!-- IF memberrow.U_PM --><a href=\"{memberrow.U_PM}\">{PM_IMG}</a><!-- ENDIF -->&nbsp;</td>\n		<td class=\"gen\" align=\"center\">&nbsp;<!-- IF memberrow.U_EMAIL --><a href=\"{memberrow.U_EMAIL}\">{EMAIL_IMG}</a><!-- ENDIF -->&nbsp;</td>\n		<td class=\"gen\" align=\"center\">&nbsp;<!-- IF memberrow.U_WWW --><a href=\"{memberrow.U_WWW}\">{WWW_IMG}</a><!-- ENDIF -->&nbsp;</td>\n		<!-- IF memberrow.S_PROFILE_FIELD1 -->\n			<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->\n			<td class=\"gen\" align=\"center\">&nbsp;{memberrow.PROFILE_FIELD1_VALUE}</td>\n		<!-- ENDIF -->\n		<!-- IF S_IN_SEARCH_POPUP and not S_SELECT_SINGLE --><td align=\"center\"><input type=\"checkbox\" class=\"radio\" name=\"user\" value=\"{memberrow.USERNAME}\" /></td><!-- ENDIF -->\n	</tr>\n\n<!-- BEGINELSE -->\n\n	<tr>\n		<td class=\"row1\" colspan=\"<!-- IF S_IN_SEARCH_POPUP -->9<!-- ELSE -->8<!-- ENDIF -->\" align=\"center\">\n			<span class=\"gen\"><!-- IF S_SHOW_GROUP -->{L_NO_GROUP_MEMBERS}<!-- ELSE -->{L_NO_MEMBERS}<!-- ENDIF --></span>\n		</td>\n	</tr>\n\n<!-- END memberrow -->\n\n<tr>\n	<td class=\"cat\" colspan=\"<!-- IF S_IN_SEARCH_POPUP -->9<!-- ELSE -->8<!-- ENDIF -->\" align=\"center\"><!-- IF S_IN_SEARCH_POPUP and not S_SELECT_SINGLE --><input class=\"btnlite\" type=\"submit\" value=\"{L_SELECT_MARKED}\" /><!-- ELSE --><span class=\"gensmall\">{L_SELECT_SORT_METHOD}:</span>&nbsp;<select name=\"sk\">{S_MODE_SELECT}</select>&nbsp; <span class=\"gensmall\">{L_ORDER}</span>&nbsp;<select name=\"sd\">{S_ORDER_SELECT}</select>&nbsp; <input type=\"submit\" name=\"submit\" value=\"{L_SUBMIT}\" class=\"btnlite\" /><!-- ENDIF --></td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n	\n</form>\n\n<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\">\n<tr>\n	<td class=\"pagination\">{PAGE_NUMBER} [ {TOTAL_USERS} ]</td>\n	<td align=\"{S_CONTENT_FLOW_END}\"><!-- IF S_IN_SEARCH_POPUP and not S_SELECT_SINGLE --><b class=\"nav\"><a href=\"#\" onclick=\"marklist(\'results\', \'user\', true); return false;\">{L_MARK_ALL}</a> :: <a href=\"#\" onclick=\"marklist(\'results\', \'user\', false); return false;\">{L_UNMARK_ALL}</a></b><br /><!-- ENDIF --><span class=\"pagination\"><!-- INCLUDE pagination.html --></span></td>\n</tr>\n</table>\n\n\n\n<!-- IF S_IN_SEARCH_POPUP -->\n	<!-- INCLUDE simple_footer.html -->	\n<!-- ELSE -->\n	<br clear=\"all\" />\n	\n	<!-- INCLUDE breadcrumbs.html -->\n	\n	<br clear=\"all\" />\n	\n	<div align=\"{S_CONTENT_FLOW_END}\"><!-- INCLUDE jumpbox.html --></div>	\n	<!-- INCLUDE overall_footer.html -->\n<!-- ENDIF -->'),

(2,'memberlist_email.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<div id=\"pagecontent\">\n\n	<form action=\"{S_POST_ACTION}\" method=\"post\" name=\"postform\">\n	\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr> \n		<th colspan=\"2\">{L_SEND_EMAIL_USER} {USERNAME}</th>\n	</tr>\n	<!-- IF ERROR_MESSAGE -->\n		<tr>\n			<td class=\"row3\" colspan=\"2\" align=\"center\"><span class=\"error\">{ERROR_MESSAGE}</span></td>\n		</tr>\n	<!-- ENDIF -->\n	<!-- IF S_SEND_USER -->\n		<tr> \n			<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_RECIPIENT}</b></td>\n			<td class=\"row2\" width=\"65%\"><b class=\"genmed\">{USERNAME}</b></td>\n		</tr>\n		<tr> \n			<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_SUBJECT}</b></td>\n			<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"subject\" size=\"50\" tabindex=\"2\" value=\"{SUBJECT}\" /></td>\n		</tr>\n	<!-- ELSE -->\n		<tr>\n			<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_EMAIL_ADDRESS}</b></td>\n			<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"email\" size=\"50\" maxlength=\"100\" value=\"{EMAIL}\" /></td>\n		</tr>\n		<tr> \n			<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_REAL_NAME}</b></td>\n			<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"name\" size=\"50\" value=\"{NAME}\" /></td>\n		</tr>\n		<tr> \n			<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_DEST_LANG}</b><br /><span class=\"gensmall\">{L_DEST_LANG_EXPLAIN}</span></td>\n			<td class=\"row2\"><select name=\"lang\">{S_LANG_OPTIONS}</select></td>\n		</tr>\n	<!-- ENDIF -->\n	<tr> \n		<td class=\"row1\" valign=\"top\"><b class=\"genmed\">{L_MESSAGE_BODY}</b><br /><span class=\"gensmall\">{L_EMAIL_BODY_EXPLAIN}</span></td>\n		<td class=\"row2\"><textarea class=\"post\" name=\"message\" rows=\"15\" cols=\"76\" tabindex=\"3\">{MESSAGE}</textarea></td>\n	</tr>\n	<tr> \n		<td class=\"row1\" valign=\"top\"><span class=\"gen\"><b>{L_OPTIONS}</b></span></td>\n		<td class=\"row2\">\n			<table cellspacing=\"0\" cellpadding=\"1\" border=\"0\">\n			<tr> \n				<td><input type=\"checkbox\" class=\"radio\" name=\"cc_email\" value=\"1\" checked=\"checked\" /></td>\n				<td class=\"gen\">{L_CC_EMAIL}</td>\n			</tr>\n			</table>\n		</td>\n	</tr>\n	<tr>\n		<td class=\"cat\" colspan=\"2\" align=\"center\"><input type=\"submit\" tabindex=\"6\" name=\"submit\" class=\"btnmain\" value=\"{L_SEND_EMAIL}\" /></td>\n	</tr>\n	</table>\n\n	{S_FORM_TOKEN}\n	\n	</form>\n\n</div>\n\n<br clear=\"all\" />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<br clear=\"all\" />\n\n<div style=\"float: {S_CONTENT_FLOW_END};\"><!-- INCLUDE jumpbox.html --></div>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'memberlist_group.html','memberlist_body.html:',1229079038,' \n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr> \n	<th colspan=\"3\">{L_GROUP_INFORMATION}</th>\n</tr>\n<tr> \n	<td class=\"row1\" width=\"20%\"><b class=\"genmed\">{L_GROUP_NAME}:</b></td>\n	<td class=\"row2\"><b class=\"gen\"<!-- IF GROUP_COLOR --> style=\"color:#{GROUP_COLOR}\"<!-- ENDIF -->>{GROUP_NAME}</b></td>\n<!-- IF AVATAR_IMG or RANK_IMG or GROUP_RANK or U_PM -->\n	<td class=\"row1\" width=\"33%\" rowspan=\"2\" align=\"center\"><!-- IF AVATAR_IMG -->{AVATAR_IMG}<br /><!-- ENDIF --><!-- IF RANK_IMG -->{RANK_IMG}<!-- ENDIF --><!-- IF GROUP_RANK --><span class=\"gensmall\">{GROUP_RANK}</span><br /><br /><!-- ENDIF --><!-- IF U_PM --><a href=\"{U_PM}\">{PM_IMG}</a><!-- ENDIF --></td>\n<!-- ENDIF -->\n</tr>\n<tr> \n	<td class=\"row1\" width=\"20%\"><b class=\"genmed\">{L_GROUP_DESC}:</b></td>\n	<td class=\"row2\"><span class=\"gen\">{GROUP_DESC}</span><p class=\"forumdesc\">{GROUP_TYPE}</p></td>\n</tr>\n</table>\n'),

(2,'memberlist_im.html','',1229079038,'<!-- INCLUDE simple_header.html -->\n\n<br clear=\"all\" />\n\n<!-- MSNM info from http://www.cdolive.net/ - doesn\'t seem to work with MSN Messenger -->\n\n<form method=\"post\" action=\"{S_IM_ACTION}\">\n	<table class=\"tablebg\" width=\"95%\" cellspacing=\"1\" cellpadding=\"4\" border=\"0\" align=\"center\">\n	<tr>\n		<th colspan=\"2\">{L_SEND_IM}</th>\n	</tr>\n	<tr>\n		<td class=\"row3\" colspan=\"2\"><span class=\"gensmall\">{L_SEND_IM_EXPLAIN}</span></td>\n	</tr>\n	<tr>\n		<td class=\"row1\"><b class=\"genmed\">{L_IM_RECIPIENT}: </b></td>\n		<td class=\"row2\"><span class=\"gen\"><b>{USERNAME}</b><!-- IF S_SEND_ICQ or S_SEND_AIM or S_SEND_MSNM --> [ {IM_CONTACT} ]<!-- ENDIF --></span> <!-- IF PRESENCE_IMG -->{PRESENCE_IMG}<!-- ENDIF --></td>\n	</tr>\n\n	<!-- IF S_SEND_AIM -->\n		<tr>\n			<td class=\"row1\" colspan=\"2\" align=\"center\"><br /><a class=\"gen\" href=\"{U_AIM_CONTACT}\">{L_IM_ADD_CONTACT}</a><br /><a class=\"gen\" href=\"{U_AIM_MESSAGE}\">{L_IM_SEND_MESSAGE}</a><br /><br /><a class=\"gensmall\" href=\"http://www.aim.com/download.adp\">{L_IM_DOWNLOAD_APP}</a> | <a class=\"gensmall\" href=\"http://aimexpress.oscar.aol.com/aimexpress/launch.adp?Brand=AIM\">{L_IM_AIM_EXPRESS}</a> </td>\n		</tr>\n		<tr>\n			<td class=\"cat\" colspan=\"2\" align=\"center\">&nbsp;</td>\n		</tr>\n	<!-- ENDIF -->\n\n	<!-- IF S_SEND_MSNM -->\n		<tr>\n			<td class=\"row1\" colspan=\"2\" align=\"center\">\n				<object classid=\"clsid:B69003B3-C55E-4B48-836C-BC5946FC3B28\" codetype=\"application/x-oleobject\" id=\"objMessengerApp\" width=\"0\" height=\"0\"></object>\n				<script type=\"text/javascript\">\n				// <![CDATA[\n					var app = document.getElementById(\'objMessengerApp\');\n					\n					/**\n					* Check whether the browser supports this and whether MSNM is connected\n					*/\n					function msn_supported()\n					{\n						// Does the browser support the MSNM object?\n						if (app.MyStatus) \n						{\n							// Is MSNM connected?\n							if (app.MyStatus == 1)\n							{\n								alert(\'{LA_IM_MSNM_CONNECT}\');\n								return false;\n							}\n						}\n						else\n						{\n							alert(\'{LA_IM_MSNM_BROWSER}\');\n							return false;\n						}\n						return true;\n					}\n\n					/**\n					* Add to your contact list\n					*/\n					function add_contact(address)\n					{\n						if (msn_supported())\n						{\n							// Could return an error while MSNM is connecting, don\'t want that\n							try\n							{\n								app.AddContact(0, address);\n							}\n							catch (e)\n							{\n								return;\n							}\n						}\n					}\n\n					/**\n					* Write IM to contact\n					*/\n					function im_contact(address)\n					{\n						if (msn_supported())\n						{\n							// Could return an error while MSNM is connecting, don\'t want that\n							try\n							{\n								app.InstantMessage(address);\n							}\n							catch (e)\n							{\n								return;\n							}\n						}\n					}\n				// ]]>\n				</script>\n	\n				<a class=\"gen\" href=\"#\" onclick=\"add_contact(\'{A_IM_CONTACT}\'); return false;\">{L_IM_ADD_CONTACT}</a><br /><a class=\"gen\" href=\"#\" onclick=\"im_contact(\'{A_IM_CONTACT}\'); return false;\">{L_IM_SEND_MESSAGE}</a>\n			</td>\n		</tr>\n		<tr>\n			<td class=\"cat\" colspan=\"2\" align=\"center\">&nbsp;</td>\n		</tr>\n	<!-- ENDIF -->\n\n	<!-- IF S_SEND_JABBER -->\n		<tr>\n			<td class=\"row1\"><b class=\"genmed\">{L_IM_MESSAGE}: </b></td>\n			<td class=\"row2\"><textarea class=\"post\" name=\"message\" rows=\"5\" cols=\"45\"></textarea></td>\n		</tr>\n		<tr>\n			<td class=\"cat\" colspan=\"2\" align=\"center\"><input class=\"btnmain\" name=\"submit\" type=\"submit\" value=\"{L_IM_SEND}\" /></td>\n		</tr>\n	<!-- ENDIF -->\n\n	<!-- IF S_NO_SEND_JABBER -->\n		<tr>\n			<td class=\"row1\" colspan=\"2\"><span class=\"genmed\">{L_IM_NO_JABBER}</span></td>\n		</tr>\n	<!-- ENDIF -->\n\n	<!-- IF S_SENT_JABBER -->\n		<tr>\n			<td class=\"row1\" colspan=\"2\" align=\"center\"><span class=\"gen\">{L_IM_SENT_JABBER}</span></td>\n		</tr>\n		<tr>\n			<td class=\"cat\" colspan=\"2\" align=\"center\"></td>\n		</tr>\n	<!-- ENDIF -->\n\n	</table>\n	<a class=\"nav\" href=\"#\" onclick=\"window.close(); return false;\">{L_CLOSE_WINDOW}</a>\n{S_FORM_TOKEN}\n</form>\n\n\n<!-- INCLUDE simple_footer.html -->'),

(2,'memberlist_leaders.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<form method=\"post\" action=\"{S_MODE_ACTION}\">\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th nowrap=\"nowrap\" width=\"20%\">{L_USERNAME}</th>\n	<th nowrap=\"nowrap\" width=\"25%\">{L_FORUMS}</th>\n	<th nowrap=\"nowrap\" width=\"20%\">{L_PRIMARY_GROUP}</th>\n	<th nowrap=\"nowrap\" width=\"15%\">{L_RANK}</th>\n	<th nowrap=\"nowrap\" width=\"11%\">{L_SEND_MESSAGE}</th>\n</tr>\n<tr class=\"row3\">\n	<td colspan=\"5\"><b class=\"gensmall\">{L_ADMINISTRATORS}</b></td>\n</tr>\n<!-- BEGIN admin -->\n	<!-- IF admin.S_ROW_COUNT is even --><tr class=\"row2\"><!-- ELSE --><tr class=\"row1\"><!-- ENDIF -->\n\n	<td class=\"gen\" align=\"center\"><strong>{admin.USERNAME_FULL}</strong></td>\n	<td class=\"gensmall\" align=\"center\">&nbsp;</td>\n	<td class=\"gensmall\" align=\"center\" nowrap=\"nowrap\">&nbsp;\n		<!-- IF admin.U_GROUP -->\n			<a<!-- IF admin.GROUP_COLOR --> style=\"font-weight: bold; color:#{admin.GROUP_COLOR}\"<!-- ENDIF --> href=\"{admin.U_GROUP}\">{admin.GROUP_NAME}</a>\n		<!-- ELSE -->\n			{admin.GROUP_NAME}\n		<!-- ENDIF -->\n	&nbsp;</td>\n	<td class=\"gen\" align=\"center\"><!-- IF admin.RANK_IMG -->{admin.RANK_IMG}<!-- ELSE -->{admin.RANK_TITLE}<!-- ENDIF --></td>\n	<td class=\"gen\" align=\"center\">&nbsp;<!-- IF admin.U_PM --><a href=\"{admin.U_PM}\">{PM_IMG}</a><!-- ENDIF -->&nbsp;</td>\n</tr>\n<!-- BEGINELSE -->\n	<tr>\n		<td class=\"row1\" colspan=\"5\" align=\"center\"><span class=\"gen\">{L_NO_ADMINISTRATORS}</span></td>\n	</tr>\n<!-- END admin -->\n<tr class=\"row3\">\n	<td colspan=\"5\"><b class=\"gensmall\">{L_MODERATORS}</b></td>\n</tr>\n<!-- BEGIN mod -->\n	<!-- IF mod.S_ROW_COUNT is even --><tr class=\"row2\"><!-- ELSE --><tr class=\"row1\"><!-- ENDIF -->\n\n	<td class=\"gen\" align=\"center\"><strong>{mod.USERNAME_FULL}</strong></td>\n	<td align=\"center\"><!-- IF not mod.FORUMS -->{L_ALL_FORUMS}<!-- ELSE --><select style=\"width: 200px;\">{mod.FORUMS}</select><!-- ENDIF -->&nbsp;</td>\n	<td class=\"gensmall\" align=\"center\" nowrap=\"nowrap\">&nbsp;\n		<!-- IF mod.U_GROUP -->\n			<a<!-- IF mod.GROUP_COLOR --> style=\"font-weight: bold; color:#{mod.GROUP_COLOR}\"<!-- ENDIF --> href=\"{mod.U_GROUP}\">{mod.GROUP_NAME}</a>\n		<!-- ELSE -->\n			{mod.GROUP_NAME}\n		<!-- ENDIF -->\n	&nbsp;</td>\n	<td class=\"gen\" align=\"center\"><!-- IF mod.RANK_IMG -->{mod.RANK_IMG}<!-- ELSE -->{mod.RANK_TITLE}<!-- ENDIF --></td>\n	<td class=\"gen\" align=\"center\">&nbsp;<!-- IF mod.U_PM --><a href=\"{mod.U_PM}\">{PM_IMG}</a><!-- ENDIF -->&nbsp;</td>\n</tr>\n<!-- BEGINELSE -->\n	<tr>\n		<td class=\"row1\" colspan=\"5\" align=\"center\"><span class=\"gen\">{L_NO_MODERATORS}</span></td>\n	</tr>\n<!-- END mod -->\n</table>\n\n</form>\n\n<br clear=\"all\" />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<br clear=\"all\" />\n\n<div style=\"float: {S_CONTENT_FLOW_END};\"><!-- INCLUDE jumpbox.html --></div>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'memberlist_search.html','memberlist_body.html:',1229079038,'<!-- You should retain this javascript in your own template! -->\n\n<!-- IF S_IN_SEARCH_POPUP -->\n	<script type=\"text/javascript\">\n	// <![CDATA[\n		function insert_user(user)\n		{\n			opener.document.forms[\'{S_FORM_NAME}\'].{S_FIELD_NAME}.value = ( opener.document.forms[\'{S_FORM_NAME}\'].{S_FIELD_NAME}.value.length && opener.document.forms[\'{S_FORM_NAME}\'].{S_FIELD_NAME}.type == \"textarea\" ) ? opener.document.forms[\'{S_FORM_NAME}\'].{S_FIELD_NAME}.value + \"\\n\" + user : user;\n		}\n\n		function insert_marked(users)\n		{\n			if (typeof(users.length) == \"undefined\")\n			{\n				if (users.checked)\n				{\n					insert_user(users.value);\n				}\n			}\n			else if (users.length > 0)\n			{\n				for (i = 0; i < users.length; i++)\n				{\n					if (users[i].checked)\n					{\n						insert_user(users[i].value);\n					}\n				}\n			}\n\n			self.close();\n		}\n\n		function insert_single(user)\n		{\n			opener.document.forms[\'{S_FORM_NAME}\'].{S_FIELD_NAME}.value = user;\n			self.close();\n		}		\n\n		/**\n		* Mark/unmark checklist\n		* id = ID of parent container, name = name prefix, state = state [true/false]\n		*/\n		function marklist(id, name, state)\n		{\n			var parent = document.getElementById(id);\n			if (!parent)\n			{\n				eval(\'parent = document.\' + id);\n			}\n\n			if (!parent)\n			{\n				return;\n			}\n\n			var rb = parent.getElementsByTagName(\'input\');\n			\n			for (var r = 0; r < rb.length; r++)\n			{\n				if (rb[r].name.substr(0, name.length) == name)\n				{\n					rb[r].checked = state;\n				}\n			}\n		}\n	// ]]>\n	</script>\n<!-- ENDIF -->\n\n<form method=\"post\" action=\"{S_MODE_ACTION}\" name=\"search\">\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"4\">{L_FIND_USERNAME}</th>\n</tr>\n<tr>\n	<td class=\"row3\" colspan=\"4\"><span class=\"gensmall\">{L_FIND_USERNAME_EXPLAIN}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_USERNAME}:</b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"username\" value=\"{USERNAME}\" /></td>\n	<td class=\"row1\"><b class=\"genmed\">{L_ICQ}:</b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"icq\" value=\"{ICQ}\" /></td>\n</tr>\n<tr>\n<!-- IF S_EMAIL_SEARCH_ALLOWED -->\n	<td class=\"row1\"><b class=\"genmed\">{L_EMAIL}:</b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"email\" value=\"{EMAIL}\" /></td>\n<!-- ELSE -->\n	<td colspan=\"2\" class=\"row1\">&nbsp;</td>\n<!-- ENDIF -->\n	<td class=\"row1\"><b class=\"genmed\">{L_AIM}:</b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"aim\" value=\"{AIM}\" /></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_JOINED}:</b></td>\n	<td class=\"row2\"><select name=\"joined_select\">{S_JOINED_TIME_OPTIONS}</select> <input class=\"post\" type=\"text\" name=\"joined\" value=\"{JOINED}\" /></td>\n	<td class=\"row1\"><b class=\"genmed\">{L_YIM}:</b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"yahoo\" value=\"{YAHOO}\" /></td>\n</tr>\n<tr>\n<!-- IF S_VIEWONLINE -->\n	<td class=\"row1\"><b class=\"genmed\">{L_LAST_ACTIVE}:</b></td>\n	<td class=\"row2\"><select name=\"active_select\">{S_ACTIVE_TIME_OPTIONS}</select> <input class=\"post\" type=\"text\" name=\"active\" value=\"{ACTIVE}\" /></td>\n<!-- ELSE -->\n	<td colspan=\"2\" class=\"row1\">&nbsp;</td>\n<!-- ENDIF -->\n	<td class=\"row1\"><b class=\"genmed\">{L_MSNM}:</b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"msn\" value=\"{MSNM}\" /></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_POSTS}:</b></td>\n	<td class=\"row2\"><select name=\"count_select\">{S_COUNT_OPTIONS}</select> <input class=\"post\" type=\"text\" name=\"count\" value=\"{COUNT}\" /></td>\n	<td class=\"row1\"><b class=\"genmed\">{L_JABBER}:</b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"jabber\" value=\"{JABBER}\" /></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_SORT_BY}:</b></td>\n	<td class=\"row2\" nowrap=\"nowrap\"><select name=\"sk\">{S_SORT_OPTIONS}</select> <select name=\"sd\">{S_ORDER_SELECT}</select>&nbsp;</td>\n<!-- IF S_IP_SEARCH_ALLOWED -->\n	<td class=\"row1\"><b class=\"genmed\">{L_POST_IP}:</b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"ip\" value=\"{IP}\" /></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_GROUP}:</b></td>\n	<td class=\"row2\" nowrap=\"nowrap\"><select name=\"search_group_id\">{S_GROUP_SELECT}</select></td>\n	<td class=\"row1\">&nbsp;</td>\n	<td class=\"row2\">&nbsp;</td>\n</tr>\n<!-- ELSE -->\n	<td class=\"row1\"><b class=\"genmed\">{L_GROUP}:</b></td>\n	<td class=\"row2\" nowrap=\"nowrap\"><select name=\"search_group_id\">{S_GROUP_SELECT}</select></td>\n</tr>\n<!-- ENDIF -->\n<tr>\n	<td class=\"cat\" colspan=\"4\" align=\"center\"><input class=\"btnmain\" type=\"submit\" name=\"submit\" value=\"{L_SEARCH}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" /></td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<br clear=\"all\" />\n');
insert into `phpbb_styles_template_data` values 

(2,'memberlist_view.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<div id=\"pagecontent\">\n\n	<form method=\"post\" action=\"{S_PROFILE_ACTION}\">\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th colspan=\"2\" nowrap=\"nowrap\">{L_VIEWING_PROFILE}</th>\n	</tr>\n	<tr>\n		<td class=\"cat\" width=\"40%\" align=\"center\"><h4>{L_USER_PRESENCE}</h4></td>\n		<td class=\"cat\" width=\"60%\" align=\"center\"><h4>{L_USER_FORUM}</h4></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" align=\"center\">\n\n			<table cellspacing=\"1\" cellpadding=\"2\" border=\"0\">\n			<!-- IF S_USER_INACTIVE -->\n			<tr>\n				<td align=\"center\" style=\"color: red;\"><b class=\"gen\">{L_USER_IS_INACTIVE}</b><br />{L_INACTIVE_REASON}: {USER_INACTIVE_REASON}<br /><br /></td>\n			</tr>\n			<!-- ENDIF -->\n			<tr>\n				<td align=\"center\"><!-- IF USER_COLOR --><b class=\"gen\" style=\"color: {USER_COLOR}\"><!-- ELSE --><b class=\"gen\"><!-- ENDIF -->{USERNAME}</b><!-- IF U_USER_BAN --><span class=\"genmed\"> [ <a href=\"{U_USER_BAN}\">{L_USER_BAN}</a> ]</span><!-- ENDIF --><!-- IF U_USER_ADMIN --><span class=\"genmed\"> [ <a href=\"{U_USER_ADMIN}\">{L_USER_ADMIN}</a> ]</span><!-- ENDIF --></td>\n			</tr>\n			<!-- IF RANK_TITLE -->\n				<tr>\n					<td class=\"postdetails\" align=\"center\">{RANK_TITLE}</td>\n				</tr>\n			<!-- ENDIF -->\n			<!-- IF RANK_IMG -->\n				<tr>\n					<td align=\"center\">{RANK_IMG}</td>\n				</tr>\n			<!-- ENDIF -->\n			<!-- IF AVATAR_IMG -->\n				<tr>\n					<td align=\"center\">{AVATAR_IMG}</td>\n				</tr>\n			<!-- ENDIF -->\n			<!-- IF ONLINE_IMG -->\n			<tr>\n				<td align=\"center\">{ONLINE_IMG}</td>\n			</tr>\n			<!-- ENDIF -->\n			<!-- IF U_SWITCH_PERMISSIONS -->\n				<tr>\n					<td class=\"genmed\" align=\"center\">[ <a href=\"{U_SWITCH_PERMISSIONS}\">{L_USE_PERMISSIONS}</a> ]</td>\n				</tr>\n			<!-- ENDIF -->\n			<!-- IF S_USER_LOGGED_IN and S_ZEBRA -->\n				<tr>\n					<td class=\"genmed\" align=\"center\">[ <!-- IF U_ADD_FRIEND and U_ADD_FOE--><a href=\"{U_ADD_FRIEND}\">{L_ADD_FRIEND}</a> | <a href=\"{U_ADD_FOE}\">{L_ADD_FOE}</a><!-- ENDIF --><!-- IF U_REMOVE_FRIEND --><a href=\"{U_REMOVE_FRIEND}\">{L_REMOVE_FRIEND}</a><!-- ENDIF --><!-- IF U_REMOVE_FOE --><a href=\"{U_REMOVE_FOE}\">{L_REMOVE_FOE}</a><!-- ENDIF --> ]</td>\n				</tr>\n			<!-- ENDIF -->\n			</table>\n		</td>\n		<td class=\"row1\">\n			<table width=\"100%\" cellspacing=\"1\" cellpadding=\"2\" border=\"0\">\n			<tr>\n				<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\">{L_JOINED}: </td>\n				<td width=\"100%\"><b class=\"gen\">{JOINED}</b></td>\n			</tr>\n			<tr>\n				<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\">{L_VISITED}: </td>\n				<td width=\"100%\"><b class=\"gen\">{VISITED}</b></td>\n			</tr>\n			<!-- IF U_NOTES or U_WARN -->\n				<tr>\n					<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\">{L_WARNINGS}: </td>\n					<td width=\"100%\"><b class=\"gen\">{WARNINGS}</b><br /><span class=\"genmed\">[ <a href=\"{U_NOTES}\">{L_VIEW_NOTES}</a> <!-- IF U_WARN --> | <a href=\"{U_WARN}\">{L_WARN_USER}</a> <!-- ENDIF -->]</span></td>\n				</tr>\n			<!-- ENDIF -->\n			<tr>\n				<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\">{L_TOTAL_POSTS}: </td>\n				<td><b class=\"gen\">{POSTS}</b><span class=\"genmed\"><!-- IF POSTS_PCT --><br />[{POSTS_PCT} / {POSTS_DAY}]<!-- ENDIF -->\n				<!-- IF POSTS_IN_QUEUE and U_MCP_QUEUE --><br />[<a href=\"{U_MCP_QUEUE}\">{L_POSTS_IN_QUEUE}</a>]<!-- ELSEIF POSTS_IN_QUEUE --><br />[{L_POSTS_IN_QUEUE}]<!-- ENDIF -->\n				<br /><a href=\"{U_SEARCH_USER}\">{L_SEARCH_USER_POSTS}</a></span></td>\n			</tr>\n			<!-- IF S_SHOW_ACTIVITY -->\n				<tr>\n					<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\">{L_ACTIVE_IN_FORUM}: </td>\n					<td><!-- IF ACTIVE_FORUM --><b><a class=\"gen\" href=\"{U_ACTIVE_FORUM}\">{ACTIVE_FORUM}</a></b><br /><span class=\"genmed\">[ {ACTIVE_FORUM_POSTS} / {ACTIVE_FORUM_PCT} ]</span><!-- ELSE --><span class=\"gen\">-</span><!-- ENDIF --></td>\n				</tr>\n				<tr>\n					<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\">{L_ACTIVE_IN_TOPIC}: </td>\n					<td><!-- IF ACTIVE_TOPIC --><b><a class=\"gen\" href=\"{U_ACTIVE_TOPIC}\">{ACTIVE_TOPIC}</a></b><br /><span class=\"genmed\">[ {ACTIVE_TOPIC_POSTS} / {ACTIVE_TOPIC_PCT} ]</span><!-- ELSE --><span class=\"gen\">-</span><!-- ENDIF --></td>\n				</tr>\n			<!-- ENDIF -->\n			</table>\n		</td>\n	</tr>\n	<tr>\n		<td class=\"cat\" align=\"center\"><h4>{L_CONTACT_USER}</h4></td>\n		<td class=\"cat\" align=\"center\"><h4>{L_ABOUT_USER}</h4></td>\n	</tr>\n	<tr>\n		<td class=\"row1\">\n			<table width=\"100%\" cellspacing=\"1\" cellpadding=\"2\" border=\"0\">\n			<tr>\n				<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\">{L_EMAIL_ADDRESS}: </td>\n				<td width=\"100%\"><!-- IF U_EMAIL --><a href=\"{U_EMAIL}\">{EMAIL_IMG}</a><!-- ENDIF --></td>\n			</tr>\n			<!-- IF U_PM -->\n				<tr>\n					<td class=\"gen\" nowrap=\"nowrap\" align=\"{S_CONTENT_FLOW_END}\">{L_PM}: </td>\n					<td><a href=\"{U_PM}\">{PM_IMG}</a></td>\n				</tr>\n			<!-- ENDIF -->\n			<tr>\n				<td class=\"gen\" nowrap=\"nowrap\" align=\"{S_CONTENT_FLOW_END}\">{L_MSNM}: </td>\n				<td><!-- IF U_MSN --><a href=\"{U_MSN}\" onclick=\"popup(this.href, 550, 320); return false\">{MSN_IMG}</a><!-- ELSEIF USER_MSN -->{USER_MSN}<!-- ENDIF --></td>\n			</tr>\n			<tr>\n				<td class=\"gen\" nowrap=\"nowrap\" align=\"{S_CONTENT_FLOW_END}\">{L_YIM}: </td>\n				<td><!-- IF U_YIM --><a href=\"{U_YIM}\" onclick=\"popup(this.href, 780, 550); return false\">{YIM_IMG}</a><!-- ELSEIF USER_YIM -->{USER_YIM}<!-- ENDIF --></td>\n			</tr>\n			<tr>\n				<td class=\"gen\" nowrap=\"nowrap\" align=\"{S_CONTENT_FLOW_END}\">{L_AIM}: </td>\n				<td><!-- IF U_AIM --><a href=\"{U_AIM}\" onclick=\"popup(this.href, 550, 320); return false\">{AIM_IMG}</a><!-- ELSEIF USER_AIM -->{USER_AIM}<!-- ENDIF --></td>\n			</tr>\n			<tr>\n				<td class=\"gen\" nowrap=\"nowrap\" align=\"{S_CONTENT_FLOW_END}\">{L_ICQ}: </td>\n				<td><!-- IF U_ICQ --><a href=\"{U_ICQ}\" onclick=\"popup(this.href, 550, 320); return false\">{ICQ_IMG}</a><!-- ELSEIF USER_ICQ -->{USER_ICQ}<!-- ENDIF --></td>\n			</tr>\n			<tr>\n				<td class=\"gen\" nowrap=\"nowrap\" align=\"{S_CONTENT_FLOW_END}\">{L_JABBER}: </td>\n				<td><!-- IF U_JABBER and S_JABBER_ENABLED --><a href=\"{U_JABBER}\" onclick=\"popup(this.href, 550, 320); return false\">{JABBER_IMG}</a><!-- ELSEIF USER_JABBER -->{USER_JABBER_IMG}<!-- ENDIF --></td>\n			</tr>\n			</table>\n		</td>\n		<td class=\"row1\">\n			<table cellspacing=\"1\" cellpadding=\"2\" border=\"0\">\n			<tr>\n				<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\">{L_USERGROUPS}: </td>\n				<td><select name=\"g\">{S_GROUP_OPTIONS}</select> <input class=\"btnlite\" type=\"submit\" name=\"submit\" value=\"{L_GO}\" /></td>\n			</tr>\n			<tr>\n				<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\">{L_LOCATION}: </td>\n				<td><!-- IF LOCATION --><b class=\"genmed\">{LOCATION}</b><!-- ENDIF --></td>\n			</tr>\n			<!-- IF AGE -->\n			<tr>\n				<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\">{L_AGE}: </td>\n				<td><b class=\"genmed\"><!-- IF AGE -->{AGE}<!-- ELSE --> - <!-- ENDIF --></b></td>\n			</tr>\n			<!-- ENDIF -->\n			<tr>\n				<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\">{L_OCCUPATION}: </td>\n				<td><!-- IF OCCUPATION --><b class=\"genmed\">{OCCUPATION}</b><!-- ENDIF --></td>\n			</tr>\n			<tr>\n				<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\">{L_INTERESTS}: </td>\n				<td><!-- IF INTERESTS --><b class=\"genmed\">{INTERESTS}</b><!-- ENDIF --></td>\n			</tr>\n			<tr>\n				<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\">{L_WEBSITE}: </td>\n				<td><!-- IF U_WWW --><b><a class=\"genmed\" href=\"{U_WWW}\">{U_WWW}</a></b><!-- ENDIF --></td>\n			</tr>\n			<!-- IF S_PROFILE_FIELD1 -->\n				<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->\n				<tr>\n					<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\">{PROFILE_FIELD1_NAME}: </td>\n					<td><b class=\"genmed\">{PROFILE_FIELD1_VALUE}</b></td>\n				</tr>\n			<!-- ENDIF -->\n			<!-- BEGIN custom_fields -->\n				<tr>\n					<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\">{custom_fields.PROFILE_FIELD_NAME}: </td>\n					<td><b class=\"genmed\">{custom_fields.PROFILE_FIELD_VALUE}</b></td>\n				</tr>\n			<!-- END custom_fields -->\n			</table>\n		</td>\n	</tr>\n	<!-- IF SIGNATURE -->\n		<tr>\n			<td class=\"cat\" colspan=\"2\" align=\"center\"><h4>{L_SIGNATURE}</h4></td>\n		</tr>\n		<tr>\n			<td class=\"row1\" colspan=\"2\"><div class=\"postbody\" style=\"padding: 10px;\">{SIGNATURE}</div></td>\n		</tr>\n	<!-- ENDIF -->\n	</table>\n\n	</form>\n\n</div>\n\n<br clear=\"all\" />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<br clear=\"all\" />\n\n<div style=\"float: {S_CONTENT_FLOW_END};\"><!-- INCLUDE jumpbox.html --></div>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'message_body.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th>{MESSAGE_TITLE}</th>\n</tr>\n<tr> \n	<td class=\"row1\" align=\"center\"><br /><p class=\"gen\">{MESSAGE_TEXT}</p><br /></td>\n</tr>\n</table>\n\n<br clear=\"all\" />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'overall_footer.html','confirm_body.html:faq_body.html:index_body.html:login_body.html:login_forum.html:mcp_approve.html:mcp_footer.html:mcp_move.html:memberlist_body.html:memberlist_email.html:memberlist_leaders.html:memberlist_view.html:message_body.html:posting_body.html:report_body.html:search_body.html:search_results.html:ucp_agreement.html:ucp_footer.html:ucp_register.html:ucp_remind.html:ucp_resend.html:viewforum_body.html:viewonline_body.html:viewtopic_body.html:',1229079038,'	<!-- IF not S_IS_BOT -->{RUN_CRON_TASK}<!-- ENDIF -->\n</div>\n\n<!--\n	We request you retain the full copyright notice below including the link to www.phpbb.com.\n	This not only gives respect to the large amount of time given freely by the developers\n	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain\n	the full copyright we ask you at least leave in place the \"Powered by phpBB\" line, with\n	\"phpBB\" linked to www.phpbb.com. If you refuse to include even this then support on our\n	forums may be affected.\n\n	The phpBB Group : 2006\n//-->\n\n<div id=\"wrapfooter\">\n	<!-- IF U_ACP --><span class=\"gensmall\">[ <a href=\"{U_ACP}\">{L_ACP}</a> ]</span><br /><br /><!-- ENDIF -->\n	<span class=\"copyright\">Powered by <a href=\"http://www.phpbb.com/\">phpBB</a> &copy; 2000, 2002, 2005, 2007 phpBB Group\n	<!-- IF TRANSLATION_INFO --><br />{TRANSLATION_INFO}<!-- ENDIF -->\n	<!-- IF DEBUG_OUTPUT --><br /><bdo dir=\"ltr\">[ {DEBUG_OUTPUT} ]</bdo><!-- ENDIF --></span>\n</div>\n\n</body>\n</html>'),

(2,'overall_header.html','confirm_body.html:faq_body.html:index_body.html:login_body.html:login_forum.html:mcp_approve.html:mcp_header.html:mcp_move.html:memberlist_body.html:memberlist_email.html:memberlist_leaders.html:memberlist_view.html:message_body.html:posting_body.html:report_body.html:search_body.html:search_results.html:ucp_agreement.html:ucp_header.html:ucp_register.html:ucp_remind.html:ucp_resend.html:viewforum_body.html:viewonline_body.html:viewtopic_body.html:',1229079038,'<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\" dir=\"{S_CONTENT_DIRECTION}\" lang=\"{S_USER_LANG}\" xml:lang=\"{S_USER_LANG}\">\n<head>\n\n<meta http-equiv=\"content-type\" content=\"text/html; charset={S_CONTENT_ENCODING}\" />\n<meta http-equiv=\"content-language\" content=\"{S_USER_LANG}\" />\n<meta http-equiv=\"content-style-type\" content=\"text/css\" />\n<meta http-equiv=\"imagetoolbar\" content=\"no\" />\n<meta name=\"resource-type\" content=\"document\" />\n<meta name=\"distribution\" content=\"global\" />\n<meta name=\"copyright\" content=\"2000, 2002, 2005, 2007 phpBB Group\" />\n<meta name=\"keywords\" content=\"\" />\n<meta name=\"description\" content=\"\" />\n{META}\n<title>{SITENAME} &bull; <!-- IF S_IN_MCP -->{L_MCP} &bull; <!-- ELSEIF S_IN_UCP -->{L_UCP} &bull; <!-- ENDIF -->{PAGE_TITLE}</title>\n\n<link rel=\"stylesheet\" href=\"{T_STYLESHEET_LINK}\" type=\"text/css\" />\n\n<script type=\"text/javascript\">\n// <![CDATA[\n<!-- IF S_USER_PM_POPUP -->\n	if ({S_NEW_PM})\n	{\n		popup(\'{UA_POPUP_PM}\', 400, 225, \'_phpbbprivmsg\');\n	}\n<!-- ENDIF -->\n\nfunction popup(url, width, height, name)\n{\n	if (!name)\n	{\n		name = \'_popup\';\n	}\n\n	window.open(url.replace(/&amp;/g, \'&\'), name, \'height=\' + height + \',resizable=yes,scrollbars=yes,width=\' + width);\n	return false;\n}\n\nfunction jumpto()\n{\n	var page = prompt(\'{LA_JUMP_PAGE}:\', \'{ON_PAGE}\');\n	var perpage = \'{PER_PAGE}\';\n	var base_url = \'{A_BASE_URL}\';\n\n	if (page !== null && !isNaN(page) && page > 0)\n	{\n		document.location.href = base_url.replace(/&amp;/g, \'&\') + \'&start=\' + ((page - 1) * perpage);\n	}\n}\n\n/**\n* Find a member\n*/\nfunction find_username(url)\n{\n	popup(url, 760, 570, \'_usersearch\');\n	return false;\n}\n\n/**\n* Mark/unmark checklist\n* id = ID of parent container, name = name prefix, state = state [true/false]\n*/\nfunction marklist(id, name, state)\n{\n	var parent = document.getElementById(id);\n	if (!parent)\n	{\n		eval(\'parent = document.\' + id);\n	}\n\n	if (!parent)\n	{\n		return;\n	}\n\n	var rb = parent.getElementsByTagName(\'input\');\n	\n	for (var r = 0; r < rb.length; r++)\n	{\n		if (rb[r].name.substr(0, name.length) == name)\n		{\n			rb[r].checked = state;\n		}\n	}\n}\n\n<!-- IF ._file -->\n\n	/**\n	* Play quicktime file by determining it\'s width/height\n	* from the displayed rectangle area\n	*\n	* Only defined if there is a file block present.\n	*/\n	function play_qt_file(obj)\n	{\n		var rectangle = obj.GetRectangle();\n\n		if (rectangle)\n		{\n			rectangle = rectangle.split(\',\')\n			var x1 = parseInt(rectangle[0]);\n			var x2 = parseInt(rectangle[2]);\n			var y1 = parseInt(rectangle[1]);\n			var y2 = parseInt(rectangle[3]);\n\n			var width = (x1 < 0) ? (x1 * -1) + x2 : x2 - x1;\n			var height = (y1 < 0) ? (y1 * -1) + y2 : y2 - y1;\n		}\n		else\n		{\n			var width = 200;\n			var height = 0;\n		}\n\n		obj.width = width;\n		obj.height = height + 16;\n\n		obj.SetControllerVisible(true);\n\n		obj.Play();\n	}\n<!-- ENDIF -->\n\n// ]]>\n</script>\n</head>\n<body class=\"{S_CONTENT_DIRECTION}\">\n\n<a name=\"top\"></a>\n\n<div id=\"wrapheader\">\n\n	<div id=\"logodesc\">\n		<table width=\"100%\" cellspacing=\"0\">\n		<tr>\n			<td><a href=\"{U_INDEX}\">{SITE_LOGO_IMG}</a></td>\n			<td width=\"100%\" align=\"center\"><h1>{SITENAME}</h1><span class=\"gen\">{SITE_DESCRIPTION}</span></td>\n		</tr>\n		</table>\n	</div>\n\n	<div id=\"menubar\">\n		<table width=\"100%\" cellspacing=\"0\">\n		<tr>\n			<td class=\"genmed\">\n				<!-- IF not S_IS_BOT --><a href=\"{U_LOGIN_LOGOUT}\"><img src=\"{T_THEME_PATH}/images/icon_mini_login.gif\" width=\"12\" height=\"13\" alt=\"*\" /> {L_LOGIN_LOGOUT}</a>&nbsp;<!-- ENDIF -->\n				<!-- IF U_RESTORE_PERMISSIONS --> &nbsp;<a href=\"{U_RESTORE_PERMISSIONS}\"><img src=\"{T_THEME_PATH}/images/icon_mini_login.gif\" width=\"12\" height=\"13\" alt=\"*\" /> {L_RESTORE_PERMISSIONS}</a><!-- ENDIF -->\n				<!-- IF S_BOARD_DISABLED and S_USER_LOGGED_IN --> &nbsp;<span style=\"color: red;\">{L_BOARD_DISABLED}</span><!-- ENDIF -->\n				<!-- IF not S_IS_BOT -->\n					<!-- IF S_USER_LOGGED_IN -->\n						<!-- IF S_DISPLAY_PM --> &nbsp;<a href=\"{U_PRIVATEMSGS}\"><img src=\"{T_THEME_PATH}/images/icon_mini_message.gif\" width=\"12\" height=\"13\" alt=\"*\" /> {PRIVATE_MESSAGE_INFO}<!-- IF PRIVATE_MESSAGE_INFO_UNREAD -->, {PRIVATE_MESSAGE_INFO_UNREAD}<!-- ENDIF --></a><!-- ENDIF -->\n					<!-- ELSEIF S_REGISTER_ENABLED --> &nbsp;<a href=\"{U_REGISTER}\"><img src=\"{T_THEME_PATH}/images/icon_mini_register.gif\" width=\"12\" height=\"13\" alt=\"*\" /> {L_REGISTER}</a>\n					<!-- ENDIF -->\n				<!-- ENDIF -->\n			</td>\n			<td class=\"genmed\" align=\"{S_CONTENT_FLOW_END}\">\n				<a href=\"{U_FAQ}\"><img src=\"{T_THEME_PATH}/images/icon_mini_faq.gif\" width=\"12\" height=\"13\" alt=\"*\" /> {L_FAQ}</a>\n				<!-- IF S_DISPLAY_SEARCH -->&nbsp; &nbsp;<a href=\"{U_SEARCH}\"><img src=\"{T_THEME_PATH}/images/icon_mini_search.gif\" width=\"12\" height=\"13\" alt=\"*\" /> {L_SEARCH}</a><!-- ENDIF -->\n				<!-- IF not S_IS_BOT -->\n					<!-- IF S_DISPLAY_MEMBERLIST -->&nbsp; &nbsp;<a href=\"{U_MEMBERLIST}\"><img src=\"{T_THEME_PATH}/images/icon_mini_members.gif\" width=\"12\" height=\"13\" alt=\"*\" /> {L_MEMBERLIST}</a><!-- ENDIF -->\n					<!-- IF S_USER_LOGGED_IN -->&nbsp; &nbsp;<a href=\"{U_PROFILE}\"><img src=\"{T_THEME_PATH}/images/icon_mini_profile.gif\" width=\"12\" height=\"13\" alt=\"*\" /> {L_PROFILE}</a><!-- ENDIF -->\n				<!-- ENDIF -->\n			</td>\n		</tr>\n		</table>\n	</div>\n\n	<div id=\"datebar\">\n		<table width=\"100%\" cellspacing=\"0\">\n		<tr>\n			<td class=\"gensmall\"><!-- IF S_USER_LOGGED_IN -->{LAST_VISIT_DATE}<!-- ENDIF --></td>\n			<td class=\"gensmall\" align=\"{S_CONTENT_FLOW_END}\">{CURRENT_TIME}<br /></td>\n		</tr>\n		</table>\n	</div>\n\n</div>\n\n<div id=\"wrapcentre\">\n\n	<!-- IF S_DISPLAY_SEARCH -->\n	<p class=\"searchbar\">\n		<span style=\"float: {S_CONTENT_FLOW_BEGIN};\"><a href=\"{U_SEARCH_UNANSWERED}\">{L_SEARCH_UNANSWERED}</a> | <a href=\"{U_SEARCH_ACTIVE_TOPICS}\">{L_SEARCH_ACTIVE_TOPICS}</a></span>\n		<!-- IF S_USER_LOGGED_IN -->\n		<span style=\"float: {S_CONTENT_FLOW_END};\"><a href=\"{U_SEARCH_NEW}\">{L_SEARCH_NEW}</a> | <a href=\"{U_SEARCH_SELF}\">{L_SEARCH_SELF}</a></span>\n		<!-- ENDIF -->\n	</p>\n	<!-- ENDIF -->\n\n	<br style=\"clear: both;\" />\n\n	<!-- INCLUDE breadcrumbs.html -->\n\n	<br />\n'),

(2,'pagination.html','mcp_footer.html:mcp_notes_user.html:mcp_viewlogs.html:mcp_warn_list.html:memberlist_body.html:search_results.html:ucp_attachments.html:ucp_groups_manage.html:ucp_main_bookmarks.html:ucp_main_subscribed.html:ucp_pm_message_footer.html:ucp_pm_message_header.html:viewforum_body.html:viewforum_body.html:viewtopic_body.html:viewtopic_body.html:',1229079038,'<!-- IF PAGINATION --><b><a href=\"#\" onclick=\"jumpto(); return false;\" title=\"{L_JUMP_TO_PAGE}\">{L_GOTO_PAGE}</a> <!-- IF PREVIOUS_PAGE --><a href=\"{PREVIOUS_PAGE}\">{L_PREVIOUS}</a>&nbsp;&nbsp;<!-- ENDIF -->{PAGINATION}<!-- IF NEXT_PAGE --> &nbsp;<a href=\"{NEXT_PAGE}\">{L_NEXT}</a><!-- ENDIF --></b><!-- ENDIF -->'),

(2,'posting_attach_body.html','posting_body.html:',1229079038,'<tr>\n	<th colspan=\"2\">\n		<script type=\"text/javascript\">\n		// <![CDATA[\n			/**\n			* Show upload progress bar\n			*/\n			function popup_progress_bar()\n			{\n				close_waitscreen = 0;\n				// no scrollbars\n				popup(\'{UA_PROGRESS_BAR}\', 400, 200, \'_upload\');\n			}\n		// ]]>\n		</script>\n\n		<!-- IF S_CLOSE_PROGRESS_WINDOW -->\n			<script type=\"text/javascript\">\n			// <![CDATA[\n				close_waitscreen = 1;\n			// ]]>\n			</script>\n		<!-- ENDIF -->\n\n		{L_ADD_ATTACHMENT}\n	</th>\n</tr>\n<tr>\n	<td class=\"row3\" colspan=\"2\"><span class=\"gensmall\">{L_ADD_ATTACHMENT_EXPLAIN}</span></td>\n</tr>\n\n<tr> \n	<td class=\"row1\"><b class=\"genmed\">{L_FILENAME}</b></td> \n	<td class=\"row2\"><input type=\"file\" name=\"fileupload\" size=\"40\" maxlength=\"{FILESIZE}\" value=\"\" class=\"btnfile\" /></td> \n</tr> \n<tr> \n	<td class=\"row1\"><b class=\"genmed\">{L_FILE_COMMENT}</b></td> \n	<td class=\"row2\">\n		<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\">\n		<tr>\n			<td><textarea class=\"post\" name=\"filecomment\" rows=\"3\" cols=\"35\">{FILE_COMMENT}</textarea>&nbsp;</td>\n			<td valign=\"top\">\n				<table border=\"0\" cellspacing=\"4\" cellpadding=\"0\">\n				<tr>\n					<td><input class=\"btnlite\" type=\"submit\" style=\"width:150px\" name=\"add_file\" value=\"{L_ADD_FILE}\" onclick=\"popup_progress_bar();\" /></td>\n				</tr>\n				</table>\n			</td>\n		</tr>\n		</table>\n	</td>\n</tr> \n\n<!-- IF S_HAS_ATTACHMENTS -->\n	<tr>\n		<th colspan=\"2\">{L_POSTED_ATTACHMENTS}</th>\n	</tr>\n\n	<!-- BEGIN attach_row -->\n		<tr>\n			<td class=\"row1\"><b class=\"genmed\">{L_FILENAME}</b></td>\n			<td class=\"row2\"><a class=\"genmed\" href=\"{attach_row.U_VIEW_ATTACHMENT}\" target=\"_blank\">{attach_row.FILENAME}</a></td> \n		</tr>\n		<tr> \n			<td class=\"row1\"><b class=\"genmed\">{L_FILE_COMMENT}</b></td> \n			<td class=\"row2\">{attach_row.S_HIDDEN}\n				<table border=\"0\" cellspacing=\"0\" cellpadding=\"2\">\n				<tr>\n					<td><textarea class=\"post\" name=\"comment_list[{attach_row.ASSOC_INDEX}]\" rows=\"3\" cols=\"35\" wrap=\"virtual\">{attach_row.FILE_COMMENT}</textarea>&nbsp;</td>\n					<td valign=\"top\">\n						<table border=\"0\" cellspacing=\"4\" cellpadding=\"0\">\n						<tr>\n							<td><input class=\"btnlite\" type=\"submit\" style=\"width:150px\" name=\"delete_file[{attach_row.ASSOC_INDEX}]\" value=\"{L_DELETE_FILE}\" /></td>\n						</tr>\n						</table>\n					</td>\n				</tr>\n				</table>\n			</td>\n		</tr>\n	<!-- END attach_row -->\n\n<!-- ENDIF -->\n'),

(2,'posting_body.html','',1229079038,'<!-- IF S_PRIVMSGS -->\n	<!-- INCLUDE ucp_header.html -->\n<!-- ELSE -->\n	<!-- INCLUDE overall_header.html -->\n<!-- ENDIF -->\n\n<!-- IF S_FORUM_RULES -->\n	<div class=\"forumrules\">\n		<!-- IF U_FORUM_RULES -->\n			<h3>{L_FORUM_RULES}</h3><br />\n			<a href=\"{U_FORUM_RULES}\"><b>{L_FORUM_RULES_LINK}</b></a>\n		<!-- ELSE -->\n			<h3>{L_FORUM_RULES}</h3><br />\n			{FORUM_RULES}\n		<!-- ENDIF -->\n	</div>\n\n	<br clear=\"all\" />\n<!-- ENDIF -->\n\n<!-- IF not S_PRIVMSGS -->\n	<div id=\"pageheader\">\n		<h2><!-- IF TOPIC_TITLE --><a class=\"titles\" href=\"{U_VIEW_TOPIC}\">{TOPIC_TITLE}</a><!-- ELSE --><a class=\"titles\" href=\"{U_VIEW_FORUM}\">{FORUM_NAME}</a><!-- ENDIF --></h2>\n\n		<!-- IF MODERATORS -->\n			<p class=\"moderators\">{L_MODERATORS}: {MODERATORS}</p>\n		<!-- ENDIF -->\n		<!-- IF U_MCP -->\n			<p class=\"linkmcp\">[ <a href=\"{U_MCP}\">{L_MCP}</a> ]</p>\n		<!-- ENDIF -->\n	</div>\n\n	<br clear=\"all\" /><br />\n<!-- ENDIF -->\n\n<!-- IF not S_SHOW_PM_BOX -->\n	<form action=\"{S_POST_ACTION}\" method=\"post\" name=\"postform\"{S_FORM_ENCTYPE}>\n<!-- ENDIF -->\n\n<!-- IF S_DRAFT_LOADED -->\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th align=\"center\">{L_INFORMATION}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" align=\"center\"><span class=\"gen\"><!-- IF S_PRIVMSGS -->{L_DRAFT_LOADED_PM}<!-- ELSE -->{L_DRAFT_LOADED}<!-- ENDIF --></span></td>\n	</tr>\n	</table>\n\n	<br clear=\"all\" />\n<!-- ENDIF -->\n\n<!-- IF S_SHOW_DRAFTS -->\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th colspan=\"3\" align=\"center\">{L_LOAD_DRAFT}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" colspan=\"3\" align=\"center\"><span class=\"gen\">{L_LOAD_DRAFT_EXPLAIN}</span></td>\n	</tr>\n	<tr>\n		<th>{L_SAVE_DATE}</th>\n		<th>{L_DRAFT_TITLE}</th>\n		<th>{L_OPTIONS}</th>\n	</tr>\n	<!-- BEGIN draftrow -->\n\n		<!-- IF draftrow.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n\n		<td class=\"postdetails\" style=\"padding: 4px;\">{draftrow.DATE}</td>\n		<td style=\"padding: 4px;\"><b class=\"gen\">{draftrow.DRAFT_SUBJECT}</b>\n			<!-- IF draftrow.S_LINK_TOPIC --><br /><span class=\"gensmall\">{L_TOPIC}: <a href=\"{draftrow.U_VIEW}\">{draftrow.TITLE}</a></span>\n			<!-- ELSEIF draftrow.S_LINK_FORUM --><br /><span class=\"gensmall\">{L_FORUM}: <a href=\"{draftrow.U_VIEW}\">{draftrow.TITLE}</a></span>\n			<!-- ELSEIF draftrow.S_LINK_PM --><br /><span class=\"gensmall\">{L_PRIVATE_MESSAGE}</span>\n			<!-- ELSE --><br /><span class=\"gensmall\">{L_NO_TOPIC_FORUM}</span><!-- ENDIF -->\n		</td>\n		<td style=\"padding: 4px;\" align=\"center\"><span class=\"gen\"><a href=\"{draftrow.U_INSERT}\">{L_LOAD_DRAFT}</a></span></td>\n	</tr>\n	<!-- END draftrow -->\n	</table>\n\n	<br clear=\"all\" />\n<!-- ENDIF -->\n\n\n<!-- IF S_POST_REVIEW --><!-- INCLUDE posting_review.html --><!-- ENDIF -->\n<!-- IF S_DISPLAY_PREVIEW --><!-- INCLUDE posting_preview.html --><!-- ENDIF -->\n\n\n<!-- IF not S_PRIVMSGS and S_UNGLOBALISE -->\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th>{L_MOVE}</th>\n	</tr>\n	<tr>\n		<td class=\"spacer\" colspan=\"2\"><img src=\"images/spacer.gif\" alt=\"\" width=\"1\" height=\"1\" /></td>\n	</tr>\n	<tr>\n		<td class=\"row2\" align=\"center\"><span class=\"gen\">{L_UNGLOBALISE_EXPLAIN}<br /><br />{L_SELECT_DESTINATION_FORUM}&nbsp;&nbsp;</span><select name=\"to_forum_id\">{S_FORUM_SELECT}</select><br /><br /><input class=\"btnmain\" type=\"submit\" name=\"post\" value=\"{L_CONFIRM}\" />&nbsp;&nbsp; <input class=\"btnlite\" type=\"submit\" name=\"cancel_unglobalise\" value=\"{L_CANCEL}\" /></td>\n	</tr>\n	</table>\n\n	<br clear=\"all\" />\n<!-- ENDIF -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"2\"><b>{L_POST_A}</b></th>\n</tr>\n\n<!-- IF ERROR -->\n	<tr>\n		<td class=\"row2\" colspan=\"2\" align=\"center\"><span class=\"genmed error\">{ERROR}</span></td>\n	</tr>\n<!-- ENDIF -->\n\n<!-- IF S_DELETE_ALLOWED -->\n	<tr>\n		<td class=\"row1\"><b class=\"genmed\">{L_DELETE_POST}:</b></td>\n		<td class=\"row2\"><input type=\"checkbox\" class=\"radio\" name=\"delete\" /> <span class=\"gensmall\">[ {L_DELETE_POST_WARN} ]</span></td>\n	</tr>\n<!-- ENDIF -->\n\n<!-- IF S_SHOW_TOPIC_ICONS or S_SHOW_PM_ICONS -->\n	<tr>\n		<td class=\"row1\"><b class=\"genmed\">{L_ICON}:</b></td>\n		<td class=\"row2\">\n			<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n			<tr>\n				<td><input type=\"radio\" class=\"radio\" name=\"icon\" value=\"0\"{S_NO_ICON_CHECKED} /><span class=\"genmed\"><!-- IF S_SHOW_TOPIC_ICONS -->{L_NO_TOPIC_ICON}<!-- ELSE -->{L_NO_PM_ICON}<!-- ENDIF --></span> <!-- BEGIN topic_icon --><span style=\"white-space: nowrap;\"><input type=\"radio\" class=\"radio\" name=\"icon\" value=\"{topic_icon.ICON_ID}\"{topic_icon.S_ICON_CHECKED} /><img src=\"{topic_icon.ICON_IMG}\" width=\"{topic_icon.ICON_WIDTH}\" height=\"{topic_icon.ICON_HEIGHT}\" alt=\"\" title=\"\" hspace=\"2\" vspace=\"2\" /></span> <!-- END topic_icon --></td>\n			</tr>\n			</table>\n		</td>\n	</tr>\n<!-- ENDIF -->\n\n<!-- IF not S_PRIVMSGS and S_DISPLAY_USERNAME -->\n	<tr>\n		<td class=\"row1\"><b class=\"genmed\">{L_USERNAME}:</b></td>\n		<td class=\"row2\"><input class=\"post\" type=\"text\" tabindex=\"1\" name=\"username\" size=\"25\" value=\"{USERNAME}\" /></td>\n	</tr>\n<!-- ENDIF -->\n\n<!-- IF S_PRIVMSGS -->\n	<tr>\n		<td class=\"row1\"><b class=\"genmed\">{L_TO}:</b></td>\n		<td class=\"row2\">\n			{S_HIDDEN_ADDRESS_FIELD}\n		<!-- BEGIN to_recipient -->\n			<span style=\"display: block; float: {S_CONTENT_FLOW_BEGIN};\" class=\"nowrap genmed\"><strong>\n			<!-- IF to_recipient.IS_GROUP --><a href=\"{to_recipient.U_VIEW}\"><span class=\"sep\">{to_recipient.NAME}</span></a><!-- ELSE -->{to_recipient.NAME_FULL}<!-- ENDIF --></strong>&nbsp;<!-- IF not S_EDIT_POST --><input class=\"post\" type=\"submit\" name=\"remove_{to_recipient.TYPE}[{to_recipient.UG_ID}]\" value=\"{L_REMOVE}\" />&nbsp;<!-- ENDIF -->\n			</span>\n		<!-- BEGINELSE -->\n			<span class=\"genmed\">{L_NO_TO_RECIPIENT}</span>\n		<!-- END to_recipient -->\n		</td>\n	</tr>\n	<!-- IF S_ALLOW_MASS_PM -->\n	<tr>\n		<td class=\"row1\"><b class=\"genmed\">{L_BCC}:</b></td>\n		<td class=\"row2\">\n		<!-- BEGIN bcc_recipient -->\n			<span class=\"genmed nowrap\"><strong>\n			<!-- IF bcc_recipient.IS_GROUP --><a href=\"{bcc_recipient.U_VIEW}\"><span class=\"sep\">{bcc_recipient.NAME}</span></a><!-- ELSE -->{bcc_recipient.NAME_FULL}<!-- ENDIF --></strong>&nbsp;<!-- IF not S_EDIT_POST --><input class=\"post\" type=\"submit\" name=\"remove_{bcc_recipient.TYPE}[{bcc_recipient.UG_ID}]\" value=\"{L_REMOVE}\" />&nbsp;<!-- ENDIF -->\n			</span>\n		<!-- BEGINELSE -->\n			<span class=\"genmed\">{L_NO_BCC_RECIPIENT}</span>\n		<!-- END bcc_recipient -->\n		</td>\n	</tr>\n	<!-- ENDIF -->\n<!-- ENDIF -->\n\n<tr>\n	<td class=\"row1\" width=\"22%\"><b class=\"genmed\">{L_SUBJECT}:</b></td>\n	<td class=\"row2\" width=\"78%\"><input class=\"post\" style=\"width:450px\" type=\"text\" name=\"subject\" size=\"45\" maxlength=\"<!-- IF S_NEW_MESSAGE -->60<!-- ELSE -->64<!-- ENDIF -->\" tabindex=\"2\" value=\"{SUBJECT}\" /></td>\n</tr>\n<tr>\n	<td class=\"row1\" valign=\"top\"><b class=\"genmed\">{L_MESSAGE_BODY}:</b><br /><span class=\"gensmall\">{L_MESSAGE_BODY_EXPLAIN}&nbsp;</span><br /><br />\n	<!-- IF S_SMILIES_ALLOWED -->\n		<table width=\"100%\" cellspacing=\"5\" cellpadding=\"0\" border=\"0\" align=\"center\">\n		<tr>\n			<td class=\"gensmall\" align=\"center\"><b>{L_SMILIES}</b></td>\n		</tr>\n		<tr>\n			<td align=\"center\">\n				<!-- BEGIN smiley -->\n					<a href=\"#\" onclick=\"insert_text(\'{smiley.A_SMILEY_CODE}\', true); return false;\" style=\"line-height: 20px;\"><img src=\"{smiley.SMILEY_IMG}\" width=\"{smiley.SMILEY_WIDTH}\" height=\"{smiley.SMILEY_HEIGHT}\" alt=\"{smiley.SMILEY_CODE}\" title=\"{smiley.SMILEY_DESC}\" hspace=\"2\" vspace=\"2\" /></a>\n				<!-- END smiley -->\n			</td>\n		</tr>\n\n		<!-- IF S_SHOW_SMILEY_LINK -->\n			<tr>\n				<td align=\"center\"><a class=\"nav\" href=\"{U_MORE_SMILIES}\" onclick=\"popup(this.href, 300, 350, \'_phpbbsmilies\'); return false;\">{L_MORE_SMILIES}</a></td>\n			</tr>\n		<!-- ENDIF -->\n\n		</table>\n	<!-- ENDIF -->\n	</td>\n	<td class=\"row2\" valign=\"top\">\n		<script type=\"text/javascript\">\n		// <![CDATA[\n			var form_name = \'postform\';\n			var text_name = \'message\';\n		// ]]>\n		</script>\n\n		<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n		<!-- INCLUDE posting_buttons.html -->\n		<tr>\n			<td valign=\"top\" style=\"width: 100%;\"><textarea name=\"message\" rows=\"15\" cols=\"76\" tabindex=\"3\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\" style=\"width: 98%;\">{MESSAGE}</textarea></td>\n			<!-- IF S_BBCODE_ALLOWED -->\n			<td width=\"80\" align=\"center\" valign=\"top\">\n				<script type=\"text/javascript\">\n				// <![CDATA[\n					colorPalette(\'v\', 7, 6)\n				// ]]>\n				</script>\n			</td>\n			<!-- ENDIF -->\n	 	</tr>\n		</table>\n	</td>\n</tr>\n\n<!-- IF S_INLINE_ATTACHMENT_OPTIONS -->\n	<tr>\n		<td class=\"row1\"><b class=\"genmed\">{L_ATTACHMENTS}:</b></td>\n		<td class=\"row2\"><select name=\"attachments\">{S_INLINE_ATTACHMENT_OPTIONS}</select>&nbsp;<input type=\"button\" class=\"btnbbcode\" accesskey=\"a\" value=\"{L_PLACE_INLINE}\" name=\"attachinline\" onclick=\"attach_form = document.forms[form_name].elements[\'attachments\']; attach_inline(attach_form.value, attach_form.options[attach_form.selectedIndex].text);\" onmouseover=\"helpline(\'a\')\" onmouseout=\"helpline(\'tip\')\" />\n		</td>\n	</tr>\n<!-- ENDIF -->\n\n<tr>\n	<td class=\"row1\" valign=\"top\"><b class=\"genmed\">{L_OPTIONS}:</b><br />\n		<table cellspacing=\"2\" cellpadding=\"0\" border=\"0\">\n		<tr>\n			<td class=\"gensmall\">{BBCODE_STATUS}</td>\n		</tr>\n		<!-- IF S_BBCODE_ALLOWED -->\n		<tr>\n			<td class=\"gensmall\">{IMG_STATUS}</td>\n		</tr>\n		<tr>\n			<td class=\"gensmall\">{FLASH_STATUS}</td>\n		</tr>\n		<tr>\n			<td class=\"gensmall\">{URL_STATUS}</td>\n		</tr>\n		<tr>\n			<td class=\"gensmall\">{SMILIES_STATUS}</td>\n		</tr>\n		<!-- ENDIF -->\n		</table>\n	</td>\n	<td class=\"row2\">\n		<table cellpadding=\"1\">\n		<!-- IF S_BBCODE_ALLOWED -->\n			<tr>\n				<td><input type=\"checkbox\" class=\"radio\" name=\"disable_bbcode\"{S_BBCODE_CHECKED} /></td>\n				<td class=\"gen\">{L_DISABLE_BBCODE}</td>\n			</tr>\n		<!-- ENDIF -->\n\n		<!-- IF S_SMILIES_ALLOWED -->\n			<tr>\n				<td><input type=\"checkbox\" class=\"radio\" name=\"disable_smilies\"{S_SMILIES_CHECKED} /></td>\n				<td class=\"gen\">{L_DISABLE_SMILIES}</td>\n			</tr>\n		<!-- ENDIF -->\n\n		<!-- IF S_LINKS_ALLOWED -->\n		<tr>\n			<td><input type=\"checkbox\" class=\"radio\" name=\"disable_magic_url\"{S_MAGIC_URL_CHECKED} /></td>\n			<td class=\"gen\">{L_DISABLE_MAGIC_URL}</td>\n		</tr>\n		<!-- ENDIF -->\n\n		<!-- IF S_SIG_ALLOWED -->\n			<tr>\n				<td><input type=\"checkbox\" class=\"radio\" name=\"attach_sig\"{S_SIGNATURE_CHECKED} /></td>\n				<td class=\"gen\">{L_ATTACH_SIG}</td>\n			</tr>\n		<!-- ENDIF -->\n\n		<!-- IF S_NOTIFY_ALLOWED -->\n			<tr>\n				<td><input type=\"checkbox\" class=\"radio\" name=\"notify\"{S_NOTIFY_CHECKED} /></td>\n				<td class=\"gen\">{L_NOTIFY_REPLY}</td>\n			</tr>\n		<!-- ENDIF -->\n\n		<!-- IF not S_PRIVMSGS -->\n			<!-- IF S_LOCK_TOPIC_ALLOWED -->\n				<tr>\n					<td><input type=\"checkbox\" class=\"radio\" name=\"lock_topic\"{S_LOCK_TOPIC_CHECKED} /></td>\n					<td class=\"gen\">{L_LOCK_TOPIC}</td>\n				</tr>\n			<!-- ENDIF -->\n\n			<!-- IF S_LOCK_POST_ALLOWED -->\n				<tr>\n					<td><input type=\"checkbox\" class=\"radio\" name=\"lock_post\"{S_LOCK_POST_CHECKED} /></td>\n					<td class=\"gen\">{L_LOCK_POST} [{L_LOCK_POST_EXPLAIN}]</td>\n				</tr>\n			<!-- ENDIF -->\n\n			<!-- IF S_TYPE_TOGGLE -->\n				<tr>\n					<td>&nbsp;</td>\n					<td class=\"gen\"><!-- IF S_EDIT_POST -->{L_CHANGE_TOPIC_TO}<!-- ELSE -->{L_POST_TOPIC_AS}<!-- ENDIF -->: <!-- BEGIN topic_type --><input type=\"radio\" class=\"radio\" name=\"topic_type\" value=\"{topic_type.VALUE}\"{topic_type.S_CHECKED} />{topic_type.L_TOPIC_TYPE}&nbsp;&nbsp;<!-- END topic_type --></td>\n				</tr>\n			<!-- ENDIF -->\n		<!-- ENDIF -->\n		</table>\n	</td>\n</tr>\n\n<!-- IF S_TOPIC_TYPE_ANNOUNCE or S_TOPIC_TYPE_STICKY -->\n	<tr>\n		<td class=\"row1\"><b class=\"genmed\">{L_STICK_TOPIC_FOR}:</b><br /><span class=\"gensmall\">{L_STICKY_ANNOUNCE_TIME_LIMIT}</span></td>\n		<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"topic_time_limit\" size=\"3\" maxlength=\"3\" value=\"{TOPIC_TIME_LIMIT}\" />&nbsp;<b class=\"gen\">{L_DAYS}</b> <span class=\"gensmall\">{L_STICK_TOPIC_FOR_EXPLAIN}</span></td>\n	</tr>\n<!-- ENDIF -->\n\n<!-- IF S_EDIT_REASON -->\n	<tr>\n		<td class=\"row1\" valign=\"top\"><b class=\"genmed\">{L_EDIT_REASON}:</b></td>\n		<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"edit_reason\" size=\"50\" value=\"{EDIT_REASON}\" /></td>\n	</tr>\n<!-- ENDIF -->\n\n<!-- IF S_CONFIRM_CODE -->\n	<tr>\n		<th colspan=\"2\" valign=\"middle\">{L_POST_CONFIRMATION}</th>\n	</tr>\n	<tr>\n		<td class=\"row3\" colspan=\"2\"><span class=\"gensmall\">{L_POST_CONFIRM_EXPLAIN}</span></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" colspan=\"2\" align=\"center\">\n			<input type=\"hidden\" name=\"confirm_id\" value=\"{CONFIRM_ID}\" />\n			{CONFIRM_IMAGE}\n		</td>\n	</tr>\n	<tr>\n		<td class=\"row1\"><b class=\"genmed\">{L_CONFIRM_CODE}: </b><br /><span class=\"gensmall\">{L_CONFIRM_CODE_EXPLAIN}</span></td>\n		<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"confirm_code\" size=\"8\" maxlength=\"8\" /></td>\n	</tr>\n<!-- ENDIF -->\n\n<!-- IF S_SHOW_ATTACH_BOX or S_SHOW_POLL_BOX -->\n	<tr>\n		<td class=\"cat\" colspan=\"2\" align=\"center\">\n			<input class=\"btnlite\" type=\"submit\" tabindex=\"5\" name=\"preview\" value=\"{L_PREVIEW}\" />\n			&nbsp; <input class=\"btnmain\" type=\"submit\" accesskey=\"s\" tabindex=\"6\" name=\"post\" value=\"{L_SUBMIT}\" />\n			<!-- IF S_SAVE_ALLOWED -->&nbsp; <input class=\"btnlite\" type=\"submit\" accesskey=\"k\" tabindex=\"7\" name=\"save\" value=\"{L_SAVE}\" /><!-- ENDIF -->\n			<!-- IF S_HAS_DRAFTS -->&nbsp; <input class=\"btnlite\" type=\"submit\" accesskey=\"d\" tabindex=\"8\" name=\"load\" value=\"{L_LOAD}\" /><!-- ENDIF -->\n			&nbsp; <input class=\"btnlite\" type=\"submit\" accesskey=\"c\" tabindex=\"9\" name=\"cancel\" value=\"{L_CANCEL}\" />\n		</td>\n	</tr>\n\n	<!-- IF S_SHOW_ATTACH_BOX --><!-- INCLUDE posting_attach_body.html --><!-- ENDIF -->\n\n	<!-- IF S_SHOW_POLL_BOX -->\n		<!-- INCLUDE posting_poll_body.html -->\n	<!-- ELSEIF S_POLL_DELETE -->\n		<tr>\n			<td class=\"row1\"><span class=\"genmed\"><b>{L_POLL_DELETE}:</b></span></td>\n			<td class=\"row2\"><input type=\"checkbox\" class=\"radio\" name=\"poll_delete\" /></td>\n		</tr>\n	<!-- ENDIF -->\n<!-- ENDIF -->\n\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\">{S_HIDDEN_FIELDS}\n		<input class=\"btnlite\" type=\"submit\" tabindex=\"10\" name=\"preview\" value=\"{L_PREVIEW}\" />\n		&nbsp; <input class=\"btnmain\" type=\"submit\" accesskey=\"s\" tabindex=\"11\" name=\"post\" value=\"{L_SUBMIT}\" />\n		<!-- IF not S_SHOW_ATTACH_BOX and not S_SHOW_POLL_BOX -->\n			<!-- IF S_SAVE_ALLOWED -->&nbsp; <input class=\"btnlite\" type=\"submit\" accesskey=\"k\" tabindex=\"12\" name=\"save\" value=\"{L_SAVE}\" /><!-- ENDIF -->\n			<!-- IF S_HAS_DRAFTS -->&nbsp; <input class=\"btnlite\" type=\"submit\" accesskey=\"d\" tabindex=\"13\" name=\"load\" value=\"{L_LOAD}\" /><!-- ENDIF -->\n		<!-- ENDIF -->\n		&nbsp; <input class=\"btnlite\" type=\"submit\" accesskey=\"c\" tabindex=\"14\" name=\"cancel\" value=\"{L_CANCEL}\" />\n	</td>\n</tr>\n</table>\n<!-- IF not S_PRIVMSGS -->\n	{S_FORM_TOKEN}\n	</form>\n<!-- ENDIF -->\n<br clear=\"all\" />\n\n<!-- IF S_DISPLAY_REVIEW --><!-- INCLUDE posting_topic_review.html --><!-- ENDIF -->\n<!-- IF S_DISPLAY_HISTORY --><!-- INCLUDE ucp_pm_history.html --><!-- ENDIF -->\n\n<!-- IF S_PRIVMSGS -->\n	<!-- INCLUDE ucp_footer.html -->\n<!-- ELSE -->\n\n	<!-- INCLUDE breadcrumbs.html -->\n\n\n	<!-- IF S_DISPLAY_ONLINE_LIST -->\n		<br clear=\"all\" />\n\n		<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n		<tr>\n			<td class=\"cat\"><h4>{L_WHO_IS_ONLINE}</h4></td>\n		</tr>\n		<tr>\n			<td class=\"row1\"><span class=\"gensmall\">{LOGGED_IN_USER_LIST}</span></td>\n		</tr>\n		</table>\n	<!-- ENDIF -->\n\n	<br clear=\"all\" />\n\n	<table width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<td align=\"{S_CONTENT_FLOW_END}\"><!-- INCLUDE jumpbox.html --></td>\n	</tr>\n	</table>\n\n	<!-- INCLUDE overall_footer.html -->\n<!-- ENDIF -->'),

(2,'posting_buttons.html','posting_body.html:ucp_main_drafts.html:ucp_profile_signature.html:',1229079038,'<tr valign=\"middle\" align=\"{S_CONTENT_FLOW_BEGIN}\">\n	<td colspan=\"2\">\n		<script type=\"text/javascript\">\n		// <![CDATA[\n		\n		// Define the bbCode tags\n		var bbcode = new Array();\n		var bbtags = new Array(\'[b]\',\'[/b]\',\'[i]\',\'[/i]\',\'[u]\',\'[/u]\',\'[quote]\',\'[/quote]\',\'[code]\',\'[/code]\',\'[list]\',\'[/list]\',\'[list=]\',\'[/list]\',\'[img]\',\'[/img]\',\'[url]\',\'[/url]\',\'[flash=]\', \'[/flash]\',\'[size=]\',\'[/size]\'<!-- BEGIN custom_tags -->, {custom_tags.BBCODE_NAME}<!-- END custom_tags -->);\n		var imageTag = false;\n		\n		// Helpline messages\n		var help_line = {\n			b: \'{LA_BBCODE_B_HELP}\',\n			i: \'{LA_BBCODE_I_HELP}\',\n			u: \'{LA_BBCODE_U_HELP}\',\n			q: \'{LA_BBCODE_Q_HELP}\',\n			c: \'{LA_BBCODE_C_HELP}\',\n			l: \'{LA_BBCODE_L_HELP}\',\n			o: \'{LA_BBCODE_O_HELP}\',\n			p: \'{LA_BBCODE_P_HELP}\',\n			w: \'{LA_BBCODE_W_HELP}\',\n			s: \'{LA_BBCODE_S_HELP}\',\n			f: \'{LA_BBCODE_F_HELP}\',\n			e: \'{LA_BBCODE_E_HELP}\',\n			d: \'{LA_BBCODE_D_HELP}\',\n			t: \'{LA_BBCODE_T_HELP}\',\n			tip: \'{L_STYLES_TIP}\'\n			<!-- BEGIN custom_tags -->\n				,cb_{custom_tags.BBCODE_ID}: \'{custom_tags.A_BBCODE_HELPLINE}\'\n			<!-- END custom_tags -->\n		}\n\n		// ]]>\n		</script>\n		<script type=\"text/javascript\" src=\"{T_TEMPLATE_PATH}/editor.js\"></script>\n\n<!-- IF S_BBCODE_ALLOWED -->\n		<input type=\"button\" class=\"btnbbcode\" accesskey=\"b\" name=\"addbbcode0\" value=\" B \" style=\"font-weight:bold; width: 30px;\" onclick=\"bbstyle(0)\" onmouseover=\"helpline(\'b\')\" onmouseout=\"helpline(\'tip\')\" />\n		<input type=\"button\" class=\"btnbbcode\" accesskey=\"i\" name=\"addbbcode2\" value=\" i \" style=\"font-style:italic; width: 30px;\" onclick=\"bbstyle(2)\" onmouseover=\"helpline(\'i\')\" onmouseout=\"helpline(\'tip\')\" />\n		<input type=\"button\" class=\"btnbbcode\" accesskey=\"u\" name=\"addbbcode4\" value=\" u \" style=\"text-decoration: underline; width: 30px;\" onclick=\"bbstyle(4)\" onmouseover=\"helpline(\'u\')\" onmouseout=\"helpline(\'tip\')\" />\n		<!-- IF S_BBCODE_QUOTE -->\n			<input type=\"button\" class=\"btnbbcode\" accesskey=\"q\" name=\"addbbcode6\" value=\"Quote\" style=\"width: 50px\" onclick=\"bbstyle(6)\" onmouseover=\"helpline(\'q\')\" onmouseout=\"helpline(\'tip\')\" />\n		<!-- ENDIF -->\n		<input type=\"button\" class=\"btnbbcode\" accesskey=\"c\" name=\"addbbcode8\" value=\"Code\" style=\"width: 40px\" onclick=\"bbstyle(8)\" onmouseover=\"helpline(\'c\')\" onmouseout=\"helpline(\'tip\')\" />\n		<input type=\"button\" class=\"btnbbcode\" accesskey=\"l\" name=\"addbbcode10\" value=\"List\" style=\"width: 40px\" onclick=\"bbstyle(10)\" onmouseover=\"helpline(\'l\')\" onmouseout=\"helpline(\'tip\')\" />\n		<input type=\"button\" class=\"btnbbcode\" accesskey=\"o\" name=\"addbbcode12\" value=\"List=\" style=\"width: 40px\" onclick=\"bbstyle(12)\" onmouseover=\"helpline(\'o\')\" onmouseout=\"helpline(\'tip\')\" />\n		<input type=\"button\" class=\"btnbbcode\" accesskey=\"t\" name=\"addlitsitem\" value=\"[*]\" style=\"width: 40px\" onclick=\"bbstyle(-1)\" onmouseover=\"helpline(\'e\')\" onmouseout=\"helpline(\'tip\')\" />				\n		<!-- IF S_BBCODE_IMG -->\n			<input type=\"button\" class=\"btnbbcode\" accesskey=\"p\" name=\"addbbcode14\" value=\"Img\" style=\"width: 40px\" onclick=\"bbstyle(14)\" onmouseover=\"helpline(\'p\')\" onmouseout=\"helpline(\'tip\')\" />\n		<!-- ENDIF -->\n		<!-- IF S_LINKS_ALLOWED -->\n			<input type=\"button\" class=\"btnbbcode\" accesskey=\"w\" name=\"addbbcode16\" value=\"URL\" style=\"text-decoration: underline; width: 40px\" onclick=\"bbstyle(16)\" onmouseover=\"helpline(\'w\')\" onmouseout=\"helpline(\'tip\')\" />\n		<!-- ENDIF -->\n		<!-- IF S_BBCODE_FLASH -->\n			<input type=\"button\" class=\"btnbbcode\" accesskey=\"d\" name=\"addbbcode18\" value=\"Flash\" onclick=\"bbstyle(18)\" onmouseover=\"helpline(\'d\')\" onmouseout=\"helpline(\'tip\')\" />\n		<!-- ENDIF -->\n		<span class=\"genmed nowrap\">{L_FONT_SIZE}: <select class=\"gensmall\" name=\"addbbcode20\" onchange=\"bbfontstyle(\'[size=\' + this.form.addbbcode20.options[this.form.addbbcode20.selectedIndex].value + \']\', \'[/size]\');this.form.addbbcode20.selectedIndex = 2;\" onmouseover=\"helpline(\'f\')\" onmouseout=\"helpline(\'tip\')\">\n			<option value=\"50\">{L_FONT_TINY}</option>\n			<option value=\"85\">{L_FONT_SMALL}</option>\n			<option value=\"100\" selected=\"selected\">{L_FONT_NORMAL}</option>\n			<option value=\"150\">{L_FONT_LARGE}</option>\n			<option value=\"200\">{L_FONT_HUGE}</option>\n		</select></span>\n<!-- ENDIF -->\n	</td>\n</tr>\n<!-- IF S_BBCODE_ALLOWED and .custom_tags -->\n	<tr valign=\"middle\" align=\"{S_CONTENT_FLOW_BEGIN}\">\n		<td colspan=\"2\">\n		<!-- BEGIN custom_tags -->\n			<input type=\"button\" class=\"btnbbcode\" name=\"addbbcode{custom_tags.BBCODE_ID}\" value=\"{custom_tags.BBCODE_TAG}\" onclick=\"bbstyle({custom_tags.BBCODE_ID})\"<!-- IF custom_tags.BBCODE_HELPLINE !== \'\' --> onmouseover=\"helpline(\'cb_{custom_tags.BBCODE_ID}\')\" onmouseout=\"helpline(\'tip\')\"<!-- ENDIF --> />\n		<!-- END custom_tags -->\n		</td>\n	</tr>\n<!-- ENDIF -->\n<!-- IF S_BBCODE_ALLOWED -->\n<tr>\n	<td<!-- IF $S_SIGNATURE or S_EDIT_DRAFT --> colspan=\"2\"<!-- ENDIF -->><input type=\"text\" readonly=\"readonly\" name=\"helpbox\" style=\"width:100%\" class=\"helpline\" value=\"{L_STYLES_TIP}\" /></td>\n	<!-- IF not $S_SIGNATURE and not S_EDIT_DRAFT -->\n		<td class=\"genmed\" align=\"center\">{L_FONT_COLOR}</td>\n	<!-- ENDIF -->\n</tr>\n<!-- ENDIF -->\n'),

(2,'posting_poll_body.html','posting_body.html:',1229079038,'\n<tr>\n	<th colspan=\"2\">{L_ADD_POLL}</th>\n</tr>\n<tr>\n	<td class=\"row3\" colspan=\"2\"><span class=\"gensmall\">{L_ADD_POLL_EXPLAIN}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_POLL_QUESTION}:</b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"poll_title\" size=\"50\" maxlength=\"255\" value=\"{POLL_TITLE}\" /></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_POLL_OPTIONS}:</b><br /><span class=\"gensmall\">{L_POLL_OPTIONS_EXPLAIN}</span></td>\n	<td class=\"row2\"><textarea style=\"width:450px\" name=\"poll_option_text\" rows=\"5\" cols=\"35\">{POLL_OPTIONS}</textarea></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_POLL_MAX_OPTIONS}:</b><br /><span class=\"gensmall\">{L_POLL_MAX_OPTIONS_EXPLAIN}</span></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"poll_max_options\" size=\"3\" maxlength=\"3\" value=\"{POLL_MAX_OPTIONS}\" /></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_POLL_FOR}:</b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"poll_length\" size=\"3\" maxlength=\"3\" value=\"{POLL_LENGTH}\" />&nbsp;<b class=\"gen\">{L_DAYS}</b> <span class=\"gensmall\">{L_POLL_FOR_EXPLAIN}</span></td>\n</tr>\n<!-- IF S_POLL_VOTE_CHANGE -->\n	<tr>\n		<td class=\"row1\"><b class=\"genmed\">{L_POLL_VOTE_CHANGE}:</b><br /><span class=\"gensmall\">{L_POLL_VOTE_CHANGE_EXPLAIN}</span></td>\n		<td class=\"row2\"><input type=\"checkbox\" class=\"radio\" name=\"poll_vote_change\"{VOTE_CHANGE_CHECKED} /></td>\n	</tr>\n<!-- ENDIF -->\n\n<!-- IF S_POLL_DELETE -->\n	<tr>\n		<td class=\"row1\"><b class=\"genmed\">{L_POLL_DELETE}:</b></td>\n		<td class=\"row2\"><input type=\"checkbox\" class=\"radio\" name=\"poll_delete\"<!-- IF S_POLL_DELETE_CHECKED --> checked=\"checked\"<!-- ENDIF --> /></td>\n	</tr>\n<!-- ENDIF -->\n'),

(2,'posting_preview.html','posting_body.html:',1229079038,'\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr> \n	<th>{L_PREVIEW}</th>\n</tr>\n<tr> \n	<td class=\"row1\">{MINI_POST_IMG}<span class=\"postdetails\">{L_POSTED}: {POST_DATE} &nbsp;&nbsp;&nbsp; {L_POST_SUBJECT}: {PREVIEW_SUBJECT}</span></td>\n</tr>\n<!-- IF S_HAS_POLL_OPTIONS -->\n	<tr>\n		<td class=\"row2\" colspan=\"2\" align=\"center\"><br clear=\"all\" />\n			<table cellspacing=\"0\" cellpadding=\"4\" border=\"0\" align=\"center\">\n			<tr>\n				<td align=\"center\"><span class=\"gen\"><b>{POLL_QUESTION}</b></span><br /><span class=\"gensmall\">{L_POLL_LENGTH}</span></td>\n			</tr>\n			<tr>\n				<td align=\"center\">\n					<table cellspacing=\"0\" cellpadding=\"2\" border=\"0\">\n					<!-- BEGIN poll_option -->\n						<tr>\n							<td>\n							<!-- IF S_IS_MULTI_CHOICE -->\n								<input type=\"checkbox\" class=\"radio\" name=\"vote_id\" value=\"\" />\n							<!-- ELSE -->\n								<input type=\"radio\" class=\"radio\" name=\"vote_id\" value=\"\" />\n							<!-- ENDIF -->\n							</td>\n							<td><span class=\"gen\">{poll_option.POLL_OPTION_CAPTION}</span></td>\n						</tr>\n					<!-- END poll_option -->\n					</table>\n				</td>\n			</tr>\n			<tr>\n				<td align=\"center\"><span class=\"gensmall\">{L_MAX_VOTES}</span></td>\n			</tr>\n			</table>\n		</td>\n	</tr>\n<!-- ENDIF -->\n<tr> \n	<td class=\"row1\">\n		<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">\n		<tr>\n			<td><div class=\"postbody\">{PREVIEW_MESSAGE}</div>\n			<!-- IF .attachment -->\n				<br clear=\"all\" /><br />\n\n				<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n				<tr>\n					<td class=\"row3\"><b class=\"genmed\">{L_ATTACHMENTS}: </b></td>\n				</tr>\n				<!-- BEGIN attachment -->\n					<tr>\n						<td class=\"row2\">{attachment.DISPLAY_ATTACHMENT}</td>\n					</tr>\n				<!-- END attachment -->\n				</table>\n			<!-- ENDIF -->\n			<!-- IF PREVIEW_SIGNATURE --><span class=\"postbody\"><br />_________________<br />{PREVIEW_SIGNATURE}</span><!-- ENDIF --></td>\n		</tr>\n		</table>\n	</td>\n</tr>\n<tr>\n	<td class=\"spacer\"><img src=\"images/spacer.gif\" alt=\"\" width=\"1\" height=\"1\" /></td>\n</tr>\n</table>\n\n<br clear=\"all\" />\n'),

(2,'posting_progress_bar.html','',1229079038,'<!-- INCLUDE simple_header.html -->\n<script type=\"text/javascript\">\n// <![CDATA[\n	/**\n	* Close upload popup\n	*/\n	function close_popup()\n	{\n		if (opener != null)\n		{\n			if (opener.close_waitscreen != null)\n			{\n				if (opener.close_waitscreen == 1)\n				{\n					opener.close_waitscreen = 0;\n					self.close();\n					return 0;\n				}\n			}\n		}\n		setTimeout(\"close_popup()\", 1000);\n		return 0;\n	}\n// ]]>\n</script>\n\n<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"10\">\n<tr>\n	<td>\n		<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\">\n		<tr> \n			<td valign=\"top\" class=\"row1\" align=\"center\"><br /><span class=\"genmed\">{L_UPLOAD_IN_PROGRESS}</span><br /><br /><div style=\"align:center\">{PROGRESS_BAR}</div><br /><br /><span class=\"genmed\"><a href=\"#\" onclick=\"window.close(); return false;\">{L_CLOSE_WINDOW}</a></span><br /><br /></td>\n		</tr>\n		</table>\n	</td>\n</tr>\n</table>\n\n<script type=\"text/javascript\">\n// <![CDATA[\n	close_popup();	\n// ]]>\n</script>\n<!-- INCLUDE simple_footer.html -->\n'),

(2,'posting_review.html','posting_body.html:',1229079038,'\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th align=\"center\">{L_POST_REVIEW}</th>\n</tr>\n<tr>\n	<td class=\"row1\" align=\"center\"><span class=\"gen\">{L_POST_REVIEW_EXPLAIN}</span></td>\n</tr>\n<tr>\n	<td class=\"spacer\"><img src=\"images/spacer.gif\" alt=\"\" width=\"1\" height=\"1\" /></td>\n</tr>\n<tr>\n	<td class=\"row1\">\n		<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n		<tr>\n			<th width=\"22%\">{L_AUTHOR}</th>\n			<th>{L_MESSAGE}</th>\n		</tr>\n		<!-- BEGIN post_review_row -->\n\n			<!-- IF post_review_row.S_ROW_COUNT is even -->	<tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n\n				<td rowspan=\"2\" align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"top\"><a id=\"pr{post_review_row.POST_ID}\"></a>\n					<table width=\"150\" cellspacing=\"0\" cellpadding=\"4\" border=\"0\">\n					<tr>\n						<td align=\"center\"><b class=\"postauthor\">{post_review_row.POST_AUTHOR_FULL}</b></td>\n					</tr>\n					</table>\n				</td>\n				<td width=\"100%\">\n					<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n					<tr>\n						<td>&nbsp;</td>\n						<td class=\"gensmall\" valign=\"middle\" nowrap=\"nowrap\"><b>{L_POST_SUBJECT}:</b>&nbsp;</td>\n						<td class=\"gensmall\" width=\"100%\" valign=\"middle\">{post_review_row.POST_SUBJECT}</td>\n						<td>&nbsp;</td>\n					</tr>\n					</table>\n				</td>\n			</tr>\n\n			<!-- IF post_review_row.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n\n				<td valign=\"top\">\n					<table width=\"100%\" cellspacing=\"0\">\n					<tr>\n						<td valign=\"top\">\n							<table width=\"100%\" cellspacing=\"0\" cellpadding=\"2\">\n							<tr>\n								<td><div class=\"postbody\">{post_review_row.MESSAGE}</div>\n\n								<!-- IF post_review_row.S_HAS_ATTACHMENTS -->\n									<br clear=\"all\" /><br />\n\n									<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n									<tr>\n										<td class=\"row3\"><b class=\"genmed\">{L_ATTACHMENTS}: </b></td>\n									</tr>\n									<!-- BEGIN attachment -->\n										<tr>\n											<!-- IF post_review_row.attachment.S_ROW_COUNT is even --><td class=\"row2\"><!-- ELSE --><td class=\"row1\"><!-- ENDIF -->{post_review_row.attachment.DISPLAY_ATTACHMENT}</td>\n										</tr>\n									<!-- END attachment -->\n									</table>\n								<!-- ENDIF -->\n								\n								</td>\n							</tr>\n							</table>\n						</td>\n					</tr>\n					<tr>\n						<td>\n							<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n							<tr valign=\"middle\">\n								<td width=\"100%\">&nbsp;</td>\n								<td width=\"10\" nowrap=\"nowrap\"><!-- IF S_IS_BOT -->{post_review_row.MINI_POST_IMG}<!-- ELSE --><a href=\"{post_review_row.U_MINI_POST}\">{post_review_row.MINI_POST_IMG}</a><!-- ENDIF --></td>\n								<td class=\"gensmall\" nowrap=\"nowrap\"><b>{L_POSTED}:</b> {post_review_row.POST_DATE}</td>\n							</tr>\n							</table>\n						</td>\n					</tr>\n					</table>\n				</td>\n			</tr>\n			<tr>\n				<td class=\"spacer\" colspan=\"2\" height=\"1\"><img src=\"images/spacer.gif\" alt=\"\" width=\"1\" height=\"1\" /></td>\n			</tr>\n		<!-- END post_review_row -->\n		</table>\n	</td>\n</tr>\n</table>\n\n<br clear=\"all\" />'),

(2,'posting_smilies.html','',1229079038,'<!-- INCLUDE simple_header.html -->\n\n<script type=\"text/javascript\">\n// <![CDATA[\n	var form_name = \'postform\';\n	var text_name = \'message\';\n// ]]>\n</script>\n<script type=\"text/javascript\" src=\"{T_TEMPLATE_PATH}/editor.js\"></script>\n\n<table width=\"100%\" cellspacing=\"1\" cellpadding=\"4\" border=\"0\">\n<tr>\n	<td>\n		<table class=\"tablebg\" width=\"95%\" cellspacing=\"1\" cellpadding=\"4\" border=\"0\">\n		<tr>\n			<th>{L_SMILIES}</th>\n		</tr>\n		<tr>\n			<td class=\"row1\" align=\"center\" valign=\"middle\"><!-- BEGIN smiley --> <a href=\"#\" onclick=\"insert_text(\'{smiley.A_SMILEY_CODE}\', true, true); return false;\"><img src=\"{smiley.SMILEY_IMG}\" width=\"{smiley.SMILEY_WIDTH}\" height=\"{smiley.SMILEY_HEIGHT}\" alt=\"{smiley.SMILEY_CODE}\" title=\"{smiley.SMILEY_DESC}\" hspace=\"2\" vspace=\"2\" /></a> <!-- END smiley --><br /><a class=\"nav\" href=\"#\" onclick=\"window.close(); return false;\">{L_CLOSE_WINDOW}</a></td>\n		</tr>\n		</table>\n	</td>\n</tr>\n</table>\n\n<!-- INCLUDE simple_footer.html -->'),

(2,'posting_topic_review.html','mcp_post.html:mcp_post.html:posting_body.html:',1229079038,'\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th align=\"center\">{L_TOPIC_REVIEW} - {TOPIC_TITLE}</th>\n</tr>\n<tr>\n	<td class=\"row1\"><div style=\"overflow: auto; width: 100%; height: 300px;\">\n\n		<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n		<tr>\n			<th width=\"22%\">{L_AUTHOR}</th>\n			<th>{L_MESSAGE}</th>\n		</tr>\n		<!-- BEGIN topic_review_row -->\n\n			<!-- IF topic_review_row.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n\n				<td rowspan=\"2\" align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"top\"><a id=\"pr{topic_review_row.POST_ID}\"></a>\n					<table width=\"150\" cellspacing=\"0\">\n					<tr>\n						<td align=\"center\"><b class=\"postauthor\"<!-- IF topic_review_row.POST_AUTHOR_COLOUR --> style=\"color: {topic_review_row.POST_AUTHOR_COLOUR}\"<!-- ENDIF -->>{topic_review_row.POST_AUTHOR}</b></td>\n					</tr>\n					</table>\n				</td>\n				<td width=\"100%\">\n					<table width=\"100%\" cellspacing=\"0\">\n					<tr>\n						<td>&nbsp;</td>\n						<td class=\"gensmall\" valign=\"middle\" nowrap=\"nowrap\"><b>{L_POST_SUBJECT}:</b>&nbsp;</td>\n						<td class=\"gensmall\" width=\"100%\" valign=\"middle\">{topic_review_row.POST_SUBJECT}</td>\n						<td valign=\"top\" nowrap=\"nowrap\">&nbsp;<!-- IF topic_review_row.POSTER_QUOTE and topic_review_row.DECODED_MESSAGE --><a href=\"#\" onclick=\"addquote({topic_review_row.POST_ID},\'{topic_review_row.POSTER_QUOTE}\'); return false;\">{QUOTE_IMG}</a><!-- ENDIF --></td>\n					</tr>\n					</table>\n				</td>\n			</tr>\n\n			<!-- IF topic_review_row.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n\n				<td valign=\"top\">\n					<table width=\"100%\" cellspacing=\"0\">\n					<tr>\n						<td valign=\"top\">\n							<table width=\"100%\" cellspacing=\"0\" cellpadding=\"2\">\n							<tr>\n								<td>\n									<div class=\"postbody\">{topic_review_row.MESSAGE}</div>\n\n									<!-- IF topic_review_row.S_HAS_ATTACHMENTS -->\n										<br clear=\"all\" /><br />\n\n										<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n										<tr>\n											<td class=\"row3\"><b class=\"genmed\">{L_ATTACHMENTS}: </b></td>\n										</tr>\n										<!-- BEGIN attachment -->\n											<tr>\n												<!-- IF topic_review_row.attachment.S_ROW_COUNT is even --><td class=\"row2\"><!-- ELSE --><td class=\"row1\"><!-- ENDIF -->{topic_review_row.attachment.DISPLAY_ATTACHMENT}</td>\n											</tr>\n										<!-- END attachment -->\n										</table>\n									<!-- ENDIF -->\n\n									<!-- IF topic_review_row.POSTER_QUOTE and topic_review_row.DECODED_MESSAGE -->\n										<div id=\"message_{topic_review_row.POST_ID}\" style=\"display: none;\">{topic_review_row.DECODED_MESSAGE}</div>\n									<!-- ENDIF -->\n								</td>\n							</tr>\n							</table>\n						</td>\n					</tr>\n					<tr>\n						<td>\n							<table width=\"100%\" cellspacing=\"0\">\n							<tr valign=\"middle\">\n								<td width=\"100%\" align=\"{S_CONTENT_FLOW_BEGIN}\"><span class=\"gensmall\"><!-- IF topic_review_row.U_MCP_DETAILS -->[ <a href=\"{topic_review_row.U_MCP_DETAILS}\">{L_POST_DETAILS}</a> ]<!-- ENDIF --></span></td>\n								<td width=\"10\" nowrap=\"nowrap\"><!-- IF S_IS_BOT -->{topic_review_row.MINI_POST_IMG}<!-- ELSE --><a href=\"{topic_review_row.U_MINI_POST}\">{topic_review_row.MINI_POST_IMG}</a><!-- ENDIF --></td>\n								<td class=\"gensmall\" nowrap=\"nowrap\"><b>{L_POSTED}:</b> {topic_review_row.POST_DATE}</td>\n							</tr>\n							</table>\n						</td>\n					</tr>\n					</table>\n				</td>\n			</tr>\n			<tr>\n				<td class=\"spacer\" colspan=\"2\"><img src=\"images/spacer.gif\" alt=\"\" width=\"1\" height=\"1\" /></td>\n			</tr>\n		<!-- END topic_review_row -->\n		</table>\n	</div></td>\n</tr>\n</table>\n\n<br clear=\"all\" />\n'),

(2,'report_body.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<form method=\"post\" id=\"report\" action=\"{S_REPORT_ACTION}\">\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"2\">{L_REPORT_POST}</th>\n</tr>\n<tr>\n	<td class=\"row3\" colspan=\"2\"><span class=\"gensmall\">{L_REPORT_POST_EXPLAIN}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"22%\"><b class=\"gen\">{L_REASON}:</b></td>\n	<td class=\"row2\" width=\"78%\"><select name=\"reason_id\">\n		<!-- BEGIN reason --><option value=\"{reason.ID}\"<!-- IF reason.S_SELECTED --> selected=\"selected\"<!-- ENDIF -->>{reason.TITLE} &raquo; {reason.DESCRIPTION}</option><!-- END reason -->\n	</select></td>\n</tr>\n<!-- IF S_CAN_NOTIFY -->\n	<tr>\n		<td class=\"row1\"><span class=\"gen\"><b>{L_REPORT_NOTIFY}:</b></span><br /><span class=\"gensmall\">{L_REPORT_NOTIFY_EXPLAIN}</span></td>\n		<td class=\"row2\"><span class=\"gen\"><input type=\"radio\" class=\"radio\" name=\"notify\" value=\"1\"<!-- IF S_NOTIFY --> checked=\"checked\"<!-- ENDIF --> />&nbsp; {L_YES} &nbsp;<input type=\"radio\" class=\"radio\" name=\"notify\" value=\"0\"<!-- IF not S_NOTIFY --> checked=\"checked\"<!-- ENDIF --> />&nbsp; {L_NO}</span></td>\n	</tr>\n<!-- ENDIF -->\n<tr>\n	<td class=\"row1\" valign=\"top\"><span class=\"gen\"><b>{L_MORE_INFO}:</b></span><br /><span class=\"gensmall\">{L_CAN_LEAVE_BLANK}</span></td>\n	<td class=\"row2\"><textarea class=\"post\" name=\"report_text\" rows=\"10\" cols=\"50\">{REPORT_TEXT}</textarea></td>\n</tr>\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\"><input type=\"submit\" name=\"submit\" class=\"btnmain\" value=\"{L_SUBMIT}\" />&nbsp;<input type=\"submit\" name=\"cancel\" class=\"btnlite\" value=\"{L_CANCEL}\" /></td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<br clear=\"all\" />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<div style=\"float: {S_CONTENT_FLOW_END};\"><!-- INCLUDE jumpbox.html --></div>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'searchbox.html','viewforum_body.html:viewtopic_body.html:',1229079038,'<form method=\"post\" name=\"search\" action=\"{S_SEARCHBOX_ACTION}\"><span class=\"gensmall\">{L_SEARCH_FOR}:</span> <input class=\"post\" type=\"text\" name=\"keywords\" size=\"20\" /> <input class=\"btnlite\" type=\"submit\" value=\"{L_GO}\" /></form>\n'),

(2,'search_body.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<div id=\"pagecontent\">\n\n	<form method=\"get\" action=\"{S_SEARCH_ACTION}\">\n	\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th colspan=\"4\">{L_SEARCH_QUERY}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" colspan=\"2\" width=\"50%\"><b class=\"genmed\">{L_SEARCH_KEYWORDS}: </b><br /><span class=\"gensmall\">{L_SEARCH_KEYWORDS_EXPLAIN}</span></td>\n		<td class=\"row2\" colspan=\"2\" valign=\"top\"><input type=\"text\" style=\"width: 300px\" class=\"post\" name=\"keywords\" size=\"30\" /><br /><input type=\"radio\" class=\"radio\" name=\"terms\" value=\"all\" checked=\"checked\" /> <span class=\"genmed\">{L_SEARCH_ALL_TERMS}</span><br /><input type=\"radio\" class=\"radio\" name=\"terms\" value=\"any\" /> <span class=\"genmed\">{L_SEARCH_ANY_TERMS}</span></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" colspan=\"2\"><b class=\"genmed\">{L_SEARCH_AUTHOR}:</b><br /><span class=\"gensmall\">{L_SEARCH_AUTHOR_EXPLAIN}</span></td>\n		<td class=\"row2\" colspan=\"2\" valign=\"middle\"><input type=\"text\" style=\"width: 300px\" class=\"post\" name=\"author\" size=\"30\" /></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" colspan=\"2\"><b class=\"genmed\">{L_SEARCH_FORUMS}: </b><br /><span class=\"gensmall\">{L_SEARCH_FORUMS_EXPLAIN}</span></td>\n		<td class=\"row2\" colspan=\"2\"><select name=\"fid[]\" multiple=\"multiple\" size=\"5\">{S_FORUM_OPTIONS}</select></td>\n	</tr>\n	<tr>\n		<th colspan=\"4\">{L_SEARCH_OPTIONS}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" width=\"25%\" nowrap=\"nowrap\"><b class=\"genmed\">{L_SEARCH_SUBFORUMS}: </b></td>\n		<td class=\"row2\" width=\"25%\" nowrap=\"nowrap\"><input type=\"radio\" class=\"radio\" name=\"sc\" value=\"1\" checked=\"checked\" /> <span class=\"genmed\">{L_YES}</span>&nbsp;&nbsp;<input type=\"radio\" class=\"radio\" name=\"sc\" value=\"0\" /> <span class=\"genmed\">{L_NO}</span></td>\n		<td class=\"row1\" width=\"25%\" nowrap=\"nowrap\"><b class=\"genmed\">{L_SEARCH_WITHIN}: </b></td>\n		<td class=\"row2\" width=\"25%\" nowrap=\"nowrap\"><input type=\"radio\" class=\"radio\" name=\"sf\" value=\"all\" checked=\"checked\" /> <span class=\"genmed\">{L_SEARCH_TITLE_MSG}</span><br /><input type=\"radio\" class=\"radio\" name=\"sf\" value=\"msgonly\" /> <span class=\"genmed\">{L_SEARCH_MSG_ONLY}</span> <br /><input type=\"radio\" class=\"radio\" name=\"sf\" value=\"titleonly\" /> <span class=\"genmed\">{L_SEARCH_TITLE_ONLY}</span> <br /><input type=\"radio\" class=\"radio\" name=\"sf\" value=\"firstpost\" /> <span class=\"genmed\">{L_SEARCH_FIRST_POST}</span></td>\n	</tr>\n	<tr>\n		<td class=\"row1\"><b class=\"genmed\">{L_RESULT_SORT}: </b></td>\n		<td class=\"row2\" nowrap=\"nowrap\">{S_SELECT_SORT_KEY}<br /><input type=\"radio\" class=\"radio\" name=\"sd\" value=\"a\" /> <span class=\"genmed\">{L_SORT_ASCENDING}</span><br /><input type=\"radio\" class=\"radio\" name=\"sd\" value=\"d\" checked=\"checked\" /> <span class=\"genmed\">{L_SORT_DESCENDING}</span></td>\n		<td class=\"row1\" nowrap=\"nowrap\"><b class=\"genmed\">{L_DISPLAY_RESULTS}: </b></td>\n		<td class=\"row2\" nowrap=\"nowrap\"><input type=\"radio\" class=\"radio\" name=\"sr\" value=\"posts\" checked=\"checked\" /> <span class=\"genmed\">{L_POSTS}</span>&nbsp;&nbsp;<input type=\"radio\" class=\"radio\" name=\"sr\" value=\"topics\" /> <span class=\"genmed\">{L_TOPICS}</span></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" width=\"25%\"><b class=\"genmed\">{L_RESULT_DAYS}: </b></td>\n		<td class=\"row2\" width=\"25%\" nowrap=\"nowrap\">{S_SELECT_SORT_DAYS}</td>\n		<td class=\"row1\" nowrap=\"nowrap\"><b class=\"genmed\">{L_RETURN_FIRST}: </b></td>\n		<td class=\"row2\" nowrap=\"nowrap\"><select name=\"ch\">{S_CHARACTER_OPTIONS}</select> <span class=\"genmed\">{L_POST_CHARACTERS}</span></td>\n	</tr>\n	<tr>\n		<td class=\"cat\" colspan=\"4\" align=\"center\">{S_HIDDEN_FIELDS}<input class=\"btnmain\" name=\"submit\" type=\"submit\" value=\"{L_SEARCH}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" /></td>\n	</tr>\n	</table>\n	\n	</form>\n\n	<br clear=\"all\" />\n\n	<!-- IF .recentsearch -->\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th colspan=\"2\">{L_RECENT_SEARCHES}</th>\n	</tr>\n	<!-- BEGIN recentsearch -->\n		<!-- IF recentsearch.S_ROW_COUNT is even --><tr class=\"row2\"><!-- ELSE --><tr class=\"row1\"><!-- ENDIF -->\n\n			<td class=\"genmed\" style=\"padding: 4px;\" width=\"70%\"><a href=\"{recentsearch.U_KEYWORDS}\">{recentsearch.KEYWORDS}</a></td>\n			<td class=\"genmed\" style=\"padding: 4px;\" width=\"30%\" align=\"center\">{recentsearch.TIME}</td>\n		</tr>\n	<!-- END recentsearch -->\n	</table>\n\n	<br clear=\"all\" />\n	<!-- ENDIF -->\n\n	</div>\n\n	<!-- INCLUDE breadcrumbs.html -->\n\n	<br clear=\"all\" />\n\n	<div align=\"{S_CONTENT_FLOW_END}\"><!-- INCLUDE jumpbox.html --></div>\n\n<!-- INCLUDE overall_footer.html -->');
insert into `phpbb_styles_template_data` values 

(2,'search_results.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<form method=\"post\" action=\"{S_SEARCH_ACTION}\">\n\n<table width=\"100%\" cellspacing=\"1\">\n<tr>\n	<td colspan=\"2\"><span class=\"titles\"><!-- IF SEARCH_TITLE -->{SEARCH_TITLE}<!-- ELSE -->{SEARCH_MATCHES}<!-- ENDIF --></span><br /></td>\n</tr>\n<tr>\n	<td class=\"genmed\"><!-- IF SEARCH_TOPIC -->{L_SEARCHED_TOPIC}: <a href=\"{U_SEARCH_TOPIC}\"><b>{SEARCH_TOPIC}</b></a><br /><!-- ENDIF --><!-- IF SEARCH_WORDS -->{L_SEARCHED_FOR}: <a href=\"{U_SEARCH_WORDS}\"><b>{SEARCH_WORDS}</b></a><!-- ENDIF --><!-- IF IGNORED_WORDS --> {L_IGNORED_TERMS}: <b>{IGNORED_WORDS}</b><!-- ENDIF --></td>\n	<td align=\"{S_CONTENT_FLOW_END}\"><!-- IF SEARCH_IN_RESULTS --><span class=\"genmed\">{L_SEARCH_IN_RESULTS}: </span><input type=\"text\" name=\"add_keywords\" value=\"\" /> <input class=\"btnlite\" type=\"submit\" name=\"submit\" value=\"{L_GO}\" /><!-- ENDIF --></td>\n</tr>\n</table>\n\n<br clear=\"all\" />\n\n<!-- IF S_SHOW_TOPICS -->\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th width=\"4%\" nowrap=\"nowrap\">&nbsp;</th>\n		<th colspan=\"2\" nowrap=\"nowrap\">&nbsp;{L_TOPICS}&nbsp;</th>\n		<th nowrap=\"nowrap\">&nbsp;{L_AUTHOR}&nbsp;</th>\n		<th nowrap=\"nowrap\">&nbsp;{L_REPLIES}&nbsp;</th>\n		<th nowrap=\"nowrap\">&nbsp;{L_VIEWS}&nbsp;</th>\n		<th nowrap=\"nowrap\">&nbsp;{L_LAST_POST}&nbsp;</th>\n	</tr>\n	<!-- BEGIN searchresults -->\n		<tr valign=\"middle\">\n			<td class=\"row1\" width=\"25\" align=\"center\">{searchresults.TOPIC_FOLDER_IMG}</td>\n			<td class=\"row1\" width=\"25\" align=\"center\">\n			<!-- IF searchresults.TOPIC_ICON_IMG -->\n				<img src=\"{T_ICONS_PATH}{searchresults.TOPIC_ICON_IMG}\" width=\"{searchresults.TOPIC_ICON_IMG_WIDTH}\" height=\"{searchresults.TOPIC_ICON_IMG_HEIGHT}\" alt=\"\" title=\"\" />\n			<!-- ENDIF -->\n			</td>\n			<td class=\"row1\">\n				<!-- IF searchresults.S_UNREAD_TOPIC --><a href=\"{searchresults.U_NEWEST_POST}\">{NEWEST_POST_IMG}</a><!-- ENDIF -->\n				{searchresults.ATTACH_ICON_IMG} <a href=\"{searchresults.U_VIEW_TOPIC}\" class=\"topictitle\">{searchresults.TOPIC_TITLE}</a>\n				<!-- IF searchresults.S_TOPIC_UNAPPROVED or searchresults.S_POSTS_UNAPPROVED -->\n					<a href=\"{searchresults.U_MCP_QUEUE}\">{searchresults.UNAPPROVED_IMG}</a>&nbsp;\n				<!-- ENDIF -->\n				<!-- IF searchresults.S_TOPIC_REPORTED -->\n					<a href=\"{searchresults.U_MCP_REPORT}\">{REPORTED_IMG}</a>&nbsp;\n				<!-- ENDIF -->\n				<!-- IF searchresults.PAGINATION -->\n					<p class=\"gensmall\"> [ {GOTO_PAGE_IMG}{L_GOTO_PAGE}: {searchresults.PAGINATION} ] </p>\n				<!-- ENDIF -->\n				<!-- IF searchresults.S_TOPIC_GLOBAL -->\n					<p class=\"gensmall\">{L_GLOBAL}</p>\n				<!-- ELSE -->\n					<p class=\"gensmall\">{L_IN} <a href=\"{searchresults.U_VIEW_FORUM}\">{searchresults.FORUM_TITLE}</a></p>\n				<!-- ENDIF -->\n			</td>\n			<td class=\"row2\" width=\"100\" align=\"center\"><p class=\"topicauthor\">{searchresults.TOPIC_AUTHOR_FULL}</p></td>\n			<td class=\"row1\" width=\"50\" align=\"center\"><p class=\"topicdetails\">{searchresults.TOPIC_REPLIES}</p></td>\n			<td class=\"row2\" width=\"50\" align=\"center\"><p class=\"topicdetails\">{searchresults.TOPIC_VIEWS}</p></td>\n			<td class=\"row1\" width=\"120\" align=\"center\">\n				<p class=\"topicdetails\">{searchresults.LAST_POST_TIME}</p>\n				<p class=\"topicdetails\">{searchresults.LAST_POST_AUTHOR_FULL}\n					<a href=\"{searchresults.U_LAST_POST}\">{LAST_POST_IMG}</a>\n				</p>\n			</td>\n		</tr>\n	<!-- BEGINELSE -->\n		<tr valign=\"middle\">\n			<td colspan=\"7\" class=\"row3\" align=\"center\">{L_NO_SEARCH_RESULTS}</td>\n		</tr>\n	<!-- END searchresults -->\n	<tr>\n		<td class=\"cat\" colspan=\"7\" valign=\"middle\" align=\"center\"><!-- IF S_SELECT_SORT_DAYS or S_SELECT_SORT_KEY --><span class=\"gensmall\">{L_DISPLAY_POSTS}:</span> {S_SELECT_SORT_DAYS}<!-- IF S_SELECT_SORT_KEY -->&nbsp;<span class=\"gensmall\">{L_SORT_BY}:</span> {S_SELECT_SORT_KEY} {S_SELECT_SORT_DIR}<!-- ENDIF -->&nbsp;<input class=\"btnlite\" type=\"submit\" value=\"{L_GO}\" name=\"sort\" /><!-- ENDIF --></td>\n	</tr>\n	</table>\n\n<!-- ELSE -->\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th width=\"150\" nowrap=\"nowrap\">{L_AUTHOR}</th>\n		<th width=\"100%\" nowrap=\"nowrap\">{L_MESSAGE}</th>\n	</tr>\n\n	<!-- BEGIN searchresults -->\n		<tr class=\"row2\">\n		<!-- IF searchresults.S_IGNORE_POST -->\n			<td class=\"gensmall\" colspan=\"2\" height=\"25\" align=\"center\">{searchresults.L_IGNORE_POST}</td>\n		<!-- ELSE -->\n				<td colspan=\"2\" height=\"25\"><p class=\"topictitle\"><a name=\"p{searchresults.POST_ID}\" id=\"p{searchresults.POST_ID}\"></a>&nbsp;<!-- IF searchresults.FORUM_TITLE -->{L_FORUM}: <a href=\"{searchresults.U_VIEW_FORUM}\">{searchresults.FORUM_TITLE}</a><!-- ELSE -->{L_GLOBAL}<!-- ENDIF --> &nbsp; {L_TOPIC}: <a href=\"{searchresults.U_VIEW_TOPIC}\">{searchresults.TOPIC_TITLE}</a> </p></td>\n			</tr>\n			<tr class=\"row1\">\n				<td width=\"150\" align=\"center\" valign=\"middle\"><b class=\"postauthor\">{searchresults.POST_AUTHOR_FULL}</b></td>\n				<td height=\"25\">\n					<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n					<tr>\n						<td class=\"gensmall\">\n							<div style=\"float: {S_CONTENT_FLOW_BEGIN};\">\n							<!-- IF searchresults.POST_SUBJECT neq \"\" -->\n								&nbsp;<b>{L_POST_SUBJECT}:</b> <a href=\"{searchresults.U_VIEW_POST}\">{searchresults.POST_SUBJECT}</a>\n							<!-- ELSE -->\n								[ <a href=\"{searchresults.U_VIEW_POST}\">{L_JUMP_TO_POST}</a> ]\n							<!-- ENDIF -->\n							</div>\n							<div style=\"float: {S_CONTENT_FLOW_END};\"><b>{L_POSTED}:</b> {searchresults.POST_DATE}&nbsp;</div>\n						</td>\n					</tr>\n					</table>\n				</td>\n			</tr>\n			<tr class=\"row1\">\n				<td width=\"150\" align=\"center\" valign=\"top\"><br /><span class=\"postdetails\">{L_REPLIES}: <b>{searchresults.TOPIC_REPLIES}</b><br />{L_VIEWS}: <b>{searchresults.TOPIC_VIEWS}</b></span><br /><br /></td>\n				<td valign=\"top\">\n					<table width=\"100%\" cellspacing=\"5\">\n					<tr>\n						<td class=\"postbody\">{searchresults.MESSAGE}</td>\n					</tr>\n					</table>\n				</td>\n			</tr>\n		<!-- ENDIF -->\n		<tr>\n			<td class=\"spacer\" colspan=\"2\"><img src=\"images/spacer.gif\" height=\"1\" alt=\"\" /></td>\n		</tr>\n	<!-- BEGINELSE -->\n		<tr valign=\"middle\">\n			<td colspan=\"2\" class=\"row3\" align=\"center\">{L_NO_SEARCH_RESULTS}</td>\n		</tr>\n	<!-- END searchresults -->\n	<tr>\n		<td class=\"cat\" colspan=\"2\" align=\"center\"><!-- IF S_SELECT_SORT_KEY --><span class=\"gensmall\">{L_SORT_BY}:</span> {S_SELECT_SORT_KEY} {S_SELECT_SORT_DIR}&nbsp;<input class=\"btnlite\" type=\"submit\" name=\"sort\" value=\"{L_GO}\" /><!-- ENDIF --></td>\n	</tr>\n	</table>\n<!-- ENDIF -->\n\n</form>\n\n<div class=\"gensmall\" style=\"float: {S_CONTENT_FLOW_BEGIN};\"><span class=\"nav\">{PAGE_NUMBER}</span> [ {SEARCH_MATCHES} ]</div>\n<div class=\"nav\" style=\"float: {S_CONTENT_FLOW_END};\"><!-- INCLUDE pagination.html --></div>\n\n<br clear=\"all\" /><br />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<br clear=\"all\" />\n\n<div align=\"{S_CONTENT_FLOW_END}\"><!-- INCLUDE jumpbox.html --></div>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'simple_footer.html','memberlist_body.html:memberlist_im.html:posting_progress_bar.html:posting_smilies.html:ucp_pm_popup.html:viewonline_whois.html:',1229079038,'\n</div>\n\n<!--\n	We request you retain the full copyright notice below including the link to www.phpbb.com.\n	This not only gives respect to the large amount of time given freely by the developers\n	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain\n	the full copyright we ask you at least leave in place the \"Powered by phpBB\" line, with\n	\"phpBB\" linked to www.phpbb.com. If you refuse to include even this then support on our\n	forums may be affected.\n\n	The phpBB Group : 2006\n//-->\n\n<div id=\"wrapfooter\">\n	<span class=\"copyright\">Powered by <a href=\"http://www.phpbb.com/\">phpBB</a> &copy; 2000, 2002, 2005, 2007 phpBB Group</span>\n</div>\n\n</body>\n</html>'),

(2,'simple_header.html','memberlist_body.html:memberlist_im.html:posting_progress_bar.html:posting_smilies.html:ucp_pm_popup.html:viewonline_whois.html:',1229079038,'<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">\n<html xmlns=\"http://www.w3.org/1999/xhtml\" dir=\"{S_CONTENT_DIRECTION}\" lang=\"{S_USER_LANG}\" xml:lang=\"{S_USER_LANG}\">\n<head>\n\n<meta http-equiv=\"content-type\" content=\"text/html; charset={S_CONTENT_ENCODING}\" />\n<meta http-equiv=\"content-language\" content=\"{S_USER_LANG}\" />\n<meta http-equiv=\"content-style-type\" content=\"text/css\" />\n<meta http-equiv=\"imagetoolbar\" content=\"no\" />\n<meta name=\"resource-type\" content=\"document\" />\n<meta name=\"distribution\" content=\"global\" />\n<meta name=\"copyright\" content=\"2000, 2002, 2005, 2007 phpBB Group\" />\n<meta name=\"keywords\" content=\"\" />\n<meta name=\"description\" content=\"\" />\n{META}\n<title>{SITENAME} &bull; <!-- IF S_IN_MCP -->{L_MCP} &bull; <!-- ELSEIF S_IN_UCP -->{L_UCP} &bull; <!-- ENDIF -->{PAGE_TITLE}</title>\n\n<link rel=\"stylesheet\" href=\"{T_STYLESHEET_LINK}\" type=\"text/css\" />\n</head>\n\n<body class=\"{S_CONTENT_DIRECTION}\">\n<a name=\"top\"></a>\n<div id=\"wrapcentre\">'),

(2,'ucp_agreement.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n\n\n<!-- IF S_SHOW_COPPA or S_REGISTRATION -->\n\n	<form method=\"post\" action=\"{S_UCP_ACTION}\">\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th height=\"25\">{SITENAME} - {L_REGISTRATION}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" align=\"center\">\n			<table width=\"90%\" cellspacing=\"2\" cellpadding=\"2\" border=\"0\" align=\"center\">\n			<tr>\n				<!-- IF S_SHOW_COPPA -->\n					<td class=\"gen\" align=\"center\"><br />{L_COPPA_BIRTHDAY}<br /><br /><a href=\"{U_COPPA_NO}\">{L_COPPA_NO}</a> :: <a href=\"{U_COPPA_YES}\">{L_COPPA_YES}</a><br /><br /></td>\n				<!-- ELSE -->\n					<td>\n						<span class=\"genmed\"><br />{L_TERMS_OF_USE}<br /><br /></span>\n						<div align=\"center\">\n							<input class=\"btnlite\" type=\"submit\" id=\"agreed\" name=\"agreed\" value=\"{L_AGREE}\" /><br /><br />\n							<input class=\"btnlite\" type=\"submit\" name=\"not_agreed\" value=\"{L_NOT_AGREE}\" />\n						</div>\n					</td>\n				<!-- ENDIF -->\n			</tr>\n			</table>\n		</td>\n	</tr>\n	</table>\n	{S_HIDDEN_FIELDS}\n	{S_FORM_TOKEN}\n	</form>\n\n<!-- ELSEIF S_AGREEMENT -->\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th height=\"25\">{SITENAME} - {AGREEMENT_TITLE}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" align=\"center\">\n			<table width=\"90%\" cellspacing=\"2\" cellpadding=\"2\" border=\"0\" align=\"center\">\n			<tr>\n				<td>\n					<span class=\"genmed\"><br />{AGREEMENT_TEXT}<br /><br /></span>\n					<div align=\"center\">\n						<a href=\"{U_BACK}\">{L_BACK}</a>\n					</div>\n				</td>\n			</tr>\n			</table>\n		</td>\n	</tr>\n	</table>\n\n<!-- ENDIF -->\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'ucp_attachments.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<!-- IF S_ATTACHMENT_ROWS -->\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th nowrap=\"nowrap\">#</th>\n		<th nowrap=\"nowrap\" width=\"15%\"><a href=\"{U_SORT_FILENAME}\">{L_FILENAME}</a></th>\n		<th nowrap=\"nowrap\" width=\"5%\"><a href=\"{U_SORT_POST_TIME}\">{L_POST_TIME}</a></th>\n		<th nowrap=\"nowrap\" width=\"5%\"><a href=\"{U_SORT_FILESIZE}\">{L_FILESIZE}</a></th>\n		<th nowrap=\"nowrap\" width=\"5%\"><a href=\"{U_SORT_DOWNLOADS}\">{L_DOWNLOADS}</a></th>\n		<th width=\"2%\" nowrap=\"nowrap\">{L_DELETE}</th>\n	</tr>\n	<!-- IF TOTAL_ATTACHMENTS -->\n		<tr>\n			<td class=\"row3\" colspan=\"6\">\n				<table width=\"100%\" cellspacing=\"1\">\n				<tr>\n					<td class=\"nav\" valign=\"middle\" nowrap=\"nowrap\">&nbsp;{PAGE_NUMBER}<br /></td>\n					<td class=\"gensmall\" nowrap=\"nowrap\">&nbsp;[ {TOTAL_ATTACHMENTS} ]&nbsp;</td>\n					<td class=\"gensmall\" width=\"100%\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\"><!-- INCLUDE pagination.html --></td>\n				</tr>\n				</table>\n			</td>\n		</tr>\n	<!-- ENDIF -->\n	<!-- BEGIN attachrow -->\n		<!-- IF attachrow.S_ROW_COUNT is even --><tr class=\"row2\"><!-- ELSE --><tr class=\"row1\"><!-- ENDIF -->\n\n		<td class=\"genmed\" style=\"padding: 4px;\" align=\"center\" width=\"2%\">&nbsp;{attachrow.ROW_NUMBER}&nbsp;</td>\n		<td style=\"padding: 4px;\"><a class=\"gen\" href=\"{attachrow.U_VIEW_ATTACHMENT}\">{attachrow.FILENAME}</a><br /><span class=\"gensmall\"><!-- IF attachrow.S_IN_MESSAGE --><b>{L_PM}: </b><!-- ELSE --><b>{L_TOPIC}: </b><!-- ENDIF --><a href=\"{attachrow.U_VIEW_TOPIC}\">{attachrow.TOPIC_TITLE}</a></span></td>\n		<td class=\"gensmall\" style=\"padding: 4px;\" align=\"center\" valign=\"middle\" nowrap=\"nowrap\">&nbsp;{attachrow.POST_TIME}&nbsp;</td>\n		<td class=\"genmed\" style=\"padding: 4px;\" align=\"center\" valign=\"middle\" nowrap=\"nowrap\">{attachrow.SIZE}</td>\n		<td class=\"genmed\" style=\"padding: 4px;\" align=\"center\">{attachrow.DOWNLOAD_COUNT}</td>\n		<td style=\"padding: 4px;\" align=\"center\" valign=\"middle\"><input type=\"checkbox\" class=\"radio\" name=\"attachment[{attachrow.ATTACH_ID}]\" value=\"1\" /></td>\n	</tr>\n	<!-- END attachrow -->\n	<tr> \n		<td class=\"cat\" colspan=\"6\"><div style=\"float: {S_CONTENT_FLOW_BEGIN};\"><span class=\"gensmall\">{L_SORT_BY}: </span><select name=\"sk\">{S_SORT_OPTIONS}</select> <select name=\"sd\">{S_ORDER_SELECT}</select>&nbsp;<input class=\"btnlite\" type=\"submit\" name=\"sort\" value=\"{L_SORT}\" /></div><div style=\"float: {S_CONTENT_FLOW_END};\"><input class=\"btnlite\" type=\"submit\" name=\"delete\" value=\"{L_DELETE_MARKED}\" />&nbsp;</div></td>\n	</tr>\n	</table>\n\n	<div style=\"float: {S_CONTENT_FLOW_END};\"><b class=\"gensmall\"><a href=\"#\" onclick=\"marklist(\'ucp\', \'attachment\', true); return false;\">{L_MARK_ALL}</a> :: <a href=\"#\" onclick=\"marklist(\'ucp\', \'attachment\', false); return false;\">{L_UNMARK_ALL}</a></b></div>\n\n<!-- ELSE -->\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th>{L_TITLE}</th>\n	</tr>\n	<tr class=\"row1\">\n		<td align=\"center\"><b class=\"genmed\">{L_UCP_NO_ATTACHMENTS}</b></td>\n	</tr>\n	</table>\n\n<!-- ENDIF -->\n\n<!-- INCLUDE ucp_footer.html -->'),

(2,'ucp_footer.html','posting_body.html:ucp_attachments.html:ucp_groups_manage.html:ucp_groups_membership.html:ucp_main_bookmarks.html:ucp_main_drafts.html:ucp_main_front.html:ucp_main_subscribed.html:ucp_pm_options.html:ucp_pm_viewfolder.html:ucp_pm_viewmessage.html:ucp_prefs_personal.html:ucp_prefs_post.html:ucp_prefs_view.html:ucp_profile_avatar.html:ucp_profile_profile_info.html:ucp_profile_reg_details.html:ucp_profile_signature.html:ucp_zebra_foes.html:ucp_zebra_friends.html:',1229079038,'\n	<!-- IF not S_PRIVMSGS or S_SHOW_DRAFTS -->	{S_FORM_TOKEN}</form><!-- ENDIF --></td>\n</tr>\n</table>\n<!-- IF (S_SHOW_PM_BOX or S_EDIT_POST) and S_POST_ACTION -->{S_FORM_TOKEN}</form><!-- ENDIF -->\n\n<br clear=\"all\" />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<div align=\"{S_CONTENT_FLOW_END}\"><!-- INCLUDE jumpbox.html --></div>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'ucp_groups_manage.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<!-- IF S_EDIT -->\n\n	<!-- IF S_ERROR -->\n		<div class=\"errorbox\">\n			<h3>{L_WARNING}</h3>\n			<p>{ERROR_MSG}</p>\n		</div>\n	<!-- ENDIF -->\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th colspan=\"2\">{L_USERGROUPS}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" colspan=\"2\"><span class=\"genmed\">{L_GROUPS_EXPLAIN}</span></td>\n	</tr>\n\n	<tr>\n		<th colspan=\"2\">{L_GROUP_DETAILS}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" width=\"35%\"><label<!-- IF not S_SPECIAL_GROUP --> for=\"group_name\"<!-- ENDIF -->>{L_GROUP_NAME}:</label></td>\n		<td class=\"row2\"><!-- IF S_SPECIAL_GROUP --><b<!-- IF GROUP_COLOUR --> style=\"color: #{GROUP_COLOUR};\"<!-- ENDIF -->>{GROUP_NAME}</b><!-- ENDIF --><input name=\"group_name\" type=\"<!-- IF S_SPECIAL_GROUP -->hidden<!-- ELSE -->text<!-- ENDIF -->\" id=\"group_name\" value=\"{GROUP_INTERNAL_NAME}\" /></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" width=\"35%\"><label for=\"group_desc\">{L_GROUP_DESC}:</label></td>\n		<td class=\"row2\"><textarea id=\"group_desc\" name=\"group_desc\" rows=\"5\" cols=\"45\">{GROUP_DESC}</textarea>\n			<br /><input type=\"checkbox\" class=\"radio\" name=\"desc_parse_bbcode\"<!-- IF S_DESC_BBCODE_CHECKED --> checked=\"checked\"<!-- ENDIF --> /> {L_PARSE_BBCODE} &nbsp; <input type=\"checkbox\" class=\"radio\" name=\"desc_parse_smilies\"<!-- IF S_DESC_SMILIES_CHECKED --> checked=\"checked\"<!-- ENDIF --> /> {L_PARSE_SMILIES} &nbsp; <input type=\"checkbox\" class=\"radio\" name=\"desc_parse_urls\"<!-- IF S_DESC_URLS_CHECKED --> checked=\"checked\"<!-- ENDIF --> /> {L_PARSE_URLS}\n		</td>\n	</tr>\n	<!-- IF not S_SPECIAL_GROUP -->\n		<tr>\n			<td class=\"row1\" width=\"35%\"><label for=\"group_type\">{L_GROUP_TYPE}:</label><br /><span>{L_GROUP_TYPE_EXPLAIN}</span></td>\n			<td class=\"row2\">\n				<input name=\"group_type\" type=\"radio\" class=\"radio\" id=\"group_type\" value=\"{GROUP_TYPE_FREE}\"{GROUP_FREE} /> {L_GROUP_OPEN} &nbsp;\n				<input name=\"group_type\" type=\"radio\" class=\"radio\" value=\"{GROUP_TYPE_OPEN}\"{GROUP_OPEN} /> {L_GROUP_REQUEST} &nbsp;\n				<input name=\"group_type\" type=\"radio\" class=\"radio\" value=\"{GROUP_TYPE_CLOSED}\"{GROUP_CLOSED} /> {L_GROUP_CLOSED} &nbsp;\n				<input name=\"group_type\" type=\"radio\" class=\"radio\" value=\"{GROUP_TYPE_HIDDEN}\"{GROUP_HIDDEN} /> {L_GROUP_HIDDEN}\n			</td>\n		</tr>\n	<!-- ELSE -->\n		<tr style=\"display:none;\"><td><input name=\"group_type\" type=\"hidden\" value=\"{GROUP_TYPE_SPECIAL}\" /></td></tr>\n	<!-- ENDIF -->\n\n	<tr>\n		<th colspan=\"2\">{L_GROUP_SETTINGS_SAVE}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" width=\"35%\"><label for=\"group_colour\">{L_GROUP_COLOR}:</label><br /><span>{L_GROUP_COLOR_EXPLAIN}</span></td>\n		<td class=\"row2\"><input name=\"group_colour\" type=\"text\" id=\"group_colour\" value=\"{GROUP_COLOUR}\" size=\"6\" maxlength=\"6\" />&nbsp;&nbsp;<span>[ <a href=\"{U_SWATCH}\" onclick=\"popup(this.href, 636, 150, \'_swatch\'); return false;\">{L_COLOUR_SWATCH}</a> ]</span></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" width=\"35%\"><label for=\"group_rank\">{L_GROUP_RANK}:</label></td>\n		<td class=\"row2\"><select name=\"group_rank\" id=\"group_rank\">{S_RANK_OPTIONS}</select></td>\n	</tr>\n	<tr>\n		<th colspan=\"2\">{L_GROUP_AVATAR}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" width=\"35%\"><label>{L_CURRENT_IMAGE}:</label><br /><span>{L_AVATAR_EXPLAIN}</span></td>\n		<td class=\"row2\">{AVATAR_IMAGE}<br /><br /><input type=\"checkbox\" class=\"radio\" name=\"delete\" />&nbsp;<span>{L_DELETE_AVATAR}</span></td>\n	</tr>\n	<!-- IF not S_IN_AVATAR_GALLERY -->\n		<!-- IF S_CAN_UPLOAD -->\n			<tr>\n				<td class=\"row1\" width=\"35%\"><label for=\"uploadfile\">{L_UPLOAD_AVATAR_FILE}:</label></td>\n				<td class=\"row2\"><input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"{AVATAR_MAX_FILESIZE}\" /><input type=\"file\" id=\"uploadfile\" name=\"uploadfile\" /></td>\n			</tr>\n			<tr>\n				<td class=\"row1\" width=\"35%\"><label for=\"uploadurl\">{L_UPLOAD_AVATAR_URL}:</label><br /><span>{L_UPLOAD_AVATAR_URL_EXPLAIN}</span></td>\n				<td class=\"row2\"><input name=\"uploadurl\" type=\"text\" id=\"uploadurl\" value=\"\" /></td>\n			</tr>\n		<!-- ENDIF -->\n		<tr>\n			<td class=\"row1\" width=\"35%\"><label for=\"remotelink\">{L_LINK_REMOTE_AVATAR}:</label><br /><span>{L_LINK_REMOTE_AVATAR_EXPLAIN}</span></td>\n			<td class=\"row2\"><input name=\"remotelink\" type=\"text\" id=\"remotelink\" value=\"\" /></td>\n		</tr>\n		<tr>\n			<td class=\"row1\" width=\"35%\"><label for=\"width\">{L_LINK_REMOTE_SIZE}:</label><br /><span>{L_LINK_REMOTE_SIZE_EXPLAIN}</span></td>\n			<td class=\"row2\"><input name=\"width\" type=\"text\" id=\"width\" size=\"3\" value=\"{AVATAR_WIDTH}\" /> <span>px X </span> <input type=\"text\" name=\"height\" size=\"3\" value=\"{AVATAR_HEIGHT}\" /> <span>px</span></td>\n		</tr>\n		<!-- IF S_DISPLAY_GALLERY -->\n			<tr>\n				<td class=\"row1\" width=\"35%\"><label>{L_AVATAR_GALLERY}:</label></td>\n				<td class=\"row2\"><input class=\"btnmain\" type=\"submit\" name=\"display_gallery\" value=\"{L_DISPLAY_GALLERY}\" /></td>\n			</tr>\n		<!-- ENDIF -->\n	<!-- ELSE -->\n\n		<tr>\n			<th colspan=\"2\">{L_AVATAR_GALLERY}</th>\n		</tr>\n		<tr>\n			<td class=\"row1\" width=\"35%\"><label for=\"category\">{L_AVATAR_CATEGORY}:</label></td>\n			<td class=\"row2\"><select name=\"category\" id=\"category\">{S_CAT_OPTIONS}</select>&nbsp;<input class=\"btnmain\" type=\"submit\" value=\"{L_GO}\" name=\"display_gallery\" /></td>\n		</tr>\n		<tr>\n			<td class=\"row1\" width=\"35%\">\n				<table cellspacing=\"1\">\n				<!-- BEGIN avatar_row -->\n				<tr>\n					<!-- BEGIN avatar_column -->\n						<td class=\"row1\" style=\"text-align: center;\"><img src=\"{avatar_row.avatar_column.AVATAR_IMAGE}\" alt=\"{avatar_row.avatar_column.AVATAR_NAME}\" title=\"{avatar_row.avatar_column.AVATAR_NAME}\" /></td>\n					<!-- END avatar_column -->\n				</tr>\n				<tr>\n					<!-- BEGIN avatar_option_column -->\n						<td class=\"row2\" style=\"text-align: center;\"><input type=\"radio\" class=\"radio\" name=\"avatar_select\" value=\"{avatar_row.avatar_option_column.S_OPTIONS_AVATAR}\" /></td>\n					<!-- END avatar_option_column -->\n				</tr>\n				<!-- END avatar_row -->\n				</table>\n			</td>\n			<td class=\"row2\"><input class=\"btnmain\" type=\"submit\" name=\"cancel\" value=\"{L_CANCEL}\" /></td>\n		</tr>\n\n	<!-- ENDIF -->\n\n	<tr>\n		<td class=\"cat\" colspan=\"2\" align=\"center\"><input class=\"btnlite\" type=\"submit\" id=\"submit\" name=\"update\" value=\"{L_SUBMIT}\" />&nbsp;\n		<input class=\"btnmain\" type=\"reset\" id=\"reset\" name=\"reset\" value=\"{L_RESET}\" /></td>\n	</tr>\n	</table>\n\n<!-- ELSEIF S_LIST -->\n\n	<h1>{L_GROUP_MEMBERS}</h1>\n\n	<p>{L_GROUP_MEMBERS_EXPLAIN}</p>\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th>{L_USERNAME}</th>\n		<th>{L_GROUP_DEFAULT}</th>\n		<th>{L_JOINED}</th>\n		<th>{L_POSTS}</th>\n		<th>{L_MARK}</th>\n	</tr>\n\n	<tr>\n		<td class=\"row3\" colspan=\"5\"><b>{L_GROUP_LEAD}</b></td>\n	</tr>\n	<!-- BEGIN leader -->\n		<!-- IF leader.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n			<td>{leader.USERNAME_FULL}</td>\n			<td style=\"text-align: center;\"><!-- IF leader.S_GROUP_DEFAULT -->{L_YES}<!-- ELSE -->{L_NO}<!-- ENDIF --></td>\n			<td style=\"text-align: center;\">{leader.JOINED}</td>\n			<td style=\"text-align: center;\">{leader.USER_POSTS}</td>\n			<td style=\"text-align: center;\"></td>\n		</tr>\n	<!-- END leader -->\n\n	<!-- BEGIN member -->\n		<!-- IF member.S_PENDING -->\n			<tr>\n				<td class=\"row3\" colspan=\"5\"><b>{L_GROUP_PENDING}</b></td>\n			</tr>\n		<!-- ELSEIF member.S_APPROVED -->\n			<tr>\n				<td class=\"row3\" colspan=\"5\"><b>{L_GROUP_APPROVED}</b></td>\n			</tr>\n		<!-- ELSE -->\n			<!-- IF member.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n				<td>{member.USERNAME_FULL}</td>\n				<td style=\"text-align: center;\"><!-- IF member.S_GROUP_DEFAULT -->{L_YES}<!-- ELSE -->{L_NO}<!-- ENDIF --></td>\n				<td style=\"text-align: center;\">{member.JOINED}</td>\n				<td style=\"text-align: center;\">{member.USER_POSTS}</td>\n				<td style=\"text-align: center;\"><input type=\"checkbox\" class=\"radio\" name=\"mark[]\" value=\"{member.USER_ID}\" /></td>\n			</tr>\n		<!-- ENDIF -->\n	<!-- BEGINELSE -->\n		<tr>\n			<td class=\"row1\" colspan=\"5\" style=\"text-align: center;\">{L_GROUPS_NO_MEMBERS}</td>\n		</tr>\n	<!-- END member -->\n	<tr>\n		<td class=\"cat\" colspan=\"5\" align=\"center\"><div style=\"float: {S_CONTENT_FLOW_END};\"><span class=\"small\"><a href=\"#\" onclick=\"marklist(\'ucp\', \'mark\', true); return false;\">{L_MARK_ALL}</a> :: <a href=\"#\" onclick=\"marklist(\'ucp\', \'mark\', false); return false;\">{L_UNMARK_ALL}</a></span></div><div style=\"float: {S_CONTENT_FLOW_BEGIN};\"><select name=\"action\"><option class=\"sep\" value=\"\">{L_SELECT_OPTION}</option>{S_ACTION_OPTIONS}</select> <input class=\"btnmain\" type=\"submit\" name=\"update\" value=\"{L_SUBMIT}\" /></div></td>\n	</tr>\n	</table>\n\n	<div class=\"pagination\" style=\"float: {S_CONTENT_FLOW_BEGIN};\">\n		<!-- IF PAGINATION -->\n			<!-- INCLUDE pagination.html -->\n		<!-- ELSE -->\n			{S_ON_PAGE}\n		<!-- ENDIF -->\n	</div>\n\n	<br />\n	<br />\n\n	<h1>{L_ADD_USERS}</h1>\n\n	<p>{L_ADD_USERS_EXPLAIN}</p>\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th colspan=\"2\">{L_ADD_USERS}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\"><label for=\"default\">{L_USER_GROUP_DEFAULT}:</label><br /><span>{L_USER_GROUP_DEFAULT_EXPLAIN}</span></td>\n		<td class=\"row2\"><input name=\"default\" type=\"radio\" class=\"radio\" value=\"1\" /> {L_YES} &nbsp; <input name=\"default\" type=\"radio\" class=\"radio\" id=\"default\" value=\"0\" checked=\"checked\" /> {L_NO}</td>\n	</tr>\n	<tr>\n		<td class=\"row1\"><label for=\"usernames\">{L_USERNAME}:</label><br /><span>{L_USERNAMES_EXPLAIN}</span></td>\n		<td class=\"row2\"><textarea id=\"usernames\" name=\"usernames\" cols=\"40\" rows=\"5\"></textarea><br />[ <a href=\"{U_FIND_USERNAME}\" onclick=\"find_username(this.href); return false;\">{L_FIND_USERNAME}</a> ]</td>\n	</tr>\n	<tr>\n		<td class=\"cat\" colspan=\"2\" align=\"center\"><input class=\"btnmain\" type=\"submit\" name=\"addusers\" value=\"{L_SUBMIT}\" /></td>\n	</tr>\n	</table>\n\n<!-- ELSE -->\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th colspan=\"3\">{L_USERGROUPS}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" colspan=\"3\"><span class=\"genmed\">{L_GROUPS_EXPLAIN}</span></td>\n	</tr>\n\n	<tr>\n		<th>{L_GROUP_DETAILS}</th>\n		<th colspan=\"2\">{L_OPTIONS}</th>\n	</tr>\n	<tr>\n		<td class=\"row3\" colspan=\"3\"><b class=\"gensmall\">{L_GROUP_LEADER}</b></td>\n	</tr>\n	<!-- BEGIN leader -->\n		<!-- IF leader.S_ROW_COUNT is odd --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n\n		<td><b class=\"genmed\"<!-- IF leader.GROUP_COLOUR --> style=\"color: #{leader.GROUP_COLOUR};\"<!-- ENDIF -->>{leader.GROUP_NAME}</b><!-- IF leader.GROUP_DESC --><p class=\"forumdesc\">{leader.GROUP_DESC}</p><!-- ENDIF --></td>\n		<td style=\"text-align: center;\"><a href=\"{leader.U_EDIT}\">{L_EDIT}</a></td>\n		<td style=\"text-align: center;\"><a href=\"{leader.U_LIST}\">{L_GROUP_LIST}</a></td>\n\n	</tr>\n	<!-- BEGINELSE -->\n		<tr>\n			<td class=\"row2\" align=\"center\" colspan=\"3\"><b class=\"genmed\">{L_NO_LEADERS}</b></td>\n		</tr>\n	<!-- END leader -->\n\n	<tr>\n		<td class=\"cat\" align=\"{S_CONTENT_FLOW_END}\" colspan=\"3\">&nbsp;</td>\n	</tr>\n	</table>\n\n<!-- ENDIF -->\n\n<!-- INCLUDE ucp_footer.html -->'),

(2,'ucp_groups_membership.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"3\">{L_USERGROUPS}</th>\n</tr>\n<tr>\n	<td class=\"row1\" colspan=\"3\"><span class=\"genmed\">{L_GROUPS_EXPLAIN}</span></td>\n</tr>\n\n<tr>\n	<th colspan=\"2\">{L_GROUP_DETAILS}</th>\n	<th>{L_SELECT}</th>\n</tr>\n\n<!-- BEGIN leader -->\n	<!-- IF leader.S_FIRST_ROW -->\n		<tr>\n			<td class=\"row3\" colspan=\"3\"><b class=\"gensmall\">{L_GROUP_LEADER}</b></td>\n		</tr>\n	<!-- ENDIF -->\n\n	<!-- IF leader.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n		<td width=\"6%\" align=\"center\" nowrap=\"nowrap\"><!-- IF S_CHANGE_DEFAULT --><input type=\"radio\" class=\"radio\" name=\"default\"<!-- IF leader.S_GROUP_DEFAULT --> checked=\"checked\"<!-- ENDIF --> value=\"{leader.GROUP_ID}\" /><!-- ENDIF --></td>\n		<td>\n			<b class=\"genmed\"><a href=\"{leader.U_VIEW_GROUP}\"<!-- IF leader.GROUP_COLOUR --> style=\"color: #{leader.GROUP_COLOUR};\"<!-- ENDIF -->>{leader.GROUP_NAME}</a></b>\n			<!-- IF leader.GROUP_DESC --><br /><span class=\"genmed\">{leader.GROUP_DESC}</span><!-- ENDIF -->\n			<!-- IF not leader.GROUP_SPECIAL --><br /><i class=\"gensmall\">{leader.GROUP_STATUS}</i><!-- ENDIF -->\n		</td>\n		<td width=\"6%\" align=\"center\" nowrap=\"nowrap\"><!-- IF not leader.GROUP_SPECIAL --><input type=\"radio\" class=\"radio\" name=\"selected\" value=\"{leader.GROUP_ID}\" /><!-- ENDIF --></td>\n	</tr>\n<!-- END leader -->\n\n<!-- BEGIN member -->\n	<!-- IF member.S_FIRST_ROW -->\n		<tr>\n			<td class=\"row3\" colspan=\"3\"><b class=\"gensmall\">{L_GROUP_MEMBER}</b></td>\n		</tr>\n	<!-- ENDIF -->\n\n	<!-- IF member.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n		<td width=\"6%\" align=\"center\" nowrap=\"nowrap\"><!-- IF S_CHANGE_DEFAULT --><input type=\"radio\" class=\"radio\" name=\"default\"<!-- IF member.S_GROUP_DEFAULT --> checked=\"checked\"<!-- ENDIF --> value=\"{member.GROUP_ID}\" /><!-- ENDIF --></td>\n		<td>\n			<b class=\"genmed\"><a href=\"{member.U_VIEW_GROUP}\"<!-- IF member.GROUP_COLOUR --> style=\"color: #{member.GROUP_COLOUR};\"<!-- ENDIF -->>{member.GROUP_NAME}</a></b>\n			<!-- IF member.GROUP_DESC --><br /><span class=\"genmed\">{member.GROUP_DESC}</span><!-- ENDIF -->\n			<!-- IF not member.GROUP_SPECIAL --><br /><i class=\"gensmall\">{member.GROUP_STATUS}</i><!-- ENDIF -->\n		</td>\n		<td width=\"6%\" align=\"center\" nowrap=\"nowrap\"><!-- IF not member.GROUP_SPECIAL --><input type=\"radio\" class=\"radio\" name=\"selected\" value=\"{member.GROUP_ID}\" /><!-- ENDIF --></td>\n	</tr>\n<!-- END member -->\n\n<!-- BEGIN pending -->\n	<!-- IF pending.S_FIRST_ROW -->\n		<tr>\n			<td class=\"row3\" colspan=\"3\"><b class=\"gensmall\">{L_GROUP_PENDING}</b></td>\n		</tr>\n	<!-- ENDIF -->\n\n	<!-- IF pending.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n		<td width=\"6%\" align=\"center\" nowrap=\"nowrap\">&nbsp;</td>\n		<td>\n			<b class=\"genmed\"><a href=\"{pending.U_VIEW_GROUP}\"<!-- IF pending.GROUP_COLOUR --> style=\"color: #{pending.GROUP_COLOUR};\"<!-- ENDIF -->>{pending.GROUP_NAME}</a></b>\n			<!-- IF pending.GROUP_DESC --><br /><span class=\"genmed\">{pending.GROUP_DESC}</span><!-- ENDIF -->\n			<!-- IF not pending.GROUP_SPECIAL --><br /><i class=\"gensmall\">{pending.GROUP_STATUS}</i><!-- ENDIF -->\n		</td>\n		<td width=\"6%\" align=\"center\" nowrap=\"nowrap\"><!-- IF not pending.GROUP_SPECIAL --><input type=\"radio\" class=\"radio\" name=\"selected\" value=\"{pending.GROUP_ID}\" /><!-- ENDIF --></td>\n	</tr>\n<!-- END pending -->\n\n<!-- BEGIN nonmember -->\n	<!-- IF nonmember.S_FIRST_ROW -->\n		<tr>\n			<td class=\"row3\" colspan=\"3\"><b class=\"gensmall\">{L_GROUP_NONMEMBER}</b></td>\n		</tr>\n	<!-- ENDIF -->\n\n	<!-- IF nonmember.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n		<td width=\"6%\" align=\"center\" nowrap=\"nowrap\">&nbsp;</td>\n		<td>\n			<b class=\"genmed\"><a href=\"{nonmember.U_VIEW_GROUP}\"<!-- IF nonmember.GROUP_COLOUR --> style=\"color: #{nonmember.GROUP_COLOUR};\"<!-- ENDIF -->>{nonmember.GROUP_NAME}</a></b>\n			<!-- IF nonmember.GROUP_DESC --><br /><span class=\"genmed\">{nonmember.GROUP_DESC}</span><!-- ENDIF -->\n			<!-- IF not nonmember.GROUP_SPECIAL --><br /><i class=\"gensmall\">{nonmember.GROUP_STATUS}</i><!-- ENDIF -->\n		</td>\n		<td width=\"6%\" align=\"center\" nowrap=\"nowrap\"><!-- IF nonmember.S_CAN_JOIN --><input type=\"radio\" class=\"radio\" name=\"selected\" value=\"{nonmember.GROUP_ID}\" /><!-- ENDIF --></td>\n	</tr>\n<!-- END nonmember -->\n\n<tr>\n	<td class=\"cat\" colspan=\"3\"><!-- IF S_CHANGE_DEFAULT --><div style=\"float: {S_CONTENT_FLOW_BEGIN};\"><input class=\"btnlite\" type=\"submit\" name=\"change_default\" value=\"{L_CHANGE_DEFAULT_GROUP}\" /></div><!-- ENDIF --><div style=\"float: {S_CONTENT_FLOW_END};\"><span class=\"genmed\">{L_SELECT}: </span><select name=\"action\"><option value=\"join\">{L_JOIN_SELECTED}</option><option value=\"resign\">{L_RESIGN_SELECTED}</option><option value=\"demote\">{L_DEMOTE_SELECTED}</option></select>&nbsp;<input class=\"btnmain\" type=\"submit\" name=\"submit\" value=\"{L_SUBMIT}\" />&nbsp;</div></td>\n</tr>\n</table>\n\n<!-- INCLUDE ucp_footer.html -->'),

(2,'ucp_header.html','posting_body.html:ucp_attachments.html:ucp_groups_manage.html:ucp_groups_membership.html:ucp_main_bookmarks.html:ucp_main_drafts.html:ucp_main_front.html:ucp_main_subscribed.html:ucp_pm_options.html:ucp_pm_viewfolder.html:ucp_pm_viewmessage.html:ucp_prefs_personal.html:ucp_prefs_post.html:ucp_prefs_view.html:ucp_profile_avatar.html:ucp_profile_profile_info.html:ucp_profile_reg_details.html:ucp_profile_signature.html:ucp_zebra_foes.html:ucp_zebra_friends.html:',1229079038,'<!-- INCLUDE overall_header.html -->\n\n\n<!-- IF S_SHOW_PM_BOX and S_POST_ACTION -->\n	<form action=\"{S_POST_ACTION}\" method=\"post\" name=\"postform\"{S_FORM_ENCTYPE}>\n<!-- ENDIF -->\n<table width=\"100%\" cellspacing=\"0\" cellpadding=\"0\" border=\"0\">\n<tr>\n	<td width=\"20%\" valign=\"top\">\n\n<!-- IF S_SHOW_PM_BOX and S_POST_ACTION -->\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th>{L_PM_TO}</th>\n	</tr>\n	<!-- IF not S_ALLOW_MASS_PM -->\n	<tr>\n		<td class=\"row1\"><b class=\"genmed\">{L_USERNAME}:</b><br />[ <a href=\"{U_FIND_USERNAME}\" onclick=\"find_username(this.href); return false;\">{L_FIND_USERNAME}</a> ]</td>\n	</tr>\n	\n	<tr>\n		<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"username_list\" size=\"20\" value=\"\" />&nbsp;<input class=\"post\" type=\"submit\" name=\"add_to\" value=\"{L_ADD}\" /></td>\n	</tr>\n	<!-- ELSE -->\n		<tr>\n			<td class=\"row1\"><b class=\"genmed\">{L_USERNAMES}:</b></td>\n		</tr>\n		<tr>\n			<td class=\"row2\"><textarea name=\"username_list\" rows=\"5\" cols=\"22\"></textarea><br />\n				[ <a href=\"{U_FIND_USERNAME}\" onclick=\"find_username(this.href); return false;\">{L_FIND_USERNAME}</a> ]\n			</td>\n		</tr>\n	<!-- ENDIF -->\n	<!-- IF S_GROUP_OPTIONS -->\n		<tr>\n			<td class=\"row1\"><b class=\"genmed\">{L_USERGROUPS}:</b></td>\n		</tr>\n		<tr>\n			<td class=\"row2\"><select name=\"group_list[]\" multiple=\"true\" size=\"5\" style=\"width:150px\">{S_GROUP_OPTIONS}</select></td>\n		</tr>\n	<!-- ENDIF -->\n	<!-- IF S_ALLOW_MASS_PM -->\n		<tr>\n			<td class=\"row1\"><div style=\"float: {S_CONTENT_FLOW_BEGIN};\">&nbsp;<input class=\"post\" type=\"submit\" name=\"add_bcc\" value=\"{L_ADD_BCC}\" />&nbsp;</div><div style=\"float: {S_CONTENT_FLOW_END};\">&nbsp;<input class=\"post\" type=\"submit\" name=\"add_to\" value=\"{L_ADD_TO}\" />&nbsp;</div></td>\n		</tr>\n	<!-- ENDIF -->\n	</table>\n	<div style=\"padding: 2px;\"></div>\n<!-- ENDIF -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th>{L_OPTIONS}</th>\n</tr>\n\n<!-- BEGIN l_block1 -->\n	<tr>\n		<!-- IF l_block1.S_SELECTED -->\n			<td class=\"row1\"><b class=\"nav\">{l_block1.L_TITLE}</b>\n\n			<!-- IF S_PRIVMSGS -->\n\n				<!-- the ! at the beginning of the loop name forces the loop to be not a nested one of l_block1 (it gets parsed separately) -->\n				<!-- BEGIN !folder -->\n					<!-- IF folder.S_FIRST_ROW -->\n						<ul class=\"nav\" style=\"margin: 0; padding: 0; list-style-type: none; line-height: 175%;\">\n					<!-- ENDIF -->\n\n					<!-- IF folder.S_CUR_FOLDER -->\n						<li class=\"row2\" style=\"padding: 1px 0;\">&#187; <a href=\"{folder.U_FOLDER}\">{folder.FOLDER_NAME}<!-- IF folder.S_UNREAD_MESSAGES --> ({folder.UNREAD_MESSAGES})<!-- ENDIF --></a></li>\n					<!-- ELSE -->\n						<li>&#187; <a href=\"{folder.U_FOLDER}\">{folder.FOLDER_NAME}<!-- IF folder.S_UNREAD_MESSAGES --> ({folder.UNREAD_MESSAGES})<!-- ENDIF --></a></li>\n					<!-- ENDIF -->\n\n					<!-- IF folder.S_LAST_ROW -->\n						</ul>\n						<hr />\n					<!-- ENDIF -->\n				<!-- END !folder -->\n\n			<!-- ENDIF -->\n\n			<ul class=\"nav\" style=\"margin: 0; padding: 0; list-style-type: none; line-height: 175%;\">\n			<!-- BEGIN l_block2 -->\n				<li>&#187; <!-- IF l_block1.l_block2.S_SELECTED --><b>{l_block1.l_block2.L_TITLE}</b><!-- ELSE --><a href=\"{l_block1.l_block2.U_TITLE}\">{l_block1.l_block2.L_TITLE}</a><!-- ENDIF --></li>\n			<!-- END l_block2 -->\n			</ul>\n		<!-- ELSE -->\n			<td class=\"row2\" nowrap=\"nowrap\" onmouseover=\"this.className=\'row1\'\" onmouseout=\"this.className=\'row2\'\" onclick=\"location.href=this.firstChild.href;\"><a class=\"nav\" href=\"{l_block1.U_TITLE}\">{l_block1.L_TITLE}</a>\n		<!-- ENDIF -->\n		</td>\n	</tr>\n<!-- END l_block1 -->\n</table>\n\n<div style=\"padding: 2px;\"></div>\n\n<!-- IF S_SHOW_COLOUR_LEGEND -->\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\" cellpadding=\"0\">\n	<tr>\n		<th colspan=\"2\">{L_MESSAGE_COLOURS}</th>\n	</tr>\n	<!-- BEGIN pm_colour_info -->\n		<tr>\n			<!-- IF not pm_colour_info.IMG -->\n				<td class=\"row1 {pm_colour_info.CLASS}\" width=\"5\"><img src=\"images/spacer.gif\" width=\"5\" alt=\"{pm_colour_info.LANG}\" /></td>\n			<!-- ELSE -->\n				<td class=\"row1\" width=\"25\" align=\"center\">{pm_colour_info.IMG}</td>\n			<!-- ENDIF -->\n			<td class=\"row1\"><span class=\"genmed\">{pm_colour_info.LANG}</span></td>\n		</tr>\n	<!-- END pm_colour_info -->\n	</table>\n\n	<div style=\"padding: 2px;\"></div>\n<!-- ENDIF -->\n\n<!-- IF S_ZEBRA_ENABLED and S_ZEBRA_FRIENDS_ENABLED -->\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th>{L_FRIENDS}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" align=\"center\">\n		\n			<b class=\"genmed\" style=\"color:green\">{L_FRIENDS_ONLINE}</b>\n\n			<ul class=\"nav\" style=\"margin: 0; padding: 0; list-style-type: none; line-height: 175%;\">\n			<!-- BEGIN friends_online -->\n				<li>{friends_online.USERNAME_FULL}\n				<!-- IF S_SHOW_PM_BOX -->\n					&nbsp;[ <input class=\"post\" style=\"font-size: 90%;\" type=\"submit\" name=\"add_to[{friends_online.USER_ID}]\" value=\"{L_ADD}\" /> ]\n				<!-- ENDIF -->\n				</li>\n			<!-- BEGINELSE -->\n				<li>{L_NO_FRIENDS_ONLINE}</li>\n			<!-- END friends_online -->\n			</ul>\n\n			<hr />\n\n			<b class=\"genmed\" style=\"color:red\">{L_FRIENDS_OFFLINE}</b>\n\n			<ul class=\"nav\" style=\"margin: 0; padding: 0; list-style-type: none; line-height: 175%;\">\n			<!-- BEGIN friends_offline -->\n				<li>{friends_offline.USERNAME_FULL}\n				<!-- IF S_SHOW_PM_BOX -->\n					&nbsp;[ <input class=\"post\" style=\"font-size: 90%;\" type=\"submit\" name=\"add_to[{friends_offline.USER_ID}]\" value=\"{L_ADD}\" /> ]\n				<!-- ENDIF -->\n				</li>\n			<!-- BEGINELSE -->\n				<li>{L_NO_FRIENDS_OFFLINE}</li>\n			<!-- END friends_offline -->\n			</ul>\n\n		</td>\n	</tr>\n	</table>\n<!-- ENDIF -->\n\n</td>\n<td><img src=\"images/spacer.gif\" width=\"4\" alt=\"\" /></td>\n<td width=\"80%\" valign=\"top\"><!-- IF not S_PRIVMSGS or S_SHOW_DRAFTS --><form name=\"ucp\" id=\"ucp\" method=\"post\" action=\"{S_UCP_ACTION}\"{S_FORM_ENCTYPE}><!-- ENDIF -->\n'),

(2,'ucp_main_bookmarks.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"4\">{L_UCP}</th>\n</tr>\n<tr>\n	<td class=\"row1\" colspan=\"4\" align=\"center\"><span class=\"genmed\">{L_BOOKMARKS_EXPLAIN}</span></td>\n</tr>\n<!-- IF .topicrow -->\n<tr>\n	<th colspan=\"4\">{L_BOOKMARKS}</th>\n</tr>\n<!-- ENDIF -->\n\n<!-- IF S_NO_DISPLAY_BOOKMARKS -->\n	<tr class=\"row1\">\n		<td colspan=\"4\" align=\"center\"><b class=\"genmed\">{L_BOOKMARKS_DISABLED}</b></td>\n	</tr>\n<!-- ELSE -->\n\n	<!-- IF TOTAL_TOPICS -->\n		<tr>\n			<td class=\"row3\" colspan=\"4\">\n				<table width=\"100%\" cellspacing=\"1\">\n				<tr>\n					<td class=\"nav\" valign=\"middle\" nowrap=\"nowrap\">&nbsp;{PAGE_NUMBER}<br /></td>\n					<td class=\"gensmall\" nowrap=\"nowrap\">&nbsp;[ {TOTAL_TOPICS} ]&nbsp;</td>\n					<td class=\"gensmall\" width=\"100%\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\"><!-- INCLUDE pagination.html --></td>\n				</tr>\n				</table>\n			</td>\n		</tr>\n	<!-- ENDIF -->\n\n	<!-- BEGIN topicrow -->\n\n		<!-- IF topicrow.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n			<td style=\"padding: 4px;\" width=\"20\" align=\"center\" valign=\"middle\">{topicrow.TOPIC_FOLDER_IMG}</td>\n		<!-- IF topicrow.S_DELETED_TOPIC -->\n			<td class=\"postdetails\" style=\"padding: 4px\" width=\"100%\" colspan=\"2\">{L_DELETED_TOPIC}</td>\n		<!-- ELSE -->\n			<td style=\"padding: 4px;\" width=\"100%\" valign=\"top\">\n				<p class=\"topictitle\"><!-- IF topicrow.S_UNREAD_TOPIC --><a href=\"{topicrow.U_NEWEST_POST}\">{NEWEST_POST_IMG}</a> <!-- ENDIF -->{topicrow.ATTACH_ICON_IMG} <a href=\"{topicrow.U_VIEW_TOPIC}\">{topicrow.TOPIC_TITLE}</a></p>\n				<!-- IF topicrow.S_GLOBAL_TOPIC --><span class=\"gensmall\">{L_GLOBAL_ANNOUNCEMENT}</span><!-- ELSE --><span class=\"gensmall\"><b>{L_FORUM}: </b><a href=\"{topicrow.U_VIEW_FORUM}\">{topicrow.FORUM_NAME}</a></span><!-- ENDIF -->\n				<!-- IF topicrow.PAGINATION -->\n					<p class=\"gensmall\"> [ {GOTO_PAGE_IMG}{L_GOTO_PAGE}: {topicrow.PAGINATION} ] </p>\n				<!-- ENDIF -->\n			</td>\n			<td style=\"padding: 4px;\" align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"top\" nowrap=\"nowrap\">\n				<p class=\"topicdetails\">{topicrow.LAST_POST_TIME}</p>\n				<p class=\"topicdetails\">{topicrow.LAST_POST_AUTHOR_FULL}\n					<a href=\"{topicrow.U_LAST_POST}\">{LAST_POST_IMG}</a>\n				</p>\n			</td>\n		<!-- ENDIF -->\n			<td style=\"padding: 4px;\"> <input type=\"checkbox\" class=\"radio\" name=\"t[{topicrow.TOPIC_ID}]\" /> </td>\n		</tr>\n	<!-- BEGINELSE -->\n		<tr class=\"row1\">\n			<td colspan=\"4\" align=\"center\"><b class=\"genmed\">{L_NO_BOOKMARKS}</b></td>\n		</tr>\n	<!-- END topicrow -->\n\n		<!-- IF .topicrow -->\n			<tr>\n				<td class=\"cat\" colspan=\"5\" align=\"{S_CONTENT_FLOW_END}\"><input class=\"btnlite\" type=\"submit\" name=\"unbookmark\" value=\"{L_REMOVE_BOOKMARK_MARKED}\" />&nbsp;</td>\n			</tr>\n		<!-- ENDIF -->\n	<!-- ENDIF -->\n</table>\n\n<!-- IF not S_NO_DISPLAY_BOOKMARKS and .topicrow -->\n	<div class=\"gensmall\" style=\"float: {S_CONTENT_FLOW_END}; padding-top: 2px;\"><b><a href=\"#\" onclick=\"marklist(\'ucp\', \'t\', true); return false;\">{L_MARK_ALL}</a> :: <a href=\"#\" onclick=\"marklist(\'ucp\', \'t\', false); return false;\">{L_UNMARK_ALL}</a></b></div>\n<!-- ENDIF -->\n\n<!-- INCLUDE ucp_footer.html -->'),

(2,'ucp_main_drafts.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"4\">{L_UCP}</th>\n</tr>\n<tr>\n	<td class=\"row1\" colspan=\"4\" align=\"center\"><span class=\"genmed\">{L_DRAFTS_EXPLAIN}</span></td>\n</tr>\n\n<!-- IF ERROR -->\n	<tr>\n		<td class=\"row1\" colspan=\"2\" align=\"center\"><span class=\"genmed error\">{ERROR}</span></td>\n	</tr>\n<!-- ENDIF -->\n\n<!-- IF not S_EDIT_DRAFT -->\n\n	<!-- IF S_DRAFT_ROWS -->\n	<tr>\n		<th>{L_SAVE_DATE}</th>\n		<th>{L_DRAFT_TITLE}</th>\n		<th>{L_OPTIONS}</th>\n		<th>{L_DELETE}</th>\n	</tr>\n	<!-- ENDIF -->\n\n	<!-- BEGIN draftrow -->\n\n		<!-- IF draftrow.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n\n		<td class=\"postdetails\" style=\"padding: 4px;\" nowrap=\"nowrap\">{draftrow.DATE}</td>\n		<td style=\"padding: 4px;\" valign=\"top\" width=\"100%\">\n			<p class=\"topictitle\">{draftrow.DRAFT_SUBJECT}</p>\n			<!-- IF draftrow.S_LINK_TOPIC --><span class=\"gensmall\">{L_TOPIC}: <a href=\"{draftrow.U_VIEW}\">{draftrow.TITLE}</a></span>\n			<!-- ELSEIF draftrow.S_LINK_FORUM --><span class=\"gensmall\">{L_FORUM}: <a href=\"{draftrow.U_VIEW}\">{draftrow.TITLE}</a></span>\n			<!-- ELSEIF draftrow.S_LINK_PM --><span class=\"gensmall\">{L_PRIVATE_MESSAGE}</span>\n			<!-- ELSE --><span class=\"gensmall\">{L_NO_TOPIC_FORUM}</span><!-- ENDIF -->\n		</td>\n		<td style=\"padding: 4px;\" align=\"center\" nowrap=\"nowrap\"><span class=\"genmed\"><!-- IF draftrow.U_INSERT --><a href=\"{draftrow.U_INSERT}\">{L_LOAD_DRAFT}</a><br /><!-- ENDIF --><a href=\"{draftrow.U_VIEW_EDIT}\">{L_VIEW_EDIT}</a></span></td>\n		<td style=\"padding: 4px;\" align=\"center\"><input type=\"checkbox\" class=\"radio\" name=\"d[{draftrow.DRAFT_ID}]\" /></td>\n	</tr>\n	<!-- BEGINELSE -->\n		<tr>\n			<td class=\"row1\" colspan=\"4\" align=\"center\"><b class=\"genmed\">{L_NO_SAVED_DRAFTS}</b></td>\n		</tr>\n	<!-- END draftrow -->\n\n	<!-- IF S_DRAFT_ROWS -->\n		<tr>\n			<td class=\"cat\" colspan=\"4\" align=\"{S_CONTENT_FLOW_END}\"><input class=\"btnlite\" type=\"submit\" name=\"delete\" value=\"{L_DELETE_MARKED}\" />&nbsp;</td>\n		</tr>\n	<!-- ENDIF -->\n\n<!-- ELSEIF S_EDIT_DRAFT -->\n	<tr>\n		<td class=\"row1\" width=\"22%\"><b class=\"genmed\">{L_SUBJECT}:</b></td>\n		<td class=\"row2\"><input class=\"post\" style=\"width:450px\" type=\"text\" name=\"subject\" size=\"45\" maxlength=\"64\" tabindex=\"2\" value=\"{DRAFT_SUBJECT}\" /></td>\n	</tr>\n	<tr> \n		<td class=\"row1\" width=\"22%\"><b class=\"genmed\">{L_MESSAGE}: </b><br /><span class=\"gensmall\">{L_EDIT_DRAFT_EXPLAIN}</span></td>\n		<td class=\"row2\">\n			<script type=\"text/javascript\">\n			// <![CDATA[\n				var form_name = \'ucp\';\n				var text_name = \'message\';\n			// ]]>\n			</script>\n			<table cellspacing=\"0\" cellpadding=\"2\" border=\"0\">\n			<!-- INCLUDE posting_buttons.html -->\n			<tr>\n				<td colspan=\"9\"><textarea class=\"post\" name=\"message\" rows=\"10\" cols=\"70\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\">{DRAFT_MESSAGE}</textarea></td>\n			</tr>\n			<tr>\n				<td colspan=\"9\">\n					<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\n					<tr>\n						<td align=\"{S_CONTENT_FLOW_BEGIN}\">\n							<script type=\"text/javascript\">\n							// <![CDATA[\n								colorPalette(\'h\', 6, 5)\n							// ]]>\n							</script>\n						</td>\n					</tr>\n					</table>\n				</td>\n			</tr>			\n			</table>\n		</td>\n	</tr>\n	<tr class=\"row1\">\n		<td colspan=\"9\" align=\"{S_CONTENT_FLOW_BEGIN}\"><p class=\"topictitle\"><a href=\"{S_UCP_ACTION}\">{L_BACK_TO_DRAFTS}</a></p></td>\n	</tr>\n	<tr>\n		<td class=\"cat\" colspan=\"2\" align=\"center\">{S_HIDDEN_FIELDS}<input class=\"btnmain\" type=\"submit\" name=\"submit\" value=\"{L_SUBMIT}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" name=\"reset\" /></td>\n	</tr>\n<!-- ENDIF -->\n</table>\n\n<!-- INCLUDE ucp_footer.html -->'),

(2,'ucp_main_front.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"3\">{L_UCP}</th>\n</tr>\n<tr>\n	<td class=\"row1\" colspan=\"3\" align=\"center\"><p class=\"genmed\">{L_UCP_WELCOME}</p></td>\n</tr>\n<tr>\n	<th colspan=\"3\">{L_IMPORTANT_NEWS}</th>\n</tr>\n\n<!-- BEGIN topicrow -->\n\n	<!-- IF topicrow.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n		<td class=\"row1\" width=\"25\" align=\"center\">{topicrow.TOPIC_FOLDER_IMG}</td>\n		<td class=\"row1\" width=\"100%\">\n			<p class=\"topictitle\"><!-- IF topicrow.S_UNREAD --><a href=\"{topicrow.U_NEWEST_POST}\">{NEWEST_POST_IMG}</a> <!-- ENDIF -->{topicrow.ATTACH_ICON_IMG} <a href=\"{topicrow.U_VIEW_TOPIC}\">{topicrow.TOPIC_TITLE}</a></p><p class=\"gensmall\">{topicrow.GOTO_PAGE}</p>\n		</td>\n		<td class=\"row1\" width=\"120\" align=\"center\" nowrap=\"nowrap\">\n			<p class=\"topicdetails\">{topicrow.LAST_POST_TIME}</p>\n			<p class=\"topicdetails\">{topicrow.LAST_POST_AUTHOR_FULL}\n				<a href=\"{topicrow.U_LAST_POST}\">{LAST_POST_IMG}</a>\n			</p>\n		</td>\n	</tr>\n<!-- BEGINELSE -->\n	<tr class=\"row1\">\n		<td align=\"center\" colspan=\"3\"><b class=\"gen\">{L_NO_IMPORTANT_NEWS}</b></td>\n	</tr>\n<!-- END topicrow -->\n\n<tr>\n	<th colspan=\"3\">{L_YOUR_DETAILS}</th>\n</tr>\n<tr>\n	<td class=\"row1\" colspan=\"3\">\n		<table width=\"100%\" cellspacing=\"1\" cellpadding=\"4\">\n		<tr> \n			<td align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\"><b class=\"genmed\">{L_JOINED}: </b></td>\n			<td width=\"100%\"><b class=\"gen\">{JOINED}</b></td>\n		</tr>\n		<tr> \n			<td align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\"><b class=\"genmed\">{L_TOTAL_POSTS}: </b></td>\n			<td><!-- IF POSTS_PCT --><b class=\"gen\">{POSTS}</b><br /><span class=\"genmed\">[{POSTS_PCT} / {POSTS_DAY}]<br /><a href=\"{U_SEARCH_SELF}\">{L_SEARCH_YOUR_POSTS}</a></span><!-- ELSE --><b class=\"gen\">{POSTS}<b><!-- ENDIF --></td>\n		</tr>\n		<!-- IF S_SHOW_ACTIVITY -->\n			<tr>\n				<td align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\"><b class=\"genmed\">{L_ACTIVE_IN_FORUM}: </b></td>\n				<td><!-- IF ACTIVE_FORUM --><b><a class=\"gen\" href=\"{U_ACTIVE_FORUM}\">{ACTIVE_FORUM}</a></b><br /><span class=\"genmed\">[ {ACTIVE_FORUM_POSTS} / {ACTIVE_FORUM_PCT} ]</span><!-- ELSE --><span class=\"gen\">-</span><!-- ENDIF --></td>\n			</tr>\n			<tr>\n				<td align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\"><b class=\"genmed\">{L_ACTIVE_IN_TOPIC}: </b></td>\n				<td><!-- IF ACTIVE_TOPIC --><b><a class=\"gen\" href=\"{U_ACTIVE_TOPIC}\">{ACTIVE_TOPIC}</a></b><br /><span class=\"genmed\">[ {ACTIVE_TOPIC_POSTS} / {ACTIVE_TOPIC_PCT} ]</span><!-- ELSE --><span class=\"gen\">-</span><!-- ENDIF --></td>\n			</tr>\n		<!-- ENDIF -->\n		<!-- IF WARNINGS -->\n			<tr>\n				<td align=\"{S_CONTENT_FLOW_END}\" valign=\"middle\" nowrap=\"nowrap\"><b class=\"genmed\">{L_YOUR_WARNINGS}: </b></td>\n				<td class=\"genmed\">{WARNING_IMG} [ <b>{WARNINGS}</b> ]</td>\n			</tr>\n		<!-- ENDIF -->\n		</table>\n	</td>\n</tr>\n<tr>\n	<td class=\"cat\" colspan=\"3\">&nbsp;</td>\n</tr>\n</table>\n\n<!-- INCLUDE ucp_footer.html -->'),

(2,'ucp_main_subscribed.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"4\">{L_UCP}</th>\n</tr>\n<tr>\n	<td class=\"row1\" colspan=\"4\" align=\"center\"><span class=\"genmed\">{L_WATCHED_EXPLAIN}</span></td>\n</tr>\n<!-- IF S_FORUM_NOTIFY -->\n	<tr>\n		<th colspan=\"4\">{L_WATCHED_FORUMS}</th>\n	</tr>\n\n	<!-- BEGIN forumrow -->\n\n		<!-- IF forumrow.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n			<td style=\"padding: 4px;\" width=\"20\" align=\"center\" valign=\"middle\">{forumrow.FORUM_FOLDER_IMG}</td>\n			<td style=\"padding: 4px;\" width=\"100%\"><p class=\"topictitle\"><a href=\"{forumrow.U_VIEWFORUM}\">{forumrow.FORUM_NAME}</a></p></td>\n			<td class=\"gensmall\" style=\"padding: 4px;\" align=\"center\" valign=\"middle\" nowrap=\"nowrap\"><!-- IF forumrow.LAST_POST_TIME -->{forumrow.LAST_POST_TIME}<br />{forumrow.LAST_POST_AUTHOR_FULL} <a href=\"{forumrow.U_LAST_POST}\">{LAST_POST_IMG}</a><!-- ELSE -->{L_NO_POSTS}<!-- ENDIF --></td>\n			<td style=\"padding: 4px;\"> <input type=\"checkbox\" class=\"radio\" name=\"f[{forumrow.FORUM_ID}]\" /> </td>\n		</tr>\n	<!-- BEGINELSE -->\n		<tr class=\"row1\">\n			<td colspan=\"4\" align=\"center\"><b class=\"genmed\">{L_NO_WATCHED_FORUMS}</b></td>\n		</tr>\n	<!-- END forumrow -->\n<!-- ENDIF -->\n<!-- IF S_TOPIC_NOTIFY -->\n	<tr>\n		<th colspan=\"4\">{L_WATCHED_TOPICS}</th>\n	</tr>\n\n	<!-- IF TOTAL_TOPICS -->\n		<tr>\n			<td class=\"row3\" colspan=\"4\">\n				<table width=\"100%\" cellspacing=\"1\">\n				<tr>\n					<td class=\"nav\" valign=\"middle\" nowrap=\"nowrap\">&nbsp;{PAGE_NUMBER}<br /></td>\n					<td class=\"gensmall\" nowrap=\"nowrap\">&nbsp;[ {TOTAL_TOPICS} ]&nbsp;</td>\n					<td class=\"gensmall\" width=\"100%\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\"><!-- INCLUDE pagination.html --></td>\n				</tr>\n				</table>\n			</td>\n		</tr>\n	<!-- ENDIF -->\n\n	<!-- BEGIN topicrow -->\n\n		<!-- IF topicrow.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n			<td style=\"padding: 4px;\" width=\"20\" align=\"center\" valign=\"middle\">{topicrow.TOPIC_FOLDER_IMG}</td>\n			<td style=\"padding: 4px;\" width=\"100%\" valign=\"top\">\n				<p class=\"topictitle\"><!-- IF topicrow.S_UNREAD_TOPIC --><a href=\"{topicrow.U_NEWEST_POST}\">{NEWEST_POST_IMG}</a> <!-- ENDIF -->{topicrow.ATTACH_ICON_IMG} <a href=\"{topicrow.U_VIEW_TOPIC}\">{topicrow.TOPIC_TITLE}</a></p>\n				<!-- IF topicrow.S_GLOBAL_TOPIC --><span class=\"gensmall\">{L_GLOBAL_ANNOUNCEMENT}</span><!-- ELSE --><span class=\"gensmall\"><b>{L_FORUM}: </b><a href=\"{topicrow.U_VIEW_FORUM}\">{topicrow.FORUM_NAME}</a></span><!-- ENDIF -->\n				<!-- IF topicrow.PAGINATION -->\n					<p class=\"gensmall\"> [ {GOTO_PAGE_IMG}{L_GOTO_PAGE}: {topicrow.PAGINATION} ] </p>\n				<!-- ENDIF -->\n			</td>\n			<td style=\"padding: 4px;\" align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"top\" nowrap=\"nowrap\">\n				<p class=\"topicdetails\">{topicrow.LAST_POST_TIME}</p>\n				<p class=\"topicdetails\">{topicrow.LAST_POST_AUTHOR_FULL}\n					<a href=\"{topicrow.U_LAST_POST}\">{LAST_POST_IMG}</a>\n				</p>\n			</td>\n			<td style=\"padding: 4px;\"> <input type=\"checkbox\" class=\"radio\" name=\"t[{topicrow.TOPIC_ID}]\" /> </td>\n		</tr>\n	<!-- BEGINELSE -->\n		<tr class=\"row1\">\n			<td colspan=\"4\" align=\"center\"><b class=\"genmed\">{L_NO_WATCHED_TOPICS}</b></td>\n		</tr>\n	<!-- END topicrow -->\n<!-- ENDIF -->\n\n<!-- IF .topicrow or .forumrow -->\n<tr>\n	<td class=\"cat\" colspan=\"4\" align=\"{S_CONTENT_FLOW_END}\"><input class=\"btnlite\" type=\"submit\" name=\"unwatch\" value=\"{L_UNWATCH_MARKED}\" />&nbsp;</td>\n</tr>\n<!-- ENDIF -->\n</table>\n<!-- IF .topicrow or .forumrow -->\n<div class=\"gensmall\" style=\"float: {S_CONTENT_FLOW_END}; padding-top: 2px;\"><b><a href=\"#\" onclick=\"marklist(\'ucp\', \'t\', true); marklist(\'ucp\', \'f\', true); return false;\">{L_MARK_ALL}</a> :: <a href=\"#\" onclick=\"marklist(\'ucp\', \'t\', false);marklist(\'ucp\', \'f\', false); return false;\">{L_UNMARK_ALL}</a></b></div>\n<!-- ENDIF -->\n\n<!-- INCLUDE ucp_footer.html -->'),

(2,'ucp_pm_history.html','posting_body.html:ucp_pm_viewmessage.html:',1229079038,'\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th align=\"center\">{L_MESSAGE_HISTORY} - {HISTORY_TITLE}</th>\n</tr>\n<tr>\n	<td class=\"row1\"><div style=\"overflow: auto; width: 100%; height: 300px;\">\n\n		<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n		<tr>\n			<th width=\"22%\">{L_AUTHOR}</th>\n			<th>{L_MESSAGE}</th>\n		</tr>\n	<!-- BEGIN history_row -->\n			<!-- IF history_row.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n			<td rowspan=\"2\" align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"top\"><a name=\"{history_row.MSG_ID}\"></a>\n				<table width=\"150\" cellspacing=\"0\">\n				<tr>\n					<td align=\"center\" colspan=\"2\"><span class=\"postauthor\">{history_row.MESSAGE_AUTHOR_FULL}</span></td>\n				</tr>\n				</table>\n			</td>\n			<td width=\"100%\"<!-- IF history_row.S_CURRENT_MSG --> style=\"background-color:lightblue\"<!-- ENDIF -->>\n				<div class=\"gensmall\" style=\"float: {S_CONTENT_FLOW_BEGIN};\"><b>{L_PM_SUBJECT}:</b>&nbsp;{history_row.SUBJECT}</div><div class=\"gensmall\" style=\"float: {S_CONTENT_FLOW_END};\"><b>{L_FOLDER}:</b>&nbsp;{history_row.FOLDER}</div>\n			</td>\n		</tr>\n\n		<!-- IF history_row.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n			<td valign=\"top\">\n				<table width=\"100%\" cellspacing=\"0\">\n				<tr>\n					<td valign=\"top\">\n						<table width=\"100%\" cellspacing=\"0\" cellpadding=\"2\">\n						<tr>\n							<td><div class=\"postbody\">{history_row.MESSAGE}</div><div id=\"message_{history_row.MSG_ID}\" style=\"display: none;\">{history_row.DECODED_MESSAGE}</div></td>\n						</tr>\n						</table>\n					</td>\n				</tr>\n				<tr>\n					<td>\n						<table width=\"100%\" cellspacing=\"0\">\n						<tr valign=\"middle\">\n							<td width=\"100%\">&nbsp;</td>\n							<td width=\"10\" nowrap=\"nowrap\">{history_row.MINI_POST_IMG}</td>\n							<td class=\"gensmall\" nowrap=\"nowrap\"><b>{L_SENT_AT}:</b> {history_row.SENT_DATE}</td>\n						</tr>\n						</table>\n					</td>\n				</tr>\n				</table>\n			</td>\n		</tr>\n\n		<!-- IF history_row.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n			<td class=\"gensmall\"><a href=\"{history_row.U_VIEW_MESSAGE}\">{L_VIEW_PM}</a></td>\n			<td><div class=\"gensmall\" style=\"float: {S_CONTENT_FLOW_BEGIN};\">&nbsp;<!-- IF history_row.U_PROFILE --><a href=\"{history_row.U_PROFILE}\">{PROFILE_IMG}</a> <!-- ENDIF --> <!-- IF history_row.U_EMAIL --><a href=\"{history_row.U_EMAIL}\">{EMAIL_IMG}</a> <!-- ENDIF -->&nbsp;</div> <div class=\"gensmall\" style=\"float: {S_CONTENT_FLOW_END};\"><!-- IF history_row.U_QUOTE or history_row.MESSAGE_AUTHOR_QUOTE --><a <!-- IF history_row.U_QUOTE -->href=\"{history_row.U_QUOTE}\"<!-- ELSE -->href=\"#\" onclick=\"addquote({history_row.MSG_ID}, \'{history_row.MESSAGE_AUTHOR_QUOTE}\'); return false;\"<!-- ENDIF -->>{QUOTE_IMG}</a> <!-- ENDIF --> <!-- IF history_row.U_POST_REPLY_PM --><a href=\"{history_row.U_POST_REPLY_PM}\">{REPLY_IMG}</a><!-- ENDIF -->&nbsp;</div></td>\n		</tr>\n		<tr>\n			<td class=\"spacer\" colspan=\"2\"><img src=\"images/spacer.gif\" alt=\"\" width=\"1\" height=\"1\" /></td>\n		</tr>\n	<!-- END history_row -->\n		</table>\n	</div></td>\n</tr>\n</table>\n\n<br clear=\"all\" />\n'),

(2,'ucp_pm_message_footer.html','ucp_pm_viewfolder.html:ucp_pm_viewmessage.html:',1229079038,'\n<!-- IF not S_VIEW_MESSAGE -->\n	{S_FORM_TOKEN}\n	</form>\n<!-- ENDIF -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\" cellpadding=\"0\">\n<tr>\n	<td class=\"row1\">\n		<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\n		<tr>\n			<td align=\"{S_CONTENT_FLOW_BEGIN}\"><!-- INCLUDE pagination.html -->\n				<!-- IF S_VIEW_MESSAGE -->\n					<span class=\"gensmall\">\n						<!-- IF U_PRINT_PM --><a href=\"{U_PRINT_PM}\" title=\"{L_PRINT_PM}\">{L_PRINT_PM}</a><!-- IF U_FORWARD_PM --> | <!-- ENDIF --><!-- ENDIF -->\n						<!-- IF U_FORWARD_PM --><a href=\"{U_FORWARD_PM}\" title=\"{L_FORWARD_PM}\">{L_FORWARD_PM}</a><!-- ENDIF -->\n					</span>\n				<!-- ENDIF -->\n			</td>\n			<td align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\">\n				<!-- IF S_VIEW_MESSAGE -->\n					<!-- IF not S_SPECIAL_FOLDER -->\n						<form name=\"movepm\" method=\"post\" action=\"{S_PM_ACTION}\" style=\"margin:0px\">\n							<input type=\"hidden\" name=\"marked_msg_id[]\" value=\"{MSG_ID}\" />\n							<input type=\"hidden\" name=\"cur_folder_id\" value=\"{CUR_FOLDER_ID}\" />\n							<input type=\"hidden\" name=\"p\" value=\"{MSG_ID}\" />\n							<select name=\"dest_folder\">{S_TO_FOLDER_OPTIONS}</select>&nbsp;<input class=\"btnlite\" type=\"submit\" name=\"move_pm\" value=\"{L_MOVE_TO_FOLDER}\" />\n						{S_FORM_TOKEN}\n						</form>\n					<!-- ENDIF -->\n				<!-- ELSE -->\n					<form name=\"sortmsg\" method=\"post\" action=\"{S_PM_ACTION}\" style=\"margin:0px\">\n						<span class=\"gensmall\">{L_DISPLAY_MESSAGES}:</span> {S_SELECT_SORT_DAYS} <span class=\"gensmall\">{L_SORT_BY}</span> {S_SELECT_SORT_KEY} {S_SELECT_SORT_DIR} <input class=\"btnlite\" type=\"submit\" name=\"sort\" value=\"{L_GO}\" />\n					{S_FORM_TOKEN}\n					</form>\n				<!-- ENDIF -->\n			</td>\n		</tr>\n		</table>\n	</td>\n</tr>\n</table>\n\n<!-- IF not S_VIEW_MESSAGE -->\n	<div style=\"float: {S_CONTENT_FLOW_END};\"><b class=\"gensmall\"><a href=\"#\" onclick=\"marklist(\'viewfolder\', \'marked_msg_id\', true); return false;\">{L_MARK_ALL}</a> :: <a href=\"#\" onclick=\"marklist(\'viewfolder\', \'marked_msg_id\', false); return false;\">{L_UNMARK_ALL}</a></b></div>\n<!-- ENDIF -->\n'),

(2,'ucp_pm_message_header.html','ucp_pm_viewfolder.html:ucp_pm_viewmessage.html:',1229079038,'\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\" cellpadding=\"0\">\n<tr>\n	<td class=\"row1\">\n		<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\n		<tr>\n			<td align=\"{S_CONTENT_FLOW_BEGIN}\">\n			<!-- IF TOTAL_MESSAGES -->\n				<table width=\"100%\" cellspacing=\"1\">\n				<tr>\n					<td class=\"nav\" valign=\"middle\" nowrap=\"nowrap\">&nbsp;{PAGE_NUMBER}<br /></td>\n					<!-- IF FOLDER_MAX_MESSAGES neq 0 -->\n						<td class=\"gensmall\" nowrap=\"nowrap\" width=\"100%\">&nbsp;[ <b>{FOLDER_CUR_MESSAGES}</b>/{FOLDER_MAX_MESSAGES} {L_MESSAGES} ({FOLDER_PERCENT}%) ]&nbsp;</td>\n					<!-- ELSE -->\n						<td class=\"gensmall\" nowrap=\"nowrap\" width=\"100%\">&nbsp;[ <b>{FOLDER_CUR_MESSAGES}</b> {L_MESSAGES} ]&nbsp;</td>					\n					<!-- ENDIF -->\n				</tr>\n				</table>\n			<!-- ENDIF -->\n	\n			<!-- IF S_VIEW_MESSAGE -->\n				<span class=\"gensmall\">\n				<!-- IF S_DISPLAY_HISTORY -->\n					<!-- IF U_VIEW_PREVIOUS_HISTORY --><a href=\"{U_VIEW_PREVIOUS_HISTORY}\">{L_VIEW_PREVIOUS_HISTORY}</a> | <!-- ENDIF --><!-- IF U_VIEW_NEXT_HISTORY --><a href=\"{U_VIEW_NEXT_HISTORY}\">{L_VIEW_NEXT_HISTORY}</a> | <!-- ENDIF -->\n				<!-- ENDIF --><a href=\"{U_PREVIOUS_PM}\">{L_VIEW_PREVIOUS_PM}</a> | <a href=\"{U_NEXT_PM}\">{L_VIEW_NEXT_PM}</a>&nbsp;\n				</span>\n			<!-- ENDIF -->\n			</td>\n			<td align=\"{S_CONTENT_FLOW_END}\"><!-- INCLUDE pagination.html --></td>\n		</tr>\n		</table>\n	</td>\n</tr>\n</table>\n');
insert into `phpbb_styles_template_data` values 

(2,'ucp_pm_options.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<!-- IF ERROR_MESSAGE or NOTIFICATION_MESSAGE -->\n	<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\n	<tr>\n		<td class=\"row3\" align=\"center\">\n			<!-- IF ERROR_MESSAGE --><span class=\"genmed error\">{ERROR_MESSAGE}</span><!-- ENDIF -->\n			<!-- IF NOTIFICATION_MESSAGE --><span class=\"genmed error\">{NOTIFICATION_MESSAGE}</span><!-- ENDIF -->\n		</td>\n	</tr>\n	</table>\n	<div style=\"padding: 2px;\"></div>\n<!-- ENDIF -->\n\n<form name=\"ucp\" method=\"post\" action=\"{S_UCP_ACTION}\">\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"3\">{L_ADD_NEW_RULE}</th>\n</tr>\n<!-- IF S_CHECK_DEFINED -->\n	<tr>\n		<td class=\"row1\" width=\"50\" align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"top\"><b class=\"gen\">{L_IF}:</b></td>\n		<td class=\"row2\" align=\"center\" valign=\"top\"><!-- IF S_CHECK_SELECT --><select name=\"check_option\">{S_CHECK_OPTIONS}</select><!-- ELSE --><b class=\"gen\">{CHECK_CURRENT}</b><input type=\"hidden\" name=\"check_option\" value=\"{CHECK_OPTION}\" /><!-- ENDIF --></td>\n		<td class=\"row1\" width=\"50\" align=\"{S_CONTENT_FLOW_END}\" valign=\"top\"><!-- IF S_CHECK_SELECT --><input type=\"submit\" name=\"next\" value=\"{L_NEXT_STEP}\" class=\"btnlite\" /><!-- ELSE -->&nbsp;<!-- ENDIF --></td>\n	</tr>\n<!-- ENDIF -->\n<!-- IF S_RULE_DEFINED -->\n	<tr>\n		<td class=\"row1\" width=\"50\" align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"top\"><!-- IF S_RULE_SELECT --><input type=\"submit\" name=\"back[rule]\" value=\"{L_PREVIOUS_STEP}\" class=\"btnlite\" /><!-- ELSE -->&nbsp;<!-- ENDIF --></td>\n		<td class=\"row2\" align=\"center\" valign=\"top\"><!-- IF S_RULE_SELECT --><select name=\"rule_option\">{S_RULE_OPTIONS}</select><!-- ELSE --><b class=\"gen\">{RULE_CURRENT}</b><input type=\"hidden\" name=\"rule_option\" value=\"{RULE_OPTION}\" /><!-- ENDIF --></td>\n		<td class=\"row1\" width=\"50\" align=\"{S_CONTENT_FLOW_END}\" valign=\"top\"><!-- IF S_RULE_SELECT --><input type=\"submit\" name=\"next\" value=\"{L_NEXT_STEP}\" class=\"btnlite\" /><!-- ELSE -->&nbsp;<!-- ENDIF --></td>\n	</tr>\n<!-- ENDIF -->\n	\n<!-- IF S_COND_DEFINED -->\n	<!-- IF S_COND_SELECT or COND_CURRENT -->\n		<tr>\n			<td class=\"row1\" width=\"50\" align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"top\"><!-- IF S_COND_SELECT --><input type=\"submit\" name=\"back[cond]\" value=\"{L_PREVIOUS_STEP}\" class=\"btnlite\" /><!-- ELSE -->&nbsp;<!-- ENDIF --></td>\n			<td class=\"row2\" align=\"center\" valign=\"top\">\n				<!-- IF S_COND_SELECT -->\n					<!-- IF S_TEXT_CONDITION -->\n						<input type=\"text\" name=\"rule_string\" value=\"{CURRENT_STRING}\" size=\"30\" maxlength=\"250\" class=\"post\" />\n					<!-- ELSEIF S_USER_CONDITION -->\n						<input type=\"text\" class=\"post\" name=\"rule_string\" value=\"{CURRENT_STRING}\" size=\"20\" />&nbsp;<span class=\"gensmall\">[ <a href=\"{U_FIND_USERNAME}\" onclick=\"find_username(this.href); return false;\">{L_FIND_USERNAME}</a> ]</span>\n					<!-- ELSEIF S_GROUP_CONDITION -->\n						<input type=\"hidden\" name=\"rule_string\" value=\"{CURRENT_STRING}\" /><!-- IF S_GROUP_OPTIONS --><select name=\"rule_group_id\">{S_GROUP_OPTIONS}</select><!-- ELSE -->{L_NO_GROUPS}<!-- ENDIF -->\n					<!-- ENDIF -->\n				<!-- ELSE -->\n					<b class=\"gen\">{COND_CURRENT}</b>\n						<input type=\"hidden\" name=\"rule_string\" value=\"{CURRENT_STRING}\" /><input type=\"hidden\" name=\"rule_user_id\" value=\"{CURRENT_USER_ID}\" /><input type=\"hidden\" name=\"rule_group_id\" value=\"{CURRENT_GROUP_ID}\" />\n				<!-- ENDIF -->\n			</td>\n			<td class=\"row1\" width=\"50\" align=\"{S_CONTENT_FLOW_END}\" valign=\"top\"><!-- IF S_COND_SELECT --><input type=\"submit\" name=\"next\" value=\"{L_NEXT_STEP}\" class=\"btnlite\" /><!-- ELSE -->&nbsp;<!-- ENDIF --></td>\n		</tr>\n	<!-- ENDIF -->\n	<input type=\"hidden\" name=\"cond_option\" value=\"{COND_OPTION}\" />\n<!-- ENDIF -->\n\n<!-- IF NONE_CONDITION --><input type=\"hidden\" name=\"cond_option\" value=\"none\" /><!-- ENDIF -->\n\n<!-- IF S_ACTION_DEFINED -->\n	<tr>\n		<td class=\"row1\" width=\"50\" align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"top\"><!-- IF S_ACTION_SELECT --><input type=\"submit\" name=\"back[action]\" value=\"{L_PREVIOUS_STEP}\" class=\"btnlite\" /><!-- ELSE -->&nbsp;<!-- ENDIF --></td>\n		<td class=\"row2\" align=\"center\" valign=\"top\"><!-- IF S_ACTION_SELECT --><select name=\"action_option\">{S_ACTION_OPTIONS}</select><!-- ELSE --><b class=\"gen\">{ACTION_CURRENT}</b><input type=\"hidden\" name=\"action_option\" value=\"{ACTION_OPTION}\" /><!-- ENDIF --></td>\n		<td class=\"row1\" width=\"50\" align=\"{S_CONTENT_FLOW_END}\" valign=\"top\"><!-- IF S_ACTION_SELECT --><input type=\"submit\" name=\"add_rule\" value=\"{L_ADD_RULE}\" class=\"btnlite\" /><!-- ELSE -->&nbsp;<!-- ENDIF --></td>\n	</tr>\n<!-- ENDIF -->\n</table>\n\n<div style=\"padding: 2px;\"></div>\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"6\">{L_DEFINED_RULES}</th>\n</tr>\n<!-- BEGIN rule -->\n	<tr>\n		<td class=\"row1\" width=\"25\" align=\"center\"><span class=\"gen\">#{rule.COUNT}</span></td>\n		<td class=\"row2\" width=\"120\"><span class=\"gen\"><strong>{L_IF}</strong> {rule.CHECK}</span></td>\n		<td class=\"row1\" width=\"120\"><span class=\"gen\">{rule.RULE}</span></td>\n		<td class=\"row2\" width=\"120\"><span class=\"gen\"><!-- IF rule.STRING -->{rule.STRING}<!-- ENDIF --></span></td>\n		<td class=\"row1\"><span class=\"gen\">{rule.ACTION}<!-- IF rule.FOLDER --> -&gt; {rule.FOLDER}<!-- ENDIF --></span></td>\n		<td class=\"row2\" width=\"25\"><input type=\"submit\" name=\"delete_rule[{rule.RULE_ID}]\" value=\"{L_DELETE_RULE}\" class=\"btnlite\" /></td>\n	</tr>\n<!-- BEGINELSE -->\n	<tr>\n		<td colspan=\"6\" class=\"row3\" align=\"center\"><span class=\"gen\">{L_NO_RULES_DEFINED}</span></td>\n	</tr>\n<!-- END rule -->\n</table>\n\n<div style=\"padding: 2px;\"></div>\n\n<!-- IF S_FOLDER_OPTIONS -->\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th colspan=\"2\">{L_RENAME_FOLDER}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" width=\"200\"><b class=\"gen\">{L_RENAME_FOLDER}: </b></td>\n		<td class=\"row1\"><select name=\"rename_folder_id\">{S_FOLDER_OPTIONS}</select></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" width=\"200\"><b class=\"gen\">{L_NEW_FOLDER_NAME}: </b></td>\n		<td class=\"row1\"><input type=\"text\" class=\"post\" name=\"new_folder_name\" size=\"30\" maxlength=\"30\" /></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" align=\"{S_CONTENT_FLOW_END}\" colspan=\"2\"><input class=\"btnlite\" style=\"width:150px\" type=\"submit\" name=\"rename_folder\" value=\"{L_RENAME}\" /></td>\n	</tr>\n	</table>\n\n	<div style=\"padding: 2px;\"></div>\n<!-- ENDIF -->\n\n<!-- IF not S_MAX_FOLDER_ZERO -->\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"2\">{L_ADD_FOLDER}</th>\n</tr>\n<!-- IF S_MAX_FOLDER_REACHED -->\n	<tr>\n		<td colspan=\"2\">{L_MAX_FOLDER_REACHED}</td>\n	</tr>\n<!-- ELSE -->\n	<tr>\n		<td class=\"row1\" width=\"200\"><b class=\"gen\">{L_ADD_FOLDER}: </b></td>\n		<td class=\"row1\"><input type=\"text\" class=\"post\" name=\"foldername\" size=\"30\" maxlength=\"30\" /></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" align=\"{S_CONTENT_FLOW_END}\" colspan=\"2\"><input class=\"btnlite\" style=\"width:150px\" type=\"submit\" name=\"addfolder\" value=\"{L_ADD}\" /></td>\n	</tr>\n<!-- ENDIF -->\n</table>\n<!-- ENDIF -->\n\n<div style=\"padding: 2px;\"></div>\n\n<!-- IF S_FOLDER_OPTIONS -->\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<th colspan=\"3\">{L_REMOVE_FOLDER}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" width=\"200\"><b class=\"gen\">{L_REMOVE_FOLDER}: </b></td>\n		<td class=\"row1\"><select name=\"remove_folder_id\">{S_FOLDER_OPTIONS}</select></td>\n		<td class=\"row1\"><b class=\"genmed\">{L_AND}</b></td>\n	</tr>\n	<tr>\n		<td class=\"row2\" width=\"200\">&nbsp;</td>\n		<td class=\"row2\" colspan=\"2\"><input type=\"radio\" class=\"radio\" name=\"remove_action\" value=\"1\" checked=\"checked\" />&nbsp;<span class=\"genmed\">{L_MOVE_DELETED_MESSAGES_TO} </span>&nbsp;<select name=\"move_to\">{S_TO_FOLDER_OPTIONS}</select></td>\n	</tr>\n	<tr>\n		<td class=\"row2\" width=\"200\">&nbsp;</td>\n		<td class=\"row2\" colspan=\"2\"><input type=\"radio\" class=\"radio\" name=\"remove_action\" value=\"2\" />&nbsp;<span class=\"genmed\">{L_DELETE_MESSAGES_IN_FOLDER}</span></td>\n	</tr>\n	<tr>\n		<td class=\"row2\" width=\"200\">&nbsp;</td>\n		<td class=\"row2\" colspan=\"2\" align=\"{S_CONTENT_FLOW_END}\"><input class=\"btnlite\" style=\"width:150px\" type=\"submit\" name=\"remove_folder\" value=\"{L_REMOVE}\" /></td>\n	</tr>\n	</table>\n\n	<div style=\"padding: 2px;\"></div>\n<!-- ENDIF -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"2\">{L_FOLDER_OPTIONS}</th>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"200\"><span><b class=\"genmed\">{L_IF_FOLDER_FULL}: </b></span></td>\n	<td class=\"row1\"><input type=\"radio\" class=\"radio\" name=\"full_action\" value=\"1\"{S_DELETE_CHECKED} />&nbsp;<span class=\"genmed\">{L_DELETE_OLDEST_MESSAGES}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"200\">&nbsp;</td>\n	<td class=\"row1\"><input type=\"radio\" class=\"radio\" name=\"full_action\" value=\"2\"{S_MOVE_CHECKED} />&nbsp;<span class=\"genmed\">{L_MOVE_TO_FOLDER}: </span><select name=\"full_move_to\">{S_FULL_FOLDER_OPTIONS}</select></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"200\">&nbsp;</td>\n	<td class=\"row1\"><input type=\"radio\" class=\"radio\" name=\"full_action\" value=\"3\"{S_HOLD_CHECKED} />&nbsp;<span class=\"genmed\">{L_HOLD_NEW_MESSAGES}</span></td>\n</tr>\n<tr>\n	<td class=\"row2\" width=\"200\"><b class=\"genmed\">{L_DEFAULT_ACTION}: </b><br /><span class=\"gensmall\">{L_DEFAULT_ACTION_EXPLAIN}</span></td>\n	<td class=\"row2\"><span class=\"genmed\">{DEFAULT_ACTION}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\" colspan=\"2\" align=\"{S_CONTENT_FLOW_END}\"><input class=\"btnlite\" style=\"width:150px\" type=\"submit\" name=\"fullfolder\" value=\"{L_CHANGE}\" /></td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n</form>\n<!-- INCLUDE ucp_footer.html -->\n'),

(2,'ucp_pm_popup.html','',1229079038,'<!-- INCLUDE simple_header.html -->\n\n<script type=\"text/javascript\">\n// <![CDATA[\n/**\n* Jump to inbox\n*/\nfunction jump_to_inbox(url)\n{\n	opener.document.location.href = url.replace(/&amp;/g, \'&\');\n	window.close();\n}\n// ]]>\n</script>\n\n<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"10\">\n<tr>\n	<td>\n		<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"4\" class=\"tablebg\">\n		<tr class=\"row1\"> \n			<td valign=\"top\" align=\"center\">\n				<br /><span class=\"gen\">\n				<!-- IF S_NOT_LOGGED_IN -->\n					{L_LOGIN_CHECK_PM}\n				<!-- ELSE -->\n					{MESSAGE}<br /><br />{CLICK_TO_VIEW}\n				<!-- ENDIF -->\n				</span>\n				<br /><br /><span class=\"genmed\"><a href=\"#\" onclick=\"window.close(); return false;\">{L_CLOSE_WINDOW}</a></span><br /><br />\n			</td>\n		</tr>\n		</table>\n	</td>\n</tr>\n</table>\n\n<!-- INCLUDE simple_footer.html -->'),

(2,'ucp_pm_viewfolder.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<div id=\"pagecontent\">\n\n<!-- IF not PROMPT -->\n	<!-- INCLUDE ucp_pm_message_header.html -->\n<!-- ENDIF -->\n\n<div style=\"padding: 2px;\"></div>\n\n<!-- IF S_PM_ICONS -->\n	<!-- DEFINE $COLSPAN = 6 -->\n<!-- ELSE -->\n	<!-- DEFINE $COLSPAN = 5 -->\n<!-- ENDIF -->\n\n<form name=\"viewfolder\" method=\"post\" action=\"{S_PM_ACTION}\" style=\"margin:0px\">\n\n<!-- IF PROMPT -->\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\">\n	<tr>\n		<th colspan=\"2\" valign=\"middle\">{L_OPTIONS}</th>\n	</tr>\n	<tr>\n		<td class=\"row1\" width=\"35%\">{L_DELIMITER}: </td>\n		<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"delimiter\" value=\",\" /></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" width=\"35%\">{L_ENCLOSURE}: </td>\n		<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"enclosure\" value=\"&#034;\" /></td>\n	</tr>\n	<tr>\n		<td class=\"cat\" colspan=\"2\" align=\"center\"><input type=\"hidden\" name=\"export_option\" value=\"CSV\" /><input class=\"btnmain\" type=\"submit\" name=\"submit_export\" value=\"{L_EXPORT_FOLDER}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"Reset\" name=\"reset\" /></td>\n	</tr>\n	</table>\n	{S_FORM_TOKEN}\n\n</form>\n<!-- ELSE -->\n	\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\" cellpadding=\"0\" border=\"0\">\n	<!-- IF NUM_NOT_MOVED or NUM_REMOVED -->\n		<tr>\n			<td class=\"row3\" colspan=\"{$COLSPAN}\" align=\"center\"><span class=\"gen\">\n				<!-- IF NUM_REMOVED -->\n				{RULE_REMOVED_MESSAGES}\n					<!-- IF NUM_NOT_MOVED --><br /><!-- ENDIF -->\n				<!-- ENDIF -->\n				<!-- IF NUM_NOT_MOVED -->\n				{NOT_MOVED_MESSAGES}<br />{RELEASE_MESSAGE_INFO}\n				<!-- ENDIF -->\n			</span></td>\n		</tr>\n	<!-- ENDIF -->\n	<tr>\n		<th colspan=\"<!-- IF S_PM_ICONS -->3<!-- ELSE -->2<!-- ENDIF -->\">&nbsp;{L_SUBJECT}&nbsp;</th>\n		<th>&nbsp;<!-- IF S_SHOW_RECIPIENTS -->{L_RECIPIENTS}<!-- ELSE -->{L_AUTHOR}<!-- ENDIF -->&nbsp;</th>\n		<th>&nbsp;{L_SENT_AT}&nbsp;</th>\n		<th>&nbsp;{L_MARK}&nbsp;</th>\n	</tr>\n\n	<!-- BEGIN messagerow -->\n		<tr>\n			<td class=\"row1\" width=\"25\" align=\"center\" nowrap=\"nowrap\">{messagerow.FOLDER_IMG}</td>\n		<!-- IF S_PM_ICONS -->\n			<td class=\"row1\" width=\"25\" align=\"center\">{messagerow.PM_ICON_IMG}</td>\n		<!-- ENDIF -->\n\n		<!-- IF messagerow.S_PM_DELETED --><td class=\"row3\"><!-- ELSE --><td class=\"row1\"><!-- ENDIF -->\n			<!-- IF not messagerow.PM_IMG and messagerow.PM_CLASS -->\n				<span class=\"{messagerow.PM_CLASS}\" style=\"float: {S_CONTENT_FLOW_BEGIN};\"><img src=\"images/spacer.gif\" width=\"10\" height=\"10\" alt=\"\" /></span>&nbsp;\n			<!-- ELSEIF messagerow.PM_IMG -->\n				{messagerow.PM_IMG}&nbsp;\n			<!-- ENDIF -->\n\n			<span class=\"topictitle\">\n				{messagerow.ATTACH_ICON_IMG} \n				<!-- IF messagerow.S_PM_DELETED -->\n					{L_MESSAGE_REMOVED_FROM_OUTBOX}<br />\n					<a href=\"{messagerow.U_REMOVE_PM}\" style=\"float: {S_CONTENT_FLOW_END};\">{L_DELETE_MESSAGE}</a>\n				<!-- ELSE -->\n					<a href=\"{messagerow.U_VIEW_PM}\">{messagerow.SUBJECT}</a>\n				<!-- ENDIF -->\n				<!-- IF messagerow.S_AUTHOR_DELETED -->\n					<br /><em class=\"gensmall\">{L_PM_FROM_REMOVED_AUTHOR}</em>\n				<!-- ENDIF -->\n			</span></td>\n\n			<td class=\"row1\" width=\"100\" align=\"center\"><p class=\"topicauthor\"><!-- IF S_SHOW_RECIPIENTS -->{messagerow.RECIPIENTS}<!-- ELSE -->{messagerow.MESSAGE_AUTHOR_FULL}<!-- ENDIF --></p></td>\n			<td class=\"row1\" width=\"120\" align=\"center\"><p class=\"topicdetails\">{messagerow.SENT_TIME}</p></td>\n			<td class=\"row1\" width=\"20\" align=\"center\"><p class=\"topicdetails\"><input type=\"checkbox\" class=\"radio\" name=\"marked_msg_id[]\" value=\"{messagerow.MESSAGE_ID}\" /></p></td>\n		</tr>\n	<!-- BEGINELSE -->\n		<tr>\n			<td class=\"row1\" colspan=\"{$COLSPAN}\" height=\"30\" align=\"center\" valign=\"middle\"><span class=\"gen\">{L_NO_MESSAGES}</span></td>\n		</tr>\n	<!-- END messagerow -->\n</table>\n\n<input type=\"hidden\" name=\"cur_folder_id\" value=\"{CUR_FOLDER_ID}\" />\n\n<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\">\n<tr>\n	<td class=\"cat\">\n<!-- IF .messagerow -->\n	<div style=\"float: {S_CONTENT_FLOW_BEGIN};\"><select name=\"export_option\"><option value=\"CSV\">{L_EXPORT_AS_CSV}</option><option value=\"CSV_EXCEL\">{L_EXPORT_AS_CSV_EXCEL}</option><option value=\"XML\">{L_EXPORT_AS_XML}</option></select>&nbsp;<input class=\"btnlite\" type=\"submit\" name=\"submit_export\" value=\"{L_EXPORT_FOLDER}\" /></div>\n	<div style=\"float: {S_CONTENT_FLOW_END};\"><select name=\"mark_option\">{S_MARK_OPTIONS}{S_MOVE_MARKED_OPTIONS}</select>&nbsp;<input class=\"btnlite\" type=\"submit\" name=\"submit_mark\" value=\"{L_GO}\" />&nbsp;</div>\n<!-- ENDIF -->\n	</td>\n</tr>\n</table>\n\n<div style=\"padding: 2px;\"></div>\n<!-- INCLUDE ucp_pm_message_footer.html -->\n\n<!-- ENDIF -->\n\n<br clear=\"all\" />\n\n</div>\n\n<!-- INCLUDE ucp_footer.html -->\n'),

(2,'ucp_pm_viewmessage.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<div id=\"pagecontent\">\n\n<!-- INCLUDE ucp_pm_message_header.html -->\n<div style=\"padding: 2px;\"></div>\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\" cellpadding=\"4\">\n\n<tr class=\"row1\">\n	<td class=\"genmed\" nowrap=\"nowrap\" width=\"150\"><b>{L_PM_SUBJECT}:</b></td>\n	<td class=\"gen\">{SUBJECT}</td>\n</tr>\n\n<tr class=\"row1\">\n	<td class=\"genmed\" nowrap=\"nowrap\" width=\"150\"><b>{L_PM_FROM}:</b></td>\n	<td class=\"gen\">{MESSAGE_AUTHOR_FULL}</td>\n</tr>\n\n<tr class=\"row1\">\n	<td class=\"genmed\" nowrap=\"nowrap\" width=\"150\"><b>{L_SENT_AT}:</b></td>\n	<td class=\"gen\">{SENT_DATE}</td>\n</tr>\n\n<!-- IF S_TO_RECIPIENT -->\n	<tr class=\"row1\">\n		<td class=\"genmed\" nowrap=\"nowrap\" width=\"150\"><b>{L_TO}:</b></td>\n		<td class=\"gen\">\n		<!-- BEGIN to_recipient -->\n			<!-- IF to_recipient.IS_GROUP --><span class=\"sep\"><a href=\"{to_recipient.U_VIEW}\">{to_recipient.NAME}</a></span><!-- ELSE -->{to_recipient.NAME_FULL}&nbsp;<!-- ENDIF -->\n		<!-- END to_recipient -->\n		</td>\n	</tr>\n<!-- ENDIF -->\n\n<!-- IF S_BCC_RECIPIENT -->\n	<tr class=\"row1\">\n		<td class=\"genmed\" nowrap=\"nowrap\" width=\"150\"><b>{L_BCC}:</b></td>\n		<td class=\"gen\">\n		<!-- BEGIN bcc_recipient -->\n			<!-- IF bcc_recipient.IS_GROUP --><span class=\"sep\"><a href=\"{bcc_recipient.U_VIEW}\">{bcc_recipient.NAME}</a></span><!-- ELSE -->{bcc_recipient.NAME_FULL}&nbsp;<!-- ENDIF -->\n		<!-- END bcc_recipient -->\n		</td>\n	</tr>\n<!-- ENDIF -->\n</table>\n\n<div style=\"padding: 2px;\"></div>\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\" cellpadding=\"0\">\n\n<tr>\n	<th nowrap=\"nowrap\">{L_MESSAGE}</th>\n</tr>\n\n<tr>\n	<td class=\"spacer\" height=\"1\"><img src=\"images/spacer.gif\" alt=\"\" width=\"1\" height=\"1\" /></td>\n</tr>\n\n<tr class=\"row1\">\n	<td valign=\"top\">\n		<table width=\"100%\" cellspacing=\"5\">\n		<tr>\n			<td>\n				<div class=\"postbody\">{MESSAGE}</div>\n\n				<!-- IF S_HAS_ATTACHMENTS -->\n					<br clear=\"all\" /><br />\n							\n					<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n					<tr>\n						<td class=\"row3\"><b class=\"genmed\">{L_ATTACHMENTS}: </b></td>\n					</tr>\n					<!-- BEGIN attachment -->\n						<tr>\n							<td class=\"row2\">{attachment.DISPLAY_ATTACHMENT}</td>\n						</tr>\n					<!-- END attachment -->\n					</table>\n				<!-- ENDIF -->\n\n				<!-- IF S_DISPLAY_NOTICE -->\n					<span class=\"gensmall error\"><br /><br />{L_DOWNLOAD_NOTICE}</span>\n				<!-- ENDIF -->\n				<!-- IF SIGNATURE -->\n					<span class=\"postbody\"><br />_________________<br />{SIGNATURE}</span>\n				<!-- ENDIF -->\n				<!-- IF EDITED_MESSAGE -->\n					<span class=\"gensmall\">{EDITED_MESSAGE}</span>\n				<!-- ENDIF -->\n\n				<!-- IF not S_HAS_ATTACHMENTS --><br clear=\"all\" /><br /><!-- ENDIF -->\n\n				<table width=\"100%\" cellspacing=\"0\">\n				<tr valign=\"middle\">\n					<td class=\"gensmall\" align=\"{S_CONTENT_FLOW_END}\"> <!-- IF U_DELETE --><a href=\"{U_DELETE}\">{DELETE_IMG}</a> <!-- ENDIF --></td>\n				</tr>\n				</table>\n\n			</td>\n		</tr>\n		</table>\n	</td>\n</tr>\n\n<tr class=\"row1\">\n	<td><div class=\"gensmall\" style=\"float: {S_CONTENT_FLOW_BEGIN};\">&nbsp;<!-- IF U_MESSAGE_AUTHOR --><a href=\"{U_MESSAGE_AUTHOR}\">{PROFILE_IMG}</a> <!-- ENDIF --> <!-- IF U_EMAIL --><a href=\"{U_EMAIL}\">{EMAIL_IMG}</a> <!-- ENDIF -->&nbsp;</div> <div class=\"gensmall\" style=\"float: {S_CONTENT_FLOW_END};\"><!-- IF U_EDIT --><a href=\"{U_EDIT}\">{EDIT_IMG}</a> <!-- ENDIF --> <!-- IF U_QUOTE --><a href=\"{U_QUOTE}\">{QUOTE_IMG}</a> <!-- ENDIF --> <!-- IF U_POST_REPLY_PM --><a href=\"{U_POST_REPLY_PM}\">{REPLY_IMG}</a><!-- ENDIF -->&nbsp;</div></td>\n</tr>\n\n<tr>\n	<td class=\"spacer\" height=\"1\"><img src=\"images/spacer.gif\" alt=\"\" width=\"1\" height=\"1\" /></td>\n</tr>\n</table>\n\n<div style=\"padding: 2px;\"></div>\n<!-- INCLUDE ucp_pm_message_footer.html -->\n\n<br clear=\"all\" />\n\n</div>\n\n<!-- IF S_DISPLAY_HISTORY --><!-- INCLUDE ucp_pm_history.html --><!-- ENDIF -->\n\n<!-- INCLUDE ucp_footer.html -->\n'),

(2,'ucp_pm_viewmessage_print.html','',1229079038,'<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">\n<html dir=\"{S_CONTENT_DIRECTION}\" lang=\"{S_USER_LANG}\">\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset={S_CONTENT_ENCODING}\">\n<meta http-equiv=\"Content-Style-Type\" content=\"text/css\">\n<meta http-equiv=\"Content-Language\" content=\"{S_USER_LANG}\">\n<title>{SITENAME} :: {PAGE_TITLE}</title>\n\n<style type=\"text/css\">\n<!--\n\nbody {\n	font-family: Verdana,serif;\n	font-size: 10pt;\n}\n\ntd {\n	font-family: Verdana,serif;\n	font-size: 10pt;\n	line-height: 150%;\n}\n\n.code,\n.quote {\n	font-size: smaller;\n	border: black solid 1px;\n}\n\n.forum {\n	font-family: Arial,Helvetica,sans-serif;\n	font-weight: bold;\n	font-size: 18pt;\n}\n\n.topic {\n	font-family: Arial,Helvetica,sans-serif;\n	font-size: 14pt;\n	font-weight: bold;\n}\n\n.gensmall {\n	font-size: 8pt;\n}\n\nhr {\n	color: #888;\n	height: 3px;\n	border-style: solid;\n}\n\nhr.sep {\n	color: #aaa;\n	height: 1px;\n	border-style: dashed;\n}\n//-->\n</style>\n\n</head>\n<body>\n\n<table width=\"85%\" cellspacing=\"3\" cellpadding=\"0\" border=\"0\" align=\"center\">\n<tr>\n	<td colspan=\"2\" align=\"center\"><span class=\"Forum\">{SITENAME}</span><br /><span class=\"gensmall\">{L_PRIVATE_MESSAGING}</a></span></td>\n</tr>\n<tr>\n	<td colspan=\"2\"><br /></td>\n</tr>\n<tr>\n	<td><span class=\"topic\">{SUBJECT}</span><br /></td>\n	<td align=\"{S_CONTENT_FLOW_END}\" valign=\"bottom\"><span class=\"gensmall\">{PAGE_NUMBER}</span></td>\n</tr>\n</table>\n\n<hr width=\"85%\" />\n\n<table width=\"85%\" cellspacing=\"3\" cellpadding=\"0\" border=\"0\" align=\"center\">\n<tr>\n	<td width=\"10%\" nowrap=\"nowrap\">{L_PM_FROM}:&nbsp;</td>\n	<td><b>{MESSAGE_AUTHOR}</b> [ {SENT_DATE} ]</td>\n</tr>\n	\n<!-- IF S_TO_RECIPIENT -->\n	<tr>\n		<td width=\"10%\" nowrap=\"nowrap\">{L_TO}:</td>\n		<td>\n		<!-- BEGIN to_recipient -->\n			<!-- IF to_recipient.COLOUR --><span style=\"color:{to_recipient.COLOUR}\"><!-- ELSE --><span<!-- IF to_recipient.IS_GROUP --> class=\"sep\"<!-- ENDIF -->><!-- ENDIF -->{to_recipient.NAME}</span>&nbsp;\n		<!-- END to_recipient -->\n		</td>\n	</tr>\n<!-- ENDIF -->\n\n<!-- IF S_BCC_RECIPIENT -->\n	<tr>\n		<td width=\"10%\" nowrap=\"nowrap\">{L_BCC}:</td>\n		<td>\n		<!-- BEGIN bcc_recipient -->\n			<!-- IF bcc_recipient.COLOUR --><span style=\"color:{bcc_recipient.COLOUR}\"><!-- ELSE --><span<!-- IF bcc_recipient.IS_GROUP --> class=\"sep\"<!-- ENDIF -->><!-- ENDIF -->{bcc_recipient.NAME}</span>&nbsp;\n		<!-- END bcc_recipient -->\n		</td>\n	</tr>\n<!-- ENDIF -->\n<tr>\n	<td colspan=\"2\"><hr class=\"sep\" />{MESSAGE}</td>\n</tr>\n</table>\n\n<hr width=\"85%\" />\n<!--\n	We request you retain the full copyright notice below including the link to www.phpbb.com.\n	This not only gives respect to the large amount of time given freely by the developers\n	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain\n	the full copyright we ask you at least leave in place the \"Powered by phpBB\" line. If you\n	refuse to include even this then support on our forums may be affected.\n\n	The phpBB Group : 2006\n// -->\n\n<table width=\"85%\" cellspacing=\"3\" cellpadding=\"0\" border=\"0\" align=\"center\">\n<tr>\n	<td><span class=\"gensmall\">{PAGE_NUMBER}</span></td>\n	<td align=\"{S_CONTENT_FLOW_END}\"><span class=\"gensmall\">{S_TIMEZONE}</span></td>\n</tr>\n<tr>\n	<td colspan=\"2\" align=\"center\"><span class=\"gensmall\">Powered by phpBB &copy; 2000, 2002, 2005, 2007 phpBB Group<br />http://www.phpbb.com/</span></td>\n</tr>\n</table>\n\n</body>\n</html>\n'),

(2,'ucp_prefs_personal.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<script type=\"text/javascript\">\n// <![CDATA[\n	/**\n	* Set display of page element\n	* s[-1,0,1] = hide,toggle display,show\n	*/\n	function dE(n,s)\n	{\n		var e = document.getElementById(n);\n		if (!s)\n		{\n			s = (e.style.display == \'\') ? -1 : 1;\n		}\n		e.style.display = (s == 1) ? \'block\' : \'none\';\n	}\n\n	var default_dateformat = \'{A_DEFAULT_DATEFORMAT}\';\n// ]]>\n</script>\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"2\" valign=\"middle\">{L_TITLE}</th>\n</tr>\n<!-- IF ERROR -->\n	<tr>\n		<td class=\"row3\" colspan=\"2\" align=\"center\"><span class=\"gensmall error\">{ERROR}</span></td>\n	</tr>\n<!-- ENDIF -->\n<tr> \n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_SHOW_EMAIL}:</b></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"viewemail\" value=\"1\"<!-- IF S_VIEW_EMAIL --> checked=\"checked\"<!-- ENDIF --> /><span class=\"genmed\">{L_YES}</span>&nbsp;&nbsp;<input type=\"radio\" class=\"radio\" name=\"viewemail\" value=\"0\"<!-- IF not S_VIEW_EMAIL --> checked=\"checked\"<!-- ENDIF --> /><span class=\"genmed\">{L_NO}</span></td>\n</tr>\n<tr> \n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_ADMIN_EMAIL}:</b></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"massemail\" value=\"1\"<!-- IF S_MASS_EMAIL --> checked=\"checked\"<!-- ENDIF --> /><span class=\"genmed\">{L_YES}</span>&nbsp;&nbsp;<input type=\"radio\" class=\"radio\" name=\"massemail\" value=\"0\"<!-- IF not S_MASS_EMAIL --> checked=\"checked\"<!-- ENDIF --> /><span class=\"genmed\">{L_NO}</span></td>\n</tr>\n<tr> \n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_ALLOW_PM}:</b><br /><span class=\"gensmall\">{L_ALLOW_PM_EXPLAIN}</span></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"allowpm\" value=\"1\"<!-- IF S_ALLOW_PM --> checked=\"checked\"<!-- ENDIF --> /><span class=\"genmed\">{L_YES}</span>&nbsp;&nbsp;<input type=\"radio\" class=\"radio\" name=\"allowpm\" value=\"0\"<!-- IF not S_ALLOW_PM --> checked=\"checked\"<!-- ENDIF --> /><span class=\"genmed\">{L_NO}</span></td>\n</tr>\n<!-- IF S_CAN_HIDE_ONLINE -->\n	<tr> \n		<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_HIDE_ONLINE}:</b><br /><span class=\"gensmall\">{L_HIDE_ONLINE_EXPLAIN}</span></td>\n		<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"hideonline\" value=\"1\"<!-- IF S_HIDE_ONLINE --> checked=\"checked\"<!-- ENDIF --> /><span class=\"genmed\">{L_YES}</span>&nbsp;&nbsp;<input type=\"radio\" class=\"radio\" name=\"hideonline\" value=\"0\"<!-- IF not S_HIDE_ONLINE --> checked=\"checked\"<!-- ENDIF --> /><span class=\"genmed\">{L_NO}</span></td>\n	</tr>\n<!-- ENDIF -->\n<!-- IF S_SELECT_NOTIFY -->\n	<tr> \n		<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_NOTIFY_METHOD}:</b><br /><span class=\"gensmall\">{L_NOTIFY_METHOD_EXPLAIN}</span></td>\n		<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"notifymethod\" value=\"0\"<!-- IF S_NOTIFY_EMAIL --> checked=\"checked\"<!-- ENDIF --> /><span class=\"genmed\">{L_NOTIFY_METHOD_EMAIL}</span>&nbsp;&nbsp;<input type=\"radio\" class=\"radio\" name=\"notifymethod\" value=\"1\"<!-- IF S_NOTIFY_IM --> checked=\"checked\"<!-- ENDIF --> /><span class=\"genmed\">{L_NOTIFY_METHOD_IM}</span>&nbsp;&nbsp;<input type=\"radio\" class=\"radio\" name=\"notifymethod\" value=\"2\"<!-- IF S_NOTIFY_BOTH --> checked=\"checked\"<!-- ENDIF --> /><span class=\"genmed\">{L_NOTIFY_METHOD_BOTH}</span></td>\n	</tr>\n<!-- ENDIF -->\n<tr> \n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_NOTIFY_ON_PM}:</b></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"notifypm\" value=\"1\"<!-- IF S_NOTIFY_PM --> checked=\"checked\"<!-- ENDIF --> /><span class=\"genmed\">{L_YES}</span>&nbsp;&nbsp;<input type=\"radio\" class=\"radio\" name=\"notifypm\" value=\"0\"<!-- IF not S_NOTIFY_PM --> checked=\"checked\"<!-- ENDIF --> /><span class=\"genmed\">{L_NO}</span></td>\n</tr>\n<tr> \n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_POPUP_ON_PM}:</b></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"popuppm\" value=\"1\"<!-- IF S_POPUP_PM --> checked=\"checked\"<!-- ENDIF --> /><span class=\"genmed\">{L_YES}</span>&nbsp;&nbsp;<input type=\"radio\" class=\"radio\" name=\"popuppm\" value=\"0\"<!-- IF not S_POPUP_PM --> checked=\"checked\"<!-- ENDIF --> /><span class=\"genmed\">{L_NO}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_BOARD_LANGUAGE}:</b></td>\n	<td class=\"row2\"><select name=\"lang\">{S_LANG_OPTIONS}</select></td>\n</tr>\n<!-- IF S_STYLE_OPTIONS -->\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_BOARD_STYLE}:</b></td>\n	<td class=\"row2\"><select name=\"style\">{S_STYLE_OPTIONS}</select></td>\n</tr>\n<!-- ENDIF -->\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_BOARD_TIMEZONE}:</b></td>\n	<td class=\"row2\">\n		<select id=\"tz\" name=\"tz\">{S_TZ_OPTIONS}</select>\n	</td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_BOARD_DST}:</b></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"dst\" value=\"1\"<!-- IF S_DST --> checked=\"checked\"<!-- ENDIF --> /> <span class=\"genmed\">{L_YES}</span>&nbsp;&nbsp;<input type=\"radio\" class=\"radio\" name=\"dst\" value=\"0\"<!-- IF not S_DST --> checked=\"checked\"<!-- ENDIF --> /> <span class=\"genmed\">{L_NO}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_BOARD_DATE_FORMAT}:</b><br /><span class=\"gensmall\">{L_BOARD_DATE_FORMAT_EXPLAIN}</span></td>\n	<td class=\"row2\">\n		<select name=\"dateoptions\" id=\"dateoptions\" onchange=\"if(this.value==\'custom\'){dE(\'custom_date\',1);}else{dE(\'custom_date\',-1);} if (this.value == \'custom\') { document.getElementById(\'dateformat\').value = default_dateformat; } else { document.getElementById(\'dateformat\').value = this.value; }\">\n			{S_DATEFORMAT_OPTIONS}\n		</select>\n		<div id=\"custom_date\"<!-- IF not S_CUSTOM_DATEFORMAT --> style=\"display:none;\"<!-- ENDIF -->><input type=\"text\" name=\"dateformat\" id=\"dateformat\" value=\"{DATE_FORMAT}\" maxlength=\"30\" class=\"post\" style=\"margin-top: 3px;\" /></div>\n	</td>\n</tr>\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\">{S_HIDDEN_FIELDS}<input class=\"btnmain\" type=\"submit\" name=\"submit\" value=\"{L_SUBMIT}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" name=\"reset\" /></td>\n</tr>\n</table>\n\n<!-- INCLUDE ucp_footer.html -->'),

(2,'ucp_prefs_post.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"2\" valign=\"middle\">{L_TITLE}</th>\n</tr>\n<!-- IF ERROR -->\n	<tr>\n		<td class=\"row3\" colspan=\"2\" align=\"center\"><span class=\"gensmall error\">{ERROR}</span></td>\n	</tr>\n<!-- ENDIF -->\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_DEFAULT_BBCODE}:</b></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"bbcode\" value=\"1\"<!-- IF S_BBCODE --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_YES}</span>&nbsp; &nbsp;<input type=\"radio\" class=\"radio\" name=\"bbcode\" value=\"0\"<!-- IF not S_BBCODE --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_NO}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_DEFAULT_SMILIES}:</b></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"smilies\" value=\"1\"<!-- IF S_SMILIES --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_YES}</span>&nbsp; &nbsp;<input type=\"radio\" class=\"radio\" name=\"smilies\" value=\"0\"<!-- IF not S_SMILIES --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_NO}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_DEFAULT_ADD_SIG}:</b></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"sig\" value=\"1\"<!-- IF S_SIG --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_YES}</span>&nbsp; &nbsp;<input type=\"radio\" class=\"radio\" name=\"sig\" value=\"0\"<!-- IF not S_SIG --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_NO}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_DEFAULT_NOTIFY}:</b></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"notify\" value=\"1\"<!-- IF S_NOTIFY --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_YES}</span>&nbsp; &nbsp;<input type=\"radio\" class=\"radio\" name=\"notify\" value=\"0\"<!-- IF not S_NOTIFY --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_NO}</span></td>\n</tr>\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\">{S_HIDDEN_FIELDS}<input class=\"btnmain\" type=\"submit\" name=\"submit\" value=\"{L_SUBMIT}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" name=\"reset\" /></td>\n</tr>\n</table>\n\n<!-- INCLUDE ucp_footer.html -->'),

(2,'ucp_prefs_view.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"2\" valign=\"middle\">{L_TITLE}</th>\n</tr>\n<!-- IF ERROR -->\n	<tr>\n		<td class=\"row3\" colspan=\"2\" align=\"center\"><span class=\"gensmall error\">{ERROR}</span></td>\n	</tr>\n<!-- ENDIF -->\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_VIEW_IMAGES}:</b></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"images\" value=\"1\"<!-- IF S_IMAGES --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_YES}</span>&nbsp; &nbsp;<input type=\"radio\" class=\"radio\" name=\"images\" value=\"0\"<!-- IF not S_IMAGES --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_NO}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_VIEW_FLASH}:</b></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"flash\" value=\"1\"<!-- IF S_FLASH --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_YES}</span>&nbsp; &nbsp;<input type=\"radio\" class=\"radio\" name=\"flash\" value=\"0\"<!-- IF not S_FLASH --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_NO}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_VIEW_SMILIES}:</b></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"smilies\" value=\"1\"<!-- IF S_SMILIES --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_YES}</span>&nbsp; &nbsp;<input type=\"radio\" class=\"radio\" name=\"smilies\" value=\"0\"<!-- IF not S_SMILIES --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_NO}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_VIEW_SIGS}:</b></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"sigs\" value=\"1\"<!-- IF S_SIGS --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_YES}</span>&nbsp; &nbsp;<input type=\"radio\" class=\"radio\" name=\"sigs\" value=\"0\"<!-- IF not S_SIGS --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_NO}</span></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_VIEW_AVATARS}:</b></td>\n	<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"avatars\" value=\"1\"<!-- IF S_AVATARS --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_YES}</span>&nbsp; &nbsp;<input type=\"radio\" class=\"radio\" name=\"avatars\" value=\"0\"<!-- IF not S_AVATARS --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_NO}</span></td>\n</tr>\n<!-- IF S_CHANGE_CENSORS -->\n	<tr>\n		<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_DISABLE_CENSORS}:</b></td>\n		<td class=\"row2\"><input type=\"radio\" class=\"radio\" name=\"wordcensor\" value=\"1\"<!-- IF S_DISABLE_CENSORS --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_YES}</span>&nbsp; &nbsp;<input type=\"radio\" class=\"radio\" name=\"wordcensor\" value=\"0\"<!-- IF not S_DISABLE_CENSORS --> checked=\"checked\"<!-- ENDIF --> /><span class=\"gen\">{L_NO}</span></td>\n	</tr>\n<!-- ENDIF -->\n<tr>\n	<td colspan=\"2\" class=\"spacer\"></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_VIEW_TOPICS_DAYS}:</b></td>\n	<td class=\"row2\">{S_TOPIC_SORT_DAYS}</td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_VIEW_TOPICS_KEY}:</b></td>\n	<td class=\"row2\">{S_TOPIC_SORT_KEY}</td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_VIEW_TOPICS_DIR}:</b></td>\n	<td class=\"row2\">{S_TOPIC_SORT_DIR}</td>\n</tr>\n<tr>\n	<td colspan=\"2\" class=\"spacer\"></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_VIEW_POSTS_DAYS}:</b></td>\n	<td class=\"row2\">{S_POST_SORT_DAYS}</td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_VIEW_POSTS_KEY}:</b></td>\n	<td class=\"row2\">{S_POST_SORT_KEY}</td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"50%\"><b class=\"genmed\">{L_VIEW_POSTS_DIR}:</b></td>\n	<td class=\"row2\">{S_POST_SORT_DIR}</td>\n</tr>\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\">{S_HIDDEN_FIELDS}<input class=\"btnmain\" type=\"submit\" name=\"submit\" value=\"{L_SUBMIT}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" name=\"reset\" /></td>\n</tr>\n</table>\n\n<!-- INCLUDE ucp_footer.html -->'),

(2,'ucp_profile_avatar.html','',1213071976,'<!-- INCLUDE ucp_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"2\" valign=\"middle\">{L_TITLE}</th>\n</tr>\n<!-- IF ERROR -->\n	<tr>\n		<td class=\"row3\" colspan=\"2\" align=\"center\"><span class=\"gensmall error\">{ERROR}</span></td>\n	</tr>\n<!-- ENDIF -->\n<tr> \n	<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_CURRENT_IMAGE}: </b><br /><span class=\"gensmall\">{L_AVATAR_EXPLAIN}</span></td>\n	<td class=\"row2\" align=\"center\"><br />\n		<!-- IF AVATAR -->{AVATAR}<br /><br /><input type=\"checkbox\" class=\"radio\" name=\"delete\" />&nbsp;<span class=\"gensmall\">{L_DELETE_AVATAR}</span>\n		<!-- ELSE --><img src=\"{T_THEME_PATH}/images/no_avatar.gif\" alt=\"\" />\n		<!-- ENDIF --></td>\n</tr>\n<!-- IF not S_AVATARS_ENABLED -->\n	<tr>\n		<td class=\"row3\" colspan=\"2\" align=\"center\">{L_AVATAR_FEATURES_DISABLED}</td>\n	</tr>\n<!-- ENDIF -->\n<!-- IF S_UPLOAD_AVATAR_FILE -->\n	<tr> \n		<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_UPLOAD_AVATAR_FILE}: </b></td>\n		<td class=\"row2\"><input type=\"hidden\" name=\"MAX_FILE_SIZE\" value=\"{AVATAR_SIZE}\" /><input class=\"post\" type=\"file\" name=\"uploadfile\" /></td>\n	</tr>\n<!-- ENDIF -->\n<!-- IF S_UPLOAD_AVATAR_URL -->\n	<tr> \n		<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_UPLOAD_AVATAR_URL}: </b><br /><span class=\"gensmall\">{L_UPLOAD_AVATAR_URL_EXPLAIN}</span></td>\n		<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"uploadurl\" size=\"40\" value=\"{AVATAR_URL}\" /></td>\n	</tr>\n<!-- ENDIF -->\n<!-- IF S_LINK_AVATAR -->\n	<tr> \n		<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_LINK_REMOTE_AVATAR}: </b><br /><span class=\"gensmall\">{L_LINK_REMOTE_AVATAR_EXPLAIN}</span></td>\n		<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"remotelink\" size=\"40\" value=\"{AVATAR_REMOTE}\" /></td>\n	</tr>\n	<tr> \n		<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_LINK_REMOTE_SIZE}: </b><br /><span class=\"gensmall\">{L_LINK_REMOTE_SIZE_EXPLAIN}</span></td>\n		<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"width\" size=\"3\" value=\"{AVATAR_WIDTH}\" /> <span class=\"gen\">px X </span> <input class=\"post\" type=\"text\" name=\"height\" size=\"3\" value=\"{AVATAR_HEIGHT}\" /> <span class=\"gen\">px</span></td>\n	</tr>\n<!-- ENDIF -->\n<!-- IF S_DISPLAY_GALLERY -->\n	<tr> \n		<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_AVATAR_GALLERY}: </b></td>\n		<td class=\"row2\"><strong><a href=\"{U_GALLERY}\">{L_DISPLAY_GALLERY}</a></strong></td>\n	</tr>\n<!-- ENDIF -->\n\n<!-- IF S_IN_AVATAR_GALLERY -->\n	<tr> \n		<th colspan=\"2\">{L_AVATAR_GALLERY}</th>\n	</tr>\n	<tr> \n		<td class=\"cat\" colspan=\"2\" align=\"center\" valign=\"middle\"><span class=\"genmed\">{L_AVATAR_CATEGORY}: </span><select name=\"category\">{S_CAT_OPTIONS}</select>&nbsp; <input class=\"btnlite\" tabindex=\"0\" type=\"submit\" value=\"{L_GO}\" name=\"display_gallery\" /></td>\n	</tr>\n	<tr> \n		<td class=\"row1\" colspan=\"2\" align=\"center\">\n			<table cellspacing=\"1\" cellpadding=\"4\" border=\"0\">\n			<!-- BEGIN avatar_row -->\n			<tr> \n				<!-- BEGIN avatar_column -->\n					<td class=\"row1\" align=\"center\"><img src=\"{avatar_row.avatar_column.AVATAR_IMAGE}\" alt=\"{avatar_row.avatar_column.AVATAR_NAME}\" title=\"{avatar_row.avatar_column.AVATAR_NAME}\" /></td>\n				<!-- END avatar_column -->\n			</tr>\n			<tr>\n				<!-- BEGIN avatar_option_column -->\n					<td class=\"row2\" align=\"center\"><input type=\"radio\" class=\"radio\" name=\"avatar_select\" value=\"{avatar_row.avatar_option_column.S_OPTIONS_AVATAR}\" /></td>\n				<!-- END avatar_option_column -->\n			</tr>\n			<!-- END avatar_row -->\n			</table>\n		</td>\n	</tr>\n<!-- ENDIF -->\n\n<!-- IF S_DISPLAY_GALLERY or S_IN_AVATAR_GALLERY or S_LINK_AVATAR or S_UPLOAD_AVATAR_URL or S_UPLOAD_AVATAR_FILE or AVATAR -->\n	<tr>\n		<td class=\"cat\" colspan=\"2\" align=\"center\">{S_HIDDEN_FIELDS}<input class=\"btnmain\" type=\"submit\" name=\"submit\" value=\"{L_SUBMIT}\" />&nbsp;&nbsp;<!-- IF S_IN_AVATAR_GALLERY --><input class=\"btnlite\" type=\"submit\" name=\"cancel\" value=\"{L_CANCEL}\" /><!-- ELSE --><input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" name=\"reset\" /><!-- ENDIF --></td>\n	</tr>\n<!-- ENDIF -->\n</table>\n\n<!-- INCLUDE ucp_footer.html -->'),

(2,'ucp_profile_profile_info.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"2\" valign=\"middle\">{L_TITLE}</th>\n</tr>\n<!-- IF ERROR -->\n	<tr>\n		<td class=\"row3\" colspan=\"2\" align=\"center\"><span class=\"gensmall error\">{ERROR}</span></td>\n	</tr>\n<!-- ENDIF -->\n<tr> \n	<td class=\"row1\" colspan=\"2\"><span class=\"gensmall\">{L_PROFILE_INFO_NOTICE}</span></td>\n</tr>\n<tr> \n	<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_UCP_ICQ}: </b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"icq\" size=\"30\" maxlength=\"15\" value=\"{ICQ}\" /></td>\n</tr>\n<tr> \n	<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_UCP_AIM}: </b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"aim\" size=\"30\" maxlength=\"255\" value=\"{AIM}\" /></td>\n</tr>\n<tr> \n	<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_UCP_MSNM}: </b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"msn\" size=\"30\" maxlength=\"255\" value=\"{MSN}\" /></td>\n</tr>\n<tr> \n	<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_UCP_YIM}: </b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"yim\" size=\"30\" maxlength=\"255\" value=\"{YIM}\" /></td>\n</tr>\n<tr> \n	<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_UCP_JABBER}: </b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"jabber\" size=\"30\" maxlength=\"255\" value=\"{JABBER}\" /></td>\n</tr>\n<tr> \n	<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_WEBSITE}: </b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"website\" size=\"30\" maxlength=\"255\" value=\"{WEBSITE}\" /></td>\n</tr>\n<tr> \n	<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_LOCATION}: </b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"location\" size=\"30\" maxlength=\"100\" value=\"{LOCATION}\" /></td>\n</tr>\n<tr> \n	<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_OCCUPATION}: </b></td>\n	<td class=\"row2\"><textarea class=\"post\" name=\"occupation\" rows=\"3\" cols=\"30\">{OCCUPATION}</textarea></td>\n</tr>\n<tr> \n	<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_INTERESTS}: </b></td>\n	<td class=\"row2\"><textarea class=\"post\" name=\"interests\" rows=\"3\" cols=\"30\">{INTERESTS}</textarea></td>\n</tr>\n<!-- IF S_BIRTHDAYS_ENABLED -->\n	<tr> \n		<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_BIRTHDAY}: </b><br /><span class=\"gensmall\">{L_BIRTHDAY_EXPLAIN}</span></td>\n		<td class=\"row2\"><span class=\"genmed\">{L_DAY}:</span> <select name=\"bday_day\">{S_BIRTHDAY_DAY_OPTIONS}</select> <span class=\"genmed\">{L_MONTH}:</span> <select name=\"bday_month\">{S_BIRTHDAY_MONTH_OPTIONS}</select> <span class=\"genmed\">{L_YEAR}:</span> <select name=\"bday_year\">{S_BIRTHDAY_YEAR_OPTIONS}</select></td>\n	</tr>\n<!-- ENDIF -->\n<!-- BEGIN profile_fields -->\n	<tr> \n		<td class=\"row1\" width=\"35%\">\n			<b class=\"genmed\">{profile_fields.LANG_NAME}: </b>\n			<!-- IF profile_fields.S_REQUIRED --><b>*</b><!-- ENDIF -->\n			<!-- IF profile_fields.LANG_EXPLAIN --><br /><span class=\"gensmall\">{profile_fields.LANG_EXPLAIN}</span><!-- ENDIF -->\n		</td>\n		<td class=\"row2\">{profile_fields.FIELD}<!-- IF profile_fields.ERROR --><br /><span class=\"gensmall error\">{profile_fields.ERROR}</span><!-- ENDIF --></td>\n	</tr>\n<!-- END profile_fields -->\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\">{S_HIDDEN_FIELDS}<input class=\"btnmain\" type=\"submit\" name=\"submit\" value=\"{L_SUBMIT}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" name=\"reset\" /></td>\n</tr>\n</table>\n\n<!-- INCLUDE ucp_footer.html -->'),

(2,'ucp_profile_reg_details.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"2\" valign=\"middle\">{L_TITLE}</th>\n</tr>\n<!-- IF S_FORCE_PASSWORD -->\n	<tr>\n		<td class=\"row3\" colspan=\"2\" align=\"center\"><span class=\"gensmall\">{L_FORCE_PASSWORD_EXPLAIN}</span></td>\n	</tr>\n<!-- ENDIF -->\n<!-- IF ERROR -->\n	<tr>\n		<td class=\"row3\" colspan=\"2\" align=\"center\"><span class=\"gensmall error\">{ERROR}</span></td>\n	</tr>\n<!-- ENDIF -->\n<tr>\n	<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_USERNAME}: </b><br /><span class=\"gensmall\">{L_USERNAME_EXPLAIN}</span></td>\n	<td class=\"row2\"><!-- IF S_CHANGE_USERNAME --><input type=\"text\" class=\"post\" name=\"username\" size=\"30\" value=\"{USERNAME}\" /><!-- ELSE --><b class=\"gen\">{USERNAME}</b><!-- ENDIF --></td>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_EMAIL_ADDRESS}: </b></td>\n	<td class=\"row2\"><!-- IF S_CHANGE_EMAIL --><input type=\"text\" class=\"post\" name=\"email\" size=\"30\" maxlength=\"100\" value=\"{EMAIL}\" /><!-- ELSE --><b class=\"gen\">{EMAIL}</b><!-- ENDIF --></td>\n</tr>\n<!-- IF S_CHANGE_EMAIL -->\n	<tr>\n		<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_CONFIRM_EMAIL}: </b><br /><span class=\"gensmall\">{L_CONFIRM_EMAIL_EXPLAIN}</span></td>\n		<td class=\"row2\"><input type=\"text\" class=\"post\" name=\"email_confirm\" size=\"30\" maxlength=\"100\" value=\"{CONFIRM_EMAIL}\" /></td>\n	</tr>\n<!-- ENDIF -->\n<!-- IF S_CHANGE_PASSWORD -->\n	<tr>\n		<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_NEW_PASSWORD}: </b><br /><span class=\"gensmall\">{L_CHANGE_PASSWORD_EXPLAIN}</span></td>\n		<td class=\"row2\"><input type=\"password\" class=\"post\" name=\"new_password\" size=\"30\" maxlength=\"255\" value=\"{NEW_PASSWORD}\" /></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_CONFIRM_PASSWORD}: </b><br /><span class=\"gensmall\">{L_CONFIRM_PASSWORD_EXPLAIN}</span></td>\n		<td class=\"row2\"><input type=\"password\" class=\"post\" name=\"password_confirm\" size=\"30\" maxlength=\"255\" value=\"{PASSWORD_CONFIRM}\" /></td>\n	</tr>\n<!-- ENDIF -->\n<tr>\n	<th colspan=\"2\">{L_CONFIRM_CHANGES}</th>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"35%\"><b class=\"genmed\">{L_CURRENT_PASSWORD}: </b><br /><span class=\"gensmall\">{L_CURRENT_PASSWORD_EXPLAIN}</span></td>\n	<td class=\"row2\"><input type=\"password\" class=\"post\" name=\"cur_password\" size=\"30\" maxlength=\"255\" value=\"{CUR_PASSWORD}\" /></td>\n</tr>\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\">{S_HIDDEN_FIELDS}<input class=\"btnmain\" type=\"submit\" name=\"submit\" value=\"{L_SUBMIT}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" name=\"reset\" /></td>\n</tr>\n</table>\n\n<!-- INCLUDE ucp_footer.html -->'),

(2,'ucp_profile_signature.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<!-- DEFINE $S_SIGNATURE = 1 -->\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"2\">{L_TITLE}</th>\n</tr>\n<tr>\n	<td colspan=\"2\" class=\"row1\">{L_SIGNATURE_EXPLAIN}</td>\n</tr>\n\n<!-- IF ERROR -->\n	<tr>\n		<td class=\"row3\" colspan=\"2\" align=\"center\"><span class=\"genmed error\">{ERROR}</span></td>\n	</tr>\n<!-- ENDIF -->\n\n<tr>\n	<td colspan=\"2\" class=\"row2\">\n		<script type=\"text/javascript\">\n		// <![CDATA[\n			var form_name = \'ucp\';\n			var text_name = \'signature\';\n		// ]]>\n		</script>\n		\n		<table cellspacing=\"0\" cellpadding=\"2\" border=\"0\" width=\"99%\">\n		<!-- INCLUDE posting_buttons.html -->\n		<tr>\n			<td colspan=\"2\"><textarea class=\"post\" name=\"signature\" rows=\"10\" cols=\"76\" style=\"width: 90%;\" onselect=\"storeCaret(this);\" onclick=\"storeCaret(this);\" onkeyup=\"storeCaret(this);\">{SIGNATURE}</textarea></td>\n		</tr>\n		<!-- IF S_BBCODE_ALLOWED -->\n		<tr>\n			<td colspan=\"2\">\n				<table cellspacing=\"0\" cellpadding=\"0\" border=\"0\" width=\"100%\">\n				<tr>\n					<td align=\"{S_CONTENT_FLOW_BEGIN}\">\n						<script type=\"text/javascript\">\n						// <![CDATA[\n							colorPalette(\'h\', 6, 5)\n						// ]]>\n						</script>\n					</td>\n				</tr>\n				</table>\n			</td>\n		</tr>\n		<!-- ENDIF -->\n		</table>\n	</td>\n</tr>\n<tr>\n	<td class=\"row1\" valign=\"top\"><b class=\"genmed\">{L_OPTIONS}</b><br />\n		<table cellspacing=\"2\" cellpadding=\"0\" border=\"0\">\n		<tr>\n			<td class=\"gensmall\">{BBCODE_STATUS}</td>\n		</tr>\n		<tr>\n			<td class=\"gensmall\">{IMG_STATUS}</td>\n		</tr>\n		<tr>\n			<td class=\"gensmall\">{FLASH_STATUS}</td>\n		</tr>\n		<tr>\n			<td class=\"gensmall\">{URL_STATUS}</td>\n		</tr>\n		<tr>\n			<td class=\"gensmall\">{SMILIES_STATUS}</td>\n		</tr>\n		</table>\n	</td>\n	<td class=\"row2\" valign=\"top\">\n		<table cellspacing=\"0\" cellpadding=\"1\" border=\"0\">\n		<!-- IF S_BBCODE_ALLOWED -->\n			<tr>\n				<td><input type=\"checkbox\" class=\"radio\" name=\"disable_bbcode\"{S_BBCODE_CHECKED} /></td>\n				<td class=\"gen\">{L_DISABLE_BBCODE}</td>\n			</tr>\n		<!-- ENDIF -->\n		<!-- IF S_SMILIES_ALLOWED -->\n			<tr>\n				<td><input type=\"checkbox\" class=\"radio\" name=\"disable_smilies\"{S_SMILIES_CHECKED} /></td>\n				<td class=\"gen\">{L_DISABLE_SMILIES}</td>\n			</tr>\n		<!-- ENDIF -->\n		<!-- IF S_LINKS_ALLOWED -->\n			<tr>\n				<td><input type=\"checkbox\" class=\"radio\" name=\"disable_magic_url\"{S_MAGIC_URL_CHECKED} /></td>\n				<td class=\"gen\">{L_DISABLE_MAGIC_URL}</td>\n			</tr>\n		<!-- ENDIF -->\n		</table>\n	</td>\n</tr>\n\n<!-- IF SIGNATURE_PREVIEW -->\n	<tr>\n		<th colspan=\"2\" valign=\"middle\">{L_SIGNATURE_PREVIEW}</th>\n	</tr>\n	<tr> \n		<td class=\"row1\" colspan=\"2\"><div class=\"postbody\" style=\"padding: 6px;\">{SIGNATURE_PREVIEW}</div></td>\n	</tr>\n<!-- ENDIF -->\n\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\">{S_HIDDEN_FIELDS}<input class=\"btnlite\" type=\"submit\" name=\"preview\" value=\"{L_PREVIEW}\" />&nbsp;&nbsp;<input class=\"btnmain\" type=\"submit\" name=\"submit\" value=\"{L_SUBMIT}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" name=\"reset\" /></td>\n</tr>\n</table>\n\n<!-- INCLUDE ucp_footer.html -->'),

(2,'ucp_register.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<script type=\"text/javascript\">\n// <![CDATA[\n	/**\n	* Change language\n	*/\n	function change_language(lang_iso)\n	{\n		document.forms[\'register\'].change_lang.value = lang_iso;\n		document.forms[\'register\'].submit.click();\n	}\n\n// ]]>\n</script>\n\n<form name=\"register\" method=\"post\" action=\"{S_UCP_ACTION}\">\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"2\" valign=\"middle\">{L_REGISTRATION}</th>\n</tr>\n\n<!-- IF ERROR -->\n	<tr>\n		<td class=\"row3\" colspan=\"2\" align=\"center\"><span class=\"gensmall error\">{ERROR}</span></td>\n	</tr>\n<!-- ENDIF -->\n\n<!-- IF L_REG_COND -->\n	<tr>\n		<td class=\"row2\" colspan=\"2\"><span class=\"gensmall\">{L_REG_COND}</span></td>\n	</tr>\n<!-- ENDIF -->\n<!-- IF .profile_fields -->\n	<tr>\n		<td class=\"row2\" colspan=\"2\"><span class=\"gensmall\">{L_ITEMS_REQUIRED}</span></td>\n	</tr>\n<!-- ENDIF -->\n\n<tr>\n	<td class=\"row1\" width=\"38%\"><b class=\"genmed\">{L_USERNAME}: </b><br /><span class=\"gensmall\">{L_USERNAME_EXPLAIN}</span></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"username\" size=\"25\" value=\"{USERNAME}\" /></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_EMAIL_ADDRESS}: </b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"email\" size=\"25\" maxlength=\"100\" value=\"{EMAIL}\" /></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_CONFIRM_EMAIL}: </b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"email_confirm\" size=\"25\" maxlength=\"100\" value=\"{EMAIL_CONFIRM}\" /></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_PASSWORD}: </b><br /><span class=\"gensmall\">{L_PASSWORD_EXPLAIN}</span></td>\n	<td class=\"row2\"><input class=\"post\" type=\"password\" name=\"new_password\" size=\"25\" value=\"{PASSWORD}\" /></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_CONFIRM_PASSWORD}: </b></td>\n	<td class=\"row2\"><input class=\"post\" type=\"password\" name=\"password_confirm\" size=\"25\" value=\"{PASSWORD_CONFIRM}\" /></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_LANGUAGE}: </b></td>\n	<td class=\"row2\"><select name=\"lang\" onchange=\"change_language(this.value); return false;\">{S_LANG_OPTIONS}</select></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_TIMEZONE}: </b></td>\n	<td class=\"row2\"><select name=\"tz\">{S_TZ_OPTIONS}</select></td>\n</tr>\n<!-- BEGIN profile_fields -->\n	<tr>\n		<td class=\"row1\" width=\"35%\">\n			<b class=\"genmed\">{profile_fields.LANG_NAME}: </b>\n			<!-- IF profile_fields.S_REQUIRED --><b>*</b><!-- ENDIF -->\n			<!-- IF profile_fields.LANG_EXPLAIN --><br /><span class=\"gensmall\">{profile_fields.LANG_EXPLAIN}</span><!-- ENDIF -->\n		</td>\n		<td class=\"row2\">{profile_fields.FIELD}<!-- IF profile_fields.ERROR --><br /><span class=\"gensmall error\">{profile_fields.ERROR}</span><!-- ENDIF --></td>\n	</tr>\n<!-- END profile_fields -->\n\n<!-- IF S_CONFIRM_CODE -->\n	<tr>\n		<th colspan=\"2\" valign=\"middle\">{L_CONFIRMATION}</th>\n	</tr>\n	<tr>\n		<td class=\"row3\" colspan=\"2\"><span class=\"gensmall\">{L_CONFIRM_EXPLAIN}</span></td>\n	</tr>\n	<tr>\n		<td class=\"row1\" colspan=\"2\" align=\"center\">{CONFIRM_IMG}</td>\n	</tr>\n	<tr>\n		<td class=\"row1\"><b class=\"genmed\">{L_CONFIRM_CODE}: </b><br /><span class=\"gensmall\">{L_CONFIRM_CODE_EXPLAIN}</span></td>\n		<td class=\"row2\"><input class=\"post\" type=\"text\" name=\"confirm_code\" size=\"8\" maxlength=\"8\" /></td>\n	</tr>\n<!-- ENDIF -->\n\n<!-- IF S_COPPA -->\n	<tr>\n		<th colspan=\"2\" valign=\"middle\">{L_COPPA_COMPLIANCE}</th>\n	</tr>\n	<tr>\n		<td class=\"row3\" colspan=\"2\"><span class=\"gensmall\">{L_COPPA_EXPLAIN}</span></td>\n	</tr>\n<!-- ENDIF -->\n\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\">{S_HIDDEN_FIELDS}<input class=\"btnmain\" type=\"submit\" name=\"submit\" id=\"submit\" value=\"{L_SUBMIT}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" name=\"reset\" /></td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n</form>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'ucp_remind.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<div align=\"center\">\n\n<form action=\"{S_PROFILE_ACTION}\" method=\"post\">\n\n<table class=\"tablebg\" width=\"50%\" cellspacing=\"1\" cellpadding=\"4\" border=\"0\">\n<tr> \n	<th colspan=\"2\">{L_SEND_PASSWORD}</th>\n</tr>\n<tr> \n	<td class=\"row1\" width=\"38%\"><b class=\"genmed\">{L_USERNAME}: </b></td>\n	<td class=\"row2\"><input type=\"text\" class=\"post\" name=\"username\" size=\"25\" value=\"{USERNAME}\" /></td>\n</tr>\n<tr> \n	<td class=\"row1\"><b class=\"genmed\">{L_EMAIL_ADDRESS}: </b><br /><span class=\"gensmall\">{L_EMAIL_REMIND}</span></td>\n	<td class=\"row2\"><input type=\"text\" class=\"post\" name=\"email\" size=\"25\" maxlength=\"100\" value=\"{EMAIL}\" /></td>\n</tr>\n<tr> \n	<td class=\"cat\" colspan=\"2\" align=\"center\">{S_HIDDEN_FIELDS}<input type=\"submit\" name=\"submit\" value=\"{L_SUBMIT}\" class=\"btnmain\" />&nbsp;&nbsp;<input type=\"reset\" value=\"{L_RESET}\" name=\"reset\" class=\"btnlite\" /></td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n</form>\n\n</div>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'ucp_resend.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<div align=\"center\">\n\n<form action=\"{S_PROFILE_ACTION}\" method=\"post\">\n\n<table class=\"tablebg\" width=\"50%\" cellspacing=\"1\" cellpadding=\"4\" border=\"0\">\n<tr>\n	<th colspan=\"2\">{L_UCP_RESEND}</th>\n</tr>\n<tr>\n	<td class=\"row1\" width=\"38%\"><b class=\"genmed\">{L_USERNAME}: </b></td>\n	<td class=\"row2\"><input type=\"text\" class=\"post\" name=\"username\" size=\"25\" value=\"{USERNAME}\" /></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_EMAIL_ADDRESS}: </b><br /><span class=\"gensmall\">{L_EMAIL_REMIND}</span></td>\n	<td class=\"row2\"><input type=\"text\" class=\"post\" name=\"email\" size=\"25\" maxlength=\"100\" value=\"{EMAIL}\" /></td>\n</tr>\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\">{S_HIDDEN_FIELDS}<input type=\"submit\" name=\"submit\" value=\"{L_SUBMIT}\" class=\"btnmain\" />&nbsp;&nbsp;<input type=\"reset\" value=\"{L_RESET}\" name=\"reset\" class=\"btnlite\" /></td>\n</tr>\n</table>\n{S_FORM_TOKEN}\n\n</form>\n\n</div>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'ucp_zebra_foes.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"2\" valign=\"middle\">{L_TITLE}</th>\n</tr>\n<tr>\n	<td class=\"row3\" colspan=\"2\"><span class=\"gensmall\">{L_FOES_EXPLAIN}</span></td>\n</tr>\n<!-- IF ERROR -->\n	<tr>\n		<td class=\"row3\" colspan=\"2\" align=\"center\"><span class=\"gensmall error\">{ERROR}</span></td>\n	</tr>\n<!-- ENDIF -->\n<tr>\n	<td class=\"row1\" width=\"40%\"><b class=\"genmed\">{L_YOUR_FOES}:</b><br /><span class=\"gensmall\">{L_YOUR_FOES_EXPLAIN}</span></td>\n	<td class=\"row2\" align=\"center\"><!-- IF S_USERNAME_OPTIONS --><select name=\"usernames[]\" multiple=\"multiple\" size=\"5\">{S_USERNAME_OPTIONS}</select><!-- ELSE --><b class=\"genmed\">{L_NO_FOES}</b><!-- ENDIF --></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_ADD_FOES}:</b><br /><span class=\"gensmall\">{L_ADD_FOES_EXPLAIN} [ <a href=\"{U_FIND_USERNAME}\" onclick=\"find_username(this.href); return false;\">{L_FIND_USERNAME}</a> ]</span></td>\n	<td class=\"row2\" align=\"center\"><textarea name=\"add\" rows=\"5\" cols=\"30\">{USERNAMES}</textarea><br /></td>\n</tr>\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\">{S_HIDDEN_FIELDS}<input class=\"btnmain\" type=\"submit\" name=\"submit\" value=\"{L_SUBMIT}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" name=\"reset\" /></td>\n</tr>\n</table>\n<!-- TEST -->\n\n\n<!-- INCLUDE ucp_footer.html -->'),

(2,'ucp_zebra_friends.html','',1229079038,'<!-- INCLUDE ucp_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th colspan=\"2\" valign=\"middle\">{L_TITLE}</th>\n</tr>\n<tr>\n	<td class=\"row3\" colspan=\"2\"><span class=\"gensmall\">{L_FRIENDS_EXPLAIN}</span></td>\n</tr>\n<!-- IF ERROR -->\n	<tr>\n		<td class=\"row3\" colspan=\"2\" align=\"center\"><span class=\"gensmall error\">{ERROR}</span></td>\n	</tr>\n<!-- ENDIF -->\n<tr>\n	<td class=\"row1\" width=\"40%\"><b class=\"genmed\">{L_YOUR_FRIENDS}:</b><br /><span class=\"gensmall\">{L_YOUR_FRIENDS_EXPLAIN}</span></td>\n	<td class=\"row2\" align=\"center\"><!-- IF S_USERNAME_OPTIONS --><select name=\"usernames[]\" multiple=\"multiple\" size=\"5\">{S_USERNAME_OPTIONS}</select><!-- ELSE --><b class=\"genmed\">{L_NO_FRIENDS}</b><!-- ENDIF --></td>\n</tr>\n<tr>\n	<td class=\"row1\"><b class=\"genmed\">{L_ADD_FRIENDS}:</b><br /><span class=\"gensmall\">{L_ADD_FRIENDS_EXPLAIN} [ <a href=\"{U_FIND_USERNAME}\" onclick=\"find_username(this.href); return false;\">{L_FIND_USERNAME}</a> ]</span></td>\n	<td class=\"row2\" align=\"center\"><textarea name=\"add\" rows=\"5\" cols=\"30\">{USERNAMES}</textarea><br /></td>\n</tr>\n<tr>\n	<td class=\"cat\" colspan=\"2\" align=\"center\">{S_HIDDEN_FIELDS}<input class=\"btnmain\" type=\"submit\" name=\"submit\" value=\"{L_SUBMIT}\" />&nbsp;&nbsp;<input class=\"btnlite\" type=\"reset\" value=\"{L_RESET}\" name=\"reset\" /></td>\n</tr>\n</table>\n\n<!-- INCLUDE ucp_footer.html -->');
insert into `phpbb_styles_template_data` values 

(2,'viewforum_body.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<!-- IF S_FORUM_RULES -->\n	<div class=\"forumrules\">\n		<!-- IF U_FORUM_RULES -->\n			<h3>{L_FORUM_RULES}</h3><br />\n			<a href=\"{U_FORUM_RULES}\"><b>{L_FORUM_RULES_LINK}</b></a>\n		<!-- ELSE -->\n			<h3>{L_FORUM_RULES}</h3><br />\n			{FORUM_RULES}\n		<!-- ENDIF -->\n	</div>\n\n	<br clear=\"all\" />\n<!-- ENDIF -->\n\n<!-- IF S_DISPLAY_ACTIVE -->\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<td class=\"cat\" colspan=\"<!-- IF S_TOPIC_ICONS -->7<!-- ELSE -->6<!-- ENDIF -->\"><span class=\"nav\">{L_ACTIVE_TOPICS}</span></td>\n	</tr>\n\n	<tr>\n		<!-- IF S_TOPIC_ICONS -->\n			<th colspan=\"3\">&nbsp;{L_TOPICS}&nbsp;</th>\n		<!-- ELSE -->\n			<th colspan=\"2\">&nbsp;{L_TOPICS}&nbsp;</th>\n		<!-- ENDIF -->\n		<th>&nbsp;{L_AUTHOR}&nbsp;</th>\n		<th>&nbsp;{L_REPLIES}&nbsp;</th>\n		<th>&nbsp;{L_VIEWS}&nbsp;</th>\n		<th>&nbsp;{L_LAST_POST}&nbsp;</th>\n	</tr>\n\n	<!-- BEGIN topicrow -->\n\n		<tr>\n			<td class=\"row1\" width=\"25\" align=\"center\">{topicrow.TOPIC_FOLDER_IMG}</td>\n			<!-- IF S_TOPIC_ICONS -->\n				<td class=\"row1\" width=\"25\" align=\"center\"><!-- IF topicrow.TOPIC_ICON_IMG --><img src=\"{T_ICONS_PATH}{topicrow.TOPIC_ICON_IMG}\" width=\"{topicrow.TOPIC_ICON_IMG_WIDTH}\" height=\"{topicrow.TOPIC_ICON_IMG_HEIGHT}\" alt=\"\" title=\"\" /><!-- ENDIF --></td>\n			<!-- ENDIF -->\n			<td class=\"row1\">\n				<!-- IF topicrow.S_UNREAD_TOPIC --><a href=\"{topicrow.U_NEWEST_POST}\">{NEWEST_POST_IMG}</a><!-- ENDIF -->\n				{topicrow.ATTACH_ICON_IMG} <!-- IF topicrow.S_HAS_POLL or topicrow.S_TOPIC_MOVED --><b>{topicrow.TOPIC_TYPE}</b> <!-- ENDIF --><a title=\"{L_POSTED}: {topicrow.FIRST_POST_TIME}\" href=\"{topicrow.U_VIEW_TOPIC}\"class=\"topictitle\">{topicrow.TOPIC_TITLE}</a>\n				<!-- IF topicrow.S_TOPIC_UNAPPROVED or topicrow.S_POSTS_UNAPPROVED -->\n					<a href=\"{topicrow.U_MCP_QUEUE}\">{UNAPPROVED_IMG}</a>&nbsp;\n				<!-- ENDIF -->\n				<!-- IF topicrow.S_TOPIC_REPORTED -->\n					<a href=\"{topicrow.U_MCP_REPORT}\">{REPORTED_IMG}</a>&nbsp;\n				<!-- ENDIF -->\n				<!-- IF topicrow.PAGINATION -->\n					<p class=\"gensmall\"> [ {GOTO_PAGE_IMG}{L_GOTO_PAGE}: {topicrow.PAGINATION} ] </p>\n				<!-- ENDIF -->\n			</td>\n			<td class=\"row2\" width=\"130\" align=\"center\"><p class=\"topicauthor\">{topicrow.TOPIC_AUTHOR_FULL}</p></td>\n			<td class=\"row1\" width=\"50\" align=\"center\"><p class=\"topicdetails\">{topicrow.REPLIES}</p></td>\n			<td class=\"row2\" width=\"50\" align=\"center\"><p class=\"topicdetails\">{topicrow.VIEWS}</p></td>\n			<td class=\"row1\" width=\"140\" align=\"center\">\n				<p class=\"topicdetails\" style=\"white-space: nowrap;\">{topicrow.LAST_POST_TIME}</p>\n				<p class=\"topicdetails\">{topicrow.LAST_POST_AUTHOR_FULL}\n					<!-- IF not S_IS_BOT --><a href=\"{topicrow.U_LAST_POST}\">{LAST_POST_IMG}</a><!-- ENDIF -->\n				</p>\n			</td>\n		</tr>\n\n	<!-- BEGINELSE -->\n\n		<tr>\n			<!-- IF S_TOPIC_ICONS -->\n				<td class=\"row1\" colspan=\"7\" height=\"30\" align=\"center\" valign=\"middle\"><span class=\"gen\"><!-- IF not S_SORT_DAYS -->{L_NO_TOPICS}<!-- ELSE -->{L_NO_TOPICS_TIME_FRAME}<!-- ENDIF --></span></td>\n			<!-- ELSE -->\n				<td class=\"row1\" colspan=\"6\" height=\"30\" align=\"center\" valign=\"middle\"><span class=\"gen\"><!-- IF not S_SORT_DAYS -->{L_NO_TOPICS}<!-- ELSE -->{L_NO_TOPICS_TIME_FRAME}<!-- ENDIF --></span></td>\n			<!-- ENDIF -->\n		</tr>\n	<!-- END topicrow -->\n\n	<tr align=\"center\">\n		<td class=\"cat\" colspan=\"<!-- IF S_TOPIC_ICONS -->7<!-- ELSE -->6<!-- ENDIF -->\">&nbsp;</td>\n	</tr>\n	</table>\n\n	<br clear=\"all\" />\n<!-- ENDIF -->\n\n<!-- IF S_HAS_SUBFORUM -->\n	<!-- INCLUDE forumlist_body.html -->\n	<br clear=\"all\" />\n<!-- ENDIF -->\n\n<!-- IF S_IS_POSTABLE or S_NO_READ_ACCESS -->\n	<div id=\"pageheader\">\n		<h2><a class=\"titles\" href=\"{U_VIEW_FORUM}\">{FORUM_NAME}</a></h2>\n\n		<!-- IF MODERATORS -->\n			<p class=\"moderators\"><!-- IF S_SINGLE_MODERATOR -->{L_MODERATOR}<!-- ELSE -->{L_MODERATORS}<!-- ENDIF -->: {MODERATORS}</p>\n		<!-- ENDIF -->\n		<!-- IF U_MCP -->\n			<p class=\"linkmcp\">[ <a href=\"{U_MCP}\">{L_MCP}</a> ]</p>\n		<!-- ENDIF -->\n	</div>\n\n	<br clear=\"all\" /><br />\n<!-- ENDIF -->\n\n<div id=\"pagecontent\">\n\n<!-- IF S_NO_READ_ACCESS -->\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<td class=\"row1\" height=\"30\" align=\"center\" valign=\"middle\"><span class=\"gen\">{L_NO_READ_ACCESS}</span></td>\n	</tr>\n	</table>\n\n	<!-- IF not S_USER_LOGGED_IN -->\n\n		<br /><br />\n\n		<form method=\"post\" action=\"{S_LOGIN_ACTION}\">\n\n		<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n		<tr>\n			<td class=\"cat\"><h4><a href=\"{U_LOGIN_LOGOUT}\">{L_LOGIN_LOGOUT}</a></h4></td>\n		</tr>\n		<tr>\n			<td class=\"row1\" align=\"center\"><span class=\"genmed\">{L_USERNAME}:</span> <input class=\"post\" type=\"text\" name=\"username\" size=\"10\" />&nbsp; <span class=\"genmed\">{L_PASSWORD}:</span> <input class=\"post\" type=\"password\" name=\"password\" size=\"10\" /><!-- IF S_AUTOLOGIN_ENABLED -->&nbsp; <span class=\"gensmall\">{L_LOG_ME_IN}</span> <input type=\"checkbox\" class=\"radio\" name=\"autologin\" /><!-- ENDIF -->&nbsp; <input type=\"submit\" class=\"btnmain\" name=\"login\" value=\"{L_LOGIN}\" /></td>\n		</tr>\n		</table>\n		\n		</form>\n\n	<!-- ENDIF -->\n\n	<br clear=\"all\" />\n<!-- ENDIF -->\n\n	<!-- IF S_DISPLAY_POST_INFO or TOTAL_TOPICS -->\n		<table width=\"100%\" cellspacing=\"1\">\n		<tr>\n			<!-- IF S_DISPLAY_POST_INFO and not S_IS_BOT -->\n				<td align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"middle\"><a href=\"{U_POST_NEW_TOPIC}\">{POST_IMG}</a></td>\n			<!-- ENDIF -->\n			<!-- IF TOTAL_TOPICS -->\n				<td class=\"nav\" valign=\"middle\" nowrap=\"nowrap\">&nbsp;{PAGE_NUMBER}<br /></td>\n				<td class=\"gensmall\" nowrap=\"nowrap\">&nbsp;[ {TOTAL_TOPICS} ]&nbsp;</td>\n				<td class=\"gensmall\" width=\"100%\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\"><!-- INCLUDE pagination.html --></td>\n			<!-- ENDIF -->\n		</tr>\n		</table>\n	<!-- ENDIF -->\n\n	<!-- IF not S_DISPLAY_ACTIVE and (S_IS_POSTABLE or .topicrow) -->\n		<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n		<tr>\n			<td class=\"cat\" colspan=\"<!-- IF S_TOPIC_ICONS -->7<!-- ELSE -->6<!-- ENDIF -->\">\n				<table width=\"100%\" cellspacing=\"0\">\n				<tr class=\"nav\">\n					<td valign=\"middle\">&nbsp;<!-- IF S_WATCH_FORUM_LINK and not S_IS_BOT --><a href=\"{S_WATCH_FORUM_LINK}\">{S_WATCH_FORUM_TITLE}</a><!-- ENDIF --></td>\n					<td align=\"{S_CONTENT_FLOW_END}\" valign=\"middle\"><!-- IF not S_IS_BOT and U_MARK_TOPICS --><a href=\"{U_MARK_TOPICS}\">{L_MARK_TOPICS_READ}</a><!-- ENDIF -->&nbsp;</td>\n				</tr>\n				</table>\n			</td>\n		</tr>\n\n		<tr>\n			<!-- IF S_TOPIC_ICONS -->\n				<th colspan=\"3\">&nbsp;{L_TOPICS}&nbsp;</th>\n			<!-- ELSE -->\n				<th colspan=\"2\">&nbsp;{L_TOPICS}&nbsp;</th>\n			<!-- ENDIF -->\n			<th>&nbsp;{L_AUTHOR}&nbsp;</th>\n			<th>&nbsp;{L_REPLIES}&nbsp;</th>\n			<th>&nbsp;{L_VIEWS}&nbsp;</th>\n			<th>&nbsp;{L_LAST_POST}&nbsp;</th>\n		</tr>\n\n		<!-- BEGIN topicrow -->\n\n			<!-- IF topicrow.S_TOPIC_TYPE_SWITCH eq 1 -->\n				<tr>\n					<td class=\"row3\" colspan=\"<!-- IF S_TOPIC_ICONS -->7<!-- ELSE -->6<!-- ENDIF -->\"><b class=\"gensmall\">{L_ANNOUNCEMENTS}</b></td>\n				</tr>\n			<!-- ELSEIF topicrow.S_TOPIC_TYPE_SWITCH eq 0 -->\n				<tr>\n					<td class=\"row3\" colspan=\"<!-- IF S_TOPIC_ICONS -->7<!-- ELSE -->6<!-- ENDIF -->\"><b class=\"gensmall\">{L_TOPICS}</b></td>\n				</tr>\n			<!-- ENDIF -->\n\n			<tr>\n				<td class=\"row1\" width=\"25\" align=\"center\">{topicrow.TOPIC_FOLDER_IMG}</td>\n				<!-- IF S_TOPIC_ICONS -->\n					<td class=\"row1\" width=\"25\" align=\"center\"><!-- IF topicrow.TOPIC_ICON_IMG --><img src=\"{T_ICONS_PATH}{topicrow.TOPIC_ICON_IMG}\" width=\"{topicrow.TOPIC_ICON_IMG_WIDTH}\" height=\"{topicrow.TOPIC_ICON_IMG_HEIGHT}\" alt=\"\" title=\"\" /><!-- ENDIF --></td>\n				<!-- ENDIF -->\n				<td class=\"row1\">\n					<!-- IF topicrow.S_UNREAD_TOPIC --><a href=\"{topicrow.U_NEWEST_POST}\">{NEWEST_POST_IMG}</a><!-- ENDIF -->\n					{topicrow.ATTACH_ICON_IMG} <!-- IF topicrow.S_HAS_POLL or topicrow.S_TOPIC_MOVED --><b>{topicrow.TOPIC_TYPE}</b> <!-- ENDIF --><a title=\"{L_POSTED}: {topicrow.FIRST_POST_TIME}\" href=\"{topicrow.U_VIEW_TOPIC}\" class=\"topictitle\">{topicrow.TOPIC_TITLE}</a>\n					<!-- IF topicrow.S_TOPIC_UNAPPROVED or topicrow.S_POSTS_UNAPPROVED -->\n						<a href=\"{topicrow.U_MCP_QUEUE}\">{topicrow.UNAPPROVED_IMG}</a>&nbsp;\n					<!-- ENDIF -->\n					<!-- IF topicrow.S_TOPIC_REPORTED -->\n						<a href=\"{topicrow.U_MCP_REPORT}\">{REPORTED_IMG}</a>&nbsp;\n					<!-- ENDIF -->\n					<!-- IF topicrow.PAGINATION -->\n						<p class=\"gensmall\"> [ {GOTO_PAGE_IMG}{L_GOTO_PAGE}: {topicrow.PAGINATION} ] </p>\n					<!-- ENDIF -->\n				</td>\n				<td class=\"row2\" width=\"130\" align=\"center\"><p class=\"topicauthor\">{topicrow.TOPIC_AUTHOR_FULL}</p></td>\n				<td class=\"row1\" width=\"50\" align=\"center\"><p class=\"topicdetails\">{topicrow.REPLIES}</p></td>\n				<td class=\"row2\" width=\"50\" align=\"center\"><p class=\"topicdetails\">{topicrow.VIEWS}</p></td>\n				<td class=\"row1\" width=\"140\" align=\"center\">\n					<p class=\"topicdetails\" style=\"white-space: nowrap;\">{topicrow.LAST_POST_TIME}</p>\n					<p class=\"topicdetails\">{topicrow.LAST_POST_AUTHOR_FULL}\n						<!-- IF not S_IS_BOT --><a href=\"{topicrow.U_LAST_POST}\">{LAST_POST_IMG}</a><!-- ENDIF -->\n					</p>\n				</td>\n			</tr>\n\n		<!-- BEGINELSE -->\n			<!-- IF S_IS_POSTABLE -->\n			<tr>\n				<!-- IF S_TOPIC_ICONS -->\n					<td class=\"row1\" colspan=\"7\" height=\"30\" align=\"center\" valign=\"middle\"><span class=\"gen\"><!-- IF not S_SORT_DAYS -->{L_NO_TOPICS}<!-- ELSE -->{L_NO_TOPICS_TIME_FRAME}<!-- ENDIF --></span></td>\n				<!-- ELSE -->\n					<td class=\"row1\" colspan=\"6\" height=\"30\" align=\"center\" valign=\"middle\"><span class=\"gen\"><!-- IF not S_SORT_DAYS -->{L_NO_TOPICS}<!-- ELSE -->{L_NO_TOPICS_TIME_FRAME}<!-- ENDIF --></span></td>\n				<!-- ENDIF -->\n			</tr>\n			<!-- ENDIF -->\n		<!-- END topicrow -->\n\n		<!-- IF not S_IS_BOT -->\n		<tr align=\"center\">\n			<!-- IF S_TOPIC_ICONS -->\n				<td class=\"cat\" colspan=\"7\">\n			<!-- ELSE -->\n				<td class=\"cat\" colspan=\"6\">\n			<!-- ENDIF -->\n					<form method=\"post\" action=\"{S_FORUM_ACTION}\"><span class=\"gensmall\">{L_DISPLAY_TOPICS}:</span>&nbsp;{S_SELECT_SORT_DAYS}&nbsp;<span class=\"gensmall\">{L_SORT_BY}</span> {S_SELECT_SORT_KEY} {S_SELECT_SORT_DIR}&nbsp;<input class=\"btnlite\" type=\"submit\" name=\"sort\" value=\"{L_GO}\" /></form>\n				</td>\n		</tr>\n		<!-- ENDIF -->\n		</table>\n	<!-- ENDIF -->\n\n	<!-- IF S_DISPLAY_POST_INFO or TOTAL_TOPICS -->\n		<table width=\"100%\" cellspacing=\"1\">\n		<tr>\n			<!-- IF S_DISPLAY_POST_INFO and not S_IS_BOT -->\n				<td align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"middle\"><a href=\"{U_POST_NEW_TOPIC}\">{POST_IMG}</a></td>\n			<!-- ENDIF -->\n			<!-- IF TOTAL_TOPICS -->\n				<td class=\"nav\" valign=\"middle\" nowrap=\"nowrap\">&nbsp;{PAGE_NUMBER}<br /></td>\n				<td class=\"gensmall\" nowrap=\"nowrap\">&nbsp;[ {TOTAL_TOPICS} ]&nbsp;</td>\n				<td class=\"gensmall\" width=\"100%\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\"><!-- INCLUDE pagination.html --></td>\n			<!-- ENDIF -->\n		</tr>\n		</table>\n	<!-- ENDIF -->\n\n		<br clear=\"all\" />\n</div>\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<!-- IF S_DISPLAY_ONLINE_LIST -->\n	<br clear=\"all\" />\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<td class=\"cat\"><h4>{L_WHO_IS_ONLINE}</h4></td>\n	</tr>\n	<tr>\n		<td class=\"row1\"><p class=\"gensmall\">{LOGGED_IN_USER_LIST}</p></td>\n	</tr>\n	</table>\n<!-- ENDIF -->\n\n<!-- IF S_DISPLAY_POST_INFO -->\n	<br clear=\"all\" />\n\n	<table width=\"100%\" cellspacing=\"0\">\n	<tr>\n		<td align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"top\">\n			<table cellspacing=\"3\" cellpadding=\"0\" border=\"0\">\n			<tr>\n				<td width=\"20\" style=\"text-align: center;\">{FOLDER_NEW_IMG}</td>\n				<td class=\"gensmall\">{L_NEW_POSTS}</td>\n				<td>&nbsp;&nbsp;</td>\n				<td width=\"20\" style=\"text-align: center;\">{FOLDER_IMG}</td>\n				<td class=\"gensmall\">{L_NO_NEW_POSTS}</td>\n				<td>&nbsp;&nbsp;</td>\n				<td width=\"20\" style=\"text-align: center;\">{FOLDER_ANNOUNCE_IMG}</td>\n				<td class=\"gensmall\">{L_ICON_ANNOUNCEMENT}</td>\n			</tr>\n			<tr>\n				<td style=\"text-align: center;\">{FOLDER_HOT_NEW_IMG}</td>\n				<td class=\"gensmall\">{L_NEW_POSTS_HOT}</td>\n				<td>&nbsp;&nbsp;</td>\n				<td style=\"text-align: center;\">{FOLDER_HOT_IMG}</td>\n				<td class=\"gensmall\">{L_NO_NEW_POSTS_HOT}</td>\n				<td>&nbsp;&nbsp;</td>\n				<td style=\"text-align: center;\">{FOLDER_STICKY_IMG}</td>\n				<td class=\"gensmall\">{L_ICON_STICKY}</td>			\n			</tr>\n			<tr>\n				<td style=\"text-align: center;\">{FOLDER_LOCKED_NEW_IMG}</td>\n				<td class=\"gensmall\">{L_NEW_POSTS_LOCKED}</td>\n				<td>&nbsp;&nbsp;</td>\n				<td style=\"text-align: center;\">{FOLDER_LOCKED_IMG}</td>\n				<td class=\"gensmall\">{L_NO_NEW_POSTS_LOCKED}</td>\n				<td>&nbsp;&nbsp;</td>\n				<td style=\"text-align: center;\">{FOLDER_MOVED_IMG}</td>\n				<td class=\"gensmall\">{L_TOPIC_MOVED}</td>\n			</tr>\n			</table>\n		</td>\n		<td align=\"{S_CONTENT_FLOW_END}\"><span class=\"gensmall\"><!-- BEGIN rules -->{rules.RULE}<br /><!-- END rules --></span></td>\n	</tr>\n	</table>\n<!-- ENDIF -->\n\n<br clear=\"all\" />\n\n<table width=\"100%\" cellspacing=\"0\">\n<tr>\n	<td><!-- IF S_DISPLAY_SEARCHBOX --><!-- INCLUDE searchbox.html --><!-- ENDIF --></td>\n	<td align=\"{S_CONTENT_FLOW_END}\"><!-- INCLUDE jumpbox.html --></td>\n</tr>\n</table>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'viewonline_body.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<h4>{TOTAL_REGISTERED_USERS_ONLINE}</h4>\n<h4>{TOTAL_GUEST_USERS_ONLINE}<!-- IF S_SWITCH_GUEST_DISPLAY --> [ <a href=\"{U_SWITCH_GUEST_DISPLAY}\">{L_SWITCH_GUEST_DISPLAY}</a> ]<!-- ENDIF --></h4>\n<br />\n\n<!-- IF PAGINATION -->\n	<table width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<td class=\"nav\" valign=\"middle\" nowrap=\"nowrap\">&nbsp;{PAGE_NUMBER}<br /></td>\n		<td class=\"gensmall\" width=\"100%\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\"><b><a href=\"#\" onclick=\"jumpto(); return false;\" title=\"{L_JUMP_TO_PAGE}\">{L_GOTO_PAGE}</a> <!-- IF PREVIOUS_PAGE --><a href=\"{PREVIOUS_PAGE}\">{L_PREVIOUS}</a>&nbsp;&nbsp;<!-- ENDIF -->{PAGINATION}<!-- IF NEXT_PAGE -->&nbsp;&nbsp;<a href=\"{NEXT_PAGE}\">{L_NEXT}</a><!-- ENDIF --></b></td>\n	</tr>\n	</table>\n<!-- ENDIF -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr>\n	<th width=\"40%\"><a href=\"{U_SORT_USERNAME}\">{L_USERNAME}</a></th>\n	<th width=\"20%\"><a href=\"{U_SORT_UPDATED}\">{L_LAST_UPDATED}</a></th>\n	<th width=\"40%\"><a href=\"{U_SORT_LOCATION}\">{L_FORUM_LOCATION}</a></th>\n</tr>\n<!-- BEGIN user_row -->\n	<tr>\n		<td class=\"row1\"><p class=\"gen\">{user_row.USERNAME_FULL}</p><!-- IF user_row.USER_IP --><p class=\"gensmall\">{L_IP}: <a href=\"{user_row.U_USER_IP}\">{user_row.USER_IP}</a> &#187; <a href=\"{user_row.U_WHOIS}\" onclick=\"popup(this.href, 750, 500); return false;\">{L_WHOIS}</a></p><!-- ENDIF -->\n			<!-- IF user_row.USER_BROWSER -->{user_row.USER_BROWSER}<!-- ENDIF --></td>\n		<td class=\"row2\" align=\"center\" nowrap=\"nowrap\"><p class=\"genmed\">&nbsp;{user_row.LASTUPDATE}</p></td>\n		<td class=\"row1\"><p class=\"genmed\"><a href=\"{user_row.U_FORUM_LOCATION}\">{user_row.FORUM_LOCATION}</a></p></td>\n	</tr>\n<!-- END user_row -->\n\n<!-- IF LEGEND -->\n	<tr>\n		<td class=\"row1\" colspan=\"3\"><b class=\"gensmall\">{L_LEGEND} :: {LEGEND}</b></td>\n	</tr>\n<!-- ENDIF -->\n</table>\n\n<!-- IF PAGINATION -->\n	<table width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<td class=\"nav\" valign=\"middle\" nowrap=\"nowrap\">&nbsp;{PAGE_NUMBER}<br /></td>\n		<td class=\"gensmall\" width=\"100%\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\"><b><a href=\"#\" onclick=\"jumpto(); return false;\" title=\"{L_JUMP_TO_PAGE}\">{L_GOTO_PAGE}</a> <!-- IF PREVIOUS_PAGE --><a href=\"{PREVIOUS_PAGE}\">{L_PREVIOUS}</a>&nbsp;&nbsp;<!-- ENDIF -->{PAGINATION}<!-- IF NEXT_PAGE -->&nbsp;&nbsp;<a href=\"{NEXT_PAGE}\">{L_NEXT}</a><!-- ENDIF --></b></td>\n	</tr>\n	</table>\n<!-- ENDIF -->\n\n<div class=\"gensmall\" align=\"{S_CONTENT_FLOW_END}\">{L_ONLINE_EXPLAIN}</div>\n\n<br clear=\"all\" />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<br clear=\"all\" />\n\n<div align=\"{S_CONTENT_FLOW_END}\"><!-- INCLUDE jumpbox.html --></div>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'viewonline_whois.html','',1229079038,'<!-- INCLUDE simple_header.html -->\n\n<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n<tr> \n	<th>{L_WHOIS}</th>\n</tr>\n<tr>\n	<td class=\"row1\"><pre>{WHOIS}</pre><br /><a class=\"nav\" href=\"#\" onclick=\"window.close(); return false;\">{L_CLOSE_WINDOW}</a></td>\n</tr>\n</table>\n\n<!-- INCLUDE simple_footer.html -->'),

(2,'viewtopic_body.html','',1229079038,'<!-- INCLUDE overall_header.html -->\n\n<!-- IF S_FORUM_RULES -->\n	<div class=\"forumrules\">\n		<!-- IF U_FORUM_RULES -->\n			<h3>{L_FORUM_RULES}</h3><br />\n			<a href=\"{U_FORUM_RULES}\"><b>{L_FORUM_RULES_LINK}</b></a>\n		<!-- ELSE -->\n			<h3>{L_FORUM_RULES}</h3><br />\n			{FORUM_RULES}\n		<!-- ENDIF -->\n	</div>\n\n	<br clear=\"all\" />\n<!-- ENDIF -->\n\n<div id=\"pageheader\">\n	<h2><a class=\"titles\" href=\"{U_VIEW_TOPIC}\">{TOPIC_TITLE}</a></h2>\n\n<!-- IF MODERATORS -->\n	<p class=\"moderators\"><!-- IF S_SINGLE_MODERATOR -->{L_MODERATOR}<!-- ELSE -->{L_MODERATORS}<!-- ENDIF -->: {MODERATORS}</p>\n<!-- ENDIF -->\n<!-- IF U_MCP -->\n	<p class=\"linkmcp\">[ <a href=\"{U_MCP}\">{L_MCP}</a> ]</p>\n<!-- ENDIF -->\n</div>\n\n<br clear=\"all\" /><br />\n\n<div id=\"pagecontent\">\n\n	<table width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<td align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"middle\" nowrap=\"nowrap\">\n		<!-- IF not S_IS_BOT -->\n			<!-- IF S_DISPLAY_POST_INFO --><a href=\"{U_POST_NEW_TOPIC}\">{POST_IMG}</a>&nbsp;<!-- ENDIF -->\n			<!-- IF S_DISPLAY_REPLY_INFO --><a href=\"{U_POST_REPLY_TOPIC}\">{REPLY_IMG}</a><!-- ENDIF -->\n		<!-- ENDIF -->\n		</td>\n		<!-- IF TOTAL_POSTS -->\n			<td class=\"nav\" valign=\"middle\" nowrap=\"nowrap\">&nbsp;{PAGE_NUMBER}<br /></td>\n			<td class=\"gensmall\" nowrap=\"nowrap\">&nbsp;[ {TOTAL_POSTS} ]&nbsp;</td>\n			<td class=\"gensmall\" width=\"100%\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\"><!-- INCLUDE pagination.html --></td>\n		<!-- ENDIF -->\n	</tr>\n	</table>\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<td class=\"cat\">\n			<table width=\"100%\" cellspacing=\"0\">\n			<tr>\n				<td class=\"nav\" nowrap=\"nowrap\">&nbsp;\n				<!-- IF not S_IS_BOT -->\n					<!-- IF U_WATCH_TOPIC --><a href=\"{U_WATCH_TOPIC}\" title=\"{L_WATCH_TOPIC}\">{L_WATCH_TOPIC}</a><!-- IF U_PRINT_TOPIC or U_EMAIL_TOPIC or U_BUMP_TOPIC or U_BOOKMARK_TOPIC --> | <!-- ENDIF --><!-- ENDIF -->\n					<!-- IF U_BOOKMARK_TOPIC --><a href=\"{U_BOOKMARK_TOPIC}\" title=\"{L_BOOKMARK_TOPIC}\">{L_BOOKMARK_TOPIC}</a><!-- IF U_PRINT_TOPIC or U_EMAIL_TOPIC or U_BUMP_TOPIC --> | <!-- ENDIF --><!-- ENDIF -->\n					<!-- IF U_PRINT_TOPIC --><a href=\"{U_PRINT_TOPIC}\" title=\"{L_PRINT_TOPIC}\">{L_PRINT_TOPIC}</a><!-- IF U_EMAIL_TOPIC or U_BUMP_TOPIC --> | <!-- ENDIF --><!-- ENDIF -->\n					<!-- IF U_EMAIL_TOPIC --><a href=\"{U_EMAIL_TOPIC}\" title=\"{L_EMAIL_TOPIC}\">{L_EMAIL_TOPIC}</a><!-- IF U_BUMP_TOPIC --> | <!-- ENDIF --><!-- ENDIF -->\n					<!-- IF U_BUMP_TOPIC --><a href=\"{U_BUMP_TOPIC}\" title=\"{L_BUMP_TOPIC}\">{L_BUMP_TOPIC}</a><!-- ENDIF -->\n				<!-- ENDIF -->\n				</td>\n				<td class=\"nav\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\"><a href=\"{U_VIEW_OLDER_TOPIC}\">{L_VIEW_PREVIOUS_TOPIC}</a><!-- IF U_VIEW_UNREAD_POST and not S_IS_BOT --> | <a href=\"{U_VIEW_UNREAD_POST}\">{L_VIEW_UNREAD_POST}</a><!-- ENDIF --> | <a href=\"{U_VIEW_NEWER_TOPIC}\">{L_VIEW_NEXT_TOPIC}</a>&nbsp;</td>\n			</tr>\n			</table>\n		</td>\n	</tr>\n<!-- IF S_HAS_POLL -->\n	<tr>\n		<td class=\"row2\" colspan=\"2\" align=\"center\"><br clear=\"all\" />\n\n			<form method=\"post\" action=\"{S_POLL_ACTION}\">\n\n			<table cellspacing=\"0\" cellpadding=\"4\" border=\"0\" align=\"center\">\n			<tr>\n				<td align=\"center\"><span class=\"gen\"><b>{POLL_QUESTION}</b></span><br /><span class=\"gensmall\">{L_POLL_LENGTH}</span></td>\n			</tr>\n			<tr>\n				<td align=\"{S_CONTENT_FLOW_BEGIN}\">\n					<table cellspacing=\"0\" cellpadding=\"2\" border=\"0\">\n				<!-- BEGIN poll_option -->\n					<tr>\n					<!-- IF S_CAN_VOTE -->\n						<td>\n							<!-- IF S_IS_MULTI_CHOICE -->\n								<input type=\"checkbox\" class=\"radio\" name=\"vote_id[]\" value=\"{poll_option.POLL_OPTION_ID}\"<!-- IF poll_option.POLL_OPTION_VOTED --> checked=\"checked\"<!-- ENDIF --> />\n							<!-- ELSE -->\n								<input type=\"radio\" class=\"radio\" name=\"vote_id[]\" value=\"{poll_option.POLL_OPTION_ID}\"<!-- IF poll_option.POLL_OPTION_VOTED --> checked=\"checked\"<!-- ENDIF --> />\n							<!-- ENDIF -->\n						</td>\n					<!-- ENDIF -->\n						<td><span class=\"gen\">{poll_option.POLL_OPTION_CAPTION}</span></td>\n						<!-- IF S_DISPLAY_RESULTS -->\n							<td dir=\"ltr\">{POLL_LEFT_CAP_IMG}{poll_option.POLL_OPTION_IMG}{POLL_RIGHT_CAP_IMG}</td>\n							<td class=\"gen\" align=\"{S_CONTENT_FLOW_END}\"><b>&nbsp;{poll_option.POLL_OPTION_PERCENT}&nbsp;</b></td>\n							<td class=\"gen\" align=\"center\">[ {poll_option.POLL_OPTION_RESULT} ]</td>\n							<!-- IF poll_option.POLL_OPTION_VOTED -->\n								<td class=\"gensmall\" valign=\"top\"><b title=\"{L_POLL_VOTED_OPTION}\">x</b></td>\n							<!-- ENDIF -->\n						<!-- ENDIF -->\n					</tr>\n				<!-- END poll_option -->\n					</table>\n				</td>\n			</tr>\n		<!-- IF S_CAN_VOTE -->\n			<tr>\n				<td align=\"center\"><span class=\"gensmall\">{L_MAX_VOTES}</span><br /><br /><input type=\"submit\" name=\"update\" value=\"{L_SUBMIT_VOTE}\" class=\"btnlite\" /></td>\n			</tr>\n		<!-- ENDIF -->\n		<!-- IF S_DISPLAY_RESULTS -->\n			<tr>\n				<td class=\"gensmall\" colspan=\"4\" align=\"center\"><b>{L_TOTAL_VOTES} : {TOTAL_VOTES}</b></td>\n			</tr>\n		<!-- ELSE -->\n			<tr>\n				<td align=\"center\"><span class=\"gensmall\"><b><a href=\"{U_VIEW_RESULTS}\">{L_VIEW_RESULTS}</a></b></span></td>\n			</tr>\n		<!-- ENDIF -->\n			</table>\n			{S_HIDDEN_FIELDS}\n			\n			</form>\n			\n		</td>\n	</tr>\n<!-- ENDIF -->\n	</table>\n\n<!-- BEGIN postrow -->\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<!-- IF postrow.S_FIRST_ROW -->\n		<tr>\n			<th>{L_AUTHOR}</th>\n			<th>{L_MESSAGE}</th>\n		</tr>\n	<!-- ENDIF -->\n	<!-- IF postrow.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n\n	<!-- IF postrow.S_IGNORE_POST -->\n			<td class=\"gensmall\" colspan=\"2\" height=\"25\" align=\"center\"><!-- IF postrow.S_FIRST_UNREAD --><a name=\"unread\"></a><!-- ENDIF --><a name=\"p{postrow.POST_ID}\"></a>{postrow.L_IGNORE_POST}</td>\n	<!-- ELSE -->\n\n			<td align=\"center\" valign=\"middle\">\n				<!-- IF postrow.S_FIRST_UNREAD --><a name=\"unread\"></a><!-- ENDIF --><a name=\"p{postrow.POST_ID}\"></a>\n				<b class=\"postauthor\"<!-- IF postrow.POST_AUTHOR_COLOUR --> style=\"color: {postrow.POST_AUTHOR_COLOUR}\"<!-- ENDIF -->>{postrow.POST_AUTHOR}</b>\n			</td>\n			<td width=\"100%\" height=\"25\">\n				<table width=\"100%\" cellspacing=\"0\">\n				<tr>\n				<!-- IF postrow.POST_ICON_IMG -->\n					<td><img src=\"{T_ICONS_PATH}{postrow.POST_ICON_IMG}\" width=\"{postrow.POST_ICON_IMG_WIDTH}\" height=\"{postrow.POST_ICON_IMG_HEIGHT}\" alt=\"\" title=\"\" /></td>\n				<!-- ENDIF -->\n					<td class=\"gensmall\" width=\"100%\"><div style=\"float: {S_CONTENT_FLOW_BEGIN};\">&nbsp;<b>{L_POST_SUBJECT}:</b> {postrow.POST_SUBJECT}</div><div style=\"float: {S_CONTENT_FLOW_END};\"><!-- IF S_IS_BOT -->{postrow.MINI_POST_IMG}<!-- ELSE --><a href=\"{postrow.U_MINI_POST}\">{postrow.MINI_POST_IMG}</a><!-- ENDIF --><b>{L_POSTED}:</b> {postrow.POST_DATE}&nbsp;</div></td>\n				</tr>\n				</table>\n			</td>\n		</tr>\n		\n		<!-- IF postrow.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n\n			<td valign=\"top\" class=\"profile\">\n				<table cellspacing=\"4\" align=\"center\" width=\"150\">\n			<!-- IF postrow.ONLINE_IMG -->\n				<tr>\n					<td>{postrow.ONLINE_IMG}</td>\n				</tr>\n			<!-- ENDIF -->\n			<!-- IF postrow.RANK_TITLE -->\n				<tr>\n					<td class=\"postdetails\">{postrow.RANK_TITLE}</td>\n				</tr>\n			<!-- ENDIF -->\n			<!-- IF postrow.RANK_IMG -->\n				<tr>\n					<td>{postrow.RANK_IMG}</td>\n				</tr>\n			<!-- ENDIF -->\n			<!-- IF postrow.POSTER_AVATAR -->\n				<tr>\n					<td>{postrow.POSTER_AVATAR}</td>\n				</tr>\n			<!-- ENDIF -->\n				</table>\n\n				<span class=\"postdetails\">\n					<!-- IF postrow.POSTER_JOINED --><br /><b>{L_JOINED}:</b> {postrow.POSTER_JOINED}<!-- ENDIF -->\n					<!-- IF postrow.POSTER_POSTS != \'\' --><br /><b>{L_POSTS}:</b> {postrow.POSTER_POSTS}<!-- ENDIF -->\n					<!-- IF postrow.POSTER_FROM --><br /><b>{L_LOCATION}:</b> {postrow.POSTER_FROM}<!-- ENDIF -->\n\n					<!-- IF postrow.S_PROFILE_FIELD1 -->\n						<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->\n						<br /><b>{postrow.PROFILE_FIELD1_NAME}:</b> {postrow.PROFILE_FIELD1_VALUE}\n					<!-- ENDIF -->\n\n					<!-- BEGIN custom_fields -->\n						<br /><b>{postrow.custom_fields.PROFILE_FIELD_NAME}:</b> {postrow.custom_fields.PROFILE_FIELD_VALUE}\n					<!-- END custom_fields -->\n				</span>\n\n			</td>\n			<td valign=\"top\">\n				<table width=\"100%\" cellspacing=\"5\">\n				<tr>\n					<td>\n					<!-- IF postrow.S_POST_UNAPPROVED or postrow.S_POST_REPORTED -->\n						<table width=\"100%\" cellspacing=\"0\">\n						<tr>\n							<td class=\"gensmall\"><!-- IF postrow.S_POST_UNAPPROVED --><span class=\"postapprove\">{UNAPPROVED_IMG} <a href=\"{postrow.U_MCP_APPROVE}\">{L_POST_UNAPPROVED}</a></span> <!-- ENDIF --> <!-- IF postrow.S_POST_REPORTED --><span class=\"postreported\">{REPORTED_IMG} <a href=\"{postrow.U_MCP_REPORT}\">{L_POST_REPORTED}</a></span><!-- ENDIF --></td>\n						</tr>\n						</table>\n\n						<br clear=\"all\" />\n					<!-- ENDIF -->\n\n						<div class=\"postbody\">{postrow.MESSAGE}</div>\n\n					<!-- IF postrow.S_HAS_ATTACHMENTS -->\n						<br clear=\"all\" /><br />\n\n						<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n						<tr>\n							<td class=\"row3\"><b class=\"genmed\">{L_ATTACHMENTS}: </b></td>\n						</tr>\n						<!-- BEGIN attachment -->\n							<tr>\n								<!-- IF postrow.attachment.S_ROW_COUNT is even --><td class=\"row2\"><!-- ELSE --><td class=\"row1\"><!-- ENDIF -->{postrow.attachment.DISPLAY_ATTACHMENT}</td>\n							</tr>\n						<!-- END attachment -->\n						</table>\n					<!-- ENDIF -->\n\n					<!-- IF postrow.S_DISPLAY_NOTICE -->\n						<span class=\"gensmall error\"><br /><br />{L_DOWNLOAD_NOTICE}</span>\n					<!-- ENDIF -->\n					<!-- IF postrow.SIGNATURE -->\n						<span class=\"postbody\"><br />_________________<br />{postrow.SIGNATURE}</span>\n					<!-- ENDIF -->\n\n					<!-- IF postrow.EDITED_MESSAGE or postrow.EDIT_REASON -->\n						<!-- IF postrow.EDIT_REASON -->\n							<br /><br />\n							<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n							<tr>\n								<td class=\"row3\"><span class=\"gensmall\">{postrow.EDITED_MESSAGE}</span></td>\n							</tr>\n							<tr>\n								<td class=\"row2\"><span class=\"genmed\">{postrow.EDIT_REASON}</span></td>\n							</tr>\n							</table>\n						<!-- ELSE -->\n							<br /><br />\n							<span class=\"gensmall\">{postrow.EDITED_MESSAGE}</span>\n						<!-- ENDIF -->\n					<!-- ENDIF -->\n\n					<!-- IF postrow.BUMPED_MESSAGE -->\n						<span class=\"gensmall\">{postrow.BUMPED_MESSAGE}</span>\n					<!-- ENDIF -->\n\n					<!-- IF not postrow.S_HAS_ATTACHMENTS --><br clear=\"all\" /><br /><!-- ENDIF -->\n\n						<table width=\"100%\" cellspacing=\"0\">\n						<tr valign=\"middle\">\n							<td class=\"gensmall\" align=\"{S_CONTENT_FLOW_END}\">\n							<!-- IF not S_IS_BOT -->\n								<!-- IF postrow.U_REPORT --><a href=\"{postrow.U_REPORT}\">{REPORT_IMG}</a> <!-- ENDIF --> \n								<!-- IF postrow.U_INFO --><a href=\"{postrow.U_INFO}\">{INFO_IMG}</a> <!-- ENDIF --> \n								<!-- IF postrow.U_WARN --><a href=\"{postrow.U_WARN}\">{WARN_IMG}</a> <!-- ENDIF --> \n								<!-- IF postrow.U_DELETE --><a href=\"{postrow.U_DELETE}\">{DELETE_IMG}</a> <!-- ENDIF -->\n							<!-- ENDIF -->\n							</td>\n						</tr>\n						</table>\n					</td>\n				</tr>\n				</table>\n			</td>\n		</tr>\n\n		<!-- IF postrow.S_ROW_COUNT is even --><tr class=\"row1\"><!-- ELSE --><tr class=\"row2\"><!-- ENDIF -->\n\n			<td class=\"profile\"><strong><a href=\"#wrapheader\">{L_BACK_TO_TOP}</a></strong></td>\n			<td><div class=\"gensmall\" style=\"float: {S_CONTENT_FLOW_BEGIN};\">&nbsp;<!-- IF postrow.U_PROFILE --><a href=\"{postrow.U_PROFILE}\">{PROFILE_IMG}</a> <!-- ENDIF --> <!-- IF postrow.U_PM --><a href=\"{postrow.U_PM}\">{PM_IMG}</a> <!-- ENDIF --> <!-- IF postrow.U_EMAIL --><a href=\"{postrow.U_EMAIL}\">{EMAIL_IMG}</a> <!-- ENDIF -->&nbsp;</div> <div class=\"gensmall\" style=\"float: {S_CONTENT_FLOW_END};\"><!-- IF not S_IS_BOT --><!-- IF postrow.U_EDIT --><a href=\"{postrow.U_EDIT}\">{EDIT_IMG}</a> <!-- ENDIF --> <!-- IF postrow.U_QUOTE --><a href=\"{postrow.U_QUOTE}\">{QUOTE_IMG}</a> <!-- ENDIF --> <!-- ENDIF -->&nbsp;</div></td>\n	<!-- ENDIF -->\n		</tr>\n\n	<tr>\n		<td class=\"spacer\" colspan=\"2\" height=\"1\"><img src=\"images/spacer.gif\" alt=\"\" width=\"1\" height=\"1\" /></td>\n	</tr>\n	</table>\n<!-- END postrow -->\n\n	<!-- IF not S_IS_BOT -->\n	<table width=\"100%\" cellspacing=\"1\" class=\"tablebg\">\n	<tr align=\"center\">\n		<td class=\"cat\"><form name=\"viewtopic\" method=\"post\" action=\"{S_TOPIC_ACTION}\"><span class=\"gensmall\">{L_DISPLAY_POSTS}:</span> {S_SELECT_SORT_DAYS}&nbsp;<span class=\"gensmall\">{L_SORT_BY}</span> {S_SELECT_SORT_KEY} {S_SELECT_SORT_DIR}&nbsp;<input class=\"btnlite\" type=\"submit\" value=\"{L_GO}\" name=\"sort\" /></form></td>\n	</tr>\n	</table>\n	<!-- ENDIF -->\n\n	<table width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<td align=\"{S_CONTENT_FLOW_BEGIN}\" valign=\"middle\" nowrap=\"nowrap\">\n		<!-- IF not S_IS_BOT -->\n			<!-- IF S_DISPLAY_POST_INFO --><a href=\"{U_POST_NEW_TOPIC}\">{POST_IMG}</a>&nbsp;<!-- ENDIF -->\n			<!-- IF S_DISPLAY_REPLY_INFO --><a href=\"{U_POST_REPLY_TOPIC}\">{REPLY_IMG}</a><!-- ENDIF -->\n		<!-- ENDIF -->\n		</td>\n		<!-- IF TOTAL_POSTS -->\n			<td class=\"nav\" valign=\"middle\" nowrap=\"nowrap\">&nbsp;{PAGE_NUMBER}<br /></td>\n			<td class=\"gensmall\" nowrap=\"nowrap\">&nbsp;[ {TOTAL_POSTS} ]&nbsp;</td>\n			<td class=\"gensmall\" width=\"100%\" align=\"{S_CONTENT_FLOW_END}\" nowrap=\"nowrap\"><!-- INCLUDE pagination.html --></td>\n		<!-- ENDIF -->\n	</tr>\n	</table>\n\n</div>\n\n<div id=\"pagefooter\"></div>\n\n<br clear=\"all\" />\n\n<!-- INCLUDE breadcrumbs.html -->\n\n<!-- IF S_DISPLAY_ONLINE_LIST -->\n	<br clear=\"all\" />\n\n	<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n	<tr>\n		<td class=\"cat\"><h4>{L_WHO_IS_ONLINE}</h4></td>\n	</tr>\n	<tr>\n		<td class=\"row1\"><p class=\"gensmall\">{LOGGED_IN_USER_LIST}</p></td>\n	</tr>\n	</table>\n<!-- ENDIF -->\n\n<br clear=\"all\" />\n\n<table width=\"100%\" cellspacing=\"1\">\n<tr>\n	<td width=\"40%\" valign=\"top\" nowrap=\"nowrap\" align=\"{S_CONTENT_FLOW_BEGIN}\"><!-- IF S_TOPIC_MOD --><form method=\"post\" action=\"{S_MOD_ACTION}\"><span class=\"gensmall\">{L_QUICK_MOD}:</span> {S_TOPIC_MOD} <input class=\"btnlite\" type=\"submit\" value=\"{L_GO}\" /></form><!-- ENDIF --></td>\n	<td align=\"{S_CONTENT_FLOW_END}\" valign=\"top\" nowrap=\"nowrap\"><span class=\"gensmall\"><!-- BEGIN rules -->{rules.RULE}<br /><!-- END rules --></span></td>\n</tr>\n</table>\n\n<br clear=\"all\" />\n\n<table width=\"100%\" cellspacing=\"0\">\n<tr>\n	<td><!-- IF S_DISPLAY_SEARCHBOX --><!-- INCLUDE searchbox.html --><!-- ENDIF --></td>\n	<td align=\"{S_CONTENT_FLOW_END}\"><!-- INCLUDE jumpbox.html --></td>\n</tr>\n</table>\n\n<!-- INCLUDE overall_footer.html -->'),

(2,'viewtopic_print.html','',1229079038,'<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">\n<html dir=\"{S_CONTENT_DIRECTION}\" lang=\"{S_USER_LANG}\">\n<head>\n<meta http-equiv=\"Content-Type\" content=\"text/html; charset={S_CONTENT_ENCODING}\">\n<meta http-equiv=\"Content-Style-Type\" content=\"text/css\">\n<meta http-equiv=\"Content-Language\" content=\"{S_USER_LANG}\">\n<title>{SITENAME} :: {PAGE_TITLE}</title>\n\n<style type=\"text/css\">\n<!--\n\nbody {\n	font-family: Verdana,serif;\n	font-size: 10pt;\n}\n\nimg {\n	border: 0;\n}\n\ntd {\n	font-family: Verdana,serif;\n	font-size: 10pt;\n	line-height: 150%;\n}\n\n.code,\n.quote {\n	font-size: smaller;\n	border: black solid 1px;\n}\n\n.forum {\n	font-family: Arial,Helvetica,sans-serif;\n	font-weight: bold;\n	font-size: 18pt;\n}\n\n.topic {\n	font-family: Arial,Helvetica,sans-serif;\n	font-size: 14pt;\n	font-weight: bold;\n}\n\n.gensmall {\n	font-size: 8pt;\n}\n\nhr {\n	color: #888;\n	height: 3px;\n	border-style: solid;\n}\n\nhr.sep {\n	color: #aaa;\n	height: 1px;\n	border-style: dashed;\n}\n//-->\n</style>\n\n</head>\n<body>\n\n<table width=\"85%\" cellspacing=\"3\" cellpadding=\"0\" border=\"0\" align=\"center\">\n<tr>\n	<td colspan=\"2\" align=\"center\"><span class=\"Forum\">{SITENAME}</span><br /><span class=\"gensmall\"><a href=\"{U_FORUM}\">{U_FORUM}</a></span></td>\n</tr>\n<tr>\n	<td colspan=\"2\"><br /></td>\n</tr>\n<tr>\n	<td><span class=\"topic\">{TOPIC_TITLE}</span><br /><span class=\"gensmall\"><a href=\"{U_TOPIC}\">{U_TOPIC}</a></span></td>\n	<td align=\"{S_CONTENT_FLOW_END}\" valign=\"bottom\"><span class=\"gensmall\">{PAGE_NUMBER}</span></td>\n</tr>\n</table>\n\n<!-- BEGIN postrow -->\n\n	<hr width=\"85%\" />\n\n	<table width=\"85%\" cellspacing=\"3\" cellpadding=\"0\" border=\"0\" align=\"center\">\n	<tr>\n		<td width=\"10%\" nowrap=\"nowrap\">{L_AUTHOR}:&nbsp;</td>\n		<td><b<!-- IF postrow.POST_AUTHOR_COLOUR --> style=\"color: {postrow.POST_AUTHOR_COLOUR}\"<!-- ENDIF -->>{postrow.POST_AUTHOR}</b> [ {postrow.POST_DATE} ]</td>\n	</tr>\n	<tr>\n		<td width=\"10%\" nowrap=\"nowrap\">{L_POST_SUBJECT}:&nbsp;</td>\n		<td><b>{postrow.POST_SUBJECT}</b></td>\n	</tr>\n	<tr>\n		<td colspan=\"2\"><hr class=\"sep\" />{postrow.MESSAGE}\n\n		<!-- IF postrow.S_HAS_ATTACHMENTS -->\n			<br clear=\"all\" /><br />\n\n			<table class=\"tablebg\" width=\"100%\" cellspacing=\"1\">\n			<tr>\n				<td><b class=\"genmed\">{L_ATTACHMENTS}: </b></td>\n			</tr>\n			<!-- BEGIN attachment -->\n				<tr>\n					<td>{postrow.attachment.DISPLAY_ATTACHMENT}</td>\n				</tr>\n			<!-- END attachment -->\n			</table>\n		<!-- ENDIF -->\n\n		</td>\n	</tr>\n	</table>\n<!-- END postrow -->\n\n<hr width=\"85%\" />\n<!--\n	We request you retain the full copyright notice below including the link to www.phpbb.com.\n	This not only gives respect to the large amount of time given freely by the developers\n	but also helps build interest, traffic and use of phpBB3. If you (honestly) cannot retain\n	the full copyright we ask you at least leave in place the \"Powered by phpBB\" line. If you\n	refuse to include even this then support on our forums may be affected.\n\n	The phpBB Group : 2006\n// -->\n\n<table width=\"85%\" cellspacing=\"3\" cellpadding=\"0\" border=\"0\" align=\"center\">\n<tr>\n	<td><span class=\"gensmall\">{PAGE_NUMBER}</span></td>\n	<td align=\"{S_CONTENT_FLOW_END}\"><span class=\"gensmall\">{S_TIMEZONE}</span></td>\n</tr>\n<tr>\n	<td colspan=\"2\" align=\"center\"><span class=\"gensmall\">Powered by phpBB &copy; 2000, 2002, 2005, 2007 phpBB Group<br />http://www.phpbb.com/</span></td>\n</tr>\n</table>\n\n</body>\n</html>');

/*Table structure for table `phpbb_styles_theme` */

DROP TABLE IF EXISTS `phpbb_styles_theme`;

CREATE TABLE `phpbb_styles_theme` (
  `theme_id` mediumint(8) unsigned NOT NULL auto_increment,
  `theme_name` varchar(255) collate utf8_bin NOT NULL default '',
  `theme_copyright` varchar(255) collate utf8_bin NOT NULL default '',
  `theme_path` varchar(100) collate utf8_bin NOT NULL default '',
  `theme_storedb` tinyint(1) unsigned NOT NULL default '0',
  `theme_mtime` int(11) unsigned NOT NULL default '0',
  `theme_data` mediumtext collate utf8_bin NOT NULL,
  PRIMARY KEY  (`theme_id`),
  UNIQUE KEY `theme_name` (`theme_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_styles_theme` */

insert into `phpbb_styles_theme` values 

(1,'prosilver','&copy; phpBB Group','prosilver',1,1237010009,'/*  phpBB 3.0 Style Sheet\n    --------------------------------------------------------------\n	Style name:		proSilver\n	Based on style:	proSilver (this is the default phpBB 3 style)\n	Original author:	subBlue ( http://www.subBlue.com/ )\n	Modified by:		\n	\n	Copyright 2006 phpBB Group ( http://www.phpbb.com/ )\n    --------------------------------------------------------------\n*/\n\n/* General proSilver Markup Styles\n---------------------------------------- */\n\n* {\n	/* Reset browsers default margin, padding and font sizes */\n	margin: 0;\n	padding: 0;\n}\n\nhtml {\n	font-size: 100%;\n	/* Always show a scrollbar for short pages - stops the jump when the scrollbar appears. non-IE browsers */\n	height: 100%;\n	margin-bottom: 1px;\n}\n\nbody {\n	/* Text-Sizing with ems: http://www.clagnut.com/blog/348/ */\n	font-family: Verdana, Helvetica, Arial, sans-serif;\n	color: #828282;\n	background-color: #FFFFFF;\n	/*font-size: 62.5%;			 This sets the default font size to be equivalent to 10px */\n	font-size: 10px;\n	margin: 0;\n	padding: 12px 0;\n}\n\nh1 {\n	/* Forum name */\n	font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\n	margin-right: 200px;\n	color: #FFFFFF;\n	margin-top: 15px;\n	font-weight: bold;\n	font-size: 2em;\n}\n\nh2 {\n	/* Forum header titles */\n	font-family: \"Trebuchet MS\", Arial, Helvetica, sans-serif;\n	font-weight: normal;\n	color: #3f3f3f;\n	font-size: 2em;\n	margin: 0.8em 0 0.2em 0;\n}\n\nh2.solo {\n	margin-bottom: 1em;\n}\n\nh3 {\n	/* Sub-headers (also used as post headers, but defined later) */\n	font-family: Arial, Helvetica, sans-serif;\n	font-weight: bold;\n	text-transform: uppercase;\n	border-bottom: 1px solid #CCCCCC;\n	margin-bottom: 3px;\n	padding-bottom: 2px;\n	font-size: 1.05em;\n	color: #989898;\n	margin-top: 20px;\n}\n\nh4 {\n	/* Forum and topic list titles */\n	font-family: \"Trebuchet MS\", Verdana, Helvetica, Arial, Sans-serif;\n	font-size: 1.3em;\n}\n\np {\n	line-height: 1.3em;\n	font-size: 1.1em;\n	margin-bottom: 1.5em;\n}\n\nimg {\n	border-width: 0;\n}\n\nhr {\n	/* Also see tweaks.css */\n	border: 0 none #FFFFFF;\n	border-top: 1px solid #CCCCCC;\n	height: 1px;\n	margin: 5px 0;\n	display: block;\n	clear: both;\n}\n\nhr.dashed {\n	border-top: 1px dashed #CCCCCC;\n	margin: 10px 0;\n}\n\nhr.divider {\n	display: none;\n}\n\np.right {\n	text-align: right;\n}\n\n/* Main blocks\n---------------------------------------- */\n#wrap {\n	padding: 0 20px;\n	min-width: 650px;\n}\n\n#simple-wrap {\n	padding: 6px 10px;\n}\n\n#page-body {\n	margin: 4px 0;\n	clear: both;\n}\n\n#page-footer {\n	clear: both;\n}\n\n#page-footer h3 {\n	margin-top: 20px;\n}\n\n#logo {\n	float: left;\n	width: auto;\n	padding: 10px 13px 0 10px;\n}\n\na#logo:hover {\n	text-decoration: none;\n}\n\n/* Search box\n--------------------------------------------- */\n#search-box {\n	color: #FFFFFF;\n	position: relative;\n	margin-top: 30px;\n	margin-right: 5px;\n	display: block;\n	float: right;\n	text-align: right;\n	white-space: nowrap; /* For Opera */\n}\n\n#search-box #keywords {\n	width: 95px;\n	background-color: #FFF;\n}\n\n#search-box input {\n	border: 1px solid #b0b0b0;\n}\n\n/* .button1 style defined later, just a few tweaks for the search button version */\n#search-box input.button1 {\n	padding: 1px 5px;\n}\n\n#search-box li {\n	text-align: right;\n	margin-top: 4px;\n}\n\n#search-box img {\n	vertical-align: middle;\n	margin-right: 3px;\n}\n\n/* Site description and logo */\n#site-description {\n	float: left;\n	width: 70%;\n}\n\n#site-description h1 {\n	margin-right: 0;\n}\n\n/* Round cornered boxes and backgrounds\n---------------------------------------- */\n.headerbar {\n	background: #ebebeb none repeat-x 0 0;\n	color: #FFFFFF;\n	margin-bottom: 4px;\n	padding: 0 5px;\n}\n\n.navbar {\n	background-color: #ebebeb;\n	padding: 0 10px;\n}\n\n.forabg {\n	background: #b1b1b1 none repeat-x 0 0;\n	margin-bottom: 4px;\n	padding: 0 5px;\n	clear: both;\n}\n\n.forumbg {\n	background: #ebebeb none repeat-x 0 0;\n	margin-bottom: 4px;\n	padding: 0 5px;\n	clear: both;\n}\n\n.panel {\n	margin-bottom: 4px;\n	padding: 0 10px;\n	background-color: #f3f3f3;\n	color: #3f3f3f;\n}\n\n.post {\n	padding: 0 10px;\n	margin-bottom: 4px;\n	background-repeat: no-repeat;\n	background-position: 100% 0;\n}\n\n.post:target .content {\n	color: #000000;\n}\n\n.post:target h3 a {\n	color: #000000;\n}\n\n.bg1	{ background-color: #f7f7f7;}\n.bg2	{ background-color: #f2f2f2; }\n.bg3	{ background-color: #ebebeb; }\n\n.rowbg {\n	margin: 5px 5px 2px 5px;\n}\n\n.ucprowbg {\n	background-color: #e2e2e2;\n}\n\n.fieldsbg {\n	/*border: 1px #DBDEE2 solid;*/\n	background-color: #eaeaea;\n}\n\nspan.corners-top, span.corners-bottom, span.corners-top span, span.corners-bottom span {\n	font-size: 1px;\n	line-height: 1px;\n	display: block;\n	height: 5px;\n	background-repeat: no-repeat;\n}\n\nspan.corners-top {\n	background-image: none;\n	background-position: 0 0;\n	margin: 0 -5px;\n}\n\nspan.corners-top span {\n	background-image: none;\n	background-position: 100% 0;\n}\n\nspan.corners-bottom {\n	background-image: none;\n	background-position: 0 100%;\n	margin: 0 -5px;\n	clear: both;\n}\n\nspan.corners-bottom span {\n	background-image: none;\n	background-position: 100% 100%;\n}\n\n.headbg span.corners-bottom {\n	margin-bottom: -1px;\n}\n\n.post span.corners-top, .post span.corners-bottom, .panel span.corners-top, .panel span.corners-bottom, .navbar span.corners-top, .navbar span.corners-bottom {\n	margin: 0 -10px;\n}\n\n.rules span.corners-top {\n	margin: 0 -10px 5px -10px;\n}\n\n.rules span.corners-bottom {\n	margin: 5px -10px 0 -10px;\n}\n\n/* Horizontal lists\n----------------------------------------*/\nul.linklist {\n	display: block;\n	margin: 0;\n}\n\nul.linklist li {\n	display: block;\n	list-style-type: none;\n	float: left;\n	width: auto;\n	margin-right: 5px;\n	font-size: 1.1em;\n	line-height: 2.2em;\n}\n\nul.linklist li.rightside, p.rightside {\n	float: right;\n	margin-right: 0;\n	margin-left: 5px;\n	text-align: right;\n}\n\nul.navlinks {\n	padding-bottom: 1px;\n	margin-bottom: 1px;\n	border-bottom: 1px solid #FFFFFF;\n	font-weight: bold;\n}\n\nul.leftside {\n	float: left;\n	margin-left: 0;\n	margin-right: 5px;\n	text-align: left;\n}\n\nul.rightside {\n	float: right;\n	margin-left: 5px;\n	margin-right: -5px;\n	text-align: right;\n}\n\n/* Table styles\n----------------------------------------*/\ntable.table1 {\n	/* See tweaks.css */\n}\n\n#ucp-main table.table1 {\n	padding: 2px;\n}\n\ntable.table1 thead th {\n	font-weight: normal;\n	text-transform: uppercase;\n	color: #FFFFFF;\n	line-height: 1.3em;\n	font-size: 1em;\n	padding: 0 0 4px 3px;\n}\n\ntable.table1 thead th span {\n	padding-left: 7px;\n}\n\ntable.table1 tbody tr {\n	border: 1px solid #cfcfcf;\n}\n\ntable.table1 tbody tr:hover, table.table1 tbody tr.hover {\n	background-color: #f6f6f6;\n	color: #000;\n}\n\ntable.table1 td {\n	color: #6a6a6a;\n	font-size: 1.1em;\n}\n\ntable.table1 tbody td {\n	padding: 5px;\n	border-top: 1px solid #FAFAFA;\n}\n\ntable.table1 tbody th {\n	padding: 5px;\n	border-bottom: 1px solid #000000;\n	text-align: left;\n	color: #333333;\n	background-color: #FFFFFF;\n}\n\n/* Specific column styles */\ntable.table1 .name		{ text-align: left; }\ntable.table1 .posts		{ text-align: center !important; width: 7%; }\ntable.table1 .joined	{ text-align: left; width: 15%; }\ntable.table1 .active	{ text-align: left; width: 15%; }\ntable.table1 .mark		{ text-align: center; width: 7%; }\ntable.table1 .info		{ text-align: left; width: 30%; }\ntable.table1 .info div	{ width: 100%; white-space: nowrap; overflow: hidden; }\ntable.table1 .autocol	{ line-height: 2em; white-space: nowrap; }\ntable.table1 thead .autocol { padding-left: 1em; }\n\ntable.table1 span.rank-img {\n	float: right;\n	width: auto;\n}\n\ntable.info td {\n	padding: 3px;\n}\n\ntable.info tbody th {\n	padding: 3px;\n	text-align: right;\n	vertical-align: top;\n	color: #000000;\n	font-weight: normal;\n}\n\n.forumbg table.table1 {\n	margin: 0 -2px -1px -1px;\n}\n\n/* Misc layout styles\n---------------------------------------- */\n/* column[1-2] styles are containers for two column layouts \n   Also see tweaks.css */\n.column1 {\n	float: left;\n	clear: left;\n	width: 49%;\n}\n\n.column2 {\n	float: right;\n	clear: right;\n	width: 49%;\n}\n\n/* General classes for placing floating blocks */\n.left-box {\n	float: left;\n	width: auto;\n	text-align: left;\n}\n\n.right-box {\n	float: right;\n	width: auto;\n	text-align: right;\n}\n\ndl.details {\n	/*font-family: \"Lucida Grande\", Verdana, Helvetica, Arial, sans-serif;*/\n	font-size: 1.1em;\n}\n\ndl.details dt {\n	float: left;\n	clear: left;\n	width: 30%;\n	text-align: right;\n	color: #000000;\n	display: block;\n}\n\ndl.details dd {\n	margin-left: 0;\n	padding-left: 5px;\n	margin-bottom: 5px;\n	color: #828282;\n	float: left;\n	width: 65%;\n}\n\n/* Pagination\n---------------------------------------- */\n.pagination {\n	height: 1%; /* IE tweak (holly hack) */\n	width: auto;\n	text-align: right;\n	margin-top: 5px;\n	float: right;\n}\n\n.pagination span.page-sep {\n	display: none;\n}\n\nli.pagination {\n	margin-top: 0;\n}\n\n.pagination strong, .pagination b {\n	font-weight: normal;\n}\n\n.pagination span strong {\n	padding: 0 2px;\n	margin: 0 2px;\n	font-weight: normal;\n	color: #FFFFFF;\n	background-color: #bfbfbf;\n	border: 1px solid #bfbfbf;\n	font-size: 0.9em;\n}\n\n.pagination span a, .pagination span a:link, .pagination span a:visited, .pagination span a:active {\n	font-weight: normal;\n	text-decoration: none;\n	color: #747474;\n	margin: 0 2px;\n	padding: 0 2px;\n	background-color: #eeeeee;\n	border: 1px solid #bababa;\n	font-size: 0.9em;\n	line-height: 1.5em;\n}\n\n.pagination span a:hover {\n	border-color: #d2d2d2;\n	background-color: #d2d2d2;\n	color: #FFF;\n	text-decoration: none;\n}\n\n.pagination img {\n	vertical-align: middle;\n}\n\n/* Pagination in viewforum for multipage topics */\n.row .pagination {\n	display: block;\n	float: right;\n	width: auto;\n	margin-top: 0;\n	padding: 1px 0 1px 15px;\n	font-size: 0.9em;\n	background: none 0 50% no-repeat;\n}\n\n.row .pagination span a, li.pagination span a {\n	background-color: #FFFFFF;\n}\n\n.row .pagination span a:hover, li.pagination span a:hover {\n	background-color: #d2d2d2;\n}\n\n/* Miscellaneous styles\n---------------------------------------- */\n#forum-permissions {\n	float: right;\n	width: auto;\n	padding-left: 5px;\n	margin-left: 5px;\n	margin-top: 10px;\n	text-align: right;\n}\n\n.copyright {\n	padding: 5px;\n	text-align: center;\n	color: #555555;\n}\n\n.small {\n	font-size: 0.9em !important;\n}\n\n.titlespace {\n	margin-bottom: 15px;\n}\n\n.headerspace {\n	margin-top: 20px;\n}\n\n.error {\n	color: #bcbcbc;\n	font-weight: bold;\n	font-size: 1em;\n}\n\n.reported {\n	background-color: #f7f7f7;\n}\n\nli.reported:hover {\n	background-color: #ececec;\n}\n\ndiv.rules {\n	background-color: #ececec;\n	color: #bcbcbc;\n	padding: 0 10px;\n	margin: 10px 0;\n	font-size: 1.1em;\n}\n\ndiv.rules ul {\n	margin-left: 20px;\n}\n\np.rules {\n	background-color: #ececec;\n	background-image: none;\n	padding: 5px;\n}\n\np.rules img {\n	vertical-align: middle;\n}\n\np.rules a {\n	vertical-align: middle;\n	clear: both;\n}\n\n#top {\n	position: absolute;\n	top: -20px;\n}\n\n.clear {\n	display: block;\n	clear: both;\n	font-size: 1px;\n	line-height: 1px;\n	background: transparent;\n}\n/* proSilver Link Styles\n---------------------------------------- */\n\na:link	{ color: #898989; text-decoration: none; }\na:visited	{ color: #898989; text-decoration: none; }\na:hover	{ color: #d3d3d3; text-decoration: underline; }\na:active	{ color: #d2d2d2; text-decoration: none; }\n\n/* Coloured usernames */\n.username-coloured {\n	font-weight: bold;\n	display: inline !important;\n	padding: 0 !important;\n}\n\n/* Links on gradient backgrounds */\n#search-box a:link, .navbg a:link, .forumbg .header a:link, .forabg .header a:link, th a:link {\n	color: #FFFFFF;\n	text-decoration: none;\n}\n\n#search-box a:visited, .navbg a:visited, .forumbg .header a:visited, .forabg .header a:visited, th a:visited {\n	color: #FFFFFF;\n	text-decoration: none;\n}\n\n#search-box a:hover, .navbg a:hover, .forumbg .header a:hover, .forabg .header a:hover, th a:hover {\n	color: #ffffff;\n	text-decoration: underline;\n}\n\n#search-box a:active, .navbg a:active, .forumbg .header a:active, .forabg .header a:active, th a:active {\n	color: #ffffff;\n	text-decoration: none;\n}\n\n/* Links for forum/topic lists */\na.forumtitle {\n	font-family: \"Trebuchet MS\", Helvetica, Arial, Sans-serif;\n	font-size: 1.2em;\n	font-weight: bold;\n	color: #898989;\n	text-decoration: none;\n}\n\n/* a.forumtitle:visited { color: #898989; } */\n\na.forumtitle:hover {\n	color: #bcbcbc;\n	text-decoration: underline;\n}\n\na.forumtitle:active {\n	color: #898989;\n}\n\na.topictitle {\n	font-family: \"Trebuchet MS\", Helvetica, Arial, Sans-serif;\n	font-size: 1.2em;\n	font-weight: bold;\n	color: #898989;\n	text-decoration: none;\n}\n\n/* a.topictitle:visited { color: #d2d2d2; } */\n\na.topictitle:hover {\n	color: #bcbcbc;\n	text-decoration: underline;\n}\n\na.topictitle:active {\n	color: #898989;\n}\n\n/* Post body links */\n.postlink {\n	text-decoration: none;\n	color: #d2d2d2;\n	border-bottom: 1px solid #d2d2d2;\n	padding-bottom: 0;\n}\n\n.postlink:visited {\n	color: #bdbdbd;\n	border-bottom-style: dotted;\n	border-bottom-color: #666666;\n}\n\n.postlink:active {\n	color: #d2d2d2;\n}\n\n.postlink:hover {\n	background-color: #f6f6f6;\n	text-decoration: none;\n	color: #404040;\n}\n\n.signature a, .signature a:visited, .signature a:active, .signature a:hover {\n	border: none;\n	text-decoration: underline;\n	background-color: transparent;\n}\n\n/* Profile links */\n.postprofile a:link, .postprofile a:active, .postprofile a:visited, .postprofile dt.author a {\n	font-weight: bold;\n	color: #898989;\n	text-decoration: none;\n}\n\n.postprofile a:hover, .postprofile dt.author a:hover {\n	text-decoration: underline;\n	color: #d3d3d3;\n}\n\n\n/* Profile searchresults */	\n.search .postprofile a {\n	color: #898989;\n	text-decoration: none; \n	font-weight: normal;\n}\n\n.search .postprofile a:hover {\n	color: #d3d3d3;\n	text-decoration: underline; \n}\n\n/* Back to top of page */\n.back2top {\n	clear: both;\n	height: 11px;\n	text-align: right;\n}\n\na.top {\n	background: none no-repeat top left;\n	text-decoration: none;\n	width: {IMG_ICON_BACK_TOP_WIDTH}px;\n	height: {IMG_ICON_BACK_TOP_HEIGHT}px;\n	display: block;\n	float: right;\n	overflow: hidden;\n	letter-spacing: 1000px;\n	text-indent: 11px;\n}\n\na.top2 {\n	background: none no-repeat 0 50%;\n	text-decoration: none;\n	padding-left: 15px;\n}\n\n/* Arrow links  */\na.up		{ background: none no-repeat left center; }\na.down		{ background: none no-repeat right center; }\na.left		{ background: none no-repeat 3px 60%; }\na.right		{ background: none no-repeat 95% 60%; }\n\na.up, a.up:link, a.up:active, a.up:visited {\n	padding-left: 10px;\n	text-decoration: none;\n	border-bottom-width: 0;\n}\n\na.up:hover {\n	background-position: left top;\n	background-color: transparent;\n}\n\na.down, a.down:link, a.down:active, a.down:visited {\n	padding-right: 10px;\n}\n\na.down:hover {\n	background-position: right bottom;\n	text-decoration: none;\n}\n\na.left, a.left:active, a.left:visited {\n	padding-left: 12px;\n}\n\na.left:hover {\n	color: #d2d2d2;\n	text-decoration: none;\n	background-position: 0 60%;\n}\n\na.right, a.right:active, a.right:visited {\n	padding-right: 12px;\n}\n\na.right:hover {\n	color: #d2d2d2;\n	text-decoration: none;\n	background-position: 100% 60%;\n}\n/* proSilver Content Styles\n---------------------------------------- */\n\nul.topiclist {\n	display: block;\n	list-style-type: none;\n	margin: 0;\n}\n\nul.forums {\n	background: #f9f9f9 none repeat-x 0 0;\n}\n\nul.topiclist li {\n	display: block;\n	list-style-type: none;\n	color: #777777;\n	margin: 0;\n}\n\nul.topiclist dl {\n	position: relative;\n}\n\nul.topiclist li.row dl {\n	padding: 2px 0;\n}\n\nul.topiclist dt {\n	display: block;\n	float: left;\n	width: 50%;\n	font-size: 1.1em;\n	padding-left: 5px;\n	padding-right: 5px;\n}\n\nul.topiclist dd {\n	display: block;\n	float: left;\n	border-left: 1px solid #FFFFFF;\n	padding: 4px 0;\n}\n\nul.topiclist dfn {\n	/* Labels for post/view counts */\n	display: none;\n}\n\nul.topiclist li.row dt a.subforum {\n	background-image: none;\n	background-position: 0 50%;\n	background-repeat: no-repeat;\n	position: relative;\n	white-space: nowrap;\n	padding: 0 0 0 12px;\n}\n\n.forum-image {\n	float: left;\n	padding-top: 5px;\n	margin-right: 5px;\n}\n\nli.row {\n	border-top: 1px solid #FFFFFF;\n	border-bottom: 1px solid #8f8f8f;\n}\n\nli.row strong {\n	font-weight: normal;\n	color: #000000;\n}\n\nli.row:hover {\n	background-color: #f6f6f6;\n}\n\nli.row:hover dd {\n	border-left-color: #CCCCCC;\n}\n\nli.header dt, li.header dd {\n	line-height: 1em;\n	border-left-width: 0;\n	margin: 2px 0 4px 0;\n	color: #FFFFFF;\n	padding-top: 2px;\n	padding-bottom: 2px;\n	font-size: 1em;\n	font-family: Arial, Helvetica, sans-serif;\n	text-transform: uppercase;\n}\n\nli.header dt {\n	font-weight: bold;\n}\n\nli.header dd {\n	margin-left: 1px;\n}\n\nli.header dl.icon {\n	min-height: 0;\n}\n\nli.header dl.icon dt {\n	/* Tweak for headers alignment when folder icon used */\n	padding-left: 0;\n	padding-right: 50px;\n}\n\n/* Forum list column styles */\ndl.icon {\n	min-height: 35px;\n	background-position: 10px 50%;		/* Position of folder icon */\n	background-repeat: no-repeat;\n}\n\ndl.icon dt {\n	padding-left: 45px;					/* Space for folder icon */\n	background-repeat: no-repeat;\n	background-position: 5px 95%;		/* Position of topic icon */\n}\n\ndd.posts, dd.topics, dd.views {\n	width: 8%;\n	text-align: center;\n	line-height: 2.2em;\n	font-size: 1.2em;\n}\n\ndd.lastpost {\n	width: 25%;\n	font-size: 1.1em;\n}\n\ndd.redirect {\n	font-size: 1.1em;\n	line-height: 2.5em;\n}\n\ndd.moderation {\n	font-size: 1.1em;\n}\n\ndd.lastpost span, ul.topiclist dd.searchby span, ul.topiclist dd.info span, ul.topiclist dd.time span, dd.redirect span, dd.moderation span {\n	display: block;\n	padding-left: 5px;\n}\n\ndd.time {\n	width: auto;\n	line-height: 200%;\n	font-size: 1.1em;\n}\n\ndd.extra {\n	width: 12%;\n	line-height: 200%;\n	text-align: center;\n	font-size: 1.1em;\n}\n\ndd.mark {\n	float: right !important;\n	width: 9%;\n	text-align: center;\n	line-height: 200%;\n	font-size: 1.2em;\n}\n\ndd.info {\n	width: 30%;\n}\n\ndd.option {\n	width: 15%;\n	line-height: 200%;\n	text-align: center;\n	font-size: 1.1em;\n}\n\ndd.searchby {\n	width: 47%;\n	font-size: 1.1em;\n	line-height: 1em;\n}\n\nul.topiclist dd.searchextra {\n	margin-left: 5px;\n	padding: 0.2em 0;\n	font-size: 1.1em;\n	color: #333333;\n	border-left: none;\n	clear: both;\n	width: 98%;\n	overflow: hidden;\n}\n\n/* Container for post/reply buttons and pagination */\n.topic-actions {\n	margin-bottom: 3px;\n	font-size: 1.1em;\n	height: 28px;\n	min-height: 28px;\n}\ndiv[class].topic-actions {\n	height: auto;\n}\n\n/* Post body styles\n----------------------------------------*/\n.postbody {\n	padding: 0;\n	line-height: 1.48em;\n	color: #333333;\n	width: 76%;\n	float: left;\n	clear: both;\n}\n\n.postbody .ignore {\n	font-size: 1.1em;\n}\n\n.postbody h3.first {\n	/* The first post on the page uses this */\n	font-size: 1.7em;\n}\n\n.postbody h3 {\n	/* Postbody requires a different h3 format - so change it here */\n	font-size: 1.5em;\n	padding: 2px 0 0 0;\n	margin: 0 0 0.3em 0 !important;\n	text-transform: none;\n	border: none;\n	font-family: \"Trebuchet MS\", Verdana, Helvetica, Arial, sans-serif;\n	line-height: 125%;\n}\n\n.postbody h3 img {\n	/* Also see tweaks.css */\n	vertical-align: bottom;\n}\n\n.postbody .content {\n	font-size: 1.3em;\n}\n\n.search .postbody {\n	width: 68%\n}\n\n/* Topic review panel\n----------------------------------------*/\n#review {\n	margin-top: 2em;\n}\n\n#topicreview {\n	padding-right: 5px;\n	overflow: auto;\n	height: 300px;\n}\n\n#topicreview .postbody {\n	width: auto;\n	float: none;\n	margin: 0;\n	height: auto;\n}\n\n#topicreview .post {\n	height: auto;\n}\n\n#topicreview h2 {\n	border-bottom-width: 0;\n}\n\n/* Content container styles\n----------------------------------------*/\n.content {\n	min-height: 3em;\n	overflow: hidden;\n	line-height: 1.4em;\n	font-family: \"Lucida Grande\", \"Trebuchet MS\", Verdana, Helvetica, Arial, sans-serif;\n	font-size: 1em;\n	color: #333333;\n}\n\n.content h2, .panel h2 {\n	font-weight: normal;\n	color: #989898;\n	border-bottom: 1px solid #CCCCCC;\n	font-size: 1.6em;\n	margin-top: 0.5em;\n	margin-bottom: 0.5em;\n	padding-bottom: 0.5em;\n}\n\n.panel h3 {\n	margin: 0.5em 0;\n}\n\n.panel p {\n	font-size: 1.2em;\n	margin-bottom: 1em;\n	line-height: 1.4em;\n}\n\n.content p {\n	font-family: \"Lucida Grande\", \"Trebuchet MS\", Verdana, Helvetica, Arial, sans-serif;\n	font-size: 1.2em;\n	margin-bottom: 1em;\n	line-height: 1.4em;\n}\n\ndl.faq {\n	font-family: \"Lucida Grande\", Verdana, Helvetica, Arial, sans-serif;\n	font-size: 1.1em;\n	margin-top: 1em;\n	margin-bottom: 2em;\n	line-height: 1.4em;\n}\n\ndl.faq dt {\n	font-weight: bold;\n	color: #333333;\n}\n\n.content dl.faq {\n	font-size: 1.2em;\n	margin-bottom: 0.5em;\n}\n\n.content li {\n	list-style-type: inherit;\n}\n\n.content ul, .content ol {\n	margin-bottom: 1em;\n	margin-left: 3em;\n}\n\n.posthilit {\n	background-color: #f3f3f3;\n	color: #BCBCBC;\n	padding: 0 2px 1px 2px;\n}\n\n.announce, .unreadpost {\n	/* Highlight the announcements & unread posts box */\n	border-left-color: #BCBCBC;\n	border-right-color: #BCBCBC;\n}\n\n/* Post author */\np.author {\n	margin: 0 15em 0.6em 0;\n	padding: 0 0 5px 0;\n	font-family: Verdana, Helvetica, Arial, sans-serif;\n	font-size: 1em;\n	line-height: 1.2em;\n}\n\n/* Post signature */\n.signature {\n	margin-top: 1.5em;\n	padding-top: 0.2em;\n	font-size: 1.1em;\n	border-top: 1px solid #CCCCCC;\n	clear: left;\n	line-height: 140%;\n	overflow: hidden;\n	width: 100%;\n}\n\ndd .signature {\n	margin: 0;\n	padding: 0;\n	clear: none;\n	border: none;\n}\n\n.signature li {\n	list-style-type: inherit;\n}\n\n.signature ul, .signature ol {\n	margin-bottom: 1em;\n	margin-left: 3em;\n}\n\n/* Post noticies */\n.notice {\n	font-family: \"Lucida Grande\", Verdana, Helvetica, Arial, sans-serif;\n	width: auto;\n	margin-top: 1.5em;\n	padding-top: 0.2em;\n	font-size: 1em;\n	border-top: 1px dashed #CCCCCC;\n	clear: left;\n	line-height: 130%;\n}\n\n/* Jump to post link for now */\nul.searchresults {\n	list-style: none;\n	text-align: right;\n	clear: both;\n}\n\n/* BB Code styles\n----------------------------------------*/\n/* Quote block */\nblockquote {\n	background: #ebebeb none 6px 8px no-repeat;\n	border: 1px solid #dbdbdb;\n	font-size: 0.95em;\n	margin: 0.5em 1px 0 25px;\n	overflow: hidden;\n	padding: 5px;\n}\n\nblockquote blockquote {\n	/* Nested quotes */\n	background-color: #bababa;\n	font-size: 1em;\n	margin: 0.5em 1px 0 15px;	\n}\n\nblockquote blockquote blockquote {\n	/* Nested quotes */\n	background-color: #e4e4e4;\n}\n\nblockquote cite {\n	/* Username/source of quoter */\n	font-style: normal;\n	font-weight: bold;\n	margin-left: 20px;\n	display: block;\n	font-size: 0.9em;\n}\n\nblockquote cite cite {\n	font-size: 1em;\n}\n\nblockquote.uncited {\n	padding-top: 25px;\n}\n\n/* Code block */\ndl.codebox {\n	padding: 3px;\n	background-color: #FFFFFF;\n	border: 1px solid #d8d8d8;\n	font-size: 1em;\n}\n\ndl.codebox dt {\n	text-transform: uppercase;\n	border-bottom: 1px solid #CCCCCC;\n	margin-bottom: 3px;\n	font-size: 0.8em;\n	font-weight: bold;\n	display: block;\n}\n\nblockquote dl.codebox {\n	margin-left: 0;\n}\n\ndl.codebox code {\n	/* Also see tweaks.css */\n	overflow: auto;\n	display: block;\n	height: auto;\n	max-height: 200px;\n	white-space: normal;\n	padding-top: 5px;\n	font: 0.9em Monaco, \"Andale Mono\",\"Courier New\", Courier, mono;\n	line-height: 1.3em;\n	color: #8b8b8b;\n	margin: 2px 0;\n}\n\n.syntaxbg		{ color: #FFFFFF; }\n.syntaxcomment	{ color: #000000; }\n.syntaxdefault	{ color: #bcbcbc; }\n.syntaxhtml		{ color: #000000; }\n.syntaxkeyword	{ color: #585858; }\n.syntaxstring	{ color: #a7a7a7; }\n\n/* Attachments\n----------------------------------------*/\n.attachbox {\n	float: left;\n	width: auto; \n	margin: 5px 5px 5px 0;\n	padding: 6px;\n	background-color: #FFFFFF;\n	border: 1px dashed #d8d8d8;\n	clear: left;\n}\n\n.pm-message .attachbox {\n	background-color: #f3f3f3;\n}\n\n.attachbox dt {\n	font-family: Arial, Helvetica, sans-serif;\n	text-transform: uppercase;\n}\n\n.attachbox dd {\n	margin-top: 4px;\n	padding-top: 4px;\n	clear: left;\n	border-top: 1px solid #d8d8d8;\n}\n\n.attachbox dd dd {\n	border: none;\n}\n\n.attachbox p {\n	line-height: 110%;\n	color: #666666;\n	font-weight: normal;\n	clear: left;\n}\n\n.attachbox p.stats\n{\n	line-height: 110%;\n	color: #666666;\n	font-weight: normal;\n	clear: left;\n}\n\n.attach-image {\n	margin: 3px 0;\n	width: 100%;\n	max-height: 350px;\n	overflow: auto;\n}\n\n.attach-image img {\n	border: 1px solid #999999;\n/*	cursor: move; */\n	cursor: default;\n}\n\n/* Inline image thumbnails */\ndiv.inline-attachment dl.thumbnail, div.inline-attachment dl.file {\n	display: block;\n	margin-bottom: 4px;\n}\n\ndiv.inline-attachment p {\n	font-size: 100%;\n}\n\ndl.file {\n	font-family: Verdana, Arial, Helvetica, sans-serif;\n	display: block;\n}\n\ndl.file dt {\n	text-transform: none;\n	margin: 0;\n	padding: 0;\n	font-weight: bold;\n	font-family: Verdana, Arial, Helvetica, sans-serif;\n}\n\ndl.file dd {\n	color: #666666;\n	margin: 0;\n	padding: 0;	\n}\n\ndl.thumbnail img {\n	padding: 3px;\n	border: 1px solid #666666;\n	background-color: #FFF;\n}\n\ndl.thumbnail dd {\n	color: #666666;\n	font-style: italic;\n	font-family: Verdana, Arial, Helvetica, sans-serif;\n}\n\n.attachbox dl.thumbnail dd {\n	font-size: 100%;\n}\n\ndl.thumbnail dt a:hover {\n	background-color: #EEEEEE;\n}\n\ndl.thumbnail dt a:hover img {\n	border: 1px solid #d2d2d2;\n}\n\n/* Post poll styles\n----------------------------------------*/\nfieldset.polls {\n	font-family: \"Trebuchet MS\", Verdana, Helvetica, Arial, sans-serif;\n}\n\nfieldset.polls dl {\n	margin-top: 5px;\n	border-top: 1px solid #e2e2e2;\n	padding: 5px 0 0 0;\n	line-height: 120%;\n	color: #666666;\n}\n\nfieldset.polls dl.voted {\n	font-weight: bold;\n	color: #000000;\n}\n\nfieldset.polls dt {\n	text-align: left;\n	float: left;\n	display: block;\n	width: 30%;\n	border-right: none;\n	padding: 0;\n	margin: 0;\n	font-size: 1.1em;\n}\n\nfieldset.polls dd {\n	float: left;\n	width: 10%;\n	border-left: none;\n	padding: 0 5px;\n	margin-left: 0;\n	font-size: 1.1em;\n}\n\nfieldset.polls dd.resultbar {\n	width: 50%;\n}\n\nfieldset.polls dd input {\n	margin: 2px 0;\n}\n\nfieldset.polls dd div {\n	text-align: right;\n	font-family: Arial, Helvetica, sans-serif;\n	color: #FFFFFF;\n	font-weight: bold;\n	padding: 0 2px;\n	overflow: visible;\n	min-width: 2%;\n}\n\n.pollbar1 {\n	background-color: #aaaaaa;\n	border-bottom: 1px solid #747474;\n	border-right: 1px solid #747474;\n}\n\n.pollbar2 {\n	background-color: #bebebe;\n	border-bottom: 1px solid #8c8c8c;\n	border-right: 1px solid #8c8c8c;\n}\n\n.pollbar3 {\n	background-color: #D1D1D1;\n	border-bottom: 1px solid #aaaaaa;\n	border-right: 1px solid #aaaaaa;\n}\n\n.pollbar4 {\n	background-color: #e4e4e4;\n	border-bottom: 1px solid #bebebe;\n	border-right: 1px solid #bebebe;\n}\n\n.pollbar5 {\n	background-color: #f8f8f8;\n	border-bottom: 1px solid #D1D1D1;\n	border-right: 1px solid #D1D1D1;\n}\n\n/* Poster profile block\n----------------------------------------*/\n.postprofile {\n	/* Also see tweaks.css */\n	margin: 5px 0 10px 0;\n	min-height: 80px;\n	color: #666666;\n	border-left: 1px solid #FFFFFF;\n	width: 22%;\n	float: right;\n	display: inline;\n}\n.pm .postprofile {\n	border-left: 1px solid #DDDDDD;\n}\n\n.postprofile dd, .postprofile dt {\n	line-height: 1.2em;\n	margin-left: 8px;\n}\n\n.postprofile strong {\n	font-weight: normal;\n	color: #000000;\n}\n\n.avatar {\n	border: none;\n	margin-bottom: 3px;\n}\n\n.online {\n	background-image: none;\n	background-position: 100% 0;\n	background-repeat: no-repeat;\n}\n\n/* Poster profile used by search*/\n.search .postprofile {\n	width: 30%;\n}\n\n/* pm list in compose message if mass pm is enabled */\ndl.pmlist dt {\n	width: 60% !important;\n}\n\ndl.pmlist dt textarea {\n	width: 95%;\n}\n\ndl.pmlist dd {\n	margin-left: 61% !important;\n	margin-bottom: 2px;\n}\n/* proSilver Button Styles\n---------------------------------------- */\n\n/* Rollover buttons\n   Based on: http://wellstyled.com/css-nopreload-rollovers.html\n----------------------------------------*/\n.buttons {\n	float: left;\n	width: auto;\n	height: auto;\n}\n\n/* Rollover state */\n.buttons div {\n	float: left;\n	margin: 0 5px 0 0;\n	background-position: 0 100%;\n}\n\n/* Rolloff state */\n.buttons div a {\n	display: block;\n	width: 100%;\n	height: 100%;\n	background-position: 0 0;\n	position: relative;\n	overflow: hidden;\n}\n\n/* Hide <a> text and hide off-state image when rolling over (prevents flicker in IE) */\n/*.buttons div span		{ display: none; }*/\n/*.buttons div a:hover	{ background-image: none; }*/\n.buttons div span			{ position: absolute; width: 100%; height: 100%; cursor: pointer;}\n.buttons div a:hover span	{ background-position: 0 100%; }\n\n/* Big button images */\n.reply-icon span	{ background: transparent none 0 0 no-repeat; }\n.post-icon span		{ background: transparent none 0 0 no-repeat; }\n.locked-icon span	{ background: transparent none 0 0 no-repeat; }\n.pmreply-icon span	{ background: none 0 0 no-repeat; }\n.newpm-icon span 	{ background: none 0 0 no-repeat; }\n.forwardpm-icon span 	{ background: none 0 0 no-repeat; }\n\n/* Set big button dimensions */\n.buttons div.reply-icon		{ width: {IMG_BUTTON_TOPIC_REPLY_WIDTH}px; height: {IMG_BUTTON_TOPIC_REPLY_HEIGHT}px; }\n.buttons div.post-icon		{ width: {IMG_BUTTON_TOPIC_NEW_WIDTH}px; height: {IMG_BUTTON_TOPIC_NEW_HEIGHT}px; }\n.buttons div.locked-icon	{ width: {IMG_BUTTON_TOPIC_LOCKED_WIDTH}px; height: {IMG_BUTTON_TOPIC_LOCKED_HEIGHT}px; }\n.buttons div.pmreply-icon	{ width: {IMG_BUTTON_PM_REPLY_WIDTH}px; height: {IMG_BUTTON_PM_REPLY_HEIGHT}px; }\n.buttons div.newpm-icon		{ width: {IMG_BUTTON_PM_NEW_WIDTH}px; height: {IMG_BUTTON_PM_NEW_HEIGHT}px; }\n.buttons div.forwardpm-icon	{ width: {IMG_BUTTON_PM_FORWARD_WIDTH}px; height: {IMG_BUTTON_PM_FORWARD_HEIGHT}px; }\n\n/* Sub-header (navigation bar)\n--------------------------------------------- */\na.print, a.sendemail, a.fontsize {\n	display: block;\n	overflow: hidden;\n	height: 18px;\n	text-indent: -5000px;\n	text-align: left;\n	background-repeat: no-repeat;\n}\n\na.print {\n	background-image: none;\n	width: 22px;\n}\n\na.sendemail {\n	background-image: none;\n	width: 22px;\n}\n\na.fontsize {\n	background-image: none;\n	background-position: 0 -1px;\n	width: 29px;\n}\n\na.fontsize:hover {\n	background-position: 0 -20px;\n	text-decoration: none;\n}\n\n/* Icon images\n---------------------------------------- */\n.sitehome, .icon-faq, .icon-members, .icon-home, .icon-ucp, .icon-register, .icon-logout,\n.icon-bookmark, .icon-bump, .icon-subscribe, .icon-unsubscribe, .icon-pages, .icon-search {\n	background-position: 0 50%;\n	background-repeat: no-repeat;\n	background-image: none;\n	padding: 1px 0 0 17px;\n}\n\n/* Poster profile icons\n----------------------------------------*/\nul.profile-icons {\n	padding-top: 10px;\n	list-style: none;\n}\n\n/* Rollover state */\nul.profile-icons li {\n	float: left;\n	margin: 0 6px 3px 0;\n	background-position: 0 100%;\n}\n\n/* Rolloff state */\nul.profile-icons li a {\n	display: block;\n	width: 100%;\n	height: 100%;\n	background-position: 0 0;\n}\n\n/* Hide <a> text and hide off-state image when rolling over (prevents flicker in IE) */\nul.profile-icons li span { display:none; }\nul.profile-icons li a:hover { background: none; }\n\n/* Positioning of moderator icons */\n.postbody ul.profile-icons {\n	float: right;\n	width: auto;\n	padding: 0;\n}\n\n.postbody ul.profile-icons li {\n	margin: 0 3px;\n}\n\n/* Profile & navigation icons */\n.email-icon, .email-icon a		{ background: none top left no-repeat; }\n.aim-icon, .aim-icon a			{ background: none top left no-repeat; }\n.yahoo-icon, .yahoo-icon a		{ background: none top left no-repeat; }\n.web-icon, .web-icon a			{ background: none top left no-repeat; }\n.msnm-icon, .msnm-icon a			{ background: none top left no-repeat; }\n.icq-icon, .icq-icon a			{ background: none top left no-repeat; }\n.jabber-icon, .jabber-icon a		{ background: none top left no-repeat; }\n.pm-icon, .pm-icon a				{ background: none top left no-repeat; }\n.quote-icon, .quote-icon a		{ background: none top left no-repeat; }\n\n/* Moderator icons */\n.report-icon, .report-icon a		{ background: none top left no-repeat; }\n.warn-icon, .warn-icon a			{ background: none top left no-repeat; }\n.edit-icon, .edit-icon a			{ background: none top left no-repeat; }\n.delete-icon, .delete-icon a		{ background: none top left no-repeat; }\n.info-icon, .info-icon a			{ background: none top left no-repeat; }\n\n/* Set profile icon dimensions */\nul.profile-icons li.email-icon		{ width: {IMG_ICON_CONTACT_EMAIL_WIDTH}px; height: {IMG_ICON_CONTACT_EMAIL_HEIGHT}px; }\nul.profile-icons li.aim-icon	{ width: {IMG_ICON_CONTACT_AIM_WIDTH}px; height: {IMG_ICON_CONTACT_AIM_HEIGHT}px; }\nul.profile-icons li.yahoo-icon	{ width: {IMG_ICON_CONTACT_YAHOO_WIDTH}px; height: {IMG_ICON_CONTACT_YAHOO_HEIGHT}px; }\nul.profile-icons li.web-icon	{ width: {IMG_ICON_CONTACT_WWW_WIDTH}px; height: {IMG_ICON_CONTACT_WWW_HEIGHT}px; }\nul.profile-icons li.msnm-icon	{ width: {IMG_ICON_CONTACT_MSNM_WIDTH}px; height: {IMG_ICON_CONTACT_MSNM_HEIGHT}px; }\nul.profile-icons li.icq-icon	{ width: {IMG_ICON_CONTACT_ICQ_WIDTH}px; height: {IMG_ICON_CONTACT_ICQ_HEIGHT}px; }\nul.profile-icons li.jabber-icon	{ width: {IMG_ICON_CONTACT_JABBER_WIDTH}px; height: {IMG_ICON_CONTACT_JABBER_HEIGHT}px; }\nul.profile-icons li.pm-icon		{ width: {IMG_ICON_CONTACT_PM_WIDTH}px; height: {IMG_ICON_CONTACT_PM_HEIGHT}px; }\nul.profile-icons li.quote-icon	{ width: {IMG_ICON_POST_QUOTE_WIDTH}px; height: {IMG_ICON_POST_QUOTE_HEIGHT}px; }\nul.profile-icons li.report-icon	{ width: {IMG_ICON_POST_REPORT_WIDTH}px; height: {IMG_ICON_POST_REPORT_HEIGHT}px; }\nul.profile-icons li.edit-icon	{ width: {IMG_ICON_POST_EDIT_WIDTH}px; height: {IMG_ICON_POST_EDIT_HEIGHT}px; }\nul.profile-icons li.delete-icon	{ width: {IMG_ICON_POST_DELETE_WIDTH}px; height: {IMG_ICON_POST_DELETE_HEIGHT}px; }\nul.profile-icons li.info-icon	{ width: {IMG_ICON_POST_INFO_WIDTH}px; height: {IMG_ICON_POST_INFO_HEIGHT}px; }\nul.profile-icons li.warn-icon	{ width: {IMG_ICON_USER_WARN_WIDTH}px; height: {IMG_ICON_USER_WARN_HEIGHT}px; }\n\n/* Fix profile icon default margins */\nul.profile-icons li.edit-icon	{ margin: 0 0 0 3px; }\nul.profile-icons li.quote-icon	{ margin: 0 0 0 10px; }\nul.profile-icons li.info-icon, ul.profile-icons li.report-icon	{ margin: 0 3px 0 0; }\n/* proSilver Control Panel Styles\n---------------------------------------- */\n\n\n/* Main CP box\n----------------------------------------*/\n#cp-menu {\n	float:left;\n	width: 19%;\n	margin-top: 1em;\n	margin-bottom: 5px;\n}\n\n#cp-main {\n	float: left;\n	width: 81%;\n}\n\n#cp-main .content {\n	padding: 0;\n}\n\n#cp-main h3, #cp-main hr, #cp-menu hr {\n	border-color: #bfbfbf;\n}\n\n#cp-main .panel p {\n	font-size: 1.1em;\n}\n\n#cp-main .panel ol {\n	margin-left: 2em;\n	font-size: 1.1em;\n}\n\n#cp-main .panel li.row {\n	border-bottom: 1px solid #cbcbcb;\n	border-top: 1px solid #F9F9F9;\n}\n\nul.cplist {\n	margin-bottom: 5px;\n	border-top: 1px solid #cbcbcb;\n}\n\n#cp-main .panel li.header dd, #cp-main .panel li.header dt {\n	color: #000000;\n	margin-bottom: 2px;\n}\n\n#cp-main table.table1 {\n	margin-bottom: 1em;\n}\n\n#cp-main table.table1 thead th {\n	color: #333333;\n	font-weight: bold;\n	border-bottom: 1px solid #333333;\n	padding: 5px;\n}\n\n#cp-main table.table1 tbody th {\n	font-style: italic;\n	background-color: transparent !important;\n	border-bottom: none;\n}\n\n#cp-main .pagination {\n	float: right;\n	width: auto;\n	padding-top: 1px;\n}\n\n#cp-main .postbody p {\n	font-size: 1.1em;\n}\n\n#cp-main .pm-message {\n	border: 1px solid #e2e2e2;\n	margin: 10px 0;\n	background-color: #FFFFFF;\n	width: auto;\n	float: none;\n}\n\n.pm-message h2 {\n	padding-bottom: 5px;\n}\n\n#cp-main .postbody h3, #cp-main .box2 h3 {\n	margin-top: 0;\n}\n\n#cp-main .buttons {\n	margin-left: 0;\n}\n\n#cp-main ul.linklist {\n	margin: 0;\n}\n\n/* MCP Specific tweaks */\n.mcp-main .postbody {\n	width: 100%;\n}\n\n/* CP tabbed menu\n----------------------------------------*/\n#tabs {\n	line-height: normal;\n	margin: 20px 0 -1px 7px;\n	min-width: 570px;\n}\n\n#tabs ul {\n	margin:0;\n	padding: 0;\n	list-style: none;\n}\n\n#tabs li {\n	display: inline;\n	margin: 0;\n	padding: 0;\n	font-size: 1em;\n	font-weight: bold;\n}\n\n#tabs a {\n	float: left;\n	background: none no-repeat 0% -35px;\n	margin: 0 1px 0 0;\n	padding: 0 0 0 5px;\n	text-decoration: none;\n	position: relative;\n	cursor: pointer;\n}\n\n#tabs a span {\n	float: left;\n	display: block;\n	background: none no-repeat 100% -35px;\n	padding: 6px 10px 6px 5px;\n	color: #828282;\n	white-space: nowrap;\n}\n\n#tabs a:hover span {\n	color: #bcbcbc;\n}\n\n#tabs .activetab a {\n	background-position: 0 0;\n	border-bottom: 1px solid #ebebeb;\n}\n\n#tabs .activetab a span {\n	background-position: 100% 0;\n	padding-bottom: 7px;\n	color: #333333;\n}\n\n#tabs a:hover {\n	background-position: 0 -70px;\n}\n\n#tabs a:hover span {\n	background-position:100% -70px;\n}\n\n#tabs .activetab a:hover {\n	background-position: 0 0;\n}\n\n#tabs .activetab a:hover span {\n	color: #000000;\n	background-position: 100% 0;\n}\n\n/* Mini tabbed menu used in MCP\n----------------------------------------*/\n#minitabs {\n	line-height: normal;\n	margin: -20px 7px 0 0;\n}\n\n#minitabs ul {\n	margin:0;\n	padding: 0;\n	list-style: none;\n}\n\n#minitabs li {\n	display: block;\n	float: right;\n	padding: 0 10px 4px 10px;\n	font-size: 1em;\n	font-weight: bold;\n	background-color: #f2f2f2;\n	margin-left: 2px;\n}\n\n#minitabs a {\n}\n\n#minitabs a:hover {\n	text-decoration: none;\n}\n\n#minitabs li.activetab {\n	background-color: #F9F9F9;\n}\n\n#minitabs li.activetab a, #minitabs li.activetab a:hover {\n	color: #333333;\n}\n\n/* UCP navigation menu\n----------------------------------------*/\n/* Container for sub-navigation list */\n#navigation {\n	width: 100%;\n	padding-top: 36px;\n}\n\n#navigation ul {\n	list-style:none;\n}\n\n/* Default list state */\n#navigation li {\n	margin: 1px 0;\n	padding: 0;\n	font-weight: bold;\n	display: inline;\n}\n\n/* Link styles for the sub-section links */\n#navigation a {\n	display: block;\n	padding: 5px;\n	margin: 1px 0;\n	text-decoration: none;\n	font-weight: bold;\n	color: #333;\n	background: #cfcfcf none repeat-y 100% 0;\n}\n\n#navigation a:hover {\n	text-decoration: none;\n	background-color: #c6c6c6;\n	color: #bcbcbc;\n	background-image: none;\n}\n\n#navigation #active-subsection a {\n	display: block;\n	color: #d3d3d3;\n	background-color: #F9F9F9;\n	background-image: none;\n}\n\n#navigation #active-subsection a:hover {\n	color: #d3d3d3;\n}\n\n/* Preferences pane layout\n----------------------------------------*/\n#cp-main h2 {\n	border-bottom: none;\n	padding: 0;\n	margin-left: 10px;\n	color: #333333;\n}\n\n#cp-main .panel {\n	background-color: #F9F9F9;\n}\n\n#cp-main .pm {\n	background-color: #FFFFFF;\n}\n\n#cp-main span.corners-top, #cp-menu span.corners-top {\n	background-image: none;\n}\n\n#cp-main span.corners-top span, #cp-menu span.corners-top span {\n	background-image: none;\n}\n\n#cp-main span.corners-bottom, #cp-menu span.corners-bottom {\n	background-image: none;\n}\n\n#cp-main span.corners-bottom span, #cp-menu span.corners-bottom span {\n	background-image: none;\n}\n\n/* Topicreview */\n#cp-main .panel #topicreview span.corners-top, #cp-menu .panel #topicreview span.corners-top {\n	background-image: none;\n}\n\n#cp-main .panel #topicreview span.corners-top span, #cp-menu .panel #topicreview span.corners-top span {\n	background-image: none;\n}\n\n#cp-main .panel #topicreview span.corners-bottom, #cp-menu .panel #topicreview span.corners-bottom {\n	background-image: none;\n}\n\n#cp-main .panel #topicreview span.corners-bottom span, #cp-menu .panel #topicreview span.corners-bottom span {\n	background-image: none;\n}\n\n/* Friends list */\n.cp-mini {\n	background-color: #f9f9f9;\n	padding: 0 5px;\n	margin: 10px 15px 10px 5px;\n}\n\n.cp-mini span.corners-top, .cp-mini span.corners-bottom {\n	margin: 0 -5px;\n}\n\ndl.mini dt {\n	font-weight: bold;\n	color: #676767;\n}\n\ndl.mini dd {\n	padding-top: 4px;\n}\n\n.friend-online {\n	font-weight: bold;\n}\n\n.friend-offline {\n	font-style: italic;\n}\n\n/* PM Styles\n----------------------------------------*/\n#pm-menu {\n	line-height: 2.5em;\n}\n\n/* PM Message history */\n.current {\n	color: #999999;\n}\n\n/* Defined rules list for PM options */\nol.def-rules {\n	padding-left: 0;\n}\n\nol.def-rules li {\n	line-height: 180%;\n	padding: 1px;\n}\n\n/* PM marking colours */\n.pmlist li.bg1 {\n	border: solid 3px transparent;\n	border-width: 0 3px;\n}\n\n.pmlist li.bg2 {\n	border: solid 3px transparent;\n	border-width: 0 3px;\n}\n\n.pmlist li.pm_message_reported_colour, .pm_message_reported_colour {\n	border-left-color: #bcbcbc;\n	border-right-color: #bcbcbc;\n}\n\n.pmlist li.pm_marked_colour, .pm_marked_colour {\n	border: solid 3px #ffffff;\n	border-width: 0 3px;\n}\n\n.pmlist li.pm_replied_colour, .pm_replied_colour {\n	border: solid 3px #c2c2c2;\n	border-width: 0 3px;	\n}\n\n.pmlist li.pm_friend_colour, .pm_friend_colour {\n	border: solid 3px #bdbdbd;\n	border-width: 0 3px;\n}\n\n.pmlist li.pm_foe_colour, .pm_foe_colour {\n	border: solid 3px #000000;\n	border-width: 0 3px;\n}\n\n.pm-legend {\n	border-left-width: 10px;\n	border-left-style: solid;\n	border-right-width: 0;\n	margin-bottom: 3px;\n	padding-left: 3px;\n}\n\n/* Avatar gallery */\n#gallery label {\n	position: relative;\n	float: left;\n	margin: 10px;\n	padding: 5px;\n	width: auto;\n	background: #FFFFFF;\n	border: 1px solid #CCC;\n	text-align: center;\n}\n\n#gallery label:hover {\n	background-color: #EEE;\n}\n/* proSilver Form Styles\n---------------------------------------- */\n\n/* General form styles\n----------------------------------------*/\nfieldset {\n	border-width: 0;\n	font-family: Verdana, Helvetica, Arial, sans-serif;\n	font-size: 1.1em;\n}\n\ninput {\n	font-weight: normal;\n	cursor: pointer;\n	vertical-align: middle;\n	padding: 0 3px;\n	font-size: 1em;\n	font-family: Verdana, Helvetica, Arial, sans-serif;\n}\n\nselect {\n	font-family: Verdana, Helvetica, Arial, sans-serif;\n	font-weight: normal;\n	cursor: pointer;\n	vertical-align: middle;\n	border: 1px solid #666666;\n	padding: 1px;\n	background-color: #FAFAFA;\n}\n\noption {\n	padding-right: 1em;\n}\n\noption.disabled-option {\n	color: graytext;\n}\n\ntextarea {\n	font-family: \"Lucida Grande\", Verdana, Helvetica, Arial, sans-serif;\n	width: 60%;\n	padding: 2px;\n	font-size: 1em;\n	line-height: 1.4em;\n}\n\nlabel {\n	cursor: default;\n	padding-right: 5px;\n	color: #676767;\n}\n\nlabel input {\n	vertical-align: middle;\n}\n\nlabel img {\n	vertical-align: middle;\n}\n\n/* Definition list layout for forms\n---------------------------------------- */\nfieldset dl {\n	padding: 4px 0;\n}\n\nfieldset dt {\n	float: left;	\n	width: 40%;\n	text-align: left;\n	display: block;\n}\n\nfieldset dd {\n	margin-left: 41%;\n	vertical-align: top;\n	margin-bottom: 3px;\n}\n\n/* Specific layout 1 */\nfieldset.fields1 dt {\n	width: 15em;\n	border-right-width: 0;\n}\n\nfieldset.fields1 dd {\n	margin-left: 15em;\n	border-left-width: 0;\n}\n\nfieldset.fields1 {\n	background-color: transparent;\n}\n\nfieldset.fields1 div {\n	margin-bottom: 3px;\n}\n\n/* Specific layout 2 */\nfieldset.fields2 dt {\n	width: 15em;\n	border-right-width: 0;\n}\n\nfieldset.fields2 dd {\n	margin-left: 16em;\n	border-left-width: 0;\n}\n\n/* Form elements */\ndt label {\n	font-weight: bold;\n	text-align: left;\n}\n\ndd label {\n	white-space: nowrap;\n	color: #333;\n}\n\ndd input, dd textarea {\n	margin-right: 3px;\n}\n\ndd select {\n	width: auto;\n}\n\ndd textarea {\n	width: 85%;\n}\n\n/* Hover effects */\nfieldset dl:hover dt label {\n	color: #000000;\n}\n\nfieldset.fields2 dl:hover dt label {\n	color: inherit;\n}\n\n#timezone {\n	width: 95%;\n}\n\n* html #timezone {\n	width: 50%;\n}\n\n/* Quick-login on index page */\nfieldset.quick-login {\n	margin-top: 5px;\n}\n\nfieldset.quick-login input {\n	width: auto;\n}\n\nfieldset.quick-login input.inputbox {\n	width: 15%;\n	vertical-align: middle;\n	margin-right: 5px;\n	background-color: #f3f3f3;\n}\n\nfieldset.quick-login label {\n	white-space: nowrap;\n	padding-right: 2px;\n}\n\n/* Display options on viewtopic/viewforum pages  */\nfieldset.display-options {\n	text-align: center;\n	margin: 3px 0 5px 0;\n}\n\nfieldset.display-options label {\n	white-space: nowrap;\n	padding-right: 2px;\n}\n\nfieldset.display-options a {\n	margin-top: 3px;\n}\n\n/* Display actions for ucp and mcp pages */\nfieldset.display-actions {\n	text-align: right;\n	line-height: 2em;\n	white-space: nowrap;\n	padding-right: 1em;\n}\n\nfieldset.display-actions label {\n	white-space: nowrap;\n	padding-right: 2px;\n}\n\nfieldset.sort-options {\n	line-height: 2em;\n}\n\n/* MCP forum selection*/\nfieldset.forum-selection {\n	margin: 5px 0 3px 0;\n	float: right;\n}\n\nfieldset.forum-selection2 {\n	margin: 13px 0 3px 0;\n	float: right;\n}\n\n/* Jumpbox */\nfieldset.jumpbox {\n	text-align: right;\n	margin-top: 15px;\n	height: 2.5em;\n}\n\nfieldset.quickmod {\n	width: 50%;\n	float: right;\n	text-align: right;\n	height: 2.5em;\n}\n\n/* Submit button fieldset */\nfieldset.submit-buttons {\n	text-align: center;\n	vertical-align: middle;\n	margin: 5px 0;\n}\n\nfieldset.submit-buttons input {\n	vertical-align: middle;\n	padding-top: 3px;\n	padding-bottom: 3px;\n}\n\n/* Posting page styles\n----------------------------------------*/\n\n/* Buttons used in the editor */\n#format-buttons {\n	margin: 15px 0 2px 0;\n}\n\n#format-buttons input, #format-buttons select {\n	vertical-align: middle;\n}\n\n/* Main message box */\n#message-box {\n	width: 80%;\n}\n\n#message-box textarea {\n	font-family: \"Trebuchet MS\", Verdana, Helvetica, Arial, sans-serif;\n	width: 100%;\n	font-size: 1.2em;\n	color: #333333;\n}\n\n/* Emoticons panel */\n#smiley-box {\n	width: 18%;\n	float: right;\n}\n\n#smiley-box img {\n	margin: 3px;\n}\n\n/* Input field styles\n---------------------------------------- */\n.inputbox {\n	background-color: #FFFFFF;\n	border: 1px solid #c0c0c0;\n	color: #333333;\n	padding: 2px;\n	cursor: text;\n}\n\n.inputbox:hover {\n	border: 1px solid #eaeaea;\n}\n\n.inputbox:focus {\n	border: 1px solid #eaeaea;\n	color: #4b4b4b;\n}\n\ninput.inputbox	{ width: 85%; }\ninput.medium	{ width: 50%; }\ninput.narrow	{ width: 25%; }\ninput.tiny		{ width: 125px; }\n\ntextarea.inputbox {\n	width: 85%;\n}\n\n.autowidth {\n	width: auto !important;\n}\n\n/* Form button styles\n---------------------------------------- */\ninput.button1, input.button2 {\n	font-size: 1em;\n}\n\na.button1, input.button1, input.button3, a.button2, input.button2 {\n	width: auto !important;\n	padding-top: 1px;\n	padding-bottom: 1px;\n	font-family: \"Lucida Grande\", Verdana, Helvetica, Arial, sans-serif;\n	color: #000;\n	background: #FAFAFA none repeat-x top;\n}\n\na.button1, input.button1 {\n	font-weight: bold;\n	border: 1px solid #666666;\n}\n\ninput.button3 {\n	padding: 0;\n	margin: 0;\n	line-height: 5px;\n	height: 12px;\n	background-image: none;\n	font-variant: small-caps;\n}\n\n/* Alternative button */\na.button2, input.button2, input.button3 {\n	border: 1px solid #666666;\n}\n\n/* <a> button in the style of the form buttons */\na.button1, a.button1:link, a.button1:visited, a.button1:active, a.button2, a.button2:link, a.button2:visited, a.button2:active {\n	text-decoration: none;\n	color: #000000;\n	padding: 2px 8px;\n	line-height: 250%;\n	vertical-align: text-bottom;\n	background-position: 0 1px;\n}\n\n/* Hover states */\na.button1:hover, input.button1:hover, a.button2:hover, input.button2:hover, input.button3:hover {\n	border: 1px solid #BCBCBC;\n	background-position: 0 100%;\n	color: #BCBCBC;\n}\n\ninput.disabled {\n	font-weight: normal;\n	color: #666666;\n}\n\n/* Topic and forum Search */\n.search-box {\n	margin-top: 3px;\n	margin-left: 5px;\n	float: left;\n}\n\n.search-box input {\n}\n\ninput.search {\n	background-image: none;\n	background-repeat: no-repeat;\n	background-position: left 1px;\n	padding-left: 17px;\n}\n\n.full { width: 95%; }\n.medium { width: 50%;}\n.narrow { width: 25%;}\n.tiny { width: 10%;}\n/* proSilver Style Sheet Tweaks\n\nThese style definitions are mainly IE specific \ntweaks required due to its poor CSS support.\n-------------------------------------------------*/\n\n* html table, * html select, * html input { font-size: 100%; }\n* html hr { margin: 0; }\n* html span.corners-top, * html span.corners-bottom { background-image: url(\"{T_THEME_PATH}/images/corners_left.gif\"); }\n* html span.corners-top span, * html span.corners-bottom span { background-image: url(\"{T_THEME_PATH}/images/corners_right.gif\"); }\n\ntable.table1 {\n	width: 99%;		/* IE < 6 browsers */\n	/* Tantek hack */\n	voice-family: \"\\\"}\\\"\";\n	voice-family: inherit;\n	width: 100%;\n}\nhtml>body table.table1 { width: 100%; }	/* Reset 100% for opera */\n\n* html ul.topiclist li { position: relative; }\n* html .postbody h3 img { vertical-align: middle; }\n\n/* Form styles */\nhtml>body dd label input { vertical-align: text-bottom; }	/* Align checkboxes/radio buttons nicely */\n\n* html input.button1, * html input.button2 {\n	padding-bottom: 0;\n	margin-bottom: 1px;\n}\n\n/* Misc layout styles */\n* html .column1, * html .column2 { width: 45%; }\n\n/* Nice method for clearing floated blocks without having to insert any extra markup (like spacer above)\n   From http://www.positioniseverything.net/easyclearing.html \n#tabs:after, #minitabs:after, .post:after, .navbar:after, fieldset dl:after, ul.topiclist dl:after, ul.linklist:after, dl.polls:after {\n	content: \".\"; \n	display: block; \n	height: 0; \n	clear: both; \n	visibility: hidden;\n}*/\n\n.clearfix, #tabs, #minitabs, fieldset dl, ul.topiclist dl, dl.polls {\n	height: 1%;\n	overflow: hidden;\n}\n\n/* viewtopic fix */\n* html .post {\n	height: 25%;\n	overflow: hidden;\n}\n\n/* navbar fix */\n* html .clearfix, * html .navbar, ul.linklist {\n	height: 4%;\n	overflow: hidden;\n}\n\n/* Simple fix so forum and topic lists always have a min-height set, even in IE6\n	From http://www.dustindiaz.com/min-height-fast-hack */\ndl.icon {\n	min-height: 35px;\n	height: auto !important;\n	height: 35px;\n}\n\n* html #search-box {\n	width: 25%;\n}\n\n/* Correctly clear floating for details on profile view */\n*:first-child+html dl.details dd {\n	margin-left: 30%;\n	float: none;\n}\n\n* html dl.details dd {\n	margin-left: 30%;\n	float: none;\n}\n/*  	\n--------------------------------------------------------------\nColours and backgrounds for common.css\n-------------------------------------------------------------- */\n\nhtml, body {\n	color: #536482;\n	background-color: #FFFFFF;\n}\n\nh1 {\n	color: #FFFFFF;\n}\n\nh2 {\n	color: #28313F;\n}\n\nh3 {\n	border-bottom-color: #CCCCCC;\n	color: #115098;\n}\n\nhr {\n	border-color: #FFFFFF;\n	border-top-color: #CCCCCC;\n}\n\nhr.dashed {\n	border-top-color: #CCCCCC;\n}\n\n/* Search box\n--------------------------------------------- */\n\n#search-box {\n	color: #FFFFFF;\n}\n\n#search-box #keywords {\n	background-color: #FFF;\n}\n\n#search-box input {\n	border-color: #0075B0;\n}\n\n/* Round cornered boxes and backgrounds\n---------------------------------------- */\n.headerbar {\n	background-color: #12A3EB;\n	background-image: url(\"{T_THEME_PATH}/images/bg_header.gif\");\n	color: #FFFFFF;\n}\n\n.navbar {\n	background-color: #cadceb;\n}\n\n.forabg {\n	background-color: #0076b1;\n	background-image: url(\"{T_THEME_PATH}/images/bg_list.gif\");\n}\n\n.forumbg {\n	background-color: #12A3EB;\n	background-image: url(\"{T_THEME_PATH}/images/bg_header.gif\");\n}\n\n.panel {\n	background-color: #ECF1F3;\n	color: #28313F;\n}\n\n.post:target .content {\n	color: #000000;\n}\n\n.post:target h3 a {\n	color: #000000;\n}\n\n.bg1	{ background-color: #ECF3F7; }\n.bg2	{ background-color: #e1ebf2;  }\n.bg3	{ background-color: #cadceb; }\n\n.ucprowbg {\n	background-color: #DCDEE2;\n}\n\n.fieldsbg {\n	background-color: #E7E8EA;\n}\n\nspan.corners-top {\n	background-image: url(\"{T_THEME_PATH}/images/corners_left.png\");\n}\n\nspan.corners-top span {\n	background-image: url(\"{T_THEME_PATH}/images/corners_right.png\");\n}\n\nspan.corners-bottom {\n	background-image: url(\"{T_THEME_PATH}/images/corners_left.png\");\n}\n\nspan.corners-bottom span {\n	background-image: url(\"{T_THEME_PATH}/images/corners_right.png\");\n}\n\n/* Horizontal lists\n----------------------------------------*/\n\nul.navlinks {\n	border-bottom-color: #FFFFFF;\n}\n\n/* Table styles\n----------------------------------------*/\ntable.table1 thead th {\n	color: #FFFFFF;\n}\n\ntable.table1 tbody tr {\n	border-color: #BFC1CF;\n}\n\ntable.table1 tbody tr:hover, table.table1 tbody tr.hover {\n	background-color: #CFE1F6;\n	color: #000;\n}\n\ntable.table1 td {\n	color: #536482;\n}\n\ntable.table1 tbody td {\n	border-top-color: #FAFAFA;\n}\n\ntable.table1 tbody th {\n	border-bottom-color: #000000;\n	color: #333333;\n	background-color: #FFFFFF;\n}\n\ntable.info tbody th {\n	color: #000000;\n}\n\n/* Misc layout styles\n---------------------------------------- */\ndl.details dt {\n	color: #000000;\n}\n\ndl.details dd {\n	color: #536482;\n}\n\n.sep {\n	color: #1198D9;\n}\n\n/* Pagination\n---------------------------------------- */\n\n.pagination span strong {\n	color: #FFFFFF;\n	background-color: #4692BF;\n	border-color: #4692BF;\n}\n\n.pagination span a, .pagination span a:link, .pagination span a:visited, .pagination span a:active {\n	color: #5C758C;\n	background-color: #ECEDEE;\n	border-color: #B4BAC0;\n}\n\n.pagination span a:hover {\n	border-color: #368AD2;\n	background-color: #368AD2;\n	color: #FFF;\n}\n\n/* Pagination in viewforum for multipage topics */\n.row .pagination {\n	background-image: url(\"{T_THEME_PATH}/images/icon_pages.gif\");\n}\n\n.row .pagination span a, li.pagination span a {\n	background-color: #FFFFFF;\n}\n\n.row .pagination span a:hover, li.pagination span a:hover {\n	background-color: #368AD2;\n}\n\n/* Miscellaneous styles\n---------------------------------------- */\n\n.copyright {\n	color: #555555;\n}\n\n.error {\n	color: #BC2A4D;\n}\n\n.reported {\n	background-color: #F7ECEF;\n}\n\nli.reported:hover {\n	background-color: #ECD5D8 !important;\n}\n.sticky, .announce {\n	/* you can add a background for stickies and announcements*/\n}\n\ndiv.rules {\n	background-color: #ECD5D8;\n	color: #BC2A4D;\n}\n\np.rules {\n	background-color: #ECD5D8;\n	background-image: none;\n}\n\n/*  	\n--------------------------------------------------------------\nColours and backgrounds for links.css\n-------------------------------------------------------------- */\n\na:link	{ color: #105289; }\na:visited	{ color: #105289; }\na:hover	{ color: #D31141; }\na:active	{ color: #368AD2; }\n\n/* Links on gradient backgrounds */\n#search-box a:link, .navbg a:link, .forumbg .header a:link, .forabg .header a:link, th a:link {\n	color: #FFFFFF;\n}\n\n#search-box a:visited, .navbg a:visited, .forumbg .header a:visited, .forabg .header a:visited, th a:visited {\n	color: #FFFFFF;\n}\n\n#search-box a:hover, .navbg a:hover, .forumbg .header a:hover, .forabg .header a:hover, th a:hover {\n	color: #A8D8FF;\n}\n\n#search-box a:active, .navbg a:active, .forumbg .header a:active, .forabg .header a:active, th a:active {\n	color: #C8E6FF;\n}\n\n/* Links for forum/topic lists */\na.forumtitle {\n	color: #105289;\n}\n\n/* a.forumtitle:visited { color: #105289; } */\n\na.forumtitle:hover {\n	color: #BC2A4D;\n}\n\na.forumtitle:active {\n	color: #105289;\n}\n\na.topictitle {\n	color: #105289;\n}\n\n/* a.topictitle:visited { color: #368AD2; } */\n\na.topictitle:hover {\n	color: #BC2A4D;\n}\n\na.topictitle:active {\n	color: #105289;\n}\n\n/* Post body links */\n.postlink {\n	color: #368AD2;\n	border-bottom-color: #368AD2;\n}\n\n.postlink:visited {\n	color: #5D8FBD;\n	border-bottom-color: #666666;\n}\n\n.postlink:active {\n	color: #368AD2;\n}\n\n.postlink:hover {\n	background-color: #D0E4F6;\n	color: #0D4473;\n}\n\n.signature a, .signature a:visited, .signature a:active, .signature a:hover {\n	background-color: transparent;\n}\n\n/* Profile links */\n.postprofile a:link, .postprofile a:active, .postprofile a:visited, .postprofile dt.author a {\n	color: #105289;\n}\n\n.postprofile a:hover, .postprofile dt.author a:hover {\n	color: #D31141;\n}\n\n/* Profile searchresults */	\n.search .postprofile a {\n	color: #105289;\n}\n\n.search .postprofile a:hover {\n	color: #D31141;\n}\n\n/* Back to top of page */\na.top {\n	background-image: url(\"{IMG_ICON_BACK_TOP_SRC}\");\n}\n\na.top2 {\n	background-image: url(\"{IMG_ICON_BACK_TOP_SRC}\");\n}\n\n/* Arrow links  */\na.up		{ background-image: url(\"{T_THEME_PATH}/images/arrow_up.gif\") }\na.down		{ background-image: url(\"{T_THEME_PATH}/images/arrow_down.gif\") }\na.left		{ background-image: url(\"{T_THEME_PATH}/images/arrow_left.gif\") }\na.right		{ background-image: url(\"{T_THEME_PATH}/images/arrow_right.gif\") }\n\na.up:hover {\n	background-color: transparent;\n}\n\na.left:hover {\n	color: #368AD2;\n}\n\na.right:hover {\n	color: #368AD2;\n}\n\n\n/*  	\n--------------------------------------------------------------\nColours and backgrounds for content.css\n-------------------------------------------------------------- */\n\nul.forums {\n	background-color: #eef5f9;\n	background-image: url(\"{T_THEME_PATH}/images/gradient.gif\");\n}\n\nul.topiclist li {\n	color: #4C5D77;\n}\n\nul.topiclist dd {\n	border-left-color: #FFFFFF;\n}\n\n.rtl ul.topiclist dd {\n	border-right-color: #fff;\n	border-left-color: transparent;\n}\n\nul.topiclist li.row dt a.subforum.read {\n	background-image: url(\"{IMG_SUBFORUM_READ_SRC}\");\n}\n\nul.topiclist li.row dt a.subforum.unread {\n	background-image: url(\"{IMG_SUBFORUM_UNREAD_SRC}\");\n}\n\nli.row {\n	border-top-color:  #FFFFFF;\n	border-bottom-color: #00608F;\n}\n\nli.row strong {\n	color: #000000;\n}\n\nli.row:hover {\n	background-color: #F6F4D0;\n}\n\nli.row:hover dd {\n	border-left-color: #CCCCCC;\n}\n\n.rtl li.row:hover dd {\n	border-right-color: #CCCCCC;\n	border-left-color: transparent;\n}\n\nli.header dt, li.header dd {\n	color: #FFFFFF;\n}\n\n/* Forum list column styles */\nul.topiclist dd.searchextra {\n	color: #333333;\n}\n\n/* Post body styles\n----------------------------------------*/\n.postbody {\n	color: #333333;\n}\n\n/* Content container styles\n----------------------------------------*/\n.content {\n	color: #333333;\n}\n\n.content h2, .panel h2 {\n	color: #115098;\n	border-bottom-color:  #CCCCCC;\n}\n\ndl.faq dt {\n	color: #333333;\n}\n\n.posthilit {\n	background-color: #F3BFCC;\n	color: #BC2A4D;\n}\n\n/* Post signature */\n.signature {\n	border-top-color: #CCCCCC;\n}\n\n/* Post noticies */\n.notice {\n	border-top-color:  #CCCCCC;\n}\n\n/* BB Code styles\n----------------------------------------*/\n/* Quote block */\nblockquote {\n	background-color: #EBEADD;\n	background-image: url(\"{T_THEME_PATH}/images/quote.gif\");\n	border-color:#DBDBCE;\n}\n\nblockquote blockquote {\n	/* Nested quotes */\n	background-color:#EFEED9;\n}\n\nblockquote blockquote blockquote {\n	/* Nested quotes */\n	background-color: #EBEADD;\n}\n\n/* Code block */\ndl.codebox {\n	background-color: #FFFFFF;\n	border-color: #C9D2D8;\n}\n\ndl.codebox dt {\n	border-bottom-color:  #CCCCCC;\n}\n\ndl.codebox code {\n	color: #2E8B57;\n}\n\n.syntaxbg		{ color: #FFFFFF; }\n.syntaxcomment	{ color: #FF8000; }\n.syntaxdefault	{ color: #0000BB; }\n.syntaxhtml		{ color: #000000; }\n.syntaxkeyword	{ color: #007700; }\n.syntaxstring	{ color: #DD0000; }\n\n/* Attachments\n----------------------------------------*/\n.attachbox {\n	background-color: #FFFFFF;\n	border-color:  #C9D2D8;\n}\n\n.pm-message .attachbox {\n	background-color: #F2F3F3;\n}\n\n.attachbox dd {\n	border-top-color: #C9D2D8;\n}\n\n.attachbox p {\n	color: #666666;\n}\n\n.attachbox p.stats {\n	color: #666666;\n}\n\n.attach-image img {\n	border-color: #999999;\n}\n\n/* Inline image thumbnails */\n\ndl.file dd {\n	color: #666666;\n}\n\ndl.thumbnail img {\n	border-color: #666666;\n	background-color: #FFFFFF;\n}\n\ndl.thumbnail dd {\n	color: #666666;\n}\n\ndl.thumbnail dt a:hover {\n	background-color: #EEEEEE;\n}\n\ndl.thumbnail dt a:hover img {\n	border-color: #368AD2;\n}\n\n/* Post poll styles\n----------------------------------------*/\n\nfieldset.polls dl {\n	border-top-color: #DCDEE2;\n	color: #666666;\n}\n\nfieldset.polls dl.voted {\n	color: #000000;\n}\n\nfieldset.polls dd div {\n	color: #FFFFFF;\n}\n\n.rtl .pollbar1, .rtl .pollbar2, .rtl .pollbar3, .rtl .pollbar4, .rtl .pollbar5 {\n	border-right-color: transparent;\n}\n\n.pollbar1 {\n	background-color: #AA2346;\n	border-bottom-color: #74162C;\n	border-right-color: #74162C;\n}\n\n.rtl .pollbar1 {\n	border-left-color: #74162C;\n}\n\n.pollbar2 {\n	background-color: #BE1E4A;\n	border-bottom-color: #8C1C38;\n	border-right-color: #8C1C38;\n}\n\n.rtl .pollbar2 {\n	border-left-color: #8C1C38;\n}\n\n.pollbar3 {\n	background-color: #D11A4E;\n	border-bottom-color: #AA2346;\n	border-right-color: #AA2346;\n}\n\n.rtl .pollbar3 {\n	border-left-color: #AA2346;\n}\n\n.pollbar4 {\n	background-color: #E41653;\n	border-bottom-color: #BE1E4A;\n	border-right-color: #BE1E4A;\n}\n\n.rtl .pollbar4 {\n	border-left-color: #BE1E4A;\n}\n\n.pollbar5 {\n	background-color: #F81157;\n	border-bottom-color: #D11A4E;\n	border-right-color: #D11A4E;\n}\n\n.rtl .pollbar5 {\n	border-left-color: #D11A4E;\n}\n\n/* Poster profile block\n----------------------------------------*/\n.postprofile {\n	color: #666666;\n	border-left-color: #FFFFFF;\n}\n\n.rtl .postprofile {\n	border-right-color: #FFFFFF;\n	border-left-color: transparent;\n}\n\n.pm .postprofile {\n	border-left-color: #DDDDDD;\n}\n\n.rtl .pm .postprofile {\n	border-right-color: #DDDDDD;\n	border-left-color: transparent;\n}\n\n.postprofile strong {\n	color: #000000;\n}\n\n.online {\n	background-image: url(\"{T_IMAGESET_LANG_PATH}/icon_user_online.gif\");\n}\n\n/*  	\n--------------------------------------------------------------\nColours and backgrounds for buttons.css\n-------------------------------------------------------------- */\n\n/* Big button images */\n.reply-icon span	{ background-image: url(\"{IMG_BUTTON_TOPIC_REPLY_SRC}\"); }\n.post-icon span		{ background-image: url(\"{IMG_BUTTON_TOPIC_NEW_SRC}\"); }\n.locked-icon span	{ background-image: url(\"{IMG_BUTTON_TOPIC_LOCKED_SRC}\"); }\n.pmreply-icon span	{ background-image: url(\"{IMG_BUTTON_PM_REPLY_SRC}\") ;}\n.newpm-icon span 	{ background-image: url(\"{IMG_BUTTON_PM_NEW_SRC}\") ;}\n.forwardpm-icon span	{ background-image: url(\"{IMG_BUTTON_PM_FORWARD_SRC}\") ;}\n\na.print {\n	background-image: url(\"{T_THEME_PATH}/images/icon_print.gif\");\n}\n\na.sendemail {\n	background-image: url(\"{T_THEME_PATH}/images/icon_sendemail.gif\");\n}\n\na.fontsize {\n	background-image: url(\"{T_THEME_PATH}/images/icon_fontsize.gif\");\n}\n\n/* Icon images\n---------------------------------------- */\n.sitehome						{ background-image: url(\"{T_THEME_PATH}/images/icon_home.gif\"); }\n.icon-faq						{ background-image: url(\"{T_THEME_PATH}/images/icon_faq.gif\"); }\n.icon-members					{ background-image: url(\"{T_THEME_PATH}/images/icon_members.gif\"); }\n.icon-home						{ background-image: url(\"{T_THEME_PATH}/images/icon_home.gif\"); }\n.icon-ucp						{ background-image: url(\"{T_THEME_PATH}/images/icon_ucp.gif\"); }\n.icon-register					{ background-image: url(\"{T_THEME_PATH}/images/icon_register.gif\"); }\n.icon-logout					{ background-image: url(\"{T_THEME_PATH}/images/icon_logout.gif\"); }\n.icon-bookmark					{ background-image: url(\"{T_THEME_PATH}/images/icon_bookmark.gif\"); }\n.icon-bump						{ background-image: url(\"{T_THEME_PATH}/images/icon_bump.gif\"); }\n.icon-subscribe					{ background-image: url(\"{T_THEME_PATH}/images/icon_subscribe.gif\"); }\n.icon-unsubscribe				{ background-image: url(\"{T_THEME_PATH}/images/icon_unsubscribe.gif\"); }\n.icon-pages						{ background-image: url(\"{T_THEME_PATH}/images/icon_pages.gif\"); }\n.icon-search					{ background-image: url(\"{T_THEME_PATH}/images/icon_search.gif\"); }\n\n/* Profile & navigation icons */\n.email-icon, .email-icon a		{ background-image: url(\"{IMG_ICON_CONTACT_EMAIL_SRC}\"); }\n.aim-icon, .aim-icon a			{ background-image: url(\"{IMG_ICON_CONTACT_AIM_SRC}\"); }\n.yahoo-icon, .yahoo-icon a		{ background-image: url(\"{IMG_ICON_CONTACT_YAHOO_SRC}\"); }\n.web-icon, .web-icon a			{ background-image: url(\"{IMG_ICON_CONTACT_WWW_SRC}\"); }\n.msnm-icon, .msnm-icon a			{ background-image: url(\"{IMG_ICON_CONTACT_MSNM_SRC}\"); }\n.icq-icon, .icq-icon a			{ background-image: url(\"{IMG_ICON_CONTACT_ICQ_SRC}\"); }\n.jabber-icon, .jabber-icon a		{ background-image: url(\"{IMG_ICON_CONTACT_JABBER_SRC}\"); }\n.pm-icon, .pm-icon a				{ background-image: url(\"{IMG_ICON_CONTACT_PM_SRC}\"); }\n.quote-icon, .quote-icon a		{ background-image: url(\"{IMG_ICON_POST_QUOTE_SRC}\"); }\n\n/* Moderator icons */\n.report-icon, .report-icon a		{ background-image: url(\"{IMG_ICON_POST_REPORT_SRC}\"); }\n.edit-icon, .edit-icon a			{ background-image: url(\"{IMG_ICON_POST_EDIT_SRC}\"); }\n.delete-icon, .delete-icon a		{ background-image: url(\"{IMG_ICON_POST_DELETE_SRC}\"); }\n.info-icon, .info-icon a			{ background-image: url(\"{IMG_ICON_POST_INFO_SRC}\"); }\n.warn-icon, .warn-icon a			{ background-image: url(\"{IMG_ICON_USER_WARN_SRC}\"); } /* Need updated warn icon */\n\n/*  	\n--------------------------------------------------------------\nColours and backgrounds for cp.css\n-------------------------------------------------------------- */\n\n/* Main CP box\n----------------------------------------*/\n\n#cp-main h3, #cp-main hr, #cp-menu hr {\n	border-color: #A4B3BF;\n}\n\n#cp-main .panel li.row {\n	border-bottom-color: #B5C1CB;\n	border-top-color: #F9F9F9;\n}\n\nul.cplist {\n	border-top-color: #B5C1CB;\n}\n\n#cp-main .panel li.header dd, #cp-main .panel li.header dt {\n	color: #000000;\n}\n\n#cp-main table.table1 thead th {\n	color: #333333;\n	border-bottom-color: #333333;\n}\n\n#cp-main .pm-message {\n	border-color: #DBDEE2;\n	background-color: #FFFFFF;\n}\n\n/* CP tabbed menu\n----------------------------------------*/\n#tabs a {\n	background-image: url(\"{T_THEME_PATH}/images/bg_tabs1.gif\");\n}\n\n#tabs a span {\n	background-image: url(\"{T_THEME_PATH}/images/bg_tabs2.gif\");\n	color: #536482;\n}\n\n#tabs a:hover span {\n	color: #BC2A4D;\n}\n\n#tabs .activetab a {\n	border-bottom-color: #CADCEB;\n}\n\n#tabs .activetab a span {\n	color: #333333;\n}\n\n#tabs .activetab a:hover span {\n	color: #000000;\n}\n\n/* Mini tabbed menu used in MCP\n----------------------------------------*/\n#minitabs li {\n	background-color: #E1EBF2;\n}\n\n#minitabs li.activetab {\n	background-color: #F9F9F9;\n}\n\n#minitabs li.activetab a, #minitabs li.activetab a:hover {\n	color: #333333;\n}\n\n/* UCP navigation menu\n----------------------------------------*/\n\n/* Link styles for the sub-section links */\n#navigation a {\n	color: #333;\n	background-color: #B2C2CF;\n	background-image: url(\"{T_THEME_PATH}/images/bg_menu.gif\");\n}\n\n#navigation a:hover {\n	background-color: #aabac6;\n	color: #BC2A4D;\n}\n\n#navigation #active-subsection a {\n	color: #D31141;\n	background-color: #F9F9F9;\n	background-image: none;\n}\n\n#navigation #active-subsection a:hover {\n	color: #D31141;\n}\n\n/* Preferences pane layout\n----------------------------------------*/\n#cp-main h2 {\n	color: #333333;\n}\n\n#cp-main .panel {\n	background-color: #F9F9F9;\n}\n\n#cp-main .pm {\n	background-color: #FFFFFF;\n}\n\n#cp-main span.corners-top, #cp-menu span.corners-top {\n	background-image: url(\"{T_THEME_PATH}/images/corners_left2.gif\");\n}\n\n#cp-main span.corners-top span, #cp-menu span.corners-top span {\n	background-image: url(\"{T_THEME_PATH}/images/corners_right2.gif\");\n}\n\n#cp-main span.corners-bottom, #cp-menu span.corners-bottom {\n	background-image: url(\"{T_THEME_PATH}/images/corners_left2.gif\");\n}\n\n#cp-main span.corners-bottom span, #cp-menu span.corners-bottom span {\n	background-image: url(\"{T_THEME_PATH}/images/corners_right2.gif\");\n}\n\n/* Topicreview */\n#cp-main .panel #topicreview span.corners-top, #cp-menu .panel #topicreview span.corners-top {\n	background-image: url(\"{T_THEME_PATH}/images/corners_left.gif\");\n}\n\n#cp-main .panel #topicreview span.corners-top span, #cp-menu .panel #topicreview span.corners-top span {\n	background-image: url(\"{T_THEME_PATH}/images/corners_right.gif\");\n}\n\n#cp-main .panel #topicreview span.corners-bottom, #cp-menu .panel #topicreview span.corners-bottom {\n	background-image: url(\"{T_THEME_PATH}/images/corners_left.gif\");\n}\n\n#cp-main .panel #topicreview span.corners-bottom span, #cp-menu .panel #topicreview span.corners-bottom span {\n	background-image: url(\"{T_THEME_PATH}/images/corners_right.gif\");\n}\n\n/* Friends list */\n.cp-mini {\n	background-color: #eef5f9;\n}\n\ndl.mini dt {\n	color: #425067;\n}\n\n/* PM Styles\n----------------------------------------*/\n/* PM Message history */\n.current {\n	color: #999999 !important;\n}\n\n/* PM marking colours */\n.pmlist li.pm_message_reported_colour, .pm_message_reported_colour {\n	border-left-color: #BC2A4D;\n	border-right-color: #BC2A4D;\n}\n\n.pmlist li.pm_marked_colour, .pm_marked_colour {\n	border-color: #FF6600;\n}\n\n.pmlist li.pm_replied_colour, .pm_replied_colour {\n	border-color: #A9B8C2;\n}\n\n.pmlist li.pm_friend_colour, .pm_friend_colour {\n	border-color: #5D8FBD;\n}\n\npmlist li.pm_foe_colour, .pm_foe_colour {\n	border-color: #000000;\n}\n\n/* Avatar gallery */\n#gallery label {\n	background-color: #FFFFFF;\n	border-color: #CCC;\n}\n\n#gallery label:hover {\n	background-color: #EEE;\n}\n\n/*  	\n--------------------------------------------------------------\nColours and backgrounds for forms.css\n-------------------------------------------------------------- */\n\n/* General form styles\n----------------------------------------*/\nselect {\n	border-color: #666666;\n	background-color: #FAFAFA;\n}\n\nlabel {\n	color: #425067;\n}\n\noption.disabled-option {\n	color: graytext;\n}\n\n/* Definition list layout for forms\n---------------------------------------- */\ndd label {\n	color: #333;\n}\n\n/* Hover effects */\nfieldset dl:hover dt label {\n	color: #000000;\n}\n\nfieldset.fields2 dl:hover dt label {\n	color: inherit;\n}\n\n/* Quick-login on index page */\nfieldset.quick-login input.inputbox {\n	background-color: #F2F3F3;\n}\n\n/* Posting page styles\n----------------------------------------*/\n\n#message-box textarea {\n	color: #333333;\n}\n\n/* Input field styles\n---------------------------------------- */\n.inputbox {\n	background-color: #FFFFFF; \n	border-color: #B4BAC0;\n	color: #333333;\n}\n\n.inputbox:hover {\n	border-color: #11A3EA;\n}\n\n.inputbox:focus {\n	border-color: #11A3EA;\n	color: #0F4987;\n}\n\n/* Form button styles\n---------------------------------------- */\n\na.button1, input.button1, input.button3, a.button2, input.button2 {\n	color: #000;\n	background-color: #FAFAFA;\n	background-image: url(\"{T_THEME_PATH}/images/bg_button.gif\");\n}\n\na.button1, input.button1 {\n	border-color: #666666;\n}\n\ninput.button3 {\n	background-image: none;\n}\n\n/* Alternative button */\na.button2, input.button2, input.button3 {\n	border-color: #666666;\n}\n\n/* <a> button in the style of the form buttons */\na.button1, a.button1:link, a.button1:visited, a.button1:active, a.button2, a.button2:link, a.button2:visited, a.button2:active {\n	color: #000000;\n}\n\n/* Hover states */\na.button1:hover, input.button1:hover, a.button2:hover, input.button2:hover, input.button3:hover {\n	border-color: #BC2A4D;\n	color: #BC2A4D;\n}\n\ninput.search {\n	background-image: url(\"{T_THEME_PATH}/images/icon_textbox_search.gif\");\n}\n\ninput.disabled {\n	color: #666666;\n}'),

(2,'subsilver2','© phpBB Group, 2003','subsilver2',1,1229079038,'/*  phpBB 3.0 Style Sheet\n    --------------------------------------------------------------\n	Style name:		subsilver2\n	Based on style:	subSilver (the default phpBB 2 style)\n	Original author:	subBlue ( http://www.subBlue.com/ )\n	Modified by:		psoTFX and the phpBB team ( http://www.phpbb.com )\n	\n	This is an alternative style for phpBB3 for those wishing to stay with\n	the familiar subSilver style of phpBB version 2.x\n	\n	Copyright 2006 phpBB Group ( http://www.phpbb.com/ )\n    --------------------------------------------------------------\n*/\n\n/* Layout\n ------------ */\n* {\n	/* Reset browsers default margin, padding and font sizes */\n	margin: 0;\n	padding: 0;\n}\n\nhtml {\n	font-size: 100%;\n}\n\nbody {\n	/* Text-Sizing with ems: http://www.clagnut.com/blog/348/ */\n	font-family: \"Lucida Grande\", Verdana, Helvetica, Arial, sans-serif;\n	color: #323D4F;\n	background-color: #FFFFFF;\n	font-size: 62.5%; /* This sets the default font size to be equivalent to 10px */\n	margin: 0;\n}\n\n#wrapheader {\n	min-height: 120px;\n	height: auto !important;\n	height: 120px;\n/*	background-image: url(\'styles/subsilver2/theme/images/background.gif\');\n	background-repeat: repeat-x;*/\n/*	padding: 0 25px 15px 25px;*/\n	padding: 0;\n}\n\n#wrapcentre {\n	margin: 15px 25px 0 25px;\n}\n\n#wrapfooter {\n	text-align: center;\n	clear: both;\n}\n\n#wrapnav {\n	width: 100%;\n	margin: 0;\n	background-color: #ECECEC;\n	border-width: 1px;\n	border-style: solid;\n	border-color: #A9B8C2;\n}\n\n#logodesc {\n	margin-bottom: 5px;\n	padding: 5px 25px;\n	background: #D9DFE4;\n	border-bottom: 1px solid #4787A7;\n}\n\n#menubar {\n	margin: 0 25px;\n}\n\n#datebar {\n	margin: 10px 25px 0 25px;\n}\n\n#findbar {\n	width: 100%;\n	margin: 0;\n	padding: 0;\n	border: 0;\n}\n\n.forumrules {\n	background-color: #F9CC79;\n	border-width: 1px;\n	border-style: solid;\n	border-color: #BB9860;\n	padding: 4px;\n	font-weight: normal;\n	font-size: 1.1em;\n	font-family: \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;\n}\n\n.forumrules h3 {\n	color: red;\n}\n\n#pageheader { }\n#pagecontent { }\n#pagefooter { }\n\n#poll { }\n#postrow { }\n#postdata { }\n\n\n/*  Text\n --------------------- */\nh1 {\n	color: black;\n	font-family: \"Lucida Grande\", \"Trebuchet MS\", Verdana, sans-serif;\n	font-weight: bold;\n	font-size: 1.8em;\n	text-decoration: none;\n}\n\nh2 {\n	font-family: Arial, Helvetica, sans-serif;\n	font-weight: bold;\n	font-size: 1.5em;\n	text-decoration: none;\n	line-height: 120%;\n}\n\nh3 {\n	font-size: 1.3em;\n	font-weight: bold;\n	font-family: Arial, Helvetica, sans-serif;\n	line-height: 120%;\n}\n\nh4 {\n	margin: 0;\n	font-size: 1.1em;\n	font-weight: bold;\n}\n\np {\n	font-size: 1.1em;\n}\n\np.moderators {\n	margin: 0;\n	float: left;\n	color: black;\n	font-weight: bold;\n}\n\n.rtl p.moderators {\n	float: right;\n}\n\np.linkmcp {\n	margin: 0;\n	float: right;\n	white-space: nowrap;\n}\n\n.rtl p.linkmcp {\n	float: left;\n}\n\np.breadcrumbs {\n	margin: 0;\n	float: left;\n	color: black;\n	font-weight: bold;\n	white-space: normal;\n	font-size: 1em;\n}\n\n.rtl p.breadcrumbs {\n	float: right;\n}\n\np.datetime {\n	margin: 0;\n	float: right;\n	white-space: nowrap;\n	font-size: 1em;\n}\n\n.rtl p.datetime {\n	float: left;\n}\n\np.searchbar {\n	padding: 2px 0;\n	white-space: nowrap;\n} \n\np.searchbarreg {\n	margin: 0;\n	float: right;\n	white-space: nowrap;\n}\n\n.rtl p.searchbarreg {\n	float: left;\n}\n\np.forumdesc {\n	padding-bottom: 4px;\n}\n\np.topicauthor {\n	margin: 1px 0;\n}\n\np.topicdetails {\n	margin: 1px 0;\n}\n\n.postreported, .postreported a:visited, .postreported a:hover, .postreported a:link, .postreported a:active {\n	margin: 1px 0;\n	color: red;\n	font-weight:bold;\n}\n\n.postapprove, .postapprove a:visited, .postapprove a:hover, .postapprove a:link, .postapprove a:active {\n	color: green;\n	font-weight:bold;\n}\n\n.postapprove img, .postreported img {\n	vertical-align: bottom;\n}\n\n.postauthor {\n	color: #000000;\n}\n\n.postdetails {\n	color: #000000;\n}\n\n.postbody {\n	font-size: 1.3em;\n	line-height: 1.4em;\n	font-family: \"Lucida Grande\", \"Trebuchet MS\", Helvetica, Arial, sans-serif;\n}\n\n.postbody li, ol, ul {\n	margin: 0 0 0 1.5em;\n}\n\n.rtl .postbody li, .rtl ol, .rtl ul {\n	margin: 0 1.5em 0 0;\n}\n\n.posthilit {\n	background-color: yellow;\n}\n\n.nav {\n	margin: 0;\n	color: black;\n	font-weight: bold;\n}\n\n.pagination {\n	padding: 4px;\n	color: black;\n	font-size: 1em;\n	font-weight: bold;\n}\n\n.cattitle {\n\n}\n\n.gen {\n	margin: 1px 1px;\n	font-size: 1.2em;\n}\n\n.genmed {\n	margin: 1px 1px;\n	font-size: 1.1em;\n}\n\n.gensmall {\n	margin: 1px 1px;\n	font-size: 1em;\n}\n\n.copyright {\n	color: #444;\n	font-weight: normal;\n	font-family: \"Lucida Grande\", Verdana, Arial, Helvetica, sans-serif;\n}\n\n.titles {\n	font-family: \"Lucida Grande\", Helvetica, Arial, sans-serif;\n	font-weight: bold;\n	font-size: 1.3em;\n	text-decoration: none;\n}\n\n.error {\n	color: red;\n}\n\n\n/* Tables\n ------------ */\nth {\n	color: #FFA34F;\n	font-size: 1.1em;\n	font-weight: bold;\n	background-color: #006699;\n	background-image: url(\'styles/subsilver2/theme/images/cellpic3.gif\');\n	white-space: nowrap;\n	padding: 7px 5px;\n}\n\ntd {\n	padding: 2px;\n}\ntd.profile {\n	padding: 4px;\n}\n\n.tablebg {\n	background-color: #A9B8C2;\n}\n\n.catdiv {\n	height: 28px;\n	margin: 0;\n	padding: 0;\n	border: 0;\n	background: white url(\'styles/subsilver2/theme/images/cellpic2.jpg\') repeat-y scroll top left;\n}\n.rtl .catdiv {\n	background: white url(\'styles/subsilver2/theme/images/cellpic2_rtl.jpg\') repeat-y scroll top right;\n}\n\n.cat {\n	height: 28px;\n	margin: 0;\n	padding: 0;\n	border: 0;\n	background-color: #C7D0D7;\n	background-image: url(\'styles/subsilver2/theme/images/cellpic1.gif\');\n	text-indent: 4px;\n}\n\n.row1 {\n	background-color: #ECECEC;\n	padding: 4px;\n}\n\n.row2 {\n	background-color: #DCE1E5;\n	padding: 4px;\n}\n\n.row3 {\n	background-color: #C0C8D0;\n	padding: 4px;\n}\n\n.spacer {\n	background-color: #D1D7DC;\n}\n\nhr {\n	height: 1px;\n	border-width: 0;\n	background-color: #D1D7DC;\n	color: #D1D7DC;\n}\n\n.legend {\n	text-align:center;\n	margin: 0 auto;\n}\n\n/* Links\n ------------ */\na:link {\n	color: #006597;\n	text-decoration: none;\n}\n\na:active,\na:visited {\n	color: #005784;\n	text-decoration: none;\n}\n\na:hover {\n	color: #D46400;\n	text-decoration: underline;\n}\n\na.forumlink {\n	color: #069;\n	font-weight: bold;\n	font-family: \"Lucida Grande\", Helvetica, Arial, sans-serif;\n	font-size: 1.2em;\n}\n\na.topictitle {\n	margin: 1px 0;\n	font-family: \"Lucida Grande\", Helvetica, Arial, sans-serif;\n	font-weight: bold;\n	font-size: 1.2em;\n}\n\na.topictitle:visited {\n	color: #5493B4;\n	text-decoration: none;\n}\n\nth a,\nth a:visited {\n	color: #FFA34F !important;\n	text-decoration: none;\n}\n\nth a:hover {\n	text-decoration: underline;\n}\n\n\n/* Form Elements\n ------------ */\nform {\n	margin: 0;\n	padding: 0;\n	border: 0;\n}\n\ninput {\n	color: #333333;\n	font-family: \"Lucida Grande\", Verdana, Helvetica, sans-serif;\n	font-size: 1.1em;\n	font-weight: normal;\n	padding: 1px;\n	border: 1px solid #A9B8C2;\n	background-color: #FAFAFA;\n}\n\ntextarea {\n	background-color: #FAFAFA;\n	color: #333333;\n	font-family: \"Lucida Grande\", Verdana, Helvetica, Arial, sans-serif;\n	font-size: 1.3em; \n	line-height: 1.4em;\n	font-weight: normal;\n	border: 1px solid #A9B8C2;\n	padding: 2px;\n}\n\nselect {\n	color: #333333;\n	background-color: #FAFAFA;\n	font-family: \"Lucida Grande\", Verdana, Helvetica, sans-serif;\n	font-size: 1.1em;\n	font-weight: normal;\n	border: 1px solid #A9B8C2;\n	padding: 1px;\n}\n\noption {\n	padding: 0 1em 0 0;\n}\n\noption.disabled-option {\n	color: graytext;\n}\n\n.rtl option {\n	padding: 0 0 0 1em;\n}\n\ninput.radio {\n	border: none;\n	background-color: transparent;\n}\n\n.post {\n	background-color: white;\n	border-style: solid;\n	border-width: 1px;\n}\n\n.btnbbcode {\n	color: #000000;\n	font-weight: normal;\n	font-size: 1.1em;\n	font-family: \"Lucida Grande\", Verdana, Helvetica, sans-serif;\n	background-color: #EFEFEF;\n	border: 1px solid #666666;\n}\n\n.btnmain {\n	font-weight: bold;\n	background-color: #ECECEC;\n	border: 1px solid #A9B8C2;\n	cursor: pointer;\n	padding: 1px 5px;\n	font-size: 1.1em;\n}\n\n.btnlite {\n	font-weight: normal;\n	background-color: #ECECEC;\n	border: 1px solid #A9B8C2;\n	cursor: pointer;\n	padding: 1px 5px;\n	font-size: 1.1em;\n}\n\n.btnfile {\n	font-weight: normal;\n	background-color: #ECECEC;\n	border: 1px solid #A9B8C2;\n	padding: 1px 5px;\n	font-size: 1.1em;\n}\n\n.helpline {\n	background-color: #DEE3E7;\n	border-style: none;\n}\n\n\n/* BBCode\n ------------ */\n.quotetitle, .attachtitle {\n	margin: 10px 5px 0 5px;\n	padding: 4px;\n	border-width: 1px 1px 0 1px;\n	border-style: solid;\n	border-color: #A9B8C2;\n	color: #333333;\n	background-color: #A9B8C2;\n	font-size: 0.85em;\n	font-weight: bold;\n}\n\n.quotetitle .quotetitle {\n	font-size: 1em;\n}\n\n.quotecontent, .attachcontent {\n	margin: 0 5px 10px 5px;\n	padding: 5px;\n	border-color: #A9B8C2;\n	border-width: 0 1px 1px 1px;\n	border-style: solid;\n	font-weight: normal;\n	font-size: 1em;\n	line-height: 1.4em;\n	font-family: \"Lucida Grande\", \"Trebuchet MS\", Helvetica, Arial, sans-serif;\n	background-color: #FAFAFA;\n	color: #4B5C77;\n}\n\n.attachcontent {\n	font-size: 0.85em;\n}\n\n.codetitle {\n	margin: 10px 5px 0 5px;\n	padding: 2px 4px;\n	border-width: 1px 1px 0 1px;\n	border-style: solid;\n	border-color: #A9B8C2;\n	color: #333333;\n	background-color: #A9B8C2;\n	font-family: \"Lucida Grande\", Verdana, Helvetica, Arial, sans-serif;\n	font-size: 0.8em;\n}\n\n.codecontent {\n	direction: ltr;\n	margin: 0 5px 10px 5px;\n	padding: 5px;\n	border-color: #A9B8C2;\n	border-width: 0 1px 1px 1px;\n	border-style: solid;\n	font-weight: normal;\n	color: #006600;\n	font-size: 0.85em;\n	font-family: Monaco, \'Courier New\', monospace;\n	background-color: #FAFAFA;\n}\n\n.syntaxbg {\n	color: #FFFFFF;\n}\n\n.syntaxcomment {\n	color: #FF8000;\n}\n\n.syntaxdefault {\n	color: #0000BB;\n}\n\n.syntaxhtml {\n	color: #000000;\n}\n\n.syntaxkeyword {\n	color: #007700;\n}\n\n.syntaxstring {\n	color: #DD0000;\n}\n\n\n/* Private messages\n ------------------ */\n.pm_marked_colour {\n	background-color: #000000;\n}\n\n.pm_replied_colour {\n	background-color: #A9B8C2;\n}\n\n.pm_friend_colour {\n	background-color: #007700;\n}\n\n.pm_foe_colour {\n	background-color: #DD0000;\n}\n\n\n/* Misc\n ------------ */\nimg {\n	border: none;\n}\n\n.sep {\n	color: black;\n	background-color: #FFA34F;\n}\n\ntable.colortable td {\n	padding: 0;\n}\n\npre {\n	font-size: 1.1em;\n	font-family: Monaco, \'Courier New\', monospace;\n}\n\n.nowrap {\n	white-space: nowrap;\n}\n\n.username-coloured {\n	font-weight: bold;\n}');

/*Table structure for table `phpbb_topics` */

DROP TABLE IF EXISTS `phpbb_topics`;

CREATE TABLE `phpbb_topics` (
  `topic_id` mediumint(8) unsigned NOT NULL auto_increment,
  `forum_id` mediumint(8) unsigned NOT NULL default '0',
  `icon_id` mediumint(8) unsigned NOT NULL default '0',
  `topic_attachment` tinyint(1) unsigned NOT NULL default '0',
  `topic_approved` tinyint(1) unsigned NOT NULL default '1',
  `topic_reported` tinyint(1) unsigned NOT NULL default '0',
  `topic_title` varchar(255) character set utf8 collate utf8_unicode_ci NOT NULL default '',
  `topic_poster` mediumint(8) unsigned NOT NULL default '0',
  `topic_time` int(11) unsigned NOT NULL default '0',
  `topic_time_limit` int(11) unsigned NOT NULL default '0',
  `topic_views` mediumint(8) unsigned NOT NULL default '0',
  `topic_replies` mediumint(8) unsigned NOT NULL default '0',
  `topic_replies_real` mediumint(8) unsigned NOT NULL default '0',
  `topic_status` tinyint(3) NOT NULL default '0',
  `topic_type` tinyint(3) NOT NULL default '0',
  `topic_first_post_id` mediumint(8) unsigned NOT NULL default '0',
  `topic_first_poster_name` varchar(255) collate utf8_bin NOT NULL default '',
  `topic_first_poster_colour` varchar(6) collate utf8_bin NOT NULL default '',
  `topic_last_post_id` mediumint(8) unsigned NOT NULL default '0',
  `topic_last_poster_id` mediumint(8) unsigned NOT NULL default '0',
  `topic_last_poster_name` varchar(255) collate utf8_bin NOT NULL default '',
  `topic_last_poster_colour` varchar(6) collate utf8_bin NOT NULL default '',
  `topic_last_post_subject` varchar(255) collate utf8_bin NOT NULL default '',
  `topic_last_post_time` int(11) unsigned NOT NULL default '0',
  `topic_last_view_time` int(11) unsigned NOT NULL default '0',
  `topic_moved_id` mediumint(8) unsigned NOT NULL default '0',
  `topic_bumped` tinyint(1) unsigned NOT NULL default '0',
  `topic_bumper` mediumint(8) unsigned NOT NULL default '0',
  `poll_title` varchar(255) collate utf8_bin NOT NULL default '',
  `poll_start` int(11) unsigned NOT NULL default '0',
  `poll_length` int(11) unsigned NOT NULL default '0',
  `poll_max_options` tinyint(4) NOT NULL default '1',
  `poll_last_vote` int(11) unsigned NOT NULL default '0',
  `poll_vote_change` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`topic_id`),
  KEY `forum_id` (`forum_id`),
  KEY `forum_id_type` (`forum_id`,`topic_type`),
  KEY `last_post_time` (`topic_last_post_time`),
  KEY `topic_approved` (`topic_approved`),
  KEY `forum_appr_last` (`forum_id`,`topic_approved`,`topic_last_post_id`),
  KEY `fid_time_moved` (`forum_id`,`topic_last_post_time`,`topic_moved_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_topics` */

insert into `phpbb_topics` values 

(1,2,0,0,1,0,'Welcome to phpBB3',2,1236756255,0,3,2,2,0,0,1,'myadmin','AA0000',3,53,'BAJAJ','','Re: Welcome to phpBB3',1236762604,1236762585,0,0,0,'',0,0,1,0,0),

(2,2,0,0,1,0,'new intr',53,1236857079,0,1,0,0,0,0,4,'BAJAJ','',4,53,'BAJAJ','','new intr',1236857079,1236857083,0,0,0,'',0,0,1,0,0);

/*Table structure for table `phpbb_topics_posted` */

DROP TABLE IF EXISTS `phpbb_topics_posted`;

CREATE TABLE `phpbb_topics_posted` (
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `topic_id` mediumint(8) unsigned NOT NULL default '0',
  `topic_posted` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`user_id`,`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_topics_posted` */

insert into `phpbb_topics_posted` values 

(2,1,1),

(53,1,1),

(53,2,1);

/*Table structure for table `phpbb_topics_track` */

DROP TABLE IF EXISTS `phpbb_topics_track`;

CREATE TABLE `phpbb_topics_track` (
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `topic_id` mediumint(8) unsigned NOT NULL default '0',
  `forum_id` mediumint(8) unsigned NOT NULL default '0',
  `mark_time` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`user_id`,`topic_id`),
  KEY `forum_id` (`forum_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_topics_track` */

/*Table structure for table `phpbb_topics_watch` */

DROP TABLE IF EXISTS `phpbb_topics_watch`;

CREATE TABLE `phpbb_topics_watch` (
  `topic_id` mediumint(8) unsigned NOT NULL default '0',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `notify_status` tinyint(1) unsigned NOT NULL default '0',
  KEY `topic_id` (`topic_id`),
  KEY `user_id` (`user_id`),
  KEY `notify_stat` (`notify_status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_topics_watch` */

/*Table structure for table `phpbb_user_group` */

DROP TABLE IF EXISTS `phpbb_user_group`;

CREATE TABLE `phpbb_user_group` (
  `group_id` mediumint(8) unsigned NOT NULL default '0',
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `group_leader` tinyint(1) unsigned NOT NULL default '0',
  `user_pending` tinyint(1) unsigned NOT NULL default '1',
  KEY `group_id` (`group_id`),
  KEY `user_id` (`user_id`),
  KEY `group_leader` (`group_leader`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_user_group` */

insert into `phpbb_user_group` values 

(1,1,0,0),

(2,2,0,0),

(4,2,0,0),

(5,2,1,0),

(6,3,0,0),

(6,4,0,0),

(6,5,0,0),

(6,6,0,0),

(6,7,0,0),

(6,8,0,0),

(6,9,0,0),

(6,10,0,0),

(6,11,0,0),

(6,12,0,0),

(6,13,0,0),

(6,14,0,0),

(6,15,0,0),

(6,16,0,0),

(6,17,0,0),

(6,18,0,0),

(6,19,0,0),

(6,20,0,0),

(6,21,0,0),

(6,22,0,0),

(6,23,0,0),

(6,24,0,0),

(6,25,0,0),

(6,26,0,0),

(6,27,0,0),

(6,28,0,0),

(6,29,0,0),

(6,30,0,0),

(6,31,0,0),

(6,32,0,0),

(6,33,0,0),

(6,34,0,0),

(6,35,0,0),

(6,36,0,0),

(6,37,0,0),

(6,38,0,0),

(6,39,0,0),

(6,40,0,0),

(6,41,0,0),

(6,42,0,0),

(6,43,0,0),

(6,44,0,0),

(6,45,0,0),

(6,46,0,0),

(6,47,0,0),

(6,48,0,0),

(6,49,0,0),

(6,50,0,0),

(6,51,0,0),

(6,52,0,0),

(2,53,0,0);

/*Table structure for table `phpbb_users` */

DROP TABLE IF EXISTS `phpbb_users`;

CREATE TABLE `phpbb_users` (
  `user_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_type` tinyint(2) NOT NULL default '0',
  `group_id` mediumint(8) unsigned NOT NULL default '3',
  `user_permissions` mediumtext collate utf8_bin NOT NULL,
  `user_perm_from` mediumint(8) unsigned NOT NULL default '0',
  `user_ip` varchar(40) collate utf8_bin NOT NULL default '',
  `user_regdate` int(11) unsigned NOT NULL default '0',
  `username` varchar(255) collate utf8_bin NOT NULL default '',
  `username_clean` varchar(255) collate utf8_bin NOT NULL default '',
  `user_password` varchar(40) collate utf8_bin NOT NULL default '',
  `user_passchg` int(11) unsigned NOT NULL default '0',
  `user_pass_convert` tinyint(1) unsigned NOT NULL default '0',
  `user_email` varchar(100) collate utf8_bin NOT NULL default '',
  `user_email_hash` bigint(20) NOT NULL default '0',
  `user_birthday` varchar(10) collate utf8_bin NOT NULL default '',
  `user_lastvisit` int(11) unsigned NOT NULL default '0',
  `user_lastmark` int(11) unsigned NOT NULL default '0',
  `user_lastpost_time` int(11) unsigned NOT NULL default '0',
  `user_lastpage` varchar(200) collate utf8_bin NOT NULL default '',
  `user_last_confirm_key` varchar(10) collate utf8_bin NOT NULL default '',
  `user_last_search` int(11) unsigned NOT NULL default '0',
  `user_warnings` tinyint(4) NOT NULL default '0',
  `user_last_warning` int(11) unsigned NOT NULL default '0',
  `user_login_attempts` tinyint(4) NOT NULL default '0',
  `user_inactive_reason` tinyint(2) NOT NULL default '0',
  `user_inactive_time` int(11) unsigned NOT NULL default '0',
  `user_posts` mediumint(8) unsigned NOT NULL default '0',
  `user_lang` varchar(30) collate utf8_bin NOT NULL default '',
  `user_timezone` decimal(5,2) NOT NULL default '0.00',
  `user_dst` tinyint(1) unsigned NOT NULL default '0',
  `user_dateformat` varchar(30) collate utf8_bin NOT NULL default 'd M Y H:i',
  `user_style` mediumint(8) unsigned NOT NULL default '0',
  `user_rank` mediumint(8) unsigned NOT NULL default '0',
  `user_colour` varchar(6) collate utf8_bin NOT NULL default '',
  `user_new_privmsg` int(4) NOT NULL default '0',
  `user_unread_privmsg` int(4) NOT NULL default '0',
  `user_last_privmsg` int(11) unsigned NOT NULL default '0',
  `user_message_rules` tinyint(1) unsigned NOT NULL default '0',
  `user_full_folder` int(11) NOT NULL default '-3',
  `user_emailtime` int(11) unsigned NOT NULL default '0',
  `user_topic_show_days` smallint(4) unsigned NOT NULL default '0',
  `user_topic_sortby_type` varchar(1) collate utf8_bin NOT NULL default 't',
  `user_topic_sortby_dir` varchar(1) collate utf8_bin NOT NULL default 'd',
  `user_post_show_days` smallint(4) unsigned NOT NULL default '0',
  `user_post_sortby_type` varchar(1) collate utf8_bin NOT NULL default 't',
  `user_post_sortby_dir` varchar(1) collate utf8_bin NOT NULL default 'a',
  `user_notify` tinyint(1) unsigned NOT NULL default '0',
  `user_notify_pm` tinyint(1) unsigned NOT NULL default '1',
  `user_notify_type` tinyint(4) NOT NULL default '0',
  `user_allow_pm` tinyint(1) unsigned NOT NULL default '1',
  `user_allow_viewonline` tinyint(1) unsigned NOT NULL default '1',
  `user_allow_viewemail` tinyint(1) unsigned NOT NULL default '1',
  `user_allow_massemail` tinyint(1) unsigned NOT NULL default '1',
  `user_options` int(11) unsigned NOT NULL default '895',
  `user_avatar` varchar(255) collate utf8_bin NOT NULL default '',
  `user_avatar_type` tinyint(2) NOT NULL default '0',
  `user_avatar_width` smallint(4) unsigned NOT NULL default '0',
  `user_avatar_height` smallint(4) unsigned NOT NULL default '0',
  `user_sig` mediumtext collate utf8_bin NOT NULL,
  `user_sig_bbcode_uid` varchar(8) collate utf8_bin NOT NULL default '',
  `user_sig_bbcode_bitfield` varchar(255) collate utf8_bin NOT NULL default '',
  `user_from` varchar(100) collate utf8_bin NOT NULL default '',
  `user_icq` varchar(15) collate utf8_bin NOT NULL default '',
  `user_aim` varchar(255) collate utf8_bin NOT NULL default '',
  `user_yim` varchar(255) collate utf8_bin NOT NULL default '',
  `user_msnm` varchar(255) collate utf8_bin NOT NULL default '',
  `user_jabber` varchar(255) collate utf8_bin NOT NULL default '',
  `user_website` varchar(200) collate utf8_bin NOT NULL default '',
  `user_occ` text collate utf8_bin NOT NULL,
  `user_interests` text collate utf8_bin NOT NULL,
  `user_actkey` varchar(32) collate utf8_bin NOT NULL default '',
  `user_newpasswd` varchar(40) collate utf8_bin NOT NULL default '',
  `user_form_salt` varchar(32) collate utf8_bin NOT NULL default '',
  PRIMARY KEY  (`user_id`),
  UNIQUE KEY `username_clean` (`username_clean`),
  KEY `user_birthday` (`user_birthday`),
  KEY `user_email_hash` (`user_email_hash`),
  KEY `user_type` (`user_type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_users` */

insert into `phpbb_users` values 

(1,2,1,'00000000003khra3nk\ni1cjyo000000\ni1cjyo000000',0,'',1236756255,'Anonymous','anonymous','',0,0,'',0,'',0,0,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'d M Y H:i',1,0,'',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','28dc664121b6a770'),

(2,3,5,'zik0zjzik0zjzik0xs\ni1cjyo000000\nzik0zjzhb2tc',0,'127.0.0.1',1236756255,'myadmin','myadmin','$H$9ZpCrRC1Tx9ZcvqRXiKBWS26PN1Y5b0',1236925246,0,'gourishanker@neevtech.com',139331622225,'',1241710972,0,1236756662,'adm/index.php?i=1','',1236756610,0,0,0,0,0,2,'en','0.00',0,'D M d, Y g:i a',1,1,'AA0000',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,1,895,'',0,0,0,'','','','','','','','','','','','','','','756a6ff868149f32'),

(3,2,6,'',0,'',1236756280,'AdsBot [Google]','adsbot [google]','',1236756280,0,'',0,'',0,1236756280,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','73a95db5beef2261'),

(4,2,6,'',0,'',1236756280,'Alexa [Bot]','alexa [bot]','',1236756280,0,'',0,'',0,1236756280,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','02f572dd72e426d6'),

(5,2,6,'',0,'',1236756280,'Alta Vista [Bot]','alta vista [bot]','',1236756280,0,'',0,'',0,1236756280,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','db14d2d4a16d6643'),

(6,2,6,'',0,'',1236756280,'Ask Jeeves [Bot]','ask jeeves [bot]','',1236756280,0,'',0,'',0,1236756280,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','07f744847f744def'),

(7,2,6,'',0,'',1236756281,'Baidu [Spider]','baidu [spider]','',1236756281,0,'',0,'',0,1236756281,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','96a54a56006f46a3'),

(8,2,6,'',0,'',1236756281,'Exabot [Bot]','exabot [bot]','',1236756281,0,'',0,'',0,1236756281,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','68b20e5e21983edf'),

(9,2,6,'',0,'',1236756281,'FAST Enterprise [Crawler]','fast enterprise [crawler]','',1236756281,0,'',0,'',0,1236756281,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','efa774ffa428c31c'),

(10,2,6,'',0,'',1236756281,'FAST WebCrawler [Crawler]','fast webcrawler [crawler]','',1236756281,0,'',0,'',0,1236756281,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','e7ef687183c8ba42'),

(11,2,6,'',0,'',1236756281,'Francis [Bot]','francis [bot]','',1236756281,0,'',0,'',0,1236756281,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','4c07a5fa1d3bc7eb'),

(12,2,6,'',0,'',1236756281,'Gigabot [Bot]','gigabot [bot]','',1236756281,0,'',0,'',0,1236756281,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','648c3fe64b5d53d5'),

(13,2,6,'',0,'',1236756281,'Google Adsense [Bot]','google adsense [bot]','',1236756281,0,'',0,'',0,1236756281,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','4d03c1596a173a93'),

(14,2,6,'',0,'',1236756281,'Google Desktop','google desktop','',1236756281,0,'',0,'',0,1236756281,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','6d5a85a730cbb4e0'),

(15,2,6,'',0,'',1236756281,'Google Feedfetcher','google feedfetcher','',1236756281,0,'',0,'',0,1236756281,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','9ce9306b55c25bda'),

(16,2,6,'',0,'',1236756282,'Google [Bot]','google [bot]','',1236756282,0,'',0,'',0,1236756282,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','5b83bd6bb357c5ce'),

(17,2,6,'',0,'',1236756282,'Heise IT-Markt [Crawler]','heise it-markt [crawler]','',1236756282,0,'',0,'',0,1236756282,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','010edd325aeb7df8'),

(18,2,6,'',0,'',1236756282,'Heritrix [Crawler]','heritrix [crawler]','',1236756282,0,'',0,'',0,1236756282,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','2d812ed6a4422e2c'),

(19,2,6,'',0,'',1236756282,'IBM Research [Bot]','ibm research [bot]','',1236756282,0,'',0,'',0,1236756282,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','babeb6b4825fa955'),

(20,2,6,'',0,'',1236756282,'ICCrawler - ICjobs','iccrawler - icjobs','',1236756282,0,'',0,'',0,1236756282,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','321d02e7fd5f7e09'),

(21,2,6,'',0,'',1236756282,'ichiro [Crawler]','ichiro [crawler]','',1236756282,0,'',0,'',0,1236756282,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','2fe42076d41a27e4'),

(22,2,6,'',0,'',1236756282,'Majestic-12 [Bot]','majestic-12 [bot]','',1236756282,0,'',0,'',0,1236756282,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','915f5859c05eeb01'),

(23,2,6,'',0,'',1236756282,'Metager [Bot]','metager [bot]','',1236756282,0,'',0,'',0,1236756282,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','1ba0f4b8a45329f9'),

(24,2,6,'',0,'',1236756282,'MSN NewsBlogs','msn newsblogs','',1236756282,0,'',0,'',0,1236756282,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','24539f5d8f07cc56'),

(25,2,6,'',0,'',1236756282,'MSN [Bot]','msn [bot]','',1236756282,0,'',0,'',0,1236756282,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','1318c675b98092ad'),

(26,2,6,'',0,'',1236756283,'MSNbot Media','msnbot media','',1236756283,0,'',0,'',0,1236756283,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','588fc6cbd0dc8cb1'),

(27,2,6,'',0,'',1236756283,'NG-Search [Bot]','ng-search [bot]','',1236756283,0,'',0,'',0,1236756283,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','693cd6c54b56d34b'),

(28,2,6,'',0,'',1236756283,'Nutch [Bot]','nutch [bot]','',1236756283,0,'',0,'',0,1236756283,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','4c30b4aac105ffef'),

(29,2,6,'',0,'',1236756283,'Nutch/CVS [Bot]','nutch/cvs [bot]','',1236756283,0,'',0,'',0,1236756283,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','5dd7345812508aac'),

(30,2,6,'',0,'',1236756283,'OmniExplorer [Bot]','omniexplorer [bot]','',1236756283,0,'',0,'',0,1236756283,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','e57c15bcafd76101'),

(31,2,6,'',0,'',1236756283,'Online link [Validator]','online link [validator]','',1236756283,0,'',0,'',0,1236756283,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','4a689ce53afc7b63'),

(32,2,6,'',0,'',1236756283,'psbot [Picsearch]','psbot [picsearch]','',1236756283,0,'',0,'',0,1236756283,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','2cc46c83ced7e838'),

(33,2,6,'',0,'',1236756283,'Seekport [Bot]','seekport [bot]','',1236756283,0,'',0,'',0,1236756283,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','18a6787c2e78c573'),

(34,2,6,'',0,'',1236756283,'Sensis [Crawler]','sensis [crawler]','',1236756283,0,'',0,'',0,1236756283,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','7305b5308f060a8c'),

(35,2,6,'',0,'',1236756283,'SEO Crawler','seo crawler','',1236756283,0,'',0,'',0,1236756283,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','8d4d384e1c82f891'),

(36,2,6,'',0,'',1236756284,'Seoma [Crawler]','seoma [crawler]','',1236756284,0,'',0,'',0,1236756284,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','163428cadfbaded6'),

(37,2,6,'',0,'',1236756284,'SEOSearch [Crawler]','seosearch [crawler]','',1236756284,0,'',0,'',0,1236756284,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','3675ed78bae450fb'),

(38,2,6,'',0,'',1236756284,'Snappy [Bot]','snappy [bot]','',1236756284,0,'',0,'',0,1236756284,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','f6b5878e0570092c'),

(39,2,6,'',0,'',1236756284,'Steeler [Crawler]','steeler [crawler]','',1236756284,0,'',0,'',0,1236756284,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','3d728828647968d6'),

(40,2,6,'',0,'',1236756284,'Synoo [Bot]','synoo [bot]','',1236756284,0,'',0,'',0,1236756284,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','9b677927d0310040'),

(41,2,6,'',0,'',1236756284,'Telekom [Bot]','telekom [bot]','',1236756284,0,'',0,'',0,1236756284,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','75af24504ea7350f'),

(42,2,6,'',0,'',1236756284,'TurnitinBot [Bot]','turnitinbot [bot]','',1236756284,0,'',0,'',0,1236756284,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','809b20f7c25c36bc'),

(43,2,6,'',0,'',1236756284,'Voyager [Bot]','voyager [bot]','',1236756284,0,'',0,'',0,1236756284,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','f5504881b5fab33e'),

(44,2,6,'',0,'',1236756284,'W3 [Sitesearch]','w3 [sitesearch]','',1236756284,0,'',0,'',0,1236756284,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','fee6d2e211d520b1'),

(45,2,6,'',0,'',1236756285,'W3C [Linkcheck]','w3c [linkcheck]','',1236756285,0,'',0,'',0,1236756285,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','4ac174badb45995e'),

(46,2,6,'',0,'',1236756285,'W3C [Validator]','w3c [validator]','',1236756285,0,'',0,'',0,1236756285,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','97f37d9b23865951'),

(47,2,6,'',0,'',1236756285,'WiseNut [Bot]','wisenut [bot]','',1236756285,0,'',0,'',0,1236756285,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','13c9df7b104f7f2f'),

(48,2,6,'',0,'',1236756285,'YaCy [Bot]','yacy [bot]','',1236756285,0,'',0,'',0,1236756285,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','3328033457a4d44b'),

(49,2,6,'',0,'',1236756285,'Yahoo MMCrawler [Bot]','yahoo mmcrawler [bot]','',1236756285,0,'',0,'',0,1236756285,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','24e3ba0f2eebaf81'),

(50,2,6,'',0,'',1236756285,'Yahoo Slurp [Bot]','yahoo slurp [bot]','',1236756285,0,'',0,'',0,1236756285,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','f0c7a2dbaddb17bc'),

(51,2,6,'',0,'',1236756285,'Yahoo [Bot]','yahoo [bot]','',1236756285,0,'',0,'',0,1236756285,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','77e0dd4326bb3b5a'),

(52,2,6,'',0,'',1236756285,'YahooSeeker [Bot]','yahooseeker [bot]','',1236756285,0,'',0,'',0,1236756285,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',1,0,'9E8DA7',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,0,895,'',0,0,0,'','','','','','','','','','','','','','','fcaea8a9be019122'),

(53,0,2,'000000000073zik0xs\ni1cjyo000000\nqlc4pi000000',0,'127.0.0.1',1236756740,'bajaj','bajajbb','$H$9jZSvqvH66ER9CFvOXUrFi1pdmxvuq.',1236756740,0,'gs.bajaj@yahoo.com',-26217069918,'31- 1-1985',1241711106,1236756740,1236857079,'index.php','',0,0,0,0,0,0,2,'en','5.50',0,'D M d, Y g:i a',1,0,'',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,2,1,1,1,1,895,'',0,0,0,'','','','','','','','','','','','','','','83d8e47df10e907e'),

(54,0,2,'',0,'::1',1243339161,'animesh','animesh','',0,0,'animesh@gmail.com',0,'',0,0,0,'','',0,0,0,0,0,0,0,'en','0.00',0,'D M d, Y g:i a',0,0,'',0,0,0,0,-3,0,0,'t','d',0,'t','a',0,1,0,1,1,1,1,895,'',0,0,0,'','','','','','','','','','','','','','','');

/*Table structure for table `phpbb_warnings` */

DROP TABLE IF EXISTS `phpbb_warnings`;

CREATE TABLE `phpbb_warnings` (
  `warning_id` mediumint(8) unsigned NOT NULL auto_increment,
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `post_id` mediumint(8) unsigned NOT NULL default '0',
  `log_id` mediumint(8) unsigned NOT NULL default '0',
  `warning_time` int(11) unsigned NOT NULL default '0',
  PRIMARY KEY  (`warning_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_warnings` */

/*Table structure for table `phpbb_words` */

DROP TABLE IF EXISTS `phpbb_words`;

CREATE TABLE `phpbb_words` (
  `word_id` mediumint(8) unsigned NOT NULL auto_increment,
  `word` varchar(255) collate utf8_bin NOT NULL default '',
  `replacement` varchar(255) collate utf8_bin NOT NULL default '',
  PRIMARY KEY  (`word_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_words` */

/*Table structure for table `phpbb_zebra` */

DROP TABLE IF EXISTS `phpbb_zebra`;

CREATE TABLE `phpbb_zebra` (
  `user_id` mediumint(8) unsigned NOT NULL default '0',
  `zebra_id` mediumint(8) unsigned NOT NULL default '0',
  `friend` tinyint(1) unsigned NOT NULL default '0',
  `foe` tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (`user_id`,`zebra_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

/*Data for the table `phpbb_zebra` */

insert into `phpbb_zebra` values 

(53,2,1,0);
