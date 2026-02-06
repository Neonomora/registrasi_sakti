<?php

namespace App\Models;

use CodeIgniter\Model;

class ProgramStudiModel extends Model
{

  protected $table            = 'program_studi';
  protected $primaryKey       = 'program_studi_id';
  protected $allowedFields    = ['nama_program_studi'];
  protected $useTimestamps    = false;
}
