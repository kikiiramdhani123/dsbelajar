<?php

namespace App\Models;

use CodeIgniter\Model;

class tugasM extends Model
{
    protected $table = 'tugas';
    protected $allowedFields = ['guru', 'mapel', 'kelas', 'deskripsiTugas', 'pemberianTugas', 'batasPengumpulan'];

    public function search($keyword)
    {
        // $builder = $this->table('tugas');
        // $builder->like('mapel', $keyword);
        // return $builder;
        return $this->table('tugas')->like('mapel', $keyword);
    }
}
