
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- user
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `user`;


CREATE TABLE `user`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(50),
	`password` VARCHAR(50),
	`enrolment` INTEGER(20),
	`enrolFlag` VARCHAR(5),
	`roll` INTEGER(20),
	`rollFlag` VARCHAR(5),
	`graduationyear` INTEGER(4),
	`graduationyearFlag` VARCHAR(5),
	`branch_id` INTEGER,
	`branchFlag` VARCHAR(5),
	`degree_id` INTEGER,
	`degreeFlag` VARCHAR(5),
	`usertype` VARCHAR(5),
	`tempemail` VARCHAR(50),
	`currentlyat` VARCHAR(50),
	`currentlyatFlag` VARCHAR(5),
	`islocked` VARCHAR(1),
	`isinvited` VARCHAR(1),
	`authcode` VARCHAR(1),
	`lastlogin` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `user_FI_1` (`branch_id`),
	CONSTRAINT `user_FK_1`
		FOREIGN KEY (`branch_id`)
		REFERENCES `branch` (`id`),
	INDEX `user_FI_2` (`degree_id`),
	CONSTRAINT `user_FK_2`
		FOREIGN KEY (`degree_id`)
		REFERENCES `degree` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- role
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `role`;


CREATE TABLE `role`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50),
	`description` TEXT,
	PRIMARY KEY (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- userRole
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `userRole`;


CREATE TABLE `userRole`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER,
	`role_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `userRole_FI_1` (`user_id`),
	CONSTRAINT `userRole_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`),
	INDEX `userRole_FI_2` (`role_id`),
	CONSTRAINT `userRole_FK_2`
		FOREIGN KEY (`role_id`)
		REFERENCES `role` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- personal
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `personal`;


CREATE TABLE `personal`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER,
	`image` VARCHAR(200),
	`imageFlag` VARCHAR(5),
	`salutation` VARCHAR(5),
	`firstname` VARCHAR(15),
	`firstnameFlag` VARCHAR(5),
	`middlename` VARCHAR(15),
	`middlenameFlag` VARCHAR(5),
	`lastname` VARCHAR(15),
	`lastnameFlag` VARCHAR(5),
	`maidenname` VARCHAR(20),
	`maidennameFlag` VARCHAR(5),
	`itbhuname` VARCHAR(20),
	`itbhunameFlag` VARCHAR(5),
	`gender` VARCHAR(10),
	`genderFlag` VARCHAR(5),
	`dob` DATE,
	`dobFlag` VARCHAR(5),
	`maritalstatus` VARCHAR(10),
	`maritalstatusFlag` VARCHAR(5),
	`email` VARCHAR(50),
	`emailFlag` VARCHAR(5),
	`website` VARCHAR(100),
	`websiteFlag` VARCHAR(5),
	`linkedin` VARCHAR(100),
	`linkedinFlag` VARCHAR(5),
	`hobbies` VARCHAR(100),
	`hobbiesFlag` VARCHAR(5),
	PRIMARY KEY (`id`),
	INDEX `personal_FI_1` (`user_id`),
	CONSTRAINT `personal_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- address
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `address`;


CREATE TABLE `address`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER,
	`address` VARCHAR(150),
	`addressFlag` VARCHAR(5),
	`city` VARCHAR(50),
	`cityFlag` VARCHAR(5),
	`state` VARCHAR(50),
	`stateFlag` VARCHAR(5),
	`country` VARCHAR(25),
	`countryFlag` VARCHAR(5),
	`postalcode` VARCHAR(10),
	`postalcodeFlag` VARCHAR(5),
	`phone1` VARCHAR(20),
	`phone1Flag` VARCHAR(5),
	`phone2` VARCHAR(20),
	`phone2Flag` VARCHAR(5),
	`cellphone` VARCHAR(20),
	`cellphoneFlag` VARCHAR(5),
	`fax` VARCHAR(20),
	`faxFlag` VARCHAR(5),
	`type` VARCHAR(5),
	PRIMARY KEY (`id`),
	INDEX `address_FI_1` (`user_id`),
	CONSTRAINT `address_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- professional
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `professional`;


CREATE TABLE `professional`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER,
	`employer` VARCHAR(100),
	`employerFlag` VARCHAR(5),
	`position` VARCHAR(100),
	`positionFlag` VARCHAR(5),
	`from` DATE,
	`to` DATE,
	PRIMARY KEY (`id`),
	INDEX `professional_FI_1` (`user_id`),
	CONSTRAINT `professional_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- family
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `family`;


CREATE TABLE `family`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER,
	`dom` DATE,
	`domFlag` VARCHAR(5),
	`spousename` VARCHAR(100),
	`spousenameFlag` VARCHAR(5),
	`spouseemployer` VARCHAR(100),
	`spouseemployerFlag` VARCHAR(5),
	`spousetitle` VARCHAR(100),
	`spousetitleFlag` VARCHAR(5),
	`children` VARCHAR(2),
	`childrenFlag` VARCHAR(5),
	PRIMARY KEY (`id`),
	INDEX `family_FI_1` (`user_id`),
	CONSTRAINT `family_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- academic
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `academic`;


CREATE TABLE `academic`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER,
	`degree` VARCHAR(50),
	`degreeFlag` VARCHAR(5),
	`year` INTEGER(4),
	`yearFlag` VARCHAR(5),
	`department` VARCHAR(50),
	`departmentFlag` VARCHAR(5),
	`major` VARCHAR(50),
	`majorFlag` VARCHAR(5),
	`institute` VARCHAR(100),
	`instituteFlag` VARCHAR(5),
	PRIMARY KEY (`id`),
	INDEX `academic_FI_1` (`user_id`),
	CONSTRAINT `academic_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- degree
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `degree`;


CREATE TABLE `degree`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50),
	PRIMARY KEY (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- branch
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `branch`;


CREATE TABLE `branch`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50),
	`code` VARCHAR(3),
	PRIMARY KEY (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- chapter
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `chapter`;


CREATE TABLE `chapter`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50),
	PRIMARY KEY (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- region
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `region`;


CREATE TABLE `region`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50),
	PRIMARY KEY (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- chapterRegion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `chapterRegion`;


CREATE TABLE `chapterRegion`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`chapter_id` INTEGER,
	`region_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `chapterRegion_FI_1` (`chapter_id`),
	CONSTRAINT `chapterRegion_FK_1`
		FOREIGN KEY (`chapter_id`)
		REFERENCES `chapter` (`id`),
	INDEX `chapterRegion_FI_2` (`region_id`),
	CONSTRAINT `chapterRegion_FK_2`
		FOREIGN KEY (`region_id`)
		REFERENCES `region` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- userChapterRegion
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `userChapterRegion`;


CREATE TABLE `userChapterRegion`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER,
	`chapterRegion_id` INTEGER,
	`other` VARCHAR(50),
	`ucrFlag` VARCHAR(5),
	PRIMARY KEY (`id`),
	INDEX `userChapterRegion_FI_1` (`user_id`),
	CONSTRAINT `userChapterRegion_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`),
	INDEX `userChapterRegion_FI_2` (`chapterRegion_id`),
	CONSTRAINT `userChapterRegion_FK_2`
		FOREIGN KEY (`chapterRegion_id`)
		REFERENCES `chapterRegion` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- badge
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `badge`;


CREATE TABLE `badge`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50),
	`image` VARCHAR(200),
	PRIMARY KEY (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- userBadge
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `userBadge`;


CREATE TABLE `userBadge`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER,
	`badge_id` INTEGER,
	`badgeFlag` VARCHAR(5),
	PRIMARY KEY (`id`),
	INDEX `userBadge_FI_1` (`user_id`),
	CONSTRAINT `userBadge_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`),
	INDEX `userBadge_FI_2` (`badge_id`),
	CONSTRAINT `userBadge_FK_2`
		FOREIGN KEY (`badge_id`)
		REFERENCES `badge` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- lorFields
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `lorFields`;


CREATE TABLE `lorFields`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`fields` VARCHAR(50),
	PRIMARY KEY (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- lorValues
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `lorValues`;


CREATE TABLE `lorValues`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`lorFields_id` INTEGER,
	`data` VARCHAR(200),
	`user_id` INTEGER,
	`created_at` DATETIME,
	PRIMARY KEY (`id`),
	INDEX `lorValues_FI_1` (`lorFields_id`),
	CONSTRAINT `lorValues_FK_1`
		FOREIGN KEY (`lorFields_id`)
		REFERENCES `lorFields` (`id`),
	INDEX `lorValues_FI_2` (`user_id`),
	CONSTRAINT `lorValues_FK_2`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- lorUser
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `lorUser`;


CREATE TABLE `lorUser`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`lorValues_id` INTEGER,
	`user_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `lorUser_FI_1` (`lorValues_id`),
	CONSTRAINT `lorUser_FK_1`
		FOREIGN KEY (`lorValues_id`)
		REFERENCES `lorValues` (`id`),
	INDEX `lorUser_FI_2` (`user_id`),
	CONSTRAINT `lorUser_FK_2`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- mag
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `mag`;


CREATE TABLE `mag`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER,
	`mailinggroup` VARCHAR(100),
	`year` INTEGER(4),
	`branch` VARCHAR(50),
	`moderatoremail` VARCHAR(50),
	`details` VARCHAR(300),
	PRIMARY KEY (`id`),
	INDEX `mag_FI_1` (`user_id`),
	CONSTRAINT `mag_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- pepPage
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pepPage`;


CREATE TABLE `pepPage`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`tabname` VARCHAR(25),
	`content` TEXT,
	`sequence` INTEGER(2),
	`created_at` DATETIME,
	`updated_at` DATETIME,
	PRIMARY KEY (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- pepUser
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `pepUser`;


CREATE TABLE `pepUser`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER,
	`pepPage_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `pepUser_FI_1` (`user_id`),
	CONSTRAINT `pepUser_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`),
	INDEX `pepUser_FI_2` (`pepPage_id`),
	CONSTRAINT `pepUser_FK_2`
		FOREIGN KEY (`pepPage_id`)
		REFERENCES `pepPage` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- country
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `country`;


CREATE TABLE `country`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(25),
	PRIMARY KEY (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- claiminfo
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `claiminfo`;


CREATE TABLE `claiminfo`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER,
	`roll` VARCHAR(10),
	`hawa` VARCHAR(10),
	`city` VARCHAR(25),
	`hod` VARCHAR(25),
	`director` VARCHAR(25),
	`teacher` VARCHAR(25),
	`lankashop` VARCHAR(25),
	`other` VARCHAR(200),
	`dusername` VARCHAR(25),
	PRIMARY KEY (`id`),
	INDEX `claiminfo_FI_1` (`user_id`),
	CONSTRAINT `claiminfo_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- friend
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `friend`;


CREATE TABLE `friend`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER,
	`status` VARCHAR(1),
	PRIMARY KEY (`id`),
	INDEX `friend_FI_1` (`user_id`),
	CONSTRAINT `friend_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`)
)Type=MyISAM;

#-----------------------------------------------------------------------------
#-- userfriend
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `userfriend`;


CREATE TABLE `userfriend`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user_id` INTEGER,
	`friend_id` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `userfriend_FI_1` (`user_id`),
	CONSTRAINT `userfriend_FK_1`
		FOREIGN KEY (`user_id`)
		REFERENCES `user` (`id`),
	INDEX `userfriend_FI_2` (`friend_id`),
	CONSTRAINT `userfriend_FK_2`
		FOREIGN KEY (`friend_id`)
		REFERENCES `friend` (`id`)
)Type=MyISAM;

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
