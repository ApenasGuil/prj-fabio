<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movie')->insert([
            'id' => null,
            'director_id' => 3,
            'language_id' => 1,
            'genre_id' => 1,
            'title' => 'Donnie Darko',
            'storyline' => 'Donnie é um jovem excêntrico que despreza a grande maioria de seus colegas de escola. Ele tem visões, em especial de Frank, um coelho gigante que só ele consegue ver e que o encoraja a fazer brincadeiras humilhantes com quem o cerca.'
        ]);

        DB::table('movie')->insert([
            'id' => null,
            'director_id' => 1,
            'language_id' => 1,
            'genre_id' => 1,
            'country_id' => 1,
            'title' => 'Duna',
            'storyline' => 'Paul Atreides é um jovem brilhante, dono de um destino além de sua compreensão. Ele deve viajar para o planeta mais perigoso do universo para garantir o futuro de seu povo.'
        ]);

        DB::table('movie')->insert([
            'id' => null,
            'director_id' => 1,
            'language_id' => 1,
            'genre_id' => 1,
            'country_id' => 1,
            'title' => 'Os Suspeitos',
            'storyline' => 'Depois que sua filha de seis anos e uma amiga dela são sequestradas, Keller Dove, um carpinteiro de Boston, enfrenta o departamento de polícia e o jovem detetive encarregado do caso para fazer justiça com as próprias mãos.'
        ]);

        DB::table('movie')->insert([
            'id' => null,
            'director_id' => 2,
            'language_id' => 1,
            'genre_id' => 1,
            'country_id' => 1,
            'title' => 'X-Men',
            'storyline' => 'Eles são filhos do átomo superior, o próximo elo na corrente da evolução. Cada um nasceu com uma mutação genética rara, que na puberdade se manifestou em poderes extraordinários. Em um mundo cheio de ódio e preconceito, eles são temidos por aqueles que não podem aceitar suas diferenças.'
        ]);

        DB::table('movie')->insert([
            'id' => null,
            'director_id' => NULL,
            'language_id' => 2,
            'genre_id' => 2,
            'country_id' => 2,
            'title' => 'RAW',
            'storyline' => 'Justine é uma jovem tímida e vegetariana, caloura na mesma faculdade de veterinária em que estuda sua irmã, Alexia. Durante o trote, a menina é forçada a comer carne animal pela primeira vez e a ação provoca mudanças extremas em sua vida.'
        ]);
    }
}
