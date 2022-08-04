<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{

    public function list()
    {

        return view('users.list', [
            'users' => User::all()
        ]);

    }

    public function addForm()
    {

        return view('users.add');

    }
    
    public function add()
    {

        $attributes = request()->validate([
            'first' => 'required',
            'last' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);

        $user = new User();
        $user->first = $attributes['first'];
        $user->last = $attributes['last'];
        $user->email = $attributes['email'];
        $user->password = bcrypt($attributes['password']);
        $user->save();

        return redirect('/console/users/list')
            ->with('message', 'User has been added!');

    }
}
