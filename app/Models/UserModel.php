<?php
namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{

    public function obtenerUsuario($data)
    {
        $Usuario = $this->db->table('usuario');
        $Usuario->where($data); 
        return $Usuario->get()->getResultArray();
    }
}