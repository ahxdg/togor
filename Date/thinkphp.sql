/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : thinkphp

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2016-11-22 12:52:26
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
  `big_class` int(255) DEFAULT NULL,
  `little_class` varchar(255) DEFAULT NULL,
  `recommend` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of think_article
-- ----------------------------
INSERT INTO `think_article` VALUES ('14', '建站记录', '&lt;p&gt;这个网站的建立，真是废了好多劲。从前年年中就开始打算自己做一个网站，可是一直到今天，才算有个雏形。&lt;/p&gt;&lt;p&gt;那个时候，真是初生牛犊，什么都不会，也什么都不怕，有了这个点子，便买了个服务器。可是买来却一直搁置在那里...最大的原因可能就是没有恒心做下去。中间断断续续..一开始只是会做一些简单的静态页面，动态页面就不会做了，所以之前那版的网站，是全静态的，有几篇文章，也都是自己敲到页面里去的，很不方便。但是自己后台语言也不会，php的书买了两本，看看就放在那里了。到现在也只是略知一二，这个网站用了thinkphp的框架，现学现用，网站十分简陋，功能也是，不过我会慢慢完善的&lt;/p&gt;&lt;p&gt;记得当初在北京的时候，也就是前年刚找到一份前端的工作，那个时候工资才两千多，买个服务器花了六百多。买来十分兴奋，还注册一个cn域名，togor；当初是想用自己名字，或者缩写弄个域名，但是都被别人注册过了。这个也是自己在网站上面试着敲，结果发现还蛮简单的，还可以带些寓意，便注册下来了。（寓意，大概就是to gor,做一个行走在路上的人吧！觉得还说的过去）&lt;br/&gt;&lt;/p&gt;&lt;p&gt;买来之后，我就在晚上，自己试着在服务器上面搭mysql、apache、php，当初不懂php，连wamp都不知道，头一天自个晚上弄到两三点都没弄成，各种问题，还不知道是哪里出的错，连续折腾了几个晚上，才算弄好...想想那时也是（醉了，够了），但也挺好。&lt;/p&gt;&lt;p&gt;在后来，回了郑州，中间间断了。不过，那时自己把网站备案的事情给弄好了，当初以为备案会很麻烦，就懒的去做。“迈出第一步，才是最难的。”真的是这样..&lt;/p&gt;&lt;p&gt;备案好了以后，域名也能访问了，可是网站却没什么东西，只有一句正在开发中...什么寒酸呢！&lt;/p&gt;&lt;p&gt;所以自己偶尔写一篇文章放上去，但是都是静态的页面，自己没添加一篇文章都要新建一个html文件，并且还有把其他页面的顺序调整，很是麻烦，所以自己也很少更新。&lt;/p&gt;&lt;p&gt;（现在我都觉得，自己最怕麻烦了...）&lt;/p&gt;&lt;p&gt;今年又来了杭州，在一家互联网教育公司工作，待遇还算可以，工作也不是很忙，遇到一些同事，在做网站的时候，帮我不少..十分感谢！&lt;/p&gt;&lt;p&gt;（2016/11/16 中午偷闲记）&lt;/p&gt;', '2016-11-16 00:00:00', '这个网站的建立，真是废了好多劲。从前年年中就开始打算自己做一个网站，可是一直到今天，才算有个雏形。', '1', '其他', '0');
INSERT INTO `think_article` VALUES ('15', '常用window命令', '&lt;p&gt;cmd &amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp; 进入控制台&lt;br/&gt;&lt;/p&gt;&lt;p&gt;regedit&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;注册表&lt;br/&gt;&lt;/p&gt;&lt;p&gt;celc&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;计算器&lt;br/&gt;&lt;/p&gt;&lt;p&gt;mspaint&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;画图板&lt;/p&gt;&lt;p&gt;notepad&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;记事本&lt;br/&gt;&lt;/p&gt;&lt;p&gt;mstsc&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;远程桌面连接&lt;br/&gt;&lt;/p&gt;&lt;p&gt;mkdir&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;新建文件夹&lt;/p&gt;&lt;p&gt;dir&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;显示目录中的文件/文件夹&lt;/p&gt;&lt;p&gt;net start *&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;启动该服务&lt;br/&gt;&lt;/p&gt;&lt;p&gt;net stop *&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;停止该服务&lt;/p&gt;&lt;p&gt;echo.&amp;gt;*.*&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;创建文件*.*&lt;br/&gt;&lt;/p&gt;&lt;p&gt;del *.*&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;&amp;nbsp;删除文件&lt;/p&gt;', '2016-11-17 00:00:00', '苦于每次使用时，都要百度，还很难找到...', '1', '其他', '0');
INSERT INTO `think_article` VALUES ('16', '数据库查询-记录', '&lt;p&gt;倒序查询在查询时添加order(id desc)&lt;/p&gt;', '2016-11-17 00:00:00', '这篇文章记录了我在使用数据库时，一些查询方法', '1', 'sql', '0');
INSERT INTO `think_article` VALUES ('19', 'sublime text 安装插件', '&lt;p&gt;sublime text安装插件：&lt;/p&gt;&lt;p&gt;首先打开control menu，（view&amp;gt;show control）把下面的代码考进去，运行&lt;/p&gt;&lt;p&gt;import urllib.request,os,hashlib; h = &amp;#39;df21e130d211cfc94d9b0905775a7c0f&amp;#39; + &amp;#39;1e3d39e33b79698005270310898eea76&amp;#39;; pf = &amp;#39;Package Control.sublime-package&amp;#39;; ipp = sublime.installed_packages_path(); urllib.request.install_opener( urllib.request.build_opener( urllib.request.ProxyHandler()) ); by = urllib.request.urlopen( &amp;#39;http://packagecontrol.io/&amp;#39; + pf.replace(&amp;#39; &amp;#39;, &amp;#39;%20&amp;#39;)).read(); dh = hashlib.sha256(by).hexdigest(); print(&amp;#39;Error validating download (got %s instead of %s), please try manual install&amp;#39; % (dh, h)) if dh != h else open(os.path.join( ipp, pf), &amp;#39;wb&amp;#39; ).write(by)&lt;/p&gt;&lt;p&gt;完成后，你就可以在Preferences下面看到package control一项，或者你可以使用快捷键shift+ctrl+p，&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161117/1479389760135089.png&quot; title=&quot;1479389760135089.png&quot; alt=&quot;blob.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;输入install package,进入安装插件界面，这里有很多插件可供下载，输入你想要安装的插件，回车安装即可。&lt;/p&gt;&lt;p&gt;&lt;img src=&quot;/ueditor/php/upload/image/20161117/1479389881122292.png&quot; title=&quot;1479389881122292.png&quot; alt=&quot;blob.png&quot;/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;可以参考此网站：https://packagecontrol.io/installation&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '2016-11-17 00:00:00', 'sublime text编辑器功能很是强大，我这次刚刚使用，记录一下，使用过程中踩的坑', '1', 'php', '1');
INSERT INTO `think_article` VALUES ('20', 'sublime text 实时预览页面', '&lt;p&gt;首先先要安装sublime text和google浏览器&lt;/p&gt;&lt;p&gt;然后在Google的应用商店里搜索livereload，并进行安装，此过程需要翻墙。&lt;/p&gt;&lt;p&gt;在sublime text里使用install package，搜索并安装livereload插件（sublime text的install package安装见本站：&lt;a href=&quot;http://togor.cn/home/index/artInfo?id=19&quot; target=&quot;_blank&quot; title=&quot;sublime安装插件&quot;&gt;sublime安装插件&lt;/a&gt;）,&lt;/p&gt;&lt;p&gt;之后，我们需要打开Preferences&amp;gt;Package Settings&amp;gt;LiveReload&amp;gt;Settings-User&lt;/p&gt;&lt;p&gt;把下面的代码拷贝进去，重启即可，记得要打开google浏览器的livereload&lt;/p&gt;&lt;p&gt;{&lt;/p&gt;&lt;p&gt;&lt;span class=&quot;Apple-tab-span&quot; style=&quot;white-space:pre&quot;&gt;	&lt;/span&gt;&amp;quot;enabled_plugins&amp;quot;:[&lt;/p&gt;&lt;p&gt;&lt;span class=&quot;Apple-tab-span&quot; style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;&amp;quot;SimpleReloadPlugin&amp;quot;,&lt;/p&gt;&lt;p&gt;&lt;span class=&quot;Apple-tab-span&quot; style=&quot;white-space:pre&quot;&gt;		&lt;/span&gt;&amp;quot;SimpleRefresh&amp;quot;&lt;/p&gt;&lt;p&gt;&lt;span class=&quot;Apple-tab-span&quot; style=&quot;white-space:pre&quot;&gt;	&lt;/span&gt;]&lt;/p&gt;&lt;p&gt;}&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;', '2016-11-17 00:00:00', '利用sublime text , google浏览器，livereload开发网站时，实时预览，免去每次更改都要手动刷新页面', '1', '其他', '1');
INSERT INTO `think_article` VALUES ('30', '孩子眼中的爱情', '&lt;p&gt;&lt;video src=&quot;http://2b2726fb22467.cdn.sohucs.com/98f1d9e835d4679befabdde0e6a3494f.mp4&quot; style=&quot;background-image:url(http://localhost/togor/public/img/l.png)&quot; controls=&quot;controls&quot;&gt;&lt;/video&gt;&lt;/p&gt;&lt;p&gt;&lt;br/&gt;&lt;/p&gt;&lt;p&gt;该视频是有Jubilee Project团队制作，视频里孩子们表达了自己对于爱情的看法。单纯而又美好...&lt;/p&gt;&lt;p&gt;by :&lt;a href=&quot;http://www.jubileeproject.org/&quot; target=&quot;_blank&quot; title=&quot;Jubilee project&quot;&gt; Jubilee Project&lt;/a&gt;&lt;/p&gt;', '2016-11-18 00:00:00', '该视频是有Jubilee Project团队制作，视频里孩子们表达了自己对于爱情的看法。单纯而又美好...', '2', '其他', '1');
INSERT INTO `think_article` VALUES ('31', '最后的父爱', '&lt;p&gt;&lt;video src=&quot;http://2b2726fb22467.cdn.sohucs.com/879779f6fb89e03162257124f9050455.mp4&quot; controls=&quot;controls&quot; style=&quot;background-image:url(http://localhost/togor/public/img/l2.png)&quot;&gt;&lt;/video&gt;&lt;/p&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;by : &lt;a href=&quot;http://www.vmovier.com/&quot; target=&quot;_blank&quot; title=&quot;v电影&quot;&gt;V电影&lt;/a&gt;&lt;/p&gt;', '2016-11-18 00:00:00', '视频讲述男主发现自己将要变成丧尸，把自己的宝宝背在身后，怕自己变成丧尸后会吃的自己的孩子，利用腐肉来吸引自己，直到被幸存的人发现。展示了人类最伟大的父爱..虽然只是一片小短片，却十分令人震撼！', '2', '其他', '1');
INSERT INTO `think_article` VALUES ('32', 'video的预加载封面及铺满', '&lt;p&gt;有些时候，我们要在网站上面放些视频文件，但是有些视频尺寸比例不同，或者要适应不同尺寸的设备，就会出现视频的预加载图片不同完全覆盖在视频上面。&lt;/p&gt;&lt;p&gt;我们可以利用background-image来作为poster，而把poster属性设置成一个无法取到的值即可。&lt;/p&gt;', '2016-11-18 00:00:00', '有些时候，我们要在网站上面放些视频文件，但是有些视频尺寸比例不同，或者要适应不同尺寸的设备，就会出现视频的预加载图片不同完全覆盖在视频上面', '1', '其他', '0');

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
