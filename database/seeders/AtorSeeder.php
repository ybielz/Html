<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       DB::table('atores')->insert(
        ['nome' => "Putin",
        'descrição' => "Ator de política russo",
        'nacionalidade_id' => 1 ],

         ['nome' => "Sakura",
        'descrição' => "Atriz de anime japonês",
        'nacionalidade_id' => 2 ]
        
    );
}
}
