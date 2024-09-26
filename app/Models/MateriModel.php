<?php

namespace App\Models;

use CodeIgniter\Model;

class MateriModel extends Model
{
    protected $table = 'materis';
    protected $primaryKey = 'id_materi';
    protected $allowedFields = ['materi', 'id_matkul', 'id_user'];

    public function getMateriByIdMatkul($id_matkul)
    {
        return $this->where('id_matkul', $id_matkul)->findAll();
    }
}

?>
