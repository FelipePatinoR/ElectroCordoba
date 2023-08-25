<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
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