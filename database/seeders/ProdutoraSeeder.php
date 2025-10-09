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
        DB::table('produtoras')->insert(
            ['nome'=>"Warner Bros. Pictures"],
            ['nome'=>"Universal Pictures"],
            ['nome'=>"Walt Disney Pictures"],
            ['nome'=>"Paramount"],
            ['nome'=>"Columbia Pictures (Sony Pictures)"],
            ['nome'=>"Lionsgate"],
            ['nome'=>"DreamWorks Pictures"],
            ['nome'=>"A24"],
        );
    }
}
