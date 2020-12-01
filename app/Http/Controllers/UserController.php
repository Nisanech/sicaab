<?php

namespace sicaab\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use sicaab\User;

class UserController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $users=User::paginate();

        return view('administrador.usuarios.index', compact('users'));
    }

    public function show(User $user)
    {
        return view('administrador.usuarios.show', compact('user'));
    }

    public function edit(User $user)
    {
        return view('administrador.usuarios.edit', compact('user'));
    }

    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }
}
