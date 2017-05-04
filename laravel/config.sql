/*
Navicat MySQL Data Transfer

Source Server         : lianjie
Source Server Version : 50711
Source Host           : localhost:3306
Source Database       : eshop

Target Server Type    : MYSQL
Target Server Version : 50711
File Encoding         : 65001

Date: 2017-04-19 20:24:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for config
-- ----------------------------
DROP TABLE IF EXISTS `config`;
CREATE TABLE `config` (
  `email` varchar(255) NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1',
  `copy` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `id` tinyint(3) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of config
-- ----------------------------
INSERT INTO `config` VALUES ('98434865@qq.com', '1', '李甲天和王路的网站a', '14923934431896.jpg', '买茶网a', '1');
