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
        DB::table('atores')->insert([
            ['nome'=>"Carlos",'descricao'=>"Ator Nigeriano que estrelou no primeiro filme 'Gente Grande' junto com Adam Sandler, que elogiou muito bem o ator",'nacionalidade_id'=> 1],
            ['nome'=>"Muninz",'descricao'=>"Ator Tcheco renomado que teve participação importante na série 'O Mentalista' ",'nacionalidade_id'=> 2],
            ['nome'=>"Luan",'descricao'=>"Ator Sueco que atuou em velozes furiosos e bem falado nas mídias",'nacionalidade_id'=> 3],
            ['nome'=>"Rogério",'descricao'=>"Ator Norueguês  que em sua primeira aparição nas telas no filme 'Esse é meu Garoto' com o famoso Adam Sandler",'nacionalidade_id'=> 4],
            ['nome'=>"Pedro",'descricao'=>"Ator Brasileiro que dublou o Fred do filme 'Scooby-doo' ",'nacionalidade_id'=> 5],
       ]);
    }
}
