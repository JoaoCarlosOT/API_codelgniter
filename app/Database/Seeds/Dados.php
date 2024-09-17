<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Dados extends Seeder
{
    public function run()
    {
        for($i=0; $i<=20; $i++){
            $data = [
                'nome'=> 'televisão',
                'descricao'=> 'lllllllllllllllllllllllllllllllllll',
                'preco'=> '999.99',
                'quantidade'=> '20',
                'categoria'=> 'eletrônicos',

            ];
            $this->db->table('produtos')->insert($data);
        }
    }
}
