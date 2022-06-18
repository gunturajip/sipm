<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/index', [
            "title" => "Home",
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
}
