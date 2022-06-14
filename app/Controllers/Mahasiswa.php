<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Mahasiswa extends BaseController
{

    protected $mahasiswa;

    function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
    }

    public function index()
    {
        return view('mahasiswa/index', [
            "title" => "Mahasiswa",
            "mahasiswa" =>  $this->mahasiswa->findAll()
        ]);
    }

    public function create()
    {
        return view('mahasiswa/create', [
            "title" => "Mahasiswa",
        ]);
    }

    public function insert()
    {
        $this->mahasiswa->insert([
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat')
        ]);
        return redirect()->to('/mahasiswa');
    }

    public function delete($id)
    {
        $this->mahasiswa->delete($id);
        return redirect()->to('/mahasiswa');
    }

    public function edit($id)
    {
        return view('mahasiswa/edit', [
            "title" => "Mahasiswa",
            "mahasiswa" => $this->mahasiswa->where('id', $id)->first()
        ]);
    }

    public function update($id)
    {
        $this->mahasiswa->update($id, [
            'npm' => $this->request->getPost('npm'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat')
        ]);
        return redirect()->to('/mahasiswa');
    }
}
