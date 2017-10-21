<?php
/**
 * Created by PhpStorm.
 * User: zjj
 * Date: 2017/10/20
 * Time: 00:57
 */

namespace App\Query;


use App\Models\Role;

class RolesQuery
{
    public function sureDisplayedRoles (  )
    {
        return [
            'is_delete' => Role::UN_DELETE,
        ];
    }
}