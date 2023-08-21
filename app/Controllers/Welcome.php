<?php

namespace App\Controllers;

class Welcome extends BaseController
{
    public function WelcomePag(): string
    {
        return view('welcome');
    }

    public function Login(): string
    {
        return view('login');
    }
}
