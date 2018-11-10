/*
Navicat MySQL Data Transfer

Source Server         : 192.168.2.159
Source Server Version : 50640
Source Host           : 192.168.2.159:3306
Source Database       : 71cloud

Target Server Type    : MYSQL
Target Server Version : 50640
File Encoding         : 65001

Date: 2018-11-02 15:00:01
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for c_activity
-- ----------------------------
DROP TABLE IF EXISTS `c_activity`;
CREATE TABLE `c_activity` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '活动名称',
  `content` text NOT NULL COMMENT '内容',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `quota` smallint(5) unsigned NOT NULL DEFAULT '0' COMMENT '名额',
  `applied` smallint(5) unsigned DEFAULT '0' COMMENT '已报名人数',
  `apply_etime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '报名截止时间',
  `time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '活动时间',
  `address` varchar(32) NOT NULL DEFAULT '' COMMENT '活动地点',
  `dtime` int(10) unsigned DEFAULT '0' COMMENT '删除时间',
  `is_del` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除(0未删除1已删除)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COMMENT='活动';

-- ----------------------------
-- Records of c_activity
-- ----------------------------
INSERT INTO `c_activity` VALUES ('1', '希望小学募捐', '&lt;p&gt;为希望校园捐款，帮助贫困地区小学生改善教育条件，定向购置100台电脑&lt;/p&gt;', '1534757739', '100', '1', '1534755600', '1534757606', '5号礼堂', '0', '0');
INSERT INTO `c_activity` VALUES ('2', '巴仁乡尤喀克巴仁村', '&lt;p&gt;今年农历大年初三，年味正浓，新疆维吾尔自治区纪委干部李靓和同事们已切换到工作模式。翻开一个多月前在喀什地区疏勒县督导时发现问题的台账，李靓锁定了当天的行程：“先去巴仁乡尤喀克巴仁村！”&lt;/p&gt;&lt;p&gt;之前，自治区纪委抽调纪检干部组成群众工作督导组在疏勒县走访时，村民麦麦提·玉麦尔向督导组反映，不仅自己的富民安居名额被人挤占，村支书还强迫他自费修建富民安居房。督导组将问题线索移交给县纪委。经查，穆合塔尔·麦麦提伊敏明作为村支书，不仅不帮麦麦提·玉麦尔讨回被他人冒领的富民安居物资，还在其经济能力不足且住房足够的情况下，强迫其自费3万多元，修建40平方米的“面子工程”。最终，穆合塔尔·麦麦提伊敏明受到严肃处理。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1531900269', '111', '1', '1532016000', '1531843200', '111', '1534757599', '1');
INSERT INTO `c_activity` VALUES ('3', '让群众对脱贫攻坚更有获得感', '&lt;p dir=&quot;ltr&quot;&gt;为深入贯彻落实党的十九大精神，深入贯彻落实习近平总书记关于打赢脱贫攻坚战以及开展扶贫领域腐败和作风问题专项治理的系列重要讲话和批示精神，中央纪委决定从2018年到2020年持续开展扶贫领域腐败和作风问题专项治理。半年多来，各地各部门迅速跟进，一个个腐败和作风问题被查处曝光，形成了有力震慑。&lt;/p&gt;&lt;p dir=&quot;ltr&quot;&gt;从今天起，本刊聚焦“扶贫领域腐败和作风问题专项治理”，推出系列报道，敬请关注。&lt;/p&gt;&lt;p dir=&quot;ltr&quot;&gt;&lt;br/&gt;&lt;/p&gt;', '1531902696', '300', '1', '1532016000', '1531497600', '光谷国际广场', '1534757958', '1');
INSERT INTO `c_activity` VALUES ('4', '坚持实事求是', '&lt;p&gt;实事求是，是马克思主义的根本观点，是中国共产党人认识世界、改造世界的根本要求，是我们党的基本思想方法、工作方法、领导方法。不论过去、现在和将来，我们都要坚持一切从实际出发，理论联系实际，在实践中检验真理和发展真理。&lt;/p&gt;&lt;p&gt;　　——2013年12月26日，习近平在纪念毛泽东同志诞辰120周年座谈会上的讲话&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1531903427', '100', '1', '1532534400', '1532966400', '光谷国际广场', '1534757955', '1');
INSERT INTO `c_activity` VALUES ('5', '红船观澜：“一团和气”要不得', '&lt;p&gt;前不久，贵州黔南布依族苗族自治州纪委监委通报了三都水族自治县委原常委、县委办公室原主任违纪违法的消息。2017年9月，其明知三都县委没有贯彻落实州委纠正三都县严重政治乱象的“约法三章”，不仅在汇报材料上签了“审核”，还向州委调研组吹捧时任县委书记（已于2018年1月落马）的“政绩”……&lt;/p&gt;', '1533627228', '20', '0', '1533916800', '1534521600', '光谷国际广场', '1534757592', '1');
INSERT INTO `c_activity` VALUES ('6', '开展 “清风党建 清新学风”活动', '&lt;p&gt;“廉可生正气，洁能显高尚。”为加强社区廉政文化建设，充分发挥社区在传播廉政文化中的基础性作用，不断扩大廉政文化的影响力和覆盖面，党总支及三个支部分别开展“清风党建 清新学风”活动。 社区通过组织党员、居民观看《初心》、《家书》等纪录片，开展党课、道德讲堂宣讲等多种形式，对廉政文化进行宣传，同时充分发挥党员志愿者的优势，让党员志愿者深入到群众中去，通过自身的行为，潜移默化地影响到其周围的居民的同时，将廉政文化与人文社区、和谐社区相结合，营造浓厚的廉政文化氛围。&lt;/p&gt;', '1534833911', '30', '1', '1534435200', '1535126400', '9号礼堂', '0', '0');
INSERT INTO `c_activity` VALUES ('7', '激发担当作为的动能', '&lt;p&gt;《关于进一步激励广大干部新时代新担当新作为的意见》的制定实施，对充分调动和激发干部队伍的积极性、主动性、创造性，解决干部不想为、不会为、不敢为等难题开出了“良方”。当前，改革正值爬坡过坎、攻坚克难的关键时期，必须建立宽严相济的管理机制，充分调动和激发干部队伍的积极性、主动性和创造性，合理利用教育引导、选人用人、考核评价、容错纠错等措施，增强干部的政治、历史和责任担当。&lt;/p&gt;&lt;p&gt;树立实干用人导向。用人导向是风向标，选一名干部就是树一面旗帜。必须坚持好干部标准，突出事业为上、以事择人，把衡量担当作为的标尺亮出来，把重实干重实绩的用人导向鲜明树起来。要突出政治标准。把政治合格作为干部选任的首要标准，看是否坚决维护以习近平同志为核心的党中央权威和集中统一领导，是否坚决贯彻执行党的路线方针政策，是否在遇到重大政治事件、敏感问题时态度鲜明、立场坚定，是否在关键时刻、急难险重任务面前站得出来、顶得上去，是否具备把握政治方向、驾驭政治局面、防范政治风险的能力。要突出实绩考察。深入被考察对象工作岗位，实地查看其工作成果，既看已取得的成绩，又看尚未达到的目标；既看主观努力程度，又看客观条件限制；既看当前表现，又看发展潜力，科学辩证地分析研判干部业绩。运用“延伸考察”方法，突破工作圈的限制，对新提任领导干部和交流重用的职务人选，听取考察对象所在社区党组织的意见，了解干部“八小时以外”的表现情况。要突出“能上能下”。探索完善“能下”机制，明确标准，完善考核，畅通渠道，推动差者“下”。建立干部正常更替机制，探索任期制、实行任期目标责任制，解决干部“不到退休下不来”“不犯错误下不来”等问题，促使平者“下”。完善干部“能下”的相关辅助机制，从解决“下”来干部的出路和待遇为介入点，妥善做好干部“下”来后的相关工作，保证干部“能下”工作顺利推进。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1533706634', '10', '0', '1533916800', '1535126400', '光谷国际广场', '1534757589', '1');
INSERT INTO `c_activity` VALUES ('8', '黄坤明：高扬新时代党的理论旗帜 发挥好中央党刊示范引领作用', '&lt;p&gt;黄坤明：高扬新时代党的理论旗帜 发挥好中央党刊示范引领作用&lt;/p&gt;', '1533708191', '10', '0', '1534557600', '1535155200', '光谷国际广场', '1534757586', '1');
INSERT INTO `c_activity` VALUES ('9', '坚定不移全面加强中央企业党的建设', '&lt;p&gt;坚定不移全面加强中央企业党的建设&lt;/p&gt;', '1533709892', '20', '0', '1534572000', '1535178600', '光谷国际广场', '1534757584', '1');
INSERT INTO `c_activity` VALUES ('10', '“技能培优”特色党建活动', '&lt;p&gt;为进一步加强车间基层党组织服务中心工作，践行“5+3”党建工作思路，党总支开展了技能拔高培优活动。&lt;/p&gt;&lt;p&gt;围绕“技能培优”主题，树立既有利于技能提升，又兼顾于优秀人才培养的思路，推出特色党建活动。本次活动将分为三期，涵盖卷制、包装、滤棒等操作及修理岗位的党员，主要以组织推荐、个人自愿为基础，利用业余时间，分工种及岗位，让支部内技能水平较高的党员帮助同工种党员开展培优教学，教学相长。&lt;/p&gt;&lt;p&gt;目前，第一期培优及考评已结束，4名学员以优秀成绩通过。第二期活动正在进行当中。通过此次活动，进一步提高了车间职工的学习热情，在青年职工中逐步形成一股勤奋好学、提升自我的风气。&lt;/p&gt;', '1534833897', '30', '4', '1535695200', '1536127200', '1号礼堂', '0', '0');
INSERT INTO `c_activity` VALUES ('11', '党建知识竞赛活动', '&lt;p&gt;9月3日机关党委举办“不忘初心、牢记使命”党建知识竞赛活动，通过寓教于乐的形式学习党的十九大精神。&lt;/p&gt;', '1534833812', '100', '2', '1535706000', '1535958000', '1号礼堂', '0', '0');
INSERT INTO `c_activity` VALUES ('12', '召开“追问初心”读书分享会', '&lt;p&gt;9月1日，公司党支部组织党员开展读书分享活动，召开“追问初心”读书分享会，开展“共产党员故事”主题征文活动，进一步提升了党员的理论素质和党性修养，增强党员为人民服务的高度自觉。&lt;/p&gt;', '1534820754', '50', '4', '1535697179', '1535783400', '2号礼堂', '0', '0');
INSERT INTO `c_activity` VALUES ('13', '双11', '<p>递四方速递萨达</p>', '1540187617', '12', '0', '1540266969', '1540353362', '武汉', '1540187626', '1');

-- ----------------------------
-- Table structure for c_ad
-- ----------------------------
DROP TABLE IF EXISTS `c_ad`;
CREATE TABLE `c_ad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '广告位名称',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '图片',
  `path` varchar(255) DEFAULT '' COMMENT '外链',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '类型 1表示广告 2表示banner',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COMMENT='广告位';

-- ----------------------------
-- Records of c_ad
-- ----------------------------
INSERT INTO `c_ad` VALUES ('1', '1号位', '/Static/Home/images/slider2.jpg', 'http://dangjian.co-links.com/Cloud/index.html', '1');
INSERT INTO `c_ad` VALUES ('2', '2号位', '/Uploads/2018-08-09/5b6c06ff10b6b.jpg', 'http://dangjian.co-links.com/Heart/index.html', '1');
INSERT INTO `c_ad` VALUES ('3', 'banner1', '/Uploads/20181026/e625bf3969f083f8b70aea1803bca8bf.jpg', '', '2');
INSERT INTO `c_ad` VALUES ('4', 'banner2', '/Uploads/20181026/821b04b1ca6473dba644702bc094672d.jpg', '', '2');
INSERT INTO `c_ad` VALUES ('11', 'banner3', '/Uploads/20181026/9355fc93984fe3bf176528fedae9b030.jpg', '', '2');

-- ----------------------------
-- Table structure for c_admin
-- ----------------------------
DROP TABLE IF EXISTS `c_admin`;
CREATE TABLE `c_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `admin_username` varchar(32) NOT NULL COMMENT '用户名',
  `admin_password` varchar(32) NOT NULL COMMENT '密码',
  `ctime` int(11) DEFAULT NULL COMMENT '创建时间',
  `branch_admin_id` int(10) DEFAULT NULL COMMENT '支部管理员id',
  `utime` int(11) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='系统管理员表';

-- ----------------------------
-- Records of c_admin
-- ----------------------------
INSERT INTO `c_admin` VALUES ('1', 'admin', '594a554f2023ee1899f439eeba721955', '0', '0', '1537516436');
INSERT INTO `c_admin` VALUES ('6', 'xinbingliang', '50215ea8287d6f24ed10a1c6c0128c6b', '1540541536', null, null);

-- ----------------------------
-- Table structure for c_admin_resources
-- ----------------------------
DROP TABLE IF EXISTS `c_admin_resources`;
CREATE TABLE `c_admin_resources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) NOT NULL COMMENT '公司id',
  `ad` varchar(255) NOT NULL DEFAULT '' COMMENT '广告',
  `banner` varchar(255) NOT NULL DEFAULT '' COMMENT 'banner',
  `newcate` varchar(255) NOT NULL DEFAULT '' COMMENT '新闻分类',
  `news` varchar(255) NOT NULL DEFAULT '' COMMENT '新闻内容',
  `classcate` varchar(255) NOT NULL DEFAULT '' COMMENT '党校课程分类列表',
  `class` varchar(255) NOT NULL DEFAULT '' COMMENT '党校课程表',
  `classchapter` varchar(255) NOT NULL DEFAULT '' COMMENT '党校课程视频',
  `photo` varchar(255) NOT NULL DEFAULT '' COMMENT '党校课程视频',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='公众号内容(公司使用系统提供的内容)';

-- ----------------------------
-- Records of c_admin_resources
-- ----------------------------
INSERT INTO `c_admin_resources` VALUES ('1', '32', '2', '11,4,3', '1,4,2,6,8', '115,114,113,112,111,108', '10,12,13,14,15,16,17,18,19,20,21,23,24,25,26,27,28,29', '26,29,30,31', '81,80,79,78,77,75,74,73,72', '103');

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
-- Table structure for c_advice
-- ----------------------------
DROP TABLE IF EXISTS `c_advice`;
CREATE TABLE `c_advice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `link` varchar(32) NOT NULL DEFAULT '' COMMENT '联系方式 手机或邮箱',
  `content` text NOT NULL COMMENT '反馈内容',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '反馈时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='意见反馈';

-- ----------------------------
-- Records of c_advice
-- ----------------------------
INSERT INTO `c_advice` VALUES ('1', '19', '15377532898', '1j1k2kdfsadljsa', '0');
INSERT INTO `c_advice` VALUES ('2', '19', 'Rrr', 'Ffffffff', '1533893537');
INSERT INTO `c_advice` VALUES ('3', '24', '', '测试', '1535621614');
INSERT INTO `c_advice` VALUES ('4', '24', '', '测试', '1535621623');

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
-- Table structure for c_apply
-- ----------------------------
DROP TABLE IF EXISTS `c_apply`;
CREATE TABLE `c_apply` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `act_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '活动id',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '报名时间',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COMMENT='活动报名';

-- ----------------------------
-- Records of c_apply
-- ----------------------------
INSERT INTO `c_apply` VALUES ('1', '1', '1', '0');
INSERT INTO `c_apply` VALUES ('2', '1', '2', '1531901955');
INSERT INTO `c_apply` VALUES ('5', '1', '3', '1531903049');
INSERT INTO `c_apply` VALUES ('9', '1', '4', '1531984108');
INSERT INTO `c_apply` VALUES ('24', '19', '12', '1533778325');
INSERT INTO `c_apply` VALUES ('25', '19', '11', '1533778572');
INSERT INTO `c_apply` VALUES ('26', '16', '12', '1533866286');
INSERT INTO `c_apply` VALUES ('27', '24', '6', '1534137993');
INSERT INTO `c_apply` VALUES ('29', '20', '11', '1534153200');
INSERT INTO `c_apply` VALUES ('30', '20', '10', '1534153339');
INSERT INTO `c_apply` VALUES ('31', '9', '12', '1534757286');
INSERT INTO `c_apply` VALUES ('32', '16', '10', '1534846900');
INSERT INTO `c_apply` VALUES ('33', '19', '10', '1534925887');
INSERT INTO `c_apply` VALUES ('34', '24', '10', '1535621828');
INSERT INTO `c_apply` VALUES ('35', '24', '12', '1535621841');

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
  `company_id` varchar(255) DEFAULT NULL COMMENT '公司id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 COMMENT='子级权限表';

-- ----------------------------
-- Records of c_auth
-- ----------------------------
INSERT INTO `c_auth` VALUES ('1', '权限管理', '0', '', '', '1', '1520408547', null, null, '32,15');
INSERT INTO `c_auth` VALUES ('2', '管理员管理', '0', '', '', '1', '1520408547', null, null, '32');
INSERT INTO `c_auth` VALUES ('3', '党支部管理', '0', '', '', '1', '1520408547', null, null, '32');
INSERT INTO `c_auth` VALUES ('4', '管理员列表', '2', 'Branchadmin', 'index', '1', '1520408547', null, null, null);
INSERT INTO `c_auth` VALUES ('5', '管理员新增', '2', 'Branchadmin', 'create', '1', '1520408547', null, null, null);
INSERT INTO `c_auth` VALUES ('6', '角色列表', '1', 'Roles', 'index', '1', '1520408547', null, null, null);
INSERT INTO `c_auth` VALUES ('8', '管理员删除', '2', 'Branchadmin', 'delete', '0', '1520408547', null, null, null);
INSERT INTO `c_auth` VALUES ('9', '党支部列表', '3', 'Branchs', 'index', '1', '1520408547', null, null, null);
INSERT INTO `c_auth` VALUES ('10', '党支部新增', '3', 'Branchs', 'create', '1', '1520408547', null, null, null);
INSERT INTO `c_auth` VALUES ('11', '角色新增', '1', 'Roles', 'create', '1', '1521272189', '1521272189', null, '');
INSERT INTO `c_auth` VALUES ('22', '公众号管理', '0', 'weixin', 'index', '1', null, null, null, '32');
INSERT INTO `c_auth` VALUES ('24', '公众号新增', '22', 'weixin', 'create', '1', null, null, null, '');
INSERT INTO `c_auth` VALUES ('26', '党员职称新增', '25', 'dangyuan', 'jobadd', '0', null, null, null, '');
INSERT INTO `c_auth` VALUES ('27', '党员管理', '0', '', '', '1', null, null, null, '32');
INSERT INTO `c_auth` VALUES ('28', '党员审批', '27', 'dangyuan', 'permission', '1', null, null, null, '');
INSERT INTO `c_auth` VALUES ('29', '新增党员', '27', 'dangyuan', 'memberadd', '1', null, null, null, '');
INSERT INTO `c_auth` VALUES ('30', '新增行政职称', '27', 'DangyuanJobname', 'create', '0', null, null, null, '');
INSERT INTO `c_auth` VALUES ('31', '党建消息管理', '0', '', '', '1', null, null, null, '32,11');
INSERT INTO `c_auth` VALUES ('32', '发件箱', '31', 'BranchMessage', 'index', '1', null, null, null, '');
INSERT INTO `c_auth` VALUES ('34', '公众号菜单栏新增', '22', 'weixin', 'menu', '1', null, null, null, '');
INSERT INTO `c_auth` VALUES ('35', '菜单栏列表', '22', 'weixin', 'menuindex', '1', null, null, null, '');
INSERT INTO `c_auth` VALUES ('36', '党支部下级系统账号查看', '31', 'BranchMessage', 'adminlist', '0', null, null, null, '');
INSERT INTO `c_auth` VALUES ('37', '收件箱', '31', 'BranchMessage', 'receiveIndex', '1', null, null, null, '');
INSERT INTO `c_auth` VALUES ('38', '所属支部行政职称列表', '27', 'dangyuanJobname', 'lst', '1', null, null, null, '');
INSERT INTO `c_auth` VALUES ('39', '删除党员', '27', 'dangyuan', 'delete', '0', null, null, null, '');
INSERT INTO `c_auth` VALUES ('40', '党员信息修改', '27', 'dangyuan', 'edit', '2', null, null, null, '');
INSERT INTO `c_auth` VALUES ('41', '发送消息', '31', 'branchmessage', 'create', '0', null, null, null, '');
INSERT INTO `c_auth` VALUES ('42', '存储新消息', '31', 'branchmessage', 'save', '0', null, null, null, '');
INSERT INTO `c_auth` VALUES ('44', '消息查看权限', '31', 'branchmessage', 'read', '0', null, null, null, '');
INSERT INTO `c_auth` VALUES ('46', 'test', '45', 'test', 'test', '1', null, null, null, '');
INSERT INTO `c_auth` VALUES ('50', '考试管理', '0', '', '', '1', null, null, null, '');
INSERT INTO `c_auth` VALUES ('51', '考卷列表', '50', 'exampaper', 'index', '1', null, null, null, '');
INSERT INTO `c_auth` VALUES ('52', '新增题目', '50', 'examquestions', 'create', '1', null, null, null, '');
INSERT INTO `c_auth` VALUES ('53', '测试', '50', 'examquestions', 'test', '1', null, null, null, '');
INSERT INTO `c_auth` VALUES ('54', '创建考卷', '50', 'exampaper', 'create', '0', null, null, null, '');
INSERT INTO `c_auth` VALUES ('55', '活动列表', '50', 'examactivity', 'index', '1', null, null, null, '');
INSERT INTO `c_auth` VALUES ('56', '公众号内容管理', '0', '', '', '1', null, null, null, '32');
INSERT INTO `c_auth` VALUES ('57', '新闻分类管理', '56', 'content_new_class', 'news', '1', null, null, null, null);
INSERT INTO `c_auth` VALUES ('58', '新闻管理', '56', 'contentnews', 'index', '1', null, null, null, null);
INSERT INTO `c_auth` VALUES ('59', '广告位管理', '56', 'contentad', 'index', '1', null, null, null, null);
INSERT INTO `c_auth` VALUES ('60', 'banner管理', '56', 'contentadbanner', 'index', '1', null, null, null, null);
INSERT INTO `c_auth` VALUES ('61', '相册管理', '56', 'contentphoto', 'index', '1', null, null, null, null);
INSERT INTO `c_auth` VALUES ('62', '党校内容分类管理', '56', 'contentclasscate', 'index', '1', null, null, null, null);
INSERT INTO `c_auth` VALUES ('63', '党校课程管理', '56', 'contentclasscourse', 'index', '1', null, null, null, null);
INSERT INTO `c_auth` VALUES ('64', '党校视频管理', '56', 'contentclasschapter', 'index', '1', null, null, null, null);

-- ----------------------------
-- Table structure for c_auth_company
-- ----------------------------
DROP TABLE IF EXISTS `c_auth_company`;
CREATE TABLE `c_auth_company` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `auth_id` varchar(255) COLLATE utf8_bin NOT NULL COMMENT 'auth表id',
  `company_id` int(11) NOT NULL COMMENT '公司表id',
  `ctime` int(11) DEFAULT NULL COMMENT '创建时间',
  `utime` int(11) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='公司和权限关联表';

-- ----------------------------
-- Records of c_auth_company
-- ----------------------------
INSERT INTO `c_auth_company` VALUES ('1', '1,2,3,22,27,31,50,56', '5', '1541034705', null);
INSERT INTO `c_auth_company` VALUES ('3', '1,2,3,22,27,31,50,56', '32', '1541035369', null);
INSERT INTO `c_auth_company` VALUES ('4', '1,2,3,22,27,31,50,56', '22', '1541037771', '1541038964');

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
-- Table structure for c_branch_admin
-- ----------------------------
DROP TABLE IF EXISTS `c_branch_admin`;
CREATE TABLE `c_branch_admin` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `bradmin_username` varchar(50) NOT NULL COMMENT '管理员用户名',
  `bradmin_password` char(32) NOT NULL COMMENT '管理员密码',
  `branchs_id` int(11) DEFAULT NULL COMMENT 'branch(zi支部)表id',
  `status` int(2) NOT NULL DEFAULT '1' COMMENT '账号状态，0表示禁用，1表示启用',
  `admin_id` int(10) NOT NULL COMMENT '系统管理员(admin)表id',
  `ctime` int(20) DEFAULT NULL COMMENT '创建时间',
  `bradmin_role` varchar(50) DEFAULT NULL COMMENT '支部管理员账号角色',
  `pid` int(11) DEFAULT NULL COMMENT '父级id',
  `utime` int(20) DEFAULT NULL COMMENT '修改时间',
  `role_id` int(10) DEFAULT NULL COMMENT '角色id',
  `company_id` int(10) DEFAULT NULL COMMENT '公司表id',
  `appid` varchar(30) DEFAULT NULL COMMENT '公众号appid',
  `appsecret` varchar(255) DEFAULT NULL COMMENT '公众号appsecret',
  `token` varchar(255) DEFAULT NULL COMMENT '第一认证时候的token 应该是我们系统内置固定一个',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COMMENT='支部管理员表';

-- ----------------------------
-- Records of c_branch_admin
-- ----------------------------
INSERT INTO `c_branch_admin` VALUES ('34', 'fangyou', '383eafdd5d7d6221612fe7e10cf703f0', '36', '1', '1', '1540878144', null, '0', null, '9', '32', null, null, null);
INSERT INTO `c_branch_admin` VALUES ('35', 'admin', '383eafdd5d7d6221612fe7e10cf703f0', null, '1', '1', '1540959975', null, '0', null, '9', '22', null, null, null);
INSERT INTO `c_branch_admin` VALUES ('37', 'text', '383eafdd5d7d6221612fe7e10cf703f0', null, '1', '1', '1541039369', null, '0', null, '9', '12', null, null, null);

-- ----------------------------
-- Table structure for c_branch_message
-- ----------------------------
DROP TABLE IF EXISTS `c_branch_message`;
CREATE TABLE `c_branch_message` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id字段',
  `send_id` int(11) unsigned NOT NULL COMMENT '发送方的主键id，对应党建后台管理员表主键id字段',
  `receive_id` int(11) unsigned NOT NULL COMMENT '发送方的主键id，对应党建后台管理员表主键id字段',
  `title` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '消息主题',
  `content` text COLLATE utf8_bin COMMENT '发送内容',
  `status` enum('0','1') COLLATE utf8_bin DEFAULT '0' COMMENT '0表示未读，1表示已读',
  `read_time` int(11) DEFAULT NULL COMMENT '邮件读取时间',
  `create_time` int(11) unsigned DEFAULT NULL COMMENT '发送时间',
  `update_time` int(11) unsigned DEFAULT NULL COMMENT '修改时间',
  `delete_time` int(11) unsigned DEFAULT NULL COMMENT '删除时间',
  `is_admin` enum('0','1') COLLATE utf8_bin DEFAULT '0' COMMENT '''0''为党建后台之间的消息通信，1为公司后台发送给党建后台账号的消息',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='党建后台系统站消息表';

-- ----------------------------
-- Records of c_branch_message
-- ----------------------------
INSERT INTO `c_branch_message` VALUES ('5', '1', '27', '中秋节放假通知', 0x3C68313EE4BDA0E5A5BD3C2F68313E3C68343EE5A4A7E5AEB6E5A5BD3C62722F3E3C2F68343E, '0', null, '1539856583', null, null, '0');

-- ----------------------------
-- Table structure for c_branchs
-- ----------------------------
DROP TABLE IF EXISTS `c_branchs`;
CREATE TABLE `c_branchs` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `branchs_name` varchar(50) NOT NULL COMMENT '子党支部名称',
  `phone` varchar(15) NOT NULL COMMENT '党支部电话',
  `pid` int(11) NOT NULL COMMENT '父id',
  `company_id` int(11) NOT NULL COMMENT '所属公司',
  `roles_id` int(10) NOT NULL,
  `ctime` int(20) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8 COMMENT='子党支部表';

-- ----------------------------
-- Records of c_branchs
-- ----------------------------
INSERT INTO `c_branchs` VALUES ('36', '武汉纺友技术有限公司党支部', '13245678945', '0', '32', '1', '00000000001540878239');
INSERT INTO `c_branchs` VALUES ('37', '技术部', '13111115556', '36', '32', '2', '00000000001541035300');

-- ----------------------------
-- Table structure for c_class
-- ----------------------------
DROP TABLE IF EXISTS `c_class`;
CREATE TABLE `c_class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '课程名称',
  `introduce` text NOT NULL COMMENT '介绍',
  `cate_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '课程分类id',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `period` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '课时',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `visit` int(10) unsigned DEFAULT '0' COMMENT '观看次数',
  `status` tinyint(2) unsigned DEFAULT '1' COMMENT '状态 1正常2下架',
  PRIMARY KEY (`id`),
  KEY `cate_id` (`cate_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='课程表';

-- ----------------------------
-- Records of c_class
-- ----------------------------
INSERT INTO `c_class` VALUES ('12', '党员应知应会党章知识', '<p>在中办发出通知要求各地的党员“两学一做”，学党章党规，学系列讲话，做合格党员的大背景下，本次课程主要讲两个方面的大问题：第一个大问题是“两学一做”学习教育的重大意义；第二个大问题是开展“两学一做”学习教育的总体要求。</p><p><br/></p><p>来源：全国党员干部现代远程教育</p><p><br/></p>', '12', '\\Uploads\\20181025\\19f2b5b95b4d045a8310329ce25e28cf.jpg', '10', '1540431256', '45', '1');
INSERT INTO `c_class` VALUES ('13', '与时俱进话党章', '&lt;p&gt;中国共产党在90多年波澜壮阔的奋斗历程中，先后对党章进行了16次修改，透过党章建设的红色脚印，我们可以清晰地触摸到党的理论创新、实践创新和制度创新的光辉轨迹。党章就像公开树立起来的旗帜和标杆，为党的发展指引方向，为党的建设提供标准。&lt;/p&gt;', '12', 'Uploads/2018-08-18/5b77809c44d0d.jpg', '0', '1534558364', '7', '1');
INSERT INTO `c_class` VALUES ('14', '《中国共产党党内监督条例》解读', '&lt;p&gt;党的十八届六中全会，通过了《中国共产党党内监督条例》这项重要的党内法规，这个法规的内容是什么？它的通过、生效、实施有什么意义？中共中央党校研究生院教授、博士生导师刘春将从贯彻执行《中国共产党党内监督条例》的重大意义、《中国共产党党内监督条例》结构和内容两个方面给我们做详细解读。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;来源：全国党员干部现代远程教育&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '13', 'Uploads/2018-08-18/5b77829e27558.jpg', '1', '1534558878', '2', '1');
INSERT INTO `c_class` VALUES ('15', '《中国共产党党组工作条例》解读', '&lt;p&gt;《中国共产党党组工作条例》的公布，对于规范党组的运作，提高党组工作的效率，理顺各个方面的关系发挥了重要的作用。中共中央党校政法教研部教授王立峰就此条例发布的背景、意义以及主要内容进行解读。&lt;/p&gt;', '13', 'Uploads/2018-08-18/5b778395051c6.jpg', '4', '1534559125', '7', '1');
INSERT INTO `c_class` VALUES ('16', '《榜样》专题节目', '&lt;p&gt;伟大时代呼唤伟大精神，崇高事业需要榜样引领。两优一先、两学一做特别节目《榜样》，由中共中央组织部、中央电视台真诚奉献。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '14', 'Uploads/2018-08-18/5b778459f2908.JPG', '1', '1534559384', '1', '1');
INSERT INTO `c_class` VALUES ('17', '不忘初心、做合格党员', '<p>江西赣州市南康区龙回镇坪沙村支部书记黎明福，与全村党员零距离互动交流了入党的“初心”，并通过讲述革命故事，结合工作实际的方式，分享了自己入党“初心”从清晰到模糊再到清晰和坚定的心路历程，重温了“不忘初心、勇挑重担、做合格党员”的铿锵誓言。</p><p><br/></p>', '14', '/Uploads/20181026/ff110c8feadd003f499d8c0e528e7c9d.jpg', '1', '1540804418', '4', '1');
INSERT INTO `c_class` VALUES ('18', '知行止、守纪律，做合格党员', '&lt;p&gt;本片以动漫故事的形式，通过三个身边小故事，生动、形象、直观地阐述了党的纪律和规矩，告诫广大党员在日常工作和学习生活中知行止、守纪律，做合格党员，是面向广大党员干部群众宣传“两学一做”学习教育的微公益片。&lt;/p&gt;', '14', 'Uploads/2018-08-18/5b7784c1048d6.jpg', '1', '1534559425', '3', '1');
INSERT INTO `c_class` VALUES ('19', '二十一世纪中国梦的战略宏图和阶段目标', '&lt;p&gt;中共中央党校教授辛守良通过本讲座，为大家介绍了研究当代中国发展进程不同时段的战略目标，特别是准确把握二十一世纪中国梦的战略构想和几个阶段的目标，对统一全党和全国人民的思想行动，实现中国梦，有着十分重要的意义。&lt;/p&gt;', '16', 'Uploads/2018-08-18/5b778514e9f5e.jpg', '2', '1534559508', '1', '1');
INSERT INTO `c_class` VALUES ('20', '中国梦与社会建设', '&lt;p&gt;中国梦是中华民族近代以来最美好的夙愿，全面建成小康社会实现小康社会的关键一步。今后五年是全面建成小康社会的关键时期，面临一系列矛盾和挑战，必须贯彻四个全面，着力做好社会建设。我们要认真总结社会建设的经验，解决好社会建设两大根本任务。&lt;/p&gt;', '16', 'Uploads/2018-08-18/5b7785c77a200.jpg', '3', '1534559687', '3', '1');
INSERT INTO `c_class` VALUES ('21', '提高驾驭科学发展的能力', '&lt;p&gt;中共中央党校研究生院院长、教授韩庆祥讲授如何提高驾驭科学发展的能力。&lt;/p&gt;', '19', 'Uploads/2018-08-18/5b7786d1e9c1f.jpg', '1', '1534559953', '2', '1');
INSERT INTO `c_class` VALUES ('22', '党性修养和四个全面', '&lt;p&gt;本讲座主要讲了三大问题：1.谈一谈党性修养是中国共产党人的创造；2.党性修养的内容；3.我们按照四个全面的要求来要求自己，来提高自己。&lt;/p&gt;', '17', 'Uploads/2018-08-18/5b7794c8b1dcf.jpg', '1', '1534563528', '0', '1');
INSERT INTO `c_class` VALUES ('23', '生态文明建设与中国发展新战略', '&lt;p&gt;生态文明是十八大提出的重要战略。本课程从时代高度讲授十八大提出生态文明战略的时代必然性；从生态文明与中国古代文明的契合性，阐述生态文明是基于东方智慧的文明之道；从世界新经济革命，探索中国绿色化发展之路；从制度与文化建设，研究五位一体生态文明建设落实问题。&lt;/p&gt;', '18', 'Uploads/2018-08-18/5b7795c886259.jpg', '2', '1534563784', '1', '1');
INSERT INTO `c_class` VALUES ('24', '大型电视专题片《永远在路上》', '<p>专题片反映了党的十八大以来，以习近平同志为总书记的党中央把全面从严治党提升到“四个全面”战略布局高度，正风肃纪，锲而不舍纠“四风”，赢得党心民心；反腐惩恶，整治群众身边的腐败问题，厚植党执政的政治基础，着力构建不敢腐、不能腐、不想腐的体制机制，使不敢腐的震慑作用得到发挥，不能腐、不想腐的效应初步显现，反腐败斗争压倒性态势正在形成。</p>', '21', '/Uploads/20181026/d5b8eef17c0f4c04b6e375f0617c5571.jpg', '1', '1540547467', '3', '1');
INSERT INTO `c_class` VALUES ('25', '预防职务犯罪微电影：到底怨谁', '&lt;p&gt;本片以微电影的形式讲述了一名叫陈步元的年轻机关干部成长、犯错的人生经历：入仕之初，他兢兢业业，作出了突出贡献，得到了群众认可和领导赏识，但随着职位不断升高，他的私欲不断膨胀，从“小错”到“大错”，最终锒铛入狱。故事有一定代表性和典型性，对当下机关干部特别是年轻干部有很好的警示作用。&lt;/p&gt;', '21', 'Uploads/2018-08-18/5b77b7db45704.jpg', '0', '1534572507', '6', '2');
INSERT INTO `c_class` VALUES ('26', '专题片《打铁还需自身硬》', '<p>反腐败斗争依然严峻复杂的形势下，纪检监察系统也非净土，少数纪检监察干部由执纪监督者蜕变为腐败分子，教训深刻。监督者自身，绝不能成为监督的盲点。党的十八大以来，纪检监察机关严肃查处一批违纪违法的纪检干部，采取一系列措施加强自我监督。</p>', '21', '/Uploads/20181026/1d258612cbb92a98afbfa2bf8e331f36.jpg', '3', '1540547456', '11', '1');
INSERT INTO `c_class` VALUES ('27', '十年内战', '&lt;p&gt;《党史故事100讲》以党的90多年发展历程为顺序，以党的重大事件为线索，以不同时期的典型事例、历史人物、精彩故事为主干，全景式回顾党的伟大历程和辉煌成就。《党史故事100讲▪十年内战》，为您讲述中国共产党从南昌起义到长征胜利会师期间艰苦奋斗的历程。&lt;/p&gt;', '23', 'Uploads/2018-08-18/5b77b8ce6fce6.jpg', '10', '1534572750', '28', '1');
INSERT INTO `c_class` VALUES ('28', '践行“三严三实” 当好“四有”公仆', '&lt;p&gt;主讲：唐立浩&lt;/p&gt;&lt;p&gt;中共山西省长治潞城市委书记唐立浩以“践行‘三严三实’ 当好‘四有’公仆”为主题，讲“三严三实”专题党课。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '24', 'Uploads/2018-08-18/5b77b9240ed36.jpg', '1', '1534572836', '8', '1');
INSERT INTO `c_class` VALUES ('29', '“十三五”期间民生热点问题分析', '<p>2016年全国两会召开后，《“十三五”规划纲要》正式通过并公布，其中最重要的内容就是民生改善。本讲座主要展望分析了国家通过哪些制度安排来改善民生问题，以及在实施过程中会遇到哪些挑战并如何应对。</p>', '26', '/Uploads/20181026/e7484e6723f03f73c35935c194c1f72f.jpg', '3', '1540547443', '16', '1');
INSERT INTO `c_class` VALUES ('30', '当前宏观经济形势分析', '<p>本讲座主要讲述了两大问题：一全球经济情况分析；二我国目前的宏观经济情况分析。具体包括整个的中国的国际收支情况；对外经贸的发展情况和问题分析；中国经济的发展战略以及前景展望。</p>', '27', '/Uploads/20181026/23a4e581c725a5cf84aa50204846ccfb.jpg', '3', '1540547403', '78', '1');
INSERT INTO `c_class` VALUES ('31', '农村土地经营权流转有关政策', '<p>本课主要介绍农村土地经营权流转的涵义、前提、主体、遵循的原则、方式等内容，同时针对农村土地经营权流转中常见问题进行解答。</p>', '29', '/Uploads/20181030/59ab0b7c620d71483c7c2ca0093a1d84.jpg', '1', '1540862268', '24', '2');
INSERT INTO `c_class` VALUES ('32', '职务犯罪问题研究', '<p>本课程主要讲述四大问题：第一，现今我国职务犯罪的概况；第二，当前预防和惩治职务犯罪存在的主要问题；第三，职务犯罪存在问题的原因；第四，预防和惩治职务犯罪应注意的几对关系。</p>', '30', '/Uploads/20181030/8eafccbe1d02eddf6d32d11f31d4aaf2.jpg', '4', '1540862553', '39', '1');

-- ----------------------------
-- Table structure for c_class_cate
-- ----------------------------
DROP TABLE IF EXISTS `c_class_cate`;
CREATE TABLE `c_class_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '课程名称',
  `pid` int(10) unsigned DEFAULT '0' COMMENT '父id',
  `sort` tinyint(2) unsigned DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8 COMMENT='课程分类';

-- ----------------------------
-- Records of c_class_cate
-- ----------------------------
INSERT INTO `c_class_cate` VALUES ('10', '两学一做', '0', '0');
INSERT INTO `c_class_cate` VALUES ('12', '学党章', '10', '0');
INSERT INTO `c_class_cate` VALUES ('13', '学党规', '10', '0');
INSERT INTO `c_class_cate` VALUES ('14', '做合格党员', '10', '0');
INSERT INTO `c_class_cate` VALUES ('15', '思想理论', '0', '0');
INSERT INTO `c_class_cate` VALUES ('16', '中国梦', '15', '0');
INSERT INTO `c_class_cate` VALUES ('17', '“四个全面”战略布局', '15', '0');
INSERT INTO `c_class_cate` VALUES ('18', '五大发展理念', '15', '0');
INSERT INTO `c_class_cate` VALUES ('19', '中国特色社会主义', '15', '0');
INSERT INTO `c_class_cate` VALUES ('20', '党性教育', '0', '0');
INSERT INTO `c_class_cate` VALUES ('21', '党风廉政建设', '20', '0');
INSERT INTO `c_class_cate` VALUES ('23', '党史知识', '20', '0');
INSERT INTO `c_class_cate` VALUES ('24', '三严三实', '20', '0');
INSERT INTO `c_class_cate` VALUES ('25', '形势教育', '0', '0');
INSERT INTO `c_class_cate` VALUES ('26', '“十三五”规划', '25', '0');
INSERT INTO `c_class_cate` VALUES ('27', '经济形势', '25', '0');
INSERT INTO `c_class_cate` VALUES ('28', '政策法规', '0', '0');
INSERT INTO `c_class_cate` VALUES ('29', '政策解读', '28', '0');
INSERT INTO `c_class_cate` VALUES ('30', '法律法规', '28', '0');

-- ----------------------------
-- Table structure for c_class_chapter
-- ----------------------------
DROP TABLE IF EXISTS `c_class_chapter`;
CREATE TABLE `c_class_chapter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `class_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '课程id',
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '名称',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `path` varchar(500) NOT NULL DEFAULT '' COMMENT '视频地址',
  `vtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '时长',
  `episode` tinyint(2) NOT NULL,
  `ctime` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `is_del` tinyint(2) unsigned DEFAULT '0' COMMENT '是否删除 0未删除 1已删除',
  `dtime` int(10) unsigned DEFAULT '0' COMMENT '删除时间',
  PRIMARY KEY (`id`),
  KEY `class_id` (`class_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=utf8 COMMENT='章节表';

-- ----------------------------
-- Records of c_class_chapter
-- ----------------------------
INSERT INTO `c_class_chapter` VALUES ('28', '12', '党章对党的干部的标准如何规定的', 'Uploads/2018-08-18/5b77d9efcf351.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E5%85%9A%E7%AB%A0%E5%AF%B9%E5%85%9A%E7%9A%84%E5%B9%B2%E9%83%A8%E7%9A%84%E6%A0%87%E5%87%86%E5%A6%82%E4%BD%95%E8%A7%84%E5%AE%9A%E7%9A%84%EF%BC%9F_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1884', '1', '1534581231', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('29', '12', '党章对党的纪律是如何规定的？', 'Uploads/2018-08-18/5b77dca5cdf9b.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E5%85%9A%E7%AB%A0%E5%AF%B9%E5%85%9A%E7%9A%84%E7%BA%AA%E5%BE%8B%E6%98%AF%E5%A6%82%E4%BD%95%E8%A7%84%E5%AE%9A%E7%9A%84%EF%BC%9F_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1884', '2', '1534581925', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('30', '12', '如何理解中国共产党员的条件？', 'Uploads/2018-08-18/5b77dd187c23b.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E5%A6%82%E4%BD%95%E7%90%86%E8%A7%A3%E4%B8%AD%E5%9B%BD%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%9A%84%E6%9D%A1%E4%BB%B6%EF%BC%9F_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '114', '3', '1534582040', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('31', '12', '如何理解中国共产党的性质？', 'Uploads/2018-08-18/5b77e151efeac.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E5%A6%82%E4%BD%95%E7%90%86%E8%A7%A3%E4%B8%AD%E5%9B%BD%E5%85%B1%E4%BA%A7%E5%85%9A%E7%9A%84%E6%80%A7%E8%B4%A8%EF%BC%9F_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '92', '4', '1534583121', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('32', '12', '如何理解中国共产党的根本宗旨？', 'Uploads/2018-08-18/5b77e1cb18fc0.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E5%A6%82%E4%BD%95%E7%90%86%E8%A7%A3%E4%B8%AD%E5%9B%BD%E5%85%B1%E4%BA%A7%E5%85%9A%E7%9A%84%E6%A0%B9%E6%9C%AC%E5%AE%97%E6%97%A8%EF%BC%9F_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '254', '5', '1534583243', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('33', '12', '如何理解中国共产党的组织原则？', 'Uploads/2018-08-18/5b77e29141ddc.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E5%A6%82%E4%BD%95%E7%90%86%E8%A7%A3%E4%B8%AD%E5%9B%BD%E5%85%B1%E4%BA%A7%E5%85%9A%E7%9A%84%E7%BB%84%E7%BB%87%E5%8E%9F%E5%88%99%EF%BC%9F_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '155', '6', '1534583441', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('34', '12', '如何理解党员的义务和权利？', 'Uploads/2018-08-18/5b77e2e1473f3.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E5%A6%82%E4%BD%95%E7%90%86%E8%A7%A3%E5%85%9A%E5%91%98%E7%9A%84%E4%B9%89%E5%8A%A1%E5%92%8C%E6%9D%83%E5%88%A9%EF%BC%9F_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '67', '7', '1534583521', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('35', '12', '如何跳出党风建设的历史周期律？', 'Uploads/2018-08-18/5b77e35c6b40c.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E5%A6%82%E4%BD%95%E8%B7%B3%E5%87%BA%E5%85%9A%E9%A3%8E%E5%BB%BA%E8%AE%BE%E7%9A%84%E5%8E%86%E5%8F%B2%E5%91%A8%E6%9C%9F%E5%BE%8B%EF%BC%9F_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '222', '8', '1534583644', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('36', '30', '当前宏观经济形势分析（上）', 'Uploads/2018-08-18/5b77e649db17a.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E5%BD%93%E5%89%8D%E5%AE%8F%E8%A7%82%E7%BB%8F%E6%B5%8E%E5%BD%A2%E5%8A%BF%E5%88%86%E6%9E%90%EF%BC%88%E4%B8%8A%EF%BC%89_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1866', '1', '1534584393', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('37', '30', '当前宏观经济形势分析（下）', 'Uploads/2018-08-18/5b77e712a4f59.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E5%BD%93%E5%89%8D%E5%AE%8F%E8%A7%82%E7%BB%8F%E6%B5%8E%E5%BD%A2%E5%8A%BF%E5%88%86%E6%9E%90%EF%BC%88%E4%B8%8B%EF%BC%89_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1904', '3', '1534584594', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('38', '30', '当前宏观经济形势分析（中）', 'Uploads/2018-08-18/5b77e7777a4de.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E5%BD%93%E5%89%8D%E5%AE%8F%E8%A7%82%E7%BB%8F%E6%B5%8E%E5%BD%A2%E5%8A%BF%E5%88%86%E6%9E%90%EF%BC%88%E4%B8%AD%EF%BC%89_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1840', '2', '1534584695', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('39', '24', '《永远在路上》 第一集 人心向背', 'Uploads/2018-08-20/5b7a2e55ec7a0.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B1280x720%5D%20%E3%80%8A%E6%B0%B8%E8%BF%9C%E5%9C%A8%E8%B7%AF%E4%B8%8A%E3%80%8B%20%E7%AC%AC%E4%B8%80%E9%9B%86%20%E4%BA%BA%E5%BF%83%E5%90%91%E8%83%8C_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1081', '1', '1534733909', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('40', '17', '不忘初心、做合格党员', 'Uploads/2018-08-20/5b7a2fd343866.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B1280x720%5D%20%E4%B8%8D%E5%BF%98%E5%88%9D%E5%BF%83%E3%80%81%E5%81%9A%E5%90%88%E6%A0%BC%E5%85%9A%E5%91%98_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '599', '1', '1534734291', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('41', '18', '知行止、守纪律，做合格党员', 'Uploads/2018-08-20/5b7a314e7621f.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B1280x720%5D%20%E7%9F%A5%E8%A1%8C%E6%AD%A2%E3%80%81%E5%AE%88%E7%BA%AA%E5%BE%8B%EF%BC%8C%E5%81%9A%E5%90%88%E6%A0%BC%E5%85%9A%E5%91%98_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '142', '1', '1534734670', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('42', '26', '专题片《打铁还需自身硬》 下篇 《以担当诠释忠诚 》', 'Uploads/2018-08-20/5b7a31d5896b7.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x270%5D%20%E4%B8%93%E9%A2%98%E7%89%87%E3%80%8A%E6%89%93%E9%93%81%E8%BF%98%E9%9C%80%E8%87%AA%E8%BA%AB%E7%A1%AC%E3%80%8B%20%E4%B8%8B%E7%AF%87%20%E3%80%8A%E4%BB%A5%E6%8B%85%E5%BD%93%E8%AF%A0%E9%87%8A%E5%BF%A0%E8%AF%9A%20%E3%80%8B_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '2699', '3', '1534734805', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('43', '26', '专题片《打铁还需自身硬》上篇《信任不能代替监督》', 'Uploads/2018-08-20/5b7a321e0598e.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x270%5D%20%E4%B8%93%E9%A2%98%E7%89%87%E3%80%8A%E6%89%93%E9%93%81%E8%BF%98%E9%9C%80%E8%87%AA%E8%BA%AB%E7%A1%AC%E3%80%8B%E4%B8%8A%E7%AF%87%E3%80%8A%E4%BF%A1%E4%BB%BB%E4%B8%8D%E8%83%BD%E4%BB%A3%E6%9B%BF%E7%9B%91%E7%9D%A3%E3%80%8B_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '2566', '1', '1534734878', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('44', '26', '专题片《打铁还需自身硬》中篇《严防灯下黑》', 'Uploads/2018-08-20/5b7a326cb5591.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x270%5D%20%E4%B8%93%E9%A2%98%E7%89%87%E3%80%8A%E6%89%93%E9%93%81%E8%BF%98%E9%9C%80%E8%87%AA%E8%BA%AB%E7%A1%AC%E3%80%8B%E4%B8%AD%E7%AF%87%E3%80%8A%E4%B8%A5%E9%98%B2%E7%81%AF%E4%B8%8B%E9%BB%91%E3%80%8B_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '2701', '2', '1534734956', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('45', '15', '《中国共产党党组工作条例》解读（一）', 'Uploads/2018-08-20/5b7a32fd825d0.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E3%80%8A%E4%B8%AD%E5%9B%BD%E5%85%B1%E4%BA%A7%E5%85%9A%E5%85%9A%E7%BB%84%E5%B7%A5%E4%BD%9C%E6%9D%A1%E4%BE%8B%E3%80%8B%E8%A7%A3%E8%AF%BB%EF%BC%88%E4%B8%80%EF%BC%89_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1970', '1', '1534735101', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('46', '15', '《中国共产党党组工作条例》解读（三）', 'Uploads/2018-08-20/5b7a334fce2d5.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E3%80%8A%E4%B8%AD%E5%9B%BD%E5%85%B1%E4%BA%A7%E5%85%9A%E5%85%9A%E7%BB%84%E5%B7%A5%E4%BD%9C%E6%9D%A1%E4%BE%8B%E3%80%8B%E8%A7%A3%E8%AF%BB%EF%BC%88%E4%B8%89%EF%BC%89_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '2025', '3', '1534735183', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('47', '15', '《中国共产党党组工作条例》解读（二）', 'Uploads/2018-08-20/5b7a33a188ab7.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E3%80%8A%E4%B8%AD%E5%9B%BD%E5%85%B1%E4%BA%A7%E5%85%9A%E5%85%9A%E7%BB%84%E5%B7%A5%E4%BD%9C%E6%9D%A1%E4%BE%8B%E3%80%8B%E8%A7%A3%E8%AF%BB%EF%BC%88%E4%BA%8C%EF%BC%89_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1827', '2', '1534735265', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('48', '12', '中国共产党的指导思想是什么？', 'Uploads/2018-08-20/5b7a347a08e53.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E4%B8%AD%E5%9B%BD%E5%85%B1%E4%BA%A7%E5%85%9A%E7%9A%84%E6%8C%87%E5%AF%BC%E6%80%9D%E6%83%B3%E6%98%AF%E4%BB%80%E4%B9%88%EF%BC%9F_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '101', '9', '1534735482', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('49', '15', '中国共产党的最低纲领和最高纲领是什么关系？', 'Uploads/2018-08-20/5b7a389a35d96.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E4%B8%AD%E5%9B%BD%E5%85%B1%E4%BA%A7%E5%85%9A%E7%9A%84%E6%9C%80%E4%BD%8E%E7%BA%B2%E9%A2%86%E5%92%8C%E6%9C%80%E9%AB%98%E7%BA%B2%E9%A2%86%E6%98%AF%E4%BB%80%E4%B9%88%E5%85%B3%E7%B3%BB%EF%BC%9F_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '157', '10', '1534736538', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('50', '20', '中国梦与社会建设（一）', 'Uploads/2018-08-20/5b7a38d5af00a.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E4%B8%AD%E5%9B%BD%E6%A2%A6%E4%B8%8E%E7%A4%BE%E4%BC%9A%E5%BB%BA%E8%AE%BE%EF%BC%88%E4%B8%80%EF%BC%89_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1752', '1', '1534736597', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('51', '20', '中国梦与社会建设（三）', 'Uploads/2018-08-20/5b7a395ce1e40.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E4%B8%AD%E5%9B%BD%E6%A2%A6%E4%B8%8E%E7%A4%BE%E4%BC%9A%E5%BB%BA%E8%AE%BE%EF%BC%88%E4%B8%89%EF%BC%89_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1952', '3', '1534736732', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('52', '20', '中国梦与社会建设（二）', 'Uploads/2018-08-20/5b7a399f77532.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E4%B8%AD%E5%9B%BD%E6%A2%A6%E4%B8%8E%E7%A4%BE%E4%BC%9A%E5%BB%BA%E8%AE%BE%EF%BC%88%E4%BA%8C%EF%BC%89_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1938', '2', '1534736799', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('53', '19', '二十一世纪中国梦的战略宏图和阶段目标（上）', 'Uploads/2018-08-20/5b7a3a0043289.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E4%BA%8C%E5%8D%81%E4%B8%80%E4%B8%96%E7%BA%AA%E4%B8%AD%E5%9B%BD%E6%A2%A6%E7%9A%84%E6%88%98%E7%95%A5%E5%AE%8F%E5%9B%BE%E5%92%8C%E9%98%B6%E6%AE%B5%E7%9B%AE%E6%A0%87%EF%BC%88%E4%B8%8A%EF%BC%89_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1883', '1', '1534736896', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('54', '19', '二十一世纪中国梦的战略宏图和阶段目标（下）', 'Uploads/2018-08-20/5b7a3a697d1af.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E4%BA%8C%E5%8D%81%E4%B8%80%E4%B8%96%E7%BA%AA%E4%B8%AD%E5%9B%BD%E6%A2%A6%E7%9A%84%E6%88%98%E7%95%A5%E5%AE%8F%E5%9B%BE%E5%92%8C%E9%98%B6%E6%AE%B5%E7%9B%AE%E6%A0%87%EF%BC%88%E4%B8%8B%EF%BC%89_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1802', '2', '1534737001', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('55', '22', '党性修养和四个全面', 'Uploads/2018-08-20/5b7a3ae93fe78.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E5%85%9A%E6%80%A7%E4%BF%AE%E5%85%BB%E5%92%8C%E5%9B%9B%E4%B8%AA%E5%85%A8%E9%9D%A2_%E8%BF%9C%E7%A8%8B%E6%95%99%E8%82%B2_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1729', '1', '1534737129', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('56', '21', '提高驾驭科学发展的能力', 'Uploads/2018-08-20/5b7a3bd794b5c.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E6%8F%90%E9%AB%98%E9%A9%BE%E9%A9%AD%E7%A7%91%E5%AD%A6%E5%8F%91%E5%B1%95%E7%9A%84%E8%83%BD%E5%8A%9B_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '4275', '1', '1534737367', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('57', '23', '生态文明是基于东方智慧的治理之道', 'Uploads/2018-08-20/5b7a525407c8c.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E7%94%9F%E6%80%81%E6%96%87%E6%98%8E%E5%BB%BA%E8%AE%BE%E4%B8%8E%E4%B8%AD%E5%9B%BD%E5%8F%91%E5%B1%95%E6%96%B0%E6%88%98%E7%95%A5%EF%BC%88%E4%B8%80%EF%BC%89%E7%94%9F%E6%80%81%E6%96%87%E6%98%8E%E6%98%AF%E5%9F%BA%E4%BA%8E%E4%B8%9C%E6%96%B9%E6%99%BA%E6%85%A7%E7%9A%84%E6%B2%BB%E7%90%86%E4%B9%8B%E9%81%93_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91%20%281%29.Ogg', '2052', '1', '1534743036', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('58', '23', '生态文明时代是中华民族伟大复兴的时代', 'Uploads/2018-08-20/5b7a530e101cc.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E7%94%9F%E6%80%81%E6%96%87%E6%98%8E%E5%BB%BA%E8%AE%BE%E4%B8%8E%E4%B8%AD%E5%9B%BD%E5%8F%91%E5%B1%95%E6%96%B0%E6%88%98%E7%95%A5%EF%BC%88%E4%BA%8C%EF%BC%89%E7%94%9F%E6%80%81%E6%96%87%E6%98%8E%E6%97%B6%E4%BB%A3%E6%98%AF%E4%B8%AD%E5%8D%8E%E6%B0%91%E6%97%8F%E4%BC%9F%E5%A4%A7%E5%A4%8D%E5%85%B4%E7%9A%84%E6%97%B6%E4%BB%A3_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '3661', '2', '1534743310', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('59', '23', '新能源革命引领中国走向绿色发展新时代', 'Uploads/2018-08-20/5b7a53bb1ae1d.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E7%94%9F%E6%80%81%E6%96%87%E6%98%8E%E5%BB%BA%E8%AE%BE%E4%B8%8E%E4%B8%AD%E5%9B%BD%E5%8F%91%E5%B1%95%E6%96%B0%E6%88%98%E7%95%A5%EF%BC%88%E4%B8%89%EF%BC%89%E6%96%B0%E8%83%BD%E6%BA%90%E9%9D%A9%E5%91%BD%E5%BC%95%E9%A2%86%E4%B8%AD%E5%9B%BD%E8%B5%B0%E5%90%91%E7%BB%BF%E8%89%B2%E5%8F%91%E5%B1%95%E6%96%B0%E6%97%B6%E4%BB%A3_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '2052', '3', '1534743483', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('60', '28', '践行“三严三实” 当好“四有”公仆', 'Uploads/2018-08-20/5b7a542fda502.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B480x360%5D%20%E8%B7%B5%E8%A1%8C%E2%80%9C%E4%B8%89%E4%B8%A5%E4%B8%89%E5%AE%9E%E2%80%9D%20%E5%BD%93%E5%A5%BD%E2%80%9C%E5%9B%9B%E6%9C%89%E2%80%9D%E5%85%AC%E4%BB%86%E2%80%94%E2%80%94%E4%B8%AD%E5%85%B1%E5%B1%B1%E8%A5%BF%E7%9C%81%E9%95%BF%E6%B2%BB%E6%BD%9E%E5%9F%8E%E5%B8%82%E5%A7%94%E4%B9%A6%E8%AE%B0%E5%94%90%E7%AB%8B%E6%B5%A9_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '3661', '1', '1534743599', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('61', '16', '《榜样》专题节目', 'Uploads/2018-08-20/5b7a550f28063.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B640x360%5D%20%E3%80%8A%E6%A6%9C%E6%A0%B7%E3%80%8B%E4%B8%93%E9%A2%98%E8%8A%82%E7%9B%AE_%E6%A6%9C%E6%A0%B7%E4%B8%93%E9%A2%98%E8%8A%82%E7%9B%AE_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '5397', '1', '1534743823', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('62', '27', '第一集 南昌起义 八七定向', 'Uploads/2018-08-20/5b7a559f7c101.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B640x360%5D%20%E7%AC%AC%E4%B8%80%E9%9B%86%20%E5%8D%97%E6%98%8C%E8%B5%B7%E4%B9%89%20%E5%85%AB%E4%B8%83%E5%AE%9A%E5%90%91_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '2427', '1', '1534743967', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('63', '27', '第七集 红色割据 星火燎原', 'Uploads/2018-08-20/5b7a55e261b40.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B640x360%5D%20%E7%AC%AC%E4%B8%83%E9%9B%86%20%E7%BA%A2%E8%89%B2%E5%89%B2%E6%8D%AE%20%E6%98%9F%E7%81%AB%E7%87%8E%E5%8E%9F_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '2355', '7', '1534744034', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('64', '27', '第三集 广州起义 群雄四起', 'Uploads/2018-08-20/5b7a563146be9.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B640x360%5D%20%E7%AC%AC%E4%B8%89%E9%9B%86%20%E5%B9%BF%E5%B7%9E%E8%B5%B7%E4%B9%89%20%E7%BE%A4%E9%9B%84%E5%9B%9B%E8%B5%B7_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '2358', '3', '1534744113', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('65', '27', '第九集 血战湘江 遵义转折', 'Uploads/2018-08-20/5b7a566a5915a.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B640x360%5D%20%E7%AC%AC%E4%B9%9D%E9%9B%86%20%E8%A1%80%E6%88%98%E6%B9%98%E6%B1%9F%20%E9%81%B5%E4%B9%89%E8%BD%AC%E6%8A%98_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '2169', '9', '1534744170', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('66', '27', '第二集 秋收暴动 开辟井冈', 'Uploads/2018-08-20/5b7a56ac7de5f.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B640x360%5D%20%E7%AC%AC%E4%BA%8C%E9%9B%86%20%E7%A7%8B%E6%94%B6%E6%9A%B4%E5%8A%A8%20%E5%BC%80%E8%BE%9F%E4%BA%95%E5%86%88_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '2210', '2', '1534744236', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('67', '27', '第五集 中共六大 低潮奋起', 'Uploads/2018-08-20/5b7a56e6897fa.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B640x360%5D%20%E7%AC%AC%E4%BA%94%E9%9B%86%20%E4%B8%AD%E5%85%B1%E5%85%AD%E5%A4%A7%20%E4%BD%8E%E6%BD%AE%E5%A5%8B%E8%B5%B7_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '2394', '5', '1534744294', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('68', '27', '第八集 以弱抗强 打破“围剿”', 'Uploads/2018-08-20/5b7a573351cd6.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B640x360%5D%20%E7%AC%AC%E5%85%AB%E9%9B%86%20%E4%BB%A5%E5%BC%B1%E6%8A%97%E5%BC%BA%20%E6%89%93%E7%A0%B4%E2%80%9C%E5%9B%B4%E5%89%BF%E2%80%9D_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '2271', '8', '1534744371', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('69', '27', '第六集 古田丰碑 奠定军魂', 'Uploads/2018-08-20/5b7a579098def.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B640x360%5D%20%E7%AC%AC%E5%85%AD%E9%9B%86%20%E5%8F%A4%E7%94%B0%E4%B8%B0%E7%A2%91.Ogg', '2440', '6', '1534744464', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('70', '27', '第十集 雄关漫道 三军会师', 'Uploads/2018-08-20/5b7a57ccb268c.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B640x360%5D%20%E7%AC%AC%E5%8D%81%E9%9B%86%20%E9%9B%84%E5%85%B3%E6%BC%AB%E9%81%93%20%E4%B8%89%E5%86%9B%E4%BC%9A%E5%B8%88_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '2409', '10', '1534744524', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('71', '27', '第四集 朱毛会师 组建劲旅', '/Uploads/20181027/1f548ea23a6d8822cebe34423cd8ee72.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B640x360%5D%20%E7%AC%AC%E5%9B%9B%E9%9B%86%20%E6%9C%B1%E6%AF%9B%E4%BC%9A%E5%B8%88%20%E7%BB%84%E5%BB%BA%E5%8A%B2%E6%97%85_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '2373', '4', '1534744587', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('72', '29', '民生改善进入新的历史阶段和改善民生的指导思想', '/Uploads/20181027/2345d1a23698469f90af38284e747058.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B720x576%5D%20%E2%80%9C%E5%8D%81%E4%B8%89%E4%BA%94%E2%80%9D%E6%9C%9F%E9%97%B4%E6%B0%91%E7%94%9F%E7%83%AD%E7%82%B9%E9%97%AE%E9%A2%98%E5%88%86%E6%9E%90%EF%BC%88%E4%B8%8A%EF%BC%89%E6%B0%91%E7%94%9F%E6%94%B9%E5%96%84%E8%BF%9B%E5%85%A5%E6%96%B0%E7%9A%84%E5%8E%86%E5%8F%B2%E9%98%B6%E6%AE%B5%E5%92%8C%E6%94%B9%E5%96%84%E6%B0%91%E7%94%9F%E7%9A%84%E6%8C%87%E5%AF%BC%E6%80%9D%E6%83%B3_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1872', '1', '1534744734', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('73', '29', '基本举措和形成改善民生共享发展的社会合力', '/Uploads/20181027/c34d3f3a3d0b21f6724f59a3c6bc4fc0.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B720x576%5D%20%E2%80%9C%E5%8D%81%E4%B8%89%E4%BA%94%E2%80%9D%E6%9C%9F%E9%97%B4%E6%B0%91%E7%94%9F%E7%83%AD%E7%82%B9%E9%97%AE%E9%A2%98%E5%88%86%E6%9E%90%EF%BC%88%E4%B8%8B%EF%BC%89%E5%9F%BA%E6%9C%AC%E4%B8%BE%E6%8E%AA%E5%92%8C%E5%BD%A2%E6%88%90%E6%94%B9%E5%96%84%E6%B0%91%E7%94%9F%E5%85%B1%E4%BA%AB%E5%8F%91%E5%B1%95%E7%9A%84%E7%A4%BE%E4%BC%9A%E5%90%88%E5%8A%9B_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1927', '3', '1534744825', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('74', '29', '改善民生的基本举措', '/Uploads/20181027/6c19e7beb6bb4a3908fbe2e8ed994d49.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B720x576%5D%20%E2%80%9C%E5%8D%81%E4%B8%89%E4%BA%94%E2%80%9D%E6%9C%9F%E9%97%B4%E6%B0%91%E7%94%9F%E7%83%AD%E7%82%B9%E9%97%AE%E9%A2%98%E5%88%86%E6%9E%90%EF%BC%88%E4%B8%AD%EF%BC%89%E6%94%B9%E5%96%84%E6%B0%91%E7%94%9F%E7%9A%84%E5%9F%BA%E6%9C%AC%E4%B8%BE%E6%8E%AA_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1849', '2', '1534744926', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('75', '14', '《中国共产党党内监督条例》解读', '/Uploads/20181027/d52befc104e838ac4388141b8252abcc.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B720x576%5D%20%E3%80%8A%E4%B8%AD%E5%9B%BD%E5%85%B1%E4%BA%A7%E5%85%9A%E5%85%9A%E5%86%85%E7%9B%91%E7%9D%A3%E6%9D%A1%E4%BE%8B%E3%80%8B%E8%A7%A3%E8%AF%BB_%E8%BF%9C%E7%A8%8B%E6%95%99%E8%82%B2_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1770', '1', '1534746240', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('76', '13', '与时俱进话党章', '/Uploads/20181027/36e43f4c1a78768458ca776f97a004fe.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B720x576%5D%20%E4%B8%8E%E6%97%B6%E4%BF%B1%E8%BF%9B%E8%AF%9D%E5%85%9A%E7%AB%A0_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1875', '1', '1534746345', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('77', '31', '农村土地经营权流转有关政策', '/Uploads/20181027/fa801bf646ac096dfcaebad36a3cad12.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B720x576%5D%20%E5%86%9C%E6%9D%91%E5%9C%9F%E5%9C%B0%E7%BB%8F%E8%90%A5%E6%9D%83%E6%B5%81%E8%BD%AC%E6%9C%89%E5%85%B3%E6%94%BF%E7%AD%96_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1681', '1', '1534746898', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('78', '32', '职务犯罪问题研究（一）现今我国职务犯罪的概况', '/Uploads/20181027/299346a2bcb2aaf65dfc55d3f59a7292.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B720x576%5D%20%E8%81%8C%E5%8A%A1%E7%8A%AF%E7%BD%AA%E9%97%AE%E9%A2%98%E7%A0%94%E7%A9%B6%EF%BC%88%E4%B8%80%EF%BC%89%E7%8E%B0%E4%BB%8A%E6%88%91%E5%9B%BD%E8%81%8C%E5%8A%A1%E7%8A%AF%E7%BD%AA%E7%9A%84%E6%A6%82%E5%86%B5_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1664', '1', '1534747153', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('79', '32', '职务犯罪问题研究（三）职务犯罪存在问题的原因', '/Uploads/20181027/281996395c54e46375bbe935118b6b01.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B720x576%5D%20%E8%81%8C%E5%8A%A1%E7%8A%AF%E7%BD%AA%E9%97%AE%E9%A2%98%E7%A0%94%E7%A9%B6%EF%BC%88%E4%B8%89%EF%BC%89%E8%81%8C%E5%8A%A1%E7%8A%AF%E7%BD%AA%E5%AD%98%E5%9C%A8%E9%97%AE%E9%A2%98%E7%9A%84%E5%8E%9F%E5%9B%A0_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1768', '3', '1534747304', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('80', '32', '职务犯罪问题研究（二）当前预防和惩治职务犯罪存在的主要问题', '/Uploads/20181027/268628b374ce47d6ab6eaa1376d55ba4.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B720x576%5D%20%E8%81%8C%E5%8A%A1%E7%8A%AF%E7%BD%AA%E9%97%AE%E9%A2%98%E7%A0%94%E7%A9%B6%EF%BC%88%E4%BA%8C%EF%BC%89%E5%BD%93%E5%89%8D%E9%A2%84%E9%98%B2%E5%92%8C%E6%83%A9%E6%B2%BB%E8%81%8C%E5%8A%A1%E7%8A%AF%E7%BD%AA%E5%AD%98%E5%9C%A8%E7%9A%84%E4%B8%BB%E8%A6%81%E9%97%AE%E9%A2%98_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '1813', '2', '1534747412', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('81', '32', '职务犯罪问题研究（四）预防和惩治职务犯罪应注意的几对关系', '/Uploads/20181030/7e7adc97c0bc2fa8244a55b14392c576.jpg', 'http://pdqmxr3kz.bkt.clouddn.com/job_%5B720x576%5D%20%E8%81%8C%E5%8A%A1%E7%8A%AF%E7%BD%AA%E9%97%AE%E9%A2%98%E7%A0%94%E7%A9%B6%EF%BC%88%E5%9B%9B%EF%BC%89%E9%A2%84%E9%98%B2%E5%92%8C%E6%83%A9%E6%B2%BB%E8%81%8C%E5%8A%A1%E7%8A%AF%E7%BD%AA%E5%BA%94%E6%B3%A8%E6%84%8F%E7%9A%84%E5%87%A0%E5%AF%B9%E5%85%B3%E7%B3%BB_%E5%AD%A6%E4%B9%A0_%E5%85%B1%E4%BA%A7%E5%85%9A%E5%91%98%E7%BD%91.Ogg', '664', '4', '1534747505', '0', '0');
INSERT INTO `c_class_chapter` VALUES ('82', '13', '测试课程', '\\Uploads\\20181026\\5412cfdd915549436a89a1527907f44e.jpg', 'http://omjfxxn9l.bkt.clouddn.com/jingwei1', '400', '1', '1540518102', '1', '1540524560');
INSERT INTO `c_class_chapter` VALUES ('83', '13', '测试', '/Uploads/20181026/d6a666f31068c551d3747a653993dfd4.jpg', 'http://dangjian.co-links.com/Heart/index.html', '60', '2', '1540544529', '1', '1540544584');

-- ----------------------------
-- Table structure for c_cloud
-- ----------------------------
DROP TABLE IF EXISTS `c_cloud`;
CREATE TABLE `c_cloud` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL DEFAULT '' COMMENT '标题',
  `content` text NOT NULL COMMENT '介绍',
  `path` varchar(255) NOT NULL DEFAULT '' COMMENT '外链地址',
  `visit` int(10) unsigned DEFAULT '0' COMMENT '访问量',
  `ctime` int(11) NOT NULL DEFAULT '0' COMMENT '创建时间',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COMMENT='云展馆';

-- ----------------------------
-- Records of c_cloud
-- ----------------------------
INSERT INTO `c_cloud` VALUES ('1', '中国恒天集团“清风恒天”云展馆', '“清风恒天”云展馆720度全景展现中国恒天集团党风廉政建设工作，通过网上展馆进一步学习贯彻习近平新时代中国特色社会主义思想，落实全面从严治党，营造员工清正廉洁、企业风清气正的良好氛围。', 'http://qf-cloud.ttfj.com/', '1342', '0', 'Static/Home/images/cloudList1.jpg');
INSERT INTO `c_cloud` VALUES ('2', '中国恒天集团“恒天党建”云展馆', '“恒天党建”云展馆720度全景展现中国恒天集团党建工作，通过网上展馆进一步学习贯彻习近平新时代中国特色社会主义思想，落实全面从严治党。', 'https://720yun.com/t/6l73ll5o2dfnm4dlhj', '3142', '0', 'Static/Home/images/cloudList2.jpg');
INSERT INTO `c_cloud` VALUES ('3', '党史馆', '党史馆通过图文、视频、语音等多种形式，更好地教育引导党员领导干部学习党史知识，增强思想自觉、政治自觉和行动自觉，学思践悟，学做结合。', 'https://720yun.com/t/85442e8qenidgq5914', '1342', '0', 'Static/Home/images/cloudList3.jpg');
INSERT INTO `c_cloud` VALUES ('4', '网上展馆 砥砺奋进的五年', '“砥砺奋进的五年”大型成就展是2017年9月25日在北京展览馆举办的我国十八大以来，以习近平同志为核心的党中央团结带领全党全国各族人民取得辉煌成就的大型成就展。', 'http://dlfj5.cctv.com/tour.html', '1342', '0', 'Static/Home/images/cloudList4.jpg');

-- ----------------------------
-- Table structure for c_company
-- ----------------------------
DROP TABLE IF EXISTS `c_company`;
CREATE TABLE `c_company` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_name` varchar(255) DEFAULT NULL COMMENT '公司名称',
  `company_email` varchar(20) DEFAULT NULL COMMENT '公司邮箱',
  `address` varchar(255) DEFAULT NULL COMMENT '公司地址',
  `identifier` varchar(255) DEFAULT NULL COMMENT '公司唯一标识符',
  `phone` char(255) DEFAULT NULL COMMENT '公司手机号',
  `ctime` int(25) DEFAULT NULL COMMENT '创建时间',
  `utime` int(25) DEFAULT '0' COMMENT '修改时间',
  `logo` varchar(255) DEFAULT NULL COMMENT '公司logo',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COMMENT='公司表';

-- ----------------------------
-- Records of c_company
-- ----------------------------
INSERT INTO `c_company` VALUES ('5', '腾讯天美', '969696@qq.com', '深圳大梅沙', 'RNKwyyVL7', '13245678945', '1536911220', '1540862715', '/Uploads/20181029/7e7752b08ead6cd97a5ee3bc218e6630.jpg');
INSERT INTO `c_company` VALUES ('12', '劲酒集团', '82596444', 'safasfaasg', 'd8ptjiTis', '13098001110', '1537349073', '1540618256', '/Uploads/20181027/89ca91bd4863d1c27840fa035e273378.png');
INSERT INTO `c_company` VALUES ('22', '武汉辛丙亮技术有限责任公司', '709464835', '111111111111111111111111111111', 'VoOBuK0xC', '15102724511', '1540541589', '1540615691', '/Uploads/20181027/9812fa6f64401ba88f23950afc1dc12c.jpg');
INSERT INTO `c_company` VALUES ('32', '武汉纺友技术有限公司', '969696@qq.com', '武汉光谷融众国际', 'D33GF35PB', '13245678945', '1540860959', '1540861064', '/Uploads/20181030/3edcda201c53d1a29efdc82c071caf95.jpg');

-- ----------------------------
-- Table structure for c_company_ad
-- ----------------------------
DROP TABLE IF EXISTS `c_company_ad`;
CREATE TABLE `c_company_ad` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(11) NOT NULL COMMENT '公司id',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '广告位名称',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '图片',
  `path` varchar(255) DEFAULT '' COMMENT '外链',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '类型 1表示广告 2表示banner',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COMMENT='公司广告位';

-- ----------------------------
-- Records of c_company_ad
-- ----------------------------
INSERT INTO `c_company_ad` VALUES ('13', '32', '党风建设11.1', '/Uploads/20181101/b367d356e3800f4f5c3e28d3d18810c6.jpg', 'www.baidu.com', '1');
INSERT INTO `c_company_ad` VALUES ('14', '32', 'banner测试', '/Uploads/20181101/33c55d087b06d732ba11325756de63fc.jpg', '71.test', '2');
INSERT INTO `c_company_ad` VALUES ('15', '32', 'banner测试1', '/Uploads/20181101/ff728d5b8524f6798ccb1a5f48a80a67.jpg', 'www.baidu.com', '1');

-- ----------------------------
-- Table structure for c_company_class
-- ----------------------------
DROP TABLE IF EXISTS `c_company_class`;
CREATE TABLE `c_company_class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) NOT NULL COMMENT '公司id',
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '课程名称',
  `introduce` text NOT NULL COMMENT '介绍',
  `cate_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '课程分类id',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `period` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '课时',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `visit` int(10) unsigned DEFAULT '0' COMMENT '观看次数',
  `status` tinyint(2) unsigned DEFAULT '1' COMMENT '状态 1正常2下架',
  PRIMARY KEY (`id`),
  KEY `cate_id` (`cate_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COMMENT='公司课程表';

-- ----------------------------
-- Records of c_company_class
-- ----------------------------
INSERT INTO `c_company_class` VALUES ('33', '32', '课程111edit', '<p>课程test</p>', '33', '/Uploads/20181101/80f48e2650eba8a694e17b2aa9aeadce.png', '0', '1541051696', '0', '2');

-- ----------------------------
-- Table structure for c_company_class_cate
-- ----------------------------
DROP TABLE IF EXISTS `c_company_class_cate`;
CREATE TABLE `c_company_class_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) NOT NULL COMMENT '公司id',
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '课程名称',
  `pid` int(10) unsigned DEFAULT '0' COMMENT '父id',
  `sort` tinyint(2) unsigned DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COMMENT='公司课程分类';

-- ----------------------------
-- Records of c_company_class_cate
-- ----------------------------
INSERT INTO `c_company_class_cate` VALUES ('31', '32', '11123', '0', '0');
INSERT INTO `c_company_class_cate` VALUES ('33', '32', '111', '31', '0');

-- ----------------------------
-- Table structure for c_company_new_cate
-- ----------------------------
DROP TABLE IF EXISTS `c_company_new_cate`;
CREATE TABLE `c_company_new_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '分类名称',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父id',
  `sort` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  `company_id` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '公司id',
  PRIMARY KEY (`id`),
  KEY `type` (`pid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COMMENT='新闻分类';

-- ----------------------------
-- Records of c_company_new_cate
-- ----------------------------
INSERT INTO `c_company_new_cate` VALUES ('10', '国内新闻', '0', '0', '32');
INSERT INTO `c_company_new_cate` VALUES ('11', '国际新闻', '0', '0', '32');
INSERT INTO `c_company_new_cate` VALUES ('12', '省市新闻', '10', '0', '32');

-- ----------------------------
-- Table structure for c_company_news
-- ----------------------------
DROP TABLE IF EXISTS `c_company_news`;
CREATE TABLE `c_company_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `content` text NOT NULL COMMENT '内容',
  `cate_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '分类id',
  `praise` int(10) unsigned DEFAULT '0' COMMENT '点赞量',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `dtime` int(10) unsigned DEFAULT '0' COMMENT '删除时间',
  `is_del` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除（0未删除 1已删除）',
  `recommend` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0不推荐1推荐',
  `company_id` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '公司id',
  PRIMARY KEY (`id`),
  KEY `cate_id` (`cate_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8 COMMENT='公司新闻党建要闻和反腐倡廉';

-- ----------------------------
-- Records of c_company_news
-- ----------------------------
INSERT INTO `c_company_news` VALUES ('133', '1031测试', '/Uploads/20181031/b615e629fb5111cb379063cadd63a244.jpg', '<p>1231</p>', '12', '0', '0', '0', '0', '0', '32');

-- ----------------------------
-- Table structure for c_company_photo
-- ----------------------------
DROP TABLE IF EXISTS `c_company_photo`;
CREATE TABLE `c_company_photo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) NOT NULL COMMENT '公司id',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '相册名称',
  `content` text NOT NULL COMMENT '描述',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `dtime` int(10) unsigned DEFAULT '0' COMMENT '删除时间',
  `is_del` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除(0未删除1已删除)',
  PRIMARY KEY (`id`),
  KEY `is_del` (`is_del`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8 COMMENT='公司党建相册';

-- ----------------------------
-- Records of c_company_photo
-- ----------------------------
INSERT INTO `c_company_photo` VALUES ('107', '32', '党风建设111111', '<p>ceshi</p><p>ceshi</p><p>ceshi</p>', '1541038792', '0', '0');

-- ----------------------------
-- Table structure for c_company_photo_img
-- ----------------------------
DROP TABLE IF EXISTS `c_company_photo_img`;
CREATE TABLE `c_company_photo_img` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '相册id',
  `company_id` int(10) unsigned NOT NULL COMMENT '公司id',
  `path` varchar(255) DEFAULT '' COMMENT '图片地址',
  PRIMARY KEY (`id`),
  KEY `photo_id` (`photo_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=103 DEFAULT CHARSET=utf8 COMMENT='公司相册图片';

-- ----------------------------
-- Records of c_company_photo_img
-- ----------------------------
INSERT INTO `c_company_photo_img` VALUES ('99', '107', '32', '/Uploads/20181101/d1c28fdd15fcadb85f7007f4122a0fbb.jpg');
INSERT INTO `c_company_photo_img` VALUES ('100', '107', '32', '/Uploads/20181101/d1ff44e79b0a72c93ec14cd016adf03d.jpg');
INSERT INTO `c_company_photo_img` VALUES ('101', '107', '32', '/Uploads/20181101/7198aaeebd144a62eea98da674df6bf9.jpg');
INSERT INTO `c_company_photo_img` VALUES ('102', '107', '32', '/Uploads/20181101/b0a00c5b962ab7f87d43f1422397f2c0.jpg');

-- ----------------------------
-- Table structure for c_company_resources
-- ----------------------------
DROP TABLE IF EXISTS `c_company_resources`;
CREATE TABLE `c_company_resources` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `company_id` int(10) NOT NULL COMMENT '公司id',
  `ad` varchar(255) NOT NULL DEFAULT '' COMMENT '广告',
  `banner` varchar(255) NOT NULL DEFAULT '' COMMENT 'banner',
  `newcate` varchar(255) NOT NULL DEFAULT '' COMMENT '新闻分类',
  `news` varchar(255) NOT NULL DEFAULT '' COMMENT '新闻内容',
  `classcate` varchar(255) NOT NULL DEFAULT '' COMMENT '党校课程分类列表',
  `class` varchar(255) NOT NULL DEFAULT '' COMMENT '党校课程表',
  `classchapter` varchar(255) NOT NULL DEFAULT '' COMMENT '党校课程视频',
  `photo` varchar(255) NOT NULL DEFAULT '' COMMENT '党校课程视频',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='公众号内容(自己公司添加的)';

-- ----------------------------
-- Records of c_company_resources
-- ----------------------------
INSERT INTO `c_company_resources` VALUES ('1', '32', '15', '14', '10,12', '133', '31', '33', '', '107');

-- ----------------------------
-- Table structure for c_dangyuan
-- ----------------------------
DROP TABLE IF EXISTS `c_dangyuan`;
CREATE TABLE `c_dangyuan` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `pid` int(11) DEFAULT NULL COMMENT '上级id，与党支部表c_branchs的主键id相关联',
  `member_name` varchar(255) DEFAULT NULL COMMENT '党员名称或组织名称',
  `member_img` varchar(255) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL COMMENT '对应党员职称表主键id字段',
  `member_is` enum('0','1','2') DEFAULT '0' COMMENT '否为党员(0为未审核，1为通过，2为不通过)',
  `update_time` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='党成员表';

-- ----------------------------
-- Records of c_dangyuan
-- ----------------------------
INSERT INTO `c_dangyuan` VALUES ('1', '1', '王大发', '\\Uploads\\20181016\\9ba78412a57329e2b9e25d787b009232.jpg', '4', '1', null, null, null);
INSERT INTO `c_dangyuan` VALUES ('2', '1', '康师傅', '\\Uploads\\20181017\\31c3adbf1bbb8884e93659701e82f003.jpg', '2', '2', null, null, null);
INSERT INTO `c_dangyuan` VALUES ('3', '5', '小李', '\\Uploads\\20181015\\d31f27f602e41918bcc945efa98ec217.jpg', '16', '0', null, null, null);
INSERT INTO `c_dangyuan` VALUES ('4', '1', '小花', '\\Uploads\\20181015\\80269b19808b62e015024daf37fab8cf.jpg', '2', '1', null, null, null);
INSERT INTO `c_dangyuan` VALUES ('5', '1', '刘德华', '\\Uploads\\20181017\\25cb44bc3d1d760647fde065df8e4a69.jpg', '1', '0', null, null, null);
INSERT INTO `c_dangyuan` VALUES ('6', '1', '王铁锤', '\\Uploads\\20181017\\13191df6a954f5491280a86338c146da.jpg', '2', '1', null, null, null);
INSERT INTO `c_dangyuan` VALUES ('7', '1', '如花', '\\Uploads\\20181017\\cb5c6a94b2647350691fc6f6fc99042d.jpg', '1', '1', null, null, null);
INSERT INTO `c_dangyuan` VALUES ('8', '1', '狗六子', '\\Uploads\\20181017\\6aeabea0dd80d6e6fe45a78efd5ba998.jpg', '2', '1', null, null, null);
INSERT INTO `c_dangyuan` VALUES ('9', '1', '王小虎', '\\Uploads\\20181018\\2afddced7fb4d63aaa12f6448c3726d7.jpg', '1', '1', null, '1539833897', null);

-- ----------------------------
-- Table structure for c_dangyuan_jobid_branchsid
-- ----------------------------
DROP TABLE IF EXISTS `c_dangyuan_jobid_branchsid`;
CREATE TABLE `c_dangyuan_jobid_branchsid` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '职称表主键',
  `job_ids` varchar(255) DEFAULT NULL COMMENT '对应职称表主键id,多个以逗号分隔开''.''号分隔开',
  `branchs_id` int(255) DEFAULT NULL COMMENT '对应党支部表c_branchs的主键id',
  `role_comment` varchar(255) DEFAULT NULL COMMENT '备注信息',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of c_dangyuan_jobid_branchsid
-- ----------------------------
INSERT INTO `c_dangyuan_jobid_branchsid` VALUES ('1', '1,2,4,10,13,14,15,21,22,23,24,25,26', '1', null, null, '1539747489', null);
INSERT INTO `c_dangyuan_jobid_branchsid` VALUES ('2', '1,3,4', '2', null, null, null, null);
INSERT INTO `c_dangyuan_jobid_branchsid` VALUES ('3', '1,4,5', '3', null, null, null, null);
INSERT INTO `c_dangyuan_jobid_branchsid` VALUES ('4', '11,12,16,18,19', '5', null, '1539490409', '1539565493', null);
INSERT INTO `c_dangyuan_jobid_branchsid` VALUES ('5', '17', '6', null, '1539565478', '1539565478', null);

-- ----------------------------
-- Table structure for c_dangyuan_jobname
-- ----------------------------
DROP TABLE IF EXISTS `c_dangyuan_jobname`;
CREATE TABLE `c_dangyuan_jobname` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '职称表主键id',
  `job_name` varchar(255) DEFAULT NULL COMMENT '职称名称',
  `update_time` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of c_dangyuan_jobname
-- ----------------------------
INSERT INTO `c_dangyuan_jobname` VALUES ('1', '普通党员1', '1539683876', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('2', '组织部长', '1539484394', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('3', '普通干事', '1539484408', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('4', '高级干部', '1539484415', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('5', '优秀党员', '1539484425', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('6', '教导委员', '1539484441', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('7', '纪检委员', '1539484450', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('8', '普通大众', '1539489629', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('9', '普通大众', '1539489731', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('10', '普通大众', '1539490031', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('11', '优秀党员', '1539490409', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('12', '最佳演员', '1539490452', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('13', '普通党员', '1539565445', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('14', '政治主任', '1539565453', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('15', '最佳演员', '1539565462', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('16', '教授', '1539565470', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('17', '最佳主持', '1539565478', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('18', '博士', '1539565486', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('19', '硕士', '1539565493', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('21', '种子选手', '1539737833', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('22', '群众演员', '1539746657', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('23', '群众公仆', '1539746820', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('24', '政治处长', '1539746887', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('25', '最佳导演', '1539747412', null, null);
INSERT INTO `c_dangyuan_jobname` VALUES ('26', '12323', '1539747432', null, null);

-- ----------------------------
-- Table structure for c_exam_activity
-- ----------------------------
DROP TABLE IF EXISTS `c_exam_activity`;
CREATE TABLE `c_exam_activity` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exam_activity_name` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '活动名称',
  `branchs_id` int(11) DEFAULT NULL COMMENT '活动所属的组织id',
  `create_time` int(11) DEFAULT NULL COMMENT '活动创建时间',
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  `img_src` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '活动背景图片',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='答题小程序活动表';

-- ----------------------------
-- Records of c_exam_activity
-- ----------------------------
INSERT INTO `c_exam_activity` VALUES ('1', '两学一做', '1', '1540172201', '1540172201', null, '\\Uploads\\20181025\\cd67bbe8fbca5526c1cb22fb01a7837d.jpg');
INSERT INTO `c_exam_activity` VALUES ('2', '党纪处分条例', '1', '1540173275', '1540173275', null, '\\Uploads\\20181025\\cd67bbe8fbca5526c1cb22fb01a7837d.jpg');

-- ----------------------------
-- Table structure for c_exam_info
-- ----------------------------
DROP TABLE IF EXISTS `c_exam_info`;
CREATE TABLE `c_exam_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exampaper_id` int(11) DEFAULT NULL COMMENT '对应试卷表的主键id',
  `user_id` int(11) DEFAULT NULL COMMENT '对应用户表c_user表的主键id',
  `result_score` int(11) DEFAULT NULL COMMENT '考试得分',
  `exam_score` int(11) DEFAULT NULL COMMENT '试卷总分数',
  `right_num` int(11) DEFAULT NULL COMMENT '答对数量',
  `exam_questions_num` int(11) DEFAULT NULL COMMENT '试卷题目总数量',
  `create_time` int(11) DEFAULT NULL COMMENT '创建时间',
  `use_time` int(11) DEFAULT NULL COMMENT '答题花费时间',
  `branchs_id` int(11) DEFAULT NULL COMMENT '对应用户的组织id',
  `exam_record` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '考生答题记录由题目主键id和选项构成的json形式的字符串{"1":"opt1"}',
  `is_pass` enum('0','1') COLLATE utf8_bin DEFAULT NULL COMMENT '''0''为不通过，''1''为通过',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='党员考试信息记录表';

-- ----------------------------
-- Records of c_exam_info
-- ----------------------------
INSERT INTO `c_exam_info` VALUES ('1', '1', '8', '50', '100', '5', '10', '1540437009', '10', '1', '', '1');
INSERT INTO `c_exam_info` VALUES ('2', '1', '8', '50', '100', '5', '10', '1540436999', '10', '1', '', '0');

-- ----------------------------
-- Table structure for c_exam_questions
-- ----------------------------
DROP TABLE IF EXISTS `c_exam_questions`;
CREATE TABLE `c_exam_questions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `content` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '题干（问题内容）',
  `opt1` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '选项1',
  `opt2` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '选项2',
  `opt3` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '选项3',
  `opt4` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '选项4',
  `answer_k` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '''opt1'',''opt2'',''opt3'',''opt4''',
  `answer_v` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '答案解析',
  `branchs_id` int(11) DEFAULT NULL COMMENT '所属组织id',
  `create_time` int(11) DEFAULT NULL,
  `update_time` int(11) DEFAULT NULL,
  `delete_time` int(11) DEFAULT NULL,
  `error_count` int(11) DEFAULT NULL COMMENT '本题答错次数累计',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=301 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='题目表';

-- ----------------------------
-- Records of c_exam_questions
-- ----------------------------
INSERT INTO `c_exam_questions` VALUES ('1', '根据中国共产党巡视工作条例，（ ）有义务向巡视组如实反映情况。', '群众', '公民', '党员', '公务员', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('2', '《中国共产党巡视工作条例》是落实党的十八大和十八届三中、四中全会精神，加强党内法规制度建设的具体成果，是全面从严治党的（ ）利器。', '制度', '道德', '法律', '人情', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('3', '巡视制度被首次写进党章的是哪一年？（ ）', '2005年', '2007年', '2009年', '2015年', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('4', '《中国共产党巡视工作条例》明确规定，（ ）承担巡视工作的主体责任。', '党的基层组织', '中央政治局', '开展巡视工作的党组织', '党的领导小组', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('5', '巡视是（ ）的“利剑”，《中国共产党巡视工作条例》是发挥这一“利剑”作用的重要制度保障。', '法律监督', '党内监督', '新闻监督', '制度监督', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('6', '为使（ ）成为“刚性”要求，确保如期完成任务，《中国共产党巡视工作条例》将“实现巡视 、全国一盘棋”明确写入“总则”。', '基本覆盖', '全覆盖', '随行就市', '常态化', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('7', '《中国共产党巡视工作条例》规定，巡视期间，经巡视工作领导小组批准，巡视组（ ）对群众反映强烈、明显违反规定并且能够及时解决的问题，向被巡视党组织提出处理建议。', '可以', '不可以', '应当', '不应当', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('8', '党的中央和省、自治区、直辖市委员会实行巡视制度，建立专职巡视机构，在（ ）届任期内对所管理的地方、部门、企事业单位党组织全面巡视。', '四', '三', '二', '一', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('9', '巡视工作领导小组组长由（ ）担任。', '同级党的纪律检查委员会书记', '同级党委组织部部长', '同级党委宣传部部长', '同级党委纪检监察部部长', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('10', '（ ）为落实整改工作的第一责任人。', '巡视组领导小组组长', '被巡视党组织问题责任人', '被巡视党组织主要负责人', '巡视组领导小组', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('11', '发现领导干部在政治思想、履行职责、工作作风、道德品质、廉政勤政等方面的苗头性问题，党委(党组)、纪委和党委组织部门应当按照干部管理权限及时对其进行（ ）', '批评教育', '严肃处理', '追究责任', '诫勉谈话', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('12', '党内监督条例规定，基层党委、纪委、党总支、党支部负责人，每年在规定范围内述职述廉（ ）次。', '一次', '两次', '三次', '四次', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('13', '《中国共产党党内监督条例(试行)》制定的依据是（ ）', '中华人民共和国宪法', '中国共产党章程', '中共中央关于加强党的建设几个重大问题的决定', '中共中央关于加强党的建设几个重大问题的决定', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('14', '党的各级领导班子应当制定、完善并严格执行（ ），保证决策科学、民主。', '议事规则', '管理办法', '监督办法', '纪律规定', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('15', '党的各级组织和党员领导干部，应当自觉接受并正确对待（ ）的监督。', '全体党员', '全国人民', '党和人民群众', '地方政府', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('16', '对重要信访事项的办理，应当（ ）', '交于上级组织办理', '交于上级组织办理', '督促检查，直至妥善处理', '交于地方检察机关', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('17', '认为下级领导班子民主生活会不符合规定要求，可以（ ）', '直接通报意见', '不召开', '重新召开', '间接确定意见', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('18', '罢免或撤换要求可以（ ）提出，并有根据地陈述理由。', '书面形式署真实姓名', '口头形式', '会议形式', '匿名形式', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('19', '党的各级代表大会代表在代表大会（ ）期间，除履行党员的监督责任和享有党员的监督权利外，按照有关规定对其选举产生的党的委员会、纪律检查委员会及其成员进行监督，反映所在选举单位党员的意见和建议。', '会前', '开会', '闭会', '筹备', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('20', '当党员对党的决议和政策有不同意见时，下列说法中，正确的应该是（ ）', '可以不执行党的决议和政策', '在坚决执行的前提下，可以声明保留，并且可以把自己的意见向党的上级组织直至中央提出', '必须坚决执行，不可以声明保留，也不允许向上级组织提出', '', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('21', '本条例由（ ）负责解释。', '中央纪律检查委员会', '中共中央政治局', '全国人大', '中央组织部', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('22', '问责应当分清责任。参与决策和工作的班子其他成员承担（ ）', '全面领导责任', '主要领导责任', '重要领导责任', '直接领导责任', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('23', '对履行职责不力的党的领导干部，应当严肃批评，依规整改，并在一定范围内（ ）', '降职', '停职检查', '通报', '调整岗位', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('24', '管辖范围内有令不行、有禁不止，团团伙伙、拉帮结派问题严重，造成恶劣影响的,被列入（ ）范畴进行问责。', '推进党风廉政建设和反腐败工作不坚决、不扎实', '全面从严治党不力', '维护党的纪律不力', '党的领导弱化', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('25', '对党的领导干部失职失责、情节较轻的，应当采取哪种问责方式（ ）', '通报', '诫勉', '组织调整或者组织处理', '纪律处分', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('26', '建立健全问责典型问题通报曝光制度。这既体现了“严”和“实”的精神，也可以通过一个个具体鲜活的案例，发挥警示作用，唤醒责任意识，激发担当精神，真正做到（ ）', '依规依纪、实事求是', '失责必问、问责必严', '惩前毖后、治病救人', '分级负责、层层落实责任', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('27', '干部选拔任用工作中问题突出，党内和群众反映强烈，损害党的形象，削弱党执政的政治基础,被列入（ ）范畴进行问责。', '党的建设缺失', '维护党的纪律不力', '全面从严治党不力', '其他应当问责的失职失责情形', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('28', '在问责工作中，要把该打的板子狠狠打下去，不搞下不为例、网开一面，不能大事化小、小事化了，使问责的利剑生锈，形成“破窗效应”。体现了问责应坚持（ ）原则。', '依规依纪、实事求是', '失责必问、问责必严', '惩前毖后、治病救人', '分级负责、层层落实责任', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('29', '参与决策和工作的班子其他成员承担（ ）责任。', '全面领导责任', '主要领导责任', '重要领导责任', '直接领导责任', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('30', '以下属于问责主体的是（ ）', '各级党委（党组）', '各级党的工作部门', '各级纪委（纪检组）', '有管理权限的党组织', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('31', '党中央从中央部委和省一级抓起，把责任让党委（党组）书记扛上。省委书记再把责任传导给所有班子成员、压给市委书记，市委书记压给县委书记，一直压到基层，形成一级抓一级、层层抓落实的局面。体现了问责应坚持（ ）原则。', '依规依纪、实事求是', '失责必问、问责必严', '惩前毖后、治病救人', '分级负责、层层落实责任', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('32', '对党组织的问责方式包括检查、通报、改组。对党的领导干部的问责方式包括：通报、诫勉、组织处理、纪律处分。', '对', '错', '', '', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('33', '中央八项规定精神不落实，作风建设流于形式，被列入（ ）范畴进行问责。', '推进党风廉政建设和反腐败工作不坚决、不扎实', '维护党的纪律不力', '全面从严治党不力', '党的建设缺失', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('34', '管辖范围内腐败蔓延势头没有得到有效遏制，损害群众利益的不正之风和腐败问题突出的,被列入（ ）范畴进行问责。', '推进党风廉政建设和反腐败工作不坚决、不扎实', '全面从严治党不力', '维护党的纪律不力', '党的领导弱化', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('35', '受到问责的党的领导干部应当向问责决定机关（ ），并在民主生活会或者其他党的会议上作出深刻检查。', '就有关情况作出说明', '进行书面汇报', '写出书面检讨', '深刻检讨', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('36', '问责对象是各级党委(党组)、党的工作部门及其领导成员，各级纪委(纪检组)及其领导成员，重点是（ ）', '领导干部', '主要负责人', '直接责任者', '重要领导责任者', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('38', '我国首次提出巡视工作的概念是在哪一年？（ ）', '1993年', '1994年', '1995年', '1996年', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('39', '党员领导干部不重视家风建设,对配偶、子女及其配偶失管失教,造成不良影响或者严重后果的,给予警告或者严重警告处分;情节严重的,给予（ ）处分。', '严重警告', '撤销党内职务', '留党察看', '开除党籍', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('40', '巡视工作人员应当具备的首要条件是（ ）。', '理想信念坚定，对党忠诚，在思想上政治上行动上同党中央保持高度一致', '坚持原则，敢于担当，依法办事，公道正派，清正廉洁', '遵守党的纪律，严守党的秘密', '熟悉党务工作和相关政策法规，具有较强的发现问题、沟通协调、文字综合等能力', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('41', '巡视工作人员实行任职回避、（ ）回避、公务回避。', '亲属 ', '交流 ', '地域', '轮岗', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('42', '巡视组设组长、副组长、巡视专员和其他职位。巡视组实行（ ），副组长协助组长开展工作。', '民主集中制', '组长负责制', '人民代表大会制', '党组织负责制', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('43', '盲目举债、铺摊子、上项目,搞劳民伤财的“形象工程”“政绩工程”:致使国家、集体或者群众财产和利益遭受较大损失的,对直接责任者和领导贡任者,给予（ ）处分;情节严重的,给予撤销党内职务、留党察看或者开除党籍处分。', '警告或者严重警告', '警告或者撤销党内职务', '严重警告或者撤销党内职务', '严重警告或者留党察看', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('44', '开展巡视巡察工作的（）承担巡视巡察工作的主体责任。', '专项工作小组', '党组织书记', '党组织', '党内监督小组', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('45', '利用职权或者职务上的影响,违反有关规定占用公物归个人使用,时间超过（ ），情节较重的,给予警告或者严重警告处分;情节严重的,给予撤销党内职务处分', '一个月', '三个月', '六个月', '一年', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('46', '根据（ ），制定《中国共产党巡视工作条例》。', '《中国共产党纪律处分条例》', '《中国共产党党内监督条例》', '《中华人民共和国宪法》', '《中国共产党章程》', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('47', '党员领导干部的配偶、子女及其配偶,违反有关规定在该党员领导干部管辖的地区和业务范围内从事可能影响其公正执行公务的经营活动,或者在该党员领导干部管辖的地区和业务范围内的外商独资企业、中外合资企业中担任由外方委派、聘任的高级职务或者违规任职、兼职取酬的,该党员领导干部应当按照规定予以纠正;拒不纠正的,其本人应当辞去现任职务或者由组织予以调整职务;不辞去现任职务或者不服从组织调整职务的,给予（ ）处分。', '严重警告', '撤销党内职务', '留党察看', '开除党籍', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('48', '《中国共产党巡视工作条例》规定，被巡视党组织收到巡视组反馈意见后，应当认真整改落实，并于( )将整改情况报告和主要负责人组织落实情况报告，报送巡视工作领导小组办公室。', '一年内', '2个月内', '数月内', '半年内', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('49', '纵容、默许配偶、子女及其配偶等亲属、身边工作人员（ ）利用党员干部本人职权或者职务上的影响谋取私利,情节较轻的,给予警告或者严重警告处分;情节较重的,给予撤销党内职务或者留党察看处分;情节严重的,给予开除党籍处分。', '及其配偶、子女', '及其配偶、亲属', '和其他关系人', '和其他特定关系人', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('50', '《中国共产党巡视工作条例》规定，巡视组依靠被巡视党组织开展工作，不干预被巡视地区(单位)的正常工作， (  ) 执纪审查的职责。', '履行', '根据授权履行', '不履行', '根据授权不履行', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('51', '驻外机构或者临时出国(境)团(组)中的党员,脱离组织出走时间不满（ ）又自动回归的,给予撤销党内职务或者留党察看处分;脱离组织出走时间超过（ ）的,按照自行脱党处理,党内予以除名。', '三个月 三个月', '六个月 六个月', '九个月 九个月', '一年 一年', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('52', '《中国共产党巡视工作条例》规定，巡视工作领导小组组长由同级党的纪律检查委员会书记担任，副组长一般由同级党委( )部长担任。', '组织部', '宣传部', '统战部', '工作部', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('53', '党员领导干部对违反政治纪律和政治规矩等错误思想和行为不报告、不抵制、不斗争,放任不管,搞无原则团和气,造成不良影响的,给予警告或者严重警告处分;情节严重的,给予（ ）处分。', '严重警告或者撤销党内职务', '严重警告或者留党察看', '撤销党內职务或者留党察看', '留党察看或者开除党籍', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('54', '《中国共产党巡视工作条例》规定，违反政治纪律和政治(  ) ，存在违背党的路线方针政策的言行，有令不行、有禁不止，阳奉阴违，拉帮结派等问题，是巡视组要着力发现的问题之一。', '规矩', '要求', '习惯', '规定', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('55', '擅自对应当由党中央决定的重大政策问题作出决定、对外发表主张的,对直接责任者和领导责任者,给予严重警告或者撤销党内职务处分;情节严重的,给予（ ）处分。', '撤销党内职务或者留党察看', '严重警告或者撤销党内职务', '留党察看或者开除党籍', '', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('56', '对党不忠诚不老实,表里不一,阳奉阴违,欺上瞒下,搞两面派,做两面人,情节较轻的,给予警告或者严重警告处分;情节较重的,给予撤销党内职务或者留党察看处分;情节严重的,给予（ ）处分。', '严重警告', '撤销党内职务', '留党察看', '开除党籍', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('57', '通过网络、广播、电视、报刊、传单、书籍等,或者利用讲座、论坛、报告会、座谈会等方式,公开发表坚持资产阶级自由化立场、反对四项基本原则,反对党的改革开放决策的文章、演说、宣言、声明等的,给予（ ）处分。', '警告', '严重警告', '留党察看', '开除党籍', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('58', '《中国共产党巡视工作条例》是落实党的十八大和十八届三中、四中全会精神，加强党内法规制度建设的具体成果，是全面从严治党的(  )利器。', '制度', '道德', '法律 ', '法制', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('59', '本条例所称主动交代,是指涉嫌违纪的党员在组织初核 （ ）向有关组织交代自己的问题,或者在初核和立案审查其问题（ ）交代组织未掌握的问题。', '前;期间', '期间;前', '后;期间', '期间;后', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('60', '党组织在纪律审查中发现党员有贪污贿赂、滥用职权、玩忽职守、权力寻租、利益输送、徇私舞弊、浪费国家资财等违反法律涉嫌犯罪行为的，（ ）给予撤销党内职务、留 党察看或者开除党籍处分。', '可以', '必须', '应当', '建议', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('61', '巡视期间，经（ ）批准，巡视组可以将被巡视党组织管理的干部涉嫌违纪违法的具体问题线索，移交有关纪律检查机关或者政法机关处理。', '巡视工作领导小组', '党的领导小组', '中央政治局', '党的基层组织', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('62', '以下不属于巡视工作领导小组职责的是（ ）。', '研究提出巡视工作规划、年度计划和阶段任务安排', '听取巡视工作汇报', '统筹、协调、指导巡视组开展工作', '研究巡视成果的运用，分类处置，提出相关意见、建议', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('63', '巡视期间，巡视组可以对群众反映强烈、明显违反规定并且能够及时解决的问题，向（ ）提出处理建议。', '同级纪律检查机关', '同级政法机关', '被巡视党组织', '中央巡视组', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('64', '根据中国共产党巡视工作条例，巡视工作领导小组办公室应当提前（ ）个工作日将巡视工作安排书面通知被巡视地区、单位，并协调安排巡视组进驻有关事宜。', '15', '10', '5', '3', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('65', '根据中国共产党巡视工作条例，对省、自治区、直辖市党委，市（地、州、盟）党委和同级人大常委会、政府、政协委员会党组领导班子及其成员的巡视，在每届任期内开展（ ）。', '3至5次', '1至2次', '3至4次', '2至3次', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('66', '根据中国共产党巡视工作条例，巡视组应当严格执行请示报告制度，对巡视工作中的（ ）要及时请示报告。', '重要情况和重大问题', '全部情况', '各类问题', '全部情况和主要问题', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('67', '根据中国共产党巡视工作条例，巡视工作坚持党的领导、分级负责，实事求是、客观公正，（ ）的原则。', '发扬民主、依靠群众', '立足民主、依法办事', ' 严格规范、富有效率', '充满活力、联系群众', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('68', '询问人对有关部门所作的说明不满意的情况下，可以书面形式（ ）对同一问题提出质询。', '署真实姓名', '和他人联名', '匿名', '笔名', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('69', '新闻媒体应当坚持党性原则，遵守新闻纪律和职业道德，把握（ ），注重舆论监督的社会效果 。', '舆论监督的正确导向', '舆论监督的尺度', '舆论监督的成果', '舆论监督的社会效果', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('70', '领导班子成员在民主生活会上，应当针对自身存在的（ ）方面的问题以及党员、群众、领导班子其他成员和下级党组织提出的意见，负责任地作出检查或说明，积极开展批评和自我批评。', '民主作风', '履行职责', '廉洁自律', '组织作风', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('71', '对于应当经集体讨论决定的事项而未经集体讨论，也未征求其他成员意见，由个人或少数人决定的，除遇紧急情况外，应当（ ）。', '追究主要责任人的责任', '区别情况追究主要责任人的责任', '追究责任', '给予批评教育', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('72', '上级组织认为下级领导班子民主生活会不符合规定要求时，可以（ ）。', '责令重新召开', '提出整改意见', '提出规定要求', '进行批评教育', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('73', '县以上党和国家机关党员领导干部应当按照规定参加（ ）。', '组织生活会', '民主生活会', '双重组织生活会', '民主评议', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('74', '巡视制度被首次写进党章是在哪一年？（ ）', '2004年', '2005年', '2006年', '2007年', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('75', '巡视的三个监督主体不包括以下哪项？（ ）', '党的各级委员会', '党的巡视机构', '党的各级纪委', '党的政协组织', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('76', '中央各部门、直属机构、派出机关以及相当于这一级别的党组(党委)，地方各级党委、纪委和党委工作部门、直属机构、派出机关以及相当于这一级别的党组(党委)的领导班子成员，分别在届中和换届前（ ）在规定范围述职述廉一次。', '半年', '一年', '一年半', '两年', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('77', '中共中央关于修改《中国共产党巡视工作条例》的决定自2017年（ ）起施行。', '43291', '43296', '43301', '43311', '7月10日', null, null, '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('78', '有关纪律检查机关、组织部门收到巡视移交的问题或者线索后，应当及时研究提出谈话函询、初核、立案或者组织处理等意见，并于（ ）内将办理情况反馈巡视工作领导小组办公室。', '1年', '6个月', '3个月', '1个月', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('79', '《中国共产党党内监督条例（试行）》是由（ ）颁布实施的。', '党的中央纪律检查委员会', '中共中央', '党的中央政治局', '党的基层组织', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('80', '下列与巡视组工作程序相关说法有误的一项是（ ）', '对领导干部涉嫌违纪的线索和作风方面的突出问题，移交有关纪律检查机关', '对执行民主集中制、干部选拔任用等方面存在的问题，移交有关纪律检查机关', '派出巡视组的党组织应当及时听取巡视工作领导小组有关情况汇报，研究并决定巡视成果的运用', '根据巡视工作领导小组要求，巡视组将巡视的有关情况通报同级党委和政府有关领导及其职能部门', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('81', '（ ）有权对党的委员会全体会议决议、决定执行中存在的问题提出询问和质询。', '党的地方各级纪律检查委员会', '党的地方各级委员会委员', '党的各级领导机关', '党的基层组织', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('82', '下列对巡视组工作方式和权限说法有误的一项是（ ）', '特殊情况下，中央巡视组可以直接向中央巡视工作领导小组组长报告', '巡视期间，经巡视工作领导小组批准，巡视组可以将被巡视党组织管理的干部涉嫌违纪违法的具体问题线索，移交有关纪律检查机关或者政法机关处理', '对群众反映强烈、明显违反规定并且能够及时解决的问题，直接执纪审查', '与被巡视党组织领导班子成员和其他干部群众进行个别谈话', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('83', '党的各级领导班子决定重要事项，应当进行（）。', '集体讨论', '征求意见', '表决', '调查研究', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('84', '巡视组依靠（ ）开展工作，不干预被巡视地区（单位）的正常工作。', '巡视党组', '被巡视党组织', '巡视领导小组', '巡视领导小组组长', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('85', '党的各级委员会实行（ ）制度。', '民主集中', '集体领导和个人分工负责相结合', '个别酝酿、会议决定', '科学民主决策', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('86', '中央巡视工作领导小组办公室设在（ ）', '中央纪律检查委员会', '中央党内监督委员会', '中央反腐委员会', '国务院', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('87', '党的市（地、州、盟）和县（市、区、旗）委员会建立（ ）制度，设立巡察机构，对所管理的党组织进行（ ）监督。', '巡视', '反腐', '巡察', '纪检', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('88', '党内监督要与（ ）监督相结合。', '人民群众', '各级领导', '党外', '舆论', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('89', '（ ）可以实行巡视制度，设立巡视机构，对所管理的党组织进行巡视监督。', '党的市和县委员会', '中央有关部委、中央国家机关部门党组（党委）', '党的地和区委员会', '党的盟和旗委员会', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('90', '各级党组织应当认真贯彻（ ），加强思想政治教育，健全工作制度，有效防范各种违纪行为的发生。', '党风廉政建设责任制', '民主集中制', '.依法执政', '党内监督', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('91', '《中国共产党巡视工作条例》规定，巡视进驻、反馈、整改等情况，应当以适当方式公开，（ ）党员、干部和人民群众监督。', '不接受', '邀请', '接受', '不邀请', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('92', '《中国共产党巡视工作条例》规定，巡视组实行组长负责制，副组长协助组长开展工作。巡视组组长根据（ ）确定并授权。', '巡视对象', '每次巡视任务', '职务高', '每次巡视情况', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('93', '党员、党组织对处理决定不服的，可以向作出处理决定的（ ）申诉。', '党委', '党组织', '党员大会', '地方检察机关', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('94', '《中国共产党巡视工作条例》改进了巡视工作领导体制，明确要求“中央巡视工作领导小组应当加强对省、自治区、直辖市巡视工作的 （ ）”。', '指导', '协调', '领导', '指导', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('95', '中央纪委、中央组织部和中央直属机关工委、中央国家机关工委领导班子成员，除参加所在领导班子民主生活会外，（）应当参加一个以上省部级领导班子的民主生活会，了解情况。', '每人每月', '每人每季度', '每人半年', '每人每年', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('96', '《中国共产党巡视工作条例》明确规定，有关纪律检查机关、组织部门收到巡视移交的问题或者线索后，应当及时研究提出谈话函询、初核、立案或者组织处理等意见，并于（ ）个月内将办理情况反馈巡视工作领导小组办公室。', '3', '9', '1', '5', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('97', '坚持对市、县两级实行（ ）巡视监督。', '经常化', '常态化', '日常化', '组织化', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('98', '党组织应当坚持和健全(  )制度。', '党员领导干部民主生活会', '党员大会', '党员代表大会', '党委委员会议', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('99', '特殊情况下，省委巡视组可以直接向（ ）报告。', '省委书记', '中央巡视工作领导小组', '中央巡视组', '政法机关', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('100', '对下级请示不及时答复、批复或对下级报告中反映的问题在职责范围内不及时处置，造成严重后果的，追究(  )的责任。', '组织领导', '.责任人', '全体人员', '领导干部', '责任人', null, null, '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('101', '对巡视组进行管理和监督是（ ）的职责。', '派出巡视组的党组织', '巡视工作领导小组', '巡视工作领导小组办公室', '巡视政法机关', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('102', '党的(  )是党内监督的专门机关。', '纪律检查委员会', '党委', '组织部', '直属机构', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('103', '根据中国共产党巡视工作条例，（ ）有义务向巡视组如实反映情况。', '群众', '公民', '党员', '公务员', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('104', '《中国共产党巡视工作条例》于（ ）起施行。', '42217', '42219', '42064', '42125', '2015年8月3日', null, null, '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('105', '按照议事规则应当由集体讨论决定的事项，（ ）会议议程。', '经组织审批可以列入', '不可以列入', '可以列入', '可以根据实际情况列入', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('106', '党员署真实姓名进行检举的，应当（ ）听取其意见。', '视情况告知处理结果', '告知全部结果', '不告知结果', '告知部分结果', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('107', '领导班子成员个人向党组织推荐领导干部人选，必须负责地写出推荐材料并署（ ）。', '化名', '笔名', '代号', '真实姓名', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('108', '党内监督条例制定的依据（ ）。', '《中国共产党问责条例》', '《中国共产党章程》', '《中国共产党廉洁自律准则》', '《中国共产党纪律处分条例》', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('109', '设常委会的基层党组织的党委常委会、纪委常委会分别向委员会全体会议（ ）报告工作一次。', '一个月', '一季度', '半年', '一年', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('110', '党的问责工作是由党组织按照职责权限，追究在党的建设和党的事业中失职失责党组织和党的领导干部的（ ）、监督责任和领导责任。', '主要责任', '主体责任', '重要责任', '全面责任', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('111', '党的问责工作做到（ ）、有责要担当、失责必追究，落实党组织管党治党政治责任，督促党的领导干部践行忠诚干净担当', '有权必有责', '有权必追责', '有权必问责', '有权必负责', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('112', '为全面从严治党，规范和强化党的问责工作，根据（ ），制定《中国共产党问责条例》。', '中国共产党章程', '中国共产党纪律处分条例', '中国共产党巡视工作条例', '中国共产党廉洁自律准则', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('113', '党的问责工作应当坚持的原则：依规依纪、实事求是，（ ），惩前毖后、治病救人，分级负责、层层落实责任。', '有责必追、形成威慑', '失责必问、问责必严', '失责必追、问责必严', '有责必问、形成威慑', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('114', '问责应当分清责任，党组织领导班子主要负责人和直接主管的班子成员在职责范围内负有（ ）', '全面领导责任', '主要领导责任', '重要领导责任', '监督领导责任', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('115', '党内政治生活不正常，组织生活不健全，党组织软弱涣散，党性教育特别是理想信念宗旨教育薄弱，被列入（ ）范畴进行问责。', '党的领导弱化', '党的建设缺失', '全面从严治党不力', '推进党风廉政建设和反腐败工作不坚决、不扎实', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('116', '制定问责条例的根据是（）', '党纪处分条例', '廉洁自律准则', '中国共产党章程', '党内监督条例', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('117', '对失职失责，严重违反党的纪律、本身又不能纠正的党组织，采取的问责方式为（ ）', '检查', '组织处理', '组织调整', '改组', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('118', '问责条例由（ ）负责解释。', '中央纪律检查委员会', '中央纪律检查委员会和监察部', '中央纪律检查委员会和中组部', '中央纪律检查委员会和中共中央办公厅', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('119', '实行终身问责，对失职失责性质恶劣、后果严重的，不论其责任人是否（ ）、提拔或者退休，都应当严肃问责。', '辞职', '离任', '调离转岗', '免职', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('120', '党内监督乏力，该发现的问题没有发现，发现问题不报告不处置、不整改不问责，造成严重后果的,被列入（ ）范畴进行问责。', '推进党风廉政建设和反腐败工作不坚决、不扎实', '全面从严治党不力', '维护党的纪律不力', '党的领导弱化', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('121', '问责决定应当由纪检监察机关或者组织人事部门作出。其中对党的领导干部，纪委(纪检组)、党的工作部门有权采取通报、诫勉方式进行问责;提出组织调整或者组织处理的建议。( )', '对', '错', '', '', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('122', '对党组织履行职责不力、情节较重的，应当采取哪种问责方式（ ）', '检查', '通报', '改组', '解散', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('123', '党组织和党的领导干部违反党章和其他党内法规，不履行或者不正确履行职责，有维护党的政治纪律、组织纪律、廉洁纪律、群众纪律、工作纪律、生活纪律不力，导致违规违纪行为多发，特别是维护政治纪律和政治规矩失职，管辖范围内有令不行、有禁不止，团团伙伙、拉帮结派问题严重，造成恶劣影响情形的，应当予以问责。(  )', '对', '错', '', '', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('124', '在问责工作中，通过强化问责，使干部真正扛起责任，不犯或少犯错误特别是严重错误，这才是党组织对党员、干部最大的关心和爱护。体现了问责应坚持（ ）原则。', '依规依纪、实事求是', '失责必问、问责必严', '惩前毖后、治病救人', '分级负责、层层落实责任', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('125', '党的问责工作是由纪检监察机关按照职责权限，追究在党的建设和党的事业中失职失责党组织和党的领导干部的主体责任、监督责任和领导责任。(  )', '对', '错', '', '', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('126', '涉及组织调整或者组织处理的，应当在（ ）办理完毕相应手续。', '一个月内', '六个月', '三个月', '30天', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('127', '党的理论和路线方针政策、党中央的决策部署没有得到有效贯彻落实，被列入（ ）范畴进行问责。', '党的领导弱化', '党的建设缺失', '全面从严治党不力', '维护党的纪律不力', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('128', '问责决定应当由党中央或者有管理权限的( )作出。', '党组织', '.审计部门', '纪委(纪检组) ', '组织人事部门', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('129', '利用宗族或者黑恶势力等欺压群众,或者纵容涉黑涉恶活动,为黑恶势力充当“保护伞”的,给予（ ）处分;情节严重的,给予开除党籍处分。', '警告或严重警告', '严重警告或者撤销党内职务', '撤销党内职务或者留党察看', '严重警告或者留党察看', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('130', '在干部选拔任用工作中,有任人唯亲、排斥异己、封官许恳、说情干预、跑官要官、突击提拔或者调整干部等违反干部选拔任用规定行为,对直接责任者和领导责任者,情节较轻的,给予警告或者严重警告处分:情节较重的,给予撒销党内职务或者留党祭看处分;情节严重的;给予（ ）处分', '劝其退党', '勒令退党', '党内除名', '开除党籍', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('131', '对信仰宗教的党员,应当加强思想教育,经党组织帮助教育仍没有转变的,应当（ ）;劝而不退的,予以（ ）参与利用宗教搞煽动活动的,给予开除党籍处分。', '劝其退党 勒令退党', '劝其退党 除名', '勒令退党 除名', '除名  开除党籍', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('132', '干扰巡视巡察工作或者不落实巡视巡察整改要求情节较轻的,给予警告或者严重警告处分;情节较重的,给予处分;情节严重的,给予开除党籍处分（ ）', '严重警告或者留党察看', '严重警告或者撤销党内职务', '撤销党内职务或者留党察看', '留党察看或者开除党籍', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('133', '不按照有关规定向组织请示、报告重大事项,情节较重的,给予警告或者严重警告处分;情节严重的,给予（ ）处分。', '撤销党内职务或者留党察看', '严重警告或者撤销党内职务', '留党察看或者开除党籍', '', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('134', '制造、散布、传播政治谣言,破坏党的团结统一的给予警告或者严重警告处分;情节较重的,给予（ ）处分;情节严重的,给予开除党籍处分。', '严重警告', '严重警告或者撤销党内职务', '开除党籍', '撤销党內职务或者留党察看', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('135', '落实党中央决策部署不坚决,打折扣、搞变通,在政治上造成不良影响或者严重后果的,给予警告或者严重警告处分;情节严重的,给予（ ）处分。', '开除党籍', '留党察看', '撤销党內职务、留党察看或者开除党籍处分', '撤销党內职务、留党察看', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('136', '党员领导干部在本人主政的地方或者分管的部门自行其是,搞山头主义,拒不执行党中央确定的大政方针,甚至背着党中央另搞一套的,给予（ ）处分。', '撤销党內职务、留党察看或者开除党籍', '撤销党内职务、留党察看', '留党察看', '开除党籍', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('137', '在重大原则问题上,不同党中央保持一致且有实际言论、行为或者造成不良后果的,给予（ ）处分;情节较重的,给予（）处分;情节严重的,给予（ ）处分。', '警告;严重警告;撤销党内职务', '严重警告;撤销党内职务;留党察看', '严重警告或者撤销党内职务;留党察看;开除党籍', '警告或者严重警告;撤销党内职务或者留党察看;开除党籍', '警告或者严重警告;撤销党内职务或者留党察看;开 除党籍', null, null, '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('138', '党员被依法（ ）、逮捕的,党组织应当按照管理权限中止其表决权、选举权和被选举权等党员权利。', '拘留', '留置', '传唤', '讯问', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('139', '党组织在纪律审查中发现党员严重违纪涉嫌违法犯罪的,原则上先做出（ ）决定,并按照规定给予政务处分后,再移送有关国家机关依法处理。', '行政处罚', '政纪处分', '组织处理', '党纪处分', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('140', '党员受到开除党籍处分，（ ）内不得重新入党，也不得推荐担任与原任职务相当或者高于其原任职务的党外职务。', '两年', '三年', '四年', '五年', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('141', '党员受留党察看处分期间,没有（ ）。', '表决权、选举权和被选举权', '选举权和被选举权', '表决权、选举权', '', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('142', '对党组织履行职责不力、情节较轻的，应当采取哪种问责方式（ ）', '检查', '通报', '改组', '解散', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('143', '要坚持求真务实，是哪一级责任就追究到哪一级，该采取什么问责方式就采取什么方式，不应当问责的就决不能追究责任，做到宽严适度、不枉不纵。体现了问责应坚持（ ）原则。', '依规依纪、实事求是', '失责必问、问责必严', '惩前毖后、治病救人', '分级负责、层层落实责任', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('144', '有关问责情况应当向组织部门通报，组织部门应当将问责决定材料归入被问责领导干部个人档案，并报上一级党组织备案。', '对', '错', '', '', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('145', '对党组织或党的领导干部的问责方式，可以单独使用，也可以合并使用。', '对', '错', '', '', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('146', '主体责任、监督责任落实不到位，管党治党失之于宽松软，好人主义盛行、搞一团和气，不负责、不担当，被列入（ ）范畴进行问责。', '党的建设缺失', '维护党的纪律不力', '全面从严治党不力', '党的领导弱化', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('147', '在推进经济建设、政治建设、文化建设、社会建设、生态文明建设中，出现重大失误，给党的事业和人民利益造成严重损失，产生恶劣影响,被列入（ ）范畴进行问责', '全面从严治党不力', '党的建设缺失', '党的领导弱化', '维护党的纪律不力', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('148', '问责对象是各级党委(党组)、党的工作部门及其领导成员，各级纪委(纪检组)及其领导成员，重点是主要负责人。', '对', '错', '', '', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('149', '《中国共产党问责条例》自（ ）起施行。此前发布的有关问责的规定，凡与本条例不一致的，按照本条例执行。', '42559', '42370', '颁布之日', '42736', '2016年7月8日', null, null, '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('150', '《中国共产党问责条例》规定对党的领导干部实行（ ）', '一次性问责', '阶段性问责', '任期问责', '终身问责', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('151', '问责决定作出后，应当及时向被问责党组织或者党的领导干部及其所在党组织宣布并督促执行。涉及组织调整或者组织处理的，应当在（ ）内办理完毕相应手续。', '15日', '一个月', '二个月', '六个月', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('152', '问责应当分清责任。党组织领导班子在职责范围内负有（ ）', '全面领导责任', '主要领导责任', '重要领导责任', '直接领导责任', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('153', '党的问责工作是由（ ）按照职责权限，追究在党的建设和党的事业中失职失责党组织和党的领导干部的主体责任、监督责任和领导责任。', '纪检监察机关', '党组织', '组织部门', '以上都不是', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('154', '违背社会公序良俗,在公共场所有不当行为,造成不良影响的,给予（ ）处分情节较重的,给予撤销党内职多或者留党察看处分情节严重的,给予开除党籍处分。', '警告或者严重警告', '撤销党内职务', '留党察看', '开除党籍', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('155', '在党的纪律检查、组织、宣传、统一战线工作以及机关工作等其他工作中,不履行或者不正确履行职责,造成损失或者不良影响的,应当视具体情节给予（ ）处分。', '警告直至开除党籍', '严重警告直至开除党籍', '警告直至留党察看', '警告直至撤销党内职务', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('156', '在考试、录取工作中,有泄露试题、考场舞弊、涂改考卷、违规录取等违反有关规定行为的,给予警告或者严重警告处分;情节较重的,给予（ ）处分;情节严重的,给予开除党籍处分。', '严重警告或者留党查看', '严重警告或者撤销党内职务', '撒销党内职务或者留党察看', '留党察看或者开除党籍', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('157', '工作中不负责任或者疏于管理,贯彻执行、检查督促落实上级决策部署不力,给党、国家和人民利益以及公共财产造成较大损失的,对直接责任者和领导贵任者,给予警告或严重瞀告处分;造成重大损失的,给予撤销党內职务、留党察看或者开除党籍处分贯彻创新、协调、绿色、开放、共享的发展理念不力,对职责范围内的问题失察失责,造成较大损失或者重大损失的，（ ）处分。', '从轻或者减轻', '从重或者加重', '酌情给予', '免除', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('158', '收受可能影响公正执行公务的礼品、礼金、消费卡和（ ）等财物,情节较轻的,给予警告或者严重警告处分;情节较重的,给予撒销党内职务或者留党察看处分;情节严重的:给予开除党籍处分。', '有价证券、股权、其他金融产品', '汽车、房产', '电脑、汽车、房产', '有价证券、债券、其他金融产品', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('159', '党员干部必须正确行使人民赋予的权力,清正廉洁，（ ）任何滥用职权、谋求私利的行为', '反对', '避免', '应当反对', '尽量避免', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('160', '在党内组织秘密集团或者组织其他分裂党的活动的,给予（ ）处分。', '警告', '严重警告', '留党察看', '开除党籍', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('161', '党纪处分决定作出后,应当在（ ）向受处分党员所在党的基层组织中的全体党员及其本人宣布,是领导班子成员的还应当向所在党组织领导班子宣布,并按照干部管理权限和组织关系将处分决定材料归入受处分者档案。', '一周内', '半个月内', '一个月内', '两个月内', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('162', '留党察看处分,分为留党察看（ ）、留党察看（ ）', '半年 一年', '二年 三年', '一年 二年', '一年 三年', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('163', '党员受到警告处分（ ）、 受到严重警告处分（ ），不得在党内提升职务和向党外组织推荐担任高于其原任职务的党外职务', '半年内 一年内', '一年内 一年半内', '一年内 两年内', '半年内 两年内', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('164', '违反有关规定办理因私出国（境）证件、前往港澳通行证，或者未经批准出入国（边）境，情节较轻的，给予（）处分。', '警告或者严重警告', '留党察看', '严重警告', '警告', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('165', '故意作出与党和国家的方针政策以及决策部署相违背的决定的，情节严重的，给予（ ）处分。', '警告', '严重警告', '撤销党内职务', '留党察看或者开除党籍', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('166', '对违纪后下落不明的党员超过（ ）的，党组织应当按照党章规定对其予以除名。（第三十六条）', '六个月', '一年', '两年', '三年', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('167', '收受可能影响公正执行公务的礼品、礼金、消费卡等，情节较重的，给予（ ）处分。', '严重警告', '留党察看', '开除党籍', '撤销党内职务或者留党察看', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('168', '对有丧失党员条件，严重败坏党的形象行为的，应当给予（ ）（第二十九条）', '开除党籍', '警告', '留党察看', '撤销党内职务', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('169', '执行党纪处分决定的机关或者受处分党员所在单位，应当在（ ）内将处分决定的执行情况向作出或者批准处分决定的机关报告。', '三个月', '六个月', '九个月', '一年', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('170', '受到改组处理的党组织领导机构成员除应受到（ ）及以上处分的外，均自然免职。(第十四条)', '严重警告', '撤销党内职务', '留党察看', '开除党籍', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('171', '党员受到开除党籍处分， ( ) 年内不得重新入党。另有规定不准重新入党的，依照规定。', '一', '三', '五', '', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('172', '新修订的《准则》和《条例》是对（ ）的具体化', '习总书记讲话精神', '党章规定', '十八大精神', '十八届三中全会精神', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('173', '党员受到留党察看处分，其党内职务（ ）', '自然撤销', '暂时保留', '视情况而定', '每悔过表现的，可以保留', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('174', '《廉洁自律准则》第四条，坚持吃苦在前、享受在后、甘于奉献，反映了廉洁的（ ）', '界线', '底线', '防线', '高线', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('175', '党员受到撤销党内职务处分，( ) 年内不得在党内担任和向党外组织推荐担任与其原任职务相当或者高于其原任职务的职务。', '一', '二', '三', '', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('176', '对于应当受到撤销党内职务处分，但是本人没有担任党内职务的，应当给予其（）', '警告处分', '严重警告处分', '留党察看处分', '', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('177', '《中国共产党廉洁自律准则》要求党员领导干部廉洁齐家，（ ）', '自觉维护人民根本利益', '自觉保持人民公仆本色', '自觉提升思想道德境界', '自觉带头树立良好家风', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('178', '《中国共产党廉洁自律准则》明确了党员领导干部廉洁自律规范，第七条强调，廉洁修身，（ ） 。', '自觉保持人民公仆本色', '自觉维护人民根本利益', '自觉提升思想道德境界', '自觉带头树立良好家风', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('179', '新《准则》第二条，坚持崇廉拒腐，清白做人，干净做事，反映了廉洁的（ ）', '界线', '底线', '防线', '高线', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('180', '《中国共产党廉洁自律准则》明确了党员廉洁自律规范，第四条强调，坚持吃苦在前，（ ）。', '先公后私，克己奉公', '享受在后，甘于奉献', '清白做人，干净做事', '艰苦朴素，勤俭节约', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('181', '（ ）负责新《中国共产党廉洁自律准则》.《中国共产党纪律处分条例》的贯彻实施。', '人大', '政协', '党委（党组）', '党的纪律检查机关', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('182', '《中国共产党廉洁自律准则》要求党员领导干部廉洁修身，（ ）', '自觉维护人民根本利益', '自觉保持人民公仆本色', '自觉提升思想道德境界', '自觉带头树立良好家风', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('183', '《中国共产党廉洁自律准则》的施行日期为（ ）', '42296', '42368', '42370', '42399', '2016年1月1日', null, null, '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('184', '新修订的《中国共产党廉洁自律准则》和《中国共产党纪律处分条例》是对（ ）的具体化。', '习总书记讲话精神', '党章规定', '十八大精神', '十八届三中全会精神', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('185', '《关于新形势下党内政治生活的若干准则》规定，“三会一课”要突出政治学习和教育，突出党性锻炼，坚决防止（ ）：① 表面化；②形式化；③娱乐化；④庸俗化', '①②③', '②③④', '①③④', '①②③④', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('186', '修订后的《廉洁自律准则》紧扣“廉洁自律”、坚持正面倡导、面向全体党员、突出（ ），强调自律，重在立德。', '关键多数', '关键少数', '关键群体', '关键个体', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('187', '《关于新形势下党内政治生活的若干准则》规定，必须尊重党员主体地位、保障党员民主权利，落实党员（ ）', '知情权', '参与权', '选举权', '监督权', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('188', '新颁布的《廉洁自律准则》坚持正面倡导、（ ），是党员和党员领导干部能够看得见、够得着的高标准。', '以人为本', '重在立德', '重在立法', '重在立规', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('189', '《关于新形势下党内政治生活的若干准则》规定，凡属重大问题，要按照（ ）的原则，由集体讨论、按少数服从多数作出决定：① 集体领导；②民主集中；③个别酝酿；④会议决定', '①②③', '②③④', '①③④', '①②③④', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('190', '修订后的《廉洁自律准则》共8条、281字，包括导语、党员廉洁自律规范和党员领导干部廉洁自律规范等3部分，主要内容可以概括为：（ ）', '“四个必须”“八项规定”', '“四个必须”“八条规范”', '“四个必须”“八条禁止”', '“８个禁止”“52个不准”', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('191', '《关于新形势下党内政治生活的若干准则》规定，党的各级组织、全体党员特别是高级干部都要（ ）：① 向党中央看齐；②向党的理论和路线方针政策看齐；③向党中央决策部署看齐；④向上级领导人看齐', '①②③', '②③④', '①③④', '①②③④', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('192', '《关于新形势下党内政治生活的若干准则》规定，实行（ ） 制度，公开权力运行过程和结果，健全不当用权问责机制，把权力关进制度笼子，让权力在阳光下运行。', '权力监督', '权力清单', '权力运行', '权力看管', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('193', '《关于新形势下党内政治生活的若干准则》规定，全党要坚持不懈努力，共同营造风清气正的政治生态，确保（ ）始终成为中国特色社会主义事业的坚强领导核心。', '人大', '政治局', '国务院', '党', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('194', '《廉洁自律准则》第三条，坚持尚俭戒奢、艰苦朴素、勤俭节约，反映了廉洁的（ ）。', '界线', '底线 ', '防线', '高线', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('195', '《关于新形势下党内政治生活的若干准则》规定，按期进行（ ）、总支部和支部委员会换届。', '党的基层委员会', '党委会', '党支部', '党员大会', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('196', '《廉洁自律准则》是规范党员领导干部从政行为的（ ）。', '根本性党内法规', '重要基础性党内法规', '党的重要法规', '', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('197', '《关于新形势下党内政治生活的若干准则》规定，纪检监察、司法机关严格依纪依法按 （ ） 对涉嫌严重违纪违法行为进行调查。', '指示', '舆论', '领导要求', '程序', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('198', '新《准则》第二条，坚持崇廉拒腐，清白做人，干净做事，反映了廉洁的（ ）。', '界线', '底线', '防线', '高线', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('199', '《关于新形势下党内政治生活的若干准则》规定，党内监督必须突出党的领导机关和领导干部特别是（ ）', '个别领导干部', '主要领导干部', '中央委员', '中央政治局常委', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('200', '《廉洁自律准则》是对党章关于廉洁自律要求的（ ）。', '系统化', '可操作化', '具体化', '科学化', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('201', '《廉洁自律准则》第四条，坚持吃苦在前、享受在后、甘于奉献，反映了廉洁的（ ）。', '界线', '底线', '防线', '高线', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('202', '《中国共产党廉洁自律准则》要求党员领导干部廉洁从政，（ ）。', '自觉维护人民根本利益 ', '自觉保持人民公仆本色', '自觉提升思想道德境界', '自觉带头树立良好家风', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('203', '加强和规范党内政治生活的重要任务是（ ）', '为全党统一意志、统一行动提供保障', '全心全意为人民服务', '建设廉洁政治，坚决反对腐败', '为全党统一意志、统一行动提供保障', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('204', '《中国共产党廉洁自律准则》要求党员领导干部廉洁用权，（ ）。', '自觉维护人民根本利益', '自觉保持人民公仆本色', '自觉提升思想道德境界', '自觉带头树立良好家风', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('205', '《关于党内政治生活的若干准则》指出，党内真正实行(  )，才有可能建立起在党员和群众中有威信的强有力的领导班子。', '民主决策', '民主选举', '民主管理', '民主投票', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('206', '《中国共产党廉洁自律准则》对全体党员和各级党员领导干部提出了（ ）的要求。', '“三个必须”', '“四个必须”', '“五个必须”', '“六个必须”', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('207', '（ ）是全党统一意志、统一行动、步调一致前进的重要保障，是党内政治生活的重要内容。', '实事求是', '从严治党', '向党中央看齐', '纪律严明', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('208', '加强和规范党内政治生活的重要目的是（ ）', '坚决维护党中央权威、保证全党令行禁止', '实现共产主义和中国特色社会主义', '建设党内民主', '为全党统一意志、统一行动提供保障', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('209', '《关于新形势下党内政治生活的若干准则》规定，干部是党的宝贵财富，必须既严格教育、严格管理、严格监督，又在（ ）真诚关爱，鼓励干部干事创业、大胆作为。', '政治上', '思想上', '工作上', '生活上', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('210', '中国共产党人的精神支柱和政治灵魂是（ ）', '马列主义', '共产主义理想', '中国特色社会主义共同理想', '共产主义远大理想和中国特色社会主义共同理想', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('211', '《关于新形势下党内政治生活的若干准则》规定，党内选举必须体现（ ）意志，规范和完善选举制度规则。', '党员', '选举人', '干部', '被选举人', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('212', '加强和规范党内政治生活，关键是（ ）', '各级领导机关和领导干部', '高级干部', '基层干部', '全体干部', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('213', '（ ）是党内政治生活正常开展的重要制度保障。', '纪律严明', '组织生活制', '民主集中制', '批评与自我批评', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('214', '《关于新形势下党内政治生活的若干准则》规定，建立容错纠错机制，（ ）干部在工作中特别是改革创新中的失误。', '惩罚', '制裁', '宽容', '放任', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('215', '全党必须聚精会神抓好发展这个党执政兴国的第一要务，坚持以（  ）为中心的发展思想，统筹推进“五位一体”总体布局和协调推进“四个全面”战略布局。', '经济建设', '人民', '改革', '创新', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('216', '《关于新形势下党内政治生活的若干准则》规定，思想理论上的坚定清醒是（  ）坚定的前提。', '政治上', '经济上', '文化上', '思想上', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('217', '（ ）是全党学习践行社会主义核心价值体系的重中之重。', '思想理论教育', '理想信念教育', '传统文化教育', '优良作风建设', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('218', '《关于党内政治生活的若干准则》要求，对待思想上理论上的是非，只能采取(  )的办法求得解决，决不能采取压服的办法。', '领导班子集体决定', '群众投票', '少数服从多数', '摆事实、讲道理、民主讨论', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('219', '社会主义核心价值体系的灵魂是（ ）', '社会主义理想信念', '爱国主义精神', '优良道德情操', '马克思主义思想', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('220', '中国共产党在领导社会主义事业过程中，要抓紧时机，加快发展，必须实施科教兴国战略和（  ）发展战略', '可持续', '跨越式', '前瞻性', '推进式', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('221', '党的领导核心作用主要体现为（ ）', '科学决策、管好干部', '总揽全局、协调各方', '领导一切、为民作主', '', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('222', '党的建设的第一条经验是（ ）', '坚持把思想理论建设放在首位', '坚持立党为公、执政为民', '坚持党要管党、从严治党', '', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('223', '党领导人民治理国家的基本方略是（ ）', '依法治国，建设社会主义法治国家', '依法治国，人民当家作主', '依法治国与以德治国的统一', '', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('224', '在党组织讨论决定对党员的党纪处分或作出鉴定时，下列说法中，正确的应该是（ ）', '本人无权参加和进行申辩', '其他党员不可以为他作证和辩护', '本人有权参加和进行申辩，其他党员可以为他作证和辩护', '', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('225', '加强和规范党内政治生活的重要举措是（ ）', '自律', '批评和自我批评', '监督', '举报', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('226', '党章规定，中国共产主义青年团是中国共产党领导的（ ）的群众组织。', '青年', '青少年', '先进青年', '', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('227', '党要管党、从严治党必须从（  ）管起、严起。', '党内政治生活', '党的民主生活', '党的组织生活', '党的基层工作', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('228', '为人民服务是党的根本宗旨，以人为本、（ ）是检验党一切执政活动的最高标准', '执政为民', '依靠人民', '加快发展', '造福于民', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('229', '党的各级委员会要加强对共青团的领导，注意团的干部的（ ）和培训。', '选拔', '培养', '监督', '管理', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('230', '（ ）是党最根本、最重要的纪律，遵守党的（ ）是遵守党的全部纪律的基础。', '工作纪律', '政治纪律', '组织纪律', '群众纪律', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('231', '党的基层组织是党的全部工作和战斗力的（ ）。', '体现', '核心', '重点', '基础', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('232', '党员如果没有正当理由，连续（ ）个月不参加党的组织生活，或不交纳党费，或不做党所分配的工作，就被认为是自行脱党。', '三个月', '六个月', '十二个月', '十八个月', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('233', '党内（ ）是党的生命。', '监督', '纪律', '民主', '原则', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('234', '对马克思主义的信仰，对社会主义和共产主义的信念，是共产党人的（）', '政治灵魂', '精神支柱', '政治底线', '道德底线', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('235', '（ ）是党内的最高处分', '移送司法机关', '开除党籍', '开除公职', '判刑', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('236', '党的全国代表大会举行的时间（ ）？', '每三年举行一次', '每四年举行一次', '每五年举行一次', '每六年举行一次', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('237', '党员不符合党员条件，支部应当对其进行教育，要求其限期改正，仍无转变的，应当（ ）', '劝其退党', '给予相应处罚', '继续教育', '双开', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('238', '党员要求退党，应当经（ ）讨论后宣布除名，并报上级党组织备案。', '党委常委', '基层党委', '党小组', '支部大会', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('239', '党员的党龄应如何计算（ ）', '预备党员开始算起', '递交入党申请书算', '从预备期满转为正式党员之日算起', '党校结业算起', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('240', '党执政后的最大危险是（ ）？', '贪污腐败', '官僚作风', '脱离群众', '国外分裂势力', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('241', '我们党的最大政治优势是（ ）?', '密切联系群众', '实事求是', '统一战线', '以马克思主义为指导思想', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('242', '时代精神的核心是什么（ ）？', '改革创新', '锐意进取', '努力拼搏', '科技为先', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('243', '我国的强国之路是什么（）？', '坚持科教兴国', '坚持创新发展', '坚持艰苦奋斗', '坚持改革开放', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('244', '民族精神的核心是什么（ ）？', '诚信友善', '艰苦朴素', '甘于奉献', '爱国主义', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('245', '我国的立国之本是什么（ ）？', '坚持改革开放', '坚持发展经济', '坚持四项基本原则', '坚持党的领导', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('246', '以下选项属于我国目前分配制度的是（ ）？', '完全按劳分配 ', '完全按需分配 ', '按劳分配为主 ', '按需分配为主', '按劳分配为主', null, null, '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('247', '在新世纪新阶段，经济和社会发展的战略目标是，巩固和发展已经初步达到的小康水平，到（ ）一百年时，人均国内生产总值达到中等发达国家水平，基本实现现代化。', '建党', '建国', '改革开放', '建军', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('248', '党执政兴国的第一要务是什么（ ）？', '发展', '稳定', '持续', '改革', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('249', '邓小平理论的精髓和活的灵魂是什么（）？', '解放思想，实事求是', '一个国家，两种制度', '为人民服务', '以经济建设为中心，坚持四项基本原则，坚持改革开放', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('250', '对妄议中央大政方针，破坏党的集中统一的，且情节严重的，给予（   ）处分。第四十六条', '警告或严重警告', '撤销党内职务', '开除党籍', '留党察看', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('251', '《中国共产党纪律处分条例》把党章对纪律的要求整合成政治纪律、组织纪律和廉洁纪律等“（   ）类纪律”。', '五', '六', '七', '八', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('252', '受到留党察看处分的党员，恢复党员权利后（   ）年内，不得在党内担任和向党外组织推荐担任与其原任职务相当或者高于其原任职务的职务。', '一', '二', '三', '', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('253', '执行党纪处分决定的机关或者受处分党员所在单位，应当在（   ）内将处分决定的执行情况向作出或者批准处分决定的机关报告。', '三个月', '六个月', '九个月', '一年', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('254', '《中国共产党廉洁自律准则》分为两部分：一是党员廉洁自律规范；二是（   ）。', '领导廉洁从政规范', '领导干部廉洁自律规范', '党员领导干部廉洁自律规范', '领导干部廉洁从政规范', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('255', '《廉洁自律准则》导语部分，重申关于理想信念、根本宗旨、优良传统作风、高尚情操等“四个必须”的原则要求，强调廉洁自律、接受监督的主旨，最后将落脚点放在永葆党的（ ）上。', '先进性和纯洁性', '优良传统', '生机活力', '政治本色', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('256', '《中国共产党廉洁自律准则》分为两部分：一是党员廉洁自律规范；二是（ ）。', '领导廉洁从政规范', '领导干部廉洁自律规范', '党员领导干部廉洁自律规范', '领导干部廉洁从政规范', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('257', '《中国共产党廉洁自律准则》自（ ）起施行。', '印发之日', '42289', '42299', '42370', '2016年1月1日', null, null, '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('258', '2015年10月12日召开会议，（ ）审议通过《中国共产党廉洁自律准则》、《中国共产党纪律处分条例》。', '中共中央政治局', '中共中央', '中共中央书记处', '中共中央办公厅', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('259', '《廉洁自律准则》第一条，坚持公私分明、先公后私、克己奉公，反映了廉洁的（ ）。', '界线', '底线', '防线', '高线', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('260', '《廉洁自律准则》坚持（ ）。', '依法治国与以德治党相结合', '依规治党与以德治党相结合', '依规治党与以德治国相结合', '高标准与守底线相结合', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('261', '《廉洁自律准则》的主题是（ ）。', '自省', '自觉', '自律', '', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('262', '《廉洁自律准则》坚持（ ）。', '依法治国与以德治党相结合', '依规治党与以德治党相结合', '依规治党与以德治国相结合', '高标准与守底线相结合', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('263', '《中国共产党廉洁自律准则》分为两部分：一是党员廉洁自律规范；二是（ ）。', '领导廉洁从政规范', '领导干部廉洁自律规范', '党员领导干部廉洁自律规范', '领导干部廉洁从政规范', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('264', '《中国共产党廉洁自律准则》对全体党员提出了（ ）条廉洁自律规范。', '3', '4', '5', '6', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('265', '《关于新形势下党内政治生活的若干准则》规定，领导干部特别是高级干部必须注重（ ），教育管理好亲属和身边工作人员。', '家庭', '家教', '家风', '家族利益', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('266', '《关于新形势下党内政治生活的若干准则》规定，全党必须自觉防止和反对（ ） 。', '个人主义', '分散主义', '自由主义', '本位主义', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('267', '《关于新形势下党内政治生活的若干准则》规定，全党必须牢固树立（ ）', '政治意识', '大局意识', '核心意识', '看齐意识', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('268', '《关于新形势下党内政治生活的若干准则》规定，在长期实践中，我们党坚持把开展严肃认真的党内政治生活作为党的建设的重要任务来抓，形成了以（ ）、理论联系实际、民主集中制、 等为主要内容的党内政治生活基本规范。', '实事求是', '密切联系群众', '批评和自我批评', '严明党的纪律', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('269', '《关于新形势下党内政治生活的若干准则》规定，研究涉及全局的重大事项或作出重大决定要及时向（ ）请示报告，执行党中央重要决定的情况要专题报告。', '国务院', '党中央', '全国人大', '全国政协', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('270', '《关于新形势下党内政治生活的若干准则》规定，任何（ ）都不能游离于党的组织之外，更不能凌驾于党的组织之上。', '领导干部', '公民', '党员', '党委', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('271', '《关于新形势下党内政治生活的若干准则》规定，领导干部要以（ ）身份参加所在党支部或党小组的组织生活，坚持党员领导干部讲党课制度。', '群众', '公民', '领导', '普通党员', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('272', '《关于新形势下党内政治生活的若干准则》规定，党员、干部反映他人的问题，应该出于（ ），通过党内正常渠道实名进行。', '私怨', '报复', '陷害', '党性', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('273', '《关于新形势下党内政治生活的若干准则》规定，全体党员、干部特别是高级干部必须增强党的意识，时刻牢记自己第一身份是（   ）。', '党员', '干部', '服务者', '领导者', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('274', '加强和规范党内（    ）是全党的共同任务，必须全党一起动手。', '政治生活', '党纪严明', '问责机制', '民主法治', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('275', '考察识别干部特别是高级干部必须首先看（   ）。', '是否坚定不移贯彻党的基本路线', '是否坚持实事求是', '是否坚持群众路线', '是否坚持理论联系实际', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('276', '《关于党内政治生活的若干准则》要求，维护党的集中统一，严格遵守党的纪律，必须反对和防止（ ）', '教条主义', '自由主义', '分散主义', '本位主义', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('277', '加强和规范党内（   ）是全党的共同任务，必须全党一起动手。', '政治生活', '党纪严明', '问责机制', '民主法治', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('278', '考察识别干部特别是高级干部必须首先看（   ）。', '是否坚定不移贯彻党的基本路线', '是否坚持实事求是', '是否坚持群众路线', '是否坚持理论联系实际', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('279', '加强和规范党内政治生活的重要任务是（   ）', '为全党统一意志、统一行动提供保障', '全心全意为人民服务', '建设廉洁政治，坚决反对腐败', '为全党统一意志、统一行动提供保障', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('280', '加强和规范党内政治生活的根本要求是（   ）', '坚决维护党中央权威、保证全党令行禁止', '为全党统一意志、统一行动提供保障', '坚定理想信念', '坚持全心全意为人民服务的根本宗旨、保持党同人民群众的血肉联系', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('281', '党内政治生活正常开展的根本保证是（   ）', '党在社会主义初级阶段的基本路线', '坚定理想信念', '纪律严明', '坚决维护党中央权威', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('282', '加强和规范党内政治生活，必须以（  ）为根本遵循。', '党章', '法律', '党内监督条例', '宪法', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('283', '《关于新形势下党内政治生活的若干准则》明确规定，必须把（  ）作为开展党内政治生活的首要任务。', '坚定理想信念', '严明党的纪律', '加强党内民主', '坚持民主集中制', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('284', '（ ）是党的生命，是党内政治生活积极健康的重要基础。', '党内教育', '党内自由', '党内团结', '党内民主', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('285', '坚决维护（ ）、保证全党令行禁止，是党和国家前途命运所系，是全国各族人民根本利益所在。', '党的基本路线', '党的领导', '党规党纪', '党中央权威', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('286', '新形势下加强和规范党内政治生活，重点是（ ）', '党的各级代表大会代表', '各级领导干部', '各级领导机关和领导干部', '各级领导机关', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('287', '《关于新形势下党内政治生活的若干准则》在（ ）上通过。', '党的十八届六中全会', '十八届中央纪委六次全会', '庆祝党成立95周年大会', '党的十八届五中全会', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('288', '马克思主义在社会主义时期中国化的最大理论成果是（ ）', '毛泽东思想', '社会主义核心价值体系', '科学发展观', '中国特色社会主义理论体系', 'opt4', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('289', '社会主义初级阶段我国的基本经济制度是什么？（ ）', '公有制为主体、多种所有制经济共同发展', '按劳分配为主体、多种分配方式并存', '公有制为主体，实行按劳分配', '按劳分配和按生产要素分配的结合', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('290', '社会主义初级阶段的主要矛盾是什么？（ ）', '生产力与生产关系的矛盾', '人民日益增长的物质文化需要与落后的社会生产之间的矛盾', '改革、发展与稳定之间的矛盾', '人口增长与经济发展不适应的矛盾', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('291', '坚持中国先进文化的前进方向，就是要发展：（ ）', '面向现代化、面向世界、面向未来的社会主义文化', '民族的科学的大众的社会主义文化', '面向现代化、面向世界、面向未来的，民族的科学的大众的社会', '', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('292', '中国共产党领导全国各族人民，经过长期的反对帝国主义、封建主义、（ ）资本主义的革命斗争，取得了新民主主义革命的胜利。', '剥削', '权贵', '官僚', '垄断', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('293', '申请入党的人必须有两名党员作介绍人。这里的党员是指（ ）', '党员领导干部', '正式党员', '预备党员', '', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('294', '党员除了享有表决权、选举权和被选举权以外，还有权要求（ ）或撤换不称职的干部。', '开除', '罢免', '辞退', '', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('295', '党组的成员，由批准成立党组的党组织决定。党组设书记，必要时还可以设（  ）。', '常务委员', '副书记', '党组委员', '监督员', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('296', '（  ）是中央政治局和它的常务委员会的办事机构;成员由中央政治局常务委员会提名，中央委员会全体会议通过。', '中央办公厅', '中央书记处', '中组部', '中宣部', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('297', '预备党员转为正式党员，或延长预备期，或取消预备党员资格的，都应当经过（  ）讨论。', '党委会', '支部大会', '党代会', '党委常委会', 'opt2', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('298', '一个中心是以（  ）建设为中心？', '政治', '文化', '经济', '生态', 'opt3', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('299', '在新世纪新阶段，经济和社会发展的战略目标是，巩固和发展已经初步达到的小康水平，到（   ）一百年时，建成惠及十几亿人口的更高水平的小康社会。', '建党', '建国', '改革开放', '建军', 'opt1', null, '1', '1539924282', null, null, null);
INSERT INTO `c_exam_questions` VALUES ('300', '中国共产党的最高理想和最终目标是什么？（ ）', '实现小康社会', '迈入中等发达国家', '中华民族伟大复兴', '实现共产主义', 'opt4', null, '1', '1539924282', null, null, null);

-- ----------------------------
-- Table structure for c_exampaper
-- ----------------------------
DROP TABLE IF EXISTS `c_exampaper`;
CREATE TABLE `c_exampaper` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `exampaper_name` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '试卷名称',
  `exam_activity_id` int(11) DEFAULT NULL COMMENT '对应活动表的主键id',
  `questions_ids` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '对应题目的主键ids',
  `long_time` int(11) DEFAULT NULL COMMENT '考试时长',
  `score` int(11) DEFAULT '100' COMMENT '试卷满分值',
  `pass_score` int(11) DEFAULT NULL,
  `create_time` int(11) DEFAULT NULL COMMENT '试卷创建时间',
  `branchs_id` int(11) DEFAULT NULL COMMENT '试卷对应的组织id',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='试卷表（或者称为关卡表）';

-- ----------------------------
-- Records of c_exampaper
-- ----------------------------
INSERT INTO `c_exampaper` VALUES ('1', '基本技能测试', '1', '268,156,165,92,266,66,168,6,155,252', '360', '100', '80', '1540172910', '1');
INSERT INTO `c_exampaper` VALUES ('2', '素质测试1', '1', '90,157,230,268,63,64,216,87,265,49', '360', '100', '60', '1540173207', '1');
INSERT INTO `c_exampaper` VALUES ('3', '综合能力测试', '1', '264,87,293,236,280,113,102,240,238,90', '720', '100', '60', '1540173235', '1');
INSERT INTO `c_exampaper` VALUES ('4', '三个重点', '2', '188,166,212,189,148,10,108,255,152,190', '360', '100', '60', '1540173313', '1');
INSERT INTO `c_exampaper` VALUES ('5', '四个意识', '2', '143,89,109,96,276,3,160,235,5,253', '3600', '100', '60', '1540173334', '1');

-- ----------------------------
-- Table structure for c_heart
-- ----------------------------
DROP TABLE IF EXISTS `c_heart`;
CREATE TABLE `c_heart` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '投稿人id',
  `title` varchar(32) NOT NULL DEFAULT '' COMMENT '标题',
  `cate_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '分类id',
  `content` text NOT NULL COMMENT '内容',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '投稿时间',
  `audit_opinion` varchar(255) DEFAULT '' COMMENT '审核意见',
  `status` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '审核状态(1审核中2通过3未通过)',
  `dtime` int(11) DEFAULT '0' COMMENT '删除时间',
  `is_del` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除（0未删除1已删除）',
  `visit` int(10) unsigned DEFAULT '0' COMMENT '浏览次数',
  `recommend` tinyint(1) unsigned DEFAULT '0' COMMENT '推荐（0不推荐1推荐）',
  PRIMARY KEY (`id`),
  KEY `cate_id` (`cate_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=utf8 COMMENT='一颗红心 ';

-- ----------------------------
-- Records of c_heart
-- ----------------------------
INSERT INTO `c_heart` VALUES ('1', '1', '测试红心', '1', '人民网内比都7月9日电  （记者林芮）7月9日，由中共中央宣传部、缅甸联邦政府宣传部共同主办的《习近平谈治国理政》缅文版首发式暨中缅治国理政研讨会在缅甸首都内比都举行。缅甸人民院副议长吞吞亨、民族院副议长埃达昂，联邦政府宣传部部长佩敏、自然资源和环境保护部部长翁温，以及中缅两国各界代表300多人出席此次首发式和研讨会。\r\n\r\n双方嘉宾表示，《习近平谈治国理政》一书，为中外读者认识和理解习近平新时代中国特色社会主义思想提供了重要文献，为国际社会更好了解当代中国提供了一把钥匙，集中反映了中国共产党所做的一切就是为中国人民谋幸福、为中华民族谋复兴、为人类谋和平与发展。《习近平谈治国理政》第一卷缅文版的出版发行，为缅甸人民更好了解中国打开了一扇新窗口，为增进中缅人民“胞波”情谊搭建了新桥梁，为深化两国治国理政经验交流提供了新载体。\r\n\r\n双方嘉宾表示，中缅是山水相连、血脉相通的友好邻邦，是天然的命运共同体。当前，中缅都处于改革发展的关键期，两国加强治国理政经验交流和互鉴，对于两国各自走好今后的道路、推进国家事业发展、增进人民福祉，具有重要意义。\r\n\r\n《习近平谈治国理政》第一卷于2014年9月出版、2018年1月再版，受到中外读者广泛关注和好评。目前，该书已出版24个语种27个版本，发行到160多个国家和地区。《习近平谈治国理政》第一卷缅文版由中国外文出版社与缅甸亚洲名望媒体集团合作翻译出版，是该书再版后首个通过国际出版合作完成的文版。', '0', '', '2', '1534755685', '1', '10', '1');
INSERT INTO `c_heart` VALUES ('2', '1', '让群众对脱贫攻坚更有获得感', '2', '为深入贯彻落实党的十九大精神，深入贯彻落实习近平总书记关于打赢脱贫攻坚战以及开展扶贫领域腐败和作风问题专项治理的系列重要讲话和批示精神，中央纪委决定从2018年到2020年持续开展扶贫领域腐败和作风问题专项治理。半年多来，各地各部门迅速跟进，一个个腐败和作风问题被查处曝光，形成了有力震慑。从今天起，本刊聚焦“扶贫领域腐败和作风问题专项治理”，推出系列报道，敬请关注。\r\n\r\n——编 者 \r\n\r\n“我们这次来是从整治扶贫领域腐败和作风问题这个切口，看看脱贫攻坚的任务完成得怎么样，各项政策能不能落地生根，群众反映强烈的问题解决得怎么样？”今年以来，中央纪委国家监委有关负责人以及相关室干部分赴广西、海南、贵州等18个省区市开展扶贫领域腐败和作风问题专项治理调研督导，直插基层进村入户实地查看，面对面了解实情，指出问题，督促各地区各单位抓好专项治理工作。\r\n\r\n打赢脱贫攻坚战，是党的庄严承诺，是一项必须完成的政治任务。党的十九大以来，中央和各级纪检监察机关扎实推进扶贫领域腐败和作风问题专项治理工作，有力推动了一大批群众反映强烈的扶贫领域突出问题得到解决，增强了群众对脱贫攻坚的获得感。\r\n\r\n到脱贫攻坚第一线深入摸排，提高发现问题精准度\r\n\r\n今年农历大年初三，年味正浓，新疆维吾尔自治区纪委干部李靓和同事们已切换到工作模式。翻开一个多月前在喀什地区疏勒县督导时发现问题的台账，李靓锁定了当天的行程：“先去巴仁乡尤喀克巴仁村！”\r\n\r\n之前，自治区纪委抽调纪检干部组成群众工作督导组在疏勒县走访时，村民麦麦提·玉麦尔向督导组反映，不仅自己的富民安居名额被人挤占，村支书还强迫他自费修建富民安居房。督导组将问题线索移交给县纪委。经查，穆合塔尔·麦麦提伊敏明作为村支书，不仅不帮麦麦提·玉麦尔讨回被他人冒领的富民安居物资，还在其经济能力不足且住房足够的情况下，强迫其自费3万多元，修建40平方米的“面子工程”。最终，穆合塔尔·麦麦提伊敏明受到严肃处理。\r\n\r\n敲开麦麦提·玉麦尔家门，李靓他们关切地问：“上个月您向我们反映的问题解决了吗？满不满意？”“满意，一百个满意！”麦麦提·玉麦尔说，“没想到问题解决得这么快，年前村里把富民安居房的物资款退给我们了，村干部的态度也好多了！”\r\n\r\n今年以来，新疆先后采取机动式、交叉式、点穴式、蹲点式开展6轮督导检查，覆盖自治区14个地州、96个县市区、872个乡镇、9155个村社区，累计走访各族群众24663户58844人。为保证督导中发现的问题整改到位，督导组还在整改结束后进行“回头看”。\r\n\r\n专项治理工作开展以来，中央纪委国家监委充分发挥信访主渠道作用，认真受理和及时处置群众信访举报，并定期专题分析研判；同时，建立与扶贫、审计、财政等部门的协作机制，广泛收集问题线索；督促各级纪检监察机关开展扶贫领域腐败和作风问题线索大起底大排查，深入基层一线发现问题。各地也积极行动起来：江西开设“扶贫领域违规违纪问题举报”直通车、在农村集市进行大接访、常态化开展明察暗访，将监督触角延至“最后一公里”。四川探索运用“群众监督+舆论监督+纪检监督”一体化模式，近年来通过“阳光问廉”问责2218人，处分1028人。河南省纪委与省直19个部门建立问题收集、线索移交核查、督查问责等联动机制，统筹检察、审计、信访、巡视巡察等多个问题线索收集渠道……', '0', '', '3', '0', '0', '0', '1');
INSERT INTO `c_heart` VALUES ('11', '16', '你好', '2', '啊', '1533195656', '', '2', '1534755676', '1', '0', '1');
INSERT INTO `c_heart` VALUES ('13', '19', '测试', '1', '测试内容', '1533626422', '', '2', '1534755675', '1', '0', '1');
INSERT INTO `c_heart` VALUES ('14', '19', 'Rrrrr', '1', 'The first new ', '1533719985', '', '1', '1534755672', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('15', '16', '啊啊啊', '1', '你好', '1533866361', '', '1', '1534755670', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('16', '19', '4654', '2', '595456465', '1533866676', '', '1', '1534755668', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('17', '19', '111', '1', '1111', '1533868721', '', '1', '1534755665', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('18', '19', '1', '1', '测试', '1534149565', '', '1', '1534755661', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('19', '19', '1', '1', '测试', '1534149597', '', '1', '1534755663', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('20', '19', '1', '1', '测试', '1534149616', '', '1', '1534755659', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('21', '20', '测试', '1', '测试测试', '1534149681', '', '1', '1534755653', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('22', '20', '投稿', '2', '11111', '1534149802', '', '1', '1534755651', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('23', '19', '1', '1', '测试', '1534149840', '', '1', '1534755649', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('24', '19', '1', '1', '测试', '1534149847', '', '1', '1534755646', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('25', '19', '1', '1', '测试', '1534150175', '', '1', '1534753325', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('26', '19', '1', '1', '测试', '1534150194', '', '1', '1534753323', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('27', '19', '1', '1', '测试', '1534150212', '', '1', '1534753321', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('28', '19', '1', '1', '测试', '1534150221', '', '1', '1534753319', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('29', '20', 'lalalalal', '1', '111', '1534150257', '', '2', '1534753317', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('30', '16', '哎呦', '3', '是的', '1534753779', '', '1', '1534755644', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('31', '16', '年轻干部怎一个“智”字了得', '1', '　　横平竖直显功力，一字多义添神秘。汉字是中华民族的瑰宝，记录和承载着中华文明，每一个汉字都集聚着中华民族的智慧结晶，每一个汉字都可以给人启示和感悟，每个汉字的组成部分都彰显着多重内涵。“智”字便是诸多内涵丰富的汉字之一，一个“智”字由“矢、口、日”三个简单的汉字组成，却暗含着年轻干部的成长之道，发展之路。新时代的年轻干部不仅要拥有“智”，更要懂得“智”从何来，“智”当如何。\n　　年轻干部的“智”，当是矢志不渝、初心不改。“亦余心之所善兮，虽九死其犹未悔。”作为年轻干部，必须牢固树立忠诚于党，服务为民的理念。作为未来党和国家事业的继承者和接班人，必须牢牢珍惜自己的党员身份，必须牢牢珍惜自己的公职人员身份，从入党宣誓那日起，就当牢记使命与担当，为了共产主义事业和共产主义理想而奋斗终生。年轻干部阅历较浅，对党的初心和理想通常缺少足够且深入的思考，面对这样的境况，必须坚定理想信念，补充“精神之钙”，加强党性修养，坚定政治方向，以一颗赤诚之心了解党，爱戴党，拥护党，把握好理想信念的“方向盘”，拧紧信仰思想的“总开关”，夯实忠诚之基，传承初心之志。\n　　年轻干部的“智”，当是心口如一、芳华绽放。习近平总书记强调，优秀年轻干部要把当老实人、讲老实话、做老实事作为人生信条。这对年轻干部的道德品质提出了明确的要求，年轻干部在奋勇前行的新时代绝不能依靠耍耍小聪明，绝不能做一个表里不一的“两面人”。新时代描绘新蓝图，新目标开启新征程，真正拥有智慧的年轻人，当知行合一，鼓足干劲，勇立潮头，一如既往干事业，一以贯之求进步，光明磊落，奋发有为，在芳华绽放的年纪，做一名勇往直前的奋进者，做一名继往开来的开拓者。\n　　年轻干部的“智”，当是日积月累、破茧成蝶。古语有云：不飞则已，一飞冲天；不鸣则已，一鸣惊人。年轻干部肩负着实现中华民族伟大复兴的使命，应始终志存高远、脚踏实地，切不可沉沦颓废，得过且过，虚度时光，耗费大好青春；要始终抱有一颗拳拳为党为国为民之心，积累知识，增长才干，不断打磨自己，不断磨练意志，在日积月累中百炼成钢。“灵明无著，物来顺应，未来不迎，当时不杂，既过不恋”，年轻干部当以曾国藩的这句话自勉，不怀念过去，不空想未来，面对问题不逃避、敢担当，用心做好当下的事，当思任重而道远，欲速则不达蕴含的深刻道理，厚积跬步以至千里，肩负起时代赋予的使命担当。', '1534753883', '', '2', '0', '0', '0', '1');
INSERT INTO `c_heart` VALUES ('32', '16', '“麦穗”精神不可丢', '5', '　　蒙田说：“真正的学者就像田野上的麦穗。麦穗空瘪的时候，它总是长得很挺，高傲地昂起头；麦穗饱满成熟的时候，它总是表现出温顺的样子，低垂着脑袋。”麦穗如“岁寒三友”即“竹”“梅”“松柏”一样有其独特的优秀品质，它象征着收获、谦逊、吉祥……在我国国徽上也出现了“麦穗”这一图案，代表着党和国家对农业和粮食的重视，也代表着对民生的高度重视。可见，麦穗精神始终伴随着国家的发展和民族的复兴。\n　　麦穗，建设之所在。“九牛一毫莫自夸，骄傲自满必翻车。历览古今多少事，成由谦逊败由奢。”从中透露着我国自古以来就崇尚“谦虚使人进步，骄傲使人落后”这一优秀的传统文化。麦穗作为优秀传统文化的代名词，一跃成为文人墨士、迁客骚人的宠儿也未尝不可。时代精神永不朽，先进文化永长存，富强民主总相随。不管身在何时、何地，总要把精神文明传承下去。这样才不负极具智慧的“古人”和满心抱负的“今人”。建设“和谐中国”“美丽中国”“文明中国”“现代化中国”必须要善于学习先进典范，用如饥似渴的精神不断吮吸知识，用一点一滴的坚韧来积累，用吾日三省完善自己，用小事小节修炼自己，扎实苦干，脚踏实地，时刻以一颗饱满的“麦穗”之心来不断升华自己。\n　　麦穗，遨游之所在。知识似海洋，我们驾驶一叶之扁舟行驶在这深不可测的大海之上，只有深一步、更深一步，才知道自己的渺小，沧海之广袤。古语云：“学然后知困，教然后知不足。”只有不断地学习，才能认识到海洋的广袤，才能始终保持谦逊之心。在此之外，茫茫的知识海洋之上，还包括了太多未解之谜，需要我们去探索、去追寻。正如当代伟人毛泽东所说：“好好学习，天天向上。”这对知识的追求、尊崇和那份保存在骨子里的谦逊和探索品质被展现得淋漓尽致。学识越高的人越能知晓学习的重要性，也就更能持之以恒地追逐着大海，遨游于大海之中。“谦受益，满招损”的劝诫一直伴随在我们左右，“麦穗”的精神也从未离我们而去。\n　　麦穗，富强之所在。习近平曾在离开宁德时临别赠言中说到：“我作为一个党员，一个领导干部，我只是做了一些职责要求的分内之事。”这句话没有华丽的辞藻，只是有了几个普通、直白的词语串联在了一起。足以看得出总书记身上的那份谦逊，他一直用谦虚、平和的态度来做人做事。自己做的事都是职责所在，功劳都是大家的。习近平总书记指出：“虚心公听，言无逆逊，唯是从之”是执政党应有的胸襟。可见，谦虚一直伴随着我们生活的始终，我们要牢记仲永之伤，莫要骄傲自大。感怀典范之举，时常把爱国奉献挂心间。常举“麦穗”精神之旗，用初生牛犊不怕虎、泥牛入海之精神，在一叶扁舟中仰视天空，在广袤沧海中摸爬打滚，在人生旅途中继续前行，才能使党和时代精神永存不朽，才能使国家变得越来越和谐，才能使国家越来越强大。', '1534754380', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('33', '16', '组工干部的通关秘籍', '2', '　　时下，有一部叫《延禧攻略》的电视剧热播，讲述的是一位叫魏璎珞的小宫女凭借着自己坚定的理想信念、不屈不挠的意志和过硬的业务本领化解在宫廷中遇到的种种困难，最终成为襄助乾隆盛世的令贵妃的故事。魏璎珞一步一步的成长轨迹不禁让我想起了同样具备这些优秀品质的组工干部们，而这些品质也正是他们成为新时代的奋斗者的通关秘籍。\n　　守住初心才能担负使命。魏璎珞自进宫起，一直秉持着自己的理想信念，大有不达目的不罢休的精神，从小宫女到令贵妃的角色转变，她一直没有忘记过自己的初心和使命。正如组工干部，虽然每天忙于各种报表资料的上交、会议的筹备、文稿的写作等，但是他们的初心并没有被这些繁琐的小事湮没，他们时刻谨记入党时的庄重誓言，保持对党忠诚的本色，从这些小事中积累大智慧，从这些小事中有了新作为，从这些小事中坚守住信念。在新的历史条件下，他们牢记老一辈组工干部的事迹精神，准确把握党的性质宗旨、政治主张、奋斗理想和对党员的基本要求，自觉做共产主义远大理想和中国特色社会主义共同理想的坚定信仰者、忠实实践者。\n　　肩负责任才能有所作为。自进宫之日起，魏璎珞就面对重重困难和挑战，比如尔晴的背叛、纯妃的背后捅刀、高贵妃的杀心大起等都令她防不胜防，但在面对这些事情时，她沉着冷静，积极思考解决之道，而不是哀叹、哭泣或推卸责任。就像组工干部，他们聚焦组织工作主职主业，时刻牢记肩上担负的责任，始终保持奋发有为的状态，以严谨细致、精益求精的态度对待工作，大力发扬“安专迷”精神，敢啃“硬骨头”、敢于涉险滩，不畏艰难困苦。针对组织工作的重点难点问题，他们盯住不放、着力解决，推动组织工作在攻坚克难中创新发展，用自己的行动向人民群众交上一份满意的答卷。\n　　业务过硬才能脱颖而出。魏璎珞是绣女，她的绣工出类拔萃，她绣花鸟、绣云朵、绣霞光、绣凤袍、绣龙袍，最后，作为绣女的No.1，成功被招入长春宫。俗话说，“没有金刚钻，不揽瓷器活”。组工干部是党的事业的推动者和实施者，过硬的业务本领是推动党的事业发展的基本保障。在知识日新月异的时代，在激烈的竞争环境中，组工干部要时时保持“学如逆水行舟，不进则退”的态度，不断吸收最新的理论、掌握最有效的工作方法，时刻存在忧患意识，不断给自己“充电”。同时，要对党和国家的政策精神“吃透”“摸准”，把最新的理论拿到工作实践当中去检验，用实践来推动理论的完善和创新，真正成为业务领域的行家里手。', '1534754456', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('34', '16', '奋进搭“鹊桥”干群来“相会”', '2', '　　老一辈革命家习仲勋曾说过：“人民就是江山，江山就是人民”。搭好干群鹊桥，越过激流险滩，守护中华河山，是我党始终能够攻坚克难、接续梦想的动力之源，是广大党员干部与人民心心相印、与人民同甘共苦、与人民千里相会的必经之路。新时代要求每一位党员干部用踏实的脚步追寻群众路线的脉络，用满怀的热情保持与群众的血肉联系，用实实在在的行动维护自身形象，努力向人民群众交出一份满意的答卷。\n　　搭好干群“鹊桥”，需要质朴真挚的为民情怀。为民情怀是党员干部为民务实的强大精神支撑，也是拉近干群党群关系的意识保障。一个党员干部只有常怀为民爱民情怀，才会时刻把群众的冷暖疾苦放在心上，才会经常触摸群众的真情实感，才会心里想着为人民群众排忧解难，才会把权力当作为人民服务的工具，充分展现一个党员干部的至高情怀。广大党员干部应将“坚持以人民为中心”作为干事创业的出发点和落脚点，时刻提醒自己要甘当蹄疾深耕的“拓荒牛”、埋头苦干的“老黄牛”、甘于奉献的“孺子牛”，在干事创业的大舞台上，不怕吃亏、不怕吃苦、不怕得罪人，始终保持同人民群众的血肉联系，想人民之所想、急人民之所虑、做人民之所需。\n　　搭好干群“鹊桥”，需要互通有无的民意畅通。人民群众有许多急需解决的困难和问题，也有许多诉求和愿望，基层群体中更蕴藏着无穷的智慧和力量。把群众的困难、愿望和锦囊妙计及时反馈给党和政府，在党员干部和群众之间架设一条“民意直通车”，是每一位人民公仆的使命和责任。一方面，要“下得去”，不做“理论上的巨人、行动上的矮子”，深入调查研究、体察民情、听取民声，在不同的声音、批评的声音、反对的声音中，要听出警醒和反思，要提炼精华和方向；另一方面，要“上得来”，拓宽民意反馈渠道，肃清干群交流障碍，加强政府信息公开的整合力度，充分发挥新媒体、融媒体等现代信息技术的高效性，保证民意顺畅多一些，干群关系近一些。\n　　搭好干群“鹊桥”，需要扎实过硬的爱民本领。汉代徐干的《中论·修本》有曰：“路不险，则无以知马之良；任不重，则无以知人之才。”走上伟大的新征程，荆棘险滩并不会比来路少。在走基层、访民生、解民忧的道路上，党员干部要牢记事业为上、责任为重，始终拿出“逢山开路、遇水架桥”的勇气，豁出“抓铁有痕、踏石留印”的干劲，保持“摩拳擦掌、热血沸腾”的激情，抱定“青山不移、挖山不止”的决心，不满足于现状、不甘于平庸、不沾沾自喜、不自怨自艾，敢啃“硬骨头”，敢接“烫手山芋”，不断提升、磨练、驾驭和解决问题的能力，练就一身担当作为的真本领，在工作岗位上实现自身价值。', '1534754535', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('35', '16', '组工人的行动哲学', '2', '　　近日，《风雨无阻创造美好生活》一文在社交媒体刷屏。文章的一个提法格外醒目——行动哲学。“为者常成，行者常至”。新时代是干出来的，幸福的生活也是干出来的，不干，半点马克思主义都没有。组工干部不是“清谈馆”，而是行动队。贯彻落实全国组织工作会议精神，组工人有自己的行动哲学。\n　　行有目标、行有方向，组工人的行动哲学是为民谋利的哲学。人民群众对美好生活的向往就是组工人的奋斗目标。组工人的行动哲学不是“进了组织部，天天有进步”的哲学，而是在党的领导下、为着人民幸福不断奋斗的哲学。组工工作千条万条，落实新时代党的组织路线是第一条。组工干部必须踏踏实实、兢兢业业吃透政策、狠抓落实，消除政策执行的“堵点”和政策贯通的“温差”。组工干部服务群众重在把忠诚干净担当的好干部选出来。干部业绩在实践，干部声名在民间。要多到基层干部群众中、多在乡语口碑中了解干部。坚决执行好干部标准，让能吃苦的干部更吃香，能吃劲的干部受重用，为担当者担当，为实干者撑腰。\n　　行有本领、行有担当，组工人的行动哲学是精益求精的哲学。没有精钢钻，不揽瓷器活。落实全国组织工作会议精神，要有信心和热诚，也要有素质和本领。组工人的行动哲学不是静止、书斋的哲学，是辩证的哲学、发展的哲学。要有踱方步的习惯，既要低头拉车，也要抬头看路；既要立足当前，也要着眼长远；既要干好本职，也要胸怀大局，善于“复盘”，总结经验，虚实并举，循环往复。要发扬“安、专、迷”精神，静下心来多读书，沉下心来干工作，稳住心神钻业务，做到干一行、爱一行、精一行。要下“绣花”工夫，发扬钉钉子精神，养成平静、平和、平实的心态，不急躁、不粗糙，不浮躁、不冒进，认认真真，一步一个脚印地推进工作。\n　　行有界限、行有底线，组工人的行动哲学是正道直行的哲学。组织部门是党的政治机关，是模范部门，公道正派是组工干部的核心竞争力，公道才能选贤，正派才能服众。组工人的行动哲学不是亲亲疏疏、团团伙伙的庸俗哲学。组工干部要出以公心、秉公用权，公正客观评价干部，一是一、二是二，不拔高、不贬低。要坚持原则、坚持程序，敢于反映真实情况，敢于指出干部存在的问题，敢于抵制用人上的不正之风。组工干部的生活不是真空里的生活，难免受到别有用心者的诱惑、围猎。但只要组工干部坚守清正廉洁、坚持艰苦奋斗，以廉当福、视贪为祸，就能经得住考验，守得住底线，练就“金刚不坏之身”。', '1534754582', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('36', '16', '“爱吾国”方能“兴国梦”', '4', '\n　　“三十二年如一日，守岛守国奉一生”，王继才同志用他持之以恒的信念和孜孜不倦的行动生动地诠释了“爱国奉献精神”。爱国，是一个人立德之源、立功之本；是一个国家兴国之魂、强国之魂。习近平总书记多次对爱国主义作出重要论述，强调要开创中华民族伟大复兴新局面，必须大力弘扬伟大的爱国主义精神。\n　　“身既死兮神以灵，魂魄毅兮为鬼雄”，爱国，是中华民族继往开来的精神传承。自古即有范仲淹“先天下之忧而忧，后天下之乐而乐”的政治抱负，陆游“位卑未敢忘忧国”的信念抉择，文天祥“人生自古谁无死，留取丹心照汗青”的浩然正气，林则徐“苟利国家生死以，岂因祸福避趋之”的报国情怀。5000多年来，中华民族之所以能够经受住无数难以想象的风险和考验，始终保持旺盛生命力，生生不息，薪火相传，同中华民族深厚持久的爱国主义传统是紧密联系、互不可分的。孙中山先生说，“做人最大的事情，就是要知道怎么样爱国”。中华儿女，秉承中华文化基因，应当做到“利于国者爱之，害于国者恶之”。\n　　“愿得此身长报国，何须生入玉门关”，爱国，是中华民族自强不息的力量源泉。屈原“路漫漫其修远兮”的求索，夏明瀚“还有后来人”的信仰，焦裕禄“死了也要看着你们把沙丘治好”的坚守……一代又一代中华儿女怀着深厚的爱国主义情怀，凭借个人“繁霜尽是心头血，洒向千峰秋叶丹”决心和拼劲，为祖国和人民作出了彪炳史册的重大贡献。如今，实现中华民族伟大复兴的中国梦，是当代中国鲜明主题。伟大的事业需要伟大的精神，鲁迅说，“惟有民魂是值得宝贵的，惟有它发扬起来，中国人才有真进步”。我们要不忘初心，牢记使命，积极把实现个人梦、家庭梦融入国家梦、民族梦之中，用我们4亿多家庭、13亿多人民的智慧和力量，汇聚起夺取新时代中国特色社会主义伟大胜利、实现中华民族伟大复兴中国梦的磅礴力量。\n　　“但愿苍生俱饱暖，不辞辛苦出山林”，爱国，是中华儿女拼搏奋斗的精神动力。理想和奋斗，是中国精神和中国力量的生命力所在。“人民不仅有权爱国，而且爱国是个义务，是一种光荣”，每一位中华儿女，既是追梦者，也是圆梦人。追梦需要激情和理想，圆梦需要奋斗和奉献。我们要秉持“心有大我、至诚报国”的爱国情怀，学习“粉笔讲台系国运，丹心秉烛筑国魂”的敬业精神，学习“淡泊名利、甘于奉献”的高尚情操。不待扬鞭自奋蹄，在奋斗中释放青春激情、追逐青春理想，把爱国之情、报国之志融入祖国改革发展的伟大事业之中、融入人民创造历史的伟大奋斗之中。以此，更好地为民族复兴铺路架桥，为祖国美好建设添砖加瓦。\n　　坚定理想，信念执著，勇于开拓，顽强拼搏。唯此知行合一，“爱吾国”，方能“兴国梦”。', '1534754620', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('37', '1', '透过“熬”字看组工', '2', '　　每次遇见老组工，看着他们不管在什么岗位都能游刃有余、独当一面、成绩斐然，无比羡慕、崇拜、向往，跟他们讨教经验，他们会以“过来人”的口吻说，“在组织部的大熔炉里再熬几年，你们也一样”。莫言说：“懂事需要经历，经历需要时间，用漫长的时间去经历，这就是熬。”\n　　“熬”字很有穿透力、想像力、说服力，一个字概述了量变到质变的过程，而透过它就会发现，熬是起点与终点间必不可少的转化阶段，就好比茶需要慢慢泡才有味，酒要慢慢酿才香醇，生米要慢慢煮才会变熟。曾国藩说，“熬过此关，便可少进。再进再困，再熬再奋，自有亨通精进之日。”这给我们组工干部指明了奋斗的方向：不断精进，透过眼前，一步步走，一天天学，一年年熬，熬出笑对酸甜苦辣咸的组工能力，自有繁花似锦未来！\n　　组织部的熬，看似任务重，实际上是在考验、是在历练。在组织部工作，忙是绕过不去的经历，写不完的材料，开不完的会议，加不完的班。常言道：“干活原本无技巧，能忍自然效率高，人生态度千万种，一个熬字万事销。”可有时候我们也会觉得熬不动了，真的很累，或许“头晕眼花腰酸背疼腿抽筋”能形容一下累的程度。但是，经过一步步考验后再回头看看，一切都熬过去了。当大大小小的任务接踵而至，经过不分昼夜的连续作战，组工们从手忙脚乱、到勉强应付、再到得心应手，收获了超乎常人的坚毅品格，慢慢具备了泰山压顶不弯腰的责任担当、在任何岗位都能“以一当十”的本能。\n　　组织部的熬，看似要求高，实际上是在打磨、是在蜕变。组织部是“讲政治、重公道、业务精、作风好”的模范部门。举例来说，考察的严密、材料的工整、会议的严谨等都是组织工作的常规要求，一切冠以组织部的“名号”都是严之又严、慎之又慎的，每一件出品也都是磨出来的，但是出品必是精品！曾经有领导评价说，“组织部的所有材料都不需要修改”。可是在百折千磨中，组工们也常遇到写材料的抓狂，头皮的发炸，文字的词穷。毛主席说过：“往往有这种情形，有利的情况和主动的恢复，产生于再‘坚持’一下的努力之中。”此时的熬，每一天都是骨子里的坚持，是对困难的不惧，是对高标准的思维定位。组工们自觉把疼痛作为砥砺自己的“磨刀石”，心性越磨越坚韧，追求越来越执着，磨出了“千磨万击还坚韧，任尔东南西北风”的抵御力，形成了“轻舟飘过万重山”的气质。\n　　组织部的熬，看似时间长，实际上是在积蓄、是在升华。组织部的同志都知道，进了组织部，县级要工作5年以上，市级要工作10年以上，省级就更长了.....熬着熬着，似乎看不到边际，没有进展。大家都听说过竹子的成长经历，竹子熬了4年时间，仅仅长了3厘米。从第五年开始，以每天30厘米的速度疯长，仅用六周时间就长到了15米。竹子若熬不过那3厘米，哪能6周就长15米。此时的熬，是海纳百川，有容乃大。组工们甘于寂寞、埋头苦干、自觉奉献，把自己当做一颗永不生锈的“螺丝钉”，牢牢地钉在岗位上慢慢积蓄。一年年后，当内心已宁静，处世已淡定，则有“猝然临之而不惊，无故加之而不怒”之认识，有了“岩下清泉须旋汲，熬出霜根生蜜汁”的特质。\n　　粥多熬黏稠，汤多熬有味。没有经历过“熬”的人，哪能知道“不经历风雨怎能见彩虹”的道理，怎能具备“站起来能说、坐下来能写、静下来能思、沉下去能干”的能力。组织部的熬是自己与成长对话的机会，是最具有“财富”的时候，是“天将降大任于斯人也”的先兆。“聚是一团火，散是满天星”是组工干部的现实写照。我想老组工回首组工经历的时候，应会感慨，“幸得人生此煎熬，他日陌上多暖春。”', '1534755004', '', '2', '0', '0', '0', '1');
INSERT INTO `c_heart` VALUES ('38', '1', '以身许国 何事不敢为', '5', '\n　　有一种精神叫“爱国奋斗精神”，有一种情怀叫“爱国奋斗情怀”，有一种赤心叫“爱国奋斗赤心”。岳飞率军北上时对将士们说：“以身许国，何事不可为？以身许国，何事不敢为？”作为新时代的一名组工干部，要常怀一颗赤诚之心，诚心于党、痴心于事、倾心于民，以实际行动诠释“拳拳爱国心、殷殷报国志”。\n　　诚心于党，是“忠诚向来金石贯，勋烈遂将天壤并”的一片赤诚忠心。从屈原“虽九死其犹未悔”、心系国家、壮志未酬、投身汨罗，到霍去病“匈奴未灭，何以家为”、面对封赏、坚辞不就，再到岳飞“壮志饥餐胡虏肉，笑谈渴饮匈奴血”、励志报国、勇战沙场，无不向我们展示了仁人志士矢志不渝追求国家兴盛的高尚价值取向，更时刻警醒组工干部要对党忠诚、对组织忠诚、对人民忠诚，思考问题、做事情要讲政治、讲大局，言行举止、内涵外延都要展现一名组工干部应有的正气与担当，更要在干事创业的大舞台上，始终牢记党的宗旨，牢记人民的期待与嘱托，兢兢业业、勤勤恳恳、如履薄冰，把党和人民的事业不断推向前进。\n　　痴心于事，是“尊儒敬业宏图阐，纬武经文盛德施”的一腔凌云壮志。习近平总书记强调，“铭记党的奋斗历程，时刻不忘初心，担当党的崇高使命，矢志永远奋斗。”对于组工干部而言，奋斗是块试金石，它检验的是组工人忠诚于党的事业的纯度、硬度与高度。“守岛英雄”王继才将生命最后一刻定格在孤岛上，把生命的灿烂留在了自己钟爱的工作岗位上，用一生的坚守诠释了一种永不懈怠、自强不息的人生态度，一种夙夜为公、无悔坚守的担当精神，一种一心为民、无私奉献的爱国情怀。打铁还需自身硬，面对组织工作的繁重任务，组工干部要不断追求业务工作的纯熟，既要成为精通专项业务的“活字典”，又要成为够胜任多项工作的“多面手”，在基层、在一线，尽情燃烧自己的无悔青春，以“安专迷”精神为国家发展贡献组工力量，以永不懈怠的精神状态和一往无前的奋斗姿态，奋力开创事业发展新局面。\n　　倾心于民，是“采得百花成蜜后，为谁辛苦为谁甜”的一幅桑梓画卷。“求木之长者，必固其根本；欲流之远者，必浚其泉源。”心系群众、服务群众是党的优良传统，作为组工干部，我们要带头发扬党的传统，坚持走群众路线，真诚地问一问，深入地看一看，耐心地听一听，把蕴藏在人民群众中的力量积蓄起来，获取破解难题的“锦囊妙计”。更要常怀爱民为民之心，无论是对待工作服务对象，还是来访群众，都要有一颗博爱的心、一颗宽容的心，用一张笑脸、一把椅子、一杯热茶、一颗诚心，热情周到地服务他们，诚恳悉心地关心他们，让他们切实感受组织部门的关怀和温暖，提升群众的“幸福指数”和“满意指数”。\n　　古人说：“为政以德，譬如北辰，居其所而众星共之。”没有爱国、爱党、爱人民的大爱，就不是一名合格的组工人。组工干部行走在新时代组织路线的康庄大道上，更应该以一颗赤诚之心耐得住寂寞、守得住清贫，不断地磨砺自身，将党和国家的事业作为自己的终极追求去奋斗、去拼搏，才无愧于自己组工干部的身份。', '1534755036', '', '2', '0', '0', '0', '1');
INSERT INTO `c_heart` VALUES ('39', '1', '做新时代有“识”之“士”', '4', '　　日前，中央组织部、中央宣传部发出通知，对在广大知识分子中深入开展“弘扬爱国奋斗精神、建功立业新时代”活动作出部署。这既是号角，又是行动。华夏神州又将迎来一个繁花似锦的“春天”。\n　　我们党历来重视知识分子，重视人才培养。不同的历史时期，广大知识分子发挥着举足轻重的作用。在民主革命时期，他们敢于打破思想枷锁，顺应时代潮流，推动社会进步；在民族危难时刻，他们投笔从戎，抗击外敌入侵，发出强有力的怒吼；在和平年代，他们积极参与社会主义建设，贡献智慧和力量。习近平总书记指出：我国知识分子历来有浓厚的家国情怀，有强烈的社会主责任感，重道义、勇担当。一代又一代知识分子为我国革命、建设、改革事业贡献智慧和力量，有的甚至献出宝贵生命，留下了可歌可泣的事迹。\n　　新时代是奋斗者的时代。只有奋斗的人生才是幸福的人生。知识分子要在新时代的广阔天地里，大显身手、大展宏图，做一个有“识”之“士”。\n　　有大我意识，做爱国志士。大道之行，天下为公。新时代开启新征程。知识分子是中华民族的智慧源泉，要秉承爱国之心、强烈报国之志、深怀为民之情，担起民族复兴使命，舍小家顾大家，去“小我”顾“大我”，向阳而生、相时而动，听从党和国家的召唤，到祖国最需要的地方去，奉献青春热血、实现理想抱负。要大力弘扬“两弹一星”精神、载人航天精神、“西迁”精神等，以钱学森、邓稼先、郭永怀等老一辈知识分子，以及黄大年、李保国、南仁东等新时代优秀知识分子为榜样，始终与党和国家的发展同向同行，不计较个人得失、不追求荣华富贵，积极投身于社会主义现代化建设事业，展示新形象，实现新作为。\n　　有扎实学识，做奋斗勇士。习近平总书记指出，每一代人有每一代人的长征路，每一代人都要走好自己的长征路。知识分子要勇于走在时代前列，不驰于空想、不骛于虚声，踏实工作、顽强拼搏，勇攀科学技术高峰。中国第一位获得诺贝尔科学奖项的本土科学家屠呦呦，毕生致力于青蒿素研究，以强烈的责任感和使命感，带领团队坚韧不拔、锲而不舍，不断探索、不断进取，攻克一个又一个难关，在她86岁高龄获得了最高科学成就，为党和国家做出了巨大贡献。广大知识分子是社会主义现代化建设事业的宝贵财富，要在新时代的广阔天地里，人尽其才、才尽其用，多向实践学习、拜人民为师，在实干中磨砺意志，在奋斗中锤炼本领，做“春天”里的“百花一朵”，“昂首怒放，争奇斗妍”。\n　　有创业胆识，做攻坚战士。97年前，中国共产党十几个“知识分子”从“红船”出发，筚路蓝缕，以前所未有的“胆识”，点燃了中国革命“星星之火”，书写了一部波澜壮阔的创业史诗。“今天，我们比历史上任何时期都更接近、更有信心和能力实现中华民族伟大复兴的目标。”“中华民族伟大复兴，绝不是轻轻松松、敲锣打鼓就能实现的。”“越到后，越有更多的“硬骨头”和“劣顽石”。”习近平总书记指出：担当大小，体现着干部的胸怀、勇气、格调，有多大担当才能干多大事业。广大知识分子要勇立潮头、敢于担当，在实现“两个一百年”奋斗目标的大会战中，冲锋陷阵、建功立业。', '1534755192', '', '2', '0', '0', '0', '1');
INSERT INTO `c_heart` VALUES ('40', '1', '做一棵开山岛上的“苦楝树”', '4', '　“时代楷模”王继才的动人之处，莫过于苦境建功：“守岛卫国32年，用无怨无悔的坚守和付出，在平凡的岗位上书写了不平凡的人生华章”。虽正值壮年的生命戛然而逝，但他的品格操守和精神境界却成了新时代奋斗者的价值追求。\n　　在海量的新闻宣传中，我注意到一个细节，王继才夫妇刚上岛的前几年，“一斤多的苦楝树种子撒下去，终于长出一棵小苗”。一斤多的苦楝树种子有多少颗粒？我不知道该如何换算，但其中有一颗脱颖而出。这就是希望，就是栋梁，就是脊梁。\n　　岛上无电无淡水无居民，“三无”之地，谁愿自讨苦气？难怪设民兵哨所之初，人武部曾先后派出10多个民兵守岛，但最长的只待了13天。连植物都不愿意扎根的地方，离开，是最好的选择；放弃，也是理所当然。但王继才却逆风起飞，选择了留下，老婆没把他劝走，反而一同守岛。\n　　以岛为家的王继才夫妇，不就是从一斤多苦楝树种子中破土而出的希望之芽吗？守岛，在常人眼里就是日复一日的单调重复，无聊而乏味，孤独而寂寞。但他们每天升旗、巡逻执勤，把枯燥的重复变成了生动的重复，这就是生命的意义，也是使命的意义；更是奋斗的意义和坚守的意义。不必羡慕于岛外的灯红酒绿，对于精神的成长和攀登而言，灯红酒绿是扼杀生命的沙漠，而孤岛则是砥砺斗志、激励精神的家园。\n　　王继才是一株扎根于开山岛上的“苦楝树”，我们学习王继才，就要自觉在心底养一股扎根苦境、萌芽成长的“苦楝树精神”。\n　　做一棵开山岛上的“苦楝树”，就是要萌忠诚之芽，扎信仰之根。王安石说：“世之奇伟、瑰怪，非常之观，常在于险远，而人之所罕至焉，故非有志者不能至也。”古人所论述的“志”，就是我们今天讲的忠诚与信仰，没有忠诚之志，没有信仰之志，身临苦境就会选择退缩和放弃。忠诚于党，坚定信仰，是共产党人的灵魂，每名共产党员都要在心中培养一块像开山岛一样的精神圣地，净化思想，历练品格，才能保证革命之志不减，精神之树长青。志存高远，方可“涉深水”“得蛟龙”。\n　　做一棵开山岛上的“苦楝树”，就是要萌坚毅之芽，扎奋斗之根。“锲而舍之，朽木不折；锲而不舍，金石可镂。”王继才的意义就是苦干不苦熬，就是在苦境中奋斗，在坚守中作为。当时一斤多苦楝树种子只长出了一棵小苗，30多年后，变成了30多棵苦楝树、松树在岛上顽强生长。开山岛从过去不宜植物、不宜居民到今天安居乐业、旧貌新颜，就是王继才夫妇锲而不舍努力奋斗的结果。新时代新征程，党员干部都要像扎树在开山岛上的苦楝树一样，独行引领，携行致远，就能从一棵到一片，从树木到森林。\n　　做一棵开山岛上的“苦楝树”，就是要萌事业之芽，扎精神之根。苦楝树何以名“苦”？这是奋斗事业与成长精神的最好象征。冰心说：“成功的花，人们只惊慕她现时的明艳！然而当初她的芽儿，浸透了奋斗的泪泉，洒遍了牺牲的血雨！”回首波澜壮阔的革命史，从胜利走向胜利的骄傲之花，都离不开革命先烈的鲜血浇灌。金一南在《苦难辉煌》的序言中写道：“物质不灭宇宙不灭，唯一能与苍穹比阔的是精神”。王继才的事业与开山岛同在，王继才的精神与苦楝之花同开，他的事业与精神将成为共产党人的富贵财富，激励更多的人在平凡的岗位上奋力书写不平凡的人生华章，交出无愧于时代无愧于人生的合格答卷。', '1534755224', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('41', '1', '党员干部莫患“空调病”', '4', '　“炎炎日正午，灼灼火俱燃。”进入盛夏，各地气温居高不下，空调房成了人们防暑降温的好去处。然而空调虽好，却不可过分依赖，否则会患上头晕、上呼吸道感染、关节酸痛等“空调病”，得不偿失。与此同时，一些党员干部也贪恋空调带来的“清凉”，患上了一系列作风“空调病”，值得引起警惕。\n　　警惕得上“冷漠病”。空调房的本质，是在自然界的大环境中，人为创造出一小块温度受人控制的“世外桃源”，其基本的要求，是与外界环境进行隔离。人在这样的环境中，感受不到外界真正的温度，久而久之身体感官会产生错觉，极大地降低人体对自然环境的适应力。现实当中，有些党员干部长期家庭—单位“两点一线”，足不出户活在自己的“空调房”里，把自己与外界隔离开来，不愿接触群众、不敢接触群众、不会接触群众，群众是冷是热、是寒是暖，早已高高挂起、与己无关。民心是杆秤，谁好谁孬、谁优谁劣，谁在认真干事、谁在偷奸耍滑，老百姓的眼睛是雪亮的。1960年，为了解决当地千百年来的缺水问题，林县县委开始了长达十年的凿渠工程，最终修成了“人工天河”红旗渠，为群众带来了千秋万代的福音；焦裕禄初到兰考，大年初一大雪纷纷，他只身一人到许贡庄挨家挨户走访，直至确认乡亲们年饭无忧，才安心离去。党的这些好干部之所以让人民念念不忘，就是因为他们时刻与群众在一起，知冷知热，做群众的“贴心人”而不是“陌路人”。\n　　警惕得上“漂浮病”。干部在“空调房”里待久了，除了会脱离群众，还容易得上其他“并发症”。比如，有的干部喜欢坐在“空调房”里“遥控指挥”，打打电话、发发文件、开开调度会，自以为这就是把工作落实了，把事情办妥了，这其实是犯了“以声作则”的病。须知，“以声作则”和“以身作则”，效果差得远。如果台上拍得胸脯砰砰响，台下落实却始终“静悄悄”，要求基层干部村村走、户户到，自己却常年脚不沾地、走马观花，只会寒了群众的心，丧失了党员干部的榜样和激励作用。又比如，有的干部窝在“空调房”里搞创新，不顾实际要求基层开展工作必须“实时展现”“事事留痕”，以为这样事半功倍、省心省力，实则是犯了“重形式不重实效”的病。最好的展现，是在街头巷尾的“民意闲谈中”；最好的留痕，是留在百姓心中。总有一些交流，需要走出“微信群”走进“人群”；总有一些工作，“点一点”不如“转一转”；总有一些问题，解决靠“速度”更要靠“温度”。党员干部还是应该走出“空调房”，多沾些“烟火气”，工作干起来才会底气足、效果好。\n　　警惕得上“感染病”。空调房由于环境恒定，空气流动差，时间一长容易滋生有害细菌，引发呼吸系统感染。与之类似，党员干部长时间在“空调房”般稳定、舒适的环境里，也极易导致“免疫力”下降，使各种“病毒”“细菌”趁虚而入。古人有诫，“生于忧患，死于安乐”。有的干部，总想着“大树底下好乘凉”，总是这山望着那山高，遇到困难就打退堂鼓，受到挫折就意志消沉，抗压能力弱、遇事就崩溃。这样的干部，就应当从“空调房”里拉出来，让他到艰苦环境、吃劲岗位经历一些险峻情况，接一接“烫手山芋”，当几回“热锅上的蚂蚁”，才能磨出真功夫、练出“大心脏”。“由俭入奢易，由奢入俭难。”还有的干部，醉心于“空调房”的舒适，内心的“小我”不断膨胀，在享乐的路上越走越远，逐渐丧失了初心、丢失了灵魂、迷失了自我。作为党员干部，就要走出“空调房”，切身感受一下“汗滴禾下土”的民生之艰，经历一下“人在事上磨”的干事之难，思考一下“君子有常度”的自律之道，方能激浊扬清、行稳致远。\n　　习近平总书记曾说过：“我认为认认真真地当好共产党的‘官’是很辛苦的。我也没有听到哪一个称职的领导人说过当官真舒服。”各级党员干部要敢于走出“空调房”，敢于走出自己的“舒适地带”，到火热的时代前沿去奋斗拼搏、建功立业。', '1534755274', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('42', '1', '铁匠、木匠和泥匠', '5', '　　习近平在全国组织工作会议上强调：“优秀年轻干部要自觉向实践学习、拜人民为师。”本人认为年轻干部要想增强才干、做好工作，就需要锤炼铁匠、木匠和泥匠三种境界。\n　　学铁匠，在强身健体中担当作为。“世上三行苦，撑船打铁磨豆腐。”对于一名铁匠而言，打造一件工具，需要经历选料、烧火、捶打、成型、淬火等十几道工序，不仅要忍受烟熏火燎的环境之苦，而且还要承受汗流浃背的劳动之累，如果没有知难而进的铁心和厚实过硬的“铁骨”，很难打出好铁。同理，作为党员干部，要想胜任本职工作，首先要像铁匠打铁一样，先得让自身硬起来：一是思想要过硬。要坚定理想信念，始终做到政治信仰不变、政治立场不移、政治方向不偏。二是能力要过硬。要常怀本领恐慌，常感能力危机，既读万卷书，又行万里路，努力锤炼工作能力，成为行家里手。三是作风要过硬。切实以更高的标准、更严的要求、更实的作风充分展现党员干部的责任担当，发挥先锋模范作用。\n　　学木匠，在精雕细琢中开拓创新。木匠是一门认真细致、精雕细刻的工艺，既讲究尺寸标准，又讲究设计精巧。党的工作就好比木匠做工，既需要依图案行事制作；又不拘泥于旧式，善于突破创新，讲究设计出彩创新。大巧不一，在木匠们的眼里，设计样式千变万变，但对质量的精益求精、对工艺的一丝不苟、对完美的孜孜以求永远不会变化。在推动工作落实的过程中，党员干部理应以木匠为镜，牢固树立规矩意识和精细思维，严格按制度和程序办事，对每一项工作逐项细化量化，确保中央各项决策部署不折不扣地落到实处；注重培养开拓意识和创新精神，敢于突破陈规旧习、思维定势，创造性地开展工作，突破旧格局，闯出新路子，打开新局面。\n　　学泥匠，在统筹兼顾中把握平衡。一个出色的泥瓦匠在砌墙时，会十分重视石块之间的相互融合，他们会将凸出的石块与凹入的石块相配，将带棱角的与残缺的咬合，在石块定位后，再抹之以砂浆，校之于准绳，一道坚固美观的石墙才会出现在我们面前。如果只是简单地将各类石块堆砌，乱搭一通，这样出来的墙，就会不美观，甚至还会倒塌。对于党员干部而言，干工作就像泥匠砌墙，从大局着眼、从细节入手，即考虑到整面墙的特点，又要考虑到每块砖的个性，做到人事相宜、人尽其才、物尽其用，才会实现1＋1大于2的整体效果。我们在学会统筹兼顾的同时，也需要像泥匠把握准“横平竖直，上有齿口下有线”工作诀窍，在各类纷繁事务中找出提纲挈领的关键要点，抓住主要矛盾和矛盾的主要方面，这样做工作才会又稳又快又好。', '1534755301', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('43', '1', '把青春奉献在一线的“90后”', '3', '　　谈到“90后”，许多人不再用“叛逆、个性、自我”等带有青春期特有性质的词语去标签这一批已经步入社会的年轻人，取而代之的是“担当、成熟、有责任感”等充满鼓励和正能量的词语，仿佛眨眼的功夫，“90后”们改变了……\n　　情景一：\n　　“正步走！向右看齐！向前看”……练兵场上，身穿绿色军装的士兵们站成一排，顶着烈日，汗如雨下，不敢有一丝的松懈，黝黑的脸上展现出来的是刚毅和不屈，目光如炬……谁能想到，这些人曾被说是最飞扬跋扈，不务实事、不思进取的一代。社会对“90后”是包容的，你看，经过时间的洗礼，这些“叛逆”的孩子们，他们有些站在了祖国的最边缘，坚守岗位，禁止他人侵略我国领土，维护祖国领土完整，不容侵犯；他们有些站在了维和部队里，用行动向世界表达了中华人民热爱和平的心声；他们有些来到了西藏，不畏严寒酷暑，在那小小的哨岗上，一站就是好几年，不动声色地守护着高原上的牧羊人和藏族同胞……\n　　情景二：\n　　“跟着我读，花魁”“花魁”“勇士”“勇士”……清甜的声音从教室内飘来，在这被大山包裹着的小山村里，好久没听到这么响亮又整齐的声音了。\n　　不得不感叹，祖国发展得太快了，在高楼耸立的城市看不到低矮破旧的房屋，当然，在四面环山的小乡村也看不到城市的灯红酒绿，在这个贫富差距越来越显著的时代，支教，成为了一些人自我锤炼的方式。\n　　他们也许是一批刚毕业或者未毕业的大学生，也许是一批刚刚考上特岗的年轻教师，就这样，头也不回，拉着行李箱来到了远离家乡、远离城市生活的偏远山村，他们脸上或许还带着一些稚气，但是从到那个地方起，他们知道自己又多了一种身份，也担负了一种责任。\n　　在通讯设备不够发达，居住环境也谈不上舒适的条件下，不能像以往一样靠着软绵绵的沙发刷着微博和朋友圈，身边还堆放着父母买的爱心零食，眼前就是一张连转身都会发出“吱呀吱呀”声响的木板床，狭隘的空间里，自己稍微提高嗓门说话都能听到回声，但这样的日子，“90后”依旧过得有滋有味。看，手巧的姑娘们用粉色的墙纸铺满小小的房间，在网上买了便宜的吊灯挂饰，再在墙上钉几排不规则的置物架，还去河边找了一些奇形怪状的小石头放进玻璃瓶里，插上几束从路边摘来的野花，夜幕降临，房间的吊灯一闪一闪的，仿佛把整个星空都搬到了房间里，野花散发的清香弥漫了整个房间，闭上眼睛，轻轻嗅一下，一整天的疲劳瞬间就消失了。\n　　善于干工匠活的男生们则是从山上扛木柴下来，一块块看似平淡的竹棍，摇身一变就成了笔筒、筷子、发髻等用品，这才是真正的纯手工、原生态制品，虽然远离了城市生活，却感受到了另一番不曾感受过的日子，依山傍水，跟着乡亲们日出而作，日落而息，原来慢节奏的生活，更是别有一番滋味。\n　　说起支教，我本人也颇有体会，我曾到家乡的深度贫困村支教过，虽然只是短短的十五天，却足以让我重新认识自己。在那里，第一次五点起床为队友们做早餐，第一次和5个小女生睡在地板上，就铺着薄薄的一层床单，房间因为长时间没人睡，有不少木板已经裂开，晚上山间的风“嗖嗖”地吹进房里，因为是冬天，第二天醒来，支教队全部都感冒了，一群人就围着柴火取暖，很满足，心里很暖。每当唱起队歌“爱，因为在心中”就瞬间能量满满，未曾想过放弃，因为经历的都会被纪念。\n　　“90后”，已经逐渐崭露头角，敢于挑大梁，担重任，经过岁月的洗礼，他们真正成长起来了……\n　　他们有担当！2008年的四川汶川大地震，许多年轻的服役士兵和志愿者冒着余震的危险第一时间深入灾区进行救援。他们有理想！2015年9月3日举行的纪念反法西斯战争胜利70周年的大阅兵上，我看到了英姿飒爽的中国军人，也看到了快速成长的一批“90后”军人，他们自信、骄傲地走过天安门广场，接受主席的检阅，这是他们的军旅梦。他们有责任心！主动下基层，来到最偏远最艰苦的地区，争当青年致富带头人，扎身农村，带领广大农民谋福利、奔小康……\n　　“90后”们，完美诠释了什么叫“蜕变”，现在人们谈论起“90后”，嘴角是上扬的，神情是骄傲的，这一代热血青年用行动向社会证明，建设祖国和保卫祖国的重任，他们能行！他们一定行！', '1534755353', '', '2', '0', '0', '0', '1');
INSERT INTO `c_heart` VALUES ('44', '1', '组织部的孩子', '3', '　　前些时间，《组织部的灯》《组织部的风》《组织部织什么布》《组织部的那些人那些事》《组织部的女孩》等关于组织部门工作和组工干部的文章在朋友圈点赞无数，文中写到的真实例子也在身边的组工干部中引起共鸣。文章语言或平实、或幽默、或感人，给了组工人满满的“正能量”。\n　　在组织部，还有很多感动和鼓舞我们的故事。每个人在家庭和工作之间，都避免不了面临着很多的艰难“选择”，组工干部也一样，他们同样为人子女、为人夫妻、为人父母，很多时候因为“组工干部”的事业心和责任感，“放松”了作为一个家庭成员的责任。\n　　在周末的组织部，我们有时候可以在半掩的办公室中听到一两声孩子的声音，但很快又会被“莫吵到隔壁的叔叔阿姨”的安慰声掩盖，最后一层办公楼又变得安静起来。这是一群“组织部的孩子”，因为父母周末加班，他们也会在父母办公室安安静静地学习，他们不哭不闹，不会埋怨父母经常不去家长会，不会主动要求父母带他们去玩耍，只是默默听着父母为他们讲述“组织部织的什么布”“组织部的灯是什么样的灯”“组织部的叔叔阿姨们是怎样的一群人”……慢慢的，懂事的他们在成长的路上会骄傲地说起：“我的爸妈是组工人，我们是组织部的孩子！”\n　　组织部的孩子不会孤单，因为他们一直向阳生长。“前方的路是那么漫长，也许你会迷失方向，如果你可以，如果你能够，希望你是那纯洁的向阳花，在这美丽的艰辛的生命中，坚强地、灿烂地绽放……”这是汪峰《向阳花》中的一句歌词，如果说组工干部的孩子是向阳花，那我们的党就是最耀眼夺目的太阳。组织部门作为管党治党的重要职能部门，组工干部一直都恪守着“讲政治、重公道、业务精、作风好”十二字要求，这十二个字也是组织部门的“好家风”。在教育孩子的时候，组工干部也让这样的“家风”潜移默化的影响着孩子。所以，组织部的孩子们，你们从小就在党的身边长大，必将向阳生长，绽放最美丽的人生。\n　　组织部的孩子不会害怕，因为他们知道生来坚强。在火遍朋友圈的视频短片《妈妈，您在组织部织什么布？》中，讲述了一个可爱的“组工娃娃”对忙碌的“组工妈妈”从“失落”到“懵懂”再到“理解”的过程，故事普通但不平凡，欢快但不可笑，感动但不悲伤，是每一个组工干部都在经历或者已经经历教育孩子那些点点滴滴的真实写照，让每一个组工干部感同身受，笑出泪水。这是一个组工妈妈苦口婆心得到女儿理解的过程，也是一个“组工娃娃”慢慢成长从理解变得坚强的过程。身在组织部，很多男同志甚至陪产假没有休完就因为紧要的任务不得不临时被“召回”，孩子的成长过程中，也因为加班时间多没有陪伴照顾而心怀愧疚，但是他们都是顾家的好丈夫、好爸爸，因为一有时间就会把心全放在家里，他们需要你们的理解。组织部的孩子们，你们生来学会了坚强，在今后的岁月中将无畏忧伤。\n　　组织部的孩子不会迷惘，因为他们也有奋斗荣光。邓小平同志曾说，“在艰难困苦的时候需要艰苦奋斗，在物质条件优越的时候也需要艰苦奋斗”。《组织部的灯》里有这样一句话，“只要这里的灯还亮着，人民的幸福生活就有希望，民族的伟大复兴就有希望，国家的富强、民主、文明、和谐、美丽就有希望。”组织部是党员之家、干部之家、人才之家，为党的事业、民族的事业、人民的事业提供了坚实的组织保障和干部人才保障，没有人比组工干部更懂得“奋斗”的真谛。其实，组工干部也是人，也有累的时候，但是，当每天拖着疲惫的身躯回到家里，最能驱散疲惫的，便是孩子的笑脸。所以，组织部的孩子们，他们取得的优秀成绩中，同样有你们的一份功劳；他们通过不懈努力开创的伟大事业中，你们也配得上奋斗的荣光。\n　　组织部的孩子们，虽然父母不能经常陪你们上课放学，但他们可以给你们树立起最好的榜样；虽然父母不能经常为你们准备上可口的菜肴，但他们可以为你们准备最好的精神食粮；虽然父母不能经常在雨天为你们撑开一把伞，但他们可以让你们在晴朗蓝天下茁壮成长。只因为你们是组织部的孩子！', '1534755410', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('45', '9', '“差不多先生”变形计', '5', '　　“凡事只要差不多，就好了。何必太精明呢？”这是胡适先生《差不多先生传》中，差不多先生的口头禅。作品中差不多先生把红糖买成了白糖，把山西说成了陕西，千字和十字常常混用，直到有一天他得了急病，牛医王大夫用医牛的法子给他治病，结果一命呜呼了，要死的时候断断续续地说：“活人和死人差不多，凡事差不多就好了，何必太认真呢？”\n　　在干部队伍中，不乏有部分“差不多先生”：一些干部认为自己年龄大点，就倚老卖老，工作能躲就躲，能蒙就蒙；一些干部认为自己的工作思路、阅历经验足够处理日常事务，就抱着“吃老本”的心态，学习激情减退，岗位才干发挥不充分；一些干部认为自己不谋一官半职，保证饭碗不丢就万事大吉，工作不思进取，不勇于创新，领导指哪儿打哪儿，成为工作上的“木偶人”，更有甚者对自己经手的工作不以为意，认为“天塌下来有个儿高的顶着”。\n　　德、能、勤、绩、廉是考核干部的“天规”，在这个“能上能下”、物竞天择的“生态圈”，高标准、严要求成为干部日常管理的基本原则。业务一知半解，学习浅尝辄止，工作满足应付，思想止步不前，以马马虎虎的态度对待任何事务，已经不能适应新常态下的工作要求。“生存空间”日益变窄的“差不多先生”，怎样才能摒弃熟悉的“温床”，通过不断“变形”，获得一席之地呢？\n　　对标高要求，盯住最完美。最完美就是无懈可击，高要求就是看齐标杆。继承发扬杨汉军、李林森等干部的优良传统，树立担当意识、奉献意识、细节意识，严肃严谨地对待工作，不忽视细节，不放过疑点，不漏落重点，不绕过难点，让任意一件任务就算吹毛求疵也找不出任何纰漏，做到最完美。\n　　树学习意识，锤炼新本领。“不吃饭则饥，不读书则愚”，学习是干部日常工作中需要持之以恒的事情，坚持学习工作化、工作学习化，在干中学、在学中干。学习是一件逆水行舟的事，加之平时工作任务繁重，留给学习的时间是零碎零散的，如何提高学习和工作的效率，就是要在学的过程中结合实际，在干的过程中感悟学习，将理论基础和实践经验有机结合才会迸发思想的火花，得到事半功倍的效果，同时也要坚持向书本、实践、群众、领导等等学习，边学边用，边用边学，在学和用的过程中不断淬炼本领。\n　　杜绝“拖延症”，做事有条理。养成“今日事　今日毕”的工作惯性，列好工作清单，分清轻重缓急，保证任务不拖延、事情不遗漏。如果工作中有“明日复明日”的心态，今天的事情拖到明天做，明天的事情拖到后天做，这样拖下去工作量不断累积，工作压力不断增加，处于“打混战”的状态，影响工作效率和干事创业的积极性。只有做好统筹规划，理清工作思路，做好今天该完成的事，计划好明天将要完成的事，才能够游刃有余、井然有序地开展工作。\n　　开阔眼界、拓展思维、提升能力、锐意进取是干部成长的不二法门，“差不多先生”只有在干事创业中不断鞭策自身“变形”，确立崭新的“生存法则”，拓展更大的“生存空间”，才能彻底摘掉“差不多”帽子，“变形”成功。', '1534755529', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('46', '29', '【改革开放记忆】问候语见证我家的酸甜苦辣', '1', '&lt;p&gt;改革开放40年，我家的生活发生了翻天覆地的变化，而最能体现这一巨变的是那些出现于人们日常生活中的“问候语”。从上世纪70～80年代的“你吃了吗”“你忙什么”，到90年代的“你买房了吗”“你炒股了吗”“你旅游了吗”，再到“你身体还好吗”“你儿子上大学了吗”，变成现在的“你电商了吗”“你自驾游了吗”这些问候语的变化，从另一个侧面真实反映了40年来人们日常生活的变迁。\n　　我老家在偏远的农村，那时候生活很困难，有时一天三顿都吃不饱，整天都是吃红苕干和高粱面，偶儿才下一小半碗米，就连所谓的“打牙祭”也只见几颗油珠珠。\n　　记得有一年，因为一家人已经几个月没吃上一回肉了，嘴里成天冒着清口水，痨得很，所以干活自然也没什么力气。过中秋节时，邻居家的儿子从新疆部队回来探亲，带了猪肉罐头。这家人像过年一样，下午早早地就开始蒸罐头，准备晚饭。闻到那股子香味，我和哥哥借故三天两头地来这家人屋里串门，嘴上说是看看当兵的小伙伴，其实就是想尝一口猪肉罐头。当时不仅是我哥俩，还有好几户邻居都去了他们家，为的就是一饱口福！我至今还依稀记得当年的情形。\n　　那些年，邻里之间一见面都要问：“你吃了吗？”即便是上午十点或下午三四点也这么问，虽然只是一句简单的问候，但其实在大家的心里把吃饭问题都看得很重。那时候，粮食紧张、物资匮乏，老百姓买什么都需要票。做新衣要布票，买煤油要油票，逢年过节买几两红苕酒都要酒票。我家娃儿多，只有父母是劳动力，挣的工分少，分的粮食也不多，所以每顿饭吃完都会把粘在碗底的粥糊饭粒舔干净，这还觉得意犹未尽。成天想的也是怎样把肚子填饱，所以见面都说吃饭的事。\n　　自改革开放以来，农村实行了家庭联产承包制，我家7口人承包了7亩地，每年可收1万多斤粮食，不仅自己家吃不完，还要卖几千斤出去。村民收入增加了，见面时的问候语也发生了变化，由“你吃了吗”变成“你在忙啥”“你今年收入多少”。\n　　虽然温饱已不是问题，但父母要赡养年迈多病的爷爷奶奶，还要供我上大学，一家人的收入仍有些捉襟见肘。父亲只留下妈妈和小侄女在家，他自己和哥哥姐姐们出外打工挣钱。那时，父亲只要一听到别人问他：“你有存款吗”“你准备给儿子买房了”，脸上就露出深深的愧疚和无奈。\n　　2014年，我大学毕业，找了很多工作都不甚满意。家里的亲朋好友一见面，就问父亲：“你儿子找到工作了没？”这让他十分苦恼。正当一家人为此犯愁时，村主任来到我家，找到我父亲：“现在国家有了新政策，支持大学生创业，你儿子又是学农业的，我看可以试试自己创业。如果你儿子决定好创业，村里一定尽全力帮助。”父亲当时心里便有了主意，随后给我做了一通思想工作，我也欣然接受了。在村里的帮助下，我结合专业所学，经过考察论证，选择了当年栽种当年挂果的山东槟榔核桃，通过利用国家政策的扶持资金，承包了村里的200亩荒地，结果第二年就有了收益。\n　　现在除了种植核桃，我家还盖起了几十亩的无公害蔬菜大棚，开启了电商业务，不出家门就能把产品卖出去，一年净收入有20多万元。家里不仅装修了农村的房子，也在城里给我买了商品房和小汽车。婚后，节假日期间我们一家人经常自驾游，看祖国大好河山。一与人拉家常，父亲总掩不住内心的激动，说个不停。最让我意外的是，父亲还开始用微信，经常和远在省城读研究生的外侄女视频聊天。每每如此，他的脸上总洋溢着幸福和喜悦。\n　　这40年来，我家的生活一天比一天好，吃饱吃好之余还讲究营养搭配。以前的“高档食品”也进入寻常百姓家。家庭聚会、好友聚餐把“下馆子”视作常事，不像从前那样算计着过日子。“你电商了吗”“你自驾游了吗”，成为农村人日常见面的时兴话。\n　　去年四川凉山地震，父亲第一时间向灾区捐了2万元，还发动合作社的10位种养大户为灾区捐款捐物，遇到熟悉或不熟悉的，见面就问：“你捐了吗？”在他的倡议下，社里10名党员还交纳了3000多元的“特殊党费”。他说：“改革开放40年，我们脱贫致富。现在国家日益强盛，受惠于党和国家的好政策，我们的日子越过越红火，有了一定的家底，也该想想其他受困的人。能够为灾区人民出一份力、尽一份心，也是我们回馈社会的一份心意啊！”&lt;/p&gt;', '1535594054', '', '2', '1535595414', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('47', '29', '【改革开放记忆】问候语见证我家的酸甜苦辣', '5', '&lt;p&gt;改革开放40年，我家的生活发生了翻天覆地的变化，而最能体现这一巨变的是那些出现于人们日常生活中的“问候语”。从上世纪70～80年代的“你吃了吗”“你忙什么”，到90年代的“你买房了吗”“你炒股了吗”“你旅游了吗”，再到“你身体还好吗”“你儿子上大学了吗”，变成现在的“你电商了吗”“你自驾游了吗”这些问候语的变化，从另一个侧面真实反映了40年来人们日常生活的变迁。\n　　&amp;nbsp;&lt;/p&gt;&lt;p&gt;我老家在偏远的农村，那时候生活很困难，有时一天三顿都吃不饱，整天都是吃红苕干和高粱面，偶儿才下一小半碗米，就连所谓的“打牙祭”也只见几颗油珠珠。\n　　\n记得有一年，因为一家人已经几个月没吃上一回肉了，嘴里成天冒着清口水，痨得很，所以干活自然也没什么力气。过中秋节时，邻居家的儿子从新疆部队回来探亲，带了猪肉罐头。这家人像过年一样，下午早早地就开始蒸罐头，准备晚饭。闻到那股子香味，我和哥哥借故三天两头地来这家人屋里串门，嘴上说是看看当兵的小伙伴，其实就是想尝一口猪肉罐头。当时不仅是我哥俩，还有好几户邻居都去了他们家，为的就是一饱口福！我至今还依稀记得当年的情形。\n　　&amp;nbsp;&lt;/p&gt;&lt;p&gt;那些年，邻里之间一见面都要问：“你吃了吗？”即便是上午十点或下午三四点也这么问，虽然只是一句简单的问候，但其实在大家的心里把吃饭问题都看得很重。那时候，粮食紧张、物资匮乏，老百姓买什么都需要票。做新衣要布票，买煤油要油票，逢年过节买几两红苕酒都要酒票。我家娃儿多，只有父母是劳动力，挣的工分少，分的粮食也不多，所以每顿饭吃完都会把粘在碗底的粥糊饭粒舔干净，这还觉得意犹未尽。成天想的也是怎样把肚子填饱，所以见面都说吃饭的事。\n　　&amp;nbsp;&lt;/p&gt;&lt;p&gt;自改革开放以来，农村实行了家庭联产承包制，我家7口人承包了7亩地，每年可收1万多斤粮食，不仅自己家吃不完，还要卖几千斤出去。村民收入增加了，见面时的问候语也发生了变化，由“你吃了吗”变成“你在忙啥”“你今年收入多少”。\n　　&amp;nbsp;&lt;/p&gt;&lt;p&gt;虽然温饱已不是问题，但父母要赡养年迈多病的爷爷奶奶，还要供我上大学，一家人的收入仍有些捉襟见肘。父亲只留下妈妈和小侄女在家，他自己和哥哥姐姐们出外打工挣钱。那时，父亲只要一听到别人问他：“你有存款吗”“你准备给儿子买房了”，脸上就露出深深的愧疚和无奈。\n　　&lt;/p&gt;&lt;p&gt;2014年，我大学毕业，找了很多工作都不甚满意。家里的亲朋好友一见面，就问父亲：“你儿子找到工作了没？”这让他十分苦恼。正当一家人为此犯愁时，村主任来到我家，找到我父亲：“现在国家有了新政策，支持大学生创业，你儿子又是学农业的，我看可以试试自己创业。如果你儿子决定好创业，村里一定尽全力帮助。”父亲当时心里便有了主意，随后给我做了一通思想工作，我也欣然接受了。在村里的帮助下，我结合专业所学，经过考察论证，选择了当年栽种当年挂果的山东槟榔核桃，通过利用国家政策的扶持资金，承包了村里的200亩荒地，结果第二年就有了收益。\n　　&amp;nbsp;&lt;/p&gt;&lt;p&gt;现在除了种植核桃，我家还盖起了几十亩的无公害蔬菜大棚，开启了电商业务，不出家门就能把产品卖出去，一年净收入有20多万元。家里不仅装修了农村的房子，也在城里给我买了商品房和小汽车。婚后，节假日期间我们一家人经常自驾游，看祖国大好河山。一与人拉家常，父亲总掩不住内心的激动，说个不停。最让我意外的是，父亲还开始用微信，经常和远在省城读研究生的外侄女视频聊天。每每如此，他的脸上总洋溢着幸福和喜悦。\n　　&amp;nbsp;&lt;/p&gt;&lt;p&gt;这40年来，我家的生活一天比一天好，吃饱吃好之余还讲究营养搭配。以前的“高档食品”也进入寻常百姓家。家庭聚会、好友聚餐把“下馆子”视作常事，不像从前那样算计着过日子。“你电商了吗”“你自驾游了吗”，成为农村人日常见面的时兴话。\n　　\n去年四川凉山地震，父亲第一时间向灾区捐了2万元，还发动合作社的10位种养大户为灾区捐款捐物，遇到熟悉或不熟悉的，见面就问：“你捐了吗？”在他的倡议下，社里10名党员还交纳了3000多元的“特殊党费”。他说：“改革开放40年，我们脱贫致富。现在国家日益强盛，受惠于党和国家的好政策，我们的日子越过越红火，有了一定的家底，也该想想其他受困的人。能够为灾区人民出一份力、尽一份心，也是我们回馈社会的一份心意啊！”&lt;/p&gt;', '1535595521', '', '2', '1535595608', '1', '0', '0');
INSERT INTO `c_heart` VALUES ('48', '29', '小家变 大家兴', '5', '&lt;p&gt;前些天，我和母亲唠家常时，她不停感慨：“和你爸结婚已经30多年了，日子就像糖水一样，越过越甜。以前许多不敢想的事，现在都变成了现实。”细想母亲的话，回想这些年家里的变化，心中更加确信：改革开放改善了我们的生活。\n \n　　&lt;/p&gt;&lt;p&gt;走出农村，来到城市\n　　&lt;/p&gt;&lt;p&gt;1983年6月，父母在激动兴奋中迎来第一个孩子——我的哥哥庆伟。当时，正值麦子收割的时节，天气异常炎热。母亲生下哥哥的第二天，便扎起头巾，强撑着虚弱的身体到田里干活。外婆非常心疼在地头哭喊的哥哥，便把他抱回家，一直养到三岁。1984年11月，母亲又生下我。据父亲回忆，当母亲得知又是一个男孩时，便摇头叹气：“一个男孩已经够操心了，再来一个恐怕以后找媳妇都难。”第三年，母亲又生下了妹妹。\n　　&lt;/p&gt;&lt;p&gt;父母都是老实巴交的庄稼人，靠着十几亩地过日子，要是庄稼欠收，日子便过得紧巴巴。还记得那时，家里伙食不好，顿顿吃的都是自家种的蔬菜，主食则是红薯面和白面搀合一起蒸的馒头、擀的面条。至于肉蛋，只有等到逢年过节才能吃到稍微解解馋。贫困艰苦的生活，让父母常为我们兄妹三人的将来担心。\n　　&lt;/p&gt;&lt;p&gt;随着年龄增长，我们相继入学，父母的担子更重了。为了供我们上学，只会同土地“打交道”的父母，东拼西凑地买了辆农用三轮车，开始学着跑运输。父母起早贪黑、没日没夜地为生活奔波，吃尽了苦头，而我们仨也没让他们失望，学习成绩一直名列前茅。\n　　&lt;/p&gt;&lt;p&gt;1997年，哥哥为了给家里减轻负担，考入省城郑州的一所中专学校学习计算机。第二年，我考入县第二高中，妹妹则在我们镇的重点中学念书。\n　　&lt;/p&gt;&lt;p&gt;2001年，祸从天降，父母驾车回家，中途被一辆长途客车撞翻在地。所幸的是父母在医院昏迷两个星期后双双被救醒，但肇事司机却逃得无影无踪，家里的积蓄全部花光，还欠下一大笔债务。我们兄妹三人见到家里举步维艰，便全都选择辍学。村里人也为我们感动惋惜：“老陈一家经此一事，孩子们想要有出息就难咯！”\n　　&lt;/p&gt;&lt;p&gt;倔强的哥哥发誓：不混出模样，决不回家，于是带着妹妹踏上了开往北京的火车。而我穿上军装，准备到部队去寻找属于我的一片天地。谁也没曾想到，我们这一走，还真“走出”了农村。哥哥和妹妹一边打工一边学习，不断给自己“充电”，工作上越干越出色。如今，哥哥在一家IT公司做设计师，年薪不菲。妹妹在一家投资公司上班，并在北京结婚生子。而我在部队找到了出路，从南京政治学院毕业后被分配到天津，留在了大城市。母亲说：“孩子们，这是你们赶上了好时候，改革开放帮了咱一家啊！”\n \n　　&lt;/p&gt;&lt;p&gt;告别土屋，住进楼房\n　　&lt;/p&gt;&lt;p&gt;我的爷爷有九个孩子，父亲排行第八。父亲结婚时，爷爷已经没钱再盖砖瓦房，只能勉强搭了四间土瓦屋。我一出生就住在土瓦屋，直到2001年我参军去部队。土瓦屋保留了我太多的珍贵回忆。\n　　&lt;/p&gt;&lt;p&gt;土瓦屋的墙体主要由麦秸杆和泥土搅合而成，房顶上铺了一层柏油纸，柏油纸上盖着青灰色的瓦片，远远看上去像土包。这种房子居住条件极差，冬冷夏热，还时常漏雨，着实让我们一家吃了不少苦头。每到夏天，屋内闷得像蒸笼，身上的汗出个不停，躺在床上如“烙烧饼”一样。而最苦的莫过于冬天和雨天。冬夜特别漫长、寒冷，我和哥哥挤一张床，盖着两床被子，棉衣棉裤压在身上，还冻得直哆嗦。冬天最不愿起夜，短短二十几米的距离，却感觉要走特别久。下雨天更是糟糕，土瓦房就像漏斗，到处漏水。一到雨天，屋内摆满了盆子，滴落的雨水发出噼噼啪啪的声响，不得安宁。\n　　&lt;/p&gt;&lt;p&gt;父母曾几次计划重新盖房，但最终都不得不放弃这个念头。我们兄妹三人离家后，经常给父母寄钱，帮他们减轻负担。前些年，农村不但取消了农业税，而且每亩地还有一定的经济补助，慢慢的父母不仅还清了欠债，还有了一些存款。\n　　&lt;/p&gt;&lt;p&gt;2005年春节刚过，我们兄妹三人凑钱把老房子彻底翻新了一遍。三年后，哥哥凭借自己的能力，在北京买了一套两室一厅的房子，从此告别了租房的日子。2013年9月，我和妻子住进了部队的公寓房，家具家电一应俱全，我俩不禁热泪盈眶。2015年，妹妹在北京也拥有了自己的房子。\n　　&lt;/p&gt;&lt;p&gt;近年来，农村的生活水平越来越好，乡亲们竞相在县城买房。去年春节，我们兄妹一合计，决定也给父母在县城买一套小两居。父母虽不情愿，但仍拗不过我们，只好默许。\n　　&lt;/p&gt;&lt;p&gt;从昔日破旧的土瓦房到如今舒适的楼房，我们一家的日子越过越红火，这一切得益于改革开放。尤其是党的十八大以后，以习近平同志为核心的党中央肩负起团结带领全党全国各族人民共同奋斗的历史使命，让亿万人民对祖国的未来更有信心、更加期待。\n \n　　&lt;/p&gt;&lt;p&gt;老沱河，新风采\n　　&lt;/p&gt;&lt;p&gt;我的家乡有一条美丽的小河——沱河。每当想起它，那清澈的河水与儿时的记忆便一起涌上心头，让人魂牵梦绕。\n　　&lt;/p&gt;&lt;p&gt;沱河十分平静，宛若一位娴静的女子，偶尔会有几只野鸭从碧绿的水草中钻出，留下阵阵涟漪。沱河清澈透亮，像一面闪光的镜子。沱河两岸水草丰茂，到处是羊群。夏天，孩子们在水中嬉戏，爽朗的笑声回荡在这片水域。\n　　&lt;/p&gt;&lt;p&gt;天还没亮，渔民们就驾着木船去撒网。傍晚时分，火烧云紧贴着河面，折射出道道霞光。这时，渔民们驾着小船开始收网，一条条鱼儿在网中翻腾着，大家脸上洋溢着灿烂的笑容。此刻，沱河犹如一幅绝美的风景画，令人流连忘返。\n　　&lt;/p&gt;&lt;p&gt;沱河是我儿时的“玩伴”，分享着我成长的喜怒哀乐。随着经济发展，县城建起了造纸厂和化工厂，工业废水不断排入河中。渐渐地，沱河变了模样，失去了往日的生机：水质越来越差，还散发着恶臭，鱼儿没了踪影。\n　　&lt;/p&gt;&lt;p&gt;去年5月，县政府作出整改决定，改变经济发展方式，高度重视生态建设，沱河水又恢复了清澈，沱河航运建设与两岸景观工程也陆续上马。\n　　&lt;/p&gt;&lt;p&gt;见此种种，我不禁感慨万千：绿水青山就是金山银山。中央明确把生态文明建设摆在更加突出的位置，这是一种思想观念的变革。古老的沱河在新思想的指引下重新焕发出生机。\n \n　　&lt;/p&gt;&lt;p&gt;离部队，进机关\n　　&lt;/p&gt;&lt;p&gt;我所在的部队正面临军队改革，一大批战友即将脱下军装。作为一名从农村走出来的军官，我怀着感恩之情，顺应军队改革的大潮，决定转业去地方。2016年，军转工作开始后，我毅然向组织提交了转业申请书。尽管内心有万般不舍，但我坚信这是改革的阵痛期，必须咬紧牙关挺过去。军改期间，习近平主席的重要讲话和中央文件，无疑给我们这些转业干部吃了定心丸。最终，我转业到天津市人大常委会工作。\n　　&lt;/p&gt;&lt;p&gt;从一名部队军官转变为地方公务员，我深切地感受到个人重大的使命感与责任感。不论是在部队，还是在机关，我必定人尽其才、才尽其用、用有所成，为改革开放的持续推进贡献自己的一份心力。&lt;/p&gt;', '1535617941', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('49', '29', '两代人的40年', '3', '&lt;p&gt;花谢花开，秋去冬来。蓦然回首，改革开放已40载。看几多风雨，叹潮起潮落，当春风拂面，刹那间，一切涌上心头……\n \n　　&lt;/p&gt;&lt;p&gt;一\n　　&lt;/p&gt;&lt;p&gt;1978年，愿你吃饱穿暖\n　　&lt;/p&gt;&lt;p&gt;“新三年，旧三年，缝缝补补又三年……”大年三十将近，一家老小围坐在炕头，梅子一边看着妈妈皱着眉为她和其他五个兄弟姐妹缝补裤子，一边啃着手里的冻豆包，想着年夜饭上能有她心心念念的饺子。那时，梅子瘦小，不爱吃饭，因为整日只有棒子面粥可以喝。父亲一人工作养活全家十分不易，一年到头，即使是棒子面，也常常不够吃。梅子那会儿最希望生病，因为只有生病了，母亲才会用节省下来的钱到离家几里外的小卖铺给她买一瓶罐头，哪怕是五个孩子哄抢过后只能喝到一口罐头汤也心满意足许久。那时候，吃饱穿暖就是一大家子唯一的愿望。\n \n　　&lt;/p&gt;&lt;p&gt;2007年，许你衣食富足\n　　&lt;/p&gt;&lt;p&gt;“妈，我上学去了，中午我想吃炖羊肉！”显苹一口气喝完了杯子里的牛奶，背起书包便急匆匆地要去上学。女孩的母亲连忙追出来，一边帮她把帽子扶正，再整理一下新校服的领口，一边叮嘱道：“慢点走，红领巾带了没？还有放学不准买零食吃，再买就扣你的零花钱！”显苹听完后做了个鬼脸，随声附和着就小步向学校跑去。\n　　&lt;/p&gt;&lt;p&gt;“我今天上街给你买了一条漂亮的裙子，当作你期末考试第一名的奖励。”正在看电视的显苹欢呼雀跃地跑了过来，迫不及待地穿上美美的裙子，舞动着裙摆又转了一圈，便笑嘻嘻地说：“谢谢妈妈，以后我会更努力学习。”\n　　&lt;/p&gt;&lt;p&gt;落日的余晖洒满了宁静的小城，慵懒的氛围随着显苹银铃般的笑声渐渐消弭，她牵着爸爸的手，催促道：“爸爸快点，说好教我打羽毛球呢！”父女俩笑盈盈地在体育场上挥动着球拍，汗珠从两人额头上滴落，在平坦的地面上映出了一朵花。\n \n　　&lt;/p&gt;&lt;p&gt;二\n　　&lt;/p&gt;&lt;p&gt;1987年，居者有其屋\n　　&lt;/p&gt;&lt;p&gt;“我想有个家,一个不需要多大的地方……”那一年，这首歌响彻大街小巷的每一处。梅子正好18岁，依旧每天和一大家子挤在一张炕上，一大早起来,她也已经习惯去胡同口的公厕排队上厕所。这几天，梅子发现：屋子中间裂开了一条缝,土渣掉落在她的头发上。眼看着外头就要下雨，她心里有些闷闷不乐，一边将炕上的被子往里挪了挪，以防雨水滴落弄湿它，一边拿了几个盆放在经常漏雨的地方，她暗想：马上又得听一阵子协奏曲了。\n　　&lt;/p&gt;&lt;p&gt;“妈，今天远房的表叔来，我去同学家住一晚吧！”梅子懂事地说。家里着实太小，有时来了客人,连坐的地方都没有,只能站着聊天，更别说在这儿住下。大哥今年要结婚,父母决定在自家院子里加盖一间房子，顺便再翻新一下老屋，想到这，梅子露出了会心的一笑。\n \n　　&lt;/p&gt;&lt;p&gt;2007年，居者优其屋\n　　&lt;/p&gt;&lt;p&gt;“快来搭把手帮爸爸把冰箱放好！”显苹听到爸爸的召唤，三步并作两步地从客厅跑出来，看着比自己还高的新冰箱，想着她自己动手制作的冻冰棍，嘴角不由得上扬。\n　　去年，显苹一家从平房搬到了这个100平方米的楼房，她不仅有了自己的小天地，还得了一台电脑。家里摆放了各式各样的新家具，柜子上显眼地放着一台29寸的彩电，闲暇时她和同学约在家里一起看VCD。\n　　&lt;/p&gt;&lt;p&gt;“听说咱小区被评为文明示范小区了！”刚放学回家的显苹无意中听到邻居大爷大妈的闲聊，不禁放慢了脚步。她抬头又望了望小区内，假山溪水相映成趣，喷泉花坛错落有致，自然人文相得益彰。在如此舒适的社区，心旷神怡自然不在话下。\n \n　　&lt;/p&gt;&lt;p&gt;三\n　　&lt;/p&gt;&lt;p&gt;1993年，风雨飘摇夜难行\n　　&lt;/p&gt;&lt;p&gt;今天，梅子要去东校区参加市教师大会，一大早，她便与同事结伴骑车而去。晚上返程时，天下起了雨，必经之路的小桥被冲毁。两个小姑娘在河边等了许久也不见有行人经过，雨水早已把她俩淋湿。河面不算太宽，但水流湍急，无奈之下二人只能趟河。天色渐晚，同事在前面推着自行车，梅子在后面扶着车架缓慢挪动，这时河水都已漫到了她们的腰身。刚过河心，一个水流扑来，梅子一个趔趄倒在水里。幸好同伴一把抓住了她，可新买的自行车却付诸东流。她俩相互搀扶，好不容易上了岸，可全身如落汤鸡一般。\n \n　　&lt;/p&gt;&lt;p&gt;2018年，华夏大地任遨游\n　　&lt;/p&gt;&lt;p&gt;周末，显苹正兴高采烈地一件一件往皮箱里装郊游的必需品，妈妈则在一旁不时地叮咛：“别忘了带防晒霜、雨伞，记得把帐篷也带上……”\n　　&lt;/p&gt;&lt;p&gt;2012年，显苹家买了一辆SUV越野车。2014年，他们全家一道自驾游去广西桂林。观石林，游山水，荡舟漓江，徜徉人间仙境。2016年，一家人坐飞机去了山西、陕西、甘肃、四川……还登了华山，逛了九寨沟，领略了黄河壶口瀑布。2018年“五一”假期，乘高铁，上轮船，去大连看海。温饱之余享受出行的便利，生活变得多姿多彩。\n　　&lt;/p&gt;&lt;p&gt;其实，我就是显苹，梅子是我的母亲。闲暇时，我和母亲会聊起过往的点点滴滴。改革开放40年，两代人生活的巨变恰好见证了这一段岁月。40年的改革之路，泱泱大国勇立潮头，铸就历史辉煌。春风十里，耀我中华，一句话常存我心间：此生无悔入华夏,来世还生中华家。&lt;/p&gt;', '1535617983', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('50', '29', '乡村标语“进化史”', '1', '&lt;p&gt;改革开放40年，一路披荆斩棘的历史，都“写”在我老家那些斑驳的土墙上。\n　　&lt;/p&gt;&lt;p&gt;在老家的村里，有一面土墙，专门用来写宣传标语。这些标语向村民介绍改革开放以来国家推出的各项政策，一条接着一条，记录下了这40年的变迁。\n　　&lt;/p&gt;&lt;p&gt;1978年，我刚满9岁。当年12月，一个关乎国家命运的重要会议在北京召开。\n　　&lt;/p&gt;&lt;p&gt;等会议精神传到老家村子里时，村长从公社开会回来，手里挥舞着一纸文件，刚到山梁上就扯开嗓子喊：“李永德，快点上坡来，接受任务！”\n　　&lt;/p&gt;&lt;p&gt;村长喊的这个人，是我一个本家二叔。二叔略通文墨，在村子里也算个文化人。他平时走在村里，总是像公鸡一样昂着头挺着胸，有时与人发生争执时，常以一句“你没有文化”来收尾，然后一个人悻悻地离去。我二叔骨子里是个清高的人，这样的人在当时注定不合群。\n　　&lt;/p&gt;&lt;p&gt;但每逢接到村里写标语的任务时，就是二叔最得意的时刻。我看他提着石灰桶（后来改成涂料），挥动手里的一把大刷子就开始在墙壁上展示他的好手艺。写标语时，二叔总喜欢半蹲着，仿佛在暗暗运气，把体内气流导入右手，随后一气呵成，一条标语就算写完了。\n　　&lt;/p&gt;&lt;p&gt;二叔曾说过一句话：“北京的会议精神，翻过万水千山跑到咱们村来，还得靠我在墙上写出来才算完事。”二叔的话咋一听似乎没问题，但这股子狂妄劲儿着实让人唏嘘。\n　　&lt;/p&gt;&lt;p&gt;1979年春，二叔又把标语写到了村里各个路口、电线杆子以及渠堰天桥上。改革春风在村里“来回打转”，那些标语口号也家喻户晓，处处洋溢着热闹的气氛。再回想二叔当年刷写的标语：“解放思想，实事求是，团结一致向前看”“全体群众行动起来，大干一场”，真不由得让人心潮澎湃……虽然村子里的父老乡亲不一定都能明白标语的意思，但二叔一旦有空就会给他们讲解一二。当年留下的这些标语，已然成为纪念改革开放元年的印记。\n　　&lt;/p&gt;&lt;p&gt;1981年，中华大地迎来新一轮土地改革，如春雷般唤醒了我生活的那个小山村。二叔当年写的标语是：“打多少收多少，由你自己说了算！”“交足国家的，留够集体的，剩下的都是自己的”…\n　　&lt;/p&gt;&lt;p&gt;1982年，计划生育成为基本国策。村里的土墙上写满了标语：“一对夫妇只生一个好”“提倡一胎、控制二胎、杜绝三胎”……二叔写的标语都是按照上级的规定去完成，不敢“添油加醋”。\n　　&lt;/p&gt;&lt;p&gt;2015年10月，国家全面放开二胎政策，二叔那年已经76岁。满头白发的他，欣然受命，提着涂料桶，又出现在村里的房前屋后和公路两旁，写下新的标语：“一个太少、两个正好”“春风吹大地、播种播两粒”，而后面一条是二叔原创，他自己甚为满意。\n　　&lt;/p&gt;&lt;p&gt;在我记忆中，二叔40年里刷写的标语实在太多，多到可以出一本“教科书”。1988年殡葬改革：“坚决反对土葬，实行火葬”；1996年安全宣传：“遇到电线着了火，千万不要用水泼”；1998年发展农村经济：“全村人民行动起来，多栽果树”；2006年全国取消农业税：“农业税，不交了，党的政策真是好”； 2002年环保宣传：“保护青山绿水，实施退耕还林”； 2008年奥运会：“北京就要开奥运会啦！”；2018年：“美丽乡村是我家，农村不比城里差”。\n　　&lt;/p&gt;&lt;p&gt;前不久，我回老家探亲，看见79岁的二叔还在村里刷写标语，他用颤抖的手写下这样的标语：“不忘初心跟党走，共同建设新农村！”\n　　&lt;/p&gt;&lt;p&gt;在我们村，如今有卖房、卖电器、卖车、推销保险和电商平台等各种喷绘广告，它们纷纷出现在交通要道、办公楼和果园附近，可是这些都及不上二叔刷写的标语令人印象深刻。二叔仍然不时地出现在村里的各个角落，继续向村民宣传着党的政策，这也成为村里的一道风景，成为我乡愁的一部分。\n　　&lt;/p&gt;&lt;p&gt;40年改革开放的记忆，浓缩在二叔写下的那些乡村老标语中，一点一滴留存于我的脑海。&lt;/p&gt;', '1535618028', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('51', '29', '一勤无难事', '3', '&lt;p&gt;家庭是人生的第一课堂。父母的言行，时刻影响着我们做人做事的态度。家风正，则人正。\n　　&lt;/p&gt;&lt;p&gt;我刚上学那年，同母亲一起随军到武汉。30多岁的母亲被安排到一个要求会电脑、有电算会计证的职位。这对于当时还是一个“电脑盲”的母亲来说，无疑是一大挑战，可她没有退缩。每天晚上，母亲辅导完我的功课，就开始学习会计电算化知识；早上，我还没起床，母亲就已经起床背五笔字根。天道酬勤，经过一段时间的勤奋努力，母亲的打字速度已经达到每分钟五六十个字，并且还拿到了电算化会计证书。勤奋是一笔财富，而获得这笔财富没有捷径。后来，母亲还成为单位的业务能手。看着她在工作中取得的一本本荣誉证书，我明白了一勤天下无难事的道理。\n　　&lt;/p&gt;&lt;p&gt;如今，我成为武警边防部队的一员。在基层带兵时，母亲教育我，要勤学习，勤思考，勤深入到战士中间去，才能知兵爱兵。在带兵的同时，我牢记母亲的教诲，勤奋努力学习，先后考取了“国家二级心理咨询师证书”和“国家二级人力资源师证书”。去年我参加赴利比里亚维和警察防暴队的选拔，集训迎考期间，我固强补弱，起早贪黑，勤学苦练。苦心人天不负，凭着对 “勤”的孜孜不倦，我顺利通过了联合国的甄选考核并成为一名维和队员。现在我已到利比里亚任务区，要在这里进行为期一年的维和任务。这里条件艰苦，环境恶劣，在防暴队临时党总支的领导下，我们不等不靠，自己动手，顶着高温，建大棚种菜地，硬化营区道路。现在营区环境整洁，菜地硕果累累，工作顺利推进。我相信只要我们勤字当头，勤动脑筋，勤思对策，勤奋工作，勤勉尽责，一定会不辱使命，圆满完成此次维和任务。\n　　&lt;/p&gt;&lt;p&gt;感谢母亲，她让我懂得了一勤无难事的道理；感激母亲，她教会了我勤能补拙的工作方法；感恩母亲，她培养了我勤学苦练的习惯。我相信在人生的道路上，只要有勤为伴，任何困难都可以坦然面对。&lt;/p&gt;', '1535618080', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('52', '29', '孝心“接力棒”', '3', '&lt;p&gt;　正月初二，虽说是已立春，然而年前一场大雪，仍然寒气逼人。天寒地冻挡不住86岁的婆婆回娘家的迫切心情。吃过早饭，我便和婆婆、爱人、小儿子，开车向村南面山里驶去。连绵起伏的山岭映入眼帘，原野里白雪皑皑 ,小路上积雪车碾马踏的痕迹清晰可见。汽车开到半山腰上，泥泞路滑，喘着粗气再也走不动了，只好爱人在前面开，我和小儿子在后面推，却怎么也推不上去。“把车放在路边，我把妈背到舅舅家。”爱人说着背起婆婆，我和儿子拿着礼品，急忙跟在后面走。看着爱人气喘吁吁的样子，小儿子也抢着背起奶奶，父子俩就这样深一脚、浅一脚，你一程、我一程，一直把老人背到沟壑的最低处，大约走了10里路，下午3时方到舅舅家。看着满头大汗的爱人，还有沾满泥的鞋子以及裤子上湿迹斑斑，我想这就是孝道。 “百善孝为先”早已在这个大家庭里深深扎根，成了我们家中最动人的传统家风。\n　　&lt;/p&gt;&lt;p&gt;“我奶奶哪天来北京？”电话里传来了在北京工作的大儿子的声音。趁休假期间，他要把他奶奶接到北京看看。北京的十月，秋高气爽，天气清朗，还夹杂着秋风的丝丝冷意。儿子、儿媳推着奶奶，游玩在北京的故宫和天安门广场。婆婆的脸上始终洋溢着幸福、开心的笑容。\n　　&lt;/p&gt;&lt;p&gt;“你又给奶奶买衣服啦” “噢，奶奶去你哥哥那儿，我怕天气发生变化，多备了几件。还有，最近你老爸给家里安装了许多扶手，方便奶奶行走。“太好了”！电话那边传来小儿子爽朗、开心的笑声。这么多年，小儿子一放学、放假回来，总是陪在奶奶旁边，给奶奶捶捶背说说话。好吃的菜、瓜果都是让奶奶先品尝。这些年，我们无论走到哪儿，就把他奶奶带到哪儿。\n　　&lt;/p&gt;&lt;p&gt;孝心传递，让爱生生不息，也让我们的社会更加和谐与美好。让孝心化为爱的“接力棒”，传承我们“孝老爱亲”的好家风。&lt;/p&gt;', '1535619274', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('53', '29', '一群青年志愿者的乡村环保试验', '4', '&lt;p&gt;水库、茶园、竹林、民宿，路边开满野花，道路干净整洁。长江边的黄龙岘俨然已是南京人心中的“桃花源”。\n　　&lt;/p&gt;&lt;p&gt;这个昔日偏僻山村的“大变身”，与一些年轻人的到来有关。\n　　&lt;/p&gt;&lt;p&gt;2015年底，十几名大学毕业生来到这里。起初，村民并不清楚他们的来意，既不搞民宿，也不做餐饮，老关着门谈事，还经常带外人回来，村民甚至以为他们是搞传销的。直到一次村支书的到访，才揭开了谜底。\n　　&lt;/p&gt;&lt;p&gt;原来，几个小伙子来自南京大学农村环境治理与生态修复中心，一次野外考察，他们偶然发现黄龙岘具有良好的生态“底子”，又是长江边上一个小的流域单元，特别适合开展生态保护和环境教育。他们走进山村，为的是设立千百园生态环境保护中心，给当地自然环境把脉，推动乡村可持续发展和生态保护。\n　　&lt;/p&gt;&lt;p&gt;2013年，黄龙岘开始搞农家乐、兴办民宿，一下子成了人流量爆棚的乡村景点。每逢节假日，村里便会迎来数万名游客、两万多辆外来车辆。\n　　&lt;/p&gt;&lt;p&gt;“人来了，经济活动多起来了，整个地方的资源需求不断膨胀，化肥农药的使用量随之增大，村民们也希望加盖一些房子，多占一亩三分地。”在环境专家、千百园生态环境保护中心顾问祝栋林看来，随着经济的发展，这些行为本无可厚非，但也给当地环境造成不小的负荷。\n　　&lt;/p&gt;&lt;p&gt;如何守住生态红线，不逾越人与自然的边界，不超出环境最大承载力？“通过绿色转型的方式，减少化肥农药的使用，建设可持续乡村”，成了千百园团队研究解决的课题。祝栋林说，他们不希望城市的粗放式发展方式在农村再来一遍。\n　　&lt;/p&gt;&lt;p&gt;2016年初入驻后，千百园队长、南京师范大学生态学硕士刘文杰带领十余名志愿者依托小山村的生态体系，开展了一系列绿色项目，包括打造生态创意工作室、蝴蝶工坊、雨水花园、人工湿地、有机菜园、摇篮水田，共约70亩。\n　　&lt;/p&gt;&lt;p&gt;他们的乡村环保试验，也带动了当地村民。为了取得村民信任，增加彼此互动，一到晚上，刘文杰等人就提供基地场所，教跳广场舞，放映环保电影。村民们很快便和他们打成一片，逐步了解了他们的想法，开始在思想和行动上做出改变。\n　　&lt;/p&gt;&lt;p&gt;村民吴纪全听说做生态沟、雨水花园、有机农业可以保护生态环境，主动将自家两栋房屋以每年5万元的价格租给了他们，而这两栋房原本有人愿以每年八九万元的价格租下来开农家乐。吴纪全还积极行动，在村里随手捡拾垃圾。\n　　&lt;/p&gt;&lt;p&gt;让刘文杰更欣慰的是，村民们对吴纪全低价租房、捡拾垃圾的行为从最初的嘲笑转变为认可和点赞，少数人的环保行动逐渐变成全村人的自觉行动，街坊邻居也和吴纪全一样加入到随手捡垃圾的行列。\n　　&lt;/p&gt;&lt;p&gt;千百园雇了当地一位农民帮忙种植、照看有机菜园。按照当地传统习惯，种植蔬菜必须施用化肥农药，这样长出来的作物产量高、个头大，杂草不生。所以，当得知无需除草施肥时，这位农民有些手足无措。\n　　&lt;/p&gt;&lt;p&gt;祝栋林花了不少功夫解释，“沟渠有流水，有野草，蛙、蛇等动物会以此进入农田管理。届时生态系统趋于平衡，就不需要人为干预了。”农民们渐渐相信了祝栋林，开始按照他的方法管理农田。\n　　&lt;/p&gt;&lt;p&gt;事实证明，这些行动改变的不仅是村民的环保意识，更直接推动了当地人经济收入的增长，经营理念的转变。\n　　&lt;/p&gt;&lt;p&gt;萤火虫是生态系统的晴雨表，对生长环境特别敏感，一旦受到化肥农药、灯光污染的影响，它们的存活率会直接下降。\n　　&lt;/p&gt;&lt;p&gt;今年5月，刘文杰带领团队在黄龙岘茶园附近调研萤火虫种群及分布情况，一边拍摄萤火虫，一边记录其数量、出现时间等信息。通过复原其生存环境，让萤火虫越来越多地出现。\n　　&lt;/p&gt;&lt;p&gt;萤火虫茶园的名声一传十，十传百。当地村民开始意识到，对茶园及其周围沟渠、湿地环境进行管理，萤火虫数量增多，分布区域更广，可直观印证茶园无农业污染，种植的茶叶品质上乘。那时候，不仅生态环境得以改善，茶园的收入也必将蒸蒸日上。慢慢地，他们也加入到保护萤火虫的队列。\n　　&lt;/p&gt;&lt;p&gt;除了改善当地生态环境和产业经济，千百园还积极借助茶文化村的人气开展环境教育。针对不同的空间，开发不同的环境教育课程：在山里，帮助认识动植物，了解生物多样性；在水边，传授湿地保护与建设知识；在农田，讲解有机农田和摇篮水田的种植。\n　　&lt;/p&gt;&lt;p&gt;一年多来，千百园先后为江宁街道、陆郎社区小学、南京市博物馆、马鞍山学校等单位开展专项环境教育活动8次，服务近千人次，基地接待来访游客约6000人，接待各类交流活动数十场，有力宣传了环保理念。\n　　&lt;/p&gt;&lt;p&gt;“孩子应从小接触自然，这种接触不是蜻蜓点水，一次两次而已，而是一到两年全程参与。”祝栋林告诉记者，千百园未来还将与南京大学、南京师范大学、黄龙岘村委共建自然学校，推动环境教育的普及。此外，开展童子军夏令营，让孩子从中认识自然，受到自然教育，而且形成解决实际环境问题的能力。\n　　&lt;/p&gt;&lt;p&gt;与此同时，当地政府也越来越重视第三方团队介入对环境保护的作用，传达出一种引导人才回流乡村的信号，他们鼓励千百园继续为生态保护工作服务，协助整个村做垃圾分类。\n　　&lt;/p&gt;&lt;p&gt;事实上，如今的千百园已跟黄龙岘渐渐“融为一体”，刘文杰等人正积极推动村里的垃圾收运体系、水资源管理、绿色茶园和农田的建设。&lt;/p&gt;', '1535619306', '', '2', '0', '0', '0', '0');
INSERT INTO `c_heart` VALUES ('54', '29', '三位基层扶贫女干部的故事', '1', '&lt;p&gt;盛夏时节,广西融安县的脱贫攻坚已进入决战阶段,当地干部顶烈日、冒风雨、披星戴月,奋战在扶贫一线。在众多忙碌的身影中,女干部显得尤为不易。记者近日采访了三位扶贫一线的基层女干部,她们克服家庭、性别、身体等重重困难,不喊苦不叫累,脸晒黑、晒红了,她们自豪地称之为“扶贫红”。\n \n　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;“为了脱贫摘帽,大家都拼上了”&lt;/strong&gt;　　&lt;/p&gt;&lt;p&gt;蓬乱的头发、黑红的脸庞,沾着泥巴和尘土的衣服……融安县分管扶贫工作的副书记石祖芝刚刚下村归来,脸都没顾得上洗一把。\n　　&lt;/p&gt;&lt;p&gt;“为了脱贫摘帽,大家都拼上了,也顾不上梳洗打扮了。”石祖芝笑着对记者说,“我们扶贫女干部的脸晒黑了、晒红了,大家都不觉着丑,反而自豪地叫这是‘扶贫红’。”\n　　&lt;/p&gt;&lt;p&gt;沙子乡位于融安县东南部石山区,距县城50公里,因道路崎岖难行,记者到达这个乡的三睦村石岩屯整整走了一个半小时。36岁的乡党委书记陶媚开着一辆落满尘土的红色私家车赶来。“这辆车风里来雨里去的,去年跑了1万多公里,车牌都被尘土遮盖了,一些朋友还笑话我‘这哪是女人开的车!’”\n　　&lt;/p&gt;&lt;p&gt;陶媚毕业于广西民族大学,从团县委调到乡镇工作已有4年多,经过摸爬滚打,当年文静的女大学生已成为一位泼辣的女书记。她一身运动装打扮,走起路来风风火火,只有脸上那幅近视镜,显得干练中透出一些书生气。\n　　&lt;/p&gt;&lt;p&gt;本来白白净净的她,在烈日下脸晒得红红的。陶媚说:“哪个女人不爱美,但现在脱贫攻坚任务这么重,顾不上讲究了。”为了不让群众感觉跟干部有距离,陶媚在乡里专门定了规矩:女干部下村不能打伞、不能穿裙子。\n　　&lt;/p&gt;&lt;p&gt;陶媚的随身装备中,总是常备着一双解放鞋和一双塑料凉鞋。“穿解放鞋走山路轻便不打滑,特别稳,穿塑料凉鞋再深的水也能蹚过去。”这都是工作实践中总结出来的。　　&lt;/p&gt;&lt;p&gt;陶媚回忆起前两年,当地遭遇一场50年不遇的洪水,在转移群众过程中,当时她穿了一双橡胶雨靴,结果水位上涨太快,雨靴灌满水后根本抬不起脚,于是她甩掉鞋子,赤着脚泡在水里,直到最后完成转移。这次教训也让她此后把雨靴换成了塑料凉鞋。\n \n　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;做扶贫干部不易,做扶贫女干部更是不易&lt;/strong&gt;　　&lt;/p&gt;&lt;p&gt;白天冒着高温酷暑奔走在田间地头、扶贫产业一线,晚上到贫困户家里开展完夜访已是深夜,这些对扶贫女干部已习以为常。在一个周末,一位乡镇女干部高烧近40度还坚持开扶贫会,石祖芝问她:“高烧40度你咋还来开会?”她回答说:“现在是39度。”\n　　&lt;/p&gt;&lt;p&gt;晚上进村入户遇到狗和蛇是常事,这对女干部来说是个挑战。陶媚夜访时多次跌进水沟里,皮肤也常因毛毛虫爬过而起红疙瘩。陶媚告诉记者,乡镇工作时间长、强度大,从周一到周五都在乡里,经常是从早上8点干到晚上11点才回宿舍。有时周六、周日也还要在乡镇处理工作。去年初以来,她瘦了14斤。\n　　&lt;/p&gt;&lt;p&gt;陶媚的爱人2015年10月至今年3月在另外一个乡镇的贫困村当第一书记。夫妻俩都在扶贫一线,两个孩子全靠外公外婆带。说到孩子,陶媚充满了愧疚:大女儿9岁,上小学3年级,陶媚一个学期也没接送过她几次,3年了只参加过一次家长会。\n　　&lt;/p&gt;&lt;p&gt;小女儿2岁零4个月。陶媚怀她时,正是石岩屯发展乡村旅游的关键期,她挺着大肚子每天在屯里忙活,经常下午两三点还没吃午饭,晚上还要加班到11点多,因劳累过度导致3次面临流产危险。休产假期间,因为有重要工作,孩子只吃了5个月母乳就断奶了。\n　　&lt;/p&gt;&lt;p&gt;因为天天泡在村里,石岩屯每个村民都认识这位女书记。让陶媚颇为感动的是,村民看她怀着孕还这么拼很心疼她,热情邀请她到家里吃饭,有时拿出家里煮熟的红薯、玉米塞到她手里。\n　　&lt;/p&gt;&lt;p&gt;在陶媚一手推动下,“养在深山人未识”的石岩屯被打造为国家3A级旅游景区,带动了当地群众加快脱贫步伐。\n　　&lt;/p&gt;&lt;p&gt;东起乡党委书记江昕颐毕业于广西大学,是家里的独生女,爱人在县公安局工作。因为夫妻双方工作都很忙,5岁的儿子和3岁的女儿全靠外公外婆带着。两年前,江昕颐的母亲被检查出患有严重的尿毒症,每周要做两次透析,还紧急抢救过两次,现在更是隔一天就要去透析一次。但母亲从未抱怨喊累,全力支持女儿的工作。\n　　&lt;/p&gt;&lt;p&gt;“妈妈病情加重,是帮我带两个孩子累的。”江昕颐哽咽着说。\n　　&lt;/p&gt;&lt;p&gt;有时候母亲做透析,孩子没人照看,她只好带着孩子去贫困户家夜访。\n \n　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;“白+黑”“5+2”的扶贫工作&lt;/strong&gt;　　&lt;/p&gt;&lt;p&gt;作为主抓扶贫的县领导,石祖芝面临很大压力:融安县是自治区级贫困县,今年要争取脱贫摘帽,目前正是“大决战”时期,县委、县政府出台很多真扶贫、扶真贫的政策措施,县、乡镇领导干部夜访活动正如火如荼开展,大家“比学赶超”氛围浓厚。\n　　&lt;/p&gt;&lt;p&gt;融安县委常委、宣传部长、副县长蒋玉对记者说:“为让全县早日脱贫攻坚,石书记带头没日没夜地干,没见她有一天休息。”\n　　&lt;/p&gt;&lt;p&gt;沙子乡共有3个贫困村,去年两个贫困村脱贫,目前还有一个深度贫困村以及429户1380人未脱贫。陶媚坦言压力不小。\n　　&lt;/p&gt;&lt;p&gt;为决战脱贫攻坚,今年5月开始,融安县开展夜访贫困户活动,县、科级干部都要到贫困户家中察民情、解民意、排民忧。沙子乡建档立卡贫困户共计649户2205人,乡党委书记、乡长、人大主席和分管扶贫的副乡长要分片走完所有贫困户,每人需夜访160多户。截至目前,陶媚已经走访了120多户贫困户。“群众白天都要下地干活,晚上去不影响他们劳动。还有很多户没走完呢,得加把劲……”陶媚说。\n　　&lt;/p&gt;&lt;p&gt;在东起乡有个贫困村屯叫铜板屯,是当地有名的“空巢村”。近几年,在各级党委政府大力帮扶下,铜板屯成立合作社发展规模种植和特色观光旅游,如今村民返乡就业、创业,村子逐渐热闹和红火起来。\n　　&lt;/p&gt;&lt;p&gt;“扶贫需要‘领头雁’,铜板是一个很有潜力的地方,虽基础差、底子薄,但群众依靠自身发展脱贫致富的意愿很强烈。”江昕颐说,目前,乡里全力打造以铜板屯为核心的农业核心示范区,推动脱贫攻坚示范点建设,也引来了饮水、观光路、污水处理厂等不少项目,依托李花、油菜花等发展乡村旅游初见成效。\n　　&lt;/p&gt;&lt;p&gt;江昕颐表示:“现在国家政策这么好,不管有多难,我们都要用心把脱贫攻坚工作做好。”\n　　&lt;/p&gt;&lt;p&gt;石祖芝说,“上面千条线,下面一根针”,扶贫工作千头万绪,但最终都要靠基层干部来落实各项政策。现在,县乡村各级干部都在发扬“白+黑”“5+2”的工作精神做扶贫工作。看到工作见到成效,贫困村水电路等基础设施改善,产业发展、集体经济有起色,群众幸福指数提高,干部们没有比这更欣慰的了。&lt;/p&gt;', '1535619337', '', '2', '0', '0', '0', '0');

-- ----------------------------
-- Table structure for c_heart_cate
-- ----------------------------
DROP TABLE IF EXISTS `c_heart_cate`;
CREATE TABLE `c_heart_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '分类名称',
  `sort` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`),
  KEY `sort` (`sort`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='一颗红心 分类';

-- ----------------------------
-- Records of c_heart_cate
-- ----------------------------
INSERT INTO `c_heart_cate` VALUES ('1', '基层党建', '5');
INSERT INTO `c_heart_cate` VALUES ('2', '组织工作', '4');
INSERT INTO `c_heart_cate` VALUES ('3', '党员故事', '3');
INSERT INTO `c_heart_cate` VALUES ('4', '学习体会', '2');
INSERT INTO `c_heart_cate` VALUES ('5', '随笔漫谈', '1');

-- ----------------------------
-- Table structure for c_history
-- ----------------------------
DROP TABLE IF EXISTS `c_history`;
CREATE TABLE `c_history` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '视频名称',
  `cate_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '分类id',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `path` varchar(255) NOT NULL DEFAULT '' COMMENT '视频路径',
  `episode` tinyint(2) NOT NULL COMMENT '第几集 填数字',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `dtime` int(11) DEFAULT '0' COMMENT '删除时间',
  `is_del` tinyint(1) DEFAULT '0' COMMENT '是否删除 0未删除1已删除',
  `vtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '视频时长',
  PRIMARY KEY (`id`),
  KEY `cate_id` (`cate_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='党史';

-- ----------------------------
-- Records of c_history
-- ----------------------------
INSERT INTO `c_history` VALUES ('1', '建党', '1', 'Uploads/2018-08-20/5b7a2df997dd0.jpg', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-27_5b5ae4cf12c46.mp4', '1', '0', '0', '0', '261');
INSERT INTO `c_history` VALUES ('2', '大革命', '2', 'Uploads/2018-08-20/5b7a2e01d20ae.jpg', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-30_5b5ea3eb949fa.mp4', '1', '0', '0', '0', '202');
INSERT INTO `c_history` VALUES ('3', '十年内战', '3', 'Uploads/2018-08-20/5b7a2df21a351.jpg', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-30_5b5ea4c2a6080.mp4', '1', '0', '0', '0', '202');
INSERT INTO `c_history` VALUES ('4', '抗战', '4', 'Uploads/2018-08-20/5b7a2deb3bf90.jpg', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-30_5b5ea4ce371bc.mp4', '1', '0', '0', '0', '202');
INSERT INTO `c_history` VALUES ('5', '解放战争', '5', 'Uploads/2018-08-20/5b7a2de44da31.jpg', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-30_5b5ea4dc39fd6.mp4', '1', '0', '0', '0', '202');
INSERT INTO `c_history` VALUES ('6', '建党 三集', '1', 'Uploads/2018-08-20/5b7a2ddd3a503.jpg', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-27_5b5ae08818b79.mp4', '3', '0', '0', '0', '255');
INSERT INTO `c_history` VALUES ('7', '建党 2集', '1', 'Uploads/2018-08-20/5b7a2dd4dd13a.jpg', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-27_5b5ae012614ad.mp4', '2', '0', '0', '0', '202');
INSERT INTO `c_history` VALUES ('10', '11123', '5', 'Uploads/2018-08-20/5b7a2d589e039.jpg', 'http://pc5hsiop1.bkt.clouddn.com/2018-08-10_5b6d0d71c451b.mp4', '1', '1533873436', '0', '0', '202');

-- ----------------------------
-- Table structure for c_history_cate
-- ----------------------------
DROP TABLE IF EXISTS `c_history_cate`;
CREATE TABLE `c_history_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '名称',
  `introduce` text NOT NULL COMMENT '介绍',
  `sort` tinyint(2) unsigned DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COMMENT='党史分类';

-- ----------------------------
-- Records of c_history_cate
-- ----------------------------
INSERT INTO `c_history_cate` VALUES ('1', '建党篇', '建党篇', '5');
INSERT INTO `c_history_cate` VALUES ('2', '大革命篇', '大革命篇', '4');
INSERT INTO `c_history_cate` VALUES ('3', '十年内战篇', '十年内战篇', '3');
INSERT INTO `c_history_cate` VALUES ('4', '抗战篇', '抗战篇', '2');
INSERT INTO `c_history_cate` VALUES ('5', '解放战争篇', '&lt;p&gt;解放战争篇，，&lt;/p&gt;', '1');

-- ----------------------------
-- Table structure for c_menu
-- ----------------------------
DROP TABLE IF EXISTS `c_menu`;
CREATE TABLE `c_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(50) COLLATE utf8_bin NOT NULL COMMENT '菜单名称',
  `menu_description` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '菜单描述',
  `ctime` int(10) NOT NULL COMMENT '创建时间',
  `branch_admin_id` int(11) NOT NULL COMMENT '支部管理员表id(branch_admin)',
  `menu_lv` int(1) NOT NULL COMMENT '菜单栏等级 1 一级 2二级',
  `p_lv_id` int(11) NOT NULL DEFAULT '0' COMMENT '上一级菜单id 0代表一级菜单',
  `menu_url` varchar(255) COLLATE utf8_bin NOT NULL COMMENT '菜单绑定url',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='微信菜单表';

-- ----------------------------
-- Records of c_menu
-- ----------------------------
INSERT INTO `c_menu` VALUES ('9', '这只是一个测试', 'test_一级菜单描述', '1539658337', '1', '1', '0', 'www.baidu.com');
INSERT INTO `c_menu` VALUES ('10', 'test二级菜单', 'test二级菜单', '1539658996', '1', '2', '9', 'www.baidu.com');
INSERT INTO `c_menu` VALUES ('11', '这只是一个测试1017', '1017', '1539745133', '1', '1', '0', 'www.1017.cm');
INSERT INTO `c_menu` VALUES ('12', 'test10172', 'test10172', '1539745169', '1', '2', '11', 'www.test10172com');
INSERT INTO `c_menu` VALUES ('13', 'zh', 'zh', '1539745198', '1', '2', '9', 'www.zh.com');
INSERT INTO `c_menu` VALUES ('16', 'test1018', 'test1018', '1539836720', '1', '1', '0', 'www.baidu.com');
INSERT INTO `c_menu` VALUES ('17', '你好', '测试', '1540371649', '1', '1', '0', 'http://www.baidu.com');

-- ----------------------------
-- Table structure for c_new_cate
-- ----------------------------
DROP TABLE IF EXISTS `c_new_cate`;
CREATE TABLE `c_new_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '分类名称',
  `pid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '父id',
  `sort` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`),
  KEY `type` (`pid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='新闻分类';

-- ----------------------------
-- Records of c_new_cate
-- ----------------------------
INSERT INTO `c_new_cate` VALUES ('1', '党建要闻', '0', '0');
INSERT INTO `c_new_cate` VALUES ('2', '反腐倡廉', '0', '0');
INSERT INTO `c_new_cate` VALUES ('3', '时政热点', '1', '2');
INSERT INTO `c_new_cate` VALUES ('4', '党建动态', '1', '3');
INSERT INTO `c_new_cate` VALUES ('6', '反腐动态', '2', '1');
INSERT INTO `c_new_cate` VALUES ('7', '廉政时评', '2', '2');
INSERT INTO `c_new_cate` VALUES ('8', '警钟长鸣', '2', '3');
INSERT INTO `c_new_cate` VALUES ('9', '通报曝光', '2', '4');

-- ----------------------------
-- Table structure for c_news
-- ----------------------------
DROP TABLE IF EXISTS `c_news`;
CREATE TABLE `c_news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL DEFAULT '' COMMENT '标题',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `content` text NOT NULL COMMENT '内容',
  `cate_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '分类id',
  `praise` int(10) unsigned DEFAULT '0' COMMENT '点赞量',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发布时间',
  `dtime` int(10) unsigned DEFAULT '0' COMMENT '删除时间',
  `is_del` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除（0未删除 1已删除）',
  `recommend` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '0不推荐1推荐',
  PRIMARY KEY (`id`),
  KEY `cate_id` (`cate_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=133 DEFAULT CHARSET=utf8 COMMENT='新闻  党建要闻和反腐倡廉';

-- ----------------------------
-- Records of c_news
-- ----------------------------
INSERT INTO `c_news` VALUES ('8', '为民 务实 清廉', 'Uploads/2018-07-10/thumb_5b4410e6e9d03.jpg', '&lt;p&gt;为民 务实 清廉&lt;/p&gt;', '3', '0', '1533173456', '1534412385', '1', '0');
INSERT INTO `c_news` VALUES ('12', '反腐败', 'Uploads/2018-07-17/5b4d5c2c0d5ef.jpg', '&lt;p style=&quot;margin: 10px auto; padding: 0px; text-indent: 2em; font-stretch: normal; font-size: 18px; line-height: 36px; font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;在全面从严治党的高压态势下，任何人都不能心存侥幸。根据中央纪委国家监委网站公布的信息，今年上半年，已打落陕西省政府原党组成员、副省长冯新柱，贵州省委原常委、副省长王晓光，财政部原党组副书记、副部长张少春等10只“老虎”。&lt;/p&gt;&lt;p style=&quot;margin: 10px auto; padding: 0px; text-indent: 2em; font-stretch: normal; font-size: 18px; line-height: 36px; font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;从数据上看，自2014年以来，每年上半年的“打虎”数量均为2位数。2015年和2016年上半年均为16人，此后两年数量下降，今年上半年的人数则是最少。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1531796524', '1534391770', '1', '0');
INSERT INTO `c_news` VALUES ('13', '巩固反腐压倒性态势', 'Uploads/2018-07-17/5b4d5c3f769f7.jpg', '&lt;p style=&quot;margin: 10px auto; padding: 0px; font-stretch: normal; font-size: 18px; line-height: 36px; font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255); text-align: center;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;/Uploads/ueditor/image/20180816/1534385845171303.jpg&quot; style=&quot;border: none; height: 366px; width: 550px;&quot;/&gt;&lt;/p&gt;&lt;p style=&quot;margin: 10px auto; padding: 0px; text-indent: 2em; font-stretch: normal; font-size: 18px; line-height: 36px; font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;为深入学习贯彻习近平新时代中国特色社会主义思想，纪念改革开放40周年，8月15日，由全国中国特色社会主义理论研究会、中国浦东干部学院主办的“第五届中国特色社会主义理论与实践论坛”在中国浦东干部学院成功举行。本次论坛主题为“改革开放与新时代中国特色社会主义”。&lt;span style=&quot;text-indent: 2em;&quot;&gt;中共中央党校原副校长、中国浦东干部学院中国特色社会主义研究院院长李君如为大会作题为“不忘改革初心、牢记历史使命”主题报告。中国浦东干部学院副院长王金定，全国中国特色社会主义理论研究会副会长、中国马克思主义研究基金会原秘书长、中央党校教授薛广洲分别在开幕式上致辞。中国浦东干部学院院务委员、科研部主任、中国浦东干部学院中国特色社会主义研究院执行院长刘靖北教授主持论坛开幕式。&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;margin: 10px auto; padding: 0px; text-indent: 2em; font-stretch: normal; font-size: 18px; line-height: 36px; font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;李君如研究员在主旨演讲中指出，为人民谋幸福、为民族谋复兴、为世界谋和平与发展，是中国共产党的初心和使命，也是我们改革开放的初心和使命，今天我们要牢记我们为什么要改革，牢记改革的初心和我们肩负的使命。中国40年改革开放是有逻辑的，而逻辑起点就是从实际出发、从人民利益出发；中国的改革开放之所以能够有序推进的原因在于改革是有原则、有方向、有立场的；同时，中国改革开放能够一直保持十分清醒的态度，主要是因为有中国共产党做改革的主心骨，是因为中国共产党始终不忘改革的初心和为人民肩负的使命。&lt;/p&gt;&lt;p style=&quot;margin: 10px auto; padding: 0px; text-indent: 2em; font-stretch: normal; font-size: 18px; line-height: 36px; font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;王金定在发言中认为，“将全面深化改革进行到底”和“形成全面开放新格局”是习近平新时代中国特色社会主义思想的重要组成部分，其内容十分丰富，值得广大理论工作者认真学习、深刻领会、系统研究。他结合个人学习体会，提出有三点需要注意：一是改革开放必须加强党的领导，坚持正确的政治方向；二是改革开放必须坚持以人民为中心，切实增强人民的获得感；三是改革开放必须保持战略定力，以钉钉子精神狠抓改革任务的落实。&lt;/p&gt;&lt;p style=&quot;margin: 10px auto; padding: 0px; text-indent: 2em; font-stretch: normal; font-size: 18px; line-height: 36px; font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;薛广洲在致辞中从三个方面说明了马克思主义与中国改革开放的内在联系：第一，马克思主义发展与中国改革开放具有必然的、历史的、逻辑的联系；第二，改革开放是马克思主义不断创新发展的实践注解；第三，马克思主义的基本立场、观点、方法是中国改革开放的理论注解。&lt;/p&gt;&lt;p style=&quot;margin: 10px auto; padding: 0px; text-indent: 2em; font-stretch: normal; font-size: 18px; line-height: 36px; font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;中国浦东干部学院原常务副院长奚洁人教授，山东省政协副主席、山东省社会科学院党委书记唐洲雁研究员，新疆石河子大学党委书记、北京大学教授夏文斌，中国科学社会主义学会副会长、山东省社科联原副主席包心鉴研究员，中央党史和文献研究院研究员、原中共中央文献研究室一部主任杨明伟、上海社会科学院胡振平研究员等32位专家学者从不同角度阐述了对习近平新时代中国特色社会主义思想的研究和体会，观点深刻、气氛热烈。首都师范大学党委副书记、中国人民大学教授徐志宏，中国人民大学马克思主义学院教授、全国中国特色社会主义理论研究会副秘书长侯衍社先后主持了发言。&lt;/p&gt;&lt;p style=&quot;margin: 10px auto; padding: 0px; text-indent: 2em; font-stretch: normal; font-size: 18px; line-height: 36px; font-family: 微软雅黑; white-space: normal; background-color: rgb(255, 255, 255);&quot;&gt;本次论坛由中国浦东干部学院中国特色社会主义研究院、中国浦东干部学院上海市党建理论研究基地承办。来自中共中央党校、中国社会科学院、北京大学、中国人民大学等全国各地党校、高校和研究机构的近百位专家学者参加了会议。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '7', '0', '1531796543', '1534411764', '1', '0');
INSERT INTO `c_news` VALUES ('14', '山西省晋中市政协原副主席秦太明等4人被处分', 'Uploads/2018-08-16/5b7545c382601.jpg', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;山西省晋中市政协原副主席秦太明被开除党籍、取消退休待遇&amp;nbsp;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;据山西省纪委监委消息：日前，经山西省委批准，山西省纪委监委对晋中市政协原副主席秦太明严重违纪违法问题进行纪律审查和监察调查。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;经查，秦太明违反组织纪律，利用职务上的便利，在干部选拔任用方面，为他人谋取利益并收受财物；违反廉洁纪律，收受礼金；违反国家法律法规规定，利用职务上的便利，在干部选拔任用、企业经营等方面，为他人谋取利益并收受财物，涉嫌犯受贿罪。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;秦太明身为党员领导干部、地方党政主要领导，本应牢记党的宗旨，遵纪守法，但其理想信念丧失，宗旨意识淡漠，严重违反党的纪律，并涉嫌犯受贿罪，数额特别巨大，应予严肃处理。依据《中国共产党纪律处分条例》《中华人民共和国监察法》等有关规定，经山西省纪委监委会会议研究并报山西省委批准，决定给予秦太明开除党籍处分，取消其退休待遇；收缴其违纪所得；将其涉嫌犯罪问题及所涉款物移送人民检察院依法审查、提起公诉。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;秦太明简历&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;秦太明，男，汉族，1957年3月生，山西宁武县人，研究生学历，1974年4月参加工作，1980年3月加入中国共产党。2002年3月，任介休市委副书记；2005年5月，任介休市委副书记、市长；2009年9月，任介休市委书记；2012年12月，任晋中经济技术开发区党工委书记；2013年4月，任晋中市政协副主席；2017年4月退休。系政协第四届晋中市委员会委员，2018年7月2日被撤销政协委员资格。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;hr style=&quot;font-family: &amp;quot;Microsoft Yahei&amp;quot;, 宋体; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;山西省吕梁市委原常委、孝义市委原书记马文革被开除党籍开除公职&amp;nbsp;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;据山西省纪委监委消息：日前，经山西省委批准，山西省纪委监委对吕梁市委原常委、孝义市委原书记马文革严重违纪违法问题进行纪律审查和监察调查。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;经查，马文革违反政治纪律，订立攻守同盟，伪造证据，转移隐匿违纪违法所得，对抗组织审查；严重违反中央八项规定精神，收受礼品，接受可能影响公正执行公务的宴请和旅游活动安排，要求私营企业主提供私人会所并长期使用，违反公务接待管理规定，超标准宴请，借机大吃大喝；违反组织纪律，不如实报告个人有关事项，利用职务上的便利，在干部选拔任用方面，为他人谋取利益并收受财物；违反廉洁纪律，违规从事营利活动，利用职权为他人谋取利益，亲属收受对方财物；违反生活纪律；违反国家法律法规规定，利用职务上的便利，在干部选拔任用、企业经营方面，为他人谋取利益并收受财物，涉嫌犯受贿罪。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;马文革身为党员领导干部、地方党委主要领导，本应牢记党的宗旨，不忘初心，感恩组织的信任与重托，但其理想信念丧失，宗旨意识淡漠，目无法纪，以权谋私，严重违反党的纪律，并涉嫌犯受贿罪，数额特别巨大，应予严肃处理。依据《中国共产党纪律处分条例》《中华人民共和国监察法》等有关规定，经山西省纪委监委会会议研究并报山西省委批准，决定给予马文革开除党籍、开除公职处分；终止其党代表资格；收缴其违纪所得；将其涉嫌犯罪问题及所涉款物移送人民检察院依法审查、提起公诉。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;马文革简历&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;马文革，男，汉族，1966年10月生，山西柳林县人，大学本科学历，1987年7月参加工作，1997年6月加入中国共产党。2004年8月，任省委政策研究室党刊编辑室主任；2006年12月至2008年12月，挂职清徐县委常委、副县长；2009年3月，任省委政策研究室副主任；2015年3月，任吕梁市委常委、孝义市委书记；2018年6月被免职。系中国共产党山西省第十一届党代会代表、山西省第十三届人民代表大会代表。2018年7月18日被终止人大代表资格。&amp;nbsp; 　　　&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;hr style=&quot;font-family: &amp;quot;Microsoft Yahei&amp;quot;, 宋体; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;山西省大同市经济技术开发区党工委原书记张秉善被开除党籍、取消退休待遇&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;据山西省纪委监委消息：日前，经山西省委批准，山西省纪委监委对大同市经济技术开发区党工委原书记张秉善严重违纪违法问题进行纪律审查和监察调查。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;经查，张秉善违反组织纪律，利用职务上的便利，在干部选拔任用等方面，为他人谋取利益并收受财物；违反廉洁纪律，收受礼金礼品，为亲属经营活动谋利，长期借用私营企业主车辆供个人使用；违反工作纪律，工作失职；违反国家法律法规规定，利用职务上的便利，在干部选拔任用、企业经营等方面，为他人谋取利益并收受财物，涉嫌犯受贿罪；为谋取不正当利益，给予国家工作人员财物，涉嫌犯行贿罪。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;张秉善身为党员领导干部、地方政府主要领导，理想信念丧失，宗旨意识淡漠，目无法纪，以权谋私，严重违反党的纪律，并涉嫌犯受贿罪、行贿罪，数额特别巨大，应予严肃处理。依据《中国共产党纪律处分条例》《中华人民共和国监察法》等有关规定，经山西省纪委监委会会议研究并报山西省委批准，决定给予张秉善开除党籍处分，取消其退休待遇；收缴其违纪所得；将其涉嫌犯罪问题及所涉款物移送人民检察院依法审查、提起公诉。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;张秉善简历&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;张秉善，男，汉族，1955年8月生，山西怀仁县人，大学学历，1971年3月参加工作，1984年11月加入中国共产党。2004年3月，任阳高县委副书记、县长；2006年6月，任浑源县委副书记、县长；2011年4月，任大同市经济技术开发区党工委书记；2015年11月退休。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;hr style=&quot;font-family: &amp;quot;Microsoft Yahei&amp;quot;, 宋体; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;山西省阳泉煤业（集团）有限责任公司原党委常委、董事、总经理裴西平被开除党籍开除公职&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;据山西省纪委监委消息：日前，经山西省委批准，山西省纪委监委对阳泉煤业（集团）有限责任公司原党委常委、董事、总经理裴西平严重违纪违法问题进行纪律审查和监察调查。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;经查，裴西平违反政治纪律，授意他人向组织提供虚假情况，转移隐匿非法所得；违反中央八项规定精神，收受礼品礼金；违反组织纪律，利用职务上的便利，在干部选拔任用方面，为他人谋取利益并收受财物，不按规定如实报告个人有关事项，违规选任干部；违反廉洁纪律，为亲属经营活动谋利，违规领取下属单位奖金；违反工作纪律，对下属单位巨额资金被骗负有重要领导责任；违反国家法律法规规定，利用职务上的便利，在干部选拔任用、企业经营等方面，为他人谋取利益并收受财物，涉嫌犯受贿罪；严重不负责任，不正确履行职责，造成国有公司重大经济损失，涉嫌犯国有公司人员失职罪。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;裴西平身为党员领导干部、省属国有骨干企业主要负责人，理想信念丧失，宗旨意识淡漠，目无法纪，以权谋私，严重违反党的纪律，并涉嫌犯受贿罪、国有公司人员失职罪，数额特别巨大，应予严肃处理。依据《中国共产党纪律处分条例》《中华人民共和国监察法》等有关规定，经山西省纪委监委会会议研究并报山西省委批准，决定给予裴西平开除党籍、开除公职处分；收缴其违纪所得；将其涉嫌犯罪问题及所涉款物移送人民检察院依法审查、提起公诉。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;裴西平简历&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;裴西平，男，汉族，1962年1月生，山西临猗县人，在职研究生学历，1981年12月参加工作，1985年4月加入中国共产党。1998年2月，任阳泉煤业（集团）有限责任公司（下称阳煤集团）选煤运销处处长；2001年8月，任阳煤集团副总经理；2008年10月，任阳煤集团党委副书记、副总经理；2010年12月，任阳煤集团党委副书记、董事、副总经理；2012年4月，任阳煤集团党委副书记、董事、总经理兼太原化学工业集团有限公司董事长；2012年6月，任阳煤集团党委副书记、董事、总经理，其中，2008年7月至2009年9月和2010年12月至2013年8月兼任阳煤集团化工产业管理局局长；2013年8月，任阳煤集团党委常委、董事、总经理。2018年7月被免职。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '8', '0', '1531796568', '1534812906', '1', '0');
INSERT INTO `c_news` VALUES ('15', '中央纪委国家监委统一设立派驻机构', 'Uploads/2018-07-17/5b4da5ce2e9d6.jpg', '&lt;p&gt;人民网北京6月20日电 （记者姜洁）经党中央批准，根据党章党规和宪法、监察法有关规定，中央纪委国家监委统一设立派驻机构，名称为中央纪律检查委员会国家监察委员会派驻纪检监察组。对驻在部门新设或更名的，派驻机构名称作相应变更。派驻纪检监察组对中央纪委国家监委负责，履行党的纪律检查和国家监察两项职责。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1531815374', '1534391773', '1', '0');
INSERT INTO `c_news` VALUES ('16', '纠正“四风”持之以恒', 'Uploads/2018-07-17/5b4da5f6e5500.jpg', '&lt;p&gt;数据显示，截至今年5月31日，1月至5月全国查处违反中央八项规定精神问题数近1.9万起，处理人数2.7万余人，给予党纪政务处分人数1.9万余人。各项数据相比去年同期增长幅度均较大，分别增长了25.8%、24.9%、29%。&lt;/p&gt;&lt;p&gt;而在违反中央八项规定精神问题的类型上，违规发放津补贴或福利、违规收送礼品礼金、违规配备使用公务用车、违规公款吃喝、大办婚丧喜庆等“老问题”占比仍超过80%。可见在这些问题上，仍需下大气力纠治。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1531815414', '1534391776', '1', '0');
INSERT INTO `c_news` VALUES ('17', '内外结合 防范廉政风险', 'Uploads/2018-07-17/5b4da64d724f5.jpg', '&lt;p&gt;“廉洁从回家吃饭做起！”7月12日下午，正在值班的国网仙游县供电公司枫亭供电所所长陈平收到了妻子的一则短信，提醒他不要参加“一桌餐”“人情餐”，守住廉洁底线。&lt;/p&gt;&lt;p&gt;今年4月，仙游县供电公司聘任了陈平妻子在内的5名职工家属作为“清风使者”宣传员，目的是引导她们“看社会练眼力、看家庭聚合力、看别人提定力”，在社会、家庭中扮演好自己的角色，积言、积德、积善，比修养、比定力，营造家庭和睦氛围，让家人在外安心工作、平安回家。“以前，只知道勤俭持家做个贤内助就好了，现在我感觉自己责任更重了。”陈平的妻子说，自从有了“清风使者”这个身份后，她也会经常关注一些发人深省的腐败案件，让她更加明白家庭助廉的重要性。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1531815501', '1534391778', '1', '0');
INSERT INTO `c_news` VALUES ('18', '透视国家监委成立后境外遣返第一案', 'Uploads/2018-07-17/5b4da6809dbfd.jpg', '&lt;p&gt;7月11日，北京，雨。13时27分，一架由美国起飞的国际航班在北京首都国际机场降落。大雨洗去了一路风尘，洗不尽一身罪责。中国银行开平支行原行长许超凡外逃17年，而今戴罪而归。&lt;/p&gt;&lt;p&gt;　　“这十几年来，我心力交瘁，度日如年，惶惶不可终日。国家一直给我机会，让我回来坦白自首，我自己也是走投无路了，即使不回国自首，最终也得被遣返回来。”许超凡在接受本报记者采访时说，“我们国家现在很强大，各个国家都与中国有合作，回来只是时间问题。对于外逃人员，把握机会，回国自首，这是唯一出路，别无选择。下一步，我会配合调查人员，坦白、全面地把事情交代清楚。”&lt;/p&gt;&lt;p&gt;　　在中央反腐败协调小组国际追逃追赃工作办公室的统筹协调下，在中美两国执法等部门通力合作下，许超凡被强制遣返回国，这是国家监委成立后境外遣返第一案，标志着我国追逃追赃工作取得了阶段性重大胜利。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1531815552', '1534391785', '1', '0');
INSERT INTO `c_news` VALUES ('19', '深度关注：警钟长鸣，做好“后半篇文章”', 'Uploads/2018-07-17/5b4da6e98f96f.jpg', '&lt;p&gt;“我在何浩明身边工作11年，他的违纪违法案例对我震动太大，警示深刻。”近日，观看了警示教育片后，贵州瓮福（集团）有限责任公司党委书记何光亮发出感慨。&lt;/p&gt;&lt;p&gt;如何在保持惩治腐败高压态势的同时，更加标本兼治做好查办案件“后半篇文章”？贵州注重将案例资源转化为警示教育资源，侧重对“身边人”的警示震慑，让所在单位、受教育者形成强烈的贴近类比，增强震慑效果。全省各级纪检监察机关围绕腐败问题多发易发岗位，组织开展案例剖析，撰写典型案例，配发忏悔录，通过召开警示教育大会、利用警示教育基地等方式发挥案件审查调查的警示、震慑和教育作用。凡立案查处违纪违法案件的单位，都要“一案一整改”，查找发案共性规律，以案促改，规范权力运行。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '3', '0', '1531815657', '1534412381', '1', '0');
INSERT INTO `c_news` VALUES ('21', '“红船精神”集中表达了中国共产党的初心和使命', 'Uploads/2018-07-17/5b4da73c0c2c3.jpg', '&lt;p&gt;“红船精神”揭示了党的初心和使命的本质是为中国人民谋幸福、为中华民族谋复兴。&lt;/p&gt;&lt;p&gt;实现中华民族独立和中国人民解放是近代中国主要任务。中国共产党就是为了实现中国人民幸福和中华民族复兴而诞生的。&lt;/p&gt;&lt;p&gt;中国共产党的诞生，是近代中国历史发展的必然产物，是中国人民在救亡图存斗争中顽强求索的必然产物，是中华民族在追求复兴的道路上不断觉醒的必然产物。辛亥革命的失败宣告了资产阶级共和国方案在中国的破产，启发先进的中国人探索救国救民的新途径。曾经参加辛亥革命的林伯渠在回顾自己的思想历程时说，辛亥革命前觉得只要把帝制推翻便可以天下太平，革命以后经过多少挫折，自己追求的民主还是那样的遥远，于是慢慢地从痛苦的经验中，发现了这路不通，终于走上了共产主义的道路。这不仅是一个人的经验，在革命队伍里是不缺少这样的人的。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20180801/1533083643104877.jpg&quot; title=&quot;1533083643104877.jpg&quot; alt=&quot;timg (2).jpg&quot;/&gt;&lt;/p&gt;', '3', '0', '1533083644', '1534412363', '1', '0');
INSERT INTO `c_news` VALUES ('24', '人民论坛：“多开会”莫如“沉下去”', 'Uploads/2018-08-07/5b69167c948a4.jpg', '&lt;p&gt;眼下，改革发展稳定任务繁重，面临不少新问题新矛盾，需要及时加以解决。尤其是基层，由于常面临一些棘手问题，特别渴望得到上级的帮助和指导。可是，经常听到机关干部抱怨工作太忙，时间不够用，“想深入基层也深入不下去”。时间到底去哪儿了呢？&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;原来，相当一部分时间被各种各样的会议占据了。某贫困县的县委书记抱怨，今年上半年才刚结束，自己就参加了上级召开的几十个会议，加上县里召开的各种会议，粗略算了算，平均下来几乎一半的时间在开会。“要么在开会，要么在去开会的路上”，结果很少有时间静下心来研究、分析问题。如此一来，工作被动应付，更鲜有时间督促检查抓落实。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;现实中，类似情况时有发生：大家都被“按”在会议室中，“窝”在里面动弹不得。本来，上级要求基层干部狠抓工作落实，蹲点一线去解决矛盾和问题，但基层干部却被上级召集的各种会议缠住了，没有时间沉下去。基层干部很期盼上级多下来调研指导，出出主意、想想办法、给点政策，可上级也被自己安排的过多会议拖住了，想下去也下不去。过多过滥、内容重复、形式大于内容的会议，占用了干部大量的时间和精力，也在一定程度上影响了基层工作的有序开展。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;开会是部署工作、解决问题的一种重要方式，尤其是中央召开的重大会议，省一级召开的贯彻落实中央精神和重大决策部署的会议，必不可少。但对于市县及以下的基层单位和部门，就应把时间和精力用在狠抓落实上，而不能搞以会议来落实会议那一套。一些地方和单位开会过多过滥，源自一些人迷信会议的作用，在思想上把开会当作首选的工作方式，当作推动工作和抓落实的灵丹妙药。工作还没开始，先开个会来动员一下；工作遇阻了，就开个会推进一下；工作结束了，还要通过会议来总结表彰一下。此外，还有一个原因值得关注，即一些领导干部以开会来敷衍塞责：你说我不重视，我的会开得比谁都及时，讲得比谁都重要；你说我抓得不紧，我的会比谁开得都多，讲得比谁都全面；你说我不负责任，我在会上要求都十分明确，会议记录详实且有据可查。说到底，这是形式主义作祟，也是懒政惰政、不作为的表现，危害不容小觑。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;那么，如何精简会议、提高实效呢？关键在于上级带头、各级“一把手”率先垂范，对要求召开的会议严格控制、科学规划，做到心中有数、心里有底。我们倡导会议开得少一些、短一些、精一些，多开一些更有准备、更能解决问题的会。除此之外，不妨变多开会为沉下去，将一些会议直接安排为基层调研、现场办公。开会本来就是要解决问题的，与其隔靴搔痒地开会，还不如一竿子插到底，直接到基层一线多开一些调度会、协调会、督导会，把工作直接拿到现场去布置。通过直接传达、面对面指导，有利于推动上级精神转化为基层行动，也必能有效减少会议。&lt;/p&gt;&lt;p&gt;开会是一门学问。把该开的会议安排好、开好，不该开的、冗余的会议坚决精简，就能推动干部作风持续转变，进一步革除“表态多调门高、行动少落实差”的官僚主义、形式主义积弊。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '3', '1', '1533613692', '1534812901', '1', '0');
INSERT INTO `c_news` VALUES ('25', '红船观澜：“一团和气”要不得', 'Uploads/2018-08-07/5b6916bdcaeaf.jpg', '&lt;p&gt;前不久，贵州黔南布依族苗族自治州纪委监委通报了三都水族自治县委原常委、县委办公室原主任违纪违法的消息。2017年9月，其明知三都县委没有贯彻落实州委纠正三都县严重政治乱象的“约法三章”，不仅在汇报材料上签了“审核”，还向州委调研组吹捧时任县委书记（已于2018年1月落马）的“政绩”……&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;对问题视而不见，给同事“打掩护”，对组织不老实……现实中，像这样的干部并非个例。有的在民主生活会上将批评与自我批评变成表扬与自我表扬，或是隔靴搔痒，说些不痛不痒的话。有的在组织考察干部时，明知被考察对象不合格，或怕得罪人、或想“送瘟神”，反而为其净说好话。还有的干部在工作中遇到矛盾当“和事佬”，对一些不良现象不敢抓、不敢管，对违纪现象不批评、不制止……凡此种种，都是无原则的一团和气，最终导致一个地区或单位软弱涣散，纪律松弛。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;搞这样的“一团和气”，丢的是原则、缺的是担当。少数干部信奉“多一事不如少一事”“多栽花，少栽刺”，看似与世无争，实则明哲保身，重“乌纱”、谋晋升。然而，这种看上去“高明”的做法，并非为官“护身符”。习近平同志曾指出：“一团和气、好好先生、你好我好大家好，这不是团结，而是涣散，也是一种麻痹。”同志间搞“一团和气”，往往会掩盖问题、掩饰矛盾。比如，一旦民主生活会走过场，搞一团和气，就烧不旺党内政治生活的“大熔炉”，锻造不出“好钢”；一旦干部犯了错误没人愿意“咬耳扯袖”“猛击一掌”，犯错干部就不能及时“悬崖勒马”。实践证明，“一团和气”盛行，就难免把党性原则、纪律规矩丢在一边，党员干部一旦失了原则、没了坚守，就容易突破底线，在各种诱惑、“围猎”面前难保不败下阵来。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;陈云同志说过，要正面地坦率地辨明是非，这是应有的原则态度，不是得罪人。否则，就会助长混乱，不能解决问题。“老实的态度，是则是，非则非”，这是老一辈革命家留下的好传统，也是党员干部应有的原则和立场。对党员干部来说，心中有党、对党忠诚，从来都是具体的而非抽象的。那些逢人只挑好话说，动不动就违心夸赞，搞无原则一团和气的干部，说到底就是对党的不忠诚、不老实。如此“同乎流俗”，混淆是非善恶，绝非共产党人该有的样子。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;《中国共产党纪律处分条例》明确规定，党员领导干部对违反政治纪律和政治规矩等错误思想和行为放任不管，搞无原则一团和气，造成不良影响的，给予警告或者严重警告处分；情节严重的，给予撤销党内职务或者留党察看处分。可见，党员干部只有对党绝对忠诚，永葆赤子之心，“眼里揉不下沙子”，对党和人民的事业高度负责，既直言他过，也闻过则喜，才能确保党组织的肌体健康而有活力。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '3', '3', '1533613757', '1534812899', '1', '0');
INSERT INTO `c_news` VALUES ('26', '中科院开展“讲爱国奉献，当时代先锋”主题活动—— 不忘初心跟党走', 'Uploads/2018-08-07/5b691784541b9.jpg', '&lt;p&gt;新时代是奋楫前行的时代。实现党的十九大提出的宏伟目标，需要广大知识分子进一步砥砺家国情怀，唱响爱国奉献主旋律，以实干托举梦想，用奋斗成就事业。&lt;/p&gt;&lt;p&gt;从今天起，本报开设“弘扬爱国奋斗精神&amp;nbsp;建功立业新时代”专栏，报道广大知识分子胸怀祖国、立足岗位、艰苦奋斗、学以报国的先进事迹和崇高精神，激发更多知识分子不辱使命，做新时代的奋斗者，为实现“两个一百年”奋斗目标、实现中华民族伟大复兴的中国梦贡献才智。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;为深入开展“弘扬爱国奋斗精神、建功立业新时代”活动，中科院日前启动“讲爱国奉献，当时代先锋”主题活动，主题活动启动现场，国家最高科学技术奖获得者、中科院院士赵忠贤以“向老一辈科学家学习爱国奉献精神”为题，给现场400余名来自一线的青年科技人员上了一堂生动的党课。&lt;/p&gt;&lt;p&gt;“一个人，或一个团队花十年时间、二十年时间，给国家解决一个重要的科学难题，或解决一个核心技术问题，就能推动国家科学技术更好更快地发展。”赵忠贤讲述了老一辈党员科学家对党忠诚、以国家需要为先的事迹和精神，也讲述了自己兑现入党誓言、围绕国家需求开展科技创新的感人事迹。&lt;/p&gt;&lt;p&gt;当天，中科院首个“党员主题教育基地”在物理所揭牌。据统计，现在和曾在物理所工作、学习过的两院院士共68人，其中有41位院士是中国共产党党员。设立以“信念·党旗·科学”为主题的教育基地，旨在引导广大青年科技骨干传承老一辈科学家建设世界科技强国的坚定信念、忠于党和人民的政治品质、追求卓越和敢为人先的科学精神，牢固树立“不忘初心跟党走，科技报国为人民”的信念追求，将自己的理想追求与党、国家和人民的奋斗目标和共同理想紧密结合在一起，为建设科技强国贡献力量。&lt;/p&gt;&lt;p&gt;随后，来自中科院化学研究所、生物物理研究所、微电子研究所、植物研究所、国家空间科学中心等不同科研领域的青年党员科研骨干重温入党志愿书，回顾入党初心，牢记职责使命，再现入党时的庄严时刻。&lt;/p&gt;&lt;p&gt;“一个科研工作者，如果能够把自己的工作和国家、社会以及时代赋予的使命紧密相连，充分施展才干，为国争光、作出贡献，就是人生最大的成就，也是最大的幸福。”来自物理所的李泓研究员说。&lt;/p&gt;&lt;p&gt;为弘扬爱国奉献精神，加强先进典型选树，中科院前不久决定在全院组织开展“一所一人一事”先进事迹征集评选活动，“先进个人”评选向青年科技骨干倾斜。“通过评选活动，挖掘和选树一批新时代榜样先锋，发挥‘身边人、身边事’淡泊名利、爱国奉献、追求卓越的典型示范作用，激励全院广大科技工作者为建设创新型国家作出新的更大成绩。”中科院有关负责人表示。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/Uploads/ueditor/image/20180814/1534239537674698.jpg&quot; title=&quot;1534239537674698.jpg&quot; alt=&quot;timg (4).jpg&quot;/&gt;&lt;/p&gt;', '4', '5', '1533613956', '1534812896', '1', '0');
INSERT INTO `c_news` VALUES ('32', '中央党校习近平新时代中国特色社会主义思想研究中心', 'Uploads/2018-08-15/5b7395b0193bb.jpg', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;中央党校习近平新时代中国特色社会主义思想研究中心&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;我们党团结带领人民走过97年风雨历程，谱写了人类历史上惊天动地的壮丽史诗。在我们党领导下，中华民族实现了从东亚病夫到站起来的伟大飞跃，实现了从站起来到富起来的伟大飞跃，迎来了从富起来到强起来的伟大飞跃。今天，我们比历史上任何时候都更接近、更有信心和能力实现中华民族伟大复兴的目标。所有这一切，都是在中国共产党领导下取得的，体现了中国共产党强大的领导力。党的十九大报告指出，中国特色社会主义最本质的特征是中国共产党领导，中国特色社会主义制度的最大优势是中国共产党领导，党是最高政治领导力量。新时代，我们党要在坚持和发展中国特色社会主义的历史进程中始终成为坚强领导核心，必须进一步锻造新时代党的领导力。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;强大的领导力是中国共产党的显著标志&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;截至2017年底，中国共产党党员总数为8956.4万名，比上年增加11.7万名；党的基层组织457.2万个，比上年增加5.3万个。这样一个成立97年、执政69年的大党，带领亿万人民完成新民主主义革命和社会主义革命、建立起中华人民共和国和社会主义基本制度，带领亿万人民走过40年改革开放伟大征程、推动中国特色社会主义进入新时代，靠的是什么？靠的就是我们党强大的领导力。习近平同志指出：“中国共产党是世界上最大的政党。大就要有大的样子。”在“大的样子”中，党的强大领导力无疑是一个重要标志。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中国共产党强大的领导力，说到底是由党的指导思想决定的。中国共产党坚持以马克思主义为指导。马克思主义是科学的理论，创造性地揭示了人类社会发展规律；马克思主义是人民的理论，第一次创立了人民实现自身解放的思想体系；马克思主义是实践的理论，指引着人民改造世界的行动；马克思主义是不断发展的开放的理论，始终站在时代前沿。在人类思想史上，没有一种思想理论像马克思主义那样对人类产生了如此广泛而深刻的影响。坚持以马克思主义为指导，决定了我们党必然具有强大的领导力。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中国共产党强大的领导力，说到底是践行党的性质和根本宗旨所要求的。中国共产党是中国工人阶级的先锋队，同时是中国人民和中华民族的先锋队。作为先进的马克思主义政党，中国共产党始终以全心全意为人民服务为根本宗旨，始终着眼于实现好、维护好、发展好最广大人民的根本利益，因此能得到人民群众的衷心拥护和支持。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中国共产党的领导力是一种大“道”，而非小“术”。这个大“道”植根于党领导革命、建设、改革的伟大实践，在新时代则植根于党领导人民坚持和发展中国特色社会主义的伟大实践。深刻认识中国共产党的领导力，就要善于运用马克思主义辩证唯物主义和历史唯物主义、运用马克思主义党建理论来观察和研究领导力问题。毛泽东思想、邓小平理论、“三个代表”重要思想、科学发展观、习近平新时代中国特色社会主义思想中的党建思想，是马克思主义党的学说和党建原理同中国革命、建设、改革的实践紧密结合的产物，形成了中国化的马克思主义党建理论体系，内容十分丰富，其中蕴含的领导理念、领导价值观、领导方略和方式、领导制度和艺术，深刻体现了中国共产党的强大领导力。&lt;/p&gt;&lt;p&gt;　&lt;/p&gt;&lt;p&gt;强调锻造新时代党的领导力，是由我们党肩负的历史使命所决定的。我们党清醒地认识到，实现“两个一百年”奋斗目标和中华民族伟大复兴的中国梦，在前进道路上还面临许多矛盾、困难、风险和挑战。我们党要始终成为时代先锋、民族脊梁，始终成为马克思主义执政党，自身必须始终过硬。为此，党的十九大报告把“不断增强党的政治领导力、思想引领力、群众组织力、社会号召力，确保我们党永葆旺盛生命力和强大战斗力”这个重大课题提到全党面前。锻造新时代党的领导力，就要不忘中国共产党人的初心、牢记中国共产党人的使命。只有这样，我们才能站得更高、看得更远、想得更实，把我们党建设好、建设强，形成更加强大的领导力。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;锻造新时代党的领导力要以提升政治领导力为灵魂&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;毫无疑问，政治领导力是中国共产党领导力的核心范畴。中国共产党是有政治信仰、政治纲领、政治路线、政治纪律的政治组织，政治属性是中国共产党的根本属性。从我们党带领人民长期奋斗的历史经验看，党的政治领导力集中体现在坚持马克思主义指导思想，用一脉相承、与时俱进的马克思主义中国化的科学理论武装全党、教育人民；体现在正确制定并执行党的政治纲领和政治路线，推动党的事业朝着正确方向前进；体现在建立健全坚持和加强党的全面领导的组织体系、制度体系、工作机制，切实把党的领导落实到改革发展稳定、内政外交国防、治党治国治军等各领域各方面各环节；体现在坚持和完善党的民主集中制，维护党中央权威和集中统一领导，引导全党增强“四个意识”，自觉在思想上政治上行动上同党中央保持高度一致；等等。因此，党的政治领导力理所当然在中国共产党领导力中居于首要的、核心的位置。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;党的政治领导力不能孤立地存在和发挥作用，必须同党的思想引领力、群众组织力、社会号召力等形成一个有机整体。党的思想引领力、群众组织力、社会号召力寓于党的政治领导力之中，受党的政治原则、政治规矩的指引和约束，并为提高党的政治领导力提供实现途径和有力保障。只有自觉把政治领导力作为中国共产党领导力的灵魂和统领，才能真正形成中国共产党强大的领导力、号召力、凝聚力和战斗力。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;正因为党的政治领导力如此重要，党的十八大以来，习近平同志高度重视党的政治建设，强调“党是最高政治领导力量”，指出“讲政治，是我们党补钙壮骨、强身健体的根本保证，是我们党培养自我革命勇气、增强自我净化能力、提高排毒杀菌政治免疫力的根本途径”；提出“把党的政治建设摆在首位”，强调“党的政治建设是党的根本性建设，决定党的建设方向和效果。”在中共中央政治局第六次集体学习时，习近平同志更是强调“党的政治建设决定党的建设方向和效果，不抓党的政治建设或背离党的政治建设指引的方向，党的其他建设就难以取得预期成效。”在实践中，党的十八大以来，以习近平同志为核心的党中央展示了高超的政治领导力，形成强大的政治导向、政治定力和政治引领，以巨大的政治勇气、强烈的责任担当解决了许多长期想解决而没有解决的难题，办成了许多过去想办而没有办成的大事，推动党和国家事业发生历史性变革。我们要深入总结和研究其中的经验和规律，在新时代不断提升党的政治领导力。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;锻造新时代党的领导力要以提升领导干部的领导力为基础&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;党的干部是党的事业的骨干和中坚力量。没有领导干部领导力的提升，就没有党的整体领导力的提升。从某种意义上说，领导干部的领导力是党的全部领导力的基础。因此，提升领导干部的领导力，是提升党的领导力必须下功夫完成的重要任务。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;领导干部的领导力主要体现在两个方面，一是政治过硬，二是本领高强。所谓政治过硬，主要是指对党政治上忠诚，牢固树立“四个意识”；理想信念坚定，始终坚定“四个自信”；注重政治担当，善于从政治上观察和处理问题；做到政治自律，严格遵守党的政治纪律和政治规矩。此外，各级领导干部特别是高级干部要提升把握方向、把握大势、把握全局的能力，提升辨别政治是非、保持政治定力、驾驭政治局面、防范政治风险的能力，做到善于从政治上分析问题、解决问题。尤其需要强调的是，领导干部做到政治过硬，就要坚决维护习近平同志党中央的核心、全党的核心地位。党的十八大以来，习近平同志在领导党和国家事业发展、领导开展具有许多新的历史特点的伟大斗争中，赢得了全党全国各族人民的衷心爱戴和坚决拥护，成为党中央的核心、全党的核心。领导干部要更加自觉、更加坚定地维护习近平同志的核心地位，维护党中央权威和集中统一领导，在思想上政治上行动上同以习近平同志为核心的党中央保持高度一致。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;所谓本领高强，要求领导干部全面增强执政本领。习近平同志在党的十九大报告中提出“全面增强执政本领”，并从学习本领、政治领导本领、改革创新本领、科学发展本领、依法执政本领、群众工作本领、狠抓落实本领、驾驭风险本领八个方面提出明确要求。这些要求最终都要落实到领导干部身上。比如，领导干部要增强改革创新本领，就要保持锐意进取的精神风貌，善于结合实际创造性推动工作，善于运用互联网技术和信息化手段开展工作；领导干部要增强狠抓落实本领，就要坚持说实话、谋实事、出实招、求实效，把雷厉风行和久久为功有机结合起来，勇于攻坚克难，以钉钉子精神做实做细做好各项工作；领导干部要增强驾驭风险本领，就要健全各方面风险防控机制，善于处理各种复杂矛盾，勇于战胜前进道路上的各种艰难险阻，牢牢把握工作主动权。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;锻造新时代党的领导力要以人民群众对党的拥护、支持和追随状况为标尺&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;我们党来自人民，植根人民，服务人民。习近平同志在党的十九大报告中指出，中国共产党人的初心和使命，就是为中国人民谋幸福，为中华民族谋复兴。这个初心和使命是激励中国共产党人不断前进的根本动力。党的领导力体现为党对社会、对人民群众的影响力。没有人民群众的拥护、支持和追随，领导力必然落空。党的十八大以来，以习近平同志为核心的党中央坚持以人民为中心，把人民对美好生活的向往作为奋斗目标，把党的群众路线贯彻到治国理政的全部活动之中，以高度的政治自觉和可贵的政治勇气全面从严治党，以一系列带有突破性的重大举措开辟管党治党新境界，赢得了广大人民群众发自内心的拥护和支持，党的领导力不断彰显，党的威信日益提高。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中国共产党能够由一个最初只有50多名党员的政党，在极其艰难困苦的条件下迅速发展壮大，不仅夺取了全国政权，而且领导一个世界上人口最多的国家从一穷二白走向繁荣昌盛，就是因为得到了最广大人民的拥护和支持，获得了永无穷尽的力量源泉。一个能够得到最广大人民拥护、支持和追随的政党，必然是一个具有强大领导力的政党。锻造新时代党的领导力，要紧扣民心这个最大的政治，把赢得民心民意、汇集民智民力作为重要着力点。广大党员、干部要站稳人民立场，贯彻党的群众路线，同人民想在一起、干在一起，始终保持党同人民群众的血肉联系，着力解决人民群众最关心最直接最现实的利益问题。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;（执笔：虞云耀）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '3', '0', '1534301616', '0', '0', '1');
INSERT INTO `c_news` VALUES ('34', '习近平：改革只有进行时、没有完成时', 'Uploads/2018-08-15/5b73a3590049c.jpg', '&lt;p&gt;【学习进行时】&lt;/p&gt;&lt;p&gt;新华社近日播发万字长文《风生水起逐浪高——党的十九大以来以习近平同志为核心的党中央坚定不移推进全面深化改革述评》，披露了十九大后党中央决策、部署、推进全面深化改革全过程，其中一些重要论述、关键数据和具体细节为首次公开。新华社《学习进行时》为您梳理。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;以下就是这篇重磅报道的大量干货：&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;首次披露习近平总书记关于全面深化改革的一系列重要论述&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“始终牢记改革只有进行时、没有完成时”&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;——这是习近平总书记在十九届中央深改领导小组第一次会议上的讲话。此前，“改革只有进行时、没有完成时”的论述已广为人知，但此次加上“始终牢记”4个字，进一步彰显出党的十九大继续推进全面深化改革的坚定决心。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“要在保持经济社会大局稳定的前提下，在经济体制改革上步子再快一些。推进基础性关键领域改革取得新突破，同时抓好已出台改革举措落实。”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——这是习近平总书记在2017年底召开的中央工作会议上的讲话，对经济体制改革进一步提出明确要求。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“新时代坚持和发展中国特色社会主义，根本动力仍然是全面深化改革。要适应新时代中国特色社会主义事业发展进程，牢牢把握全面深化改革总目标，统筹推进各领域各方面改革。”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——这是习近平总书记在党的十九届一中全会上的讲话，明确提出全面深化改革是新时代坚持和发展中国特色社会主义的根本动力。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“一个山头一个山头地攻，一个难关一个难关地破”&lt;/p&gt;&lt;p&gt;　&lt;/p&gt;&lt;p&gt;　——这是习近平总书记在中央深改委第三次会议上的讲话，强调要把更多精力聚焦到改革的重点难点问题上来。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“先立后破、不立不破”“不仅要把‘块’切好，还要把‘条’理顺”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——这是习近平总书记在中央深改委第二次会议上的讲话，对深化党和国家机构改革如何做好职责配置和划转提出明确要求，为机构改革科学有序、有条不紊推进指明了方向。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“站在新的起点谋划和推进改革，关键还是要真抓实干”“一定要有求实精神，真刀真枪干”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——这是习近平总书记分别在十九届中央深改领导小组第一次、第二次会议上的讲话，彰显出党中央对于狠抓改革落实工作的高度重视和明确要求。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;首次公开全面深化改革两大关键数据：“158”和“156”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“158”：党的十九大报告共提出158项改革举措。《党的十九大报告重要改革举措实施规划（2018-2022年）》对158项改革举措进行梳理，列明牵头单位、改革起止时间、改革目标路径、成果形式等要素，形成了未来5年全面深化改革的“大施工图”。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“156”：2018年，党中央明确了全面深化改革156项任务。要把蓝图变为现实，必须按照习近平总书记明确要求的“不驰于空想、不骛于虚声”，不断推深做实。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;首次提出党的十九大后全面深化改革“四大主线”：更谋长远、更高起点、更涉险滩、更惠民生&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;更谋长远的改革大布局——表决通过《中华人民共和国宪法修正案》，深化党和国家机构改革，成立国家监察委员会……全面深化改革向着“完善和发展中国特色社会主义制度，推进国家治理体系和治理能力现代化”的总目标不断奋进。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;更高起点的改革再出发——支持海南全面深化改革开放，赋予雄安新区更大改革自主权，复制推广自贸试验区改革试点经验……吸吮着40年改革开放积蓄的丰厚养分和过去5年改革积累的宝贵经验，全面深化改革站上更高起点。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;更涉险滩的改革攻坚战——以不断深化、精准的改革举措为脱贫攻坚注入强大动力，建立企业职工基本养老保险基金中央调剂制度，开展防范和惩治统计造假、弄虚作假督察工作……新的历史关口，唯有以更大决心、更强勇气破藩篱、涉险滩，才能开辟党和国家事业全新局面。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;更惠民生的改革新指向——出台农村人居环境整治三年行动方案，规范校外培训机构发展，完善全科医生培养与使用激励机制……一系列改革举措精准出击，始终向着满足人民日益增长的美好生活需要的目标迈进。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;首次披露改革督察发现突出问题：一些地方对改革认识不清、落实不力&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;党的十九大后，中央改革办迅速组织对山东、黑龙江、四川、广东等地改革任务落实情况进行全面督察，还对青少年校园足球工作情况、围填海管控办法落实情况、法官检察官员额制改革落实情况等进行了专项督察。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;督察人员深入一线召开座谈会、查看台账，实地查看社区、企业、农村等改革推进和落实情况，既有效发掘了一批基层抓改革落实的有益经验，也如实反映了一些地方存在的改革认识不清、落实不力等问题，既严肃批评工作不足又明确提出整改建议。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '3', '0', '1534305112', '0', '0', '0');
INSERT INTO `c_news` VALUES ('35', '习近平以勇毅推进改革攻坚克难', 'Uploads/2018-08-15/5b73bbe940d05.jpg', '&lt;p&gt;“改革关头勇者胜。”中国前进的每一步，靠的正是那么一股子闯劲和勇气：政府部门“刀刃向内”，以壮士断腕的气魄把“放管服”改革向纵深推进；军队改革靶标聚焦体制重构，大刀阔斧解决“脖子”以上的问题；防范化解重大风险、精准脱贫、污染防治三大攻坚战接连打响，一鼓作气、破立并举，解决人民群众最关心的问题……&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;成就世人瞩目，任务却依然艰巨。改革开放40年，到今天剩下的都是难啃的“硬骨头”。我们唯有继续大胆探索、勇于开拓，才能在实践中不断开创新局面。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;“勇”者无惧——逢山开路、遇水架桥&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　&lt;strong&gt;　&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;改革开放只有进行时 没有完成时&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;改革开放是决定当代中国命运的关键一招，也是决定实现“两个一百年”奋斗目标、实现中华民族伟大复兴的关键一招，实践发展永无止境，解放思想永无止境，改革开放也永无止境，停顿和倒退没有出路，改革开放只有进行时、没有完成时。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2013年11月9日 习近平在中共十八届三中全会上作的关于《中共中央关于全面深化改革若干重大问题的决定》的说明&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;剩下的都是难啃的硬骨头&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;容易的、皆大欢喜的改革已经完成了，好吃的肉都吃掉了，剩下的都是难啃的硬骨头。这就要求我们胆子要大、步子要稳。胆子要大，就是改革再难也要向前推进，敢于担当，敢于啃硬骨头，敢于涉险滩。步子要稳，就是方向一定要准，行驶一定要稳，尤其是不能犯颠覆性错误。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2014年2月7日 习近平在俄罗斯索契接受俄罗斯电视台专访时答问&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;改革关头勇者胜&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;改革关头勇者胜，我们将以敢于啃硬骨头、敢于涉险滩的决心，义无反顾推进改革。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2015年9月22日 习近平在华盛顿州当地政府和美国友好团体联合欢迎宴会上的演讲&lt;/p&gt;&lt;p&gt;&amp;nbsp;　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;逢山开路遇水架桥 将改革进行到底&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;在新时代，中国人民将继续自强不息、自我革新，坚定不移全面深化改革，逢山开路，遇水架桥，敢于向顽瘴痼疾开刀，勇于突破利益固化藩篱，将改革进行到底。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2018年4月10日 习近平在博鳌亚洲论坛2018年年会开幕式上的主旨演讲&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;既要敢于突破 又要稳扎稳打&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;改革是循序渐进的工作，既要敢于突破，又要一步一个脚印、稳扎稳打向前走，确保实现改革的目标任务。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2014年2月17日 习近平在省部级主要领导干部学习贯彻十八届三中全会精神全面深化改革专题研讨班开班式上的讲话　　·&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;“勇”立潮头——不走老路、不走邪路&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;既不走封闭僵化的老路 也不走改旗易帜的邪路&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;改革开放是决定当代中国命运的关键抉择，是党和人民事业大踏步赶上时代的重要法宝。改革必须坚持正确方向，既不走封闭僵化的老路、也不走改旗易帜的邪路。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2016年7月1日 习近平在庆祝中国共产党成立95周年大会上的讲话&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;谁排斥变革 谁拒绝创新 谁就会落后于时代 谁就会被历史淘汰&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;当今世界，变革创新的潮流滚滚向前。中国的先人们早在2500多年前就认识到：“苟利于民，不必法古；苟周于事，不必循俗”。变革创新是推动人类社会向前发展的根本动力。谁排斥变革，谁拒绝创新，谁就会落后于时代，谁就会被历史淘汰。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2018年4月10日 习近平在博鳌亚洲论坛2018年年会开幕式上的主旨演讲&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;因循守旧没有出路 畏缩不前坐失良机&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;因循守旧没有出路，畏缩不前坐失良机。改革开放的过程就是思想解放的过程。没有思想大解放，就不会有改革大突破。解放思想不是脱离国情的异想天开，也不是闭门造车的主观想象，更不是毫无章法的莽撞蛮干。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2018年4月13日 习近平在庆祝海南建省办经济特区30周年大会上的讲话&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;要有强烈的问题意识&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;全面深化改革，关键要有新的谋划、新的举措。要有强烈的问题意识，以重大问题为导向，抓住重大问题、关键问题进一步研究思考，找出答案，着力推动解决我国发展面临的一系列突出矛盾和问题。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2013年9月17日 习近平主持党外人士座谈会时的讲话&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;在实践中求真知 在探索中找规律&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;当前，改革在很多领域突入了“无人区”，经济特区要坚持摸着石头过河，逢山开路，遇水架桥，在实践中求真知，在探索中找规律，不断形成新经验、深化新认识、贡献新方案。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2018年4月13日 习近平在庆祝海南建省办经济特区30周年大会上的讲话&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;“勇”往直前——总结经验、乘势而上&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;必须一代又一代人接力干下去&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;改革开放是一项长期的、艰巨的、繁重的事业，必须一代又一代人接力干下去。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2012年12月31日 习近平在十八届中共中央政治局第二次集体学习的讲话&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;总结经验 乘势而上&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;我们将总结经验、乘势而上，继续推进国家治理体系和治理能力现代化，坚定不移深化各方面改革，坚定不移扩大开放，使改革和开放相互促进、相得益彰。我坚信，中华民族伟大复兴必将在改革开放的进程中得以实现。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2017年10月25日 习近平在十九届中共中央政治局常委同中外记者见面会上的讲话&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;新征程上改革仍大有可为&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;过去几年来改革已经大有作为，新征程上改革仍大有可为。各地区各部门学习贯彻党的十九大精神，要注意把握蕴含其中的改革精神、改革部署、改革要求，接力探索，接续奋斗，坚定不移将改革推向前进。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2017年11月20日 习近平在十九届中央全面深化改革领导小组第一次会议上的讲话&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;（责任编辑：武淳）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '0', '1534311401', '0', '0', '0');
INSERT INTO `c_news` VALUES ('36', '为中国人民谋幸福，为中华民族谋复兴', 'Uploads/2018-08-15/5b73bd1a1b503.jpg', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;——从李大钊建党思想看中国共产党人的初心和使命&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;作者：汤志江 李箭飞 牛伟&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&amp;nbsp;党的十九大报告指出：“中国共产党人的初心和使命，就是为中国人民谋幸福，为中华民族谋复兴。这个初心和使命是激励中国共产党人不断前进的根本动力。”2017年10月31日，党的十九大刚刚闭幕不久，习近平总书记就带领中共中央政治局常委瞻仰上海中共一大会址和浙江嘉兴南湖红船。习近平总书记指出，建党时的每件文物都十分珍贵、每个情景都耐人寻味，我们要经常回忆、深入思索，从中解读我们党的初心。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;李大钊同志是中国最早的马克思主义者和共产主义者，是中国共产党的主要创始人之一。建立一个什么样的政党，是李大钊特别关心的问题。在他的《团体的训练与革新的事业》等文章中可以清晰地看出，为中国人民谋幸福、为中华民族谋解放，是李大钊建党思想的核心内容，也是党的早期创始人的初衷。他的建党思想对中国共产党的成立具有突出的贡献。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;为中国人民谋幸福&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;党的十八大以来，以习近平同志为核心的党中央坚持以人民为中心的发展思想，把人民群众对美好生活的向往作为奋斗目标，这与李大钊等老一辈无产阶级革命家的建党思想一脉相承。学懂弄通做实习近平新时代中国特色社会主义思想和党的十九大精神，必须牢记李大钊等党的早期创始人建党思想的初心。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;近代以来，由于西方列强的入侵和封建统治本身所固有的腐败，中华大地山河破碎、生灵涂炭，中国逐渐沦落为半殖民地半封建社会。目睹国家危亡局势和社会黑暗状况，李大钊等老一辈无产阶级革命家肩负起了为人民谋幸福、救民众于水火的历史重任。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;为民忧。民众是李大钊内心最牵挂的，民生是他最忧虑的。《大哀篇》集中体现了他“为民担忧”的思想：“吾民瘁于晚清稗政之余，复丁干戈大乱之后，满地兵燹，疮痍弥目，民生彫敝，亦云极矣”“吾侪小民，固不识政党之作用奚似，但见吾国今之所谓党者，敲吾骨吸吾髓耳。夫何言哉！夫何言哉”。李大钊严厉抨击当时执政者剥削民众甚至草菅人命，以及“民生益沦于涂炭”。他曾深入唐山煤矿了解工人生活，痛感“工人不如骡马”。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;为民愤。1913年9月11日驻昌黎车站的日军杀害5名中国路警。李大钊对此异常愤慨，奋笔疾书：“勿忘此弥天之耻辱，所与倭奴不共戴天者，有如碣石”。他尖锐地指出：“农失其田，工失其业，商失其源，父母兄弟妻子离散茕焉，不得安其居，刀兵水火，天灾乘之，人祸临之，荡析离居，转死沟洫，尸骸暴露，饿殍横野”的悲惨生活是由军阀统治造成，人民是无辜的受害者。他痛批不顾人民幸福的腐败政治，“共和自共和，幸福何有于吾民也”，“国家权力之及于民者，微乎渺矣”。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;为民想。人民大众在李大钊心中有至高无上的地位，他认为执政者应时时刻刻为人民谋求幸福，国家治乱抑或政治得失的评判标准，在于人民大众自身利益能否得到保证和满足。他痛感辛亥革命没有真正解决中国人民的问题，认为“中国者为吾四万万国民之中国”，所以当政者应该只做“福民”的事情，而不应该做“损民”的事情，只有这样，人民对国家才会有“甘心之爱”。他还特别深刻地指出农民的问题是中国当时最大的问题，农民的问题得不到解决，中国的问题就得不到彻底的解决。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;为民呼。在袁世凯窃取辛亥革命胜利果实后，李大钊发出“吾惟哀吾民而已矣”的呼唤。在《庶民的胜利》中，他认为俄国十月革命的胜利之所以值得庆祝，是因为这次革命是人民的胜利。“夫圣智之与凡民，其间知能相去不远。彼其超群轶类者，非由时会之因缘，即在众庶之信仰。”他深刻地认识到人民群众在历史发展中的巨大力量，“离于众庶则无英雄。离于众意总积则英雄无势力”，认为吃穿住用行“靡有一样不是从劳动中得来”，离了劳动人民则一无所有，中国革命必须要充分发挥人民大众的力量。“苟吾四亿同胞之心力，稍有活泼之机，创造改造之业，姑且莫论，但能顺应此环境而利用之，已足以雄视五洲威震欧亚矣”“国家前途，实利赖之矣”。由此看出，坚定地相信人民、依靠人民，为人民谋幸福，是李大钊建党思想的基础。&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&lt;br/&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;为中华民族谋复兴&lt;/strong&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;习近平总书记指出，实现中华民族伟大复兴是近代以来中华民族最伟大的梦想。中国共产党自成立之日起，李大钊等老一辈无产阶级革命家就义无反顾肩负起实现中华民族伟大复兴的历史使命，团结带领人民进行了艰苦卓绝的斗争，谱写了气吞山河的壮丽史诗。深入学习贯彻党的十九大精神，深刻领会习近平新时代中国特色社会主义思想，必须牢记李大钊建党思想赋予中国共产党人的使命。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;先天下之忧而忧。1912年中华民国建立后，李大钊发现这个国家并未解决当时中国面临的现实问题，这引起了他对共和国前途的担忧，使他重新思考中国前途和命运问题。为此他写下了《隐忧篇》，其中列举了当时中国的边患、兵忧、财困、食艰、业敝、才难六个方面的问题，“凡此种种，足以牵滞民国建设之进行”。党私、省私、匪氛“三端”，“百思恐不获免。凡百君子，其有以嘉谋嘉猷而弭于未然者乎？曷有以解我忧？”表达了他忧国忧民的革命情怀。在生命最后时刻，他“惟吾中国，自鸦片战役而后，继之以英法联军之役，太平天国之变，甲午之战，庚子之变，乃至辛亥革命之变，直到于今，中国民族尚困轭于列强不平等条约之下，而未能解脱”，体现了革命先烈壮心不已的忧国情怀。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;矢志不渝立志报国。他在《狱中自述》中写道，“钊自束发受书，即矢志努力于民族解放之事业”，并说明为何青年时期便开始深研政理：“钊感于国势之危迫，急思深研政理，求得挽救民族、振奋国群之良策”。为救中华民族于危难之中，他立志研究政治，“乃赴天津投考北洋法政学校”。他“随政治知识之日进，而再建中国之志趣亦日益腾高”，北洋法政学校毕业后“仍感学识之不足，乃承友朋之助，赴日本东京留学，入早稻田大学政治本科。留东三年，益感再造中国之不可缓”。李大钊回国后，仍继续“深研政理”，继续探索“以青春之我，创建青春之家庭，青春之国家，青春之民族”的重大理论问题和现实问题。在看到一些人对中国前途悲观失望时，他著文鼓劲助威“中国至于今日，诚已濒于绝境，但一息尚存，断不许吾人以绝望自灰”，呼吁中国人“本自由意志之理，进而努力，发展向上”，以改变中国现实境遇。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;寻求中国出路。李大钊将“改进立国之精神”“求一可爱之国家而爱之”作为自己毕生奋斗的事业，经过多年苦苦求索，他终于找到解决中国问题的关键所在——马克思主义。俄国十月革命爆发后，他运用初步掌握的马克思主义原理证明十月革命是社会主义革命的真谛，并科学阐释了我国所面临的形势，指明“中国将来只有实行社会主义才能兴盛起来”，指出只有马克思主义才能救中国。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;探索国家振兴之策。李大钊考证了世界劳工阶级的巨大作用，认识到帝国主义必然灭亡的历史命运，并把中国命运与俄国十月革命相联系进行论证，他运用马克思主义原理分析中国内忧外患的国情，得出了“试看将来的环球，必是赤旗的世界”“共产主义在世界、在中国，必然要得到光荣的胜利”的重要结论。于是他和陈独秀等老一辈无产阶级革命家，决定建立无产阶级的政党，确定了党的指导思想为马克思主义，并强调党的组织必须是一个强密精固的组织，党的任务是领导“劳工阶级，促他们联合起来，推倒资本主义”，“要想把现代的新文明，从根底输到社会里面，非把知识阶级与劳工阶级打成一气不可”，“联合一个‘民主的联合阵线’”，“抵抗国际的资本主义”，来实现社会主义，建设一个人民的国家。这是李大钊等老一辈无产阶级革命家的建党使命。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;在中国特色社会主义新时代，中国共产党人应不忘李大钊等无产阶级革命家建党的初心，牢记他们赋予中国共产党人的使命，永远把人民对美好生活的向往作为奋斗目标，不断为实现中华民族伟大复兴集聚强大精神动力，始终以习近平新时代中国特色社会主义思想为指导，增强“四个意识”，进行伟大斗争，建设伟大工程，推进伟大事业，实现伟大梦想。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;（作者：汤志江 李箭飞 牛伟，均系河北省中国特色社会主义理论体系研究中心研究员）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '0', '1534311706', '0', '0', '0');
INSERT INTO `c_news` VALUES ('37', '“老虎”“苍蝇”被查处后，还有一个会必须开', 'Uploads/2018-08-15/5b73beb3c7fab.jpg', '&lt;p&gt;领导干部落马了，案子查完就尘埃落定了吗？并非如此，除了案发地区、部门和单位领导班子都要召开专题民主生活会外，还有一个大会必须及时开。&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&lt;br/&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;腐败案件查处后，立即“上发条”、敲警钟&lt;/strong&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;查处了违纪违法问题，别着急翻篇，还有很重要的“后半篇文章”要做：召开警示教育大会。今年中央纪委二次全会的工作报告明确要求：“凡查结的党员领导干部违纪违法案件，都要在本地区本部门本单位开展警示教育，用好反面教材。”一个地方、部门出现党员干部严重违纪违法案件，暴露出该地该部门政治生态、党风廉政建设等方面的各种问题，必须立即给其他党员干部“上上发条”、敲敲警钟。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;执纪审查到哪，警示教育就应该跟进到哪。今年上半年，东风公司发生10起虚开发票等财务领域违纪案例，给公司造成严重损失，公司随后召开警示教育大会，给500名党委班子成员、公司高管、财务部长上纪法课。辽宁铁法能源有限公司副总经理包宏被宣布“双开”的当天，公司党委就召开领导班子专题警示会，公司违规经营投资责任追究制度《试行》和公司党委2018年巡察工作方案也在会上宣布。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;警示教育大会“规格”很高，地区、部门党组织的一把手，比如省委书记、市委书记等，一般都要亲自出席给全体党员干部“上课”，深刻剖析问题根源、提出具体要求，这也是党委落实全面从严治党主体责任的一个体现。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;“关键少数”成警示教育重点对象&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;什么人经常被叫去接受警示教育？&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;上到省委领导班子，省直各单位及群团机关主要负责同志，下到各市县和单位部门一把手——在各地、各部门，领导班子“关键少数”是警示教育的重点对象。贵州明确每年针对“关键少数”承办一次由党委书记出席并讲话的警示教育大会；天津滨海区的警示教育大会要求区委、区政府、各部门、企业领导班子成员“一个都不能少”，因工作未能参会的领导干部，一律在所在单位及时补课，实现“关键少数”警示教育全覆盖。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;抓上面的同时，也要向下延伸。安徽省的警示教育从省级干部抓起，延伸拓展到全省党员干部，重点是县处级以上党员领导干部。而海南等地把警钟敲到了基层，在海口等多个市县开展村“两委”干部违纪违法案件警示教育试点工作，增强基层党员干部的纪法意识。截至今年5月，海南已有3000多名农村干部群众参加警示教育会议。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;用反面案例的刷子，清洗政治生态的污垢&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;警示教育，就只是关注这些个案？&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;扫描近期各地警示教育的主题：贵州——“巩固发展风清气正政治生态”，兰州——“清除虞海燕恶劣影响，修复和净化政治生态”，江西——“深刻汲取李贻煌等腐败案件教训，保持政治定力”，天津——“以案为鉴，推动政治生态实现海晏河清”……&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;从个案出发，最终落脚到净化政治生态，成为近期各地各部门警示教育的规范动作。不管是哪一种违纪违法案件，折射出的政治文化、政治生态当中的弊病，往往具有普遍性。警示教育，不能光看案件“剧情”，更重要的是剖析腐败内因，深刻反思、汲取教训，全面查摆班子和领导干部个人存在的突出问题，纠正政治偏差，清除政治生态中的污垢。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;一些地方的警示教育更加坚持问题导向，特别针对群众身边的腐败问题进行反思和整改。哈尔滨交通执法塌方式腐败问题曝出之后，哈尔滨交警系统立即召开警示教育大会，汲取教训，认真整改，着力重塑全市公安交警系统政治生态，维护好哈尔滨良好交通秩序。海南的“村级”警示教育大会，则将农村干部群众最关心的脱贫攻坚、危房改造、“三资”管理等领域的村干部违纪违法问题摆上台面，打通全面从严治党最后一公里。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;警示教育最终要入脑走心&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;警示教育大会，都干些什么？&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;甘肃，省纪委书记、监委主任在警示教育大会上当场宣布，武威市委原书记火荣贵涉嫌严重违纪违法，接受纪律审查和监察调查。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;十堰，百余名领导干部携配偶走进市看守所监区，透过小小窗口，看见羁押人员整齐划一坐在通铺边背诵监规，头顶布满了纵横交错的铁丝网。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;运城，纪检监察干部观看庭审现场忏悔片，“零距离”感受昔日同事因违纪违法锒铛入狱，愧对组织和亲人的痛悔心情……&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;警示教育没有定式，为了增强教育性和震慑力，各地也是“很拼”——通报典型案例、观看警示教育片、听党委书记和纪委书记“讲课”已是常规动作，而参观监狱、旁听庭审、带全家一起接受警示教育等方式更是不断创新。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;警示教育是严肃的政治，目的是剖析极少数、警示大多数，绷紧党员干部的纪法弦，拧紧理想信念的总开关。“片中人曾经也是看片人，大家看片子时仔细想一想，他们为什么成了片中人？怎样才能不做片中人？”天津在警示教育大会上这样提醒党员干部。从别人的覆辙中汲取教训，对照身边人身边事，查找自身差距，入脑、走心、深入灵魂，才是接受警示教育的“正确姿势”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;（文字：张琰）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '7', '0', '1534312115', '0', '0', '0');
INSERT INTO `c_news` VALUES ('38', '在党费上搞“猫腻”，后果很严重！', 'Uploads/2018-08-15/5b73c6cfd362a.jpg', '&lt;p&gt;1935年10月，中央红军到达陕北后，警卫员见周恩来忙于工作，便替他交了五分钱党费。周恩来知道后告诫他说，党费不能让别人代交，军政大事重要，交党费也很重要，这是每个党员的义务，并把五分钱交给警卫员。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;可见，党费虽少，却大有文章。有舆论指出，交党费的弦绷得有多紧，标志着党性修养和理想信念的弦绷得有多紧。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;今天，就和大家聊一聊关于党费这件事儿~&lt;/p&gt;&lt;section data-tools=&quot;135编辑器&quot; data-id=&quot;45865&quot;&gt;&lt;section&gt;&lt;section&gt;&lt;section data-width=&quot;100%&quot;&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;一、为啥入了党，就要交党费？&lt;/p&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;p&gt;&lt;br style=&quot;margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;&quot;/&gt;&lt;/p&gt;&lt;p&gt;按照党章规定，党员向党组织交纳党费，是党员必须具备的起码条件。为党费主要的用途，是党组织提供活动经费，比如培训、教育或表彰党员，补助生活困难的党员，补助遭受严重自然灾害的党员和修缮因灾受损的基层党员教育设施等等。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;但是，党费还有一个非常重要的意义——强化党员的党章意识和党的观念。无论你是在国家机关、事业单位或国企工作，还是在民企外企工作，无论你是个体经营户、农民还是学生，只要入了党，就要从批准为预备党员的当月开始交纳党费。定期交党费，就是不断提醒你，你的身份是党员，要为组织尽义务，要承担党员的责任。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img class=&quot;&quot; data-copyright=&quot;0&quot; data-ratio=&quot;0.5652173913043478&quot; data-s=&quot;300,640&quot; data-src=&quot;https://mmbiz.qpic.cn/mmbiz_jpg/rr0zqsGVWJcnXVicDQJdCYxprz8MNmXib8f7jAoBPJDfUrukZIcVrIIH79yEd3vEDaG8GNKNzGj1ldYVCzoyHKQQ/640&quot; data-type=&quot;jpeg&quot; data-w=&quot;690&quot; _width=&quot;677px&quot; src=&quot;https://mmbiz.qpic.cn/mmbiz_jpg/rr0zqsGVWJcnXVicDQJdCYxprz8MNmXib8f7jAoBPJDfUrukZIcVrIIH79yEd3vEDaG8GNKNzGj1ldYVCzoyHKQQ/640?tp=webp&amp;wxfrom=5&amp;wx_lazy=1&quot; data-fail=&quot;0&quot; style=&quot;margin: 0px; padding: 0px; height: auto !important; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; width: 677px !important; visibility: visible !important;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;section data-tools=&quot;135编辑器&quot; data-id=&quot;45865&quot;&gt;&lt;section&gt;&lt;section&gt;&lt;section data-width=&quot;100%&quot;&gt;&lt;section&gt;&lt;br/&gt;&lt;/section&gt;&lt;section&gt;&lt;br/&gt;&lt;/section&gt;&lt;section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;section&gt;二、党费怎么交？&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;&quot;/&gt;&lt;/p&gt;&lt;p&gt;党员应该主动按月缴纳党费。遇到特殊情况，经党支部同意，可以每季度缴纳一次党费，也可委托亲属或者其他党员代为缴纳或者补交党费。补交党费的时间一般不得超过6个月。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;一般情况下，不允许提前交纳或一次性集中补交党费。如有特殊情况，党员暂时离开原单位外出，按时交纳党费有困难，经支部同意，提前交或后补交是可以的，补交时间不得超过3个月。特别需要指出的是，不允许为图省事提前交纳若干月的党费，基层党组织要严格把握规定，对违反规定的要严肃批评。&lt;/p&gt;&lt;p&gt;对不按照规定交纳党费的党员，所在党组织应及时对其进行批评教育，限期改正。对无正当理由，连续6个月不交纳党费的党员，按自行脱党处理。&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;section data-tools=&quot;135编辑器&quot; data-id=&quot;45865&quot;&gt;&lt;section&gt;&lt;section&gt;&lt;section data-width=&quot;100%&quot;&gt;&lt;section&gt;&amp;nbsp;三、党费到底该如何用？&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;《中共中央组织部办公厅关于进一步规范党费工作的通知》和《中共中央组织部关于党费收缴工作专项检查中清理收缴的党费使用有关问题的通知》明确，上级党组织要向党支部拨付一定数额的活动经费，支持党支部订阅党报党刊、开展支部主题党日、创先争优等活动。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;今年以来，一些地方和单位来电，就党支部如何使用上级党组织从党费中划拨的活动经费（包括补交党费）问题进行政策咨询。下面是中组部答复意见的主要内容：&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;section data-tools=&quot;135编辑器&quot; data-id=&quot;88173&quot;&gt;&lt;section&gt;&lt;section&gt;&lt;section&gt;&lt;section&gt;&lt;section data-original-title=&quot;&quot; title=&quot;&quot; data-num=&quot;3&quot; aria-describedby=&quot;tooltip239230&quot;&gt;1 、要遵循党费使用五项基本用途&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;section&gt;&lt;p&gt;党支部使用上级党组织划拨的活动经费，要遵循党费使用五项基本用途，按照《中共中央、组织部办公厅关于进一步规范党费工作的通知》规定的使用项目规范使用。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;section data-tools=&quot;135编辑器&quot; data-id=&quot;88173&quot;&gt;&lt;section&gt;&lt;section&gt;&lt;section&gt;&lt;section&gt;&lt;section data-original-title=&quot;&quot; title=&quot;&quot; data-num=&quot;4&quot; aria-describedby=&quot;tooltip707827&quot;&gt;2、活动经费须经集体讨论决定&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;section&gt;&lt;p&gt;党支部使用上级党组织划拨的活动经费须经集体讨论决定，不能个人或者少数人说了算。开展主题党日、创先争优等活动，一般应召开支委会研究制定活动方案，报上级党组织同意后组织实施。同时，要定期向本支部党员公布上级党组织划拨的活动经费使用管理情况。&lt;/p&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;section data-tools=&quot;135编辑器&quot; data-id=&quot;88173&quot;&gt;&lt;section&gt;&lt;section&gt;&lt;section&gt;&lt;section&gt;&lt;section data-original-title=&quot;&quot; title=&quot;&quot; data-num=&quot;5&quot;&gt;3 、应本着勤俭节约的原则&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;section&gt;&lt;p&gt;党支部活动经费的开支，应本着勤俭节约的原则，执行相关的财务制度。报销费用时，原则上需提供规范的财务票据和凭证。特殊情况下，确实无法取得财务票据和凭证的，如开展支部活动购买工作简餐、矿泉水，看望慰问生病住院党员购买果篮、鲜花，悼念去世党员购买花圈、挽联等不能取得财务票据和凭证的，可由经办人员出具情况说明，党支部书记对支出的真实性、合规性审核把关并签字，按程序审批后，将情况说明代作原始凭证。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;section data-tools=&quot;135编辑器&quot; data-id=&quot;88173&quot;&gt;&lt;section&gt;&lt;section&gt;&lt;section&gt;&lt;section&gt;&lt;section data-original-title=&quot;&quot; title=&quot;&quot; data-num=&quot;6&quot; aria-describedby=&quot;tooltip692341&quot;&gt;4 、要严格遵循党费使用和财务管理相关规定&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;section&gt;&lt;p&gt;党支部使用党费新建（修缮）基层党组织活动场所、发展壮大村级集体经济等，要严格遵循党费使用和财务管理相关规定，不得予以变通。&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;&quot;/&gt;&lt;/p&gt;&lt;section data-tools=&quot;135编辑器&quot; data-id=&quot;91030&quot;&gt;&lt;section data-tools=&quot;135编辑器&quot; data-id=&quot;45865&quot;&gt;&lt;section&gt;&lt;section&gt;&lt;section data-width=&quot;100%&quot;&gt;&lt;section&gt;五、党费里玩猫腻，后果何如？&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;p&gt;&lt;br style=&quot;margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;&quot;/&gt;&lt;/p&gt;&lt;p&gt;党费收缴、使用和管理是严格的。但在有些地方和部门，依然有人在党费上“玩猫腻”，后果当然很严重。&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;&quot;/&gt;&lt;/p&gt;&lt;section data-tools=&quot;135编辑器&quot; data-id=&quot;92162&quot;&gt;&lt;section data-role=&quot;paragraph&quot;&gt;&lt;section&gt;&lt;section data-width=&quot;100%&quot;&gt;&lt;section&gt;&lt;section&gt;&lt;/section&gt;&lt;section&gt;&lt;p data-brushtype=&quot;text&quot;&gt;挪用党费&lt;/p&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;福建省漳州市委市直机关工作委员会原纪检员张赞高在2004年1月至12月间，利用保管党费的职务便利，采用虚开现金支票的方法，先后32次挪用公款，共计人民币135万多元，用于六合彩赌博、购买体育彩票和偿还个人债务，其中直接用于六合彩赌博达76万余元。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img class=&quot;&quot; data-copyright=&quot;0&quot; data-ratio=&quot;0.816&quot; data-s=&quot;300,640&quot; data-src=&quot;https://mmbiz.qpic.cn/mmbiz_jpg/rr0zqsGVWJcnXVicDQJdCYxprz8MNmXib89MC5VjTUFg3RvP45ia2zFvvLUH1icCybxH9BW6mawLue6ywdHGxS2CCg/640&quot; data-type=&quot;jpeg&quot; data-w=&quot;500&quot; _width=&quot;500px&quot; src=&quot;https://mmbiz.qpic.cn/mmbiz_jpg/rr0zqsGVWJcnXVicDQJdCYxprz8MNmXib89MC5VjTUFg3RvP45ia2zFvvLUH1icCybxH9BW6mawLue6ywdHGxS2CCg/640?tp=webp&amp;wxfrom=5&amp;wx_lazy=1&quot; data-fail=&quot;0&quot; style=&quot;margin: 0px; padding: 0px; height: auto !important; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; width: 500px !important; visibility: visible !important;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;section data-tools=&quot;135编辑器&quot; data-id=&quot;92162&quot;&gt;&lt;section data-role=&quot;paragraph&quot;&gt;&lt;section&gt;&lt;section data-width=&quot;100%&quot;&gt;&lt;section&gt;&lt;section&gt;&lt;/section&gt;&lt;section&gt;&lt;p data-brushtype=&quot;text&quot;&gt;贪污党费&lt;/p&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;长沙市机关事务管理局人事教育处原处长唐伟红贪污党费的问题。经查，2015年3月至2016年5月，唐伟红在临时负责市机关事务管理局机关党委专职副书记工作期间，采取虚报冒领、重复报账、收取党费不入账等方式套取党费和公用经费共计12816元（其中党费10816元、公用经费2000元）用于个人开支。2017年12月，唐伟红受到留党察看一年、行政撤职处分。&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;&quot;/&gt;&lt;/p&gt;&lt;section data-tools=&quot;135编辑器&quot; data-id=&quot;92162&quot;&gt;&lt;section data-role=&quot;paragraph&quot;&gt;&lt;section&gt;&lt;section data-width=&quot;100%&quot;&gt;&lt;section&gt;&lt;section&gt;&lt;/section&gt;&lt;section&gt;&lt;p data-brushtype=&quot;text&quot;&gt;支出党费用于吃喝玩乐&lt;/p&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;据国家知识产权局通报，2014年9月，机械发明审查部动力机械二室主任吕胜春组织动力机械二室人员以党日活动名义，前往KTV唱歌娱乐，之后又到餐馆聚餐。唱歌聚餐费用中的一部分从二室党支部的党费中支出。吕胜春受到党内警告处分，该室党支部书记被诫勉谈话，参加活动人员受到批评教育，违规使用的党费由机械发明审查部党总支向有关人员追缴。&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;&quot;/&gt;&lt;/p&gt;&lt;section data-tools=&quot;135编辑器&quot; data-id=&quot;92162&quot;&gt;&lt;section data-role=&quot;paragraph&quot;&gt;&lt;section&gt;&lt;section data-width=&quot;100%&quot;&gt;&lt;section&gt;&lt;section&gt;&lt;/section&gt;&lt;section&gt;&lt;p data-brushtype=&quot;text&quot;&gt;公款交党费&lt;/p&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;2014年12月，明光市直机关工委在全市开展应缴党费核定工作，要求未足额上交党费的党员限期缴齐。明光市司法局党总支有9名党员欠交2013年、2014年党费共计1513元。时任明光市司法局党总支书记、市基层法律工作者协会会长李爱国在得知补交党费的通知后，以这9名党员有的不在本地、有的年事已高行动不便、在限期内难以收齐为由，安排明光市司法局政工股长丁某先行垫付，后丁某持收据由李爱国签批同意，在明光市基层法律工作者协会报销所垫付的党费。事后李爱国未按规定向9人催要垫付的党费。明光市委在开展巡察的过程中发现该问题，明光市纪委经调查确认，同时结合李爱国违反廉洁纪律等行为，作出上述处分决定。&lt;/p&gt;&lt;/section&gt;&lt;/section&gt;&lt;/section&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '8', '0', '1534314191', '0', '0', '0');
INSERT INTO `c_news` VALUES ('39', '新时代提升领导干部法治素养的路径', 'Uploads/2018-08-15/5b73cf6ba1767.jpg', '&lt;p&gt;&lt;strong&gt;【红船听涛】&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;全面依法治国是我国国家治理的一场深刻革命。领导干部是全面依法治国的组织者、领导者，也是全面依法治国历史进程的实践者。他们的法治观念、法治思维、法治方式对全民族法治素养的提高起着导向和引领作用，领导干部明法律、讲法律、信法律、按法律办事的法治能力，对法治生态具有形塑作用。因此，提升领导干部法治素养至关重要。&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&lt;br/&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;尊崇宪法法律是新时代提升干部法治素养的基本要求&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;习近平总书记强调，要抓好领导干部这个“关键少数”，各级特别是领导干部要带头尊法学法守法用法，做到心有所畏、言有所戒、行有所止，按规则正确用权、谨慎用权、干净用权。尊法不是对宪法法律一般意义上的遵守、维护，而是对党的十八大以来以宪法为核心的中国特色社会主义法律体系的敬畏。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;我国宪法法律体现了党的领导、人民当家作主和依法治国的有机统一。党的十九大指出，依法治国是党领导人民治理国家的基本方式。坚持党的领导、厉行法治，人民当家作主才能充分实现。习近平总书记指出，法是党的主张和人民意愿的统一体现，党领导人民制定宪法法律，党领导人民实施宪法法律，党自身必须在宪法法律范围内活动，这就是党的领导力量的体现。领导干部必须树立崇尚宪法法律、信仰宪法法律的牢固观念，形成法律至上、权力制约、公平正义、权利保障和正当程序的法治思维，依法行使权力和履行职责，杜绝以言代法、以权压法、逐利违法、徇私枉法。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;遵守党规党纪是新时代提升干部法治素养的特殊要求&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;《中共中央关于全面推进依法治国若干重大问题的决定》指出，党规党纪严于国家法律，党的各级组织和广大党员干部不仅要模范遵守国家法律，而且要按照党规党纪以更高标准严格要求自己，坚定理想信念，坚决同违法乱纪行为作斗争。党的十九大报告将“依法治国和依规治党有机统一”提升到坚持全面依法治国的战略高度。这是我们党领导全国人民进行依法治国伟大实践的经验总结，也是新时代打赢依法治国这场国家治理深刻“革命战争”的关键。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;在革命战争年代，我们靠严明的党规党纪，维护党的集中统一，保持党的凝聚力、战斗力。在和平与发展岁月，我们也要把遵守党规党纪和尊崇宪法法律结合起来。党员干部能否坚守党性，坚守人民利益高于天，党规党纪是基本保障。遵守党规党纪也能够塑造党员干部良好形象。只有遵守党规党纪，党员干部运用法治思维和法治方式，深化改革、推动发展、化解矛盾、维护国家长治久安才有保障。&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&lt;br/&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;创新培训考核机制是提升干部法治素养的重要举措&lt;/strong&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;培养干部的法治素养，不但要坚持干部模范守法这个关键，还要带头学法、懂法、知法、用法。为此，加强法律知识培训和考核显得极为重要。法律知识的积累不等于形成了较高的法治素养，但是，较高的法治素养必须有丰富的知识做基础。习近平总书记强调，我们的党政领导干部都应该成为复合型干部，不管在什么岗位工作都要具备基本的知识体系，法律就是其中基本组成部分，对各方面基础性知识，大家都得掌握、不可偏废，在此基础上做到术业有专攻。这一重要论述深刻阐明了法治教育在干部培训体系中的特殊地位，突出强调了领导干部提高法治素养的重要性、紧迫性。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;党校、团校及各类干部教育培训机构必须加强法律知识培训内容的科学设置和知识体系的合理性建设，改进教学方法，既积极回应不同职能部门对实用性法律知识的迫切需求，又注重提升领导干部的法学基本理论素养，不能简单以实用型的法律知识取代基本理论的传承。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;干部法治素养的提升需要加大对干部的法治考核力度。习近平总书记提出，各级领导机关和领导干部要提高运用法治思维和法治方式的能力，努力以法治凝聚改革共识、规范发展行为、促进矛盾化解、保障社会和谐。从制度上完善干部的考核，是在考验干部能否过好法治素养关。要在领导干部具体工作实践中进行动态考察法治能力运用情况，全方位、常态化考核干部运用法治思维和法治能力解决所遇到的实际问题的水平。定期举行干部法治理论知识考试，把能不能遵守法律、依法办事作为考察干部的重要内容。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;（作者：张振芝，系东北大学中国特色社会主义理论体系研究中心副教授；周美艳，系辽宁公安司法管理干部学院教授 本文系2018年辽宁省社科基金重点资助项目“新时代提升领导干部法治素养的创新研究”阶段性成果）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '0', '1534316395', '0', '0', '0');
INSERT INTO `c_news` VALUES ('40', '党的力量来自组织（思想纵横）', 'Uploads/2018-08-15/5b73d294d5ce2.jpg', '&lt;p&gt;中国共产党是一个拥有强大力量的马克思主义政党。97年来，我们党带领中国人民创造了站起来、富起来的革命和建设奇迹，正向着强起来的目标砥砺奋进。那么，党的强大力量来自何处？应当说，来自高质量的党组织。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;组织是按照一定宗旨和系统建立起来的集体。人类社会发展进程表明：只有组织起来，人类才能生存与发展。对于中国共产党这样一个拥有8900多万名党员、450多万个基层党组织的执政党来说，全面加强党的领导，将党的各项工作落细落实，一刻也离不开坚强有力的党组织。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;党组织坚强有力，先进的思想、正确的路线才能落到实处、发挥实效。长期以来，我们党高度重视组织建设，党进行任何一项重要工作，总是先抓组织落实。比如，革命战争年代，为建设强大的人民军队，首先要将支部建在连上，发挥党支部的领导核心作用。又如，开辟新的革命根据地，首先要派一批党的骨干，成立党组织，放手发动群众。我们党执政后更是这样，党的一切路线方针政策都离不开党组织来贯彻执行。依靠强有力的党组织，我们在一穷二白的基础上建立起一个独立的比较完整的工业体系和国民经济体系，锻造“两弹一星”等国之重器，领导人民实行改革开放，快速推进社会主义现代化建设。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;党组织坚强有力，首先强在“硬件”配置上。人才是事业成败的关键。自成立伊始，我们党就广开进贤之路，广泛吸纳众多高质量人才。1938年毛泽东同志就指出，“政治路线确定之后，干部就是决定的因素”。长期以来，我们党按照党管干部的原则培养选拔干部，坚持德才兼备、以德为先，坚持五湖四海、任人唯贤，坚持事业为上、公道正派，反对任人唯亲，努力实现干部队伍的革命化、年轻化、知识化、专业化，锻炼出一大批信仰坚定、党和人民需要的好干部。他们在各自岗位上全心全意为人民服务，不惜牺牲个人的一切，为党和人民事业前赴后继、奋斗终身。由这样的党员、干部组成的党组织，其创造力凝聚力战斗力决非其他政党可比。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;党组织坚强有力，归根结底要靠强有力的“软件”。一路走来，党领导人民干革命、抓建设、搞改革，攻克一个又一个“腊子口”“娄山关”，关键在于坚持科学的指导思想，坚持党的宗旨，坚持民主集中制，严肃党的纪律，优化党的作风，坚持党中央权威和集中统一领导，确保党中央始终是全党的大脑和中枢，有定于一尊、一锤定音的权威。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中国特色社会主义进入新时代，加强党的全面领导、做好党的全部工作，依然要靠党的坚强组织体系来实现。这需要党的地方组织确保党中央决策部署贯彻落实，有令即行、有禁即止；也需要每一名党员特别是领导干部不断强化党的意识和组织观念，自觉做到思想上认同组织、政治上依靠组织、工作上服从组织、感情上信赖组织。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;更应看到，建设高质量、强有力的党组织是一项长期性的系统工程，不会一劳永逸、一蹴而就。只有每个基层党组织和每名党员都树立强烈的宗旨意识和责任意识，都能发挥战斗堡垒作用和先锋模范作用，时刻警惕和预防弱化党组织的现象发生，我们党才能始终具有强大力量，党的执政基础才会坚如磐石。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '0', '1534317204', '0', '0', '0');
INSERT INTO `c_news` VALUES ('41', '四川德阳罗江农村和金融机构合作——基层党建结对子 群众鼓了钱袋子', 'Uploads/2018-08-15/5b73d30c71908.jpg', '&lt;p&gt;“从申请到拿钱，不用出村就能全部办完，而且利息还很低。”四川德阳罗江区鄢家镇大垭村贫困户魏丁久高兴地说，今年准备养蜂，获得授信后，他在村里的代办点向农商银行提交了贷款申请。很快，3万元资金就批了下来。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;最近，德阳市罗江区“双基共建”实施的金融服务交出了一份暖心的“成绩单”：授信4.2万户农户共16.8亿元，其中授信贫困户1489户共2548万元；培养131名村民担任金融代办点办事员、发放务工补助32.8万元；群众少跑路累计65万公里……&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“双基共建”是指村党组织和基层农商银行党支部深入融合结对共建，村党组织协助开展评级授信，农商银行提供优质低息的金融服务。“通过开展‘双基共建’，党建与金融服务深度融合。”罗江区组织部长王志华说。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;如今，罗江全区127个“双基共建”合作村的便民服务室焕然一新，服务室新增村级信贷服务工作室，贷款种类、对象、条件和程序以及信贷服务人员姓名、照片、联系方式、工作职责等内容，详细展示在信贷服务工作墙上。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“昨天收到一条短信，说我的银行卡在外地有消费，让我登录网上银行查询，也不知道是不是真的。”在慧觉镇黄荆村党建金融代办点，村民范超向罗江农商行驻村代办员咨询后，庆幸地说，幸好在村里就能识别出假信息，才避免了上当。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;新盛镇党委书记吴明波说，一位村民曾因乱倒垃圾，违反了村环境治理规章，授信额度从3万元降到了2万元。前几年，每到收割季节，党员干部总得天天蹲守和宣传秸秆禁烧，“双基共建”以来，为了维护好自己的信用，村民们自觉性提高了，遵守村规民约已成了大家的习惯。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“没想到在自己家里居然当上了银行代办员，还能挣补助。”青年村民李晓青满脸愉悦，她家是新盛镇金铃村精准扶贫建档立卡贫困户，也是罗江区“双基共建”第一家便民金融服务EPOS代理点。这个简单的代办点让大家足不出村就可以享受全天候的金融服务，而李晓青则以每单1元提成的形式挣取务工补助，既不耽误农活，每月还能获得500元左右的收入。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;对金山镇安家村惠兴黄花种植专合社理事长倪双权来说，“双基共建”带来的金融服务恰似一场及时雨。去年夏天，专合社正为化肥、人工等所需的资金发愁，刚好赶上安家村党支部与罗江农商银行金山支行党支部“双基共建”。金山支行在没有要求任何抵押、担保的情况下，向专合社发放了25万元低利率“信用”贷款，帮专合社迈过难关。当年专合社产出30万斤黄花，收入达75万元左右，入股的37户贫困户每户分红2000余元，12户贫困户在短短一年内就摘掉了“贫困帽”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“作为新型农村经营主体，农业专合社引领农户抱团发展，带领群众发展产业致富增收。”罗江农商银行相关负责人说，以新盛镇金铃村垚垚珍禽养殖专合社为例，专合社带领10余户村民发展野鸡、土黑猪、孔雀等生态养殖，农商行一次性给予89万元的授信额度，去年收入达200余万元，带领村民走上了脱贫致富的路子。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;据了解，“双基共建”开展以来，罗江25家农业专合社均获得了20万到200万元不等的授信额度。去年，区里出台了推进农民专业合作经济组织发展相关文件制度，全力支持“专业合作社+农户”的方式发展现代种养业，带动建档立卡贫困户、农户脱贫致富，为乡村振兴注入了强大动力。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;《 人民日报 》（ 2018年08月15日 11 版）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '0', '1534317324', '0', '0', '0');
INSERT INTO `c_news` VALUES ('42', '习近平：要大力倡导爱国奉献精神 使之成为新时代奋斗者的价值追求', 'Uploads/2018-08-15/5b73e77e8f275.jpg', '&lt;p&gt;中共中央总书记、国家主席、中央军委主席习近平近日对王继才同志先进事迹作出重要指示强调，王继才同志守岛卫国32年，用无怨无悔的坚守和付出，在平凡的岗位上书写了不平凡的人生华章。我们要大力倡导这种爱国奉献精神，使之成为新时代奋斗者的价值追求。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;习近平指出，对王继才同志的家人，有关方面要关心慰问。对像王继才同志那样长期在艰苦岗位甘于奉献的同志，各级组织要积极主动帮助他们解决实际困难，在思想、工作和生活上给予更多关心爱护。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;王继才生前是江苏省灌云县开山岛民兵哨所所长。开山岛位于我国黄海前哨，面积只有两个足球场大，战略位置十分重要。1985年部队撤编后，设立民兵哨所，但因条件艰苦，先后上岛的10多位民兵都不愿长期值守。1986年，26岁的王继才接受了守岛任务，从此与妻子以海岛为家，与孤独相伴，在没水没电、植物都难以存活的孤岛上默默坚守，把青春年华全部献给了祖国的海防事业。2014年，王继才夫妇被评为全国“时代楷模”。今年7月27日，王继才在执勤时突发疾病，经抢救无效去世，年仅58岁。&lt;/p&gt;&lt;p&gt;（新华社北京8月6日电）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;《 人民日报 》（ 2018年08月07日 01 版）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '0', '1534322558', '0', '0', '0');
INSERT INTO `c_news` VALUES ('43', '陈希：弘扬爱国奋斗精神  建功立业新时代', 'Uploads/2018-08-15/5b73e80ebd9ab.jpg', '&lt;p&gt;受习近平总书记委托，中共中央政治局委员、中组部部长陈希4日在北戴河看望慰问暑期休假专家，并召开座谈会，听取意见建议。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中共中央政治局委员、国务院副总理胡春华一同看望慰问和座谈。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;陈希强调，广大专家人才要牢固树立“四个意识”、坚定“四个自信”，保持强烈的爱国心、坚定的报国志，把爱国奉献的热情转化为创新创造的不竭动力，把科研成果应用在建设社会主义现代化强国的伟大事业中，把人生理想融入到实现中华民族伟大复兴中国梦的不懈奋斗中。要牢记时代使命、勇攀科技高峰，力求提出更多原创理论、做出更多原创发现，努力实现我国在关键核心技术上的自主可控，把创新主动权、发展主动权牢牢掌握在自己手中。要言传身教、提携后学，满腔热情关心、引导、指导青年科技人才，不断发现、培养、举荐人才，为拔尖创新人才脱颖而出铺路搭桥，用智慧和温暖的双手，托起年轻人的未来，托起国家科技发展的未来。组织部门要结合职能，坚持党管人才原则，深化人才发展体制机制改革，不断完善人才培养、评价、流动、激励机制，着力营造有利于各类人才创新创造的良好环境。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;参加休假活动的62位专家，是以两院院士为主体的优秀人才代表，他们在各自领域作出了重要贡献。（新华社北戴河8月4日电）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '0', '1534322702', '0', '0', '0');
INSERT INTO `c_news` VALUES ('44', '人民论坛：士不可以不弘毅  ——砥砺当代知识分子精气神③', 'Uploads/2018-08-15/5b73ed0c154f6.jpg', '&lt;p&gt;每每看到科研尖兵、优秀专家、学术带头人等典型人物的事迹，心头总有一番特别的感动。那种担当道义、践行所学、锐意进取的精气神，传递着激励人心的力量。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;知识分子的精神状态，可说是时代风貌的生动注脚。自古以来，知识分子总能立时代之潮头、通古今之变化、发思想之先声，凝聚起向上向善的正气。从先秦诸子到“班马”“李杜”，从严复、林纾到钱学森、邓稼先、黄大年、李保国……他们或皓首穷经、寄身翰墨，或潜心钻研、探求真理，或筚路蓝缕、以启山林。博学笃行的精神，求真务实的态度，为更多人照亮了前行的道路。迈步新时代，知识分子承载着新期待，唯有怀抱“士以弘道”的价值追求，激发学有所长、术有专攻的自身优势，才能不断提振精气神、成就新作为。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“士不可以不弘毅，任重而道远。”攀登知识和创新的高峰，离不开吃苦不言苦、知难不畏难的进取精神，既要志向远大，也要意志坚强。今天，围绕经济竞争力的核心关键、社会发展的瓶颈制约、国家安全的重大挑战等方面的创新实践，只会比以往难度更大。如果缺乏坚韧的意志、勇毅的精神，没有一股“于满是荆棘的荒野里踏出一条路”的闯劲，就难以取得新突破、开辟新天地。“种子专家”钟扬扎根青藏高原16年，“吃最苦的苦”，为未来留下了4000万颗种子；“高铁二等座院士”刘先林两获国家科技进步一等奖，背后是他年近八旬依然“永不停歇”的工作身影。求知求学、科研攻关，没有捷径可走。知识分子不必做苦行僧，但不能不下苦功夫。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;肩负时代赋予的重任，还当砥砺博学、审问、慎思、明辨、笃行的学术精神，真正把做人、做事、做学问统一起来。“中国核潜艇之父”黄旭华回忆我国第一代核潜艇的研制时说，当时没有计算机，只能用算盘进行海量复杂的运算，“常常为了一个数据……日夜不停地计算，争分夺秒”。如果没有严谨的治学态度与求是的科学精神，小小算珠如何能撬动大国重器的梦想？今天，物质日渐丰盈，设施日臻完善，一些人却丢掉了优良学风和务实态度，急功近利、东拼西凑、捏造数据、粗制滥造，只求著作等“身”，不求著作等“心”。如此这般，何谈以深厚的学识赢得尊重、以高尚的人格引领风气？唯有端正学风，真做学问、做真学问，方能造福国家、成就自我。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;知者行之始，行者知之成。行动能力，检验着一个人的实践品格。身处大有可为的历史机遇期，面临不容忽视的风险与挑战，我们还有一些关键技术被“卡脖子”，还有不少领域尚在“跟跑”阶段，亟待知识分子为改革发展提供更多智力支撑、创新支撑。面向现实问题、砥砺实践精神，将知行合一落在实处，知识分子才能把握时代机遇，充分实现人生价值。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;非“弘”不能胜其重，非“毅”无以致其远。赓续“弘道”之追求、“弘毅”之精神，为祖国和人民立德、立功、立言，当代知识分子必将在新时代的伟大实践中，成就无悔人生、唱响奋进之歌。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;《 人民日报 》（ 2018年08月15日 04 版）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '1', '1534323980', '0', '0', '0');
INSERT INTO `c_news` VALUES ('45', '无信不立 习近平为何重视诚信', 'Uploads/2018-08-15/5b73ef1f5b70d.jpg', '&lt;p&gt;&lt;/p&gt;&lt;p&gt;“我们生而为中国人，最根本的是我们有中国人的独特精神世界，有百姓日用而不觉的价值观。”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“人与人交往在于言而有信，国与国相处讲究诚信为本。”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;诚信，不仅在人与人之间的关系中至关重要，在国与国关系中同样具有举足轻重的地位。党的十八大以来，习近平在国内外多个重要场合强调诚信的重要性，为诚信在社会生活、外交关系和时代价值上的体现开启了多维视野，提供了基本遵循。习近平为何高度重视诚信？央视网特进行梳理，邀您一起从他的重要论述中寻找答案。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/Uploads/ueditor/image/20180815/1534324240437928.jpg&quot; title=&quot;1534324240437928.jpg&quot; alt=&quot;W020180813352087883081.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '0', '1534324511', '0', '0', '0');
INSERT INTO `c_news` VALUES ('46', '习近平谈如何打赢脱贫攻坚战', 'Uploads/2018-08-15/5b73f3243ec75.jpg', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/Uploads/ueditor/image/20180815/1534325252207006.jpg&quot; title=&quot;1534325252207006.jpg&quot; alt=&quot;W020180813357832143984.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;坚决打赢脱贫攻坚战，让贫困人口和贫困地区同全国一道进入全面小康社会是我们党的庄严承诺。党的十八大以来，习近平总书记的扶贫足迹遍布全国，对坚决打赢脱贫攻坚战作出重要战略部署。党建网微平台整理了总书记关于脱贫攻坚的部分精彩论述，从说“不”的角度，深入体会总书记对脱贫攻坚工作的重要指示精神。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;不能安之若素&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;我们党员干部都要有这样一个意识：只要还有一家一户乃至一个人没有解决基本生活问题，我们就不能安之若素；只要群众对幸福生活的憧憬还没有变成现实，我们就要毫不懈怠团结带领群众一起奋斗。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2014年1月26日至28日，习近平在内蒙古调研考察时的讲话&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;既不降低标准，也不吊高胃口&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;既不急躁蛮干，也不消极拖延，既不降低标准，也不吊高胃口，确保焦点不散、靶心不变。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2018年6月11日，习近平对脱贫攻坚工作作出重要指示强调&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;不搞层层加码&lt;/strong&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;要坚持时间服从质量，科学确定脱贫时间，不搞层层加码。要真扶贫、扶真贫、真脱贫。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2016年7月20日，习近平主持召开东西部扶贫协作座谈会时指出&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;不能搞数字游戏&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;脱贫和高标准的小康是两码事。我们不是一劳永逸，毕其功于一役。相对贫困、相对落后、相对差距将长期存在。要实事求是，求真务实，踏踏实实做这个事，不能搞数字游戏。考核要有正确导向，起到促进作用。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2016年3月，习近平在全国两会期间指出&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;扶贫标准不能随意降低&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;脱贫计划不能脱离实际随意提前，扶贫标准不能随意降低，决不能搞数字脱贫、虚假脱贫。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2017年6月23日，习近平在深度贫困地区脱贫攻坚座谈会上的讲话&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;不大包大揽，不包办代替&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;要改进工作方式方法，改变简单给钱、给物、给牛羊的做法，多采用生产奖补、劳务补助、以工代赈等机制，不大包大揽，不包办代替，教育和引导广大群众用自己的辛勤劳动实现脱贫致富。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2017年6月23日，习近平在深度贫困地区脱贫攻坚座谈会上的讲话&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;不能只盯着羊、煤、土、气&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;内蒙古产业发展不能只盯着羊、煤、土、气，要大力培育新产业、新动能、新增长极。同时，也要注意有所为有所不为，不能搞大呼隆，一哄而起。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2018年3月5日，习近平参加内蒙古代表团审议时强调&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;不要眉毛胡子一把抓&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;要思考我们这个地方穷在哪里？为什么穷？有哪些优势？哪些自力更生可以完成？哪些需要依靠上面帮助和支持才能完成？要搞好规划，扬长避短，不要眉毛胡子一把抓。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2012年12月29日至30日，习近平在河北省阜平县考察扶贫开发工作时的讲话&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;不能搞花拳绣腿，不能搞繁文缛节，不能做表面文章&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;脱贫攻坚工作要实打实干，一切工作都要落实到为贫困群众解决实际问题上，切实防止形式主义，不能搞花拳绣腿，不能搞繁文缛节，不能做表面文章。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2017年6月23日，习近平在深度贫困地区脱贫攻坚座谈会上指出&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;不能蜻蜓点水&lt;/strong&gt;　&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;扶贫干部要真正沉下去，扑下身子到村里干，同群众一起干，不能蜻蜓点水，不能三天打鱼两天晒网，不能神龙见首不见尾。　　&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2017年6月23日，习近平在深度贫困地区脱贫攻坚座谈会上指出&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&lt;br/&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;不搞大水漫灌、走马观花、大而化之&lt;/strong&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;扶贫开发贵在精准，重在精准，成败之举在于精准。各地都要在扶持对象精准、项目安排精准、资金使用精准、措施到户精准、因村派人（第一书记）精准、脱贫成效精准上想办法、出实招、见真效。要坚持因人因地施策，因贫困原因施策，因贫困类型施策，区别不同情况，做到对症下药、精准滴灌、靶向治疗，不搞大水漫灌、走马观花、大而化之。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;——2015年6月18日，习近平在部分省区市党委主要负责同志座谈会上强调&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;转载请标注来源：党建网微平台&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '0', '1534325540', '0', '0', '0');
INSERT INTO `c_news` VALUES ('47', '浙江杭州：把党校姓党落到实处', 'Uploads/2018-08-15/5b73f46ee7c59.jpg', '&lt;p&gt;&lt;strong&gt;【基层实践】&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“这一次的学习，让我看到了一个2.0版的党校。”韩斌是浙江省杭州市西湖区蒋村街道党工委书记，这是她第三次参加市委党校的培训，但这次好像和之前不一样了：区县（市）机关部门和乡镇正职班“加餐”听取市纪委市监委室（部、厅）负责人讲授党规党纪和国家监察相关课程；杭州市委常委、纪委书记、市监委主任陈擎苍，市纪委常务副书记、市监委副主任张振丰先后受邀为全体学员作专题报告讲授从严治党；市委副书记、组织部长、政法委书记张仲灿，市委党校常务副校长钱美仙先后为全体学员上党性教育课。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“为了加强纪律，派驻纪检监察组监督党校的重要活动，这相当于为我们请了‘廉医生’来‘把脉’。”韩斌说，“开学第一天的学习，我就感觉到了这次党校学习的风向，那就是‘党’字当头，抓党规党纪、抓党性锤炼。”参加市管领导干部进修班的杭州市纪委、杭州市监委派驻市委办公厅纪检监察组组长徐亚明说：“把纪律提升到全新的高度，与从严治党的要求是吻合的，我们学员也充分体会到了课程安排的良苦用心。”&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;贯彻落实“党校讲课有纪律”&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;党校作为我党教育培训党员领导干部的主渠道，自1933年3月13日马克思共产主义学校在江西瑞金开学至今，为革命、建设、改革大业提供了有力组织保障。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;但曾经有段时间，少数地方在党校办学中，党校姓党的理念受到一定程度的冲击。“谁的野话、怪话讲得最厉害，好像谁的水平就高。老师喜欢讲，学员也喜欢听，氛围很不正常。”在机关工作了26年的杭州市机关事务管理局党委委员、办公室主任严岗回忆10多年前的党校学习时这么感叹。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2015年12月，全国党校工作会议在北京召开。习近平总书记在会议上指出：“党校姓党，就是要坚持一切教学活动、一切科研活动、一切办学活动都坚持党性原则、遵循党的政治路线。”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;也正是从这一年开始，承担着对杭州市委党校监督执纪问责职能的杭州市纪委、杭州市监委派驻市委组织部纪检监察组，开始深入思考如何更好地为党校姓党保驾护航的全新命题，其切入点，便是抓“党校讲课有纪律”。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“火车跑得快，全靠车头带。党校姓党，领导班子必须先行。”派驻市委组织部纪检监察组组长马立群说。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;派驻纪检监察组督促市委党校全面压实从严治党主体责任，以校委班子及成员为重点，督促实施清单式责任分解、精准化责任督查等五大机制，明确落实33项工作措施，形成讲党性、重部署、抓落实的“闭合回路”。2018年第一季度，市委党校理论中心组共组织了8次集中学习，每次学习讲党性，每次学习讲纪律。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;校委会等重要会议，市委党校主动邀请派驻纪检监察组参加，“三重一大”事项主动报告，教学计划、发展纲要制定等重要工作全方位听取纪检监察组意见。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;纪检监察组多次赴校，通过调查、走访、召开座谈会、随堂听课、视频查课、社会宣讲电话回访等方式进行调研，推动学校制定了《贯彻“党校讲课有纪律”要求工作方案》及《加强教学督导工作的实施办法（试行）》。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“我们党校，除了有‘德先生’‘赛先生’，还有个‘廉医生’，通过纪检监察组的‘望闻问切’，为我们党校姓党全面把脉。”杭州市委党校党委委员盛恩友说。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;在“廉医生”的把脉下，市委党校引导全体干部、教师、职工坚持在党爱党、在党言党、在党忧党、在党为党。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;“哗众取宠少了，真材实料多了”&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;党校姓党，“讲课有纪律”，条条框框这么多，会不会干货就少了？上课会不会死气沉沉了？为防止这一问题的出现，杭州市委组织部、派驻纪检监察组、杭州市委党校共同研究，商量对策。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;每年年初，学校教务部门、教研部门反复讨论教学框架，引导教师备课丰富化、多元化，确保党性教育、理论教育课程的数量与质量，一方面符合全面从严治党的要求，另一方面满足广大学员的现实需要。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;杭州市委党校教育长高国舫说：“吹一吹牛、骂一骂人、讲一讲小道消息，这样的授课‘老三样’在新的框架之下，没有了土壤，直接倒逼授课老师重新梳理知识体系和脉络，深挖传统、深耕经典，把‘传统菜’做出新花样。”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;参加党外中青年干部培训班学习的西湖区民政局副局长顾余丹深有体会地说，老师在授课时，介绍到“中国共产党领导的多党合作和政治协商制度是我国现行的政党制度”，特别指出是“中国共产党领导的”，而不是“中国共产党领导下的”，一字之差，天壤之别，然后老师把其中缘由、背景、典故娓娓道来，再穿插一些课堂的实时互动，一下把我国的政党制度讲得淋漓通透，“有醍醐灌顶的感觉”。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;为丰富课程内容，杭州市委组织部、市委党校联合制定出台《领导干部到市委党校讲课的实施办法》。2016年以来，每年都有十多位市领导到党校讲课、与学员座谈，带动引领全市各级领导干部进党校、近学员、上讲坛，形成“干部教、教干部”的良好氛围。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;此外，在纪检监察组的监督下，市委党校修订完善教学督导工作机制，充实教学督导力量，成立了全体校委班子成员在内的21人教学督导队伍，仅4月份一个月，便督教听课68堂，推动教风、学风持续向善。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;参加过多次党校学习的杭州市金融投资集团党委副书记、总经理虞利明是2018年市管领导干部进修班的学员，他说：“这次学习，无论是教师、课程还是学习风貌，都让我改变了对党校学习的认识，特别是井冈山红色课程，我这个七尺男儿跟班上很多男同志一样，好多年不曾流泪，但这一次哭了！”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;（本报记者 陆健 本报通讯员 刘波）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '3', '0', '1534325870', '0', '0', '0');
INSERT INTO `c_news` VALUES ('48', '湖北荆州强化日常执纪监督，细化容错纠错、做好回访教育', 'Uploads/2018-08-15/5b73f4f42d8f9.jpg', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;干部知敬畏 干事敢作为&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;本报记者 田豆豆&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;核心阅读&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;为进一步强化日常监督执纪，湖北省荆州市纪委监委加强处分公开宣布的警示性，优化容错纠错的可执行性，注重对被处分干部的回访教育。抓小抓早、容错纠错，这些举措为党员干部划定纪律高压线，建好失误防火墙，让党员干部心有敬畏、敢有所为。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“以前，我们搞工作有时会有顾虑，放不开手脚，有好想法也不敢实施，生怕违反政策规定受到纪律处分和责任追究。现在啊，心里踏实多了，干事的底气也足了。”湖北省荆州市一位干部坦言。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;这位干部的踏实感，源于荆州市纪委监委的一系列探索。荆州市纪委监委通过综合施策优化执纪效果：强化处分宣布的警示作用，以身边事警醒身边人；细化容错纠错相关制度，明确创新中出现的失误情形；加强干部回访教育，疏通干部思想、调适干部心理。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;以案说纪&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;公开市管干部党纪政务处分，扩大警示教育效果&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“2013年1月至2017年10月，吴某在担任装备中心主任期间，违反财经纪律，设置‘小金库’资金173.76万元；使用‘小金库’资金，违规为装备中心职工发放津补贴26.95万元……决定给予吴某党内严重警告处分……”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;荆州市某高校会议室里，单位中层以上干部全部到场参会。台上，荆州市纪委案件审理室主任肖俊杰正在宣读对该单位原副院长吴某的处分决定，台下鸦雀无声。年近五十的吴某泪如雨下。身边人、身边事，这对所有在场干部而言，都是一次深具震撼力的警示教育。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;处分一个，教育一片。今年7月，在前期试行的基础上，荆州市纪委监委正式出台《关于对市管干部党纪政务处分决定公开宣布执行的暂行办法》，除涉及国家秘密、商业秘密、个人隐私外，市管干部处分决定将在其所在单位公开宣布，重在“以案说纪”，用身边反面典型警醒教育身边人，扩大警示教育效果。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;荆州市纪委监委要求，处分决定作出后，应当在7个工作日内公开宣布执行。公开宣布会议上，除通报案件查处情况、宣布党纪政务处分决定或组织处理决定外，还要求所在单位党委（党组）成员以案说法，结合岗位职责和工作实际，作批评与自我批评，单位党委（党组）主要负责人表态发言。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;吴某所在高校新任党委书记潘某说：“虽然我过去与吴某不太熟悉，但他的案子时刻警醒我哪些事不能做，哪些规矩决不能破。”&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;建立清单&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;明确可容错情形，减少干部创新创业后顾之忧&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;今年3月，荆州市纪委监委收到线索，反映所辖某市自行规定为到扶贫村任第一书记的党员干部发放补助，涉嫌滥发津补贴。与此同时，荆州市纪委监委收到荆州市委组织部关于该所辖某市市委副书记、扶贫攻坚领导小组副组长朱某等同志提拔任用的征求意见函。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;经查，虽然中央在有关通知中提出了对于第一书记任职期间生活补助“可参照差旅费伙食补助费标准执行”的说法，但该市在湖北省、荆州市均未出台具体标准的情况下，为了激励第一书记脱产驻村的工作热情和积极性，下发通知明确为驻村第一书记发放一定的生活与工作补贴，涉嫌扩大范围发放补助。荆州市纪委监委调查人员认为，该市的做法属于上级尚无明确限制的探索性试验中出现的失误。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;如此处理的依据是荆州去年3月出台的《关于建立党员干部干事创业容错纠错工作机制的实施办法（试行）》。办法强调“三个区分开来”：把党员干部在推进改革中因缺乏经验、先行先试出现的失误和错误，同明知故犯的违纪违法行为区分开来；把上级尚无明确限制的探索性试验中的失误和错误，同上级明令禁止后依然我行我素的违纪违法行为区分开来；把为推动改革的无意过失，与谋取私利的故意行为区分开来。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;办法细化了容错纠错“正面清单”，同时，为防止容错成为违法乱纪者的“护身符”，也制定了容错纠错“负面清单”，如严禁打着改革创新旗号搞劳民伤财的“政绩工程”“形象工程”，严禁在招商引资、项目建设、统计数据等工作中弄虚作假，严禁在受理和服务的审批事项中故意拖延、推诿扯皮等。对造成重大负面影响、重大经济损失、重特大安全责任事故、严重环境污染和生态破坏责任事故等事项不予容错。一年多来，该办法受到了党员干部的热烈欢迎，减少了干部创新创业的后顾之忧。&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;一人一档&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;指定回访教育帮带人，全面考核受处分干部&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“时隔三个月，再次回访，触及灵魂……我要进一步把‘共抓大保护、不搞大开发’抓实抓细，以实实在在的业绩弥补当年之憾。”2018年5月29日，荆州市直某部门主要负责人万某某在接受荆州市纪委监委的回访谈话后，写下了这段肺腑之言。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;荆州市对中央第三环保督察组交办的“洪湖国家级自然保护区违法违规养殖”“四湖总干渠水质污染”等问题进行了严肃查处，对数十名党员干部给予了党纪政纪处分。2017年底，荆州市监察局对万某某给予了行政记过处分。原因是在她任某县县长期间，两家乡镇污水处理厂配套管网建设明显滞后，对乡镇生活污水超标准排放和污染四湖总干渠负有重要领导责任。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;为了让干部疏通思想、踏实工作，2018年2月、5月，荆州市纪委监委两次派领导干部与万某某谈心。“几次回访让我感受到组织不仅是有原则的，也是温暖的。我很快完成心理调适，把全部精力投入工作中。”万某某深有感触。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;近来，荆州市各级纪委监委坚持抓早抓小，运用“四种形态”处理的党员干部中，用第一、二种形态处理的占到绝大多数。2016年以来，荆州市共有3582名党员干部受到党纪政纪处分。荆州市纪委监委规定，党组织应指定一名同志作为受处分人的教育帮带人，要针对每一名受处分党员干部成立回访教育小组，并建立台账，一人一档。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;从2017年底开始，荆州市纪委监委对县市区纪委监委开展落实回访教育全面考核，回访教育和建档率已达到100%。荆州市纪委监察局案件审理室在受处分党员干部处分影响期满或处分期满后，还要对受处分党员干部进行一次全面考核，考核结果将影响其未来的任职使用，如有消极怠工、敷衍塞责的，将受到严肃处理。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1534326004', '0', '0', '0');
INSERT INTO `c_news` VALUES ('49', '海南：党建有活力 脱贫添动力', 'Uploads/2018-08-16/5b74d6fb5528c.jpg', '&lt;p&gt;“小康不小康，关键看老乡。”习近平总书记2013年视察海南时的这句殷切嘱托，已经在琼岛大地上开花结果。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;2015年至2017年期间，海南减少贫困人口46.3万人，贫困发生率由8.9%降至1.6%。当前，我省脱贫攻坚已进入爬坡过坎、攻城拔寨的冲刺期，如何不负重托、不辱使命，打赢脱贫攻坚“翻身仗”，按期完成这一重大政治任务，考验着海南省委和海南广大党员干部贯彻党中央决策部署的政治决心和工作水平。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;自脱贫攻坚战打响以来，全省各级组织部门把思想高度统一到习近平总书记扶贫思想和党中央关于精准扶贫精准脱贫重大决策部署上来，充分发挥基层党组织战斗堡垒作用和党员先锋模范作用，把组织资源、干部资源、人才资源、发展资源向脱贫攻坚一线倾斜，通过选优配强贫困市县和扶贫任务繁重乡镇领导班子、进一步压实各级党委班子主体责任、派强用好第一书记、建强贫困村党组织、加大人才培养和支持力度、推动形成良好氛围等方式，推动形成了以党建引领和促进脱贫攻坚的良好局面。&lt;/p&gt;&lt;p&gt;选好“领头雁”，增强贫困村党组织活力&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;农村基层党组织是抓好脱贫攻坚的战斗堡垒。农村富不富，关键看支部；支部强不强，全靠村党组织书记这个“领头雁”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;说起定安县龙湖镇桐树村党支部书记、村委会主任陈宁，村民们都竖起大拇指——该村曾是定安县有名的贫困村，这两年通过养殖黑山羊增加收入，大部分已实现脱贫。&lt;/p&gt;&lt;p&gt;发展黑山羊养殖产业，创业之初却不是那么容易的事情。如今已经养殖了数十头黑山羊，成功甩掉贫困户“帽子”的村民王育提起这位“陈书记”，心中满怀感激。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;当初村里发展黑山羊养殖产业，缺乏资金，陈宁带领村“两委”班子的6名党员干部，每人出资10万元，牵头成立黑山羊养殖专业合作社。黑山羊养殖缺乏技术，陈宁就和支部其他党员到琼海、万宁等黑山羊养殖户那里学习取经，再手把手地传授村民。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;随着合作社逐渐走向正轨，陈宁也号召村民、贫困户以务工、土地入股等方式加入合作社，率领大家一起致富。王育就是在那时加入了合作社，一举摆脱了贫困。&lt;/p&gt;&lt;p&gt;截至2017年底，我省贫困地区1514个农民专业合作社中，由村“两委”党员干部领办创办的有188个。基层党支部、党员干部参与到合作社运营，可发挥出党的政治、组织和群众优势，也凝聚了资金、技术力量向外闯市场。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;发展能力不足，发展思路有限，也是贫困村基层组织的“通病”。我省一手抓贫困村支部建设，一手建强带头人队伍，以村（居）“两委”换届为契机，既从现任村干部中择优“留”，又从农村致富能人、大学毕业生和复退军人中择优“推”，还从务工经商能人中择优“引”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;如今，走进白沙黎族自治县邦溪镇南班村，郁郁葱葱的密林掩映着幢幢小楼，林荫小路上不时有自驾游车辆缓缓驶过。谁能想到，这座如同世外桃源般美丽的村落，曾经是白沙远近闻名的“光棍村”和“垃圾村”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;那时，村民守着零散种植的甘蔗、木薯等低效作物过苦日子，人均收入远低于邦溪镇的平均水平，村民娶不到媳妇是常有的事。而这一切，在该村党支部书记、村委会主任高勇当选后，就发生了巨大的改观。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;在担任村党支部书记前，高勇曾在三亚一家旅游企业工作，几年的工作经历，让他积累了不少创业经验，在村里，他是村民们公认的敢闯敢干的能人。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;2016年的村级组织换届选举，高勇高票当选了“一肩挑”的书记、主任。他带领村民们发展起了乡村旅游业，引导村民成立了芭蕉村休闲观光合作社，结合乡村旅游，推出可供游客购买的特色农产品。2017年，南班村接待游客量达到5000多人次，其中过夜游客600多人次，村里人均可支配收入达到9156元，成功实现了整村脱贫出列，彻底甩掉了“光棍村”“垃圾村”的“帽子”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;据统计，在2016年的村级组织换届选举中，一大批素质高、年纪轻的优秀人才进入村级组织班子。据统计，全省换届后的村级组织班子，平均年龄为43.97岁，致富带头人8618人，比上届增加1726人；大学生村官168人，比上届增加92人。全省形成了党员带头致富、带领致富的良好氛围。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“第一书记”驻进村，啃下贫穷“硬骨头”&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;在脱贫攻坚的第一线，还有一支精干的力量。自脱贫攻坚战启动以来，全省先后选派792名驻村第一书记驻扎基层，他们走村入户，因地制策，用心用情搭建起帮扶爱心桥，引入社会资金、技术等资源，为贫困地区的发展提供了源源不竭的动力，也涌现出一大批感人事迹。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;由省妇联派驻保亭黎族苗族自治县加茂镇共村的驻村第一书记隋耀达，自从驻村以来，每天身穿绿色迷彩服，带领共村村民开展黑山羊养殖，被同事们称为“羊书记”。为了带领共村村民脱贫，隋耀达将妻子女儿接到了村里，七旬的老父亲也从三亚来到共村义务帮忙，在养殖基地里为大家做饭。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;白沙黎族自治县元门乡向民村驻村第一书记柳洪建，驻村后发现阻碍村集体经济发展的瓶颈是，该村什龙田洋300亩土地因土地纠纷问题搁置荒芜多年。面对村庄发展的“拦路虎”，柳洪建帮助村民通过法律程序，最终收回了搁置多年的土地，村集体经济起死回生。这位敢于啃“硬骨头”的第一书记，也被当地村民称为“向民村的向民书记”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;扶贫路上，还有驻村第一书记为脱贫攻坚事业献出了生命。白沙黎族自治县牙叉镇对俄村驻村第一书记陈扬敬，在驻村工作期间患上鼻咽癌，一年里他拉来资金给对俄村修了公路，架起路灯，并帮扶村民养殖黑山羊，进行养蜂技术培训。在他的努力下，对俄村的村貌日新月异，村民的腰包也逐渐鼓起来。去年3月3日，带着对对俄村的挂念和期望，陈扬敬永远闭上了眼睛。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;……&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;走在琼岛大地的乡村，村民们只要提起驻村第一书记的故事，就说个没完。这些工作经验丰富、有发展潜力的同志，将干部的优势特长与帮包村的实际需求紧密结合，啃下农村贫困地区“软、散、乱、穷”等一块块“硬骨头”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;据统计，截至2017年，全省驻村第一书记帮助培养村级后备干部2378名，协调落实道路、桥梁、水利等基础设施项目1995个，指导成立农民专业合作社575个，让贫困群众感受到了实实在在的变化。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;增强致富本领，激发脱贫内生动力&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;我省坚持扶贫与扶志、扶智并重的原则，基层党组织充分发挥战斗堡垒作用，引导带领着广大贫困群众树立自立自强、不甘贫困的意识。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;海口市云龙镇云岭村村民胡行杜，曾经因为孩子上大学四处举债，于2014年成为建档立卡贫困户。在村扶贫干部的动员下，胡行杜从脱贫致富电视夜校开播的第一期起，他就每期准时收看电视夜校节目。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;在电视夜校节目里，胡行杜了解到国家对贫困户的助学政策，在扶贫干部的帮助下，他提出申请，得到了助学资金，缓解了家庭压力。同时，通过观看电视夜校节目，他还学会了一些农业技术，开始科学种植萝卜、地瓜、豆角等。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;2016年和2017年连续两年，胡行杜被评为“学习之星”。在颁奖仪式上，胡行杜的帮扶干部为他披上红绸带，并为他颁发了获奖证书和奖杯。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;为加强干部群众的交流，提升脱贫的内生动力，我省设立2690个夜校教学点，要求驻村第一书记、帮扶责任人、乡镇扶贫干部、村“两委”干部和贫困户集中收看。此外，我省还加大贫困村干部培训力度，每年对党组织书记集中轮训一次，突出实战化训练，着重提高落实党的扶贫政策、团结带领贫困群众脱贫致富的本领。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;省委组织部相关负责人在接受采访时表示，解决农村贫困群体内生动力不足的问题要立足我省实际，充分发挥基层党组织和传统治理主体的力量，综合运用道德、利益、制度、环境和心理等相关机制，同时借鉴省内外成功经验，全方位多层次激发农村贫困群体内生动力，实现农村贫困群体经济的可持续发展。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '3', '0', '1534383867', '0', '0', '0');
INSERT INTO `c_news` VALUES ('50', '一心谋发展 倾心为富民——记甘肃陇南市宕昌县庞家乡松扎村党支部', 'Uploads/2018-08-16/5b74d7630ca1f.jpg', '&lt;p&gt;松扎村位于宕昌县庞家乡北部，距县城46公里，属于高寒阴湿地区，是全省深度贫困村之一。3年前，这里“山高，地窄，人人嫌”，连一条像样的村道都没有，是众所周知的“后进村”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;而如今的松扎村，道路畅通、药材飘香、村容整洁，发展成为一个环境优美、生态良好、经济发展、文明和谐的新农村。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;松扎村的蜕变，源于新任的村党支部班子。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;前几年，松扎村“两委”班子不健全、作用发挥不到位，群众看不到发展的希望。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“松扎村要想脱贫，必须要有一个能够发挥战斗堡垒作用的强有力的村党支部。”庞家乡党委书记杨碧峰说，对于当时的松扎村而言，加强基层组织建设、选优配强村“两委”班子是必须解决的首要问题。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;通过调整村党支部书记、配齐党支部班子，庞家乡有效加强了村党组织的战斗力。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;班子组建起来之后，村党支部便开始着手解决制约发展的第一道难题——修路。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;然而，对松扎村而言，转变村民的思想观念比修路还难。起初，有很多村民不愿意为修路而拆掉自家的房屋、院墙。为此，村党支部班子挨家挨户走访宣讲，并召开全体村民代表大会专门进行商议。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;会开了一遍又一遍，道理讲了一堆又一堆，在党支部的不懈努力下，村民们的观念终于发生了转变……&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“观念变了，村民们的心气儿也起来了，修路进程非常快。”村支书张忠生说，村党支部提出“大干100天，松扎大变样”的号召，大家都积极响应，通力配合，4个月后，承载着村民们殷切期盼的道路终于顺利通车。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;看到村里的干部群众心往一块想，劲往一处使，村党支部班子决定顺势而为，以基础建设为突破口，大力发展致富产业，让松扎村的面貌彻底焕然一新。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;针对村情实际，松扎村发展起中药材等特色优势产业。在原有种植的基础上，以推广良种良法为重点，发展当归、黄芪、党参等中药材，实现标准化种植1500多亩。同时，大力引导贫困户与网店签订购销协议，发展订单种植，解决村民的后顾之忧。&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;为了拓宽增收渠道，松扎村还采取“支部+合作社+贫困户”的形式，将扶贫互助资金和精准扶贫贷款作为贫困户的入股资金，让贫困户全员入股，以支部控股、贫困户持股等方式，带动贫困户“抱团”脱贫致富。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;同时，村党支部积极为村民提供劳务信息，并邀请县扶贫办、劳务办等部门进行劳务技能培训。如今，劳务输转让村民的钱袋子越来越鼓，村里每户村民家里至少有1人持证外出务工，群众增收致富内在动力不断增强。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;此外，村党支部还组织群众对松扎村的历史文化进行挖掘整理，组建村文化小戏班子，不定期组织演出活动，进一步丰富群众文化生活，营造健康和谐的发展环境。&lt;/p&gt;&lt;p&gt;笑声爽朗，乐声飞扬，跳舞、扭秧歌、唱大戏，读书、看报、下象棋……如今，松扎村的村民们各有所乐，享受着幸福美好的新生活。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '3', '1', '1534383971', '0', '0', '0');
INSERT INTO `c_news` VALUES ('51', '述职述责述廉试点工作实现“四化”', 'Uploads/2018-08-16/5b74d816bcb36.jpg', '&lt;p&gt;为深入落实“两个为主”要求，强化上级纪委对下级纪委的领导，今年以来，南充市纪委监委试点开展县（市、区）纪委监委、市纪委派驻（出）机构主要负责人向市纪委常委（扩大）会述职述责述廉，进一步压紧压实纪检监察系统内党风廉政建设主体责任和监督责任。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;一是工作部署制度化。出台相关文件，明确要求各县（市、区）纪委监委、派驻（出）机构主要负责人每半年向市纪委常委（扩大）会述职述责述廉，实行会议现场述职述责述廉与书面述职述责述廉相结合，一届任期内实现现场述职述责述廉“全覆盖”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;二是具体实施简约化。根据省纪委监委去除繁文缛节的要求，实现开短会、讲干货、见实效。述职述责述廉前各方精心准备、周密安排，确保各环节高效顺畅；述职述责述廉对象发言时间严格控制在8分钟内，既谈成绩、也讲问题，对当年被函询、谈话或个人事项有变动的，要在会上专门说明；对谈出的问题要明确整改方向和路径。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;三是客观点评要害化。对述职述责述廉对象的述职述责述廉情况，市纪委3名副书记分别就“班子队伍建设、审查调查工作、执纪监督工作”三方面工作进行现场点评，开门见山谈成绩，一针见血指问题，从严从实提建议，持续传导压力，促进工作。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;四是工作成果实效化。今年述职述责述廉活动，现场对3个县（区）纪委书记和2个市纪委派驻纪检组组长指出问题32个，提出工作建议15条。这些问题和建议，相关地方和单位正在深入剖析、对标要求，抓紧落实。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;（南充市纪委监委）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1534384150', '0', '0', '1');
INSERT INTO `c_news` VALUES ('52', '北京房山区：“五小党建法”强了支部暖了心', 'Uploads/2018-08-16/5b74d8bd8c97a.jpg', '&lt;p&gt;东太平村地处北京市房山区十渡镇西北部的大山深处，是一个偏远而贫穷的山村。为了帮助村子脱贫致富，两年来，村第一书记隗云华通过抓党建促发展，为该村“量身打造”了一套“小讲堂、小活动、小关爱、小专栏、小警示”的“五小党建工作法”，不仅增强了支部战斗力，也温暖了群众的心。目前，十渡镇已在全镇推广这一优秀经验做法。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“火车跑得快，全靠车头带”。谈起抓党建的初衷，隗云华认为东太平村之所以发展落后，一个重要原因是村子党建薄弱，村支部战斗堡垒作用没有发挥出来。于是，经与村书记商议沟通后，他决定将开展“加强党建、支部引路、党员带路”的工作思路，作为村里工作的第一要务。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;为尽快提高广大党员干部的党性修养，他和村书记制定了全年党支部学习计划，定期听党课、学党章、记笔记、谈体会，经过一段时间的学习后，大家的思想觉悟有了一定的提高。但时间长了，又出现了一些现实性问题。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“由于村地处大山深处，村民主要靠农耕为生，党支部组织的学习活动，个别党员没时间参加，还有少数党员家境贫穷，经常牢骚满腹。”面对这些棘手问题，隗云华并没有灰心，而是下决心攻而克之。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;经过一段时间的摸索实践后，隗云华结合村里党员实际情况，打造了“五小党建工作法”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;针对部分党员干部农耕没有系统的学习时间，隗云华就利用他们休息的间隙时间，“见缝插针”地开展“小课堂”学习活动，每次时间15分钟，学习形式多样，可以进行小讨论、小串讲、小辅导，甚至小辩论。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;为营造浓厚的党员学习氛围，隗云华和村书记充分利用流动展板、墙报、橱窗，在村里设计了党建宣传“小专栏”。还开展了喜闻乐见的党员“小活动”，到平西抗日战争纪念馆，凭吊英烈；前往烈士陵园，重温入党誓词，组织开展羽毛球友谊比赛等活动。一次次的党建“小活动”，达到了互通有无、交流学习的效果。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;通过全面的调查摸底，全村49个低收入户、3名老党员全部登记上册，村子还制作出了《十渡镇东太平村低收入户台账》《困难党员台账》等，并开展了“问困难、问需求、送帮扶、送温暖”的“两送两问”党建活动，给困难百姓送去了“小关爱”，赢得了民心。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;自创新“五小党建法”后，村里无一起党员违法违纪事件的发生，并被房山区评为“五好党支部”。目前，十渡镇党委政府已将“五小党建法”作为优秀经验做法，在全镇进行了推广。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“虽然是从‘小’入手，却取得了‘大’效果。这充分说明，只要踏踏实实的从小事做起，只要一心为民谋发展，就会赢得百姓的信任和支持，搭建起政府和群众之间的‘连心桥’。”隗云华诚恳地说。（记者 芦晓春）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '3', '0', '1534384317', '0', '0', '0');
INSERT INTO `c_news` VALUES ('53', '中共中央关于追授郑德荣等7名同志“全国优秀共产党员”称号的决定', 'Uploads/2018-08-16/5b74dbb3b056f.jpg', '&lt;p&gt;今年是全面贯彻党的十九大精神的开局之年，是改革开放40周年。在习近平新时代中国特色社会主义思想指引下，全党同志正满怀豪情、意气风发，奋力书写实现中华民族伟大复兴中国梦的新篇章。为大力表彰宣传信念坚定、对党忠诚、担当作为、干事创业的新时代典型，激励和引导广大党员干部进一步把思想和行动统一到习近平新时代中国特色社会主义思想和党的十九大精神上来，不忘初心、牢记使命，见贤思齐、锐意进取，努力创造无愧于时代、无愧于人民、无愧于历史的业绩，党中央决定，追授郑德荣、钟扬、李泉新、许帅、姜仕坤、张进、张超等7名同志“全国优秀共产党员”称号。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;郑德荣，男，汉族，吉林延吉人，1926年1月出生，1952年11月参加工作，1953年11月加入中国共产党，东北师范大学原副校长、荣誉教授、博士生导师。2018年5月3日，因病医治无效去世，享年92岁。郑德荣同志是我国著名中共党史专家，马克思主义中国化研究的重要开拓者和奠基人。他理想信念坚定，毕生追求、信仰马克思主义，毕生研究、宣传马克思主义，67年来始终坚守在教学科研一线，出版学术著作和教材50余部，主编的《毛泽东思想史稿》开创毛泽东思想史科学体系的先河，以鲜明政治立场、卓越学术成就践行对党的事业的忠诚与执着。他学高德馨、以身垂范，牢固树立为党和人民述学立论远大理想，把传承红色基因贯穿立德树人全过程，把党的创新理论贯穿学术研究全过程。他品行高洁、虚怀若谷，从不以资深学者自居，从不为自己和亲属谋取特殊照顾，赢得广大师生和学界普遍敬仰。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;钟扬，男，汉族，湖南邵阳人，1964年5月出生，1984年8月参加工作，1991年6月加入中国共产党，复旦大学研究生院原院长、生命科学学院教授、博士生导师，中央组织部选派的第六、七、八批援藏干部。2017年9月25日，在赴内蒙古为民族干部授课途中遭遇车祸不幸去世，年仅53岁。钟扬同志对党无比忠诚、对事业无比热爱、对人民无比赤诚，长期从事植物学、生物信息学研究教学工作，取得一系列重要研究成果。他秉持“只要国家需要、人类需要，再艰苦的科研也要做”，在青藏高原跋涉数十万公里，收集上千种植物的数千万颗种子，为国家和人类储存下绵延后世的基因宝藏。他牢记“组织的需要第一”，16年如一日把生命最宝贵的时光献给祖国雪域高原，倾心培育少数民族科研教学骨干，帮助西藏大学将生物多样性研究成果推向世界。他坚持“干事比名分重要”，勤勉务实、严格自律，生活简单朴素，从不对职务待遇、收入条件提任何要求，彰显了共产党员的崇高精神和人格力量。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;李泉新，男，汉族，江西丰城人，1958年2月出生，1976年2月参加工作，1985年8月加入中国共产党，江西省委第三巡视组原组长。2016年5月31日因病医治无效去世，年仅58岁。李泉新同志信念坚定、对党忠诚，在纪检监察和巡视战线工作27年，始终秉持“没有不能揭的黑、没有不敢碰的恶”，与腐败分子作坚决斗争。他坚持原则、执纪如铁，发现问题线索严查到底，面对威胁恐吓毫不畏惧，忠诚履行纪检监察干部和巡视干部的神圣职责。他勤于钻研、善作善成，每打一仗都及时总结，不断改进巡视工作方法。他模范运用监督执纪“四种形态”，对有苗头性倾向性问题的干部及时谈话提醒，为多名党员领导干部澄清问题。他不徇私情、秉公办事，坚守自身干净的行为底线，任何时候都不开特权口子，树立了纪检监察干部和巡视干部的好形象。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;许帅，男，汉族，河北磁县人，1979年11月出生，2002年9月参加工作，2005年12月加入中国共产党，河南省安阳市救助管理站原站长。2016年9月1日，因病医治无效去世，年仅36岁。许帅同志始终把为人民服务作为自己人生追求，放弃原本稳定的机关工作，主动向组织请缨到救助管理站工作。他把共产党人的大爱情怀无私奉献给困难群众，劝导露宿街头的流浪乞讨人员来站接受救助，在全国率先设立医疗安置区，关爱帮助聋哑流浪儿童重返校园，想方设法为受助人员寻亲，3年累计救助1.5万余人次。他视事业重于生命，恪尽职守，忘我工作，即使身患癌症，仍以常人难以想象的毅力拼命工作，直到生命最后一刻。他去世后捐献了遗体和眼角膜，完成“救助生涯的最后一站”，用生命诠释了“为民甘做孺子牛”的精神。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;姜仕坤，男，苗族，贵州册亨人，1969年12月出生，1990年8月参加工作，1992年1月加入中国共产党，贵州省晴隆县委原书记。2016年4月12日在出差期间突发心脏病不幸去世，年仅46岁。姜仕坤同志长期在贫困偏远山区工作，始终把共产党人的坚强党性体现在脱贫攻坚的使命担当中。在晴隆县工作的6年多时间里，他以坚忍不拔的劲头，探索出经济、生态、扶贫三效同步精准脱贫的“晴隆模式”。他把群众疾苦挂在心上，足迹遍布晴隆县所有乡镇、村居，和老百姓细算经济账、共谋脱贫策，发动群众种草养羊，发展山地特色经济，被群众称为“农民书记”、“算账书记”。他严于律己，生活简朴，从不利用权力为自己和亲属谋取私利，从不干涉建设工程招投标等经济活动，以自身勤政清廉之气感染着身边人。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;张进，男，汉族，重庆巴南人，1965年4月出生，1987年7月参加工作，1996年10月加入中国共产党，重庆船舶工业公司原副总经理，中船重工（重庆）海装风电设备有限公司原副总经理，重庆前卫科技集团有限公司原执行董事、总经理。2016年6月26日，因病医治无效去世，年仅51岁。张进同志忠于党的事业，牢记国家利益高于一切，把毕生心血倾注在建设军民融合创新型领军企业上。他敢闯敢拼，12年间带领一个濒临破产的军工企业，发展成为具有七大产业群的科技集团。他意志如钢，面对艰难繁重的生产、演练任务，曾连续64天吃住在车间，是出了名的“铁汉”。他锐意改革，带领企业完成引进新技术、拓展产品线、开展国际合作等一系列任务。他廉洁奉公，主动向党委递交个人廉政承诺，在公司推行“阳光分配”。他把勇于担当、甘于奉献的共产党人精神永远留在国企职工群众心中。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;张超，男，汉族，湖南岳阳人，1986年8月出生，2004年9月入伍，2009年5月加入中国共产党，海军某舰载航空兵部队原一级飞行员。2016年4月27日，张超同志驾驶歼—15飞机进行陆基模拟着舰训练时，面对突发故障，全力挽救战机，不幸壮烈牺牲，年仅29岁。张超同志自觉把人生追求融入强军伟业，瞄准强敌对手，苦练精飞，先后飞过8型战机，3次成功处置重大空中险情，20多次执行战斗起飞任务，数十次带弹紧急起飞驱离外军飞机，飞出了中国海军的自信，捍卫了伟大祖国的尊严。他为人至诚至性，爱亲人、爱家庭，对战友满怀真诚，用高尚品行感染和温暖着身边的每个人。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;郑德荣等7名同志是习近平新时代中国特色社会主义思想的模范践行者，是新时代中国共产党人不忘初心、牢记使命、永远奋斗的光辉典范，是新时代党员干部信念坚定、许党报国、为民造福的杰出楷模。党中央号召，广大党员、干部向他们学习。要像他们那样坚定“四个自信”，始终坚持“革命理想高于天”，自觉做共产主义远大理想和中国特色社会主义共同理想的坚定信仰者和忠实实践者。要像他们那样对党绝对忠诚，始终爱党、信党、护党、为党，牢固树立“四个意识”，坚决维护以习近平同志为核心的党中央权威和集中统一领导。要像他们那样勇于担当作为，始终坚持实践实干实效，锐意进取、攻坚克难，平常时刻看得出来、关键时刻冲得上去。要像他们那样践行根本宗旨，始终坚持人民利益高于一切，紧紧依靠人民，把为人民谋幸福作为工作的出发点和落脚点，全心全意为群众办实事、做好事、解难事。要像他们那样坚守道德操守，始终保持共产党人的政治本色，清清白白做人，干干净净做事，带头弘扬清风正气，自觉践行共产党人价值观。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;使命呼唤担当，榜样引领时代。各级党组织要把学习郑德荣等7名同志先进事迹与深入学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神结合起来，作为推进“两学一做”学习教育常态化制度化、开展“不忘初心、牢记使命”主题教育的重要内容，采取多种形式广泛组织学习宣传。今年“七一”期间，基层党组织要围绕学习先进典型、发挥先锋模范作用，组织开展一次主题党日活动。要引导党员、干部以先进典型为榜样，学先进、赶先进、当先进，更加紧密地团结在以习近平同志为核心的党中央周围，奋发有为，扎实工作，为决胜全面建成小康社会、夺取新时代中国特色社会主义伟大胜利、实现中华民族伟大复兴的中国梦不懈奋斗。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;（新华社北京6月28日电）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;《 人民日报 》（ 2018年06月29日 01 版）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '3', '1', '1534385075', '0', '0', '0');
INSERT INTO `c_news` VALUES ('57', '习近平对推进中央和国家机关党的政治建设作出重要指示', 'Uploads/2018-08-16/5b74e3961e905.jpg', '&lt;p&gt;人民网北京7月12日电&amp;nbsp;&amp;nbsp;中共中央总书记、国家主席、中央军委主席习近平近日对中央和国家机关推进党的政治建设作出重要指示强调，中央和国家机关首先是政治机关，必须旗帜鲜明讲政治，坚定不移加强党的全面领导，坚持不懈推进党的政治建设。希望中央和国家机关各级党组织和广大党员干部牢固树立“四个意识”，坚定“四个自信”，带头维护党中央权威和集中统一领导，在深入学习贯彻新时代中国特色社会主义思想上作表率，在始终同党中央保持高度一致上作表率，在坚决贯彻落实党中央各项决策部署上作表率，建设让党中央放心、让人民群众满意的模范机关。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;习近平要求，中央和国家机关工委要强化统一领导中央和国家机关党的工作的政治担当，指导督促部委党组（党委）认真履行机关党建主体责任，以党的政治建设为统领，形成强大合力，推动全面从严治党各项举措落地见效，开创中央和国家机关党的建设和各项事业新局面。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中央和国家机关党的政治建设推进会12日在京召开。中共中央政治局委员、中央书记处书记、中央和国家机关工委书记丁薛祥在会上传达习近平总书记重要指示并讲话。&lt;/p&gt;&lt;p&gt;会议强调，中央和国家机关各单位要深入学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神，牢固树立“四个意识”，带头坚决维护习近平总书记的核心地位、坚决维护党中央权威和集中统一领导，坚持正确政治方向，严守党的政治纪律和政治规矩，严肃党内政治生活，不折不扣贯彻落实党中央决策部署，做好“三个表率”，建设“模范机关”。要彰显政治统领，坚持问题导向，融入业务工作，健全制度机制，严格责任落实，把中央和国家机关党的政治建设抓细抓实抓出成效。会议还对做好党和国家机构改革期间思想政治工作等作出安排部署。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;会上，8个部委党组（党委）负责同志作了交流发言，12个单位进行书面交流。中央和国家机关各单位机关党委书记、常务（专职）副书记和机关纪委书记参加会议。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;《 人民日报 》（ 2018年07月13日 01 版）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '3', '1', '1534387094', '0', '0', '1');
INSERT INTO `c_news` VALUES ('60', '上海探索离退休干部党建工作新路：让16万老党员离岗不离党退休不褪色', 'Uploads/2018-08-16/5b74eaf33cd87.jpg', '&lt;p&gt;从“运十”客机研制到国产大飞机C919试飞，老同志王德明以亲身经历，回顾了中国民机研制艰难而曲折的历程；年复一年绘制浦东地图，老同志沈入群讲起自己用“脚步”追赶浦东发展步伐的故事，见证着浦东开发开放一派日新月异的景象……“老同志讲述申城改革开放故事”，让年轻一代对改革开放四十年来创业者的筚路蓝缕、经济社会翻天覆地的变化有了更深切的体会，对未来上海改革发展信心更满干劲更足。&lt;br style=&quot;font-family: 微软雅黑; font-size: 18px; text-indent: 36px; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;br style=&quot;font-family: 微软雅黑; font-size: 18px; text-indent: 36px; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;这是上海市委老干部局近期开展的弘扬正能量活动的一个片段。近年来，上海以离退休干部党的建设为根本，不断加强对广大老同志的政治思想引领，组织引导老同志围绕中心、服务大局，为上海改革发展增添正能量。&lt;br style=&quot;font-family: 微软雅黑; font-size: 18px; text-indent: 36px; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;br style=&quot;font-family: 微软雅黑; font-size: 18px; text-indent: 36px; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;“上海特有的红色基因和城市精神，是做好新时代老干部工作的思想源泉。”市委老干部局相关负责人说，上海离退休干部党员分布广泛、数量众多，50万离退休干部中，党员总数达到16万、党支部6000个，约占全市总数的8%。如何更好地把他们组织起来，做到离岗不离党，退休不褪色，归根到底还是要靠离退休干部党的建设。&lt;br style=&quot;font-family: 微软雅黑; font-size: 18px; text-indent: 36px; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;br style=&quot;font-family: 微软雅黑; font-size: 18px; text-indent: 36px; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;“争当六大员，共筑中国梦”“看变化、赞成就、促发展”“畅谈十八大以来变化、展望十九大胜利召开”“不忘初心、牢记使命、支持改革、助力发展”等主题活动的开展，以及背后的通报制度、组织保障、骨干队伍建设等一系列制度的健全完善，一方面让老同志们筑牢思想根基，把好政治“总阀门”；另一方面，他们带头宣讲、现身说法，将红色基因深深植根于党员群众中。&lt;br style=&quot;font-family: 微软雅黑; font-size: 18px; text-indent: 36px; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;br style=&quot;font-family: 微软雅黑; font-size: 18px; text-indent: 36px; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;在此过程中，一个个平台载体搭建起来。浦东新区塘桥街道东方居民区离退休干部理事会是上海第一家离退休干部理事会，成员中有新中国第一代女飞行员朱敏华，抓斗大王包起帆……理事长曹开裕介绍，老同志们依兴趣、特长参加小组活动，几年来共开展时事宣讲100余场次，调解居民纠纷20多起，协调解决居民反映的问题50多个，接待处置法律咨询40多件，他们还组织健康咨询服务、筹办居民区“春晚”，居民对小区的归属感更强了。杨浦区四平路社区（街道）离休干部党支部成员平均年龄86.1岁，党支部鼓励老同志参与各项社会活动，争当党的政策宣传员、社会道德示范员、和谐社会促进员、教育后代辅导员、社会风气监督员、社区文化倡导员，以实际行动传递“六大员”正能量，成为社区居民的“贴心人”。&amp;nbsp;&amp;nbsp;&lt;br style=&quot;font-family: 微软雅黑; font-size: 18px; text-indent: 36px; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;br style=&quot;font-family: 微软雅黑; font-size: 18px; text-indent: 36px; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;随着“触网”的老同志不断增多，地域范围限制被打破，线上线下正能量实现同频共振。奉贤区“夕阳红”讲师团成员是一批德高望重、乐于奉献的离退休老干部、老战士、老专家、老教师、老模范。讲师团为青少年开展党的知识、革命传统、法制教育和心理教育宣讲3000余场次，近百万人次听讲。最近，他们开展“学十九大、讲新思想、做正能量代言人”主题宣讲活动，推动十九大精神进机关、进社区、进农村、进校园、进企业、进网络。闵行区“春申晚霞”离退休干部网宣团，组建了19个离退休干部“快乐六合院”微信群，形成了一支有300多名退休干部参与的网宣队伍，16位老同志推出原创博文近500篇，《感受四季源邻里中心》、《亮了许浦速度》等文章，在为城市发展鼓劲喝彩的同时，也不忘建言献策，促进各方面工作更好发展。&lt;br style=&quot;font-family: 微软雅黑; font-size: 18px; text-indent: 36px; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;&lt;br style=&quot;font-family: 微软雅黑; font-size: 18px; text-indent: 36px; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;老同志们更是深入基层一线，争做“最燃老党员”。耄耋老人曹鹏，曾任上海交响乐团乐队指挥，离休后，他以更大的热情投入交响乐普及这件事，定期为青少年交响乐团排练。每周六，上海城市交响乐团为自闭症儿童进行义演，曹鹏尝试着用音乐的力量为自闭症孩子打开一扇“春天的窗户”。上海师范大学原校长杨德广退休后变卖住房、捐出300多万积蓄，成立“杨德广助学基金”，用以资助奖励贫困学生。“每个人心中都有一个梦想，”杨德广说，“成就他人的梦想，自己收获的是内心的丰盈和满足。”（记者 张骏）&lt;/p&gt;', '3', '1', '1534388979', '0', '0', '0');
INSERT INTO `c_news` VALUES ('61', '习近平：切实贯彻落实新时代党的组织路线 全党努力把党建设得更加坚强有力', 'Uploads/2018-08-16/5b74ebf447cd9.jpg', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/Uploads/ueditor/image/20180816/1534389137207502.jpg&quot; title=&quot;1534389137207502.jpg&quot; alt=&quot;rmrb2018070501p26_b.jpg&quot;/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;7月3日至4日，全国组织工作会议在北京召开。&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;中共中央总书记、国家主席、中央军委主席习近平出席会议并发表重要讲话。&lt;br style=&quot;font-family: 微软雅黑; font-size: 18px; text-indent: 36px; white-space: normal; background-color: rgb(255, 255, 255);&quot;/&gt;　　新华社记者 鞠 鹏摄&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;人民网北京7月4日电&amp;nbsp;&amp;nbsp;（记者姜洁）全国组织工作会议3日至4日在北京召开。中共中央总书记、国家主席、中央军委主席习近平出席会议并发表重要讲话。他强调，中国特色社会主义进入新时代，我们党一定要有新气象新作为，关键是党的建设新的伟大工程要开创新局面。伟大斗争、伟大工程、伟大事业、伟大梦想，其中起决定性作用的是党的建设新的伟大工程。要把新时代坚持和发展中国特色社会主义这场伟大社会革命进行好，我们党必须勇于进行自我革命，把党建设得更加坚强有力。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;习近平强调，组织路线对坚持党的领导、加强党的建设、做好党的组织工作具有十分重要的意义。新时代党的组织路线是：全面贯彻新时代中国特色社会主义思想，以组织体系建设为重点，着力培养忠诚干净担当的高素质干部，着力集聚爱国奉献的各方面优秀人才，坚持德才兼备、以德为先、任人唯贤，为坚持和加强党的全面领导、坚持和发展中国特色社会主义提供坚强组织保证。新时代党的组织路线是理论的也是实践的，要在推进党的建设新的伟大工程、落实全面从严治党的实践中切实贯彻落实。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中共中央政治局常委、中央书记处书记王沪宁，中共中央政治局常委、中央纪委书记赵乐际出席会议。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;习近平在讲话中指出，党的十八大之后，党中央作出全面从严治党的战略部署，以坚定决心、顽强意志加以推进，坚持和加强党的全面领导，坚持新时代党的建设总要求，坚持党要管党、全面从严治党，坚持把党的政治建设摆在首位，坚持思想建党和制度治党同向发力，坚持贯彻新时期好干部标准，坚持强基固本，坚持正风肃纪、严惩腐败，党内政治生态明显好转，党的创造力、凝聚力、战斗力显著增强，党群关系明显改善，党在革命性锻造中更加坚强，以党的伟大自我革命推动了伟大的社会革命。实践深化了我们对马克思主义执政党建设规律的认识。对我们取得的实践成果和理论成果必须长期坚持，并不断丰富发展。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;习近平强调，党的十八大以来，我们推进全面从严治党取得了显著成效，但还远未到大功告成的时候。我们党面临的“四大考验”、“四种危险”是长期的、尖锐的，影响党的先进性、弱化党的纯洁性的因素也是复杂的，党内存在的思想不纯、政治不纯、组织不纯、作风不纯等突出问题尚未得到根本解决。特别是要看到，在新时代，我们党领导人民进行伟大社会革命，涵盖领域的广泛性、触及利益格局调整的深刻性、涉及矛盾和问题的尖锐性、突破体制机制障碍的艰巨性、进行伟大斗争形势的复杂性，都是前所未有的。我们必须增强忧患意识、责任意识，把党的伟大自我革命进行到底。要全面贯彻新时代党的建设总要求，不断提高党的建设质量，把党建设成为始终走在时代前列、人民衷心拥护、勇于自我革命、经得起各种风浪考验、朝气蓬勃的马克思主义执政党。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;习近平强调，党的力量来自组织。党的全面领导、党的全部工作要靠党的坚强组织体系去实现。党中央是大脑和中枢，党中央必须有定于一尊、一锤定音的权威。党的地方组织的根本任务是确保党中央决策部署贯彻落实，有令即行、有禁即止。党组在党的组织体系中具有特殊地位，要贯彻落实党中央和上级党组织决策部署。每个党员特别是领导干部都要强化党的意识和组织观念，自觉做到思想上认同组织、政治上依靠组织、工作上服从组织、感情上信赖组织。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;习近平指出，加强党的基层组织建设，关键是从严抓好落实。要以提升组织力为重点，突出政治功能，健全基层组织，优化组织设置，理顺隶属关系，创新活动方式，扩大基层党的组织覆盖和工作覆盖。要加强企业、农村、机关、事业单位、社区等各领域党建工作，推动基层党组织全面进步、全面过硬。要加强社会组织党的建设，探索加强新兴业态和互联网党建工作。要加强支部标准化、规范化建设。基层党组织要在贯彻落实中发挥领导作用，强化政治引领，发挥党的群众工作优势和党员先锋模范作用，引领基层各类组织自觉贯彻党的主张，确保基层治理正确方向。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;习近平强调，提高党的建设质量，是党的十九大总结实践经验、顺应新时代党的建设总要求提出的重大课题。提高党的建设质量，既要坚持和发扬我们党加强自身建设形成的优良传统和成功经验，又要根据党的建设面临的新情况新问题大力推进改革创新，用新的思路、举措、办法解决新的矛盾和问题。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;习近平指出，贯彻新时代党的组织路线，建设忠诚干净担当的高素质干部队伍是关键，重点是要做好干部培育、选拔、管理、使用工作。要建立源头培养、跟踪培养、全程培养的素质培养体系，教育引导干部加强党性修养、筑牢信仰之基，加强政德修养、打牢从政之基，严守纪律规矩、夯实廉政之基，健全基本知识体系、强化能力之基，增强干部素质培养的系统性、持续性、针对性。要建立日常考核、分类考核、近距离考核的知事识人体系，强化分类考核，近距离接触干部，使选出来的干部组织放心、群众满意、干部服气。要建立以德为先、任人唯贤、人事相宜的选拔任用体系，坚持好干部标准，把政治标准放在第一位，坚持五湖四海、任人唯贤，广开进贤之路，坚持事业为上，以事择人、人岗相适。要建立管思想、管工作、管作风、管纪律的从严管理体系，加强全方位管理，加强党内监督，管好关键人、管到关键处、管住关键事、管在关键时，特别是要把一把手管住管好。要建立崇尚实干、带动担当、加油鼓劲的正向激励体系，树立体现讲担当、重担当的鲜明导向。要真情关爱干部，帮助解决实际困难，关注身心健康，对基层干部特别是困难艰苦地区和奋战在脱贫攻坚第一线的干部要给予更多理解和支持。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;习近平强调，千秋基业，人才为本。要加快实施人才强国战略，确立人才引领发展的战略地位，努力建设一支矢志爱国奉献、勇于创新创造的优秀人才队伍。要深化人才发展体制机制改革，最大限度把广大人才的报国情怀、奋斗精神、创造活力激发出来。要完善人才培养机制，改进人才评价机制，创新人才流动机制，健全人才激励机制。要实行更加积极、更加开放、更加有效的人才引进政策，聚天下英才而用之。要广泛宣传表彰爱国报国、为党和人民事业作出突出贡献的优秀人才，在知识分子和广大人才中大力弘扬爱国奉献精神。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;习近平指出，实现中华民族伟大复兴，坚持和发展中国特色社会主义，关键在党，关键在人，归根到底在培养造就一代又一代可靠接班人。这是党和国家事业发展的百年大计。要建设一支忠实贯彻新时代中国特色社会主义思想、符合新时期好干部标准、忠诚干净担当、数量充足、充满活力的高素质专业化年轻干部队伍。优秀年轻干部必须对党忠诚，坚持走中国特色社会主义道路，坚定不移听党话、跟党走。优秀年轻干部要有足够本领来接班，加强学习、积累经验、增长才干，自觉向实践学习、拜人民为师。要沉下心来干工作，心无旁骛钻业务，干一行、爱一行、精一行。要信念如磐、意志如铁、勇往直前，遇到挫折撑得住，关键时刻顶得住，扛得了重活，打得了硬仗，经得住磨难。优秀年轻干部要把当老实人、讲老实话、做老实事作为人生信条。要教育引导年轻干部强化自我修炼，正心明道，防微杜渐，做到有原则、有底线、有规矩。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;习近平强调，优秀年轻干部既要数量充足，又要质量优良。各地区各部门要着眼近期需求和长远战略需要，培养选拔一定数量规模的优秀年轻干部。培养选拔优秀年轻干部要放眼各条战线、各个领域、各个行业，注意培养有专业背景的复合型领导干部。对有潜力的优秀年轻干部，还要让他们经受吃劲岗位、重要岗位的磨炼，把重担压到他们身上。对有培养前途的优秀年轻干部，要不拘一格大胆使用。各级党委要把关心年轻干部健康成长作为义不容辞的政治责任，加强长远规划，健全工作责任制，及时发现、培养起用优秀年轻干部。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;习近平指出，各级党委（党组）要加强对党的建设的领导，扛起主责、抓好主业、当好主角，把每条战线、每个领域、每个环节的党建工作抓具体、抓深入。党委（党组）书记作为第一责任人，推动党建责任层层落实落地，把党建工作抓实、抓细、抓到位。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中共中央政治局委员、中央组织部部长陈希在总结讲话中指出，要深入学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神，贯彻落实习近平总书记关于党的建设和组织工作重要思想，坚决维护习近平总书记的核心地位，坚决维护党中央权威和集中统一领导，践行新时代党的组织路线，落实新时代党的建设总要求，不断提高组织工作质量和水平，为决胜全面建成小康社会、夺取新时代中国特色社会主义伟大胜利提供坚强组织保证。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;北京市、天津市、福建省、水利部、中国铝业集团有限公司、哈尔滨工业大学负责同志作交流发言。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;部分中共中央政治局委员，中央书记处书记出席会议。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中央党的建设工作领导小组成员，各省区市和计划单列市、新疆生产建设兵团，中央和国家机关有关部门、有关人民团体，有关金融机构、国有大型企业和高校，军队有关单位负责同志等参加会议。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;《 人民日报 》（ 2018年07月05日 01 版）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '3', '0', '1534389236', '0', '0', '1');
INSERT INTO `c_news` VALUES ('62', '【廉政建设】营管局、直属审计分局开展廉政教育', 'Uploads/2018-08-16/5b74f13f5c3cb.jpg', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;营运管理局&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&lt;br/&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img data-ratio=&quot;0.667192429022082&quot; data-type=&quot;jpeg&quot; data-w=&quot;1268&quot; data-s=&quot;300,640&quot; data-copyright=&quot;0&quot; data-src=&quot;https://mmbiz.qpic.cn/mmbiz_jpg/FkhMQGYvHxN2I6aUJ5AoQIMkEI22xCtBaGMc3bWSH7WZQqpuuibch9smN9ic7VbwBEBRlWvsb1zYYbJJjsnrdkqQ/640?wx_fmt=jpeg&quot; _width=&quot;394px&quot; class=&quot;&quot; src=&quot;https://mmbiz.qpic.cn/mmbiz_jpg/FkhMQGYvHxN2I6aUJ5AoQIMkEI22xCtBaGMc3bWSH7WZQqpuuibch9smN9ic7VbwBEBRlWvsb1zYYbJJjsnrdkqQ/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1&quot; data-fail=&quot;0&quot; style=&quot;margin: 0px; padding: 0px; height: auto !important; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; width: 394px !important; visibility: visible !important;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;近日，营运管理局党支部组织干部员工参观了北京市全面从严治党警示教育基地，以案为鉴，知止知畏，接受廉政警示教育。&lt;/p&gt;&lt;p&gt;参观人员跟随讲解员观看了十八大以来北京市坚决正风肃纪、严肃问责的典型案例，学唱了歌曲《我宣誓》，观看了《中国共产党纪律处分条例》宣传片，并重温了入党誓词。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;大家一致表示，展示中的解说、图片、视频，无不令人唏嘘；铁窗、白发、泪水，更是震撼心灵。要以案为训，常怀律己之心，常思贪欲之害；时刻做到明底线、懂规矩、守纪律，不忘初心，牢记使命，筑就坚固的廉洁自律防线，始终保持共产党人的纯洁本色。&lt;/p&gt;&lt;p&gt;&lt;br style=&quot;margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;&quot;/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;strong&gt;直属审计分局&lt;/strong&gt;&lt;br style=&quot;margin: 0px; padding: 0px; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&lt;br/&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img class=&quot;&quot; data-croporisrc=&quot;https://mmbiz.qpic.cn/mmbiz_jpg/FkhMQGYvHxPEmV3Zr1fpCFb189fiaicpUTtibv0YOqQAQbxC4ibaXTHaTrEUtnII2MrFh1jPD5Y3k8LTGIok3enqBA/0?wx_fmt=jpeg&quot; data-cropx1=&quot;0&quot; data-cropx2=&quot;1280&quot; data-cropy1=&quot;0&quot; data-cropy2=&quot;890.2970297029703&quot; data-s=&quot;300,640&quot; data-src=&quot;https://mmbiz.qpic.cn/mmbiz_jpg/FkhMQGYvHxPEmV3Zr1fpCFb189fiaicpUT0Tfv3y6Y3a6HTSpYmZYoj0CCaRSGy95V7KdGIOZtwS2PpibMbuKIKng/640?wx_fmt=jpeg&quot; data-type=&quot;jpeg&quot; data-ratio=&quot;0.6953703703703704&quot; data-w=&quot;1080&quot; _width=&quot;404px&quot; src=&quot;https://mmbiz.qpic.cn/mmbiz_jpg/FkhMQGYvHxPEmV3Zr1fpCFb189fiaicpUT0Tfv3y6Y3a6HTSpYmZYoj0CCaRSGy95V7KdGIOZtwS2PpibMbuKIKng/640?wx_fmt=jpeg&amp;tp=webp&amp;wxfrom=5&amp;wx_lazy=1&quot; data-fail=&quot;0&quot; style=&quot;margin: 0px; padding: 0px; height: auto !important; max-width: 100%; box-sizing: border-box !important; word-wrap: break-word !important; width: 404px !important; visibility: visible !important;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;8月8日，直属审计分局党支部书记臧国平与新任处级干部签署了《国家开发银行总行机关新任处级干部廉政提示》。臧国平向3名新任处级干部宣读了《廉政提示》的五项要求，并强调，一是坚守廉洁自律底线是每一名开行员工的责任，也是审计人员职业操守的要求，必须时刻拧紧党风廉政之弦。二是作为新任处级干部，要以更高的标准要求自己，发挥模范带头作用，并自觉接受广大员工的监督，树立审计人的良好形象。三是要加强自身建设，牢记习近平总书记在中央审计委员会第一次会议上对专业化审计干部队伍提出的“信念坚定、业务精通、作风务实、清正廉洁”要求，不断提高、奋发有为，在新的岗位上做出更大贡献。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1534390591', '0', '0', '1');
INSERT INTO `c_news` VALUES ('63', '广东省委常委、统战部部长曾志权接受 中央纪委国家监委纪律审查和监察调查', 'Uploads/2018-08-16/5b74f5bd47253.jpg', '&lt;p&gt;广东省委常委、统战部部长曾志权涉嫌严重违纪违法，目前正接受中央纪委国家监委纪律审查和监察调查。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;曾志权简历&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;曾志权，男，汉族，1963年1月生，广东五华人，1984年12月入党，1986年7月参加工作，中南财经大学商业经济系商业经济专业毕业，大学学历，高级管理人员工商管理硕士，高级会计师。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1982-1986年 中南财经大学商业经济系商业经济专业学习&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1986-1989年 广东省财政厅企业财务处科员&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1989-1992年 广东省财政厅企业财务处副主任科员&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1992-1995年 广东省财政厅企业财务处主任科员&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1995-2000年 广东省财政厅工交内贸处副处长（其间：1995.02-1995.07五华县农村基层组织建设工作队副队长）&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2000-2003年 广东省财政厅农业处处长（其间：2001.03-2001.07省委党校中青年干部培训班学习；2002.09-2002.12省委派驻潮阳市仙城镇“三个代表”再教育工作组组长）&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2003-2007年 广东省财政厅副厅长、党组成员（其间：2005.10-2007.07中山大学管理学院高级管理人员工商管理硕士专业学习，获高级管理人员工商管理硕士学位）&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2007-2010年 广东省财政厅副厅长、党组副书记&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2010年 广东省财政厅厅长、党组书记&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2017.05 广东省委常委，省财政厅厅长、党组书记&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2017.06 广东省委常委&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2018.04 广东省委常委、统战部部长&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;第十一届、十二届广东省委委员。（简历摘自人民网）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1534391741', '0', '0', '1');
INSERT INTO `c_news` VALUES ('64', '中央纪委国家监委：如何理解被调查人自动投案？', 'Uploads/2018-08-16/5b74f65e2b78a.jpg', '&lt;p&gt;编者按：《中华人民共和国监察法》颁布实施以来，很多读者在中央纪委国家监委网站留言板提出有关问题咨询，为帮助大家更好地学习监察法，回应社会关切，中央纪委国家监委网站摘编了中央纪委国家监委法规室编写的《〈中华人民共和国监察法〉学习问答》一书中的部分内容，供大家学习参考，敬请关注。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;问：如何理解被调查人自动投案？&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;答：自动投案主要有以下几种情形：被调查人犯罪以后，犯罪事实未被监察机关发现以前；或者犯罪事实虽被发现，但不知何人所为；或者犯罪事实和被调查人均已被发现，但是尚未受到监察机关的询问、讯问或者尚未采取留置措施之前，主动到监察机关或者所在单位、基层组织等投案，接受调查。被调查人犯罪后逃到异地，又向异地的监察机关投案的，以及被调查人因患病、身受重伤，委托他人先行代为投案的，也属于自动投案。有的被调查人在投案的途中被捕获，只要查证属实的，也属于投案。有的被调查人投案并非完全出于自己主动，而是经亲友劝告，由亲友送去投案，对于这些情形也应认定为投案。但被调查人投案后又逃跑的，不能认定为自动投案。（摘自中央纪委国家监委法规室编写的《〈中华人民共和国监察法〉学习问答》）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '7', '0', '1534391902', '0', '0', '0');
INSERT INTO `c_news` VALUES ('65', '【数说这半年】打掉了群众身边哪些&quot;蝇贪&quot;', 'Uploads/2018-08-16/5b74f6dbc4fbb.jpg', '&lt;p&gt;7月19日，中央纪委国家监委网站公布了今年上半年全国纪检监察机关监督检查、审查调查情况。在此前后，各地纪检监察机关陆续公布了半年“成绩单”。仅从中央纪委国家监委网站公开通报的情况看，今年上半年至少曝光了来自全国31个省、市、自治区的515起群众身边的腐败和作风问题，涉及人员中既有党政机关和事业单位的领导干部，也有农村党员干部等。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;通过梳理，我们不难看出，整治群众身边腐败问题正在向纵深发展。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;/Uploads/ueditor/image/20180816/1534391968822999.jpg&quot; style=&quot;border: none;&quot;/&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;上半年中央纪委国家监委网站通报的群众身边腐败和作风问题主要类型&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;在公布的查处问题中，惠农领域违纪问题最为突出，共通报179起，约占35%；集体“三资”违纪问题129起，约占25%，还涉及土地征收违纪问题、吃拿卡要、以权谋私等其他违纪问题。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;/Uploads/ueditor/image/20180816/1534391968514435.jpg&quot; style=&quot;border: none;&quot;/&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;上半年中央纪委国家监委网站通报的群众身边腐败和作风问题违纪人员主要类型&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;通报的违纪人员中，村居干部最多，为322人，约占全部人数的60%；乡镇干部120人，占比为23%，其他干部102人。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;/Uploads/ueditor/image/20180816/1534391968359379.jpg&quot; style=&quot;border: none;&quot;/&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;上半年中央纪委国家监委网站通报的群众身边腐败和作风问题违纪情形主要分类&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;违纪情形中，截留类、违规发放类、挪用类、收受财物类总占比约30%，履职不严类约占28%，套取类约占22%，侵占类约占13%。其他问题类型还包括优亲厚友、涉黑涉恶、私设小金库、虚报冒领坟墓拆迁补偿款、骗取国家征地补偿款、利用职务影响谋利等。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“老虎”要露头就打，“苍蝇”乱飞也要拍。从数据看，全面从严治党不断向基层延伸，特别是从着力解决群众最关心、最直接、最现实的利益问题入手，通过坚强有力的监督执纪问责，强化了对基层权力运行的规范和对干部廉洁履职的监督。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;围绕打赢脱贫攻坚战，开展扶贫领域腐败和作风问题专项治理。比如，在四川近期通报的6起群众身边腐败和作风问题中，自贡市自流井区尖山湖管理所、胜利水库管理所副所长邹群违规侵占群众钱财；泸州市龙马潭区罗汉街道临港社区党委原书记黄平等人违规套取青苗补偿款；广元市朝天区马家坝乡七一村党支部原书记王长森等人违规分配公益林……涉案人员有的费尽心思骗取，有的明目张胆作假，有的屡屡挪用贪占，这些问题严重损害贫困群众的切身利益，直接影响脱贫攻坚工作成效。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;今年上半年，各地盯紧扶贫领域，严肃查处精准扶贫作风不实、敷衍塞责等问题。扶贫领域失职失责典型案例中，既有履职不力、不作为慢作为、审核把关不严的，也有底数不清、情况不明、弄虚作假的。例如，在西安通报的5起扶贫领域腐败和作风问题典型案例中，有新城区工商联综合科原科长魏亚荣违规管理扶贫捐助款，临潼区仁宗街道官沟村党支部书记蔡排违规为他人申报危房改造资金等问题。这些行为严重损害群众利益，影响脱贫攻坚进程，必须严肃追责问责。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;把惩治基层腐败同扫黑除恶结合起来，坚决查处涉黑“保护伞”。“打蛇要打七寸”，黑恶势力的“七寸”，就是掌握一定权力并为其充当“保护伞”的腐败分子。例如，在福建通报的5起涉黑涉恶腐败和充当&amp;quot;保护伞&amp;quot;案件中，福州市长乐区公安局潭头派出所原综合室主任余永锋多次收受辖区内赌场经营者王某、施某等人钱款合计人民币30.1万元，利用负责查处赌场的工作便利，为其通风报信，致使相关赌场逃避查处，长期经营渔利。对于在扫黑除恶专项斗争中发现的“保护伞”问题线索，各级纪检监察机关坚持优先处置，发现一起、查处一起，不管涉及谁，都一查到底、绝不姑息。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;严查在土地征收、惠民补贴、低保医保等领域“雁过拔毛”、虚报冒领、贪污侵占、优亲厚友等行为。广东省纪委近期通报一起基层干部骗取私分危房改造补助资金问题，严肃查处了河源市连平县内莞镇塘兴村党支部书记周维俊等7人。案件中的违法违纪问题之多、涉及领域之广，令人震惊。一是虚报冒领：2011年至2014年期间，周维俊等在得知国家出台危房改造补助政策后，收集村民身份证件，暗中编造191户虚假危房改造补助资金申请材料，骗取补助资金共286.5万元，分批将原本打入村民账户中的全部补助资金转存入个人账户。二是贪污私分：2015年，周维俊等人通过虚构村委会办公楼维修加固工程承包合同，套取286.5万元中的49.4万元私分。三是违规使用：2012年至2013年期间，周维俊等人挪用286.5万元中的52.9万元，用于支付该村的水利工程款、道路建设工程款和村民沿路房屋墙壁的维修、粉刷等费用。四是“雁过拔毛”：2011年至2013年期间，内莞镇政府分管危房改造工作的副镇长邱永辉与塘兴村干部合谋，以申报时间紧、统一办理申请资料为由，向全村271户危房改造户每户收取50元的“办公费”共1.35万元。五是失职失责：连平县扶贫办、县危房改造验收小组和内莞镇党委、政府、纪委的相关人员履职尽责不力，建房前不认真审核村干部上报的申请材料，建房后不认真验收，不认真监督危房改造补助资金的发放。这一案例，非常典型地说明了“微腐败”的复杂性。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;从上半年数据看，只有不断加大整治群众身边腐败问题力度，才能让人民群众不断感受到更多的获得感、幸福感、安全感。（中央纪委国家监委网站 杨文佳）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1534392027', '0', '0', '1');
INSERT INTO `c_news` VALUES ('66', '不负党中央重托 打开工作新局面——中央纪委重建之初各项工作的展开', 'Uploads/2018-08-16/5b7520a575aa0.jpg', '&lt;p&gt;恢复重建之初，在党中央的领导下，中央纪委严格履行党章赋予的职责，一方面，推动拨乱反正，全面平反冤假错案，落实各项政策，审查林彪、“四人帮”两个反革命集团等案件；另一方面，整顿和端正党风，维护党的纪律，打击经济领域犯罪活动，为改革开放和社会主义现代化建设提供坚强有力的纪律保证。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;审查“两案”&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;审查“两案”是中央纪委重建之初的一项重要工作。“文化大革命”结束后，在揭批“四人帮”反党罪行时，人民群众就提出“把‘四人帮’交给人民审判”的要求。党的十一届三中全会以后，全国人民殷切期待和迫切要求依纪依法对危害人民民主专政的林彪、江青反革命集团进行审判。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中共中央决定，由中央纪律检查委员会负责林彪、江青反革命集团的审理。中央纪律检查委员会为此成立了由胡耀邦任组长的审理工作领导小组。随后，又成立了负责日常工作的中央纪律检查委员会第二办公室（简称中央纪委二办）。陈云对“两案”审理作了重要指示，要求“必须实事求是，查清事实，核实材料，再处理问题，与本人见面。”&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中央纪委二办经过8个多月的艰苦努力，进行了大量内查外调、提审、完善证据等工作，完成了“两案”审查任务。审查结果证明，林彪、江青一伙确有触犯刑律的罪行，应移送司法部门依法追究刑事责任。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;1980年2月，中央决定，结束党内审查，追究“两案”主要涉案者的刑事责任，交由司法机关审判。1981年1月25日，最高人民法院特别法庭对10名主犯分别作出死缓至有期徒刑的判决，得到全党、全国人民的广泛拥护。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;这一时期，中央纪委还重点审查康生、谢富治等问题，向中央提交《关于康生、谢富治的两个审查报告》。1980年10月16日，中共中央决定，把康生、谢富治的反革命罪行向全党公布，撤销对这两个人的悼词，开除他们的党籍。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;这些重大案件的严肃和妥善处理，对于明辨“文化大革命”中的是非，推动纠正冤假错案工作的进一步开展，实现拨乱反正，起到了重要作用。&lt;/p&gt;&lt;p&gt;平反冤假错案&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;粉碎“四人帮”之后，党开始对冤假错案进行重新审查，对受迫害的人进行平反。1978年年底，党的十一届三中全会重新确立了实事求是的思想路线，为平反冤假错案铺平了道路。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;刚刚恢复重建的中央纪委在平反冤假错案中发挥了重大作用。1979年1月，中央纪委第一次全体会议就强调，冤案、错案、假案一经发现，就要坚决纠正。一切不实之词，一切不正确的结论，一切错误的处理，不论是什么时候、什么情况下作出的，不论是哪一级组织、哪个领导人批准的，都要纠正过来。此后，平反冤假错案工作全面展开。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;平反冤假错案任务异常艰巨繁重。向中央纪委反映情况的来信不断涌来，公安部门转来的信件则是用麻袋装运，有人回忆当时的情景，真可谓是“积案如山”“积信如山”。根据工作安排，中央纪委的副书记、常委、委员带领工作组到11个省市和单位调查研究，督促解决平反冤假错案工作遇到的阻力和实际问题，全面开展冤假错案的复查平反工作。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;1979年2月，党中央决定由中央纪委、中央组织部联合开展对刘少奇冤案的复查工作。历时一年时间，中央纪委、中央组织部根据事实材料，完全推翻强加给刘少奇的种种罪名，恢复了刘少奇作为伟大的马克思主义者和无产阶级革命家、党和国家主要领导人之一的名誉。这一“文化大革命”中最大冤案的平反，大大推动平反冤假错案工作进程。1980年10月，中央纪委提交《关于瞿秋白被捕问题的复查报告》，经中共中央办公厅批转全党，为瞿秋白同志彻底平反，恢复了名誉。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;经过大量艰苦细致的工作，至1982年底，全国大规模平反冤假错案工作基本结束。全国共纠正了300多万名干部的冤假错案，47万多名共产党员恢复了党籍，给12万多名党员撤销原给予的错误处分。所有这些，使党实事求是的优良传统得以恢复和发扬。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;纠正党内不正之风&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中央纪委恢复重建伊始，就把抓党风作为首要工作。1980年2月，十一届五中全会正式通过《关于党内政治生活的若干准则》，为整顿党风提供了重要依据。1980年11月，陈云提出“执政党的党风问题是有关党的生死存亡的问题”的著名论断，要求“党风问题必须抓紧搞，永远搞”。邓小平赞同陈云的意见，并进一步提出：“要严格执行《关于党内政治生活的若干准则》，坚持不懈地纠正各种不正之风，特别要坚决反对对党中央的路线、方针、政策采取阳奉阴违、两面三刀的错误态度。”随后，结合传达陈云论断精神，全党普遍进行一次深入学习准则活动和对党风状况的大检查。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;为配合对党风、政风的整顿，中央纪委会同有关部门制定相关党内法规。譬如1979年，中央纪委代中央起草《关于高级干部生活待遇的若干规定》。为推动该规定贯彻执行，邓小平在中央党、政、军机关副部长以上干部会议上，专门作题为《高级干部要带头发扬党的艰苦朴素、密切联系群众的优良传统》的报告。他指出：“为了整顿党风，搞好民风，先要从我们高级干部整起。”“这个规定一经中央和国务院下达，就要当作法律一样，坚决执行，通也要执行，不通也要执行。”1979年11月10日，该规定以中共中央、国务院的名义正式颁布实行。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;此外，中央纪委还制定发出《关于禁止在外事、外贸活动中随便接受和私自处理礼品的通知》《关于严肃党纪、杜绝“关系户”不正之风的通告》等等党内法规。这些党内法规的制定，为整顿党风提供了基本遵循和有力武器，有效地促进党风的明显好转。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;打击经济领域犯罪活动&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;十一届三中全会以后，我国经济社会快速发展起来，但由于制度和政策的不健全，不可避免地出现了一些负面现象，如走私贩私、贪污受贿、投机诈骗、侵占国家和集体财产等犯罪活动，使刚开始实施的对外开放政策受到了严重的干扰和破坏。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;经济领域出现的这些乱象，引起了党中央的高度重视。1982年1月11日，中共中央向全党发出《紧急通知》，正式部署了打击走私贩私等经济犯罪行为的斗争。3月8日，第五届全国人大常委会第二十二次会议通过《关于严惩严重破坏经济的罪犯的决定》，对《刑法》中的有关条款作了相应的补充和修改。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;同年4月10日，邓小平在中央政治局会议上在谈到经济领域犯罪活动的严重性和危害性时指出：“如果我们党不严重注意，不坚决刹住这股风，那么，我们党和国家确实要发生会不会‘改变面貌’的问题。这不是危言耸听。”他要求：“现在刹这个风，一定要从快从严从重。”他进一步提出了“两手抓”的方针，即“一手就是坚持对外开放和对内搞活经济的政策，一手就是坚决打击经济犯罪活动。”随后，中共中央、国务院发布《关于打击经济领域中严重犯罪活动的决定》，强调“党的各级纪律检查委员会应当成为党委领导这场斗争的坚强有力的办事机构”。一场打击经济领域犯罪活动的斗争，随之在全国迅速展开起来。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;按照党中央的部署，中央纪委成立打击经济领域犯罪活动斗争办公室，先后派出154名具有丰富斗争经验的司局级以上干部，分赴京、沪、粤、闽、浙等省市充实加强办案力量，直接参与大案、要案的调查处理工作。中国电子技术进出口公司深圳分部走私案，原中共广东省汕头地委政法委员会副主任，前海丰县委书记、县革委会主任王仲贪污受贿案等，都是由中央纪委参与查办的。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;总之，恢复重建之初，中央纪委不负党中央重托，在审查“两案”、平反冤假错案、纠正不正之风、打击经济领域犯罪等中发挥了重要作用，开创了纪检工作新局面。所有这些卓有成效的工作，对于恢复和发扬党的实事求是的思想路线，严肃党的纪律、纯洁党的组织，教育广大党员干部，保证社会主义现代化建设和改革开放的顺利进行，具有十分重大的意义。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;（作者李东方 陈坚 单位：中央党史和文献研究院）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1534402725', '0', '0', '1');
INSERT INTO `c_news` VALUES ('67', '中纪委：6月全国9519人违反中央八项规定精神受处理', 'Uploads/2018-08-16/5b7521f95aaf3.jpg', '&lt;p&gt;人民网北京7月30日电&amp;nbsp;&amp;nbsp;（记者赵兵）中央纪委国家监委网站30日发布消息：今年6月全国共查处违反中央八项规定精神问题6692起，9519人受到处理，6802人受到党纪政务处分。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;从公布的情况看，6月份查处问题中，违规发放津补贴或福利1625起，违规配备使用公务用车1085起，违规收送礼品礼金1082起，违规公款吃喝917起，提供或接受超标准接待、接受或用公款参与高消费娱乐健身活动、违规出入私人会所、领导干部住房违规、违规接受管理服务对象宴请等问题733起，大办婚丧喜庆642起，公款旅游409起，楼堂馆所违规问题199起。6月因违反中央八项规定精神受到党纪政务处分的干部中，地厅级85人、县处级613人。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;《 人民日报 》（ 2018年07月31日 04 版）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1534403065', '0', '0', '0');
INSERT INTO `c_news` VALUES ('68', '2018年上半年全国查处违反中央八项规定精神问题2.5万多起 处理3.6万多人', 'Uploads/2018-08-16/5b75225c00ebe.jpg', '&lt;p&gt;中央纪委国家监委网站30日发布数据显示，截至6月30日，2018年上半年全国查处违反中央八项规定精神问题25677起，处理36618人，给予党纪政纪处分26029人。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;最新公布的数据显示，2018年6月，全国查处违反中央八项规定精神问题6692起，处理9519人，给予党纪政纪处分6802人。今年1至6月，全国查处违反中央八项规定精神问题分别为4058起、2516起、3516起、3922起、4973起、6692起。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;从上半年查处的违反中央八项规定精神问题类型看，违规发放津补贴或福利6429起、违规收送礼品礼金4516起、违规配备使用公务用车4094起、违规公款吃喝3306起、大办婚丧喜庆2651起、公款国内旅游1275起、楼堂馆所违规问题909起、公款出国境旅游73起、其他问题2424起。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;2018年上半年，共有1名省部级干部、527名地厅级干部、3906名县处级干部，因违反中央八项规定精神问题被处理。（新华社北京7月30日电 记者 朱基钗）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;(责编：常雪梅、程宏毅)&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1534403163', '0', '0', '1');
INSERT INTO `c_news` VALUES ('69', '举一反三 引以为戒——中央纪委曝光7起问责典型案例之后（下）', 'Uploads/2018-08-16/5b7522e69d79c.jpg', '&lt;p&gt;6月27日，中央纪委公开曝光7起落实管党治党主体责任和监督责任不力被问责的典型案例，引发各界广泛关注。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;各地区各部门举一反三，主动对照案例，积极查找自身存在的薄弱问题，曝光各自查处落实“两个责任”不力的典型案例，推动各级党组织和党员领导干部自觉担负起管党治党的政治责任。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;把自身摆进去，对照检查问题&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“现将您分管部门党组织今年上半年党风廉政建设有关提醒事项清单报送给您，请按照‘一岗双责’有关要求，严格督促、指导相关部门切实加强整改……”近日，江西省宁都县某副县长收到了一份来自县党风廉政建设责任制领导小组办公室发出的履责提示函。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;江西省宁都县对照中央纪委通报要求，自7月5日开始，由县委常委和副县长分别带队，协同县纪委监委有关人员，对各部门落实管党治党主体责任情况进行专项督导检查。对检查中问题突出的部门，严肃追究当事人责任，并向县委、县政府分管领导报送党风廉政建设履责提示函，督促履行好“一岗双责”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中央纪委曝光7起典型案例后，各地区各单位把自己摆进去，认真对照检查，坚持问题导向，紧盯中央八项规定精神不落实、贯彻中央脱贫攻坚决策部署不坚决不到位、污染防治攻坚战中工作推动不力等重点问题。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;安徽省霍山县结合实际情况，对前期查处的扶贫领域违规违纪问题进行梳理，问责了一批党组织和领导干部，并于7月12日公开曝光了9起失职失责典型案例。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;云南省纪委监委连续通报了6批49起生态环境损害责任追究典型问题。自中央第六环保督察组进驻云南以来，截至7月5日督察工作结束，共转交云南省办理群众举报投诉环境问题1959件，目前已办结1346件，问责764人、单位51个。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;云南省纪委监委有关负责人表示，要深刻汲取中央纪委曝光典型案例的教训，开展生态环境保护领域监督执纪问责和监督调查处置，推动地方各级党委、政府及相关部门认真贯彻落实党中央和省委的决策部署，切实履行生态环境保护职责。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;层层传导压力，曝光典型案例已成常态&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中央纪委曝光典型案例2天后，贵州省纪委监委也通报了4起落实主体责任不力被问责的典型问题，包括遵义市播州区农牧局原党组书记、局长王健在内的多人受到党纪政务处分。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;2016年6月至2017年11月，王健在担任播州区农牧局党组书记、局长期间，该局1名副局长、2名干部、1名工作人员因利用职务便利为他人谋取利益，索要、收受他人礼品礼金等问题，分别受到开除公职、开除党籍处分，涉嫌犯罪问题被移送司法机关依法处理。2018年4月，因落实主体责任不力，王健受到党内警告处分。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“这一案例警示我们，落实主体责任决不能当‘甩手掌柜’，必须把担子担起来，扎扎实实种好自己的‘责任田’。”播州区纪委副书记、区监委副主任刘华说。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;6月28日，四川省成都市纪委监委通报5起落实全面从严治党“两个责任”不力被问责的典型案例；7月4日，江苏省南通市纪委监委通报4起落实全面从严治党责任不力被问责的典型案例。辽宁、陕西、湖北等地也对一批被问责典型问题公开曝光……&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;如今，对落实管党治党“两个责任”不力典型问题通报曝光，已经成为各地的规定动作。据统计，2017年，中央纪委共通报曝光12起管党治党不力被问责典型问题，各省区市和新疆生产建设兵团党委、纪委共通报曝光204起典型问题。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“党的十八大以来，问责已经成为全面从严治党的重要抓手。建立问责典型问题通报曝光制度，既体现了‘严’和‘实’的精神，也可以通过一个个具体鲜活的案例，发挥警示作用，唤醒责任意识，激发担当精神，真正做到‘惩前毖后、治病救人’。”中央党校教授辛鸣说。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;认真履职，督促主体责任落实&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“6月6日与州委常委班子成员开展廉政提醒谈话；召开两次州委常委会研究省委巡视整改工作；6月29日到文山市喜古乡新寨村党总支讲党课……”&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;7月初，云南省文山壮族苗族自治州党风廉政建设责任制工作领导小组办公室收到了州委书记童志云交来的今年第二季度落实主体责任的“作业”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;在全面从严治党、加强党风廉政建设和反腐败工作中，党委履行主体责任，纪委履行监督责任。各级纪检监察机关认真履职，为党委主体作用的发挥提供有效载体、当好参谋助手。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;以上海市闵行区为例，该区纪委监委改变以往“年初一张‘责任清单’管全年”的做法，对巡视巡察、日常监督等工作中发现的处级领导班子及其成员在党风廉政建设方面存在的问题认真梳理，以书面形式抄告给分管或联系该单位的区领导。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;该区还要求，收到抄告的区领导要及时督促分管单位在规定时间内落实整改，并填写整改情况回告单，将整改情况回告区纪委监委。此外，抄告的问题以及回告的整改情况均要向主要领导报告，便于党委书记第一时间全面掌握情况，落实好“第一责任人”的责任。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;在履行责任过程中，各级纪检监察机关还不断加大督促力度。浙江省纪委坚持每年召开履行主体责任汇报会，开展主体责任落实情况约谈等。省、市、县、乡四级党委和所属部门党委（党组）一把手向上一级党委、纪委报告上一年度落实全面从严治党主体责任情况和履行“第一责任人”职责情况，面对面接受评议。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '8', '0', '1534403302', '0', '0', '0');
INSERT INTO `c_news` VALUES ('70', '中央纪委曝光7起问责典型案例之后(上)', 'Uploads/2018-08-16/5b7523cf2f516.jpg', '&lt;p&gt;“反思自己因落实主体责任不力被问责，教训深刻：一是存在‘老好人’思想，对党员干部存在的苗头性、倾向性问题没有及时咬耳扯袖、红脸出汗；二是重部署轻落实，对管党治党政治责任认识不到位，嘴上常说，就是没有落实到具体行动上……”&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;这是福建省上杭县泮境乡党委原书记李英荣被问责通报后的反思。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;6月27日，中央纪委曝光7起落实管党治党主体责任和监督责任不力被问责的典型案例。连日来，被曝光案例的地区、单位认真反思、持续整改、压实责任，真正把警示刻在心上，把责任扛在肩上。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;认真反思，汲取教训&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;2017年3月以来，李英荣所在的泮境乡先后有14名乡、村干部因违纪违法问题被查处，其中包括时任乡长在内的2名班子成员。乡党委、纪委疏于对干部的教育、管理和监督，未能及时发现和查处违纪违法行为，造成不良影响。当年9月，因落实主体责任和监督责任不力，李英荣与该乡纪委原书记钟东荣分别受到党内警告处分。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中央纪委曝光7起问责典型案例当晚，上杭县委常委会紧急召开会议，组织班子成员学习通报内容，要求全县各级各部门党组织认真反思，汲取深刻教训，以点带面强化管党治党责任意识和政治担当。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;与此同时，江苏省无锡市党员干部廉政教育平台——“崇德倡廉”微信公众号第一时间转发了这7起问责典型案例，该市惠山经济开发区4名领导干部被问责亦在其中。之后，无锡市纪委监委根据审查调查发现的线索，对5起落实全面从严治党主体责任和监督责任不力的典型问题进行了集中通报。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;7起典型案例中，还有广东省湛江市赤坎区区委原书记龙小艾等人因村级换届选举贿选问题被问责。中央纪委曝光后，广东省委常委、省纪委书记、省监委主任施克辉要求引以为戒，坚持把纪律和监督挺在前面，加强监督检查，用好问责利器，推动落实管党治党政治责任。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;因所在单位违规选人用人等问题，青海省玉树州曲麻莱县教育局原党委书记、局长葛宝林，纪检组组长达求被问责。中央纪委通报当晚，青海省纪委监委安排部署做好以案促改工作。随即，曲麻莱县召开县委常委（扩大）会议专题学习，要求党员领导干部提高思想站位，汲取教训，抓好整改落实。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“对身边人身边事的通报曝光、深刻剖析，给大家带来强烈震撼。”多名来自案例所在地的干部表示，“这也警示每一名党员领导干部必须把落实好‘两个责任’转化为自觉行动，勇于担当、履职尽责。”&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;坚持问题导向，制定整改措施&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;7起典型案例中，因对信访举报调查处理不力，四川省巴中市恩阳区关公镇党委书记殷初扬、纪委原书记董大力被问责。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中央纪委曝光典型案例后，巴中市委书记罗增斌在全市乡镇（街道）党（工）委书记培训班上表示，全市各级党员领导干部，特别是乡镇（街道）党（工）委书记要深刻汲取此案教训，时刻牢记“抓好党建是最大的政绩”，带头落实管党治党政治责任，自觉遵守各项纪律法律。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img alt=&quot;&quot; src=&quot;/Uploads/ueditor/image/20180816/1534403438978710.jpg&quot; style=&quot;border: none;&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;巴中市恩阳区党风廉政建设群众监督中心工作人员正在贫困户家中调查了解村“两委”责任落实情况（邓誉 摄）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;巴中市委还要求全市各级党组织和广大党员干部认真学习中央纪委通报，举一反三，对落实管党治党“两个责任”情况全面开展自查自纠。市纪委监委成立监督检查组，对各区县党委履行管党治党主体责任情况进行检查，并督查各区县自查自纠工作情况。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;坚持以问题为导向，曲麻莱县组织全县党员干部深入学习中央纪委通报，用身边事身边人开展警示教育，查摆党员干部自身存在的不足和问题。县纪委监委督促县教育系统深刻汲取案例教训，深挖案件反映的思想教育、监督制度、体制机制等方面的问题根源，认真对照检查，制定整改措施。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“县教育系统要深刻汲取中央纪委通报的典型案例教训，认真对照检查，提高政治站位，制定整改措施，建章立制，强化政治纪律和政治规矩，切实把‘两个责任’落到实处。”在全县教育系统党员干部学习大会上，曲麻莱县副县长、教育局局长尼玛扎西说。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;在广东湛江，市委把赤坎区文章村拉票贿选问题列入市委常委班子民主生活会主要剖析案例，并将该案列入基层干部教育培训的重要内容。市纪委监委在赤坎区召开警示教育会，让受处分党员干部现身说法，深化警示教育效果；与受处分党员干部谈心谈话，认真做好思想政治工作。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;此外，该市还强化督查问责，对村级换届突出问题整治“回头看”，全面倒查全市基层组织换届工作出现的各类问题。通过“拉网式”排查，共查出131个有问题线索反映的村（社区），全部由市县领导挂点联系，工作组驻村整治，目前已完成整改69条，整顿涣散基层组织85个。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;压实责任，以案促改&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“不能就案说案、就事论事，要把身边的典型案件转化成警示教育资源，最大限度地强化警示震慑效果。”7月中旬，上杭县召开全县以案促改警示教育大会，以查摆剖析为抓手，对全县党员干部进行集体警示教育。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;上杭县委常委、县纪委书记、县监委主任胡长松说，以中央纪委通报为契机，推动制定完善《关于开展典型案例剖析做好以案促改工作的实施方案》，进一步压实责任，推进以案促改工作制度化常态化。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中央纪委曝光典型案例以来，被曝光地区督促案发单位整改，同时以点带面，强化制度约束，确保责任落实到位。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;无锡市聚焦“第一责任人”职责和主体责任落实，制定《2018年度党风廉政建设责任书》和个性化的任务清单，市委主要领导与7个县（市、区）及84家市级单位党委（党组）主要负责人签字背书。同时，督促市县两级党委、纪委每月通过省信息平台记录履责情况，市级单位党委（党组）每季度书面报告履责情况，把全面从严治党主体责任、监督责任具体化、精准化。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“在总结完善案发单位以案促改的基础上，我们着眼长效，坚持把纪律和监督挺在前面，加强对权力运行的制约和监督。”玉树州委常委、州纪委书记、州监委主任井永杰介绍说。州纪委监委近期还在全州范围内开展落实“两个责任”专项检查，严肃查处一批管党治党不力的问题。通过分析典型案件发生的全过程，形成可整改的问题清单，以案倒查、以案促防，压紧压实各级党组织和党员领导干部正确履职、主动担当，推动全面从严治党向纵深发展。（中央纪委国家监委网站 代江兵 中国纪检监察报记者 王少伟）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '8', '0', '1534403535', '0', '0', '0');
INSERT INTO `c_news` VALUES ('71', '新时代巡视利剑作用更加彰显——十九届中央第一轮巡视工作综述', 'Uploads/2018-08-16/5b7524ead9d12.jpg', '&lt;p&gt;7月25日，中央第二巡视组向中国邮政集团公司党组反馈了巡视情况，至此，中央第一轮巡视反馈全部结束，在贯彻党的十九大精神开局之年，中央巡视组交出了第一份“答卷”。这份“答卷”展示了党中央全面从严治党的决心信心，印证了党中央对全面从严治党形势的判断，体现了党中央对巡视工作的新部署新要求。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;党中央高度重视巡视工作&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;把巡视作为党内监督战略性制度安排&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;以习近平同志为核心的党中央把巡视作为全面从严治党的利剑，抓住不放，持续发力，不断赋予巡视制度新的活力。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“巡视利剑作用彰显”。2017年10月18日，习近平总书记在党的十九大报告中对巡视工作给予充分肯定，并提出了新的更高要求，“深化政治巡视，坚持发现问题、形成震慑不动摇，建立巡视巡察上下联动的监督网”。党的十九大新修改的党章，在组织制度中专列一条对巡视巡察工作作出规定，以党内根本大法确立了巡视在全面从严治党中的战略作用、在党内监督制度中的战略地位，为做好新时代巡视工作提供了根本遵循。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;两个多月后，党中央审议通过并印发了中央巡视工作五年规划，确定了十九届中央巡视工作的“路线图”“任务书”，绘就了今后五年巡视工作的蓝图。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;根据党中央的新部署新要求，中央巡视工作领导小组牢固树立“四个意识”，与时俱进推动巡视工作深化发展。2018年1月，印发学习贯彻中央巡视工作五年规划的通知，作出具体部署。随后，分别在成都、北京、南昌召开了3个贯彻落实规划推进片会，提出了明确工作要求。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;2月2日，十九届中央第一轮巡视动员部署会召开，新一届巡视工作大幕拉启。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;春节假期后第一天，15个中央巡视组重整行装再出发，进驻河北、宁夏等14个省区，商务部等8个中央国家机关，中核集团等8家央企，并首次将沈阳、大连等10个副省级城市党委和人大常委会、政府、政协党组主要负责人纳入巡视监督范围。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;现场巡视结束后，中央巡视工作领导小组召开9次会议，分别听取15个中央巡视组的情况汇报。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;7月，习近平总书记主持召开中央政治局常委会会议，听取十九届中央第一轮巡视综合情况汇报，对巡视工作作出重要指示，明确要求坚定不移深化政治巡视，在强化巡视整改上发力，推动巡视工作向纵深发展，完善巡视工作战略格局。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;从党的十九大决策部署，到中央巡视工作五年规划出台，到首轮巡视动员进驻，到中央政治局常委会会议听取汇报……以习近平同志为核心的党中央坚定不移、一以贯之深入推进全面从严治党，为新时代巡视工作深化发展提供了坚强有力的领导保证。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;坚定不移深化政治巡视&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;把“两个维护”作为根本政治任务&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;首轮巡视动员部署会明确强调，要坚守政治巡视职能定位，把坚决维护习近平总书记党中央的核心、全党的核心地位，坚决维护党中央权威和集中统一领导作为巡视工作的根本政治任务，围绕党的政治建设、思想建设、组织建设、作风建设、纪律建设和反腐败斗争，以及巡视整改情况等方面深入开展监督检查。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;伴随着巡视的不断深化，中央巡视组始终注重从政治上发现问题、辨析问题，从思想和政治上查找问题根源，体现了鲜明的政治导向。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;首轮巡视的一个鲜明特点，就是把监督检查学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神情况摆在首要位置，对党组织和党员干部进行全面政治体检，发挥政治“显微镜”“探照灯”作用。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;巡视发现，各级党组织学习贯彻党的十九大精神总的情况是好的，但与党中央要求相比，还不同程度存在“温差”“落差”“偏差”，在学懂弄通做实上有差距，在结合实际贯彻落实上有差距。有的贯彻习近平总书记重要指示批示精神不深入不坚决，有的贯彻打好“三大攻坚战”决策部署不到位。有的搞形式主义，表态多调门高、行动少落实差。有的政绩观存在偏差，搞政绩工程、形象工程……&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;能否真正把“两个维护”认识到位、落实到位，直接决定着一个地区和单位党的领导、党的建设、全面从严治党以及履行党中央赋予职责情况的水平。对这些问题，中央巡视工作领导小组成员在反馈时一针见血指出，牢固树立“四个意识”，践行“两个维护”，贯彻落实党的十九大精神，不是光看表态怎么样，而是看落实怎么样，看是不是真正把党中央的要求贯彻到位。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;巡视本质上是政治监督、组织监督、纪律监督，要切实担负起“两个维护”的重大政治责任，通过查找政治偏差，督促被巡视党组织持续深入学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神，自觉担负起管党治党政治责任，持续保持惩治腐败的高压态势，持续纠治“四风”问题，持续净化党内政治生态，切实把“两个维护”体现在行动上、落实到工作中。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;全面从严治党永远在路上&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;必须保持战略定力和耐力&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;从首轮巡视情况看，各级党组织在全面从严治党方面取得了明显成效，反腐败斗争压倒性态势已经形成并巩固发展，但形势依然严峻复杂，不同领域、不同时期、不同层级的问题呈现出不同特征。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;一些党委（党组）落实“两个责任”特别是主体责任不够自觉和有力，压力传导不到位、不到底，有的从严治党没有严到位，韧劲不足，有的领导干部对形势估计盲目乐观，存在歇脚松气错误认识，有的监督执纪问责偏松偏软，有的部门派驻纪检组“探头”作用不强，一些央企内设纪检机构监督软弱乏力。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;巡视反映出，腐败问题存量不少、增量仍在发生，不收手、不收敛现象尚未完全遏制住。有的地方腐败问题存量比较大，新增的违纪违法问题不少。有的部门权力寻租问题依然比较突出，在审批、监管等方面存在较大廉洁风险，有的“靠山吃山”、利益输送问题仍然反映比较集中。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;从巡视看，“四风”问题虽然比党的十八大前有了明显好转，但仍顽固存在，面临反弹回潮压力。首轮巡视发现并督促查处违反中央八项规定精神的问题2003个。享乐主义、奢靡之风禁而不绝，领导干部顶风违纪问题仍有发生。形式主义、官僚主义积弊深重，会议多、文件多、检查多的问题仍未根本解决，特权思想和特权现象在一些领导干部身上比较突出。整治“四风”问题需要持之以恒，管出习惯、化风成俗。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;巡视发现，有的领导干部违反政治纪律，党内政治生活不严肃，党内政治文化不健康，破坏党内政治生态。有的地方受封建腐朽文化影响，“官本位”思想根深蒂固，政商关系不清，甚至搞官商勾结。有的选人用人把关不够严格，跑官要官、买官卖官仍有市场，有的地方“小圈子”“小山头”仍然存在。此外，干部不担当不作为的问题也有所呈现，首轮巡视选人用人专项检查发现不担当不作为问题954个，涉及副县处级以上干部和企业领导人员1000余人。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;巡视发现的问题印证了党的十九大提出把党的政治建设摆在首位完全正确，且具有鲜明的现实针对性。党中央关于全面从严治党的形势判断完全正确。既要充分看到成绩，坚定信心和决心，又要清醒看到问题，保持战略定力和耐力，决不能有松口气、歇歇脚的想法。营造良好政治生态是一项长期任务，要作为政治建设的基础性、经常性工作，锲而不舍、久久为功。各级党组织和党员领导干部必须强化政治担当，把管党治党作为最根本的职责立起来，准确把握全面从严治党发展趋势和阶段特征，不断增强工作的原则性、系统性、预见性和创造性，把“严”字长期坚持下去，毫不动摇推动全面从严治党向纵深发展。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;坚持以人民为中心&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;将巡视利剑直插基层&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;习近平总书记强调，巡视要坚持人民立场，人民群众痛恨什么、反对什么，就重点巡视什么、纠正什么，把巡视利剑直插基层，层层传导压力，层层落实责任。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;将巡视利剑直插基层，是推动全面从严治党向基层延伸的关键一招，也是凝聚民心的有力之举。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;首轮巡视受理群众信访举报40余万件次，绝大部分反映的是群众身边的不正之风和腐败问题，扶贫开发、教育医疗、土地征收、市场监管、食品药品安全等民生领域侵害群众利益的问题依然多发，一些地方“村霸”和宗族势力、黑恶势力背后的保护伞仍然存在，严重影响群众获得感幸福感安全感。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;巡视期间，中央巡视组对发现的一些脱贫攻坚中的腐败问题、黑恶势力背后的保护伞问题、落实惠民政策中的作风问题，督促有关党组织立行立改。不少群众来信来电表达感谢之情，有的还向中央巡视组送上锦旗。每一封来信、每一个电话、每一面锦旗，都饱含着对党的信任和期盼。中央巡视工作领导小组认真研究人民群众意见建议，深入推进市县巡察工作，打通全面从严治党“最后一公里”，着力构建巡视巡察上下联动的监督网。截至目前，全国市县一级党委均建立了巡察制度，共对20.5万个党组织开展巡察，发现各类问题61.4万个，涉及党员干部违规违纪问题线索24.4万件，推动查处4.7万人。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;实践证明，巡视的权威来自党中央，巡视的力量来自广大干部群众。只有坚守以人民为中心的发展思想，坚持党内监督和群众监督相结合，巡视利剑才会越擦越亮。只有把利剑直插基层，着力发现和推动解决群众反映强烈的突出问题，才能让群众增强获得感，实现干部清正、政府清廉、政治清明。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;与时俱进创新方式方法&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;高质量推进巡视全覆盖&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;习近平总书记强调，要推动巡视工作向纵深发展，高质量推进巡视全覆盖。党的十九大首次将巡视全覆盖要求写入党章，中央巡视工作五年规划对一届任期内全覆盖任务作出具体安排。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;首轮巡视创新组织方式，穿插组合安排，既有省区又有部门，还有央企，首次将10个副省级城市纳入巡视范围，在时间安排上变为3个月，巡视覆盖范围更广，监督更加深入全面，在高质量推进全覆盖上迈出坚实步伐。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;发现问题是巡视工作的生命线。中央巡视组聚焦全面从严治党重点任务，着力发现和推动解决违反政治纪律和政治规矩的问题、领导干部腐败问题、群众身边的腐败问题、违反中央八项规定精神问题、干部不担当不作为问题、选人用人方面存在的问题、巡视整改落实不到位的问题，坚持发现问题、形成震慑不动摇，推动落实管党治党政治责任，做到利剑高悬、震慑常在。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;首轮巡视动员部署会突出强调，高质量推进全覆盖必须坚持实事求是。中央巡视机构制定了巡视报告问题底稿制度，要求凡是写进报告的问题都要有具体的人和事作支撑，特别是对重大问题的定性判断，既要有面上情况的总体分析，也要有典型事例和数据支撑。对发现的问题精准研判，客观准确反映巡视情况，对党中央负责，对被巡视党组织负责，对党员干部负责，使巡视工作经得起历史和实践的检验。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;依规依纪依法巡视是高质量推进全覆盖的内在要求。中央巡视工作领导小组深入总结十八届巡视工作经验，与时俱进制定、修订46项工作制度，巡视制度笼子进一步扎牢，巡视工作每个环节都有了规范要求。特别是探索实行了巡视后评估制度，要求巡视干部的一言一行、一举一动都要接受监督，严格按照党章、巡视工作条例、巡视组工作规则办事，严守职责边界，严禁超越权限，坚决执行“不干预被巡视地区（单位）正常工作、不履行执纪审查职责”的要求，不缺位、不越位、不错位，确保巡视工作规范有序开展。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;十九届巡视进一步加强与纪检监察、审计、信访等部门单位的配合协作，建立健全10多项协调协作机制，实现有效对接、成果共享，监督合力进一步形成，为高质量推进全覆盖提供了有力支撑。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;释放强化巡视整改的鲜明信号&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;扎实做好“后半篇文章”&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;做好巡视“后半篇文章”，关键要在强化巡视整改上发力，以实际成效取信于民。首轮巡视动员部署会明确要求，将十八届中央巡视整改情况纳入监督检查重要内容，从一开始就释放出强烈信号，在强化整改落实上见真章、动真格、求实效。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;盯住巡视整改落实情况，是十九届中央巡视深化发展的又一重要举措。从首轮巡视情况看，整改落实不到位的问题还不同程度存在。有的履行整改主体责任不力，缺乏对党恪尽职守的自觉，存在“过关”心态。有的“新官不理旧账”，未将纠正老问题作为履新履职、推动突破的抓手和机遇，存在整改脱节现象。有的敷衍应付，做表面文章、报整改假账。有的甚至边改边犯。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;整改能否落实到位，关系到巡视工作的严肃性和公信力。中央巡视反馈的意见，是经过党中央研究的，是党中央对被巡视党组织的政治要求。必须把巡视整改作为一项严肃政治任务，提高政治觉悟和政治站位，从政治高度认识整改、推动整改。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“巡视发现问题的目的是解决问题，发现问题不整改，比不巡视的效果还坏，做好巡视‘后半篇文章’关键要在整改上发力。整改不落实，就是对党不忠诚。整改抓不好的要严肃问责，该曝光的要曝光。”中央巡视工作领导小组成员参加了全部30个地方和单位的巡视反馈，在反馈会上对整改落实提出了十分严肃的要求。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中央巡视工作领导小组成员突出强调，巡视整改是“四个意识”的试金石，是检验“两个责任”的重要标尺；主体责任能否落实，是整改能否落实的关键。党委（党组）书记作为第一责任人，要充分认识抓巡视整改的重要意义，把巡视整改作为全面从严治党的重要抓手、作为推动工作的重要契机，直接部署、直接协调、直接督办。对巡视反馈的意见和专题报告要统筹研究，重点问题要直接抓、抓具体、抓到底，对上次整改落实不到位和这次巡视新发现的问题要一体整改，决不能“新官不理旧账”。明确整改责任分工，领导班子成员都要把自己摆进去，把职责摆进去，把工作摆进去，主动认领责任，带头落实整改。要建立整改常态化、长效化机制，坚决防止“过关”思想，确保整改层层落实到位。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;从实践看，整改不到位的原因，除了主体责任落实不力，还有很重要的一条，就是对整改的日常监督弱化、缺位。习近平总书记强调，纪检监察机关和组织部门要切实担负起对巡视整改的日常监督责任，加强整改督查督办。这既是强化巡视整改的重大创新举措，也是巡视工作对纪检监察机关和组织部门提出的新要求。&lt;/p&gt;&lt;p&gt;在反馈时，中央巡视组指出了每个被巡视党组织需要重点整改的问题，提出了有针对性的整改要求，既开出了整改主体责任清单，也开出了整改日常监督责任清单，确保可跟踪、可评价、可问责。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;“整改问责决不是说说而已，党中央在这个问题上，态度是鲜明的、决心是坚定的，不要心存侥幸、触碰红线。”巡视反馈会释放了强化整改问责的鲜明信号。下一步，将对整改不力、敷衍整改、虚假整改等问题严肃追责问责，典型案例公开曝光，把整改问责做严做实，坚决维护党中央权威，增强巡视工作严肃性和公信力。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;首轮巡视反馈刚结束，中央巡视工作领导小组组长赵乐际就深入黑龙江调研，专门召开巡视整改落实工作座谈会，突出强调要学懂弄通做实习近平新时代中国特色社会主义思想和党的十九大精神，提高政治站位，强化政治担当，把巡视整改作为贯彻党中央部署要求、推动整体工作的有力抓手，发扬钉钉子精神，一个问题一个问题解决，确保巡视整改落到实处。深化成果运用，推动改革、完善制度，发挥巡视标本兼治战略作用。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;全面从严治党永远在路上，巡视监督也永远在路上。中央巡视组肩负着党中央的信用和权威，使命光荣、责任重大。要按照“信念过硬、政治过硬、责任过硬、能力过硬、作风过硬”要求，不断加强政治建设、能力建设、作风纪律建设，打造让党放心、人民信赖的高素质专业化巡视队伍，为新时代进行伟大斗争、建设伟大工程、推进伟大事业、实现伟大梦想作出新的更大贡献。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;《 人民日报 》（ 2018年08月01日 04 版）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '7', '0', '1534403818', '0', '0', '1');
INSERT INTO `c_news` VALUES ('72', '中央第十四巡视组向商务部党组反馈巡视情况', 'Uploads/2018-08-16/5b75268ae795d.jpg', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/Uploads/ueditor/image/20180816/1534404146620064.jpg&quot; title=&quot;1534404146620064.jpg&quot; alt=&quot;4244099084359866639.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;中央第十四巡视组向商务部党组反馈巡视情况&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;根据中央巡视工作领导小组的部署，近日，中央第十四巡视组向商务部党组反馈巡视情况。中央巡视工作领导小组成员杨晓超主持召开向商务部党组书记钟山的反馈会议，出席巡视商务部党组情况反馈会议，对抓好巡视整改工作提出要求。会议向钟山传达了习近平总书记关于巡视工作的重要指示精神，中央第十四巡视组组长杨鑫代表中央巡视组反馈了巡视情况。钟山主持反馈大会并就做好巡视整改工作作表态讲话。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;根据中央统一部署，2018年2月23日至5月22日，中央第十四巡视组对商务部党组进行了巡视。巡视组坚持以习近平新时代中国特色社会主义思想为指导，全面贯彻党的十九大精神，坚持稳中求进工作总基调，坚守政治巡视职能定位，认真贯彻中央巡视工作方针，以“四个意识”为政治标杆，把坚决维护习近平总书记核心地位、维护党中央权威和集中统一领导作为根本政治任务，围绕党的政治建设、思想建设、组织建设、作风建设、纪律建设和反腐败斗争，以及中央巡视整改落实情况等方面开展监督检查，紧扣被巡视党组织职责，紧盯领导班子和关键少数，深入查找政治偏差，充分发挥巡视的政治监督、组织监督、纪律监督作用。通过广泛开展个别谈话，认真受理群众来信来访，调阅有关文件资料，深入了解情况，顺利完成了巡视任务。中央巡视工作领导小组听取了巡视组的巡视情况汇报，并向中央政治局常委会会议报告了有关情况。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;杨鑫指出，党的十八大以来，商务部党组不断加强管党治党，党的各项建设和反腐败斗争取得积极成效。巡视中，巡视组发现和干部群众反映了一些问题，主要是：学习贯彻落实习近平新时代中国特色社会主义思想和党的十九大精神还有些差距，党组全面领导作用发挥不够充分，有的领导干部政治担当不够强；选人用人方面的问题反映较多，日常监督管理存在薄弱环节，干部流失问题比较突出，基层党建工作抓得不够严实；落实“两个责任”不够到位，违反中央八项规定精神问题顽固存在，重点领域、关键岗位廉洁风险比较突出；落实上次巡视整改要求不够到位。同时，巡视组还收到反映一些领导干部的问题线索，已按有关规定转中央纪委、中央组织部等有关方面处理。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;杨鑫提出了六点整改意见：一是加强政治建设和思想建设，深入学习贯彻落实习近平新时代中国特色社会主义思想和十九大精神，切实在学懂弄通做实上下功夫，在结合实际贯彻落实上下功夫。牢固树立“四个意识”、坚定“四个自信”，坚决维护习近平总书记核心地位、维护党中央权威和集中统一领导。适应新时代要求，贯彻落实新发展理念，准确把握稳中求进的总基调，结合实际深入落实十九大关于商务工作的决策部署。充分发挥党组全面领导作用，加强能力建设，强化政治担当，有效整合内部力量。二是坚决落实习近平总书记重要指示批示精神和中央重大决策部署，坚持改革创新和高质量发展，在推进“一带一路”、自贸试验区建设和全面开放新格局中积极发挥作用，统筹利用好国内外两个市场两种资源，强化对我国企业“走出去”的监管和服务。加快内贸流通体制改革，履行好在防范和化解重大风险中的责任。三是层层落实全面从严治党主体责任，坚决落实监督责任，严格监督执纪问责，保持惩治腐败高压态势。四是贯彻落实新时代党的组织路线，严格执行干部选拔任用工作条例，建设高素质专业化干部队伍，加强对驻外干部的管理，认真研究解决干部流失问题，从严从实加强基层党建。五是认真落实中央八项规定精神，持续纠治“四风”问题，勇于担当作为。坚决防范关键少数、重点领域腐败发生，着力构建亲清新型政商关系。六是强化中央巡视成果运用，新官要理旧账，专题研究上次巡视未整改到位的问题和本次巡视指出的问题。杨鑫强调，商务部党组要强化政治担当，切实担负起巡视整改主体责任，及时召开领导班子巡视整改专题民主生活会，对照查摆剖析、举一反三，以身作则，带头整改。党组书记是第一责任人，对巡视全面整改负总责，对重点问题整改要亲自抓，确保整改落实落细落地。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;杨晓超要求，商务部党组要增强“四个意识”，把“两个维护”体现在行动上、落实到工作中，持续深入学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神，强化抓落实的政治职责，确保党的十九大确定的目标任务和战略部署顺利实现。坚持以政治建设为统领，认真贯彻新时代党的组织路线，不断加强党内政治文化建设，严肃党内政治生活，持续净化党内政治生态。强化管党治党政治担当，把管党治党作为最根本的职责立起来，准确把握全面从严治党形势和阶段特征，层层落实“两个责任”，保持惩治腐败的高压态势，持续纠治“四风”问题，强化监督执纪问责，让党员干部尤其是领导干部感受到监督常在、震慑常在。切实加强对巡视巡察工作的领导，落实中央巡视工作规划要求，将巡视利剑直插基层，加大整治群众身边腐败问题力度，打通全面从严治党“最后一公里”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;杨晓超强调，巡视整改是“四个意识”的试金石，也是检验“两个责任”的重要标尺。商务部党组要自觉担起整改主体责任，把巡视整改作为全面从严治党的重要抓手，坚持全面整改和重点整改相结合，在整改落实上集中发力，扎实做好巡视“后半篇文章”。党组书记要直接抓、抓具体、抓到底，对上次整改落实不到位和这次巡视新发现的问题要一体整改，决不能“新官不理旧账”。领导干部要主动认领责任，带头落实整改，该谁整改的就由谁整改，该谁负责的就由谁负责，决不能把层层传导压力变成层层推卸责任。要杜绝“过关”思想，建立整改落实常态化、长效化机制。纪检机关和组织部门要加强整改落实日常监督，用好问责武器，对整改不力、敷衍整改、虚假整改的严肃追责问责。把巡视整改和深化标本兼治有机结合起来，通过改革和制度创新，加强权力制约监督，构建不敢腐、不能腐、不想腐的体制机制。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;钟山表示，中央巡视组反馈的意见，实事求是、客观中肯，准确深刻、切中要害，指出的问题和提出的整改要求，具有极强的针对性和指导性，既是方向，也是标尺。商务部党组诚恳接受，严肃对待，积极承担全部责任，不折不扣坚决整改。要深入学习贯彻习近平巡视工作思想，带领各级党组织和全体党员深入研究反馈意见，制定整改措施，狠抓任务落实，确保整改成效，做好巡视“后半篇文章”，让党中央放心，让干部群众满意。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;钟山表示，一要牢固树立“四个意识”，自觉做到“两个坚决维护”。要深入学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神，增强“四个意识”，坚定“四个自信”，坚决维护习近平总书记的核心地位，坚决维护党中央权威和集中统一领导，始终在思想上政治上行动上同以习近平同志为核心的党中央保持高度一致，坚定不移把党中央决策部署落到实处。二要提高政治站位，全面提高党的建设质量。对照巡视反馈意见，把管党治党作为最根本的职责立起来，层层落实“两个责任”。把政治建设摆在首位，加强党的领导，把准政治方向，强化政治担当。自觉用习近平新时代中国特色社会主义思想武装头脑、指导实践、推动工作，把党的理论和路线方针政策落实到解决商务改革发展的实际矛盾和问题上来，牢牢掌握意识形态工作的领导权。贯彻落实新时代党的组织路线，落实好干部标准，激励广大干部新时代新担当新作为。以组织体系建设为重点，推动基层党组织全面进步、全面过硬。坚决贯彻落实中央八项规定及其实施细则精神，坚决反对“四风”。以政治纪律和组织纪律为重点，做到真管真严、敢管敢严、长管长严。强化监督执纪问责，严肃查处领导干部违反廉洁自律规定等行为，切实整治群众身边腐败问题。三要坚持问题导向，全力以赴抓好整改落实。要对巡视反馈的问题全面梳理，列出清单，确保件件有着落、事事有回音，做到既治标又治本，建立整改落实常态化、长效化机制。商务部党组要把整改主体责任作为全面从严治党主体责任的具体化，带动全体党员干部落实整改，做到真认账、不推诿，真整改、不敷衍。要以商务改革发展成果检验整改落实成效，用好巡视成果，坚持稳中求进工作总基调，坚持新发展理念，大力推进改革开放，抓好各项商务工作的全面落实，推进商务事业高质量发展。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中央第十四巡视组副组长及有关同志、中央巡视工作领导小组办公室有关负责同志，商务部党组成员、现职部领导出席会议；近三年退出党组班子的老同志，驻部纪检监察组负责同志，各直属单位、商协学会主要负责人列席会议。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1534404234', '0', '0', '0');
INSERT INTO `c_news` VALUES ('73', '中央第十四巡视组向海关总署党组反馈巡视情况', 'Uploads/2018-08-16/5b7528f55893e.jpg', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/Uploads/ueditor/image/20180816/1534404798710163.jpg&quot; title=&quot;1534404798710163.jpg&quot; alt=&quot;6830841855463738384.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;中央第十四巡视组向海关总署党组反馈巡视情况（中央纪委国家监委网站 徐梦龙 摄）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;根据中央巡视工作领导小组的部署，近日，中央第十四巡视组向海关总署党组反馈巡视情况。中共中央政治局委员、中央巡视工作领导小组副组长陈希主持召开向海关总署党组书记倪岳峰的反馈会议，出席巡视海关总署党组情况反馈会议，对抓好巡视整改工作提出要求。会议向倪岳峰传达了习近平总书记关于巡视工作的重要指示精神，中央第十四巡视组组长杨鑫代表中央巡视组反馈了巡视情况。倪岳峰主持反馈大会并就做好巡视整改工作作表态讲话。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;根据中央统一部署，2018年2月23日至5月22日，中央第十四巡视组对海关总署党组进行了巡视。巡视组坚持以习近平新时代中国特色社会主义思想为指导，全面贯彻党的十九大精神，坚持稳中求进工作总基调，坚守政治巡视职能定位，认真贯彻中央巡视工作方针，以“四个意识”为政治标杆，把坚决维护习近平总书记核心地位、维护党中央权威和集中统一领导作为根本政治任务，围绕党的政治建设、思想建设、组织建设、作风建设、纪律建设和反腐败斗争，以及中央巡视整改落实情况等方面开展监督检查，紧扣被巡视党组织职责，紧盯领导班子和关键少数，深入查找政治偏差，充分发挥巡视的政治监督、组织监督、纪律监督作用。通过广泛开展个别谈话，认真受理群众来信来访，调阅有关文件资料，深入了解情况，顺利完成了巡视任务。中央巡视工作领导小组听取了巡视组的巡视情况汇报，并向中央政治局常委会会议报告了有关情况。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;杨鑫指出，党的十八大以来，海关总署党组增强管党治党政治自觉，加强党的各项建设，反腐败斗争取得新进展。巡视中，巡视组发现和干部群众反映了一些问题，主要是：学习贯彻落实习近平新时代中国特色社会主义思想和党的十九大精神不够深入，发挥政治建设统领和思想建设引领作用不够充分，把守“国门”存在薄弱环节；选人用人问题较多，队伍监督管理不够严格，基层党建工作比较薄弱；履行“两个责任”不够严实，违反中央八项规定精神问题时有发生，特权思想和特权现象仍然存在，不担当、不作为问题有所表现，“一把手”等重要岗位、执法环节等重点领域廉洁隐患大，新兴业态监管等出现新增风险点；上次巡视整改前紧后松。同时，巡视组还收到反映一些领导干部的问题线索，已按有关规定转中央纪委、中央组织部等有关方面处理。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;杨鑫提出了六点整改意见：一是加强政治建设和思想建设，深入学习贯彻落实习近平新时代中国特色社会主义思想和党的十九大精神，切实在学懂弄通做实上下功夫，在结合实际贯彻落实上下功夫。牢固树立“四个意识”、坚定“四个自信”，坚决维护习近平总书记核心地位、维护党中央权威和集中统一领导。加强党组领导能力建设，严明政治纪律和政治规矩，严格请示报告制度，加强对工作的统筹管理。二是坚决贯彻落实习近平总书记重要指示批示精神和中央重大决策部署，树立正确政绩观，加快通关便利化改革，严防“洋垃圾”入境，切实当好“国门卫士”。三是层层落实管党治党主体责任，认真落实监督责任，严格监督执纪问责，加强巡视巡察机构力量。四是贯彻落实新时代党的组织路线，增强选人用人工作的紧迫性、计划性和规范性，加快实现机构改革后关检队伍的有机融合，不断提高队伍管理水平，打造一支真正的准军事化纪律部队，提高党建工作的针对性、实效性，严肃和规范组织生活，把“支部建在科上”落到实处。五是加强作风和纪律建设，深入纠治“四风”问题，专项整治特权思想和特权现象，认真整治不担当、不作为问题。加强对重要岗位、重点领域的监督，切实防范新兴业态监管中的腐败风险，严肃整治基层海关关警员与监管对象利益勾连等问题，保持惩治腐败高压态势。六是强化中央巡视成果运用，新官要理旧账，专题研究上次巡视未整改到位的问题和本次巡视指出的问题。杨鑫强调，海关总署党组要强化政治担当，切实担负起巡视整改主体责任，及时召开领导班子巡视整改专题民主生活会，对照查摆剖析、举一反三，以身作则，带头整改。党组书记是第一责任人，对巡视全面整改负总责，对重点问题整改要亲自抓，确保整改落实落细落地。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;陈希指出，海关总署党组要增强“四个意识”，把“两个维护”体现在行动上、落实到工作中，持续深入学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神，强化抓落实的政治职责，确保党的十九大确定的目标任务和战略部署顺利实现。坚持以政治建设为统领，认真贯彻新时代党的组织路线，不断加强党内政治文化建设，严肃党内政治生活，持续净化党内政治生态。强化管党治党政治担当，把管党治党作为最根本的职责立起来，准确把握全面从严治党形势和阶段特征，层层落实“两个责任”，保持惩治腐败的高压态势，持续纠治“四风”问题，强化监督执纪问责，让党员干部尤其是领导干部感受到监督常在、震慑常在。切实加强对巡视巡察工作的领导，落实中央巡视工作规划要求，将巡视利剑直插基层，加大整治群众身边腐败问题力度，打通全面从严治党“最后一公里”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;陈希强调，巡视整改是“四个意识”的试金石，也是检验“两个责任”的重要标尺。海关总署党组要自觉担起整改主体责任，把巡视整改作为全面从严治党的重要抓手，坚持全面整改和重点整改相结合，在整改落实上集中发力，扎实做好巡视“后半篇文章”。党组书记要直接抓、抓具体、抓到底，对上次整改落实不到位和这次巡视新发现的问题要一体整改，决不能“新官不理旧账”。领导干部要主动认领责任，带头落实整改，该谁整改的就由谁整改，该谁负责的就由谁负责，决不能把层层传导压力变成层层推卸责任。要杜绝“过关”思想，建立整改落实常态化、长效化机制。纪检机关和组织部门要加强整改落实日常监督，用好问责武器，对整改不力、敷衍整改、虚假整改的严肃追责问责。把巡视整改和深化标本兼治有机结合起来，通过改革和制度创新，加强权力制约监督，构建不敢腐、不能腐、不想腐的体制机制。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;倪岳峰表示，海关总署党组要深入学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神，树牢“四个意识”、坚定“四个自信”，坚决把思想和行动统一到习近平总书记关于巡视工作的重要指示精神上来，切实扛起整改主体责任。中央巡视组指出的问题，直击要害、直指“病症”，帮助我们认清了工作中存在的薄弱环节，提出的意见精准聚焦、对症下药、客观中肯，我们全面、诚恳接受中央巡视组的反馈意见。一是要深入学习贯彻习近平总书记关于巡视工作的重要指示精神，以海关巡视整改的实际行动坚决维护习近平总书记在党中央和全党的核心地位，坚决维护党中央权威和集中统一领导。二是要切实履行全面从严治党政治责任，强化政治担当，抓好整改组织领导，制定整改方案，建立问题清单、任务清单、责任清单，强化任务督办，认真完成好巡视“后半篇文章”。三是要坚持不懈纠正“四风”，对特权思想和特权现象进行严肃整治，对巡视发现的问题一律严肃处理曝光，紧盯形式主义、官僚主义新表现，着力解决不担当、不作为的问题。四是要全面加强海关政治建设，严明政治纪律和政治规矩，严肃党内政治生活，加强选人用人和队伍监督管理，提高基层党建工作质量，深化准军事化纪律部队建设。五是要深入推进反腐败斗争，认真处置巡视组移交的问题线索，聚焦重要岗位、重点领域廉洁隐患，深化打私反腐“一案双查”，强化警示教育，推动源头治理。六是要担当起时代赋予海关的新使命，加快实现机构改革有机融合的要求，认真履行把好国门职责，坚决守住监管底线，对“洋垃圾”等走私违法活动重拳再出击，积极推进通关流程“去繁就简”，营造稳定公平透明的营商环境，通过巡视整改推动海关改革发展再上新台阶。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中央第十四巡视组副组长及有关同志、中央组织部干部监督局有关负责同志、海关总署党组领导班子成员出席会议；尚未办理退休手续的原总署领导、总工程师，驻总署纪检监察组负责同志，总署各部门单位副局级以上领导干部、各直属海关单位党组（党委）全体成员列席会议。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1534404853', '0', '0', '0');
INSERT INTO `c_news` VALUES ('74', '十九届中央首轮巡视反馈情况全部公布 巡视组在8个中央单位和8家央企发现哪些问题？', 'Uploads/2018-08-16/5b752af369c41.jpg', '&lt;p&gt;十九届中央第一轮巡视反馈情况２６日在中央纪委国家监委网站向社会进行第二次集中公布，当天公布了中央巡视组对８个中央单位和８家央企党组的巡视反馈情况。至此，十九届中央第一轮巡视反馈情况全部公布。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;这８个中央单位是：住房和城乡建设部、商务部、文化和旅游部（原文化部、原国家旅游局）、海关总署、国家体育总局、国家市场监督管理总局（原国家食品药品监督管理总局）、国家统计局、新华社；８家央企是：中国核工业集团有限公司、中国华电集团有限公司、中国远洋海运集团有限公司、中粮集团有限公司、中国通用技术（集团）控股有限责任公司、中国储备粮管理集团有限公司、中国旅游集团公司、中国邮政集团公司。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;经党中央批准，十九届中央第一轮巡视对１４个省区、８个中央单位、８家央企党组织开展常规巡视，并将被巡视省区涉及的１０个副省级城市党委和人大常委会、政府、政协党组主要负责人，一并纳入巡视范围。从今年２月下旬到５月下旬，１５个中央巡视组在被巡视地方、单位工作了３个月。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;７月２２日，中央巡视组首批集中公布了１４个省区和１０个副省级城市的巡视反馈情况。７月２６日，中央巡视组第二批集中公布了以上８个中央单位和８家央企的巡视反馈情况。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;根据巡视反馈情况，中央巡视组在８个中央单位和８家央企都发现了一些问题。与第一批巡视反馈相比，本批巡视反馈发现的问题中，有一些共性问题，也有一些新特点新表现。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;政治站位不够高　一些中央单位和央企存在“温差”“偏差”&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;十九大后中央巡视工作第一次把“坚决维护习近平总书记核心地位、维护党中央权威和集中统一领导”作为巡视工作根本政治任务，同时第一次按照“六个围绕、一个加强”开展监督检查，即围绕党的政治建设、思想建设、组织建设、作风建设、纪律建设和夺取反腐败斗争压倒性胜利开展监督检查，同时加强对十八届巡视整改情况的监督检查。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;与首批巡视反馈一样，８个中央单位和８家央企均被指出在学习贯彻落实习近平新时代中国特色社会主义思想和党的十九大精神上“存在差距”“不够深入”“不够到位”“实效性不够强”等问题，有的中央单位还被指出“政治站位不够高，‘四个意识’不够强”“‘四个意识’树得不牢”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;本轮被巡视的８个中央单位和８家央企，均被不同程度地指出落实习近平总书记对该领域工作的重要指示要求不够有力，或落实中央重大决策部署不够到位，推进改革统筹谋划不够、力度不够等。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;有的中央单位被指出“对习近平总书记关于住房城乡建设工作重要指示批示学习贯彻不够严肃认真，落实中央城市工作会议精神和中央重大决策部署有‘温差’”，有的中央单位被指出“落实习近平总书记关于食品药品监管‘四个最严’要求和中央决策部署有‘温差’，政治责任感不够强，以人民为中心的立场不够坚定”，有的中央单位被指出“落实意识形态工作责任制不够到位”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;有的央企被指出“贯彻党中央重大决策部署、落实新发展理念有差距”，有的央企被指出“业绩观存在偏差，推进供给侧结构性改革不到位”，有的央企被指出“贯彻新发展理念有偏差，深化改革和推进高质量发展有差距”，有的央企被指出“执行国家粮食安全战略存在政治偏差”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;这充分体现了十九大后中央巡视进一步深化政治巡视，以“四个意识”为政治标杆，把“两个维护”作为根本政治任务的内在要求。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;组织建设有待加强　一些中央单位和央企选人用人问题突出&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;/p&gt;&lt;p&gt;巡视是把监督挺在前面的重要形式，发挥着政治监督、组织监督、纪律监督的作用。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;本批８个中央单位和８家央企的巡视反馈中，除了被指出“两个维护”、学习贯彻落实习近平新时代中国特色社会主义思想和党的十九大精神、落实中央决策部署方面有差距外，有的中央单位还被指出“一些领导干部纪律规矩意识不强”，有的中央单位被指出“纪律建设薄弱，纪律和规矩意识淡漠，监督执纪软弱乏力”，有的央企被指出“党内政治生活不够严肃，违反政治纪律和组织纪律问题时有发生”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;记者梳理发现，中央巡视组列出的“问题清单”中，组织建设的问题比较突出。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;比如，有的中央单位“基层党组织政治功能偏弱，队伍建设统筹谋划不够，少数干部选拔任用把关不严，执行有关制度程序不严，个人有关事项报告不实问题比较突出”，有的中央单位“党建工作层层递减，基层党组织虚化弱化，执行选人用人规定不严”，有的中央单位“选人用人方面的问题反映较多，日常监督管理存在薄弱环节，干部流失问题比较突出”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;比如，有的央企“突击提拔干部、‘近亲繁殖’问题较为突出”，有的央企“任前把关不够严格，圈子文化依然存在”，有的央企“人才队伍建设较为薄弱，干部人事档案管理不够严格，有的档案造假或涉嫌造假”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;正风反腐不能停歇　一些重点部门和重要岗位廉洁风险较大&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;党的十九大报告指出，反腐败斗争形势依然严峻复杂，巩固压倒性态势、夺取压倒性胜利的决心必须坚如磐石。作为发现问题的“显微镜”和“探照灯”，十九大后首轮中央巡视的“体检报告”，再次印证了党中央对全面从严治党形势任务的准确判断。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;与上一批次集中公布的１４个省区和１０个副省级城市一样，８个中央单位和８家央企在作风建设和反腐败斗争方面仍然存在一些问题。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;作风方面，有的中央单位“特权思想和特权现象仍然存在，不担当、不作为问题有所表现”，有的中央单位“贯彻中央八项规定精神打折扣，官僚主义、形式主义仍有表现”，有的央企“违反中央八项规定精神问题屡查屡犯，一些干部存在享乐主义和奢靡之风问题”，有的央企“顶风违反中央八项规定精神问题频发，有的领导人员特权思想比较严重”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;反腐败方面，有的中央单位“食品药品审批监管领域廉洁风险较大，反腐败斗争形势依然严峻复杂”，有的中央单位“一些重点部门和领域存在廉洁风险，数字腐败、利益输送问题时有发生”，有的央企“重要岗位和关键环节廉洁风险比较突出”，有的央企“腐败问题易发多发，工程建设、项目投资、企业并购等廉洁风险较大，‘靠企吃企’、违规招标采购等问题仍比较突出”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;央企党建仍有短板　企业党的领导作用需进一步发挥&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;十九大后首轮巡视，将８家央企纳入巡视监督范围，充分体现了党中央对国有企业坚持党的领导、加强党的建设、全面从严治党的高度重视。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;记者梳理发现，８家央企在党建责任意识、发挥党建引领作用、国企基层党建等方面均不同程度存在一些问题。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;比如，有的央企“抓党建的责任意识不够强，落实全国国企党建工作会议精神有差距，党建工作薄弱问题依然存在”，有的央企“党组领导作用发挥不充分，党的组织建设乏力，把方向、管大局、保落实力度不够，落实‘三重一大’决策制度不到位”，有的央企“以党建促发展意识不强，基层党建工作和选人用人方面问题比较突出”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;比如，有的央企“党务力量配备不足，基层党建工作不扎实”，有的央企“存在党建与业务‘两张皮’现象”，有的央企“党建弱化问题仍然存在，党建基础不够扎实，不遵循党章党规办事现象时有发生”，有的央企“境外单位党建工作针对性不强，有的党组织设置不合理、作用发挥不充分”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;巡视发现问题的目的是解决问题，发现问题不解决，比不巡视的效果还坏。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;与上一批集中公布的１４个省区和１０个副省级城市一样，本批８个中央单位和８家央企也均被指出存在上次巡视整改不彻底、不到位等类似问题，在中央巡视组给出的整改意见中，也明确要求被巡视地方、单位要做好巡视“后半篇文章”，统筹抓好上次巡视整改不到位和本次巡视指出问题的整改，进一步印证了十九大后中央巡视突出强调巡视整改的鲜明特点。（新华社北京７月２６日电 记者朱基钗）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '7', '0', '1534405363', '0', '0', '1');
INSERT INTO `c_news` VALUES ('75', '十九届中央首轮巡视反馈情况全部公布', 'Uploads/2018-08-16/5b752c7fd1ae8.jpg', '&lt;p&gt;人民网北京7月26日电&amp;nbsp;&amp;nbsp;（记者赵兵）中央纪委国家监委网站26日公布了十九届中央首轮巡视的16家单位的反馈情况，至此，十九届中央首轮巡视反馈情况已全部公布。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;住房和城乡建设部党组存在的问题是：政治站位不够高，“四个意识”不够强，学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神深度不够，对习近平总书记关于住房城乡建设工作重要指示批示学习贯彻不够严肃认真，落实中央城市工作会议精神和中央重大决策部署有“温差”，以人民为中心的思想不够坚定，政绩观存在一定偏差；组织建设、作风建设不严不实，选人用人问题突出，贯彻中央八项规定精神打折扣，官僚主义、形式主义仍有表现；履行“两个责任”不到位，纪律建设薄弱，纪律和规矩意识淡漠，监督执纪软弱乏力；对上次巡视整改不力，落实整改主体责任不到位，一些问题搞虚假整改，甚至边改边犯。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;商务部党组存在的问题是：学习贯彻落实习近平新时代中国特色社会主义思想和党的十九大精神还有些差距，党组全面领导作用发挥不够充分，有的领导干部政治担当不够强；选人用人方面的问题反映较多，日常监督管理存在薄弱环节，干部流失问题比较突出，基层党建工作抓得不够严实；落实“两个责任”不够到位，违反中央八项规定精神问题顽固存在，重点领域、关键岗位廉洁风险比较突出；落实上次巡视整改要求不够到位。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;文化和旅游部党组存在的问题是：贯彻落实习近平新时代中国特色社会主义思想和党的十九大精神在学懂弄通做实上有差距，在增强新时代文化自信、推动社会主义文化繁荣方面担当作为有欠缺，发挥文化引领作用不充分，意识形态工作责任制落实不够到位；发挥政治引领作用不够，管党治党存在“好人主义”现象，层层传导压力不足，有的单位存在违反组织原则问题，违反中央八项规定精神和“四风”问题仍有发生，重点领域和岗位存在廉洁风险；基层党组织政治功能偏弱，队伍建设统筹谋划不够，少数干部选拔任用把关不严，执行有关制度程序不严，个人有关事项报告不实问题比较突出；上次巡视整改存在不到位问题。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;海关总署党组存在的问题是：学习贯彻落实习近平新时代中国特色社会主义思想和党的十九大精神不够深入，发挥政治建设统领和思想建设引领作用不够充分，把守“国门”存在薄弱环节；选人用人问题较多，队伍监督管理不够严格，基层党建工作比较薄弱；履行“两个责任”不够严实，违反中央八项规定精神问题时有发生，特权思想和特权现象仍然存在，不担当、不作为问题有所表现，“一把手”等重要岗位、执法环节等重点领域廉洁隐患大，新兴业态监管等出现新增风险点；上次巡视整改前紧后松。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;国家体育总局党组存在的问题是：学习贯彻落实习近平新时代中国特色社会主义思想和党的十九大精神存在差距，落实党的十九大关于体育强国建设任务部署不够到位，推进改革统筹谋划不够；落实新时代党建工作要求不到位，落实民主集中制原则不够到位，干部选任把关不够严格，对党员干部、体育队伍的思想政治引领不够，基层党组织发挥作用不充分，“支部建在运动队”的好传统继承发扬不够；落实“两个责任”不够有力，未充分发挥典型案件的警示教育作用，一些领导干部纪律规矩意识不强，“四风”问题比较突出，重点领域和关键岗位存在廉洁风险；推进上次巡视整改不深入，一些重点问题未整改到位。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;原国家食品药品监督管理总局党组存在的问题是：“四个意识”树得不牢，学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神在学懂弄通做实上下功夫不够，理论武装不够自觉，落实习近平总书记关于食品药品监管“四个最严”要求和中央决策部署有“温差”，政治责任感不够强，以人民为中心的立场不够坚定；组织建设和作风建设不实，选人用人问题时有发生，违反中央八项规定精神问题屡禁不止，形式主义、官僚主义仍然存在；全面从严治党力度不够，“两个责任”落实不到位，食品药品审批监管领域廉洁风险较大，反腐败斗争形势依然严峻复杂；对上次巡视整改要求落实不到位。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;国家统计局党组存在的问题是：学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神存在差距，落实中央关于防范惩治统计数据造假的指示要求不够有力，推进统计管理体制机制改革力度不够；党的建设比较薄弱，党内政治生活不够严肃，干部选任把关不严，日常管理监督不够到位，执行个人有关事项报告制度不严格，有的党组织弱化、虚化、边缘化；落实全面从严治党责任不到位，对所属单位监督管理比较松散，执纪不严，“四风”问题多发，一些重点部门和领域存在廉洁风险，数字腐败、利益输送问题时有发生；抓上次中央巡视整改力度不够，有的重点问题整改不到位。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;新华社党组存在的问题是：学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神实效性不够强，落实“党媒姓党”“政治家办社”要求、提高政治站位、强化责任担当存在差距；聚焦主责主业不够，履行国家通讯社职责存在短板，国际传播能力有待加强，落实意识形态工作责任制不够到位；党建工作层层递减，基层党组织虚化弱化，执行选人用人规定不严，存在“带病重用”“近亲繁殖”等问题；履行“两个责任”不到位，执行纪律规矩不严，违反中央八项规定精神和“四风”问题仍有发生；一些重点领域和关键岗位存在廉洁风险，经营“靠山吃山”问题依然存在；上次巡视整改不到位。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中国核工业集团有限公司党组存在的问题是：学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神不到位，贯彻党中央重大决策部署、落实新发展理念有差距，党组政治领导作用发挥不充分，“两弹一星”精神传承不够。组织建设不够扎实，违规选人用人问题反映比较集中，突击提拔干部、“近亲繁殖”问题较为突出；抓党建的责任意识不够强，落实全国国企党建工作会议精神有差距，党建工作薄弱问题依然存在。落实中央八项规定精神不到位，“四风”问题边纠边犯，有的领导人员不担当、不作为。管党治党用力不足，纪律建设抓得不够严实，履行“两个责任”有所欠缺；物资采购、招投标等廉洁风险较大；上轮巡视整改不到位，重点领域违规违纪问题整治不力，执纪问责没有形成足够震慑。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中国华电集团有限公司党组存在的问题是：学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神不够到位，用新思想新精神指导企业发展不够。党组把方向、管大局、保落实的领导作用发挥不够充分，贯彻新发展理念紧迫感不够强，破解企业发展难题力度不够。党建弱化问题仍然存在，党建基础不够扎实，不遵循党章党规办事现象时有发生。选人用人问题反映比较集中，坚持原则不够、遵守规矩不严等方面问题较为突出。落实中央八项规定精神不够到位，“四风”问题整治不够有力，有的领导人员不担当不作为，享乐主义、奢靡之风不同程度存在。腐败问题易发多发，工程建设、项目投资、企业并购等廉洁风险较大，“靠企吃企”、违规招标采购等问题仍比较突出。上轮巡视整改不到位，追责问责不力。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中国远洋海运集团有限公司党组存在的问题是：学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神不够深入；贯彻党中央决策部署不够扎实，从政治和全局高度落实中央推进“一带一路”建设要求不够，实施创新驱动发展战略不够有力，落实“三去一降一补”未完全到位。执行干部选任制度不严，选人用人工作不够规范；党内政治生活不够严肃，基层组织建设有待加强；境外单位党建工作针对性不强，有的党组织设置不合理、作用发挥不充分。违反中央八项规定精神问题隐形变异，有的下属单位存在公款吃喝等现象。全面从严治党力度不够，向下传导压力层层递减，抓早抓小有差距，“靠船吃船”、利益输送问题仍比较突出。巡视整改一度存在“过关”思想，上轮巡视指出的突出问题尚未有效解决。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中粮集团有限公司党组存在的问题是：学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神不够深入扎实，示范传导不到位；党组全面领导作用发挥不充分，服务保障国家粮食安全战略的政治担当不够，贯彻新发展理念有偏差，深化改革和推进高质量发展有差距；落实国企党建工作会议精神不到位，以党建促发展意识不强，基层党建工作和选人用人方面问题比较突出；“两个责任”落实不到位，管党治党存在宽松软现象，廉洁风险依然较大；违反中央八项规定精神问题屡查屡犯，一些干部存在享乐主义和奢靡之风问题；对上次巡视整改要求重视不够、落实不到位。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中国通用技术集团公司党组存在的问题是：学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神存在差距，贯彻落实国企党建工作会议精神和中央有关重大决策部署不够有力，业绩观存在偏差，推进供给侧结构性改革不到位；党组领导作用发挥不充分，党的组织建设乏力，把方向、管大局、保落实力度不够，落实“三重一大”决策制度不到位；选人用人问题比较突出，存在“带病提拔”问题，执行有关程序、规定不严格；履行全面从严治党“两个责任”不到位，违反中央八项规定精神问题频发，重点领域和关键岗位廉洁风险防控不够，追责问责不力；上次中央巡视整改不严不实，存在挂空挡、走过场现象。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中国储备粮管理集团有限公司党组存在的问题是：学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神不够深入，“四个意识”树得不够牢，落实习近平总书记重要指示批示精神不到位；政治建设弱化，党内政治生态不够健康，执行国家粮食安全战略存在政治偏差，管好“大国粮仓”的政治担当不够，以人民为中心的意识不够强；党建工作抓而不实，存在党建与业务“两张皮”现象，选人用人工作不规范；作风建设和纪律建设不够严，“两个责任”落实不够有力，重要岗位和关键环节廉洁风险比较突出，对上次巡视指出的问题重视不够、整改不彻底。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中国旅游集团有限公司存在的问题是：学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神不够主动，入脑入心见行动不够；贯彻中央重大决策部署不够扎实，重组整合重形式轻效果，尚未达到做强做优做大要求。对党建工作不够重视，党务力量配备不足，基层党建工作不扎实；选人用人导向有偏差，干部管理使用不够规范，人才队伍建设较为薄弱，干部人事档案管理不够严格，有的档案造假或涉嫌造假。落实全面从严治党主体责任不够到位，日常监督管理不够有力，存在对违纪案件大事化小、小事化了现象；整治“四风”问题不彻底，顶风违纪时有发生；利益输送问题和腐败风险隐患犹存。巡视整改态度不够积极，有的搞选择性整改，整改成效不够明显。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中国邮政集团公司党组存在的问题是：学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神下功夫不够，贯彻落实中央有关决策部署和国有企业党建工作会议精神不到位；有的领导人员“人民邮政为人民”的初心使命淡化，对邮政的政治和社会属性重视不够；党内政治生活不够严肃，违反政治纪律和组织纪律问题时有发生，组织生活不规范，基层党组织建设较为乏力；选人用人问题比较突出，任前把关不够严格，圈子文化依然存在；全面从严治党不力，监督执纪问责宽松软，顶风违反中央八项规定精神问题频发，有的领导人员特权思想比较严重；上次中央巡视整改不到位，存在消极应付现象。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;此外，巡视组在上述单位均收到反映一些领导干部的问题线索，已按有关规定转中央纪委、中央组织部等有关方面处理。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;《 人民日报 》（ 2018年07月27日 04 版）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '6', '0', '1534405759', '0', '0', '0');
INSERT INTO `c_news` VALUES ('76', '十九届中央第一轮巡视第二批反馈情况透视', 'Uploads/2018-08-16/5b752e7f28d35.jpg', '&lt;p&gt;7月26日，随着对8家中央单位和8家央企巡视反馈情况的集中公布，十九届中央第一轮巡视反馈情况全部“出炉”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;从反馈情况看，对8家中央单位和8家央企的巡视工作，在坚持稳中求进工作总基调，把“两个维护”作为根本政治任务，进一步深化政治巡视、精准发现问题、突出整改落实的同时，在其他方面也体现出鲜明特点。十九届中央巡视工作如何巩固、深化、发展，从中可见一二。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;着重检查重大决策部署贯彻情况&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;坚守政治巡视职能定位，重点检查“两个维护”情况，是本轮中央巡视工作的一大亮点。这就必然要求对被巡视单位是否坚持和加强党的全面领导、是否紧密结合实际贯彻党的十九大精神和党中央重大决策部署等情况，进行全方位的政治体检。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;从第二批反馈情况看，学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神、贯彻党中央重大决策部署总的情况是好的，但也普遍存在学习贯彻不够深入扎实等问题。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;以中央单位为例，住房和城乡建设部党组对习近平总书记关于住房城乡建设工作重要指示批示学习贯彻不够严肃认真，落实中央城市工作会议精神和中央重大决策部署有“温差”；原国家食品药品监督管理总局党组落实习近平总书记关于食品药品监管“四个最严”要求和中央决策部署有“温差”；新华社党组落实“党媒姓党”“政治家办社”要求、提高政治站位、强化责任担当存在差距。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;国有企业是党执政兴国的重要支柱和依靠力量，在贯彻落实党的十九大精神和党中央重大决策部署方面，同样责无旁贷。根据反馈，中储粮集团党组执行国家粮食安全战略存在政治偏差；中粮集团党组贯彻新发展理念有偏差，落实国企党建工作会议精神不到位；中国远洋海运集团党组从政治和全局高度落实中央推进“一带一路”建设要求不够，实施创新驱动发展战略不够有力，落实“三去一降一补”未完全到位……&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;值得注意的是，类似的问题，在本轮第一批巡视反馈中也较为集中地反映出来。这是以“两个维护”为根本政治任务，进一步深化政治巡视的结果，同时也充分表明，无论地方、部门还是央企，结合实际贯彻落实党中央重大决策部署，必须丝毫不打折扣，须臾不能放松。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;“不担当不作为”着墨较多&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;前后两批巡视反馈，均对不担当、不作为问题着墨较多。着力查找被巡视党组织和党员领导干部在政治担当等方面存在的深层次问题，成为本轮中央巡视传递出的明确信号。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;此前对14个省区的巡视反馈中，便有多个地方被指出领导干部的担当问题。如，湖南“有的领导干部大搞政绩工程，有的关键时刻不担当”；河北“一些干部不担当、不作为问题比较突出”；山西“破解干部不担当不作为问题还比较乏力”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;第二批巡视反馈中，亦有多个被巡视部门和单位的政治担当问题被点名。如，中粮集团党组服务保障国家粮食安全战略的政治担当不够；原文化部党组在增强新时代文化自信、推动社会主义文化繁荣方面担当作为有欠缺，发挥文化引领作用不充分；海关总署党组不担当、不作为问题有所表现；中核集团、华电集团等也被指出“有的领导人员不担当、不作为”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;党的十八大以来，随着全面从严治党的不断深入，党员干部不担当不作为问题得到有效遏制，但仍有一些干部庸政懒政怠政，在干部群众中造成了消极影响。本轮中央巡视虽然查找的是被巡视党组织和党员领导干部的担当问题，但对于广大党员干部也都是一记警钟。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;值得一提的是，本轮巡视期间正值深化党和国家机构改革，对原文化部、原食药监总局等“原部门”党组的巡视情况，均向机构改革后的“新部门”党组反馈，提醒其积极担当作为，切实扛起巡视整改主体责任，决不能“新官不理旧账”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;“四风”问题、廉洁风险反映集中&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;记者梳理发现，第二批巡视反馈中有不少共性问题，其中，又以“四风”问题、廉洁风险反映集中。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;总体上看，“四风”问题得到扭转，但仍顽固存在，央企的“四风”问题较之中央单位更为突出。除对中储粮党组的反馈意见中未明确提及，其余7家单位均未幸免，且措辞严厉。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;如，中粮集团违反中央八项规定精神问题屡查屡犯，一些干部存在享乐主义和奢靡之风问题；华电集团“四风”问题整治不够有力，享乐主义、奢靡之风不同程度存在；中国邮政集团公司顶风违反中央八项规定精神问题频发，有的领导人员特权思想比较严重；中远海运集团违反中央八项规定精神问题隐形变异，有的下属单位存在公款吃喝等现象。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;8家中央单位中，也不乏“四风”问题严重者。如，商务部违反中央八项规定精神问题顽固存在；原食药监总局违反中央八项规定精神问题屡禁不止，形式主义、官僚主义仍然存在；国家体育总局一些领导干部纪律规矩意识不强，“四风”问题比较突出。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;与“四风”问题一样，重要岗位和关键环节廉洁风险突出，也是此次巡视反馈中多次提及的“通病”。其中，对海关总署的反馈意见指出，“一把手”等重要岗位、执法环节等重点领域廉洁隐患大，新兴业态监管等出现新增风险点；对国家市场监督管理总局党组的反馈意见指出，食品药品审批监管领域廉洁风险较大，反腐败斗争形势依然严峻复杂。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;在巡视整改方面，本轮巡视查找出的问题同样集中。如，住房和城乡建设部党组对上次巡视整改不力，落实整改主体责任不到位，一些问题搞虚假整改，甚至边改边犯；中国邮政集团公司党组对上次中央巡视整改不到位，存在消极应付现象。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;个性问题表述更接地气&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;新词频出是十八届中央巡视反馈的一大特点，本轮中央巡视亦不例外。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;在对14个省区的巡视反馈中，就有“新官不理旧账”“花架子”“提篮子”“菜霸”“砂霸”“运霸”等具有地方特色和行业特点、群众耳熟能详的新词出现，受到广泛关注。第二批巡视反馈中，同样不乏接地气的个性化表述。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;以生动精准描述行业特点、问题特征的新词新话为例，中储粮集团党组管好“大国粮仓”的政治担当不够；海关总署党组发挥政治建设统领和思想建设引领作用不够充分，把守“国门”存在薄弱环节；国家统计局“数字腐败”、利益输送问题时有发生；通用技术集团党组对上次中央巡视整改不严不实，存在“挂空挡、走过场”现象。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;使用新词新话的同时，本轮巡视反馈还援引了相关单位具有历史传统的“老话”，以提醒被巡视党组织不忘初心、牢记使命，切实加强新时代党的建设。如，引用贺龙同志名言，指出国家体育总局“支部建在运动队”的好传统继承发扬不够；指出中国邮政集团公司有的领导人员“人民邮政为人民”的初心使命淡化；指出中核集团“两弹一星”精神传承不够；等等。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;此外，在沿用十八届中央巡视反馈“靠山吃山”“靠船吃船”等“新词”的同时，本轮巡视反馈还使用了“靠企吃企”等表述，国有企业中相关问题的顽固性由此可见一斑。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;新词变成热词，“老话”讲出新意，正是中央巡视工作牢固树立“以人民为中心”的价值取向，增强群众获得感的具体体现。作为党的十九大后的首轮中央巡视反馈，这一继承创新之举，对于今后的巡视工作无疑具有鲜明导向作用。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '7', '0', '1534406271', '0', '0', '0');
INSERT INTO `c_news` VALUES ('77', '五大“通病”警示国企党建一刻不能松', 'Uploads/2018-08-16/5b752f5e5a79d.jpg', '&lt;p&gt;7月26日，十九届中央第一轮巡视对8家央企的反馈情况集中公布。记者梳理发现，8家央企努力推进党的建设和全面从严治党，党内政治生态逐步改善，但在学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神、党建工作、选人用人、落实中央八项规定精神、上轮巡视整改等五个方面依然不同程度存在问题，成为8家央企的“通病”。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;“通病”之一：学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神不够深入扎实&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中央巡视组对8家央企均指出存在这一问题。比如，中国邮政集团公司“下功夫不够”；中国旅游集团有限公司“不够主动，入脑入心见行动不够”；中粮集团有限公司“不够深入扎实，示范传导不到位”；等等。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;深入学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神，是新时代做好各项工作的前提和基础。中央巡视组指出8家央企存在的问题，也给其他未被巡视的央企敲响了警钟。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;“通病”之二：党建工作抓而不实&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;党的十八大以来，尤其是2016年10月全国国有企业党的建设工作会议召开以来，央企党建工作有了很大改进，但依然存在一些问题。此次巡视发现，8家央企普遍存在党建方面的问题。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;比如，中国远洋海运集团有限公司“境外单位党建工作针对性不强，有的党组织设置不合理、作用发挥不充分”；中国华电集团有限公司“党建弱化问题仍然存在，党建基础不够扎实，不遵循党章党规办事现象时有发生”；中国储备粮管理集团有限公司“党建工作抓而不实，存在党建与业务‘两张皮’现象”。&lt;/p&gt;&lt;p&gt;坚持党的领导、加强党的建设，是国有企业的“根”和“魂”，任何时候都不能放松。中央巡视组指出的央企党的建设弱化、淡化、虚化、边缘化等问题，必须下大力气解决。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;“通病”之三：选人用人存在问题&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;选人用人问题，是十八届中央巡视发现央企普遍存在的问题，此轮巡视反馈，8家央企依然不同程度存在这方面问题。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;比如，本轮巡视指出中国通用技术集团公司“选人用人问题比较突出，存在‘带病提拔’问题”，而2015年巡视指出的问题是“选人用人存在不正之风，干部选拔任用程序执行不严，有的‘带病提拔’”；中国邮政集团公司“选人用人问题比较突出，任前把关不够严格，圈子文化依然存在”，而2015年巡视指出的问题是“组织意识淡漠，有的企业高管近亲属违规在系统内任职，有的任人唯亲搞‘小圈子’，选人用人存在不正之风”；中国核工业集团有限公司“违规选人用人问题反映比较集中，突击提拔干部、‘近亲繁殖’问题较为突出”，而2015年巡视指出的问题是“干部选拔任用不规范，管理缺乏总体规划，选人用人不正之风仍有反映”；等等。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;“通病”之四：违反中央八项规定精神问题&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;落实中央八项规定精神不到位，“四风”问题禁而不绝，也是此次巡视发现8家央企普遍存在的问题之一。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中国邮政集团公司“顶风违反中央八项规定精神问题频发，有的领导人员特权思想比较严重”；中国远洋海运集团有限公司“违反中央八项规定精神问题隐形变异，有的下属单位存在公款吃喝等现象”；中粮集团有限公司“违反中央八项规定精神问题屡查屡犯，一些干部存在享乐主义和奢靡之风问题”……&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;与选人用人问题类似，落实中央八项规定精神不到位也是十八届中央巡视发现央企普遍存在的问题。当前，“四风”问题反弹回潮的隐患不容忽视，落实中央八项规定精神、纠正“四风”必须久久为功、驰而不息。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;“通病”之五：巡视整改不力&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;巡视整改是“四个意识”的试金石，也是检验“两个责任”的重要标尺。此次对8家央企的巡视发现，巡视整改不力的问题较为集中。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;中国通用技术集团公司“上次中央巡视整改不严不实，存在挂空挡、走过场现象”；中国远洋海运集团有限公司“巡视整改一度存在‘过关’思想，上轮巡视指出的突出问题尚未有效解决”；中国核工业集团有限公司“上轮巡视整改不到位，重点领域违规违纪问题整治不力，执纪问责没有形成足够震慑”；等等。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;巡视发现问题的目的是解决问题，发现问题不解决，比不巡视的效果还坏。此次巡视发现的8家央企整改不力问题，根本原因是主体责任不落实，同时日常监督也没跟上。不论是8家央企，还是此轮被巡视的其他地方和部门，必须杜绝“过关”思想，建立整改落实常态化、长效化机制，对上次整改落实不到位和这次巡视新发现的问题一体整改，确保整改真正到位、见效。（记者 李志勇）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '7', '0', '1534406494', '0', '0', '0');
INSERT INTO `c_news` VALUES ('78', '农业农村部:对两省气象局党组11名局级干部给予问责和处分', 'Uploads/2018-08-16/5b7545fe09cda.jpg', '&lt;p&gt;针对中国气象局党组巡视发现的一省气象局办公用房面积超标、研究决定干部任免事项不规范、超职数配备干部问题和另外一省气象局党组管理干部违纪问题多发、办公用房面积超标、研究决定干部任免事项不规范、破格提拔干部未按规定报告问题，中央纪委国家监委驻农业农村部纪检监察组对这两个省局党组进行问责，对11名局级干部给予纪律处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;综合派驻以来，驻农业农村部纪检监察组协助中国气象局党组开展巡视工作，切实发挥巡视“探照灯”“显微镜”作用，通过近距离全面“政治体检”，强化问题整改和成果运用，为深化全面从严治党提供坚强保障。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;坚持深度参与。在10轮巡视中，驻部纪检监察组领导通过参加中国气象局党组巡视工作领导小组会议、巡视动员部署会、巡视情况通报会等形式，指出问题，提出要求，对巡视进行全程督导，推动和指导中国气象局党组规范巡视工作程序和要求。中国气象局党组根据驻部纪检监察组建议，聚焦政治巡视，突出问题导向，抓好巡视发现问题的处理和整改，注重建章立制。在驻部纪检监察组参与下，中国气象局党组研究制定了《落实〈中国共产党巡视工作条例〉实施办法》《关于加强和规范巡察工作的指导意见》《巡视工作领导小组工作规则》等制度。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;督促全面通报。每一轮巡视下来，驻部纪检监察组都督促中国气象局党组开展巡视情况通报会，通报见人见事见问题，点名道姓，点具体问题，让领导干部红脸出汗、如坐针毡，发挥了强烈的警示和震慑作用。比如，2017年11月，中国气象局党组召开了2017年第三轮巡视情况通报视频会议，从中国气象局一直开到县气象局，全国气象部门三分之一的干部参会。一县级气象部门干部说：“中国气象局党组和驻部纪检监察组动真格，对巡视出的问题不遮掩，不护短，措辞严厉，做到真点名、真亮丑、真批评。通报的问题针对性和指导性都非常强，为指导基层台站整改指明了方向。”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;及时坚决查处。查处是最直接、最有威慑力的惩戒。对巡视发现的问题，驻部纪检监察组要求及时分类进行处置，该整改的整改，该查处的查处。涉及局级干部问题线索，均移交驻部纪检监察组直接核查；涉及处级及以下干部问题线索，驻部纪检监察组指导有关气象部门纪检机构查处。截至目前，驻部纪检监察组共收到中国气象局党组巡视组移交反映局级干部问题线索35件次，已办结23件、正在办理12件。办结的问题线索中，对2名局级干部立案审查、给予党纪处分，对8名局级干部诫勉谈话，责令2名局级干部作出深刻检查，对3名局级干部批评教育或责令整改。比如，一省气象局党组书记、局长，受到党内严重警告处分，并被免去职务，改任非领导职务。时任该省气象局党组成员、纪检组长，受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;从严追究责任。对移交的问题线索，驻部纪检监察组坚持“一案双查”，对查处中发现的涉及全面从严治党主体责任和监督责任落实不力的，进行严肃问责。对某直辖市气象局下属区县气象局，在群众路线教育实践活动期间仍购买白酒用于接待造成不良影响，驻部纪检监察组研究决定，对时任该市气象局党组书记、局长，党组成员、分管副局长和党组纪检组组长进行问责，均给予诫勉谈话。（驻农业农村部纪检监察组 || 责任编辑 王小宁）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '9', '0', '1534407062', '0', '0', '0');
INSERT INTO `c_news` VALUES ('79', '“百名红通人员”张勇光回国投案', 'Uploads/2018-08-16/5b753215d4865.jpg', '&lt;p&gt;中央纪委国家监委网站消息，7月28日，在中央反腐败协调小组国际追逃追赃工作办公室统筹协调下，经中央有关部门和广东省委、省纪委监委不懈努力，“百名红通人员”张勇光主动回国投案并退赃。截至目前，“百名红通人员”已到案54人。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;张勇光，男，1982年出生，原系广东省深圳市公安局南山分局高新技术园区派出所民警，涉嫌受贿罪，2010年12月外逃至美国。2013年8月国际刑警组织对其发布红色通缉令。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中央追逃办负责人表示，反腐败国际追逃追赃永远在路上，我们将坚持不懈，有逃必追，让已经外逃的无处藏身，让企图外逃的丢掉幻想，认罪服法是唯一出路。（新华社北京7月28日电 记者朱基钗）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '8', '0', '1534407189', '0', '0', '0');
INSERT INTO `c_news` VALUES ('80', '中央纪委公开曝光八起扶贫领域腐败和作风问题典型案例', 'Uploads/2018-08-16/5b7545efed2e9.jpg', '&lt;p&gt;近年来，各级纪检监察机关认真贯彻落实习近平总书记关于脱贫攻坚的系列重要讲话、批示精神，不断加大查处扶贫领域腐败和作风问题力度。日前，中央纪委公开曝光8起典型案例。分别是：&lt;/p&gt;&lt;p&gt;1.河北省隆化县扶贫和农业开发办公室原党组成员、副主任王金柱在扶贫项目上为他人谋取利益并从中收受财物等问题。2013年至2016年，王金柱利用职务上的便利，为多个村、合作社和个人在申报验收扶贫项目上谋取利益，先后收受12人钱款10.4万元及其他物品；对7个扶贫项目申报验收把关不严，造成国家扶贫资金184.2万元被骗取。2017年11月、2018年1月，王金柱受到开除党籍、开除公职处分，违纪所得已被追缴，其涉嫌犯罪问题及线索被移送司法机关依法处理。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;2.辽宁省康平县柳树屯蒙古族满族乡党委原书记杨宇新套取扶贫资金等问题。2014年至2017年，杨宇新通过虚构工程项目、伪造工程合同等方式，套取专项扶贫资金12万元和财政资金446万余元，用于个人消费、请客送礼等支出；分21次挪用村级集体资金和村民互助资金435万余元；将用少数民族发展专项扶贫资金、以工代赈资金投资建设的扶贫项目，违规指定其司机、同学承建。2017年9月，杨宇新受到开除党籍、开除公职处分，违纪所得已被追缴，其涉嫌犯罪问题及线索被移送司法机关依法处理。&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;3.湖北省红安县七里坪镇石家咀村原党支部书记、村委会主任石生富等人截留五保资金等问题。2015年至2016年，石生富与石家咀村党支部委员、村委会委员蔡桂莲、石和生以及村委会副主任万胜全商定，分2次从五保户的供养资金中截留1.76万元，用于发放村干部补贴。2017年9月，七里坪镇要求石家咀村整改，石生富、蔡桂莲编造虚假的退还五保资金清单，实际并未退还截留资金。此外，石生富等人在低保评定时优亲厚友，违规为村干部亲属办理低保（尚未实际获得低保金）；家庭经济困难的群众周某某多次申请低保，石生富等人却以指标不足为借口不予办理。2017年11月，石生富受到开除党籍处分，被依法罢免村委会主任职务；万胜全受到留党察看二年处分，被依法罢免村委会副主任职务；蔡桂莲受到留党察看一年处分，被依法罢免村委会委员职务；石和生受到党内严重警告处分；截留的1.76万元已被追缴并足额发放给8户五保户。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;4.湖南省湘西土家族苗族自治州农业机械管理局原党组成员、副局长钟昌文骗取扶贫资金等问题。2013年至2016年，钟昌文在担任湘西州农机局驻龙山县农车乡纸厂村扶贫工作组组长期间，利用组织实施纸厂村扶贫工程项目的职务便利，采取虚增工程量等方式，与民营企业人员王某某共同占有扶贫工程项目资金607万余元。其中，钟昌文个人占有168万余元。2012年至2017年，钟昌文还利用先后担任龙山县政府副县长、湘西州农机局副局长兼农机局驻龙山县农车乡纸厂村扶贫工作组组长、湘西州红十字会常务副会长等职务便利，帮助他人承揽扶贫工程建设项目或谋取其他非法利益，收受他人财物117万余元。2017年8月、10月，钟昌文受到开除党籍、开除公职处分，违纪所得已被追缴，其涉嫌犯罪问题及线索被移送司法机关依法处理。王某某涉嫌犯罪问题及线索亦被移送司法机关依法处理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;5.广东省兴宁市水口镇洋槐村原党支部书记、村委会主任刘雨等人违规收受财物、套取挪用扶贫资金等问题。2012年至2015年，刘雨以指定工程承包方等方式帮助他人承揽扶贫等工程建设项目，先后10次收受承包商黄某某、刘某某等人钱款10.7万元。2014年，水口镇政府驻洋槐村工作组组长刘志浩指定其妻陈某某承接洋槐村藤艺培训扶贫项目，从中获利1.5万元。2014年，在未履行立项报批和招标程序的情况下，刘雨与洋槐村时任村委会委员兼出纳刘依龙等人使用对口帮扶扶贫资金89.47万元，实施油茶种植项目，种植后不进行养护，导致油茶长势极差、存量稀少，造成扶贫资金严重损失浪费；通过签订虚假投资合同、伪造会计凭证方式，套取挪用对口帮扶扶贫资金45万元。2017年7月，刘雨受到开除党籍处分，被依法罢免村委会主任职务，其涉嫌犯罪问题及线索被移送司法机关依法处理；2017年12月，刘志浩、刘依龙分别受到留党察看一年处分；刘雨违规收受的资金和刘志浩不当获利均已被追缴。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;6.广西壮族自治区融安县桥板乡党委原书记王时林非法占有扶贫项目资金等问题。2015年，王时林利用职务上的便利，将扶贫项目结余资金1.5万元占为己有，并伪造该资金用于修路的虚假材料。2013年至2016年，王时林利用职务上的便利，帮助民营企业人员杨某某、周某某等人承接扶贫工程建设等项目，先后9次收受杨某某、周某某等人钱款12.5万元。2017年12月，王时林受到开除党籍、开除公职处分，侵占和违规收受的资金均已被追缴，其涉嫌犯罪问题及线索被移送司法机关依法处理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;7.贵州省龙里县扶贫开发局原局长范玉旭索取、收受钱款等问题。2012年至2016年，范玉旭先后7次向承接扶贫项目、享受扶贫贷款贴息政策的企业索取钱款19万余元，12次收受相关企业钱款84.5万元（索取、收受的钱款已被范玉旭挥霍）。范玉旭以“减贫摘帽”奖励为名，拨付某养殖企业3万元，实际让企业用该笔资金为与其关系密切的人员修建竹鼠圈舍及提供50对种鼠。2016年7月、8月，范玉旭受到开除党籍、开除公职处分，其涉嫌犯罪问题及线索被移送司法机关依法处理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;8.新疆维吾尔自治区喀什市阿瓦提乡民政办低保专干麦麦提江·喀日挪用挥霍低保资金问题。2016年3月至4月，麦麦提江·喀日利用职务上的便利，私自挪用阿瓦提乡农村低保资金173万余元，并将其中101万余元用于赌博，已全部输掉。2016年5月，麦麦提江·喀日受到开除党籍、开除公职处分，挪用的173万余元已被全部追回，其涉嫌犯罪问题及线索被移送司法机关依法处理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;习近平总书记在十九届中央纪委二次全会上强调，要推动全面从严治党向基层延伸，严厉整治发生在群众身边的腐败问题。十九届中央纪委二次全会围绕打赢脱贫攻坚战，对开展扶贫领域腐败和作风问题专项治理进行了动员部署。各级纪检监察机关要以习近平新时代中国特色社会主义思想为指导，深入贯彻党的十九大关于脱贫攻坚的战略部署，落实十九届中央纪委二次全会精神和中央纪委办公厅印发的《关于2018年至2020年开展扶贫领域腐败和作风问题专项治理的工作方案》，在新的一年里谋好篇、起好步、开好局，加强扶贫领域监督执纪问责，以维护群众切身利益的扎实成效取信于民。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中央纪委有关负责人指出，治理扶贫领域腐败和作风问题是纪检监察机关今后三年的一项重要任务。各级纪检监察机关要认真履行党章和宪法赋予的职责，加大监督执纪力度，重点查处贯彻落实党中央脱贫攻坚决策部署不坚决不到位，搞形式主义、官僚主义，弄虚作假问题，严肃查处贪污挪用、截留私分、虚报冒领、强占掠夺等行为。要因地制宜，精准监督，既解决普遍存在的共性问题，又发现和纠正本地区本部门突出的个性问题。要加大监督检查、督查督办和通报曝光力度，把责任和任务压实到县乡党委政府、覆盖到“最后一公里”。要更加突出问责，对党委政府主体责任、纪委监督责任和有关职能部门监管职责不落实的，坚决追究责任。要通过深入细致的专项治理，确保扶贫政策和资金项目的“阳光雨露”惠及贫困群众，增强人民群众获得感，厚植党的执政基础。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '9', '0', '1534407388', '0', '0', '1');
INSERT INTO `c_news` VALUES ('81', '中央纪委公开曝光六起扶贫领域腐败 和作风问题典型案例', 'Uploads/2018-08-16/5b7545dede381.jpg', '&lt;p&gt;党的十九大以来，各级纪检监察机关进一步筑牢“四个意识”，不断提高政治站位，坚决贯彻落实习近平总书记关于打赢脱贫攻坚战的系列重要讲话和指示精神，扎实推进扶贫领域腐败和作风问题专项治理，监督执纪问责力度持续加大。日前，中央纪委公开曝光6起典型案例。分别是：&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;湖南省衡阳市卫生和计划生育委员会原副调研员全金文在扶贫结对帮扶工作中为他人谋取不正当利益等问题。2015年11月、2016年4月和9月，全金文利用挂职任湘西土家族苗族自治州花垣县委常委、副县长（负责衡阳市对花垣县的扶贫结对帮扶工作）的职务便利，先后3次帮助该县妇幼保健院原院长伍文祥之子伍健经营的公司获取扶持资金共计75万元。作为回报，2016年2月，伍文祥帮助全金文的表弟黄衡生通过围标获得妇幼保健院采购医疗器械的项目合同，黄衡生从中获利36万余元，全金文对此知情，但未予反对。2016年下半年，全金文先后两次向麻栗场镇党委书记石莹、镇纪委书记黄勇引荐其同乡王成于，帮助王成于承接工程项目。石莹、黄勇违规决定将60万元援建项目承包给王成于，且多支付工程款5.59万元。此外，全金文挂职期间还将应由其个人支付的购买汽车装饰用品、笔记本电脑、数码相机等费用共计6.18万元，在花垣县妇幼保健院扶贫援建资金中报销。2018年3月，全金文受到留党察看一年、行政撤职处分，有关违纪资金已被追缴。2017年10月，石莹受到党内严重警告处分，黄勇受到党内警告处分。其他涉案人员涉嫌犯罪问题及线索被移送司法机关依法处理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;青海省玛多县黄河乡原党委委员、人武部部长侯长军侵占草原生态保护补助奖励资金和民政特困人员生活补助资金问题。2011年至2016年，侯长军在包村帮扶期间，利用职务上的便利，将草原生态保护补助奖励资金和民政特困人员生活补助资金共52.05万元据为己有，用于个人开支。2017年10月，侯长军受到开除党籍、开除公职处分，其涉嫌犯罪问题及线索被移送司法机关依法处理，违纪资金已被追缴。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;黑龙江省依安县富饶乡兴信村原党总支书记兼村委会主任李庆江侵占泥草房改造补助资金问题。2015年底，李庆江在受乡政府委托发放兴信村四屯村民的泥草房改造补助资金过程中，谎称资金不足，让村民先签字确认收到改造款、等下批资金到位后再发放，将32户村民的泥草房改造补助资金15.55万元据为己有，用于个人生活支出。2017年6月，李庆江受到开除党籍处分，其涉嫌犯罪问题及线索被移送司法机关依法处理，违纪资金已被追回并发放给村民。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;广西壮族自治区平乐县二塘镇大展村党支部原书记卢瑞峰弄虚作假骗取扶贫猪苗等问题。2015年9月，卢瑞峰在组织实施香猪养殖扶贫项目中，通过编造虚假发放表、截留猪苗等方式，个人违规获利1.28万元，并收受猪苗出售人“好处费”0.47万元。此外，卢瑞峰收受4户危房改造户“好处费”共计1.06万元，收受村屯绿化建设项目承包人“好处费”0.7万元。2017年8月，卢瑞峰受到留党察看二年处分，违纪资金已被追缴。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;四川省理县民政和扶贫移民局原党组书记、局长何尔乓，副局长张利等人因对扶贫资金监管不力被问责。2015年8月至9月，理县泰康养殖专业合作社理事长施某某通过虚报53头种猪的方式，骗取财政专项扶贫资金10.8万元，并挪用扶贫资金8万元用于个人养殖基地建设。张利、县民政和扶贫移民局工作人员杨俊，时任下孟乡副乡长王政，下孟乡畜牧兽医站站长唐兑松等人在验收时未清点种猪数量、未测量圈舍改造提升情况，失职失责。2017年5月，何尔乓、王政分别受到党内警告处分，张利、杨俊、唐兑松分别受到党内严重警告处分，违纪资金已被追缴。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;云南省大关县供销联社副主任黄云斌在驻村扶贫工作中弄虚作假，搞形式主义、官僚主义问题。2017年，黄云斌担任翠华镇翠屏村党总支第一书记、驻村扶贫工作队队长期间，在精准识别摸底调查工作中，未按要求对农户住房逐户拍照，而是对同一农户房屋从不同角度多次拍照并分别假冒为其他农户房屋。其负责的摸底调查、信息核查、农民纯收入计算等表册存在大量缺项、漏项等问题，导致所负责片区未如期完成摸底调查任务，造成不良影响。2017年10月，黄云斌受到党内严重警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;从曝光的6起典型案例看，有关涉案人员对党中央三令五申置若罔闻，对法纪毫无敬畏，利用脱贫帮扶大肆谋利，有的费尽心思骗取，有的明目张胆作假，有的屡屡挪用贪占，有的形式主义官僚主义严重、不担当不尽责。这些问题严重损害贫困群众的切身利益，伤害人民群众的获得感和幸福感，直接影响脱贫攻坚工作成效，背离党中央以人民为中心的基本要求，破坏党和政府形象，必须依纪依法坚决惩治。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;3月5日下午，习近平总书记在参加他所在的十三届全国人大一次会议内蒙古代表团审议时，就扎实推进脱贫攻坚强调指出，今年是脱贫攻坚作风建设年，要认真开展扶贫领域腐败和作风问题专项治理，加强扶贫资金管理，对挪用、贪污扶贫款项的行为严惩不贷。群众对一些地方脱贫攻坚工作中的形式主义、官僚主义、弄虚作假现象非常反感，要认真加以解决。中央纪委有关负责人指出，各级纪委要进一步把思想和行动统一到习近平总书记重要讲话精神和党中央决策部署上来，按照十九届中央纪委二次全会部署和全国“两会”精神，找准定位、服务大局，针对本地区存在的突出问题，深入开展扶贫领域腐败和作风问题专项治理。要高度关注产业项目扶贫、对口帮扶以及扶贫工程建设方面的问题，紧紧盯住脱贫攻坚工作中出现的弄虚作假、做表面文章等形式主义官僚主义问题，继续加大对贪污挪用、截留私分、虚报冒领、强占掠夺等行为的审查调查力度。要强化问责，对贯彻党中央脱贫攻坚决策部署不坚决不到位的问题，对主体责任、监督责任和职能部门监管职责不落实的问题，严肃问责，决不手软。要充分利用国家监察体制改革成果，切实转化为治理效能，进一步加大对扶贫领域腐败和作风问题的监督执纪问责和调查处置力度，加强对扶贫领域所有行使公权力的公职人员的监督监察，以专项治理的扎实成效取信于民，为脱贫攻坚提供坚强的纪律保证。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '9', '0', '1534407532', '0', '0', '0');
INSERT INTO `c_news` VALUES ('82', '中央纪委公开曝光七起违反中央八项规定精神问题', 'Uploads/2018-08-16/5b753676a0e38.jpg', '&lt;p&gt;日前，中央纪委对7起违反中央八项规定精神典型问题进行公开曝光。这7起典型问题是：&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;山东省东平县政协原副主席赵永恕等人借公务差旅之机公款旅游等问题。2017年5月15日至19日，赵永恕带队赴安徽省、江西省考察精准扶贫工作。考察期间，赵永恕等人没有严格按照方案开展实质性学习考察，多数时间到安徽、江西等地景点参观旅游，对精准扶贫工作仅在就餐期间与接待方进行了简单交流，旅游产生的景区门票等费用16084元在单位报销。赵永恕安排购买了白酒赠送给接待方，还安排购买了茶叶在返回后赠送给东平县政协工作人员，相关费用通过虚开车辆租赁费方式在单位报销。赵永恕受到党内严重警告处分，被免去职务；其他相关责任人受到相应处理；违纪款被收缴。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;陕西省纪委派驻省委办公厅纪检组原组长郑东平违规公款吃喝问题。2017年2月16日，郑东平召集多名党员干部在西安市某酒店私人聚餐，席间饮用省接待办提供的公务接待用酒4瓶、价值2313元，菜品、饮料、香烟等消费2496元，签单挂在省接待办公务接待账上。郑东平受到党内严重警告处分，被免去职务、调离纪检监察系统；其他相关责任人受到相应处理，并退赔有关费用。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;贵州省关岭布依族苗族自治县文体广电旅游局原党组书记、局长张骏违规收受礼品礼金问题。2017年春节期间，张骏在与管理服务对象交往过程中，其妻子先后收受某乡村旅游投资开发有限公司法人陈某赠送的一箱12瓶装高档酒水及5000元礼金，张骏对此事知情。张骏受到党内严重警告处分，违纪款物被收缴。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;天津市滨海新区寨上街道工委书记陈玉慧巧立名目违规发放津补贴问题。2013年12月至2014年9月，经时任茶淀街道工委书记陈玉慧同意，该街道以“中元节补贴”等名义违规发放各类津贴补贴共计138.7万余元，其中陈玉慧领取2万元。2014年9月至2017年3月，经陈玉慧同意，寨上街道以“换届延时补贴”等名义违规发放各类津贴补贴共计173.4万余元，其中陈玉慧领取4.9万元。陈玉慧受到党内严重警告处分，并退缴违纪款项。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;江西省南城县粮食局原党委委员、副局长邹建彪违规操办儿子婚宴问题。2018年2月21日，邹建彪操办儿子婚宴，违规邀请管理和服务对象45人参加并收受礼金48520元。邹建彪受到党内严重警告处分，被免去职务，责令退回违纪款。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中国快递协会原常务副会长兼秘书长李惠德超标准乘坐交通工具等问题。2013年10月和2014年3月，李惠德先后通过主持召开会议、制定文件等方式，提高本人和协会有关领导出差乘坐交通工具标准，并于2013年10月至2016年5月，往返北京和上海162次，均乘坐飞机头等舱或高铁商务座。同时，李惠德还存在其他违纪问题。李惠德受到党内严重警告处分，并责令其辞去中国快递协会常务副会长、秘书长职务，退赔有关费用。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;交通银行吉林省分行风险部总经理蔡绍军等人违规公款吃喝问题。2017年7月13日中午，蔡绍军借其所在部门员工工作调动之机，组织18名员工外出聚餐饮酒，共计消费2171元。聚餐前，蔡绍军曾表示此次聚餐由其个人请客；聚餐后，蔡绍军安排员工结账并用公款报销了该笔餐费。蔡绍军受到党内严重警告处分，并退赔有关费用。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中央纪委有关负责人指出，上述7起问题大部分发生在2017年以后，有的甚至发生在党的十九大之后，是不知止不收敛不收手的典型，这些问题更加突显出与全面从严治党的大形势格格不入。各级党员干部要从中汲取教训，切实把自己摆进去，提高政治站位，增强“四个意识”，加强党性修养，从小事小节做起，以更高标准严格要求自己，深入落实中央八项规定精神。各级领导干部要向党中央看齐对标，不仅发挥示范作用，带头反对“四风”，破除特权思想，形成“头雁效应”；还要担当起领导责任，认真谋划、真抓严管，坚决纠正管辖范围内的作风问题和特权现象。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中央纪委有关负责人强调，在落实中央八项规定精神、反对“四风”方面，各级党员干部绝不能有歇歇脚、松口气的想法，必须始终坚持高标准、严要求。要进一步打破惯性思维，厘清公私界限，严格按照规定和标准办事，这既是对自己负责，也是对同志负责。公务接待安排高档菜肴、豪华套房、景点观光，体现的不是热情；逢年过节组织公款聚餐、滥发钱物，体现的不是关怀；借婚丧事宜给领导送礼金、开公车“撑门面”，体现的不是情谊；碍于情面没有坚持原则、半推半就接受，体现的也不是尊重。纪检监察机关查处的违纪问题中，这类“好心办坏事”、害人害己的案例不少，相关人员受到严肃处理，退赔违纪款项，并被通报曝光，教训深刻，须引以为戒。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中央纪委有关负责人指出，作风建设永远在路上，查处“四风”问题要严到底、不能让。各级纪检监察机关要按照党的十九大和中央纪委二次全会关于作风建设的新部署新要求，以钉钉子精神持之以恒正风肃纪，充分发挥监察体制改革后的制度优势，加强对所有行使公权力的公职人员作风状况的监督。要继续紧盯享乐主义和奢靡之风，重点整治违规公款吃喝、收送礼品礼金、违规配备使用公车、大办婚丧喜庆等增量较多的问题类型，严防反弹复燃；同时密切关注隐形变异等新动向新表现，及时研究有针对性措施。要在整治形式主义和官僚主义方面下更大功夫，结合本地区本部门本单位实际，聚焦贯彻落实中央重大决策部署、服务群众、调查研究、履职担当等方面，立足于看得见、管得着、抓得住的具体问题，从各级领导机关和领导干部抓起，着力整治、抓出成效。无论是“四风”老问题，还是新冒出来的问题，什么问题突出就解决什么问题，“发现--治理--再发现--再治理”，“突破--巩固--再突破--再巩固”，一个问题一个问题突破，一个阶段一个阶段推进。坚持越往后执纪越严，对党的十九大以后仍然不知止、不收敛、不收手的，加大问责力度，用严明的纪律推动作风建设向纵深发展。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中央纪委有关负责人强调，五一假期将至，“四风”问题易发多发，为确保风清气正过节，各级纪检监察机关要认真谋划部署，释放强烈信号，畅通监督举报渠道，强化监督检查。对节日期间发现的问题线索，要第一时间核查处置，查实后严肃执纪问责，一律通报曝光。通过一个节点一个节点坚守，一步一步管出习惯、化风成俗，持续巩固和拓展落实中央八项规定精神成果。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '9', '0', '1534408310', '0', '0', '0');
INSERT INTO `c_news` VALUES ('83', '中央纪委公开曝光八起违反中央八项规定精神问题', 'Uploads/2018-08-16/5b75370e02538.jpg', '&lt;p&gt;日前，中央纪委对8起违反中央八项规定精神典型问题进行公开曝光。这8起典型问题是：&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;宁夏回族自治区党委机关事务管理局局长武晋斌违规接受公款宴请问题。2016年8月6日晚，武晋斌与家属、朋友一行6人因私出行，违规接受固原市机关事务管理局领导公款宴请，共计消费2480元。2017年3月8日中午，武晋斌一行5人因公出差返回途中，违规接受固原市机关事务管理局领导公款宴请，共计消费2666元。武晋斌受到党内严重警告处分，并退赔相关费用，其他责任人受到相应处理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;河南省气象局原党组书记、局长赵国强接受超标准公务接待问题。2017年3月16日，赵国强等人到洛阳市气象局调研，当晚接受该单位超标准接待，共计消费5332元，人均消费761.7元，其中违规饮用3瓶高档白酒共计3930元。当天，赵国强等4人入住洛阳市某酒店，4人当晚住宿费共超出标准322元（其中赵国强个人超出标准118元）。以上费用均由洛阳市气象局采取拆分单据、伪造公函、虚列会议费等方式公款报销。赵国强还存在其他违纪问题。赵国强受到党内严重警告处分，其他责任人受到相应处理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;吉林省吉林市龙潭区新吉林街道办事处党工委书记刘宪峰违规组织公款吃喝问题。2017年4月至11月，经刘宪峰同意，新吉林街道以虚开发票的方式，套取现金11300元，用于单位宴请和聚餐。刘宪峰受到党内严重警告处分，其他责任人受到相应处理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;浙江省温州市瓯海区商务局原党组成员、区粮食局原副局长戴伟忠接受管理服务对象安排的旅游问题。2017年6月，戴伟忠等人到浙江诸暨、江苏沭阳公务出差，戴伟忠携家属同行，期间赴诸暨、南京等景区旅游，景点门票和部分餐费1000余元由随行的管理服务对象支付，其他旅游相关费用12825元分别在区粮食局和下属单位报销。2017年7月，戴伟忠到舟山开会，携家属同行，违规要求下属单位租车并安排驾驶员，相关费用共计2950元在下属单位报销。戴伟忠还存在其他违纪问题。戴伟忠受到党内严重警告处分和免职处理，并退赔相关费用。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;湖北省武汉市江汉区常青街街道党工委原副书记、办事处原主任易干军违规组织公款吃喝等问题。2018年1月14日至2月7日，易干军在担任常青街街道办事处主任、某房屋征收指挥部指挥长期间，先后组织私人朋友和区内其他单位人员在该指挥部食堂违规宴请、聚餐10次。用公款赠送礼品礼金，折合金额共计1万余元。易干军受到撤销党内职务、行政撤职处分，其他责任人受到相应处理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;湖南省株洲市城发集团原党委副书记、董事长廖晖违规收受礼品礼金等问题。2017年6月至2018年2月，廖晖在担任株洲市城发集团公司党委副书记、董事长期间，先后收受可能影响公正执行公务的礼金2笔共8000元、购物卡3次7张面值共7000元、高档香烟17条、高档女包1个，均未按规定登记、上交。廖晖还存在超标准配备、使用办公用房等问题。廖晖受到撤销党内职务处分，违规收受的礼品、礼金、购物卡等被收缴。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;四川省遂宁市大英县河边镇波思村党支部书记王清胜借操办其子婚宴违规收受礼金问题。2018年2月13日，王清胜为儿子举办结婚宴，共办宴席29桌，违规收受了波思村低保户、贫困户、五保户共12户村民所送礼金共计2200元。在组织调查前，主动退还了违规收受的礼金。王清胜受到党内严重警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;光大银行呼和浩特分行营业部原党支部书记、副总经理张莉军组织公款出国旅游问题。2017年5月至6月，在张莉军主持营业部工作期间，同意该部组织26名员工分四批赴斯里兰卡旅游，并以奖励费的名义公款报销了10名员工共计25532元的旅游费用，其他人员旅游费用因组织调查尚未公款报销。张莉军受到党内严重警告和记大过政务处分，被免去现职，其他责任人受到相应处理，并责令退回公款报销的费用。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中央纪委有关负责人指出，上述8起问题大部分发生在2017年以后，有的甚至发生在党的十九大之后。这些问题反映出，在高压态势下一些地方和单位特别是少数基层单位压力传导不到位，仍有少数党员干部纪律和规矩意识淡薄，心无敬畏、行无规矩，不收敛不收手。这些问题的查处，释放了对“四风”问题越往后执纪越严的强烈信号，表明了相关地方、单位党组织和纪检监察机关持之以恒正风肃纪的坚决态度。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中央纪委有关负责人强调，上述8起问题中，有的变换手法，把餐桌摆到内部食堂当幌子，掩盖公款吃喝的事实；有的坦然接受管理服务对象的宴请、礼金和旅游安排，既违反了廉洁纪律，又破坏了“亲”“清”的政商关系；有的借喜庆事宜收金敛财，甚至向贫困户、低保户伸手，陈规陋俗屡禁不改；有的组织公款出国旅游，慷公家之慨；有的单位一把手带头违纪，带坏了单位风气。这些受到处理的党员干部，教训极为深刻，广大党员干部必须引以为戒，时刻反躬自省。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中央纪委有关负责人指出，当前“四风”问题反弹回潮的隐患仍不容忽视，落实中央八项规定精神、纠正“四风”工作必须久久为功、毫不松懈，各级纪检监察机关必须保持定力、耐力，一个阶段要盯住一个阶段的突出问题、把握一个阶段新的特点，持之以恒、善始善终、涵养成风。要紧盯“四风”问题，密切关注其新动向新表现，盯住重要节点、重点领域和岗位、关键环节，抓具体、补短板、防反弹，持续强化监督执纪问责，将依纪监督和依法监督相结合，把纠正“四风”工作覆盖所有行使公权力的公职人员，把压力持续传导至基层各党组织、各单位。广大党员干部，特别是领导干部要切实加强党性修养，不断提高自身免疫力，带头履职尽责担当，带头遵规守纪守法，使党的优良传统和作风内化于心、外化于行，成为日常习惯和自觉遵循。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中央纪委有关负责人再次强调，端午假期将至，各级纪检监察机关要继续强化监督检查，对节日期间顶风违纪行为、触碰“红线”的人和事，坚持露头就打、快查严办、精准发力，对违规违纪问题一律从严处理，决不手软、姑息，营造风清气正的节日氛围。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '9', '0', '1534408462', '0', '0', '0');
INSERT INTO `c_news` VALUES ('84', '河北省政协原副主席艾文礼涉嫌严重违纪违法接受中央纪委国家监委纪律审查和监察调查', 'Uploads/2018-08-16/5b75377b4f8ae.jpg', '&lt;p&gt;河北省政协原副主席艾文礼涉嫌严重违纪违法，已投案自首，目前正接受中央纪委国家监委纪律审查和监察调查。&lt;/p&gt;', '8', '0', '1534408571', '0', '0', '0');
INSERT INTO `c_news` VALUES ('85', '吉林通报12起履行管党治党责任不力被问责案例', 'Uploads/2018-08-16/5b7538c5b07ff.jpg', '&lt;p&gt;1.榆树市交通运输局党组书记、局长张岩，党组成员、纪检组组长王文博因下属单位超标准配备和装修办公用房问题被问责。2017年1月至2018年4月，榆树市出租车管理办公室负责人陈玉国违规使用超过规定标准23平方米的办公用房，并超标准装修出租车管理办公室1538平方米的办公用房。2018年5月，陈玉国受到党内严重警告处分并免职；张岩、王文博履行主体责任、监督责任不力，分别受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2.桦甸市人社局党委委员、就业局局长王立新因违反组织纪律、不正确履行监管职责问题被问责。2015年，桦甸市就业局未履行“三重一大”决策程序，擅自使用大额资金购买办公设备、支付维修费用66.66万元。2017年6月，桦甸市8名乡镇劳动保障所负责人在山东省考察期间绕道旅游1天，并在市就业局报销旅游费用0.32万元。2018年4月，桦甸市就业局财会人员宿磊受到诫勉谈话处理；参加公款旅游人员分别受到相应党纪政务处分，违纪款全部收缴；王立新负主要领导责任，受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;3.四平市辽河垦区农业局原局长杨晓辉、辽河垦区双辽农场原党委书记兼场长梁宏臣等12人因下属单位人员违规饮酒造成严重后果问题被问责。2017年7月14日中午，辽河垦区农业局农机监理站站长钱辉带领本站职工崔丽霞等共5人在辽河垦区双辽农场博爱分场检查工作时，违规接受博爱分场党支部书记、场长柴国平安排的公务接待并大量饮酒，当晚钱辉死亡，造成恶劣影响。2017年7月，柴国平受到撤销党内职务、行政撤职处分；参加公务接待的分场副场长陈玉金、张良、治保主任张宝红分别受到党内严重警告处分并免职，崔丽霞及分场会计宫文杰分别受到党内严重警告处分，其他4人受到相应处理。负有重要领导责任的辽河垦区农业局局长杨晓辉受到党内严重警告处分并免职，支部委员、副局长刘国强受到撤销党内职务、行政撤职处分，副局长裴宇东受到党内警告处分；辽河垦区双辽农场党委书记、场长梁宏臣，党委副书记、纪委书记、工会主席牟福和分别受到党内严重警告处分并免职，党委委员、副场长赵平受到撤销党内职务、行政撤职处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;4.东丰县环保局党组成员、副局长韩健因分管部门不正确履行职责造成环境污染问题被问责。2013年1月至2015年2月，时任东丰县环境监察大队副大队长赵方正在对辖区内某钢铁企业进行环保检查时，未按规定对企业废气排放情况进行检查，并虚构检查结果，造成该企业长期超标排放废气，严重污染周边环境。2017年8月，赵方正受到党内严重警告处分；韩健负有主要领导责任，受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;5.通化县卫生和计划生育局原党委书记杨德武因下属单位违规评定职称等问题被问责。2015年8月至2017年6月，通化县人民医院院委会擅自决定，将不具备条件的4名科室主任晋升为副高职称，并按副高职称增幅的50%增发工资4.56万元。2017年11月，该院党总支书记焦延军、副院长迟有福分别受到党内警告处分，违纪款全部收缴；杨德武作为分管纪检和人事工作的党委书记，履行主体责任不力，受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;6.白山市委统战部副部长王世洋因工作失职造成国家专项扶持资金遭受重大损失问题被问责。2015年3月，时任白山市浑江区七道江镇旱沟村党支部书记、村委会主任任胜远受白山市某种植合作社法人赵俊杰请托，采取编造虚假材料、伪造种植项目手段，骗取国家“兴边富民”专项扶持资金30万元。任胜远、赵俊杰已被检察机关立案并提起公诉。2017年12月，任胜远受到开除党籍处分；时任浑江区副区长兼区“兴边富民”行动领导小组组长王世洋负有重要领导责任，受到警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;7.镇赉县坦途镇党委副书记郑荣飞因对贫困户识别认定工作审核把关不严问题被问责。2015年11月，在贫困户识别认定工作中，该镇有4个村将8户公职人员家庭确定为建档立卡贫困户，造成不良影响。2017年5月，四家子村村委会主任许庆福、村监督委员会主任宁凤民分别受到党内严重警告处分，特力村报账员李世春、永庆村报账员孙国玉分别受到党内警告处分。郑荣飞负有主要领导责任，受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;8.松原市妇幼保健计划生育技术服务中心原党支部书记姜洪生因履行主体责任不力问题被问责。2017年8月2日，该中心副主任孙永志为其儿子操办升学宴，邀请本单位同事及下属人员共40余人参加，违规收受礼金0.8万元。姜洪生接到孙永志通知后，采取虚假预警谈话方式规避责任，不但没有制止，还参加了升学宴。2017年8月，孙永志受到记大过处分并免职，违规收受礼金全部退还；姜洪生不担当、不作为、履行主体责任不力，受到党内严重警告处分并免职。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;9.图们市住建局纪检组组长朴青日因履行监督责任不力问题被问责。2017年1月至7月，该局住房保障管理办公室违反有关规定，将收取的棚户区拆迁户回迁差价款14.94万元以现金形式存放于该局财务科金库内7个月，并将收取的廉租房和公租房租金13.2万元以现金形式存放于该局住房保障管理办公室保险柜49天。2018年6月，该局住房保障管理办公室主任周子丰受到党内警告处分；朴青日未认真履行监督责任，受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;10.长白山保护开发区驻长春联络处主任朴剑珲因履行主体责任不力问题被问责。2017年，长白山保护开发区驻长春联络处综合科副科长兼会计徐新违规为开发区管委会相关领导报销洗衣费、长途电话费、餐费、交通费共计1.19万元。2018年6月，徐新受到党内警告处分，违规报销款项全部收缴；朴剑珲履行主体责任不力，受到诫勉谈话处理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;11.公主岭市城市管理执法局广告亮化中心副主任付春雁因下属违规使用公务用车问题被问责。2017年4月29日晚，该中心司机孙兆荣驾驶本单位一台执法车辆执行公务后，违反公务用车管理使用规定，将该车停放在自家楼下，次日驾驶该车上班。2017年6月，孙兆荣受到警告处分；付春雁负有领导责任，受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;12.梅河口市杏岭镇农机工作站站长张智凤因不正确履行职责致使财政专项补贴资金遭受损失问题被问责。2010年至2013年，该镇有3个村共虚报深松整地面积2970亩，骗取财政专项补贴资金2.97万元，用于村招待费等不合理费用支出。2017年11月，杏岭村党支部书记兼村委会主任周太权、兴起村监督委员会主任刘成江分别受到党内警告处分；张智凤未履行对深松整地作业地块进行验收职责，受到党内警告处分。（吉林省纪委监委 || 责任编辑 杨文佳）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '9', '0', '1534408901', '0', '0', '0');
INSERT INTO `c_news` VALUES ('86', '青岛通报5起违规配备使用公务用车典型问题', 'Uploads/2018-08-16/5b7538ff7bf4f.jpg', '&lt;p&gt;近期，根据中央第七巡视组巡视反馈意见和省纪委部署要求，市纪委监委正在全市组织开展违规配备使用公车、滥发津补贴、违规公款吃喝、违规收送礼品礼金问题专项治理工作。为发挥警示教育作用，督促党员干部严守纪律、改进作风，现将5起违规配备使用公车典型问题通报如下。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;青岛仲裁办原党组书记、副主任王恒东超标准使用公车等问题。2013年12月至2016年6月，王恒东超标准使用单位租赁排气量为2.0升的凯美瑞轿车，受到党内警告处分。其还存在履行全面从严治党主体责任不力问题，被免去党组书记职务。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;市科协机关党委原委员、市科协原秘书长高小娣私车公养问题。2012年9月至2015年12月，高小娣任市科协办公室主任、秘书长期间，利用管理单位公车加油卡的职务便利，多次使用公车加油卡为其私家车加油，共计4.8万余元。高小娣受到撤销党内职务、政务撤职处分，违纪款项予以收缴。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;市城乡建设委离退休干部处调研员孙进伟超标准配备使用公车等问题。2014年4月至2015年8月，孙进伟任市城乡建设委房地产业处调研员兼青岛市建设投资有限公司董事长期间，违规安排该公司购买价格23.48万元、排气量2.5升的轿车作为其公务用车，受到党内严重警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;北区湖岛街道办事处城市综治办副主任傅兆春、兴隆路街道办事处安监办社工孟莉违反公车使用管理规定问题。2017年9月，经时任兴隆路街道办事处安监办主任傅兆春同意，孟莉搭乘单位公车办理私事。傅兆春、孟莉分别受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;胶州市人民法院马店法庭司法协助人员宁祥杰公车私用问题。2017年9月，宁祥杰搭乘单位警车执行公务期间办理私事。宁祥杰受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;通报要求，广大党员干部要从中汲取深刻教训，切实增强纪律意识，严守公私界限，不触底线、不碰红线，自觉改进作风，树立良好形象。各级党委（党组）要按照部署要求，抓紧开展违规配备使用公车、滥发津补贴、违规公款吃喝、违规收送礼品礼金问题专项治理，深入自查自纠，及时发现问题，确保整改到位；要强化日常教育监督管理，强化对各项纪律执行情况的监督检查，把作风建设的各项规定和纪律要求落到实处。各级纪检监察机关要紧盯公车改革后违规配备使用公车、公车私用、私车公养等问题的新动向新表现，强化监督执纪问责，继续保持对“四风”问题露头就打的高压态势，对违规违纪行为发现一起、查处一起，依规依纪严肃处理，决不姑息、决不纵容，以严明的纪律推动作风建设不断向纵深发展。（青岛市纪委监委）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '9', '0', '1534408959', '0', '0', '0');
INSERT INTO `c_news` VALUES ('87', '天津通报5起不作为不担当典型问题', 'Uploads/2018-08-16/5b753968e82c7.jpg', '&lt;p&gt;&lt;strong&gt;1.天津职业技术师范大学外国语学院党委副书记兼副院长王爱敏失职失责导致该院学生违规获得国家助学金被问责。&lt;/strong&gt;王爱敏在国家助学金评审工作中，未审核发现学生王某伪造的低保证，对有人反映该学生低保证可能存在弄虚作假的情况置若罔闻，不予追查，在明知弄虚作假的事实面前，阻挠其他学生举报，并在该校学工部调查过程中，隐瞒事实真相，未如实说明情况，致使王某获得二等国家助学金2800元。王爱敏受到党内严重警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;2.天津理工大学理学院副院长王瑞东工作失职导致学生档案遗失被问责&lt;/strong&gt;。王瑞东作为分管领导，对档案工作管理不严，学院一名学生部分档案遗失。2018年5月，王瑞东受到诫勉处理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;3.天津市宁河区市场监管局北淮淀镇食安办主任张明胜等人未及时向申办人发放食品经营许可证被问责。&lt;/strong&gt;宁河区某食品店、某公司均于2017年9月提交申办食品经营许可证相关材料。张明胜未正确履行法定程序告知申办人许可证办理情况，导致信息沟通不畅，办理工作严重拖延，直至2018年4月才发证，比规定时限延后近半年之久。2018年5月，张明胜受到党内警告处分，该所干部庞鹏、张斌分别受到政务警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;4.天津市红桥区市场监管局党委书记赵海航、副局长王砚强未按规定完成干部学历学位认证等问题被问责&lt;/strong&gt;。2017年9月，上级部门对该局进行人事档案管理督查，发现该局对上级的要求落实不到位，没有在规定的时限内完成干部学历学位认证和归档工作；对人事档案材料审核把关不严格，造成干部人事档案中干部信息认定不准确；对干部人事档案管理制度落实不力，违反《干部档案工作条例》有关规定。2018年2月，赵海航受到行政警告处分，王砚强受到行政记过处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;5.天津市红桥区市场监管局铃铛阁街市场监管所代所长李志国等人因管辖区域内发生非法交易药品问题被问责&lt;/strong&gt;。该所未认真落实市市场监管委、红桥区市场监管局相关会议要求强化对非法交易药品问题的监管，日常巡查不到位，未能及时发现并纠正西关大街非法交易药品问题，李志国负有主要领导责任。该局药化科代科长张立新对基层所监督检查不到位，未发现并纠正该所上述问题。2018年6月，李志国受到记过政务处分，张立新受到诫勉处理。（天津市纪委监委）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '9', '1', '1534409064', '0', '0', '0');
INSERT INTO `c_news` VALUES ('88', '山东通报5起违规配备使用公车典型问题', 'Uploads/2018-08-16/5b753a05ad343.jpg', '&lt;p&gt;&lt;strong&gt;1.青岛仲裁办党组书记、副主任王恒东超标准配备使用公车问题。&lt;/strong&gt;2013年12月至2016年6月，王恒东超标准配备使用青岛仲裁办租赁的一辆排气量为2.0升的凯美瑞轿车。2018年5月，王恒东受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;2.东营职业学院基建处副处长董其国擅自使用公务加油卡给私家车加油问题&lt;/strong&gt;。2017年1月，东营职业学院要求各下属单位将公车和加油卡交由学院办公室统一管理。董其国擅自决定让基建处工作人员留下此前购买的加油卡2张、金额7296.17元。2017年1月至2017年7月，董其国使用2张加油卡为其私家车加油19次、金额4348.42元。其私家车除因公在市内使用外，大部分用于私人事务。2018年5月，董其国受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;3.泰安市岱岳区良庄镇党委书记李新卫违规用车问题&lt;/strong&gt;。2017年4月，良庄镇鲁J2F919公务用车达到使用年限申请更新。2017年8月，在新公务用车购车申请未获批准的情况下，李新卫安排该镇砂资源管理办公室工作人员个人出资14.2万元购买1辆白色广汽传祺牌轿车，并登记在该镇其他领导名下，作为李新卫公务用车，日常用油费用由镇政府承担。2018年4月，李新卫受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;4.潍坊滨海经济技术开发区大家洼街道党委副书记王伟波公车私用问题&lt;/strong&gt;。王伟波作为负责本单位公车管理的领导，在本人已参加车改并领取车补的情况下，2018年6月14日至16日两次驾驶单位租赁的公车回家。2018年7月，王伟波受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;5.烟台市福山区水利局办公室主任王海洋私车公养问题&lt;/strong&gt;。2018年4月，王海洋在没有工作需要的情况下，私自使用单位加油卡为本人私家车加油59.72升、金额406.69元。2018年6月，王海洋受到党内警告处分。（山东省纪委监委）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '9', '0', '1534409221', '0', '0', '0');
INSERT INTO `c_news` VALUES ('89', '宁夏通报10起违反中央八项规定精神典型问题', 'Uploads/2018-08-16/5b753a7a6fe6e.jpg', '&lt;p&gt;近日，宁夏回族自治区纪委监委通报了近期查处的10起违反中央八项规定精神典型问题，分别是：&lt;/p&gt;&lt;p&gt;1.自治区党委宣传部常务副部长杜银杰违规超标准公务接待问题。2016年4月21日晚，时任银川市委副书记杜银杰违规超标准公务接待。杜银杰受到党内警告处分。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;2.自治区党委统战部常务副部长、民委（宗教局）党组书记陆军违规超标准公务接待问题。2016年3月至9月，时任石嘴山市政协主席陆军先后4次违规超标准公务接待。陆军受到党内严重警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;3.自治区人大财经委主任委员王永耀违规超标准公务接待问题。2016年4月6日、10月18日中午，时任石嘴山市委副书记、市长王永耀先后2次违规超标准公务接待。王永耀受到党内严重警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;4.石嘴山市政协主席马平安违规超标准公务接待问题。2016年4月至7月，时任石嘴山市人大副主任马平安先后3次违规超标准公务接待。马平安受到党内严重警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;5.自治区党委督查室主任王刚违规赠送礼品问题。2016年3月，时任自治区党委办公厅办公室主任王刚，违规参与用公款赠送、发放礼品。王刚受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;6.自治区公共资源交易管理局党组成员、副局长曹建利违规赠送礼品问题。2016年2月、3月，时任自治区党委办公厅接待联络处处长曹建利，先后3次违规参与用公款赠送、发放礼品。曹建利受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;7.石嘴山市委常委、组织部部长、党校校长吴保军违规超标准公务接待等问题。2016年6月22日晚，吴保军违规超标准超范围公务接待，并存在违规签批同意公款旅游问题。吴保军受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;8.石嘴山市人大常委会党组副书记、副主任刘建军违规超标准公务接待问题。2016年9月20日晚，刘建军违规超标准超范围公务接待。刘建军受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;9.石嘴山市政府常务副市长常晋宏违规超标准公务接待等问题。2017年4月12日中午，常晋宏违规超标准公务接待，且2017年1月至今，石嘴山市机关事务管理局未严格执行中央八项规定精神和自治区公务接待有关规定，常晋宏作为分管副市长，监管不力。常晋宏受到党内警告处分。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;10.中卫市沙坡头区委副书记、区长郭爱迪违规超标准公务接待等问题。2017年3月6日晚，时任中卫市政府党组成员、秘书长、办公室主任郭爱迪违规超标准公务接待，且在协助分管中卫市政府机关事务管理局期间，审批把关不严，发生多次违规超标准接待。郭爱迪受到党内警告处分。（宁夏回族自治区纪委监委）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '9', '0', '1534409338', '0', '0', '0');
INSERT INTO `c_news` VALUES ('90', '中共中央对外联络部四局原局长曹白隽被开除党籍', 'Uploads/2018-08-16/5b753b7f2fd08.jpg', '&lt;p&gt;据驻中央外办纪检组消息：日前，中央纪委驻中央外办纪检组对中共中央对外联络部四局原局长曹白隽严重违纪问题进行了立案审查。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;经查，曹白隽严重违反政治纪律和政治规矩，在职期间为有关公司等提供“咨询服务”并取酬；违反中央八项规定精神，退休后违规从事与原任职务管辖业务相关的营利性活动和兼职取酬；利用职务上的便利为他人谋取利益并收受财物，涉嫌受贿犯罪。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;曹白隽身为外交外事部门党员领导干部，理想信念丧失，毫无党性意识，行为底线全面失守，亦官亦商，严重违反党的纪律，并涉嫌造成重大国有资产流失，涉嫌违法犯罪，且在党的十八大后仍不收敛、不收手，性质恶劣、情节严重。依据《中国共产党纪律处分条例》等有关规定，给予曹白隽开除党籍处分，取消其退休待遇；收缴其违纪所得；交由有关部门依法对其采取留置措施，调查其涉嫌犯罪问题和线索。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;曹白隽简历&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;曹白隽，男，汉族，1954年4月出生，江苏南京人，大学本科学历。1975年8月进入中联部，先后在欧美澳组、八局、西欧局等部门工作，历任副处长、一等秘书等职务。1993年9月，调任中国经济联络中心一等秘书。1994年9月起，历任中国华联国际贸易公司副总经理、中国经济联络中心副主任兼中国华联国际贸易公司总经理、中国经济联络中心主任、中国经济联络中心主任兼中国华联国际贸易公司总经理等职务。2007年6月任中联部四局局长，2012年7月提前退休。（驻中央外办纪检组）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '8', '0', '1534409599', '0', '0', '0');
INSERT INTO `c_news` VALUES ('91', '中国环境科学研究院原党委副书记、院长孟伟严重违纪被开除党籍和公职', 'Uploads/2018-08-16/5b753caf46b15.jpg', '&lt;p&gt;据驻生态环境部纪检组消息：日前，经中央纪委批准，中央纪委驻生态环境部纪检组对第十二届全国人大环境与资源保护委员会原副主任委员、中国环境科学研究院原党委副书记、院长孟伟严重违纪问题进行了立案审查。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;经查，孟伟违反政治纪律和政治规矩，要求下属报告巡视谈话内容；违反中央八项规定精神，违规出入私人会所；违反组织纪律，利用职权为他人职务晋升提供帮助并收受财物；违反廉洁纪律，收受礼金；违反群众纪律，对群众反映强烈的有关问题长期不解决，造成不良影响。利用职权和职务上的影响为他人谋取利益并收受财物，涉嫌受贿犯罪；滥用职权，违规转让股权造成国有资产巨额损失，涉嫌滥用职权犯罪。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;孟伟身为党员领导干部、中国工程院院士，国家水体污染控制与治理科技重大专项技术总师，丧失理想信念，背弃科学道德，毫无家国情怀，严重违反党的纪律，并涉嫌违法犯罪，且在党的十八大后不知止、不收敛、不收手，性质恶劣、情节严重。孟伟政治蜕变，经济贪婪，从一名环境保护工作者沦为政治生态、自然生态的“污染源”，在生态环境保护领域和科技界造成了严重恶劣影响。依据《中国共产党纪律处分条例》、《事业单位工作人员处分暂行条例》等有关规定，决定给予孟伟开除党籍、开除公职处分；收缴其违纪所得；将其涉嫌犯罪问题、线索及涉案款物移送有关国家机关依法处理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;对孟伟严重违纪问题的查处，彰显了生态环境部党组和驻生态环境部纪检组深入推进全面从严治党，以政治清明促生态文明的坚定决心，释放了坚持反腐败无禁区、全覆盖、零容忍的强烈信号。生态环境部党组和驻生态环境部纪检组将以习近平新时代中国特色社会主义思想为指导，坚决落实党中央的决策部署和中央纪委各项要求，以全面从严治党开头起步，营造风清气正的良好政治生态。结合“不忘初心、牢记使命”主题教育，严肃开展孟伟严重违纪案警示教育，从中汲取教训、引以为戒，引导广大党员干部坚定理想信念，把对党忠诚、为党分忧、为党尽职、为民造福作为根本政治担当，为推进生态文明建设，打好污染防治攻坚战做出新的贡献。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;孟伟简历&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;孟伟，男，汉族，1956年9月生，山东青岛人，博士研究生学历，1976年11月参加工作，1997年7月加入中国共产党。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1982年1月至1986年6月，中国环境科学研究院干部。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1986年6月至1997年7月，中国环境科学研究院科研处助理工程师、副处长、处长。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1997年7月至1999年1月，中国环境科学研究院科技处处长。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1999年1月至2001年12月，中国环境科学研究院副院长。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2001年12月至2006年6月，中国环境科学研究院院长。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2006年6月至2016年10月，中国环境科学研究院院长、党委副书记。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2009年12月当选中国工程院院士。第十一届、十二届全国人大代表，2013年3月当选第十二届全国人大环境与资源保护委员会副主任委员。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2017年11月14日，中国工程院第六届主席团决定停止孟伟中国工程院院士资格。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2018年2月24日，全国人民代表大会常务委员会发布公告，河南省人大常委会决定接受孟伟辞去第十二届全国人民代表大会代表职务。依照有关规定，孟伟的代表资格终止，第十二届全国人民代表大会环境与资源保护委员会副主任委员职务相应终止。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '8', '0', '1534409903', '0', '0', '0');
INSERT INTO `c_news` VALUES ('92', '中国建设银行山东省分行原党委书记、行长薛峰被开除党籍和行政开除', 'Uploads/2018-08-16/5b753cdd8cc92.jpg', '&lt;p&gt;据中国建设银行纪委消息：日前，经中国建设银行党委批准，中国建设银行纪委对中国建设银行山东省分行原党委书记、行长薛峰严重违纪问题进行了立案审查。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;经查，薛峰严重违反政治纪律，对抗组织审查，参加迷信活动；违反中央八项规定精神，违规接受宴请；违反组织纪律，不如实报告个人有关事项，不如实向组织说明问题，违规干预干部选拔任用工作；违反廉洁纪律，利用职权和职务影响为亲属和其他特定关系人谋利，收受礼品礼金；违反工作纪律，对应当向上级报告的事项不报告，造成严重后果；违反生活纪律，与他人发生不正当性关系；利用职务上的便利为他人谋取利益并收受巨额财物，涉嫌受贿犯罪。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;薛峰身为党员领导干部，理想信念丧失，违背党的宗旨，目无党纪国法，对党不忠诚、不老实，贪欲膨胀，中饱私囊，严重违反党的纪律，并涉嫌职务犯罪，且在党的十八大后不收敛、不收手，性质恶劣、情节严重，应予严肃处理。依据《中国共产党纪律处分条例》和银行有关规定，经批准，决定给予薛峰开除党籍、行政开除处分；收缴其违纪所得；其涉嫌犯罪问题及线索由有关监察机关依法处理。（中国建设银行股份有限公司纪委）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '8', '0', '1534409949', '0', '0', '0');
INSERT INTO `c_news` VALUES ('93', '江西省政府原党组成员、副省长李贻煌 严重违纪违法被开除党籍和公职', 'Uploads/2018-08-16/5b753dc07a66c.jpg', '&lt;p&gt;日前，经中共中央批准，中共中央纪委对江西省政府原党组成员、副省长李贻煌严重违纪问题进行了立案审查。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;经查，李贻煌严重违反政治纪律和政治规矩，丧失理想信念和党性原则，搞“小圈子”，扭曲选人用人政治导向，破坏所任职的国有企业政治生态；违反中央八项规定精神和群众纪律，公款打高尔夫球、违规占用国有企业专家别墅；违反组织纪律，违规安排下属提拔亲属职务且在组织谈话函询时不如实说明；违反廉洁纪律，利用职权为亲友经营活动谋取利益，搞权权交易，利用国有企业的资源谋取私利；违反工作纪律，违规干预企业决策；违反生活纪律，修身不严、带坏家风。利用职务上的便利为他人谋取利益并收受巨额财物涉嫌受贿犯罪；非法占有公共财物涉嫌贪污犯罪；挪用公款给他人进行营利活动涉嫌挪用公款犯罪；滥用职权造成国有资产重大损失涉嫌滥用职权犯罪。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;李贻煌身为党的高级领导干部，违背党的宗旨，漠视群众利益长期搞特权，进行利益输送和利益交换，严重违反党的纪律，并涉嫌多种违法犯罪，且在党的十八大后不收敛、不收手，应予严肃处理。依据《中国共产党纪律处分条例》等有关规定，经中央纪委常委会会议研究并报中共中央批准，决定给予李贻煌开除党籍处分；由国家监委给予其开除公职处分；收缴其违纪所得；将其涉嫌犯罪问题、线索及所涉款物移送有关国家机关依法处理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;李贻煌简历&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;李贻煌，男，汉族，1962年10月出生，福建晋江人，1982年8月参加工作，1987年1月加入中国共产党，中南大学有色冶金系有色冶炼专业毕业，在职硕士研究生学历，教授级高级工程师。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1978.10 在东北工学院有色金属冶金系重金属冶炼专业学习&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1982.08 历任江西铜业公司贵溪冶炼厂副厂长、厂长等职&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2001.01 历任江西铜业集团公司党委委员、党委副书记，副总经理、总经理、董事长，江西铜业股份有限公司总经理、董事长&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2011.08 鹰潭市委常委&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2013.01 江西省政府副省长（简历摘自人民网）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '8', '0', '1534410024', '0', '0', '0');
INSERT INTO `c_news` VALUES ('94', '国家能源局原党组成员、副局长王晓林 严重违纪违法被开除党籍和公职', 'Uploads/2018-08-16/5b753d6c4fac4.jpg', '&lt;p&gt;日前，经中共中央批准，中共中央纪委对国家能源局原党组成员、副局长王晓林严重违纪问题进行了立案审查。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;经查，王晓林严重违反政治纪律和政治规矩，违规打探巡视信息；违反中央八项规定精神，长期违规打高尔夫球，违规接受宴请，甘于被“围猎”；违反组织纪律，在干部选拔任用中为他人谋取利益并收受财物，不按规定报告个人有关事项；违反廉洁纪律，收受礼品、礼金；违反工作纪律，违规干预和插手司法活动；违反生活纪律。利用职务上的便利为他人和相关企业谋取利益并收受巨额财物涉嫌受贿犯罪。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;王晓林身为党员领导干部，理想信念缺失，政治上蜕变，经济上贪婪，目无党纪国法，擅权妄为，严重违反党的纪律，并涉嫌违法犯罪，且在党的十八大后不收敛、不收手，应予严肃处理。依据《中国共产党纪律处分条例》等有关规定，经中央纪委常委会会议研究并报中共中央批准，决定给予王晓林开除党籍处分；由国家监委给予其开除公职处分；收缴其违纪所得；将其涉嫌犯罪问题、线索及所涉款物移送有关国家机关依法处理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;王晓林简历&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;王晓林，男，汉族，1963年10月生，重庆市人，1983年7月参加工作，1989年11月入党，大学本科学历，高级工程师。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1983年7月任北京矿务局杨坨矿技术科技术员、助理工程师；&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1989年4月任华能精煤有限责任公司计划部工程师；&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1991年8月任华能精煤有限责任公司计划部副经理；&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1992年5月任华能精煤有限责任公司生产部副经理；&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1995年10月任神华集团有限责任公司生产部副经理；&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1996年4月任神华集团有限责任公司计划部副经理；&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;1999年7月任神华集团有限责任公司计划部经理；&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;（其间：2001年3月至2002年1月在中央党校一年制中青年干部培训班学习，2002年8月至2004年2月挂职任神华黄骅港务有限责任公司总经理、副董事长、党委副书记）&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2004年2月任神华集团有限责任公司总经理助理兼总调度室主任；&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2004年11月任神华集团有限责任公司总经理助理；&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2005年11月任神华集团有限责任公司董事会秘书；&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2006年8月任神华集团有限责任公司副总经理，董事会秘书；&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2010年4月任神华集团有限责任公司副总经理、党组成员，董事会秘书；&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2011年5月任神华集团有限责任公司副总经理、党组成员，董事会秘书，中国神华能源股份有限公司高级副总裁（兼）；&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2014年8月任神华集团有限责任公司副总经理、党组成员，董事会秘书，中国神华能源股份有限公司执行董事、高级副总裁（兼）；&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;2015年8月任国家能源局副局长、党组成员。（简历摘自国家能源局网站）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '8', '0', '1534410092', '1534410134', '1', '0');
INSERT INTO `c_news` VALUES ('95', '【今日锐评】认真配合巡视工作是责任更是义务', 'Uploads/2018-08-16/5b754247afdd1.jpg', '&lt;section class=&quot;main fixed&quot; style=&quot;min-height: 1%; width: 1200px; margin: auto; background: rgb(255, 255, 255); padding: 30px 0px; font-family: &amp;quot;Microsoft Yahei&amp;quot;, 宋体; font-size: 14px; white-space: normal;&quot;&gt;&lt;p&gt;8月12日，河南省南召县纪委一则通报引发广泛关注。7月19日至22日，河南省委巡视组根据巡视工作安排，组织南召县部分单位领导干部进行座谈。在南召县委已提前要求参加座谈人员保持联系电话畅通的情况下，仍有多名干部或不接听电话，或未及时回复，或请假后未及时报备……有关人员未能按时参加省委巡视组座谈，造成不良影响，构成违反工作纪律行为。南召县纪委在调查后，依据相关规定，分别给予违反纪律、负有责任的8名同志相应处分和处理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;在巡视组面前我行我素，玩“失联”，南召县几名党员干部所犯下的错误，并非“不接听电话”这么简单。打一次电话没联系上，尚可理解，可屡次去电都不应答，就不正常了。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;回溯过往关于对抗巡视工作的违纪通报，不难发现，个别党员干部与巡视组“躲猫猫”、打“太极”，原因大致有两种：要么自身有问题，怕在谈话过程中露出马脚；要么怕得罪人，不知道被问到领导或同事的问题时该怎么应对，唯恐引火烧身，干脆采取“隐身”“失联”等方式不配合巡视组工作。岂不知，对党员干部来说，认真配合巡视工作，是责任更是义务，岂能允许“避而不见”“溜之大吉”！&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;巡视的权威是党章赋予的。党章清楚地表明，巡视组的派出主体是党中央和省区市党委，体现的是党集中统一领导的权威。《中国共产党巡视工作条例》第三十六条规定：“被巡视党组织领导班子及其成员应当自觉接受巡视监督，积极配合巡视组开展工作。党员有义务向巡视组如实反映情况。”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;实际上，每轮巡视工作的开展，都为被巡视单位的党员干部提供了一次自我“政治体检”的机会，也为净化被巡视单位政治生态发挥着标本兼治作用。因此，党员干部面对巡视组在开展工作时提出的要求，应当积极配合；对巡视组需要了解的问题，要实话实说，有一说一；对巡视组不了解的问题，也要实事求是地反映，既不掩盖也不夸大。这是一名党员必须遵守的纪律和规矩，也是对自己、对同志、对党负责的应有觉悟。（实习记者 翟濯）&lt;/p&gt;&lt;/section&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '7', '0', '1534411335', '0', '0', '0');
INSERT INTO `c_news` VALUES ('96', '用好问责利器，推动“两个责任”落地落实落细', 'Uploads/2018-08-16/5b7542759f2a5.jpg', '&lt;p&gt;6月27日，中央纪委公开曝光7起落实管党治党主体责任和监督责任不力被问责的典型案例。这是党的十九大后首次发布主体责任和监督责任落实不力典型问题通报，释放了持之以恒推动全面从严治党向纵深发展、以问责倒逼“两个责任”落实的强烈信号。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;权力就是责任，责任就要担当。在十九届中央纪委二次全会上，习近平总书记明确提出，全面从严治党要“坚持行使权力和担当责任相统一”。从通报中也可以看到，有6起既问责党委落实主体责任不力，又问责纪委履行监督责任不力；问责对象既有省高院领导、市辖区区委原书记和常委，也有县属局级单位党委书记和纪检组长，乡镇党委书记和纪委书记。这反映出当前一些地方、部门和单位仍然存在管党治党责任虚化、表态多落实差、压力传导不到位等现象。各级党委（党组）、纪委纪检组必须进一步强化责任意识，深刻认识到全面从严治党要靠全党管全党治全党，真正把落实管党治党政治责任作为最根本的政治担当，紧紧咬住“责任”二字，抓住“问责”这个要害，扭住主体责任和监督责任，形成一级抓一级、全党动手一起抓的良好局面。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;推动全面从严治党主体责任和监督责任全面覆盖、层层传导，要在具体行动中用真功出实招求实效。各级党委要定期向上级党委、纪委报告主体责任落实情况，遇重要情况随时报告，经常分析研判本地区本部门本单位反腐败斗争形势，加强对干部的日常管理、教育和监督，抓早抓小，防微杜渐。要紧紧扭住党委（党组）书记第一责任人的“牛鼻子”，强化班子成员履行“一岗双责”的政治自觉，推动形成管党治党强大合力。要通过实地调研了解、约谈党委（党组）书记等方式，加强对所辖地区和部门党组织履行全面从严治党责任情况的监督检查，克服压力传导层层递减的现象，解决一些基层党组织软弱涣散、战斗堡垒作用不强问题，推动工作延伸到基层、责任落实到基层。各级纪检监察机关要认真履行好党章和宪法监察法赋予的职责，切实担负起协助党委推进全面从严治党的政治责任，同时要认真履职，加强对所辖地区和部门党组织管党治党情况的监督检查。纪委书记（纪检组长）要敢于担当、敢于监督、敢于负责，不怕得罪人，善于发现问题、处置问题，做党章党规党纪的坚定执行者、党的路线方针政策的坚定捍卫者。要坚决纠正管党治党宽松软问题，紧盯中央八项规定精神不落实、贯彻中央脱贫攻坚决策部署不坚决不到位、污染防治攻坚战中工作推动不力等突出问题，对典型案例深入剖析，举一反三。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;无论党委还是纪委，谁不落实责任就问责谁。必须以党章、问责条例和监察法为基本遵循，用好问责这个利器，敢于问责、曝光典型问题，对该问责而不问责的也要严肃问责。要坚持实事求是，精准问责，提高问责工作规范化、法治化水平。坚持把自身摆进去，对执纪违纪、执法违法的坚决查处，对纪检监察干部失职失责的严肃问责，坚决防止“灯下黑”。要以强有力问责唤醒责任意识，推动主体责任、监督责任落地落实落细。（中央纪委国家监委网站 李鹃）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '7', '0', '1534411381', '0', '0', '1');
INSERT INTO `c_news` VALUES ('97', '【“如何开展监督”系列报道之三】 用好监察建议这一利器', 'Uploads/2018-08-16/5b7543a569b43.jpg', '&lt;p&gt;向监察对象所在单位发出监察建议书，是监察法赋予监察机关履行监督职能的有效手段。利器在手，怎么用好是关键。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;对单位存在的问题提出监察建议，重点应该放在哪儿？如何在廉政制度建设方面提出有针对性的监察建议？监察建议书能为营造良好政治生态做点啥？&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;各地监察机关在履职过程中进行了生动探索。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;找准靶向，瞄准履职问题——&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;锻造治理不作为、慢作为、乱作为的法治“利剑”&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“还是领导干部呢，有房住还领补贴！”近年来，江苏省淮安市出现多起异地交流干部违规领取住房补贴问题。2017年6月，该市决定由市机关事务管理局牵头负责开展专项清理。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“因为涉及的都是领导干部，牵涉的部门也多，吃力不讨好，管理局的同志有畏难情绪。”市纪委监委第八纪检监察室副主任俞向林告诉记者，直到今年2月，该项工作进展依然非常缓慢，存在明显的不担当、不作为、慢作为问题。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;根据监察法相关规定，监察机关可以根据监督、调查结果，对监察对象所在单位廉政建设和履行职责存在的问题提出监察建议。2月11日，第八纪检监察室将监察建议书送达市机关事务管理局：“现就市机关事务管理局抓紧落实上级工作安排，迅速开展异地交流干部住房补贴清理工作，提出以下监察建议：……”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;一份监察建议书“催”出了立竿见影的效果——&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“在接到建议书的5个工作日之内，该局就召开了部门联席会议，落实了负责人，清理行动迅速展开。”俞向林说，截至目前，自查自纠阶段已经结束，问题线索基本梳理完毕，比建议书提出的时间节点早了一个月。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;瞄准躲、推、绕、拖，盯住不作为、慢作为、乱作为，科学运用监察建议书这一法治手段，各地监委向监察对象所在单位履职存在的问题亮出“利剑”，倒逼责任单位担当尽责。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;在福建省闽清县池园镇田地村，一家多年违法生产、排放废气污水，“村里不管、镇土地所和环保站不管，连县环保局也不管”的塑料厂，近日因县监委发出的一份监察建议书得到了应有惩处。玩忽职守的池园镇人民政府收到建议书后迅速开展整改，塑料厂很快被关停。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“监察建议与一般工作建议有质的区别，它由监察法‘背书’、以国家强制力为后盾，具备一定法律效力。”长期关注国家监察体制改革的中央党校（国家行政学院）教授邱霈恩认为，相关单位和责任人没有正当理由必须履行监察建议要求其履行的义务，否则，就要承担相应法律责任。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;北京大学廉政建设研究中心副主任庄德水表示，有必要针对监察建议探索制定专门的工作规则，以保证监察建议的规范使用。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;直击根源，防范廉政风险——&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;开出治病根、管长远的“药方”&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“是工作人员作风和办事程序的问题……”今年年初，海南省委对乐东黎族自治县开展巡视，发现县民政局存在落实中央八项规定精神不到位、纠正“四风”不坚决等问题，而该局班子成员在专题整改组织生活会上还纷纷推诿卸责。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;到会监督指导的县纪委监委派驻纪检监察组负责人陈金铸紧急叫停了会议。为让该局班子重视问题，主动担责，强化整改，会后，纪检监察组向该局发出监察建议书：&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“建议你局举一反三开展自查自纠，规范完善领导审批等办理流程，进一步明确岗位责任人、分管领导和主要领导权责，加强对各部门的监督管理……”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“不能只头痛医头、脚痛医脚，必须瞄准病根、祛除病灶。”陈金铸认为，监察建议书要在解决具体问题基础上，深思一层、深挖一尺，找准风险点，堵塞制度漏洞，“用制度管长久”。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;实践证明，监察建议书，不仅可以是具体工作的“催办书”和解决问题的“加急单”，还可以是提示风险的“预警灯”、祛除病灶的“千金方”——&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“你镇去年在落实中央八项规定精神、执行换届纪律、农村‘三资’管理等方面存在较严重的问题，现对你镇提出如下监察建议……”今年年初，四川省眉山市东坡区监委依据廉政档案管理系统数据综合分析的情况，向松江镇等3个乡镇和区粮食局等2个区级部门发出“红色预警”。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“市教育局：2018年3月，我委发现中水中学、威宁县教育局在党风廉政建设和履行职责方面存在党的领导弱化、党的建设缺失，财务管理混乱等问题，建议你局督促威宁县教育局迅速整改落实……”3月28日，贵州省毕节市监委向市教育局下达市监委成立后的第一份监察建议书。4月3日，在市纪委监委督促下，毕节市教育局、市委教育工委在全市教育系统启动为期两个月的专项整治行动。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;……&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;北京航空航天大学人文与社会科学高等研究院副院长杜治洲认为，监察建议要与制度建设结合起来，督促责任单位倒查问题，找准症结，查找共性规律，堵塞廉政漏洞，规范权力运行。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;扶正祛邪，着眼涵养生态——&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;&lt;strong&gt;提供保护“森林”、固本培元的重要指导&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;监督的目的是保护森林，监察建议同样要着眼于此。近日，上海市浦东新区纪委监委向新区卫计委发出的监察建议书，便是例证。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;归口监督卫计委的是新区纪委监委派驻第四纪检监察组，该组负责人宣鹤鸣对这份编号为沪浦监建（2018）1号的监察建议书印象颇深。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“起因是发现并查处一名财务人员侵吞公款的问题，监察建议主要针对该单位存在的财务漏洞、监督管理不力等问题，要求各医疗卫生机构应以此案为鉴，举一反三，规范和加强财务管理，建立健全财务管理制度和相应的内控机制。‘小题大做’就是为了维护整个系统的政治生态。”&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“纪委监委的首要职责是监督。”浦东新区区委常委、区纪委书记、区监委主任单少军说，将继续加强监督力量，提高监督实效，营造风清气正的政治生态。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“发出监察建议书，是监察机关重要的履职手段，是一把监督‘利器’。”庄德水认为，监督为的是保护“森林”、营造良好政治生态，监察机关要善于运用监察建议，根据监督和调查结果及时履行职责。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;为确保落实监察建议不打折扣，天津市宝坻区纪委监委探索建立督查反馈机制。据悉，该区实行整改通报制度，严格要求有关单位在规定时限内将监察建议采纳和落实情况通报派驻纪检监察组；实行跟踪督查制度，及时发现监察建议落实过程中存在的问题，帮助被建议单位积极整改落实，避免走过场、打折扣；要求被建议单位针对监察建议提出整改措施，促进有效落实。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;“监察建议书不能一送一收就算了结。纪委监委要持续跟进，被建议单位要真接受、真整改，这就要依靠制度保障实施效果，让法律的刚性约束体现在每一份监察建议书的具体执行中。”专家建议，可以探索建立落实监察建议的效果评估机制，对落实监察建议不力的严肃惩处。（记者 李玉长丨制图 李芸）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '7', '0', '1534411685', '0', '0', '0');
INSERT INTO `c_news` VALUES ('98', '依规依纪依法履行好纪检监察职责', 'Uploads/2018-08-16/5b754483e7454.jpg', '&lt;p&gt;党章党规党纪和宪法法律法规是管党治党、治国理政的基本依据，依规依纪依法是做好新时代纪检监察工作的鲜明特点和必然要求。习近平总书记多次强调，要善于用法治思维和法治方式反对腐败，推进反腐败工作规范化、法治化。中央纪委国家监委坚决贯彻习近平总书记重要讲话、重要指示精神，采取有力举措推动反腐败斗争在规范化法治化轨道上深入开展。中共中央政治局常委、中央纪委书记赵乐际反复强调，做好新时代纪检监察工作，很重要的一条就是法治化、专业化，一再要求纪检监察机关要以党章和宪法监察法为根本遵循，坚持稳中求进工作总基调，坚持实事求是，严格依规依纪依法履行职责，不断提高反腐败工作规范化法治化水平，推动新时代纪检监察工作实现高质量发展。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;纪检监察机关的权力由党章和宪法赋予，职责纪定、职责法定，依规依纪依法履行职责不是一般的工作要求，而是严肃的政治要求和政治责任。随着国家监察体制改革不断深入，纪委监委的监督范围扩大了、权限丰富了，社会关注度更高了，一旦出现执纪执法者违纪违法的问题，必然严重损害党的形象，严重影响改革成效和纪检监察机关公信力。纪检监察机关是政治机关，带头守规守纪守法、严格依规依纪依法履职是旗帜鲜明讲政治的应有之义和具体体现。各级纪委监委一定要切实提高政治站位，始终保持清醒，保持如履薄冰、如临深渊的谦虚谨慎，时刻牢记权力来自哪里、界限划在哪里，厘清责任范围、严守职责边界，严禁超越既定权限、逾越纪法底线，切实把依规依纪依法要求落实到监督执纪问责和监督调查处置的全过程、各环节，真正使制度优势转化为治理效能。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;依规依纪依法履行职责关键在于强化法治意识，增强思想自觉和行动自觉。在全面依法治国、全面从严治党的条件下，要牢固树立不依规依纪依法就是违规违纪违法的理念，着力提高运用法治思维和法治方式开展工作的本领，谋划工作运用法治思维、处理问题运用法治方式，从强化监督、执纪审查、调查处置到巡视巡察、问责追责，一言一行、一举一动都要合规合纪合法。强化法治意识就要重程序、讲规矩，严格依照党的原则、纪律、规矩和法定权限、规则、程序办事，分清纪法界限、推进纪法贯通、注重法法衔接，使权力运行既规范有序又顺畅高效。要把监察法和监督执纪工作规则的要求落实落细，不断探索完善依照法定权限行使权力、开展工作的具体流程，坚持集体决策、严格审批权限、健全内控机制，及时发现问题、纠正偏差，确保党和人民赋予的权力不被滥用。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;依规依纪依法履行职责必须坚持实事求是，始终以党章党规党纪、宪法法律法规为准绳。党章关于“按照错误性质和情节轻重，给以批评教育直至纪律处分”的规定，监察法关于“以事实为根据，以法律为准绳”的要求，都蕴含着实事求是的原则要求。实事求是是做好新时代纪检监察工作的生命线，是依规依纪依法履职的内在要求和根本保证。离开了实事求是，监督执纪问责和监督调查处置就从根本上背离了党章党规党纪和宪法监察法的要求，就必然做不到依规依纪依法。纪检监察机关在具体工作中，必须坚持一切从实际出发，历史地、全面地、客观地看问题，做到具体问题具体分析，精准研判、区别对待，做到客观公正，决不能随意放大或缩小，防止主观性、片面性、表面性。纪检监察工作是个细活，关键要强化精准思维，精准发现问题、精准把握政策、精准作出处置，决不能马马虎虎、粗枝大叶。要准确把握运用好监督执纪“四种形态”，提高思想政治工作水平和把握政策能力，防止适用不当、尺度不准、畸轻畸重，真正做到对干部负责、对党负责、对历史负责，使执纪执法取得良好的政治效果、纪法效果、社会效果。&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;依规依纪依法履行职责必须强化自我监督、自我约束。作为监督别人的人、执纪执法的人，必须自身正自身硬，以自身建设立信，自觉尊崇党章和宪法，做守规守纪守法的模范，依规依纪依法敢担当、善作为。要始终在行使权力上慎之又慎、自我约束上严之又严，有正视问题的自觉和刀刃向内的勇气，对执纪违纪、执法违法的坚决查处，对失职失责的严肃问责，经常打扫庭院，坚决清理门户，防止“灯下黑”。纪检监察干部要习惯在受监督和约束条件下开展工作，不断提高依规依纪依法履行职责的能力和水平，精准把握纪法标准，全面履行双重职责，当好党纪国法“守护者”、政治生态“护林员”。（中国纪检监察报评论员）&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '7', '0', '1534411907', '0', '0', '1');
INSERT INTO `c_news` VALUES ('99', '中国一拖举行纪念中国共产党建党97周年“微党课”作品发布会', 'Uploads/2018-08-17/5b76250c0e081.jpg', '&lt;p&gt;7月2日，国机集团所属中国一拖集团有限公司（以下简称“中国一拖”）举行纪念中国共产党建党97周年“微党课”作品发布会，中国一拖副总师及以上领导,各所属单位党政主要负责人、纪委书记、党委工作部部长等参加发布会。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;为深入学习宣传贯彻党的十九大精神和迎接中国共产党成立97周年，进一步增强党组织的凝聚力和战斗力，推动中国一拖转型升级、提质增效，中国一拖党委近期开展了“微党课”优秀作品评选活动。各级党组织积极参与，27家党组织共计报送“微党课”作品57件，涵盖视频、音频、PPT、H5等当今流行的多种视音频制作形式。经过两轮初选，20件作品脱颖而出，其中微视频作品10件、PPT作品7件、H5作品3件。6月21日，经专家评委和大众评委评比，最终评选出一等奖1件，二等奖3件，三等奖6件。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;发布会上，大拖装配厂H5作品《细数党章历次修改，看党不断与时俱进》、公司办PPT作品《什么是幸福》、营销中心动画作品《企业文化拒绝糟粕》、中小轮拖装配厂微视频《践诺在行动》、铸造公司微视频《创建党员责任区示范岗，打造党支部工作新格局》、采购中心微视频《招投标的故事》6件作品在现场展示。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中国一拖党委常委、纪委书记张家新代表公司党委对发布的作品进行点评。他说，“微党课”优秀作品是今年诸多党建工作创新成果之一，代表了一拖各级党组织的水平，也展示了全体共产党员的风采。这些优秀作品体现了先进性、引导性、创新性、故事性和参与性，是基层党组织党课教育方式创新的一次生动实践。大家用独特的视角来认识党课、观察党课、理解党课，紧紧围绕生产经营工作，通过“小故事”说明“大道理”，通过“小人物”阐述“大责任”，不仅增强了党课的教育功能，还使党组织发现了一批有创意、善创新的骨干力量。他希望，通过“微党课”的创新，辐射到其他工作领域，使党组织创新引领作用得到更好发挥。&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '1', '1534469388', '0', '0', '1');
INSERT INTO `c_news` VALUES ('100', '学习精神 感悟真理——中国海航十九大精神集中培训班圆满结束', 'Uploads/2018-08-17/5b7625939da2d.jpg', '&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/Uploads/ueditor/image/20180817/1534469490594421.jpg&quot; title=&quot;1534469490594421.jpg&quot; alt=&quot;W020180723547456411124.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;为深入学习贯彻党的十九大精神，用伟大思想武装头脑，用伟大精神指导实践，用伟大实践开创未来，6月26日至30日，国机集团所属中国海洋航空集团有限公司（以下简称“中国海航”）十九大精神集中培训班在京举办。所属企业领导班子成员、总部各部门负责人、驻京企业党支部书记，以及来自国机集团所属中国自动化控制系统总公司和国机汽车股份有限公司两家兄弟单位的领导干部人员共76人参加此次培训。中国海航党委书记闫卫红、副董事长高晓东、副总经理刘恩、财务总监王会清、工会主席张宝出席开班仪式。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;为学懂弄通做实十九大精神，学深悟透习近平新时代中国特色社会主义思想，引导学员努力将党建优势转化为企业发展优势，此次培训主要围绕党的十九大精神与基本理论、党性教育和企业管理等专题展开。培训班还特别邀请中共中央党校党史教研部教授祝彦、国务院国资委特邀讲师郝继涛、国机集团纪委副书记王锡岩、中国海航副董事长高晓东和财务总监王会清到会讲授，分别围绕《中国共产党97年的历程与启示》、《建立基业长青的企业文化》、《深入学习习近平新时代中国特色社会主义思想 加强党的纪律建设》、《学习贯彻党的十九大精神》和《学习领会党的十九大加强财务管控与风险管理》进行全面解读。同时，通过观看《将改革进行到底》等教学专题片、实地参观主题文化展览、开展经验分享与座谈交流等形式，设立四个学习小组，围绕“贯彻落实十九大精神，增强‘四个意识’，促进党建工作和经营品质提升，推动中国海航高质量发展”等议题进行了研讨。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中国海航党委书记闫卫红在讲话中指出，此次培训的目的在于促进大家进一步提高政治站位，全面深入认识和理解十九大精神与习近平新时代中国特色社会主义思想。他结合自身经历与学员进行交流，并要求大家一是要正确把握十九大后企业面临的新形势，积极应对挑战、抢抓历史机遇，推动企业不断攀上新的高峰；二是要结合十九大的新要求和新时代的主要特征，对企业进行准确定位，系统谋划企业的科学发展；三是要牢牢抓住高质量发展这一宏观导向和发展大势，坚持创新驱动、转型升级、人才强企、文化铸魂等战略的实施；四是要增强廉洁意识，强化责任担当，提高拒腐防变能力，认识到抓好党风廉政建设和反腐败工作是企业健康发展、行稳致远的基石。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;在结业仪式上，闫卫红书记寄语各位学员，要把十九大精神不断转化为指导工作、推动发展的强大动力。在新时代，以新面貌、新气象，朝着企业宏伟发展的目标，鼓足干劲、争先勇为，以有力的行动、全新的业绩为企业的高质量发展做出新的更大贡献。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '0', '1534469523', '0', '0', '1');
INSERT INTO `c_news` VALUES ('101', '凝聚共识 担当使命 推动发展——中汽工程党委举办“学习习近平新时代中国特色社会主义思想和党的十九大精神”干部培训班', 'Uploads/2018-08-17/5b76287250054.jpg', '&lt;p&gt;　&lt;/p&gt;&lt;p style=&quot;text-align:center&quot;&gt;&lt;img src=&quot;/Uploads/ueditor/image/20180817/1534470115758640.jpg&quot; title=&quot;1534470115758640.jpg&quot; alt=&quot;W020180710313621576026.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;6月26日至30日，国机集团所属中国汽车工业工程有限公司（以下简称“中汽工程”）党委举办了为期5天的“学习习近平新时代中国特色社会主义思想和党的十九大精神”干部培训班。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;公司全体中层正副职以上干部及党支部书记、副书记共计150余人通过现场、视频连线以及网络直播、录播的形式参加了此次培训，确保每一位干部都能参与学习培训，保证良好的学习成效。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;本次培训共设置八节专题党课辅导，包括公司党委书记丁跃达的专题党课和5名外部讲师的7门课程。丁跃达书记结合自己在中央党校两个月的学习心得和体会，作了“对习近平新时代中国特色社会主义思想概论的理解、对习近平经济思想的理解”的专题党课。同时各位外部讲师围绕习近平新时代中国特色社会主义思想和党的十九大精神，涵盖马克思主义理论、意识形态、创新驱动、国企党建、企业文化、三十讲导读等内容，分别做了精彩的专题辅导授课。培训过程中，各位老师紧扣主题，讲授内容紧贴新时代企业改革发展、国际国内形势和党建工作实际，内涵丰富，深入浅出，引人入胜，带领参训学员结合理论知识和企业发展实践展开思考和讨论。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;29日下午，各学习小组结合几天的学习内容，利用行动学习法，展开分享汇报。九个小组的汇报内容丰富多彩，既有对课程学习内容的思考和体会，也有对企业实践工作的对比和反思，同时提出了改进好各项工作的思路和举措，真实做到了“带着问题学，联系实际学”。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;培训后，参训干部一致表示，通过此次培训，加深了对习近平新时代中国特色社会主义思想和十九大精神的理解，提高了对党建工作的认识，加强了彼此间的工作交流。下一阶段将进一步落实好公司党委的各项工作部署，助力企业党建工作取得新进展，为实现“三五”规划和“国际知名工程系统服务商”的战略目标作出新贡献。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '1', '1534470258', '0', '0', '1');
INSERT INTO `c_news` VALUES ('102', '中机国际组织学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神专题培训', 'Uploads/2018-08-17/5b7629560103f.jpg', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/Uploads/ueditor/image/20180817/1534470367826323.jpg&quot; title=&quot;1534470367826323.jpg&quot; alt=&quot;W020180723547458931049.jpg&quot;/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/Uploads/ueditor/image/20180817/1534470382196617.jpg&quot; title=&quot;1534470382196617.jpg&quot; alt=&quot;W020180723547459197350.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;为进一步深入学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神，强化政治建设、理论建设和提高公司党员领导干部政治思想理论水平，根据国机集团党委要求，6月25至27日，国机集团所属中国机械国际合作有限公司（以下简称“中机国际”）党委组织开展了习近平新时代中国特色社会主义思想和党的十九大精神学习培训。公司党政领导班子成员、纪委委员、各党组织班子成员、团委负责人和入党积极分子等共一百余人参加培训。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;此次培训为期3天，在25日举行的动员会上，中机国际党委副书记彭明京首先传达了公司党委书记、总经理赵立志对本次学习的要求，“要严肃认真，要学深弄懂悟透，要在有所收获上下功夫。”彭明京副书记同时强调，党员干部要统一思想，深刻认识学习的重要性，紧迫性；要突出重点，切实掌握党的十九大精神的思想精髓和核心要义；要把握总要求，坚定不移地推动全面从严治党向纵深发展；要领导带头，提升学习宣传贯彻习近平新时代中国特色社会主义思想和十九大精神的实效。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;25日下午，中机国际党委邀请中央党校党建教研部张弛副教授作了题为《深入学习贯彻党的十九大精神》的讲座，张弛副教授深刻系统地阐述了十九大精神的丰富内涵以及产生背景和重要地位。27日上午，中国社会科学院马克思主义研究院党委书记、院长邓纯东教授向全体学员进行了《学习领会习近平总书记关于推进马克思主义中国化时代化大众化的重要思想》的培训，使学员更加深入地了解马克思主义在当代中国的运用。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;26日上午，全体学员共聚北京新国展，对中机国际主办的第十四届中国国际机床工具展览会进行现场参观学习。每逢双年举办的中国国际机床工具展览会是年度第三大国际机床工具展览会。通过学习，学员们不仅了解了世界机床行业的发展，也通过一线业务理解了党在工作中的重要指导作用，让学习融入到实际工作中。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;26日下午，全体学员到国家博物馆观看《真理的力量——纪念马克思诞辰200周年主题展览》，本次特展展示了马克思的生平、革命实践、理论贡献和精神境界，展现了马克思主义在中国传播运用和丰富发展的光辉历程，引领学员深入思考。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;在27日下午举行的培训学习总结会上，学员们结合自身体会分别就习近平新时代中国特色社会主义、社会主要矛盾变化、坚持党对一切工作的领导等主题的学习心得进行了分享交流。学员们纷纷表示，作为一名党员要增强主动担当、积极作为的勇气，持续创新，充分发挥模范带头作用，增强员工的企业自信、文化自信。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;通过本次集中培训学习，党员干部更加深入理解习近平新时代中国特色社会主义思想和党的十九大精神内涵，进一步凝聚了思想共识，坚定了理想信念，明确了目标任务，鼓舞了士气干劲，达到了预期目标和效果。&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '1', '1534470485', '0', '0', '1');
INSERT INTO `c_news` VALUES ('103', '轴研科技党总支组织公司党员赴红旗渠参观学习', 'Uploads/2018-08-17/5b7629fd09c93.jpg', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/Uploads/ueditor/image/20180817/1534470534751354.jpg&quot; title=&quot;1534470534751354.jpg&quot; alt=&quot;W020180716563492853346.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;巍巍太行，承载了林州几代人的梦想；滔滔渠水，流淌着林州百万人的精神。“自力更生、艰苦创业、团结协作、无私奉献”的红旗渠精神，感动了中原，震撼了世界。7月8日，为纪念中国共产党成立97周年，结合国机集团即将开展的“不忘初心牢记使命”主题活动，国机集团所属洛阳轴研科技股份有限公司党总支组织全体党员赴红旗渠进行参观学习，旨在培养党员开拓进取、迎难而上、攻坚克难的精神。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;活动当天，公司党委副书记胡爱丽首先带领总部党员沿着依山而建的渠道参观了红旗渠总干渠的咽喉工程——青年洞，走在紧贴着山崖凌空而建的栈道上，看着穿山而过的红旗渠水，再次感受了“愚公奋起十春秋,引来漳河润田禾”的艰辛和不易，实地见证了红旗渠工程的伟大。大家深切感受了当年林县人民不屈不挠的革命斗志和战天斗地的英雄气概，无不为红旗渠所展现的辉煌和气势所感动和震撼。4个小时的车程，3个小时的路程，公司全体党员在烈日下学习着红旗渠精神，洗涤着自己的内心。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;随后，全体党员在党委副书记胡爱丽的引领下，走进红旗渠纪念馆。在展馆入口，面对鲜红的党旗，庄严宣誓，全体党员重温了入党誓词，激励自己牢记党的宗旨，永葆先进本色。&amp;nbsp;&amp;nbsp;&amp;nbsp; &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;在红旗渠纪念馆展厅，大家认真聆听讲解员精彩生动的讲解。一幅幅生动的图片、一段段感人的故事、一件件珍贵的实物，让大家身临其境地感受到林州人民建造人工天河时不畏艰险，顽强拼搏，撼天动地的恢弘场景，无不为“自力更生、艰苦创业、团结协作、无私奉献”的红旗渠精神所震撼。深刻感受了“自力更生、艰苦创业、团结协作、无私奉献”的红旗渠精神。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;红旗渠，是一座不朽的“改造自然”的丰碑，更是一面永恒的旗帜。通过参观学习，踏寻红色足迹，对“红旗渠精神”有了更加深刻的理解和感受，党员们经历了一次思想上的神圣洗礼、心灵上的巨大震撼，他们的斗志和拼搏精神得到了极大地鼓舞和激励。这次参观学习活动富含了深远的教育意义。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;红旗渠的精神也在鞭策着我们轴研人：勿忘昨天的苦难辉煌，无愧今天的使命担当，不负明天的伟大梦想！&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '1', '1534470653', '0', '0', '1');
INSERT INTO `c_news` VALUES ('104', '中国自控举办学习贯彻党的十九大精神集中轮训班', 'Uploads/2018-08-17/5b762b3b33bf7.jpg', '&lt;p style=&quot;text-align:center&quot;&gt;&lt;img src=&quot;/Uploads/ueditor/image/20180817/1534470748292500.jpg&quot; title=&quot;1534470748292500.jpg&quot; alt=&quot;W020180716563491481009.jpg&quot;/&gt;&lt;/p&gt;&lt;p style=&quot;text-align:center&quot;&gt;&lt;img src=&quot;/Uploads/ueditor/image/20180817/1534470758743344.jpg&quot; title=&quot;1534470758743344.jpg&quot; alt=&quot;W020180716563491492871.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;6月25日至29日，国机集团所属中国自控系统工程有限公司（以下简称“中国自控”）成功举办学习贯彻党的十九大精神集中轮训班。中国自控本次轮训班是与国机集团所属中国海航、国机汽车等兄弟公司共同举办，轮训时间为期一周。学员覆盖公司部门副职及以上领导干部、所属企业领导班子成员。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;中国自控党委书记刘刚在开班仪式上发表讲话。刘刚同志指出，本次十九大精神集中轮训班是按照中组部和国机集团党委统一部署要求，结合公司党委工作安排举办，各级领导高度重视；希望大家珍惜学习机会，端正学习态度，切实将思想认识统一到党的十九大精神上来，将力量凝聚到落实党的十九大确定的各项重要任务上来，不断开拓公司改革发展的新局面。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;刘刚同志还就本次培训提出四点要求：一是全面准确领会把握党的十九大精神，切实将思想统一到党的十九大精神上来；二是要学懂、弄通、做实，做到结合思想学、联系工作学、带着问题学，确保学深、学透、入脑、入心，要将学习成果通过会议、调研、谈心谈话等方式深入党员群众；三是要做到理论武装头脑、指导实践、推动工作，以更宽广的视野谋划公司发展新思路，真正将学习成果转化为推动企业发展的强大动力；四是要坚定不移落实新时代全面从严治党的新要求，为推动中心工作做好坚强的政治保障。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;本次轮训班课程以聘请老师集中授课、观看视频、分组研讨等形式开展；学习内容涉及十九大报告的详细解读、国有企业改革30年历程回顾、企业文化建设、中国共产党发展的光荣历程、《中国共产党廉洁自律准则》以及结合案列对学员进行警示教育等；全方位讲解十九大精神产生的历史根源、现实意义和必须全面准确贯彻的政治原则。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;6月27日下午，三家单位在中国海航总部集中交流。本次轮训班是国机集团内部兄弟公司之间资源共享及党务协同的一次成功实践；几天的集中授课，既让大家实现了思想洗礼和理论升华，也增进了兄弟公司之间的了解，通过理论学习促进业务交流。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;6月29日上午，学员在公司分组开展头脑风暴，将成果进行集中展示，公司领导班子成员现场听取汇报，并充分肯定本次轮训成果。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;6月29日下午，公司总经理、党委副书记王兆杰同志在轮训班结业式上作总结讲话。&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '2', '1534470971', '0', '0', '1');
INSERT INTO `c_news` VALUES ('105', '中国自控开展2018年度“七•一”主题党日活动', 'Uploads/2018-08-17/5b762c9be0281.jpg', '&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/Uploads/ueditor/image/20180817/1534471164168678.jpg&quot; title=&quot;1534471164168678.jpg&quot; alt=&quot;W020180723547170305369.jpg&quot;/&gt;&lt;/p&gt;&lt;p style=&quot;text-align: center;&quot;&gt;&lt;img src=&quot;/Uploads/ueditor/image/20180817/1534471172468673.jpg&quot; title=&quot;1534471172468673.jpg&quot; alt=&quot;W020180723547170589400.jpg&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;6月22日，为庆祝中国共产党成立97周年，进一步深入学习贯彻党的十九大精神，结合中央关于开展“不忘初心&amp;nbsp;牢记使命”主题教育活动的安排，国机集团所属中国自动化控制系统总公司（以下简称“中国自控”）组织“走进伟人寻找初心”七一主题党日活动。公司全系统在职党员、中层以上干部、入党积极分子及团干部共80余人参加活动。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;上午，同志们来到“周恩来邓颖超纪念馆”进行参观，学习周恩来、邓颖超夫妇“为追求真理不懈探索、为民族解放建立功勋、为人民幸福鞠躬尽瘁”的历史贡献。通过实物和影片了解他们在那段峥嵘岁月的工作和生活环境，深深缅怀两位不朽的共产主义战士。周恩来、邓颖超夫妇那不忘初心、无私奉献的坚定信念和将有限的生命投入到无限的事业的崇高人格深深感染了在场的每一个人。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;在主展厅，参加活动的党员同志集体重温入党誓词，面对党旗再次坚定地做出自己的承诺。&amp;nbsp;&lt;/p&gt;&lt;p&gt;　　&lt;/p&gt;&lt;p&gt;下午，一行人又来到“新中国反腐败第一大案展览馆”。如果说战争时期敌人的武器是“明枪”，那么和平时期就是“暗箭”。在展览馆通过了解刘青山和张子善是如何从革命功臣最终堕落成历史罪人的惨痛教训，使大家时刻谨记“打铁还需自身硬”的深刻道理。&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '4', '3', '1534471323', '0', '0', '1');
INSERT INTO `c_news` VALUES ('106', '国机联讯：中机六院及时传达学习集团2018年党建工作会暨党风廉政建设和反腐败工作会议精神', '/Uploads/20181027/9f62171805b9189d778bdf7f3d055f1c.jpg', '<p style=\"text-align:center\"><img src=\"/Uploads/ueditor/image/20180817/1534475436565293.jpg\" title=\"1534475436565293.jpg\" alt=\"W020180129361736566848.jpg\"/></p><p><br/></p><p>1月24日，中机六院召集公司领导班子成员、党委委员、纪委委员、职能部门和各生产单位负责人会议，及时传达学习国机集团2018年党建工作会暨党风廉政建设和反腐败工作会议精神，结合公司实际对有关重点工作做出部署。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p>公司党委书记传达了石柯书记讲话和集团党建工作报告精神，要求把党的政治建设摆在首位，用习近平新时代中国特色社会主义思想武装头脑，坚决维护以习近平同志为核心的党中央权威和集中统一领导；不忘初心、牢记使命，落实全面从严治党要求和党建责任；坚持党管人才原则，加强党的组织建设，激发基层党组织活力；加强党风廉政建设和反腐败工作，巩固拓展落实中央八项规定精神成果，弛而不息纠正“四风”。公司纪委书记传达了雷光华书记作的党风廉政建设和反腐败工作报告精神，详细解读了集团党委《关于进一步改进工作作风的若干意见》，要求大家深刻领会文件精神实质，严格贯彻执行；传达了集团2017年第二轮巡视反馈意见，要求公司各级党组织和领导干部按照全面从严治党要求，对照集团两轮巡视反馈意见一一对照检查，落实自查自报自纠工作；强调公司要认真落实监督执纪“四种形态”要求，加大监督检查力度，坚持问题导向，抓早抓小，防微杜渐，通过建立容错纠错机制，把严管和厚爱结合起来，为担当者担当，为负责者负责，为干事者撑腰，为广大干部职工干事创业营造风清气正环境。(中机六院）</p><p><br/></p>', '6', '0', '1534475480', '0', '0', '1');
INSERT INTO `c_news` VALUES ('107', '国机联讯：国机集团召开2017年度所属企业纪委书记述职述廉会', '/Uploads/20181027/75043fea1f78afd182d1c3c35f012ea7.jpg', '<p style=\"text-align:center\"><img src=\"/Uploads/ueditor/image/20180817/1534475633888985.jpg\" title=\"1534475633888985.jpg\" alt=\"W0201802013746583990522.jpg\"/></p><p><br/></p><p>1月20日，集团纪委召开2017年度所属企业纪委书记述职述廉会。集团纪委委员、所属企业纪委书记、巡视组组长、党风廉政建设和反腐败工作领导小组监督协调组成员单位负责人、纪检监察部和巡视办有关同志参加会议。集团党委常委、纪委书记雷光华同志主持会议并作点评讲话。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>国机集团所属企业纪委书记述职采取现场述职和书面述职相结合的方式，由二级企业纪委书记向集团纪委述职。中装集团、中国机床、中国重机、中国自控、国机资产、中汽工程、天津电气院等7家企业纪委书记进行现场述职，其余二级企业纪委书记提交书面述职报告。与会同志对纪委书记年度履职情况进行了打分评价。雷光华同志听取7位纪委书记述职述廉发言后作了简要点评讲话。&nbsp;</p><p>&nbsp; &nbsp;</p><p>他强调，各所属企业纪委书记要深入贯彻落实党的十九大和中央纪委二次全会、中央企业党风廉政建设和反腐败工作会议精神，认真学习贯彻习近平新时代中国特色社会主义思想，落实好集团党建会暨党风廉政建设和反腐败工作会议精神，履行好监督执纪问责的职责，树立起忠诚干净担当的形象，做到“四个带头”：带头讲政治、讲党性，落实新时代全面从严治党新要求；带头增强学习能力、增强专业能力，培育新时代企业纪检监察干部新素质；带头担当尽责、聚焦主责主业，展现新时代企业纪检监察工作新作为；带头从严律己、从严带队伍，塑造新时代企业纪检监察干部新形象，圆满完成2018年各项工作任务，向集团党委和16万员工交上一份满意的答卷。</p><p><br/></p>', '6', '0', '1534475713', '0', '0', '1');
INSERT INTO `c_news` VALUES ('108', '国机联讯：树海外党建新风，清廉洁工程之源——国机集团海外工程项目巡察组巡察中汽工程海外项目', '/Uploads/20181027/ad24555b714a60d050deb4609af7d7df.jpg', '<p>2018年5月10日和12日，国机集团党委常委、纪委书记雷光华同志为组长的海外工程项目巡察组，分别前往中汽工程上汽通用五菱印尼项目现场和上汽正大泰国项目现场进行巡察，国机集团巡视巡察办副主任徐刚、中国电工党委副书记郭晓峰、国机集团纪检监察部综合处处长王永祥参加巡察。</p><p><br/></p><p style=\"text-align: center;\"><img width=\"3968\" height=\"2239\" alt=\"\" oldsrc=\"W020180521503545527775.jpg\" src=\"/Uploads/ueditor/image/20180817/1534475788187662.jpg\" style=\"border: 0px none;overflow: hidden;vertical-align: top;height: 406px;width: 602px\"/></p><p>　</p><p style=\"text-align: center;\">　<img width=\"605\" height=\"402\" alt=\"\" oldsrc=\"W020180521503545611403.jpg\" src=\"/Uploads/ueditor/image/20180817/1534475788383050.jpg\" style=\"border: 0px none;overflow: hidden;vertical-align: top;height: 402px;width: 620px\"/></p><p>&nbsp; &nbsp; &nbsp;</p><p>雷书记一行分别在两个项目业主方代表——上汽通用五菱印尼公司总经理徐飞云、副总经理粟鸿斌，上汽正大有限公司总经理石国勇、新工厂建设总指挥戴建军，及中汽工程两个项目现场负责人张剑飞、高宏刚的陪同下，实地查看工厂建设情况，看望慰问所有现场员工。项目部经理、全体党员参加了巡察座谈会。</p><p>　　</p><p>巡察组在听取项目管理及党建和廉洁风险防控情况的汇报后，雷书记代表国机集团对一线员工表示慰问，对两个汽车整车建设项目取得的成绩给予充分肯定，对项目部项目管理和党建及党风廉政建设工作两手抓、两不误表示赞赏，并给全体党员讲了专题党课。</p><p>　　</p><p>雷书记指出，要认真学习习近平新时代中国特色社会主义思想和党的十九大精神，准确把握企业发展形势，坚持海外业务发展和党建工作的正确方向；认真贯彻中央和上级部署要求，把全面从严治党落实到海外工程的方方面面、各个环节、每个员工；认真落实中央八项规定及其实施细则精神和集团党委关于进一步改进工作作风的意见，持之以恒纠 “四风”、改作风；认真执行集团党委关于海外党建工作的要求和党风廉政有关制度规定，坚决防范廉洁风险，严厉惩治腐败问题，廉洁从业、廉洁创业，平安回国、平安回家；要认真组织开展海外项目党建日常工作和有关活动，凝聚党员、职工，共建文明园区；认真发挥党支部战斗堡垒作用和党员先锋模范作用，自觉维护大国央企良好形象，让五星红旗在海外工程项目高高飘扬。</p><p>　　</p><p>中汽工程纪委书记张会义强调，要认真落实集团党委有关文件精神和巡察组工作要求，创新开展有特色的党建活动，时刻绷紧廉洁风险防控这根弦，找准风险点，制定具体措施，促进廉洁从业，维护中汽工程良好形象。(中汽工程）</p><p><br/></p>', '6', '0', '1534475924', '0', '0', '1');
INSERT INTO `c_news` VALUES ('109', '国机联讯：国机集团党委党风廉政建设和反腐败工作领导小组监督协调组召开2018年上半年监督工作联席会', '/Uploads/20181027/6b4c070c4ae2ced5765c7e448c17ba6b.jpg', '<p style=\"text-align:center\"><img alt=\"\" src=\"/Uploads/ueditor/image/20180817/1534475991634183.jpg\" oldsrc=\"W020180622568410697205.jpg\" style=\"border: 0px none;overflow: hidden;vertical-align: top\"/></p><p>&nbsp;</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p>2018年6月22日上午，国机集团党委党风廉政建设和反腐败工作领导小组监督协调组召开上半年监督工作联席会。会议由集团纪委副书记王锡岩同志主持，集团党委党风廉政建设和反腐败工作领导小组监督协调组成员单位负责人、纪检监察部、巡视巡察办有关人员参加会议。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>会上，监督协调组成员单位负责人分别介绍了上半年职责范围内的监督工作、发现的主要问题、采取的解决措施和效果、需要协调的相关事项，以及下半年的监督工作安排等。王锡岩同志对各成员单位上半年开展的工作表示了充分肯定，并对进一步深化开展监督工作提出了建议。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>国机集团党委党风廉政建设和反腐败工作领导小组监督协调组通过定期召开监督工作联席会的方式，交流了相关监督信息，集中研究了监督工作中的具体问题，增强了监督效能，形成了监督合力，起到了良好效果。</p><p><br/></p>', '6', '0', '1534476080', '0', '0', '1');
INSERT INTO `c_news` VALUES ('110', '国机联讯：国机集团纪委召开集团2018年纪检监察工作中期推进会议暨“新风讲堂”第一期专题报告会', '/Uploads/20181027/cbe2de16732ec07786268be0d0f5f9f4.jpg', '<p style=\"text-align:center\"><img alt=\"\" src=\"/Uploads/ueditor/image/20180817/1534477447753574.jpg\" oldsrc=\"W020180717546571449670.jpg\" style=\"border: 0px none; overflow: hidden; vertical-align: top;\"/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>7月5日上午，国机集团纪委召开2018年纪检监察工作中期推进会议暨“新风讲堂”第一期专题报告会, 深入学习贯彻习近平新时代中国特色社会主义思想、党的十九大、中央纪委二次全会、省区市纪检监察工作座谈会精神，传达学习贯彻中央企业纪检监察工作中期推进会部署，坚持稳中求进基本工作方针，推动国机集团纪检监察工作实现高质量发展。国机集团党委常委、纪委书记雷光华传达了2018年中央企业纪检监察工作中期推进会精神和中央纪委国家监委驻国资委纪检监察组组长陈超英同志的重要讲话精神。会议就各级纪检监察和巡视巡察机构学习贯彻落实陈超英同志讲话精神，做好今年下半年工作提出了具体要求。&nbsp;</p><p>　　</p><p>会上，雷光华以“深入贯彻落实中央八项规定精神，锲而不舍纠正“四风”改进作风”为题，做了专场报告，向集团纪检监察和巡视巡察系统党员干部讲了主题党课，从深入学习领会习近平新时代中国特色社会主义思想和党的十九大精神，特别是中央八项规定及其实施细则精神、党的十八大以来作风建设取得的历史性成就、对有关政策的理解把握及下一步工作考虑三个方面，谈了学习和工作体会，并对下一步深入贯彻落实中央八项规定精神提出了明确意见。&nbsp;</p><p>　　</p><p>国机集团纪检监察和巡视巡察系统干部共220多人参加会议。&nbsp;</p><p><br/></p><ul style=\"padding: 0px; overflow: hidden; color: rgb(102, 102, 102); font-family: 微软雅黑; font-size: 14px; white-space: normal; background-color: rgb(247, 248, 250);\" class=\" list-paddingleft-2\"></ul><p><br/></p>', '6', '1', '1534477506', '0', '0', '1');
INSERT INTO `c_news` VALUES ('111', '利剑高悬 警钟长鸣——中汽工程纪委组织参观天津市警示教育主题展', '/Uploads/20181027/a9d1a86785a34de3d454de9dc798df2b.jpg', '<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</p><p style=\"text-align:center\"><img alt=\"\" src=\"/Uploads/ueditor/image/20180817/1534477697106095.jpg\" oldsrc=\"W020171220539209851664.jpg\" style=\"border: 0px none;overflow: hidden;vertical-align: top\"/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>2017年&nbsp;12月9日上午，中汽工程纪委组织中层及以上领导干部、各党支部书记、纪检委员、关键岗位员工等共99人，前往天津市美术馆，参观了“利剑高悬、警钟长鸣”天津市警示教育主题展。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>“利剑高悬、警钟长鸣”警示教育主题展是天津市运用党的十八大以来正风反腐成果对全市党员干部加强反腐倡廉警示教育的重要举措，展览突出政治站位，注重警示特色，由序厅、成果厅、警示厅和尾厅四个部分构成。成果厅从“回眸历史、不忘初心，全面从严治党新征程，全面从严治党重要论述，全面从严治党伟大实践”等四个方面，集中展示了十八大以来，以习近平同志为核心的党中央推进全面从严治党的战略部署、取得的伟大成就和天津市全面从严治党的具体实践；警示厅从“以案为鉴、以案为训，放纵欲望、毁掉人生，系统贪腐、触目惊心，顶风违纪、咎由自取”等八个方面，以图片、视频、忏悔书等多种形式，集中展示了党的十八大以来天津市查处的违纪违法领导干部典型案例。一个个身边的案例，一段段惨痛的忏悔，一件件震撼的实物，无不鲜明地昭示广大党员干部，诱惑的陷阱无处不在，被“围猎”的风险就在身边，一旦放松思想警惕、放松自我约束，就有可能坠入深渊，走上不归之路。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>公司参观人员认真听取了讲解介绍，仔细观看了成果展示和案例剖析，一段段文字、一句句警语、一个个案例，使大家受到了强烈的震撼和警醒，接受了一场深刻的党性教育和警示教育。</p><p>&nbsp;&nbsp;&nbsp;</p><p>参观结束前，公司全体党员干部面向党旗肃立，郑重举起右拳，由纪委书记张会义带领大家庄严宣誓，集体重温了入党誓词。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>此次参观活动，是中汽工程纪委结合年度纪检监察工作计划和天津市纪委的参观学习要求组织开展的，旨在深入开展党风廉政警示教育，引导广大党员干部深刻学习领会习近平总书记关于全面从严治党重要论述精神，不忘初心，牢记使命，以案为警，强化纪律和规矩意识，不断筑牢拒腐防变的思想防线。（中汽工程纪检监察室）</p><p><br/></p>', '6', '0', '1534477750', '0', '0', '1');
INSERT INTO `c_news` VALUES ('112', '中汽工程纪委开展“一代伟人周恩来廉洁奉公事迹暨 ‘不忘初心 牢记使命’十九大精神系列宣讲”主题教育活动', '/Uploads/20181027/ac8cb600388158718fa79195e329bc8f.jpg', '<p>&nbsp; &nbsp; &nbsp;</p><p style=\"text-align:center\"><img alt=\"\" oldsrc=\"W020171220534226172174.jpg\" src=\"/Uploads/ueditor/image/20180817/1534477791644821.jpg\" style=\"border: 0px none;overflow: hidden;vertical-align: top\"/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p>2017年11月24日，为了全面深入落实党的十九大精神，持续推进党风廉政建设及反腐败工作，进一步筑牢广大领导干部的思想道德防线，中汽工程纪委邀请到了周恩来邓颖超纪念馆宣讲团，举办了一场以“廉洁自律做表率 严以修身养正气”为主题的廉洁自律教育宣讲活动。宣讲会由纪委书记、党委副书记张会义主持，公司中层以上干部、关键岗位员工共210余人聆听宣讲。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>周邓纪念馆宣讲团围绕“廉洁奉公做表率一餐一饭帐分明”、 “严以修身养正气 廉洁自律树家风”、“海棠花祭”、“学习党章 不忘初心 牢记使命 永远奋斗”等六个宣讲主题，从周恩来总理的点滴事例讲起，讲述了周总理外出视察不搞特殊化一餐一饭都要用自己的工资按价付费、邢台地震中亲临视察深入百姓家中排忧解难、西花厅的装修风波、严格的家规和清廉家风、以及周邓坚贞不渝的爱情和坚定的共产主义信仰……大量珍贵的历史资料，配合以精美的幻灯片和温情的音乐，通过宣讲团成员用心、用情的精彩讲述，呈现出了周总理独特的人格魅力、廉洁奉公严以修身的高贵品质，聆听者被周总理的事迹深深地感动，甚至湿润了眼眶。最后宣讲团还结合党的十九大对《党章》的107处修改中核心的修改内容进行了重点宣讲。大家对宣讲团成员的精彩宣讲报以阵阵热烈的掌声。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>宣讲结束后，张会义书记作了总结讲话，他对此次宣讲给予高度评价，认为这是一堂非常有价值、有意义的廉洁自律教育课，对公司进一步学习宣传贯彻党的十九大精神，继续推进两学一做制度化常态化教育，以及年度的各项工作非常有作用、有帮助。张书记要求会后各部门、各党支部要结合公司“学习十九大大干四季度 再上新台阶”的主题宣讲教育活动，推动工作见诸行动，真正达到党的十九大报告精神提出的“学懂弄通做实”的要求。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>宣讲活动还受到了南开有线电视台的高度关注和全程采录，活动结束后，纪委书记张会义接受了现场采访。（中汽工程纪检监察室）</p><p><br/></p>', '6', '0', '1534477860', '0', '0', '1');
INSERT INTO `c_news` VALUES ('113', '国机联讯：国机集团纪检监察部和巡视办学习中央纪委二次全会和中央企业党风廉政建设和反腐败工作会议精神', '/Uploads/20181029/2d5890683fd5aaa2a43c50f776871f87.jpg', '<p style=\"text-align:center\"><img width=\"799\" height=\"600\" alt=\"\" oldsrc=\"W020180126372635083245.jpg\" src=\"/Uploads/ueditor/image/20180817/1534477914876778.jpg\" style=\"border: 0px none;overflow: hidden;vertical-align: top;height: 353px;width: 545px\"/></p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>1月19日，国机集团纪委召开集团纪检监察部和巡视办全体干部会议，认真学习贯彻十九届中央纪委二次全会和中央企业党风廉政建设和反腐败工作会议精神。国机集团党委常委、纪委书记雷光华主持会议。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>会上，雷光华同志传达了中央纪委二次全会上习近平总书记重要讲话和赵乐际同志代表中央纪委常委会作的工作报告主要精神以及中央企业党风廉政建设和反腐败工作会议精神。雷光华在会上对学习贯彻工作提出了明确要求，并就贯彻落实会议精神、全面落实2018年工作任务，进行了具体的安排部署。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>会议要求，国机集团各级纪检监察机构和纪检监察干部要深入学习贯彻中央纪委二次全会和中央企业党风廉政建设和反腐败工作会议精神，把思想和行动统一到中央的决策部署上来，以对党忠诚、高度负责的态度认真履行监督执纪问责的职责，一刻不停歇地推进全面从严治党向纵深发展，为国机集团二次创业、再造海外新国机和建设具有全球竞争力的世界一流企业提供坚强保证。</p><p><br/></p>', '6', '1', '1534477974', '0', '0', '1');
INSERT INTO `c_news` VALUES ('114', '国机联讯：国机集团纪委召开部分所属企业纪委书记座谈会', '/Uploads/20181027/f6388abfe684901b7186627750586790.jpg', '<p style=\"text-align:center\"><sup><img width=\"475\" height=\"301\" alt=\"\" oldsrc=\"W020180507596923331910.jpg\" src=\"/Uploads/ueditor/image/20180817/1534478071516146.jpg\" style=\"border: 0px none; overflow: hidden; vertical-align: top; height: 301px; width: 475px;\"/></sup></p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p><p>5月3日上午，国机集团纪委召开部分所属企业纪委书记座谈会。会议由集团纪委副书记、纪检监察部部长、巡视巡察办主任王锡岩同志主持，中国恒天、中设集团、中工国际、国机汽车、国机重装、中国一拖、苏美达等7家单位纪委书记及集团纪检监察部和巡视巡察办全体人员参加座谈交流。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>座谈会上，7家单位纪委书记围绕本企业纪检监察机构开展监督检查工作以及企业海外工程项目党组织建设、党风廉政建设和廉洁风险防控等方面的做法和经验进行了座谈交流，注重用具体案例说话，提炼工作亮点，比如恒天集团介绍了通过总部直管和按照业务单元划分授权子集团管理两种管理模式对境外企业进行有效管控，坚持内外一体，切实加强了境外企业领导人员政治素质；坚持“点、面”结合，构建了大监督体系，通过综合施策，加强了境外机构各方面的管理水平，防范了廉洁风险。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>中设集团以海外工程管理缺失问题为导向，加强海外工程的业务流程管控和监督检查，建立了“海外工程建设巡检制度”，将海外工程纳入公司纪委日常监督的范围和年度工作计划，对重大项目有计划的安排巡检；对有群众反映和出现经营问题的项目，及时安排巡检调查。同时发挥审计监督职能作用，运用审计成果，认真严肃处理问责，督促整改落实，有效的传导监督压力，延伸了监督的边界。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>中工国际创新境外党建工作体制机制，组建了海外单位党支部，在业务领域相对集中的境外不同项目，按地区、片区、人数设置区域联合党支部和6个党小组，并在党支部增设纪检委员，开创境外机构区域党建工作新局面。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>国机汽车在制定《巡察工作规定》、《巡察工作操作规程》文件，明确了巡察工作规范、工作规程的基础上，组建巡察组，已完成了所属6家企业的巡察工作。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>国机重装以采购业务监督检查为切入点，有效发挥纪检监察“围绕中心，服务大局”的功能，认真贯彻任洪斌董事长对二重采购工作提出的“约法三章”要求，从2016年3月到今年持续开展了采购业务监督检查工作，监督检查的重点随着工作的持续和深入不断调整，取得了良好的效果。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>中国一拖连续10年开展“反腐倡廉宣传教育月”活动。公司和所属单位在每年的活动月期间，不断创新反腐倡廉宣传教育方式方法，组织开展了一系列有特色、有影响的宣传教育活动，如开展反腐倡廉主题书法、摄影、短信作品征集，组织查找身边不良现象活动，廉洁微电影展映等，在企业内营造了健康向上的廉洁氛围。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>苏美达纪检监察部门围绕“1121”的工作机制来开展工作，即“一个中心、一个基础、二个保障、一个检查”，以落实“两个责任”为中心，以思想建设为基础，以制度体系建设和纪检干部队伍建设为保障，以效能监察为检查督促手段，切实做好纪检监察各项工作。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>座谈会上大家还提出工作中存在的困难、问题和意见建议。</p><p>&nbsp;&nbsp;&nbsp;&nbsp;</p><p>王锡岩对所属企业纪检监察机构开展的各项工作和境外单位或项目廉洁风险防控工作进行了充分的肯定，并对大家提出的困难和问题，提出了解决问题的意见建议。他指出，各单位纪检监察机构要进一步加强纪检监察各项工作任务的落实，强化监督执纪问责，发现问题要及时向上级纪委报告。他强调，国机集团有一半以上的业务是涉外业务，做好境外单位党风廉政建设和廉洁风险防控工作极为重要，各单位要站在讲政治的高度，进一步加强境外单位党组织建设；要坚持问题导向，建立健全并落实境外单位廉洁风险防控制度，制定有效措施加强境外项目监管，营造风清气正的干事创业环境和良好政治生态，提升国机集团国际化经营水平、促进境外资产保值增值，为实现“再造海外新国机”战略目标提供坚强保证。</p><p><br/></p>', '6', '0', '1534478128', '0', '0', '1');
INSERT INTO `c_news` VALUES ('115', '国机联讯： 国机集团党委常委、纪委书记雷光华一行巡察中国电工泰国TPI项目', '/Uploads/20181030/000f4e160aa082d4dc04b02142ae50b2.jpg', '<p>2018年5月13日，国机集团党委常委、纪委书记雷光华率领国机集团海外工程项目巡察组对中国电工泰国TPI项目进行了巡察，国机集团巡视巡察办副主任徐刚、中汽工程纪委书记张会义、国机集团纪检监察部综合处处长王永祥参与巡察；CMEC纪委书记王天翼、中国电工党委副书记郭晓峰等陪同巡察。</p><p><br/></p><p style=\"text-align: center;\"><img alt=\"\" oldsrc=\"W020180521371468532139.jpg\" src=\"/Uploads/ueditor/image/20180817/1534478183967180.jpg\" style=\"border: 0px none;overflow: hidden;vertical-align: top\"/></p><p>　　</p><p>巡察组到项目现场开展了实地考察，查阅了相关制度、资料和记录，参观了TPI项目主控室及党员活动室，听取了泰国TPI项目进展情况汇报及王天翼书记和郭晓峰副书记关于海外项目党建工作和廉洁风险防控工作的汇报。雷光华书记高度肯定了泰国TPI项目部和党支部的工作,并为项目部全体党员和入党积极分子上了一堂生动、深刻、富富有教育意义和警示作用的党课。</p><p><br/></p><p style=\"text-align: center;\"><img alt=\"\" oldsrc=\"W020180521371468558580.jpg\" src=\"/Uploads/ueditor/image/20180817/1534478184974302.jpg\" style=\"text-align: center; border: 0px none; overflow: hidden; vertical-align: top;\"/></p><p>&nbsp; &nbsp;</p><p>雷书记指出，海外工程项目是国机集团主业之一，为加快集团“走出去”步伐做出了重要贡献。进一步规范和加强国机集团境外单位党的建设，一刻不停歇地推进党风廉政建设和反腐败斗争，营造风清气正的干事创业环境和良好政治生态，是提升国机集团国际化经营水平、促进境外资产保值增值、实现“再造海外新国机”战略目标的现实需要和坚强保证。作为奋战在一线的项目团队，一定要提高政治站位，保持政治定力，确保党中央全面从严治党的战略部署在国机集团落到实处。要加强境外党风廉政建设，不断健全完善对外承包工程业务风险防控体系，锲而不舍地把海外项目党建和党风廉政建设引向深入，为集团二次创业、再造海外新国机，建设具有国际竞争力的世界一流企业而不懈奋斗。</p><p>　　</p><p>巡察组的到来极大鼓舞了项目现场党员同志们的干劲，大家表示一定以习近平新时代中国特色社会主义思想为指导，认真落实党的十九大精神和中央决策部署，在集团党委的坚强领导下，开拓创新、奋发进取，进一步做好党建和党风廉政建设工作，促进项目更好地发展，为再造海外新国机和“一带一路”建设做出新贡献！(中国电工）</p><p><br/></p>', '6', '2', '1534478320', '0', '0', '1');
INSERT INTO `c_news` VALUES ('130', '666', '/Uploads/20181026/db92bedfedc52d1e7dadfa99fec9b3bf.jpg', '<p>666</p>', '3', '0', '0', '1540601635', '1', '0');
INSERT INTO `c_news` VALUES ('131', '修改测试', '/Uploads/20181026/b3e55fb5896276193226d8edf93e5138.jpg', '<p>修改测试</p>', '4', '0', '0', '1540601633', '1', '0');
INSERT INTO `c_news` VALUES ('132', '测试专用', '\\Uploads\\20181022\\5e09d8e773e41af374748112ec93529a.jpg', '<p>阿萨德</p>', '3', '0', '0', '1540168674', '1', '0');

-- ----------------------------
-- Table structure for c_notice
-- ----------------------------
DROP TABLE IF EXISTS `c_notice`;
CREATE TABLE `c_notice` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL DEFAULT '' COMMENT '标题',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT '缩略图',
  `content` text NOT NULL COMMENT '内容',
  `cate_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '分类id',
  `ctime` int(11) NOT NULL DEFAULT '0' COMMENT '发布时间',
  `istop` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '置顶值(不置顶为0 置顶按照值从大到小排序)',
  `dtime` int(10) unsigned DEFAULT '0' COMMENT '删除时间',
  `is_del` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除（0未删除1已删除）',
  PRIMARY KEY (`id`),
  KEY `cate_id` (`cate_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COMMENT='通知';

-- ----------------------------
-- Records of c_notice
-- ----------------------------
INSERT INTO `c_notice` VALUES ('1', '习近平出席博鳌亚洲论坛', 'Uploads/2018-07-10/5b44781e2367b.jpg', '&lt;p&gt;“我在何浩明身边工作11年，他的违纪违法案例对我震动太大，警示深刻。”近日，观看了警示教育片后，贵州瓮福（集团）有限责任公司党委书记何光亮发出感慨。&lt;/p&gt;&lt;p&gt;如何在保持惩治腐败高压态势的同时，更加标本兼治做好查办案件“后半篇文章”？贵州注重将案例资源转化为警示教育资源，侧重对“身边人”的警示震慑，让所在单位、受教育者形成强烈的贴近类比，增强震慑效果。全省各级纪检监察机关围绕腐败问题多发易发岗位，组织开展案例剖析，撰写典型案例，配发忏悔录，通过召开警示教育大会、利用警示教育基地等方式发挥案件审查调查的警示、震慑和教育作用。凡立案查处违纪违法案件的单位，都要“一案一整改”，查找发案共性规律，以案促改，规范权力运行。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1', '1531208930', '0', '1534752130', '1');
INSERT INTO `c_notice` VALUES ('2', '11', 'Uploads/2018-07-10/5b447816b1643.jpg', '&lt;p&gt;11&lt;/p&gt;', '1', '1531209153', '0', '1534752132', '1');
INSERT INTO `c_notice` VALUES ('3', '11111', 'Uploads/2018-07-10/5b44780f04ad2.jpg', '&lt;p&gt;1111&lt;/p&gt;', '1', '1531209222', '0', '1534752135', '1');
INSERT INTO `c_notice` VALUES ('4', '国庆放假通知！', 'Uploads/2018-07-10/5b4470e2bb87e.jpg', '&lt;p&gt;555&lt;/p&gt;', '1', '1531209659', '3', '1534752137', '1');
INSERT INTO `c_notice` VALUES ('5', '中秋放假通知！', 'Uploads/2018-07-10/5b446c9772cea.jpg', '&lt;p&gt;8888&lt;/p&gt;', '2', '1531210903', '2', '1534752140', '1');
INSERT INTO `c_notice` VALUES ('6', 'qqqq', 'Uploads/2018-07-10/5b446cb08b156.jpg', '&lt;p&gt;qqqq&lt;/p&gt;', '2', '1531210928', '0', '1531211161', '1');
INSERT INTO `c_notice` VALUES ('7', 'qqqq1', 'Uploads/2018-07-10/5b4476e60b458.jpg', '&lt;p&gt;qqq&lt;br/&gt;&lt;/p&gt;', '2', '1531213542', '1', '1534752142', '1');
INSERT INTO `c_notice` VALUES ('8', '111222', 'Uploads/2018-07-30/5b5e8898a88fe.jpg', '&lt;p&gt;111&lt;/p&gt;', '2', '1532922008', '111', '1534752144', '1');
INSERT INTO `c_notice` VALUES ('9', '向廖俊波同志学习的通知', 'Uploads/2018-08-20/5b7a786e0c89d.jpeg', '&lt;p&gt;为了提高干部群众政治觉悟，与本周三下午14:00在1号礼堂开展“向廖俊波同志学习”专题会议，请相关人员及时参会！&lt;/p&gt;', '1', '1534752878', '0', '0', '0');
INSERT INTO `c_notice` VALUES ('10', '优秀党员评选', 'Uploads/2018-08-20/5b7a79dd82189.jpeg', '&lt;p&gt;明天下午于2号礼堂举行优秀党员评选活动，清所有党员准时赴会并头上神圣一票！&lt;/p&gt;', '2', '1534753245', '0', '0', '0');

-- ----------------------------
-- Table structure for c_notice_cate
-- ----------------------------
DROP TABLE IF EXISTS `c_notice_cate`;
CREATE TABLE `c_notice_cate` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL DEFAULT '' COMMENT '分类名称',
  `sort` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='通知分类';

-- ----------------------------
-- Records of c_notice_cate
-- ----------------------------
INSERT INTO `c_notice_cate` VALUES ('1', '重要通知', '2');
INSERT INTO `c_notice_cate` VALUES ('2', '紧急通知', '1');

-- ----------------------------
-- Table structure for c_pagemodule
-- ----------------------------
DROP TABLE IF EXISTS `c_pagemodule`;
CREATE TABLE `c_pagemodule` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `module_name` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '页面模块名称',
  `auth_c` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '控制器',
  `auth_a` varchar(30) COLLATE utf8_bin DEFAULT NULL COMMENT '操作方法',
  `thumb` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '图标',
  `ctime` int(11) DEFAULT NULL COMMENT '创建时间',
  `utime` int(11) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='页面模块表';

-- ----------------------------
-- Records of c_pagemodule
-- ----------------------------
INSERT INTO `c_pagemodule` VALUES ('1', '党建要闻', 'news', 'index', '/Uploads/20181101/16b6fdd040f27ac49f7c19188fed02c2.jpg', '1541057079', null);
INSERT INTO `c_pagemodule` VALUES ('2', '新闻管理', 'news', 'index', '/Uploads/20181101/6044b8cae803f249ba82f68eac3f5681.jpg', '1541062121', null);
INSERT INTO `c_pagemodule` VALUES ('4', '微党校', 'classcate', 'index', '/Uploads/20181101/f4c3573f444d529d27fb3a91c3a589dd.jpg', '1541063401', '1541064194');

-- ----------------------------
-- Table structure for c_permissions
-- ----------------------------
DROP TABLE IF EXISTS `c_permissions`;
CREATE TABLE `c_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `per_name` varchar(20) DEFAULT NULL COMMENT '权限名称',
  `module` varchar(30) DEFAULT NULL COMMENT '模块名称',
  `controller` varchar(30) DEFAULT NULL COMMENT '控制器名称',
  `operate` varchar(30) DEFAULT NULL COMMENT '方法名称',
  `price` float(10,2) DEFAULT NULL COMMENT '价格',
  `pid` int(10) DEFAULT NULL COMMENT '父级id',
  `sort` tinyint(2) DEFAULT '0' COMMENT '排序',
  `ctime` int(30) DEFAULT NULL COMMENT '创建时间',
  `hidden` int(2) DEFAULT NULL COMMENT '是否隐藏（0代表不隐藏，1代表隐藏）',
  `public_id` int(3) DEFAULT NULL COMMENT '公众号id',
  `menu_url` varchar(255) DEFAULT NULL COMMENT '菜单地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COMMENT='权限列表';

-- ----------------------------
-- Records of c_permissions
-- ----------------------------
INSERT INTO `c_permissions` VALUES ('1', '廉政中国', 'Admin', 'index', '', null, '0', '0', '1536300390', null, '1', 'https://www.baidu.com/');
INSERT INTO `c_permissions` VALUES ('2', '国机新风', 'Admin', null, '', null, '0', '0', '1536300390', null, '1', 'https://www.baidu.com/');
INSERT INTO `c_permissions` VALUES ('3', '纪检在线', null, null, '', null, '0', '0', '1536300390', null, '1', 'https://www.baidu.com/');
INSERT INTO `c_permissions` VALUES ('4', '时政热点', null, 'admin', '', null, '1', '0', '1536300390', null, '1', 'https://www.baidu.com/');
INSERT INTO `c_permissions` VALUES ('5', '警示教育', null, null, '', null, '1', '0', '1536300390', null, '1', 'https://www.baidu.com/');
INSERT INTO `c_permissions` VALUES ('6', '党纪国法', null, null, '', null, '1', '0', '1536300390', null, '1', 'https://www.baidu.com/');
INSERT INTO `c_permissions` VALUES ('7', '新风讲堂', null, null, '', null, '2', '0', '1536300390', null, '1', 'https://www.baidu.com/');
INSERT INTO `c_permissions` VALUES ('8', '新风展馆', null, null, '', null, '2', '0', '1536300390', null, '1', 'https://www.baidu.com/');
INSERT INTO `c_permissions` VALUES ('9', '新风社区', null, null, '', null, '2', '0', '1536300390', null, '1', 'https://www.baidu.com/');
INSERT INTO `c_permissions` VALUES ('10', '新风考堂', null, null, '', null, '2', '0', '1536300390', null, '1', 'https://www.baidu.com/');
INSERT INTO `c_permissions` VALUES ('11', '通报曝光', null, null, '', null, '3', '0', '1536300390', null, '1', 'https://www.baidu.com/');
INSERT INTO `c_permissions` VALUES ('12', '巡视利剑', null, null, '', null, '3', '0', '1536300390', null, '1', 'https://www.baidu.com/');
INSERT INTO `c_permissions` VALUES ('13', 'AI小荷', null, null, '', null, '3', '0', '1536300390', null, '1', 'https://www.baidu.com/');
INSERT INTO `c_permissions` VALUES ('14', '举报平台', null, null, '', null, '3', '0', '1536300390', null, '1', 'https://www.baidu.com/');

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
-- Table structure for c_photo
-- ----------------------------
DROP TABLE IF EXISTS `c_photo`;
CREATE TABLE `c_photo` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '相册名称',
  `content` text NOT NULL COMMENT '描述',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `dtime` int(10) unsigned DEFAULT '0' COMMENT '删除时间',
  `is_del` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否删除(0未删除1已删除)',
  PRIMARY KEY (`id`),
  KEY `is_del` (`is_del`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=utf8 COMMENT='党建相册';

-- ----------------------------
-- Records of c_photo
-- ----------------------------
INSERT INTO `c_photo` VALUES ('8', '11', '&lt;p&gt;111&lt;/p&gt;', '1531202389', '1531203679', '1');
INSERT INTO `c_photo` VALUES ('9', '国内新闻', '&lt;p&gt;国内新闻&lt;/p&gt;', '1531203144', '1531206487', '1');
INSERT INTO `c_photo` VALUES ('11', '国内新闻111', '&lt;p&gt;11111&lt;/p&gt;', '1531204706', '1540348083', '1');
INSERT INTO `c_photo` VALUES ('16', '1111', '&lt;p&gt;111&lt;/p&gt;', '1531205756', '1531206482', '1');
INSERT INTO `c_photo` VALUES ('17', '111', '&lt;p&gt;111&lt;/p&gt;', '1531206153', '1531206480', '1');
INSERT INTO `c_photo` VALUES ('18', '党建相册111', '&lt;p&gt;qqqqq1111&lt;/p&gt;', '1531206508', '1540348080', '1');
INSERT INTO `c_photo` VALUES ('19', 'eeeee', '&lt;p&gt;eeee&lt;/p&gt;', '1531207196', '1540348078', '1');
INSERT INTO `c_photo` VALUES ('20', '11111', '&lt;p&gt;11&lt;/p&gt;', '1531207248', '1540348071', '1');
INSERT INTO `c_photo` VALUES ('21', '测试', '&lt;p&gt;111&lt;/p&gt;', '1531359057', '1531363005', '1');
INSERT INTO `c_photo` VALUES ('24', 'nnnn', '&lt;p&gt;nnnnn&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1531363025', '1540348068', '1');
INSERT INTO `c_photo` VALUES ('27', '1', '&lt;p&gt;11&lt;br/&gt;&lt;/p&gt;', '1531454086', '1540348066', '1');
INSERT INTO `c_photo` VALUES ('28', '55', '&lt;p&gt;11&lt;br/&gt;&lt;/p&gt;', '1531454112', '1540348064', '1');
INSERT INTO `c_photo` VALUES ('53', '144', '&lt;p&gt;1&lt;/p&gt;', '1531460268', '1540348062', '1');
INSERT INTO `c_photo` VALUES ('61', '112', '&lt;p&gt;11&lt;br/&gt;&lt;/p&gt;', '1531467110', '1540348060', '1');
INSERT INTO `c_photo` VALUES ('62', '111222', '&lt;p&gt;11&lt;/p&gt;', '1532583858', '1533868417', '1');
INSERT INTO `c_photo` VALUES ('63', '9998969', '&lt;p&gt;16998&lt;/p&gt;', '1532583881', '1533868415', '1');
INSERT INTO `c_photo` VALUES ('64', 'ghhhh', '&lt;p&gt;hashsaha&lt;/p&gt;', '1534487093', '1540348057', '1');
INSERT INTO `c_photo` VALUES ('65', 'ceshi', '&lt;p&gt;ceshi&lt;/p&gt;', '1534487899', '1540348054', '1');
INSERT INTO `c_photo` VALUES ('66', '不忘初心跟党走 亮点纷呈庆七·一 —— 中工国际各海外项目组开展建党97周年庆祝活动', '&lt;p&gt;为庆祝中国共产党成立97周年，讴歌党的光辉历程，继承和发扬党的优良传统，进一步掀起学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神热潮，国机集团所属中工国际工程股份有限公司（以下简称“中工国际”）各海外项目党组织和党员纷纷以不同形式为党庆生。&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '1534488276', '1540348052', '1');
INSERT INTO `c_photo` VALUES ('67', '集团多家企业举行庆祝“五四”青年节活动', '&lt;p&gt;图为中国重型院团委组织“弘扬五四精神&amp;nbsp;争当时代先锋”专题讲座 、中汽工程五四表彰会暨主题分享活动 、重材院五四活动。&lt;/p&gt;', '1534495573', '1540348042', '1');
INSERT INTO `c_photo` VALUES ('68', '国机重工开展 “五四”系列活动', '&lt;p&gt;“五四”青年节期间，为发扬团员青年不忘初心、砥砺前行的奋斗精神，国机集团所属中国国机重工集团有限公司（以下简称“国机重工”）开展了“奋斗的青春最美丽”系列活动。&amp;nbsp;&lt;/p&gt;', '1534495725', '1540348040', '1');
INSERT INTO `c_photo` VALUES ('69', '国机集团女职工三八节共同演绎完美乐章', '&lt;p&gt;3月7日下午，国机集团工会组织京内企业女职工开展“激情三月天•魅力音乐节”主题活动，庆祝第108个国际妇女节，国机集团总经济师、工会主席、总部机关党委书记刘祖晴出席活动并致辞，共240余名女职工参加活动。&amp;nbsp;&lt;/p&gt;', '1534495905', '1540348038', '1');
INSERT INTO `c_photo` VALUES ('70', '恒天集团1集体1个人分获2018年“全国工人先锋号”和“最美职工”称号', '&lt;p&gt;4月28日，2018年庆祝“五一”国际劳动节暨“当好主人翁、建功新时代”劳动和技能竞赛推进大会在北京人民大会堂举行。国机集团所属中国恒天集团有限公司经纬榆次分公司罗拉厂装配组荣获“2018年全国工人先锋号”称号。&amp;nbsp;&lt;/p&gt;', '1534496004', '1540348036', '1');
INSERT INTO `c_photo` VALUES ('71', '一份政治生日礼物 传递一份组织关怀', '&lt;p&gt;党员的政治生命从入党开始，入党之日即为党员的“政治生日”。为充分发挥党员的先锋模范作用，时刻牢记党员身份和使命，国机集团总部机关党委坚持将“政治生日”活动作为总部党组织开展“两学一做”学习教育常态化制度化、切实增强党员思想政治意识的有力抓手和有效载体。结合构建集团总部党员信息库建设，按照党员入党时间的先后顺序，建立总部党员“政治生日”台账；精心设计制作极具实用性、纪念性的生日纪念品，由各党支部在入党纪念日当天亲自送到党员手中，让其充分感受到组织的关怀温暖和作为一名共产党员的光荣与责任；坚持通过纪念政治生日，提醒广大党员不忘初心、牢记使命，时刻用党员的誓言充实自己，用党员的标准要求自己，用党员的身份约束自己。&lt;span style=&quot;color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px; background-color: rgb(247, 248, 250);&quot;&gt;&amp;nbsp;&lt;/span&gt;&lt;/p&gt;', '1534496251', '1540348034', '1');
INSERT INTO `c_photo` VALUES ('72', '中工国际党委召开2018年理论学习中心组第二次（扩大）学习会', '&lt;p&gt;在中国共产党成立97周年前夕，国机集团所属中工国际工程股份有限公司（以下简称“中工国际”）党委于6月29日上午召开了以“举旗定向 不忘初心 继续前进”为主题的2018年党委理论学习中心组第二次（扩大）学习会议。公司党委书记丁建主持会议，董事长罗艳及在京的公司高管参加了本次学习。&amp;nbsp;&lt;/p&gt;', '1534496400', '1540348032', '1');
INSERT INTO `c_photo` VALUES ('73', '苏美达隆重召开纪念建党97周年大会暨十九大精神专题辅导报告会', '&lt;p&gt;在喜迎中国共产党成立97周年之际，国机集团所属苏美达股份有限公司（以下简称“苏美达”）党委隆重召开纪念建党97周年大会暨十九大精神专题辅导报告会，大会特别邀请了省委宣讲团成员、省社科联党组书记、常务副主席刘德海作专题辅导报告。公司全体领导班子成员，中层以上干部，各党委、党总支、直属党支部委员以及各级党务工作人员、部分党员代表共150余人参加了会议。苏美达党委书记、董事长杨永清主持会议并作讲话。&amp;nbsp;&lt;/p&gt;', '1534496547', '1540348030', '1');
INSERT INTO `c_photo` VALUES ('74', '习近平：国企一定要改革，抱残守缺不行', '&lt;p&gt;6月13日上午，正在山东考察的习近平来到万华烟台工业园。得知企业走出一条引进、消化、吸收、再创新直至自主创造的道路，技术创新能力从无到有、从弱到强，成为行业领军者，习近平十分高兴。他说，回顾你们这个历程，一路走得很好，虽然是一个艰辛创业之路，但是很成功。之所以取得成功，我的一个体会就是走了自主创新之路。没有不可能的事情，就要有这么一股劲儿，正像屈原讲的“路漫漫其修远兮，吾将上下而求索”。谁说国企搞不好？要搞好就一定要改革，抱残守缺不行，改革能成功，就能变成现代企业。希望大家再接再厉，一鼓作气，一气呵成，一以贯之，朝着你们既定的目标奋勇直前。&lt;/p&gt;', '1534497159', '1540348028', '1');
INSERT INTO `c_photo` VALUES ('75', '习近平在武汉考察', '&lt;p&gt;4月26日上午，中共中央总书记、国家主席、中央军委主席习近平在烽火集团有限公司考察。&lt;/p&gt;', '1534497509', '1540348025', '1');
INSERT INTO `c_photo` VALUES ('102', '测试相册2', '<p>测试信息2</p>', '1540285881', '1540368743', '1');
INSERT INTO `c_photo` VALUES ('103', '测试相册1', '<p>测试相册1</p>', '1540368780', '1541137006', '1');
INSERT INTO `c_photo` VALUES ('104', '测试相册3', '<p>测试相册</p>', '1540871011', '0', '0');
INSERT INTO `c_photo` VALUES ('105', '相册', '<p>相册测试</p>', '1541137054', '0', '0');

-- ----------------------------
-- Table structure for c_photo_img
-- ----------------------------
DROP TABLE IF EXISTS `c_photo_img`;
CREATE TABLE `c_photo_img` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '相册id',
  `path` varchar(255) DEFAULT '' COMMENT '图片地址',
  PRIMARY KEY (`id`),
  KEY `photo_id` (`photo_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=102 DEFAULT CHARSET=utf8 COMMENT='相册图片';

-- ----------------------------
-- Records of c_photo_img
-- ----------------------------
INSERT INTO `c_photo_img` VALUES ('4', '8', 'Uploads/2018-07-10/5b444b55a9fe2.jpg');
INSERT INTO `c_photo_img` VALUES ('5', '9', 'Uploads/2018-07-10/5b444e489cda7.jpg');
INSERT INTO `c_photo_img` VALUES ('6', '9', 'Uploads/2018-07-10/5b444e489e8ff.jpg');
INSERT INTO `c_photo_img` VALUES ('8', '11', 'Uploads/2018-07-10/5b44546246fe8.jpg');
INSERT INTO `c_photo_img` VALUES ('9', '11', 'Uploads/2018-07-10/5b4454d189bbc.jpg');
INSERT INTO `c_photo_img` VALUES ('10', '16', 'Uploads/2018-07-10/5b44587cae0a8.jpg');
INSERT INTO `c_photo_img` VALUES ('11', '17', 'Uploads/2018-07-10/5b445a0953e06.jpg');
INSERT INTO `c_photo_img` VALUES ('12', '18', 'Uploads/2018-07-10/5b445b6c61612.jpg');
INSERT INTO `c_photo_img` VALUES ('13', '19', 'Uploads/2018-07-10/5b445e1c7443e.jpg');
INSERT INTO `c_photo_img` VALUES ('14', '19', 'Uploads/2018-07-10/5b445e1c757c7.jpg');
INSERT INTO `c_photo_img` VALUES ('15', '19', 'Uploads/2018-07-10/5b445e1c76b4f.jpg');
INSERT INTO `c_photo_img` VALUES ('16', '20', 'Uploads/2018-07-10/5b445e50d08ca.jpg');
INSERT INTO `c_photo_img` VALUES ('17', '21', 'Uploads/2018-07-12/5b46af5159583.jpg');
INSERT INTO `c_photo_img` VALUES ('18', '21', 'Uploads/2018-07-12/5b46af5162225.jpg');
INSERT INTO `c_photo_img` VALUES ('19', '21', 'Uploads/2018-07-12/5b46af5163d7e.jpg');
INSERT INTO `c_photo_img` VALUES ('20', '21', 'Uploads/2018-07-12/5b46af5164d1e.jpg');
INSERT INTO `c_photo_img` VALUES ('21', '24', 'Uploads/2018-07-12/5b46bed155439.jpg');
INSERT INTO `c_photo_img` VALUES ('22', '27', 'Uploads/2018-07-13/5b4822866dc11.jpg');
INSERT INTO `c_photo_img` VALUES ('23', '28', 'Uploads/2018-07-13/5b4822a081295.jpg');
INSERT INTO `c_photo_img` VALUES ('24', '53', 'Uploads/2018-07-13/5b483aacee52d.jpg');
INSERT INTO `c_photo_img` VALUES ('26', '61', 'Uploads/2018-07-17/5b4d8d99e5dd8.jpg');
INSERT INTO `c_photo_img` VALUES ('27', '61', 'Uploads/2018-07-17/5b4d8d99e8101.jpg');
INSERT INTO `c_photo_img` VALUES ('28', '61', 'Uploads/2018-07-17/5b4d8d99ea429.jpg');
INSERT INTO `c_photo_img` VALUES ('29', '61', 'Uploads/2018-07-17/5b4d8d99ebf82.jpg');
INSERT INTO `c_photo_img` VALUES ('30', '53', 'Uploads/2018-07-17/5b4d8da36e9d0.jpg');
INSERT INTO `c_photo_img` VALUES ('31', '53', 'Uploads/2018-07-17/5b4d8da370911.jpg');
INSERT INTO `c_photo_img` VALUES ('32', '53', 'Uploads/2018-07-17/5b4d8da371c99.jpg');
INSERT INTO `c_photo_img` VALUES ('33', '28', 'Uploads/2018-07-17/5b4d8dab93d63.jpg');
INSERT INTO `c_photo_img` VALUES ('34', '28', 'Uploads/2018-07-17/5b4d8dab950eb.jpg');
INSERT INTO `c_photo_img` VALUES ('35', '27', 'Uploads/2018-07-17/5b4d92fc83324.jpg');
INSERT INTO `c_photo_img` VALUES ('36', '27', 'Uploads/2018-07-17/5b4d92fc842c4.jpg');
INSERT INTO `c_photo_img` VALUES ('37', '24', 'Uploads/2018-07-17/5b4d930947125.jpg');
INSERT INTO `c_photo_img` VALUES ('38', '24', 'Uploads/2018-07-17/5b4d9309484ad.jpg');
INSERT INTO `c_photo_img` VALUES ('39', '11', 'Uploads/2018-07-17/5b4d932888731.jpg');
INSERT INTO `c_photo_img` VALUES ('40', '11', 'Uploads/2018-07-17/5b4d932893314.jpg');
INSERT INTO `c_photo_img` VALUES ('41', '18', 'Uploads/2018-07-17/5b4d933246e96.jpg');
INSERT INTO `c_photo_img` VALUES ('42', '18', 'Uploads/2018-07-17/5b4d93324821e.jpg');
INSERT INTO `c_photo_img` VALUES ('43', '18', 'Uploads/2018-07-17/5b4d9332491bf.jpg');
INSERT INTO `c_photo_img` VALUES ('44', '20', 'Uploads/2018-07-17/5b4d933e7112e.jpg');
INSERT INTO `c_photo_img` VALUES ('45', '20', 'Uploads/2018-07-17/5b4d933e71ce6.jpg');
INSERT INTO `c_photo_img` VALUES ('46', '62', 'Uploads/2018-07-26/5b595fb2d43a7.jpg');
INSERT INTO `c_photo_img` VALUES ('47', '63', 'Uploads/2018-07-26/5b595fc910015.jpg');
INSERT INTO `c_photo_img` VALUES ('48', '64', 'Uploads/2018-08-17/5b766a35186a9.jpg');
INSERT INTO `c_photo_img` VALUES ('49', '65', 'Uploads/2018-08-17/5b766d5b465d7.jpg');
INSERT INTO `c_photo_img` VALUES ('50', '65', 'Uploads/2018-08-17/5b766d5b468d1.jpg');
INSERT INTO `c_photo_img` VALUES ('51', '65', 'Uploads/2018-08-17/5b766d5b46b28.jpg');
INSERT INTO `c_photo_img` VALUES ('52', '66', 'Uploads/2018-08-17/5b766ed456ecf.jpg');
INSERT INTO `c_photo_img` VALUES ('53', '66', 'Uploads/2018-08-17/5b766ed45721c.jpg');
INSERT INTO `c_photo_img` VALUES ('54', '66', 'Uploads/2018-08-17/5b766ed45748f.jpg');
INSERT INTO `c_photo_img` VALUES ('55', '66', 'Uploads/2018-08-17/5b766ed457707.jpg');
INSERT INTO `c_photo_img` VALUES ('56', '67', 'Uploads/2018-08-17/5b768b55a6a3d.jpg');
INSERT INTO `c_photo_img` VALUES ('57', '67', 'Uploads/2018-08-17/5b768b55a6de1.jpg');
INSERT INTO `c_photo_img` VALUES ('58', '67', 'Uploads/2018-08-17/5b768b55a71b3.jpg');
INSERT INTO `c_photo_img` VALUES ('59', '68', 'Uploads/2018-08-17/5b768bed5529b.jpg');
INSERT INTO `c_photo_img` VALUES ('60', '68', 'Uploads/2018-08-17/5b768bed556c9.jpg');
INSERT INTO `c_photo_img` VALUES ('61', '68', 'Uploads/2018-08-17/5b768bed55abc.jpg');
INSERT INTO `c_photo_img` VALUES ('62', '69', 'Uploads/2018-08-17/5b768ca1dbc9c.jpg');
INSERT INTO `c_photo_img` VALUES ('63', '69', 'Uploads/2018-08-17/5b768ca1dc0f5.jpg');
INSERT INTO `c_photo_img` VALUES ('64', '69', 'Uploads/2018-08-17/5b768ca1dc48c.jpg');
INSERT INTO `c_photo_img` VALUES ('65', '69', 'Uploads/2018-08-17/5b768ca1dc82b.jpg');
INSERT INTO `c_photo_img` VALUES ('66', '69', 'Uploads/2018-08-17/5b768ca1dcbc4.jpg');
INSERT INTO `c_photo_img` VALUES ('67', '70', 'Uploads/2018-08-17/5b768d0483b0c.jpg');
INSERT INTO `c_photo_img` VALUES ('68', '70', 'Uploads/2018-08-17/5b768d048443d.jpg');
INSERT INTO `c_photo_img` VALUES ('69', '71', 'Uploads/2018-08-17/5b768dfbb16d6.jpg');
INSERT INTO `c_photo_img` VALUES ('70', '71', 'Uploads/2018-08-17/5b768dfbb1a6a.jpg');
INSERT INTO `c_photo_img` VALUES ('71', '72', 'Uploads/2018-08-17/5b768e905c966.jpg');
INSERT INTO `c_photo_img` VALUES ('72', '72', 'Uploads/2018-08-17/5b768e905cd14.jpg');
INSERT INTO `c_photo_img` VALUES ('73', '72', 'Uploads/2018-08-17/5b768e905d08c.jpg');
INSERT INTO `c_photo_img` VALUES ('74', '73', 'Uploads/2018-08-17/5b768f239a89c.jpg');
INSERT INTO `c_photo_img` VALUES ('75', '73', 'Uploads/2018-08-17/5b768f239acb9.jpg');
INSERT INTO `c_photo_img` VALUES ('76', '73', 'Uploads/2018-08-17/5b768f239b005.jpg');
INSERT INTO `c_photo_img` VALUES ('77', '74', 'Uploads/2018-08-17/5b769187f2e07.jpg');
INSERT INTO `c_photo_img` VALUES ('78', '74', 'Uploads/2018-08-17/5b769187f32e9.jpg');
INSERT INTO `c_photo_img` VALUES ('79', '74', 'Uploads/2018-08-17/5b769187f38d4.jpg');
INSERT INTO `c_photo_img` VALUES ('80', '74', 'Uploads/2018-08-17/5b769187f3bf8.jpg');
INSERT INTO `c_photo_img` VALUES ('89', '102', '\\Uploads\\20181023\\9d7127b21972152b6f8357337c6ceebf.jpg');
INSERT INTO `c_photo_img` VALUES ('90', '102', '\\Uploads\\20181023\\5e44910c2f1f521f59990bf4455573fa.jpg');
INSERT INTO `c_photo_img` VALUES ('93', '103', '\\Uploads\\20181024\\9e83b541aaf56889c4123a343d4089f1.jpg');
INSERT INTO `c_photo_img` VALUES ('94', '103', '\\Uploads\\20181024\\0bca4315dc345e797c9694ef60a49c3b.jpg');
INSERT INTO `c_photo_img` VALUES ('95', '103', '\\Uploads\\20181024\\2634d7590fda510ace4d0f6ae009a538.jpg');
INSERT INTO `c_photo_img` VALUES ('96', '104', '/Uploads/20181030/5ce1691d103c1e8e60a48ec39315b4c7.jpg');
INSERT INTO `c_photo_img` VALUES ('97', '104', '/Uploads/20181030/cac987ad77222d96623ed55a69079665.jpg');
INSERT INTO `c_photo_img` VALUES ('98', '104', '/Uploads/20181030/c4bce236f43a8ace6056b379c3813d2b.jpg');
INSERT INTO `c_photo_img` VALUES ('99', '105', '/Uploads/20181102/cace677f7551573e9186e286f1f7fc18.jpg');
INSERT INTO `c_photo_img` VALUES ('100', '105', '/Uploads/20181102/4e19886b0df6b7dba6a2e76df0c4fa8a.jpg');
INSERT INTO `c_photo_img` VALUES ('101', '105', '/Uploads/20181102/164dd82e7905357df7e6860132cf13d9.jpg');

-- ----------------------------
-- Table structure for c_report
-- ----------------------------
DROP TABLE IF EXISTS `c_report`;
CREATE TABLE `c_report` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL DEFAULT '' COMMENT '举报标题',
  `content` text NOT NULL COMMENT '举报内容',
  `belong_company` varchar(32) NOT NULL DEFAULT '' COMMENT '所属公司',
  `belong_dept` varchar(32) NOT NULL DEFAULT '' COMMENT '所属部门',
  `rank` varchar(10) NOT NULL DEFAULT '' COMMENT '职级',
  `question_type` varchar(32) NOT NULL DEFAULT '' COMMENT '问题类别',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '举报时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8 COMMENT='举报';

-- ----------------------------
-- Records of c_report
-- ----------------------------
INSERT INTO `c_report` VALUES ('68', '大吃', '某某 使用公款在某处大吃大喝', '某公司', '某部门', '处级', '公款大吃大喝', '1532566681');
INSERT INTO `c_report` VALUES ('69', '大喝', '公款大吃大喝', '某公司', '某部门', '科级', '公款大吃大喝', '1532567072');
INSERT INTO `c_report` VALUES ('70', '11', '11', '1', '1', '1', '违规配备使用公车', '1533108365');
INSERT INTO `c_report` VALUES ('71', '11', '11', '1', '1', '1', '公款大吃大喝', '1533108614');
INSERT INTO `c_report` VALUES ('74', '1', '1', '1', '1', '1', '1', '1533620057');
INSERT INTO `c_report` VALUES ('117', '1', '1', '1', '1', '1', '1', '1533624561');
INSERT INTO `c_report` VALUES ('118', '1', '1', '1', '1', '1', '1', '1533624584');
INSERT INTO `c_report` VALUES ('124', '2', '3', '4', '5', '6', '1', '1534145757');
INSERT INTO `c_report` VALUES ('125', '2', '3', '4', '5', '6', '1', '1534148087');
INSERT INTO `c_report` VALUES ('126', '2', '3', '4', '5', '6', '1', '1534148146');
INSERT INTO `c_report` VALUES ('127', '测试', '测试', '测试', '测试', '测试', '违规收送礼品礼金', '1535597513');
INSERT INTO `c_report` VALUES ('128', '测试', '测试', '测试', '测试', '测试', '违规收送礼品礼金', '1535621498');
INSERT INTO `c_report` VALUES ('133', '标题', '内容', '所属公司', '被反应对象', '职级', '问题类别', '1538284834');
INSERT INTO `c_report` VALUES ('134', '标题', '内容', '所属公司', '被反应对象', '职级', '问题类别', '1538285088');
INSERT INTO `c_report` VALUES ('135', '标题', '内容', '所属公司', '被反应对象', '职级', '问题类别', '1538285261');
INSERT INTO `c_report` VALUES ('136', '标题', '内容', '所属公司', '被反应对象', '职级', '问题类别', '1538285295');
INSERT INTO `c_report` VALUES ('137', '标题', '内容', '所属公司', '被反应对象', '职级', '问题类别', '1538290613');
INSERT INTO `c_report` VALUES ('138', '标题', '内容', '所属公司', '被反应对象', '职级', '问题类别', '1538290625');
INSERT INTO `c_report` VALUES ('139', '标题', '内容', '所属公司', '被反应对象', '职级', '问题类别', '1538290773');

-- ----------------------------
-- Table structure for c_report_attach
-- ----------------------------
DROP TABLE IF EXISTS `c_report_attach`;
CREATE TABLE `c_report_attach` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `report_id` int(11) NOT NULL DEFAULT '0' COMMENT '举报id',
  `path` varchar(255) NOT NULL DEFAULT '' COMMENT '附件路径',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '附件类型 1图片 2视频',
  PRIMARY KEY (`id`),
  KEY `report_id` (`report_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=172 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of c_report_attach
-- ----------------------------
INSERT INTO `c_report_attach` VALUES ('145', '69', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-26_5b591e204abe7.jpg', '1');
INSERT INTO `c_report_attach` VALUES ('146', '69', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-26_5b591e20680ae.jpg', '1');
INSERT INTO `c_report_attach` VALUES ('147', '69', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-26_5b591e208036c.jpg', '1');
INSERT INTO `c_report_attach` VALUES ('148', '69', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-26_5b591e20aca66.mp4', '2');
INSERT INTO `c_report_attach` VALUES ('149', '69', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-26_5b591e21ae20f.mp4', '2');
INSERT INTO `c_report_attach` VALUES ('150', '69', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-26_5b591e23c0b66.mp4', '2');
INSERT INTO `c_report_attach` VALUES ('151', '70', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-26_5b5926948c5dc.jpg', '1');
INSERT INTO `c_report_attach` VALUES ('152', '70', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-26_5b5926950f5f8.mp4', '2');
INSERT INTO `c_report_attach` VALUES ('153', '71', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-26_5b59270602ca4.jpg', '1');
INSERT INTO `c_report_attach` VALUES ('154', '71', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-26_5b5927062304c.jpg', '1');
INSERT INTO `c_report_attach` VALUES ('155', '71', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-26_5b592706433f3.mp4', '2');
INSERT INTO `c_report_attach` VALUES ('156', '71', 'http://pc5hsiop1.bkt.clouddn.com/2018-07-26_5b59270f31cb2.mp4', '2');
INSERT INTO `c_report_attach` VALUES ('157', '70', 'http://pc5hsiop1.bkt.clouddn.com/2018-08-01_5b61608d816a4.mp4', '2');
INSERT INTO `c_report_attach` VALUES ('158', '71', 'http://pc5hsiop1.bkt.clouddn.com/2018-08-01_5b61618683abe.MOV', '2');
INSERT INTO `c_report_attach` VALUES ('159', '74', '', '0');
INSERT INTO `c_report_attach` VALUES ('160', '1', '\'i11111', '1');
INSERT INTO `c_report_attach` VALUES ('161', '1', 'i22222\'', '1');
INSERT INTO `c_report_attach` VALUES ('162', '1', '\'v33333', '1');
INSERT INTO `c_report_attach` VALUES ('163', '1', 'v444444\'', '1');
INSERT INTO `c_report_attach` VALUES ('164', '1', 'i11111', '1');
INSERT INTO `c_report_attach` VALUES ('165', '1', 'i22222', '1');
INSERT INTO `c_report_attach` VALUES ('166', '1', 'v33333', '1');
INSERT INTO `c_report_attach` VALUES ('167', '1', 'v444444', '1');
INSERT INTO `c_report_attach` VALUES ('168', '128', 'http://pc5hsiop1.bkt.clouddn.com/FoxX09-LxSI1qVr9nZ61F8cCZtEj', '1');
INSERT INTO `c_report_attach` VALUES ('169', '128', '', '1');
INSERT INTO `c_report_attach` VALUES ('170', '128', 'http://pc5hsiop1.bkt.clouddn.com/FpSXFmh7p4igzgBNjlJ9t_oQwFIX', '2');
INSERT INTO `c_report_attach` VALUES ('171', '128', '', '2');

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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COMMENT='角色表';

-- ----------------------------
-- Records of c_role
-- ----------------------------
INSERT INTO `c_role` VALUES ('7', '党风建设', '1536669690', '1,4,5,6,59,2,7,8,9,10,3,11,12,13,14', '党员风气，树立榜样', '0');
INSERT INTO `c_role` VALUES ('8', '国机新风', '1536730103', '2,7,8,9,10', '国机新风权限', '0');
INSERT INTO `c_role` VALUES ('9', '纺友', '1539834411', '1,4,5,6,2,7,8,9,10,3,11,12,13,14', '党员风气，树立榜样', '0');

-- ----------------------------
-- Table structure for c_roles
-- ----------------------------
DROP TABLE IF EXISTS `c_roles`;
CREATE TABLE `c_roles` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `roles_name` varchar(20) NOT NULL DEFAULT '' COMMENT '角色/用户组名称',
  `roles_auth_ids` varchar(128) NOT NULL DEFAULT '' COMMENT '权限ids,1,2,5，权限表中的主键集合',
  `company_id` int(11) NOT NULL COMMENT '对应公司的id',
  `roles_note` varchar(255) DEFAULT NULL COMMENT '备注',
  `create_time` int(11) unsigned DEFAULT NULL,
  `update_time` int(11) unsigned DEFAULT NULL,
  `delete_time` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='子级角色表';

-- ----------------------------
-- Records of c_roles
-- ----------------------------
INSERT INTO `c_roles` VALUES ('2', '纺友-技术', '22,24,34,35,31,32,36,37,41,42,44,50,51,52,53,54,55', '32', '测试用', null, null, null);

-- ----------------------------
-- Table structure for c_system
-- ----------------------------
DROP TABLE IF EXISTS `c_system`;
CREATE TABLE `c_system` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '站点名称',
  `description` varchar(255) NOT NULL DEFAULT '' COMMENT '描述',
  `keywords` varchar(255) NOT NULL DEFAULT '' COMMENT '关键词',
  `copyright` varchar(32) NOT NULL DEFAULT '' COMMENT '版权',
  `record` varchar(32) NOT NULL DEFAULT '' COMMENT '备案号',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of c_system
-- ----------------------------
INSERT INTO `c_system` VALUES ('1', '国机云党建', '国机,党建', '国机,党建', 'Copyright@武汉纺友技术有限公司 版权所有', '鄂ICP备09014919号');

-- ----------------------------
-- Table structure for c_test
-- ----------------------------
DROP TABLE IF EXISTS `c_test`;
CREATE TABLE `c_test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `test` varchar(255) COLLATE utf8_bin DEFAULT NULL COMMENT '测试使用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='测试使用哦';

-- ----------------------------
-- Records of c_test
-- ----------------------------
INSERT INTO `c_test` VALUES ('1', '{\"2\":\"opt2\",\"3\":\"opt2\",\"4\":\"opt2\"}');
INSERT INTO `c_test` VALUES ('2', '{\"2\":\"opt2\",\"3\":\"opt1\",\"4\":\"opt2\"}');
INSERT INTO `c_test` VALUES ('4', '{\"2\":\"opt1\",\"3\":\"opt1\",\"4\":\"opt3\"}');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COMMENT='用户表';

-- ----------------------------
-- Records of c_user
-- ----------------------------
INSERT INTO `c_user` VALUES ('1', '71cloud', '383eafdd5d7d6221612fe7e10cf703f0', '0', '', '', '0', '15927668465', '1', null, null, null, null, null, '', null);
INSERT INTO `c_user` VALUES ('4', 'cc', '', '0', '', '', '0', '', null, null, 'oecaE0ii_-oWQHrUB8NF5kzV7HZA', null, null, null, 'CURD', null);
INSERT INTO `c_user` VALUES ('7', '老王', '14e1b600b1fd579f47433b88e8d85291', '1539305070', 'tyq4x0dpx7', null, '1539305093', '15927668469', null, null, null, 'http://pc5hsiop1.bkt.clouddn.com/avaturl.png', '2', '5', null, null);
INSERT INTO `c_user` VALUES ('8', 'test', '14e1b600b1fd579f47433b88e8d85291', '1539919673', '1XGKwHXjcSvbd3CBIr2ecfTIsLpOGoOI', null, '1539935548', '15527854695', null, null, null, 'http://pc5hsiop1.bkt.clouddn.com/avaturl.png', '1', '1', null, null);

-- ----------------------------
-- Table structure for c_user_chapter
-- ----------------------------
DROP TABLE IF EXISTS `c_user_chapter`;
CREATE TABLE `c_user_chapter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `chapter_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '章节id',
  `see_time` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '观看时长',
  `is_over` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '是否看完 1看完0未看完',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`) USING BTREE,
  KEY `chapter_id` (`chapter_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8 COMMENT='用户章节表';

-- ----------------------------
-- Records of c_user_chapter
-- ----------------------------
INSERT INTO `c_user_chapter` VALUES ('1', '1', '1', '150', '1');
INSERT INTO `c_user_chapter` VALUES ('2', '2', '1', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('3', '1', '6', '121', '1');
INSERT INTO `c_user_chapter` VALUES ('4', '1', '2', '1', '1');
INSERT INTO `c_user_chapter` VALUES ('5', '1', '3', '58', '1');
INSERT INTO `c_user_chapter` VALUES ('6', '1', '4', '123', '1');
INSERT INTO `c_user_chapter` VALUES ('7', '1', '5', '255', '1');
INSERT INTO `c_user_chapter` VALUES ('8', '1', '7', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('9', '1', '9', '131', '0');
INSERT INTO `c_user_chapter` VALUES ('10', '1', '8', '76', '0');
INSERT INTO `c_user_chapter` VALUES ('11', '1', '10', '82', '0');
INSERT INTO `c_user_chapter` VALUES ('12', '1', '11', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('13', '1', '12', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('14', '8', '1', '202', '1');
INSERT INTO `c_user_chapter` VALUES ('15', '8', '2', '269', '1');
INSERT INTO `c_user_chapter` VALUES ('16', '8', '3', '78', '0');
INSERT INTO `c_user_chapter` VALUES ('17', '8', '4', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('18', '8', '6', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('19', '9', '2', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('20', '9', '1', '202', '1');
INSERT INTO `c_user_chapter` VALUES ('21', '10', '1', '202', '1');
INSERT INTO `c_user_chapter` VALUES ('22', '10', '2', '269', '1');
INSERT INTO `c_user_chapter` VALUES ('23', '11', '6', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('24', '14', '1', '202', '1');
INSERT INTO `c_user_chapter` VALUES ('25', '14', '2', '211', '0');
INSERT INTO `c_user_chapter` VALUES ('26', '14', '3', '135', '1');
INSERT INTO `c_user_chapter` VALUES ('27', '14', '5', '255', '1');
INSERT INTO `c_user_chapter` VALUES ('28', '14', '6', '123', '0');
INSERT INTO `c_user_chapter` VALUES ('29', '14', '7', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('30', '14', '8', '202', '1');
INSERT INTO `c_user_chapter` VALUES ('31', '14', '4', '32', '0');
INSERT INTO `c_user_chapter` VALUES ('32', '15', '20', '202', '1');
INSERT INTO `c_user_chapter` VALUES ('33', '15', '1', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('34', '16', '1', '7', '0');
INSERT INTO `c_user_chapter` VALUES ('35', '16', '20', '2', '0');
INSERT INTO `c_user_chapter` VALUES ('36', '15', '7', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('37', '15', '8', '2', '0');
INSERT INTO `c_user_chapter` VALUES ('38', '17', '20', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('39', '17', '8', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('40', '17', '6', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('41', '17', '7', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('42', '17', '1', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('43', '12', '6', '106', '0');
INSERT INTO `c_user_chapter` VALUES ('44', '12', '8', '1', '0');
INSERT INTO `c_user_chapter` VALUES ('45', '19', '1', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('46', '19', '2', '269', '1');
INSERT INTO `c_user_chapter` VALUES ('47', '19', '3', '182', '1');
INSERT INTO `c_user_chapter` VALUES ('48', '19', '7', '202', '1');
INSERT INTO `c_user_chapter` VALUES ('49', '19', '20', '0', '1');
INSERT INTO `c_user_chapter` VALUES ('50', '19', '4', '261', '1');
INSERT INTO `c_user_chapter` VALUES ('51', '19', '5', '255', '1');
INSERT INTO `c_user_chapter` VALUES ('52', '19', '21', '131', '0');
INSERT INTO `c_user_chapter` VALUES ('53', '19', '8', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('54', '19', '6', '81', '1');
INSERT INTO `c_user_chapter` VALUES ('55', '19', '22', '202', '0');
INSERT INTO `c_user_chapter` VALUES ('56', '19', '26', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('57', '20', '26', '29', '1');
INSERT INTO `c_user_chapter` VALUES ('58', '20', '22', '202', '1');
INSERT INTO `c_user_chapter` VALUES ('59', '24', '26', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('60', '24', '25', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('61', '20', '25', '202', '0');
INSERT INTO `c_user_chapter` VALUES ('62', '20', '20', '202', '0');
INSERT INTO `c_user_chapter` VALUES ('63', '20', '23', '202', '0');
INSERT INTO `c_user_chapter` VALUES ('64', '20', '8', '202', '0');
INSERT INTO `c_user_chapter` VALUES ('65', '20', '9', '202', '0');
INSERT INTO `c_user_chapter` VALUES ('66', '16', '25', '0', '0');
INSERT INTO `c_user_chapter` VALUES ('67', '16', '28', '6', '0');
INSERT INTO `c_user_chapter` VALUES ('68', '16', '32', '1', '0');
INSERT INTO `c_user_chapter` VALUES ('69', '16', '33', '18', '0');
INSERT INTO `c_user_chapter` VALUES ('70', '19', '36', '799', '0');
INSERT INTO `c_user_chapter` VALUES ('71', '19', '38', '730', '0');
INSERT INTO `c_user_chapter` VALUES ('72', '15', '36', '21', '0');
INSERT INTO `c_user_chapter` VALUES ('73', '15', '37', '1', '0');
INSERT INTO `c_user_chapter` VALUES ('74', '19', '28', '68', '0');
INSERT INTO `c_user_chapter` VALUES ('75', '16', '29', '1', '0');
INSERT INTO `c_user_chapter` VALUES ('76', '9', '78', '5', '0');
INSERT INTO `c_user_chapter` VALUES ('77', '19', '62', '2427', '0');
INSERT INTO `c_user_chapter` VALUES ('78', '15', '78', '2', '0');
INSERT INTO `c_user_chapter` VALUES ('79', '19', '78', '299', '0');
INSERT INTO `c_user_chapter` VALUES ('80', '19', '80', '53', '0');
INSERT INTO `c_user_chapter` VALUES ('81', '19', '56', '64', '0');
INSERT INTO `c_user_chapter` VALUES ('82', '19', '65', '1815', '0');
INSERT INTO `c_user_chapter` VALUES ('83', '16', '78', '3', '0');
INSERT INTO `c_user_chapter` VALUES ('84', '15', '77', '1', '0');
INSERT INTO `c_user_chapter` VALUES ('85', '19', '72', '73', '0');
INSERT INTO `c_user_chapter` VALUES ('86', '26', '28', '3', '0');
INSERT INTO `c_user_chapter` VALUES ('87', '26', '45', '551', '0');
INSERT INTO `c_user_chapter` VALUES ('88', '26', '75', '1', '0');
INSERT INTO `c_user_chapter` VALUES ('89', '15', '39', '75', '0');
INSERT INTO `c_user_chapter` VALUES ('90', '27', '36', '545', '0');
INSERT INTO `c_user_chapter` VALUES ('91', '24', '77', '591', '0');
INSERT INTO `c_user_chapter` VALUES ('92', '24', '78', '5', '1');
INSERT INTO `c_user_chapter` VALUES ('93', '24', '80', '1067', '1');
INSERT INTO `c_user_chapter` VALUES ('94', '24', '79', '1', '1');
INSERT INTO `c_user_chapter` VALUES ('95', '24', '81', '664', '1');
INSERT INTO `c_user_chapter` VALUES ('96', '24', '40', '599', '1');

-- ----------------------------
-- Table structure for c_user_class
-- ----------------------------
DROP TABLE IF EXISTS `c_user_class`;
CREATE TABLE `c_user_class` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `class_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '课程id',
  `over_period` tinyint(2) DEFAULT '0' COMMENT '已完成课时',
  `last_time` int(10) unsigned DEFAULT '0' COMMENT '最后一次学习日期',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '加入学习时间',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COMMENT='用户课程表';

-- ----------------------------
-- Records of c_user_class
-- ----------------------------
INSERT INTO `c_user_class` VALUES ('1', '1', '1', '6', '1533711999', '1531706507');
INSERT INTO `c_user_class` VALUES ('2', '1', '2', '1', '1532916329', '1531706507');
INSERT INTO `c_user_class` VALUES ('8', '1', '3', '0', '1532946183', '1532486764');
INSERT INTO `c_user_class` VALUES ('9', '1', '4', '0', '1532916335', '1532499021');
INSERT INTO `c_user_class` VALUES ('10', '2', '1', '0', '0', '1532565459');
INSERT INTO `c_user_class` VALUES ('11', '8', '1', '2', '1533088439', '1533087786');
INSERT INTO `c_user_class` VALUES ('12', '9', '1', '1', '1533089396', '1533089324');
INSERT INTO `c_user_class` VALUES ('13', '10', '1', '2', '1533091938', '1533090910');
INSERT INTO `c_user_class` VALUES ('14', '11', '2', '0', '1533116285', '1533116267');
INSERT INTO `c_user_class` VALUES ('16', '14', '1', '2', '1533177830', '1533176130');
INSERT INTO `c_user_class` VALUES ('17', '14', '2', '0', '1533178146', '1533176157');
INSERT INTO `c_user_class` VALUES ('18', '14', '3', '0', '1533177872', '1533176293');
INSERT INTO `c_user_class` VALUES ('19', '14', '4', '1', '1533178494', '1533176320');
INSERT INTO `c_user_class` VALUES ('20', '16', '6', '0', '1533196021', '1533195723');
INSERT INTO `c_user_class` VALUES ('21', '16', '4', '0', '1533866267', '1533195781');
INSERT INTO `c_user_class` VALUES ('22', '16', '2', '0', '1533868801', '1533195801');
INSERT INTO `c_user_class` VALUES ('23', '15', '3', '0', '1533517043', '1533517016');
INSERT INTO `c_user_class` VALUES ('24', '15', '4', '0', '1533517053', '1533517053');
INSERT INTO `c_user_class` VALUES ('25', '17', '6', '0', '1533517093', '1533517093');
INSERT INTO `c_user_class` VALUES ('26', '15', '6', '1', '1533521760', '1533517149');
INSERT INTO `c_user_class` VALUES ('27', '17', '4', '0', '1533517688', '1533517506');
INSERT INTO `c_user_class` VALUES ('28', '17', '2', '0', '1533517533', '1533517533');
INSERT INTO `c_user_class` VALUES ('29', '17', '3', '0', '1533517655', '1533517648');
INSERT INTO `c_user_class` VALUES ('31', '17', '1', '0', '1533527548', '1533518351');
INSERT INTO `c_user_class` VALUES ('32', '12', '2', '0', '1533520458', '1533520458');
INSERT INTO `c_user_class` VALUES ('33', '19', '1', '4', '1534129585', '1533545460');
INSERT INTO `c_user_class` VALUES ('34', '19', '3', '1', '1533871985', '1533549664');
INSERT INTO `c_user_class` VALUES ('35', '19', '6', '1', '1533892229', '1533551063');
INSERT INTO `c_user_class` VALUES ('37', '19', '2', '1', '1533892387', '1533774846');
INSERT INTO `c_user_class` VALUES ('38', '19', '4', '0', '1533890390', '1533807608');
INSERT INTO `c_user_class` VALUES ('39', '16', '5', '0', '1533868824', '1533868824');
INSERT INTO `c_user_class` VALUES ('40', '20', '11', '2', '1534147570', '1534131523');
INSERT INTO `c_user_class` VALUES ('41', '20', '7', '1', '1534218875', '1534132737');
INSERT INTO `c_user_class` VALUES ('42', '24', '11', '0', '1534232507', '1534137929');
INSERT INTO `c_user_class` VALUES ('43', '19', '12', '0', '1534851217', '1534735928');
INSERT INTO `c_user_class` VALUES ('44', '19', '29', '0', '1534990387', '1534746754');
INSERT INTO `c_user_class` VALUES ('45', '19', '26', '0', '1534903651', '1534746789');
INSERT INTO `c_user_class` VALUES ('46', '16', '31', '0', '1535590041', '1534845070');
INSERT INTO `c_user_class` VALUES ('47', '16', '24', '0', '1534845410', '1534845410');
INSERT INTO `c_user_class` VALUES ('48', '24', '31', '0', '1535702074', '1535621935');
INSERT INTO `c_user_class` VALUES ('49', '24', '32', '4', '1535700171', '1535621962');
INSERT INTO `c_user_class` VALUES ('50', '24', '30', '0', '1535700246', '1535621981');
INSERT INTO `c_user_class` VALUES ('51', '24', '17', '1', '1535693920', '1535693890');
INSERT INTO `c_user_class` VALUES ('52', '15', '32', '0', '1535962012', '1535962012');

-- ----------------------------
-- Table structure for c_user_msg
-- ----------------------------
DROP TABLE IF EXISTS `c_user_msg`;
CREATE TABLE `c_user_msg` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '消息类型 1系统消息 2投稿消息',
  `message` varchar(255) NOT NULL DEFAULT '' COMMENT '内容',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '发送时间',
  `is_see` tinyint(1) unsigned DEFAULT '0' COMMENT '查看状态 0未读1已读',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COMMENT='消息中心';

-- ----------------------------
-- Records of c_user_msg
-- ----------------------------
INSERT INTO `c_user_msg` VALUES ('2', '19', '1', '系统消息系统消息', '0', '1');
INSERT INTO `c_user_msg` VALUES ('3', '19', '2', '您的稿件《xxxxxxxxxxxxxxxx》未被采用，不要灰心、继续努力～', '0', '1');
INSERT INTO `c_user_msg` VALUES ('4', '19', '2', '您的稿件《xxxxxxxxxxxxxxxx》已被采用，再接再厉！', '0', '1');
INSERT INTO `c_user_msg` VALUES ('5', '16', '2', '您的稿件《年轻干部怎一个“智”字了得》已被采用，再接再厉！', '1534753915', '1');
INSERT INTO `c_user_msg` VALUES ('6', '9', '2', '您的稿件《“差不多先生”变形计》已被采用，再接再厉！', '1534755558', '0');
INSERT INTO `c_user_msg` VALUES ('7', '1', '2', '您的稿件《组织部的孩子》已被采用，再接再厉！', '1534755564', '0');
INSERT INTO `c_user_msg` VALUES ('8', '1', '2', '您的稿件《把青春奉献在一线的“90后”》已被采用，再接再厉！', '1534755570', '0');
INSERT INTO `c_user_msg` VALUES ('9', '1', '2', '您的稿件《铁匠、木匠和泥匠》已被采用，再接再厉！', '1534755575', '0');
INSERT INTO `c_user_msg` VALUES ('10', '1', '2', '您的稿件《党员干部莫患“空调病”》已被采用，再接再厉！', '1534755580', '0');
INSERT INTO `c_user_msg` VALUES ('11', '1', '2', '您的稿件《做一棵开山岛上的“苦楝树”》已被采用，再接再厉！', '1534755586', '0');
INSERT INTO `c_user_msg` VALUES ('12', '1', '2', '您的稿件《做新时代有“识”之“士”》已被采用，再接再厉！', '1534755592', '0');
INSERT INTO `c_user_msg` VALUES ('13', '1', '2', '您的稿件《以身许国 何事不敢为》已被采用，再接再厉！', '1534755597', '0');
INSERT INTO `c_user_msg` VALUES ('14', '1', '2', '您的稿件《透过“熬”字看组工》已被采用，再接再厉！', '1534755602', '0');
INSERT INTO `c_user_msg` VALUES ('15', '16', '2', '您的稿件《“爱吾国”方能“兴国梦”》已被采用，再接再厉！', '1534755608', '1');
INSERT INTO `c_user_msg` VALUES ('16', '16', '2', '您的稿件《组工人的行动哲学》已被采用，再接再厉！', '1534755618', '1');
INSERT INTO `c_user_msg` VALUES ('17', '16', '2', '您的稿件《奋进搭“鹊桥”干群来“相会”》已被采用，再接再厉！', '1534755624', '1');
INSERT INTO `c_user_msg` VALUES ('18', '16', '2', '您的稿件《组工干部的通关秘籍》已被采用，再接再厉！', '1534755628', '1');
INSERT INTO `c_user_msg` VALUES ('19', '16', '2', '您的稿件《“麦穗”精神不可丢》已被采用，再接再厉！', '1534755633', '1');
INSERT INTO `c_user_msg` VALUES ('20', '29', '2', '您的稿件《【改革开放记忆】问候语见证我家的酸甜苦辣》已被采用，再接再厉！', '1535594081', '0');
INSERT INTO `c_user_msg` VALUES ('21', '29', '2', '您的稿件《【改革开放记忆】问候语见证我家的酸甜苦辣》已被采用，再接再厉！', '1535595574', '0');
INSERT INTO `c_user_msg` VALUES ('22', '29', '2', '您的稿件《三位基层扶贫女干部的故事》已被采用，再接再厉！', '1535619481', '0');
INSERT INTO `c_user_msg` VALUES ('23', '29', '2', '您的稿件《一群青年志愿者的乡村环保试验》已被采用，再接再厉！', '1535619542', '0');
INSERT INTO `c_user_msg` VALUES ('24', '29', '2', '您的稿件《孝心“接力棒”》已被采用，再接再厉！', '1535619570', '0');
INSERT INTO `c_user_msg` VALUES ('25', '29', '2', '您的稿件《一勤无难事》已被采用，再接再厉！', '1535619593', '0');
INSERT INTO `c_user_msg` VALUES ('26', '29', '2', '您的稿件《乡村标语“进化史”》已被采用，再接再厉！', '1535619660', '0');
INSERT INTO `c_user_msg` VALUES ('27', '29', '2', '您的稿件《两代人的40年》已被采用，再接再厉！', '1535619760', '0');
INSERT INTO `c_user_msg` VALUES ('28', '29', '2', '您的稿件《小家变 大家兴》已被采用，再接再厉！', '1535619851', '0');

-- ----------------------------
-- Table structure for c_user_score
-- ----------------------------
DROP TABLE IF EXISTS `c_user_score`;
CREATE TABLE `c_user_score` (
  `uid` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '用户id',
  `name` varchar(255) NOT NULL DEFAULT '' COMMENT '加分 项目名称',
  `type` tinyint(1) unsigned NOT NULL DEFAULT '0' COMMENT '加分类型 1点赞 2学习视频 3投稿 4投稿被采用 5参加考试成绩优异 6参加活动',
  `score` tinyint(2) unsigned NOT NULL DEFAULT '0' COMMENT '增加分数',
  `ctime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '加分时间',
  KEY `uid` (`uid`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户分数表';

-- ----------------------------
-- Records of c_user_score
-- ----------------------------
INSERT INTO `c_user_score` VALUES ('20', '33333456', '2', '2', '1534147535');
INSERT INTO `c_user_score` VALUES ('20', '理论新视野', '2', '2', '1534148986');
INSERT INTO `c_user_score` VALUES ('20', '小康社会', '2', '2', '1534149013');
INSERT INTO `c_user_score` VALUES ('19', '1', '3', '2', '1534149616');
INSERT INTO `c_user_score` VALUES ('20', '投稿', '3', '2', '1534149802');
INSERT INTO `c_user_score` VALUES ('19', '1', '3', '2', '1534149840');
INSERT INTO `c_user_score` VALUES ('19', '1', '3', '2', '1534149847');
INSERT INTO `c_user_score` VALUES ('19', '1', '3', '2', '1534150194');
INSERT INTO `c_user_score` VALUES ('19', '1', '3', '2', '1534150212');
INSERT INTO `c_user_score` VALUES ('20', 'lalalalal', '3', '2', '1534150257');
INSERT INTO `c_user_score` VALUES ('20', 'lalalalal', '4', '10', '1534152869');
INSERT INTO `c_user_score` VALUES ('20', '党的基层委员会', '6', '5', '1534153200');
INSERT INTO `c_user_score` VALUES ('20', '中办印发《关于党的基层组织任期的意见》', '6', '5', '1534153339');
INSERT INTO `c_user_score` VALUES ('19', '考试', '5', '10', '1534207388');
INSERT INTO `c_user_score` VALUES ('19', '考试', '5', '10', '1534207414');
INSERT INTO `c_user_score` VALUES ('20', '考试', '5', '10', '1534207536');
INSERT INTO `c_user_score` VALUES ('19', '11111111111111', '1', '1', '1534209426');
INSERT INTO `c_user_score` VALUES ('19', '中科院开展“讲爱国奉献，当时代先锋”主题活动—— 不忘初心跟党走', '1', '1', '1534211918');
INSERT INTO `c_user_score` VALUES ('19', '习近平：要大力倡导爱国奉献精神 使之成为新时代奋斗者的价值追求', '1', '1', '1534211936');
INSERT INTO `c_user_score` VALUES ('19', '人民论坛：“多开会”莫如“沉下去”', '1', '1', '1534211940');
INSERT INTO `c_user_score` VALUES ('19', '红船观澜：“一团和气”要不得', '1', '1', '1534211943');
INSERT INTO `c_user_score` VALUES ('20', '红船观澜：“一团和气”要不得', '1', '1', '1534211982');
INSERT INTO `c_user_score` VALUES ('21', '红船观澜：“一团和气”要不得', '1', '1', '1534211986');
INSERT INTO `c_user_score` VALUES ('21', '中科院开展“讲爱国奉献，当时代先锋”主题活动—— 不忘初心跟党走', '1', '1', '1534211993');
INSERT INTO `c_user_score` VALUES ('22', '中科院开展“讲爱国奉献，当时代先锋”主题活动—— 不忘初心跟党走', '1', '1', '1534211996');
INSERT INTO `c_user_score` VALUES ('23', '中科院开展“讲爱国奉献，当时代先锋”主题活动—— 不忘初心跟党走', '1', '1', '1534211999');
INSERT INTO `c_user_score` VALUES ('20', '中科院开展“讲爱国奉献，当时代先锋”主题活动—— 不忘初心跟党走', '1', '1', '1534212698');
INSERT INTO `c_user_score` VALUES ('16', '中国自控开展2018年度“七•一”主题党日活动', '1', '1', '1534725285');
INSERT INTO `c_user_score` VALUES ('19', '党章对党的干部的标准如何规定的', '2', '2', '1534735810');
INSERT INTO `c_user_score` VALUES ('16', '哎呦', '3', '2', '1534753779');
INSERT INTO `c_user_score` VALUES ('16', '年轻干部怎一个“智”字了得', '3', '2', '1534753883');
INSERT INTO `c_user_score` VALUES ('16', '年轻干部怎一个“智”字了得', '4', '10', '1534753915');
INSERT INTO `c_user_score` VALUES ('16', '“麦穗”精神不可丢', '3', '2', '1534754380');
INSERT INTO `c_user_score` VALUES ('16', '组工干部的通关秘籍', '3', '2', '1534754456');
INSERT INTO `c_user_score` VALUES ('1', '透过“熬”字看组工', '3', '2', '1534755004');
INSERT INTO `c_user_score` VALUES ('1', '以身许国 何事不敢为', '3', '2', '1534755036');
INSERT INTO `c_user_score` VALUES ('1', '做新时代有“识”之“士”', '3', '2', '1534755192');
INSERT INTO `c_user_score` VALUES ('1', '做一棵开山岛上的“苦楝树”', '3', '2', '1534755224');
INSERT INTO `c_user_score` VALUES ('1', '党员干部莫患“空调病”', '3', '2', '1534755274');
INSERT INTO `c_user_score` VALUES ('9', '“差不多先生”变形计', '3', '2', '1534755529');
INSERT INTO `c_user_score` VALUES ('9', '“差不多先生”变形计', '4', '10', '1534755558');
INSERT INTO `c_user_score` VALUES ('1', '组织部的孩子', '4', '10', '1534755564');
INSERT INTO `c_user_score` VALUES ('1', '把青春奉献在一线的“90后”', '4', '10', '1534755570');
INSERT INTO `c_user_score` VALUES ('1', '铁匠、木匠和泥匠', '4', '10', '1534755575');
INSERT INTO `c_user_score` VALUES ('1', '党员干部莫患“空调病”', '4', '10', '1534755580');
INSERT INTO `c_user_score` VALUES ('1', '做一棵开山岛上的“苦楝树”', '4', '10', '1534755586');
INSERT INTO `c_user_score` VALUES ('1', '做新时代有“识”之“士”', '4', '10', '1534755592');
INSERT INTO `c_user_score` VALUES ('1', '以身许国 何事不敢为', '4', '10', '1534755597');
INSERT INTO `c_user_score` VALUES ('1', '透过“熬”字看组工', '4', '10', '1534755602');
INSERT INTO `c_user_score` VALUES ('16', '“爱吾国”方能“兴国梦”', '4', '10', '1534755608');
INSERT INTO `c_user_score` VALUES ('16', '组工人的行动哲学', '4', '10', '1534755618');
INSERT INTO `c_user_score` VALUES ('16', '奋进搭“鹊桥”干群来“相会”', '4', '10', '1534755624');
INSERT INTO `c_user_score` VALUES ('16', '组工干部的通关秘籍', '4', '10', '1534755628');
INSERT INTO `c_user_score` VALUES ('16', '“麦穗”精神不可丢', '4', '10', '1534755633');
INSERT INTO `c_user_score` VALUES ('9', '召开“追问初心”读书分享会', '6', '5', '1534757286');
INSERT INTO `c_user_score` VALUES ('9', '国机联讯：国机集团纪检监察部和巡视办学习中央纪委二次全会和中央企业党风廉政建设和反腐败工作会议精神', '1', '1', '1534758782');
INSERT INTO `c_user_score` VALUES ('9', '国机联讯： 国机集团党委常委、纪委书记雷光华一行巡察中国电工泰国TPI项目', '1', '1', '1534758789');
INSERT INTO `c_user_score` VALUES ('19', '中国自控开展2018年度“七•一”主题党日活动', '1', '1', '1534821243');
INSERT INTO `c_user_score` VALUES ('19', '第一集 南昌起义 八七定向', '2', '2', '1534840475');
INSERT INTO `c_user_score` VALUES ('19', '中国自控举办学习贯彻党的十九大精神集中轮训班', '1', '1', '1534844389');
INSERT INTO `c_user_score` VALUES ('19', '凝聚共识 担当使命 推动发展——中汽工程党委举办“学习习近平新时代中国特色社会主义思想和党的十九大精神”干部培训班', '1', '1', '1534844414');
INSERT INTO `c_user_score` VALUES ('19', '中共中央关于追授郑德荣等7名同志“全国优秀共产党员”称号的决定', '1', '1', '1534844440');
INSERT INTO `c_user_score` VALUES ('19', '国机联讯：国机集团纪委召开集团2018年纪检监察工作中期推进会议暨“新风讲堂”第一期专题报告会', '1', '1', '1534845782');
INSERT INTO `c_user_score` VALUES ('16', '“技能培优”特色党建活动', '6', '5', '1534846900');
INSERT INTO `c_user_score` VALUES ('19', '天津通报5起不作为不担当典型问题', '1', '1', '1534919654');
INSERT INTO `c_user_score` VALUES ('19', '“技能培优”特色党建活动', '6', '5', '1534925887');
INSERT INTO `c_user_score` VALUES ('19', '中机国际组织学习贯彻习近平新时代中国特色社会主义思想和党的十九大精神专题培训', '1', '1', '1534990859');
INSERT INTO `c_user_score` VALUES ('19', '人民论坛：士不可以不弘毅  ——砥砺当代知识分子精气神③', '1', '1', '1534992193');
INSERT INTO `c_user_score` VALUES ('19', '上海探索离退休干部党建工作新路：让16万老党员离岗不离党退休不褪色', '1', '1', '1534993840');
INSERT INTO `c_user_score` VALUES ('19', '习近平对推进中央和国家机关党的政治建设作出重要指示', '1', '1', '1534994961');
INSERT INTO `c_user_score` VALUES ('19', '轴研科技党总支组织公司党员赴红旗渠参观学习', '1', '1', '1534996393');
INSERT INTO `c_user_score` VALUES ('29', '【改革开放记忆】问候语见证我家的酸甜苦辣', '3', '2', '1535594054');
INSERT INTO `c_user_score` VALUES ('29', '【改革开放记忆】问候语见证我家的酸甜苦辣', '4', '10', '1535594081');
INSERT INTO `c_user_score` VALUES ('29', '【改革开放记忆】问候语见证我家的酸甜苦辣', '3', '2', '1535595521');
INSERT INTO `c_user_score` VALUES ('29', '【改革开放记忆】问候语见证我家的酸甜苦辣', '4', '10', '1535595574');
INSERT INTO `c_user_score` VALUES ('29', '小家变 大家兴', '3', '2', '1535617941');
INSERT INTO `c_user_score` VALUES ('29', '两代人的40年', '3', '2', '1535617983');
INSERT INTO `c_user_score` VALUES ('29', '乡村标语“进化史”', '3', '2', '1535618028');
INSERT INTO `c_user_score` VALUES ('29', '三位基层扶贫女干部的故事', '4', '10', '1535619481');
INSERT INTO `c_user_score` VALUES ('29', '一群青年志愿者的乡村环保试验', '4', '10', '1535619542');
INSERT INTO `c_user_score` VALUES ('29', '孝心“接力棒”', '4', '10', '1535619570');
INSERT INTO `c_user_score` VALUES ('29', '一勤无难事', '4', '10', '1535619593');
INSERT INTO `c_user_score` VALUES ('29', '乡村标语“进化史”', '4', '10', '1535619660');
INSERT INTO `c_user_score` VALUES ('29', '两代人的40年', '4', '10', '1535619760');
INSERT INTO `c_user_score` VALUES ('29', '小家变 大家兴', '4', '10', '1535619851');
INSERT INTO `c_user_score` VALUES ('24', '中国自控开展2018年度“七•一”主题党日活动', '1', '1', '1535621771');
INSERT INTO `c_user_score` VALUES ('24', '中国自控举办学习贯彻党的十九大精神集中轮训班', '1', '1', '1535621777');
INSERT INTO `c_user_score` VALUES ('24', '中国一拖举行纪念中国共产党建党97周年“微党课”作品发布会', '1', '1', '1535621782');
INSERT INTO `c_user_score` VALUES ('24', '一心谋发展 倾心为富民——记甘肃陇南市宕昌县庞家乡松扎村党支部', '1', '1', '1535621788');
INSERT INTO `c_user_score` VALUES ('24', '国机联讯： 国机集团党委常委、纪委书记雷光华一行巡察中国电工泰国TPI项目', '1', '1', '1535621801');
INSERT INTO `c_user_score` VALUES ('24', '“技能培优”特色党建活动', '6', '5', '1535621828');
INSERT INTO `c_user_score` VALUES ('24', '召开“追问初心”读书分享会', '6', '5', '1535621841');
INSERT INTO `c_user_score` VALUES ('24', '农村土地经营权流转有关政策', '2', '2', '1535621929');
INSERT INTO `c_user_score` VALUES ('24', '职务犯罪问题研究（一）现今我国职务犯罪的概况', '2', '2', '1535622085');
INSERT INTO `c_user_score` VALUES ('24', '不忘初心、做合格党员', '2', '2', '1535693912');
INSERT INTO `c_user_score` VALUES ('9', 'test1', '3', '2', '1540605882');

-- ----------------------------
-- Table structure for c_weixin
-- ----------------------------
DROP TABLE IF EXISTS `c_weixin`;
CREATE TABLE `c_weixin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `appid` varchar(30) DEFAULT NULL COMMENT '微信的appid',
  `appsecret` varchar(255) DEFAULT NULL COMMENT '微信appsecret',
  `company_id` int(10) DEFAULT NULL,
  `branch_id` int(10) DEFAULT NULL COMMENT '支部管理员表id',
  `weixin_name` varchar(10) DEFAULT NULL COMMENT '公众号名称',
  `check_url` varchar(255) DEFAULT NULL,
  `check_token` varchar(255) DEFAULT NULL,
  `check_aeskey` varchar(255) DEFAULT NULL,
  `status` int(1) DEFAULT NULL COMMENT '验证结果 0 验证不通过 1代表验证通过',
  `rand` varchar(255) DEFAULT NULL COMMENT '微信生成随机数',
  `access_token` varchar(255) DEFAULT NULL COMMENT 'URL—token地址',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8 COMMENT='公众号表';

-- ----------------------------
-- Records of c_weixin
-- ----------------------------
INSERT INTO `c_weixin` VALUES ('31', ' wxdb8a9536d8f3728b', '791d8692600cc2b1b6145098e8082304', '5', null, null, null, null, null, null, 'd7e7d06d12e6a64cb669be7489f65651', null);
SET FOREIGN_KEY_CHECKS=1;
