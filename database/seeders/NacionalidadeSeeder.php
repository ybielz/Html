<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NacionalidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nacionalidades')->insert(
            ['nome'=> "Nigeriano" ], //1
            ['nome'=> "Inglês" ], //2
            ['nome'=> "Coreano" ],//3
            ['nome'=> "Japonês" ],//4
            ['nome'=> "Nórdico" ],//5
            ['nome'=> "Africano" ],//6
            ['nome'=> "Espanhol" ],//7
            ['nome'=> "Sueco" ],//8
            ['nome'=> "Alemão" ],//9
            ['nome'=> "Alemão" ],//10
            ['nome'=> "Alemão" ],//11
            ['nome'=> "Alemão" ],//12
            ['nome'=> "Alemão" ],//13
            ['nome'=> "Alemão" ],//14
            ['nome'=> "Alemão" ],//15


        );
    }
}
