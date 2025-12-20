<?php

namespace App\Controllers;


class Registrasi extends BaseController
{
    public function index()
    {
        echo view('template/header');
        echo view('registrasi_view');
        echo view('template/footer');
    }
}
