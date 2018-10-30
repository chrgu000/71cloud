/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : 71cloud

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2018-09-20 13:33:28
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for c_admin
-- ----------------------------
DROP TABLE IF EXISTS `c_admin`;
CREATE TABLE `c_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(32) NOT NULL COMMENT '用户名',
  `admin_password` varchar(32) NOT NULL COMMENT '密码',
  `ctime` int(11) NOT NULL COMMENT '创建时间',
  `branch_admin_id` int(10) NOT NULL COMMENT '支部管理员id',
  `utime` int(11) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COMMENT='系统管理员表';

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
  `adminstr_name` varchar(30) NOT NULL COMMENT '行政名称',
  `pid` int(10) NOT NULL COMMENT '父级id',
  `branch_id` int(10) NOT NULL COMMENT 'branch(支部)表id',
  `ctime` int(30) NOT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='行政机构表';

-- ----------------------------
-- Records of c_administrative
-- ----------------------------

-- ----------------------------
-- Table structure for c_administrative_s
-- ----------------------------
DROP TABLE IF EXISTS `c_administrative_s`;
CREATE TABLE `c_administrative_s` (
  `id` int(11) NOT NULL,
  `xz_name` varchar(50) NOT NULL COMMENT '子行政机构名称',
  `phone` int(11) NOT NULL,
  `users_id` int(11) NOT NULL COMMENT '子级用户id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='子行政机构表';

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='权限分配表';

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
  `ctime` int(11) unsigned DEFAULT NULL COMMENT '创建时间',
  `utime` int(11) unsigned DEFAULT NULL COMMENT '修改时间',
  `dtime` int(11) unsigned DEFAULT NULL COMMENT '删除时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COMMENT='子级权限表';

-- ----------------------------
-- Records of c_auth
-- ----------------------------
INSERT INTO `c_auth` VALUES ('1', '权限管理', '0', '', '', '1', '1520408547', null, null);
INSERT INTO `c_auth` VALUES ('2', '管理员管理', '0', '', '', '1', '1520408547', null, null);
INSERT INTO `c_auth` VALUES ('3', '党支部管理', '0', '', '', '1', '1520408547', null, null);
INSERT INTO `c_auth` VALUES ('4', '管理员列表', '2', 'Branchadmin', 'index', '1', '1520408547', null, null);
INSERT INTO `c_auth` VALUES ('5', '管理员新增', '2', 'Branchadmin', 'create', '1', '1520408547', null, null);
INSERT INTO `c_auth` VALUES ('6', '角色列表', '0', 'Roles', 'index', '1', '1520408547', null, null);
INSERT INTO `c_auth` VALUES ('7', '权限列表', '1', 'Auth', 'index', '1', '1520408547', null, null);
INSERT INTO `c_auth` VALUES ('8', '管理员删除', '2', 'Branchadmin', 'delete', '0', '1520408547', null, null);
INSERT INTO `c_auth` VALUES ('9', '党支部列表', '3', 'Branchs', 'index', '1', '1520408547', null, null);
INSERT INTO `c_auth` VALUES ('10', '党支部新增', '3', 'Branchs', 'create', '1', '1520408547', null, null);
INSERT INTO `c_auth` VALUES ('11', '角色新增', '1', 'Roles', 'create', '1', '1521272189', '1521272189', null);
INSERT INTO `c_auth` VALUES ('12', '角色新增', '1', 'Roles', 'create', '1', null, null, null);
INSERT INTO `c_auth` VALUES ('21', '嗨嗨嗨', '2', 'haihai', 'hehe', '1', null, null, null);
INSERT INTO `c_auth` VALUES ('22', '公众号管理', '0', 'weixin', 'index', '1', null, null, null);
INSERT INTO `c_auth` VALUES ('23', '公众号列表', '22', 'weixin', 'index', '1', null, null, null);
INSERT INTO `c_auth` VALUES ('24', '公众号新增', '22', 'weixin', 'create', '1', null, null, null);
INSERT INTO `c_auth` VALUES ('25', '管理公众号链接', '0', 'wechatmenu', 'responsemsg', '0', null, null, null);

-- ----------------------------
-- Table structure for c_branch
-- ----------------------------
DROP TABLE IF EXISTS `c_branch`;
CREATE TABLE `c_branch` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Permissions_role_id` int(10) DEFAULT NULL COMMENT 'Permissions_rolers（权限-角色）表id',
  `branch_name` varchar(40) DEFAULT NULL COMMENT '支部名称',
  `pid` int(10) DEFAULT NULL COMMENT '父级id',
  `logo` text,
  `phone` int(20) DEFAULT NULL COMMENT '手机号联系方式',
  `public_id` int(10) DEFAULT NULL COMMENT '公众号id',
  `Administrative_id` int(10) DEFAULT NULL COMMENT 'Administrative（行政机构）表id',
  `ctime` int(30) DEFAULT NULL COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='支部表';

-- ----------------------------
-- Records of c_branch
-- ----------------------------

-- ----------------------------
-- Table structure for c_branchs
-- ----------------------------
DROP TABLE IF EXISTS `c_branchs`;
CREATE TABLE `c_branchs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `branchs_name` varchar(50) NOT NULL COMMENT '子党支部名称',
  `phone` int(11) NOT NULL COMMENT '党支部电话',
  `pid` int(11) NOT NULL COMMENT '父id',
  `roles_id` int(10) NOT NULL,
  `ctime` int(20) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='子党支部表';

-- ----------------------------
-- Records of c_branchs
-- ----------------------------
INSERT INTO `c_branchs` VALUES ('1', '大冶市党支部', '130200111', '0', '1', '00000000001536305313');
INSERT INTO `c_branchs` VALUES ('5', '刘仁八党支部', '13134443', '0', '2', '00000000001536314040');
INSERT INTO `c_branchs` VALUES ('6', '东山村党支部', '120111', '5', '2', '00000000001536314101');
INSERT INTO `c_branchs` VALUES ('7', '陈贵镇党支部', '121315', '1', '3', null);
INSERT INTO `c_branchs` VALUES ('9', '秦脑村党子部', '2147483647', '6', '2', '00000000001536548248');
INSERT INTO `c_branchs` VALUES ('10', '张石村党支部', '2814521', '1', '2', '00000000001536549019');
INSERT INTO `c_branchs` VALUES ('11', '阳新党支部', '2147483647', '0', '2', '00000000001536549126');
INSERT INTO `c_branchs` VALUES ('12', '留人吧', '2147483647', '2', '3', '00000000001536562974');
INSERT INTO `c_branchs` VALUES ('13', '灵乡党支部', '2147483647', '0', '2', '00000000001536569971');

-- ----------------------------
-- Table structure for c_branch_admin
-- ----------------------------
DROP TABLE IF EXISTS `c_branch_admin`;
CREATE TABLE `c_branch_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bradmin_username` varchar(50) NOT NULL COMMENT '管理员用户名',
  `bradmin_password` char(32) NOT NULL COMMENT '管理员密码',
  `branchs_id` int(11) NOT NULL COMMENT 'branch(zi支部)表id',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '账号状态，0表示禁用，1表示启用',
  `admin_id` int(10) NOT NULL COMMENT '系统管理员(admin)表id',
  `ctime` int(20) NOT NULL COMMENT '创建时间',
  `bradmin_role` varchar(50) NOT NULL COMMENT '支部管理员账号角色',
  `pid` int(11) DEFAULT NULL COMMENT '父级id',
  `utime` int(20) DEFAULT NULL COMMENT '修改时间',
  `role_id` int(10) DEFAULT NULL COMMENT '角色id',
  `company_id` int(10) DEFAULT NULL COMMENT '公司表id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COMMENT='支部管理员表';

-- ----------------------------
-- Records of c_branch_admin
-- ----------------------------
INSERT INTO `c_branch_admin` VALUES ('1', 'admin', '594a554f2023ee1899f439eeba721955', '1', '1', '1', '1536300390', '', null, '1536824927', '8', '5');
INSERT INTO `c_branch_admin` VALUES ('5', 'text', '383eafdd5d7d6221612fe7e10cf703f0', '0', '1', '1', '1536823092', '', '0', '1536824957', '7', '5');
INSERT INTO `c_branch_admin` VALUES ('6', '222', '71e16f1ec9eaff409562e69051c2f2e7', '0', '1', '1', '1536912171', '', '0', null, '8', '5');
INSERT INTO `c_branch_admin` VALUES ('7', 'sss', '383eafdd5d7d6221612fe7e10cf703f0', '0', '1', '1', '1536918418', '', '0', null, '8', '9');

-- ----------------------------
-- Table structure for c_company
-- ----------------------------
DROP TABLE IF EXISTS `c_company`;
CREATE TABLE `c_company` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) NOT NULL COMMENT '公司名称',
  `company_email` varchar(20) NOT NULL COMMENT '公司邮箱',
  `address` varchar(255) NOT NULL COMMENT '公司地址',
  `identifier` varchar(255) NOT NULL COMMENT '公司唯一标识符',
  `phone` char(255) NOT NULL COMMENT '公司手机号',
  `ctime` int(25) NOT NULL COMMENT '创建时间',
  `utime` int(25) NOT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of c_company
-- ----------------------------
INSERT INTO `c_company` VALUES ('5', '腾讯天美', '123456qq.com', '深圳大梅沙', 'RNKwyyVL7', '13245678945', '1536911220', '1536913389');
INSERT INTO `c_company` VALUES ('8', '重庆天美', '123456qq.com', '重庆', 'qpt3DceaL', '13245678945', '1536918087', '0');
INSERT INTO `c_company` VALUES ('9', '武汉天美', '123456qq.com', '武汉', 'iDcKZKgUm', '13245678945', '1536918188', '0');
INSERT INTO `c_company` VALUES ('10', '北京天美', '123456qq.com', '北京', 'ugVI6VJ1J', '13245678945', '1536918207', '0');
INSERT INTO `c_company` VALUES ('11', '厦门天美', '123456qq.com', '厦门', 'K5ryOFZak', '13245678945', '1536918226', '0');

-- ----------------------------
-- Table structure for c_permissions
-- ----------------------------
DROP TABLE IF EXISTS `c_permissions`;
CREATE TABLE `c_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `per_name` varchar(20) DEFAULT NULL COMMENT '权限名称',
  `module` varchar(30) DEFAULT NULL COMMENT '模块名称',
  `controller` varchar(30) DEFAULT NULL COMMENT '控制器名称',
  `price` float(10,2) DEFAULT NULL COMMENT '价格',
  `pid` int(10) DEFAULT NULL COMMENT '父级id',
  `sort` tinyint(2) DEFAULT '0' COMMENT '排序',
  `ctime` int(30) DEFAULT NULL COMMENT '创建时间',
  `hidden` int(2) DEFAULT NULL COMMENT '是否隐藏（0代表不隐藏，1代表隐藏）',
  `public_id` int(3) DEFAULT NULL COMMENT '公众号id',
  `menu_url` varchar(255) DEFAULT NULL COMMENT '菜单地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COMMENT='权限列表';

-- ----------------------------
-- Records of c_permissions
-- ----------------------------
INSERT INTO `c_permissions` VALUES ('1', '廉政中国', 'Admin', 'lian/index', null, '0', '0', '1536300390', null, '1', 'lian/index');
INSERT INTO `c_permissions` VALUES ('2', '国机新风', 'Admin', null, null, '0', '0', '1536300390', null, '1', null);
INSERT INTO `c_permissions` VALUES ('3', '纪检在线', null, null, null, '0', '0', '1536300390', null, '1', null);
INSERT INTO `c_permissions` VALUES ('4', '时政热点', null, 'admin/index', null, '1', '0', '1536300390', null, '1', null);
INSERT INTO `c_permissions` VALUES ('5', '警示教育', null, null, null, '1', '0', '1536300390', null, '1', 'fasdf');
INSERT INTO `c_permissions` VALUES ('6', '党纪国法', null, null, null, '1', '0', '1536300390', null, '1', null);
INSERT INTO `c_permissions` VALUES ('7', '新风讲堂', null, null, null, '2', '0', '1536300390', null, '1', null);
INSERT INTO `c_permissions` VALUES ('8', '新风展馆', null, null, null, '2', '0', '1536300390', null, '1', null);
INSERT INTO `c_permissions` VALUES ('9', '新风社区', null, null, null, '2', '0', '1536300390', null, '1', null);
INSERT INTO `c_permissions` VALUES ('10', '新风考堂', null, null, null, '2', '0', '1536300390', null, '1', null);
INSERT INTO `c_permissions` VALUES ('11', '通报曝光', null, null, null, '3', '0', '1536300390', null, '1', null);
INSERT INTO `c_permissions` VALUES ('12', '巡视利剑', null, null, null, '3', '0', '1536300390', null, '1', null);
INSERT INTO `c_permissions` VALUES ('13', 'AI小荷', null, null, null, '3', '0', '1536300390', null, '1', null);
INSERT INTO `c_permissions` VALUES ('14', '举报平台', null, null, null, '3', '0', '1536300390', null, '1', null);
INSERT INTO `c_permissions` VALUES ('57', 'xin', null, 'News/index', null, null, '0', null, null, null, null);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='权限—角色表';

-- ----------------------------
-- Records of c_permissions_role
-- ----------------------------

-- ----------------------------
-- Table structure for c_role
-- ----------------------------
DROP TABLE IF EXISTS `c_role`;
CREATE TABLE `c_role` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL COMMENT '角色名称',
  `ctime` int(30) DEFAULT NULL COMMENT '创建时间',
  `menu_id` varchar(255) DEFAULT NULL COMMENT '权限菜单id',
  `description` varchar(255) DEFAULT NULL COMMENT '简介描述',
  `status` int(2) DEFAULT '0' COMMENT '0代表该角色没有使用，1代表该角色被使用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='角色表';

-- ----------------------------
-- Records of c_role
-- ----------------------------
INSERT INTO `c_role` VALUES ('7', 'fasdfdsfasfsadfasdfa', '1536669690', '1,4,2,7', 'fasdf', '0');
INSERT INTO `c_role` VALUES ('8', '国机新风', '1536730103', '2,7,8,9,10', '国机新风权限', '0');

-- ----------------------------
-- Table structure for c_roles
-- ----------------------------
DROP TABLE IF EXISTS `c_roles`;
CREATE TABLE `c_roles` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `roles_name` varchar(20) NOT NULL DEFAULT '' COMMENT '角色/用户组名称',
  `roles_auth_ids` varchar(128) NOT NULL DEFAULT '' COMMENT '权限ids,1,2,5，权限表中的主键集合',
  `roles_note` varchar(255) DEFAULT NULL COMMENT '备注',
  `create_time` int(11) unsigned DEFAULT NULL,
  `update_time` int(11) unsigned DEFAULT NULL,
  `delete_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COMMENT='子级角色表';

-- ----------------------------
-- Records of c_roles
-- ----------------------------
INSERT INTO `c_roles` VALUES ('2', '副部长', '2,4,21', '部长以下最大的管', null, null, null);
INSERT INTO `c_roles` VALUES ('3', '副经理', '1,6,7,2,4,3,10', '管理公司内部', '1536649685', '1536649685', null);
INSERT INTO `c_roles` VALUES ('4', 'wqe', '1,7,11,12,2,4,5,8,21,3,9,10,6,22,23,24', 'wqe', '1537348408', '1537348408', null);
INSERT INTO `c_roles` VALUES ('5', 'qwe', '1,7,11,12,2,4,5,8,21,22,23,24', 'qwe', '1537349540', '1537349540', null);
INSERT INTO `c_roles` VALUES ('6', 'asdasd', '1,7,11,12,3,9,10', 'wqe', '1537349642', '1537349642', null);

-- ----------------------------
-- Table structure for c_user
-- ----------------------------
DROP TABLE IF EXISTS `c_user`;
CREATE TABLE `c_user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL COMMENT '用户名称',
  `password` varchar(32) NOT NULL COMMENT '用户密码',
  `party_member` int(2) NOT NULL COMMENT '是否是党员（0代表不是，1代表是党员）',
  `ctime` int(30) NOT NULL COMMENT '创建时间',
  `token` varchar(255) NOT NULL COMMENT '用户的token',
  `company` varchar(255) NOT NULL COMMENT '所属公司',
  `last_time` int(30) NOT NULL,
  `tel` char(11) NOT NULL,
  `status` int(2) DEFAULT NULL COMMENT '账号状态（0禁用，1正常）',
  `unionid` varchar(255) DEFAULT NULL COMMENT 'unionid',
  `openid` varchar(255) DEFAULT NULL,
  `face` varchar(255) DEFAULT NULL COMMENT '头像',
  `party_status` int(2) DEFAULT NULL COMMENT '党员状态（0代表是党员，1代表是群众）',
  `branchs_id` int(10) DEFAULT NULL COMMENT '子支部id',
  `nickname` varchar(255) DEFAULT NULL COMMENT '微信用户昵称',
  `weixin_id` int(10) DEFAULT NULL COMMENT '微信的id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of c_user
-- ----------------------------
INSERT INTO `c_user` VALUES ('1', '71cloud', '383eafdd5d7d6221612fe7e10cf703f0', '0', '0', '', '', '0', '15927668469', '1', null, null, null, null, null, '', null);
INSERT INTO `c_user` VALUES ('3', '', '', '0', '0', '', '', '0', '', null, null, '0', null, null, null, 'CURD', null);
INSERT INTO `c_user` VALUES ('4', '', '', '0', '0', '', '', '0', '', null, null, 'oecaE0ii_-oWQHrUB8NF5kzV7HZA', null, null, null, 'CURD', null);

-- ----------------------------
-- Table structure for c_weixin
-- ----------------------------
DROP TABLE IF EXISTS `c_weixin`;
CREATE TABLE `c_weixin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `appid` varchar(30) DEFAULT NULL COMMENT '微信的appid',
  `appsecret` varchar(255) DEFAULT NULL COMMENT '微信appsecret',
  `branch_id` int(10) DEFAULT NULL COMMENT '支部管理员表id',
  `weixin_name` varchar(10) DEFAULT NULL COMMENT '公众号名称',
  `role_id` int(11) NOT NULL COMMENT '公众号菜单栏',
  `check_url` varchar(255) DEFAULT NULL,
  `check_token` varchar(255) DEFAULT NULL,
  `check_aeskey` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL COMMENT '验证结果 0 验证不通过 1代表验证通过',
  `rand` varchar(255) DEFAULT NULL COMMENT '微信生成随机数',
  `access_token` varchar(255) DEFAULT NULL COMMENT 'URL—token地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='公众号表';

-- ----------------------------
-- Records of c_weixin
-- ----------------------------
INSERT INTO `c_weixin` VALUES ('1', 'asdasdasdasd', 'asdsadasdasd', '1', '66666', '6', '', 'eHizOhJUo', 'Dp7xlMr9UeldbU82FXj6rnVh5o', null, '5fddbde5a10f728626f33460f54f369d', null);
INSERT INTO `c_weixin` VALUES ('7', 'aaaaaaaa', 'ccccccc', '2', '66666', '6', '', 'ynIxIJZP6', 'jA6igu2ilL4BvJh2oNmOIttgYF', null, 'e497d57cb075ac5325d42ad52fcdd20b', null);
INSERT INTO `c_weixin` VALUES ('8', 'mmmmm', '99999', '1', '99999', '7', '', 'wRY3q7wy3', 'snU7iGy2MdmAGl3ZT2xgwjIhDp', null, 'fdfac06f5803ff3665fb1c9a03ee39d9', null);
INSERT INTO `c_weixin` VALUES ('12', 'hahaha', 'heheheh', '7', null, '8', null, '6ezRQfhQF', 'idMyfyJfB5TFZeqGFS6f9w2Ahi', null, 'd3c18667c82d4ac6f6c0fcdd12738660', null);
INSERT INTO `c_weixin` VALUES ('13', 'wx4f074dac4be214ef', '08ca5103a07ad105cd482757a8eaefc8', '5', null, '7', null, 'yueYVIy5P', 'TLa8QWK9unVuDUwOfXY1Ef7wuD', null, '50c2c25c01d98a3ef6c4274996795429', '13_Q63XfHKD5gZU6NhKeZpPGsC4S1kEHyskdD7SXCd8o7vgSD1PacBHDagKmhL2C2yosR9AP5lo474cEd304djpgI7rPU06X5JH2A_P37MvjS2NJ0CfdqqTKwXMT1DfrlqTbvZQaXfNr6J0Yo8mTXDbABAAEK');
INSERT INTO `c_weixin` VALUES ('14', 'wx049426c4ca27a58a', '5c4600a6b42a1b5f66a1a78f173fde8e', '7', null, '8', null, 'MNAB5bl3M', 'ZeFCNLBOPaTSHmWcMbz9OT9sQf', null, '2ed3fb0c250040d9cc51521f9df86c87', '13_yzBJyGv1nlV75oH0cbUQc2_FeBlpH_fv6IgtuP_Agb-Ko0Ydm6zdMmin_0DatCtMvaA6TcEEvsK8UBm-iP7mxkgXp0bdmUD3ua1RES4WNQGUNsZ7-iVtVMeWjFMWJYiAJADQF');
SET FOREIGN_KEY_CHECKS=1;
