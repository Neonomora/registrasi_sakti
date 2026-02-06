<?php

namespace App\Models;

use CodeIgniter\Model;

class KelasModel extends Model
{
    protected $table            = 'kelas';
    protected $primaryKey       = 'kelas_id';
    protected $allowedFields    = ['nama_kelas', 'program_studi_id'];
    protected $useTimestamps    = false;

    public function getKelasWithProdi()
    {
        return $this->select('kelas.*, program_studi.nama_program_studi')
            ->join('program_studi', 'program_studi.program_studi_id = kelas.program_studi_id')
            ->findAll();
    }
}
