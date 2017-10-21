<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RoleRequest;
use App\Repositories\RolesRepository as Role;
use App\Repositories\AuthoritiesRepository as Authorities;
use App\Http\Controllers\Controller;

/**
 * Class RolesController
 * @package App\Http\Controllers\Admin
 */
class RolesController extends Controller
{
    /**
     * @var Role
     */
    protected $role;
    /**
     * @var Authorities
     */
    protected $authorities;

    /**
     * RolesController constructor.
     *
     * @param Role        $role
     * @param Authorities $authorities
     */
    public function __construct ( Role $role, Authorities $authorities )
    {
        $this->role        = $role;
        $this->authorities = $authorities;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index ()
    {
        $roles = $this->role->getAllRoles();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * 获得角色对应的所有权限信息，渲染视图中
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create ()
    {
        $authorities = $this->authorities->getFormatAuthorities();
        return view('admin.roles.create', compact('authorities'));
    }

    /**
     * 判断是否有权限需要插入到中间表中
     *
     * @param RoleRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store ( RoleRequest $request )
    {
        $role        = $this->role->model()->create($request->only('grade'));
        $authorities = $request->has('authority_id') ? $request->get('authority_id') : [];
        if ( !empty($authorities) ) {
            $this->role->insertAuthoritiesRelation($authorities, $role);
        }

        return redirect()->route('roles.index');
    }

    /**
     * 修改角色的审核状态
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show ( $id )
    {
        $this->role->model()->find($id)->update([ 'is_verify' => 1 ]);

        return redirect()->route('roles.index');
    }

    /**
     * 获得角色实例、角色所有权限、所有可分配权限，渲染到视图中，
     * 角色所有权限转换为数组，用于判断用户是否有某权限，如果有
     * 则默认选中
     *
     * @param $id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit ( $id )
    {
        $role        = $this->role->model()->find($id);
        $authorities = $this->authorities->getFormatAuthorities();
        $possessed   = $role->authorities()->select('authorities.id')->get()
            ->where('is_delete', 0)
            ->pluck('id')->toArray();

        return view('admin.roles.distribution', compact('authorities', 'role', 'possessed'));
    }

    /**
     * 更新角色权限关系到中间表中
     *
     * @param RoleRequest $request
     * @param int         $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update ( RoleRequest $request, $id )
    {
        $role = $this->role->model()->find($id);
        $this->role->insertAuthoritiesRelation($role, $request->get('authority_id'));

        return redirect()->route('roles.index');
    }

    /**
     * 软删除角色
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy ( $id )
    {
        $this->role->model()->find($id)->update([ 'is_delete' => 1 ]);

        return redirect()->route('roles.index');
    }
}
