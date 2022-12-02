<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:role_index')->only('index');
    }
    public function index()
    {
        return view('admin.role.index');

    }

}
