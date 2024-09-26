<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JadwalMatkul extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jadwalmatkul' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'matkul' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'semester' => [
                'type'       => 'INT',
                'constraint' => 2,
                'unsigned'   => true,
                'null'       => false,
            ],
            'mulai' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'selesai' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'hari' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'ruangan' => [
                'type'       => 'VARCHAR',
                'constraint' => '20',
            ],
            'id_user' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
            ],
        ]);
        $this->forge->addKey('id_jadwalmatkul', true);
        $this->forge->addKey('semester');
        $this->forge->addForeignKey('id_user', 'users', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->createTable('jadwalmatkuls');
    }

    public function down()
    {
        $this->forge->dropTable('jadwalmatkuls');
    }
}