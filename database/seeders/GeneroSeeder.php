<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GeneroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Db::table('generos')->insert(
            ['nome' => "Terror", 'id' => 1],
            ['nome' => "Ação"],
            ['nome' => "Comédia"],
            ['nome' => "Romance"],
            ['nome' => "Suspense"],
        );
}
}
