<?php

namespace App\Controllers;

use App\Models\KelasModel;

class Kelas extends BaseController
{

    protected $kelas;

    function __construct()
    {
        $this->kelas = new KelasModel();
    }

    public function index()
    {
        return view('kelas/index', [
            "title" => "Kelas",
            "kelas" =>  $this->kelas->findAll()
        ]);
    }

    public function create()
    {
        return view('kelas/create', [
            "title" => "Tambah Kelas",
        ]);
    }

    public function insert()
    {
        $this->kelas->insert([
            'nama' => $this->request->getPost('nama'),
            'admin_id' => $this->request->getPost('admin_id')
        ]);
        return redirect()->to('/kelas');
    }

    public function delete($id)
    {
        $this->kelas->delete($id);
        return redirect()->to('/kelas');
    }

    public function edit($id)
    {
        return view('kelas/edit', [
            "title" => "Edit Kelas",
            "kelas" => $this->kelas->where('id', $id)->first()
        ]);
    }

    public function update($id)
    {
        $this->kelas->update($id, [
            'nama' => $this->request->getPost('nama'),
            'admin_id' => $this->request->getPost('admin_id')
        ]);
        return redirect()->to('/kelas');
    }
}
