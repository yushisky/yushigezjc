-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016-06-15 23:10:30
-- 服务器版本: 5.1.69-community
-- PHP 版本: 5.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `wengdo`
--

-- --------------------------------------------------------

--
-- 表的结构 `wd_article`
--

CREATE TABLE IF NOT EXISTS `wd_article` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `cat_id` smallint(5) unsigned NOT NULL COMMENT '分类编号',
  `title` varchar(200) NOT NULL COMMENT '文章标题',
  `author` char(30) NOT NULL DEFAULT '佚名' COMMENT '作者（默认：佚名）',
  `content` text NOT NULL COMMENT '文章内容',
  `click` mediumint(8) unsigned NOT NULL COMMENT '点击数',
  `addtime` int(10) unsigned NOT NULL COMMENT '发布时间',
  `order` mediumint(8) unsigned NOT NULL COMMENT '排序',
  `is_show` tinyint(4) NOT NULL COMMENT '是否显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章表' AUTO_INCREMENT=63 ;

--
-- 转存表中的数据 `wd_article`
--

INSERT INTO `wd_article` (`id`, `cat_id`, `title`, `author`, `content`, `click`, `addtime`, `order`, `is_show`) VALUES
(2, 1, '啊啊啊啊啊啊啊啊啊啊啊啊啊', '佚名', '啊啊啊啊啊啊啊啊啊啊啊啊啊啊', 1, 1428566894, 2, 1),
(3, 1, '啊啊啊啊啊啊啊啊啊啊啊啊啊', '佚名', '啊啊啊啊啊啊啊啊啊啊啊啊啊啊', 1, 1428566894, 2, 1),
(4, 1, '啊啊啊啊啊啊啊啊啊啊啊啊啊', '佚名', '啊啊啊啊啊啊啊啊啊啊啊啊啊啊', 1, 1428566894, 2, 1),
(5, 1, '啊啊啊啊啊啊啊啊啊啊啊啊啊', '佚名', '啊啊啊啊啊啊啊啊啊啊啊啊啊啊', 1, 1428566894, 2, 1),
(6, 1, '啊啊啊啊啊啊啊啊啊啊啊啊啊', '佚名', '啊啊啊啊啊啊啊啊啊啊啊啊啊啊', 1, 1428566894, 2, 1),
(7, 2, '2222222222222不不不不不不不不不不不不不不不不', '佚名', '不不不不不不不不不不不不不', 2, 1428566926, 2, 1),
(8, 2, '3333333333不不不不不不不不不不不不不不不不', '佚名', '不不不不不不不不不不不不不', 2, 1428566932, 2, 1),
(9, 2, '4444444444不不不不不不不不不不不不不不不不', '佚名', '不不不不不不不不不不不不不', 2, 1428566932, 2, 1),
(10, 2, '555555555不不不不不不不不不不不不不不不不', '佚名', '不不不不不不不不不不不不不', 2, 1428566932, 2, 1),
(11, 2, '6666666666666不不不不不不不不不不不不不不不不', '佚名', '不不不不不不不不不不不不不', 2, 1428566932, 2, 1),
(62, 1, 'ttttttttt', '3', '<p>3</p>', 3, 1428893400, 0, 1),
(14, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6671, 1428889316, 1, 1),
(15, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(16, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(17, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(18, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(19, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(20, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(21, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(22, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(23, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(24, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(25, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(26, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(27, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(28, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(29, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(30, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(31, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(32, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 2),
(33, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(34, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(35, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(36, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(37, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(38, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(39, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(40, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(41, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(43, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(44, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6669, 1428889333, 1, 1),
(45, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(46, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(47, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(48, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(49, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(50, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(51, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(52, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(53, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(54, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(55, 2, 'aiofnjeragfu', '佚名', 'vaedg9eri5giaoueorihso', 6667, 1428889333, 1, 1),
(59, 1, 'aaaaaaa', 'aaaaaaaaaa', '<p>aaaaaaaaaaaaaaaa</p>', 1111, 1429238400, 0, 1),
(60, 2, 'gggggggggggg', 'aa', '<p>gggggggg</p>', 22, 1429324860, 0, 1),
(61, 1, 'tttttttttt', 'ttttt', '<p>ttttttttttttt</p>', 1, 1429584420, 0, 1);

-- --------------------------------------------------------

--
-- 表的结构 `wd_art_cat`
--

CREATE TABLE IF NOT EXISTS `wd_art_cat` (
  `id` smallint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `name` char(10) NOT NULL COMMENT '分类名称',
  `order` smallint(3) unsigned NOT NULL COMMENT '排序',
  `is_show` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否显示(1是显示，2隐藏)',
  `addtime` int(10) unsigned NOT NULL COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='文章分类' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `wd_art_cat`
--

INSERT INTO `wd_art_cat` (`id`, `name`, `order`, `is_show`, `addtime`) VALUES
(1, '通知', 1, 1, 1428566848),
(2, '公司新闻', 2, 1, 1428566848);

-- --------------------------------------------------------

--
-- 表的结构 `wd_banner`
--

CREATE TABLE IF NOT EXISTS `wd_banner` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `title` char(50) NOT NULL COMMENT '标题',
  `url` varchar(255) NOT NULL COMMENT '点击跳转地址',
  `src` varchar(255) NOT NULL COMMENT '图片地址',
  `desc` text NOT NULL COMMENT '简介',
  `order` tinyint(3) unsigned NOT NULL COMMENT '排序',
  `addtime` int(10) unsigned NOT NULL COMMENT '添加时间',
  `is_show` tinyint(4) NOT NULL COMMENT '是否显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='广告图管理表' AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `wd_banner`
--

INSERT INTO `wd_banner` (`id`, `title`, `url`, `src`, `desc`, `order`, `addtime`, `is_show`) VALUES
(1, '图1', 'images/flashmo_940x400_11.jpg', 'index.php', 'aaaaaaa', 1, 1429844842, 1),
(2, '图2', 'images/flashmo_940x400_12.jpg', 'index.php', 'zfasdf', 2, 1429844842, 1),
(3, 'img3', 'images/flashmo_940x400_12.jpg', 'index.php', 'adsf', 3, 1429844842, 1),
(4, 'img4', 'images/flashmo_940x400_12.jpg', 'index.php', 'adsfa', 4, 1429844842, 1),
(5, 'img5', 'images/flashmo_940x400_12.jpg', 'index.php', '啊啊啊啊', 5, 1429844842, 1);

-- --------------------------------------------------------

--
-- 表的结构 `wd_config`
--

CREATE TABLE IF NOT EXISTS `wd_config` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `title` varchar(255) NOT NULL COMMENT '中文提示文字',
  `field` varchar(255) NOT NULL COMMENT '属性（字段）',
  `value` varchar(255) NOT NULL COMMENT '属性（字段）对应的值',
  `is_show` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否显示（1是显示，2是不显示，默认是1）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='杂项配置（公式名称，网站logo、版权..）' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `wd_config`
--

INSERT INTO `wd_config` (`id`, `title`, `field`, `value`, `is_show`) VALUES
(1, '网站logo', 'logo', '/uploads/2015041918542571671.png', 1),
(2, '脚部信息', 'footer', '地址：广东省广州市海珠区新港西路231号3栋4层  联系人：乐 乐  移动电话：13588888888 固定电话：020-1234567 传 真：020-1234567', 1),
(3, '网站标题', 'webtitle', '文豆电子网', 1);

-- --------------------------------------------------------

--
-- 表的结构 `wd_doc`
--

CREATE TABLE IF NOT EXISTS `wd_doc` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `title` varchar(20) NOT NULL COMMENT '文档标题',
  `en_title` varchar(20) DEFAULT NULL COMMENT '英文标题',
  `content` text NOT NULL COMMENT '文档内容',
  `position` tinyint(3) unsigned DEFAULT NULL COMMENT '文档显示位置（1是左边，2是中间，3是右边）',
  `src` varchar(50) DEFAULT NULL COMMENT '图片路径',
  `addtime` int(10) unsigned NOT NULL COMMENT '添加时间',
  `order` smallint(5) unsigned NOT NULL COMMENT '排序',
  `is_show` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示（1是显示，2是不显示，默认是1）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='单页文本' AUTO_INCREMENT=15 ;

--
-- 转存表中的数据 `wd_doc`
--

INSERT INTO `wd_doc` (`id`, `title`, `en_title`, `content`, `position`, `src`, `addtime`, `order`, `is_show`) VALUES
(1, '人才招聘', 'job', '去啊fear', 1, 'cloth.png', 1428648246, 1, 1),
(2, '投资程序', 'Proces', '法尔隔热层', 1, 'floder.png', 1428648246, 1, 1),
(3, '投资咨询', 'Q&A', '反而给我二', 1, 'email.png', 1428648327, 1, 1),
(4, '公司历史', 'history', '发的方式认购', 3, 'hotel.png', 1428648327, 1, 1),
(5, '企业文化', 'culture', '发色的发热', 3, 'hotel.png', 1428648404, 1, 1),
(6, '合作伙伴', 'paetner', '阿萨德反而', 3, 'hotel.png', 1428648404, 1, 1),
(7, '百度地图', NULL, '<div >\n					<div style="width:660px;height:397px;border:#ccc solid 1px;font-size:12px" id="map"></div>\n				</div>\n				<div class="address">\n					<ul>\n						<li class="address_li1">详细地址</li>\n						<li><p>地址</p>- 广州市海珠区新港西路231号3栋4层</li>\n						<li><p>联系</p>- 4008897654</li>\n						<li><p>E_MAIL</p>- test@wengdo.com</li>\n						<li><p>地铁</p>- 暂无</li>\n						<li><p>公交</p>- 暂无</li>\n						<li><p>自驾</p>- 暂无</li>\n					</ul>\n				</div><script src="./js/contact_us.js"></script>\n  <script type="text/javascript">\n\n	function friend_link(aa){\n		var aa_value = aa.value;\n		location.href=aa_value;\n	}\n\n    //创建和初始化地图函数：\n    function initMap(){\n      createMap();//创建地图\n      setMapEvent();//设置地图事件\n      addMapControl();//向地图添加控件\n      addMapOverlay();//向地图添加覆盖物\n    }\n    function createMap(){ \n      map = new BMap.Map("map"); \n      map.centerAndZoom(new BMap.Point(113.31729,23.101491),19);\n    }\n    function setMapEvent(){\n      map.enableScrollWheelZoom();\n      map.enableKeyboard();\n      map.enableDragging();\n      map.enableDoubleClickZoom()\n    }\n    function addClickHandler(target,window){\n      target.addEventListener("click",function(){\n        target.openInfoWindow(window);\n      });\n    }\n    function addMapOverlay(){\n      var markers = [\n        {content:"文豆网络有限公司",title:"培训地址",imageOffset: {width:0,height:3},position:{lat:23.101857,lng:113.31729}}\n      ];\n      for(var index = 0; index < markers.length; index++ ){\n        var point = new BMap.Point(markers[index].position.lng,markers[index].position.lat);\n        var marker = new BMap.Marker(point,{icon:new BMap.Icon("http://api.map.baidu.com/lbsapi/createmap/images/icon.png",new BMap.Size(20,25),{\n          imageOffset: new BMap.Size(markers[index].imageOffset.width,markers[index].imageOffset.height)\n        })});\n        var label = new BMap.Label(markers[index].title,{offset: new BMap.Size(25,5)});\n        var opts = {\n          width: 200,\n          title: markers[index].title,\n          enableMessage: false\n        };\n        var infoWindow = new BMap.InfoWindow(markers[index].content,opts);\n        marker.setLabel(label);\n        addClickHandler(marker,infoWindow);\n        map.addOverlay(marker);\n      };\n    }\n    //向地图添加控件\n    function addMapControl(){\n      var scaleControl = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});\n      scaleControl.setUnit(BMAP_UNIT_IMPERIAL);\n      map.addControl(scaleControl);\n      var navControl = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});\n      map.addControl(navControl);\n      var overviewControl = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:true});\n      map.addControl(overviewControl);\n    }\n    var map;\n      initMap();\n  </script>', 2, 'photo_01.png', 1428648605, 1, 1),
(8, '爱爱爱', NULL, 'vdgbtyegfwrerr', 2, 'photo_01.png', 1428648605, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `wd_link`
--

CREATE TABLE IF NOT EXISTS `wd_link` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `url` varchar(255) NOT NULL COMMENT '连接地址',
  `title` varchar(20) NOT NULL COMMENT '标题',
  `addtime` int(10) unsigned NOT NULL COMMENT '添加时间',
  `order` tinyint(3) unsigned NOT NULL COMMENT '排序',
  `is_show` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示（1是显示，2是不显示，默认是1）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='友情连接' AUTO_INCREMENT=9 ;

--
-- 转存表中的数据 `wd_link`
--

INSERT INTO `wd_link` (`id`, `url`, `title`, `addtime`, `order`, `is_show`) VALUES
(1, 'http://www.baidu.com', '百度', 1428459254, 1, 1),
(2, 'http://www.wengdo.com', '文豆', 1428459240, 9, 1),
(3, 'http://www.cctv.com', 'cctv', 1428459300, 1, 1),
(4, 'http://www.163.com', '网易', 1428459300, 1, 1);

-- --------------------------------------------------------

--
-- 表的结构 `wd_message`
--

CREATE TABLE IF NOT EXISTS `wd_message` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `username` varchar(10) NOT NULL DEFAULT '游客' COMMENT '用户名',
  `email` varchar(50) NOT NULL COMMENT '邮件',
  `title` varchar(50) DEFAULT NULL COMMENT '标题',
  `content` varchar(100) NOT NULL COMMENT '内容',
  `addtime` int(10) unsigned NOT NULL COMMENT '留言时间',
  `order` mediumint(8) unsigned DEFAULT NULL COMMENT '排序',
  `is_show` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '审核（1是审核，2是未审核，默认1）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='留言' AUTO_INCREMENT=14 ;

--
-- 转存表中的数据 `wd_message`
--

INSERT INTO `wd_message` (`id`, `username`, `email`, `title`, `content`, `addtime`, `order`, `is_show`) VALUES
(1, '游客', 'fasdf', 'sadfas', '<p>轻轻轻轻轻轻轻轻</p>', 1428637020, 1, 1),
(2, '游客', 'unhyf', '投入到更好让他的韩国日本', 'hveht8uh76 ', 1428637198, NULL, 1),
(3, '游客', 'gfbdr', 'grgvdr', 'brgfbhdthb', 1428722268, NULL, 1),
(4, '游客', 'nyujty', 'jyujyu', 'nyujnynj', 1428722350, NULL, 1),
(5, '隔热条光和热', '哥人格 ', '个人股', '过人格人格', 1429153153, NULL, 1),
(6, '游客', '各色如果是', NULL, '人格否认是公司', 1429153287, NULL, 1),
(7, 'aaaaaaa', 'aaaaaaaa', 'aaaaaaaaaa', 'aaaaaaaaaaaa', 1429153434, NULL, 1),
(8, '游客', 'fgsrd', NULL, 'g sdfgsdf', 1429153492, NULL, 1),
(9, '游客', 'bbbbbbbb', NULL, 'bbbbbb', 1429153970, NULL, 1),
(10, '游客', 'cccc', NULL, 'ccccc', 1429154613, NULL, 1),
(11, 'qqqqqq', 'qqqqqqqqqq', 'qqqqqqqqqqqqq', 'qqqqqqqqqqqqq', 1429154661, NULL, 1),
(12, '游客', '3333333', '啊啊啊啊啊啊啊', '<p>33333333</p>', 1429154820, 2, 1);

-- --------------------------------------------------------

--
-- 表的结构 `wd_nav`
--

CREATE TABLE IF NOT EXISTS `wd_nav` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `topid` tinyint(3) unsigned NOT NULL COMMENT '父级id',
  `title` varchar(20) NOT NULL COMMENT '标题',
  `url` varchar(255) NOT NULL COMMENT '地址',
  `order` tinyint(3) unsigned NOT NULL COMMENT '排序',
  `addtime` int(10) unsigned NOT NULL COMMENT '添加时间',
  `is_show` tinyint(4) NOT NULL DEFAULT '1' COMMENT '是否显示（1是显示，2是隐藏）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='导航表' AUTO_INCREMENT=16 ;

--
-- 转存表中的数据 `wd_nav`
--

INSERT INTO `wd_nav` (`id`, `topid`, `title`, `url`, `order`, `addtime`, `is_show`) VALUES
(1, 0, '关于我们', 'aaaa', 1, 1429673220, 1),
(2, 0, '产品展示', 'aaa', 2, 1429673231, 1),
(3, 0, '新闻中心', 'aaaa', 3, 1428895920, 1),
(4, 0, '人才招聘', 'aaa', 4, 1429241820, 1),
(5, 0, '客户留言', 'asdf', 5, 1429254000, 1),
(6, 1, '联系我们', 'index.php', 1, 1429858920, 1),
(7, 1, '投资质询', 'index.php', 2, 1429254120, 1),
(8, 1, '公司历史', 'index.php', 3, 1429081380, 1),
(9, 1, 'CEO致词', 'index.php', 4, 1429858980, 1),
(10, 3, '通知', 'news_list.php', 1, 1429167840, 1),
(11, 2, '台式机', 'asdf', 1, 1429167840, 1),
(12, 2, '手机', 'fasdf', 2, 1429686300, 1),
(13, 2, '平板电脑', 'dfsg', 3, 1429081500, 1),
(14, 2, '相机', 'sdfas', 3, 1429167960, 1),
(15, 3, '公司新闻', 'sdaf', 2, 1429686420, 1);

-- --------------------------------------------------------

--
-- 表的结构 `wd_product`
--

CREATE TABLE IF NOT EXISTS `wd_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `name` varchar(150) NOT NULL COMMENT '名称',
  `cat_id` smallint(5) unsigned NOT NULL COMMENT '产品类型',
  `img1` varchar(255) NOT NULL COMMENT '产品图片1',
  `img2` varchar(255) NOT NULL COMMENT '产品图片2',
  `img3` varchar(255) NOT NULL COMMENT '产品图片3',
  `size` varchar(100) NOT NULL COMMENT '大小',
  `addtime` int(10) unsigned NOT NULL COMMENT '生产日期',
  `fitting` varchar(500) NOT NULL COMMENT '产品配件',
  `order` int(10) unsigned NOT NULL COMMENT '排序',
  `feature` text NOT NULL COMMENT '产品特征',
  `format` text NOT NULL COMMENT '产品规格',
  `is_show` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='产品' AUTO_INCREMENT=116 ;

--
-- 转存表中的数据 `wd_product`
--

INSERT INTO `wd_product` (`id`, `name`, `cat_id`, `img1`, `img2`, `img3`, `size`, `addtime`, `fitting`, `order`, `feature`, `format`, `is_show`) VALUES
(2, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893936, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(3, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893936, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(4, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893936, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(6, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(7, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(8, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(9, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(10, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(11, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(12, '', 1, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', '', 1428569580, '', 0, '', '', 1),
(13, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(14, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(15, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(16, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(17, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(18, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(19, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(20, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(21, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(22, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(23, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(24, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(25, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(26, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(27, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(28, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(29, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(30, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(31, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(32, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(33, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(34, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(35, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(36, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(37, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(38, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(39, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(40, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(41, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(42, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(43, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(44, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(45, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(46, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(47, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(48, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(49, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(50, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(51, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(52, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(53, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(54, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(55, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(56, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(57, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(58, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(59, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(60, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(61, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(62, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(63, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(64, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(65, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(66, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(67, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(68, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(69, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(70, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(71, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(72, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(73, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(74, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(75, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(76, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(77, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(78, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(79, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(80, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(81, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(82, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(83, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(84, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(85, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(86, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(87, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(88, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(89, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(90, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(91, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(92, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(93, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(94, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(95, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(96, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(97, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(98, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(99, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(100, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(101, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(102, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(103, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(104, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(105, '台式机', 1, 'images/pro.png', 'likuyhgfrd', 'lkjhgfd', 'SIUGFNJSENFUIOG', 1428893952, 'GIUVSUFBEUINCH', 1, 'OIDFSGYBUERNIMGI', 'SRIUCGBSECFHYUER', 1),
(106, '手机', 2, 'images/pro.png', 'LKJHGFD', 'POIUYGRFDS', 'LOPIUKJYHGFD', 1428893952, '/;.L,IKMYHGFVDSX', 1, 'P;O,LKMJHBFCDXS', '.L,KMJHBGFVDC', 1),
(107, '平板电脑', 3, 'images/pro.png', '‘【pf]''[P;OLIJU', '"?;.,KMJHB', ']''[P;OLUJYHG', 1428893952, 'KIUJHBGVFDXS', 1, '''[-ILU97U6T5R', '''[;POUJYHGRF', 1),
(108, '相机', 4, 'images/pro.png', 'LO,U7YNJBRGVECF', 'P.OL,IKMJNHBGVF', ';.,LIKMNJYHBGVF', 1428893952, 'P;OL,KMNHBGVF', 1, '''/;.,KMJNHBGVF', '[P;,LIKMNHBGFVC', 1),
(109, '3333333', 1, '2015042209423965555.jpg', '2015042209422684213.jpg', '2015042209422646259.jpg', 'aaaaaaaaaaa', 1429062120, 'aaaaaaaaaaaa', 1, '<p>aaaaaaaaaaaaaaaaaa</p>', '<p>aaaaaaaaaaaaaaaaaaaaa</p>', 1),
(110, 'aaaaaa', 1, '2015042214492198549.jpg', '2015042214492168380.jpg', '2015042214492127123.jpg', 'aaaaaaaa', 1429339560, 'aaaaaaaaaaaa', 1, '<p>aaaaaaaaaaaaaaaaaa</p>', '<p>aaaaaaaaaaaaaaaaaaa</p>', 1),
(111, '111111', 1, '2015042214502119389.jpg', '2015042214502178531.jpg', '2015042214502118741.jpg', '1111111111', 1428907800, '111111111111', 1, '<p>111111111111111</p>', '<p>11111111111111</p>', 1),
(112, '2222222222222', 1, '2015042214523857610.jpg', '2015042214523882817.jpg', '2015042214523886039.jpg', '2222222222222', 1429253520, '222222222222', 1, '<p>2222222222222222222222222222222222222</p>', '<p>222222222222222222</p>', 1),
(113, '333333333333333333333333', 1, '2015042214560653599.jpg', '2015042214560691850.jpg', '2015042214560697340.jpg', '333333333333333', 1428648780, '333333333333333333333', 1, '<p>333333333333333</p>', '<p>33333333333333333333</p>', 1),
(114, '55555555555555', 1, '2015042214585245372.jpg', '2015042214585291408.jpg', '2015042214585236646.jpg', '555555555', 1428303480, '55555555555555', 1, '<p>555555555555555555555555555</p>', '<p>55555555555555555555555555555</p>', 1),
(115, 'hhhhhhhhhhhhhh', 1, '2015042215253999083.jpg', '2015042215253918206.jpg', '2015042215253999226.jpg', 'hhhhhhhhhhh', 1427959380, 'hhhhhhhhhhhhh', 1, '<p>hhhhhhhhhhhhhhhhhhh</p>', '<p>hhhhhhhhhhhhhhhhhhhhhh</p>', 1);

-- --------------------------------------------------------

--
-- 表的结构 `wd_pro_cat`
--

CREATE TABLE IF NOT EXISTS `wd_pro_cat` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT COMMENT '编号',
  `cat_name` varchar(50) NOT NULL COMMENT '分类名称',
  `author` varchar(10) NOT NULL DEFAULT 'admin' COMMENT '添加',
  `addtime` int(10) unsigned NOT NULL COMMENT '添加时间',
  `order` tinyint(3) unsigned NOT NULL COMMENT '排序',
  `is_show` tinyint(3) unsigned NOT NULL DEFAULT '1' COMMENT '是否先是（1是显示，2是隐藏，默认是1）',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='产品分类' AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `wd_pro_cat`
--

INSERT INTO `wd_pro_cat` (`id`, `cat_name`, `author`, `addtime`, `order`, `is_show`) VALUES
(1, '台式机', 'admin', 1428892200, 1, 1),
(2, '手机', 'admin', 1428892245, 2, 1),
(3, '平板电脑', 'admin', 1428892245, 3, 1),
(4, '相机', 'admin', 1428892245, 4, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
