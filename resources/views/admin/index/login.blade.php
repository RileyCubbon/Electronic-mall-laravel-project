<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
    <title>登录</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/css/login.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('admin/fonts/css/font-awesome.min.css') }}">
    <style type="text/css">
        .login-bg{
            background: url({{ asset('admin/img/login-bg-8.jpg') }}) no-repeat center center fixed;
            background-size: 100% 100%;
        }
    </style>
  </head>
  
  <body class="login-bg">
    <div class="login-box">
        <header>
            <h1>后台管理系统</h1>
        </header>
        <div class="login-main">
			<form action="{{ route('admins.login.check') }}" class="form" method="post">
                {{ csrf_field() }}
				<div class="form-item">
					<label class="login-icon">
						<i class="fa fa-envelope-open"></i>
					</label>
					<input type="text" id='username' name="email" placeholder="请输入邮箱" required>
				</div>
                @if($errors->has('email'))
                    <div class="msg">{{ $errors->first('email') }}</div>
                @endif
                <div class="form-item">
                    <label class="login-icon">
                        <i class="fa fa-unlock-alt"></i>
                    </label>
                    <input type="password" id="password" name="password" placeholder="请输入您的密码">
                </div>
                @if($errors->has('password'))
                    <div class="msg">{{ $errors->first('password') }}</div>
                @endif
                <div class="form-item verify">
                    <label class="login-icon">
                        <i class="fa fa-edit"></i>
                    </label>
                    <input type="text" id='verify' class="pull-left" name="captcha" placeholder="请输入验证码">
                    <img class="pull-right" src="{{ captcha_src() }}">
                    <div class="clear"></div>
                </div>
                @if($errors->has('captcha'))
                    <div class="msg">{{ $errors->first('captcha') }}</div>
                @endif
				<div class="form-item">
					<button type="submit" class="login-btn">
						登&emsp;&emsp;录
					</button>
				</div>
			</form>
            <div class="msg"></div>
		</div>
    </div>
    <script type="text/javascript" src='{{ asset('admin/js/jquery-3.1.1.min.js') }}'></script>
    <script type="text/javascript">
        $(function(){
            $('.login-btn').on('click',function(){
                if($('#username').val() == ''){
                    $('.msg').html('登录名不能为空');
                    return;
                }
                if($('#password').val() == ''){
                    $('.msg').html('密码不能为空');
                    return;
                }
                if($('#verify').val() == ''){
                    $('.msg').html('验证码不能为空');
                    return;
                }
                $('form').submit();

            });
        })
    </script>
  </body>
</html>
