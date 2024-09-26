<?php

namespace App\Models;

use CodeIgniter\Model;

class MessageModel extends Model
{
    protected $table = 'message';
    protected $primaryKey = 'id_message';
    protected $allowedFields = [
        'message', 'id_user'
    ];
}
