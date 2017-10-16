@extends('admin.layouts.app')
@section('body')
<div class="content">
    <div class="header">
        <h1 class="page-title">管理员列表</h1>
    </div>

    <div class="well">
        <!-- search button -->
        <form action="" method="get" class="form-search">
            <div class="row-fluid" style="text-align: left;">
                <div class="pull-left span4 unstyled">
                    <p> 用户名：<input class="input-medium" name="" type="text"></p>
                </div>
                <div class="pull-left span4 unstyled">
                    <p> 开始时间：<input class="input-medium" name="" type="text" onclick="WdatePicker()"></p>
                </div>
            </div>
            <button type="submit" class="btn">查找</button>
            <a class="btn btn-primary" onclick="javascript:window.location.href='#'">新增</a>
        </form>
    </div>
    <div class="well">
        <!-- table -->
        <table class="table table-bordered table-hover table-condensed">
            <thead>
                <tr>
                    <th>编号</th>
                    <th>用户名</th>
                    <th>昵称</th>
                    <th>邮箱</th>
                    <th>是否可用</th>
                    <th>上次登录时间</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <tr class="success">
                    <td>1</td>
                    <td>admin</td>
                    <td>好吃的橙子</td>
                    <td>admin@itcast.cn</td>
                    <td>可用</td>
                    <td>2017-04-01 08:00:00</td>
                    <td>
                        <a href="javascript:void(0);"> 编辑 </a>
                        <a href="javascript:void(0);" onclick="if(confirm('确认删除？')) location.href='#'"> 删除 </a>
                        <a href="javascript:void(0);"> 重置密码 </a>
                    </td>
                </tr>
                <tr class="error">
                    <td>2</td>
                    <td>developer</td>
                    <td>好吃的橙子</td>
                    <td>普通管理员</td>
                    <td>developer@itcast.cn</td>
                    <td>可用</td>
                    <td>2017-04-01 08:00:00</td>
                    <td>
                        <a href="javascript:void(0);"> 编辑 </a>
                        <a href="javascript:void(0);" onclick="if(confirm('确认删除？')) location.href='#'"> 删除 </a>
                        <a href="javascript:void(0);"> 重置密码 </a>
                    </td>
                </tr>
                <tr class="warning">
                    <td>3</td>
                    <td>test</td>
                    <td>好吃的橙子</td>
                    <td>普通管理员</td>
                    <td>test@itcast.cn</td>
                    <td>可用</td>
                    <td>2017-04-01 08:00:00</td>
                    <td>
                        <a href="javascript:void(0);"> 编辑 </a>
                        <a href="javascript:void(0);" onclick="if(confirm('确认删除？')) location.href='#'"> 删除 </a>
                        <a href="javascript:void(0);"> 重置密码 </a>
                    </td>
                </tr>
                <tr class="info">
                    <td>4</td>
                    <td>user</td>
                    <td>好吃的橙子</td>
                    <td>普通管理员</td>
                    <td>user@itcast.cn</td>
                    <td>可用</td>
                    <td>2017-04-01 08:00:00</td>
                    <td>
                        <a href="javascript:void(0);"> 编辑 </a>
                        <a href="javascript:void(0);" onclick="if(confirm('确认删除？')) location.href='#'"> 删除 </a>
                        <a href="javascript:void(0);"> 重置密码 </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <!-- pagination -->
        <div class="pagination">
            <ul>
                <li><a href="#">Prev</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>
    </div>
    <!-- footer -->
    <footer>
        <hr>
        <p>© 2017 <a href="javascript:void(0);" target="_blank">ADMIN</a></p>
    </footer>
</div>
@endsection