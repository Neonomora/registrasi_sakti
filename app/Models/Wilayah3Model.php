<?php

namespace App\Models;

use CodeIgniter\Model;

class Wilayah3Model extends Model
{
  protected $table      = 'wilayah3';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = false;

  protected $returnType     = 'object';
  protected $useSoftDeletes = false;

  protected $allowedFields = [
     'kode_kec',
     'nama_kec',
     'kode_kab',
     'tgl_add',
     'tgl_update',
     
     ];

  protected bool $allowEmptyInserts = false;
  protected bool $updateOnlyChanged = true;

}