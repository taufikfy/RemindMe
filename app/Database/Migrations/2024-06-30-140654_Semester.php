<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Semester extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_semester' => [
                'type'           => 'INT',
                'constraint'     => 10,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'semester' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
                'null'       => false,
            ],
            'id_user' => [
                'type'       => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
                'null'       => false,
            ],
        ]);
        $this->forge->addKey('id_semester', true);
        $this->forge->addForeignKey('semester', 'matkuls', 'semester', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_user', 'users', 'id_user', 'CASCADE', 'CASCADE');
        $this->forge->createTable('semesters');
    }

    public function down()
    {
        $this->forge->dropTable('semesters');
    }
}