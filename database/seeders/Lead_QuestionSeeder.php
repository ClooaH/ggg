<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Lead_QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Question 1
        DB::table('lead_question')->insert([
            'lead_id' => '1',
            'question_id' => '1'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '2',
            'question_id' => '1'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '3',
            'question_id' => '1'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '4',
            'question_id' => '1'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '5',
            'question_id' => '1'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '6',
            'question_id' => '1'
        ]);

        // Question 2
        DB::table('lead_question')->insert([
            'lead_id' => '7',
            'question_id' => '2'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '8',
            'question_id' => '2'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '9',
            'question_id' => '2'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '10',
            'question_id' => '2'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '11',
            'question_id' => '2'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '12',
            'question_id' => '2'
        ]);

        // Question 3
        DB::table('lead_question')->insert([
            'lead_id' => '13',
            'question_id' => '3'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '14',
            'question_id' => '3'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '15',
            'question_id' => '3'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '16',
            'question_id' => '3'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '17',
            'question_id' => '3'
        ]);

        // Question 4
        DB::table('lead_question')->insert([
            'lead_id' => '18',
            'question_id' => '4'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '19',
            'question_id' => '4'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '20',
            'question_id' => '4'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '21',
            'question_id' => '4'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '22',
            'question_id' => '4'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '23',
            'question_id' => '4'
        ]);

        // Question 5
        DB::table('lead_question')->insert([
            'lead_id' => '24',
            'question_id' => '5'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '25',
            'question_id' => '5'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '26',
            'question_id' => '5'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '27',
            'question_id' => '5'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '28',
            'question_id' => '5'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '29',
            'question_id' => '5'
        ]);

        // Question 6
        DB::table('lead_question')->insert([
            'lead_id' => '30',
            'question_id' => '6'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '31',
            'question_id' => '6'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '32',
            'question_id' => '6'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '33',
            'question_id' => '6'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '34',
            'question_id' => '6'
        ]);
        DB::table('lead_question')->insert([
            'lead_id' => '35',
            'question_id' => '6'
        ]);
    }
}
