<?php

namespace App\Controllers;

use App\Models\PendaftarModel;
use App\Models\ProgramStudiModel;
use App\Models\KelasModel;
use App\Models\ReferensiModel;
use App\Models\UserModel;

class Registrasi extends BaseController
{
    protected $pendaftarModel;
    protected $prodiModel;
    protected $kelasModel;
    protected $refModel;
    protected $userModel;

    public function __construct()
    {
        $this->pendaftarModel = new PendaftarModel();
        $this->prodiModel     = new ProgramStudiModel();
        $this->kelasModel     = new KelasModel();
        $this->refModel       = new ReferensiModel();
        $this->userModel      = new UserModel();
    }

    public function index()
    {
        $data = [
            'prodi'     => $this->prodiModel->findAll(),
            'referensi' => $this->refModel->findAll()
        ];

        echo view('template/header');
        echo view('registrasi_view', $data); 
        echo view('template/footer');
    }

    public function getKelasByProdi($prodi_id = null)
    {
        $this->response->setContentType('application/json');
        
        try {
            if (empty($prodi_id)) {
                return $this->response->setJSON(['success' => false, 'data' => []]);
            }

            $kelas = $this->kelasModel->where('program_studi_id', $prodi_id)
                                      ->orderBy('nama_kelas', 'ASC')
                                      ->findAll();

            return $this->response->setJSON([
                'success' => true,
                'data'    => $kelas
            ]);
        } catch (\Exception $e) {
            return $this->response->setJSON(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    public function simpan()
    {
        $this->response->setContentType('application/json');

        try {
            $data = $this->request->getPost();

            $rules = [
                'nik'           => 'required|numeric|exact_length[16]',
                'nama_lengkap'  => 'required|min_length[3]|max_length[100]',
                'no_handphone'  => 'required|min_length[10]|max_length[15]',
                'email'         => 'required|valid_email|max_length[100]',
                'kampus'        => 'required|max_length[100]',
                'beasiswa'      => 'required|in_list[YA,TIDAK]',
                'kelas_id'      => 'required|numeric',
                'referensi_id'  => 'permit_empty|numeric'
            ];

            if (!$this->validate($rules)) {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'Validasi gagal',
                    'errors'  => $this->validator->getErrors()
                ]);
            }

            if ($this->pendaftarModel->find($data['nik'])) {
                return $this->response->setJSON([
                    'success' => false,
                    'message' => 'NIK ini sudah terdaftar sebagai calon pendaftar.'
                ]);
            }

            $saveData = [
                'nik'           => $data['nik'],
                'nama_lengkap'  => strtoupper($data['nama_lengkap']),
                'no_handphone'  => $data['no_handphone'],
                'email'         => strtolower($data['email']),
                'kampus'        => $data['kampus'],
                'beasiswa'      => $data['beasiswa'],
                'kelas_id'      => $data['kelas_id'],
                'referensi_id'  => !empty($data['referensi_id']) ? $data['referensi_id'] : null,
                'user_id'       => $this->userModel->insert([
                    'username' => $data['nama_lengkap'],
                    'password' => password_hash($data['email'], PASSWORD_DEFAULT)
                ])
            ];

            if ($this->pendaftarModel->insert($saveData)) {
                return $this->response->setJSON([
                    'success' => true,
                    'message' => 'Pendaftaran berhasil disimpan!'
                ]);
            }

            return $this->response->setJSON(['success' => false, 'message' => 'Gagal menyimpan ke database']);

        } catch (\Exception $e) {
            return $this->response->setJSON([
                'success' => false,
                'message' => 'Terjadi kesalahan sistem: ' . $e->getMessage()
            ]);
        }
    }
}