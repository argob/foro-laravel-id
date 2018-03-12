<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    return redirect('/foro');
});

Auth::routes();

Route::get('usuarios', 'UsersController@index')->name('user.index')->middleware(['permission:users.show']);
Route::get('usuarios/{user}', 'UsersController@show')->name('user.show')->middleware(['permission:users.show']);
Route::get('usuarios/{user}/editar', 'UsersController@edit')->name('user.edit')->middleware(['permission:users.edit']);
Route::patch('usuarios/{user}', 'UsersController@update')->middleware(['permission:users.edit']);
Route::delete('usuarios/{user}', 'UsersController@delete')->middleware(['permission:users.delete']);

Route::get('roles', 'RolesController@index')->name('role.index');
Route::get('roles/crear', 'RolesController@create')->name('role.create');
Route::get('roles/{role}', 'RolesController@show')->name('role.show');
Route::patch('roles/{role}', 'RolesController@update');
Route::post('roles', 'RolesController@store');
Route::get('roles/{role}/editar', 'RolesController@edit')->name('role.edit');

Route::get('permisos', 'PermissionsController@index')->name('permission.index');
Route::get('permisos/crear', 'PermissionsController@create')->name('permission.create');
Route::post('permisos', 'PermissionsController@store');

