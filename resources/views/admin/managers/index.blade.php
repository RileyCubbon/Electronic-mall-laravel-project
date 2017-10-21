@extends('admin.layouts.app')
@section('body')
    <!--结果页快捷搜索框 开始-->
    <div class="search_wrap">
        <form action="" method="post">
            <table class="search_tab">
                <tr>
                    <th width="120">权限级别:</th>
                    <td>
                        <select onchange="javascript:location.href=this.value;">
                            <option value="">全部</option>
                            <option value="http://www.baidu.com">百度</option>
                            <option value="http://www.sina.com">新浪</option>
                        </select>
                    </td>
                    <th width="70">关键字:</th>
                    <td><input type="text" name="keywords" placeholder="关键字"></td>
                    <td><input type="submit" name="sub" value="查询"></td>
                </tr>
            </table>
        </form>
    </div>
    <!--结果页快捷搜索框 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post" name="change_manager">
        {{ csrf_field() }}
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="#"><i class="fa fa-plus"></i>管理员新增</a>
                    <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <th class="tc" width="5%"><input type="checkbox" id="select_manager"></th>
                        <th class="tc">ID</th>
                        <th>昵称</th>
                        <th>邮箱</th>
                        <th>权限</th>
                        <th>发布人</th>
                        <th>审核状态</th>
                        <th>添加时间</th>
                        <th>操作</th>
                    </tr>
                    @foreach($managers as $manager)
                    <tr>
                        <td class="tc"><input type="checkbox" name="id[]" value="{{ $manager->id }}"></td>
                        <td class="tc">{{ $manager->id }}</td>
                        <td>{{ $manager->name }}</td>
                        <td>{{ $manager->email }}</td>
                        <td>主管</td>
                        <td>{{ $manager->created_user_name }}</td>
                        <td>{{ $manager->is_verify ? '已通过' : '未通过' }}</td>
                        <td>{{ $manager->created_at }}</td>
                        <td>
                            <a href="#">删除</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </form>
    <div class="page_nav">
        <div>
            <a class="first" href="/wysls/index.php/Admin/Tag/index/p/1.html">第一页</a>
            <a class="prev" href="/wysls/index.php/Admin/Tag/index/p/7.html">上一页</a>
            <a class="num" href="/wysls/index.php/Admin/Tag/index/p/6.html">6</a>
            <a class="num" href="/wysls/index.php/Admin/Tag/index/p/7.html">7</a>
            <span class="current">8</span>
            <a class="num" href="/wysls/index.php/Admin/Tag/index/p/9.html">9</a>
            <a class="num" href="/wysls/index.php/Admin/Tag/index/p/10.html">10</a>
            <a class="next" href="/wysls/index.php/Admin/Tag/index/p/9.html">下一页</a>
            <a class="end" href="/wysls/index.php/Admin/Tag/index/p/11.html">最后一页</a>
            <span class="rows">11 条记录</span>
        </div>
    </div>

    <!--搜索结果页面 列表 结束-->
@endsection
@section('floor')
    <script type="text/javascript" src="{{ asset('admin/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/ch-ui.admin.js') }}"></script>
@endsection

