<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\SeederGost;
use Database\Seeders\SeederRezervacija;
use Database\Seeders\SeederSto;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $gostS = new SeederGost();
        $rezervacijaS = new SeederRezervacija();
        $stoS = new SeederSto();

        $gostS->run();
        $rezervacijaS->run();
        $stoS->run();
    }
}
