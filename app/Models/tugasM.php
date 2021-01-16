<?php

namespace App\Models;

use CodeIgniter\Model;

class tugasM extends Model
{
    protected $table = 'tugas';
    protected $allowedFields = ['guru', 'mapel', 'kelas', 'deskripsiTugas', 'pemberianTugas', 'batasPengumpulan'];
}
