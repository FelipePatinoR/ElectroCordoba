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
    public function register_page(): string
    {
        return view('Login/register');
    }

    public function prueba(): string
    {
        return view('prueba');
    }
}
