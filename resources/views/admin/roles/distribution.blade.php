@extends('admin.layouts.app')
@section('header')
    <link rel="stylesheet" href="{{ asset('share/css/app.css') }}">
@endsection
@section('body')
    <div class="result_wrap">
        <form action="#" method="post">
            <table class="table table-bordered table-striped">
                <colgroup>
                    <col class="col-md-2">
                    <col class="col-md-9">
                </colgroup>
                <thead>
                <tr>
                    <th>父级权限</th>
                    <th>子级权限</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td scope="row">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                        </label>
                    </td>
                    <td>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> 1
                        </label>
                        <label class="checkbox-inline">
                            <input type="checkbox" id="inlineCheckbox2" value="option2"> 2
                        </label>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="row">
                            <div class="col-md-offset-2">
                                <input type="submit" value="提交">
                                <input type="button" class="back" onclick="history.go(-1)" value="返回">
                            </div>
                        </div>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection