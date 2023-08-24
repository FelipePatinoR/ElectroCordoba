<?php

namespace App\Controllers;

class E_Soldadura extends BaseController
{
    public function accesorios(): string
    {
        return view('Tienda/E_Soldadura/acc');
    }
    public function arco_manual(): string
    {
        return view('Tienda/E_Soldadura/a_m');
    }
    public function mig(): string
    {
        return view('Tienda/E_Soldadura/mig');
    }
   


}