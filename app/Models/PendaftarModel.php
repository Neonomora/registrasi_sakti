<?php

namespace App\Models;

use CodeIgniter\Model;

class PendaftarModel extends Model
{
  protected $table            = 'calon_pendaftar';
  protected $primaryKey       = 'nik';
  protected $useAutoIncrement = false;
  protected $returnType       = 'array';

  protected $allowedFields    = [
    'nik',
    'nama_lengkap',
    'no_handphone',
    'email',
    'kampus',
    'beasiswa',
    'kelas_id',
    'referensi_id'
  ];

  protected $useTimestamps    = false;

  public function getLengkap()
  {
    return $this->select('calon_pendaftar.*, kelas.nama_kelas, program_studi.nama_program_studi, referensi_informasi.nama_referensi')
      ->join('kelas', 'kelas.kelas_id = calon_pendaftar.kelas_id')
      ->join('program_studi', 'program_studi.program_studi_id = kelas.program_studi_id')
      ->join('referensi_informasi', 'referensi_informasi.referensi_id = calon_pendaftar.referensi_id', 'left')
      ->findAll();
  }
}
