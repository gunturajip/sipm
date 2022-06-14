<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class Pages extends BaseController
{

    protected $mahasiswa;

    function __construct()
    {
        $this->mahasiswa = new MahasiswaModel();
    }

    public function index()
    {
        return view('pages/index', [
            "title" => "Home",
            "mahasiswa" => $this->mahasiswa->findAll()
        ]);
    }

    public function about()
    {
        return view('pages/about', [
            "title" => "About"
        ]);
    }

    public function login()
    {
        return view('pages/login', [
            "title" => "Login"
        ]);
    }

    public function register()
    {
        return view('pages/register', [
            "title" => "Register"
        ]);
    }

    public function mahasiswa()
    {
        return view('pages/mahasiswa', [
            "title" => "Mahasiswa"
        ]);
    }
}
