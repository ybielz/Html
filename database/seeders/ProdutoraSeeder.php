<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoraSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtoras')->insert([
            ['id'=> 1,'nome'=>"Warner Bros. Pictures"],
            ['id'=> 2,'nome'=>"Universal Pictures"],
            ['id'=> 3,'nome'=>"Walt Disney Pictures"],
            ['id'=> 4,'nome'=>"Paramount"],
            ['id'=> 5,'nome'=>"Columbia Pictures (Sony Pictures)"],
        ]);
    }
}
