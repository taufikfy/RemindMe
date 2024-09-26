<?php

namespace App\Models;

use CodeIgniter\Model;

class BelajarModel extends Model
{
    protected $table = 'belajar';
    protected $primaryKey = 'id_belajar';
    protected $allowedFields = [
        'date', 'time', 'activity', 'notes', 'id_user'
    ];
}
