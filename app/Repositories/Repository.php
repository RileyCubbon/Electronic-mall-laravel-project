<?php
/**
 * Created by PhpStorm.
 * User: zjj
 * Date: 2017/10/19
 * Time: 23:03
 */

namespace App\Repositories;

use App\Interfaces\RepositoryInterface;
use Illuminate\Container\Container as Application;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Mockery\Exception;

/**
 * Class Repository
 * @package App\Repositories
 */
abstract class Repository implements RepositoryInterface
{
    /**
     * 需要用到到查询器
     * @var $query
     */
    protected $query;
    /**
     * 需要用到到模型
     * @var $model
     */
    protected $model;
    /**
     * 依赖注入容器
     * @var Application
     */
    protected $app;

    /**
     * Repository constructor.
     *
     * @param Application $app
     */
    public function __construct ( Application $app )
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * 获得当前所需要到模型
     * @return mixed
     */
    abstract protected function currentModel ();

    /**
     * 根据得到模型通过依赖注入容器创建一个新模型实例
     */
    protected function makeModel ()
    {
        $model = $this->app->make($this->currentModel());
        if ( !$model instanceof Eloquent ) {
            throw new Exception("Class {$this->currentModel()} must be an instance of Illuminate\\Database\\Eloquent\\Model");
        }
        $this->model = $model;
    }

    /**
     * 返回创建好到模型实例
     * @return mixed
     */
    public function model ()
    {
        return $this->model;
    }
}