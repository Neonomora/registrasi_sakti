<?php

namespace App\Models;

use CodeIgniter\Model;

class ReferensiModel extends Model
{
  protected $table            = 'referensi_informasi';
  protected $primaryKey       = 'referensi_id';
  protected $allowedFields    = ['nama_referensi'];
  protected $useTimestamps    = false;
}
