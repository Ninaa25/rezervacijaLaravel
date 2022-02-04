<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Gost;
use App\Models\Sto;


class RezervacijaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'datumRezervacije' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'gost_id' => Gost::factory(),
            'tipRezervacije' => $this->faker->randomElement($array = array('dorucak', 'rucak', 'vecera')),
            'sto_id' => Sto::factory(),
        ];
    }
}
