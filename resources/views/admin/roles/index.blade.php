@extends('admin.layouts.app')
@section('body')


    <!--搜索结果页面 列表 开始-->
    <div class="result_wrap">
        <!--快捷导航 开始-->
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{ route('roles.create') }}"><i class="fa fa-plus"></i>新增角色</a>
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
                @foreach($roles as $role)
                <tr>
                    <td class="tc">{{ $role->id }}</td>
                    <td>{{ $role->grade }}</td>
                    <td>
                        @if(empty($role->authorities->toArray()))
                            <a href="{{ route('roles.edit',$role->id) }}">暂无权限，请分配</a>
                        @else
                            @foreach($role->authorities as $authority)
                                {{ $authority->name }},
                            @endforeach
                        @endif

                    </td>
                    <td>2</td>
                    <td>{{ $role->is_verify ? '已通过' : '未通过' }}</td>
                    <td>{{ $role->created_at }}</td>
                    <td>
                        <a href="{{ route('roles.edit',$role->id) }}">更新权限</a>
                        <form id="delete" action="{{ route('roles.destroy',$role->id) }}" method="POST">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <a onclick="$('#delete').submit()">删除</a>
                        </form>
                        @if(!$role->is_verify)
                        <a href="{{ route('roles.verify',$role->id) }}">通过审核</a>
                        @endif
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

    <!--搜索结果页面 列表 结束-->
@endsection
@section('floor')
    <script type="text/javascript" src="{{ asset('admin/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('admin/js/ch-ui.admin.js') }}"></script>
@endsection

