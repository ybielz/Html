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
        DB::table('filmes')->insert([
            ['nome'=>"Gente Grande 2", 'lancamento'=> "2013-08-16", 'duracao'=> "101", 'diretor_id' => 1, 'poster'=> "https://m.media-amazon.com/images/I/71Jp0M+eGIL._AC_SY679_.jpg", 'capa'=> "https://i.imgur.com/G7q4p5K.jpeg", 'produtora_id' => 1, 'nacionalidade_id'=> 1],
            ['nome'=>"Velozes e Furiosos", 'lancamento'=> "2003-04-12", 'duracao'=> "107", 'diretor_id' => 2, 'poster'=> "https://m.media-amazon.com/images/I/71eJ1Xr3m-L._AC_SY679_.jpg", 'capa'=> "https://i.imgur.com/x8MLzUR.jpeg", 'produtora_id' => 2, 'nacionalidade_id'=> 2],
            ['nome'=>"Pedro", 'lancamento'=> "2025-06-10", 'duracao'=> "120", 'diretor_id' => 3, 'poster'=> "https://i.imgur.com/tqFpAfl.jpeg", 'capa'=> "https://i.imgur.com/CLTrE1g.jpeg", 'produtora_id' => 3,'nacionalidade_id'=> 3],
            ['nome'=>"Vingadores: Ultimato", 'lancamento'=> "2019-04-25", 'duracao'=> "180", 'diretor_id' => 4, 'poster'=> "https://m.media-amazon.com/images/I/81ai6zx6eXL._AC_SY679_.jpg", 'capa'=> "https://i.imgur.com/gAQdY7C.jpeg", 'produtora_id' => 4, 'nacionalidade_id'=>4 ],
            ['nome'=>"Truque De Mestre", 'lancamento'=> "2013-06-05", 'duracao'=> "115", 'diretor_id' => 5, 'poster'=> "https://m.media-amazon.com/images/I/71iCmy4S6-L._AC_SY679_.jpg", 'capa'=> "https://i.imgur.com/UZG7zLJ.jpeg", 'produtora_id' => 5, 'nacionalidade_id'=> 5],

        ]);
    }
}
