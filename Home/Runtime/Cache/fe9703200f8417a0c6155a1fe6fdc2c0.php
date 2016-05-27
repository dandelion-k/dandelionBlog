<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户登陆</title>
	<script src='__JS__/jquery-1.9.0.js' type='text/javascript'></script>
	<script src='__JS__/login.js' type='text/javascript'></script>
	<link rel="stylesheet" href="__CSS__/login.css">
	<link rel="SHORTCUT ICON" href="__IMAGES__/k.ico">
</head>
<body>
	<div id='page'>
		<form action="__URL__/do_login" method='post' id='form'>
			<table>
				
				<span id='tip'><?php echo ($tip); ?></span>
				
				<tr>
					<td class='words'>
						<span>昵　　称</span>
					</td>
					<td>
						<input type="text" class='input' id='name' name='name'>
					</td>
					<td>
						<span class='tips' id='name-tip'>用户名不能为空！</span>
					</td>
				</tr>
				<tr>
					<td class='words'>
						<span>密　　码</span>
					</td>
					<td>
						<input type="password" name="password" id="password" class='input'>
					</td>
					<td>
						<span class='tips' id='password-tip'>密码不能为空！</span>
					</td>
				</tr>
			</table>	
		</form>
		<button id='login'>登陆</button>
		<?php echo ($test); ?>
	</div>
</body>
</html>