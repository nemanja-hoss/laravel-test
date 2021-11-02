<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class imageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url'=>$this->faker->unique()->imageUrl(rand(299,699),rand(299,699),'jpg')
        ];
    }
}
