<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ArtigoSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('artigos')->insert([
            'titulo' => 'Texto 1',
            'descricao' => 'meu primeiro teste',
        ]);

        DB::table('artigos')->insert([
            'titulo' => 'Texto 2',
            'descricao' => 'segundo teste',
        ]);
    }
}
