<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            QuestionSeeder::class,
            LeadSeeder::class,
            Lead_QuestionSeeder::class,
            ErrorCodeSeeder::class,
            ErrorCode_QuestionSeeder::class,
            BsTextSeeder::class
        ]);
    }
}
