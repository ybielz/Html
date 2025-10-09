<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AtorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('atores')->insert(
            ['nome'=>"Carlos",'descricao'=>"Ator que estrelou no primeiro filme gente grande junto com Adam Sandler, que elogiou muito bem o ator",'nacionalidade_id'=> 1],
            ['nome'=>"Muninz",'descricao'=>"Ator pika",'nacionalidade_id'=> 1],
            ['nome'=>"Luan",'descricao'=>"Ator que atuou em velozes furiosos e bem falado nas mídias",'nacionalidade_id'=> 1],
            ['nome'=>"Juninho",'descricao'=>"Ator pika",'nacionalidade_id'=> 1],

        );
    }
}
