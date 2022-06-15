<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(Request $request)
    {
        $roles = (new Role())->all();
        return view('app.roles.index', ['roles' => $roles]);
    }

    public function create(Request $request)
    {
        return view('app.roles.create');
    }

    public function store(Request $request)
    {
        (new Role())->create([
            'name' => $request->role_name
        ]);

        return redirect()->route('roles.index');
    }
}
