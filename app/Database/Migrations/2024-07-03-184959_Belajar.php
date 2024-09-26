<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Belajar extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_belajar' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'date' => [
                'type'       => 'DATE',
            ],
            'time' => [
                'type'       => 'TIME',
            ],
            'activity' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'notes' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'id_user' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
            ],
        ]);
        $this->forge->addKey('id_belajar', true);
        $this->forge->addForeignKey('id_user', 'users', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->createTable('belajar');
    }

    public function down()
    {
        $this->forge->dropTable('belajar');
    }
}
