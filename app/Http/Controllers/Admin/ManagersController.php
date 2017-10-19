<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagersController extends Controller
{
    public function index ()
    {
        return view('admin.managers.index');
    }

    public function create ()
    {
        return view('admin.managers.create');
    }

    public function edit ()
    {
        return view('admin.managers.edit');
    }

    public function role (  )
    {
        return view('admin.roles.index');
    }
}
