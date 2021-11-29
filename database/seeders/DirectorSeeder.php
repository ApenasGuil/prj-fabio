<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DirectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('director')->insert([
            'id' => null,
            'name' => 'Denis Villeneuve'
        ]);

        DB::table('director')->insert([
            'id' => null,
            'name' => 'Bryan Singer'
        ]);

        DB::table('director')->insert([
            'id' => null,
            'name' => 'Richard Kelly'
        ]);
    }
}
