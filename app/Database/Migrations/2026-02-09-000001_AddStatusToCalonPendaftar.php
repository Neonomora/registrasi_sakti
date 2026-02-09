<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddStatusToCalonPendaftar extends Migration
{
    public function up(): void
    {
        $this->forge->addColumn('calon_pendaftar', [
            'status' => [
                'type'       => 'VARCHAR',
                'constraint' => 20,
                'null'       => true,
                'after'      => 'referensi_id',
            ],
        ]);
    }

    public function down(): void
    {
        $this->forge->dropColumn('calon_pendaftar', 'status');
    }
}
