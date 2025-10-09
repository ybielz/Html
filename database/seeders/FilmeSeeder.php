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
            ['nome'=>"Juninho", 'lancamento'=> "aa-mm-ss", 'duracao'=> "1h_60m", 'diretor_id' => 1],
            ['nome'=>"Juninho", 'lancamento'=> "aa-mm-ss", 'duracao'=> "1h_60m", 'diretor_id' => 1],
            ['nome'=>"Juninho", 'lancamento'=> "aa-mm-ss", 'duracao'=> "1h_60m", 'diretor_id' => 1],
            ['nome'=>"Juninho", 'lancamento'=> "aa-mm-ss", 'duracao'=> "1h_60m", 'diretor_id' => 1],
            ['nome'=>"Juninho", 'lancamento'=> "aa-mm-ss", 'duracao'=> "1h_60m", 'diretor_id' => 1],
            ['nome'=>"Juninho", 'lancamento'=> "aa-mm-ss", 'duracao'=> "1h_60m", 'diretor_id' => 1],
            ['nome'=>"Juninho", 'lancamento'=> "aa-mm-ss", 'duracao'=> "1h_60m", 'diretor_id' => 1],
            ['nome'=>"Juninho", 'lancamento'=> "aa-mm-ss", 'duracao'=> "1h_60m", 'diretor_id' => 1],
            ['nome'=>"Juninho", 'lancamento'=> "aa-mm-ss", 'duracao'=> "1h_60m", 'diretor_id' => 1],
            ['nome'=>"Juninho", 'lancamento'=> "aa-mm-ss", 'duracao'=> "1h_60m", 'diretor_id' => 1],
            ['nome'=>"Juninho", 'lancamento'=> "aa-mm-ss", 'duracao'=> "1h_60m", 'diretor_id' => 1],
        );
    }
}
