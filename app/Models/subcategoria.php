<?php

namespace App\Models;

use CodeIgniter\Model;

class SubCategoryModel extends Model
{
    protected $table            = 'subcategoria';
    protected $primaryKey       = 'id_subcategoria';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['nombre', 'id_categoria'];

    

}
