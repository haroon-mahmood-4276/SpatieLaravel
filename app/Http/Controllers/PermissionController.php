<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionController extends Controller
{
    public function index(Request $request)
    {
        $roles = (new Role())->all();
        $permissions = (new Permission())->all();
        return view('app.permissions.index', ['roles' => $roles, 'permissions' => $permissions]);
    }

    public function create(Request $request)
    {
        return view('app.permissions.create');
    }

    public function store(Request $request)
    {
        (new Permission())->create([
            'name' => $request->permission_name
        ]);

        return redirect()->route('permissions.index');
    }
}
