<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('admin/css/ch-ui.admin.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/font/css/font-awesome.min.css') }}">
    @yield('header')
</head>
<body>
<!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">商品管理</a> &raquo; 添加商品
</div>
<!--面包屑导航 结束-->
@yield('body')
</body>
@yield('floor')
</html>