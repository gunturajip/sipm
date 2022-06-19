<?php

namespace App\Controllers;

use App\Models\BabModel;

class Bab extends BaseController
{

    protected $bab;

    function __construct()
    {
        $this->bab = new BabModel();
    }

    public function index()
    {
        return view('bab/index', [
            "title" => "bab",
            "bab" =>  $this->bab->findAll()
        ]);
    }

    public function create()
    {
        return view('bab/create', [
            "title" => "Tambah Bab",
        ]);
    }

    public function insert()
    {
        $this->bab->insert([
            'nama' => $this->request->getPost('nama'),
            'admin_id' => $this->request->getPost('admin_id')
        ]);
        return redirect()->to('/bab');
    }

    public function delete($id)
    {
        $this->bab->delete($id);
        return redirect()->to('/bab');
    }

    public function edit($id)
    {
        return view('bab/edit', [
            "title" => "Edit Bab",
            "bab" => $this->bab->where('id', $id)->first()
        ]);
    }

    public function update($id)
    {
        $this->bab->update($id, [
            'nama' => $this->request->getPost('nama'),
            'admin_id' => $this->request->getPost('admin_id')
        ]);
        return redirect()->to('/bab');
    }
}
