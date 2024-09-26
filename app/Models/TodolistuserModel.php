<?php

namespace App\Models;

use CodeIgniter\Model;

class TodolistuserModel extends Model
{
    protected $table = 'todolistusers';
    protected $primaryKey = 'id_todolistuser';
    protected $allowedFields = [
        'catatan', 'keterangan', 'priority', 'selesai', 'id_user'
    ];
}
