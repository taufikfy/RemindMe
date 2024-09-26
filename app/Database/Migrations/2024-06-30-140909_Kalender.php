<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kalender extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_kalender' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'catatan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'tanggal' => [
                'type'       => 'DATE',
                'null'       => true,
            ],
            'id_user' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
            ],
        ]);
        $this->forge->addKey('id_kalender', true);
        $this->forge->addForeignKey('id_user', 'users', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->createTable('kalenders');
    }

    public function down()
    {
        $this->forge->dropTable('kalenders');
    }
}