<?php

namespace App\Models;

use CodeIgniter\Model;

class CompraModel extends Model
{
    protected $table            = 'compra';
    protected $primaryKey       = 'id_venta';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['cantidad', 'id_usuario'];

    

}
