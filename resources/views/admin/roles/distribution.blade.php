@extends('admin.layouts.app')
@section('body')
    <div class="result_wrap">
        <form action="{{ route('roles.update',$role->id) }}" method="post">
            <table class="add_tab">
                <tbody>
                <tr>
                    <th style="width:200px">管理级别名称：</th>
                    <td>
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <h2 style="margin-left: 50px">{{ $role->grade }}</h2>
                    </td>
                </tr>
                <tr>
                    <th>权限：</th>
                    <td>
                        <table class="list_tab">
                            @foreach($authorities as $authority)
                                <tr>
                                    <td style="width:120px;">
                                        <span>{{ $authority->name }}</span>
                                    </td>
                                    <td>
                                        @foreach($authority->children as $children)
                                            <label for="">
                                                <input type="checkbox" name="authority_id[]" {{ in_array($children->id,$possessed) ? 'checked' : '' }} value="{{ $children->id }}">
                                                {{ $children->name }}
                                            </label>
                                        @endforeach
                                        @if($errors->has('authority_id'))
                                            <span><i class="fa fa-exclamation-circle yellow"></i>{{ $errors->first('authority_id') }}</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
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