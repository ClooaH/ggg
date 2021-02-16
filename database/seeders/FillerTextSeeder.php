<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FillerTextSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('fillerText')->insert([
            'body' => "Setting up encryption ...\r\nDownloading Viruses (2.4.3virus3.0) ...\r\nProcessing this bad code and shitty ass game ...\r\n"
        ]);
        DB::table('fillerText')->insert([
            'body' => "Unpacking some packages that needs unpacking ...\r\nWhat is even happening? ...\r\nIs someone even reading this?? ...\r\n"
        ]);
        DB::table('fillerText')->insert([
            'body' => "Preparing some files ...\r\nGet: supervirus.rich.ru/updates/nti [3.57 Tb]\r\n"
        ]);
        DB::table('fillerText')->insert([
            'body' => "The following passwords are not correct:\r\nOlles, ntig, bimon, skribbl, clean code\r\n"
        ]);
        DB::table('fillerText')->insert([
            'body' => "Calculating math to waste some time ...\r\nReading a list of groceries ...\r\n"
        ]);
    }
}
