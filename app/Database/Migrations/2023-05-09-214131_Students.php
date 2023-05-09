<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Students extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'           => [
                 'type'           => 'INT',
                 'constraint'     => 11,
                 'unsigned'       => TRUE,
                 'auto_increment' => TRUE
              ],
            'first_name'       => [
                  'type'           => 'VARCHAR',
                  'constraint'     => '64',
              ],
            'last_name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '64',
            ],
            'address'     => [
                   'type'           => 'TEXT'
              ],
        ]);
        $this->forge->addKey('id', TRUE);
        $this->forge->createTable('students');
    }

    public function down()
    {
        //
    }
}
