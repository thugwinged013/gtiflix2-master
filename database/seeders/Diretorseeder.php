<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Diretorseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('diretores')->insert(
            ['nome'=>"Steven Spielberg"],
            ['nome'=>"Christopher Nolan"],
            ['nome'=>"Quentin Tarantino"],
            ['nome'=>"James Cameron"],
            ['nome'=>"Dario Argento"],
        );
    }
}
