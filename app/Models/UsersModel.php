<?php

namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model
{
    protected $table = 'users';

    public function getUsers()
    {
        return $this->findAll();
    }
}
