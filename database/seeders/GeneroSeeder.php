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
        ]);
    }
}
