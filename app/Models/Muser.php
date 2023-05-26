<?php

namespace App\Models;

use CodeIgniter\Model;

class Muser extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tb_user';
    protected $primaryKey       = 'user_id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $protectFields    = true;
    protected $allowedFields    = [
        'user_id',
        'user_username',
        'user_password',
        'user_email'
    ];
}
