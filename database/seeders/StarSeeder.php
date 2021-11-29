<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('star')->insert([
            'id' => null,
            'name' => 'Jake Gyllenhaal'
        ]);

        DB::table('star')->insert([
            'id' => null,
            'name' => 'Hugh Jackman'
        ]);

        DB::table('star')->insert([
            'id' => null,
            'name' => 'Timothée Chalamet'
        ]);
    }
}
