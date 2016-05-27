<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>修改资料</title>
	<script src='__JS__/jquery-1.9.0.js' type='text/javascript'></script>
	<script src='__JS__/changeUserInformation.js' type='text/javascript'></script>
	<link rel="stylesheet" href="__CSS__/changeUserInformation.css">
	<link rel="SHORTCUT ICON" href="__IMAGES__/k.ico">
</head>
<body>
	<div id='page'>
		<button id='change-password'>修改密码</button>
		<button id='change-email'>修改邮箱</button>
		<div>
			<span id='tips'><?php echo ($tip); ?></span>
		</div>
		<div id='change-password-div'>
			<form action="__URL__/change_password" id='password-form' method='post'>
				<table>
					<tr>
						<td class='words'>
							<span>原始密码</span>
						</td>
						<td>
							<input type="password" class='input' id='' name='old-password'>
						</td>
						<td>
							
						</td>
					</tr>
					<tr>
						<td class='words'>
							<span>新 密 码</span>
						</td>
						<td>
							<input type="password" id="" class='input' name='new-password'>
						</td>
						<td>
							
						</td>
					</tr>
					<tr>
						<td class='words'>
							<span>确认密码</span>
						</td>
						<td>
							<input type="password" id="" class='input' name='re-password'>
						</td>
						<td>
							
						</td>
					</tr>
				</table>	
			</form>
			<button class='change' id='password-button'>修改</button>
		</div>
		<div id='change-email-div'>
			<form action="__URL__/change_email" id='email-form' method='post'>
				<table>
					<tr>
						<td class='words'>
							<span>新邮箱</span>
						</td>
						<td>
							<input type="text" name="email" id="" class='input' value=<?php echo ($email); ?>>
						</td>
						<td>
							
						</td>
					</tr>
				</table>	
			</form>
			<button class='change' id='email-button'>修改</button>
		</div>	
	</div>
</body>
</html>