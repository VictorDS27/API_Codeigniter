<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pessoas extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'=> [
            'type'=>'int',
            'auto_increment'=>true
            ],
            'descricao'=>[
                'type'=>'varchar',
                'constraint' =>100
            ],
            'valor'=>[
                'type'=>'double',
            ],
            ]);
            $this->forge->addkey('id',true);
            $this->forge->createTable('produtos');
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}