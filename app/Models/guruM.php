<?php

namespace App\Models;

use CodeIgniter\Model;

class guruM extends Model
{
    protected $table = 'guru';
    protected $allowedFields = ['namaGuru', 'nomerHp'];
}
