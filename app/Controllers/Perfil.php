<?php

namespace App\Controllers;

class Perfil extends BaseController
{
    public function perfil(): string
    {
        return view('Perfil/perfil');
    }

}