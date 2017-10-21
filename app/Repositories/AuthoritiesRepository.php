<?php
/**
 * Created by PhpStorm.
 * User: zjj
 * Date: 2017/10/20
 * Time: 01:16
 */

namespace App\Repositories;


use App\Models\Authority;
use App\Query\AuthoritiesQuery;
use App\Traits\DataManipulation;
use Illuminate\Container\Container as Application;

/**
 * Class AuthoritiesRepository
 * @package App\Repositories
 */
class AuthoritiesRepository extends Repository
{

    use DataManipulation;

    /**
     * AuthoritiesRepository constructor.
     *
     * @param Application      $app
     * @param AuthoritiesQuery $query
     */
    public function __construct ( Application $app, AuthoritiesQuery $query )
    {
        parent::__construct($app);
        $this->query = $query;
    }

    /**
     * @return string
     */
    protected function currentModel ()
    {
        return Authority::class;
    }

    /**
     * 获得所有经过格式化排序的所有权限，并获得其上级权限名称
     *
     * @return \Illuminate\Support\Collection
     */
    public function getAllAuthorities ()
    {
        $collection = $this->model()->where($this->query->sureDisplayedAuthorities())
            ->with([ 'parent' => function ( $query ) {
                $query->where($this->query->sureDisplayedAuthorities())
                    ->select('id', 'name');
            } ])
            ->select('id', 'name', 'parent_id', 'user', 'created_at')
            ->get();

        return collect($this->recursionGetFormatData($collection));
    }

    /**
     * 获得所有顶级权限
     *
     * @return \Illuminate\Support\Collection
     */
    public function getTopLevelAuthorities ()
    {
        return $this->model()->where($this->query->authoritiesCreatingCondition())
            ->select('id', 'name')
            ->get();
    }

    /**
     * 返回格式化的数据集合
     *
     * @return mixed
     */
    public function getFormatAuthorities (  )
    {
        return $this->model()->where($this->query->authoritiesCreatingCondition())
            ->with([
                'children' => function ($query) {
                    $query->where($this->query->sureDisplayedAuthorities())
                        ->select('id','name','parent_id');
                },
            ])
            ->select('id','name')
            ->get();
    }
}