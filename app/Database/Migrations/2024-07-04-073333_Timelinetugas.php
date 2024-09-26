<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Timelinetugas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_timelinetugas' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'matkul' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'deskripsi' => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'deadline' => [
                'type'       => 'DATE',
            ],
            'id_user' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
            ],
        ]);
        $this->forge->addKey('id_timelinetugas', true);
        $this->forge->addForeignKey('id_user', 'users', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->createTable('timelinetugas');
    }

    public function down()
    {
        $this->forge->dropTable('timelinetugas');
    }
}
