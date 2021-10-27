<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Respuestas extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answer')->insert([
            [
                'answer1' => 'a',
                'answer2' => 'a',
                'answer3' => 'a',
                'answer4' => 'a',
                'answer5' => 'a',
                'answer6' => 'a',
                'answer7' => 'a',
                'answer8' => 'a',
                'answer9' => 'a',
                'answer10' => 'a',
            ]
            
        ]);
    }
}
