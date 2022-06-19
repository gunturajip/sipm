<?php

namespace App\Controllers;

use App\Models\MateriModel;

class Materi extends BaseController
{

    protected $materi;

    function __construct()
    {
        $this->materi = new MateriModel();
    }

    public function index()
    {
        return view('materi/index', [
            "title" => "Materi",
            "materi" =>  $this->materi->findAll()
        ]);
    }

    public function create()
    {
        return view('materi/create', [
            "title" => "Tambah Materi",
        ]);
    }

    public function insert()
    {
        $this->materi->insert([
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'link' => $this->request->getPost('link'),
            'bab_id' => $this->request->getPost('bab_id')
        ]);
        return redirect()->to('/materi');
    }

    public function delete($id)
    {
        $this->materi->delete($id);
        return redirect()->to('/materi');
    }

    public function edit($id)
    {
        return view('materi/edit', [
            "title" => "Edit Materi",
            "materi" => $this->materi->where('id', $id)->first()
        ]);
    }

    public function update($id)
    {
        $this->materi->update($id, [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'link' => $this->request->getPost('link'),
            'bab_id' => $this->request->getPost('bab_id')
        ]);
        return redirect()->to('/materi');
    }
}
