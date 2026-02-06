<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        // Proteksi: hanya user yang sudah login yang boleh akses
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('/'));
        }

        return view('dashboard_view');
    }
}
