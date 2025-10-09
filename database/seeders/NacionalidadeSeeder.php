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
        DB::table('nacionalidades')->insert([
            ['id'=> 1,'nome'=> "Nigeriano"], //1
            ['id'=> 2,'nome'=> "Inglês"], //2
            ['id'=> 3,'nome'=> "Coreano"],//3
            ['id'=> 4,'nome'=> "Japonês"],//4
            ['id'=> 5,'nome'=> "Nórdico"],//5
        ]);
    }
}
