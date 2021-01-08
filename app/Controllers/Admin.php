<?php

namespace App\Controllers;

use App\Models\guruM;
use App\Models\mapelM;
use App\Models\belajarM;

class Admin extends BaseController
{
    protected $guruM;
    protected $mapelM;
    protected $belajarM;
    public function __construct()
    {
        $this->guruM = new guruM();
        $this->mapelM = new mapelM();
        $this->belajarM = new belajarM();
    }

    public function index()
    {
        $dataGuru = $this->guruM->orderBy('namaGuru', 'asc')->findAll();
        $dataMapel = $this->mapelM->orderBy('namaMapel', 'asc')->findAll();
        $data = [
            'title' => "Halaman Admin | Sibol DS",
            'dataGuru' => $dataGuru,
            'dataMapel' => $dataMapel
        ];
        return view('main/tambahMapel', $data);
    }


    public function tambahMapel()
    {
        $this->belajarM->save([
            'guru' => $this->request->getVar('guru'),
            'mapel' => $this->request->getVar('mapel'),
            'kelas'  => $this->request->getVar('kelas'),
            'nomerHp'  => $this->request->getVar('nomerHp'),
            'link'  => $this->request->getVar('link'),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/');
    }

    //--------------------------------------------------------------------

}
