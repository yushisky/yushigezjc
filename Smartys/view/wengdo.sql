-- MySQL dump 10.13  Distrib 5.1.28-rc, for Win32 (ia32)
--
-- Host: localhost    Database: wengdo
-- ------------------------------------------------------
-- Server version	5.1.28-rc-community-log

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `wd_admin`
--

DROP TABLE IF EXISTS `wd_admin`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `wd_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL COMMENT '账号',
  `admin_password` varchar(32) NOT NULL COMMENT '密码',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `wd_admin`
--

LOCK TABLES `wd_admin` WRITE;
/*!40000 ALTER TABLE `wd_admin` DISABLE KEYS */;
/*!40000 ALTER TABLE `wd_admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wd_advertise`
--

DROP TABLE IF EXISTS `wd_advertise`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `wd_advertise` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_name` varchar(255) DEFAULT NULL COMMENT '广告名称',
  `ad_img` varchar(255) DEFAULT NULL COMMENT '广告图',
  `ad_position` varchar(50) DEFAULT NULL COMMENT '广告位置',
  `ad_url` varchar(255) DEFAULT NULL COMMENT '链接',
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `wd_advertise`
--

LOCK TABLES `wd_advertise` WRITE;
/*!40000 ALTER TABLE `wd_advertise` DISABLE KEYS */;
/*!40000 ALTER TABLE `wd_advertise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wd_article`
--

DROP TABLE IF EXISTS `wd_article`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `wd_article` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL COMMENT '文章标题',
  `article_content` text COMMENT '文章内容',
  `article_uid` int(11) DEFAULT NULL COMMENT '作者',
  `article_addtime` int(11) DEFAULT NULL COMMENT '添加时间',
  `article_category_id` int(11) DEFAULT NULL COMMENT '文章分类',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `wd_article`
--

LOCK TABLES `wd_article` WRITE;
/*!40000 ALTER TABLE `wd_article` DISABLE KEYS */;
/*!40000 ALTER TABLE `wd_article` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wd_category`
--

DROP TABLE IF EXISTS `wd_category`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `wd_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) DEFAULT NULL COMMENT '分类名称',
  `category_describe` varchar(255) DEFAULT NULL COMMENT '分类介绍',
  `category_type` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1表示文章分类；2表示产品分类',
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `wd_category`
--

LOCK TABLES `wd_category` WRITE;
/*!40000 ALTER TABLE `wd_category` DISABLE KEYS */;
/*!40000 ALTER TABLE `wd_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wd_config`
--

DROP TABLE IF EXISTS `wd_config`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `wd_config` (
  `config_id` int(11) NOT NULL,
  `config_name` varchar(255) DEFAULT NULL COMMENT '配置名称',
  `config_code` varchar(20) DEFAULT NULL COMMENT '配置代码',
  `config_value` varchar(255) DEFAULT NULL COMMENT '配置值',
  PRIMARY KEY (`config_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `wd_config`
--

LOCK TABLES `wd_config` WRITE;
/*!40000 ALTER TABLE `wd_config` DISABLE KEYS */;
/*!40000 ALTER TABLE `wd_config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wd_link`
--

DROP TABLE IF EXISTS `wd_link`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `wd_link` (
  `link_id` int(11) NOT NULL AUTO_INCREMENT,
  `link_name` varchar(50) DEFAULT NULL COMMENT '名称',
  `link_url` varchar(255) DEFAULT NULL COMMENT '地址',
  PRIMARY KEY (`link_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `wd_link`
--

LOCK TABLES `wd_link` WRITE;
/*!40000 ALTER TABLE `wd_link` DISABLE KEYS */;
INSERT INTO `wd_link` VALUES (2,'163','http://www.163.com'),(7,'新浪_22222','http://www.sina.com/'),(6,'CSDN_33333','http://www.csdn.net/'),(8,'文豆','http://www.wengdo.com');
/*!40000 ALTER TABLE `wd_link` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wd_message`
--

DROP TABLE IF EXISTS `wd_message`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `wd_message` (
  `message_id` int(11) NOT NULL,
  `message_uid` int(11) NOT NULL COMMENT '用户',
  `message_email` varchar(255) DEFAULT NULL COMMENT '邮箱',
  `message_title` varchar(255) DEFAULT NULL COMMENT '主题',
  `message_content` text COMMENT '内容',
  `message_addtime` int(11) DEFAULT NULL COMMENT '留言时间',
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `wd_message`
--

LOCK TABLES `wd_message` WRITE;
/*!40000 ALTER TABLE `wd_message` DISABLE KEYS */;
/*!40000 ALTER TABLE `wd_message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wd_nav`
--

DROP TABLE IF EXISTS `wd_nav`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `wd_nav` (
  `nav_id` int(11) NOT NULL AUTO_INCREMENT,
  `nav_name` varchar(10) NOT NULL COMMENT '导航名称',
  `nav_url` varchar(255) NOT NULL COMMENT '链接',
  `nav_parent` int(11) DEFAULT '0' COMMENT '父级导航',
  `nav_sort` int(11) DEFAULT '0' COMMENT '排序',
  PRIMARY KEY (`nav_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `wd_nav`
--

LOCK TABLES `wd_nav` WRITE;
/*!40000 ALTER TABLE `wd_nav` DISABLE KEYS */;
/*!40000 ALTER TABLE `wd_nav` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wd_page`
--

DROP TABLE IF EXISTS `wd_page`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `wd_page` (
  `page_id` int(11) NOT NULL,
  `page_title` varchar(255) DEFAULT NULL COMMENT '中文标题',
  `page_en_title` varchar(255) DEFAULT NULL COMMENT '英文标题',
  `page_content` text COMMENT '内容',
  `page_image` varchar(255) DEFAULT NULL COMMENT '图片',
  `page_position` varchar(50) DEFAULT NULL COMMENT '单页显示位置',
  PRIMARY KEY (`page_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `wd_page`
--

LOCK TABLES `wd_page` WRITE;
/*!40000 ALTER TABLE `wd_page` DISABLE KEYS */;
/*!40000 ALTER TABLE `wd_page` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wd_product`
--

DROP TABLE IF EXISTS `wd_product`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `wd_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL COMMENT '产品名称',
  `product_describe` text COMMENT '产品介绍',
  `product_size` varchar(255) DEFAULT NULL COMMENT '产品大小',
  `product_fitting` varchar(255) DEFAULT NULL COMMENT '产品配件',
  `product_image_1` varchar(255) DEFAULT NULL COMMENT '图一',
  `product_image_2` varchar(255) DEFAULT NULL COMMENT '图二',
  `product_image_3` varchar(255) DEFAULT NULL COMMENT '图三',
  `product_image_4` varchar(255) DEFAULT NULL COMMENT '图四',
  `product_feature` text COMMENT '产品特征',
  `product_spec` text COMMENT '产品规格',
  `product_caegory_id` int(11) NOT NULL COMMENT '分类',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `wd_product`
--

LOCK TABLES `wd_product` WRITE;
/*!40000 ALTER TABLE `wd_product` DISABLE KEYS */;
/*!40000 ALTER TABLE `wd_product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wd_user`
--

DROP TABLE IF EXISTS `wd_user`;
SET @saved_cs_client     = @@character_set_client;
SET character_set_client = utf8;
CREATE TABLE `wd_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL COMMENT '用户名',
  `user_password` varchar(32) NOT NULL COMMENT '密码',
  `user_email` varchar(255) DEFAULT NULL,
  `user_sex` tinyint(4) DEFAULT '0' COMMENT '0表示男；1表示女',
  `user_introduce` text,
  `user_job` varchar(255) DEFAULT NULL,
  `user_company` varchar(255) DEFAULT NULL,
  `user_address` varchar(255) DEFAULT NULL,
  `user_location` varchar(255) DEFAULT NULL,
  `user_sign` text,
  `user_head` varchar(255) DEFAULT NULL COMMENT '头像',
  `user_addtime` int(11) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
SET character_set_client = @saved_cs_client;

--
-- Dumping data for table `wd_user`
--

LOCK TABLES `wd_user` WRITE;
/*!40000 ALTER TABLE `wd_user` DISABLE KEYS */;
/*!40000 ALTER TABLE `wd_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-03-08  9:14:50
