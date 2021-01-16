<?php

namespace App\Controllers;

use App\Models\guruM;
use App\Models\mapelM;
use App\Models\belajarM;
use App\Models\tugasM;
use CodeIgniter\I18n\Time;

class Admin extends BaseController
{
    protected $guruM;
    protected $mapelM;
    protected $belajarM;
    protected $tugasM;
    public function __construct()
    {
        $this->guruM = new guruM();
        $this->mapelM = new mapelM();
        $this->belajarM = new belajarM();
        $this->tugasM = new tugasM();
    }

    public function index()
    {
        $dataGuru = $this->guruM->orderBy('namaGuru', 'asc')->findAll();
        $dataMapel = $this->mapelM->orderBy('namaMapel', 'asc')->findAll();
        $data = [
            'title' => "Halaman Admin Tambah Mapel | Sibol DS",
            'dataGuru' => $dataGuru,
            'dataMapel' => $dataMapel
        ];
        return view('main/tambahMapel', $data);
    }
    public function indexTambahTugas()
    {
        session();
        $dataGuru = $this->guruM->orderBy('namaGuru', 'asc')->findAll();
        $dataMapel = $this->mapelM->orderBy('namaMapel', 'asc')->findAll();
        $data = [
            'title' => "Halaman Admin Tambah Tugas | Sibol DS",
            'dataGuru' => $dataGuru,
            'dataMapel' => $dataMapel,
            'validation' => \Config\Services::validation()
        ];
        return view('main/tambahTugas', $data);
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

    public function tambahTugas()
    {
        if (!$this->validate([
            'guru' => 'required',
            'mapel' => 'required',
            'kelas' => 'required',
            'deskripsiTugas' => 'required',
            'batasPengumpulan' => 'required',
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/tambahtugas')->withInput()->with('validation', $validation);
        }
        $myTime = new Time('now', 'Asia/Jakarta');
        $this->tugasM->save([
            'guru' => $this->request->getVar('guru'),
            'mapel' => $this->request->getVar('mapel'),
            'kelas'  => $this->request->getVar('kelas'),
            'pemberianTugas' => $myTime,
            'deskripsiTugas'  => $this->request->getVar('deskripsiTugas'),
            'batasPengumpulan'  => $this->request->getVar('batasPengumpulan'),
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan');
        return redirect()->to('/cektugas');
    }

    //--------------------------------------------------------------------

}
