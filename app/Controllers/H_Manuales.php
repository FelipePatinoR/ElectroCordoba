<?php

namespace App\Controllers;

class H_Manuales extends BaseController
{
    public function alicates_pinzas(): string
    {
        return view('Tienda/H_Manuales/alic_y_pin');
    }
    public function destornilladores(): string
    {
        return view('Tienda/H_Manuales/destor');
    }
    public function martillos(): string
    {
        return view('Tienda/H_Manuales/marti');
    }
   


}