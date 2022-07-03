<?php

namespace App\Controllers;

use App\Models\KelasModel;
use App\Models\BabModel;
use App\Models\MateriModel;
use App\Models\SoalModel;

class Belajar extends BaseController
{

    protected $materi;

    function __construct()
    {
        $this->kelas = new KelasModel();
        $this->bab = new BabModel();
        $this->materi = new MateriModel();
        $this->soal = new SoalModel();
    }

    public function index()
    {
        return view('belajar/index', [
            "title" => "Kelas Belajar",
            "kelas" => $this->kelas->findAll()
        ]);
    }

    public function bab($idKel)
    {
        return view('belajar/babBelajar', [
            "title" => "Bab Belajar",
            "kelas" => $this->kelas->where('id', $idKel)->first(),
            "bab" => $this->bab->where('kelas_id', $idKel)->findAll(),
            "materi" => $this->materi->findAll()
        ]);
    }

    public function materi($idBab)
    {
        return view('belajar/materiBelajar', [
            "title" => "Materi Belajar",
            "prev" => "belajar/bab/1",
            "next" => "belajar/soal/$idBab",
            "bab" => $this->bab->where('id', $idBab)->first(),
            "materi" => $this->materi->where('bab_id', $idBab)->first(),
        ]);
    }

    public function soal($idMat)
    {
        return view('belajar/soalBelajar', [
            "title" => "Soal Belajar",
            "prev" => "belajar/materi/$idMat",
            "next" => "belajar/bab/1",
            "bab" => $this->bab->where('id', $idMat)->first(),
            "materi" => $this->materi->where('id', $idMat)->first(),
            "soal" => $this->soal->where('materi_id', $idMat)->first(),
            "jawaban" => explode(';', $this->soal->where('materi_id', $idMat)->first()->jawaban)
        ]);
    }

    // public function cekJawaban($idSoal, $jawab)
    // {
    //     $kunci = $this->soal->where('materi_id', $idSoal)->first()->kunci_jawaban;
    //     if ($jawab == $kunci) {
    //         return redirect()->to('soal/', $idSoal);
    //     } else {
    //         return redirect()->to('soal/', $idSoal);
    //     }
    // }
}
