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
            ['nome'=>"Gente Grande 2", 'lancamento'=> "2013-08-16", 'duracao'=> "101", 'diretor_id' => 1, 'poster'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwMJBLwX9MSX_4DuPzsn4eiIUhNEs1_zwKFw&s", 'capa'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRwMJBLwX9MSX_4DuPzsn4eiIUhNEs1_zwKFw&s", 'produtora_id' => 1, 'nacionalidade_id'=> 1],
            ['nome'=>"Velozes e Furiosos", 'lancamento'=> "2003-04-12", 'duracao'=> "107", 'diretor_id' => 2, 'poster'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4ZLedRbaxAVP0QFh3MYRoXlXsIP6SLUpJkg&s", 'capa'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT4ZLedRbaxAVP0QFh3MYRoXlXsIP6SLUpJkg&s", 'produtora_id' => 2, 'nacionalidade_id'=> 2],
            ['nome'=>"Trem Bala", 'lancamento'=> "2022-08-06", 'duracao'=> "126", 'diretor_id' => 3, 'poster'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdSfKCoHio3HrOaTxpPOZ2yYlkTH8gw4uYwg&s", 'capa'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRdSfKCoHio3HrOaTxpPOZ2yYlkTH8gw4uYwg&s", 'produtora_id' => 3,'nacionalidade_id'=> 3],
            ['nome'=>"Vingadores: Ultimato", 'lancamento'=> "2019-04-25", 'duracao'=> "180", 'diretor_id' => 4, 'poster'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY0sMLa0hrMPbiS3efixfwQts50SqAKMH_5w&s", 'capa'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQY0sMLa0hrMPbiS3efixfwQts50SqAKMH_5w&s", 'produtora_id' => 4, 'nacionalidade_id'=>4 ],
            ['nome'=>"Truque De Mestre", 'lancamento'=> "2013-06-05", 'duracao'=> "115", 'diretor_id' => 5, 'poster'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBaA6ma2pS6hIetYdfgs62BwxlI_V6rYroeQ&s", 'capa'=> "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSBaA6ma2pS6hIetYdfgs62BwxlI_V6rYroeQ&s", 'produtora_id' => 5, 'nacionalidade_id'=> 5],

        ]);
    }
}
