<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Grub extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_grub' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nama_grub' => [
                'type'       => 'VARCHAR',
                'constraint' => '30',
            ],
            'id_user' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
                'null'       => false,
            ],
        ]);
        $this->forge->addKey('id_grub', true);
        $this->forge->addForeignKey('id_user', 'users', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->createTable('grubs');
    }

    public function down()
    {
        $this->forge->dropTable('grubs');
    }
}