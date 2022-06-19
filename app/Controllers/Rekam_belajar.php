<?php

namespace App\Controllers;

use App\Models\Rekam_belajarModel;

class Rekam_belajar extends BaseController
{

    protected $rekam_belajar;

    function __construct()
    {
        $this->rekam_belajar = new Rekam_belajarModel();
    }

    public function index()
    {
        return view('rekam_belajar/index', [
            "title" => "Rekam Belajar",
            "rekam_belajar" =>  $this->rekam_belajar->findAll()
        ]);
    }

    public function create()
    {
        return view('rekam_belajar/create', [
            "title" => "Tambah Rekam Belajar",
        ]);
    }

    public function insert()
    {
        $this->rekam_belajar->insert([
            'user_id' => $this->request->getPost('user_id'),
            'materi_id' => $this->request->getPost('materi_id')
        ]);
        return redirect()->to('/rekam_belajar');
    }

    public function delete($id)
    {
        $this->rekam_belajar->delete($id);
        return redirect()->to('/rekam_belajar');
    }

    public function edit($id)
    {
        return view('rekam_belajar/edit', [
            "title" => "Edit Rekam Belajar",
            "rekam_belajar" => $this->rekam_belajar->where('id', $id)->first()
        ]);
    }

    public function update($id)
    {
        $this->rekam_belajar->update($id, [
            'user_id' => $this->request->getPost('user_id'),
            'materi_id' => $this->request->getPost('materi_id')
        ]);
        return redirect()->to('/rekam_belajar');
    }
}
