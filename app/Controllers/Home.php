<?php

namespace App\Controllers;

use App\Models\belajarM;

class Home extends BaseController
{
	protected $belajarM;
	public function __construct()
	{
		$this->belajarM = new belajarM();
	}
	public function index()
	{
		$dataKelas10 = $this->belajarM->where('kelas', '10')->findAll();
		$dataKelas11 = $this->belajarM->where('kelas', '11')->findAll();
		$dataKelas12 = $this->belajarM->where('kelas', '12')->findAll();
		//$dataBelajar = $this->belajarM->findAll();
		$data = [
			'title' => "Halaman Beranda | Sibol DS",
			//'dataBelajar' => $dataBelajar,
			'dataKelas10' => $dataKelas10,
			'dataKelas11' => $dataKelas11,
			'dataKelas12' => $dataKelas12

		];
		return view('main/home', $data);
	}

	//--------------------------------------------------------------------

}
