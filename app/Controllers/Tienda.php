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
    public function main_es(): string
    {
        return view('Tienda/E_Soldadura/main_es');
    }
    public function main_he(): string
    {
        return view('Tienda/H_Electricas/main_he');
    }
    public function main_ej(): string
    {
        return view('Tienda/E_Jardineria/main_ej');
    }
    public function main_emn(): string
    {
        return view('Tienda/E_Medicion_Nivelacion/main_emn');
    }


}