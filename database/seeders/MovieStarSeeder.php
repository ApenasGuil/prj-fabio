<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieStarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie_star')->insert([
            'id' => null,
            'movie_id' => 1,
            'star_id' => 1
        ]);

        DB::table('movie_star')->insert([
            'id' => null,
            'movie_id' => 2,
            'star_id' => 3
        ]);

        DB::table('movie_star')->insert([
            'id' => null,
            'movie_id' => 3,
            'star_id' => 1
        ]);

        DB::table('movie_star')->insert([
            'id' => null,
            'movie_id' => 3,
            'star_id' => 2
        ]);

        DB::table('movie_star')->insert([
            'id' => null,
            'movie_id' => 4,
            'star_id' => 2
        ]);
    }
}
