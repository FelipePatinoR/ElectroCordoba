<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'usuario';
    protected $primaryKey       = 'id_usu';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['email_usu', 'nombre_usu','tel_usu','cont_usu'];

    

}
