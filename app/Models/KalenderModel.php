<?php

namespace App\Models;

use CodeIgniter\Model;

class KalenderModel extends Model
{
    protected $table = 'kalenders';
    protected $primaryKey = 'id_kalender';
    protected $allowedFields = ['catatan', 'tanggal', 'id_user'];
}

?>
