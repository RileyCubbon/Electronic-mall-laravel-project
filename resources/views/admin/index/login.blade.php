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
					<span><i class="fa fa-user"></i></span>
					@if ($errors->has('name'))
						<div>
							<strong>&ensp;{{ $errors->first('name') }}</strong>
						</div>
					@endif
					</li>
					<li>
						<input type="password" name="password"  placeholder=" 请输入密码" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					@if ($errors->has('password'))
						<div>
							<strong>&ensp;{{ $errors->first('password') }}</strong>
						</div>
						@endif
					</li>
					<li>
						<input type="text" class="code" placeholder=" 请输入验证码" name="captcha"/>
						<span><i class="fa fa-check-square-o"></i></span>
						<img src="{{ captcha_src() }}" alt="" onclick="this.src='{{ captcha_src() }}&_='+Math.random()" >
						@if ($errors->has('captcha'))
						<div >
							<strong>&ensp;{{ $errors->first('captcha') }}</strong>
						</div>
						@endif
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