<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('generos')->insert([
            ['id'=> 1,'nome'=>"Terror"],//1
            ['id'=> 2,'nome'=>"Romance"],//2
            ['id'=> 3,'nome'=>"Comédia"],//3
            ['id'=> 4,'nome'=>"Drama"],//4
            ['id'=> 5,'nome'=>"Ação"],//5
            ['id'=> 6,'nome'=>"Sci-fi"],//6
            ['id'=> 7,'nome'=>"Animado"],//7
            ['id'=> 8,'nome'=>"Pós-Apocalíptico"],//8
            ['id'=> 9,'nome'=>"Crime"],//9
            ['id'=> 10,'nome'=>"Aventura"],//10
            ['id'=> 11,'nome'=>"Mistério"],//11
            ['id'=> 12,'nome'=>"Super-Herói"],//12
            ['id'=> 13,'nome'=>"Noir"],//13
            ['id'=> 14,'nome'=>"Musical"],//14
            ['id'=> 15,'nome'=>"Histórico"],//15

        ]);
    }
}
