<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table = 'matkuls';
    protected $primaryKey = 'id_matkul';
    protected $allowedFields = ['matkul', 'semester', 'gambar', 'id_user'];

    public function getMatkulsByUser($userId)
    {
        return $this->where('id_user', $userId)->findAll();
    }
}
