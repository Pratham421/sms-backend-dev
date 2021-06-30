<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function login()
    {
        request()->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = array(
            "email" => request("email"),
            "password" => request("password")
        );

        if (Auth::attempt($credentials)) {
            return 'exit!';
        }

        return 'Error';

    }
}
