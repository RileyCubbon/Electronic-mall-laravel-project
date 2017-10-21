<?php

/**
 * Created by PhpStorm.
 * User: zjj
 * Date: 2017/10/19
 * Time: 22:51
 */
namespace App\Query;

use App\Models\Manager;

class ManagersQuery
{
    /*
     * @return array
     */
    public function managerLoginCondition (  )
    {
        return [
            'is_delete' => Manager::UN_DELETE,
            'is_verify' => Manager::IS_VERIFY,
        ];
    }

    public function sureDisplayedManagers (  )
    {
        return [
            'is_delete' => Manager::UN_DELETE,
        ];
    }
}