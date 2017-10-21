<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize ()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules ()
    {
        $this->action = request()->method();
        $store        = [
            'grade'        => 'required|string|max:10',
            'authority_id' => 'array',
        ];
        $update       = [
            'authority_id' => 'required|array',
        ];

        switch ( $this->action ) {
            case 'POST':
                return $store;
            case 'PUT':
                return $update;
        }
    }

    public function messages ()
    {
        $store  = [
            'grade.required'     => '角色名称不能为空',
            'grade.string'       => '角色名名称中不能出现数字或特殊字符',
            'grade.max'          => '角色名称最大不能超过10个字符',
            'authority_id.array' => '角色权限格式出错',
        ];
        $update = [
            'authority_id.required' => '角色权限为必选项',
            'authority_id.array'    => '角色权限格式出错',
        ];

        switch ( $this->action ) {
            case 'POST':
                return $store;
            case 'PUT':
                return $update;
        }
    }
}
