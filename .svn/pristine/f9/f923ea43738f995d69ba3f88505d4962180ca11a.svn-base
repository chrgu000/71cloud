/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : 71cloud

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-10-11 16:03:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for c_user
-- ----------------------------
DROP TABLE IF EXISTS `c_user`;
CREATE TABLE `c_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) DEFAULT NULL COMMENT '用户名称',
  `password` varchar(32) DEFAULT NULL COMMENT '用户密码',
  `ctime` int(30) DEFAULT NULL COMMENT '创建时间',
  `token` varchar(255) DEFAULT NULL COMMENT '用户的token',
  `company` varchar(255) DEFAULT NULL COMMENT '所属公司',
  `last_time` int(30) DEFAULT NULL,
  `tel` char(11) DEFAULT NULL,
  `status` int(2) DEFAULT NULL COMMENT '账号状态（0禁用，1正常）',
  `unionid` varchar(255) DEFAULT NULL COMMENT 'unionid',
  `openid` varchar(255) DEFAULT NULL,
  `face` varchar(255) DEFAULT NULL COMMENT '头像',
  `party_status` int(2) DEFAULT NULL COMMENT '党员状态（1代表是党员，2代表是群众）',
  `branchs_id` int(10) DEFAULT NULL COMMENT '子支部id',
  `nickname` varchar(255) DEFAULT NULL COMMENT '微信用户昵称',
  `weixin_id` int(10) DEFAULT NULL COMMENT '微信的id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of c_user
-- ----------------------------
INSERT INTO `c_user` VALUES ('1', '71cloud', '383eafdd5d7d6221612fe7e10cf703f0', '0', '', '', '0', '15927668465', '1', null, null, null, null, null, '', null);
INSERT INTO `c_user` VALUES ('3', 'mm', '', '0', '', '', '0', '', null, null, '0', null, null, null, 'CURD', null);
INSERT INTO `c_user` VALUES ('4', 'cc', '', '0', '', '', '0', '', null, null, 'oecaE0ii_-oWQHrUB8NF5kzV7HZA', null, null, null, 'CURD', null);
SET FOREIGN_KEY_CHECKS=1;
