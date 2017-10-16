@extends('admin.layouts.app')
@section('body')
<div class="content">
    <div class="header">
        <h1 class="page-title">管理员新增</h1>
    </div>

    <div class="well">
        <!-- add form -->
        <form action="" method="post" id="tab">
            <label>用户名：</label>
            <input type="text" name="" value="" class="input-xlarge">
            <label>昵称</label>
            <input type="text" name="" value="" class="input-xlarge">
            <label>密码：</label>
            <input type="password" name="" value="" class="input-xlarge">
            <label>邮箱：</label>
            <input type="text" name="" value="" class="input-xlarge">
            <button class="btn btn-primary" type="submit">保存</button>
        </form>
    </div>
    <!-- footer -->
    <footer>
        <hr>
        <p>© 2017 <a href="javascript:void(0);" target="_blank">ADMIN</a></p>
    </footer>
</div>
@endsection