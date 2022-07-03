<?php

namespace App\Controllers;

use App\Models\AdminModel;
use App\Models\UserModel;

class Validate extends BaseController
{
    public function loginAuth()
    {
        $session = session();
        $adminModel = new AdminModel();
        $userModel = new UserModel();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $dataAdmin = $adminModel->where('email', $email)->first();
        $dataUser = $userModel->where('email', $email)->first();

        if ($dataAdmin) {
            $authenticatePassword = password_verify($password, $dataAdmin->password);

            if ($authenticatePassword) {
                $ses_data = [
                    'password' => $dataAdmin->password,
                    'email' => $dataAdmin->email,
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                $session->setFlashdata('success', 'Selamat Datang di Dashboard SIMA :)');
                return redirect()->to(base_url("admin"));
            } else {
                $session->setFlashdata('failed', 'Password Anda Belum Benar :(');
                return redirect()->to(base_url("login"));
            }
        } else if ($dataUser) {
            $authenticatePassword = password_verify($password, $dataUser->password);

            if ($authenticatePassword) {
                $ses_data = [
                    'password' => $dataUser->password,
                    'email' => $dataUser->email,
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                $session->setFlashdata('success', 'Selamat Datang di Dashboard SIMA :)');
                return redirect()->to(base_url("belajar"));
            } else {
                $session->setFlashdata('failed', 'Password Anda Belum Benar :(');
                return redirect()->to(base_url("login"));
            }
        } else {
            $session->setFlashdata('notFound', 'Email Anda Tidak Ditemukan :(');
            return redirect()->to(base_url("register"));
        }
    }
}
