<?php

namespace App\Controllers;

use App\Models\MateriModel;
use App\Models\SoalModel;

class Belajar extends BaseController
{

    protected $materiBelajar;
    protected $soalBelajar;

    function __construct()
    {
        $this->materiBelajar = new MateriModel();
        $this->soalBelajar = new SoalModel();
    }

    public function soal()
    {
        return view('belajar/soalBelajar', [
            "title" => "Belajar"
        ]);
    }

    public function materi()
    {
        return view('belajar/materiBelajar', [
            "title" => "Materi"
        ]);
    }
}
