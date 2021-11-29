<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('language')->insert([
            'id' => null,
            'language' => 'Inglês'
        ]);

        DB::table('language')->insert([
            'id' => null,
            'language' => 'Francês'
        ]);
    }
}