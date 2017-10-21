<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthoritiesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      => 'required|string|unique:authorities',
            'parent_id' => 'required|numeric',
        ];
    }

    public function messages (  )
    {
        return [
            'name.required'      => '请填写权限名称',
            'name.string'        => '权限名称不能是特殊符号',
            'name.unique'        => '权限名称重复',
            'parent_id.required' => '请选择上级权限',
            'parent_id.numeric'  => '上级权限无效',
        ];
    }
}
