<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class image_tagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'=>null,
            'image_id'=>null,
            'tag_id'=>null,
            'added'=>true,
            'last'=>true,
            'user_last'=>true
        ];
    }
}
