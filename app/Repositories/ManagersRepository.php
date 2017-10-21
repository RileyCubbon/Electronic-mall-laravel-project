<?php

/**
 * Created by PhpStorm.
 * User: zjj
 * Date: 2017/10/19
 * Time: 23:00
 */
namespace App\Repositories;

use App\Models\Manager;
use App\Query\ManagersQuery;
use Illuminate\Container\Container as Application;

class ManagersRepository extends Repository
{
    public function __construct ( Application $app, ManagersQuery $query)
    {
        parent::__construct($app);
        $this->query = $query;
    }

    protected function currentModel (  )
    {
        return Manager::class;
    }

    public function getAllManagers (  )
    {
        return $this->model()->where($this->query->sureDisplayedManagers())
            ->select('id','name','email','created_user_name','is_verify','created_at')
            ->get();
    }
}