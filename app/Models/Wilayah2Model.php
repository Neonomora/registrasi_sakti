<?php

namespace App\Models;

use CodeIgniter\Model;

class Wilayah2Model extends Model
{
  protected $table      = 'wilayah2';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = false;

  protected $returnType     = 'object';
  protected $useSoftDeletes = false;

  protected $allowedFields = [
     'kode_kab',
     'kode_prov',
     'nama_kab',
     'ibukota',
      'dtpk',
     'tgl_add',
     'user_add',
     'tgl_update',
     'user_update',
     'kategori',
     'emptykeuangan'
     ];

  protected bool $allowEmptyInserts = false;
  protected bool $updateOnlyChanged = true;

}