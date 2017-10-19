@extends('admin.layouts.app')
@section('body')
    <div class="result_wrap">
        <form action="#" method="post">
            <table class="add_tab">
                <tbody>
                <tr>
                    <th>属性名称：</th>
                    <td>
                        <input type="text" name="">
                        <span><i class="fa fa-exclamation-circle yellow"></i>这里是默认长度</span>
                    </td>
                </tr>
                <tr>
                    <th width="120"><i class="require">*</i>商品类型：</th>
                    <td>
                        <select name="">
                            <option value="">==请选择==</option>
                            <option value="19">精品界面</option>
                            <option value="20">推荐界面</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>录入方式：</th>
                    <td>
                        <label for=""><input type="radio" name="">输入框</label>
                        <label for=""><input type="radio" name="">下拉列表</label>
                        <label for=""><input type="radio" name="">多选输入</label>
                    </td>
                </tr>
                <tr>
                    <th>详细内容：</th>
                    <td>
                        <textarea class="lg" name="content"></textarea>
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