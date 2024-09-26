<?php

namespace App\Models;

use CodeIgniter\Model;

class CatatanMatkulModel extends Model
{
    protected $table = 'catatanmatkuls';
    protected $primaryKey = 'id_catatan';
    protected $allowedFields = ['catatan', 'id_user', 'id_matkul'];

    public function getCatatanByIdMatkul($id_matkul)
    {
        return $this->where('id_matkul', $id_matkul)->findAll();
    }
    

}
