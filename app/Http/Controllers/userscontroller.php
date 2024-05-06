<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userscontroller extends Controller
{
    public function index()
    {
        return view('users');
    }

    public function submit(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Now you can use $username and $password as needed
        echo "Username: " . $username . "<br>";
        echo "Password: " . $password;
    }

}
