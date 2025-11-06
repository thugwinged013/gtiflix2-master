<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Produtoraseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('Produtoras')->insert(
            ['nome'=>"Walt Disney"],
            ['nome'=>"Universal"],
            ['nome'=>"Warner Bros"],
            ['nome'=>"Sony"],
            ['nome'=>"Paramount"],
        );
    }
}
