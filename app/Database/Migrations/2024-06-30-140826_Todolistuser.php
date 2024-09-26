<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Todolistuser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_todolistuser' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'catatan' => [
                'type'       => 'TEXT',
                'null'         => true,
            ],
            'keterangan' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'priority' => [
                'type'       => 'BOOLEAN',
                'default'    => false,
            ],
            'selesai' => [
                'type'       => 'BOOLEAN',
                'default'    => false,
            ],
            'id_user' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
            ]
        ]);
        $this->forge->addKey('id_todolistuser', true);
        $this->forge->addForeignKey('id_user', 'users', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->createTable('todolistusers');
    }

    public function down()
    {
        $this->forge->dropTable('todolistusers');
    }
}