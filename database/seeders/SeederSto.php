<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Sto;

class SeederSto extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sto::factory()->count(35)->create();
    }
}
