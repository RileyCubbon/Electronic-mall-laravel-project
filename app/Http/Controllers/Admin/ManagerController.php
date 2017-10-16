<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManagerController extends Controller
{
    public function index ()
    {
        return view('admin.manager.index');
    }

    public function create ()
    {
        return view('admin.manager.create');
    }

    public function edit ()
    {
        return view('admin.manager.edit');
    }
}
