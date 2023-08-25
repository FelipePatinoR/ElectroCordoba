<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
<<<<<<< HEAD

    public function obtenerUsuario($data)
    {
        $Usuario = $this->db->table('usuario');
        $Usuario->where($data); 
        return $Usuario->get()->getResultArray();
    }
}
=======
    protected $table = 'usuario';
    protected $primaryKey = 'id_usuario';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $allowedFields = ['nombre', 'correo', 'telefono', 'contraseña'];

    public function obtenerUsuario($data)
    {
        return $this->where($data)->first(); // Utilizamos first() en lugar de getRowArray()
    }
}
>>>>>>> 63b59f55a6ddb3d5095116e125871881e8f1c56b
