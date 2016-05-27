<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>用户注册</title>
	<script src='__JS__/jquery-1.9.0.js' type='text/javascript'></script>
	<script src='__JS__/register.js' type='text/javascript'></script>
	<link rel="stylesheet" href="__CSS__/register.css">
	<link rel="SHORTCUT ICON" href="__IMAGES__/k.ico">
</head>
<body>
	<div id='page'>
		<form action="__URL__/do_register" method='post' id='form'>
			<table>
				<tr>
					<td class='words'>
						<span>昵　　称</span>
					</td>
					<td>
						<input type="text" class='input' id='name' name='name'>
					</td>
					<td>
						<span class='tips' id='name-tip'>限4-32个字符(汉字算3个字符)</span>	
					</td>
				</tr>
				<tr>
					<td class='words'>
						<span>邮　　箱</span>
					</td>
					<td>
						<input type="text" class='input' id='email' name='email'>
					</td>
					<td>
						<span class='tips' id='email-tip'>请输入正确的邮箱</span>
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
						<span class='tips' id='password-tip'>请输入6-32位密码</span>
					</td>
				</tr>
				<tr>
					<td class='words'>
						<span>确认密码</span>
					</td>
					<td>
						<input type="password" name="repassword" id="repassword" class='input'>
					</td>
					<td>
						<span class='tips' id='repassword-tip'>请确认两次输入的密码相同</span>
					</td>
				</tr>
			</table>	
			
		</form>
		<button id='register'>注册</button>
	</div>
</body>
</html>