<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class JadwalUjian extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_jadwalujian' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'matkul' => [
                'type'        => 'VARCHAR',
                'constraint'  => 30,
            ],
            'hari' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'mulai' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
            ],
            'selesai' => [
                'type'       => 'VARCHAR',
                'constraint' => '5',
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
        $this->forge->addKey('id_jadwalujian', true);
        $this->forge->addForeignKey('id_user', 'users', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->createTable('jadwalujians');
    }

    public function down()
    {
        $this->forge->dropTable('jadwalujians');
    }
}