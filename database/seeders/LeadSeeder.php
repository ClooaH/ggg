<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LeadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Question 1
        DB::table('leads')->insert([
            'lead' => 'Årstidernas Park'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Rosa Träd'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Varm Badhus'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Addition'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Grenar'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Årtal'
        ]);

        //Question 2
        DB::table('leads')->insert([
            'lead' => 'Svärdet i stenen'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Stadskyrkan'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Efternamn'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Staty'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Födelse'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Efternamn+Födelse'
        ]);

        //Question 3
        DB::table('leads')->insert([
            'lead' => 'Djur'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Skolparken'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Grön'
        ]);
        DB::table('leads')->insert([
            'lead' => '2 Stycken'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Kanten'
        ]);

        //Question 4
        DB::table('leads')->insert([
            'lead' => 'Utopia'
        ]);
        DB::table('leads')->insert([
            'lead' => 'The No1 Bowling'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Omvandling'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Antal bokstäver per ord'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Matcha siffror med respektive bokstav'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Svar: 3 bokstäver'
        ]);

        //Question 5
        DB::table('leads')->insert([
            'lead' => 'Busslinje 5'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Från din position'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Till Tegelbruksvägen'
        ]);
        DB::table('leads')->insert([
            'lead' => '6 Hållplatser bort'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Hållplatsens namn'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Vasaplan'
        ]);

        //Question 6
        DB::table('leads')->insert([
            'lead' => 'Blå'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Rutor'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Rutor'
        ]);
        DB::table('leads')->insert([
            'lead' => 'Affärer'
        ]);
        DB::table('leads')->insert([
            'lead' => 'MVG'
        ]);
        DB::table('leads')->insert([
            'lead' => 'RenmarksTorget/Kungsgatan'
        ]);
    }
}
