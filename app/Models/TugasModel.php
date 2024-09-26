<?php

namespace App\Models;

use CodeIgniter\Model;

class TugasModel extends Model
{
    protected $table      = 'tugass';
    protected $primaryKey = 'id_tugas';
    protected $allowedFields = ['namatugas', 'deskripsi', 'deadline', 'jam', 'file', 'id_user', 'id_matkul'];

    public function getTugasByIdMatkul($id_matkul)
    {
        return $this->where('id_matkul', $id_matkul)->findAll();
    }
    
}
