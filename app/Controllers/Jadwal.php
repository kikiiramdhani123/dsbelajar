<?php

namespace App\Controllers;

class Jadwal extends BaseController
{

    public function index()
    {
        $data = [
            'title' => "Jadwal Pelajaran | Sibol DS",
        ];
        return view('main/jadwalPelajaran', $data);
    }

    //--------------------------------------------------------------------

}
