<?php
/**
 * Created by PhpStorm.
 * User: zjj
 * Date: 2017/10/20
 * Time: 00:55
 */

namespace App\Repositories;


use App\Models\Role;
use App\Query\AuthoritiesQuery;
use App\Query\RolesQuery;
use Illuminate\Container\Container as Application;

/**
 * Class RolesRepository
 * @package App\Repositories
 */
class RolesRepository extends Repository
{
    /**
     * @var AuthoritiesQuery
     */
    public $authQuery;

    /**
     * RolesRepository constructor.
     *
     * @param Application $app
     * @param RolesQuery  $query
     * @param AuthoritiesQuery $authQuery
     */
    public function __construct ( Application $app, RolesQuery $query, AuthoritiesQuery $authQuery )
    {
        parent::__construct($app);
        $this->query = $query;
        $this->authQuery = $authQuery;
    }

    /**
     * @return string
     */
    protected function currentModel (  )
    {
        return Role::class;
    }

    /**
     * 获得所有角色，并通过关联获得其可执行的权限信息
     *
     * @return mixed
     */
    public function getAllRoles (  )
    {
        return $this->model()->where($this->query->sureDisplayedRoles())
            ->with(['authorities' => function ($query) {
                $query->where($this->authQuery->sureDisplayedAuthorities())
                    ->select('authorities.id','authorities.name');
            }])
            ->select('id','grade','is_verify','created_at')
            ->get();
    }

    public function insertAuthoritiesRelation ( Role $role, array $authorities )
    {
        $role->authorities()->attach($authorities);
    }

}