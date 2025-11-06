<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AtoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('atores')->insert(
            ['nome' => "Wagner Moura", 'descricao' => "Ator foda barsileiro",
            'nacionalidade_id' => 1],
            ['nome' => "Megan fox", 'descricao' => "Muito Lembrada",
            'nacionalidade_id' => 2], 
        );
    }
}
