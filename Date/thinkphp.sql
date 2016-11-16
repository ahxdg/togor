/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : thinkphp

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-11-16 13:30:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for think_article
-- ----------------------------
DROP TABLE IF EXISTS `think_article`;
CREATE TABLE `think_article` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `info` text,
  `time` datetime DEFAULT NULL,
  `profiles` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_article
-- ----------------------------
INSERT INTO `think_article` VALUES ('14', '建站记录', '&lt;p&gt;这个网站的建立，真是废了好多劲。从前年年中就开始打算自己做一个网站，可是一直到今天，才算有个雏形。&lt;/p&gt;&lt;p&gt;那个时候，真是初生牛犊，什么都不会，也什么都不怕，有了这个点子，便买了个服务器。可是买来却一直搁置在那里...最大的原因可能就是没有恒心做下去。中间断断续续..一开始只是会做一些简单的静态页面，动态页面就不会做了，所以之前那版的网站，是全静态的，有几篇文章，也都是自己敲到页面里去的，很不方便。但是自己后台语言也不会，php的书买了两本，看看就放在那里了。到现在也只是略知一二，这个网站用了thinkphp的框架，现学现用，网站十分简陋，功能也是，不过我会慢慢完善的&lt;/p&gt;&lt;p&gt;记得当初在北京的时候，也就是前年刚找到一份前端的工作，那个时候工资才两千多，买个服务器花了六百多。买来十分兴奋，还注册一个cn域名，togor；当初是想用自己名字，或者缩写弄个域名，但是都被别人注册过了。这个也是自己在网站上面试着敲，结果发现还蛮简单的，还可以带些寓意，便注册下来了。（寓意，大概就是to gor,做一个行走在路上的人吧！觉得还说的过去）&lt;br/&gt;&lt;/p&gt;&lt;p&gt;买来之后，我就在晚上，自己试着在服务器上面搭mysql、apache、php，当初不懂php，连wamp都不知道，头一天自个晚上弄到两三点都没弄成，各种问题，还不知道是哪里出的错，连续折腾了几个晚上，才算弄好...想想那时也是（醉了，够了），但也挺好。&lt;/p&gt;&lt;p&gt;在后来，回了郑州，中间间断了。不过，那时自己把网站备案的事情给弄好了，当初以为备案会很麻烦，就懒的去做。“迈出第一步，才是最难的。”真的是这样..&lt;/p&gt;&lt;p&gt;备案好了以后，域名也能访问了，可是网站却没什么东西，只有一句正在开发中...什么寒酸呢！&lt;/p&gt;&lt;p&gt;所以自己偶尔写一篇文章放上去，但是都是静态的页面，自己没添加一篇文章都要新建一个html文件，并且还有把其他页面的顺序调整，很是麻烦，所以自己也很少更新。&lt;/p&gt;&lt;p&gt;（现在我都觉得，自己最怕麻烦了...）&lt;/p&gt;&lt;p&gt;今年又来了杭州，在一家互联网教育公司工作，待遇还算可以，工作也不是很忙，遇到一些同事，在做网站的时候，帮我不少..十分感谢！&lt;/p&gt;&lt;p&gt;（2016/11/16 中午偷闲记）&lt;/p&gt;', '2016-11-16 00:00:00', '这个网站的建立，真是废了好多劲。从前年年中就开始打算自己做一个网站，可是一直到今天，才算有个雏形。');

-- ----------------------------
-- Table structure for think_section
-- ----------------------------
DROP TABLE IF EXISTS `think_section`;
CREATE TABLE `think_section` (
  `section_id` int(2) NOT NULL,
  `section_name` varchar(255) DEFAULT NULL,
  `section_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`section_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_section
-- ----------------------------
INSERT INTO `think_section` VALUES ('1', '首页', null);
INSERT INTO `think_section` VALUES ('2', '分享', null);
INSERT INTO `think_section` VALUES ('3', '笔记', null);
INSERT INTO `think_section` VALUES ('4', '关于我', null);

-- ----------------------------
-- Table structure for think_user
-- ----------------------------
DROP TABLE IF EXISTS `think_user`;
CREATE TABLE `think_user` (
  `id` int(4) NOT NULL,
  `name` varchar(12) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_user
-- ----------------------------
INSERT INTO `think_user` VALUES ('1', 'hee', '23', '8023');
INSERT INTO `think_user` VALUES ('2', 'togor', '24', '8023');
INSERT INTO `think_user` VALUES ('3', 'jianwen', '18', '8023');
