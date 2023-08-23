<?php

namespace App\Controllers;

class Tienda extends BaseController
{
    public function tienda_main(): string
    {
        return view('Tienda/tienda_virtual');
    }
    public function main_hm(): string
    {
        return view('Tienda/H_Manuales/main_hm');
    }

}