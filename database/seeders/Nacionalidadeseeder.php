<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Nacionalidadeseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    DB::table('nacionalidades')->insert(
    ['nome'=>"Brasileiro"],
    ['nome'=>"Estadunidense"],
    ['nome'=>"Canadense"],
    ['nome'=>"Portugues"],
    ['nome'=>"Japones"],
    );
    }
}
