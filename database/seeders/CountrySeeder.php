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
            'name' => 'Anne Hathaway'
        ]);

        DB::table('movie')->insert([
            'id' => null,
            'title' => 'Donnie Darko',
            'storyline' => 'Donnie é um jovem excêntrico que despreza a grande maioria de seus colegas de escola. Ele tem visões, em especial de Frank, um coelho gigante que só ele consegue ver e que o encoraja a fazer brincadeiras humilhantes com quem o cerca.'
        ]);

        DB::table('movie')->insert([
            'id' => null,
            'title' => 'Interestellar',
            'storyline' => 'As reservas naturais da Terra estão chegando ao fim e um grupo de astronautas recebe a missão de verificar possíveis planetas para receberem a população mundial, possibilitando a continuação da espécie.'
        ]);

        DB::table('movie')->insert([
            'id' => null,
            'title' => 'Os Suspeitos',
            'storyline' => 'Depois que sua filha de seis anos e uma amiga dela são sequestradas, Keller Dove, um carpinteiro de Boston, enfrenta o departamento de polícia e o jovem detetive encarregado do caso para fazer justiça com as próprias mãos.'
        ]);

        DB::table('movie')->insert([
            'id' => null,
            'title' => 'X-Men',
            'storyline' => 'Eles são filhos do átomo superior, o próximo elo na corrente da evolução. Cada um nasceu com uma mutação genética rara, que na puberdade se manifestou em poderes extraordinários. Em um mundo cheio de ódio e preconceito, eles são temidos por aqueles que não podem aceitar suas diferenças.'
        ]);
    }
}
