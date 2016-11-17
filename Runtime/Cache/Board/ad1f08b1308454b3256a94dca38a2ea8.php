<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>公告管理</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="/thinkphp/Public/common/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="/thinkphp/Public/board/css/style.css" />
<script>
	var ROOT = '/thinkphp';
</script>
</head>
<body>
	<nav class="navbar navbar-default" role="navigation">
	    <div class="container-fluid">
		    <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse"
		                data-target="#my-navbar-collapse">
		            <span class="sr-only">切换导航</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		        </button>
		        <a class="navbar-brand" href="/thinkphp/board">Togor</a>
		    </div>
		    <div class="collapse navbar-collapse" id="my-navbar-collapse">
		        <ul class="nav navbar-nav">
		            <li class='<?php if(($menu) == "article"): ?>active<?php endif; ?>'><a href="/thinkphp/board/article">文章管理</a></li>
		            <li class='<?php if(($menu) == "announcement"): ?>active<?php endif; ?>'><a href="/thinkphp/board/announcement">公告管理</a></li>
		            <li class="dropdown" class='<?php if(($menu) == "announcement"): ?>active<?php endif; ?>'>
		                <a href="/thinkphp/board/user" class="dropdown-toggle" data-toggle="dropdown">
		                    管理人员设置
		                    <b class="caret"></b>
		                </a>
		                <ul class="dropdown-menu">
		                    <li><a href="#">jmeter</a></li>
		                    <li><a href="#">EJB</a></li>
		                    <li><a href="#">Jasper Report</a></li>
		                    <li class="divider"></li>
		                    <li><a href="#">分离的链接</a></li>
		                    <li class="divider"></li>
		                    <li><a href="#">另一个分离的链接</a></li>
		                </ul>
		            </li>
		        </ul>
		    </div>
		    <div class="user user-btn">
		    	<a href="#"><?php echo session('user_name');?></a>
		    	<a href="javascript:;" id="logout">logout</a>
		    </div>
	    </div>
	</nav>	
	这个页面是公告管理页面
	<footer class="footer">
	Copyright © 2016&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Togor&nbsp;&nbsp;&nbsp;豫ICP备16005549号-1
</footer>
<script type="text/javascript" src="/thinkphp/Public/common/js/jquery.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/common/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/board/js/main.js"></script>
</body>
</html>