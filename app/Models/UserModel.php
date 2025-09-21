<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table            = 'users';
    protected $primaryKey       = 'id';

    // We’ll pass only these fields when inserting
    protected $allowedFields    = ['name', 'email', 'password'];

    // We’re using DB’s TIMESTAMP defaults/ON UPDATE, so let CI4 not touch timestamps.
    protected $useTimestamps    = false;

    // Simple validation rules
    protected $validationRules = [
        'name'     => 'required|min_length[5]|max_length[255]',
        'email'    => 'required|valid_email|max_length[255]|is_unique[users.email]',
        'password' => 'required|min_length[6]|max_length[255]',
    ];
}
