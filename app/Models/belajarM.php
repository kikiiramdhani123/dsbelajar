<?php

namespace App\Models;

use CodeIgniter\Model;

class belajarM extends Model
{
    protected $table = 'belajar';
    protected $allowedFields = ['guru', 'mapel', 'kelas', 'nomerHp', 'link'];
}
