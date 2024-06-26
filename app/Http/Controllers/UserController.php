<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function register() {
        return view('register.index');
    }

    public function registerStep2() {
        return view('register.2-form');
    }
}
