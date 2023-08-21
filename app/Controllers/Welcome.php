<?php

namespace App\Controllers;

class Welcome extends BaseController
{
    public function welcome_page(): string
    {
        return view('Welcome/welcome');
    }

    public function login_page(): string
    {
        return view('Login/login');
    }
}