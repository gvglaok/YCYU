/*
Navicat MySQL Data Transfer

Source Server         : E_Mysql
Source Server Version : 50621
Source Host           : localhost:3306
Source Database       : ycyu

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2015-09-11 17:31:58
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ycyu_user
-- ----------------------------
DROP TABLE IF EXISTS `ycyu_user`;
CREATE TABLE `ycyu_user` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `cName` varchar(255) DEFAULT NULL,
  `cKey` varchar(255) DEFAULT NULL,
  `cTime` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ycyu_user
-- ----------------------------
