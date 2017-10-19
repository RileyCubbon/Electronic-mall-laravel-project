@extends('admin.layouts.app')
@section('body')
    <div class="result_wrap">
        <form action="#" method="post">
            <table class="add_tab">
                <tbody>
                <tr>
                    <th>权限名称：</th>
                    <td>
                        <input type="text" name="">
                        <span><i class="fa fa-exclamation-circle yellow"></i>这里是默认长度</span>
                    </td>
                </tr>
                <tr>
                    <th width="120"><i class="require">*</i>上级权限：</th>
                    <td>
                        <select name="">
                            <option value="">==请选择==</option>
                            <option value="19">精品界面</option>
                            <option value="20">推荐界面</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="提交">
                        <input type="button" class="back" onclick="history.go(-1)" value="返回">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection