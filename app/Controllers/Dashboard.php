<?php

namespace App\Controllers;

use App\Models\PendaftarModel;
use App\Models\ProgramStudiModel;
use App\Models\KelasModel;
use App\Models\ReferensiModel;

class Dashboard extends BaseController
{
    protected $pendaftarModel;
    protected $prodiModel;
    protected $kelasModel;
    protected $refModel;

    public function __construct()
    {
        $this->pendaftarModel = new PendaftarModel();
        $this->prodiModel    = new ProgramStudiModel();
        $this->kelasModel    = new KelasModel();
        $this->refModel      = new ReferensiModel();
    }

    public function index()
    {
        // Proteksi: hanya user yang sudah login yang boleh akses
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('/'));
        }

        $data = [
            'pendaftar' => $this->pendaftarModel->getLengkap(),
            'prodi'     => $this->prodiModel->findAll(),
            'referensi' => $this->refModel->findAll(),
        ];

        return view('dashboard_view', $data);
    }

    /**
     * API: ambil satu calon pendaftar by NIK (untuk modal edit).
     */
    public function getByNik($nik)
    {
        if (!session()->get('logged_in')) {
            return $this->response->setStatusCode(401)->setJSON(['success' => false, 'message' => 'Unauthorized']);
        }
        $item = $this->pendaftarModel->getByNik($nik);
        if (!$item) {
            return $this->response->setStatusCode(404)->setJSON(['success' => false, 'message' => 'Data tidak ditemukan']);
        }
        return $this->response->setJSON(['success' => true, 'data' => $item]);
    }

    /**
     * Proses update data calon pendaftar (selaras dengan kolom database).
     */
    public function update()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to(base_url('/'));
        }

        $nik = $this->request->getPost('nik');
        if (empty($nik)) {
            if ($this->request->isAJAX()) {
                return $this->response->setJSON(['success' => false, 'message' => 'NIK tidak valid.']);
            }
            return redirect()->back()->withInput()->with('error', 'NIK tidak valid.');
        }

        $item = $this->pendaftarModel->find($nik);
        if (!$item) {
            if ($this->request->isAJAX()) {
                return $this->response->setJSON(['success' => false, 'message' => 'Data tidak ditemukan.']);
            }
            return redirect()->to(base_url('dashboard'))->with('error', 'Data calon pendaftar tidak ditemukan.');
        }

        $rules = [
            'nik'           => 'required|numeric|exact_length[16]',
            'nama_lengkap'  => 'required|min_length[3]|max_length[100]',
            'no_handphone'  => 'required|min_length[10]|max_length[15]',
            'email'         => 'required|valid_email|max_length[100]',
            'kampus'        => 'required|max_length[100]',
            'beasiswa'      => 'required|in_list[YA,TIDAK]',
            'kelas_id'      => 'required|numeric',
            'referensi_id'  => 'permit_empty|numeric',
            'status'        => 'permit_empty|in_list[diterima,ditolak,]',
        ];

        if (!$this->validate($rules)) {
            if ($this->request->isAJAX()) {
                return $this->response->setJSON(['success' => false, 'message' => 'Validasi gagal', 'errors' => $this->validator->getErrors()]);
            }
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'nama_lengkap' => strtoupper($this->request->getPost('nama_lengkap')),
            'no_handphone' => $this->request->getPost('no_handphone'),
            'email'        => strtolower($this->request->getPost('email')),
            'kampus'       => $this->request->getPost('kampus'),
            'beasiswa'     => $this->request->getPost('beasiswa'),
            'kelas_id'     => (int) $this->request->getPost('kelas_id'),
            'referensi_id' => $this->request->getPost('referensi_id') ? (int) $this->request->getPost('referensi_id') : null,
            'status'       => $this->request->getPost('status') ?: null,
        ];

        if (!$this->pendaftarModel->update($nik, $data)) {
            if ($this->request->isAJAX()) {
                return $this->response->setJSON(['success' => false, 'message' => 'Gagal memperbarui data.']);
            }
            return redirect()->back()->withInput()->with('error', 'Gagal memperbarui data.');
        }

        if ($this->request->isAJAX()) {
            $updated = $this->pendaftarModel->getByNik($nik);
            return $this->response->setJSON(['success' => true, 'message' => 'Data berhasil diperbarui.', 'data' => $updated]);
        }

        return redirect()->to(base_url('dashboard'))->with('success', 'Data calon pendaftar berhasil diperbarui.');
    }
}
