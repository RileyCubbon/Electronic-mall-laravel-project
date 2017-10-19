@extends('admin.layouts.app')
@section('body')


    <!--搜索结果页面 列表 开始-->
    <div class="result_wrap">
        <!--快捷导航 开始-->
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{ route('roles') }}"><i class="fa fa-plus"></i>新增角色</a>
            </div>
        </div>
        <!--快捷导航 结束-->
    </div>

    <div class="result_wrap">
        <div class="result_content">
            <table class="list_tab">
                <tr>
                    <th class="tc">ID</th>
                    <th>权限级别</th>
                    <th>可以操作项</th>
                    <th>该权限人数</th>
                    <th>审核状态</th>
                    <th>添加时间</th>
                    <th>操作</th>
                </tr>
                <tr>
                    <td class="tc">59</td>
                    <td>主管</td>
                    <td>添加商品，更新商品，添加管理员，删除管理员</td>
                    <td>2</td>
                    <td>1</td>
                    <td>2014-03-15 21:11:01</td>
                    <td>
                        <a href="#">分配权限</a>
                        <a href="#">删除</a>
                    </td>
                </tr>
            </table>
        </div>
    </div>


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

