/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : 71cloud

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-09-07 18:00:49
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
  `ctime` int(11) NOT NULL COMMENT '创建时间',
  `branch_admin_id` int(10) NOT NULL COMMENT '支部管理员id',
  `utime` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='系统管理员表';

-- ----------------------------
-- Records of c_admin
-- ----------------------------
INSERT INTO `c_admin` VALUES ('1', 'admin', '594a554f2023ee1899f439eeba721955', '0', '0', '2018');

-- ----------------------------
-- Table structure for c_administrative
-- ----------------------------
DROP TABLE IF EXISTS `c_administrative`;
CREATE TABLE `c_administrative` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `adminstr_name` varchar(30) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT '行政名称',
  `pid` int(10) NOT NULL COMMENT '父级id',
  `branch_id` int(10) NOT NULL COMMENT 'branch(支部)表id',
  `ctime` int(30) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='行政机构表';

-- ----------------------------
-- Records of c_administrative
-- ----------------------------

-- ----------------------------
-- Table structure for c_administrative_s
-- ----------------------------
DROP TABLE IF EXISTS `c_administrative_s`;
CREATE TABLE `c_administrative_s` (
  `id` int(11) NOT NULL,
  `xz_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '子行政机构名称',
  `phone` int(11) NOT NULL,
  `users_id` int(11) NOT NULL COMMENT '子级用户id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='子行政机构表';

-- ----------------------------
-- Records of c_administrative_s
-- ----------------------------
INSERT INTO `c_administrative_s` VALUES ('0', '', '0', '0');

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
-- Table structure for c_auth
-- ----------------------------
DROP TABLE IF EXISTS `c_auth`;
CREATE TABLE `c_auth` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `auth_name` varchar(20) NOT NULL COMMENT '权限名称',
  `pid` smallint(6) unsigned NOT NULL COMMENT '父id',
  `auth_c` varchar(32) NOT NULL DEFAULT '' COMMENT '控制器',
  `auth_a` varchar(32) NOT NULL DEFAULT '' COMMENT '操作方法',
  `is_nav` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否作为菜单显示 1是 0否',
  `ctime` int(11) unsigned NOT NULL COMMENT '创建时间',
  `utime` int(11) unsigned NOT NULL COMMENT '修改时间',
  `dtime` int(11) unsigned NOT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='子级权限表';

-- ----------------------------
-- Records of c_auth
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
-- Table structure for c_branchs
-- ----------------------------
DROP TABLE IF EXISTS `c_branchs`;
CREATE TABLE `c_branchs` (
  `id` int(11) NOT NULL,
  `branchs_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL COMMENT '子党支部名称',
  `phone` int(11) NOT NULL COMMENT '党支部电话',
  `pid` int(11) NOT NULL COMMENT '父id',
  `roles_id` int(10) NOT NULL COMMENT '子角色表id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='子党支部表';

-- ----------------------------
-- Records of c_branchs
-- ----------------------------

-- ----------------------------
-- Table structure for c_branch_admin
-- ----------------------------
DROP TABLE IF EXISTS `c_branch_admin`;
CREATE TABLE `c_branch_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bradmin_username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '管理员用户名',
  `bradmin_password` char(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '管理员密码',
  `branchs_id` int(11) NOT NULL COMMENT 'branch(zi支部)表id',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '账号状态，0表示禁用，1表示启用',
  `phone` char(11) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT '手机号',
  `admin_id` int(10) NOT NULL COMMENT '系统管理员(admin)表id',
  `ctime` int(20) NOT NULL COMMENT '创建时间',
  `utime` int(20) NOT NULL COMMENT '修改时间',
  `dtime` int(20) NOT NULL COMMENT '删除时间',
  `bradmin_role` varchar(50) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT '支部管理员账号角色',
  `branch_company` varchar(30) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT '公司名称',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='支部管理员表';

-- ----------------------------
-- Records of c_branch_admin
-- ----------------------------
INSERT INTO `c_branch_admin` VALUES ('1', 'admin', '383eafdd5d7d6221612fe7e10cf703f0', '0', '1', '13245678945', '1', '1536300390', '0', '0', '总支部管理员', null);
INSERT INTO `c_branch_admin` VALUES ('2', '1111', '5bb2efb7dccbf909033baff825103e68', '0', '0', '13245678945', '1', '1536313160', '0', '0', '总支部管理员', '公司');

-- ----------------------------
-- Table structure for c_permissions
-- ----------------------------
DROP TABLE IF EXISTS `c_permissions`;
CREATE TABLE `c_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `per_name` varchar(20) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT '权限名称',
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
  `Permissions_id` int(10) NOT NULL COMMENT '权限id',
  `role_id` int(10) NOT NULL COMMENT '角色id',
  `sort` tinyint(2) NOT NULL COMMENT '排序',
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
  `public_menu` text COLLATE utf8_general_mysql500_ci NOT NULL COMMENT '公众号菜单栏',
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
  `name` varchar(20) COLLATE utf8_general_mysql500_ci DEFAULT NULL COMMENT '角色名称',
  `ctime` int(30) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='角色表';

-- ----------------------------
-- Records of c_role
-- ----------------------------

-- ----------------------------
-- Table structure for c_roles
-- ----------------------------
DROP TABLE IF EXISTS `c_roles`;
CREATE TABLE `c_roles` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `roles_name` varchar(20) NOT NULL DEFAULT '' COMMENT '角色/用户组名称',
  `roles_auth_ids` varchar(128) NOT NULL DEFAULT '' COMMENT '权限ids,1,2,5，权限表中的主键集合',
  `create_time` int(11) unsigned DEFAULT NULL,
  `update_time` int(11) unsigned DEFAULT NULL,
  `delete_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='子级角色表';

-- ----------------------------
-- Records of c_roles
-- ----------------------------

-- ----------------------------
-- Table structure for c_user
-- ----------------------------
DROP TABLE IF EXISTS `c_user`;
CREATE TABLE `c_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) COLLATE utf8_general_mysql500_ci NOT NULL COMMENT '用户名称',
  `password` int(32) NOT NULL COMMENT '用户密码',
  `party_member` int(2) NOT NULL COMMENT '是否是党员（0代表不是，1代表是党员）',
  `ctime` int(30) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='用户表';

-- ----------------------------
-- Records of c_user
-- ----------------------------

-- ----------------------------
-- Table structure for c_users
-- ----------------------------
DROP TABLE IF EXISTS `c_users`;
CREATE TABLE `c_users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `usersname` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL COMMENT '用户名称',
  `password` int(32) NOT NULL COMMENT '用户密码',
  `party_member` int(2) NOT NULL COMMENT '是否是党员（0代表不是，1代表是党员）',
  `ctime` int(30) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_mysql500_ci COMMENT='子级用户表';

-- ----------------------------
-- Records of c_users
-- ----------------------------
SET FOREIGN_KEY_CHECKS=1;
