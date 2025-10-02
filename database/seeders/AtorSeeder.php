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
            ['nome'=>"Juninho",'descricao'=>"Ator pika",'nacionalidade_id'=> 1],
            ['nome'=>"Juninho",'descricao'=>"Ator pika",'nacionalidade_id'=> 1],
            ['nome'=>"Juninho",'descricao'=>"Ator pika",'nacionalidade_id'=> 1],
            ['nome'=>"Juninho",'descricao'=>"Ator pika",'nacionalidade_id'=> 1],
            
        );
    }
}
