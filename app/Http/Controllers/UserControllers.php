<?php

namespace App\Http\Controllers;

use App\Models\User;
class UserControllers extends Controller
{
    public function index()
        {
            return view('users',[
                'users' => User::all()
                ]);

        }
}
