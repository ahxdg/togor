<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link type="text/css" rel="stylesheet" href="/thinkphp/Public/common/css/bootstrap.min.css" />
<link type="text/css" rel="stylesheet" href="/thinkphp/Public/board/css/style.css" />
<script>
	var ROOT = '/thinkphp';
</script>
</head>
<body>
	<div class="login-body">
		<form action="" id="login" role="form">
			<div class="form-header">
				<h2 class="text-center">Togor-board</h2>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label" for="name">登录名：</label>
				<div class="col-sm-8">
					<input class="form-control" type="text" name="name">
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-4 control-label" for="password">密码：</label>
				<div class="col-sm-8">
					<input class="form-control" type="password" name="password">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-4 col-sm-8">
					<a href="javascript:;" class="btn btn-default">登录</a>
				</div>
			</div>
		</form>
	</div>
	<footer class="footer">
	Copyright © 2016&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;Togor&nbsp;&nbsp;&nbsp;豫ICP备16005549号-1
</footer>
<script type="text/javascript" src="/thinkphp/Public/common/js/jquery.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/common/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/board/js/main.js"></script> 
	<script>
		$('.btn').on('click',function() {
			var data = {};
				data.name = $('#login input[name="name"]').val();
				data.password = $('#login input[name="password"]').val();
			console.log(data)
			$.ajax({
				url:'/thinkphp/board/Public/login',
				type:'post',
				data:data,
				success:function(obj){
					console.log(obj);
					if (obj.status) {
						window.location = '/thinkphp'+obj.url;
					}else{
						alert(obj.info);
					}
				}
			})
		});
	</script>
</body>
</html>