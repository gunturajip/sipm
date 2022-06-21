<?php

namespace App\Controllers;

use App\Models\MateriModel;
use App\Models\SoalModel;

class Belajar extends BaseController
{

    protected $materi;

    function __construct()
    {
        $this->materi = new MateriModel();
        $this->soal = new SoalModel();
    }

    public function index()
    {
        return view('belajar/index', [
            "title" => "Belajar",
            "materi" => $this->materi->findAll(),
            "soal" => $this->soal->findAll()
        ]);
    }

    public function soal()
    {
        return view('belajar/soalBelajar', [
            "title" => "Soal Belajar"
        ]);
    }

    public function materi()
    {
        return view('belajar/materiBelajar', [
            "title" => "Materi Belajar"
        ]);
    }
}
