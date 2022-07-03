<?php

namespace App\Controllers;

use App\Models\UserModel;

class User extends BaseController
{

    protected $user;

    function __construct()
    {
        $this->user = new UserModel();
    }

    public function index()
    {
        return view('user/index', [
            "title" => "User",
            "user" =>  $this->user->findAll()
        ]);
    }

    public function create()
    {
        return view('user/create', [
            "title" => "Tambah User",
        ]);
    }

    public function insert()
    {
        $this->user->insert([
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT)
        ]);
        return redirect()->to('/user');
    }

    public function delete($id)
    {
        $this->user->delete($id);
        return redirect()->to('/user');
    }

    public function edit($id)
    {
        return view('user/edit', [
            "title" => "Edit User",
            "user" => $this->user->where('id', $id)->first()
        ]);
    }

    public function update($id)
    {
        $this->user->update($id, [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'tanggal_lahir' => $this->request->getPost('tanggal_lahir'),
            'jenis_kelamin' => $this->request->getPost('jenis_kelamin'),
            'foto_profil' => $this->request->getPost('foto_profil')
        ]);
        return redirect()->to('/user');
    }

    public function setting()
    {
        return view('user/setting', [
            "title" => "Setting"
        ]);
    }
}
