<?php
/**
 * Created by PhpStorm.
 * User: zjj
 * Date: 2017/10/20
 * Time: 01:16
 */

namespace App\Query;


use App\Models\Authority;

class AuthoritiesQuery
{
    public function sureDisplayedAuthorities (  )
    {
        return [
            'authorities.is_delete' => Authority::UN_DELETE,
        ];
    }

    public function authoritiesCreatingCondition (  )
    {
        return [
            'is_delete' => Authority::UN_DELETE,
            'parent_id' => Authority::TOP_LEVEL_AUTHORITY,
        ];
    }
}