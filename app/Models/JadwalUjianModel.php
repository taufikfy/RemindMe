<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalUjianModel extends Model
{
    protected $table = 'jadwalujians';
    protected $primaryKey = 'id_jadwalujian';
    protected $allowedFields = [
        'matkul', 'mulai', 'selesai', 'hari', 'ruangan', 'id_user'
    ];
}
