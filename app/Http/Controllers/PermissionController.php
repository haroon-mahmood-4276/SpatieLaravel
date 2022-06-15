<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index(Request $request)
    {
        $permissions = (new Permission())->all();
        return view('app.permissions.index', ['permissions' => $permissions]);
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
