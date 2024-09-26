<?php

namespace App\Models;

use CodeIgniter\Model;

class JadwalMatkulsModel extends Model
{
    protected $table = 'jadwalmatkuls';
    protected $primaryKey = 'id_jadwalmatkul';
    protected $allowedFields = [
        'matkul', 'semester', 'mulai', 'selesai', 'hari', 'ruangan', 'id_user'
    ];
}
