<?php

namespace App\Models;

use CodeIgniter\Model;

class TodolistgroupModel extends Model
{
    protected $table = 'todolistgroup';
    protected $primaryKey = 'id_todolistgroup';
    protected $allowedFields = [
        'catatan', 'keterangan', 'priority', 'selesai', 'id_user'
    ];
}
