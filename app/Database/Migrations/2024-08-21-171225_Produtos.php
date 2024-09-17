<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Produtos extends Migration
{
    public function up()
    {
        
            $this->forge->addField([
                'id' => [
                'type'           => 'INT',
                'constraint'     => 11, // Ajustado para um valor típico de constraint
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'nome' => [
                'type'       => 'VARCHAR',
                'constraint' => 200,
                'null'       => false,
            ],
            'descricao' => [
                'type'       => 'TEXT',
                'null'       => false,
            ],
            'preco' => [
                'type'       => 'DOUBLE',
                'null'       => false,
            ],
            'quantidade' => [
                'type'       => 'INT',
                'constraint' => 11, // Ajustado para um valor típico de constraint
                'null'       => false,
            ],
                'categoria' => [
                    'type' => 'varchar',
                    'constraint' => '100',
                    'null' => false,
                ],
            ]);
            $this->forge->addKey('id', true);
            $this->forge->createTable('produtos');
    
    }

    public function down()
    {
        $this->forge->dropTable('produtos');
    }
}
