<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ErrorCode_QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Question 1
        DB::table('error_code_question')->insert([
            'error_code_id' => '1',
            'question_id' => '1'
        ]);
        DB::table('error_code_question')->insert([
            'error_code_id' => '2',
            'question_id' => '1'
        ]);
        DB::table('error_code_question')->insert([
            'error_code_id' => '3',
            'question_id' => '2'
        ]);
        DB::table('error_code_question')->insert([
            'error_code_id' => '4',
            'question_id' => '2'
        ]);
        DB::table('error_code_question')->insert([
            'error_code_id' => '5',
            'question_id' => '3'
        ]);
        DB::table('error_code_question')->insert([
            'error_code_id' => '6',
            'question_id' => '3'
        ]);

        // Question 2
        DB::table('error_code_question')->insert([
            'error_code_id' => '7',
            'question_id' => '4'
        ]);
        DB::table('error_code_question')->insert([
            'error_code_id' => '8',
            'question_id' => '4'
        ]);
        DB::table('error_code_question')->insert([
            'error_code_id' => '9',
            'question_id' => '5'
        ]);
        DB::table('error_code_question')->insert([
            'error_code_id' => '10',
            'question_id' => '5'
        ]);
    }
}
