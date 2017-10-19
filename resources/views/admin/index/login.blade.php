<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{ asset('admin/css/ch-ui.admin.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/font/css/font-awesome.min.css') }}">
</head>
<body style="background:#F3F3F4;">
	<div class="login_box" style="margin-top: 200px">
		<h2>欢迎使用博客管理平台</h2>
		<div class="form">
			<form action="{{ route('admins.login.check') }}" method="post">
				{{ csrf_field() }}
				<ul>
					<li>
					<input type="text" name="name" class="text" placeholder=" 请输入用户名"/>
					</li>
					<li>
						<input type="password" name="password"  placeholder=" 请输入密码" class="text"/>
					</li>
					<li>
						<input type="text" class="code" placeholder=" 请输入验证码" name="captcha"/>
						<img src="{{ captcha_src() }}" alt="" onclick="this.src='{{ captcha_src() }}&_='+Math.random()" >
					</li>
					<li>
						<input type="submit" value="立即登陆"/>
					</li>
				</ul>
			</form>
			<p><a href="#">返回首页</a></p>
		</div>
	</div>
</body>
</html>