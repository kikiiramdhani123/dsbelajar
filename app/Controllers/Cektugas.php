<?php

namespace App\Controllers;

use App\Models\tugasM;

class Cektugas extends BaseController
{
    protected $tugasM;
    public function __construct()
    {
        $this->tugasM = new tugasM();
    }
    public function index()
    {
        // $dataTugas = $this->tugasM->orderBy('pemberianTugas', 'DESC')->findAll();
        //$dataBelajar = $this->belajarM->findAll();
        $keyword = $this->request->getVar('keyword');
        if ($keyword) {
            $tugas = $this->tugasM->orderBy('pemberianTugas', 'DESC')->search($keyword);
        } else {
            $tugas = $this->tugasM->orderBy('pemberianTugas', 'DESC');
        }

        $currentPage = $this->request->getVar('page_tugas') ? $this->request->getVar('page_tugas') : 1;
        $data = [
            'title' => "Cek Tugas | Sibol DS",
            //'dataBelajar' => $dataBelajar,
            // 'dataTugas' => $dataTugas,
            'dataTugas' => $tugas->orderBy('pemberianTugas', 'DESC')->paginate(10, 'tugas'),
            'pager' => $this->tugasM->pager,
            'currentPage' => $currentPage


        ];
        return view('main/cekTugas', $data);
    }

    //--------------------------------------------------------------------

}
