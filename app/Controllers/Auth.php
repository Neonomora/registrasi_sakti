<?php

namespace App\Controllers;
use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }

    public function index()
    {
        // Jika sudah login, langsung ke dashboard
        if (session()->get('logged_in')) {
            return redirect()->to(base_url('dashboard'));
        }

        return view('login_view');
    }
    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Load model user
        $userModel = new UserModel();

        // Cari user berdasarkan username
        $user = $this->userModel->where('username', $username)->first();

        // Validasi: cek user dan password
        if (!$user || !password_verify($password, $user['password'])) {
            // Jika gagal, kembali ke form login dengan pesan error
            return redirect()->back()->with('error', 'Username atau password salah.')->withInput();
        }

        // Jika berhasil, simpan data user ke session
        $session = session();
        $session->set([
            'user_id'  => $user['user_id'],
            'username' => $user['username'],
            'logged_in' => true,
        ]);

        // Redirect ke dashboard
        return redirect()->to(base_url('dashboard'));
    }

    public function logout()
    {
        $session = session();
        $session->destroy();

        // Beri pesan sukses logout
        return redirect()->to(base_url('/'))->with('success', 'Berhasil logout.');
    }
}
