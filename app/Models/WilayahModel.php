<?php

namespace App\Models;

use CodeIgniter\Model;

class WilayahModel extends Model
{
  protected $table      = 'wilayah';
  protected $primaryKey = 'kode_prov';

  protected $useAutoIncrement = false;

  protected $returnType     = 'object';
  protected $useSoftDeletes = false;

  protected $allowedFields = [
     'nama_prov',
     'ibukota',
     'region',
     'link'
    ];

  protected bool $allowEmptyInserts = false;
  protected bool $updateOnlyChanged = true;

}