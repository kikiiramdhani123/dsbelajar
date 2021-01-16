<?php

namespace App\Controllers;

use App\Models\tugasM;

class Tugas extends BaseController
{
    protected $tugasM;
    public function __construct()
    {
        $this->tugasM = new tugasM();
    }
    public function index()
    {
        $dataTugas = $this->tugasM->orderBy('pemberianTugas', 'DESC')->findAll();
        //$dataBelajar = $this->belajarM->findAll();
        $data = [
            'title' => "Cek Tugas | Sibol DS",
            //'dataBelajar' => $dataBelajar,
            'dataTugas' => $dataTugas,


        ];
        return view('main/cekTugas', $data);
    }

    //--------------------------------------------------------------------

}
