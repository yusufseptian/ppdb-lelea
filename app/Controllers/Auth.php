<?php

namespace App\Controllers;

use App\Models\Msiswa;
use App\Models\Muser;

use App\Controllers\BaseController;
use App\Models\MTahunAjar;

class Auth extends BaseController
{
    private $validation;
    private $modelSiswa = null;
    private $modelAdmin = null;
    private $modelTahunAjar = null;

    public function __construct()
    {
        $this->validation = \config\Services::validation();
        $this->modelSiswa  = new Msiswa();
        $this->modelAdmin  = new Muser();
        $this->modelTahunAjar = new MTahunAjar();
        helper('form');
        helper('text');
    }
    public function index()
    {
        if (session('log_auth')) {
            if (session('log_auth')['akunRole'] == 'admin') {
                return redirect()->to(base_url('/admin'));
            } else {
                return redirect()->to(base_url('/siswa'));
            }
        }
        $validation = \Config\Services::validation();
        if (session('validation')) {
            $validation = session()->get('validation');
        }
        $data = [
            'validation' => $validation,
            'title' => 'Siswa',
            'subtitle' => 'Login',
        ];
        return view('siswa/view_login', $data);
    }
    public function administrator()
    {
        if (session('log_auth')) {
            if (session('log_auth')['akunRole'] == 'admin') {
                return redirect()->to(base_url('/admin'));
            } else {
                return redirect()->to(base_url('/siswa'));
            }
        }
        $validation = \Config\Services::validation();
        if (session('validation')) {
            $validation = session()->get('validation');
        }
        $data = [
            'validation' => $validation,
            'title' => 'Auth',
            'sub_title' => 'Login Administrator'
        ];

        return view('admin/view_login_admin', $data);
    }
    public function login_user()
    {
        if (session('log_auth')) {
            if (session('log_auth')['akunRole'] == 'admin') {
                return redirect()->to(base_url('/admin'));
            } else {
                return redirect()->to(base_url('/siswa'));
            }
        }
        $dtTA = $this->modelTahunAjar->getTANow();
        if (empty($dtTA)) {
            session()->setFlashdata('logFailed', 'Akun tidak ditemukan');
            return $this->redirectBack();
        }
        $siswa_email = $this->request->getPost('siswa_email');
        $siswa_password = $this->request->getPost('siswa_password');
        $valid = $this->validate([
            'siswa_email' => [
                'label' => 'Email',
                'rules' => 'required|valid_email|is_unique[tb_user.user_email]',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'siswa_password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]

        ]);
        if ($valid) {
            $tbAkun = $this->modelSiswa;
            $tbAkun->where('siswa_email', $siswa_email);
            $tbAkun->where('siswa_password', md5("$siswa_password"));
            $tbAkun->where('siswa_ta_id', $dtTA['ta_id']);
            $dt = $tbAkun->get()->getResultArray();
            if (count($dt) != 1) {
                session()->setFlashdata('logFailed', "Email atau password salah");
                return redirect()->to(base_url('/auth'));
            }
            $data = [
                'akunID' => $dt[0]['siswa_id'],
                'akunName' => $dt[0]['siswa_nama'],
                'akunNisn' => $dt[0]['siswa_nisn'],
                'akunRole' => 'siswa'
            ];
            session()->set('log_auth', $data);
            return redirect()->to(base_url('/siswa'));
        } else {
            session()->setFlashdata('logFailed', 'Mohon isi data dengan benar');
            return redirect()->to(base_url('/auth'));
        }
    }
    public function login_admin()
    {
        if (session('log_auth')) {
            if (session('log_auth')['akunRole'] == 'admin') {
                return redirect()->to(base_url('/admin'));
            } else {
                return redirect()->to(base_url('/siswa'));
            }
        }
        $user_username = $this->request->getPost('user_username');
        $user_password = $this->request->getPost('user_password');
        $valid = $this->validate([
            'user_username' => [
                'label' => 'Username',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'user_password' => [
                'label' => 'Password',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ]

        ]);
        if ($valid) {
            $tbAkun = $this->modelAdmin;
            $tbAkun->where('user_username', $user_username);
            $tbAkun->where('user_password', md5("$user_password"));
            $dt = $tbAkun->get()->getResultArray();
            if (count($dt) != 1) {
                session()->setFlashdata('logFailed', "Username atau password salah");
                return redirect()->to(base_url('/auth/administrator'));
            }
            $data = [
                'akunID' => $dt[0]['user_id'],
                'akunName' => $dt[0]['user_username'],
                'akunRole' => 'admin'
            ];
            session()->set('log_auth', $data);
            return redirect()->to(base_url('/admin'));
        } else {
            session()->setFlashdata('logFailed', 'Mohon isi data dengan benar');
            return redirect()->to(base_url('/auth/administrator'));
        }
    }
    public function logout_siswa()
    {
        session()->remove('log_auth');
        return redirect()->to(base_url('/auth'));
    }
    public function logout_admin()
    {
        session()->remove('log_auth');
        return redirect()->to(base_url('/auth/administrator'));
    }
}
