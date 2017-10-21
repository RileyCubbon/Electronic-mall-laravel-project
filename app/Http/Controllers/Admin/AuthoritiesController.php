<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AuthoritiesRequest;
use App\Http\Controllers\Controller;
use App\Repositories\AuthoritiesRepository as Authority;

/**
 * Class AuthoritiesController
 * @package App\Http\Controllers\Admin
 */
class AuthoritiesController extends Controller
{
    /**
     * @var Authority
     */
    public $authority;

    /**
     * AuthoritiesController constructor.
     *
     * @param Authority $authority
     */
    public function __construct ( Authority $authority )
    {
        $this->authority = $authority;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index ()
    {
        $authorities = $this->authority->getAllAuthorities();
        return view('admin.authorities.index', compact('authorities'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create ()
    {
        $authorities = $this->authority->getTopLevelAuthorities();
        return view('admin.authorities.create', compact('authorities'));
    }

    /**
     * @param AuthoritiesRequest $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store ( AuthoritiesRequest $request )
    {
        $data = array_merge(
            $request->only('parent_id', 'name'),
            [ 'user' => \Auth::guard('manager')->user()->name ]
        );
        $this->authority->model()->create($data);
        return redirect()->route('authorities.index');
    }

    /**
     * 软删除权限
     *
     * @param $id
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy ( $id )
    {
        $this->authority->model()->find($id)->update(['is_delete' => 1]);
        return redirect()->route('authorities.index');
    }
}
