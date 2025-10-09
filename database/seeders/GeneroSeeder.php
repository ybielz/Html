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
        DB::table('generos')->insert(
            ['nome'=>"Terror"],//1
            ['nome'=>"Romance"],//2
            ['nome'=>"Comédia"],//3
            ['nome'=>"Drama"],//4
            ['nome'=>"Ação"],//5
            ['nome'=>"Sci-fi"],//6
            ['nome'=>"Animado"],//7
            ['nome'=>"Pós-Apocalíptico"],//8
            ['nome'=>"Crime"],//9
            ['nome'=>"Aventura"],//10
            ['nome'=>"Mistério"],//11
            ['nome'=>"Super-Herói"],//12
            ['nome'=>"Noir"],//13
            ['nome'=>"Musical"],//14
            ['nome'=>"Histórico"],//15

        );
    }
}
