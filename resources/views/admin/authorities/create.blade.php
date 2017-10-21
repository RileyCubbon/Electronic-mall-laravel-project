@extends('admin.layouts.app')
@section('body')
    <div class="result_wrap">
        <form action="{{ route('authorities.store') }}" method="post">
            <table class="add_tab">
                <tbody>
                <tr>
                    <th>权限名称：</th>
                    <td>
                        {{ csrf_field() }}
                        <input type="text" name="name">
                        @if($errors->has('name'))
                            <span><i class="fa fa-exclamation-circle yellow"></i>{{ $errors->first('name') }}</span>f
                        @endif
                    </td>
                </tr>
                <tr>
                    <th width="120"><i class="require">*</i>上级权限：</th>
                    <td>
                        <select name="parent_id">
                            <option value="" disabled >==请选择==</option>
                            <option value="0">顶级权限</option>
                            @foreach($authorities as $authority)
                            <option value="{{ $authority->id }}">
                                {{ $authority->name }}
                            </option>
                            @endforeach
                        </select>
                        @if($errors->has('parent_id'))
                            <span><i class="fa fa-exclamation-circle yellow"></i>{{ $errors->first('parent_id') }}</span>f
                        @endif
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