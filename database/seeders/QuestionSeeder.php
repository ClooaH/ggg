<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //question1
        DB::table('questions')->insert([
            'question' => 'Enter password:',
            'answer' => '132',
        ]);
        //question2
        DB::table('questions')->insert([
            'question' => 'För att ta dig vidare måste du kolla noggrant på ett monument i närheten av stadskyrkan. Vi söker Namn och år, på fråga nummer två. Kan ni hjälpa oss? Skriv in svaret:',
            'answer' => 'duncker1774',
        ]);
        //question3
        DB::table('questions')->insert([
            'question' => 'Vilket djur finns i skolparken? Enter Password:',
            'answer' => 'sköldpaddor',
        ]);
        //question4
        DB::table('questions')->insert([
            'question' => 'Bredvid Olearys skylten så finns det en till skylt som säger The No1 Bowling.',
            'answer' => 'ees',
        ]);
        //question5
        DB::table('questions')->insert([
            'question' => 'Vi vill att en station tas fram efter 5an har åkt 6 stationer från Vasaplan till Tegelbruksvägen.',
            'answer' => 'universum',
        ]);
        //question6
        DB::table('questions')->insert([
            'question' => 'Saknade Affärer!',
            'answer' => 'bruh',
        ]);
    }
}
