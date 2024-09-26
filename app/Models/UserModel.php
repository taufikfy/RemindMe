<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_user';
    protected $allowedFields = [
        'nama', 'username', 'email', 'profile_picture', 'password', 'semester', 'nim', 'prodi', 'instansi'
    ];
}
