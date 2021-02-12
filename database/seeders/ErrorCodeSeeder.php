<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ErrorCodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('error_codes')->insert([
            'errorCode' => 'notAnInteger',
            'explanation' => 'svaret är ett tal',
        ]);
        
        DB::table('error_codes')->insert([
            'errorCode' => 'tooShort',
            'explanation' => 'kortare än svaret',
        ]);
        
        DB::table('error_codes')->insert([
            'errorCode' => 'tooLong',
            'explanation' => 'längre än svaret',
        ]);

        DB::table('error_codes')->insert([
            'errorCode' => 'someExist',
            'explanation' => 'innehåller vissa tecken från svaret',
        ]);
        
        DB::table('error_codes')->insert([
            'errorCode' => 'allExist',
            'explanation' => 'innehåller alla tecken från svaret',
        ]);

        DB::table('error_codes')->insert([
            'errorCode' => 'specialChars',
            'explanation' => 'speciella tecken är inte tillåtna',
        ]);

        DB::table('error_codes')->insert([
            'errorCode' => 'someRight',
            'explanation' => 'vissa av tecknena stämmer, möjligtvis fel ordning',
        ]);

        DB::table('error_codes')->insert([
            'errorCode' => 'allRightButOrder',
            'explanation' => 'alla tecken stämmer med svaret men har fel ordning',
        ]);

        DB::table('error_codes')->insert([
            'errorCode' => 'someRight',
            'explanation' => 'vissa av tecknena stämmer, möjligtvis fel ordning',
        ]);

        DB::table('error_codes')->insert([
            'errorCode' => 'allRightButOrder',
            'explanation' => 'alla tecken stämmer med svaret men har fel ordning',
        ]);
    }
}
