<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Role;
use App\Permission;

class RolesController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        
        return view('roles.index', compact('roles'));
    }
    
    public function show(Role $role)
    {
        return view('roles.show', compact('role'));
    }
    
    public function create()
    {
        return view('roles.create');
    }
    
    public function store(Request $request)
    {
        $role = new Role();
        $role = new Role();
    
        $role->fill([
            'name' => $request->get('name')
        ]);
    
        $role->save();
        
        $roles = Role::all();
        
        return view('roles.index', compact('roles'));
    }
    
    public function edit(Role $role)
    {
        return view('roles.edit', compact('role'));
    }
    
    public function update(Request $request, Role $role)
    {
        foreach ($request->get('permissions') as $permission_id => $value) {

            $role->permissions()->attach(str_replace(" ","_", $permission_id));
        }
        
        foreach (Permission::get()->whereNotIn('id', array_keys($request->get('permissions'))) as $permission) {
            $role->permissions()->detach($permission->id);
        }
        
        return redirect()->route('role.show', ['id' => $role->id]);
        
    }
    
}
