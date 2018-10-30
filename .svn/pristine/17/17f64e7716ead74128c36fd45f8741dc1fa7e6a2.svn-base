/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : 71cloud

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-09-04 16:02:31
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for c_admin
-- ----------------------------
DROP TABLE IF EXISTS `c_admin`;
CREATE TABLE `c_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(32) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT '用户名',
  `admin_password` varchar(32) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT '密码',
  `ctime` int(30) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='系统管理员表';

-- ----------------------------
-- Records of c_admin
-- ----------------------------

-- ----------------------------
-- Table structure for c_administrative
-- ----------------------------
DROP TABLE IF EXISTS `c_administrative`;
CREATE TABLE `c_administrative` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `strative_name` varchar(30) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT '行政名称',
  `pid` int(10) DEFAULT NULL COMMENT '父级id',
  `branch_id` int(10) DEFAULT NULL COMMENT 'branch(支部)表id',
  `ctime` int(30) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='行政机构表';

-- ----------------------------
-- Records of c_administrative
-- ----------------------------

-- ----------------------------
-- Table structure for c_allocate
-- ----------------------------
DROP TABLE IF EXISTS `c_allocate`;
CREATE TABLE `c_allocate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `branch_id` int(10) DEFAULT NULL COMMENT '支部id',
  `Permissions_id` int(10) DEFAULT NULL COMMENT '权限列表id',
  `ctime` int(30) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='权限分配表';

-- ----------------------------
-- Records of c_allocate
-- ----------------------------

-- ----------------------------
-- Table structure for c_branch
-- ----------------------------
DROP TABLE IF EXISTS `c_branch`;
CREATE TABLE `c_branch` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Permissions_role_id` int(10) DEFAULT NULL COMMENT 'Permissions_rolers（权限-角色）表id',
  `branch_name` varchar(40) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT '支部名称',
  `pid` int(10) DEFAULT NULL COMMENT '父级id',
  `logo` text COLLATE utf8_general_mysql500_ci,
  `phone` int(20) DEFAULT NULL COMMENT '手机号联系方式',
  `public_id` int(10) DEFAULT NULL COMMENT '公众号id',
  `Administrative_id` int(10) DEFAULT NULL COMMENT 'Administrative（行政机构）表id',
  `ctime` int(30) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='支部表';

-- ----------------------------
-- Records of c_branch
-- ----------------------------

-- ----------------------------
-- Table structure for c_branch_admin
-- ----------------------------
DROP TABLE IF EXISTS `c_branch_admin`;
CREATE TABLE `c_branch_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bradmin_username` int(32) DEFAULT NULL COMMENT '用户名',
  `bradmin_password` int(32) DEFAULT NULL COMMENT '密码',
  `branch_id` int(10) DEFAULT NULL COMMENT 'branch(支部)表id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='支部管理员表';

-- ----------------------------
-- Records of c_branch_admin
-- ----------------------------

-- ----------------------------
-- Table structure for c_permissions
-- ----------------------------
DROP TABLE IF EXISTS `c_permissions`;
CREATE TABLE `c_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pe_name` varchar(20) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT '权限名称',
  `module` varchar(30) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT '模块名称',
  `controller` varchar(30) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT '控制器名称',
  `operation` varchar(30) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT '操作名称',
  `price` float(10,2) DEFAULT NULL COMMENT '价格',
  `pid` int(10) DEFAULT NULL COMMENT '父级id',
  `sort` tinyint(2) DEFAULT '0' COMMENT '排序',
  `ctime` int(30) DEFAULT NULL COMMENT '创建时间',
  `hidden` int(2) DEFAULT NULL COMMENT '是否隐藏（0代表不隐藏，1代表隐藏）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='权限列表';

-- ----------------------------
-- Records of c_permissions
-- ----------------------------

-- ----------------------------
-- Table structure for c_permissions_role
-- ----------------------------
DROP TABLE IF EXISTS `c_permissions_role`;
CREATE TABLE `c_permissions_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Permissions_id` int(10) DEFAULT NULL COMMENT '权限id',
  `role_id` int(10) DEFAULT NULL COMMENT '角色id',
  `sort` tinyint(2) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='权限—角色表';

-- ----------------------------
-- Records of c_permissions_role
-- ----------------------------

-- ----------------------------
-- Table structure for c_public
-- ----------------------------
DROP TABLE IF EXISTS `c_public`;
CREATE TABLE `c_public` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `openid` int(30) DEFAULT NULL COMMENT '微信的openid',
  `branch_id` int(10) DEFAULT NULL COMMENT '支部id',
  `public_name` varchar(10) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT '公众号名称',
  `public_menu` text COLLATE utf8_general_mysql500_ci COMMENT '公众号菜单栏',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='公众号表';

-- ----------------------------
-- Records of c_public
-- ----------------------------

-- ----------------------------
-- Table structure for c_role
-- ----------------------------
DROP TABLE IF EXISTS `c_role`;
CREATE TABLE `c_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(20) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT '角色名称',
  `ctime` int(30) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='角色表';

-- ----------------------------
-- Records of c_role
-- ----------------------------

-- ----------------------------
-- Table structure for c_user
-- ----------------------------
DROP TABLE IF EXISTS `c_user`;
CREATE TABLE `c_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `us_username` int(32) DEFAULT NULL COMMENT '用户名称',
  `us_password` int(32) DEFAULT NULL COMMENT '用户密码',
  `party_member` int(2) DEFAULT NULL COMMENT '是否是党员（0代表不是，1代表是党员）',
  `ctime` int(30) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='用户表';

-- ----------------------------
-- Records of c_user
-- ----------------------------
SET FOREIGN_KEY_CHECKS=1;
