<?php

namespace App\Models;

use CodeIgniter\Model;

class MeetingModel extends Model
{
    protected $table = 'meeting';
    protected $primaryKey = 'id_meeting';
    protected $allowedFields = [
        'date', 'time', 'activity', 'notes', 'id_user'
    ];
}
