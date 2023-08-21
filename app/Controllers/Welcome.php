<?php

namespace App\Controllers;

class Welcome extends BaseController
{
    public function welcome_page(): string
    {
        return view('welcome');
    }

    public function login_page(): string
    {
        return view('login.php');
    }
}