<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produtos extends Seeder
{
    public function run()
    {
    $desc = ['Notebook','Celular','Computador da XUXA'];
    $valor = [2000,1500,7000];
        for($x = 0; $x < 3; $x++){
        $data = [
            'descricao' => $desc[$x],
            'valor'    => $valor[$x],
        ];

        // Using Query Builder
        $this->db->table('produtos')->insert($data);
         }
    }
}