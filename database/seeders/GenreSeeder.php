<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre')->insert([
            'id' => null,
            'genre' => 'Ficção'
        ]);

        DB::table('genre')->insert([
            'id' => null,
            'genre' => 'Suspense'
        ]);
    }
}
