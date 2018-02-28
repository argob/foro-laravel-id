<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Argob\MiArgentina\User;
use App\Role;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        
        return view('users.index', compact('users'));
    }
    
    public function show(User $user)
    {
        return view('users.show', compact('user'));
    }
    
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }
    
    public function update(Request $request, User $user)
    {
        foreach ($request->get('roles') as $rol_id => $rol_current) {
            $user->roles()->attach($rol_id);
        }
    
        foreach (Role::get()->whereNotIn('id', array_keys($request->get('roles'))) as $rol) {
            $user->roles()->detach($rol->id);
        }
        
        return redirect()->route('user.show', ['id' => $user->id]);

    }
}