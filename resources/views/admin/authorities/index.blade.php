@extends('admin.layouts.app')
@section('body')


    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{ route('authorities.create') }}"><i class="fa fa-plus"></i>新增权限</a>
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="result_wrap">
            <div class="result_content">
                <table class="list_tab">
                    <tr>
                        <th class="tc">ID</th>
                        <th>权限名称</th>
                        <th>上级权限</th>
                        <th>发布人</th>
                        <th>添加时间</th>
                        <th>操作</th>
                    </tr>
                    @foreach($authorities as $authority)
                    <tr>
                        <td class="tc">{{ $authority->id }}</td>
                        <td>{{ str_repeat('&ensp;',$authority->level*3) }}{{ $authority->name}}</td>
                        <td>{{ $authority->parent ? $authority->parent->name : '顶级权限' }}</td>
                        <td>{{ $authority->user }}</td>
                        <td>{{ $authority->created_at }}</td>
                        <td>
                            <form action="{{ route('authorities.destroy',$authority->id) }}" method="POST">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <input type="submit" value="删除">
                            </form>
                        </td>
                    </tr>
                    @endforeach
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

    </form>
    <!--搜索结果页面 列表 结束-->
@endsection
@section('floor')
    <script type="text/javascript" src="{{ asset('admin/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/ch-ui.admin.js') }}"></script>
@endsection

