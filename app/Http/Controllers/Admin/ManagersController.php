<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ManagersRepository as Manager;

/**
 * Class ManagersController
 * @package App\Http\Controllers\Admin
 */
class ManagersController extends Controller
{
    /**
     * @var Manager
     */
    protected $manager;

    /**
     * ManagersController constructor.
     *
     * @param Manager $manager
     */
    public function __construct ( Manager $manager )
    {
        $this->manager = $manager;
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index ()
    {
        $managers = $this->manager->getAllManagers();
        return view('admin.managers.index',compact('managers'));
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function create ()
    {
        return view('admin.managers.create');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit ()
    {
        return view('admin.managers.edit');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function role (  )
    {
        return view('admin.roles.index');
    }
}
