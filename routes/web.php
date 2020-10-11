<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::middleware(['auth'])->group(function(){
    
    // Inicio rutas módulo usuarios
    // Inicio rutas roles

    Route::post('usuarios/roles/store','RoleController@store')->name('roles.store')
            ->middleware('permission:usuarios/roles.create');
    
    Route::get('usuarios/roles','RoleController@index')->name('roles.index')
            ->middleware('permission:usuarios/roles.index');

    Route::get('usuarios/roles/create','RoleController@create')->name('roles.create')
            ->middleware('permission:usuarios/roles.create');
    
    Route::put('usuarios/roles/{role}','RoleController@update')->name('roles.update')
            ->middleware('permission:usuarios/roles.create');

    Route::get('usuarios/roles/{role}','RoleController@show')->name('roles.show')
            ->middleware('permission:usuarios/roles.show');

    Route::delete('usuarios/roles/{role}','RoleController@destroy')->name('roles.destroy')
            ->middleware('permission:usuarios/roles.destroy');

    Route::get('usuarios/roles/{role}','RoleController@edit')->name('roles.edit')
            ->middleware('permission:usuarios/roles.edit');
    
    // Fin rutas roles

    // Inicio rutas usuarios

    Route::get('usuarios/users','UserController@index')->name('users.index')
        ->middleware('permission:usuarios/users.index');

    Route::put('usuarios/users/{role}','UserController@update')->name('users.update')
        ->middleware('permission:usuarios/users.create');

    Route::get('usuarios/users/{role}','UserController@show')->name('users.show')
        ->middleware('permission:usuarios/users.show');

    Route::delete('usuarios/users/{role}','UserController@destroy')->name('users.destroy')
        ->middleware('permission:usuarios/users.destroy');

    Route::get('usuarios/users/{role}','UserController@edit')->name('users.edit')
        ->middleware('permission:usuarios/users.edit');

    // Fin rutas usuarios
    // Fin rutas módulo usuarios

    // Inicio rutas módulo comercial
    // Inicio rutas cliente

    Route::post('comercial/cliente/store','ClienteController@store')->name('cliente.store')
    ->middleware('permission:comercial/cliente.create');

    Route::get('comercial/cliente','ClienteController@index')->name('cliente.index')
    ->middleware('permission:comercial/cliente.index');

    Route::get('comercial/cliente/create','ClienteController@create')->name('cliente.create')
    ->middleware('permission:comercial/cliente.create');

    Route::put('comercial/cliente/{role}','ClienteController@update')->name('cliente.update')
    ->middleware('permission:comercial/cliente.create');

    Route::get('comercial/cliente/{role}','ClienteController@show')->name('cliente.show')
    ->middleware('permission:comercial/cliente.show');

    Route::delete('comercial/cliente/{role}','ClienteController@destroy')->name('cliente.destroy')
    ->middleware('permission:comercial/cliente.destroy');

    Route::get('comercial/cliente/{role}','ClienteController@edit')->name('cliente.edit')
    ->middleware('permission:comercial/cliente.edit');

    // Fin rutas cliente
    // Fin rutas módulo comercial

});





