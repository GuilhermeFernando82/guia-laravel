<?php

use Illuminate\Database\Seeder;
use migrations\alunos;
class aluno extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        aluno::create([
            'codigo' => '123456',
        ]);
    }
}
