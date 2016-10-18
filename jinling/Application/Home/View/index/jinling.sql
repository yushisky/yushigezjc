/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50523
Source Host           : localhost:3306
Source Database       : jinling

Target Server Type    : MYSQL
Target Server Version : 50523
File Encoding         : 65001

Date: 2016-05-04 16:26:45
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `jl_admin`
-- ----------------------------
DROP TABLE IF EXISTS `jl_admin`;
CREATE TABLE `jl_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(255) NOT NULL COMMENT '管理员账号',
  `admin_pwd` varchar(255) NOT NULL COMMENT '管理员密码',
  `admin_addtime` varchar(255) DEFAULT NULL COMMENT '管理员注册时间',
  `admin_regip` varchar(255) DEFAULT NULL COMMENT '注册ip',
  `admin_lastlogin` varchar(255) DEFAULT NULL COMMENT '上一次登录时间',
  `admin_status` tinyint(4) NOT NULL DEFAULT '1' COMMENT '账号状态,1正常，0禁用',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_admin
-- ----------------------------
INSERT INTO `jl_admin` VALUES ('1', 'adm', 'ef73781effc5774100f87fe2f437a435', '1447032595', null, null, '1');
INSERT INTO `jl_admin` VALUES ('4', 'admi', 'd41d8cd98f00b204e9800998ecf8427e', '1447034253', '127.0.0.1', null, '0');
INSERT INTO `jl_admin` VALUES ('9', 'admin', 'ef73781effc5774100f87fe2f437a435', '1447039450', '127.0.0.1', null, '1');

-- ----------------------------
-- Table structure for `jl_ads`
-- ----------------------------
DROP TABLE IF EXISTS `jl_ads`;
CREATE TABLE `jl_ads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ads_pic` varchar(255) DEFAULT NULL COMMENT '广告图',
  `ads_link` varchar(255) DEFAULT NULL COMMENT '广告链接地址',
  `ads_order` int(11) DEFAULT NULL COMMENT '广告顺序',
  `ads_title` varchar(255) NOT NULL COMMENT '广告名称',
  `ads_isshow` tinyint(4) DEFAULT '1' COMMENT '广告是否展示,1展示，0不展示',
  `ads_position` varchar(255) DEFAULT NULL COMMENT '广告位置',
  `ads_author` varchar(255) DEFAULT NULL COMMENT '添加人',
  `ads_addtime` varchar(11) DEFAULT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_ads
-- ----------------------------
INSERT INTO `jl_ads` VALUES ('5', 'thumb_564c0f305235e.jpg', 'https://www.wooyun.org/?pldnrgdnrgtmyuoc', '0', '广告3', '1', null, 'admin', '1447728973');
INSERT INTO `jl_ads` VALUES ('6', 'thumb_564c0f3a21092.jpg', 'http://www.hao123.com/', '0', '广告4', '1', null, 'admin', '1447729043');
INSERT INTO `jl_ads` VALUES ('7', 'Uploads/source/2016-04-05/thumb_5703746dca948.jpg', 'baidu', '9', 'aa', '1', null, null, '1459844206');
INSERT INTO `jl_ads` VALUES ('8', 'Uploads/source/2016-04-05/thumb_5703752256efe.jpg', '6666', '333', '123', '1', null, null, '1459844386');
INSERT INTO `jl_ads` VALUES ('9', 'Uploads/source/2016-04-05/thumb_570385e64ae54.jpg', '123', '5', 'dfa', '1', null, null, '1459848678');
INSERT INTO `jl_ads` VALUES ('10', 'Uploads/source/2016-04-05/thumb_5703862e5ef7d.jpg', '', '0', '45', '1', null, null, '1459848750');
INSERT INTO `jl_ads` VALUES ('11', 'Uploads/source/2016-04-05/thumb_5703893833fbb.jpg', '', '0', '1', '1', null, null, '1459849528');
INSERT INTO `jl_ads` VALUES ('12', 'Uploads/source/2016-04-06/thumb_5704a9a332c22.jpg', '', '0', 'fasd', '1', null, null, '1459923363');
INSERT INTO `jl_ads` VALUES ('13', 'Uploads/source/2016-04-06/thumb_5704ab129ede0.jpg', '', '0', 'dsa', '1', null, null, '1459923730');
INSERT INTO `jl_ads` VALUES ('14', 'Uploads/source/2016-04-06/thumb_5704ab67dc35d.jpg', '', '0', 'fdas', '1', null, null, '1459923816');
INSERT INTO `jl_ads` VALUES ('15', 'Uploads/source/2016-04-06/thumb_5704ae7e1174e.jpg', '', '0', '', '1', null, null, '1459924606');
INSERT INTO `jl_ads` VALUES ('16', 'Uploads/source/2016-04-06/thumb_5704ae98c48a7.jpg', '', '0', '', '1', null, null, '1459924633');

-- ----------------------------
-- Table structure for `jl_artcat`
-- ----------------------------
DROP TABLE IF EXISTS `jl_artcat`;
CREATE TABLE `jl_artcat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artcat_name` varchar(255) NOT NULL COMMENT '文章分类名称',
  `artcat_description` varchar(255) DEFAULT NULL COMMENT '文章分类描述',
  `artcat_enname` varchar(255) DEFAULT NULL COMMENT '分类英文名',
  `artcat_addtime` varchar(11) DEFAULT NULL COMMENT '添加时间',
  `artcat_author` varchar(255) DEFAULT NULL COMMENT '添加者',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_artcat
-- ----------------------------
INSERT INTO `jl_artcat` VALUES ('1', '公司简介', '公司的简介', 'About us', '1447825470', 'admin');
INSERT INTO `jl_artcat` VALUES ('2', '联系我们', '联系我们', 'Contact us', '1447825415', 'admin');
INSERT INTO `jl_artcat` VALUES ('3', '行业新闻', '公司所在行业的有关新闻', 'Knowledge', '1447825430', 'admin');
INSERT INTO `jl_artcat` VALUES ('4', '最新公告', '公司的公告信息', 'News', '1447825470', 'admin');
INSERT INTO `jl_artcat` VALUES ('5', '公司资讯', '简短的快讯', 'notes', '1447825455', 'admin');

-- ----------------------------
-- Table structure for `jl_article`
-- ----------------------------
DROP TABLE IF EXISTS `jl_article`;
CREATE TABLE `jl_article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `article_aid` int(11) NOT NULL COMMENT '文章分类编号',
  `article_title` varchar(255) NOT NULL COMMENT '文章标题',
  `article_content` text COMMENT '文章内容',
  `article_author` varchar(255) DEFAULT NULL COMMENT '文章发布者',
  `article_addtime` varchar(255) DEFAULT NULL COMMENT '文章发布时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_article
-- ----------------------------
INSERT INTO `jl_article` VALUES ('1', '1', '公司简介', '我公司前身是金能保温材料经营部，因扩大经营规模，于2009年3月变更为金陵贸易有限公司。1994年开始从事保温、保冷、吸音、耐火、化工、建材等产品的经营贸易，对控制产品质量方面具备非常好的经验，是中国东南地区最大的保温材料经营贸易公司之一。公司经营宗旨是：诚信经营，质量第一。', 'admin', '1449543777');
INSERT INTO `jl_article` VALUES ('2', '2', '联系我们', '地址：广东省广州市广州大道北\r\n联系人：乐可\r\n移动电话：13619829982\r\n固定电话：020-1234567\r\n传真：020-1234567', 'admin', '1449543777');
INSERT INTO `jl_article` VALUES ('32', '3', '999', '9999999999999999999999999999999999', 'admin', '1449543662');
INSERT INTO `jl_article` VALUES ('33', '3', '000', '000000000000000000000000000000', 'admin', '1449543668');
INSERT INTO `jl_article` VALUES ('34', '4', 'aaa', 'aaaaaaaaaaaaaaaaaaa', 'admin', '1449543677');
INSERT INTO `jl_article` VALUES ('35', '4', 'bb', 'bbbbbbbbbbbbbbbbbbbbbb', 'admin', '1449543684');
INSERT INTO `jl_article` VALUES ('36', '4', 'cc', 'ccccccccccccccccccccccc', 'admin', '1449543692');
INSERT INTO `jl_article` VALUES ('37', '4', 'ddd', 'dddddddddddddddddddd', 'admin', '1449543701');
INSERT INTO `jl_article` VALUES ('38', '4', 'eee', 'eeeeeeeeeeeeeeeeeeeeeeeeeeeeeeee', 'admin', '1449543710');
INSERT INTO `jl_article` VALUES ('39', '4', 'ff', 'fffffffffffffffffffffff', 'admin', '1449543718');
INSERT INTO `jl_article` VALUES ('40', '4', 'ggg', 'gggggggggggggggggggggggggggggg', 'admin', '1449543725');
INSERT INTO `jl_article` VALUES ('41', '4', 'hh', 'hhhhhhhhhhhhhhhhhhhhhhhh', 'admin', '1449543732');

-- ----------------------------
-- Table structure for `jl_config`
-- ----------------------------
DROP TABLE IF EXISTS `jl_config`;
CREATE TABLE `jl_config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `config_name` varchar(255) NOT NULL COMMENT '配置名',
  `config_value` varchar(255) DEFAULT NULL COMMENT '配置值',
  `config_description` varchar(255) DEFAULT NULL COMMENT '配置项描述',
  `config_order` int(11) DEFAULT NULL COMMENT '排序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_config
-- ----------------------------
INSERT INTO `jl_config` VALUES ('1', '地址', '广东省广州市广州大道北', null, '1');
INSERT INTO `jl_config` VALUES ('2', '联系人', '乐可', null, '2');
INSERT INTO `jl_config` VALUES ('3', '联系电话', '020-1234567', '', '5');
INSERT INTO `jl_config` VALUES ('4', '版权信息', 'Copyright @ 2009 金陵贸易有限公司 版权所有', '', '3');
INSERT INTO `jl_config` VALUES ('5', '备案号', '粤ICP备08108790号', '备案号', '4');
INSERT INTO `jl_config` VALUES ('6', '传真', '020-1234567', '这是传真的号码', '6');
INSERT INTO `jl_config` VALUES ('7', '邮箱', 'test@abc.com', '联系邮箱甲乙丙丁戊己庚辛壬癸子丑寅卯辰巳午未申酉戌亥', '5');
INSERT INTO `jl_config` VALUES ('8', 'logo', 'images/logo.gif', '标志logo', '0');
INSERT INTO `jl_config` VALUES ('9', 'qq', '123', 'qq号', '6');

-- ----------------------------
-- Table structure for `jl_flink`
-- ----------------------------
DROP TABLE IF EXISTS `jl_flink`;
CREATE TABLE `jl_flink` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `flink_name` varchar(255) NOT NULL COMMENT '友情链接名称',
  `flink_url` varchar(255) DEFAULT NULL COMMENT '友情链接地址',
  `flink_order` int(11) DEFAULT NULL COMMENT '友情链接排序',
  `flink_isshow` tinyint(4) DEFAULT '1' COMMENT '友情链接是否显示，1显示，0不显示',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_flink
-- ----------------------------
INSERT INTO `jl_flink` VALUES ('1', '百度', 'http://www.baidu.com/', '1', '1');
INSERT INTO `jl_flink` VALUES ('2', 'google', 'http://www.google.com.hk/', '3', '1');
INSERT INTO `jl_flink` VALUES ('3', 'hao123', 'http://www.hao123.com/', '1', '1');
INSERT INTO `jl_flink` VALUES ('6', '乌云', 'http://www.wooyun.org/', '4', '1');
INSERT INTO `jl_flink` VALUES ('7', 'git', 'http://blog.jobbole.com/53573/', '34', '1');
INSERT INTO `jl_flink` VALUES ('10', '携程旅行网', '', '0', '1');
INSERT INTO `jl_flink` VALUES ('11', '太平洋电脑网', '', '0', '1');
INSERT INTO `jl_flink` VALUES ('12', '中国移动', '', '0', '1');
INSERT INTO `jl_flink` VALUES ('13', '中国政府网', '', '0', '1');
INSERT INTO `jl_flink` VALUES ('14', '凤 凰 网', '', '0', '1');

-- ----------------------------
-- Table structure for `jl_message`
-- ----------------------------
DROP TABLE IF EXISTS `jl_message`;
CREATE TABLE `jl_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message_author` varchar(255) NOT NULL COMMENT '作者',
  `message_content` text NOT NULL COMMENT '留言内容',
  `message_addtime` varchar(255) DEFAULT NULL COMMENT '留言时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_message
-- ----------------------------
INSERT INTO `jl_message` VALUES ('4', 'vava', 'dasffffffffff', '1447042750');
INSERT INTO `jl_message` VALUES ('5', 'one', 'oneoneoneoneoneoneoneone', '1447049664');
INSERT INTO `jl_message` VALUES ('6', 'two', 'twotwotwotwotwotwotwotwotwotwotwotwotwo', '1447049676');
INSERT INTO `jl_message` VALUES ('7', 'three', 'threethreethreethreethreethreethreethreethreethreethree', '1447049683');
INSERT INTO `jl_message` VALUES ('8', 'four', 'fourfourfourfourfourfourfourfourfourfour', '1447049690');
INSERT INTO `jl_message` VALUES ('9', 'five', 'fivefivefivefivefivefivefivefivefive', '1447049698');
INSERT INTO `jl_message` VALUES ('10', 'six', 'sixsixsixsixsixsixsixsixsixsixsixsixsix', '1447049704');
INSERT INTO `jl_message` VALUES ('11', 'seven', 'sevensevensevensevensevensevensevensevensevenseven', '1447049713');
INSERT INTO `jl_message` VALUES ('12', 'eight', 'eighteighteighteighteighteighteighteighteighteighteighteighteight', '1447049719');
INSERT INTO `jl_message` VALUES ('13', 'nine', 'ninenineninenineninenineninenineninenineninenineninenine', '1447049726');
INSERT INTO `jl_message` VALUES ('14', 'dasf', 'dasf', '1447753996');
INSERT INTO `jl_message` VALUES ('15', 'dasvasfdaf', 'bfdsfghfdhgbsdgbs', null);
INSERT INTO `jl_message` VALUES ('16', 'dasvasfdaf', 'bfdsfghfdhgbsdgbs', null);
INSERT INTO `jl_message` VALUES ('17', 'fdsasa', 'fadsfdas', null);
INSERT INTO `jl_message` VALUES ('18', 'fdsasa', 'fadsfdas', '1459492587');
INSERT INTO `jl_message` VALUES ('19', 'fdsasa', 'fadsfdas', '1459493917');
INSERT INTO `jl_message` VALUES ('20', 'aaaaaaaaaa', 'dddddddddddddddddddddddddddd', '1459493963');
INSERT INTO `jl_message` VALUES ('21', 'fasdfda', 'fdasfasfd', '1459494100');
INSERT INTO `jl_message` VALUES ('22', 'fadsf', 'asfdfas', '1459494192');
INSERT INTO `jl_message` VALUES ('23', 'FDAs', 'fads', '1459494226');
INSERT INTO `jl_message` VALUES ('24', 'fasd', 'fasda', '1459494315');
INSERT INTO `jl_message` VALUES ('25', 'fasd', 'fasda', '1459494328');
INSERT INTO `jl_message` VALUES ('26', 'fasdfda', 'fadsfa', '1459494337');
INSERT INTO `jl_message` VALUES ('27', 'afds', 'fdas', '1459494376');
INSERT INTO `jl_message` VALUES ('28', 'dasf', 'afsd', '1459494638');

-- ----------------------------
-- Table structure for `jl_nav`
-- ----------------------------
DROP TABLE IF EXISTS `jl_nav`;
CREATE TABLE `jl_nav` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nav_pid` int(11) DEFAULT NULL COMMENT '父导航编号',
  `nav_name` varchar(255) NOT NULL COMMENT '导航名称',
  `nav_link` varchar(255) DEFAULT NULL COMMENT '导航链接',
  `nav_order` int(11) DEFAULT NULL COMMENT '导航排列的顺序',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_nav
-- ----------------------------

-- ----------------------------
-- Table structure for `jl_procat`
-- ----------------------------
DROP TABLE IF EXISTS `jl_procat`;
CREATE TABLE `jl_procat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `procat_name` varchar(255) NOT NULL COMMENT '产品分类名称',
  `procat_description` varchar(255) DEFAULT NULL COMMENT '产品分类简介描述',
  `procat_addtime` varchar(11) DEFAULT NULL COMMENT '添加时间',
  `procat_author` varchar(255) DEFAULT NULL COMMENT '添加者',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_procat
-- ----------------------------
INSERT INTO `jl_procat` VALUES ('1', '网格布', '甲乙丙丁戊己庚辛壬癸子丑寅卯辰巳午未申酉戌亥', '1447638646', 'admin');
INSERT INTO `jl_procat` VALUES ('2', '橡塑板', null, '1447825501', 'admin11');
INSERT INTO `jl_procat` VALUES ('3', '橡塑管', null, '1447825470', 'admin22');

-- ----------------------------
-- Table structure for `jl_product`
-- ----------------------------
DROP TABLE IF EXISTS `jl_product`;
CREATE TABLE `jl_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_cid` int(11) NOT NULL COMMENT '产品分类编号',
  `product_name` varchar(255) NOT NULL COMMENT '产品名称',
  `product_pic` varchar(255) DEFAULT NULL COMMENT '产品图片',
  `product_description` varchar(255) DEFAULT NULL COMMENT '产品描述',
  `product_author` varchar(255) DEFAULT '' COMMENT '产品添加人',
  `product_addtime` varchar(255) DEFAULT NULL COMMENT '产品添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of jl_product
-- ----------------------------
INSERT INTO `jl_product` VALUES ('4', '1', 'test', 'thumb_564c0f0b9cb23.jpg', 'testtesttesttest', 'admin', '1447638646');
INSERT INTO `jl_product` VALUES ('5', '1', '布布布', 'thumb_564c0fdb3ac1c.JPG', '', 'admin', '1447825371');
INSERT INTO `jl_product` VALUES ('6', '1', '布22', 'thumb_564c0fe996b2e.JPG', '', 'admin', '1447825386');
INSERT INTO `jl_product` VALUES ('7', '1', '布33', 'thumb_564c0ff7065ff.JPG', '', 'admin', '1447825399');
INSERT INTO `jl_product` VALUES ('8', '2', '板11', 'thumb_564c1006b3fa2.JPG', '', 'admin', '1447825415');
INSERT INTO `jl_product` VALUES ('9', '2', '板2', 'thumb_564c1016611c2.JPG', '', 'admin', '1447825430');
INSERT INTO `jl_product` VALUES ('10', '2', '板33', 'thumb_564c10226e6cc.JPG', '', 'admin', '1447825442');
INSERT INTO `jl_product` VALUES ('11', '3', '管1', 'thumb_564c102f2c021.JPG', '', 'admin', '1447825455');
INSERT INTO `jl_product` VALUES ('12', '3', '管2', 'thumb_564c103d8ebba.JPG', '', 'admin', '1447825470');
INSERT INTO `jl_product` VALUES ('13', '3', '管3', 'thumb_564c105d3c766.JPG', '', 'admin', '1447825501');
