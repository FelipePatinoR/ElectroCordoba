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

    // Obtener un usuario por los datos proporcionados
    public function obtenerUsuario($data)
    {
        return $this->db->table($this->table)->where($data)->get()->getRow();
    }

    // Obtener la contraseña de un usuario por su ID
    public function obtenerContraseñaUsuario($id)
    {
        return $this->db->table($this->table)->select('contraseña')->where($this->primaryKey, $id)->get()->getRow()->contraseña;
    }

    // Agregar métodos de validación y sanitización aquí si es necesario
}