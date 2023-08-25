<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('main');
    }

    public function index():string
    {
        return viw('login');
    }

    public function inicio()
    {
        return viw('inicio');
    }
}   
