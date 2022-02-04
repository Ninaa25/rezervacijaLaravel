<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class StoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brojMesta' => $this->faker->numberBetween($min = 1, $max = 50),
            'tip' => $this->faker->randomElement($array = array('basta', 'unutra')),
        ];
    }
}
