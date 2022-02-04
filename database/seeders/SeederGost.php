<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gost;

class SeederGost extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gost::factory()->count(20)->create();
    }
}
