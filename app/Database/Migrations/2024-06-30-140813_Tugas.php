<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tugas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_tugas' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'namatugas' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'deskripsi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'deadline' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'jam' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'file' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_user' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
            ],
            'id_matkul' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
            ],
        ]);
        $this->forge->addKey('id_tugas', true);
        $this->forge->addForeignKey('id_user', 'users', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_matkul', 'matkuls', 'id_matkul', 'CASCADE', 'CASCADE');
        $this->forge->createTable('tugass');
    }

    public function down()
    {
        $this->forge->dropTable('tugass');
    }
}
