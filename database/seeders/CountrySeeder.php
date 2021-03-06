<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country')->insert([
            'id' => null,
            'country' => 'Estados Unidos'
        ]);

        DB::table('country')->insert([
            'id' => null,
            'country' => 'França'
        ]);

        DB::table('country')->insert([
            'id' => null,
            'country' => 'Brasil'
        ]);
    }
}
