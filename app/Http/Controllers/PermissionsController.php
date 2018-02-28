<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Permission;

class PermissionsController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        
        return view('permissions.index', compact('permissions'));
    }
    
    public function create()
    {
        return view('permissions.create');
    }
    
    public function store(Request $request)
    {
        $permission = new Permission();
        
        $permission->fill([
            'name' => $request->get('name')
        ]);
        
        $permission->save();
        
        $permissions = Permission::all();
        
        return view('permissions.index', compact('permissions'));
    }
}
