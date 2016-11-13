<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>togor</title>
 	<link rel="stylesheet" href="">
 </head>
 <body>
 	hello,<?php echo ($user); ?>
 	<hr>
	
 	<header>
 		<div class="logo">Togor</div>
 		<nav>
 			<ul>
 			<?php if(is_array($nav)): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
 					<a href="<?php echo ($vo["section_url"]); ?>">
 						<?php echo ($vo["section_name"]); ?>
 					</a>
 				</li><?php endforeach; endif; else: echo "" ;endif; ?>
 			</ul>
 		</nav>
 	</header> 
 </body>
 </html>