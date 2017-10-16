@extends('admin.layouts.app')
@section('body')
<div class="content">
    <div class="header">
        <h1 class="page-title">管理员编辑</h1>
    </div>

    <div class="well">
        <!-- edit form -->
        <form action="" method="" id="tab">
            <label>用户名：</label>
            <input type="text" name="" value="test" class="input-xlarge">
            <label>昵称：</label>
            <input type="text" name="" value="好吃的橙子" class="input-xlarge">
            <label>邮箱：</label>
            <input type="text" name="" value="abcd@itcast.cn" class="input-xlarge">
            <button class="btn btn-primary" type="submit" >保存</button>
        </form>
    </div>
    <!-- footer -->
    <footer>
        <hr>
        <p>© 2017 <a href="javascript:void(0);" target="_blank">ADMIN</a></p>
    </footer>
</div>
@endsection