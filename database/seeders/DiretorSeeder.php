<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiretorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diretores')->insert(
            ['nome'=>"Gabriel",'descricao'=>"Diretor especializado em live-actions de games",'nacionalidade_id'=> 2],
            ['nome'=>"Carlos",'descricao'=>"Diretor especializado em futebol",'nacionalidade_id'=> 4],
            ['nome'=>"Luis",'descricao'=>"Diretor especializado em sci-fi ",'nacionalidade_id'=> 1],
            ['nome'=>"Dex",'descricao'=>"Diretor especializado em romance ",'nacionalidade_id'=> 3],
            ['nome'=>"Rogério",'descricao'=>"Diretor especializado em comédia ",'nacionalidade_id'=> 5],
            ['nome'=>"Julliano",'descricao'=>"Diretor especializado em live-actions de anime ",'nacionalidade_id'=> 6],
            ['nome'=>"Muninz",'descricao'=>"Diretor especializado em live-actions de anime ",'nacionalidade_id'=> 6],
            ['nome'=>"Luan",'descricao'=>"Diretor especializado em live-actions de anime ",'nacionalidade_id'=> 8],


        );
    }
}
