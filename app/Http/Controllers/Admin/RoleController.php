<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:roles_index')->only('index');
    }
    public function index()
    {

        $pageConfigs = ['sidebarCollapsed' => false];
        $breadcrumbs = [['link' => "/", 'name' => "Admin"], ['link' => "javascript:void(0)", 'name' => "Role"], ['name' => "List"]];

        $roles_actives=Role::all()->where('status','=','2');

        return view('admin.role.index',['pageConfigs'=>$pageConfigs,'breadcrumbs'=>$breadcrumbs,'roles_actives'=>$roles_actives]);

    }

}
