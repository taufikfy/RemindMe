<?php

namespace App\Models;

use CodeIgniter\Model;

class TimelinetugasModel extends Model
{
    protected $table = 'timelinetugas';
    protected $primaryKey = 'id_timelinetugas';
    protected $allowedFields = ['matkul', 'deskripsi', 'deadline', 'id_user'];

}
