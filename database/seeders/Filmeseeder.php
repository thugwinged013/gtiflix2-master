<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Filmeseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('filmes')->insert(
        [
            
            ['nome'=>"Spider-Man"],
            ['nome'=>"O Lobo de Wall street"],
            ['nome'=>"John Wick"],
            ['nome'=>"O Último Samurai"],
        ]
        );
         DB::table('filmes')->insert(
         [
             'nome'=>"Mad Max",
             'descricao' => "ultimo homem da areia",
         ]);
    }
}
