<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilmeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmes')->insert(
            ['nome'=>"Gente Grande 2", 'lancamento'=> "16-08-2013", 'duracao'=> "1h_41m", 'diretor_id' => 2],
            ['nome'=>"Velozes e Furiosos", 'lancamento'=> "12-04-2003", 'duracao'=> "1h_47m", 'diretor_id' => 7],
            ['nome'=>"Pedro", 'lancamento'=> "10-06-2025", 'duracao'=> "2h", 'diretor_id' => 5],
            ['nome'=>"Vingadores: Ultimato", 'lancamento'=> "25-04-2019", 'duracao'=> "3h", 'diretor_id' => 1],
            ['nome'=>"Truque De Mestre", 'lancamento'=> "05-06-2013", 'duracao'=> "1h_55m", 'diretor_id' => 2],
        );
    }
}
