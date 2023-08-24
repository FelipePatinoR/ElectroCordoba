<?php

namespace App\Controllers;

class H_Electricas extends BaseController
{
    public function atornilladores(): string
    {
        return view('Tienda/H_Electricas/atorn');
    }
    public function taladros(): string
    {
        return view('Tienda/H_Electricas/talad');
    }
}