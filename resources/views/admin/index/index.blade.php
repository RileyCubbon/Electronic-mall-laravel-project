<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{ asset('admin/css/ch-ui.admin.css') }}">
	<link rel="stylesheet" href="{{ asset('admin/font/css/font-awesome.min.css') }}">
</head>
<body>
	<!--头部 开始-->
	<div class="top_box">
		<div class="top_left">
			<div class="logo">后台管理模板</div>
			<ul>
				<li><a href="#" class="active">首页</a></li>
				<li><a href="#">管理页</a></li>
			</ul>
		</div>
		<div class="top_right">
			<ul>
				<li>管理员：admin</li>
				<li><a href="pass.html" target="main">修改密码</a></li>
				<li><a href="#">退出</a></li>
			</ul>
		</div>
	</div>
	<!--头部 结束-->

	<!--左侧导航 开始-->
	<div class="menu_box">
		<ul>
            <li>
            	<h3><i class="fa fa-fw fa-clipboard"></i>权限管理</h3>
                <ul class="sub_menu">
					<li><a href="{{ route('managers.index') }}" target="main"><i class="fa fa-fw fa-list-ul"></i>管理员列表</a></li>
                    <li><a href="#" target="main"><i class="fa fa-fw fa-plus-square"></i>管理员新增</a></li>
                    <li><a href="#" target="main"><i class="fa fa-fw fa-users"></i>角色管理</a></li>
                    <li><a href="#" target="main"><i class="fa fa-fw fa-warning"></i>权限管理</a></li>
                </ul>
            </li>
            <li>
            	<h3><i class="fa fa-fw fa-cog"></i>商品管理</h3>
                <ul class="sub_menu">
                    <li><a href="#" target="main"><i class="fa fa-fw fa-bars"></i>商品列表</a></li>
                    <li><a href="#" target="main"><i class="fa fa-fw fa-plus-square"></i>商品添加</a></li>
                    <li><a href="#" target="main"><i class="fa fa-fw fa-cubes"></i>商品类型</a></li>
                    <li><a href="#" target="main"><i class="fa fa-fw fa-gears"></i>商品属性</a></li>
                </ul>
            </li>
            <li>
            	<h3><i class="fa fa-fw fa-thumb-tack"></i>工具导航</h3>
                <ul class="sub_menu">
                    <li><a href="http://www.yeahzan.com/fa/facss.html" target="main"><i class="fa fa-fw fa-font"></i>图标调用</a></li>
                    <li><a href="http://hemin.cn/jq/cheatsheet.html" target="main"><i class="fa fa-fw fa-chain"></i>Jquery手册</a></li>
                    <li><a href="http://tool.c7sky.com/webcolor/" target="main"><i class="fa fa-fw fa-tachometer"></i>配色板</a></li>
                    <li><a href="element.html" target="main"><i class="fa fa-fw fa-tags"></i>其他组件</a></li>
                </ul>
            </li>
        </ul>
	</div>
	<!--左侧导航 结束-->

	<!--主体部分 开始-->
	<div class="main_box">
		<iframe src="{{ route('admins.right') }}" frameborder="0" width="100%" height="100%" name="main"></iframe>
	</div>
	<!--主体部分 结束-->

	<!--底部 开始-->
	<div class="bottom_box">
		CopyRight © 2015. Powered By <a href="http://www.houdunwang.com">http://www.houdunwang.com</a>.
	</div>
	<!--底部 结束-->
</body>
<script type="text/javascript" src="{{ asset('admin/js/jquery.js') }}"></script>
<script type="text/javascript" src="{{ asset('admin/js/ch-ui.admin.js') }}"></script>
</html>